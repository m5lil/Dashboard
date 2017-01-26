
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
 import Vue from 'vue'

 import VueRouter from 'vue-router'
 Vue.use(VueRouter)

  const Home = { template: '<div>home</div>' }
  const Foo = { template: '<div>Foo</div>' }
  const Bar = { template: '<div>Bar</div>' }
  import User from './components/User.vue'
  // import Role from './components/Role.vue'
  // import Menu from './components/Menu.vue'
  import Page from './components/Page.vue'


 const router = new VueRouter({
   hashbang: false,
   mode: 'hash', // or 'history'
   base: __dirname,
   routes: [
     { path: '/', component: Home },
     { path: '/foo', component: Foo },
     { path: '/bar', component: Bar },
    //  { path: '/menus', component: Menu },
     { path: '/pages', component: Page },
     { path: '/users', component: User }, // example of route with a seperate component
    //  { path: '/roles', component: Role } // example of route with a seperate component
   ]
 })


 new Vue({
   router,

   // components : {
   //   User
   // },

   data : {

   },

   methods:{

   }

 }).$mount('#app')
