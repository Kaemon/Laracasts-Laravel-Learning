import axios from 'axios';
import Alpine from 'alpinejs';
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios = axios;
window.Alpine = Alpine;
Alpine.start();