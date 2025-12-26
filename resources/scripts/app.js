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
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
