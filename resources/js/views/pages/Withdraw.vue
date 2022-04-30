<template>
    <section>
        <!-- HEADER -->
        <Header :update-user-stock="updateUserStock" :key="componentKey" ref="headerComponent" />

        <div class="album py-5 bg-light" style="padding-top: 7px!important;">
            <div class="container">
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-4 fade-in-100">
                        <div class="bg-primary p-4 stats" style="background-image: url(/storage/assets/img/first-min.png);">
                            <span><img alt="Robux" src="/storage/assets/img/robux-png.png" style="width: 72px; float: right;" /></span>
                            <div class="text-left text-white">
                                <h2 class="counter text-white">{{USERS_STOCK}}</h2>
                                R$ STOCK
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 fade-in-150">
                        <div class="bg-primary p-4 stats" style="background-image: url(/storage/assets/img/second-min.png);">
                            <span><img alt="Robux" src="/storage/assets/img/robux-png.png" style="width: 72px; float: right;" /></span>
                            <div class="text-left text-white">
                                <h2 class="counter text-white">{{OFFERS_DONE}}</h2>
                                <span class="offers-done">OFFERS DONE</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 fade-in-200">
                        <div class="bg-primary p-4 stats" style="background-image: url(/storage/assets/img/rsz_1third-min_1-min.png);">
                            <span><img alt="Robux" src="/storage/assets/img/robux-png.png" style="width: 72px; float: right;" /></span>
                            <div class="text-left text-white">
                                <h2 class="counter text-white">{{USERS_COUNT}}</h2>
                                USERS
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="row claim-page-claim">
                    <div class="col-md-4 text-center" style="width: 100%;">
                        <div class="my-3 p-3 bg-white rounded shadow-sm text-center" style="padding: 6px !important; margin-left: 0px !important; margin-right: 0px !important; padding-bottom: 24px !important;">
                            <h4 v-if="loggedIn" class="text-center fade-in-100" style="margin-top: 17px; margin-bottom: 9px;">{{user.username}}</h4>
                            <img v-if="loggedIn" class="fade-in-150" alt="Profile" :src=avatar style="border-radius: 100%; width: 100px;" />
                            <h4 v-if="!loggedIn">
                                Please login to view
                            </h4>
                            <hr />
                            <a class="btn btn-primary text-white waves-effect waves-light fade-in-200" style="width: 90%; margin-top: 3px;">BALANCE: <span>{{USER_STOCK}}</span> ROBUX</a>
                            <a class="btn bg-purple text-white waves-effect waves-light fade-in-250" style="margin-top: 3px; width: 90%;" v-on:click="claimDaily" >Claim Daily <img src="/storage/assets/img/robux-png.png" style="width: 23px;" /></a>

                            <a class="btn btn-danger text-white waves-effect waves-light fade-in-300" style="width: 90%; margin-top: 3px;" v-if="!loggedIn" v-on:click="login" >Login</a>
                            <a href="/#/index" class="btn btn-danger text-white waves-effect waves-light fade-in-300" style="width: 90%; margin-top: 3px;" v-if="loggedIn" v-on:click="logout">Logout</a>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mb-margin fade-in-100" style="width: 100%;">
                        <div style="padding: 13px;width: 100%;background-color: #009eff;border-radius: 5px 5px 0px 0px;border-bottom-left-radius: 0px !important;border-bottom-right-radius: 0px !important;font-size: 23px;" class="text-white text-center">Claim Earnings!</div>
                        <div class="my-3 p-3 bg-white rounded shadow-sm text-center" style="padding: 6px !important; margin-left: 0px !important; margin-right: 0px !important; padding-bottom: 24px !important;border-top-right-radius:0!important;border-top-left-radius:0!important;margin-top:0!important;padding-top:24px!important;">
                            <div class="container">
                                <div class="col-12">
                                    <img class="fade-in-150" alt="Group" src="/storage/assets/img/robux-monster.png" style="border-radius: 20px !important; width: 100px;" />
                                    <h4 href="#" style="margin-top: 15px;">
                                        <span class="badge badge-success fade-in-200" style="padding: 8px;">Claim your robux? &#x1F389;</span>
                                    </h4>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button
                                                id="modalToggle"
                                                class="custom-btn-tab custom-blue custom-btn-xs fade-in-150"
                                                style="
                                        padding: 5px !important;
                                        width: 75%;
                                        cursor: pointer !important;
                                        outline: 0;
                                        margin-top: 25px;
                                        width: 100%;
                                        "
                                                v-on:click="claimToggle"
                                        >
                                            Claim
                                            <img src="/storage/assets/img/robux-png.png" style="margin-left: 1px; width: 34px; margin-top: -3px;" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center recent-earning-withdraw" style="width: 100%;">
                        <div class="my-3 p-3 bg-white rounded shadow-sm text-center" style="padding: 6px !important; margin-left: 0px !important; margin-right: 0px !important; padding-bottom: 16px !important;">
                            <h4 class="text-center fade-in-100" style="margin-top: 17px; margin-bottom: 9px;">Recent Earnings &#x1F4B0;</h4>
                            <hr />
                            <div class="container">
                                <div class="win-table text-left fade-in-150">
                                    <div v-for="item in recent_earnings" class="media text-muted pt-3" style="padding-top: 0px !important;">
                                        <img class="mr-2 rounded" alt="Profile" :src="item.avatar" style="width: 60px; border-radius: 100% !important; border: 2px solid #eee;" />
                                        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray" style="margin-top: 5px; padding-bottom: 5 !important; color: black;">
                                            <h5 class="d-block" style="font-size: 19px; margin-bottom: 3px;">
                                                <span v-if="item.username">{{item.username}}</span>
                                                <span v-if="!item.username"><div class="skeleton-animation1"></div></span>
                                                <span class="badge badge-success" style="float: right; display: inline-block !important; font-size: 22px;">
                                                    <span>{{item.amount.toFixed(2)}}</span> <img alt="Robux" src="/storage/assets/img/robux-png.png" style="width: 24px; margin-bottom: 2px;" />
                                                </span>
                                            </h5>
                                            <span style="" class="robox-sub-text"><span style="color: #28a744; margin-left: 5px;">+<span>{{item.amount.toFixed(2)}}</span>R$</span></span>
                                        </div>
                                        <p></p>
                                    </div>
                                </div>
                                <div style="max-height: 400px; height: auto; border: 0;" class="card align-self-stretch">
                                    <h4 href="#" style="margin-top: 15px;">
                                        <span class="badge badge-success fade-in-200" style="padding: 5px;"><img alt="Robux" src="/storage/assets/img/robux-png.png" style="width: 22px; padding-bottom: 1px;" /><span>{{TOTAL_EARNED}}</span> TOTAL EARNED </span>
                                    </h4>
                                </div>
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
                    <a href="#/earn" type="button" class="btn btn-primary waves-effect waves-light btn-block" style="color: #FFF !important;">Earn Robux!</a>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
        <RobuxModalPart1 :update-withdraw-amount="updateWithdrawAmount" />
        <RobuxModalPart15 :withdraw-amount="withdraw_amount" />
        <RobuxModalPart2 :withdraw-amount="withdraw_amount_minus_commission" />
    </section>
