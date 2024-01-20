<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <meta charset="utf-8">
    <meta name="robots" content="index,follow">
    <meta name="description" content="The best GFX at the cheapest price in the market, fast delivery – Your vision, our creation. Get started now!">
    <meta property="og:title" content="Garxu | Shop">
    <meta property="og:description" content="The best GFX at the cheapest price in the market, fast delivery – Your vision, our creation. Get started now!">
    <meta property="og:image"
        content="https://i.imgur.com/l2WiINS.png">
    <meta property="og:image:alt" content="The best GFX at the cheapest price in the market, fast delivery – Your vision, our creation. Get started now!">
    <meta property="theme-color" content="#2B2D31">
    <meta property="og:type" content="article">
    <meta property="og:locale" content="en_GB">
    <meta property="og:url" content="https://shop.garxu.xyz">
    <meta name="next-head-count" content="10">


    <title>Garxu™️ | Shop</title>
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .tooltip {
            position: relative;
            display: inline-block;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: #000;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            margin-left: -60px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }

        .animate-loop-scroll {
            scroll-snap-type: x mandatory;
            overflow-x: scroll;
            white-space: nowrap;
        }

        .animate-loop-scroll>.grid {
            display: inline-flex;
            scroll-snap-align: start;
        }

        /* Firefox */
        * {
            scrollbar-width: thin;
            scrollbar-color: #397524 #DFE9EB;
        }

        /* Chrome, Edge and Safari */
        *::-webkit-scrollbar {
            height: 0px;
            width: 0px;
        }

        *::-webkit-scrollbar-track {
            border-radius: 0px;
            background-color: #DFE9EB;
        }

        *::-webkit-scrollbar-track:hover {
            background-color: #B8C0C2;
        }

        *::-webkit-scrollbar-track:active {
            background-color: #B8C0C2;
        }

        *::-webkit-scrollbar-thumb {
            border-radius: 5px;
            background-color: #397524;
        }

        *::-webkit-scrollbar-thumb:hover {
            background-color: #62A34B;
        }

        *::-webkit-scrollbar-thumb:active {
            background-color: #62A34B;
        }

        body {
            margin: 0;
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'loop-scroll': 'loop-scroll 50s linear infinite',
                    },
                    keyframes: {
                        'loop-scroll': {
                            from: {
                                transform: 'translateX(0)'
                            },
                            to: {
                                transform: 'translateX(-100%)'
                            },
                        },
                        colors: {
                            clifford: '#da373d',
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-zinc-900 text-white">

    <body class="dark:bg-zinc-900 bg-zinc-50 dark:text-zinc-50 text-zinc-900 transition-colors duration-200 ease-in-out flex flex-col justify-center items-center w-full h-full">

        <header>

            <nav>
                <div class="container mx-auto flex items-center justify-between">
                    <div class="flex items-center" aria-label="Home" role="img">
                        <img class="cursor-pointer w-12 h-12 sm:w-auto" src="./assets/img/logo.png" alt="logo" />
                        <p class="ml-2 lg:ml-4 text-base lg:text-2xl font-bold text-white dark:text-white">GARXU
                        </p>
                    </div>
                    <div>
                        <button onclick="toggleMenu(true)" class=" dark:bg-zinc-950 rounded sm:block md:hidden lg:hidden text-gray-500 hover:text-white focus:text-white focus:outline-none focus:ring-2 focus:ring-gray-500">
                            <img class="h-8 w-8" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg4.svg" alt="show" />

                        </button>
                        <div id="menu" class="md:block lg:block hidden">
                            <button onclick="toggleMenu(false)" class=" dark:bg-zinc-950 rounded block md:hidden lg:hidden text-gray-500 hover:text-white focus:text-white fixed focus:outline-none focus:ring-2 focus:ring-gray-500 bg-white md:bg-transparent z-30 top-0 mt-3">
                                <img class="h-8 w-8" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg5.svg" alt="hide" />

                            </button>
                            <ul class="flex text-3xl md:text-base items-center py-8 md:flex flex-col md:flex-row justify-center fixed md:relative top-0 bottom-0 left-0 right-0 bg-white md:bg-transparent  z-20">
                                <li class="text-white text-lg hover:text-white dark:text-white cursor-pointer md:ml-10 pt-10 md:pt-0">
                                    <a href="/gallery.php">Gallery</a>
                                </li>
                                <li class="text-white text-lg hover:text-white dark:text-white cursor-pointer md:ml-10 pt-10 md:pt-0">
                                    <a href="#discord">Discord</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="relative rounded-lg mx-auto flex flex-col items-center sm:pt-24 pb-24 sm:pb-32 md:pb-48 lg:pb-56 xl:pb-64">
                <div class="flex justify-center items-center">
                    <img src="./assets/img/logo.png" alt="Sample Page" role="img" width="250px" height="250px" />
                </div>

                <div class="w-11/12 sm:w-2/3 mb-3 sm:mb-6">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl text-center text-white font-bold leading-tight">
                        Garxu GFX Shop</h1>
                </div>

                <h1 class="text-center text-3xl sm:text-3xl md:text-3xl lg:text-3xl xl:text-3xl opacity-70 text-white font-bold mt-2 sm:mt-4">
                    THE ONLY GFX DESIGNER YOU'LL EVER NEED!</h1>

                <div class="mx-auto max-w-2xl mt-8">
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-2 text-center">
                        <div class="tooltip">
                            <img src="./assets/img/paypal.png" alt="paypal" class="block object-contain h-12" />
                            <span class="tooltiptext">PayPal</span>
                        </div>
                        <div class="tooltip">
                            <div class="flex items-center justify-center">
                                <img src="./assets/img/apple.png" alt="apple" class="block object-contain h-12" data-tippy-content="Apple Pay" />
                                <span class="tooltiptext">Apple Pay</span>
                            </div>
                        </div>
                        <div class="tooltip">
                            <div class="flex items-center justify-center">
                                <img src="./assets/img/btc.png" alt="btc" class="block object-contain h-12" data-tippy-content="Bitcoin" />
                                <span class="tooltiptext">Bitcoin</span>
                            </div>
                        </div>
                        <div class="tooltip">
                            <div class="flex items-center justify-center">
                                <img src="./assets/img/cashapp.png" alt="cashapp" class="block object-contain h-12" data-tippy-content="Cash App" />
                                <span class="tooltiptext">Cash App</span>
                            </div>
                        </div>
                        <div class="tooltip">
                            <div class="flex items-center justify-center">
                                <img src="./assets/img/cc.png" alt="creditcard" class="block object-contain h-12" data-tippy-content="Credit Card" />
                                <span class="tooltiptext">Credit Card</span>
                            </div>
                        </div>
                        <div class="tooltip">
                            <div class="flex items-center justify-center">
                                <img src="./assets/img/boosts.png" alt="boosts" class="block object-contain h-12" data-tippy-content="Discord Boosts" />
                                <span class="tooltiptext">Discord Boosts</span>
                            </div>
                        </div>
                    </div>
                </div><br><br>
                <section id="reviews" class="relative">
                    <div class="flex overflow-hidden space-x-16 group justify-center px-4">
                        <div class="flex space-x-16 animate-loop-scroll group-hover:paused">
                            <div id="review1" class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-zinc-950 ml-5 mr-5 ml-5 mr-5" style="width: 350px;">
                                <div class="p-4 flex items-center">
                                    <img class=" p-3 rounded-full mr-4 w-20 h-20 object-cover rounded-full" src="https://cdn.discordapp.com/avatars/1185337549917523971/ed45d61cfbba955e6e5f32b775055e69.webp?size=1024&format=webp&width=0&height=256">
                                    <div>
                                        <p class="mb-2 text-lg font-medium text-gray-600 dark:text-gray-400">
                                            xenixsouls
                                        </p>
                                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">
                                        awesome job and cheapest
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="review2" class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-zinc-950 ml-5 mr-5" style="width: 350px;">
                                <div class="p-4 flex items-center">
                                    <img class=" p-3 rounded-full mr-4 w-20 h-20 object-cover rounded-full" src="https://cdn.discordapp.com/avatars/1106758509024002110/e675cc786d941a72c5317bd07797720b.webp?size=1024&format=webp&width=0&height=256">
                                    <div>
                                        <p class="mb-2 text-lg font-medium text-gray-600 dark:text-gray-400">
                                            w3bcams
                                        </p>
                                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">
                                        great work + quick
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="review3" class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-zinc-950 ml-5 mr-5" style="width: 350px;">
                                <div class="p-4 flex items-center">
                                    <img class=" p-3 rounded-full mr-4 w-20 h-20 object-cover rounded-full" src="https://cdn.discordapp.com/avatars/1187453292553441366/a_8a24e5e940c01539014650fdbe97d9a0.gif?size=1024&width=0&height=256">
                                    <div>
                                        <p class="mb-2 text-lg font-medium text-gray-600 dark:text-gray-400">
                                            valentinecarts
                                        </p>
                                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">
                                        best gfx ive ever seen 10/10
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="review4" class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-zinc-950 ml-5 mr-5" style="width: 350px;">
                                <div class="p-4 flex items-center">
                                    <img class=" p-3 rounded-full mr-4 w-20 h-20 object-cover rounded-full" src="https://cdn.discordapp.com/avatars/1187447898917572639/0b23a19478555f9530e9a717d2185ce4.webp?size=1024&format=webp&width=0&height=256">
                                    <div>
                                        <p class="mb-2 text-lg font-medium text-gray-600 dark:text-gray-400">
                                            Recure.win
                                        </p>
                                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">
                                        made such a good bannner! 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="review5" class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-zinc-950 ml-5 mr-5" style="width: 350px;">
                                <div class="p-4 flex items-center">
                                    <img class=" p-3 rounded-full mr-4 w-20 h-20 object-cover rounded-full" src="https://cdn.discordapp.com/avatars/1187437774396207154/0618645b45c64090ed523bb78f5a103d.webp?size=1024&format=webp&width=0&height=256">
                                    <div>
                                        <p class="mb-2 text-lg font-medium text-gray-600 dark:text-gray-400">
                                            Verizonn
                                        </p>
                                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">
                                        W logo and banner 🔥 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="review6" class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-zinc-950 ml-5 mr-5" style="width: 350px;">
                                <div class="p-4 flex items-center">
                                    <img class=" p-3 rounded-full mr-4 w-20 h-20 object-cover rounded-full" src="https://cdn.discordapp.com/avatars/253948945363894274/05422e8c95240190297fd7eee6706bd5.webp?size=1024&format=webp&width=0&height=256">
                                    <div>
                                        <p class="mb-2 text-lg font-medium text-gray-600 dark:text-gray-400">
                                            NaveN
                                        </p>
                                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">
                                        the nicest banner ever !!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="review7" class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-zinc-950 ml-5 mr-5" style="width: 350px;">
                                <div class="p-4 flex items-center">
                                    <img class=" p-3 rounded-full mr-4 w-20 h-20 object-cover rounded-full" src="https://cdn.discordapp.com/avatars/1147818086741835806/162d2fb7a7d6332b73fcbcd618a9d644.webp?size=1024&format=webp&width=0&height=256">
                                    <div>
                                        <p class="mb-2 text-lg font-medium text-gray-600 dark:text-gray-400">
                                            Ances
                                        </p>
                                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">
                                        logo and banner 😍 😍
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="review8" class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-zinc-950 ml-5 mr-5" style="width: 350px;">
                                <div class="p-4 flex items-center">
                                    <img class=" p-3 rounded-full mr-4 w-20 h-20 object-cover rounded-full" src="https://cdn.discordapp.com/avatars/1056794192501821450/a_7715e510d602b3591a61308b2a5689f4.gif?size=1024&width=0&height=256">
                                    <div>
                                        <p class="mb-2 text-lg font-medium text-gray-600 dark:text-gray-400">
                                            Justguys
                                        </p>
                                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">
                                        Banner from giveaway Huge W
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="review9" class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-zinc-950 ml-5 mr-5" style="width: 350px;">
                                <div class="p-4 flex items-center">
                                    <img class=" p-3 rounded-full mr-4 w-20 h-20 object-cover rounded-full" src="https://i.pinimg.com/474x/3c/6c/cb/3c6ccb83716d1e4fb91d3082f6b21d77.jpg">
                                    <div>
                                        <p class="mb-2 text-lg font-medium text-gray-600 dark:text-gray-400">
                                            Holocaust
                                        </p>
                                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">
                                        BLUD GOT ME RIGHTTT
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="review10" class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-zinc-950 ml-5 mr-5" style="width: 350px;">
                                <div class="p-4 flex items-center">
                                    <img class=" p-3 rounded-full mr-4 w-20 h-20 object-cover rounded-full" src="https://cdn.discordapp.com/avatars/1170750758078124125/7dc81b0d195f3ab873df591e1df96b89.webp?size=1024&format=webp&width=0&height=256">
                                    <div>
                                        <p class="mb-2 text-lg font-medium text-gray-600 dark:text-gray-400">
                                            Ghosty
                                        </p>
                                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">
                                        Hard banner icl
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="review11" class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-zinc-950 ml-5 mr-5" style="width: 350px;">
                                <div class="p-4 flex items-center">
                                    <img class=" p-3 rounded-full mr-4 w-20 h-20 object-cover rounded-full" src="https://cdn.discordapp.com/avatars/1049580456137461812/c92d7df82f4693c575de1589e7da54df.webp?size=1024&format=webp&width=0&height=256">
                                    <div>
                                        <p class="mb-2 text-lg font-medium text-gray-600 dark:text-gray-400">
                                            Tepa
                                        </p>
                                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">
                                        Insane logos
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="review12" class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-zinc-950 ml-5 mr-5" style="width: 350px;">
                                <div class="p-4 flex items-center">
                                    <img class=" p-3 rounded-full mr-4 w-20 h-20 object-cover rounded-full" src="https://cdn.discordapp.com/avatars/721860944636018728/19a342ab7b978f3b25a2f3aba5f9e5d3.webp?size=1024&format=webp&width=0&height=256">
                                    <div>
                                        <p class="mb-2 text-lg font-medium text-gray-600 dark:text-gray-400">
                                            Master E
                                        </p>
                                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">
                                        Banner was lowkey fire
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="review12" class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-zinc-950 ml-5 mr-5" style="width: 350px;">
                                <div class="p-4 flex items-center">
                                    <img class=" p-3 rounded-full mr-4 w-20 h-20 object-cover rounded-full" src="https://cdn.discordapp.com/avatars/1058833644711596134/a_ce633d2dd621b8a03df8774d2979395d.gif?size=1024&width=0&height=256">
                                    <div>
                                        <p class="mb-2 text-lg font-medium text-gray-600 dark:text-gray-400">
                                            Llucid
                                        </p>
                                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">
                                        3 banners great work
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <br><br>
                <section id="discord" class="container mx-auto relative">
                    <div class="bg-[url('./assets/img/background.png')] p-8 rounded-md text-white text-center relative">
                        <img src="./assets/img/logo-background.png" class="mx-auto rounded-full mb-4" alt="Logo" style="width: 100px; height: 100px; border-radius: 5px;">
                        <h2 class="text-3xl font-bold mb-4">Garxu™</h2>
                        <p class="text-lg mb-6">The only gfx server you'll ever need!</p>
                        <a href="https://discord.gg/garxu" class="bg-white text-sky-950 py-2 px-4 rounded-full hover:text-white hover:bg-[#7289da] transition duration-300">Join
                            Server</a>
                    </div>
                </section>
            </div>

            <footer class="flex flex-col items-center justify-center px-4 py-12 mx-auto max-w-7xl md:flex-row">
                <p class="mb-8 text-sm text-center text-white md:text-left md:mb-0">© Copyright 2024 GARXU. All Rights Reserved.</p>
            </footer>

            </div>
        </header>

    </body>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const reviewsContainer = document.querySelector('.animate-loop-scroll');
            const reviews = document.querySelectorAll('.animate-loop-scroll > div');
            const totalReviews = reviews.length;
            const cloneCount = 6;

            for (let i = 0; i < cloneCount; i++) {
                reviews.forEach((review, index) => {
                    const clone = review.cloneNode(true);
                    clone.id = `${review.id}-clone${i + 1}`;
                    reviewsContainer.appendChild(clone);
                });
            }


            const totalWidth = totalReviews * 16;

            reviewsContainer.style.animationDuration = `${totalWidth}s`;
            reviewsContainer.style.animationIterationCount = 'infinite';

            reviewsContainer.addEventListener('mouseenter', function() {
                reviewsContainer.style.animationPlayState = 'paused';
            });

            reviewsContainer.addEventListener('mouseleave', function() {
                reviewsContainer.style.animationPlayState = 'running';
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            tippy('[data-tippy-content]', {
                placement: 'bottom',
            });
        });

        function toggleMenu(flag) {
            let value = document.getElementById("menu");
            if (flag) {
                value.classList.remove("hidden");
            } else {
                value.classList.add("hidden");
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

</html>