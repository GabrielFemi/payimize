<template>
    <div>
        <div class="alert bg-green-700 text-white mb-6" role="alert">All caught up!</div>
        <!-- TODO: Use named route-->
        <inertia-link :href="route('dashboard')" class="p-2 rounded bg-blue-400"><- Dashboard</inertia-link>
    </div>

</template>

<script>
export default {
name: "Index"
}
</script>

<style scoped>

</style>
