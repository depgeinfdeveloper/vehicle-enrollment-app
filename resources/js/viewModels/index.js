import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';
import auth from "./modules/auth";

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        layoutDrawer:true
    },
    mutations: {
        SET_DRAWER: (state, value) => {
            state.layoutDrawer = value
        },
    },
    actions: {
        layoutHandler({state,commit}){
            commit('SET_DRAWER',!state.layoutDrawer)
        }
    },
    modules: {
        auth,
    },
});
