<template>
    <section>

        <!-- HEADER -->
        <Header :update-user-stock="updateUserStock" :key="componentKey" ref="headerComponent" />

        <div class="album py-5 bg-light" style="padding-top: 7px !important;">
            <div class="container">
                <div class="row" style="margin-top: 10px;">
                    <div class="d-flex flex-row flex-nowrap overflow-auto"
                         style="scroll-snap-type: x mandatory; width: 100%;">

                        <!------------------------
                            STATS BOXES
                        -------------------------->
                        <div class="col-12 col-md-4" style="scroll-snap-align: center;">
                            <div class="card-block mx-1 fade-in-150" style="">
                                <div class="bg-primary p-4 stats"
                                     style="background-image: url(/storage/assets/img/first-min.png); width: 100%;">
                                    <span><img src="/storage/assets/img/robux-png.png"
                                               style="width: 72px; float: right;"/></span>
                                    <div class="text-left text-white">
                                        <h2 class="counter text-white">{{USERS_STOCK}}</h2> R$ STOCK
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 fade-in-150" style="scroll-snap-align: center;">
                            <div class="bg-primary p-4 stats"
                                 style="background-image: url(/storage/assets/img/second-min.png);"><span><img
                                    src="/storage/assets/img/robux-png.png" style="width: 72px; float: right;"/></span>
                                <div class="text-left text-white">
                                    <h2 class="counter text-white">{{OFFERS_DONE}}</h2> 
                                    <span class="offers-done">OFFERS DONE</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 fade-in-200" style="scroll-snap-align: center;">
                            <div class="bg-primary p-4 stats"
                                 style="background-image: url(/storage/assets/img/rsz_1third-min_1-min.png);"><span><img
                                    src="/storage/assets/img/robux-png.png" style="width: 72px; float: right;"/></span>
                                <div class="text-left text-white">
                                    <h2 class="counter text-white">{{USERS_COUNT}}</h2> USERS
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!------------------------
                    EVENT CHEST BANNER
                -------------------------->
                <div class="row">
                    <div class="col-12 col-md-12 fade-in-200 mt-3">
                        <div class="section-banner"><img alt="newsfeed-icon" class="section-banner-icon"
                                                         src="https://cdn.discordapp.com/attachments/700762417017389136/784787484520874004/epic.png"/>
                            <p class="section-banner-title"> Event Chest! </p>
                            <p class="section-banner-mobile"> Win 5,000 Robux!<a
                                    class="btn bg-white text-dark waves-effect waves-dark"
                                    style="display: table; margin-top: 15px;" v-on:click="navigateToPage('events')">GO
                                TO EVENT!</a></p>
                            <p class="section-banner-text"> Win 5,000 Robux Prize! (10 Offers)<a
                                    class="btn bg-white text-dark waves-effect waves-dark"
                                    style="display: table; margin-top: 15px;" v-on:click="navigateToPage('events')">GO
                                TO EVENT!</a></p>
                        </div>
                    </div>
                </div>

                <!------------------------
                    STARTER OFFERS
                -------------------------->
                <div class="row eid3_3me" v-if="show_starter_offers">
                    <h5 class="fade-in-100" style="margin-left: 10px; margin-top: 5px; padding: 5px;">
                        Do these Starter Offers for Robux! 💰
                    </h5>
                    <div class="offers-slider d-flex flex-row flex-nowrap overflow-auto"
                         style="scroll-snap-type: x mandatory;">

                        <!---------- WELCOME BOX ---->
                        <div class="card card-block mx-2 fade-in-150 rfkn3_d3" style="margin-left: 14px !important;">
                            <div class="bg-primary p-4 stats Xydn3"
                                 style="background-image: url(/storage/assets/img/chests/rare-background-min.png);">
                                <div class="text-left text-white" style="padding: 18px; height: 101px;">
                                    <h2 class="counter text-white">Welcome!</h2> Do some Starter Offers!
                                </div>
                                <div class="my-3 bg-primary rounded p-3 shadow-sm text-center maincard-three maincard-three-snap INd39d">
                                    <span class="xya3_34">Swipe along 👉</span></div>
                                <div class="my-3 bg-primary rounded p-3 shadow-sm text-center maincard-three maincard-three-snap Xkn3e_2e">
                                    <div class="row jn3_x2">
                                        <div class="col-6" style="padding-right: 0;">
                                            <button class="custom-btn-tab custom-blue custom-btn-xs Kedn3ex"
                                                    v-on:click="tutorial"> Tutorial <i
                                                    class="fas fa-question-circle"></i></button>
                                        </div>
                                        <div class="col-6" style="padding-left: 0;">
                                            <button class="custom-btn-tab custom-btn-xs custom-green righ34id"
                                                    id="modalToggle">CLOSE <i class="fas fa-times-circle"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----------- MINECRAFT BOX ---->
                        <div class="card card-block mx-2 fade-in-250 rfkn3_d3">
                            <div class="bg-primary p-4 stats Xydn3"
                                 style="background-image: url(https://cdn.discordapp.com/attachments/716819389130866738/744132879600058378/LvNXk2LvkwfFxhgUk2j5WL.jpg);">
                                <div class="text-left text-white" style="padding: 18px; height: 101px;">
                                    <h2 class="counter text-white"></h2></div>
                                <div class="my-3 bg-primary rounded p-3 shadow-sm text-center maincard-three maincard-three-snap INd39d">
                                    <span class="xya3_34">Minecraft Quiz - Get 100%</span></div>
                                <div class="my-3 bg-primary rounded p-3 shadow-sm text-center maincard-three maincard-three-snap Xkn3e_2e">
                                    <div class="row jn3_x2">
                                        <div class="col-6" style="padding-right: 0;">
                                            <button class="custom-btn-tab custom-blue custom-btn-xs Kedn3ex"
                                                    id="modalToggle1"><span>3 R$</span><img
                                                    src="/storage/assets/img/robux-png.png"
                                                    style="margin-left: 1px; width: 34px; margin-top: -3px;"/></button>
                                        </div>
                                        <div class="col-6" style="padding-left: 0;">
                                            <button class="custom-btn-tab custom-btn-xs custom-green righ34id"
                                                    id="modalToggle2"
                                                    v-on:click="starterOffer('minecraft')">START <i class="fas fa-arrow-circle-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----------- SOLITARE BOX ---->
                        <div class="card card-block mx-2 fade-in-250 rfkn3_d3">
                            <div class="bg-primary p-4 stats Xydn3"
                                 style="background-image: url(https://cdn.discordapp.com/attachments/716819389130866738/744135793295228978/Screenshot_2020-08-15_at_11.09.48.png);">
                                <div class="text-left text-white" style="padding: 18px; height: 101px;">
                                    <h2 class="counter text-white"></h2></div>
                                <div class="my-3 bg-primary rounded p-3 shadow-sm text-center maincard-three maincard-three-snap INd39d">
                                    <span class="xya3_34">Install + Open (1 min)</span></div>
                                <div class="my-3 bg-primary rounded p-3 shadow-sm text-center maincard-three maincard-three-snap Xkn3e_2e">
                                    <div class="row jn3_x2">
                                        <div class="col-6" style="padding-right: 0;">
                                            <button class="custom-btn-tab custom-blue custom-btn-xs Kedn3ex"
                                                    id="modalToggle13"><span>3 R$</span><img
                                                    src="/storage/assets/img/robux-png.png"
                                                    style="margin-left: 1px; width: 34px; margin-top: -3px;"/></button>
                                        </div>
                                        <div class="col-6" style="padding-left: 0;">
                                            <button class="custom-btn-tab custom-btn-xs custom-green righ34id"
                                                    id="modalToggle4"
                                                    v-on:click="starterOffer('solitare')">START <i class="fas fa-arrow-circle-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----------- ROBLOX 1 BOX ---->
                        <div class="card card-block mx-2 fade-in-250 rfkn3_d3">
                            <div class="bg-primary p-4 stats Xydn3"
                                 style="background-image: url(https://cdn.discordapp.com/attachments/719181714068340776/744194308172808233/dd0f0b82-bfb0-468f-ae11-32cc5e49dea3-min.jpg);">
                                <div class="text-left text-white" style="padding: 18px; height: 101px;">
                                    <h2 class="counter text-white"></h2></div>
                                <div class="my-3 bg-primary rounded p-3 shadow-sm text-center maincard-three maincard-three-snap INd39d">
                                    <span class="xya3_34">Install + Open (1 min) </span></div>
                                <div class="my-3 bg-primary rounded p-3 shadow-sm text-center maincard-three maincard-three-snap Xkn3e_2e">
                                    <div class="row jn3_x2">
                                        <div class="col-6" style="padding-right: 0;">
                                            <button class="custom-btn-tab custom-blue custom-btn-xs Kedn3ex"
                                                    id="modalToggle15"><span>3 R$</span><img
                                                    src="/storage/assets/img/robux-png.png"
                                                    style="margin-left: 1px; width: 34px; margin-top: -3px;"/></button>
                                        </div>
                                        <div class="col-6" style="padding-left: 0;">
                                            <button class="custom-btn-tab custom-btn-xs custom-green righ34id"
                                                    id="modalToggle6"
                                                    v-on:click="starterOffer('roblox1')">START <i class="fas fa-arrow-circle-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----------- ROBLOX 2 BOX ---->
                        <div class="card card-block mx-2 fade-in-250 rfkn3_d3">
                            <div class="bg-primary p-4 stats Xydn3"
                                 style="background-image: url(https://cdn.discordapp.com/attachments/733272089825509437/781150243600597042/D8NKVtxXsAA485f-min.jpg);">
                                <div class="text-left text-white" style="padding: 18px; height: 101px;">
                                    <h2 class="counter text-white"></h2></div>
                                <div class="my-3 bg-primary rounded p-3 shadow-sm text-center maincard-three maincard-three-snap INd39d">
                                    <span class="xya3_34">Install + Sign up (4 mins)</span></div>
                                <div class="my-3 bg-primary rounded p-3 shadow-sm text-center maincard-three maincard-three-snap Xkn3e_2e">
                                    <div class="row jn3_x2">
                                        <div class="col-6" style="padding-right: 0;">
                                            <button class="custom-btn-tab custom-blue custom-btn-xs Kedn3ex"
                                                    id="modalToggle17"><span>3 R$</span><img
                                                    src="/storage/assets/img/robux-png.png"
                                                    style="margin-left: 1px; width: 34px; margin-top: -3px;"/></button>
                                        </div>
                                        <div class="col-6" style="padding-left: 0;">
                                            <button class="custom-btn-tab custom-btn-xs custom-green righ34id"
                                                    id="modalToggle8"
                                                    v-on:click="starterOffer('roblox2')">START <i class="fas fa-arrow-circle-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-3 p-3 bg-white rounded shadow-sm text-left maincard" id="offerWallSection">
                    <div class="row">
                        <div class="col-md-3 text-center mb-pr-0 offer-wall-buttons" style="width: 100%;">
                            <h4 class="text-center fade-in-100" style="margin-top: 17px; margin-bottom: 9px;">
                                Options</h4>
                            <button class="custom-btn-tab isClicked dt-w-90 fade-in-150"
                                    id="adgate_btn" v-on:click="triggerWallTab('adgate')">BEST <i aria-hidden="true" class="fas fa-fire"></i>
                            </button>
                            <button class="custom-btn-tab dt-w-90 fade-in-200" id="offertoro_btn"
                                    v-on:click="triggerWallTab('offertoro')">FAST <i aria-hidden="true" class="fas fa-bolt"></i></button>
                            <button class="custom-btn-tab dt-w-90 fade-in-250" id="lootably_btn"
                                    v-on:click="triggerWallTab('lootably')">EASY <i aria-hidden="true" class="fas fa-money-bill-alt"></i>
                            </button>
                            <button class="custom-btn-tab dt-w-90 fade-in-250" id="ayet_btn"
                                    v-on:click="triggerWallTab('ayet')">SIMPLE <i aria-hidden="true" class="fas fa-money-bill-alt"></i>
                            </button>
                            <button class="custom-btn-tab dt-w-90 fade-in-300" id="adgem_btn"
                                    v-on:click="triggerWallTab('adgem')">NEW <i aria-hidden="true" class="fas fa-comet"></i></button>
                            <button class="custom-btn-tab dt-w-90 fade-in-300" id="cbx_btn"
                                    v-on:click="triggerWallTab('cbx')">PROFITABLE
                            </button>
                            <div class="visible-desktop-only">
                                <div class="separator fade-in-350">Quick Tasks</div>
                                <a class="btn bg-purple text-white waves-effect waves-light extra-btn btn-discord fade-in-400"
                                   style="background-color: #0000ff" v-on:click="quickTask('discord')"> <img
                                        class="img-icon" src="/storage/assets/img/discord-white-64.png"/> Discord! +0.25</a>
                                <a class="btn btn-danger text-white waves-effect waves-light extra-btn btn-youtube fade-in-350"
                                   style="background-color: #f2173f;" v-on:click="quickTask('youtube')"><img
                                        class="img-icon" src="/storage/assets/img/youtube-64.png"/> Youtube +0.25</a>
                                <a class="btn text-white waves-effect waves-light extra-btn fade-in-350"
                                   style="background-color: #000000;" v-on:click="quickTask('tiktok')"> <span
                                        class="bold-text">Tiktok</span> +0.25</a>
                                <a class="btn text-white waves-effect waves-light extra-btn fade-in-350"
                                   style="background-color: #f244a5;" v-on:click="quickTask('instagram')"> <span
                                        class="bold-text">Instagram</span> +0.25</a>
                                <a class="btn text-white waves-effect waves-light extra-btn fade-in-350"
                                   style="background-color: #0ecad3;" v-on:click="quickTask('twitter')"> <span
                                        class="bold-text">twitter</span> +0.25</a>
                                <a class="btn text-white waves-effect waves-light extra-btn fade-in-350 mb-4"
                                   style="background-color: #7b47f2;" v-on:click="quickTask('twitch')"> <span
                                        class="bold-text">twitch</span> +0.25</a>
                            </div>
                        </div>
                        <div class="col-md-9 offers-col" style="overflow-y: hidden; iframes-section">
                            <div class="my-3 p-3 bg-white rounded shadow-sm text-center maincard-two fade-in-100">
                                <div class="my-3 bg-primary rounded p-3 shadow-sm text-center maincard-three fade-in-150">
                                    Earn Robux &#x1F447;
                                </div>
                                <div id="ifarme-overlay" v-bind:class="{active: iframe_active}"
                                     v-on:click="checkLogin"></div>
                                <iframe :src="APP_URL + '/pages/loading'" class="afiframe" frameborder="0" height="90%"
                                        id="adgate" width="100%"></iframe>
                                <iframe :src="APP_URL + '/pages/loading'" class="afiframe" frameborder="0" height="0%"
                                        id="offertoro" width="0%"></iframe>
                                <iframe :src="APP_URL + '/pages/loading'" class="afiframe" frameborder="0" height="0%"
                                        id="lootably" width="0%"></iframe>
                                <iframe :src="APP_URL + '/pages/loading'" class="afiframe" frameborder="0" height="0%"
                                        id="ayet" width="0%"></iframe>
                                <iframe :src="APP_URL + '/pages/loading'" class="afiframe" frameborder="0" height="0%"
                                        id="adgem" width="0%"></iframe>
                                <iframe :src="APP_URL + '/pages/loading'" class="afiframe" frameborder="0" height="0%"
                                        id="cbx" width="0%"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container visible-mobile-only quick-tasks">
            <div class="separator fade-in-350">Quick Tasks</div>
            <a class="btn bg-purple text-white waves-effect waves-light extra-btn btn-discord fade-in-400"
               style="background-color: #0000ff" v-on:click="quickTask('discord')"> <img
                    class="img-icon" src="/storage/assets/img/discord-white-64.png"/> Discord! +0.25</a>
            <a class="btn btn-danger text-white waves-effect waves-light extra-btn btn-youtube fade-in-350"
               style="background-color: #f2173f;" v-on:click="quickTask('youtube')"><img
                    class="img-icon" src="/storage/assets/img/youtube-64.png"/> Youtube +0.25</a>
            <a class="btn text-white waves-effect waves-light extra-btn fade-in-350"
               style="background-color: #000000;" v-on:click="quickTask('tiktok')"> <span
                    class="bold-text">Tiktok</span> +0.25</a>
            <a class="btn text-white waves-effect waves-light extra-btn fade-in-350"
               style="background-color: #f244a5;" v-on:click="quickTask('instagram')"> <span
                    class="bold-text">Instagram</span> +0.25</a>
            <a class="btn text-white waves-effect waves-light extra-btn fade-in-350"
               style="background-color: #0ecad3;" v-on:click="quickTask('twitter')"> <span
                    class="bold-text">twitter</span> +0.25</a>
            <a class="btn text-white waves-effect waves-light extra-btn fade-in-350 mb-4"
               style="background-color: #7b47f2;" v-on:click="quickTask('twitch')"> <span
                    class="bold-text">twitch</span> +0.25</a>
        </div>
        <div class="container marketing py-5">
            <div class="row" style="text-align: center">
                <div class="col-lg-6 mx-auto">
                    <button class="custom-btn custom-blue waves-effect waves-light fade-in-300"
                            style="
                            width: 75%;
                            cursor: pointer !important;
                            outline: 0;
                            margin-top: 25px;
                            -webkit-transition: all 0.15s ease-out!important;
                            transition: all 0.15s ease-out!important;
                            border-radius: 12px !important;
                            font-size: 30px;
                            padding: 10px;" v-on:click="navigateToPage('withdraw')"><b>Claim Daily Reward!</b></button>
                </div>
            </div>
        </div>
        <WelcomeModal1/>
    </section>
