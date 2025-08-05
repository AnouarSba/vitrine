// resources/js/bootstrap.js

import axios from 'axios';
import { createApp } from 'vue';

// Set up axios
axios.defaults.baseURL = window.location.origin;
window.axios = axios;

// If you're using Vue
const app = createApp({});
app.mount("#app");
