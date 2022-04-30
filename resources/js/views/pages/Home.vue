<template>
    <section>
        <!-- HEADER -->
        <Header :update-user-stock="updateUserStock" :key="componentKey" />

        <section class="jumbotron text-center banner-loot fade-in-100">
            <div class="container">
                <img alt="Robux" src="/storage/assets/img/logo-index.png" style="width: 100%; max-width: 400px;"/>
                <p></p>
                <div class="row">
                    <div class="col-md-12">
                        <button class="custom-btn custom-blue mx-auto" v-on:click="loginModal"
                                style="cursor: pointer !important; outline: 0;min-width: 300px;width: 50%;max-width: 450px;-webkit-transition: all 0.15s ease-out!important;transition: all 0.15s ease-out!important;border-radius:12px!important;">
                            START!
                        </button>
                    </div>
                </div>
                <p></p>
            </div>
        </section>
        <div class="row main-row">
            <div class="col-md-6 mx-auto fade-in-200" style="margin-right: 10px; margin-left: 10px;">
                <div style="background-color: #e8e8e8; border-radius: 7px; padding: 5px;border-radius: 217px 18px 206px 16px/13px 178px 7px 42px !important;padding-bottom: 0px; margin-bottom: 30px; width: 100%;">
                    <h3 class="text-center" style="font-size: 25px;">1.7M+ Robux Earned!<img alt="Robux"
                                                                                             src="/storage/assets/img/robux.png"
                                                                                             style="margin-bottom: 6px; width: 55px; margin-left: 9px;"/>
                    </h3>
                </div>
            </div>
        </div>
        <div class="album py-5 bg-light">
            <div class="container">
                <h2 class="text-center fade-in-250" style="margin-bottom: 30px;">Open this free chest!</h2>
                <div class="row index-row">
                    <div class="col-md-4 chest-card chest-card-main fade-in-300">
                        <div style="margin: 0px!important;padding-left: 19%;">
                            <div class="my-3 bg-primary rounded p-3 shadow-sm text-center maincard-three"
                                 style="padding: 5px !important;font-size: 25px;background-color: #656565 !important;margin-top: 0px!important;">
                                RARE CHEST
                            </div>
                            <div style="background-color: #efefef;border-radius: 5px;padding: 15px;">
                                <div class="video-container">
                                    <img alt="Chest"
                                         :src="basic_chest.open ? basic_chest.open_image : basic_chest.close ? basic_chest.close_image : basic_chest.locked_image"/>
                                </div>
                                <button
                                        v-if="!basic_chest.locked"
                                        class="custom-btn custom-btn-xs"
                                        v-on:click="chestOpen"
                                        style="outline: none !important; padding-top: 5px !important; width: 100%; padding-bottom: 5px !important;">
                                    OPEN!
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 chest-card">
                        <div class="my-3 bg-primary rounded p-3 shadow-sm text-center maincard-three"
                             style="padding: 5px !important; font-size: 25px; background-color: #9a9a9a !important;">
                            BASIC CHEST
                        </div>
                        <div style="background-color: #efefef; border-radius: 5px; padding: 15px;">
                            <div>
                                <img alt="Chest"
                                     :src="starter_chest.open ? starter_chest.open_image: starter_chest.close_image"/>
                            </div>
                            <button
                                    v-if="starter_chest.close"
                                    class="custom-btn custom-btn-xs"
                                    v-on:click="chestOpen"
                                    style="outline: none !important; padding-top: 5px !important; width: 100%; padding-bottom: 5px !important;">
                                OPEN!
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 chest-card chest-card-main">
                        <div style="width: 79%;">
                            <div class="my-3 bg-primary rounded p-3 shadow-sm text-center maincard-three"
                                 style="padding: 5px !important;font-size: 25px;background-color: #656565 !important;margin-top: 0px!important;">
                                EPIC CHEST
                            </div>
                            <div style="background-color: #efefef;border-radius: 5px;padding: 15px;">
                                <div class="video-container">
                                    <img alt="Chest"
                                         :src="rare_chest.open ? rare_chest.open_image : rare_chest.close ? rare_chest.close_image : rare_chest.locked_image"/>
                                </div>
                                <button
                                        v-if="!rare_chest.locked"
                                        class="custom-btn custom-btn-xs"
                                        v-on:click="chestOpen"
                                        style="outline: none !important; padding-top: 5px !important; width: 100%; padding-bottom: 5px !important;">
                                    OPEN!
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container marketing py-5" style="">
            <div class="container" style="margin-bottom: 20px;">
                <h3 style="text-align: center; margin-bottom: 20px;">How does this work?</h3>
                <hr/>
                <div class="row" style="margin-top: 40px;">
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="text-center">
                            <img src="https://i.imgur.com/WEThWmY.png" style="width: 80px; margin-bottom: 10px;"/>

                            <h3 style="font-weight: 700;">1. Sign up</h3>
                            <p style="font-family: 'Roboto'; font-weight: bold;">Enter your <strong>ROBLOX</strong>
                                username to begin, no other information is required.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="text-center">
                            <img src="https://i.imgur.com/lgWbn7M.png" style="margin-bottom: 10px;"/>

                            <h3 style="font-weight: 700;">2. Earn Points</h3>
                            <p style="font-family: 'Roboto'; font-weight: bold;">Complete tasks to <strong>earn</strong>
                                points. You can download mobile apps and watch videos!</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="text-center">
                            <img src="https://i.imgur.com/kIRYYSo.png" style="width: 150px;"/>

                            <h3 style="font-weight: 700;">3. Redeem Points</h3>
                            <p style="font-family: 'Roboto'; font-weight: bold;"><strong>Redeem</strong> your points on
                                the claim page and receive them by joining a group.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <button class="btn btn-primary waves-effect waves-light btn-block" v-on:click="gotoPromoclaim">Claim
                        Promocode!
                    </button>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>

    </section>
