/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter', 'ui-sans-serif', 'system-ui'],
      },
      colors: {
        primary: '#1D4ED8',
        accent: '#FACC15',
        cta: '#22C55E',
        light: '#F8FAFC',
        dark: '#111827',
        muted: '#6B7280',
        line: '#E5E7EB',
        sale: '#EF4444',
      },
      boxShadow: {
        soft: '0 18px 55px rgba(17, 24, 39, 0.08)',
        card: '0 14px 35px rgba(17, 24, 39, 0.07)',
      },
    },
  },
  plugins: [require('@tailwindcss/forms')],
};
