<template>
    <div class="modal fade" id="starterChestModal" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Are you sure? &#128640;</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <section class="wrapper">
                        <button v-on:click="whatsInside"
                                class="custom-btn-animation tada-btn btn-primary btn-block waves-effect waves-light">
                            <span v-if="!loading && !response">What's Inside?</span>
                            <span v-if="loading"><div class="spinner-border text-light" role="status"><span class="sr-only">Loading...</span></div></span>
                            <span v-if="response">CLOSE</span>
                        </button>
                        <div class="tada-wrapper">
                            <h2 class="mb-3" v-if="response">{{message}}</h2>
                            <div class="open"></div>
                            <div class="closed"></div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "StarterChestModal",
        data: function() {return {loading: false, response: false, message: ''}},
        methods: {
            whatsInside: function () {
                if(this.loading === true) return false;
                if(this.response === true) {
                    $('#starterChestModal').modal('hide');
                    this.$router.go();
                }

                $('#starterChestModal').modal('show');

                this.loading = !this.loading;
                const user = $helper.getUser();
                const FORM_DATA = new FormData();
                FORM_DATA.append('type', 'basic');
                FORM_DATA.append('rid', user.rid);

                $api.postData('open-chest', FORM_DATA)
                    .then((response) => {
                        if(response > 0) {
                            this.loading = !this.loading;
                            this.message = `YOU WON ${response} ROBUX`;
                            this.response = true;

                            $('.custom-btn-animation').addClass('clicked');
                            $helper.saveLocalData('starter-chest', 1);

                        } else {
                            Swal.fire(
                                'Oops!',
                                'Something went wrong, please try again!',
                                'error'
                            );
                        }
                    }).catch(err => {
                        Swal.fire(
                            'Oops!',
                            'Something went wrong, please try again!',
                            'error'
                        );
                });
            }
        }
    }
</script>

<style scoped>

</style>