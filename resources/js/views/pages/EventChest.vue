<template>
    <section>
        <Header :update-user-stock="updateUserStock" />
        <div>
            <div class="album py-5 bg-light fade-in-100"
                 style="background-color: #000f31 !important; min-height: 261px; background-image: url(https://ak.picdn.net/shutterstock/videos/1010878310/thumb/1.jpg); max-height: 480px; background-size: cover;">
                <div class="container fade-in-300">
                    <div class="row mt-4" style="margin-top: 0 !important; margin-bottom: 30px;">
                        <div class="col-md-8 mx-auto text-center text-white">
                            <img class="fade-in-bottom" src="https://imgur.com/c3p58Cf.png" style="width: 84.5%;"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="album py-5 bg-light"
                 style="background-image: url(/storage/assets/img/spring-background.png); padding-top: 0 !important; background-position: top;">
                <div class="container">
                    <div class="row" style="height: 104px;">
                        <div class="col-md-3 mx-auto" style="top: -93px;">
                            <div class="row" style="">
                                <img class="mx-auto island-floater-side fade-in-bottom"
                                     src="https://imgur.com/2tsGwq2.png"/>
                            </div>
                        </div>
                        <div class="col-md-5 mx-auto" style="top: -60px;">
                            <button
                                    class="custom-btn custom-blue waves-effect waves-light fade-in-bottom"
                                    style="
                            width: 100%;
                            cursor: pointer !important;
                            outline: 0;
                            margin-top: 25px;
                            -webkit-transition: all 0.15s ease-out !important;
                            transition: all 0.15s ease-out !important;
                            border-radius: 12px !important;
                            font-size: 30px;
                            padding: 10px;
                        "
                                    v-on:click="openChestButtonCusYes"
                            >
                                <b v-if="!loading">OPEN!</b>
                                <b v-if="loading">
                                    <div class="spinner-border text-light" role="status"><span class="sr-only">Loading...</span></div>
                                </b>
                            </button>
                            <h5 style="text-align: center; margin-top: 12px;">20% Chance of getting <span
                                    class="text-success">1,000 ROBUX!</span> <span class="badge badge-primary">See Prizes</span>
                            </h5>
                        </div>
                        <div class="col-md-3 mx-auto" style="top: -125px;">
                            <div class="row" style="">
                                <img class="mx-auto island-floater-side fade-in-bottom"
                                     src="https://imgur.com/WVmYaXC.png" style=""/>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin: 0; padding: 10px;">
                        <div class="mx-auto" style="max-width: 850px; width: 100%;">
                            <div class="raffle-roller" style="margin-top: 0; margin-bottom: 15px; width: 100%;">
                                <div class="raffle-roller-holder" style="border: none; border-radius: 10px;">
                                    <div class="raffle-roller-container inner-shadow"
                                         style="margin-left: 0px; background-color: #e6e6e6; width: 999999999999px; max-width: 999999999999px;"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mx-auto fade-in-400" style="width: 200px;">
                                    <button class="custom-btn custom-btn-xs"
                                            style="outline: none !important; padding-top: 5px !important; width: 100%; padding-bottom: 5px !important;"
                                            v-on:click="testOpen">TEST OPEN
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin: 0; padding: 10px;">
                        <div class="mx-auto" style="max-width: 850px; width: 100%;">
                            <h3 style="text-align: center; /* font-family: 'Roboto'; */ font-weight: bold; -webkit-font-smoothing: antialiased;">
                                Complete {{message_offers}} more offers for <span style="color: #e83ded;">EVENT</span>
                                Chest!
                            </h3>
                            <div class="progress" style="background-color: #d8d8d8; width: 100%; height: 18px;">
                                <div :style="{width: progress_bar + '%', backgroundRepeat: 'repeat-x'}"
                                     aria-valuemax="100" aria-valuemin="0" aria-valuenow="0"
                                     class="progress-bar progress-bar-striped progress-bar-animated"
                                     role="progressbar"></div>
                            </div>
                            <h5 style="text-align: center;margin-top: 12px;margin-bottom: 0;">You have <span
                                    style="color: #037bfe;">{{event_chests}}</span> Event Chests! </h5>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 25px;">
                        <div class="col-lg-6">
                            <table class="rounded table is-fullwidth is-hoverable shadow-sm"
                                   style="border-radius: 10px !important;">
                                <tbody>
                                <tr class="fade-in-200" style="background-color: #fff !important;">
                                    <td style="padding-top: 18px;">
                                        <img src="https://www.roblox.com/headshot-thumbnail/image?userId=595325004&amp;width=150&amp;height=150&amp;format=png"
                                             style="width: 55px; border-radius: 100%;"/>
                                    </td>
                                    <td style="padding-top: 20px;"><span
                                            style="font-size: 17px; margin-top: 15px; display: inherit;">princessjojo321 says</span><b
                                            style="font-size: 18px; margin-top: 15px;">"THANKS SO MUCH!!"</b></td>
                                    <td style="padding-top: 21px;"><label class="badge badge-success"
                                                                          style="height: 40px; width: 90px; padding-top: 9px; font-size: 20px;">1,000R$</label>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <table class="rounded table is-fullwidth is-hoverable shadow-sm" style="">
                                <tbody style="">
                                <tr class="fade-in-200" style="background-color: #fff !important;">
                                    <td style="padding-top: 18px;">
                                        <img src="https://www.roblox.com/Thumbs/Avatar.ashx?x=150&amp;y=150&amp;Format=Png&amp;username=ff6060"
                                             style="width: 55px; border-radius: 100%;"/>
                                    </td>
                                    <td style="padding-top: 20px;"><span
                                            style="font-size: 17px; margin-top: 15px; display: inherit;">choripansu says</span><b
                                            style="font-size: 18px; margin-top: 15px;">"thanks for bobux"</b></td>
                                    <td style="padding-top: 21px;"><label class="badge badge-success"
                                                                          style="height: 40px; width: 90px; padding-top: 9px; font-size: 20px;">1,000R$</label>
                                    </td>
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
                        <a href="#/withdraw">
                            <button class="custom-btn custom-blue waves-effect waves-light fade-in-300" style="width: 75%; cursor: pointer !important; outline: 0; margin-top: 25px; width: 100%;-webkit-transition: all 0.15s ease-out!important;transition: all 0.15s ease-out!important;border-radius: 12px !important;
