<template>
    <div>
        <div class="rounded-md px-6 py-10 max-w-9xl mx-auto">
            <header class="py-4">
                <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between">
                        <h1 class="text-3xl font-bold text-theme-5">
                            Service
                        </h1>
                        <router-link
                            :to="{ name: 'services.index' }"
                            class="bg-blue-600 hover:bg-background text-white font-bold py-2 px-6 rounded"
                        >
                            Back
                        </router-link>
                    </div>
                </div>
            </header>
            <!-- <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
                  @submit.prevent="addUpdateService">
                <div class="grid lg:grid-cols-2 md:grid-cols-2 gap-2" >
                <div class="mb-4">
                    <label
                        class="block text-gray-700 text-sm font-bold mb-2"
                        for="username"
                    >
                        Service Name
                        <span class="text-red-600"><strong>*</strong></span>
                    </label>
                    <input
                        class="bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 w-full rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="text"
                        placeholder="Name"
                        aria-label="Service name"
                        v-model="name"
                    />
                    <small
                        class="text-red-400"
                        v-if="errors.has('name')"
                        v-text="errors.get('name')"
                    ></small>
                </div>
                <div class="mb-4">
                    <label
                        class="block text-gray-700 text-sm font-bold mb-2 text-right"
                        for="username"
                    >
                        اردو میں نام لکھیں۔
                        <span class="text-red-600"><strong>*</strong></span>
                    </label>
                    <input
                        class="bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 w-full rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-right"
                        dir="rtl"
                        lang="ur"
                        type="text"
                        placeholder="اردو میں نام لکھیں۔"
                        aria-label="Service name"
                        v-model="urdu_name"
                    />
                    <small
                        class="text-red-400"
                        v-if="errors.has('urdu_name')"
                        v-text="errors.get('urdu_name')"
                    ></small>
                </div>
                <div>
                <button
                    class="ml-5 mt-7 py-2 px-4 flex-shrink-0 border-blue-500 hover:border-blue-700 text-sm border-4 text-white py-1 px-2 rounded bg-blue-500 hover:bg-blue-700"
                    type="submit"
                    id="save_print"
                >
                    Save
                </button>
                </div>
                </div>
            </form> -->
        </div>
    </div>
</template>


