<template>
    <section>
        <Header :update-user-stock="updateUserStock" :key="componentKey" />

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row full-width-section">
                    <div class="col-md-4 fade-in-100">
                        <div class="bg-primary p-4" style="border-radius: 3px; background-image: url(/storage/assets/img/chests/common-background-min.png); background-size: cover;">
                            <span><img alt="Chest" src="/storage/assets/img/chests/common-chest.png" style="width: 94px; float: right;" /></span>
                            <div class="text-left text-white">
                                <h2 class="counter text-white">RARE</h2>
                                <span>Max Prize: 30R$</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 fade-in-150">
                        <div class="bg-primary p-4" style="border-radius: 3px; background-image: url(/storage/assets/img/chests/rare-background-min.png); background-size: cover;">
                            <span><img alt="Chest" src="/storage/assets/img/chests/rare-chest.png" style="float: right; width: 94px;" /></span>
                            <div class="text-left text-white">
                                <h2 class="counter text-white">EPIC</h2>
                                MAX PRIZE: 150R$
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 fade-in-200">
                        <div class="bg-primary p-4" style="border-radius: 3px; background-image: url(/storage/assets/img/chests/godly-background-min.png); background-size: cover;">
                            <span><img alt="Chest" src="/storage/assets/img/chests/godly-chest.png" style="width: 87px; float: right;" /></span>
                            <div class="text-left text-white">
                                <h2 class="counter text-white">LEGENDARY</h2>
                                Max Prize: 1,000R$
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="text-center fade-in-150" style="margin-top: 30px; margin-bottom: 30px;">Your Chests <img src="/storage/assets/img/chests/rsz_1emoji_treasure_chest.png" style="
            width: 32px;
            margin-bottom: 5px;
            "></h2>
                <div class="row full-width-section" style="padding-right: 15px; padding-left: 15px;">
                    <div class="col-md-3 chest-card fade-in-200">
                        <div class="my-3 bg-primary rounded p-3 shadow-sm text-center maincard-three" style="padding: 5px !important; font-size: 25px; background-color: #9a9a9a !important;">BASIC CHEST</div>
                        <div style="background-color: #efefef; border-radius: 5px; padding: 15px;">
                            <div class="video-container">
                                <img alt="Chest" :src="starter_chest.open ? starter_chest.open_image: starter_chest.close_image" />
                            </div>
                            <button
                                    v-if="starter_chest.close"
                                    v-on:click="openStarterChest"
                                    class="custom-btn custom-blue custom-btn-xs"
                                    style="outline: none !important; padding-top: 5px !important; width: 100%; padding-bottom: 5px !important;"
                            >
                                OPEN!
                            </button>
                        </div>
                    </div>
                    <div class="col-md-3 chest-card fade-in-250">
                        <div class="my-3 bg-primary rounded p-3 shadow-sm text-center maincard-three" style="padding: 5px !important; font-size: 25px; background-color: #b66c02 !important;">RARE CHEST</div>
                        <div style="background-color: #efefef; border-radius: 5px; padding: 15px;">
                            <div class="video-container">
                                <img alt="Chest" :src="basic_chest.open ? basic_chest.open_image : basic_chest.close ? basic_chest.close_image : basic_chest.locked_image" />
                            </div>
                            <button
                                    v-if="basic_chest.close === 1 && basic_chest.locked === 0"
                                    v-on:click="openBasicChest"
                                    class="custom-btn custom-blue custom-btn-xs"
                                    style="outline: none !important; padding-top: 5px !important; width: 100%; padding-bottom: 5px !important;"
                            >
                                OPEN!
                            </button>
                            <div v-if="basic_chest.locked && basic_chest.open === 0">
                                <div class="progress" style="background-color: #d8d8d8;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" :style="{width: basic_chest.progress_bar + '%'}"></div>
                                </div>
                                <h6 class="text-center" style="margin-top: 13px; margin-bottom: 0px;">Complete <span>{{stats.event_chest_offers}}</span>/3 Offers!</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 chest-card fade-in-300">
                        <div class="my-3 bg-primary rounded p-3 shadow-sm text-center maincard-three" style="padding: 5px !important; font-size: 25px; background-color: #feb124 !important;">EPIC CHEST</div>
                        <div style="background-color: #efefef; border-radius: 5px; padding: 15px;">
                            <div class="video-container">
                                <img alt="Chest" :src="rare_chest.open ? rare_chest.open_image : rare_chest.close ? rare_chest.close_image : rare_chest.locked_image" />
                            </div>
                            <button
                                    v-if="rare_chest.close === 1 && rare_chest.locked === 0"
                                    v-on:click="openRareChest"
                                    class="custom-btn custom-blue custom-btn-xs"
                                    style="outline: none !important; padding-top: 5px !important; width: 100%; padding-bottom: 5px !important;"
                            >
                                OPEN!
                            </button>
                            <div v-if="rare_chest.locked && rare_chest.open === 0">
                                <div class="progress" style="background-color: #d8d8d8;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" :style="{width: rare_chest.progress_bar + '%'}"></div>
                                </div>
                                <h6 class="text-center" style="margin-top: 13px; margin-bottom: 0px;">Complete <span>{{stats.event_chest_offers}}</span>/5 Offers!</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 chest-card fade-in-350">
                        <div class="my-3 bg-primary rounded p-3 shadow-sm text-center maincard-three" style="padding: 5px !important; font-size: 25px; background-color: #12b9b3 !important;">LEGENDARY CHEST</div>
                        <div style="background-color: #efefef; border-radius: 5px; padding: 15px;">
                            <div class="video-container">
                                <img alt="Chest" :src="godly_chest.open ? godly_chest.open_image : godly_chest.close ? godly_chest.close_image : godly_chest.locked_image" />
                            </div>
                            <button
                                    v-if="godly_chest.close === 1&& godly_chest.locked === 0"
                                    v-on:click="openGodlyChest"
                                    class="custom-btn custom-blue custom-btn-xs"
                                    style="outline: none !important; padding-top: 5px !important; width: 100%; padding-bottom: 5px !important;"
                            >
                                OPEN!
                            </button>
                            <div v-if="godly_chest.locked && godly_chest.open === 0">
                                <div class="progress" style="background-color: #d8d8d8;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" :style="{width: godly_chest.progress_bar + '%'}"></div>
                                </div>
                                <h6 class="text-center" style="margin-top: 13px; margin-bottom: 0px;">Complete <span>{{stats.event_chest_offers}}</span>/10 Offers!</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="my-3 p-3 bg-white rounded shadow-sm text-left">
                    <div class="row">
                        <div class="col-sm-6" style="text-align: left;">
                            <div style="max-height: 400px; height: auto;border-radius:20px;" class="card align-self-stretch">
                                <iframe
                                        allowfullscreen=""
                                        title="Youtube Video"
                                        id="iframeyoutube"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        frameborder="0"
                                        src="https://www.youtube.com/embed/st_vDoeCc-A"
                                        width="100%"
                                        height="300"
                                        style="border-radius:20px;"
                                ></iframe>
                            </div>
                        </div>
                        <div class="col-sm-6" style="margin-top: 20px;">
                            <h5>Biggest Winners &#x1F334;</h5>
                            <hr />
                            <div class="media text-muted pt-3" style="padding-top: 0px !important;">
                                <img
                                        class="mr-2 rounded"
                                        alt="Profile"
                                        src="https://cdn.discordapp.com/attachments/700762417017389136/718167352960614520/Screenshot_2020-06-04_at_19.20.31.png"
                                        style="width: 60px; border-radius: 100% !important; border: 2px solid #eee;"
                                />
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray" style="margin-top: 5px; padding-bottom: 5 !important; color: black;">
                                    <h5 class="d-block" style="font-size: 19px; margin-bottom: 3px;">
                                        <span>J7Q****</span>
                                        <span class="badge badge-success" style="float: right; display: inline-block !important; font-size: 22px;"><span>823233</span> <img alt="Robux" src="/storage/assets/img/robux-png.png" style="width: 24px; margin-bottom: 2px;" /></span>
                                    </h5>
                                    <span style="">Won <span>821233</span> robux from <span style="color: #16cac3;">GODLY</span> chest</span>
                                </div>
                                <p></p>
                            </div>
                            <div class="media text-muted pt-3" style="padding-top: 5px !important;">
                                <img
                                        class="mr-2 rounded"
                                        alt="Profile"
                                        src="https://www.roblox.com/Thumbs/Avatar.ashx?x=150&amp;y=150&amp;Format=Png&amp;username=GrlygamerYT"
                                        style="width: 60px; border-radius: 100% !important; border: 2px solid #eee;"
                                />
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray" style="margin-top: 5px; padding-bottom: 5 !important; color: black;">
                                    <h5 class="d-block" style="font-size: 19px; margin-bottom: 3px;">
                                        <span>axe****</span>
                                        <span class="badge badge-success" style="float: right; display: inline-block !important; font-size: 22px;"><span>740</span> <img alt="Robux" src="/storage/assets/img/robux-png.png" style="width: 24px; margin-bottom: 2px;" /></span>
                                    </h5>
                                    Won <span>740</span> robux from <span style="color: #16cac3;">GODLY</span> chest
                                </div>
                                <p></p>
                            </div>
                            <div class="media text-muted pt-3" style="padding-top: 5px !important;">
                                <img
                                        class="mr-2 rounded"
                                        alt="Profile"
                                        src="https://www.roblox.com/Thumbs/Avatar.ashx?x=150&amp;y=150&amp;Format=Png&amp;username=GrlygamerYT"
                                        style="width: 60px; border-radius: 100% !important; border: 2px solid #eee;"
                                />
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray" style="margin-top: 5px; padding-bottom: 5 !important; color: black;">
                                    <h5 class="d-block" style="font-size: 19px; margin-bottom: 3px;">
                                        <span>axe****</span>
                                        <span class="badge badge-success" style="float: right; display: inline-block !important; font-size: 22px;"><span>659</span> <img alt="Robux" src="/storage/assets/img/robux-png.png" style="width: 24px; margin-bottom: 2px;" /></span>
                                    </h5>
                                    Won <span>659</span> robux from <span style="color: #d400d4;">EVENT</span> chest
                                </div>
                                <p></p>
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

        <StarterChestModal />
        <BasicChestModal />
        <RareChestModal />
        <GodlyChestModal />
    </section>
