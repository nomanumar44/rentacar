<template>
    <div>
        <section class="relative  ">
            <img src="asset/images/Store_600.png" class="bg-cover w-full h-72">
             <div class="overlay-content">
                 <h2 class="text-6xl font-bold" style="font-family: Montserrat,sans-serif;">Car's</h2>
             </div>
         </section>
         <section class="mt-10 mx-auto container px-12">
            <h1 class="text-gray-700">Filter your results :</h1>
            <div class="flex items-center">
              <div class="w-full mr-2">
                <select @change="filteredData('metroType',$event.target.value)" class="select-1 border border-b-1 border-t-0 border-r-0 border-l-0 text-gray-900 text-sm focus:ring-none focus:outline-none w-full p-2.5">
                  <option value="metro_traveller">Metro Traveller</option>
                  <option value="out_metro_traveller">Out of Metro Traveller</option>
                </select>
              </div>
              <div class="w-full mr-2">
                <select @change="filteredData('vechileType',$event.target.value)" class="border border-b-1 border-t-0 border-r-0 border-l-0 text-gray-900 text-sm w-full p-2.5">
                  <option  value="Car">Cars</option>
                  <option value="SUV">SUV/People Mover</option>
                  <option value="Ute">Ute/Vans/Truck</option>
                </select>
              </div>
              <div class="w-full">
                  <select @change="filteredData('allVehicles',$event.target.value)" class="border border-b-1 border-t-0 border-r-0 border-l-0 text-gray-900 text-sm w-full p-2.5">
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

                    </div>
                    <div class="grid grid-cols-1  mx-auto bg-white md:grid-cols-3 gap-2 lg:gap-4">
                        <div class=" shadow-sm bg-gray-100 flex flex-col" v-for="car in cars" :key="car?.id">
                            <div class="p-5 lg:p-6 text-left flex-grow" :style="{ backgroundColor: car?.location_store == 'metro_traveller' ? '#bf2330':'#0e4780'  }">

                            <div>
                                <span class="text-3xl pl-8 lg:text-3xl text-white font-bold text-left" style="font-family: Montserrat ,sans-serif;"> {{ car?.location_store == 'metro_traveller' ? 'Metro' : 'Out Of Metro'}} Basic</span>

                            </div>
                            <span class="text-lg pl-8 text-white font-medium">{{ car?.vehicle_name }} (or similar)</span>
                            </div>
                            <img :src="car?.image" class="flex items-center mx-auto h-50 w-74 mt-4">
                            <div class="p-5 lg:p-6 bg-gray-100 text-left space-y-5 lg:space-y-6 text-gray-700 rounded-b-lg">
                            <ul class="flex flex-col mx-auto pl-20 space-y-2 items-start justify-start text-sm lg:text-base text-left">
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

                                <p class=" text-center font-medium" style="color: #0e4780; font-family: Montserrat , sans-serif;">
                                <strong>${{ car?.price ?? 0 }}</strong> <small>per day*</small>
                                </p>

                                <div class="flex justify-center">
                                    <router-link to="/booking" class="px-4 py-3 w-3/4 text-white text-center uppercase font-semibold rounded block" :style="{ backgroundColor: car?.location_store == 'metro_traveller' ? '#bf2330':'#0e4780'  }" >
                                        Select
                                    </router-link>
                                </div>
                            </div>

                            <div class="p-6" :style="{ backgroundColor: car?.location_store == 'metro_traveller' ? '#bf2330':'#0e4780'  }"></div>
                        </div>
                    </div>
                  </div>
                </div>
          </section>
        </div>
</template>
<script>
import {mapState} from 'vuex';
export default {
    computed: {
        ...mapState({
            pagination: state => state.Cars.pagination,
            loading: state => state.Cars.loading,
            displayDeleteModal: state => state.Cars.displayDeleteModal,
        }),
    },
    data(){
        return {
            cars:"",
            vehcileType:"",
            metroType:"",
            allVehciles:"",
            vehicles:"",
        }
    },
    methods:{
        fetchCars(){
            const  url = process.env.MIX_ADMIN_APP_URL+'/get_cars';
            axios.get(url).then((res) => {
                this.vehicles = res?.data?.data;
            });
        },
        filteredData(type,value) {
            debugger;
             let filtered = this.vehicles;
             switch (type) {
  case 'metroType':
    this.metroType = value;
    break;
  case 'vehicleType':
    this.vehicleType = value;
    break;
  case 'allVehicles':
    this.allVehicles = value;
    break;
  default:
    break;
}

if (this.vehicleType !== '' && this.metroType !== '') {
  this.cars = filtered.filter(vehicle => (
    vehicle.location_store === this.metroType && vehicle.vehicle_type === this.vehicleType
  ));
} else if (this.metroType !== '' && this.vehicleType === '') {
  this.cars = filtered.filter(vehicle => (
    vehicle.location_store === this.metroType
  ));
} else if (this.allVehicles === 'all') {
  // When selecting all vehicles, show the entire filtered list
  this.cars = filtered;
} else {
  // Reset cars array or apply other default behavior when no conditions are met
  this.cars = [];
}


            // if (this.allVehciles && this.allVehciles === 'all') {
            //     filtered = filtered.filter(vehicle => vehicle.vehcileType === this.vehcileType);
            // }

            // this.cars =  filtered;
        },

    },
    created(){
        this.fetchCars();
        setTimeout(() => {
            this.filteredData('metroType','metro_traveller');
        }, 5000);
    }
}
</script>
