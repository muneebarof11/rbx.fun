<template>
    <div id="robuxModalPart1_5" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="robuxModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="wizard-title">Withdraw robux! &#x1F381;</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="tab-content mt-2">
                        <div class="tab-pane fade text-center active show" id="infoPanel1" role="tabpanel1">
                            <div style="background-color: #26b71c;border-radius: 7px;padding: 5px;border-radius: 217px 18px 206px 16px/13px 178px 7px 42px !important;padding-bottom: 0px;margin-bottom: 30px;width: 100%;">
                                <h3 class="text-center" style="font-size: 25px;color: white;padding-bottom: 11px;">Roblox have disabled group payouts! We buy your VIP server instead.</h3>
                            </div>
                            <div class="video-placeholder" style="background: #000; padding: 20px;">
                                <div class="spinner-border text-light" role="status"> <span class="sr-only">Loading...</span></div>

                            </div>
                            <h4 style="
									padding-top: 10px;
								">Click below, and change the price of VIP server to <span style="color: #28a744;">{{withdrawAmount}}</span><span style="color: #28a744;"> robux!</span></h4>
                            <div class="row" style="">
                                <div class="col-10 mx-auto">
                                    <a class="custom-btn custom-blue custom-btn-xs" style="outline: none !important; padding-top: 5px !important; width: 100%; !important; color: #FFF" :href=vip_settings target="_blank">VIP Server Settings</a>
                                </div>
                            </div>
                            <div>
                                <div class="progress mt-5">
                                    <div class="progress-bar" role="progressbar" style="width: 66%;" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100">Step 2 of 3</div>
                                </div>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-12 col-md-6" style="padding-left: 15px !important;">
                                        <button
                                                v-on:click="openPreviousModal"
                                                class="custom-btn-nw custom-blue waves-effect waves-light modal-btn" data-dismiss="modal">
                                            <b>Back</b>
                                        </button>
                                    </div>
                                    <div class="col-12 col-md-6" style="padding-right: 15px !important;">
                                        <button
                                                v-on:click="openNextModal"
                                                class="custom-btn-nw custom-green waves-effect waves-light modal-btn" id="infoContinue1" type="button">
                                            <b>Next</b>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {VIP_SETTINGS} from '@/js/config/withdraw'
    export default {
        name: "RobuxModalPart1_5",
        props: ['withdrawAmount'],
        data: function() {
          return {
              vip_settings: VIP_SETTINGS,
          }
        },
        mounted() {
            const user = $helper.getUser();
            if(user) {
               this.vip_settings =  VIP_SETTINGS.replace('{GAME_ID}', user.game_id);
            }

            setTimeout(() => {
                $('.video-placeholder').html('<video controls="" autoplay="" name="media" style="width: 70%; margin: 0 auto;"><source src="/storage/assets/withdraw.mp4" type="video/mp4"></video>');
                $('.video-placeholder').removeAttr('style')
            }, 3000)
        },
        methods: {
            openPreviousModal: function() {
                $('#robuxModalPart1').modal('toggle');
                $('#robuxModalPart1_5').modal('toggle');
            },
            openNextModal: function () {
                $('#robuxModalPart2').modal('toggle');
                $('#robuxModalPart1_5').modal('toggle');
            }
        }
    }
</script>

<style scoped>

</style>