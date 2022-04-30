<template>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <router-link to="/" class="navbar-brand d-flex align-items-center">
                    <img alt="Logo" class="main-logo-fun" src="/storage/assets/img/logo-rbxfun.png" style="max-width: 185px; margin-top: 5px; margin-bottom: 5px;" />
                </router-link>

                <div class="mobile-btns d-lg-none d-flex d-md-inline-flex d-sm-inline-flex">
                    <div class="flex-row center-btn">
                        <div class="btn bg-success text-center text-white">BALANCE: <span>{{USER_STOCK}}</span> <img src="/storage/assets/img/robux-png.png" style="width: 22px; margin-bottom: 3px;" /></div>
                    </div>
                    <div class="flex-row center-btn">
                        <router-link tag="li" to="/earn">
                            <a type="div" class="btn bg-white text-center">Earn Robux</a>
                        </router-link>
                    </div>
                </div>

                <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbarNavDropdown" class="navbar-collapse collapse" style="flex-grow: 0 !important;">
                    <ul class="navbar-nav">
                        <router-link tag="li" to="/earn" class="nav-item">
                            <a class="nav-link nav-link-cst"><i class="fas fa-dollar-sign" aria-hidden="true"></i> Earn</a>
                        </router-link>
                        <router-link tag="li" to="/withdraw" class="nav-item">
                            <a class="nav-link nav-link-cst"><i class="fas fa-hand-holding-usd" aria-hidden="true"></i> Claim</a>
                        </router-link>
                        <router-link tag="li" to="/inventory" class="nav-item">
                            <a class="nav-link nav-link-cst"><i class="fas fa-treasure-chest" aria-hidden="true"></i> Chests</a>
                        </router-link>
                        <router-link tag="li" to="/giveaway" class="nav-item">
                            <a class="nav-link nav-link-cst"><i class="fas fa-gift" aria-hidden="true"></i> Giveaway</a>
                        </router-link>
                        <router-link tag="li" to="/referral" class="nav-item">
                            <a class="nav-link nav-link-cst"><i class="fas fa-sack-dollar" aria-hidden="true" style="margin-right: 5px;"></i> Referrals </a>
                        </router-link>
                        <router-link tag="li" to="/promocodes" class="nav-item">
                            <a class="nav-link nav-link-cst"><i class="fas fa-cart-plus"></i> Codes</a>
                        </router-link>
                    </ul>
                </div>
            </div>
            <div class="btn-flex-cst d-md-none d-sm-none d-lg-flex">
                <div class="center-btn">
                    <div class="btn bg-success text-center text-white">BALANCE: <span>{{USER_STOCK}}</span> <img src="/storage/assets/img/robux-png.png" style="width: 22px; margin-bottom: 3px;" /></div>
                </div>
                <div class="center-btn">
                    <router-link tag="li" to="/earn">
                        <a type="div" class="btn bg-white text-center">Earn Robux</a>
                    </router-link>
                </div>
            </div>
        </nav>
        <div class="announcement-container">
            <h5 class="announcement-nav">&#128640; Don't put fake looking info into Surveys, otherwise you might not get your earned Robux credited! &#127796;</h5>
        </div>

        <LoginModal />
    </header>
</template>

<script>
    import LoginModal from "@/js/components/LoginModal";
    export default {
        name: "Header",
        data: function() {
            return {
                USER_STOCK: '0.00'
            }
        },
        props: ['updateUserStock'],
        components: {LoginModal},
        mounted() {
            const stats = $helper.getLocalData('stats');
            if(stats) {
                this.USER_STOCK = stats.user_stock;
            }
            this.getUserStats();

            // for going live
            this.refreshStorage();


            $('.navbar-toggler-icon').on('click', function() {
                $('#navbarNavDropdown').slideToggle();
            });
        },
        methods: {
            getUserStats: function() {
                const user = $helper.getUser();
                let rid = $helper.easyEncrypt(0);
                if(user) {
                    rid = $helper.easyEncrypt(user.rid);
                }
                let params = `rid=${rid}`;
                $api.getData(`stats?${params}`)
                    .then((response) => {
                        $helper.saveLocalData('stats', response.data);
                        this.USER_STOCK = response.data.user_stock;
                        this.updateUserStock(this.USER_STOCK, response.data);
                    })
                    .catch(error => {
                       console.log('Error', error);
                    });
            },
            refreshStorage: function () {
                const refreshed = $helper.getLocalData('refreshed!!');
                if(!refreshed || refreshed !== true) {
                    $helper.removeLocalData('__u');
                    $helper.removeLocalData('stats');
                    $helper.removeLocalData('e_soial_popup');
                    $helper.removeLocalData('e_chest_popup');
                    $helper.removeLocalData('starter-chest');
                    $helper.removeLocalData('basic-chest');
                    $helper.removeLocalData('rare-chest');
                    $helper.removeLocalData('godly-chest');
                    $helper.removeLocalData('giveaway_timer');
                    $helper.removeLocalData('o_giveaway_timer');

                    $helper.saveLocalData('refreshed!!', true);
                }
            }
        }
    }
</script>

<style scoped>

</style>