import ErrorHandling from './../../ErrorHandling';

const Cars = {
    namespaced: true,
    state: {
        cars: [],
        limit: 10,
        searchParameter:'',
        loading: 0,
        pagination: {},
        currentStep:1,
        displayDeleteModal: 0,
        errors: new ErrorHandling(),
        car: {
            'id' : '',
            'vehicle_name' : '',
            'vehicle_type':'',
            'brand':'',
            'number_of_seats':'',
            'vehicle_number':'',
            'location_store' :'',
            'image':'',
            'price':'',
        },
        edit: 0,
        refrenceNumber:'',
        customer:{
            'first_name' : '',
            'last_name':'',
            'email' : '',
            'phone_no':'',
        },
        color:'',
        carId: '',
        filtersResult:''
    },
    mutations: {
        setCars(state, payload) {
            state.cars = payload;
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
        setComponent(state,payload){
            state.currentStep = payload;
        },
        setFilterData(state,payload){
            state.filtersResult = payload;
        },
        setColor(state,payload){
            state.color = payload;
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
        setRefrenceNumber(state,payload){
            state.refrenceNumber = payload;
        },
        setCustomer(state,payload){
            state.customer.first_name = payload.first_name;
            state.customer.last_name = payload.last_name;
            state.customer.email = payload.email;
            state.customer.phone_no = payload.phone_no;
        },
        setErrors(state, payload) {
            state.errors.record(payload);
        },
        updateCar(state, payload) {
            Object.assign(state.car, payload);
        },
        setCar(state, payload){
            state.car.id = payload.id;
            state.car.vehicle_name = payload.vehicle_name;
            state.car.vehicle_type = payload.vehicle_type;
            state.car.vehicle_number = payload.vehicle_number;
            state.car.brand = payload.brand;
            state.car.number_of_seats = payload.number_of_seats;
            state.car.location_store = payload.location_store;
            state.car.image = payload.image;
            state.car.price = payload.price;
        },
        setEdit(state, payload){
            state.edit = payload;
        },
        setCarId(state, payload){
            state.carId = payload;
        }
    },
};

export default Cars;
