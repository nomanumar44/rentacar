import { createStore } from "vuex";
import Services from './Services/index'
import SystemForms from './SystemForms/index';
import Counters from './Counters/index';
import contactUs from "./ContactUs/index";
import Cars from './Cars/index';
import Booking from './Booking/index';
import Customers from "./Customers/index";
export default new  createStore({
  strict: true,
  modules: {
    Services,
    SystemForms,
    Counters,
    contactUs,
    Cars,
    Booking,
    Customers,
  }
});
