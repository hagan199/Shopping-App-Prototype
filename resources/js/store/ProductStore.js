import axios from "axios";
import { defineStore } from "pinia";

export const useProductStore = defineStore("Products", {
    state: () => ({
        products: [
            {
                id: 1,
                name: "Slipper",
                brand: "Balanciaga",
                price: 20,
                image: "game.jpeg",
                description:
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt harum odit quae ea maiores id reiciendis, quas minus dolore ipsa!",
            },
            {
                id: 2,
                name: "Slipper",
                brand: "Balanciaga",
                price: 20,
                image: "image-4.jpg",
                description:
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt harum odit quae ea maiores id reiciendis, quas minus dolore ipsa!",
            },
            {
                id: 3,
                name: "Slipper",
                brand: "Balanciaga",
                price: 20,
                image: "image-4.jpg",
                description:
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt harum odit quae ea maiores id reiciendis, quas minus dolore ipsa!",
            },
            {
                id: 4,
                name: "Slipper",
                brand: "Balanciaga",
                price: 20,
                image: "game.jpeg",
                description:
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt harum odit quae ea maiores id reiciendis, quas minus dolore ipsa!",
            },
            {
                id: 5,
                name: "Slipper",
                brand: "Balanciaga",
                price: 20,
                image: "game.jpeg",
                description:
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt harum odit quae ea maiores id reiciendis, quas minus dolore ipsa!",
            },
        ],
    }),
});
