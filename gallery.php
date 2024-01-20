<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GarXu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            scrollbar-width: thin;
            scrollbar-color: #397524 #DFE9EB;
        }

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

        #gallery {
            margin-top: 0;
        }
    </style>

</head>

<body class="bg-zinc-900 text-white dark:bg-zinc-900 bg-zinc-50 dark:text-zinc-50 text-zinc-900 transition-colors duration-200 ease-in-out flex flex-col justify-center items-center">
    <header>

        <nav class="w-full">
            <div class="container mx-auto px-6 flex items-center justify-between">
                <div class="flex items-center" aria-label="Home" role="img">
                    <a href="/">
                        <img class="cursor-pointer w-12 h-12 sm:w-auto" src="./assets/img/logo.png" alt="logo" />
                    </a>
                    <p class="ml-2 lg:ml-4 text-base lg:text-2xl font-bold text-white dark:text-white">GARXU
                    </p>
                </div>
                <div>
                    <button onclick="toggleMenu(true)" class=" dark:bg-white rounded sm:block md:hidden lg:hidden text-gray-500 hover:text-white focus:text-white focus:outline-none focus:ring-2 focus:ring-gray-500">
                        <img class="h-8 w-8" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg4.svg" alt="show" />

                    </button>
                    <div id="menu" class="md:block lg:block hidden">
                        <button onclick="toggleMenu(false)" class=" dark:bg-white rounded block md:hidden lg:hidden text-gray-500 hover:text-white focus:text-white fixed focus:outline-none focus:ring-2 focus:ring-gray-500 bg-white md:bg-transparent z-30 top-0 mt-3">
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
        <div class="w-full px-6">
            <div class="mx-auto max-w-2xl mt-8">
                <section id="gallery" class="text-white body-font mt-0">
                    <div class="flex flex-col text-center w-full">
                        <div class="font-sans flex items-center ">
                            <div x-data="{ openTab: 1 }">
                                <div class="">
                                    <div class="mb-4 flex space-x-4 p-2 rounded-lg shadow-lg mx-auto">
                                        <button x-on:click="openTab = 1" :class="{ 'bg-gray-800 text-white': openTab === 1 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-gray transition-all duration-300">All</button>
                                        <button x-on:click="openTab = 2" :class="{ 'bg-gray-800 text-white': openTab === 2 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-gray transition-all duration-300">Banners</button>
                                        <button x-on:click="openTab = 3" :class="{ 'bg-gray-800 text-white': openTab === 3 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-gray transition-all duration-300">Logos</button>
                                        <button x-on:click="openTab = 4" :class="{ 'bg-gray-800 text-white': openTab === 4 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-gray transition-all duration-300">YT</button>
                                        <button x-on:click="openTab = 5" :class="{ 'bg-gray-800 text-white': openTab === 5 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-gray transition-all duration-300">Wallpaper</button>
                                    </div>

                                    <div x-show="openTab === 1">
                                        <div class="flex flex-wrap -m-4">
                                            <?php
                                            $jsonFile = file_get_contents("./json/products.json");
                                            $jsonData = json_decode($jsonFile, true);

                                            foreach ($jsonData as $item) {
                                                echo '<div class="lg:w-1/3 sm:w-1/2 p-4">';
                                                echo '<div class="flex relative h-64">';
                                                echo '<img alt="gallery" class="absolute inset-0 w-full h-full object-contain object-center" src="' . $item["imageUrl"] . '">';
                                                echo '<div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0">';
                                                echo '<h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>';
                                                echo '<h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>';
                                                echo '<p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>';
                                                echo '</div>';
                                                echo '</div>';
                                                echo '</div>';
                                            }
                                            ?>
                                        </div>
                                    </div>

                                    <div x-show="openTab === 2">
                                        <div class="flex flex-wrap -m-4">
                                            <?php
                                            foreach ($jsonData as $item) {
                                                if ($item["category"] === "Banners") {
                                                    echo '<div class="lg:w-1/3 sm:w-1/2 p-4">';
                                                    echo '<div class="flex relative h-64">';
                                                    echo '<img alt="gallery" class="absolute inset-0 w-full h-full object-contain object-center" src="' . $item["imageUrl"] . '">';
                                                    echo '<div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0">';
                                                    echo '<h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>';
                                                    echo '<h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>';
                                                    echo '<p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>';
                                                    echo '</div>';
                                                    echo '</div>';
                                                    echo '</div>';
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>

                                    <div x-show="openTab === 3">
                                        <div class="flex flex-wrap -m-4">
                                            <?php
                                            foreach ($jsonData as $item) {
                                                if ($item["category"] === "Logos") {
                                                    echo '<div class="lg:w-1/3 sm:w-1/2 p-4">';
                                                    echo '<div class="flex relative h-64">';
                                                    echo '<img alt="gallery" class="absolute inset-0 w-full h-full object-contain object-center" src="' . $item["imageUrl"] . '">';
                                                    echo '<div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0">';
                                                    echo '<h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>';
                                                    echo '<h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>';
                                                    echo '<p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>';
                                                    echo '</div>';
                                                    echo '</div>';
                                                    echo '</div>';
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div x-show="openTab === 4">
                                        <div class="flex flex-wrap -m-4">
                                            <?php
                                            foreach ($jsonData as $item) {
                                                if ($item["category"] === "YouTube") {
                                                    echo '<div class="lg:w-1/3 sm:w-1/2 p-4">';
                                                    echo '<div class="flex relative h-64">';
                                                    echo '<img alt="gallery" class="absolute inset-0 w-full h-full object-contain object-center" src="' . $item["imageUrl"] . '">';
                                                    echo '<div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0">';
                                                    echo '<h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>';
                                                    echo '<h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>';
                                                    echo '<p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>';
                                                    echo '</div>';
                                                    echo '</div>';
                                                    echo '</div>';
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div x-show="openTab === 5">
                                        <div class="flex flex-wrap -m-4">
                                            <?php
                                            foreach ($jsonData as $item) {
                                                if ($item["category"] === "Wallpapers") {
                                                    echo '<div class="lg:w-1/3 sm:w-1/2 p-4">';
                                                    echo '<div class="flex relative h-64">';
                                                    echo '<img alt="gallery" class="absolute inset-0 w-full h-full object-contain object-center" src="' . $item["imageUrl"] . '">';
                                                    echo '<div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0">';
                                                    echo '<h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>';
                                                    echo '<h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>';
                                                    echo '<p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>';
                                                    echo '</div>';
                                                    echo '</div>';
                                                    echo '</div>';
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>

        </div>
        </div>

    </header>



</body>

<script>
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