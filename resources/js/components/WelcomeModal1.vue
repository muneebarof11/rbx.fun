<template>
    <div id="WelcomeModalPart1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="welcomeModalLabel" style="display: none;" aria-modal="true">
        <img class="welcomeImg" src="https://pbs.twimg.com/media/Ds9H7XuWkA0I9dr.png" style="position: absolute; bottom: 37px; max-width: 204px; right: 28px; z-index: 2;" />
        <div class="modal-dialog modal-dialog-welcome" style="position: absolute; bottom: 0; right: 255px; max-width: 100%; width: 60%;">
            <div class="modal-content" style="border: none; border-top-right-radius: 0px !important; border-radius: 29px;">
                <div class="modal-body">
                    <div class="tab-content mt-2">
                        <div class="tab-pane fade active show" id="infoPanel1" role="tabpanel1">
                            <h4 style="margin-bottom: 30px; margin: 17px;" id="WelcomeModalTextPart1">
                                Complete these offers to earn ROBUX for your account!
                            </h4>

                            <div>
                                <div class="row" style="max-width: 524px; float: right; width: 100%;">
                                    <div class="col-12 col-md-6" style="">
                                        <button
                                                style="margin-bottom: 15px; font-size: 25px !important; color: #FFF !important"
                                                type="button"
                                                data-dismiss="modal"
                                                class="tada-btn btn btn-secondary btn-block waves-effect waves-light tada-btn"
                                        >CLOSE</button>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <button
                                                v-on:click="resetWriter"
                                                style="
                                                margin-bottom: 15px;
                                                font-size: 25px !important;
                                                color: #FFF !important"
                                                type="button"
                                                class="tada-btn btn btn-primary btn-block waves-effect waves-light tada-btn"
                                        >NEXT</button>
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
    export default {
        name: "WelcomeModal1",
        methods: {
            resetWriter: function () {
                $('#WelcomeModalPart1').modal('hide');
                this.$router.push('withdraw');
            }
        }
    }
</script>

<style scoped>

</style>