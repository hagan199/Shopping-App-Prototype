import axios from "axios";
import { defineStore } from "pinia";

export const useProductStore = defineStore("Products", {
    state: () => ({
        products: [],
        product: {},
    }),
    actions: {
        async fetchProducts() {
            try {
                const response = await axios.get("products");
                if (response) {
                    this.products = response.data;
                }
            } catch (error) {}
        },
        async getProductDetails(id) {
            try {
                const response = await axios.get(`products/${id}`);
                if (response) {
                    this.product = response.data.data;
                }
            } catch (error) {}
        },
    },
});
