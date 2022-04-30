<template>
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #009dfd;">
                    <h5 class="modal-title" style="font-size: 22px !important;">Enter your Roblox username to continue </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group input-group-lg">
                        <input type="text" v-model="username" class="form-control" aria-label="ROBLOX Username" aria-describedby="inputGroup-sizing-sm" placeholder="Your Roblox Username" style="text-align: center; font-size: 25px;" />
                    </div>
                    <span style="color: #a3a8ab; margin: 3.5px auto; display: table; margin-top: 15px;">We will NEVER ask you for your password!</span>
                </div>

                <div class="row" style="margin: 0; margin-bottom: 15px; /*margin-top: 7px;*/">
                    <div class="col-12 col-md-6">
                        <button
                                class="custom-btn-nw custom-blue waves-effect waves-light modal-btn"
                                data-dismiss="modal"
                        >
                            <b>Close</b>
                        </button>
                    </div>
                    <div class="col-12 col-md-6">
                        <button
                                v-on:click="validateUser"
                                class="custom-btn-nw custom-green waves-effect waves-light modal-btn"
                        >
                            <b v-if="!loading">Start!</b>
                            <b v-if="loading">
                                <div class="spinner-border text-light" role="status"> <span class="sr-only">Loading...</span></div>
                            </b>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "LoginModal",
        data: function () {
            return {
                username: '',
                loading: false
            }
        },
        methods: {
            validateUser: function () {
                if(this.username.length <= 0) {
                    Swal.fire(
                        'Oops!',
                        'Username cannot be empty',
                        'error'
                    );
                    return false;
                }

                this.loading = !this.loading;
                const FORM_DATA = new FormData();
                FORM_DATA.append('username', $helper.easyEncrypt(this.username));

                $api.postData('login', FORM_DATA)
                    .then((response) => {
                        this.loading = !this.loading;
                        if(response.status === false || response.data === undefined) {
                            Swal.fire(
                                'Oops!',
                                response.message,
                                'error'
                            );

                            return false;
                        }

                        $helper.saveLocalData('__u', response.data.__u);
                        $helper.saveLocalData('stats', response.data.stats);
                        $helper.removeLocalData('_e_soial_popup');

                        const giveaway_timer = response.data.stats.giveaway_timer;
                        $helper.saveLocalData('o_giveaway_timer', giveaway_timer);

                        Swal.fire(
                            'YeY!',
                            'Welcome to RBX.FUN',
                            'success'
                        );

                        const _this = this;
                        const route_name = this.$route.name;
                        setTimeout(function () {
                            $('#loginModal').modal('toggle');
                            if(route_name === 'home')
                                _this.$router.push('earn');
                            else
                                _this.$router.go();
                        }, 0    );
                    })
                    .catch(error => {
                        this.loading = !this.loading;
                        Swal.fire(
                            'Oops!',
                            'Something went wrong, please try again!',
                            'error'
                        );
                    })
            }
        }
    }
</script>

<style scoped>

</style>