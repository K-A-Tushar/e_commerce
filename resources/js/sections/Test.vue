<template>
    <h1>Test Section</h1>
    <div v-for="person in person">
        <Test :name="person.name" :age="person.age" />
    </div>
</template>

<script setup>
import Test from '@/components/Test.vue'
const person = [{
    name: 'John Doe',
    age: 30,
}, {
    name: 'John Doe02',
    age: 30,
},
{
    name: 'John Doe03',
    age: 30,
},
{
    name: 'John Doe04',
    age: 30,
},
{
    name: 'John Doe05',
    age: 30,
},
{
    name: 'John Doe06',
    age: 30,
},
{
    name: 'John Doe07',
    age: 30,
}
]

</script>