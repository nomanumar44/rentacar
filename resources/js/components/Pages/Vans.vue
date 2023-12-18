<template>
    <section class="relative  ">
        <img src="asset/images/Store_600.png" class="bg-cover w-full h-72">
         <div class="overlay-content">
             <h2 class="text-6xl font-bold" style="font-family: Montserrat,sans-serif;">Truck's</h2>
         </div>
     </section>
     <section class="mt-10 mx-auto container px-12">
        <h1 class="text-gray-700">Filter your results :</h1>
        <div class="flex items-center">
          <div class="w-full mr-2">
            <select id="countries1" class="select-1 border border-b-1 border-t-0 border-r-0 border-l-0 text-gray-900 text-sm focus:ring-none focus:outline-none w-full p-2.5">
              <option value="metro_traveller" selected>Metro Traveller</option>
              <option value="out_metro_traveller">Out of Metro Traveller</option>
            </select>
          </div>
          <div class="w-full mr-2">
            <select id="countries2" class="border border-b-1 border-t-0 border-r-0 border-l-0 text-gray-900 text-sm w-full p-2.5">
              <option  value="Car" selected>Cars</option>
              <option value="SUV">SUV/People Mover</option>
              <option value="Ute">Ute/Vans/Truck</option>
            </select>
          </div>
          <div class="w-full">
            <select id="countries3" class="border border-b-1 border-t-0 border-r-0 border-l-0 text-gray-900 text-sm w-full p-2.5">
              <option value="all">All Vehicles</option>
            </select>
          </div>
          <div class="ml-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
        </div>
      </section>
    <section>
        <div class="min-h-screen bg-white text-gray-800">
            <div class="container p-4 lg:p-8 mx-auto">
              <div class="text-center mt-4 lg:mt-8">
                <!-- <div class="text-lg  uppercase font-semibold tracking-wider mb-12">
               <button class="border border-blue-700 text-blue-800 bg-transparent w-3/4 p-1 ">Filter For Result </button>
                </div> -->

              </div>
              <div class="grid grid-cols-1 mt-4  mx-auto bg-white md:grid-cols-3 gap-2 lg:gap-4" v-for="van of vans" :key="van.id">
                <div class=" shadow-sm bg-gray-100 flex flex-col ">
                  <div class="p-5 lg:p-6  text-left flex-grow" style="background-color: #0e4780;">

                    <div>
                      <span class="text-3xl pl-8 lg:text-3xl text-white font-bold text-left" style="font-family: Montserrat ,sans-serif;">Metro {{ van?.vehicle_type }}</span>

                    </div>
                    <span class="text-lg pl-8 text-white font-medium">{{ van?.vehicle_name }} (or similar)</span>
                  </div>
                  <img :src="van?.image" class="flex items-center mx-auto h-50 w-74 mt-4">
                  <div class="p-5 lg:p-6 bg-gray-100 text-left space-y-5 lg:space-y-6 text-gray-700 rounded-b-lg">
                    <ul class="flex flex-col mx-auto pl-20 p-3 space-y-2 items-start justify-start text-sm lg:text-base text-left">
                        <li class="flex items-start space-x-2  whitespace-nowrap">
                          <svg class="text-gray-500 w-5 h-5 inline-block" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M5 13l4 4L19 7"></path></svg>
                          <span>Seats up to {{ van?.number_of_seats ?? 0}}</span>
                        </li>
                        <li class="flex items-start space-x-2 whitespace-nowrap">
                          <svg class="text-gray-500 w-5 h-5 inline-block" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M5 13l4 4L19 7"></path></svg>
                          <span>Manual </span>
                        </li>
                        <li class="flex items-start space-x-2 whitespace-nowrap">
                          <svg class="text-gray-500 w-5 h-5 inline-block" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M5 13l4 4L19 7"></path></svg>
                          <span>Power steering</span>
                        </li>
                        <li class="flex items-start space-x-2 whitespace-nowrap">
                          <svg class="text-gray-500 w-5 h-5 inline-block" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M5 13l4 4L19 7"></path></svg>
                          <span>Air conditioning
                        </span>
                        </li>
                        <li class="flex items-start space-x-2 whitespace-nowrap">
                            <svg class="text-gray-500 w-5 h-5 inline-block" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M5 13l4 4L19 7"></path></svg>
                            <span>Hydraulic Tailgate
                          </span>
                          </li>
                      </ul>

                      <p class="mt-2 text-center font-medium" style="color: #0e4780; font-family: Montserrat , sans-serif;">
                        <strong>from  {{ parseFloat(van?.price).toFixed(2) }}</strong> <small>per day*</small>
                      </p>
                      <div class="flex justify-center">
                        <router-link to="/booking" class="px-4 py-3 w-3/4 text-white text-center uppercase font-semibold rounded  block w-full" style="background-color: #0e4780; font-family:Montserrat , sans-serif;" href="javascript:void(0)">
                            Select
                        </router-link>
                    </div>
                  </div>

                  <!-- <div class="p-6" style="background-color: #0e4780;"></div> -->
                </div>
              </div>
            </div>
          </div>
    </section>
    <section class="mx-auto container w-3/4">
        <h2 class="text-2xl font-bold mb-2" style="font-family: Montserrat,sans-serif; color: #0e4780;"><b>Cheaper Van & Ute Hire You Can Rely On</b></h2>
        <p style="font-family: Montserrat,sans-serif; ">Is your business in need of van or ute rental services across Australia? Are you perhaps on a budget and concerned about the associated costs this will add to your business? Fortunately for you and many businesses in a similar situation to you, Rent A Bomb offers the cheapest and most flexible hire services across the country. We have a wide selection of commercial vehicles available that can assist in your transportation needs, from high utility trucks and vans, to smaller models that make carting whatever goods you have from point A to point B.</p>
         <p class="pt-4" style="font-family: Montserrat,sans-serif; ">If you would like to learn more, reach out to one of our many offices across Australia today by calling 03 9696 7555 or 1300 CAR HIRE <span style="color: #0e4780;">(227 447)</span></p>
    </section>
    <section class="mx-auto container w-3/4 mt-6">
        <h2 class="text-2xl font-bold mb-2" style="font-family: Montserrat,sans-serif; color: #0e4780;"><b>Why Choose Rent A Bomb for Your Van or Ute Rental</b></h2>
        <p style="font-family: Montserrat,sans-serif; ">Rent A Bomb has been delivering commercial vehicle hire services to businesses across the great Australian landscape since our origins back in 1979. In the decades since, we have cultivated our understanding of what our clients need from us – and more importantly, our vehicles. If you are in need of a surprisingly cost-effective van or ute, you can rest assured that each and every vehicle in our extensive fleet has undergone frequent service and maintenance. To improve the service just that bit more, we can also offer optimal route advice, in-built GPS systems, and 24-hour roadside assistance, should the need ever arise. It is all part of our commitment to be the partners you need to get the job done.</p>
         </section>
         <section class="mx-auto container w-3/4 mt-6">
            <h2 class="text-2xl font-bold mb-2" style="font-family: Montserrat,sans-serif; color: #0e4780;"><b>Contact Our Team Today to Learn More About Van & Ute Hire in Melbourne & Beyond</b></h2>
            <p style="font-family: Montserrat,sans-serif; ">The team at Rent A Bomb have experience working with businesses of all shapes and sizes across the country, and so we have made vehicles available for hire in a variety of locations across the states and wider Australia, including:</p>
        <ul style="font-family: Montserrat,sans-serif; color: #0e4780; font-weight: bolder;">
        <li><i>Blackburn</i>
        </li>
        <li><i>Dandenong</i></li>
        <li><i> Hoppers Crossing</i></li>
        <li><i>Oakleigh</i></li>
        <li><i>Preston</i></li>
        <li><i>Richmond</i></li>
        <li><i>South Melbourne</i></li>
        <li><i>Tullamarine (Melbourne Airport)</i></li>
        </ul>
        <p class="pt-4 pb-4" style="font-family: Montserrat,sans-serif; "    > Require more information on our cheaper van or rental hire services? Contact us today by calling<span style="color: #0e4780;"> 03 9696 7555 or 1300 227 447</span> today! </p>

    </section>
</template>
<script>
import { mapState } from 'vuex';
export default {
    data(){
        return {
            vans:"",
        }
    },
    methods:{
        fetchVans(){
            const url = process.env.MIX_ADMIN_APP_URL + '/get_vans';
            axios.get(url).then((res) => {
                this.vans = res?.data?.data;
            });
        },
    },
    created(){
        this.fetchVans();
    }
}
</script>
