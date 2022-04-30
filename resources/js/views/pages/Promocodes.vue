<template>
    <section>
        <Header :update-user-stock="updateUserStock" />

        <div class="album py-5 bg-light">
            <div class="container">
                <h2 class="text-center fade-in-100" style="margin-top: 0px; margin-bottom: 30px;">
                    Redeem Promocode!
                </h2>
                <div class="my-3 p-3 bg-white rounded shadow-sm text-center small-card">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 fade-in-150" style="text-align: left;">
                            <h5 class="fade-in-200">Redeem promocodes here</h5>
                            <hr />
                            <div class="input-group input-group-lg fade-in-250">
                                <input v-model="promocode" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Promocode" />
                            </div>
                            <button
                                    v-on:click="redeemPromocode"
                                    class="custom-btn custom-green waves-effect waves-light fade-in-300" style="width: 75%; cursor: pointer !important; outline: 0; margin-top: 25px; width: 100%;-webkit-transition: all 0.15s ease-out!important;transition: all 0.15s ease-out!important;border-radius: 12px !important;
font-size: 30px;
padding: 10px;">
                                <b v-if="!loading">Redeem Code!</b>
                                <b v-if="loading">
                                    <div class="spinner-border text-light" role="status"> <span class="sr-only">Loading...</span></div>
                                </b>
                            </button>
                            <div class="separator fade-in-350">Want more robux?</div>
                            <div class="row fade-in-400 more-buttons-promocode">
                                <div class="col-6" style="padding-right: 0;">
                                    <a href="#/earn">
                                        <button
                                                class="custom-btn-tab custom-blue custom-btn-xs"
                                                style="margin-top: 8px!important;padding: 5px !important; width: 75%; cursor: pointer !important; outline: 0; margin-top: 25px; width: 100%; border-top-right-radius: 0px !important; border-bottom-right-radius: 0px !important;">
                                            Earn
                                            <img src="/storage/assets/img/robux-png.png" style="margin-left: 1px; width: 34px; margin-top: -3px;" />
                                        </button>
                                    </a>
                                </div>
                                <div class="col-6" style="padding-left: 0;">
                                    <a href="#/referral">
                                        <button
                                                class="custom-btn-tab custom-btn-xs custom-green"
                                                style="margin-top: 8px!important;padding: 5px !important; width: 75%; cursor: pointer !important; outline: 0; margin-top: 25px; width: 100%; border-top-left-radius: 0px !important; border-bottom-left-radius: 0px !important;">
                                            Invite <i class="fas fa-gift"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6" style="text-align: left;">
                            <div style="max-height: 400px; height: auto;border-radius:20px;" class="card align-self-stretch fade-in-300">
                                <iframe id="iframeyoutube" allowfullscreen="" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" frameborder="0" src="https://www.youtube.com/embed/NfRQw80Db-I" width="100%" height="300" style="border-radius:20px;"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container marketing py-5">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <a href="#/withdraw"><button style="width: 75%; cursor: pointer !important; outline: 0; margin-top: 25px; width: 100%;-webkit-transition: all 0.15s ease-out!important;transition: all 0.15s ease-out!important;border-radius: 12px !important;
font-size: 30px;
padding: 10px;" class="custom-btn custom-blue waves-effect waves-light fade-in-300"><b>Claim Daily Reward!</b></button></a>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </section>
</template>

<script>
    import Header from "@/js/components/Header";
    export default {
        name: "Promocodes",
        components: {Header},
        data: function () {
            return {
                USER_STOCK: 0,
                loading: false,
                promocode: ''
            }
        },
        methods: {
            updateUserStock: function(val) {
                this.USER_STOCK = val;
            },
            redeemPromocode: function () {

                if(!$helper.getUser()) {
                    $helper.openLoginModal();
                    return false;
                }

                if(this.promocode.length <= 0) {
                    Swal.fire(
                        'Oops!',
                        'Enter promocode to redeem!',
                        'error'
                    );
                    return false;
                }

                if(this.loading === true) return false;

                this.loading = !this.loading;
                const user = $helper.getUser();
                if(!user) {
                    $helper.openLoginModal();
                }

                const FORM_DATA = new FormData();
                FORM_DATA.append('promocode',   $helper.easyEncrypt(this.promocode));
                FORM_DATA.append('rid',         $helper.easyEncrypt(user.rid));

                $api.postData('redeem-promocode', FORM_DATA)
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

                        Swal.fire(
                            'YeY!',
                            response.message,
                            'success'
                        );
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