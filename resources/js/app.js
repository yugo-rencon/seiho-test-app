import './bootstrap';
import './micromodal';
import '../css/app.css';
import '../css/micromodal.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { Inertia } from '@inertiajs/inertia';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

const appName =
  window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

// ===== Scroll control =====
const scrollToTop = () => {
  window.scrollTo({ top: 0, left: 0, behavior: 'auto' });
};

// ブラウザ標準のスクロール復元は無効化
if ('scrollRestoration' in window.history) {
  window.history.scrollRestoration = 'manual';
}

// 遷移完了後にトップへ
Inertia.on('finish', () => {
  scrollToTop();
});

// Google Analytics pageview
const trackPageView = (url) => {
  if (typeof gtag === 'function') {
    gtag('config', 'G-6TB0WW8SWW', { page_path: url });
  }
};

// GA は navigate で送る
Inertia.on('navigate', (event) => {
  trackPageView(event.detail.page.url);
});

// ===== App init =====
createInertiaApp({
  title: (title) =>
    window.location.pathname === '/tests' ? appName : `${title} | ${appName}`,

  resolve: (name) =>
    resolvePageComponent(
      `./Pages/${name}.vue`,
      import.meta.glob('./Pages/**/*.vue'),
    ),

  setup({ el, App, props, plugin }) {
    return createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue, Ziggy)
      .mount(el);
  },

  progress: {
    color: '#4B5563',
  },
});