font-size: 30px;
padding: 10px;"><b>Claim Daily Reward!</b></button>
                        </a>
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
        name: "EventChest",
        components: {Header},
        data: function () {
            return {
                progress_bar: 0,
                USER_STOCK: 0,
                event_chests: 0,
                offers_done: 0,
                message_offers: 0,
                user: {},
                offers_to_do: 0,
                loading: false,
                recent: [],
            }
        },
        mounted() {
            const stats = $helper.getLocalData('stats');
            const user = $helper.getUser();
            if (stats) {
                this.offers_done = stats.event_chest_offers;
                this.event_chests = Math.abs(stats.event_chests);
            }
            if (user) {
                this.user = user;
                this.getPageStats();
            }
        },
        methods: {
            updateUserStock: function (val) {
                this.USER_STOCK = val;
            },
            getPageStats() {
                const FORM_DATA = new FormData();
                FORM_DATA.append('id', $helper.easyEncrypt(this.user.id));
                $api.postData('get-event-chest-stats', FORM_DATA)
                    .then((response) => {
                        this.offers_to_do = response.data.offers_to_do;
                        this.event_chests = response.data.event_chests;
                        this.message_offers = response.data.message_offers;
                        this.calcProgressBar(this.offers_to_do);
                    })
                    .catch(err => {
                        console.log(err);
                    })
            },
            openChestButtonCusYes: function () {
                const user = $helper.getUser();
                if (!user) {
                    return $helper.openLoginModal();
                }

                this.loading = true;
                const FORM_DATA = new FormData();
                FORM_DATA.append('id', $helper.easyEncrypt(this.user.id));

                $api.postData('event-chest', FORM_DATA)
                    .then((response) => {
                        if (response.status === false || response.data === undefined) {
                            Swal.fire(
                                'Oops!',
                                response.message,
                                'error'
                            );
                            this.message_offers = response.data.message_offers;
                            this.calcProgressBar(response.data.offers_to_do);
                            this.loading = false;
                            return false;
                        }

                        this.spinImages(response);
                    })

                    .catch(error => {
                        this.loading = false;
                        Swal.fire(
                            'Oops!',
                            'Too many attempts',
                            'error'
                        );
                    })
            },
            calcProgressBar: function (offers_done) {
                if(offers_done === 0)
                    this.progress_bar = (this.offers_done / 10) * 100;
                else
                    this.progress_bar = (offers_done / 10) * 100;
            },
            randomInt: function (min, max) {
                return Math.floor(Math.random() * (max - min)) + min;
            },
            spinImages: function(response) {
                this.generate();

                const _this = this;
                setTimeout(function () {
                    const winAmounts = [
                        '/storage/assets/img/event-chest/901-1000.png',
                        '/storage/assets/img/event-chest/701-900.png',
                        '/storage/assets/img/event-chest/501-700.png',
                        '/storage/assets/img/event-chest/200-500.png'
                    ];
                    const randed = response.data.won;
                    let winned = winAmounts[0];
                    if (randed >= 901 && randed <= 1000) {
                        winned = winAmounts[0];
                    } else if (randed >= 701 && randed <= 900) {
                        winned = winAmounts[1];
                    } else if (randed >= 501 && randed <= 700) {
                        winned = winAmounts[2];
                    } else {
                        winned = winAmounts[3];
                    }

                    $('.raffle-roller-container').css({
                        transition: "all 8s cubic-bezier(.08,.6,0,1)"
                    });
                    $('#CardNumber80').css({
                        "background-image": "url(" + winAmounts[3] + ")"
                    });
                    $('#CardNumber79').css({
                        "background-image": "url(" + winned + ")"
                    });
                    setTimeout(function () {
                        $('#CardNumber79').addClass('winning-item');

                        Swal.fire(
                            'Yaaaay!!',
                            response.message,
                            'success'
                        ).then(() => _this.$router.go());

                        _this.offers_to_do = response.data.offers_to_do;
                        _this.event_chests = response.data.event_chests;
                        _this.message_offers = response.data.message_offers;
                        _this.calcProgressBar(response.data.offers_to_do);
                        // _this.updateUserStock(response.data.won);
                        _this.loading = false;

                    }, 8500);
                    $('.raffle-roller-container').css('margin-left', '-6770px');
                }, 500);
            },
            testOpen: function () {
                const user = $helper.getUser();
                if (!user) {
                    return $helper.openLoginModal();
                }
                this.testGenerate();
                const _this = this;
                setTimeout(function () {
                    const winAmounts = [
                        {
                            image: 'https://cdn.discordapp.com/attachments/733271936431292478/781921404982919168/5000.png',
                            amount: '5000'
                        },
                        {
                            image: 'https://cdn.discordapp.com/attachments/733271936431292478/781920840034811925/1000.png',
                            amount: '1000'
                        },
                        {
                            image: 'https://cdn.discordapp.com/attachments/733271936431292478/781921728254181407/25.png',
                            amount: '25'
                        },
                        {
                            image: 'https://cdn.discordapp.com/attachments/733271936431292478/781921726916460574/1.png',
                            amount: '1'
                        }
                    ];
                    const randed = _this.randomInt(1, 1000);
                    let winned = winAmounts[0];
                    if (randed < 50) {
                        winned = winAmounts[3];
                    } else if (randed < 150) {
                        winned = winAmounts[2];
                    } else if (randed < 500) {
                        winned = winAmounts[1];
                    }
                    $('.raffle-roller-container').css({
                        transition: "all 8s cubic-bezier(.08,.6,0,1)"
                    });
                    $('#CardNumber80').css({
                        "background-image": "url(" + winAmounts[3]['image'] + ")"
                    });
                    $('#CardNumber79').css({
                        "background-image": "url(" + winned['image'] + ")"
                    });
                    setTimeout(function () {
                        $('#CardNumber79').addClass('winning-item');
                        Swal.fire(
                            'Yaaaay!',
                            'You *WOULD* have won ' + winned['amount'] + ' robux',
                            'success'
                        );
                    }, 8500);
                    $('.raffle-roller-container').css('margin-left', '-6770px');
                }, 500);
            },
            testGenerate: function () {
                const images = ['https://cdn.discordapp.com/attachments/733271936431292478/781921726916460574/1.png', 'https://cdn.discordapp.com/attachments/733271936431292478/781921728254181407/25.png', 'https://cdn.discordapp.com/attachments/733271936431292478/781920840034811925/1000.png', 'https://cdn.discordapp.com/attachments/733271936431292478/781921404982919168/5000.png'];
                const divImages = [];
                for (let i in images) {
                    const image_url = images[i];
                    const div = document.createElement('div');
                    div.style.backgroundImage = "url('" + image_url + "')";
                    divImages.push(div);
                }

                document.querySelector('.raffle-roller-container').innerHTML = '';
                $('.raffle-roller-container').css({
                    transition: "sdf",
                    "margin-left": "0px"
                }, 10).html('');

                for (let i = 0; i < 101; i++) {
                    let element = divImages[3].cloneNode();
                    element.id = "CardNumber" + i.toString();
                    element.classList.add("item", "class_red_item");
                    let randed = this.randomInt(1, 1000);
                    if (randed < 100) {
                        element = divImages[0].cloneNode();
                    } else if (randed < 200) {
                        element = divImages[1].cloneNode();
                    } else if (randed > 500) {
                        element = divImages[2].cloneNode();
                    }
                    element.id = "CardNumber" + i.toString();
                    // element.classList.add("item", "class_red_item");
                    $(element).addClass(["item", "class_red_item"]);
                    $(element.outerHTML).appendTo('.raffle-roller-container');
                }
            },
            generate: function () {
                const images = [
                    '/storage/assets/img/event-chest/200-500.png',
                    '/storage/assets/img/event-chest/501-700.png',
                    '/storage/assets/img/event-chest/701-900.png',
                    '/storage/assets/img/event-chest/901-1000.png',
                ];
                const divImages = [];
                for (let i in images) {
                    const image_url = images[i];
                    const div = document.createElement('div');
                    div.style.backgroundImage = "url('" + image_url + "')";
                    divImages.push(div);
                }

                document.querySelector('.raffle-roller-container').innerHTML = '';
                $('.raffle-roller-container').css({
                    transition: "sdf",
                    "margin-left": "0px"
                }, 10).html('');

                for (let i = 0; i < 101; i++) {
                    let element = divImages[3].cloneNode();
                    element.id = "CardNumber" + i.toString();
                    element.classList.add("item", "class_red_item");
                    let randed = this.randomInt(0.1, 10);
                    if (randed <= 0.1) {
                        element = divImages[3].cloneNode();
                    } else if (randed < 5 && randed > 0.1) {
                        element = divImages[2].cloneNode();
                    } else if (randed >= 5 && randed < 9) {
                        element = divImages[1].cloneNode();
                    } else {
                        element = divImages[0].cloneNode();
                    }
                    element.id = "CardNumber" + i.toString();
                    // element.classList.add("item", "class_red_item");
                    $(element).addClass(["item", "class_red_item"]);
                    $(element.outerHTML).appendTo('.raffle-roller-container');
                }
            }
        }
    }
