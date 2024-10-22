import Vue from 'vue'
import App from './App.vue'
import router from './routes'
import  store  from './viewModels'
import AOS from 'aos'
import 'aos/dist/aos.css'
import VueToastify from "vue-toastify";
import './bootstrap';


Vue.use(VueToastify);

axios.defaults.baseURL = '/';

const token = localStorage.getItem('token');
if (token) {
    axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
}

Vue.prototype.$axios = axios;

new Vue({
    store,
    router,
    render: h => h(App),
    mounted() {
        AOS.init()
    },
}).$mount('#app')



