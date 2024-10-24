import axios from 'axios';

export default {
    namespaced: true,
    state: {
        user: null,
        token: localStorage.getItem('token') || '',
    },
    mutations: {
        SET_USER(state, user) {
            state.user = user;
        },
        SET_TOKEN(state, token) {
            state.token = token;
        },
        CLEAR_AUTH(state) {
            state.user = null;
            state.token = '';
        },
    },
    actions: {
        async login({ commit }, credentials) {
            try {
                console.log(credentials)
                // const response = await axios.post('/api/login', credentials);
                // const token = response.data.token;
                // const user = response.data.user;
                // localStorage.setItem('token', token);
                // axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
                // commit('SET_TOKEN', token);
                // commit('SET_USER', user);
            } catch (error) {
                throw error;
            }
        },
        logout({ commit }) {
            commit('CLEAR_AUTH');
            localStorage.removeItem('token');
            delete axios.defaults.headers.common['Authorization'];
        },
        async fetchUser({ commit }) {
            try {
                const response = await axios.get('/api/user');
                commit('SET_USER', response.data);
            } catch (error) {
                commit('CLEAR_AUTH');
            }
        },
    },
    getters: {
        isAuthenticated(state) {
            return !!state.user;
        },
        getUser(state) {
            return state.user;
        },
    },
};
