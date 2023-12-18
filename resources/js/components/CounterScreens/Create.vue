<template>
    <div>
        <div class="rounded-md px-6 py-10 max-w-9xl mx-auto">
            <header class="py-4">
                <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between">
                        <h1 class="text-3xl font-bold text-theme-5">
                            {{ edit == "1" ? "Edit " : "Add " }} Vehicles
                        </h1>
                        <!-- <router-link
                            :to="{ name: 'services.index' }"
                            class="bg-blue-600 hover:bg-background text-white font-bold py-2 px-6 rounded"
                        >
                            Back
                        </router-link> -->
                    </div>
                </div>
            </header>
            <form class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-4"
                  >
            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-2">
                <div class="mb-4">
                    <label
                        class="block text-gray-700 text-sm font-bold mb-2"
                        for="username"
                    >
                    Vehicle Name <span class="text-red-500">*</span>
                    </label>
                    <input
                        class="bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 w-full rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="text"
                        placeholder="Name"
                        aria-label="Service name"
                        :value="car?.vehicle_name"
                        @input="updateCar('vehicle_name',$event.target.value)"
                    />
                    <small
                        class="text-red-400"
                        v-if="errors.has('vehicle_name')"
                        v-text="errors.get('vehicle_name')"
                    ></small>
                </div>
                <div class="mb-4">
                    <label
                        class="block text-gray-700 text-sm font-bold mb-2"
                        for="username"
                    >
                    Vehicle Type <span class="text-red-500">*</span>
                    </label>
                    <select
                        @input="updateCar('vehicle_type',$event.target.value)"
                        class="bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 w-full rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 ">
                        <option value="">--Please Select--</option>
                        <option value="Car" :selected="car?.vehicle_type == 'Car'">Car</option>
                        <option value="SUV" :selected="car?.vehicle_type == 'SUV'">SUV/People Mover</option>
                        <option value="Ute" :selected="car?.vehicle_type == 'Ute'">Ute/Vans/Truck</option>
                    </select>
                    <small
                        class="text-red-400"
                        v-if="errors.has('vehicle_type')"
                        v-text="errors.get('vehicle_type')"
                    ></small>
                </div>
                <div class="mb-4">
                    <label
                        class="block text-gray-700 text-sm font-bold mb-2"
                        for="username"
                    >
                    Brand
                    </label>
                    <input
                        class="bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 w-full rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 "
                        type="text"
                        placeholder="Brand"
                        aria-label="email"
                        :value="car?.brand"
                        @input="updateCar('brand',$event.target.value)"
                    />
                    <small
                        class="text-red-400"
                        v-if="errors.has('brand')"
                        v-text="errors.get('brand')"
                    ></small>
                </div>
                <div class="mb-4">
                    <label
                        class="block text-gray-700 text-sm font-bold mb-2"
                        for="username"
                    >
                    Number of Seats
                    </label>
                    <input
                        class="bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 w-full rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 "
                        type="text"
                        placeholder="Number of Seats"
                        aria-label="email"
                        :value="car?.number_of_seats"
                        @input="updateCar('number_of_seats',$event.target.value)"
                    />
                    <small
                        class="text-red-400"
                        v-if="errors.has('number_of_seats')"
                        v-text="errors.get('number_of_seats')"
                    ></small>
                </div>
                    <div class="mb-4">
                        <label
                            class="block text-gray-700 text-sm font-bold mb-2"
                            for="username"
                        >
                        Vehicle Number
                        </label>
                        <input
                            class="bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 w-full rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 "
                            type="text"
                            placeholder="BE-6755"
                            aria-label="email"
                            :value="car?.vehicle_number"
                            @input="updateCar('vehicle_number',$event.target.value)"
                        />
                        <small
                        class="text-red-400"
                        v-if="errors.has('vehicle_number')"
                        v-text="errors.get('vehicle_number')"
                    ></small>
                    </div>
                    <div class="mb-4">
                        <label
                            class="block text-gray-700 text-sm font-bold mb-2"
                            for="username"
                        >
                        Location Store
                        </label>
                        <select
                            class="bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 w-full rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 "
                            placeholder="Location"
                            aria-label="email"
                            @input="updateCar('location_store',$event.target.value)">
                            <option value="">--Please Select--</option>
                            <option value="metro_traveller" :selected="car?.location_store == 'metro_traveller'">Metro Traveller</option>
                            <option value="out_metro_traveller" :selected="car?.location_store == 'out_metro_traveller'">Out Of Metro Traveller</option>
                        </select>
                        <small
                            class="text-red-400"
                            v-if="errors.has('location_store')"
                            v-text="errors.get('location_store')"
                        ></small>
                    </div>
                    <div class="mb-4">
                        <label
                            class="block text-gray-700 text-sm font-bold mb-2"
                            for="username"
                        >
                        Image
                        </label>
                        <input
                            class="bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 w-full rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 "
                            type="file"
                            placeholder="Location"
                            aria-label="email"
                            @input="uploadImage($event)"
                        />
                        <div>
                            <img :src="car?.image" />
                        </div>
                        <small
                        class="text-red-400"
                        v-if="errors.has('image')"
                        v-text="errors.get('image')"
                       ></small>
                    </div>
                    <div class="mb-4">
                        <label
                            class="block text-gray-700 text-sm font-bold mb-2"
                            for="username"
                        >
                        Price
                        </label>
                        <input
                            class="bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 w-full rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 "
                            type="text"
                            placeholder="0"
                            aria-label="email"
                            :value="car?.price"
                            @input="updateCar('price',$event.target.value)"
                        />
                        <small
                        class="text-red-400"
                        v-if="errors.has('price')"
                        v-text="errors.get('price')"
                       ></small>
                    </div>
            </div>
            <div>
                <button
                    class=" mt-2 py-2 px-4 flex-shrink-0 border-blue-500 hover:border-blue-700 text-sm border-4 text-white py-2 px-3 rounded bg-blue-500 hover:bg-blue-700"
                    type="button" @click="addUpdateCars"
                    >
                    Save
                </button>
            </div>
            </form>
        </div>
    </div>
