<template>
    <div>
        <router-link :to="`/product/${product.id}/product-details`">
            <img
                class="h-auto max-w-full rounded-lg"
                :src="`/images/${product.image}`"
                alt=""
            />
        </router-link>
    </div>
</template>

<script setup>
const props = defineProps({
    product: {
        type: Object,
        default: () => ({}),
    },
});

const addToCart = (product) => {
    cartStore.addToCart(product);
};
</script>
<style scoped></style>
