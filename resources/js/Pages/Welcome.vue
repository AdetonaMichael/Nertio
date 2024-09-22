<template>
    <div>
        <h1>Welcome to Inertia.js with Vue 3 and Laravel 11!</h1>
        <Nav />
    </div>
</template>

<script>
import Nav from '../Shared/Nav.vue';

export default {
    components: { Nav }
    // props: {
    //     name: String,
    //     frameworks: Array,
    // }
}
</script>
