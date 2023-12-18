import ErrorHandling from './../../ErrorHandling';

const booking = {
    namespaced: true,
    state: {
        bookings: [],
        limit: 10,
        searchParameter:'',
        loading: 0,
        pagination: {},
        displayDeleteModal: 0,
        errors: new ErrorHandling(),
        booking: {
            'id' : '',
            'car_number' : '',
            'pick_up_date':'',
            'drop_up_date':'',
            'pick_up_time':'',
            'drop_up_time':'',
            'age': null,
            'vehicle_type':'',
            'pick_up_location':'',
            'promoCode':'',
            'rent_price': null,
            'first_name':'',
            'last_name':'',
            'email':'',
            'phone_no':'',
            'payment_type':'',
        },
        edit: 0,
        bookingId: ''
    },
    mutations: {
        setBookings(state, payload) {
            state.bookings = payload;
        },
        setPagination(state, pagination) {
            if(pagination.meta){
                state.pagination = {
                    current_page: pagination.meta.current_page,
                    last_page: pagination.meta.last_page,
                    next_page_url: pagination.links.next,
                    prev_page_url: pagination.links.prev
                };
            }
        },
        setLoading(state, payload){
            state.loading = payload;
        },
        setLimit(state, payload){
            state.limit = payload;
        },
        setSearchParameter(state, payload){
            state.searchParameter = payload.searchParameter;
        },
        displayDeleteModal(state, payload){
            state.displayDeleteModal = payload;
        },
        setEmptyError(state, payload){
            state.errors = new ErrorHandling();
        },
        setErrors(state, payload) {
            state.errors.record(payload);
        },
        updateBooking(state, payload) {
            Object.assign(state.booking, payload);
        },
        setBooking(state, payload){
            state.booking.id = payload.id;
            state.booking.car_number = payload.car_number;
            state.booking.pick_up_date = payload.pick_up_date;
            state.booking.drop_up_date = payload.drop_up_date;
            state.booking.pick_up_time = payload.pick_up_time;
            state.booking.drop_up_time = payload.drop_up_time;
            state.booking.age = payload.age;
            state.booking.vehicle_type = payload.vehicle_type;
            state.booking.pick_up_location = payload.pick_up_location;
            state.booking.promoCode = payload.promoCode;
            state.booking.rent_price = payload.rent_price;
            state.booking.first_name = payload.first_name;
            state.booking.last_name = payload.last_name;
            state.booking.email = payload.email;
            state.booking.phone_no = payload.phone_no;
            state.booking.payment_type = payload.payment_type;
        },
        setEdit(state, payload){
            state.edit = payload;
        },
        setBookingId(state, payload){
            state.bookingId = payload;
        }
    },
};

export default booking;