</template>

<script>
    import {QUICK_TASK, WELCOME_TASK, OFFER_WALL_URLS} from '@/js/config/earn'
    import {BASIC_CHEST, RARE_CHEST, GODLY_CHEST} from '@/js/config/inventory';
    import WelcomeModal1 from "@/js/components/WelcomeModal1";
    import Header from "@/js/components/Header";

    export default {
        name: "Earn",
        components: {Header, WelcomeModal1},
        data: function () {
            return {
                componentKey: 0,
                USERS_STOCK: 0,
                USER_STOCK: 0,
                OFFERS_DONE: 0,
                USERS_COUNT: 0,
                show_starter_offers: false,
                basic_chest: {...BASIC_CHEST},
                rare_chest: {...RARE_CHEST},
                godly_chest: {...GODLY_CHEST},
                user: {rid: 17, username: 'test'},
                stats: {},
                offers: {
                    minecraft: {
                        "todo": WELCOME_TASK.minecraft_title,
                        "reward": 0,
                        "img": WELCOME_TASK.minecraft_img,
                        "link": WELCOME_TASK.minecraft_link
                    },
                    solitare: {
                        "todo": WELCOME_TASK.solitaire_title,
                        "reward": 0,
                        "img": WELCOME_TASK.solitaire_img,
                        "link": WELCOME_TASK.solitaire_link
                    },
                    roblox1: {
                        "todo": WELCOME_TASK.roblox_title,
                        "reward": 0,
                        "img": WELCOME_TASK.roblox_img,
                        "link": WELCOME_TASK.roblox_link
                    },
                    roblox2: {
                        "todo": WELCOME_TASK.roblox_title_2,
                        "reward": 0,
                        "img": WELCOME_TASK.roblox_img_2,
                        "link": WELCOME_TASK.roblox_link_2
                    }
                },
                offer_walls: {
                    'adgate': [],
                    'offertoro': [],
                    'lootably': [],
                    'ayet': [],
                    'adgem': [],
                    'cbx': [],
                },
                iframe_active: false,
                loading: false
            }
        },
        mounted() {
            const user = $helper.getUser();
            this.stats = $helper.getLocalData('stats');

            if(user) {
                this.user = user;
                this.iframe_active = true;
            }

            if(this.stats) {
                this.USERS_COUNT = this.stats.users;
                this.OFFERS_DONE = this.stats.offers;
                this.USERS_STOCK = this.stats.stock;
            }

            let offers_done = 0;
            if (this.stats)
                offers_done = this.stats.offers_done;

            this.$set(this.basic_chest, 'progress_bar', (offers_done / this.basic_chest.offer_count) * 100);
            this.$set(this.rare_chest, 'progress_bar', (offers_done / this.rare_chest.offer_count) * 100);
            this.$set(this.godly_chest, 'progress_bar', (offers_done / this.godly_chest.offer_count) * 100);

            this.showSocialPopup();
            this.triggerWallTab('adgate');
            this.initWalls();
            this.initPopups();
            this.initOffers();
        },
        methods: {
            forceRerender() {
                this.componentKey += 1;
            },
            updateUserStock: function(user_stock) {
                this.USER_STOCK = user_stock;
            },
            showSocialPopup: function () {
                const now = Date.now();
                let popup_time = $helper.getLocalData('e_soial_popup');
                if (!popup_time || now > popup_time) {
                    $helper.saveLocalData('e_soial_popup', (now + 86400));
                    Swal.fire({
                        title: '<strong>Do you have a YouTube or TikTok Account?</strong>',
                        icon: 'info',
                        html: 'Make a video for RBX.FUN for a chance to win <b>10,000 Robux!</b>',
                        showCloseButton: true,
                        showCancelButton: true,
                        focusConfirm: false,
                        confirmButtonText: '<i class="fa fa-thumbs-up"></i> I will make a video!',
                        confirmButtonAriaLabel: 'Thumbs up, great!',
                        cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
                        cancelButtonAriaLabel: 'Thumbs down'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.open(`${APP_URL}/#/sponsor`, '_blank');
                        }
                    })
                }
            },
            quickTask: function (name) {
                const status = $helper.openLoginModal();
                if (status !== true)
                    return false;

                window.open(QUICK_TASK[name], '_blank').focus();

                const FORM_DATA = new FormData();
                FORM_DATA.append('social', name);
                FORM_DATA.append('rid', $helper.easyEncrypt(this.user.rid));

                $api.postData('quick-task', FORM_DATA)
                    .then((response) => {
                        if (response.status === true) {
                            $helper.saveLocalData('__u', response.data.__u);
                            $helper.saveLocalData('stats', response.data.stats);
                            this.$refs.headerComponent.USER_STOCK = response.data.stats.user_stock;
                            Swal.fire(
                                'Yaaaay!!',
                                response.message,
                                'success'
                            );
                        } else {
                            Swal.fire(
                                'Oops!!',
                                response.message,
                                'error'
                            );
                        }
                    })
                    .catch(error => {
                        Swal.fire(
                            'Oops!',
                            'Something went wrong, please try again!',
                            'error'
                        );
                    })


            },
            initWalls: function () {
                for (const wall_name in this.offer_walls) {
                    let src = OFFER_WALL_URLS[wall_name].replace('{USER_ID}', this.user.rid);
                    src = src.replace('{USERNAME}', this.user.username);
                    const hash = CryptoJS.MD5(`${this.user.rid}-t3ed4qbPGkVgROSIqkX3rbvSQaoR3ABM`).toString();
                    src = src.replace('{HASH}', hash);
                    this.offer_walls[wall_name][1].setAttribute('src', src)
                }
                document.getElementById('ifarme-overlay').removeAttribute('style');
            },
            triggerWallTab: function (active_tab) {

                for (const wall_name in this.offer_walls) {

                    if (!this.offer_walls.hasOwnProperty(wall_name))
                        continue;

                    const wall_btn = document.querySelector(`#${wall_name}_btn`);
                    const wall_iframe = document.querySelector(`iframe#${wall_name}`);
                    this.$set(this.offer_walls, wall_name, [wall_btn, wall_iframe]);
                    wall_btn.classList.remove('isClicked');
                    wall_iframe.width = "0%";
                    wall_iframe.height = "0%";
                }

                const current_wall = this.offer_walls[active_tab];
                current_wall[0].classList.add('isClicked');     // button
                current_wall[1].width = "100%";                 // iframe
                current_wall[1].height = "120%";                 // iframe
            },
            initPopups: function () {
                const now = Date.now();
                let chest_popup_time = $helper.getLocalData('e_chest_popup');
                console.log(now, 'initPopups');
                console.log(chest_popup_time, 'initPopups');
                if (now < chest_popup_time) {
                    return false;
                }

                $helper.saveLocalData('e_chest_popup', (now + 86400));
                if (this.stats && this.stats.basic_chest === 0) {
                    let offers_done = 3 - this.stats.offers_done;
                    offers_done = (offers_done < 0) ? 0 : offers_done;
                    Swal.fire({
                        html: `
                          <img src="/storage/assets/img/other_chests/common-closed.png" style="width:180px;padding:15px;">
                          <div class="progress" style="height: 18px !important; background-color: #d8d8d8;margin-left:25%;margin-right:25%;">
                          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="background-repeat: repeat-x !important; width: ` + this.basic_chest.progress_bar + `%;"></div></div>
                          <h4 style="margin-top:20px;">You're SO CLOSE to a <span style="color:brown!important;">RARE Chest!</span></h4>
                          <h6>Complete ` + (offers_done) + ` more offers!</h6>
                      `,
                    }).then(() => {
                        window.location.href = '/#/inventory';
                    });
                } else if (this.stats && this.stats.rare_chest === 0) {
                    let offers_done = 5 - this.stats.offers_done;
                    offers_done = (offers_done < 0) ? 0 : offers_done;
                    Swal.fire({
                        html: `
                          <img src="/storage/assets/img/chests/rare-chest.png" style="width:180px;padding:15px;">
                          <div class="progress" style="height: 18px !important; background-color: #d8d8d8;margin-left:25%;margin-right:25%;">
                          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="background-repeat: repeat-x !important; width: ` + this.rare_chest.progress_bar + `%;"></div></div>
                          <h4 style="margin-top:20px;">You're SO CLOSE to a <span style="color:orange!important;">EPIC Chest!</span></h4>
                          <h6>Complete ` + (offers_done) + ` more offers!</h6>
                      `,
                        footer: '<a href>YOU CAN GET <span class="text-success">150</span> ROBUX FROM RARE CHEST!</a>'
                    }).then(() => {
                        window.location.href = '/#/inventory';
                    });
                } else if (this.stats && this.stats.godly_chest === 0) {
                    let offers_done = 10 - this.stats.offers_done;
                    offers_done = (offers_done < 0) ? 0 : offers_done;
                    Swal.fire({
                        html: `
                      <img src="/storage/assets/img/chests/godly-chest.png" style="width:180px;padding:15px;">
                      <div class="progress" style="height: 18px !important; background-color: #d8d8d8;margin-left:25%;margin-right:25%;">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="background-repeat: repeat-x !important; width: ` + this.godly_chest.progress_bar + `%;"></div></div>
                      <h4 style="margin-top:20px;">You're CLOSE to <span style="color:#09b3ac!important;">LEGENDARY Chest!</span></h4>
                      <h6>Complete ` + (offers_done) + ` more offers!</h6>
                      `,
                        footer: '<a href>YOU CAN GET <span class="text-success">1,000</span> ROBUX FROM BASIC CHEST!</a>'
                    }).then(() => {
                        window.location.href = '/#/inventory';
                    });
                }
            },
            initOffers: function () {
                const userid = this.user.rid;
                const rewards = [20, 120, 10, 1.75];

                // minecraft
                this.$set(this.offers.minecraft, 'link', this.offers.minecraft.link.replace('{USER_ID}', userid));
                this.$set(this.offers.minecraft, 'reward', rewards[0]);
                // solitare
                this.$set(this.offers.solitare, 'reward', rewards[1]);
                // roblox 1
                this.$set(this.offers.roblox1, 'link', this.offers.roblox1.link.replace('{USER_ID}', userid));
                this.$set(this.offers.roblox1, 'reward', rewards[2]);
                // roblox 2
                this.$set(this.offers.roblox2, 'link', this.offers.roblox2.link.replace('{USER_ID}', userid));
                this.$set(this.offers.roblox2, 'reward', rewards[3]);
            },
            tutorial: function () {
                document.getElementById('offerWallSection').scrollIntoView();
                setTimeout(function () {
                    $('#WelcomeModalPart1').modal('show')
                }, 500)
            },
            openInNewTab: function (url) {
                window.open(url, '_blank');
            },
            starterOffer: function (type) {
                const status = $helper.openLoginModal();
                if (status === true)
                    window.open(this.offers[type].link, '_blank');
            },
            navigateToPage(page) {
                this.$router.push(page);
            },
            checkLogin: function () {
                $helper.openLoginModal();
            }
        }
    }
