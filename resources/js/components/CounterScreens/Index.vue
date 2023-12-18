<template>
    <div>
        <div class=" rounded-md px-6 py-10 max-w-9xl mx-auto bg-white mt-10">
            <header class="py-4">
                <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between">
                        <h1 class="text-3xl font-bold text-theme-5"> Counters Screens Listing </h1>
                        <router-link :to="{ name: 'counters.create'}" class="bg-blue-600 hover:bg-background text-white font-bold py-2 px-6 rounded" v-if="!displayAddNewModal">
                            Add New
                        </router-link>
                    </div>
                </div>
            </header>
            <div class="flex items-center justify-between max-w-full mx-auto px-4 py-4 sm:px-6 lg:px-8">
                <div>
                    show
                    <select @change="updateLimit($event.target.value)" class="w-16">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    entries
                </div>
                <div>
                    <input placeholder="Search..." type="text" class="block w-full bg-white py-2 pl-3 pr-3 border border-blue-500 rounded-md leading-5 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-blue-600 focus:ring-black focus:border-blue-700 sm:text-sm" @keyup="updateSearchParameter($event.target.value)">
                </div>

            </div>

            <div class="w-full relative overflow-x-auto shadow-md sm:rounded">
                <table
                    class="w-full text-sm text-left text-white dark:text-gray-400"
                    style="width: 100%; padding-bottom: 1em"
                    :class="loading == true ? 'animate-pulse' : ''"
                >
                    <thead>
                    <tr 
                        class="text-xs h-16 border-gray-300 border-b py-8 bg-gray-900"
                    >
                        <th class="pl-8 text-white font-semibold pr-6 text-left text-md tracking-normal leading-4 cursor-pointer" scope="id" >ID</th>
                        <th class="pl-8 text-white font-semibold pr-6 text-left text-md tracking-normal leading-4 cursor-pointer" scope="name" >Name</th>
                        <th class="pl-8 text-white font-semibold pr-6 text-left text-md tracking-normal leading-4 cursor-pointer" scope="name" >Urdu Name </th>
                        <th class="text-white font-semibold pr-6 text-left text-md tracking-normal leading-4 cursor-pointer" scope="action">Action</th>
                    </tr>
                    </thead>
                    <tbody role="rowgroup">
                    <tr v-if="services.length == 0 || services == null">
                        <td colspan="4" class="text-center justify-between">No Result Found.</td>
                    </tr>
                    <tr class="h-16 border-gray-300 border-t border-b hover:border-blue-700 hover:shadow-md cursor-pointer transition duration-150 ease-in-out" v-for="service in services" v-bind:key="service.id">
                        <td class="pl-8 pr-6 text-left whitespace-no-wrap text-md text-gray-800 tracking-normal leading-4">{{ service.id }}</td>
                        <td class="pl-8 pr-6 text-left whitespace-no-wrap text-md text-gray-800 tracking-normal leading-4">{{ service.name }}</td>
                        <td class="pl-8 pr-6 text-left whitespace-no-wrap text-md text-gray-800 tracking-normal leading-4">{{ service.urdu_name }}</td>
                        <td class="text-md pr-6 whitespace-no-wrap text-gray-800 tracking-normal leading-4" >
                            <div class="flex items-center" >
                                <a @click.prevent="editService(service)" class="rounded border border-transparent focus:outline-none focus:border-gray-800 focus:shadow-outline-gray" href="#">
                                    <div aria-label="Edit row" role="button" class="p-2 bg-gray-100 hover:bg-gray-200 rounded cursor-pointer text-blue-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                            <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                                            <line x1="16" y1="5" x2="19" y2="8" />
                                        </svg>
                                    </div>
                                </a>
                                <a href="#" class="rounded border border-transparent focus:outline-none focus:border-gray-800 focus:shadow-outline-gray delete_list" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <div aria-label="Delete" role="button" class="p-2 bg-gray-100 hover:bg-gray-200 rounded cursor-pointer text-red-500" @click.prevent="showDeleteModal(service.id)">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <line x1="4" y1="7" x2="20" y2="7" />
                                            <line x1="10" y1="11" x2="10" y2="17" />
                                            <line x1="14" y1="11" x2="14" y2="17" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm text-gray-700" v-if="pagination.current_page">
                                Page {{ pagination.current_page }} of {{ pagination.last_page }}

                            </p>
                        </div>
                        <div>
                            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination" v-if="pagination.next_page_url || pagination.prev_page_url">
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50" v-bind:class="[{disabled: !pagination.prev_page_url}]" @click="fetchServices(pagination.prev_page_url)">
                                    <span class="sr-only">Previous</span>
                                    <svg class="h-5 w-5" x-description="Heroicon name: solid/chevron-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>

                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50" v-bind:class="[{disabled: !pagination.next_page_url}]" @click.prevent="fetchServices(pagination.next_page_url)">
                                    <span class="sr-only">Next</span>
                                    <svg class="h-5 w-5" x-description="Heroicon name: solid/chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- </div>
            </div> -->
            </div>
        </div>
        <WarningModal v-if="displayDeleteModal" :show="displayDeleteModal" @close="hideDeleteModal">
            <template v-slot:modal-header> Delete Confirmation </template>
            <template v-slot:modal-text> Are you sure you want to delete? This action cannot be undo. </template>
            <template v-slot:modal-footer>
                <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" @click="deleteService()">
                    Yes, Delete it
                </button>
            </template>
        </WarningModal>
    </div>
</template>

<script>
import { mapState } from 'vuex';
import WarningModal from './../system-components/WarningModal';

export default {
    components:{
        WarningModal
    },
    computed: mapState({
        services: (state) => state.Services.services,
        pagination: state => state.Services.pagination,
        loading: state => state.Services.loading,
        displayDeleteModal: state => state.Services.displayDeleteModal,
    }),
    data(){
        return{
            user_role:"",
        }
    },
    created(){
        this.fetchServices('');
        axios.get(process.env.MIX_APP_URL+"/api/user").then(res => {
                this.user_role = res.data.role;
        });
    },
   
    methods:{
        fetchServices(url){

            if(url == ''){
                url = process.env.MIX_ADMIN_APP_URL+'/services?q=1';
            }
            this.$store.dispatch('SystemForms/fetchSystemForms', {url:url, stateName:'Services', pagination:1});
        },
        updateLimit(limit){
            this.$store.commit('Services/setLimit', limit);
            this.fetchServices('');
        },
        updateSearchParameter(search){
            this.$store.commit('Services/setSearchParameter', {searchParameter:search});
            this.fetchServices('');
        },
        editService(service){
            this.$store.commit('Services/setService', service);
            this.$store.commit('Services/setEdit', 1);
            this.$router.push({ name: 'services.edit', params:{'id':service.id} });
        },
        showDeleteModal(categoryId){
            this.$store.commit('Services/displayDeleteModal', 1);
            this.$store.commit('Services/setCategoryId', categoryId);
        },
        hideDeleteModal(){
            this.$store.commit('Services/displayDeleteModal', 0);
            this.$store.commit('Services/setCategoryId', '');
        },
        deleteCategory(){
            var url = process.env.MIX_ADMIN_APP_URL+'/services/'+this.$store.state.Services.serviceId;
            this.$store.dispatch('SystemForms/deleteSystemForm', {url:url, stateName:'Services'}).then(res => {
                if(res.data.status == 'Success'){
                    this.hideDeleteModal();
                    this.fetchServices('');
                    this.$swal(res.data.message);
                }
                else{
                    this.$swal(res.data.message);
                }
            });
        }

    }
}
</script>
