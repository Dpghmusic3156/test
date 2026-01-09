import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  safelist: [
    'prose',
    'prose-lg',
    'prose-primary',
    'max-w-none',
  ],
  theme: {
    extend: {
      colors: {
        // Brand Color System - Teal/Cyan/Amber Theme
        'primary': {
          50: '#f0fdfa',
          100: '#ccfbf1',
          200: '#99f6e4',
          300: '#5eead4',
          400: '#2dd4bf',
          500: '#14b8a6',  // Main Primary (Teal)
          600: '#0d9488',
          700: '#0f766e',
          800: '#115e59',
          900: '#134e4a',
          950: '#042f2e',
        },
        'secondary': {
          50: '#ecfeff',
          100: '#cffafe',
          200: '#a5f3fc',
          300: '#67e8f9',
          400: '#22d3ee',
          500: '#06b6d4',  // Main Secondary (Cyan)
          600: '#0891b2',
          700: '#0e7490',
          800: '#155e75',
          900: '#164e63',
          950: '#083344',
        },
        'accent': {
          50: '#fffbeb',
          100: '#fef3c7',
          200: '#fde68a',
          300: '#fcd34d',
          400: '#fbbf24',
          500: '#f59e0b',  // Main Accent (Amber)
          600: '#d97706',
          700: '#b45309',
          800: '#92400e',
          900: '#78350f',
          950: '#451a03',
        },
        // Legacy colors (keep for backward compatibility)
        'primary1': {
          50: '#f0fdf4',
          100: '#dcfce7',
          200: '#bbf7d0',
          300: '#4ade80',
          400: '#65c37b',
          500: '#2e8543',
          600: '#257038',
          700: '#1d5a2d',
          800: '#164522',
          900: '#0f3619',
        },
        'dental-blue': {
          50: '#f0f9ff',
          100: '#e0f2fe',
          200: '#bae6fd',
          300: '#7dd3fc',
          400: '#38bdf8',
          500: '#03a9f4',
          600: '#0284c7',
          700: '#0369a1',
          800: '#075985',
          900: '#0c4a6e',
        },
        'pmlab': {
          primary1: '#ffd146',
          primary2: '#14949E',
        },
        'skype': {
          bg: '#15ace5',
        },
      },
      animation: {
        float: 'float 15s infinite ease-in-out',
        pulse: 'pulse 2s infinite',
        'text-gradient': 'text-gradient 3s linear infinite',
        'slide-in': 'slide-in 0.5s ease-out forwards',
      },
      keyframes: {
        float: {
          '0%, 100%': { transform: 'translateY(0) rotate(0deg)' },
          '50%': { transform: 'translateY(-20px) rotate(5deg)' },
        },
        pulse: {
          '0%, 100%': { opacity: '1' },
          '50%': { opacity: '0.5' },
        },
        'text-gradient': {
          '0%': { 'background-position': '0% 50%' },
          '50%': { 'background-position': '100% 50%' },
          '100%': { 'background-position': '0% 50%' },
        },
        'slide-in': {
          '0%': { transform: 'translateY(20px)', opacity: '0' },
          '100%': { transform: 'translateY(0)', opacity: '1' },
        },
      },
      typography: (theme) => ({
        DEFAULT: {
          css: {
            '--tw-prose-body': theme('colors.gray.700'),
            '--tw-prose-headings': theme('colors.gray.900'),
            '--tw-prose-links': theme('colors.primary.600'),
            '--tw-prose-bold': theme('colors.gray.900'),
            '--tw-prose-code': theme('colors.primary.700'),
            '--tw-prose-pre-bg': theme('colors.gray.50'),
            '--tw-prose-pre-code': theme('colors.gray.800'),

            // Base styles
            fontSize: '1.0625rem',
            lineHeight: '1.75',
            color: 'var(--tw-prose-body)',
            maxWidth: 'none',

            // Headings
            h1: {
              fontSize: '2.25rem',
              fontWeight: '800',
              lineHeight: '1.2',
              marginBottom: '2rem',
              marginTop: '0',
              color: 'var(--tw-prose-headings)',
              paddingBottom: '0.75rem',
              borderBottom: `3px solid ${theme('colors.primary.500')}`,
            },
            h2: {
              fontSize: '1.875rem',
              fontWeight: '700',
              lineHeight: '1.3',
              marginTop: '2.5rem',
              marginBottom: '1.25rem',
              color: 'var(--tw-prose-headings)',
              paddingLeft: '1rem',
              borderLeft: `4px solid ${theme('colors.primary.500')}`,
            },
            h3: {
              fontSize: '1.5rem',
              fontWeight: '600',
              lineHeight: '1.4',
              marginTop: '2rem',
              marginBottom: '1rem',
              color: 'var(--tw-prose-headings)',
            },
            h4: {
              fontSize: '1.25rem',
              fontWeight: '600',
              marginTop: '1.75rem',
              marginBottom: '0.75rem',
              color: theme('colors.gray.800'),
            },

            // Paragraphs
            p: {
              marginTop: '1.25rem',
              marginBottom: '1.25rem',
            },

            // Links
            a: {
              color: 'var(--tw-prose-links)',
              textDecoration: 'none',
              fontWeight: '500',
              borderBottom: `2px solid ${theme('colors.primary.300')}`,
              transition: 'all 0.2s',
              '&:hover': {
                color: theme('colors.primary.700'),
                borderBottomColor: theme('colors.primary.600'),
              },
            },

            // Strong/Bold
            strong: {
              color: 'var(--tw-prose-bold)',
              fontWeight: '700',
            },

            // Lists
            ul: {
              marginTop: '1.25rem',
              marginBottom: '1.25rem',
              paddingLeft: '1.625rem',
            },
            ol: {
              marginTop: '1.25rem',
              marginBottom: '1.25rem',
              paddingLeft: '1.625rem',
            },
            li: {
              marginTop: '0.5rem',
              marginBottom: '0.5rem',
            },
            'ul > li': {
              paddingLeft: '0.5rem',
              '&::marker': {
                color: theme('colors.primary.500'),
              },
            },
            'ol > li': {
              paddingLeft: '0.5rem',
              '&::marker': {
                color: theme('colors.primary.600'),
                fontWeight: '600',
              },
            },

            // Code blocks
            code: {
              color: 'var(--tw-prose-code)',
              fontWeight: '600',
              fontSize: '0.875em',
              backgroundColor: theme('colors.primary.50'),
              padding: '0.25rem 0.5rem',
              borderRadius: '0.375rem',
              border: `1px solid ${theme('colors.primary.200')}`,
              '&::before': { content: '""' },
              '&::after': { content: '""' },
            },
            pre: {
              backgroundColor: 'var(--tw-prose-pre-bg)',
              color: 'var(--tw-prose-pre-code)',
              fontSize: '0.875rem',
              lineHeight: '1.7',
              marginTop: '1.75rem',
              marginBottom: '1.75rem',
              borderRadius: '0.75rem',
              padding: '1.25rem 1.5rem',
              border: `1px solid ${theme('colors.gray.200')}`,
              overflowX: 'auto',
              code: {
                backgroundColor: 'transparent',
                border: 'none',
                padding: '0',
                fontWeight: '400',
                color: 'inherit',
              },
            },

            // Blockquotes
            blockquote: {
              fontStyle: 'normal',
              color: theme('colors.gray.700'),
              borderLeftColor: theme('colors.primary.500'),
              borderLeftWidth: '4px',
              paddingLeft: '1.5rem',
              marginTop: '1.75rem',
              marginBottom: '1.75rem',
              backgroundColor: theme('colors.primary.50'),
              padding: '1rem 1.5rem',
              borderRadius: '0.5rem',
              p: {
                marginTop: '0',
                marginBottom: '0',
                '&:first-of-type::before': { content: '""' },
                '&:last-of-type::after': { content: '""' },
              },
            },

            // Tables
            table: {
              marginTop: '2rem',
              marginBottom: '2rem',
              width: '100%',
              borderCollapse: 'separate',
              borderSpacing: '0',
              borderRadius: '0.75rem',
              overflow: 'hidden',
              border: `1px solid ${theme('colors.gray.200')}`,
            },
            thead: {
              backgroundColor: theme('colors.primary.50'),
              borderBottom: `2px solid ${theme('colors.primary.500')}`,
            },
            'thead th': {
              padding: '0.875rem 1rem',
              fontWeight: '700',
              color: theme('colors.primary.700'),
              textAlign: 'left',
            },
            'tbody tr': {
              borderBottom: `1px solid ${theme('colors.gray.200')}`,
              '&:last-child': {
                borderBottom: 'none',
              },
              '&:hover': {
                backgroundColor: theme('colors.gray.50'),
              },
            },
            'tbody td': {
              padding: '0.875rem 1rem',
            },

            // Images
            img: {
              marginTop: '2rem',
              marginBottom: '2rem',
              borderRadius: '0.75rem',
              boxShadow: theme('boxShadow.md'),
            },

            // Horizontal rule
            hr: {
              marginTop: '3rem',
              marginBottom: '3rem',
              borderColor: theme('colors.gray.300'),
              borderTopWidth: '2px',
            },
          },
        },
      }),
    },
  },
  plugins: [
    typography,
  ],
};

export default config;
