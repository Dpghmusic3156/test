import domReady from '@roots/sage/client/dom-ready';
import Swiper from 'swiper/bundle';
import AOS from 'aos';
import Alpine from 'alpinejs';
import Zoomist from 'zoomist';

window.Alpine = Alpine

Alpine.start()
/**
 * Application entrypoint
 */
domReady(async () => {
  // Khởi tạo Swiper
  const swiper = new Swiper('.swiper', {
    loop: true,
    autoplay: {
      delay: 5000,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  // Khởi tạo AOS
  AOS.init({
    duration: 400,
    easing: 'ease',
    delay: 0,
    offset: 120,
    once: false,
  });

  // Khởi tạo Zoomist cho các ảnh benefit
  const zoomImages = document.querySelectorAll('.zoom-image');

  zoomImages.forEach(img => {
    img.style.cursor = 'zoom-in';

    img.addEventListener('click', () => {
      // Tạo modal zoom
      const modal = document.createElement('div');
      modal.className = 'zoom-modal';
      modal.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, 0.9);
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: zoom-out;
      `;

      const zoomContainer = document.createElement('div');
      zoomContainer.className = 'zoomist-container';
      zoomContainer.style.cssText = `
        width: 90vw;
        height: 90vh;
        max-width: 1200px;
        max-height: 900px;
      `;

      const zoomWrapper = document.createElement('div');
      zoomWrapper.className = 'zoomist-wrapper';

      const zoomImage = document.createElement('div');
      zoomImage.className = 'zoomist-image';

      const clonedImg = img.cloneNode(true);
      clonedImg.style.cursor = 'grab';

      zoomImage.appendChild(clonedImg);
      zoomWrapper.appendChild(zoomImage);
      zoomContainer.appendChild(zoomWrapper);
      modal.appendChild(zoomContainer);
      document.body.appendChild(modal);

      // Initialize Zoomist
      const zoomist = new Zoomist(zoomContainer, {
        maxScale: 4,
        bounds: true,
        slider: false,
        zoomer: false,
      });

      // Close on outside click
      modal.addEventListener('click', (e) => {
        if (e.target === modal || e.target.classList.contains('zoomist-wrapper')) {
          document.body.removeChild(modal);
          zoomist.destroy();
        }
      });

      // Close on ESC key
      const handleEscape = (e) => {
        if (e.key === 'Escape') {
          document.body.removeChild(modal);
          zoomist.destroy();
          document.removeEventListener('keydown', handleEscape);
        }
      };
      document.addEventListener('keydown', handleEscape);
    });
  });
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { ScrollSmoother } from 'gsap/ScrollSmoother';
import { ScrollToPlugin } from 'gsap/ScrollToPlugin';

gsap.registerPlugin(ScrollTrigger, ScrollSmoother, ScrollToPlugin);



// Enforce scroll to top on reload
if ('scrollRestoration' in history) {
  history.scrollRestoration = 'manual';
}
window.scrollTo(0, 0);

window.addEventListener('beforeunload', () => {
  window.scrollTo(0, 0);
});

// Initialize ScrollSmoother if wrapper exists (skip on gioi-thieu page)
const smoothWrapper = document.getElementById('smooth-wrapper');
const isGioiThieuPage = document.body.className.includes('gioi-thieu');

if (smoothWrapper && !isGioiThieuPage) {
  ScrollSmoother.create({
    wrapper: '#smooth-wrapper',
    content: '#smooth-content',
    smooth: 0.8,
    effects: true
  });
}

// Custom Scroll Snap Logic for pages with container-block sections
// This runs independently of ScrollSmoother for both front-page and gioi-thieu
const blocks = document.querySelectorAll('.container-block');

if (blocks.length > 0) {
  console.log('[ScrollSnap] Found', blocks.length, 'container-block elements. Initializing scroll snap...');

  let currentIndex = 0;
  let accumulatedDelta = 0;
  const scrollThreshold = 300;
  let resetDeltaTimeout;

  function scrollToBlock(index) {
    if (index < 0 || index >= blocks.length) return;

    accumulatedDelta = 0;

    const block = blocks[index];
    const blockHeight = block.offsetHeight;
    const blockTop = block.getBoundingClientRect().top + window.scrollY;

    // Get header height (assuming fixed header)
    const header = document.querySelector('header') || document.querySelector('.site-header') || document.querySelector('#masthead');
    const headerHeight = header ? header.offsetHeight : 0;

    // Calculate available viewport height (minus header)
    const viewportHeight = window.innerHeight - headerHeight;

    // Calculate scroll position to center the block in the available viewport
    // If block is taller than viewport, scroll to top of block with header offset
    let scrollPosition;
    if (blockHeight >= viewportHeight) {
      scrollPosition = blockTop - headerHeight;
    } else {
      // Center the block in the available viewport
      scrollPosition = blockTop - headerHeight - (viewportHeight - blockHeight) / 2;
    }

    gsap.to(window, {
      scrollTo: {
        y: Math.max(0, scrollPosition),
        autoKill: true
      },
      duration: 0.8,
      ease: "power2.out",
      overwrite: true
    });
  }

  function handleScroll(event) {
    if (window.innerWidth < 1024) return;
    if (document.body.classList.contains('overflow-hidden')) return;

    event.preventDefault();

    clearTimeout(resetDeltaTimeout);
    resetDeltaTimeout = setTimeout(() => {
      accumulatedDelta = 0;
    }, 100);

    accumulatedDelta += event.deltaY;

    if (Math.abs(accumulatedDelta) < scrollThreshold) return;

    if (accumulatedDelta > 0) {
      if (currentIndex < blocks.length - 1) {
        currentIndex++;
        scrollToBlock(currentIndex);
      }
    } else if (accumulatedDelta < 0) {
      if (currentIndex > 0) {
        currentIndex--;
        scrollToBlock(currentIndex);
      }
    }
    accumulatedDelta = 0;
  }

  window.addEventListener('wheel', handleScroll, { passive: false });

  blocks.forEach((block, i) => {
    ScrollTrigger.create({
      trigger: block,
      start: "top center",
      end: "bottom center",
      onEnter: () => currentIndex = i,
      onEnterBack: () => currentIndex = i
    });
  });
}

if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
