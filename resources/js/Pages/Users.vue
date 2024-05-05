<template>
    <div>
      <h1>This is the Users Page</h1>
      <Nav />
      <ul>
        <li v-for="user of users"  v-text="user"></li>
      </ul>
      <ul style="list-style:none;">
        <li v-for="app of applications"  v-text="app"></li>
      </ul>
    </div>
</template>

<script>
  import Nav from '../components/Nav.vue';

  export default {
    components: { Nav },
    porps:{
        users:Array,
        applications:Array
    },
  };
</script>
