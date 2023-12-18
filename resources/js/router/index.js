import { createRouter, createWebHistory } from "vue-router";

import Dashboard from '../components/Dashboard/Dashbaord.vue';
import MainComponent from '../../js/Main.vue';
import IndexView from '../components/Dashboard/Index.vue';
import ServiceCreate from '../components/Services/Create.vue';
import Services from "../components/Services/Index.vue";
import CounterScreen from '../components/Dashboard/CounterScreen.vue';
import CountersCreate from '../components/CounterScreens/Create.vue';
import CountersIndex from '../components/CounterScreens/Index.vue';
import MainCounterScreen from '../components/Dashboard/MainCounterScreen.vue';
import IndexPage from '../components/Pages/Index.vue';
import BookingPage from '../components/Pages/Booking.vue';
import CarsPage from '../components/Pages/Cars.vue';
import ContactUsPage from '../components/Pages/Contactus.vue';
import LocationPage from '../components/Pages/Ourlocation.vue';
import StoryPage from '../components/Pages/Ourstory.vue';
import SuvsPage from '../components/Pages/Suv.vue';
import VansPage from '../components/Pages/Vans.vue';
import ContactListing from '../components/Pages/ContactUsListing.vue';
import BookingListing from '../components/Pages/BookingListing.vue';
import CarsPages from '../components/Pages/CarsPage.vue';
import helpers from '../helper';
const routes = [
    {
        path: "/dashboard",
        name: "dashboard",
        component: MainComponent,
        children: [
            {
                path: "/dashboard",
                name: "dashboard.index",
                component: Dashboard,
            },
            {
                path: "/cars-listing",
                name: "services.create",
                component: Services,
            },
            {
                path: "/bookings-listing",
                name: "bookings.create",
                component: BookingListing,
            },
            {
                path: "/contact-us-listing",
                name: "constactUsListing.create",
                component: ContactListing,
            },
            {
                path: "/cars/create",
                name: "counters.create",
                component: CountersCreate,
            },
            {
                path: "/cars/:id/edit",
                name: "counters.edit",
                component: CountersCreate,
            },
        ],
    },
    {
        path: "/",
        name: "index",
        component: IndexView,
        children: [
            {
                path: "/",
                name:'home.index',
                component: IndexPage,
            },
            {
                path: "/booking",
                name:'booking.index',
                component: BookingPage,
            },
            {
                path: "/all-cars",
                name:'cars.index',
                component: CarsPage,
            },
            {
                path: "/suvs",
                name:'suvs.index',
                component: SuvsPage,
            },
            {
                path: "/vans",
                name:'vans.index',
                component: VansPage,
            },
            {
                path: "/our-location",
                name:'location.index',
                component: LocationPage,
            },
            {
                path: "/our-story",
                name:'story.index',
                component: StoryPage,
            },
            {
                path: "/contact-us",
                name:'contactus.index',
                component: ContactUsPage,
            },
            {
                path:'/cars-page',
                name:'carspages',
                component:CarsPages,
            }

        ],
    },
    {
        path: "/counterscreen",
        name: "CounterScreen",
        component: CounterScreen,
    },
    {
        path: "/maincounterscreen",
        name: "MainCounterScreen",
        component: MainCounterScreen,
    },

]

const router = createRouter({
    history: createWebHistory(),
    routes,
});

// router.beforeEach(async (to, from, next) => {
//          try {
//         const userRole = await helpers.getUserRole();
//         if (!userRole || userRole === null || userRole === undefined || userRole === "user" || userRole === "admin") {
//             if (to.name === "index" || to.name === "MainCounterScreen") {
//                 next();
//             } else if (userRole === "user") {
//                 if (to.name === "CounterScreen") {
//                     next();
//                 } else {
//                     next({ name: "Unauthorized" });
//                 }
//             }else if (userRole === "admin") {
//                 next();
//             } else {
//                 next({ name: "Unauthorized" });
//             }
//         }
//     } catch (error) {
//         console.error("Error getting user role:", error);
//         next({ name: "Unauthorized" });
//     }
//   });

  export default router;

