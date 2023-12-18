
<template lang="">
    <div class="flex h-full">
          <!-- Sidebar -->
          <div class="sidebar bg-black bg-opacity-80 w-0 h-full fixed z-10 top-0 left-0 overflow-x-hidden duration-500"
              id="mySidebar">

              <div class="flex justify-between px-4 items-center py-4">
                  <img class="h-10 w-10 relative z-50" src="../../public/asset/images/logocar.png" alt="Xelent Solutions" />
                  <span class="text-white text-bold">RENTBOOMS</span>
                  <a class="closebtn text-white flex items-end cursor-pointer" onclick="closeNav()">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                  </a>
              </div>

              <ul class="mt-2 font-medium">

             <li>
                 <router-link
                 :class=" route_name == '/dashboard' ? 'bg-[#0e4780]' : '' "
                              to="/dashboard"
                              href="#"
                              class="inline-flex focus:outline-none w-full focus:ring  focus:ring-background focus:bg-activesubmenu active:activesubmenu items-center text-left border-0 py-2 text-white px-4"
                                      data-v-01a582d7=""
                          >
                              <svg
                                  class="h-5"
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="22"
                                  height="22"
                                  viewBox="0 0 28.5 28.5"
                              >
                                  <path
                                      id="Icon_material-dashboard"
                                      data-name="Icon material-dashboard"
                                      d="M4.5,19.5h12V4.5H4.5Zm0,12h12v-9H4.5Zm15,0h12v-15h-12Zm0-27v9h12v-9Z"
                                      transform="translate(-3.75 -3.75)"
                                      fill="none"
                                      stroke="#fff"
                                      stroke-width="1.5"
                                  />
                              </svg>
                              <span class="ml-2">Dashboard</span>
                          </router-link>
              </li>

                  <li>
                      <a
                       onclick="myFunction('3')"
                       :class="
                           route_name == '/cars-listing'
                               ? 'bg-[#0e4780] show'
                           : '' "
                          class="flex items-center justify-between cursor-pointer text-white hover:bg-[#0e4780] border-l-4 border-transparent hover:border-l-4 hover:border-white duration-150 py-2 px-4 space-x-2">
                          <router-link to="/cars-listing" class="flex space-x-2 items-center"
                          >
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="38" height="38" viewBox="0 0 256 256" xml:space="preserve">

                            <defs>
                            </defs>
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(45.02412451361867 45.024124513618645) scale(1.83 1.83)" >
                                <path d="M 40.756 42.489 h -1.96 c -0.82 0 -1.484 -0.664 -1.484 -1.484 s 0.664 -1.484 1.484 -1.484 h 1.96 c 0.82 0 1.484 0.664 1.484 1.484 S 41.575 42.489 40.756 42.489 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,253,253); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 89.985 44.526 c -0.919 -6.254 -12.283 -9.606 -22.7 -9.646 c -15.461 -11.31 -34.615 -11.762 -56.938 -1.342 L 3.621 34.66 C 1.523 35.009 0 36.807 0 38.934 v 10.024 c 0 1.039 0.374 2.044 1.051 2.829 l 2.335 2.708 c 0.824 0.956 2.02 1.504 3.282 1.504 h 2.184 c 0.862 4.542 4.855 7.989 9.644 7.989 c 4.79 0 8.783 -3.447 9.645 -7.989 h 36.341 c 0.862 4.542 4.855 7.989 9.645 7.989 s 8.783 -3.447 9.645 -7.989 h 1.894 c 2.389 0 4.334 -1.944 4.334 -4.334 v -6.924 L 89.985 44.526 z M 85.717 42.746 h -1.323 l -0.858 -1.507 C 84.404 41.712 85.149 42.215 85.717 42.746 z M 61.921 34.881 H 31.404 l -2.397 -4.702 C 41.366 27.526 52.252 29.093 61.921 34.881 z M 18.497 61.021 c -3.78 0 -6.855 -3.075 -6.855 -6.854 c 0 -3.78 3.075 -6.855 6.855 -6.855 c 3.78 0 6.855 3.075 6.855 6.855 C 25.352 57.946 22.277 61.021 18.497 61.021 z M 74.128 61.021 c -3.78 0 -6.855 -3.075 -6.855 -6.854 c 0 -3.78 3.075 -6.855 6.855 -6.855 s 6.855 3.075 6.855 6.855 C 80.983 57.946 77.908 61.021 74.128 61.021 z M 85.666 53.032 h -1.787 c -0.565 -4.883 -4.719 -8.688 -9.751 -8.688 s -9.186 3.805 -9.751 8.688 H 28.248 c -0.565 -4.883 -4.719 -8.688 -9.751 -8.688 c -5.032 0 -9.186 3.805 -9.751 8.688 H 6.668 c -0.398 0 -0.775 -0.173 -1.035 -0.474 l -2.335 -2.709 c -0.213 -0.247 -0.331 -0.563 -0.331 -0.89 v -6.469 h 1.619 c 0.82 0 1.484 -0.664 1.484 -1.484 s -0.664 -1.484 -1.484 -1.484 H 2.967 v -0.588 c 0 -0.671 0.48 -1.238 1.142 -1.348 l 7.128 -1.188 l 0.185 -0.087 c 5.087 -2.387 9.954 -4.187 14.619 -5.417 l 3.122 6.125 l 5.664 11.628 c 0.257 0.527 0.785 0.834 1.335 0.834 c 0.218 0 0.439 -0.048 0.649 -0.15 c 0.737 -0.359 1.043 -1.247 0.684 -1.984 l -4.628 -9.499 h 33.437 l 0.004 0.003 l 0.498 -0.003 c 4.47 -0.04 8.798 0.582 12.301 1.616 l 3.134 5.5 c 0.265 0.463 0.756 0.749 1.289 0.749 h 3.502 v 5.952 C 87.033 52.419 86.42 53.032 85.666 53.032 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,253,253); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 74.128 49.449 c -2.602 0 -4.718 2.116 -4.718 4.718 c 0 2.601 2.116 4.717 4.718 4.717 s 4.718 -2.116 4.718 -4.717 C 78.846 51.565 76.729 49.449 74.128 49.449 z M 74.128 55.917 c -0.966 0 -1.751 -0.785 -1.751 -1.75 c 0 -0.966 0.785 -1.751 1.751 -1.751 s 1.751 0.785 1.751 1.751 C 75.879 55.132 75.093 55.917 74.128 55.917 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,253,253); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 18.497 49.449 c -2.601 0 -4.718 2.116 -4.718 4.718 c 0 2.601 2.116 4.717 4.718 4.717 s 4.718 -2.116 4.718 -4.717 C 23.215 51.565 21.098 49.449 18.497 49.449 z M 18.497 55.917 c -0.965 0 -1.751 -0.785 -1.751 -1.75 c 0 -0.966 0.785 -1.751 1.751 -1.751 c 0.965 0 1.751 0.785 1.751 1.751 C 20.248 55.132 19.462 55.917 18.497 55.917 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,253,253); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </svg>
                          <span>Cars</span>
                        </router-link>

                      </a>
                  </li>
                  <li>
                      <a
                       onclick="myFunction('5')"
                       :class="
                           route_name == '/bookings-listing'
                               ? 'bg-[#0e4780] show'
                           : '' "
                          class="flex items-center justify-between cursor-pointer text-white hover:bg-[#0e4780] border-l-4 border-transparent hover:border-l-4 hover:border-white duration-150 py-2 px-4 space-x-2">
                          <router-link to="/bookings-listing" class="flex space-x-2 items-center"
                          >
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="26" height="26" viewBox="0 0 256 256" xml:space="preserve">

                            <defs>
                            </defs>
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                <path d="M 64.095 15.942 H 48.905 c -0.553 0 -1 -0.448 -1 -1 s 0.447 -1 1 -1 h 15.189 c 0.553 0 1 0.448 1 1 S 64.647 15.942 64.095 15.942 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(249,248,248); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 41.095 15.942 H 25.905 c -0.552 0 -1 -0.448 -1 -1 s 0.448 -1 1 -1 h 15.189 c 0.552 0 1 0.448 1 1 S 41.647 15.942 41.095 15.942 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(249,248,248); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 84.137 83.859 H 5.863 C 2.63 83.859 0 81.229 0 77.996 V 19.805 c 0 -3.233 2.63 -5.863 5.863 -5.863 h 12.231 c 0.552 0 1 0.448 1 1 s -0.448 1 -1 1 H 5.863 C 3.733 15.942 2 17.675 2 19.805 v 58.191 c 0 2.13 1.733 3.863 3.863 3.863 h 78.273 c 2.13 0 3.863 -1.733 3.863 -3.863 V 19.805 c 0 -2.13 -1.733 -3.863 -3.863 -3.863 H 71.905 c -0.553 0 -1 -0.448 -1 -1 s 0.447 -1 1 -1 h 12.231 c 3.233 0 5.863 2.63 5.863 5.863 v 58.191 C 90 81.229 87.37 83.859 84.137 83.859 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(249,248,248); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 22.293 51.252 h -8.587 c -1.442 0 -2.615 -1.173 -2.615 -2.615 V 40.05 c 0 -1.442 1.173 -2.616 2.615 -2.616 h 8.587 c 1.442 0 2.615 1.173 2.615 2.616 v 8.587 C 24.909 50.079 23.735 51.252 22.293 51.252 z M 13.707 39.434 c -0.339 0 -0.615 0.276 -0.615 0.616 v 8.587 c 0 0.339 0.276 0.615 0.615 0.615 h 8.587 c 0.339 0 0.615 -0.276 0.615 -0.615 V 40.05 c 0 -0.339 -0.276 -0.616 -0.615 -0.616 H 13.707 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(249,248,248); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 49.293 51.252 h -8.586 c -1.442 0 -2.615 -1.173 -2.615 -2.615 V 40.05 c 0 -1.442 1.173 -2.616 2.615 -2.616 h 8.586 c 1.442 0 2.616 1.173 2.616 2.616 v 8.587 C 51.909 50.079 50.735 51.252 49.293 51.252 z M 40.707 39.434 c -0.339 0 -0.615 0.276 -0.615 0.616 v 8.587 c 0 0.339 0.276 0.615 0.615 0.615 h 8.586 c 0.34 0 0.616 -0.276 0.616 -0.615 V 40.05 c 0 -0.339 -0.276 -0.616 -0.616 -0.616 H 40.707 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(249,248,248); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 76.293 51.252 h -8.586 c -1.442 0 -2.616 -1.173 -2.616 -2.615 V 40.05 c 0 -1.442 1.174 -2.616 2.616 -2.616 h 8.586 c 1.442 0 2.616 1.173 2.616 2.616 v 8.587 C 78.909 50.079 77.735 51.252 76.293 51.252 z M 67.707 39.434 c -0.34 0 -0.616 0.276 -0.616 0.616 v 8.587 c 0 0.339 0.276 0.615 0.616 0.615 h 8.586 c 0.34 0 0.616 -0.276 0.616 -0.615 V 40.05 c 0 -0.339 -0.276 -0.616 -0.616 -0.616 H 67.707 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(249,248,248); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 22.293 74.252 h -8.587 c -1.442 0 -2.615 -1.173 -2.615 -2.615 V 63.05 c 0 -1.442 1.173 -2.615 2.615 -2.615 h 8.587 c 1.442 0 2.615 1.173 2.615 2.615 v 8.587 C 24.909 73.079 23.735 74.252 22.293 74.252 z M 13.707 62.435 c -0.339 0 -0.615 0.276 -0.615 0.615 v 8.587 c 0 0.339 0.276 0.615 0.615 0.615 h 8.587 c 0.339 0 0.615 -0.276 0.615 -0.615 V 63.05 c 0 -0.339 -0.276 -0.615 -0.615 -0.615 H 13.707 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(249,248,248); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 76.293 74.252 h -8.586 c -1.442 0 -2.616 -1.173 -2.616 -2.615 V 63.05 c 0 -1.442 1.174 -2.615 2.616 -2.615 h 8.586 c 1.442 0 2.616 1.173 2.616 2.615 v 8.587 C 78.909 73.079 77.735 74.252 76.293 74.252 z M 67.707 62.435 c -0.34 0 -0.616 0.276 -0.616 0.615 v 8.587 c 0 0.339 0.276 0.615 0.616 0.615 h 8.586 c 0.34 0 0.616 -0.276 0.616 -0.615 V 63.05 c 0 -0.339 -0.276 -0.615 -0.616 -0.615 H 67.707 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(249,248,248); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 89 30.111 H 1 c -0.552 0 -1 -0.448 -1 -1 s 0.448 -1 1 -1 h 88 c 0.553 0 1 0.448 1 1 S 89.553 30.111 89 30.111 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(249,248,248); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 44.34 74.252 c -0.264 0 -0.519 -0.104 -0.707 -0.293 l -4.246 -4.246 c -0.391 -0.391 -0.391 -1.023 0 -1.414 s 1.023 -0.391 1.414 0 l 3.4 3.4 l 5.226 -7.51 c 0.314 -0.454 0.939 -0.566 1.393 -0.25 c 0.453 0.315 0.565 0.939 0.25 1.393 l -5.909 8.491 c -0.169 0.243 -0.438 0.398 -0.732 0.425 C 44.399 74.251 44.37 74.252 44.34 74.252 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(249,248,248); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 47.045 23.743 h -4.09 c -1.577 0 -2.86 -1.283 -2.86 -2.86 V 9.001 c 0 -1.577 1.283 -2.86 2.86 -2.86 h 4.09 c 1.577 0 2.86 1.283 2.86 2.86 v 11.882 C 49.905 22.46 48.622 23.743 47.045 23.743 z M 42.955 8.141 c -0.475 0 -0.86 0.386 -0.86 0.86 v 11.882 c 0 0.475 0.386 0.86 0.86 0.86 h 4.09 c 0.475 0 0.86 -0.386 0.86 -0.86 V 9.001 c 0 -0.475 -0.386 -0.86 -0.86 -0.86 H 42.955 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(249,248,248); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 70.045 23.743 h -4.09 c -1.577 0 -2.86 -1.283 -2.86 -2.86 V 9.001 c 0 -1.577 1.283 -2.86 2.86 -2.86 h 4.09 c 1.577 0 2.86 1.283 2.86 2.86 v 11.882 C 72.905 22.46 71.622 23.743 70.045 23.743 z M 65.955 8.141 c -0.475 0 -0.86 0.386 -0.86 0.86 v 11.882 c 0 0.475 0.386 0.86 0.86 0.86 h 4.09 c 0.475 0 0.86 -0.386 0.86 -0.86 V 9.001 c 0 -0.475 -0.386 -0.86 -0.86 -0.86 H 65.955 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(249,248,248); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 24.045 23.743 h -4.09 c -1.577 0 -2.86 -1.283 -2.86 -2.86 V 9.001 c 0 -1.577 1.283 -2.86 2.86 -2.86 h 4.09 c 1.577 0 2.86 1.283 2.86 2.86 v 11.882 C 26.905 22.46 25.622 23.743 24.045 23.743 z M 19.955 8.141 c -0.475 0 -0.86 0.386 -0.86 0.86 v 11.882 c 0 0.475 0.386 0.86 0.86 0.86 h 4.09 c 0.475 0 0.86 -0.386 0.86 -0.86 V 9.001 c 0 -0.475 -0.386 -0.86 -0.86 -0.86 H 19.955 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(249,248,248); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                            </svg>
                          <span>Bookings</span>
                        </router-link>

                      </a>
                  </li>
                  <li>
                      <a
                       onclick="myFunction('8')"
                       :class="
                           route_name == '/contact-us-listing'
                               ? 'bg-[#0e4780] show'
                           : '' "
                          class="flex items-center justify-between cursor-pointer text-white hover:bg-[#0e4780] border-l-4 border-transparent hover:border-l-4 hover:border-white duration-150 py-2 px-4 space-x-2">
                          <router-link to="/contact-us-listing" class="flex space-x-2 items-center"
                          >
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="28" height="28" viewBox="0 0 256 256" xml:space="preserve">

                            <defs>
                            </defs>
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                <path d="M 41.84 80.213 c -1.5 0 -2.999 -0.57 -4.14 -1.712 L 11.499 52.3 c -1.106 -1.106 -1.715 -2.576 -1.715 -4.14 s 0.609 -3.034 1.715 -4.14 L 53.805 1.715 C 54.91 0.609 56.38 0 57.944 0 c 1.563 0 3.033 0.609 4.14 1.715 l 26.201 26.202 c 2.282 2.282 2.282 5.997 0 8.279 l 0 0 L 45.979 78.501 C 44.838 79.643 43.339 80.213 41.84 80.213 z M 57.944 2 c -1.029 0 -1.997 0.401 -2.726 1.129 L 12.913 45.435 c -0.728 0.729 -1.129 1.696 -1.129 2.726 s 0.401 1.997 1.129 2.726 l 26.202 26.201 c 1.503 1.502 3.948 1.502 5.451 0 l 42.306 -42.305 c 1.503 -1.503 1.503 -3.948 0 -5.451 L 60.67 3.129 C 59.941 2.401 58.974 2 57.944 2 z M 87.578 35.489 h 0.01 H 87.578 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,249,249); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 48.467 51.29 c -1.001 0 -1.912 -0.043 -2.664 -0.136 c -7.057 -0.866 -12.388 -4.929 -12.676 -9.66 c -0.139 -2.271 0.664 -4.461 2.258 -6.17 c 1.648 -1.767 3.991 -2.834 6.668 -3.056 c 0.222 -2.677 1.289 -5.019 3.056 -6.667 c 1.708 -1.594 3.901 -2.396 6.17 -2.258 l 0 0 c 4.731 0.288 8.794 5.619 9.66 12.676 c 0.409 3.328 -0.146 9.793 -1.143 13.305 c -0.095 0.333 -0.355 0.594 -0.688 0.688 C 56.389 50.783 51.9 51.29 48.467 51.29 z M 50.78 25.328 c -1.582 0 -3.1 0.608 -4.308 1.736 c -1.567 1.463 -2.442 3.654 -2.463 6.17 c -0.004 0.546 -0.446 0.987 -0.992 0.992 c -2.517 0.021 -4.708 0.896 -6.171 2.463 c -1.216 1.303 -1.828 2.967 -1.724 4.684 c 0.226 3.708 4.922 7.06 10.924 7.797 c 2.9 0.356 8.611 -0.105 11.97 -0.938 c 0.832 -3.359 1.294 -9.069 0.938 -11.97 c -0.737 -6.002 -4.089 -10.698 -7.797 -10.924 l 0 0 C 51.031 25.332 50.905 25.328 50.78 25.328 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,249,249); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 55.782 27.597 c -0.026 0 -0.053 -0.001 -0.079 -0.003 c -0.551 -0.043 -0.962 -0.524 -0.919 -1.075 l 2.005 -25.591 c 0.043 -0.55 0.534 -0.958 1.075 -0.919 c 0.551 0.043 0.962 0.524 0.919 1.075 l -2.005 25.591 C 56.737 27.199 56.299 27.597 55.782 27.597 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,249,249); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 11.023 48.983 c -0.517 0 -0.955 -0.397 -0.996 -0.922 c -0.043 -0.551 0.368 -1.032 0.919 -1.075 L 36.307 45 c 0.55 -0.05 1.032 0.368 1.075 0.919 s -0.368 1.032 -0.919 1.075 l -25.36 1.986 C 11.076 48.982 11.049 48.983 11.023 48.983 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,249,249); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 60.067 39.115 c -0.469 0 -0.887 -0.331 -0.98 -0.808 c -0.106 -0.542 0.247 -1.067 0.789 -1.174 l 28.913 -5.662 c 0.549 -0.11 1.067 0.247 1.174 0.789 s -0.247 1.067 -0.789 1.174 l -28.913 5.662 C 60.195 39.109 60.131 39.115 60.067 39.115 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,249,249); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 42.239 80.197 c -0.063 0 -0.128 -0.006 -0.193 -0.019 c -0.542 -0.106 -0.895 -0.632 -0.789 -1.174 l 5.662 -28.913 c 0.106 -0.541 0.624 -0.896 1.174 -0.789 c 0.542 0.106 0.896 0.632 0.789 1.174 L 43.219 79.39 C 43.126 79.866 42.708 80.197 42.239 80.197 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,249,249); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 1 90 c -0.256 0 -0.512 -0.098 -0.707 -0.293 c -0.391 -0.391 -0.391 -1.023 0 -1.414 L 19.016 69.57 c 0.391 -0.391 1.023 -0.391 1.414 0 s 0.391 1.023 0 1.414 L 1.707 89.707 C 1.512 89.902 1.256 90 1 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,249,249); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 1.358 75.758 c -0.256 0 -0.512 -0.098 -0.707 -0.293 c -0.391 -0.391 -0.391 -1.023 0 -1.414 l 11.423 -11.422 c 0.391 -0.391 1.023 -0.391 1.414 0 s 0.391 1.023 0 1.414 L 2.065 75.465 C 1.87 75.66 1.614 75.758 1.358 75.758 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,249,249); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 15.242 89.642 c -0.256 0 -0.512 -0.098 -0.707 -0.293 c -0.391 -0.391 -0.391 -1.023 0 -1.414 l 11.422 -11.422 c 0.391 -0.391 1.023 -0.391 1.414 0 s 0.391 1.023 0 1.414 L 15.949 89.349 C 15.754 89.544 15.498 89.642 15.242 89.642 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,249,249); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                            </svg>
                          <span>Contact Us</span>
                        </router-link>
                      </a>
                  </li>
              </ul>

              <div class=" mr-1">
                  <button
                      @click="logout()"
                      class="bg-submenu hover:bg-submenu text-white font-bold py-2 px-4 w-full rounded-lg mt-4"
                  >
                      <div class="flex w-full justify-center">
                          <div>
                              <!-- Generator: Adobe Illustrator 24.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                              <svg
                                  version="1.1"
                                  class="h-4 mt-1 px-2 fill-current"
                                  id="Layer_1"
                                  xmlns="http://www.w3.org/2000/svg"
                                  xmlns:xlink="http://www.w3.org/1999/xlink"
                                  x="0px"
                                  y="0px"
                                  viewBox="0 0 432 429"
                                  style="enable-background: new 0 0 432 429"
                                  xml:space="preserve"
                              >
                                  <g>
                                      <path
                                          class="text-white"
                                          d="M218.3,350.1c21.9,0,43.3,0,65,0c0-1.4,0-2.6,0-3.8c0-26.5,0-53,0-79.5c0-8.3,4.8-15.1,12.2-17.8
                c7.2-2.6,15.4-0.5,20.4,5.3c2.9,3.3,4.5,7.2,4.5,11.7c0,34.5,0.1,69,0,103.5c0,10.4-8.4,18.1-19.2,18.1c-26.3,0-52.5,0-78.8,0
                c-1.3,0-2.5,0-4.2,0c0,4.8,0,9.2,0,13.7c0,14.2-9.9,22.5-23.8,19.7C138.3,409.8,82,398.5,25.7,387.2c-9.6-1.9-15.3-9.1-15.3-18.9
                c0-113,0-226,0-339C10.4,16.9,18.3,9,30.7,9c90.2,0,180.5,0,270.7,0c11.3,0,19.2,7.9,19.2,19.1c0,33.9,0,67.7,0,101.6
                c0,10.7-8,18.9-18.4,19c-10.5,0.1-18.8-8.1-18.8-19c-0.1-26.3,0-52.5,0-78.8c0-1.4,0-2.8,0-4.4c-41.9,0-83.5,0-125.8,0
                c1.1,0.5,1.6,0.7,2.2,0.9c14.2,4.3,28.4,8.5,42.6,12.8c11.4,3.4,15.9,9.4,15.9,21.2c0,87.8,0,175.6,0,263.4
                C218.3,346.4,218.3,348.1,218.3,350.1z"
                                      />
                                      <path
                                          class="text-white"
                                          d="M358.4,216.9c-1.1,0-2.3,0-3.4,0c-28.7,0-57.4,0-86.1,0c-7.7,0-13.7-3.1-17.4-10c-3.5-6.6-3-13.2,1.2-19.4
                c4-5.7,9.7-8,16.6-8c28.7,0,57.4,0,86.1,0c1,0,2-0.1,3.9-0.2c-4.5-4.5-8.5-8.4-12.5-12.4c-2.1-2.1-4.2-4.2-6.3-6.3
                c-7.6-7.7-7.9-19.3-0.5-26.7c7.5-7.5,19.1-7.4,27,0.4c12.2,12.1,24.3,24.3,36.5,36.5c4.6,4.6,9.2,9.2,13.8,13.8
                c7.9,8,7.9,19.2,0,27.2c-16.8,16.9-33.6,33.7-50.5,50.5c-7.7,7.7-19.3,7.7-26.7,0.3c-7.4-7.4-7.2-19,0.4-26.7
                c6.1-6.1,12.2-12.2,18.4-18.3C358.7,217.4,358.5,217.1,358.4,216.9z"
                                      />
                                  </g>
                              </svg>
                          </div>
                          <div>Signout</div>
                      </div>
                  </button>
              </div>
          </div>

          <!-- <Main> -->
          <div id="main" class="w-full  duration-500 transition-all h-full">
              <!-- Header -->
              <div class="z-50 bg-[#0e4780] from-red-700 to-red-900  shadow-md w-full h-fit px-4 py-4 sticky top-0" >
                  <div class="flex justify-between items-center">
                      <div class="flex items-center space-x-2 text-white">
                          <button class="openbtn" onclick="openNav()"
                                      data-v-01a582d7="">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                  stroke="currentColor" class="w-6 h-6">
                                  <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                              </svg>
                          </button>
                          <router-link to="/dashboard"
                                      data-v-01a582d7="">
                              <span class="w-full  font-semibold text-lg px-2 py-1 cursor-pointer">Dashboard</span>
                          </router-link>
                          <!-- <span class="font-semibold text-lg">Dashboard</span> -->
                      </div>
                      <div class="flex space-x-5 items-center text-white">
                          <ul class="font-medium flex items-center space-x-5">

                              <li>
                                  <router-link to="/cars-listing"
                                      data-v-01a582d7="">
                                  <li class="w-full  px-2 py-1 shadow rounded cursor-pointer">Cars</li>
                              </router-link>
                          </li>
                              <li>
                                  <router-link to="/bookings-listing"
                                      data-v-01a582d7="">
                                  <li class="w-full  px-2 py-1 shadow rounded cursor-pointer">Bookings</li>
                              </router-link>
                          </li>
                              <li>
                                  <router-link to="/contact-us-listing"
                                      data-v-01a582d7="">
                                  <li class="w-full px-2 py-1 shadow rounded cursor-pointer">Contact Us</li>
                              </router-link>
                          </li>
                              <!-- <li>
                                  <router-link to="/purchasereturns/create"
                                      data-v-01a582d7="">
                                  <li class="w-full  px-2 py-1 shadow rounded cursor-pointer">Customers</li>
                              </router-link>
                          </li> -->
                          </ul>

                          <ul>
                          <li>
                          <div class="border bg-white w-9 h-9 rounded-full flex items-center justify-center">
                              <a href="#" id="toggle" onclick="myFunction('14')"  :class="
                           route_name == '/settings'  ? 'show'  : '' "
                          class="flex items-center justify-between cursor-pointer">
                                <img style="max-width:35px;" src="/images/elipse.png" alt=""></a>
                                      <div id="myDIV14" class="my-2 hidden absolute w-56 right-1 top-12 px-3  py-4 rounded shadow bg-[#0e4780]  ">
                                     <ul  class="text-white font-medium">
                              <li class="rounded">
                                  <button
                      @click="logout()"
                      class="bg-[#0e4780] hover:bg-[#0e4780] text-white font-bold py-1 px-3 w-full rounded-lg mt-2"
                  >
                      <div class="flex w-full ">
                          <div>

                              <svg
                                  version="1.1"
                                  class="h-4 mt-1 px-2 fill-current"
                                  id="Layer_1"
                                  xmlns="http://www.w3.org/2000/svg"
                                  xmlns:xlink="http://www.w3.org/1999/xlink"
                                  x="0px"
                                  y="0px"
                                  viewBox="0 0 432 429"
                                  style="enable-background: new 0 0 432 429"
                                  xml:space="preserve"
                              >
                                  <g>
                                      <path
                                          class="text-white"
                                          d="M218.3,350.1c21.9,0,43.3,0,65,0c0-1.4,0-2.6,0-3.8c0-26.5,0-53,0-79.5c0-8.3,4.8-15.1,12.2-17.8
                                          c7.2-2.6,15.4-0.5,20.4,5.3c2.9,3.3,4.5,7.2,4.5,11.7c0,34.5,0.1,69,0,103.5c0,10.4-8.4,18.1-19.2,18.1c-26.3,0-52.5,0-78.8,0
                                          c-1.3,0-2.5,0-4.2,0c0,4.8,0,9.2,0,13.7c0,14.2-9.9,22.5-23.8,19.7C138.3,409.8,82,398.5,25.7,387.2c-9.6-1.9-15.3-9.1-15.3-18.9
                                          c0-113,0-226,0-339C10.4,16.9,18.3,9,30.7,9c90.2,0,180.5,0,270.7,0c11.3,0,19.2,7.9,19.2,19.1c0,33.9,0,67.7,0,101.6
                                          c0,10.7-8,18.9-18.4,19c-10.5,0.1-18.8-8.1-18.8-19c-0.1-26.3,0-52.5,0-78.8c0-1.4,0-2.8,0-4.4c-41.9,0-83.5,0-125.8,0
                                          c1.1,0.5,1.6,0.7,2.2,0.9c14.2,4.3,28.4,8.5,42.6,12.8c11.4,3.4,15.9,9.4,15.9,21.2c0,87.8,0,175.6,0,263.4
                                          C218.3,346.4,218.3,348.1,218.3,350.1z"
                                      />
                                      <path
                                          class="text-white"
                                          d="M358.4,216.9c-1.1,0-2.3,0-3.4,0c-28.7,0-57.4,0-86.1,0c-7.7,0-13.7-3.1-17.4-10c-3.5-6.6-3-13.2,1.2-19.4
                                          c4-5.7,9.7-8,16.6-8c28.7,0,57.4,0,86.1,0c1,0,2-0.1,3.9-0.2c-4.5-4.5-8.5-8.4-12.5-12.4c-2.1-2.1-4.2-4.2-6.3-6.3
                                          c-7.6-7.7-7.9-19.3-0.5-26.7c7.5-7.5,19.1-7.4,27,0.4c12.2,12.1,24.3,24.3,36.5,36.5c4.6,4.6,9.2,9.2,13.8,13.8
                                          c7.9,8,7.9,19.2,0,27.2c-16.8,16.9-33.6,33.7-50.5,50.5c-7.7,7.7-19.3,7.7-26.7,0.3c-7.4-7.4-7.2-19,0.4-26.7
                                          c6.1-6.1,12.2-12.2,18.4-18.3C358.7,217.4,358.5,217.1,358.4,216.9z"
                                                                  />
                                  </g>
                              </svg>
                          </div>
                          <div>Signout</div>
                      </div>
                  </button>
                              </li>
                                      </ul>
                                  </div>

                          </div>
                      </li>
                       </ul>
                      </div>

                  </div>
              </div>
              <!-- Main Body -->
              <div class="py-2 px-4">
                  <router-view />
              </div>
          </div>
      </div>

  </template>
  <script>
  import SideBar from "./partials/SideBar";
  import Footer from "./partials/Footer";
  import Navigation from "./partials/Navigation";
  import Mobile from "./partials/Mobile";


  export default {
      components: {
          Mobile,
          Footer,
          Navigation,
          SideBar,
      },
      data() {
          return {
              isSidebarOpen: 0,
              route_name: "",
              isActive: false,
          };
      },
      methods: {
          open_side() {
              this.isActive = !this.isActive;
          },

          logout() {
              var url = process.env.MIX_ADMIN_APP_URL + "/logout";
              axios.get(url).then((res) => {
                  if (res.data.status == "Success") {
                      window.location.reload();
                  } else {
                      alert("Something went wrong");
                  }
              });
          },
      },
      created() {
          var temp = this;
          setInterval(function () {
              temp.route_name = temp.$route.path;
              console.log(temp.route_name);
          }, 200);
      },
  };
  </script>



