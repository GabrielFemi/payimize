<template>
    <div>
        <Alert :message=message />
        <!-- Card with no image -->
        <div class="bg-orange-300 p-20">
            <div class="bg-white shadow-lg p-5 rounded hover:bg-gray-200 cursor-pointer">
                <h1 class="font-bold mb-2 text-center text-4xl text-gray-800 hover:text-black">School fees and accomodation</h1>
            </div>
        </div>
        <!-- Card with image -->
        <!-- Horizontal card -->
    </div>

</template>

<script>
import Alert from "@/Alert";
export default {
name: "Create",
    components: {Alert},
    data() {
        return {
            message: "Pay your accommodation fee with ease."
        }
    }
}
</script>

<style scoped>

</style>
