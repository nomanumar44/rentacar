import ErrorHandling from './../../ErrorHandling';

const contactUs = {
    namespaced: true,
    state: {
        contactus: [],
        limit: 10,
        searchParameter:'',
        loading: 0,
        pagination: {},
        displayDeleteModal: 0,
        errors: new ErrorHandling(),
        contact: {
            'id' : '',
            'feedback_type' : '',
            'name':'',
            'email':'',
            'phone_no':'',
            'aggrement':'',
            'message' :'',
            'terms_coditions':'',
        },
        edit: 0,
        contactId: ''
    },
    mutations: {
        setcontactUs(state, payload) {
            state.contactus = payload;
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
        updateContact(state, payload) {
            Object.assign(state.contact, payload);
        },
        setContact(state, payload){
            state.contact.id = payload.id;
            state.contact.email = payload.email;
            state.contact.phone_no = payload.phone_no;
            state.contact.name = payload.name;
            state.contact.feedback_type = payload.feedback_type;
            state.contact.message = payload.message;
            state.contact.aggrement = payload.aggrement;
        },
        setEdit(state, payload){
            state.edit = payload;
        },
        setContactId(state, payload){
            state.contactId = payload;
        }
    },
};

export default contactUs;
