import VueRouter from 'vue-router';

import HomeComponent from './components/home';
import RegisterComponent from './components/register';
import LoginComponent from './components/login';
import Dashboard from './components/dashboard';

const routes = [
    {
        path: '/',
        name: 'home',
        component: HomeComponent,
        meta: {
            auth: false
        }
    },
    {
      path: '/register',
      name: 'register',
      component: RegisterComponent,
      meta: {
        auth: false
      }
    },
    {
      path: '/login',
      name: 'login',
      component: LoginComponent,
      meta: {
        auth: false
      }
    },
    // USER ROUTES
    {
      path: '/dashboard',
      name: 'dashboard',
      component: Dashboard,
      meta: {
        auth: true
      }
    }
];

export default new VueRouter({
    history: true,
    mode: 'history',
    routes
});