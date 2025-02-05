<template>
    <div class="container bordered p-4 flex">
        <h1 class="b">Test Component</h1>
        <p>Name : <strong>{{ name }}</strong></p>
        <p>Age : <strong>{{ age }}</strong></p>
    </div>
</template>

<script setup>
import { defineProps } from 'vue';

const props = defineProps({
    name: String,
    age: Number
});
</script>

