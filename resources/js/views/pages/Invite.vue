<template>
    <section>
        <Header :update-user-stock="updateUserStock" />

        <div class="album py-5 bg-light" style="background-image:url('/storage/assets/img/spring-background.png');">
            <div class="container">
                <h2 class="text-center fade-in-100">Invite people to earn <span class="text-success">ROBUX</span></h2>
                <h6 class="text-center fade-in-150">You get 5% of all robux they earn!</h6>
                 <div class="row fade-in-300" style="margin-top: 24px;">
                    <div class="col-md-6" style="">
                        <div
                                style="
                    max-height: 400px;
                    height: auto;
                    border: 0px solid rgba(0, 0, 0, 0);
                    border-bottom: 5px solid #1e8aff;
                    margin-top: 8px;
                    -webkit-box-shadow: 0px 0px 11px 4px rgba(0, 0, 0, 0.05);
                    -moz-box-shadow: 0px 0px 11px 4px rgba(0, 0, 0, 0.05);
                    box-shadow: 0px 0px 11px 4px rgba(0, 0, 0, 0.05);
                    "
                                class="card align-self-stretch small-card-left"
                        >
                            <div class="text-dark" style="border-radius: 3px;">
                                <span><img src="/storage/assets/img/gift-present.png" style="padding: 12px;width: 72px; float: right; margin-top: 20px; margin-right: 15px; margin-bottom: 20px;" /></span>
                                <div class="text-left" style="margin-left: 21px; margin-top: 19px;">
                                    <h2 class="counter" style="">{{user_count}} Users</h2>
                                    You have invited
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div
                                style="
                    max-height: 400px;
                    height: auto;
                    border-bottom: green 5px;
                    border: 0px solid rgba(0, 0, 0, 0);
                    margin-top: 8px;
                    -webkit-box-shadow: 0px 0px 11px 4px rgba(0, 0, 0, 0.05);
                    -moz-box-shadow: 0px 0px 11px 4px rgba(0, 0, 0, 0.05);
                    box-shadow: 0px 0px 11px 4px rgba(0, 0, 0, 0.05);
                    "
                                class="card align-self-stretch small-card-right"
                        >
                            <div class="text-dark" style="border-radius: 3px; border-bottom: 5px solid #1e8aff;">
                                <span><img src="/storage/assets/img/gift-present.png" style="padding: 12px;width: 72px; float: right; margin-top: 20px; margin-right: 15px; margin-bottom: 20px;" /></span>
                                <div class="text-left" style="margin-left: 21px; margin-top: 19px;">
                                    <h2 class="counter" style="">{{robux_earned}} R$ Earned</h2>
                                    From invites (5%)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-3 p-3 bg-white rounded shadow-sm text-center small-card">
                    <div class="row">
                        <div class="col-sm-12 col-md-6" style="text-align: left; margin-top: 10px;">
                            <h5 class="fade-in-350">Follow these steps to win! &#x1F4B0;</h5>
                            <hr />
                            <div
                                    v-on:click="checkLogin"
                                    style="margin-top: 36px;"
                                    id="invite-url-section"
                                    class="blured-overlay text-center">
                                <h5 class="fade-in-400">Send this to your friends on ROBLOX or DISCORD:</h5>
                                <div class="input-group mb-3 fade-in-400">
                                    <input type="text" class="form-control" id="myInput1" v-model=invite_url aria-label="Recipient's username" aria-describedby="button-addon2" style="border-top-right-radius: 0 !important;
border-bottom-right-radius: 0 !important;" />
                                    <div class="input-group-append">
                                        <button
                                                class="btn btn-outline-secondary"
                                                type="button"
                                                id="button-addon2"
                                                v-on:click="copyText"
                                        >
                                            COPY
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div style="max-height: 400px; height: auto;" class="card align-self-stretch fade-in-450">
                                <div class="bg-success" style="border-radius: 3px;">
                                    <span><img src="/storage/assets/img/robux-png.png" style="width: 72px; float: right; margin-top: 20px; margin-right: 15px; margin-bottom: 20px;" /></span>
                                    <div class="text-left text-white" style="margin-left: 21px; margin-top: 19px;">
                                        <h2 class="counter text-white" style="">{{user_count}} Users</h2>
                                        You have invited
                                    </div>
                                </div>
                            </div>
                            <a type="button" href="#/earn" class="custom-btn custom-blue waves-effect waves-light fade-in-450" style="width: 75%; cursor: pointer !important; outline: 0; margin-top: 25px; width: 100%; height: 51px; font-size: 23px; padding: 9px;-webkit-transition: all 0.15s ease-out!important;transition: all 0.15s ease-out!important; color:#FFFFFF;">Earn more robux!</a>
                        </div>
                        <div class="col-sm-12 col-md-6" style="text-align: left; margin-top: 10px;">
                            <h5 class="fade-in-350">Watch our new video!</h5>
                            <hr />
                            <iframe
                                    id="iframeyoutube"
                                    class="fade-in-450"
                                    allowfullscreen=""
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    frameborder="0"
                                    src="https://www.youtube.com/embed/NfRQw80Db-I"
                                    width="100%"
                                    height="300"
                                    style="border-radius:20px;"
                            ></iframe>
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
        <SuccessAlert />
    </section>
</template>

<script>
    import SuccessAlert from "@/js/components/SuccessAlert";
    import Header from "@/js/components/Header";

    export default {
        name: "Invite",
        components: {Header, SuccessAlert},
        data: function() {
            return {
                user: {},
                USER_STOCK: 0,
                user_count: 0,
                robux_earned: 0,
                invite_url: `${APP_URL}?ref=`,
            }
        },
        mounted() {
            this.user = $helper.getUser();
            if(this.user) {
                $('#invite-url-section').removeClass('blured-overlay');
                this.getReferralInfo();
                let txt = `${APP_URL}?ref=`;
                txt += `${$helper.easyEncrypt(this.user.id)}`;
                this.invite_url = txt;
            }
        },
        methods: {
            updateUserStock: function(val) {
                this.USER_STOCK = val;
            },
            checkLogin: function () {
                if(!this.user) {
                    $helper.openLoginModal();
                }
            },
            copyText: function () {
                if(!this.user) {
                    $helper.openLoginModal();
                    return false;
                }

                let txt = `${APP_URL}?ref=`;
                txt += `${$helper.easyEncrypt(this.user.id)}`;

                // clip-board copy text only works with HTTPS
                if(APP_URL.indexOf('https') !== -1)
                    navigator.clipboard.writeText(txt);

                $('#SuccessAlert').toggleClass('hide-alert');
                $('#SuccessAlert').toggleClass('show-alert');

                setTimeout(function () {
                    $('#SuccessAlert').toggleClass('show-alert');
                    $('#SuccessAlert').toggleClass('hide-alert');
                }, 3000)
            },
            getReferralInfo: function () {
                if(!this.user) {
                    $helper.openLoginModal();
                    return false;
                }

                const id = $helper.easyEncrypt(this.user.id);
                $api.getData(`referral?id=${id}`)
                    .then((response) => {
                        if(response.status === true ) {
                            this.user_count = response.data.count;
                            this.robux_earned = response.data.robux;
                        }
                    })
                    .catch(error => {
                        console.log('Error', error);
                    });
            }
        },

    }
</script>

<style scoped>
.blured-overlay {
    filter: blur(4px);
    z-index: 99999;
}
</style>