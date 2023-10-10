<template>
    <div
        class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 absolute w-[250px] right-7 top-[30px]"
        role="alert"
    >
        <span class="font-medium">{{ message }}</span>
    </div>
</template>
<script setup>
const prop = defineProps({
    message: {
        type: String,
        default: null,
    },
});
</script>
