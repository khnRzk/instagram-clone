<template>
    <div>
        <a class="btn btn-primary mr-1 btn-sm" @click="followUser" v-text="buttonFollow"> Follow</a>
    </div>
</template>

<script>
    export default {
        props: ['userId', 'follows'],
        mounted() {
            console.log('Component mounted.')
        },

        data:function () {
            return{
                status :this.follows,
            }
        },
        methods: {
            followUser(){
                axios.post('/follow/' + this.userId) 
                    .then(response => {
                        this.status = !this.status;
                    })
                    .catch(errors =>{
                        if(errors.response.status == 401) {
                            window.location = '/login'
                        }
                    });
                }
            },

        computed : {
            buttonFollow() {
                return (this.status) ? 'Unfollow' : 'Follow';
            }
        }
    }
</script>
