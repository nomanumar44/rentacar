<template lang="">
    <!-- Sidebar -->

    <div
        class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-blue-600 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar"
    >
        <div
            class="overflow-y-auto scrollbar scrollbar-thin overflow-x-hidden flex flex-col justify-between flex-grow myclass"
        >
            <!-- <nav class="text-white text-base font-semibold pt-3">
                <router-link
                    to="/dashboard"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </router-link>
                <router-link
                    to="/countries"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Countries
                </router-link>
                <router-link
                    to="/states"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    States
                </router-link>
                <router-link
                    to="/cities"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Cities
                </router-link>

                <router-link
                    to="/taxes"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Taxes
                </router-link>

                <router-link
                    to="/customers"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Customers
                </router-link>

                <router-link
                    to="/suppliers"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Suppliers
                </router-link>

                <router-link
                    to="/companies"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Companies
                </router-link>

                <router-link
                    to="/accounts"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Accounts
                </router-link>

                <router-link
                    to="/vouchertypes"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Voucher Types
                </router-link>

                <router-link
                    to="/itemtypes"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Item Types
                </router-link>

                <router-link
                    to="/itemunits"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Item Unit
                </router-link>

                <router-link
                    to="/items"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Items List
                </router-link>




                  <router-link
                    to="/loosemedicine"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                   Loose Items
                </router-link>


                <router-link
                    to="/employees"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Employees
                </router-link>

                <router-link
                    to="/expenses"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Expense
                </router-link>

                <router-link
                    to="/incomes"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Income
                </router-link>

                <router-link
                    to="/gallaries"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Gallery
                </router-link>

                <router-link
                    to="/purchases"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Purchases
                </router-link>

                <router-link
                    to="/purchaseorders"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Purchase Orders
                </router-link>

                <router-link
                    to="/purchasereturns/create"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Purchase Returns
                </router-link>

                <router-link
                    to="/openingstocks"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Opening Stock
                </router-link>

                <router-link
                    to="/sales"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Sales
                </router-link>

                <router-link
                    to="/sales/return"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Sale Return
                </router-link>

                <li>Sale Reports</li>

                <router-link
                    to="/daily/sales/report"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Daily Sale Report
                </router-link>

                <router-link
                    to="/daily/salereturn/report"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Daily Sale Return Report
                </router-link>

                <router-link
                    to="/customer/report"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Customer Report
                </router-link>

                <li>Purchase Reports</li>

                <router-link
                    to="/purchase/report"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Purchase Report
                </router-link>

                <router-link
                    to="/supplier/report"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Supplier Report
                </router-link>

                <li>Reports</li>

                <router-link
                    to="/stock/report"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Stock Report
                </router-link>

                <router-link
                    to="/item/report"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Item Ledger
                </router-link>

                <router-link
                    to="/low_stock/report"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Low Stock Report
                </router-link>

                <router-link
                    to="/company/report"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Company Report
                </router-link>

                <router-link
                    to="/expire_item/report"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Expire Item Report
                </router-link>

                <router-link
                    to="/opening/report"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Opening Report
                </router-link>

                <router-link
                    to="/expense/report"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Expense Report
                </router-link>

                <router-link
                    to="/income/report"
                    class="flex items-center active-nav-link text-white py-4 pl-6 nav-item"
                >
                    <i class="fas fa-sticky-note mr-3"></i>
                    Income Report
                </router-link>
            </nav> -->
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

    created(){
        alert('ok');
    }
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
