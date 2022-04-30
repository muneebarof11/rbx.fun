<template>
    <div id="robuxModalPart3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="robuxModalLabel" style="display: none;" aria-hidden="true">
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
                            <h4>Join this group!</h4>
                            <img src="https://t2.rbxcdn.com/9c67b2e173ce26ae00520ab8cc668084" style="width: 125px; border-radius: 3px;" />
                            <div class="row" style="margin-top: 21px;">
                                <div class="col-8 mx-auto">
                                    <a
                                            class="custom-btn custom-blue custom-btn-xs"
                                            style="outline: none !important; padding-top: 5px !important; width: 100%; padding-bottom: 5px !important; margin-bottom: 24px;"
                                            href="https://www.roblox.com/groups/6149870"
                                            target="_blank"
                                    >
                                        JOIN!
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="progress mt-5">
                                    <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Step 1 of 5</div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-12 col-md-6" style="">
                                        <button style="margin-bottom: 15px; font-size: 25px !important;" type="button" data-dismiss="modal" class="tada-btn btn btn-secondary btn-block waves-effect waves-light tada-btn">CLOSE</button>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <button style="margin-bottom: 15px; font-size: 25px !important;" id="infoContinue1" type="button" class="tada-btn btn btn-primary btn-block waves-effect waves-light tada-btn">NEXT</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade text-center" id="ads1" role="tabpanel1">
                            <h4>Are you sure? &#127796;</h4>
                            <h5>You're about to claim <span class="text-success">34 </span> robux to <span class="text-primary">Axelostin</span>.</h5>
                            <img src="https://pbs.twimg.com/media/Ds9H7XuWkA0I9dr.png" style="width: 108px; margin-bottom: 18px;" />
                            <div>
                                <div class="progress mt-5">
                                    <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Step 1 of 5</div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <button style="margin-bottom: 15px; font-size: 25px !important;" type="button" id="adsBack" class="tada-btn btn btn-secondary btn-block waves-effect waves-light tada-btn">BACK</button>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <button style="margin-bottom: 15px; font-size: 25px !important;" id="adsContinue1" type="button" class="tada-btn btn btn-primary btn-block waves-effect waves-light tada-btn">PAY ME!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade text-center" id="placementPanel1" role="tabpanel1">
                            <h4>Success!</h4>
                            <h5>Tick animation goes here</h5>
                            <div>
                                <div class="progress mt-5">
                                    <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Step 2 of 5</div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <button style="margin-bottom: 15px;" type="button" id="placementBack" class="tada-btn btn btn-secondary btn-block waves-effect waves-light tada-btn">BACK</button>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <button style="margin-bottom: 15px;" type="button" class="tada-btn btn btn-primary btn-block waves-effect waves-light tada-btn" data-dismiss="modal">THANKS!</button>
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
        name: "RobuxModalPart3"
    }
</script>

<style scoped>

</style>