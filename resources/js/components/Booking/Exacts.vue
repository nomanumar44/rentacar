<template>
    <section >
        <div class="container w-full max-w-screen-lg mx-auto">
            <div class="max-w-6xl mx-auto bg-white p-8 rounded-md shadow-md bg-gray-200">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="mb-4 md:mb-0">
                        <img :src="car?.image" alt="Image" class="w-full h-auto rounded-md">
                    </div>
                    <div class="mt-6">
                        <div class="mt-4">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <input type="checkbox" id="childSeat" name="childSeat" value="true" v-model="checkboxes.checkbox1" @change="updateTotal('checkbox1')" class="mr-2">
                                    <label for="childSeat" style="font-family: Montserrat ,sans-serif;"
                                        class="text-gray-800">Child Seat @ $5.00 Per Day.</label>
                                    <input type="number" id="childSeatCount"  name="childSeatCount" v-model="childSeatAmount"
                                        class="mr-2 w-14">
                                </div>
                                <label for="childSeatTotal" class="text-gray-800"
                                    style="font-family: Montserrat ,sans-serif;">${{ parseFloat(5 * childSeatAmount).toFixed(2)}}</label>
                            </div>
<!--
                            <div class="flex mt-2 justify-between items-center">
                                <div class="flex items-center">
                                    <input type="checkbox" v-model="checkboxes.checkbox2" @change="updateTotal('checkbox2')" id="relocationFee" name="relocationFee" value="true"
                                        class="mr-2">
                                    <label for="relocationFee" class="text-gray-800"
                                        style="font-family: Montserrat ,sans-serif;">Relocation Fee</label>
                                </div>
                                <label style="font-family: Montserrat ,sans-serif;" for="relocationFeeTotal"
                                    class="text-gray-800">$150.00</label>
                            </div>

                            <div class="mt-2">
                                <label for="" class="text-gray-800" style="font-family: Montserrat ,sans-serif;">(Drop
                                    off Gold Coast only)</label>
                            </div>

                            <div class="flex mt-2 justify-between items-center">
                                <div class="flex items-center">
                                    <input type="checkbox" v-model="checkboxes.checkbox3" @change="updateTotal('checkbox3')" id="ageSurcharge" name="ageSurcharge" value="true"
                                        class="mr-2">
                                    <label for="ageSurcharge" class="text-gray-800"
                                        style="font-family: Montserrat ,sans-serif;">Age Surcharge @ $10.00 Per
                                        Day</label>
                                </div>
                                <label for="ageSurchargeTotal" class="text-gray-800"
                                    style="font-family: Montserrat ,sans-serif;">$80.00</label>
                            </div> -->
                        </div>

                        <!-- Repeat the above two div blocks for all the prices you want to add -->
                        <hr class="border-t border-gray-500 my-6">
                        <div class="mt-4">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">

                                    <label for="childSeat" class="text-gray-800"
                                        style="font-family: Montserrat ,sans-serif;">Daily rate:</label>
                                </div>

                            </div>

                            <div class="flex mt-2 justify-between items-center">
                                <div class="flex items-center">
                                    <label for="relocationFee" class="text-gray-800"
                                        style="font-family: Montserrat ,sans-serif;">8.00 days @${{ car?.price }}</label>
                                </div>
                                <label for="relocationFeeTotal" class="text-gray-800"
                                    style="font-family: Montserrat ,sans-serif;">${{ totalDays * car?.price }} </label>
                            </div>

                            <div class="mt-2">
                                <label for="" class="text-gray-800" style="font-family: Montserrat ,sans-serif;">Extra
                                    Fees:</label>
                            </div>
                            <div class="flex mt-2 justify-between items-center">
                                <div class="flex items-center">
                                    <label for="relocationFee" class="text-gray-800"
                                        style="font-family: Montserrat ,sans-serif;"> Total Optional Extras</label>
                                </div>
                                <label for="relocationFeeTotal" class="text-gray-800"
                                    style="font-family: Montserrat ,sans-serif;">${{ calculateTotal}}</label>
                            </div>
                            <div class="flex mt-2 justify-between items-center">
                                <div class="flex items-center">
                                    <label for="ageSurcharge" class="text-gray-800"
                                        style="font-family: Montserrat ,sans-serif;">Total Cost:</label>
                                </div>
                                <label for="ageSurchargeTotal" class="text-gray-800"
                                    style="font-family: Montserrat ,sans-serif;">Au${{ parseFloat(totalDays * car?.price) + parseFloat(calculateTotal)}}</label>
                            </div>
                            <label for="ageSurchargeTotal" class="text-gray-800 flex text-xs justify-end"
                                style="font-family: Montserrat ,sans-serif;"><small>(Inc. GST: $35.57)</small></label>
                        </div>
                    </div>
                </div>
                <hr class="border-t border-gray-500 my-6">
                <div class="lg:flex">
                    <div class="lg:w-1/2">
                        <div class="px-14 py-6 border-l-2 border-gray-200 border-opacity-60 sm:flex-col">
                            <div class="flex flex-col sm:flex-row items-start">
                                <h2 class="text-sm sm:text-xl text-gray-600 font-bold title-font mb-2 lg:whitespace-nowrap sm:whitespace-normal" style="font-family: Montserrat, sans-serif;">Vehicle :</h2>
                                <p class="leading-relaxed text-base mb-2 px-2 text-gray-600 lg:whitespace-nowrap sm:ml-2 sm:whitespace-normal" style="font-family: Montserrat, sans-serif;">{{ car?.vehicle_name }}</p>
                            </div>
                            <div class="flex flex-col sm:flex-row items-start">
                                <h2 class="text-sm sm:text-xl text-gray-600 font-bold title-font mb-2 lg:whitespace-nowrap sm:whitespace-normal" style="font-family: Montserrat, sans-serif;">Pickup Location :</h2>
                                <p class="leading-relaxed text-base mb-2 px-2 text-gray-600 lg:whitespace-nowrap sm:whitespace-normal" style="font-family: Montserrat, sans-serif;">{{ booking?.pick_up_location }}</p>
                            </div>
                            <div class="flex flex-col sm:flex-row items-start">
                                <h2 class="text-sm sm:text-xl text-gray-600 font-bold title-font mb-2 lg:whitespace-nowrap sm:whitespace-normal" style="font-family: Montserrat, sans-serif;">Pickup Date & Time :</h2>
                                <p class="leading-relaxed text-base mb-2 px-2 text-gray-600 lg:whitespace-nowrap sm:whitespace-normal" style="font-family: Montserrat, sans-serif;">{{ formatDateFromString(booking?.pick_up_date) + ' ' + booking?.pick_up_time }} </p>
                            </div>
                            <div class="flex flex-col sm:flex-row items-start">
                                <h2 class="text-sm sm:text-xl text-gray-600 font-bold title-font mb-2 lg:whitespace-nowrap sm:whitespace-normal" style="font-family: Montserrat, sans-serif;">Return Location :</h2>
                                <p class="leading-relaxed text-base mb-2 px-2 text-gray-600 lg:whitespace-nowrap sm:whitespace-normal" style="font-family: Montserrat, sans-serif;">{{ booking?.pick_up_location }}</p>
                            </div>
                            <div class="flex flex-col sm:flex-row items-start">
                                <h2 class="text-sm sm:text-xl text-gray-600 font-bold title-font mb-2 lg:whitespace-nowrap sm:whitespace-normal" style="font-family: Montserrat, sans-serif;">Return Date & Time :</h2>
                                <p class="leading-relaxed text-base mb-2 px-2 text-gray-600 lg:whitespace-nowrap sm:whitespace-normal" style="font-family: Montserrat, sans-serif;">{{ formatDateFromString(booking?.drop_up_date) + ' ' + booking?.drop_up_time }}</p>
                            </div>
                            <div class="flex flex-col sm:flex-row items-start">
                                <h2 class="text-sm sm:text-xl text-gray-600 font-bold title-font mb-2 lg:whitespace-nowrap sm:whitespace-normal" style="font-family: Montserrat, sans-serif;">Youngest Driver :</h2>
                                <p class="leading-relaxed text-base mb-2 px-2 text-gray-600 lg:whitespace-nowrap sm:whitespace-normal" style="font-family: Montserrat, sans-serif;">{{ booking?.age }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end space-x-4 max-w-6xl mt-6 container mx-auto">
                <button type="button" @click="simpleEmail" style="border:1px solid #0e4780; font-family: Montserrat ,sans-serif;"
                    class="py-2 px-6 w-80">Email Quote</button>
                <button @click="setBooking" style="background-color: #0e4780;font-family: Montserrat ,sans-serif;"
                    class="py-2 px-6 text-white w-80">Make A Booking</button>
            </div>
        </div>
    </section>
    <section v-if="quiteEmail" class="bg-gray-200 max-w-5xl mx-auto container  mt-6">
        <div class="py-4 text-white flex items-start" style="background-color: #0e4780;">
            <div>
                <h2 class="mx-auto container mt-2 pl-4" style="font-family: Montserrat,sans-serif;">
                    SEND EMAIL QUOTE
                </h2>
            </div>
            <div>
                <!-- <button type="submit" class="p-2 ml-2 rounded-sm text-white bg-gray-900">
                    Click Here
                </button> -->
            </div>
        </div>
        <div class="p-4">
            <div class="p-4">
                <h2 class="font-bold text-lg text-gray-600" style="font-family: Montserrat,sans-serif;">CUSTOMER DETAILS
                    (ALL FIELDS REQUIRED)</h2>
            </div>
            <div class="px-4 grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-4">
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2"
                        for="grid-first-name">
                        First Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" @input="updateBooking('first_name',$event.target.value)"
                        class="appearance-none block w-full bg-white text-gray-900 border border-gray-300  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name"  placeholder="Jane" >
                    <small
                        class="text-red-400"
                        v-if="errors.has('first_name')"
                        v-text="errors.get('first_name')"
                    ></small>

                </div>
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2"  for="grid-last-name">
                        Last Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" @input="updateBooking('last_name',$event.target.value)"
                        class="appearance-none block w-full bg-white text-gray-900 border border-gray-300  py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" placeholder="Doe">
                    <small
                        class="text-red-400"
                        v-if="errors.has('last_name')"
                        v-text="errors.get('last_name')"
                    ></small>
                </div>
            </div>
            <div class="px-4 grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-4">
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2"  style="font-family: Monteserrat ,sans-serif ;"
                        for="grid-first-name">
                        Email <span class="text-red-500">*</span>
                    </label>
                    <input type="text" @input="updateBooking('email',$event.target.value)"
                        class="appearance-none block w-full bg-white text-gray-900 border border-gray-300  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name"  placeholder="example@gmail.com">
                    <small
                        class="text-red-400"
                        v-if="errors.has('email')"
                        v-text="errors.get('email')"
                    ></small>
                </div>
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2"  style="font-family: Monteserrat ,sans-serif ;" for="grid-last-name">
                        Phone No <span class="text-red-500">*</span>
                    </label>
                    <input type="text" @input="updateBooking('phone_no',$event.target.value)"
                        class="appearance-none block w-full bg-white text-gray-900 border border-gray-300  py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" placeholder="00000000000">
                    <small
                        class="text-red-400"
                        v-if="errors.has('phone_no')"
                        v-text="errors.get('phone_no')"
                    ></small>
                </div>
            </div>
            <div class="px-4 grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-4">
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2"  style="font-family: Monteserrat ,sans-serif ;"
                        for="grid-first-name">
                        Payment Method <span class="text-red-500">*</span>
                    </label>
                    <select @input="updateBooking('payment_type',$event.target.value)"
                        class="appearance-none block w-full bg-white text-gray-900 border border-gray-300  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name" >
                        <option>--Please Select --</option>
                        <option>American Express</option>
                        <option>MasterCard</option>
                        <option>Visa</option>
                        <option>Cash</option>
                    </select>
                    <small
                        class="text-red-400"
                        v-if="errors.has('payment_type')"
                        v-text="errors.get('payment_type')"
                    ></small>
                </div>
            </div>
            <div class="mx-auto container flex items-center justify-center p-4">
                <button type="button" @click="addUpdateBooking" class="text-white rounded-sm  font-medium text-sm px-5 py-2.5 text-center me-2 mb-2" style="background-color: #0e4780; font-family: Montserrat,sans-serif;" >Book Now</button>
            </div>
        </div>
    </section>
    <section v-if="confirmBooking" class="bg-gray-200 max-w-5xl mx-auto container  mt-6">
        <div class="py-4 text-white flex items-start" style="background-color: #0e4780;">
            <div>
                <h2 class="mx-auto container mt-2 pl-4" style="font-family: Montserrat,sans-serif;">
                    MAKE A BOOKING NOW
                </h2>
            </div>
            <div>
                <!-- <button type="submit" class="p-2 ml-2 rounded-sm text-white bg-gray-900">Click Here</button> -->
            </div>
        </div>
        <div class="p-4">
            <div class="p-4">
                <h2 class="font-bold text-lg text-gray-600" style="font-family: Montserrat,sans-serif;">CUSTOMER DETAILS
                    (ALL FIELDS REQUIRED)</h2>
            </div>
            <div class="px-4 grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-4">
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2"
                        for="grid-first-name">
                        First Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" @input="updateBooking('first_name',$event.target.value)"
                        class="appearance-none block w-full bg-white text-gray-900 border border-gray-300  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name"  placeholder="Jane" >
                    <small
                        class="text-red-400"
                        v-if="errors.has('first_name')"
                        v-text="errors.get('first_name')"
                    ></small>

                </div>
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2"  for="grid-last-name">
                        Last Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" @input="updateBooking('last_name',$event.target.value)"
                        class="appearance-none block w-full bg-white text-gray-900 border border-gray-300  py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" placeholder="Doe">
                    <small
                        class="text-red-400"
                        v-if="errors.has('last_name')"
                        v-text="errors.get('last_name')"
                    ></small>
                </div>
            </div>
            <div class="px-4 grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-4">
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2"  style="font-family: Monteserrat ,sans-serif ;"
                        for="grid-first-name">
                        Email <span class="text-red-500">*</span>
                    </label>
                    <input type="text"  @input="updateBooking('email',$event.target.value)"
                        class="appearance-none block w-full bg-white text-gray-900 border border-gray-300  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name"  placeholder="example@gmail.com">
                    <small
                        class="text-red-400"
                        v-if="errors.has('email')"
                        v-text="errors.get('email')"
                    ></small>
                </div>
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2"  style="font-family: Monteserrat ,sans-serif ;" for="grid-last-name">
                        Phone No <span class="text-red-500">*</span>
                    </label>
                    <input type="text" @input="updateBooking('phone_no',$event.target.value)"
                        class="appearance-none block w-full bg-white text-gray-900 border border-gray-300  py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" placeholder="00000000000">
                    <small
                        class="text-red-400"
                        v-if="errors.has('phone_no')"
                        v-text="errors.get('phone_no')"
                    ></small>
                </div>
            </div>
            <div class="px-4 grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-4">
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2"  style="font-family: Monteserrat ,sans-serif ;"
                        for="grid-first-name">
                        Payment Method <span class="text-red-500">*</span>
                    </label>
                    <select @input="updateBooking('payment_type',$event.target.value)"
                        class="appearance-none block w-full bg-white text-gray-900 border border-gray-300  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name" >
                        <option>--Please Select --</option>
                        <option>American Express</option>
                        <option>MasterCard</option>
                        <option>Visa</option>
                        <option>Cash</option>
                    </select>
                    <small
                        class="text-red-400"
                        v-if="errors.has('payment_type')"
                        v-text="errors.get('payment_type')"
                    ></small>
                </div>
            </div>
            <div>
                <h2 class="font-bold text-gray-900 p-4" style="font-family: Montserrat,sans-serif;"><b>OPTIONAL DETAILS
                        : </b></h2>
            </div>
            <div class="px-4 grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-4">
                <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-2">
                    <div>
                        <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2"  style="font-family: Monteserrat ,sans-serif ;"
                            for="grid-first-name">
                            DOB (dd/mm/yyyy) :
                        </label>
                        <select id="days"
                                class="border border-gray-300 text-gray-900 text-sm block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                v-model="dobDay">
                                <option v-for="day in days" :key="day">{{ day }}</option>
                        </select>
                    </div>
                    <div>
                        <label class="block uppercase tracking-wide text-white text-xs font-bold mt-6"
                            for="grid-first-name">

                        </label>
                        <select id="months"
                                class="border border-gray-300 text-gray-900 text-sm block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                >
                            <option v-for="month in months" :key="month.key" :selected="month.key == dobMonth">{{ month?.val }}</option>
                        </select>
                    </div>
                    <div>
                        <label class="block uppercase tracking-wide text-white text-xs font-bold mt-6"
                            for="grid-first-name">
                        </label>
                        <select id="years"
                                class="border border-gray-300 text-gray-900 text-sm block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                v-model="dobYear">
                                <option v-for="year in years" :key="year">{{ year }}</option>
                        </select>
                    </div>
                </div>
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2"  style="font-family: Monteserrat ,sans-serif ;" for="grid-last-name">
                        License No :
                    </label>
                    <input type="text" @input="updateCustomer('license_no',$event.target.value)"
                        class="appearance-none block w-full bg-white text-gray-900 border border-gray-300  py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name"  placeholder=" License No....">
                </div>
            </div>
            <div class="px-4 grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-4">
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2"  style="font-family: Monteserrat ,sans-serif ;" for="grid-last-name">
                        License Issue Country :
                    </label>
                    <select @input="updateCustomer('license_country',$event.target.value)"
                        class="appearance-none block w-full bg-white text-gray-900 border border-gray-300  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name"  placeholder="Jane">
                        <option value="">Select Country</option>
                        <option v-for="country of countries" :value="country?.id" :key="country.id" :selected="country?.name == 'Australia'">{{ country?.name }}</option>
                    </select>
                </div>
                <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-2">
                    <div>
                        <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2"  style="font-family: Monteserrat ,sans-serif ;"
                            for="grid-first-name">
                            LICENSE EXPIRY :
                        </label>
                        <select id="days"
                                class="border border-gray-300 text-gray-900 text-sm block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                v-model="expiryLicenceDay">
                                <option v-for="day in days" :key="day">{{ day }}</option>
                        </select>
                    </div>
                    <div>
                        <label class="block uppercase tracking-wide text-white text-xs font-bold mt-6"
                            for="grid-first-name">

                        </label>
                        <select id="months"
                                class="border border-gray-300 text-gray-900 text-sm block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                >
                            <option v-for="(month, index) in months" :key="index + 1" :selected="month.key == expiryLicenceMonth">{{ month?.val }}</option>
                        </select>
                    </div>
                    <div>
                        <label class="block uppercase tracking-wide text-white text-xs font-bold mt-6"
                            for="grid-first-name">
                        </label>
                        <select id="years"
                                class="border border-gray-300 text-gray-900 text-sm block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                v-model="expiryLicenceYear">
                                <option v-for="year in years" :key="year">{{ year }}</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="px-4 grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-4">
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2"  style="font-family: Monteserrat ,sans-serif ;"
                        for="grid-first-name">
                        Address :
                    </label>
                    <input type="text" @input="updateCustomer('address',$event.target.value)"
                        class="appearance-none block w-full bg-white text-gray-900 border border-gray-300  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name" placeholder="Address...">

                </div>
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2"  style="font-family: Monteserrat ,sans-serif ;" for="grid-last-name">
                        City :
                    </label>
                    <input type="text"  @input="updateCustomer('city',$event.target.value)"
                        class="appearance-none block w-full bg-white text-gray-900 border border-gray-300  py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name"  placeholder="City...">
                </div>
            </div>
            <div class="px-4 grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-4">
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2"  style="font-family: Monteserrat ,sans-serif ;"
                        for="grid-first-name">
                        State :
                    </label>
                    <input type="text" @input="updateCustomer('state',$event.target.value)"
                        class="appearance-none block w-full bg-white text-gray-900 border border-gray-300  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name"  placeholder="State...">

                </div>
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2"  style="font-family: Monteserrat ,sans-serif ;" for="grid-last-name">
                        Postcode/ZIP :
                    </label>
                    <input type="text" @input="updateCustomer('zipcode',$event.target.value)"
                        class="appearance-none block w-full bg-white text-gray-900 border border-gray-300  py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name"  placeholder="ZipCode...">
                </div>
            </div>
            <div class="px-4 grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-4">
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2"  style="font-family: Monteserrat ,sans-serif ;"
                        for="grid-first-name">
                        Country :
                    </label>
                    <select @input="updateCustomer('country',$event.target.value)"
                        class="appearance-none block w-full bg-white text-gray-900 border border-gray-300  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name"  placeholder="Jane">
                        <option value="">Select Country</option>
                        <option v-for="country of countries" :value="country?.id" :key="country.id" :selected="country?.name == 'Australia'">{{ country?.name }}</option>
                    </select>

                </div>
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2"  style="font-family: Monteserrat ,sans-serif ;" for="grid-last-name">
                        Travellers No. :
                    </label>
                    <select @input="updateCustomer('number_of_traveller',$event.target.value)"
                        class="appearance-none block w-full bg-white text-gray-900 border border-gray-300  py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name"  placeholder="No. of People Travelling">
                        <option value="">No. of People Travelling...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6+">6+</option>
                    </select>
                </div>
            </div>
            <div class="px-4 grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-4">
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2"  style="font-family: Monteserrat ,sans-serif ;"
                        for="grid-first-name">
                        Comments :
                    </label>
                    <input type="text" @input="updateCustomer('comment',$event.target.value)"
                        class="appearance-none block w-full bg-white text-gray-900 border border-gray-300  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name"  placeholder="Comment...">
                </div>
            </div>
            <div class="p-4">
                <h2 class="font-bold text-lg text-gray-600" style="font-family: Montserrat,sans-serif;">Please note:
                </h2>
                <p class="p-2" style="font-family: Montserrat,sans-serif;">A valid driver's licence must be presented
                    and a security bond and rental payment on day of pick up</p>
            </div>
            <div class="p-4">

                <h2 class="mb-2 text-lg font-semibold text-gray-900 ">Terms, Conditions and Information :</h2>
                <ul class="max-w-5xl text-left text-xs space-y-1 text-black list-disc list-inside " style="font-family: Montserrat,sans-serif;">
                    <li>
                        Minimum age of drivers is 21 years who have held a driving license for at least 2 years.
                    </li>
                    <li>
                        Age surcharge of $10.00 per day applies to all drivers 21-24 years of age.
                    </li>
                    <li>
                        All prices include G.S.T and basic damages cover unless otherwise specified.
                    </li>
                    <li>
                        All vehicles have a $3,600.00 basic damage liability in the event of an incident. This can be reduced to $800 at a cost of $22.00 per day.
                    </li>
                    <li>
                        150 kilometers free per day (enquire in-store for available specials).
                    </li>
                    <li>
                        A surcharge of 18 cents per kilometer applies to excess mileage (enquire in-store for available specials).
                    </li>
                    <li>There is a <b>$400.00</b> bond on all Out Of Metro vehicles.</li>
                    <li>All prices are subject to variation and vehicles are subject to availability.</li>
                    <li>Payment is by Credit Card Debit Card only and is payable at time of vehicle pick-up.</li>
                    <li>All bookings are subject to availability confirmation by the customer is required.</li>
                </ul>
                <div class="flex items-center mb-4 p-2">
                    <input  id="checkbox-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" >
                    <label for="checkbox-1" class="ms-2 text-sm font-medium text-gray-900 ">I agree to the <a href="#" class=" hover:underline" style="color: #0e4780;">terms and conditions</a>.</label>
                </div>
            </div>
        </div>
        <div class="mx-auto container flex items-center justify-center p-4">
            <button type="button" @click="addUpdateBooking" class="text-white rounded-sm  font-medium text-sm px-5 py-2.5 text-center me-2 mb-2" style="background-color: #0e4780; font-family: Montserrat,sans-serif;" >Book Now</button>
        </div>
    </section>
</template>
<script>
import {mapState} from 'vuex';
export default {
    computed:{
        ...mapState({
            car : (state) => state.Cars.car,
            booking: (state) => state.Booking.booking,
            errors: (state) => state?.Booking?.errors,
        }),
        calculateTotal() {
            return parseFloat(this.totalExtraOptionalCharges).toFixed(2);
        }
    },
    data(){
        return {
            confirmBooking:false,
            childSeatAmount:0,
            totalExtraOptionalCharges:0,
            totalDays:8,
            checkboxes: {
                checkbox1: false,
                checkbox2: false,
                checkbox3: false
            },
            values: {
                checkbox1: 5,
                checkbox2: 150,
                checkbox3: 80,
            },
            dobDay:'',
            dobMonth:"",
            dobYear:"",
            expiryLicenceDay:'',
            expiryLicenceMonth:'',
            expiryLicenceYear:'',
            quiteEmail:false,
            countries:[],
            days: Array.from({ length: 31 }, (_, i) => i + 1),
            months: [
                'January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December'
            ],
            years: Array.from({ length: 100 }, (_, i) => new Date().getFullYear() - i),
        }
    },
    methods:{
        formatDateFromString(dateString) {
            const months = [
                'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
            ];
            const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

            const dateParts = dateString.split('-');
            const year = dateParts[0];
            const month = months[parseInt(dateParts[1]) - 1];
            const day = dateParts[2];

            const date = new Date(dateString);
            const dayOfWeek = days[date.getDay()];

            return `${dayOfWeek} ${day} ${month} ${year}`;
        },
        setBooking(){
            this.confirmBooking = !this.confirmBooking;
            this.quiteEmail = false;
        },
        updateCustomer(field,value){
            this.$store.commit('Customers/updateCustomer',{
                [field] : value,
            });
        },
        updateBooking(field,value){
            this.$store.commit('Booking/updateBooking',{
                [field] : value,
            });
        },
        simpleEmail(){
            this.quiteEmail = !this.quiteEmail;
            this.confirmBooking = false;
        },
        updateTotal(checkbox) {
            debugger;
            if (this.checkboxes[checkbox]) {
                if(checkbox === 'checkbox1'){
                    this.totalExtraOptionalCharges += this.values[checkbox] * this.childSeatAmount;
                }else{
                    this.totalExtraOptionalCharges += this.values[checkbox];
                }
            } else {
                if(checkbox === 'checkbox1'){
                    this.totalExtraOptionalCharges -= this.values[checkbox] * this.childSeatAmount;
                }else{
                    this.totalExtraOptionalCharges -= this.values[checkbox];
                }
            }
        },
        getContries(){
            const url = process.env.MIX_ADMIN_APP_URL + '/countries';
            axios.get(url).then((res) => {
                this.countries = res.data;
            })
        },
        addUpdateBooking() {
            this.updateBooking('rent_price',parseFloat(this.totalDays * this.car?.price) + parseFloat(this.calculateTotal));
            this.updateBooking('car_number',this.car?.vehicle_number);
            var url = process.env.MIX_ADMIN_APP_URL + "/booking_cars";
            this.$store
                .dispatch("SystemForms/addUpdateSupportingForm", {
                    url: url,
                    data: this.booking,
                    stateName: "Booking",
                })
                .then((res) => {
                    console.log(res?.status);
                    this.$store.commit("Booking/setBooking", {
                        id : '',
                        car_number : '',
                        pick_up_date:'',
                        drop_up_date:'',
                        pick_up_time:'',
                        drop_up_time:'',
                        age: null,
                        vehicle_type:'',
                        pick_up_location:'',
                        promoCode:'',
                        rent_price: null,
                        first_name:'',
                        last_name:'',
                        email:'',
                        phone_no:'',
                        payment_type:'',
                    });
                    if (res?.status == 200) {
                        this.$swal(res.data.message);
                        this.$store.commit('Cars/setCustomer',{
                            first_name: res.data?.booking?.first_name,
                            last_name: res.data?.booking?.last_name,
                            phone_no: res.data?.booking?.phone_no,
                            email: res.data?.booking?.email,
                        });
                        this.$store.commit('Cars/setRefrenceNumber',res.data?.refrenceNumber);
                        this.$store.commit('Cars/setComponent',4);
                    } else if(res.data.status != "Error"){
                        this.$swal('Some thing went worng');
                    }
                });
        },
    },
    created(){
        this.getContries();
        const currentDate = new Date();
        const currentDay = currentDate.getDate();
        const currentMonth = (currentDate.getMonth() + 1).toString();
        const currentYear = currentDate.getFullYear();
        this.months = this.months.map((item,index) => {
            return {key: index + 1,val:item}
        });
        this.dobDay = currentDay;
        this.dobMonth = currentMonth;
        this.dobYear = currentYear;
        this.expiryLicenceDay =currentDay;
        this.expiryLicenceMonth = currentMonth;
        this.expiryLicenceYear = currentYear;
    }

}
</script>
