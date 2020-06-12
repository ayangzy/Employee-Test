/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

// ES6 Modules or TypeScript

// CommonJS
const Swal = require("sweetalert2");

let axios = require("axios");

//import VueResource from 'vue-resource';

import VueRouter from "vue-router";
Vue.use(VueRouter);
//Vue.use(VueResource);

import Welcome from './components/welcome'
import Employee from './components/createEmployee.vue'
import EditEmployee from './components/editEmployee.vue'
import SingleEmployee from './components/singleEmployee.vue'

let routes = [{
        path: "/",
        name: "welcome",
        component: Welcome,
    },

    {
        path: "/Create-employee",
        name: "employee",
        component: Employee,
    },

    {
        path: "/edit-employee/:id",
        name: "edit-employee",
        component: EditEmployee,
    },

    {
        path: "/single-employee/:id",
        name: "singleEmployee",
        component: SingleEmployee,
    },


];

const router = new VueRouter({
    mode: "history",
    routes,

});

const app = new Vue({
    el: "#app",
    router
});
