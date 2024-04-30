<template>
    <div>
      <h1>This is the App Page:</h1>
      <Nav />
      <ul style="list-style:none;">
        <li v-for="app of applications"  v-text="app"></li>
      </ul>
    </div>
</template>

<script>
  import Nav from '../components/Nav.vue';

  export default {
    components: { Nav },
    props:{
        applications:Array
    }
  };
</script>
