<template>
    <nav class="border-gray-200 px-2 sm:px-4 rounded dark:bg-gray-800">
        <div class="container flex flex-wrap justify-between">
            <div class="flex w-60">
                <button
                    class="p-1 px-4 mr-2"
                    @click="sidebarOpen = !sidebarOpen"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        class="h-6 w-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                    </svg>
                </button>
                <div class="mt-6 w-2/5">
                    <img class="mx-auto" src="images/logo (1).png" alt="" />
                </div>
            </div>

            <div class="flex md:order-2">
                <div class="">
                    <div class="flex mt-1">
                        <div class="w-full text-center mt-3">
                            <div class="text-lg"><p>Olivier.</p></div>
                            <div class="text-sm text-gray-400 text-center">
                                <p>Admin</p>
                            </div>
                        </div>
                        <div class="w-full ml-2 mt-2">
                            <button
                                id="dropdownBottomButton"
                                data-dropdown-toggle="dropdownBottom"
                                data-dropdown-placement="bottom"
                                class="text-gray focus:ring-none focus:outline-none focus:ring-none font-medium rounded-lg text-sm py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-none dark:focus:ring-none"
                                type="button"
                            >
                                <img
                                    class="h-8 mt-1"
                                    src="images/elipse.png"
                                    alt=""
                                />
                            </button>
                            <!-- Dropdown menu -->
                            <div
                                id="dropdownBottom"
                                class="z-10 hidden rounded-lg bg-gray-100 divide-y divide-gray-100 rounded shadow w-36 dark:bg-gray-700"
                            >
                                <ul
                                    class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownDefault"
                                >
                                    <li>
                                        <a
                                            href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                            >Dashboard</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                            >Settings</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                            >Earnings</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                            >Sign out</a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <button
                    data-collapse-toggle="mobile-menu-4"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-none focus:ring-none dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-4"
                    aria-expanded="false"
                >
                    <span class="sr-only">Open main menu</span>
                    <svg
                        class="w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                    <svg
                        class="hidden w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </button>
            </div>

            <div
                class="hidden justify-end w-full md:flex md:w-auto md:order-1"
                id="mobile-menu-4"
            >
                <ul
                    class="flex flex-col mt-4 md:flex-row md:text-sm md:font-sm"
                >
                    <li>
                        <a
                            href="#"
                            class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 rounded md:bg-transparent hover:text-orange md:p-0 dark:text-white"
                            aria-current="page"
                        >
                            <div class="px-2">
                                <button
                                    class="bg-lightgray hover:bg-lightgray text-darkgray py-2 px-2 text-sm rounded"
                                >
                                    Sale
                                </button>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 hover:text-orange md:hover:bg-transparent md:border-0 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                        >
                            <div class="px-2">
                                <button
                                    class="bg-lightgray hover:bg-lightgray text-darkgray py-2 px-2 text-sm rounded"
                                >
                                    Sale Return
                                </button>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 hover:text-orange md:hover:bg-transparent md:border-0 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                        >
                            <div class="px-2">
                                <button
                                    class="bg-lightgray hover:bg-lightgray text-darkgray py-2 px-2 text-sm rounded"
                                >
                                    Purchase
                                </button>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 hover:text-orange md:hover:bg-transparent md:border-0 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                        >
                            <div class="px-2">
                                <button
                                    class="bg-lightgray hover:bg-lightgray text-darkgray py-2 px-2 text-sm rounded"
                                >
                                    Purchase Return
                                </button>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 hover:text-orange md:hover:bg-transparent md:border-0 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                        >
                            <div class="px-2">
                                <button
                                    class="bg-lightgray hover:bg-lightgray text-darkgray py-2 px-2 text-sm rounded"
                                >
                                    Daily Sale Report
                                </button>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 hover:text-orange md:hover:bg-transparent md:border-0 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                        >
                            <div class="px-2">
                                <button
                                    class="bg-lightgray hover:bg-lightgray text-darkgray py-2 px-2 text-sm rounded"
                                >
                                    Daily Sale return report
                                </button>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    
};
</script>
