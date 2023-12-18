<template>
    <header style="background-color: #0e4780;" class="sticky fixed top-0 z-[1000]" >
        <nav class="mx-auto flex max-w-7xl items-center justify-content gap-x-36  p-1 lg:px-12" aria-label="Global">
            <div class="flex items-center pl-16">
                <router-link to="/" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-20 p-2 w-auto rounded-full" src="../../../../public/asset/images/logo.jpeg" alt="">

                </router-link>
            </div>
            <div class="hidden lg:flex lg:gap-x-12 ">
                <router-link to="booking" class="text-lg font-semibold leading-6 text-white"
                    style="font-family: Montserrat,sans-serif;">Make a
                    Booking</router-link>
                <div class="relative group ">
                    <button type="button" class="flex items-center text-lg font-semibold leading-6 text-white"
                        style="font-family: Montserrat,sans-serif;" aria-expanded="false">
                        Our Cars
                        <svg class="h-5 w-5 ml-1 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div
                        class="absolute hidden  space-y-2  text-white whitespace-nowrap shadow border border-blue-900 rounded-md overflow-hidden group-hover:block z-10" style="background-color: #0e4780;">
                        <router-link to="/cars-page" class="block px-4 py-2" style="font-family: Montserrat,sans-serif;">Cars
                        </router-link>
                        <router-link to="/suvs" class="block px-4 py-2" style="font-family: Montserrat,sans-serif;">SUV/People Moveover
                            </router-link>
                        <router-link to="/vans" class="block px-4 py-2" style="font-family: Montserrat,sans-serif;">Vans/Uts/Trucks
                            </router-link>
                    </div>
                </div>
                <router-link  to="our-location" class="text-lg font-semibold leading-6 text-white"
                    style="font-family: Montserrat,sans-serif;">Our
                    Location</router-link>
                <router-link  to="our-story" class="text-lg font-semibold leading-6 text-white"
                    style="font-family: Montserrat,sans-serif;">Our
                    Story</router-link>
                <router-link  to="contact-us" class="text-lg font-semibold leading-6 text-white"
                    style="font-family: Montserrat,sans-serif;">Contact
                    Us</router-link>
                <!-- <a  href="admin/login" class="text-lg font-semibold leading-6 text-white"
                    style="font-family: Montserrat,sans-serif;">Login
                </a> -->
            </div>
            <div class="flex lg:hidden justify-end">
                <button id="toggleButton" type="button"  class="text-white float-right">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </nav>

        <div id="mobileMenu" class="lg:hidden fixed inset-0 z-10 hidden " style="background-color: #0e4780;">
            <div class="flex justify-between items-center p-4">
                <router-link to="/" class="text-white flex items-center">
                    <span class="sr-only">Rent A Boomb</span>
                    <img class="h-24 w-auto mx-auto" src="../../../../public/asset/images/logo.png" alt="">
                </router-link>
                <button id="closeButton" type="button" class="text-white">
                    <svg class="h-6 w-6 float-right" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>

            <div class="flex flex-col items-left ml-2 mt-4">
                <router-link to="/booking" class="text-lg font-semibold leading-6 text-white mb-4"
                    style="font-family: Montserrat,sans-serif;">Make
                    a Booking</router-link>
                <div class=" group mb-4">
                    <div   class="flex items-center text-lg font-semibold leading-6 text-white"
                        style="font-family: Montserrat,sans-serif;" aria-expanded="false">
                        Our Cars
                        <svg class="h-5 w-5 ml-1 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div
                        class="absolute hidden mt-2 space-y-2 bg-white text-gray-900  rounded-md overflow-hidden group-hover:block" style="color:#0e4780;">
                        <router-link to="/cars-page" class="block px-4 py-2">Cars</router-link>
                        <router-link to="/suvs" class="block px-4 py-2">SUV/People Moveover</router-link>
                        <router-link to="/vans" class="block px-4 py-2">Vans/Uts/Trucks</router-link>
                    </div>
                </div>
                <router-link to="/our-location" class="text-lg font-semibold leading-6 text-white mb-4"
                    style="font-family: Montserrat,sans-serif;">Our
                    Location</router-link>
                <router-link to="/our-story" class="text-lg font-semibold leading-6 text-white mb-4"
                    style="font-family: Montserrat,sans-serif;">Our
                    Story</router-link>
                <router-link to="/contact-us" class="text-lg font-semibold leading-6 text-white"
                    style="font-family: Montserrat,sans-serif;">Contact
                    Us</router-link>
                <!-- <router-link to="admin/login" class="text-lg font-semibold leading-6 text-white"
                    style="font-family: Montserrat,sans-serif;">Login
                    </router-link> -->
            </div>
        </div>
    </header>
</template>
<script>
export default {
    mounted(){
        document.getElementById('toggleButton').addEventListener('click', function () {
            var mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('hidden');
        });

        document.getElementById('closeButton').addEventListener('click', function () {
            var mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.add('hidden');
        });
    }
}
</script>
