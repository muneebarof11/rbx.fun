<template>
    <section>
        <!-- HEADER -->
        <Header :update-user-stock="updateUserStock" :key="componentKey" />

        <div class="container mt-5">
            <h2 class="text-center fade-in-100" style="margin-top: 0px; ">Make a video for RBX.FUN</h2>
            <div role="alert" class="alert alert-success text-center fade-in-100 mt-4" style="margin-left: 3%;margin-right:3%;border: 4px #31c152 solid;background-color: #afffc1;">
                <h4 class="alert-heading">Instructions</h4>
                <p>Make a YOUTUBE video about RBX.FUN, showing how to GET to the site, and say you can EARN robux!</p><p><i>MAKE THE TITLE ABOUT HOW TO GET FREE ROBUX IN 2021 OR SOMETHING LIKE THAT</i></p>
            </div>
            <div class="my-3 p-3 bg-white rounded shadow-sm text-center small-card">
                <div class="row">
                    <div class="col-sm-6 fade-in-150" style="text-align: left;">
                        <h5 class="fade-in-200">Send your video!</h5>
                        <hr>
                        <div class="input-group input-group-lg fade-in-250">
                            <input v-model="url" id="myInput" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Your Youtube Video Link">
                        </div>
                        <button v-on:click="submitVideo" class="custom-btn custom-green waves-effect waves-light fade-in-300" style="width: 75%; cursor: pointer !important; outline: 0; margin-top: 25px; width: 100%;-webkit-transition: all 0.15s ease-out!important;transition: all 0.15s ease-out!important;border-radius: 12px !important;
font-size: 30px;
padding: 10px;"><b>SUBMIT VIDEO!</b></button>
                        <div class="separator fade-in-350">Make sure to make your video Clean and Helpful!</div>
                        <div class="row fade-in-400">
                            <div class="col-12" style="padding-right: 0;">
                                <button onclick="Swal.fire({title: 'Success!',text: 'We are reviewing your video! Make another if you do not receive the robux!',icon: 'success',confirmButtonText: 'Cool'})" href="#/earn" class="custom-btn-tab custom-blue custom-btn-xs" style="margin-top: 8px!important;padding: 5px !important; width: 75%; cursor: pointer !important; outline: 0; margin-top: 25px; width: 100%;">Check Status!<img src="/storage/assets/img/robux-png.png" style="margin-left: 1px; width: 34px; margin-top: -3px;">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6" style="text-align: left;">
                        <div style="max-height: 400px; height: auto;border-radius:20px;" class="card align-self-stretch fade-in-300">
                            <iframe id="iframeyoutube" allowfullscreen="" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" src="https://www.youtube.com/embed/TxLgywouLGI" style="border-radius:20px;" width="100%" height="300" frameborder="0"></iframe>
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
        name: "Youtube",
        components: {Header},
        data: function () {return {componentKey: 0, USER_STOCK: 0, url: ''}},
        methods: {
            updateUserStock: function(val) {
                this.USER_STOCK = val;
            },
            submitVideo: function () {
                if(this.url.length <= 0) {
                    Swal.fire({title: 'Oops!', text: 'Youtube video url cannot be empty!', icon: 'error', confirmButtonText: 'OK'});
                    return ;
                }

                Swal.fire({title: 'Success!',text: 'Video is submitted! Check status every day!',icon: 'success',confirmButtonText: 'Cool'})
                this.url = '';
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
    }p{
         margin-bottom:5px!important;
     }
</style>