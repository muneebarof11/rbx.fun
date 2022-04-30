<template>
    <div id="robuxModalPart1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="robuxModalLabel" style="display: none;" aria-hidden="true">
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
                            <div style="padding-bottom: 0; width: 100%;">
                                <h3 class="text-center" style="font-size: 20px;padding-bottom: 11px;font-weight: bolder;">We buy your VIP Server which means it will take 5-7 days for your Robux to be available!</h3>
                            </div>
                            <h5 style="padding-top: 10px; color: #227500; font-weight: bolder">
                                Want to get it instant?
                                <a target="_blank" style="color:rgb(119 8 8); font-weight: bolder">
                                   CLICK HERE (Coming soon)
                                </a>
                            </h5>

                            <div class="my-10">
                                <h3 class="text-center" style="font-size: 20px;padding-bottom: 11px;font-weight: bolder;">How much Robux would you like to withdraw?</h3>
                                <div class="input-group input-group-lg" style="margin-bottom: 15px !important;">
                                    <input type="number" v-model="amount" class="form-control" aria-label="Type amount(max 500)" aria-describedby="inputGroup-sizing-sm" placeholder="Type amount (max 500)" style="text-align: center; font-size: 25px;" />
                                </div>
                            </div>
                            <div>
                                <div class="progress mt-5">
                                    <div class="progress-bar" role="progressbar" style="width: 33.33%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Step 1 of 3</div>
                                </div>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-12 col-md-6" style="padding-left: 15px !important;">
                                        <button class="custom-btn-nw custom-blue waves-effect waves-light modal-btn" data-dismiss="modal">
                                            <b>Close</b>
                                        </button>
                                    </div>
                                    <div class="col-12 col-md-6" style="padding-right: 15px !important;">
                                        <button
                                                v-on:click="openNextModal"
                                                class="custom-btn-nw custom-green waves-effect waves-light modal-btn"
                                                id="infoContinue1"
                                                type="button">
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
        name: "RobuxModalPart1",
        props: ['updateWithdrawAmount'],
        data: function () {
            return {
                robux: 0,
                user: {game_id: 0},
                vip_settings: VIP_SETTINGS,
                amount: ''
            }
        },
        watch: {
            amount: function (val) {
                const amount = $helper.expectedPrice(val);
                this.updateWithdrawAmount(amount, val);
            }
        },
        mounted() {
            $helper.removeLocalData('amount');
            this.user = $helper.getUser();
            if(this.user) {
                this.vip_settings = this.vip_settings.replace('{GAME_ID}', this.user.game_id);
                this.robux = $helper.expectedPrice(this.user.stock);
            }
        },
        methods: {
            openNextModal: function () {

                if(this.amount <= 0 || this.amount.length <= 0) {
                    Swal.fire(
                        'Oops!',
                        'Type amount you want to withdraw!',
                        'error'
                    );
                    return false;
                }

                if(this.amount > 500) {
                    Swal.fire(
                        'Oops!',
                        'You can withdraw maximum 500 Robux at a time!',
                        'error'
                    );
                    return false;
                }

                $helper.saveLocalData('amount', this.amount);
                this.$forceUpdate();

                $('#robuxModalPart1_5').modal('toggle');
                $('#robuxModalPart1').modal('toggle');

            }
        }
    }
</script>

<style scoped>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>