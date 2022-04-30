<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="{{asset('storage/assets/favicon.ico')}}">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, user-scalable=no, shrink-to-fit=no" />

        <meta http-equiv="Cache-control" content="public">

        <!-- Primary Meta Tags -->
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>RBXFun - Get Free Robux for ROBLOX game | rbx.fun</title>
        <meta name="robots" content="index, follow" />
        <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        <link rel="canonical" href="https://rbx.fun/" />
        <meta name="title" content="RBX.FUN - EARN | Free Robux and Promocodes" />
        <meta name="description" content="Get free robux today by playing games and downloading apps." />
        <meta name="keywords" content="Free Robux for Roblox platform" />
        <meta name="revisit-after" content="14 days" />
        <!-- Open Graph / Facebook -->
        <meta property="og:locale" content="en_US" />
        <meta property="og:title" content="Get FREE ROBUX for ROBLOX Platform" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://rbx.fun/" />
        <meta property="og:description" content="RBX.FUN - Earn and Claim Free Robux with Daily Rewards and Promocodes now. Over 1 Million users and 500 Thousand Robux Claimed." />
        <meta property="og:image" content="https://rbx.fun/assets/hd.jpg" />
        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" content="https://rbx.fun/" />
        <meta property="twitter:title" content="RBX.FUN - EARN | Free Robux and Promocodes" />
        <meta property="twitter:description" content="RBX.FUN - Earn and Claim Free Robux with Daily Rewards and Promocodes now. Over 1 Million users and 500 Thousand Robux Claimed." />
        <meta property="twitter:image" content="https://rbx.fun/assets/hd.jpg" />
        <meta name="theme-color" content="#0e67bf" />

        <link rel="preload" href="{{asset('storage/assets/img/open.png')}}" as="image" media="(max-width: 600px)" />
        <link rel="preload" href="{{asset('storage/assets/img/closed.png')}}" as="image" media="(max-width: 600px)" />
        <link rel="preload" href="{{asset('storage/assets/img/closed.png')}}" as="image" media="(max-width: 600px)" />

        <link rel="stylesheet" href="{{asset('storage/assets/styles/bootstrap.min.css')}}" media="all" />
        <link rel="stylesheet" href="{{asset('storage/assets/styles/lootcity.css?v='.time())}}" media="all" />
        <link href="https://kit-pro.fontawesome.com/releases/latest/css/pro.min.css" media="all" rel="stylesheet" />

        <!-- commented bcz not sure why it was used -->
        {{--<script type="text/javascript" src="https://l2.io/ip.js?var=userip"></script>--}}

        <!-- google ads/monetization -->
        <script data-ad-client="ca-pub-1419588642263007" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

        <!-- show page loader on top on page -->
        <script src="{{asset('storage/assets/js/pace.min.js')}}"></script>
        <link rel="stylesheet" href="{{asset('storage/assets/styles/pace-theme-minimal.css?v=4')}}" />

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link href="{{asset('storage/assets/styles/materialdesignicons.min.css?v=4')}}" rel="stylesheet">

        <!-- main style sheet -->
        <link href="{{asset('storage/assets/styles/app.css?v=4')}}" rel="stylesheet" />

        <style>
            .footer-main {
                background-image: url("/storage/assets/img/footerbg.png");
            }
        </style>
        <script type="text/javascript">
            const APP_URL = "{{getenv('APP_URL')}}";
        </script>
    </head>
    <body>

        <!-- header is moved to js/views/App.vue -->

        <!-- content area to render vue -->
        <main role="main" id="site-content">
            <noscript>
                <h1>This site requires Javascript!</h1>
            </noscript>
            <div id="app"></div>
        </main>

        <!-- footer -->
        <footer class="pt-4 pt-md-5 border-top footer-main">
            <div class="container">
                <div class="row text-center" style="font-size: 20px;">
                    <div class="col-3 col-sm"></div>
                    <div class="col-12 col-sm">
                        <h5 style="color: white; font-size: 30px;">IMPORTANT</h5>
                        <ul class="list-unstyled text-small">
                            <li style="background: none;"><a class="text-muted" href="https://discord.gg/MXxRHKJ6e5" style="color: white !important;">SPONSORS</a></li>
                            <li style="background: none;"><a class="text-muted" href="/#/help" style="color: white !important;">LEGAL</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm" style="border-radius: 5px; margin-bottom: 10px;">
                        <h5 style="color: white; font-size: 30px;">SOCIAL</h5>
                        <ul class="list-unstyled text-small">
                            <li style="background: none;"><a class="text-muted" href="https://discord.com/invite/rGPd79K" style="color: white !important;">DISCORD</a></li>
                            <li style="background: none;"><a class="text-muted" href="https://www.youtube.com/channel/UC3DTUclqbFN40DMeiEAIIDw?sub_confirmation=1" style="color: white !important;">YOUTUBE</a></li>
                        </ul>
                    </div>
                    <div class="col-3 col-sm"></div>
                </div>
            </div>
            <div class="text-center footer-copyright" style="background-color: rgb(51 51 51 / 19%); font-size: 18px; display: none;">
                <div class="container" style="padding: 10px;"><span class="text-white gotham-medium" style="">We are not affiliated with ROBLOX</span></div>
            </div>
        </footer>

        <div class="top-bar-alert danger quote-save-danger" id="DangerAlert" style="visibility: hidden; bottom: -62px;">Error!</div>
    </body>

    <script src="{{asset('storage/assets/js/jquery-3.4.1.min.js?v=4')}}" ></script>
    <script src="{{asset('storage/assets/js/bootstrap.min.js?v=4')}}"></script>
    <script src="{{asset('storage/assets/js/toastify.min.js?v=5')}}"></script>
    <script src="{{asset('storage/assets/js/sweetalert2@10.js?v=4')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/core.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/md5.js"></script>
    <script src="{{asset('js/app.js?v='.time())}}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-31Z6RXXDD8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-31Z6RXXDD8');

        $('.btn-flex-cst').removeAttr('style')
    </script>

    <script type="application/ld+json">
            {
                "@context": "https://schema.org/",
                "@type": "HowTo",
                "name": "HOW TO GET ROBUX FOR FREE ON ROBLOX",
                "step": [
                    {
                        "@type": "HowToStep",
                        "text": "Link Account. Open our website and your device will be linked to your account automatically."
                    },
                    {
                        "@type": "HowToStep",
                        "text": "Begin our robux offers. Download our mobile games and complete Quizes."
                    },
                    {
                        "@type": "HowToStep",
                        "text": "Earn Points. The more you earn the more robux you will be able to earn! Simple!"
                    },
                    {
                        "@type": "HowToStep",
                        "text": "Exchange Points. for Robux"
                    }
                ]
            }
        </script>
</html>
