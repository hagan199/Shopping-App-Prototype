<template>
    <div class="container">
        <div class="h-[458px] relative">
            <router-link to="/products" class="absolute top-5 left-5">
                <img src="/icons/back_4159823.png" class="w-8" alt="" />
            </router-link>
            <img
                :src="`/images/${product?.image}`"
                class="w-full h-full bg-gray-200 rounded-lg object-cover"
                :alt="product?.image"
            />
            <div
                v-if="!savedForLater"
                @click.prevent="saveForLater"
                class="absolute right-0 bottom-0 p-6 cursor-pointer"
            >
                <img src="/icons/heart_159774.png" class="w-8" alt="" />
            </div>
            <div v-else class="absolute right-0 bottom-0 p-6 cursor-pointer">
                <img src="/icons/heart_2107845.png" class="w-8" alt="" />
            </div>
        </div>
        <div class="sm:w-3/5 sm:mx-auto lg:mx-0 lg:w-2/4 pt-[30px]">
            <h4 class="text-xl font-bold pb-5">
                {{ product?.product_name }}
            </h4>
            <h2 class="text-[26px] font-bold">GHS {{ totalAmount || 0 }}</h2>
            <input
                class="w-[50px] h-[47px] pl-2.5 text-base mr-2.5 border border-black focus:outline-none"
                type="number"
                v-model="productQuantity"
            />
            <button class="button" @click.prevent="addToCart">
                Add To Cart
            </button>
            <h4 class="text-xl font-bold pt-10 pb-5">Product Details</h4>
            <span class="leading-6">{{ product?.description }}</span>
        </div>
        <Alert :message="message" v-if="showAlert" />
    </div>
</template>

<script setup>
import { onMounted, ref, computed } from "vue";
import { useRoute } from "vue-router";
import { useProductStore } from "@/store/ProductStore.js";
import Alert from "@/components/alert.vue";
import { formatAmountWithCommas } from "@/utils/Number.js";

const route = useRoute();

const productStore = useProductStore();

const product = computed(() => productStore.product);

const productQuantity = ref(1);

const totalAmount = computed(() =>
    formatAmountWithCommas(
        Number(product.value?.price) * Number(productQuantity.value)
    )
);

const showAlert = ref(false);
const savedForLater = ref(false);

const message = ref("");

const alert = () => {
    showAlert.value = !showAlert.value;
};

const addToCart = () => {
    message.value = "Added to cart";
    alert();
    setTimeout(() => {
        alert();
    }, 3000);
};

const saveForLater = () => {
    savedForLater.value = ref(true);
    message.value = "Saved for Later";
    alert();
    setTimeout(() => {
        alert();
    }, 3000);
};

onMounted(() => {
    productStore.getProductDetails(route.params.id);
});
</script>
