import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const routes = [
    { path: '/dashboard', component: require('./components/Dashboard.vue').default },
    { path: '/profile', component: require('./components/Profile.vue').default },
    { path: '/users', component: require('./components/Users.vue').default },
    { path: '/branches', component: require('./components/Branches.vue').default },
    { path: '/registers', component: require('./components/Registers.vue').default },
    { path: '/payment_methods', component: require('./components/PaymentMethods.vue').default }
  ]

 export default new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
  })
  