</template>

<script>
    import StarterChestModal from "@/js/components/StarterChestModal";
    import BasicChestModal from "@/js/components/BasicChestModal";
    import RareChestModal from "@/js/components/RareChestModal";
    import GodlyChestModal from "@/js/components//GodlyChestModal";

    import {STARTER_CHEST, BASIC_CHEST, RARE_CHEST, GODLY_CHEST} from '@/js/config/inventory'
    import Header from "@/js/components/Header";

    export default {
        name: "Inventory",
        components: {Header, GodlyChestModal, RareChestModal, BasicChestModal, StarterChestModal},
        data: function () {
            return {
                componentKey: 0,
                user: {offers_done: 0},
                stats: {},
                USER_STOCK: 0,
                starter_chest : {...STARTER_CHEST},
                basic_chest: {...BASIC_CHEST},
                rare_chest: {...RARE_CHEST},
                godly_chest: {...GODLY_CHEST},
            }
        },
        mounted() {
            const user = $helper.getUser();
            if(user) this.user = user;

            const stats = $helper.getLocalData('stats');
            let offers_done = 0;
            if(stats) {
                offers_done = stats.event_chest_offers;
                this.stats = stats;
                this.$forceUpdate();
            }

            this.$set(this.basic_chest, 'progress_bar', ( offers_done / this.basic_chest.offer_count) * 100);
            this.$set(this.rare_chest, 'progress_bar', ( offers_done / this.rare_chest.offer_count) * 100);
            this.$set(this.godly_chest, 'progress_bar', ( offers_done / this.godly_chest.offer_count) * 100);

            this.initStarterChest();    // renamed to basic
            this.initBasicChest();      // renamed to rare
            this.initRareChest();       // renamed to epic
            this.initGodlyChest();       // renamed to epic
        },
        methods: {
            forceRerender() {
                this.componentKey += 1;
            },
            updateUserStock: function(user_stock, other_stats) {
                this.USER_STOCK = user_stock;
                this.stats = other_stats;

                this.$set(this.basic_chest, 'progress_bar', ( this.stats.event_chest_offers / this.basic_chest.offer_count) * 100);
                this.$set(this.rare_chest, 'progress_bar', ( this.stats.event_chest_offers / this.rare_chest.offer_count) * 100);
                this.$set(this.godly_chest, 'progress_bar', ( this.stats.event_chest_offers / this.godly_chest.offer_count) * 100);

                this.initStarterChest();    // renamed to basic
                this.initBasicChest();      // renamed to rare
                this.initRareChest();       // renamed to epic
                this.initGodlyChest();       // renamed to epic
            },
            openStarterChest: function () {
                const status = $helper.openLoginModal();
                if(status === true)
                    $('#starterChestModal').modal('toggle');
            },
            openBasicChest: function () {
                const status = $helper.openLoginModal();
                if(status === true)
                    $('#basicChestModal').modal('toggle');
            },
            openRareChest: function () {
                const status = $helper.openLoginModal();
                if(status === true)
                    $('#rareChestModal').modal('toggle');
            },
            openGodlyChest: function () {
                const status = $helper.openLoginModal();
                if(status === true)
                    $('#godlyChestModal').modal('toggle');
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

                if(this.basic_chest.offer_count <= this.stats.event_chest_offers) {
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

                if(this.rare_chest.offer_count <= this.stats.event_chest_offers) {
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
            initGodlyChest: function () {

                this.$set(this.godly_chest, 'open', $helper.getLocalData('godly-chest'));
                if(this.godly_chest.open === 1)
                    this.$set(this.godly_chest, 'close', 0);

                if(this.stats && this.stats.godly_chest === 1) {
                    this.$set(this.godly_chest, 'open', this.stats.godly_chest);
                    this.$set(this.godly_chest, 'close', 0);
                }

                if(this.godly_chest.open === null) {
                    this.$set(this.godly_chest, 'open', 0);
                }

                if(this.godly_chest.offer_count <= this.stats.event_chest_offers) {
                    this.$set(this.godly_chest, 'locked', 0);
                }
            },
        }
    }
</script>

<style scoped>
    .progress {
        height: 18px;
    }
    .progress-bar-striped {
        background-repeat: repeat-x;
    }
</style>