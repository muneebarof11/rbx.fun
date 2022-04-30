import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from "@/js/views/pages/Home";
import Earn from "@/js/views/pages/Earn";
import NotFound from "@/js/views/pages/NotFound";
import Withdraw from "@/js/views/pages/Withdraw";
import Inventory from "@/js/views/pages/Inventory";
import Giveaway from "@/js/views/pages/Giveaway";
import Invite from "@/js/views/pages/Invite";
import Promocodes from "@/js/views/pages/Promocodes";
import EventChest from "@/js/views/pages/EventChest";
import Help from "@/js/views/pages/Help";
import Sponsor from "@/js/views/pages/Sponsor";
import Youtube from "../views/pages/Youtube";
import Tiktok from "../views/pages/Tiktok";

Vue.use(VueRouter);

const router = new VueRouter({
    hashbang: false,
    made: 'history',
    hash: false,
    root: '/',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/index',
            name: 'home',
            component: Home
        },
        {
            path: '/earn',
            name: 'earn',
            component: Earn,
        },
        {
            path: '/withdraw',
            name: 'withdraw',
            component: Withdraw
        },
        {
            path: '/inventory',
            name: 'inventory',
            component: Inventory
        },
        {
            path: '/giveaway',
            name: 'giveaway',
            component: Giveaway
        },
        {
            path: '/referral',
            name: 'invite',
            component: Invite
        },
        {
            path: '/promocodes',
            name: 'promocodes',
            component: Promocodes
        },
        {
            path: '/events',
            name: 'events',
            component: EventChest
        },
        {
            path: '/help',
            name: 'help',
            component: Help
        },
        {
            path: '/sponsor',
            name: 'sponsor',
            component: Sponsor
        },
        {
            path: '/youtube',
            name: 'youtube',
            component: Youtube
        },
        {
            path: '/tiktok',
            name: 'tiktok',
            component: Tiktok
        },
        {
            path: '*',
            name: '404',
            component: NotFound
        }
    ]

});

export default router;