<template>
    <section class="relative  ">
        <img src="asset/images/Store_600.png" class="bg-cover w-full h-72">
         <div class="overlay-content">
             <h2 class="text-6xl font-bold" style="font-family: Montserrat,sans-serif;">Our Location</h2>
         </div>
     </section>

    <section>
        <div class="flex flex-wrap  justify-center">
            <div class="xl:w-1/3 lg:w-1/2 md:w-full -px-6 py-6  border-gray-200 border-opacity-60">
              <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2" style="color: #0e4780;">Victoria locations</h2>
              <h3 class="leading-relaxed text-base mb-1"> Melbourne</h3>
              <p class="border border-b-0 border-gray-300"></p>
              <ul>
                <li style="color: #0e4780;">Blackburn</li>
                <li style="color: #0e4780;">Dandenong</li>
                <li style="color: #0e4780;">Hoppers Crossing</li>
                <li style="color: #0e4780;">Oakleigh</li>
                <li style="color: #0e4780;">Preston</li>
                <li style="color: #0e4780;">Richmond</li>
                <li style="color: #0e4780;">South Melbourne</li>
                <li style="color: #0e4780;">Tullamarine (Melbourne Airport)</li>
             </ul>
            </div>
            <div class="xl:w-1/3 lg:w-1/2 md:w-full px-8 py-6  border-gray-200 border-opacity-60">
              <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2" style="color: #0e4780;">Queensland locations</h2>
              <p class="leading-relaxed text-base "> Brisbane</p>
              <p class="border border-b-0 border-gray-300"></p>
              <ul>
                <li class="text-sm" style="color: #0e4780;">Brisbane</li>
                <li class="pt-3">Gold Coast</li>
                <p class="border border-b-0 border-gray-300"></p>
                <li class="text-sm" style="color: #0e4780;">Gold Coast</li>
                <li  class="pt-3">Cairns</li>
                <p class="border border-b-0 border-gray-300"></p>
                <li  class="text-sm" style="color: #0e4780;">Cairns</li>
             </ul>

            </div>
            </div>
    </section>
</template>
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
