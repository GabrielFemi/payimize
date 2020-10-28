<template>
    <div class="container mx-auto">
        <div class="w-full flex justify-between item-center py-6">
            <div class="h-8"><img src="https://gustui.s3.amazonaws.com/gustlogo.png" class="h-full"></div><a href="#" class="no-underline font-medium text-blue-400">Get Help</a></div>
        <div class="mt-8">
            <div class=" w-full px-4 sm:px-8">
                <div class="h-2px w-full bg-gray-300 relative">
                    <div class="absolute top-1/2 left-0 h-1 transform -translate-y-1/2 bg-blue-400 transition-width ease-in-out duration-500" style="width: 33.3333%;">
                        <div class="w-3 h-3 bg-blue-800 rounded-full absolute right-0 top-1/2 transform translate-x-1/2 -translate-y-1/2"></div>
                    </div>
                </div>
                <div class="mt-3 relative hidden sm:block">
                    <div class="absolute" style="left: 0%;"><span class="inline-block transform -translate-x-1/2 text-sm font-medium text-blue-400">Registration</span></div>
                    <div class="absolute" style="left: 33.3333%;"><span class="inline-block transform -translate-x-1/2 text-sm font-medium">Institution Details</span></div>
<!--                    <div class="absolute" style="left: 66.6667%;"><span class="inline-block transform -translate-x-1/2 text-sm">Team</span></div>-->
<!--                    <div class="absolute" style="left: 100%;"><span class="inline-block transform -translate-x-1/2 text-sm">Pay</span></div>-->
                </div>
            </div>
        </div>
        <div class="my-12 pb-12 w-full max-w-screen-md mx-auto">
            <h1 class="text-4xl font-bold text-center">Institution Details</h1>
            <form class="mt-2 w-full" @submit.prevent="submit">
                <div class=" my-6 grid grid-cols-1 gap-6 sm:mb-0 sm:gap-6 sm:grid-cols-2">
                    <div class="">
                        <label class="text-sm text-gray-600  false" for="firstName">Matric Number</label>
                        <div class="">
                            <input v-model="form.matric_number" type="text" name="matric_number" class=" w-full border border-gray-300 rounded-sm px-4 py-3 outline-none transition-colors duration-150 ease-in-out focus:border-blue-400 " placeholder="" value="">
                        </div>
                    </div>
                    <div class="">
                        <label class="text-sm text-gray-600  false" for="lastName">Level</label>
                        <div class="">
                            <input v-model="form.level" type="number" name="level" class=" w-full border border-gray-300 rounded-sm px-4 py-3 outline-none transition-colors duration-150 ease-in-out focus:border-blue-400 " placeholder="" value="">
                        </div>
                    </div>
                </div>

                <div class=" my-6">
                    <div class="">
                        <label class="text-sm text-gray-600  false" for="">Access code.</label>
                        <div class="">
                            <input v-model="form.access_code" type="text" name="access_code" class=" w-full border text-center border-gray-300 rounded-sm px-4 py-3 outline-none transition-colors duration-150 ease-in-out focus:border-blue-400 " placeholder="Enter the access code for your school." value="">
                        </div>
                    </div>
                </div>


                <div class=" my-6">
                    <button class=" inline-block rounded-sm font-medium border border-solid cursor-pointer text-center text-base py-3 px-6 text-white bg-blue-400 border-blue-400 hover:bg-blue-600 hover:border-blue-600 w-full" type="submit">Finish</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data()  {
        return {
            form: {
                matric_number: null,
                level: null,
                access_code: null,
            },
            }
        },
    methods: {
        submit() {
            this.$inertia.post(route('finish_onboarding'), this.form)
        }
    },
    name: "Onboarding"
}
</script>

<style scoped>

</style>
