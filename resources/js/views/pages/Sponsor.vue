<template>
    <section>
        <!-- HEADER -->
        <Header :update-user-stock="updateUserStock" :key="componentKey" />

        <div class="my-3 p-5 bg-white rounded shadow-sm text-center small-card">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center">📱 Pick a Platform!</h1>
                    <br>
                    <p class="text-center">Do you have <b class="text-danger">YouTube</b> or TikTok? <br>
                        You can win 10,000 ROBUX by making a short video showing how to get FREE ROBUX on RBX.FUN!
                    <hr>
                    <b class="text-success">Which do you want to make an RBX.FUN video on?</b></p><br>
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-5">
                            <a class="offerwallCard bg-youtube" href="/#/youtube" style="
    -webkit-tap-highlight-color: transparent;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    font-family: peace_sansregular;
    padding: 0;
    box-sizing: border-box !important;
    color: inherit;
    display: flex;
    flex-direction: column;
    width: 100%;
    min-height: 140px;
    max-width: 400px;
    text-align: center;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 2px 4px;
    transform: scale(1);
    margin: 0px auto 15px;
    border-radius: 10px!important;
    transition: transform 0.2s ease 0s;
    background: #FF0000;
    text-decoration: none;
">
                                <span class="offerwall-badge badge badge-success"
                                      style="background-color: #31c53d;-webkit-tap-highlight-color: transparent;margin: 0;box-sizing: border-box !important;padding: .25em .4em;font-weight: 700;line-height: 1;text-align: center;white-space: nowrap;vertical-align: baseline;border-radius: .25rem;transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;color: #fff;display: inline-flex;position: absolute;font-size: 14px;top: 5px;right: 5px;background-color: #31c53d;">10,000 ROBUX</span>
                                <p class="offerwall-title">
                                    <span class="fab fa-youtube text-light" style="font-size:2.4rem; margin-top: 20px;"
                                          aria-hidden="true"></span>
                                </p><h5 class="text-light mb-2" style="font-size: 1.4rem">Youtube Competition</h5>
                                <p></p>
                            </a>
                        </div>
                        <div class="col-sm-5">
                            <a class="offerwallCard bg-youtube" href="/#/tiktok" style="
    -webkit-tap-highlight-color: transparent;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    font-family: peace_sansregular;
    padding: 0;
    box-sizing: border-box !important;
    color: inherit;
    display: flex;
    flex-direction: column;
    width: 100%;
    min-height: 140px;
    max-width: 400px;
    text-align: center;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 2px 4px;
    transform: scale(1);
    margin: 0px auto 15px;
    border-radius: 10px!important;
    transition: transform 0.2s ease 0s;
    background-color: black;
    text-decoration: none;
">
                                <span class="offerwall-badge badge badge-success"
                                      style="background-color: #31c53d;-webkit-tap-highlight-color: transparent;margin: 0;box-sizing: border-box !important;padding: .25em .4em;font-weight: 700;line-height: 1;text-align: center;white-space: nowrap;vertical-align: baseline;border-radius: .25rem;transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;color: #fff;display: inline-flex;position: absolute;font-size: 14px;top: 5px;right: 5px;background-color: #31c53d;">10,000 ROBUX</span>
                                <p class="offerwall-title">
                                    <span class="fab fa-tiktok text-light" style="font-size:2.4rem; margin-top: 20px;"
                                          aria-hidden="true"></span>
                                </p><h5 class="text-light mb-2" style="font-size: 1.4rem">TikTok Competition</h5>
                                <p></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</template>

<script>
    import Header from "@/js/components/Header";
    export default {
        name: "Sponsor",
        components: {Header},
        data: function () {return {componentKey: 0, USER_STOCK: 0}},
        methods: {
            updateUserStock: function(val) {
                this.USER_STOCK = val;
            }
        }
    }
</script>

<style scoped>
    .pace .pace-progress {
        height: 4px!important;
    }
    .righ34id {
        padding: 5px !important;
        width: 75%;
        cursor: pointer !important;
        outline: 0;
        margin-top: 25px;
        width: 100%;
        border-top-left-radius: 0px !important;
        border-bottom-left-radius: 0px !important;
        margin-top: 0px;
        height: 53px;
        font-size: 24px;
        margin-bottom: 5px;
        border-top-right-radius: 0;
    }
    .Kedn3ex {
        padding: 5px !important;
        width: 75%;
        cursor: pointer !important;
        outline: 0;
        margin-top: 25px;
        width: 100%;
        border-top-right-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
        margin-top: 0px;
        height: 53px;
        font-size: 24px;
        margin-bottom: 0 !important;
        border-top-left-radius: 0;
    }
    .djnede {
        padding: 0px !important;
        font-size: 25px;
        margin-top: 0 !important;
        font-size: 17px;
        margin: 0px !important;
        background-color: rgba(0, 0, 0, 0.58) !important;
        border-radius: 0px !important;
    }
    .INd39d {
        padding: 0px !important;
        font-size: 25px;
        margin-top: 0 !important;
        font-size: 17px;
        margin: 0px !important;
        background-color: rgba(0, 0, 0, 0.58) !important;
        border-radius: 0px !important;
    }
    .Xydn3 {
        padding: 0px !important;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
        margin-top: 0;
    }
    .j34i3x {
        padding: 10px;
        height: 101px;
    }
    .xya3_34 {
        padding: 10px !important;
        display: inline-block;
    }
    .eid3_3me {
        background-color: white;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
        padding: 5px;
        padding-bottom: 12px;
        margin-right: 0;
        margin-left: 0;
        width: 100%;
        margin-top: 15px;
        overflow-y: hidden !important;
        margin-left: 0px;
        padding-left: 0;
    }
    .rfkn3_d3 {
        min-width: 300px;
        scroll-snap-align: center;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
        border: none!important;
    }
    .Xkn3e_2e {
        background-color: #0f9cf3 !important;
        margin: 0 !important;
        padding: 0 !important;
        border-radius: 5px !important;
        border-top-right-radius: 0px !important;
        border-top-left-radius: 0px !important;
    }
    .jn3_x2 {
        margin-top: 0 !important;
    }
    .righ34id {
        padding: 5px !important;
        width: 75%;
        cursor: pointer !important;
        outline: 0;
        margin-top: 25px;
        width: 100%;
        border-top-left-radius: 0px !important;
        border-bottom-left-radius: 0px !important;
        margin-top: 0px;
        height: 53px;
        font-size: 24px;
        margin-bottom: 5px;
    }
</style>