</template>

<script>
    import {AVATAR_URL, LEFT_AVATAR, DEFAULT_AVATAR, GET_AVATAR} from '@/js/config/withdraw';
    import RobuxModalPart1 from "@/js/components/RobuxModalPart1";
    import RobuxModalPart15 from "@/js/components/RobuxModalPart1_5";
    import RobuxModalPart2 from "@/js/components/RobuxModalPart2";
    import Header from "@/js/components/Header";

    export default {
        name: "Withdraw",
        components: {RobuxModalPart15, Header, RobuxModalPart1, RobuxModalPart2},
        data: function() {
            return {
                loggedIn: false,
                componentKey: 0,
                user: {username: ''},
                avatar: LEFT_AVATAR,
                USER_STOCK: 0,
                USERS_STOCK: 0,
                OFFERS_DONE: '88,000',
                USERS_COUNT: '100,000',
                TOTAL_EARNED: '67,987',
                recent_earning: {
                    avatar: DEFAULT_AVATAR,
                    amount: 1440,
                    username: null
                },
                recent_earnings: [],
                withdraw_amount: 0,
                withdraw_amount_minus_commission: 0,
                loading: false,
            }
        },
        mounted() {
            this.recent_earnings.push(this.recent_earning);
            const user = $helper.getUser();

            if(!user) {
                this.avatar = 'Please Login to view';
                this.loggedIn = false;
            } else {
                this.avatar = GET_AVATAR + user.username;
                this.user = user;
                this.loggedIn = true;
            }

            const stats = $helper.getLocalData('stats');
            if(stats) {
                this.USERS_STOCK = stats.stock;
            }

            this.getRecentEarnings();
            // this.getStock();
        },
        methods: {
            forceRerender() {
                this.componentKey += 1;
            },
            updateUserStock: function(val) {
                this.USER_STOCK = val;
            },
            login: function() {
                $helper.openLoginModal();
            },
            updateWithdrawAmount: function(val, actual) {
                this.withdraw_amount = val;
                this.withdraw_amount_minus_commission = actual;
            },
            claimToggle: function () {
                if(!$helper.openLoginModal()) return false;
                $('#robuxModalPart1').modal('toggle');
            },
            getStock: function() {
                $api.postData('get-stock')
                    .then((response) => {
                        $helper.saveLocalData('stock', response)
                    });
            },
            getRecentEarnings: function() {
                $api.postData('recent-earnings')
                    .then((response) => {
                        if(response.length > 0) {
                            const _this = this;
                            _this.recent_earnings = [];
                            response.forEach((item, index) => {
                                const username = item.username.substring(0, item.username.length-3) + '***';
                                _this.recent_earnings.push({
                                    avatar: AVATAR_URL.replace('{USERNAME}', item.username),
                                    amount: item.amount,
                                    username: username
                                })
                            })
                        }
                    });
            },
            claimDaily: function() {

                if(this.loading) return false;

                const stats = $helper.getLocalData('stats');
                const user = $helper.getUser();
                if(!stats || !user) {
                    return $helper.openLoginModal();
                }

                if(stats.offers_done <= 0) {
                    Swal.fire(
                        'Oops!',
                        'You need to do at least 1 offer to claim your daily Bonus!',
                        'error'
                    );
                    return false;
                }

                this.loading = !this.loading;
                const FORM_DATA = new FormData();
                FORM_DATA.append('id', $helper.easyEncrypt(user.id));
                $api.postData('claim-daily', FORM_DATA)
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
                        this.USER_STOCK = this.$refs.headerComponent.USER_STOCK = response.data.stats.user_stock;
                    })
                    .catch(error => {
                        this.loading = !this.loading;
                        Swal.fire(
                            'Oops!',
                            'Something went wrong, please try again!',
                            'error'
                        );
                    })
            },
            logout: function() {
                $helper.removeLocalData('__u');
                $helper.removeLocalData('stats');
                $helper.removeLocalData('e_soial_popup');
                $helper.removeLocalData('e_chest_popup');
                $helper.removeLocalData('starter-chest');
                $helper.removeLocalData('basic-chest');
                $helper.removeLocalData('rare-chest');
                $helper.removeLocalData('godly-chest');
                $helper.removeLocalData('giveaway_timer');

                this.$router.push('/');
            },
        }
    }
</script>

<style scoped>

</style>