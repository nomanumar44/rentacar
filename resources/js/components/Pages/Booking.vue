<template>
    <section>
        <div class="w-full max-w-screen-lg mx-auto bg-white shadow-md rounded-lg mt-8 mb-10">
            <h1 class=" text-3xl text-[#0e4780]">Make A Booking {{currentStep}}</h1>
        </div>
        <div class="w-full max-w-screen-lg mx-auto mb-6">
            <div class="text-xl">
                <router-link to="/" class="text-[#0e4780]">Home</router-link> »
                <span class="current">Make a booking</span>
            </div>
        </div>
    </section>
    <section class="flex items-center mb-4 ">
        <div class="w-full max-w-screen-lg mx-auto py-4">
        <div class="grid lg:grid-cols-4 md:grid-cols-4   sm:grid-cols-1">
            <div class="text-white text-center py-3" :style="{ backgroundColor: color != '' && currentStep === 1  ? color : '#0e4780' }" >
                <h2>1. Request</h2>
            </div>
            <div class="text-white text-center py-3 bg-gray-900" :style="{ backgroundColor: color != '' && currentStep === 2   ? color : '#0e4780'}" >
                <h2>2. Select</h2>
            </div>
            <div class="text-white text-center py-3 bg-gray-900" :style="{ backgroundColor: color != '' && currentStep === 3   ? color : '#0e4780'}">
                <h2>3. Extra</h2>
            </div>
            <div  class="text-white text-center py-3 bg-gray-900" :style="{ backgroundColor: color != '' && currentStep === 4   ? color : '#0e4780'}">
                <h2>4. Summary</h2>
            </div>
        </div>
        </div>
    </section>
    <div >
        <component :is="currentStepComponent"></component>
    </div>
</template>
<script>
import BookingComponent from '../Booking/Booking.vue';
import SelectComponent from '../Booking/Select.vue';
import ExtraComponent from '../Booking/Exacts.vue';
import SummaryComponent from '../Booking/Summary.vue';
import {mapState} from 'vuex';
export default {
    data() {
        return {

        };
    },
    computed: {
        ...mapState({
            currentStep: state => state.Cars.currentStep,
            color: state => state.Cars.color,
        }),
        currentStepComponent() {
        switch (this.currentStep) {
            case 1:
            return BookingComponent;
            case 2:
            return SelectComponent;
            case 3:
            return ExtraComponent;
            case 4:
            return SummaryComponent;
            default:
            return null;
        }
        },
    },
    created(){
        this.$store.commit('Cars/setColor','#2596be');
    }

}
</script>
