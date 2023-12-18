<template>
    <section class="relative  ">
        <img src="asset/images/Store_600.png" class="bg-cover w-full h-72">
         <div class="overlay-content">
             <h2 class="text-6xl font-bold" style="font-family: Montserrat,sans-serif;">Contact Us</h2>
         </div>
     </section>
     <section class="mx-auto container w-3/4 mt-16">
        <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-2">
            <div>
                <p  style="font-family: Montserrat ,sans-serif;">You can find the answers to many commonly asked questions in the FAQs section of our site. Please take a moment to see if your question is answered there. </p>
                <p class="pt-4"  style="font-family: Montserrat ,sans-serif;">If you don't find the answer please feel free to contact us. </p>
                <h2  class="pt-12"  style="font-family: Montserrat ,sans-serif;color: #0e4780; font-weight: bolder;"> Contact form</h2>
                <p class=" border border-b-1 border-[#0e4780] "></p>
               <div class="border border-white shadow p-2">
                <form class="max-w-lg ">
                    <label for="Car Reservation" class="block mb-2 text-sm font-medium text-gray-900 " style="font-family: Montserrat,sans-serif;">Type of enquiry/feedback</label>
                    <select id="Car Reservation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm   w-full p-2.5  " placeholder="Car Reservation"
                    style="font-family: Montserrat,sans-serif;" @input="updateField('feedback_type',$event.target.value)">
                      <option value="car_reservations">Car reservations</option>
                      <option value="customer_service">Customer service</option>
                      <option value="web_issues">Web issues</option>
                      <option value="invoice">Invoice</option>
                      <option value="other">Other</option>
                    </select>
                    <div class="mb-5 mt-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name <span class="text-red-500">*</span></label>
                        <input type="text" :value="contactUs.name" id="text" class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm  w-full p-2.5 " @input="updateField('name',$event.target.value)" placeholder="Name" >
                        <small
                        class="text-red-400"
                        v-if="errors.has('name')"
                        v-text="errors.get('name')"
                       ></small>
                      </div>
                      <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email <span class="text-red-500">*</span></label>
                        <input type="email" id="email" :value="contactUs.email" class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm  w-full p-2.5" @input="updateField('email',$event.target.value)" placeholder="Example@gmail.com">
                        <small
                        class="text-red-400"
                        v-if="errors.has('email')"
                        v-text="errors.get('email')"
                       ></small>
                      </div>
                      <div class="mb-5">
                        <label for="phoneno" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone No <span class="text-red-500">*</span></label>
                        <input type="text" id="phoneno" :value="contactUs.phone_no" class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm  w-full p-2.5 " @input="updateField('phone_no',$event.target.value)" placeholder="0000000000" >
                        <small
                          class="text-red-400"
                          v-if="errors.has('phone_no')"
                          v-text="errors.get('phone_no')"
                      ></small>
                      </div>
                      <div class="mb-5">
                        <label for="Rental agreement/reservation #" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rental agreement/reservation #</label>
                        <input type="text"  :value="contactUs.aggrement" class="shadow-sm bg-white border border-gray-300 text-gray-900 text-sm  w-full p-2.5 " @input="updateField('aggrement',$event.target.value)" >
                      </div>
                      <div class="mb-5">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Commments/enquiry</label>
                        <textarea id="message" rows="4"  class="block p-2.5 w-full text-sm text-gray-900 bg-white  border border-gray-300 " @input="updateField('message',$event.target.value)"  v-model="message" placeholder="Leave a comment..." ></textarea> </div>
                      <div class="flex items-start mb-5">
                        <div class="flex items-center h-5">
                          <input id="terms" type="checkbox" value="1"  class="w-4 h-4 border border-gray-300 rounded bg-white focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                          @input="updateField('terms_conditions',$event.target.value)" required>
                        </div>
                        <label for="terms" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a></label>
                      </div>

                  </form>
                </div>
                <button  @click="saveContactUs()" class="bg-[#0e4780] rounded-md text-md px-4 py-2 mb-6 text-white mt-4">Submit</button>
            </div>
            <div class="mx-auto">
                <h2 class=" text-md font-bold"  style="font-family: Montserrat ,sans-serif;">Call Us :</h2>
                <ul class="mt-6" style="font-family: Montserrat ,sans-serif;">
                    <li class="font-bold mb-2">Melbourne Locations:</li>
                    <li class="mb-2">Blackburn:</li>
                    <li class="mb-2" style="color: #0e4780;">03 9894 3999</li>
                    <li class="mb-2"> Dandenong:
                    </li>
                    <li class="mb-2" style="color: #0e4780;">03 9791 4666</li>
                    <li class="mb-2">Hoppers Crossing:</li>
                    <li class="mb-2" style="color: #0e4780;"> 03 9748 3888</li>
                    <li class="mb-2">Oakleigh:</li>
                    <li class="mb-2" style="color: #0e4780;">03 9563 3363</li>
                    <li class="mb-2">Preston:</li>
                    <li class="mb-2" style="color: #0e4780;">03 9480 3388</li>
                    <li class="mb-2">South Melbourne:</li>
                    <li class="mb-2" style="color: #0e4780;">03 9696 7555</li>
                    <li class="mb-2">Tullamarine:</li>
                    <li class="mb-2" style="color: #0e4780;">03 9335 6777</li>
                </ul>
                <ul class="mt-4 mb-2" style="font-family: Montserrat ,sans-serif;">
                    <li  class="font-bold mb-2">Queensland Locations:</li>
                    <li class="mb-2">Gold Coast:</li>
                    <li class="mb-2" style="color: #0e4780;">07 5525 7500</li>

                    <li class="mb-2"> Brisbane:
                    </li>
                    <li class="mb-2" style="color: #0e4780;">07 3260 6700</li>
                    <li class="mb-2"> Cairns:</li>
                    <li class="mb-2" style="color: #0e4780;"> 07 4031 4477</li>

                </ul>
                <ul  style="font-family: Montserrat ,sans-serif;">
                    <li class="font-bold">National:</li>
                    <li style="color: #0e4780;">1300 CAR HIRE (227 447)</li>
                    <li style="color: #0e4780;">Click here to see locations and opening hours.</li>
                </ul>
            </div>
        </div>
     </section>
</template>
<script>
import { mapState } from 'vuex'
export default {
    computed: mapState({
            contactUs : (state) => state?.contactUs?.contact,
            errors : (state) => state?.contactUs?.errors,
        })
    ,
    data(){
        return {
            message:"",
        }
    },
    methods:{
        updateField(feild,value){
            this.$store.commit('contactUs/updateContact',{
                [feild] : value
            });
        },
        saveContactUs(){
            this.updateField('message',this.message);
            var url = process.env.MIX_ADMIN_APP_URL + "/contact_us";
            this.$store
                .dispatch("SystemForms/addUpdateSupportingForm", {
                    url: url,
                    data: this.contactUs,
                    stateName: "contactUs",
                }).then((res) => {
                    console.log(res.data.status);
                    if(res?.data.status == 'Success'){
                        this.$swal(res.data?.message);
                        this.$store.commit('contactUs/setContact',{
                            feedback_type:"",
                            aggrement:"",
                            message:"",
                            phone_no:"",
                            email:"",
                            name:"",
                            terms_conditions:""
                        });
                        this.message = "";
                    };
                })
        }
    }
}
</script>
<style>
.overlay-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #fff;
}

</style>
