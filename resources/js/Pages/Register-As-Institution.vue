<template>

    <div>
        <h1 class="text-center text-4xl md:text-6xl text-gray-900 leading-none mb-6 font-extrabold tracking-normal md:tracking-tight">
            How to register as <span class="bg-clip-text text-transparent bg-gradient-to-r from-teal-400 to-purple-600 w-full block lg:inline">an Institution.</span>
        </h1>

        <!-- component -->
        <div class="font-sans flex items-center justify-center bg-blue-darker w-full py-8">
            <div class="overflow-hidden bg-white rounded max-w-xs w-full shadow-lg  leading-normal">
                <a href="#" class="block group hover:bg-blue p-4 border-b">
                    <p class="font-bold text-lg mb-1 text-black group-hover:text-white">1. Send us a mail. ✉✉</p>
                    <p class="text-grey-darker mb-2 group-hover:text-white">Send an email indicating your interest to <code class="text-red-600">register@payimize.io</code></p>
                    <a class="badge bg-red-700 hover:bg-red-900" href="#"><span class="text-white">Using Institution's official email address</span></a>
                </a>
                <a href="#" class="block group hover:bg-blue p-4">
                    <p class="font-bold text-lg mb-1 text-black group-hover:text-white">2. What Next? 😏😏</p>
                    <p class="text-grey-darker mb-2 group-hover:text-white">You'll be sent an email with sensitive credentials to indicate your account has been created.</p>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
name: "Register-As-Institution",
    data() {
    return {
        message: "Official Email address should be used, please."
    }
    }
}
</script>