</script>

<style scoped>
    .section-banner {
        font-weight: 400;
        line-height: 1.5;
        text-align: left;
        font-size: 16px;
        margin: 0;
        border: none;
        outline: none;
        box-sizing: border-box;
        min-height: 146px;
        padding: 28px;
        border-radius: 12px;
        background-image: url(https://odindesignthemes.com/vikinger/img/banner/banner-bg.png) !important;
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    .section-banner-icon {
        vertical-align: middle;
        position: absolute;
        bottom: 22px;
        width: 104px;
        left: 37px;
        float: left;
    }

    .section-banner-title {
        text-align: left;
        padding: 0;
        border: none;
        outline: none;
        box-sizing: border-box;
        margin: 0;
        line-height: 1.75rem;
        color: #fff;
        font-size: 2rem;
        font-weight: 700;
        -webkit-font-smoothing: antialiased;
        padding-left: 142px;
    }

    .section-banner-mobile {
        text-align: left;
        padding: 0 0 0 142px;
        border: none;
        display: none;
        outline: none;
        box-sizing: border-box;
        margin: 12px 0 0 0;
        line-height: 0;
        color: #fff;
        font-size: 15px;
        -webkit-font-smoothing: antialiased;
    }

    .section-banner-text {
        text-align: left;
        padding: 0 0 0 142px;
        border: none;
        outline: none;
        box-sizing: border-box;
        margin: 12px 0 0 0;
        display: none;
        line-height: 0;
        color: #fff;
        font-size: 15px;
        -webkit-font-smoothing: antialiased;
    }

    .img-icon {
        width: 12%
    }

    .bold-text {
        font-weight: bolder;
        font-size: 16px;
        letter-spacing: 1px;
        font-style: italic;
    }

    .offers-slider .row > div {
        padding-bottom: 0;
        padding-top: 0;
    }

    #ifarme-overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 100;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    #ifarme-overlay.active {
        z-index: -1;
    }

    .progress {
        height: 18px !important;
    }

    .progress-bar-striped {
        background-repeat: repeat-x !important;
    }
</style>