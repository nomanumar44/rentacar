import ErrorHandling from './../../ErrorHandling';

const services = {
    namespaced: true,
    state: {
        services: [],  
        limit: 10,
        searchParameter:'',
        loading: 0,
        pagination: {},
        displayDeleteModal: 0,
        errors: new ErrorHandling(),
        service: {  
            'id' : '',
            'name' : '',
            'urdu_name':'',
        },
        edit: 0,
        serviceId: ''  
    },
    mutations: {
        setServices(state, payload) {  
            state.services = payload;
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
        updateService(state, payload) {  
            Object.assign(state.service, payload);
        },
        setService(state, payload){  
            state.service.id = payload.id;
            state.service.name = payload.name;
            state.service.urdu_name = payload.urdu_name;
        },
        setEdit(state, payload){
            state.edit = payload;
        },
        setServiceId(state, payload){  
            state.serviceId = payload;
        }
    },
};

export default services;