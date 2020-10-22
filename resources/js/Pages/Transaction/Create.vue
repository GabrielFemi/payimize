<template>
    <div>
        <!-- Card with no image -->
        <div class="bg-teal-300 p-20">
            <h3 class="text-teal-800 mb-4 font-bold">1. Card with no image</h3>
            <div class="bg-white shadow-lg p-5 rounded">
                <h2 class="font-bold mb-2 text-2xl text-gray-800">Card with no image</h2>
                <p class="text-gray-700">This is my cool new art</p>
            </div>
        </div>
        <!-- Card with image -->
        <div class="bg-orange-300 p-20">
            <h3 class="text-orange-800 font-bold mb-4">2. Card with image</h3>
            <div class="bg-white shadow-lg rounded sm:w-1/2 md:w-1/3">
                <img src="https://images.unsplash.com/photo-1600633660236-f6f61d5f155d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1351&q=80" alt="Koala img" class="rounded-t">
                <div class="p-5">
                    <h2 class="text-2xl font-bold mb-2 text-gray-800">Card with an image</h2>
                    <p class="text-gray-700 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores repellat at dolorum odio! A molestiae repudiandae quaerat cum? Ipsam adipisci eligendi facilis similique ullam quibusdam nesciunt deleniti est voluptate officiis.</p>
                    <a href="#" class="text-orange-600 hover:text-orange-500 underline text-sm">Read More</a>
                </div>
            </div>
        </div>
        <!-- Horizontal card -->
        <div class="bg-green-300 p-20">
            <h3 clasS="font-bold text-green-800 mb-4">3. Horizontal card</h3>
            <div class="bg-white shadow-lg rounded md:flex md:w-3/4 h-auto">
                <img src="https://images.unsplash.com/photo-1600583891187-6181641a211a" alt="" class="rounded-t md:rounded-l md:rounded-t-none md:w-64 h-auto lg:h-64">
                <div class="p-5">
                    <h2 class="text-2xl text-green-800 mb-2 font-bold">Horizontal card</h2>
                    <p class="mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi assumenda autem voluptatibus quas consequuntur aut neque doloribus dolores laudantium blanditiis at nihil amet accusantium, praesentium, reprehenderit voluptatum officia perspiciatis ad!</p>
                    <a href="#" class="text-green-800 hover:text-green-700 underline">Read more</a>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
name: "Create"
}
</script>

<style scoped>

</style>
