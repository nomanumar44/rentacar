<template>
    <section class="relative">
        <div class="background-overlay" :style="{ backgroundImage: 'url(asset/images/car-bg.jfif)' }"></div>
        <div class="container mx-auto grid lg:w-3/4 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 items-start gap-2">
        <div>
            <div class="lg:col-span-1 md:col-span-2 lg:w-3/4 sm:px-8">
                <div class="flex items-center justify-center mt-6 sm:flex-row flex-col">
                    <div class=" sm:h-64 h-64 lg:w-full sm:mr-4 flex-shrink-0 mx-auto container">
                        <iframe id="videoFrame" class="w-full lg:w-96 h-full rounded-md" src="https://www.youtube.com/embed/8vPpJIqGMBI?rel=0" title="YouTube Video" frameborder="0" allowfullscreen></iframe>
                        <button id="showButton"  class="hidden sm:block bg-[#0e4780] text-white px-20 py-2 mt-2 rounded-md mx-auto">Show Video</button>
                    </div>
                </div>
            </div>


            <!-- Feature Section -->
            <div class="lg:pt-4 sm:pt-1">
              <!-- First Feature -->
              <div class="flex items-center mt-6 sm:flex-row">
                <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-4 inline-flex items-center justify-center rounded-full">
                    <img src="asset/images/metro.png" class="w-full h-full sm:mx-auto sm:container object-cover rounded-full">
                </div>
                <div class="flex-grow mt-6 sm:text-left">
                    <h2 class="text-lg font-bold mb-2 text-red-600" style="font-family: Montserrat, sans-serif; font-size: 28px;">Metro Traveller</h2>
                    <p class="leading-relaxed text-base whitespace-normal sm:whitespace-normal"><b>Exclusive to areas within 55km of CBD</b></p>
                    <p class="leading-relaxed text-base hide-on-mobile">Efficient city travel with our<br/> Metro Saver or late model cars.</p>
                </div>
            </div>
              <!-- Separator Line -->
              <div class="flex justify-center items-center mb-6 mt-6 ">
                <hr class="border-b-1 border-gray-400 w-3/4 text-center">
              </div>

              <!-- Second Feature -->
              <div class="flex items-center mt-6 sm:flex-row">
                <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-4 inline-flex items-center justify-center rounded-full">
                    <img src="asset/images/unlimited.png" class="w-full h-full object-cover rounded-full">
                </div>
                <div class="flex-grow mt-6 sm:text-left">
                    <h2 class="text-lg font-bold mb-2 text-blue-600" style="font-family: Montserrat, sans-serif; font-size: 28px;">Out of Metro Traveller</h2>
                    <p class="leading-relaxed text-base whitespace-normal sm:whitespace-normal"><b>For travel within and beyond the CBD</b></p>
                    <p class="leading-relaxed text-base hide-on-mobile">Explore the city and beyond on <br/>weekends and road trips with <br/>our latest model cars.</p>
                </div>
            </div>
              <!-- <div class="flex items-center justify-center mt-6 sm:flex-row flex-col">
                  <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-4 inline-flex items-center justify-center rounded-full flex-shrink-0">
                      <img src="asset/images/unlimited.png" class="w-full h-full object-cover rounded-full">
                  </div>
                  <div class="flex-grow mt-6">
                      <h2 class="text-lg font-bold mb-2 text-blue-600" style="font-family: Montserrat,sans-serif; font-size: 28px;">Out of Metro Traveller</h2>
                      <p class="leading-relaxed text-base whitespace-normal" style="font-family: Montserrat,sans-serif;"><b>For travel within and beyond the CBD</b></p>
                      <p class="leading-relaxed text-base" style="font-family: Montserrat,sans-serif; word-break: break-all;">Explore the city and beyond on <br/>weekends and road trips with <br/>our latest model cars.</p>
                  </div>
              </div> -->
            </div>
          </div>
            <!-- Form Section -->
        <div class="mb-12">
            <div class="form mt-2 lg:mt-2 max-w-lg">
                <div class="shadow-md rounded-sm px-4 py-1 mb-1" style="color: #0e4780;">
                <!-- <div class="grid grid-cols-2  mt-4">
                    <div class="flex items-center w-44 ">
                        <input type="radio" id="storeOption1" v-model="searchData.store" name="storeOption" class="bg-white border border-gray-30 py-2">
                        <label for="storeOption1" class="ml-2 whitespace-nowrap text-white">Choose a store</label>
                    </div>
                    <div class="flex items-center ">
                        <input type="radio" id="storeOption2" name="storeOption" class="bg-white border border-gray-30 py-2">
                        <label for="storeOption2" class="ml-2 lg:whitespace-nowrap sm:whitespace-normal text-white">Nearest store based on location</label>
                    </div>
                </div> -->

                <div class="grid grid-cols-1">
                    <label for="storeSelect" class="mb-1 text-white">Location</label>
                    <select id="storeSelect" v-model="searchData.location" class="bg-white border border-gray-30 py-2">
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
                <div class="grid grid-cols-1">
                    <label for="storeSelect" class="mb-1 text-white">What suits your travel needs?</label>
                    <select id="storeSelect"  v-model="searchData.metroType" class="bg-white border border-gray-30 py-2">
                        <option value="">--Please Select--</option>
                        <option value="metro_traveller" selected>Metro Traveller</option>
                        <option value="out_metro_traveller">Out of Metro Traveller</option>
                    </select>
                </div>

                <div class="grid gap-4 md:grid-cols-1 lg:grid-cols-2">
                    <div class="flex flex-col">
                        <label for="name" class="mb-1 text-white">Pick Up Date</label>
                        <input type="date" id="name" v-model="searchData.pickUpDate" name="name" class="bg-white border border-gray-30 py-2">
                    </div>
                    <div class="flex flex-col">
                        <label for="email" class="mb-1 text-white">Drop Off Date</label>
                        <input type="date" id="email" name="email" v-model="searchData.dropUpDate" class="bg-white border border-gray-300 py-2">
                    </div>
                </div>

                <div class="grid gap-4 md:grid-cols-1 lg:grid-cols-2">
                    <div class="flex flex-col">
                        <label for="text1" class="mb-1 text-white">Pick Up Time</label>
                        <input type="time" id="text1" name="text1" v-model="searchData.pickUpTime" class="bg-white border border-gray-300 py-2">
                    </div>
                    <div class="flex flex-col">
                        <label for="text2" class="mb-1 text-white">Drop Off Time</label>
                        <input type="time" id="text2" name="text2" v-model="searchData.dropUpTime"  class="bg-white border border-gray-300 py-2">
                    </div>
                </div>

                <div class="grid gap-4 md:grid-cols-1 lg:grid-cols-2">
                    <div class="flex flex-col">
                        <label for="text3" class="mb-1 text-white">Age</label>
                        <select id="storeSelect2"  v-model="searchData.age"  class="bg-white border border-gray-30 py-2">
                            <option value="">--Please Select--</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25+" selected>25+</option>
                        </select>
                    </div>
                    <div class="flex flex-col">
                        <label for="storeSelect2" class="mb-1 text-white">Vehicle Type</label>
                        <select id="storeSelect2" v-model="searchData.vehicleType" class="bg-white border border-gray-30 py-2">
                            <option value="">--Please Select--</option>
                            <option value="Car" selected>Car</option>
                            <option value="SUV">SUV/People Mover</option>
                            <option value="Ute">Ute/Vans/Truck</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-1">
                    <label for="text6" class="mb-1 text-white">Promo Code</label>
                    <input type="text" id="text6" name="text6" v-model="searchData.promoCode" placeholder="Promo Code if any..." class="bg-white border border-gray-300 py-2">
                </div>
                <div class="grid grid-cols-1 mt-2">
                    <button type="button"  @click="searchFilter" class="bg-transparent w-full border border-blue-600 py-2 text-white" style="font-family: Montserrat,sans-serif;">Find The Best Suited Vehicle</button>
                </div>

                    </div>
                </div>
        </div>

    </div>
    </section>
    <section>
    <div class="pricing-table-2 bg-[#0e4780] py-6 md:py-12">
        <div class="container mx-auto px-4">
          <div class=" text-left container mx-auto max-w-7xl">
            <h1 class="text-3xl md:text-4xl font-medium text-white mb-4 md:mb-6" style="font-family: Montserrat,sans-serif;">Pricing Plans</h1>
            <p class="text-xl md:text-xl font-medium text-white mb-4 md:mb-6" style="font-family: Montserrat,sans-serif;">Rent A Bomb are your #1 choice for cheap car hire, with a range of quality vehicles at affordable prices. With an easy booking process and plenty of options, your search for cheap car hire ends here!</p>
          </div>
          <div class=" text-left container mx-auto max-w-7xl">
            <h1 class="text-3xl md:text-4xl font-medium text-white mb-4 md:mb-6" style="font-family: Montserrat,sans-serif;">Check out our Specials.</h1>
          </div>
          <div class="pricing-plans lg:flex lg:-mx-4 mt-6 md:mt-12">

            <div class="pricing-plan-wrap lg:w-1/3 my-4 md:my-6">
                <div class="pricing-plan border-t-1  border-solid border-white bg-white text-center max-w-sm mx-auto hover:border-indigo-600 transition-colors duration-300">
                    <div class="p-4 border border-t-0 border-l-0 border-r-0 border-white" style="background-color:#2596be;">
                        <h2 class="text-center text-white font-bold text-xl" style="font-family: Montserrat,sans-serif;">Getaway Cars</h2>
                        </div>
                      <div class="p-6" style="background-color: #2596be; clip-path: polygon(0 0, 100% 0, 100% 80%, 50% 100%, 0 80%);">
                    <p class="text-center text-white font-bold text-lg"  style="font-family: Montserrat,sans-serif;">Lowest New Car prices.</p>
                    </div>

                    <div class="px-4 md:py-4">
                  <img src="asset/images/car-1.png">
                  <p class="text-gray-700 text-md text-left container mx-auto pl-10 break-normal p-2" style="font-family: Montserrat,sans-serif;">Looking for a cheap option for <br> your next getaway.
                  </p>
                    <p class="text-gray-700 text-md text-left  container mx-auto pl-10  break-normal p-2" style="font-family: Montserrat,sans-serif;">
                        Check out our range of new cars <br/> and SUV’s.
                    </p>
                    <p class="text-gray-700 text-md text-left  container mx-auto pl-10  break-normal py-2" style="font-family: Montserrat,sans-serif;">
                        Your journey starts here!
                    </p>
                </div>
                <p class="border border-b border-gray-500  mx-auto container w-3/4"></p>
                <div class="p-4">
                  <div class="mt-4 py-4">
                    <router-link to="/booking" class=" text-xl text-white py-2 px-6  w-3/4  text-white  transition-colors duration-300" style="background-color: #2596be;">Get Quote</router-link>
                  </div>
                </div>
              </div>
            </div>

            <div class="pricing-plan-wrap lg:w-1/3 my-4 md:my-6">
                <div class="pricing-plan border-t-1  border-solid border-white bg-white text-center max-w-sm mx-auto hover:border-indigo-600 transition-colors duration-300">
                    <div class="p-4 border border-t-0 border-l-0 border-r-0 border-white" style="background-color: #bf2330;">
                        <h2 class="text-center text-white font-bold text-xl" style="font-family: Montserrat,sans-serif;">Stay on Budget</h2>
                        </div>
                      <div class="p-6" style="background-color: #bf2330; clip-path: polygon(0 0, 100% 0, 100% 80%, 50% 100%, 0 80%);">
                    <p class="text-center text-white font-bold text-lg"  style="font-family: Montserrat,sans-serif;">Lowest Used Car prices</p>
                    </div>

                    <div class="px-4 md:py-2">
                  <img src="asset/images/car-2.png">
                  <p class="text-gray-700 text-md text-left container mx-auto pl-10 break-normal p-2" style="font-family: Montserrat,sans-serif;">Looking for a cheap option for <br> your next getaway.
                  </p>
                    <p class="text-gray-700 text-md text-left  container mx-auto pl-10  break-normal p-2" style="font-family: Montserrat,sans-serif;">
                        Check out our range of new cars <br/> and SUV’s.
                    </p>
                    <p class="text-gray-700 text-md text-left  container mx-auto pl-10  break-normal py-2" style="font-family: Montserrat,sans-serif;">
                        Your journey starts here!
                    </p>
                </div>
                <p class="border border-b  border-gray-500   mx-auto container w-3/4"></p>
                <div class="p-4">
                  <div class="mt-4 py-4">
                    <router-link  to="/booking" class=" text-xl text-white py-2 px-6  w-3/4  text-white  transition-colors duration-300" style="background-color: #bf2330;">Get Quote</router-link>
                  </div>
                </div>
              </div>
            </div>

            <div class="pricing-plan-wrap lg:w-1/3 my-4 md:my-6">
                <div class="pricing-plan border-t-1  border-solid border-white bg-white text-center max-w-sm mx-auto hover:border-indigo-600 transition-colors duration-300">
                    <div class="p-4 border border-t-0 border-l-0 border-r-0 border-white" style="background-color: #2596be;">
                        <h2 class="text-center text-white font-bold text-xl" style="font-family: Montserrat,sans-serif;">Getaway Cars</h2>
                        </div>
                      <div class="p-6" style="background-color: #2596be; clip-path: polygon(0 0, 100% 0, 100% 80%, 50% 100%, 0 80%);">
                    <p class="text-center text-white font-bold text-lg"  style="font-family: Montserrat,sans-serif;">Lowest New Car prices.</p>
                    </div>

                    <div class="px-4 md:py-2">
                  <img src="asset/images/car-3.png" >
                  <p class="text-gray-700 text-md text-left container mx-auto pl-10 break-normal p-2" style="font-family: Montserrat,sans-serif;">Looking for a cheap option for <br> your next getaway.
                  </p>
                    <p class="text-gray-700 text-md text-left  container mx-auto pl-10  break-normal p-2" style="font-family: Montserrat,sans-serif;">
                        Check out our range of new cars <br/> and SUV’s.
                    </p>
                    <p class="text-gray-700 text-md text-left  container mx-auto pl-10  break-normal py-2" style="font-family: Montserrat,sans-serif;">
                        Your journey starts here!
                    </p>
                </div>
                <p class="border border-b  border-gray-500   mx-auto container w-3/4"></p>
                <div class="p-4">
                  <div class="mt-4 py-4">
                    <router-link to="/booking" class="text-xl text-white py-2 px-6  w-3/4  text-white  transition-colors duration-300" style="background-color: #2596be;">Get Quote</router-link>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class=" ml-12 mt-8 w-3/4 text-white font-medium text-xl">
            <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">*Conditions apply. Specials are available at participating stores only. Cannot be used in conjunction with any other offers. Not available during peak periods. Contact your nearest location on 1300 CARHIRE (227 447) for full terms and conditions.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-gray-200 py-16 lg:h-64">
    <div class="container px-4 sm:px-8 md:px-16 lg:px-20 mx-auto max-w-7xl">
    <div class="text-center mb-8">
        <h1 class="sm:text-4xl text-3xl font-medium title-font mb-4" style="color: #bf2330;">Master Cleanse Reliac Heirloom</h1>
        <p class="text-base leading-relaxed mx-auto text-gray-600" style="font-family: Montserrat, sans-serif;">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
      </div>
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/6">
          <div class="text-center">
            <img src="asset/images/one.png" alt="Downloads" class="mx-auto">
            <p class="leading-relaxed mt-2">Choose a travel option</p>
          </div>
        </div>
        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/6">
            <div class="text-center">
              <img src="asset/images/two.png" alt="Users" class="mx-auto">
              <p class="leading-relaxed mt-2">Enter your details</p>
            </div>
          </div>
          <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/6">
            <div class="text-center">
              <img src="asset/images/three.png" alt="Files" class="mx-auto">
              <p class="leading-relaxed mt-2">Select a rental car</p>
            </div>
          </div>
          <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/6">
            <div class="text-center">
              <img src="asset/images/four.png" alt="Places" class="mx-auto">
              <p class="leading-relaxed mt-2">Add optional extras</p>
            </div>
          </div>
          <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/6">
            <div class="text-center">
              <img src="asset/images/five.png" alt="Image Five" class="mx-auto">
              <p class="leading-relaxed mt-2">Submit to reserve a car</p>
            </div>
          </div>
          <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/6">
            <div class="text-center">
              <img src="asset/images/six.png" alt="Image Six" class="mx-auto">
              <p class="leading-relaxed mt-2">We confirm your booking</p>
            </div>
          </div>
      </div>
    </div>
    </section>
    <!-- <section class="text-gray-900 bg-gray-200 h-56 mb-16 body-font">
    <div class="container px-4 sm:px-8 md:px-16 lg:px-20 py-8 mx-auto max-w-7xl">
      <div class="text-center mb-8">
        <h1 class="sm:text-4xl text-3xl font-medium title-font mb-4" style="color: #bf2330;">Master Cleanse Reliac Heirloom</h1>
        <p class="text-base leading-relaxed mx-auto text-gray-600" style="font-family: Montserrat, sans-serif;">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
      </div>
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/6">
          <div class="text-center">
            <img src="one.png" alt="Downloads" class="mx-auto">
            <p class="leading-relaxed mt-2">Downloads</p>
          </div>
        </div>
        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/6">
          <div class="text-center">
            <img src="two.png" alt="Users" class="mx-auto">
            <p class="leading-relaxed mt-2">Users</p>
          </div>
        </div>
        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/6">
          <div class="text-center">
            <img src="three.png" alt="Files" class="mx-auto">
            <p class="leading-relaxed mt-2">Files</p>
          </div>
        </div>
        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/6">
          <div class="text-center">
            <img src="four.png" alt="Places" class="mx-auto">
            <p class="leading-relaxed mt-2">Places</p>
          </div>
        </div>
        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/6">
          <div class="text-center">
            <img src="five.png" alt="Image Five" class="mx-auto">
            <p class="leading-relaxed mt-2">Image Five</p>
          </div>
        </div>
        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/6">
          <div class="text-center">
            <img src="six.png" alt="Image Six" class="mx-auto">
            <p class="leading-relaxed mt-2">Image Six</p>
          </div>
        </div>
      </div>
    </div>
    </section> -->
    <section class="text-gray-600 body-font bg-gray-200 mt-20">
        <div class="container mx-auto pt-12 w-3/4">
            <div class="text-center md:text-left ">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium" style="color: #bf2330; font-family: Montserrat, sans-serif;">Raw Denim Heirloom Man Braid</h1>
            </div>
            <div>
                <p class="text-base leading-relaxed mx-auto text-gray-600" style="font-family: Montserrat, sans-serif;">We have the entire east coast of Australia covered for cheap rental cars, including Melbourne so visit one of our location pages and <br> browse all our vehicles on offer</p>
            </div>
        </div>

        <div class="container mx-auto flex mt-4 w-3/4 pb-4 flex-col md:flex-row items-center">
            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium" style="color: #bf2330; font-family: Montserrat, sans-serif;">Our locations</h1>
                <p class="mb-8 leading-relaxed" style="font-family: Montserrat, sans-serif;">With 11 locations along Australia’s east coast, you’re sure to find a Rent A Bomb office that’s convenient for you. Many of our offices are close to popular airports, including<span style="color: #bf2330;"> Melbourne Airport in Tullamarine, Brisbane Airport, Gold Coast Airport</span> and <span style="color: #bf2330;">Cairns Airport</span>, so if you’re flying into any of these destinations, you won’t need to travel far to pick up your car hire or drop it off when you fly out.</p>
                <div class="flex justify-center">
                    <button class="inline-flex text-white w-full  border-0 py-2 px-8 focus:outline-none   text-lg" style="font-family: Montserrat, sans-serif; background-color: #bf2330;">Learn More</button>
                </div>
            </div>

            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero" src="asset/images/map.jpg" style="max-width: 100%; height: auto;">
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

            const currentTime = `${today.getHours()}:${today.getMinutes()}`;
            const futureTime = `${futureDate.getHours()}:${futureDate.getMinutes()}`;

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
                debugger;
                if(res?.data?.data.length > 0){
                    this.$store.commit('Cars/setFilterData',res?.data?.data);
                    this.$store.commit('Cars/setColor','#2596be');
                    this.$store.commit('Cars/setComponent',2);
                    this.$router.push('/booking');
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
    mounted(){
        const videoFrame = document.getElementById('videoFrame');
        const showButton = document.getElementById('showButton');

        const isMobileView = window.innerWidth < 640;


        function toggleVideoAndButton() {
            if (isMobileView) {
                videoFrame.style.display = 'none';
                showButton.style.display = 'block';
            } else {
                videoFrame.style.display = 'block';
                showButton.style.display = 'none';
            }
        }


        toggleVideoAndButton();

        window.addEventListener('resize', toggleVideoAndButton);

        showButton.addEventListener('click', function () {
            videoFrame.style.display = 'block';
            showButton.style.display = 'none';
        });

    },
    created(){
        this.setDates();
    }
}
</script>
<style scoped>
@media (max-width: 1024px) {
    .hide-on-mobile {
        display: none !important;
    }
}
.curved-box {
    background-color: #3498db;
    padding: 12px;
    border-radius: 50%;
    transition: border-radius 0.5s ease-in-out;
  }

  .curved-box:hover {
    border-radius: 10%;
  }
    .background-overlay  {
        background-size: cover;
        height: 695px !important;
        background-position: center;
        opacity: 0.3;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;

    }

    .container-1 {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        gap: 20px;
        align-items: center;
        justify-content: center;
        height: 100%;
        margin: 0 auto;
        padding: 0 20px;
    }

    .content {
        text-align: left;
        color: black;
    }

    .form {
        background-color: #0e4780;
        padding: 20px;
        border-radius: 8px;
        margin-top: 20px;
        z-index: 20;
        opacity: .7;
    }
    @media screen and (min-width: 768px) {
        .container {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media screen and (min-width: 1024px) {
        .container {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    .iframe-container {
            position: relative;
            overflow: hidden;
            width: 100%;
            padding-top: 56.25%;
        }

        .iframe-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
</style>
