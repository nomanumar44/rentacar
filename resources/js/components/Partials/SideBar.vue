<template lang="">
    <!-- Sidebar -->

    <div
        class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-blue-600 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar"
    >
        <div
            class="overflow-y-auto scrollbar scrollbar-thin overflow-x-hidden flex flex-col justify-between flex-grow myclass"
        >
            <nav class="text-white text-base font-semibold pt-3">
                <router-link
                    to="/dashboard"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </router-link>


                <router-link
                    to="/customers"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Customers
                </router-link>

                 <router-link
                    to="/users"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Users
                </router-link>


                   <router-link
                    to="/categories"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Category
                </router-link>


                  <router-link
                    to="/subcategories"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    SubCategory
                </router-link>


                  <router-link
                    to="/units"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Unit
                </router-link>




            </nav>
            <div>
                <div></div>
                <div></div>
            </div>

            <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">
                Copyright Xelent Solutions @2022
            </p>
        </div>
    </div>
    <!-- ./Sidebar -->
</template>
<script>
export default {
    name: "SideBar",
};
</script>
<style scoped>
.dropbtn {
    background-color: #4caf50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
>
