import { createRouter, createWebHistory } from "vue-router";

const ProductList = () => import("@/views/Products/index.vue");
const ProductDetails = () => import("@/views/Products/ProductDetails.vue");

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: "/",
            name: "home",
            redirect: "/products",
        },
        {
            path: "/products",
            name: "products",
            component: ProductList,
        },
        {
            path: "/product/:id/product-details",
            name: "productDetails",
            component: ProductDetails,
        },
    ],
});

export default router;