</template>

<script>
import { mapState } from "vuex";

export default {
    data(){

    },
    computed: mapState({
        loading: (state) => state.Cars.loading,
        car: (state) => state.Cars.car,
        edit: (state) => state.Cars.edit,
        errors: (state) => state.Cars.errors,
    }),
    methods: {
        updateCar(feild,value){
            this.$store.commit('Cars/updateCar',{
                [feild] : value,
            });
        },
        uploadImage(e){
            const formData = new FormData();
            formData.append('file', e.target.files[0]);
            axios.post('/api/image_upload', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }).then(response => {
                    this.updateCar('image',response?.data);
                });
        },
        deleteUser(index){
            if (this.users.length === 1) {
                this.$swal('You cannot delete this record.');
            } else {
                this.$swal({
                    title: 'Confirmation',
                    text: 'Are you sure you want to delete this record?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it',
                    cancelButtonText: 'No, cancel',
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.deleteRecord(index);
                    } else {
                        this.$swal('Record not deleted', '', 'info');
                    }
                });
            }
        },
        deleteRecord(index){
            let user = this.users[index];
            if (user?.created_at !== '' && user?.id !== '') {
                var url = process.env.MIX_ADMIN_APP_URL + '/counters/' + user?.id;
                this.$store.dispatch('SystemForms/deleteSystemForm', { url: url, stateName: 'Counters' }).then(res => {
                    if (res.data.status == 'Success') {
                        this.$swal('Record deleted', '', 'success');
                    }
                });
            }
            this.users.splice(index, 1);
        },
        getErrorWithoutNumber(errorMessage) {
            return errorMessage.replace(/^\d+\./, '');
        },

        addUpdateCars() {
            var url = process.env.MIX_ADMIN_APP_URL + "/cars";
            if (this.edit) {
                var url =
                    process.env.MIX_ADMIN_APP_URL +
                    "/cars/" +
                    this.car.id;
            }
            this.$store
                .dispatch("SystemForms/addUpdateSupportingForm", {
                    url: url,
                    data: this.car,
                    stateName: "Cars",
                })
                .then((res) => {
                    this.$store.commit("Cars/setCar", {
                        id: "",
                        vehicle_name: "",
                        vehicle_type:'',
                        brand:'',
                        number_of_seats:'',
                        vehicle_number:'',
                        location_store :'',
                        image:'',
                        price:'',
                    });
                    this.$store.commit("Cars/setEdit", 0);
                    if (res.data.status == "Success") {
                        this.$swal(res.data.message);
                        this.$router.push('/cars-listing');
                    } else if(res.data.status != "Error"){
                        this.$swal(res.data.message);
                    }
                });
        },
    },
    created() {
        this.updateCar('vehicle_type','Car');
        this.$store.commit("Cars/setEdit", 0);
        if(this.$route.params.id != null){
            this.$store.commit("Cars/setEdit", 1);
            const url = process.env.MIX_ADMIN_APP_URL + '/cars/' + this.$route.params.id;
            axios.get(url).then((res) => {
                this.$store.commit('Cars/setCar',res.data.data);
            });
        }
    },
};
</script>

