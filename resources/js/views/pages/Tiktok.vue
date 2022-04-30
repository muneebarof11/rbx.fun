<template>
    <section>
        <!-- HEADER -->
        <Header :update-user-stock="updateUserStock" :key="componentKey" />

        <div class="container mt-5">
            <h2 class="text-center fade-in-100" style="margin-top: 0px; ">Make a TikTok on RBX.FUN</h2>
            <div role="alert" class="alert alert-success text-center fade-in-100" style="margin-left: 3%;margin-right:3%;border: 4px #31c152 solid;background-color: #afffc1;">
                <h4 class="alert-heading">Instructions</h4>
                <p>- Say how good RBX.FUN is in the video</p><p>- Tell people to use it, Simple!</p><p>- Use roblox hashtags like #roblox #foryou #adoptme #robux !</p><p>- Submit more than 5 videos for faster rewards!</p>
            </div>
            <div class="my-3 p-3 bg-white rounded shadow-sm text-center small-card">
                <div class="row">
                    <div class="col-sm-6 fade-in-150" style="text-align: left;">
                        <h5 class="fade-in-200">Submit Video Here!</h5>
                        <hr>
                        <div class="input-group input-group-lg fade-in-250">
                            <input v-model="url" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="TikTok Link">
                        </div>
                        <button v-on:click="submitVideo" class="custom-btn custom-green waves-effect waves-light fade-in-300" style="width: 75%; cursor: pointer !important; outline: 0; margin-top: 25px; width: 100%;-webkit-transition: all 0.15s ease-out!important;transition: all 0.15s ease-out!important;border-radius: 12px !important;
font-size: 30px;
padding: 10px;"><b>Submit Video!</b></button>
                        <div class="separator fade-in-350">After uploading check RBX.FUN balance every day!</div>
                        <div class="row fade-in-400">
                            <div class="col-12" style="padding-right: 0;">
                                <button href="#/earn" class="custom-btn-tab custom-blue custom-btn-xs" style="margin-top: 8px!important;padding: 5px !important; width: 75%; cursor: pointer !important; outline: 0; margin-top: 25px; width: 100%;">
                                    Check Win Status
                                    <img src="/storage/assets/img/robux-png.png" style="margin-left: 1px; width: 34px; margin-top: -3px;">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6" style="text-align: left;">
                        <div style="max-height: 400px; height: auto;border-radius:20px;" class="card align-self-stretch fade-in-300">
                            <iframe id="iframeyoutube" allowfullscreen="" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" src="https://www.youtube.com/embed/xgWCGOxRyiU" style="border-radius:20px;" width="100%" height="300" frameborder="0"></iframe>
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
        name: "Tiktok",
        components: {Header},
        data: function () {return {componentKey: 0, USER_STOCK: 0, url: ''}},
        methods: {
            updateUserStock: function(val) {
                this.USER_STOCK = val;
            },
            submitVideo: function () {
                if(this.url.length <= 0) {
                    Swal.fire({title: 'Oops!', text: 'Tiktok link cannot be empty!', icon: 'error', confirmButtonText: 'OK'});
                    return ;
                }

                Swal.fire({title: 'Success!',text: 'Video submitted, We will check if the video is good and add the ROBUX to your RBX.FUN balance! Goodluck!',icon: 'success',confirmButtonText: 'Cool'});
                this.url = '';
            }
        }
    }
</script>

<style scoped>

</style>