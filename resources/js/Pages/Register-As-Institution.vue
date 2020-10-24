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
        <div class="flex items-center justify-center">
            <a class="btn btn-primary btn-lg inline-flex justify-center items-center w-full sm:w-auto mb-2 sm:mb-0" href="/">
                <svg class="mr-1 svg-icon" viewBox="0 0 20 20">
                    <path fill="none" d="M18.271,9.212H3.615l4.184-4.184c0.306-0.306,0.306-0.801,0-1.107c-0.306-0.306-0.801-0.306-1.107,0
                        L1.21,9.403C1.194,9.417,1.174,9.421,1.158,9.437c-0.181,0.181-0.242,0.425-0.209,0.66c0.005,0.038,0.012,0.071,0.022,0.109
                        c0.028,0.098,0.075,0.188,0.142,0.271c0.021,0.026,0.021,0.061,0.045,0.085c0.015,0.016,0.034,0.02,0.05,0.033l5.484,5.483
                        c0.306,0.307,0.801,0.307,1.107,0c0.306-0.305,0.306-0.801,0-1.105l-4.184-4.185h14.656c0.436,0,0.788-0.353,0.788-0.788
                        S18.707,9.212,18.271,9.212z">
                    </path>
                </svg>
                Go home
            </a>
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

<style scoped>
.svg-icon {
    width: 1em;
    height: 1em;
}

.svg-icon path,
.svg-icon polygon,
.svg-icon rect {
    fill: #fff;
}

.svg-icon circle {
    stroke: #fff;
    stroke-width: 1;
}
</style>
