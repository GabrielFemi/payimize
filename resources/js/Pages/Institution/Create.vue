<template>
    <div class="flex justify-center w-full py-8 items-center">
        <a class="badge bg-green-500 hover:bg-green-700" href="#">
            <span class="text-white">
                Secure process.
            </span>
        </a>
        <form @submit.prevent="submit" class="w-full max-w-sm">
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Name of institution
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input v-model="form.name" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="Jane Doe">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                        Official Email
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input v-model="form.email" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="password" placeholder="payments@aul.edu.ng">
                </div>
            </div>
<!--            <div class="md:flex md:items-center mb-6">-->
<!--                <div class="md:w-1/3"></div>-->
<!--                <label class="md:w-2/3 block text-gray-500 font-bold">-->
<!--                    <input class="mr-2 leading-tight" type="checkbox">-->
<!--                    <span class="text-sm">-->
<!--        Send me your newsletter!-->
<!--      </span>-->
<!--                </label>-->
<!--            </div>-->
            <div class="w-full md:flex md:items-center">
                <div class="md:w-2/3 mb-6 text-right">
                    <div class="block text-gray-500">
                        <code class="text-gray-800">Access code will be generated automatically.</code>
                    </div>
                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <button type="submit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                        Create account
                    </button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
export default {
name: "Create",
    data() {
    return {
        form: {
            name: null,
            email: null
        }
    }
    },
    methods:{
    submit() {
        this.$inertia.post(route('institutions.store'), this.form)
    }
    }
}
</script>

<style scoped>

</style>
