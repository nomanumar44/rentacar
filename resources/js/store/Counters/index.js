import ErrorHandling from './../../ErrorHandling';

const counters = {
    namespaced: true,
    state: {
        counters: [],
        limit: 10,
        searchParameter:'',
        loading: 0,
        pagination: {},
        displayDeleteModal: 0,
        errors: new ErrorHandling(),
        counter: {
            'id' : '',
            'name' : '',
            'counter_no':'',
            'email':'',
        },
        edit: 0,
        counterId: ''
    },
    mutations: {
        setCounters(state, payload) {
            state.counters = payload;
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
        updateCounter(state, payload) {
            Object.assign(state.counter, payload);
        },
        setCounter(state, payload){
            state.counter.id = payload.id;
            state.counter.email = payload.email;
            state.counter.counter_no = payload.counter_no;
            state.counter.name = payload.name;
        },
        setEdit(state, payload){
            state.edit = payload;
        },
        setCounterId(state, payload){
            state.counterId = payload;
        }
    },
};

export default counters;
