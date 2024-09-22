<template>
    <h1>Users</h1>
    <Nav/>
    <div style="margin-top:1000px;">
    <p style="color:red; font:bold 25px tahoma;">{{time}}</p>
    <Link href="/users" preserve-scroll>Refresh</Link>
    </div>

</template>

<script>
import Nav from '../Shared/Nav.vue';
import {Link} from '@inertiajs/vue3';

export default{  
    components: {Nav,Link},
    props:{
        time:String
    }
}
</script>

