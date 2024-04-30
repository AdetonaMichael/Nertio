<template>
    <nav>
        <ul class="d-flex justify-content-center list-unstyled">
          <li class="px-2"><Link href="/users">Users</Link></li>
          <li class="px-2"><Link href="/jobs">Jobs</Link></li>
          <li class="px-2"><Link href="/apps">Apps</Link></li>
        </ul>
      </nav>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    components:{ Link }
};
</script>
