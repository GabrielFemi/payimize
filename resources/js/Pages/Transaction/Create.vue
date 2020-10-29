<template>
    <div>
        <!-- Card with no image -->
        <section class="bg-gray-100 bg-opacity-25 md:bg-opacity-75 py-20">
            <div class="container mx-auto text-left md:text-center px-4">
                <h1 class="text-5xl text-gray-900 leading-tight mb-2 font-bold md:font-extrabold">Institutions</h1>
                <div class="card card-body px-0 md:px-4 shadow-none md:shadow-xl py-20 bg-transparent md:bg-white">
                    <div class="w-full md:w-3/5 mx-auto">
                        <h1 class="text-5xl text-gray-900 leading-tight mb-2 font-bold md:font-extrabold"><span class="text-gray-600 text-2xl font-medium">Anchor University, Lagos</span></h1>
                        <p class="text-lg md:text-xl text-gray-600 mb-6">
                            Located at 1-4, Ayobo road, We are a school determined to achieve excellence in every sphere.
                        </p>
                        <div class="block md:flex justify-center space-x-0 md:space-x-2 space-y-2 md:space-y-0">
                            <a href="#" class="btn btn-dark btn-xl w-full md:w-auto">View portal</a>
                            <a href="#" class="btn btn-light btn-xl w-full md:w-auto">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
