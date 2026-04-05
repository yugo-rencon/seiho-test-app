import './bootstrap';
import './micromodal';
import '../css/app.css';
import '../css/micromodal.css';
import 'katex/dist/katex.min.css';

import { createApp, h } from 'vue';
import { createInertiaApp, router } from '@inertiajs/vue3';
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
router.on('finish', () => {
  scrollToTop();
});

// Google Analytics pageview
const trackPageView = (url) => {
  if (typeof gtag === 'function') {
    gtag('config', 'G-6TB0WW8SWW', { page_path: url });
  }
};

// GA は navigate で送る
router.on('navigate', (event) => {
  trackPageView(event.detail.page.url);
});

// ===== App init =====
createInertiaApp({
  title: (title) => {
    const path = window.location.pathname;
    const params = new URLSearchParams(window.location.search);
    const scope = params.get('scope');
    const returnTo = params.get('return_to') || '';
    const isAuthPage = path === '/login' || path === '/register' || path === '/forgot-password';
    const authSite = scope
      || (returnTo.startsWith('/daigaku') ? 'daigaku' : '')
      || (returnTo.startsWith('/senmon') ? 'senmon' : '')
      || (returnTo.startsWith('/ouyou') ? 'ouyou' : '')
      || (returnTo.startsWith('/ippan') ? 'ippan' : '');
    const siteName = (siteKey) => {
      if (siteKey === 'daigaku') return '生命保険大学課程 過去問解説';
      if (siteKey === 'senmon') return '生命保険専門課程 過去問解説';
      if (siteKey === 'ouyou') return '生命保険応用課程 過去問解説';
      if (siteKey === 'ippan') return '生命保険一般課程 過去問解説';
      return appName;
    };
    const siteFromPath = path.startsWith('/daigaku')
      ? 'daigaku'
      : path.startsWith('/senmon')
        ? 'senmon'
        : path.startsWith('/ouyou')
          ? 'ouyou'
          : path.startsWith('/ippan')
            ? 'ippan'
            : '';

    if (path === '/tests') return appName;
    if (path === '/daigaku') return siteName('daigaku');
    if (path === '/senmon') return siteName('senmon');
    if (path === '/ouyou') return siteName('ouyou');
    if (path === '/ippan') return siteName('ippan');
    if (isAuthPage && authSite) return `${title} | ${siteName(authSite)}`;
    if (siteFromPath) return `${title} | ${siteName(siteFromPath)}`;
    return `${title} | ${appName}`;
  },

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
