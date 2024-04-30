<template>
  <h1> My Name is  {{ name }} and these are my frameworks</h1>
  <ul>
    <li v-for="framework of frameworks" v-text="framework"></li>
  </ul>
</template>

<script>
export default {
    props:{
        name:String,
        frameworks:Array
    }
};
</script>

