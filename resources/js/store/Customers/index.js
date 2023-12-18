import ErrorHandling from './../../ErrorHandling';

const customers = {
    namespaced: true,
    state: {
        customers: [],
        limit: 10,
        searchParameter:'',
        loading: 0,
        pagination: {},
        displayDeleteModal: 0,
        errors: new ErrorHandling(),
        customer: {
            'id' : '',
            'dob' : '',
            'license_no':'',
            'license_country':'',
            'license_expiry':'',
            'address':'',
            'city':'',
            'state':'',
            'zipcode':'',
            'country':'',
            'number_of_traveller':'',
            'comment':'',
        },
        edit: 0,
        customerId: ''
    },
    mutations: {
        setCustomers(state, payload) {
            state.customers = payload;
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
        updateCustomer(state, payload) {
            Object.assign(state.customer, payload);
        },
        setCustomer(state, payload){
            state.customer.id = payload.id;
            state.customer.dob = payload.dob;
            state.customer.license_no = payload.license_no;
            state.customer.license_country = payload.license_country;
            state.customer.license_expiry = payload.license_expiry;
            state.customer.address = payload.address;
            state.customer.city = payload.city;
            state.customer.state = payload.state;
            state.customer.zipcode = payload.zipcode;
            state.customer.country = payload.country;
            state.customer.number_of_traveller = payload.number_of_traveller;
            state.customer.comment = payload.comment;
        },
        setEdit(state, payload){
            state.edit = payload;
        },
        setCustomerId(state, payload){
            state.customerId = payload;
        }
    },
};

export default customers;
