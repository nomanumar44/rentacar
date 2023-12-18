<template>
    <section>
        <div class="w-full max-w-screen-lg mx-auto py-4 grid grid-cols-1  bg-white md:grid-cols-3 gap-2 lg:gap-4">
            <div class=" shadow-sm bg-gray-100 flex flex-col" v-for="car in filterData" :key="car?.id">
                <div class="p-5 lg:p-6 text-left flex-grow" :style="{ backgroundColor: car?.location_store == 'metro_traveller' ? '#bf2330':'#0e4780'  }">

                <div>
                    <span class="text-xl pl-8 lg:text-xl text-white font-bold text-left" style="font-family: Montserrat ,sans-serif;"> {{ car?.location_store == 'metro_traveller' ? 'Metro' : 'Out Of Metro'}} Basic</span>
                </div>
                <span class="text-md pl-8 text-white font-medium">{{ car?.vehicle_name }} (or similar)</span>
                </div>
                <img :src="car?.image" class="flex items-center mx-auto h-44 w-44 mt-4">
                <div class="p-5 lg:p-6 bg-gray-100 text-left space-y-5 lg:space-y-6 text-gray-700 rounded-b-lg">
                <ul class="flex flex-col mx-auto pl-20 p-3 space-y-2 items-start justify-start text-sm lg:text-base text-left">
                    <li class="flex items-start space-x-2  whitespace-nowrap">
                        <svg class="text-gray-500 w-5 h-5 inline-block" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M5 13l4 4L19 7"></path></svg>
                        <span>Sedan or Hatchback</span>
                    </li>
                    <li class="flex items-start space-x-2 whitespace-nowrap">
                        <svg class="text-gray-500 w-5 h-5 inline-block" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M5 13l4 4L19 7"></path></svg>
                        <span>Seats up to {{ car?.number_of_seats ? car?.number_of_seats : 5 }}</span>
                    </li>
                    <li class="flex items-start space-x-2 whitespace-nowrap">
                        <svg class="text-gray-500 w-5 h-5 inline-block" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M5 13l4 4L19 7"></path></svg>
                        <span>Automatic or Manual</span>
                    </li>
                    <li class="flex items-start space-x-2 whitespace-nowrap">
                        <svg class="text-gray-500 w-5 h-5 inline-block" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M5 13l4 4L19 7"></path></svg>
                        <span>Unlimited Km's</span>
                    </li>
                    </ul>

                    <p class="mt-2 text-center font-medium" style="color: #0e4780; font-family: Montserrat , sans-serif;">
                    <strong>${{ car?.price ?? 0 }}</strong> <small>per day*</small>
                    </p>

                    <div class="flex justify-center">
                        <router-link to="/booking" @click="selectedCar(car)" class="px-4 py-3 w-3/4 text-white text-center uppercase font-semibold rounded block" :style="{ backgroundColor: car?.location_store == 'metro_traveller' ? '#bf2330':'#0e4780'  }" >
                            Select
                        </router-link>
                    </div>
                </div>
                <div class="p-6" :style="{ backgroundColor: car?.location_store == 'metro_traveller' ? '#bf2330':'#0e4780'  }"></div>
            </div>
        </div>
    </section>
</template>
<script>
import { mapState } from 'vuex'
export default {
  computed:{
    ...mapState({
        filterData : (state) => state.Cars.filtersResult,
    }),
  },
  methods:{
    selectedCar(car){
        this.$store.commit('Cars/setComponent',3);
        this.$store.commit('Cars/setColor','#2596be');
        this.$store.commit('Cars/setCar',car);
    },
  }
}
</script>