</script>

<style>
    .raffle-roller {
        height: 100px;
        position: relative;
        margin: 60px auto 30px auto;
        width: 900px;
    }

    .raffle-roller-holder {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        height: 100px;
        width: 100%;
    }

    .raffle-roller-holder {
        overflow: hidden;
        border-radius: 2px;
        border: 1px solid #3c3759;
    }

    .raffle-roller-holder {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        height: 100px;
        width: 100%;
    }

    .raffle-roller-container {
        width: 9999999999999999999px;
        max-width: 999999999999999999px;
        height: 100px;
        background: #191726;
        margin-left: 0;
        transition: all 8s cubic-bezier(0.08, 0.6, 0, 1);
    }

    .raffle-roller-holder:before {
        content: "";
        position: absolute;
        border: none;
        z-index: 60;
        width: 5px;
        height: 100%;
        left: 50%;
        background: #d16266;
    }

    img {
        border: 0;
        vertical-align: middle;
    }

    .winning-item {
        /*border: 2px solid #66b233;*/
        position: relative;
        top: -1px;
        border-bottom: 4px solid #148b4f;
    }

    .inner-shadow {
        --tw-shadow: inset 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .item {
        display: inline-block;
        float: left;
        margin: 4px 0 0.5px 5px;
        width: 85px;
        height: 88px;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
        background-size: 100%;
        background-repeat: no-repeat;
        background-position: center;
        border-radius: 5px;
    }

    .class_red_item {
        border-bottom: 4px solid #148b4f;
    }

    .inventory {
        margin: 0 auto;
        width: 960px;
        max-width: 953px;
        padding: 10px 15px 6px;
        height: auto;
        border: 2px solid #1c3344;
        background: #0e1a23;
    }

    .inventory > .item {
        float: none;
        cursor: pointer;
        margin: 4px 2px 0.5px 2px;
    }

    .inventory > .item:hover {
        background-size: 90%;
        background-color: #182a38;
    }

    .inventory > .item:active {
        height: 83px;
        width: 80px;
        position: relative;
        top: -2px;
        border: 2px solid #356d27;
        border-bottom: 4px solid #356d27;
    }
</style>