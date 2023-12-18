<script>
export default {
    data(){
        return {
            user_role: '',
            counters:'',
            currentUser:'',
            currentToken:'',
            counterId:'',
            tokens:[],
        }
    },
    methods:{
        async fetchCounters(){
            let url = process.env.MIX_ADMIN_APP_URL+'/counters?q=1';
            await this.$store.dispatch('SystemForms/fetchSystemForms', {url:url, stateName:'Counters'}).then((res) => {
                if(res.status == 200){
                    this.counters = res.data;
                    this.currentUser = res.data.find((item) => item.email == this.user_role?.email);
                }
            });
        },
        async getCurrentToken(){
                let url = process.env.MIX_ADMIN_APP_URL+'/get_current_token/' + this.currentUser?.counter_no;
                await axios.get(url).then((res) => {
                    if(res.data.message){
                        // this.$swal(res.data.message);
                    }else{
                        this.currentToken = res.data.token;
                    }
                })
        },
        async getUser(){
            await axios.get(process.env.MIX_APP_URL+"/api/user").then(res => {
                this.user_role = res?.data?.data;
            });
        },
        getNextToken(){
            let url = process.env.MIX_ADMIN_APP_URL+'/get_next_token';
                axios.post(url,{token:this.currentToken,counter_id:this.currentUser?.counter_no}).then((res) => {
                    if(res.data.message){
                        // this.$swal(res.data.message );
                    }else{
                    this.currentToken = res.data.token;
                    this.getAllTokens();
                    }
            });
        },
        skipeNextToken(){
            let url = process.env.MIX_ADMIN_APP_URL+'/skipe_next_token';
                axios.post(url,{token:this.currentToken,counter_id:this.currentUser?.counter_no}).then((res) => {
                    this.currentToken = res.data.token;
                    this.getAllTokens();
            });
        },
       async getAllTokens(){
            let url = process.env.MIX_ADMIN_APP_URL+'/get_all_tokens';
                await axios.get(url).then((res) => {

                    this.tokens = res.data.data;
            });
        },
        getCounterId(tokens){
            this.counterId = tokens.slice().reverse().find((item) => item.status === 'Active')?.counter_id;
            let counterNumber = this.counters.find((item) => item.counter_no == this.counterId)?.counter_no;
            if(counterNumber < 9){
                return `0${counterNumber}`;
            }else{
                return counterNumber;
            }
        },
        async allFunctions(){
            await this.fetchCounters();
            await this.getCurrentToken();
            await this.getAllTokens();
        },

    },
    created(){
        this.allFunctions();
    },

}
</script>
<template>
    <div class="">
        <div class="grid grid-cols-12 gap-4 p-4 h-[97vh]">
            <div class="col-span-12 md:col-span-9 w-full">
            <div class="bg-gradient-to-b from-[#38BAF6] via-[#3B85F6] to-[#3B91F6] h-full p-4 rounded-lg pb-8">
                <div class="flex flex-col h-full justify-between">
                <div>
                    <p class="text-5xl text-white mb-4">
                    Counter # {{ getCounterId(tokens)}}
                    </p>
                    <div class="flex justify-center items-center h-full">
                    <p class="text-[14rem] text-white">{{
                            tokens
                                ? (tokens.slice().reverse().find((item) => item.status === 'Active')?.token_no || 0) < 9
                                    ? `0${tokens.slice().reverse().find((item) => item.status === 'Active')?.token_no || 0}`
                                    : tokens.slice().reverse().find((item) => item.status === 'Active')?.token_no || '00'
                                : '00'
                        }}</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-span-12 md:col-span-3 h-full  w-full space-y-4 overflow-auto" >
                    <div class="bg-gradient-to-b from-[#38BAF6] via-[#3B85F6] to-[#3B91F6] p-4 pb-4 rounded-lg h-[32%]" v-for="counter in counters ? counters.filter((item) => (item.counter_no != counterId) && (item.counter_id != counterId)) : ''" :key="counter.id">
                        <p class="text-xl text-white">Counter # {{counter?.counter_no < 9 ? `0${counter?.counter_no}` : counter?.counter_no }}</p>
                        <div class="flex justify-center items-center h-full">
                            <p class="text-8xl text-white">{{ tokens ? tokens.find((item) => item?.counter_id == counter?.counter_no && item.status == 'Active')?.token_no == null ? '00' : tokens.find((item) => item?.counter_id == counter?.counter_no && item.status == 'Active')?.token_no < 9 ? `0${tokens.find((item) => item?.counter_id == counter?.counter_no && item.status == 'Active')?.token_no}` : tokens.find((item) => item?.counter_id == counter?.counter_no && item.status == 'Active')?.token_no : '00' }}</p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</template>
<style>

</style>
