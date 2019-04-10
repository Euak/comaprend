import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        component: require('./views/Home').default
    },
    {
        path: '/nova-conta',
        component: require('./views/nova-conta').default
    },
];

export default new VueRouter({
    routes
});
