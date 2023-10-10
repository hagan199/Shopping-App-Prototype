<template>
    <div class="container grid grid-cols-2 gap-4">
        <ProductItem
            v-for="product in products"
            :key="product.id"
            :product="product"
        />
    </div>
</template>

<script setup>
import ProductItem from "@/components/ProductItem.vue";
import { useProductStore } from "@/store/ProductStore.js";
import { computed, onMounted } from "vue";

const productStore = useProductStore();

const products = computed(() => productStore.products);

onMounted(() => {
    productStore.fetchProducts();
});
</script>
