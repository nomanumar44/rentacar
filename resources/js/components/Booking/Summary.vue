<template>
    <section class="mt-4 w-full max-w-screen-lg mx-auto py-4">

        <div class="text-center">
            <h1 class="text-4xl text-[#0e4780] font-bold mt-4 mb-2">Thank You For Requesting The VAN/UTES</h1>
            <h3 class="text-2xl text-blue-900 mb-4">We Will Be In Touch With You Shortly</h3>
            <p class="text-lg text-[#0e4780] mx-auto max-w-prose">
                To ensure a smooth rental process, a staff member from the store that you have booked with will contact you shortly to confirm the availability of the chosen vehicle.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-4 mt-12 ">

            <div class="flex items-stretch">
                <div class="border border-slate-200 rounded-sm w-full flex flex-col bg-white ">
                    <h2 class="text-2xl text-center font-bold p-2 bg-[#0e4780] text-white mb-8">Card 1</h2>
                    <p class="text-gray-500 flex justify-center text-center text-2xl mt-6 font-bold flex-grow">
                       {{ referenceNumber }}
                    </p>
                </div>
            </div>

            <div class="flex items-center">
                <div class="border border-slate-200 rounded-sm w-full flex flex-col bg-white pb-6">
                    <h2 class="text-2xl text-center font-bold py-2 bg-[#0e4780] text-white mb-4">Card 2</h2>
                    <table class="text-center ">
                        <tr class="text-center text-gray-700">
                            <th class="py-2 ">Name:</th>
                            <th class="">{{ customer?.first_name }}</th>
                        </tr>
                        <tr class="text-center text-gray-700">
                            <th class="">Last Name:</th>
                            <th class="">{{ customer?.last_name }}</th>
                        </tr>
                        <tr class="text-center text-gray-700">
                            <th class="">Email:</th>
                            <th class="">{{ customer?.email }}</th>
                        </tr>
                        <tr class="text-center text-gray-700">
                            <th class="">Contact No:</th>
                            <th class="">{{ customer?.phone_no }}</th>
                        </tr>
                    </table>
                </div>
            </div>

        </div>

    </section>
</template>
<script>
import { mapState } from 'vuex'
export default {
    computed:{
        ...mapState({
            referenceNumber : (state) => state.Cars.refrenceNumber,
            customer: (state) => state.Cars.customer,
        }),
    },
    created(){
        setTimeout(() => {
            this.$store.commit('Cars/setCustomer',{
                first_name: '',
                last_name: '',
                phone_no: '',
                email: '',
            });
            this.$store.commit('Cars/setRefrenceNumber','');
            this.$store.commit('Cars/setComponent',1);
            this.$router.push('/');
        },5000);
    }
}
</script>
<style>

</style>
