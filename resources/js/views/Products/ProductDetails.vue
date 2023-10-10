<template>
    <div class="container px-[15px] lg:flex lg:px-0">
        <div class="h-[458px] relative">
            <img
                :src="`/images/${product.image}`"
                class="w-full h-full object-cover bg-gray-200 rounded-lg"
                alt="product_image"
            />
            <div
                v-if="!savedForLater"
                class="absolute right-0 bottom-0 p-6 cursor-pointer"
                @click.prevent="saveForLater"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-8 text-white"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                    />
                </svg>
            </div>
            <div v-else class="absolute right-0 bottom-0 p-6 cursor-pointer">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="w-8 text-red-500"
                >
                    <path
                        d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z"
                    />
                </svg>
            </div>
        </div>
        <div class="sm:w-3/5 sm:mx-auto lg:mx-0 lg:w-2/4 pt-[30px]">
            <h4 class="text-xl font-bold pb-5">
                {{ product.name }}
            </h4>
            <h2 class="text-[26px] font-bold">GHS {{ totalAmount }}</h2>
            <input
                class="w-[50px] h-[47px] pl-2.5 text-base mr-2.5 border border-black focus:outline-none"
                type="number"
                v-model="productQuantity"
            />
            <button class="button" @click.prevent="addToCart">
                Add To Cart
            </button>
            <h4 class="text-xl font-bold pt-10 pb-5">Product Details</h4>
            <span class="leading-6">{{ product.description }}</span>
        </div>
        <Alert :message="message" v-if="showAlert" />
    </div>
</template>

<script setup>
import { onMounted, ref, computed } from "vue";
import { useRoute } from "vue-router";
import Alert from "@/components/alert.vue";

import { formatAmountWithCommas } from "@/utils/Number.js";

const route = useRoute();

const product = ref({
    id: 1,
    name: "Slipper",
    brand: "Balanciaga",
    price: 20,
    image: "game.jpeg",
    description:
        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt harum odit quae ea maiores id reiciendis, quas minus dolore ipsa!",
});

const productQuantity = ref(1);

const totalAmount = computed(() =>
    formatAmountWithCommas(
        Number(product.value.price) * Number(productQuantity.value)
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

onMounted(() => {});
</script>