</template>

<script>
    import {STARTER_CHEST, BASIC_CHEST, RARE_CHEST} from '@/js/config/inventory'
    import Header from "@/js/components/Header";

    export default {
        name: "Home",
        components: {Header},
        data: function () {
            return {
                componentKey: 0,
                username: '',
                user: {},
                stats: {},
                USER_STOCK: 0,
                starter_chest: {...STARTER_CHEST},
                basic_chest: {...BASIC_CHEST},
                rare_chest: {...RARE_CHEST},
            }
        },
        beforeMount() {
            this.user = $helper.getUser();
        },
        mounted() {
            const stats = $helper.getLocalData('stats');
            if(stats) {
                this.stats = stats;
                this.$forceUpdate();
            }
            this.loadChest();
            this.initStarterChest();    // renamed to basic
            this.initBasicChest();      // renamed to rare
            this.initRareChest();       // renamed to epic
        },
        methods: {
            forceRerender() {
                this.componentKey += 1;
            },
            updateUserStock: function(user_stock, other_stats) {
                this.USER_STOCK = user_stock;
                this.stats = other_stats;

                this.initStarterChest();    // renamed to basic
                this.initBasicChest();      // renamed to rare
                this.initRareChest();       // renamed to epic
            },
            loginModal: function () {
                const status = $helper.openLoginModal();
                if (status === true) this.$router.push('earn');
            },
            chestOpen: function () {
                const status = $helper.openLoginModal();
                if (status === true) this.$router.push('inventory');
            },
            gotoPromoclaim: function () {
                const status = $helper.openLoginModal();
                if (status === true) this.$router.push('promocodes');
            },
            loadChest: function () {
                const user = $helper.getUser();

            },
            loginDummyUser: function () {
                let user = $helper.getLocalData('__u');
                if (user) {
                    user = JSON.parse($helper.easyDecrypt(user));
                    if (user.username !== 'test') return false;
                }
                const FORM_DATA = new FormData();
                FORM_DATA.append('username', $helper.easyEncrypt('test'));
                $api.postData('login', FORM_DATA)
                    .then((response) => {
                        if (response.status === false || response.data === undefined) {
                            return false;
                        }
                        $helper.saveLocalData('__u', response.data.__u);
                        $helper.saveLocalData('stats', response.data.stats);
                    })
            },
            initStarterChest: function () {
                this.$set(this.starter_chest, 'open', $helper.getLocalData('starter-chest'));
                if(this.starter_chest.open === 1) {
                    this.$set(this.starter_chest, 'close', 0);
                    this.$set(this.basic_chest, 'locked', 1);
                    this.$set(this.basic_chest, 'close', 1);
                }

                if(this.stats && this.stats.opened_starter === 1) {
                    this.$set(this.starter_chest, 'open', this.stats.opened_starter);
                    this.$set(this.starter_chest, 'close', 0);
                    this.$set(this.basic_chest, 'locked', 1);
                    this.$set(this.basic_chest, 'close', 1);
                }

                if(this.basic_chest.offer_count === this.stats.event_chest_offers) {
                    this.$set(this.basic_chest, 'locked', 0);
                }

                if(this.starter_chest.open === null) {
                    this.$set(this.starter_chest, 'open', 0);
                }
            },
            initBasicChest: function () {
                this.$set(this.basic_chest, 'open', $helper.getLocalData('basic-chest'));
                if(this.basic_chest.open === 1) {
                    this.$set(this.basic_chest, 'close', 0);
                    this.$set(this.rare_chest, 'locked', 1);
                    this.$set(this.rare_chest, 'close', 1);
                }

                if(this.stats && this.stats.basic_chest === 1) {
                    this.$set(this.basic_chest, 'open', this.stats.basic_chest);
                    this.$set(this.basic_chest, 'close', 0);
                    this.$set(this.rare_chest, 'locked', 1);
                    this.$set(this.rare_chest, 'close', 1);
                }

                if(this.rare_chest.offer_count === this.stats.event_chest_offers) {
                    this.$set(this.rare_chest, 'locked', 0);
                }

                if(this.basic_chest.open === null) {
                    this.$set(this.basic_chest, 'open', 0);
                }
            },
            initRareChest: function () {
                this.$set(this.rare_chest, 'open', $helper.getLocalData('rare-chest'));
                if(this.rare_chest.open === 1) {
                    this.$set(this.rare_chest, 'close', 0);
                    this.$set(this.godly_chest, 'locked', 1);
                    this.$set(this.godly_chest, 'close', 1);
                }

                if(this.stats && this.stats.rare_chest === 1) {
                    this.$set(this.rare_chest, 'open', this.stats.rare_chest);
                    this.$set(this.rare_chest, 'close', 0);
                    this.$set(this.basic_chest, 'close', 0);
                    this.$set(this.godly_chest, 'locked', 1);
                    this.$set(this.godly_chest, 'close', 1);
                }

                if(this.rare_chest.open === null) {
                    this.$set(this.rare_chest, 'open', 0);
                }
            },
        }
    }
</script>

<style scoped>
    section.jumbotron {
        border-radius: 0;
        background-image: url('/storage/assets/img/banner.png') !important;
    }
</style>