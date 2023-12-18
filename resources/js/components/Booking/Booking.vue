<template>
    <section class=" flex items-center mt-4">
        <div class="w-full max-w-screen-lg mx-auto p-4" style="background-color: #0e4780;">
            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-4 mb-3 mt-2">
            <div class="w-full ">
                <label class="block uppercase whitespace-nowrap mb-2 tracking-wide text-white text-xs font-bold mb-3" for="grid-first-name">
                    <!-- <input type="radio" name="store" v-model="searchData.store" > &nbsp;Choose a store &nbsp;
                    <input type="radio" name="store" v-model="searchData.store">&nbsp; Nearest store based on location &nbsp; -->
                    Location
                </label>
                <select id="storeSelect" @input="updateBooking('pick_up_location',$event.target.value)" class="bg-white border border-gray-30 py-2" v-model="searchData.location">
                    <option value="">--Please Select--</option>
                    <option value="" disabled><b>(Vic)</b></option>
                    <option value="Blackburn" selected>Blackburn</option>
                    <option value="Dendenong">Dendenong</option>
                    <option value="Hoppers_Crossing">Hoppers Crossing</option>
                    <option value="Oakleigh">Oakleigh</option>
                    <option value="Pestron">Pestron</option>
                    <option value="Richmond">Richmond</option>
                    <option value="South_Melbourne">South Melbourne</option>
                    <option value="Tullamarine">Tullamarine (Melbourne Airport)</option>
                    <option value="" disabled></option>
                    <option value="" disabled><b>(NSW)</b></option>
                    <option value="" disabled></option>
                    <option value="" disabled><b>(QId)</b></option>
                    <option value="Brisbane" >Brisbane</option>
                    <option value="Carins" >Carins</option>
                    <option value="Gold Coast" >Gold Coast</option>
                </select>
            </div>
            <div class="w-full">
                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-3" for="grid-last-name">
                    What suits your travel needs?
                </label>
                <select id="storeSelect" class="bg-white border border-gray-30 py-2" v-model="searchData.metroType">
                    <option value="">--Please Select--</option>
                    <option value="metro_traveller" selected>Metro Traveller</option>
                    <option value="out_metro_traveller">Out of Metro Traveller</option>
                </select>
            </div>
            </div>
            <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 gap-4 mb-6">
            <div class="w-full">
                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
                    Pick Up Date
                </label>
                <input type="date" @input="updateBooking('pick_up_date',$event.target.value)" v-model="searchData.pickUpDate" class="appearance-none block w-full bg-white text-gray-900 border border-gray-300  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name"  placeholder="Jane">

            </div>
            <div class="w-full" >
                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-last-name">
                    Drop Off Date
                </label>
                <input type="date" @input="updateBooking('drop_up_date',$event.target.value)"  v-model="searchData.dropUpDate"  class="appearance-none block w-full bg-white text-gray-900 border border-gray-300  py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name"  placeholder="Doe">
            </div>
            <div class="w-full" >
                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-last-name">
                    Pick Up Time
                </label>
                <input type="time"  @input="updateBooking('pick_up_time',$event.target.value)" v-model="searchData.pickUpTime"  class="appearance-none block w-full bg-white text-gray-900 border border-gray-300  py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
            </div>
            <div class="w-full">
                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-last-name">
                    Drop Off Time
                </label>
                <input type="time" @input="updateBooking('drop_up_time',$event.target.value)"  v-model="searchData.dropUpTime"  class="appearance-none block w-full bg-white text-gray-900 border border-gray-300  py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
            </div>
            </div>
            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-4 mb-3">
                <div class="w-full ">
                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
                    Age
                </label>
                <select id="storeSelect2" @input="updateBooking('age',$event.target.value)" class="bg-white border border-gray-30 py-2" v-model="searchData.age">
                    <option value="">--Please Select--</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25+">25+</option>
                </select>
                </div>
                <div class="w-full">
                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-last-name">
                    Vehicle Type
                </label>
                <select id="storeSelect2"  @input="updateBooking('vehicle_type',$event.target.value)" class="bg-white border border-gray-30 py-2" v-model="searchData.vehicleType">
                    <option value="">--Please Select--</option>
                    <option value="Car" selected>Car</option>
                    <option value="SUV">SUV/People Mover</option>
                    <option value="Ute">Ute/Vans/Truck</option>
                </select>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-password">
                    Promo Code
                </label>
                <input @input="updateBooking('promoCode',$event.target.value)" class="appearance-none block w-full bg-white text-gray-900  border border-gray-300  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-password" type="text" v-model="searchData.promoCode" placeholder="Promo Code if any...">

            </div>
            </div>
            <div class="grid lg:grid-cols-1 md:grid-cols-1 w-full" >
                <div class="w-full ">

            <button @click="searchFilter"  type="button" class="bg-transparent border border-blue-300 py-2 w-full text-white"> Find The Best Suited Vehicle</button>

            </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    data(){
        return {
            searchData:{
                store:'',
                location:'Blackburn',
                metroType:'metro_traveller',
                pickUpDate:'',
                dropUpDate:'',
                pickUpTime:'',
                dropUpTime:'',
                age:'22',
                vehicleType:'Car',
                promoCode:'',
            }
        }
    },
    methods:{
        setDates() {
            const today = new Date();
            const futureDate = new Date(today);

            this.searchData.pickUpDate = today.toISOString().substr(0, 10);
            futureDate.setDate(today.getDate() + 7);
            this.searchData.dropUpDate = futureDate.toISOString().substr(0, 10);

            const currentTime = `${String(today.getHours()).padStart(2, '0')}:${String(today.getMinutes()).padStart(2, '0')}`;
            const futureTime = `${String(futureDate.getHours()).padStart(2, '0')}:${String(futureDate.getMinutes()).padStart(2, '0')}`;

            this.searchData.pickUpTime = currentTime;
            this.searchData.dropUpTime = futureTime;

        },
        searchFilter(){
            if(this.searchData?.location == ''){
                this.$swal('Please select location first to search!');
                return;
            }else if(this.searchData?.vehicleType == ''){
                this.$swal('Please select Vehicle Type first to search!');
                return;
            }
            this.updateBooking('pick_up_location',this.searchData?.location);
            this.updateBooking('pick_up_date',this.searchData.pickUpDate);
            this.updateBooking('drop_up_date',this.searchData.dropUpDate);
            this.updateBooking('pick_up_time',this.searchData.pickUpTime);
            this.updateBooking('drop_up_time',this.searchData.dropUpTime);
            this.updateBooking('age',this.searchData.age);
            this.updateBooking('vehicle_type',this.searchData?.vehicleType);
            const url = process.env.MIX_ADMIN_APP_URL + '/filter_data';
            axios.post(url,{
                data:this.searchData,
            }).then((res) => {
                if(res?.data?.data.length > 0){
                    this.$store.commit('Cars/setFilterData',res?.data?.data);
                    this.$store.commit('Cars/setColor','#2596be');
                    this.$store.commit('Cars/setComponent',2);
                }else{
                    this.$swal('No data found please try again!');
                }

            });
        },
        updateBooking(field,value){
            this.$store.commit('Booking/updateBooking',{
                [field] : value,
            });
        },
    },
    created(){
        this.setDates();
    }
}
</script>
