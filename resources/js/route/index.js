import {
    createRouter,
    createWebHashHistory,
    createWebHistory,
} from "vue-router";
import App from "@/App.vue";
import Basket from "@/pages/Basket";

const routes = [
    { path: "/", component: App },
    {
        path: "/basket",
        component: Basket,
        name: "basket",
    },
];

const router = createRouter({
    history: createWebHashHistory(),
    routes,
});

export default router;
