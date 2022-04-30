<template>
    <div aria-hidden="true" aria-labelledby="robuxModalLabel" class="modal fade" id="robuxModalPart2" role="dialog"
         style="display: none;" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="wizard-title">Withdraw robux! &#x1F381;</h5>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="tab-content mt-2">
                        <div class="tab-pane fade text-center active show" id="" role="tabpanel1">
                            <h4>Are you sure? &#127796;</h4>
                            <h5>You're about to claim <span class="text-success">{{withdrawAmount}} </span> robux to <span
                                    class="text-primary">{{user.username}}</span>.</h5>
                            <img class="mb-withdraw-icon" src="https://pbs.twimg.com/media/Ds9H7XuWkA0I9dr.png"
                                 style="width: 108px; margin-bottom: 18px;"/>
                            <div>
                                <div class="progress mt-5">
                                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="100"
                                         class="progress-bar" role="progressbar" style="width: 100%;">Step 3 of 3
                                    </div>
                                </div>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-12 col-md-6">
                                        <button
                                                class="custom-btn-nw custom-blue waves-effect waves-light modal-btn"
                                                id="adsBack"
                                                type="button"
                                                v-on:click="backToStepTwo"
                                        >BACK
                                        </button>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <button
                                                class="custom-btn-nw custom-green waves-effect waves-light modal-btn"
                                                id="adsContinue1"
                                                type="button"
                                                v-on:click="payMe"
                                        >
                                            <span v-if="!loading">PAY ME!</span>
                                            <span v-if="loading">
                                                <div class="spinner-border text-light" role="status"> <span
                                                        class="sr-only">Loading...</span></div>
                                            </span>
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
    export default {
        name: "RobuxModalPart2",
        props: ['withdrawAmount'],
        data: function () {
            return {
                loading: false,
                user: {username: ''},
            }
        },
        mounted() {
            const user = $helper.getUser();
            if(user) this.user = user;
        },
        methods: {
            backToStepTwo: function () {
                $('#robuxModalPart2').modal('toggle');
                $('#robuxModalPart1_5').modal('toggle');
            },
            payMe: function () {
                if(!this.user) return false;
                if(this.loading === true) return false;

                this.loading = true;
                const FORM_DATA = new FormData();
                FORM_DATA.append('amount', parseFloat(this.withdrawAmount));
                FORM_DATA.append('rid', $helper.easyEncrypt(this.user.rid));

                $api.postData('claim', FORM_DATA)
                    .then((response) => {
                        this.loading = false;
                        if (response.status === false || response.data === undefined) {
                            Swal.fire(
                                'Oops!',
                                response.message,
                                'error'
                            );
                            return false;
                        }

                        $('#robuxModalPart2').modal('hide');

                        $helper.saveLocalData('stats', response.data.stats);
                        Swal.fire(
                            'Yaaaay!!',
                            response.message,
                            'success',
                        ).then((result) => {
                            this.$router.go();
                        });

                    }).catch(error => {
                        this.loading = false;
                        Swal.fire(
                            'Oops!',
                            'Something went wrong, please try again!',
                            'error'
                        );
                });
            },
        }

    }
</script>

<style scoped>

</style>