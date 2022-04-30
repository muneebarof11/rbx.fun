<template>
    <section>
        <Header :update-user-stock="updateUserStock" :key="componentKey" />
        <div>
            <div class="album py-5 bg-light fade-in-100" style="background-color: #000f31 !important; min-height: 261px; background-image: url(https://rbxboost.com/img/illustration-b@2x1.28a9e8a2.png);">
                <div class="container fade-in-300">
                    <h2 class="text-white text-center">Join Giveaway!</h2>
                    <div class="row mt-4">
                        <div class="col-md-4 text-center text-white">
                            <h3 style="color: #2ee358;">5 ROBUX</h3>
                            <h6>PRIZE</h6>
                        </div>
                        <div class="col-md-4 text-center text-white">
                            <h3 style="color: #009fff;" id="clockdiv">
                                <span class="minutes">60</span>m,
                                <span class="seconds">0</span>s</h3>
                            <h6>TIME LEFT</h6>
                        </div>
                        <div class="col-md-4 text-center text-white">
                            <h3 style="color: #ffc90b;">{{chance_to_win}}%</h3>
                            <h6>YOUR CHANCE</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="album py-5 bg-light" style="background-image: url(/storage/assets/img/spring-background.png); padding-top: 0 !important;">
                <div class="container">
                    <div class="row">
                        <div style="top: -60px;" class="col-md-5 mx-auto">
                            <button
                                    v-on:click="joinGiveaway"
                                    class="custom-btn custom-blue waves-effect waves-light fade-in-bottom" style="width: 100%; cursor: pointer !important; outline: 0; margin-top: 25px; width: 100%;-webkit-transition: all 0.15s ease-out!important;transition: all 0.15s ease-out!important;border-radius: 12px !important;
font-size: 30px;
padding: 10px;"
                            >
                                <b v-if="!loading" :disabled="disabled">ENTER</b>
                                <b v-if="loading">
                                    <div class="spinner-border text-light" role="status"> <span class="sr-only">Loading...</span></div>
                                </b>

                            </button>
                        </div>
                    </div>

                    <div class="fade-in-200 mx-auto shadow-sm" style="max-width:850px;">
                        <br />
                        <div
                                style="padding: 15px; width: 100%; background-color: #00b5ff; border-radius: 5px 5px 0px 0px; border-bottom-left-radius: 0px !important; border-bottom-right-radius: 0px !important; font-size: 19px;"
                                class="text-white text-center"
                        >
                            Recent Winners &#128176;
                        </div>
                        <div style="max-height: 500px;">
                            <table style="border-top-left-radius: 0px !important; border-top-right-radius: 0px !important;" class="rounded table is-fullwidth is-hoverable">
                                <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th style="padding: 20px; text-align: center;width:50px;">Username</th>
                                    <th scope="col" style="padding: 20px; text-align: right;width:100%;">Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="fade-in-200" style="background-color: #fff!important;" v-for="winner in recent_winners">
                                    <td style="padding-top: 18px;">
                                        <img :src="userAvatar(winner.rid)" style="width: 55px; border-radius: 100%;" />
                                    </td>
                                    <td style="padding-top: 25px;"><b class="recent-winner-username" style="font-size: 25px; margin-top: 15px;">{{winner.username}}</b></td>
                                    <td style="padding-top: 21px;" class="recent-winner-amount"><label class="badge badge-success" style="height: 40px; width: 95px; padding-top: 9px; font-size: 20px;">5.00 R$</label></td>
                                </tr>
                                </tbody>
                            </table>
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
        </div>

    </section>
</template>

<script>
    import Header from "@/js/components/Header";
    export default {
        name: "Giveaway",
        components: {Header},
        data: function () {
            return {
                componentKey: 0,
                loading: false,
                user: {},
                chance_to_win: 0,
                recent_winners: [],
                USER_STOCK: 0,
                disabled: true
            }
        },
        mounted() {
            this.user = $helper.getUser();
            this.giveawayStats();
        },
        methods: {
            forceRerender() {
                this.componentKey += 1;
            },
            userAvatar: function (rid) {
                return `https://www.roblox.com/headshot-thumbnail/image?userId=${rid}&width=150&height=150&format=png`;
            },
            updateUserStock: function(val, stats) {
                this.USER_STOCK = val;
                $helper.saveLocalData('o_giveaway_timer',stats.giveaway_timer);
            },
            giveawayStats: function() {
               let rid = 0;
               if(this.user)
                   rid = this.user.rid;

               rid = $helper.easyEncrypt(rid);
                $api.getData(`giveaway?rid=${rid}`)
                    .then((response) => {
                        if(response.status === false || response.data === undefined) {
                            Swal.fire(
                                'Oh no!',
                                'Something went wrong, please try again!',
                                'error'
                            );

                            return false;
                        }

                        this.chance_to_win = response.data.chance_to_win;
                        this.recent_winners = JSON.parse($helper.easyDecrypt(response.data.recent_winners));
                        $helper.saveLocalData('o_giveaway_timer', response.data.giveaway_timer);
                        const router = this.$router;
                        $helper.initializeClock('clockdiv', response.data.giveaway_timer, router);

                        this.$forceUpdate();
                        this.disabled = false;
                    })
                    .catch(error => {
                        console.log(error);
                        // Swal.fire(
                        //     'Oops!',
                        //     'Something went wrong, please try again!',
                        //     'error'
                        // );
                    });
            },
            joinGiveaway: function () {
                if(this.loading) return false;
                if(this.disabled) return false;

                const user = $helper.getUser();
                if(!user) {
                    $helper.openLoginModal();
                    return false;
                }

                this.loading = true;
                this.user = user;
                const FORM_DATA = new FormData();
                FORM_DATA.append('rid', $helper.easyEncrypt(this.user.rid));

                $api.postData('join-giveaway', FORM_DATA)
                    .then((response) => {
                        this.loading = false;
                        if(response.status === false || response.data === undefined) {
                            Swal.fire(
                                'Oops!',
                                response.message,
                                'error'
                            );

                            return false;
                        }

                        Swal.fire(
                            'Success!',
                            response.message,
                            'success'
                        ).then(() => {
                            this.$router.go();
                        });
                    })
                    .catch(error => {
                        this.loading = false;
                        Swal.fire(
                            'Oops!',
                            'Something went wrong, please try again!',
                            'error'
                        );
                    })
            },

        }
    }
</script>

<style scoped>

</style>