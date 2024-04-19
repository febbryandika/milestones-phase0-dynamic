<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kolase Kopi</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./assets/js/script.js"></script>
  </head>
  <body>
    <header class="fixed w-screen top-0 z-20">
        <nav class="flex p-5 bg-zinc-900 text-white font-bold">
            <h1 class="flex-auto text-3xl text-left"><a href="./index.php">Kolase Kopi</a></h1>
            <div class="content-center text-right">
                <a href="./services.php" class="mx-3 hover:text-amber-500">Services</a>
                <a href="./portfolio.php" class="mx-3 text-amber-500">Portfolio</a>
                <a href="./about.php" class="mx-3 hover:text-amber-500">About Us</a>
                <a href="./contact.php" class="mx-3 hover:text-amber-500">Contact Us</a>
                <a href="./signin.php" class="mx-3 hover:text-amber-500"><?php if (isset($_SESSION['username'])) {
                                                                                    echo "Sign Out";
                                                                                    } else {
                                                                                        echo "Sign In";
                                                                                    } ?>
                </a>
            </div>
        </nav>
    </header>
    <main>
        <div id="static" class="flex flex-col mt-24 h-[56rem] overflow-hidden z-10">
            <div class="w-11/12 mx-auto">
                <h1 class="text-5xl font-bold text-left">Portfolio</h1>
            </div>
            <div class="grid grid-cols-3 gap-10 w-11/12 mx-auto mt-14 p-5 overflow-y-scroll">
                <div class="shadow-xl rounded-xl bg-black text-white text-left hover:text-amber-500 hover:scale-105 cursor-pointer" onclick="displayDetail(-7.3391527836135175, 108.22385562883518, '48-street')">
                    <img src="./assets/img/48-street/48-street-001.jpg" alt="48 Street ストリート" class="rounded-t-xl h-80 w-full object-cover object-center border-4 border-black">
                    <div class="p-4">
                        <p class="text-xl font-bold">48 Street ストリート</p>
                        <p class="text-sm">Tasikmalaya</p>
                    </div>
                </div>
                <div class="shadow-xl rounded-xl bg-black text-white text-left hover:text-amber-500 hover:scale-105 cursor-pointer" onclick="displayDetail(-6.920073068362229, 107.61363564768804, 'bagi-kopi-signature')">
                    <img src="./assets/img/bagi-kopi-signature/bagi-kopi-signature-001.jpg" alt="Bagi Kopi Signature" class="rounded-t-xl h-80 w-full object-cover object-center border-4 border-black">
                    <div class="p-4">
                        <p class="text-xl font-bold">Bagi Kopi Signature</p>
                        <p class="text-sm">Bandung</p>
                    </div>
                </div>
                <div class="shadow-xl rounded-xl bg-black text-white text-left hover:text-amber-500 hover:scale-105 cursor-pointer" onclick="displayDetail(-6.604196610016849, 106.8100905811561, 'daruma')">
                    <img src="./assets/img/daruma/daruma-001.jpg" alt="Daruma Brunch House & Coffee" class="rounded-t-xl h-80 w-full object-cover object-center border-4 border-black">
                    <div class="p-4">
                        <p class="text-xl font-bold">Daruma Brunch House & Coffee</p>
                        <p class="text-sm">Bogor</p>
                    </div>
                </div>
                <div class="shadow-xl rounded-xl bg-black text-white text-left hover:text-amber-500 hover:scale-105 cursor-pointer" onclick="displayDetail(-8.668838168847676, 115.21756811961124, 'imadji-coffee')">
                    <img src="./assets/img/imadji-coffee/imadji-coffee-001.jpg" alt="Imadji Coffee" class="rounded-t-xl h-80 w-full object-cover object-center border-4 border-black">
                    <div class="p-4">
                        <p class="text-xl font-bold">Imadji Coffee</p>
                        <p class="text-sm">Bali</p>
                    </div>
                </div>
                <div class="shadow-xl rounded-xl bg-black text-white text-left hover:text-amber-500 hover:scale-105 cursor-pointer" onclick="displayDetail(-6.2600066505965595, 106.84192235015, 'kalibata-house-21')">
                    <img src="./assets/img/kalibata-house-21/kalibata-house-21-001.jpg" alt="Kalibata House 21" class="rounded-t-xl h-80 w-full object-cover object-center border-4 border-black">
                    <div class="p-4">
                        <p class="text-xl font-bold">Kalibata House 21</p>
                        <p class="text-sm">Jakarta</p>
                    </div>
                </div>
                <div class="shadow-xl rounded-xl bg-black text-white text-left hover:text-amber-500 hover:scale-105 cursor-pointer" onclick="displayDetail(-6.599784506155591, 106.8182283845421, 'handoko')">
                    <img src="./assets/img/handoko/handoko-001.jpg" alt="Kedai Kopi Handoko" class="rounded-t-xl h-80 w-full object-cover object-center border-4 border-black">
                    <div class="p-4">
                        <p class="text-xl font-bold">Kedai Kopi Handoko</p>
                        <p class="text-sm">Bogor</p>
                    </div>
                </div>
                <div class="shadow-xl rounded-xl bg-black text-white text-left hover:text-amber-500 hover:scale-105 cursor-pointer" onclick="displayDetail(-6.905122607269299, 107.58558310312324, 'kopi-toko-djawa-critical-11')">
                    <img src="./assets/img/kopi-toko-djawa-critical-11/kopi-toko-djawa-critical-11-001.jpg" alt="Kopi Toko Djawa Critical 11" class="rounded-t-xl h-80 w-full object-cover object-center border-4 border-black">
                    <div class="p-4">
                        <p class="text-xl font-bold">Kopi Toko Djawa Critical 11</p>
                        <p class="text-sm">Bandung</p>
                    </div>
                </div>
                <div class="shadow-xl rounded-xl bg-black text-white text-left hover:text-amber-500 hover:scale-105 cursor-pointer" onclick="displayDetail(-7.932645668207405, 112.65214786505602, 'mahboen-coffee')">
                    <img src="./assets/img/mahboen-coffee/mahboen-coffee-001.jpg" alt="Mahboen Coffee" class="rounded-t-xl h-80 w-full object-cover object-center border-4 border-black">
                    <div class="p-4">
                        <p class="text-xl font-bold">Mahboen Coffee</p>
                        <p class="text-sm">Malang</p>
                    </div>
                </div>
                <div class="shadow-xl rounded-xl bg-black text-white text-left hover:text-amber-500 hover:scale-105 cursor-pointer" onclick="displayDetail(-7.834374111799654, 110.3889840846592, 'nest')">
                    <img src="./assets/img/nest/nest-001.jpg" alt="Nest Coffee & Donuts" class="rounded-t-xl h-80 w-full object-cover object-center border-4 border-black">
                    <div class="p-4">
                        <p class="text-xl font-bold">Nest Coffee & Donuts</p>
                        <p class="text-sm">Yogyakarta</p>
                    </div>
                </div>
                <div class="shadow-xl rounded-xl bg-black text-white text-left hover:text-amber-500 hover:scale-105 cursor-pointer" onclick="displayDetail(-8.685324215873777, 115.26340278167368, 'over-the-moon')">
                    <img src="./assets/img/over-the-moon/over-the-moon-001.jpg" alt="Over The Moon" class="rounded-t-xl h-80 w-full object-cover object-center border-4 border-black">
                    <div class="p-4">
                        <p class="text-xl font-bold">Over The Moon</p>
                        <p class="text-sm">Bali</p>
                    </div>
                </div>
                <div class="shadow-xl rounded-xl bg-black text-white text-left hover:text-amber-500 hover:scale-105 cursor-pointer" onclick="displayDetail(-6.9349939687262445, 107.61890640738562, 'qual-coffee')">
                    <img src="./assets/img/qual-coffee/qual-coffee-001.jpg" alt="Qual Coffee" class="rounded-t-xl h-80 w-full object-cover object-center border-4 border-black">
                    <div class="p-4">
                        <p class="text-xl font-bold">Qual Coffee</p>
                        <p class="text-sm">Bandung</p>
                    </div>
                </div>
                <div class="shadow-xl rounded-xl bg-black text-white text-left hover:text-amber-500 hover:scale-105 cursor-pointer" onclick="displayDetail(-6.2272840222154935, 106.811799644176, 'sedjuk-bakmi-kopi')">
                    <img src="./assets/img/sedjuk-bakmi-kopi/sedjuk-bakmi-kopi-001.jpg" alt="Sedjuk Bakmi & Kopi SCBD" class="rounded-t-xl h-80 w-full object-cover object-center border-4 border-black">
                    <div class="p-4">
                        <p class="text-xl font-bold">Sedjuk Bakmi & Kopi SCBD</p>
                        <p class="text-sm">Jakarta</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Detail 48 Street -->
        <div id="48-street" class="mt-24 w-11/12 mx-auto" hidden>
            <div class="absolute inset-0 bg-black opacity-75 z-10"></div>
            <div class="absolute inset-0 rounded-xl shadow-xl bg-white text-black text-left h-[51rem] border-2 border-black w-3/5 px-7 pt-7 m-auto z-20">
                <div class="flex overflow-x-scroll gap-2">
                    <img src="./assets/img/48-street/48-street-001.jpg" alt="48 Street ストリート Image 1" class="w-[24rem]">
                    <img src="./assets/img/48-street/48-street-002.jpg" alt="48 Street ストリート Image 2" class="w-[24rem]">
                    <img src="./assets/img/48-street/48-street-003.jpg" alt="48 Street ストリート Image 3" class="w-[24rem]">
                    <img src="./assets/img/48-street/48-street-004.jpg" alt="48 Street ストリート Image 4" class="w-[24rem]">
                    <img src="./assets/img/48-street/48-street-005.jpg" alt="48 Street ストリート Image 5" class="w-[24rem]">
                </div>
                <div class="ml-5">
                    <p class="text-5xl font-bold mt-3 w-2/3">48 Street ストリート</p>
                    <div class="flex">
                        <div class="mt-10 w-1/2">
                            <p class="text-xl font-bold mb-5">Location</p>
                            <p>Jl. Cikalang Girang No.48,<br>Kahuripan, Kec. Tawang,<br>Kab. Tasikmalaya, Jawa Barat 46115</p>
                            <div class="text-sm font-bold mt-10">
                                <?php if (isset($_SESSION['username'])) {
                                    echo '<p>Tempat ini <span id="distance-48-street"></span> dari lokasi Anda</p>';
                                } else {
                                    echo '<p><a href="./signin.php" class="text-blue-500">Sign In</a> untuk mengetahui jarak Anda ke lokasi ini!</p>';
                                } ?>
                            </div>
                        </div>
                        <div class="mt-10 w-1/2">
                            <p class="text-xl font-bold mb-3">Open Hour</p>
                            <p class="mb-3">Mon-Fri<br>09.00 - 21.00</p>
                            <p>Sat-Sun<br>08.00 - 21.00</p>
                        </div>
                        <button class="absolute bottom-5 right-8 rounded-xl text-white bg-red-600 px-5 py-2" onclick="closeDynamic('48-street')">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detail Bagi Kopi Signature -->
        <div id="bagi-kopi-signature" class="mt-24 w-11/12 mx-auto" hidden>
            <div class="absolute inset-0 bg-black opacity-75 z-10"></div>
            <div class="absolute inset-0 rounded-xl shadow-xl bg-white text-black text-left h-[51rem] border-2 border-black w-3/5 px-7 pt-7 m-auto z-20">
                <div class="flex overflow-x-scroll gap-2">
                    <img src="./assets/img/bagi-kopi-signature/bagi-kopi-signature-001.jpg" alt="Bagi Kopi Signature Image 1" class="w-[24rem]">
                    <img src="./assets/img/bagi-kopi-signature/bagi-kopi-signature-002.jpg" alt="Bagi Kopi Signature Image 2" class="w-[24rem]">
                    <img src="./assets/img/bagi-kopi-signature/bagi-kopi-signature-003.jpg" alt="Bagi Kopi Signature Image 3" class="w-[24rem]">
                    <img src="./assets/img/bagi-kopi-signature/bagi-kopi-signature-004.jpg" alt="Bagi Kopi Signature Image 4" class="w-[24rem]">
                    <img src="./assets/img/bagi-kopi-signature/bagi-kopi-signature-005.jpg" alt="Bagi Kopi Signature Image 5" class="w-[24rem]">
                </div>
                <div class="ml-5">
                    <p class="text-5xl font-bold mt-3">Bagi Kopi Signature</p>
                    <div class="flex">
                        <div class="mt-10 w-1/2">
                            <p class="text-xl font-bold mb-5">Location</p>
                            <p>Jl. Naripan No.53,<br>Kb. Pisang, Kec. Sumur Bandung,<br>Kota Bandung, Jawa Barat 40112</p>
                            <div class="text-sm font-bold mt-10">
                                <?php if (isset($_SESSION['username'])) {
                                    echo '<p>Tempat ini <span id="distance-bagi-kopi-signature"></span> dari lokasi Anda</p>';
                                } else {
                                    echo '<p><a href="./signin.php" class="text-blue-500">Sign In</a> untuk mengetahui jarak Anda ke lokasi ini!</p>';
                                } ?>
                            </div>
                        </div>
                        <div class="mt-10 w-1/2">
                            <p class="text-xl font-bold mb-3">Open Hour</p>
                            <p class="mb-3">Mon-Sun<br>10.00 - 21.00</p>
                        </div>
                        <button class="absolute bottom-5 right-8 rounded-xl text-white bg-red-600 px-5 py-2" onclick="closeDynamic('bagi-kopi-signature')">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detail Daruma Brunch House & Coffee -->
        <div id="daruma" class="mt-24 w-11/12 mx-auto" hidden>
            <div class="absolute inset-0 bg-black opacity-75 z-10"></div>
            <div class="absolute inset-0 rounded-xl shadow-xl bg-white text-black text-left h-[51rem] border-2 border-black w-3/5 px-7 pt-7 m-auto z-20">
                <div class="flex overflow-x-scroll gap-2">
                    <img src="./assets/img/daruma/daruma-001.jpg" alt="Daruma Brunch House & Coffee Image 1" class="w-[24rem]">
                    <img src="./assets/img/daruma/daruma-002.jpg" alt="Daruma Brunch House & Coffee Image 2" class="w-[24rem]">
                    <img src="./assets/img/daruma/daruma-003.jpg" alt="Daruma Brunch House & Coffee Image 3" class="w-[24rem]">
                    <img src="./assets/img/daruma/daruma-004.jpg" alt="Daruma Brunch House & Coffee Image 4" class="w-[24rem]">
                    <img src="./assets/img/daruma/daruma-005.jpg" alt="Daruma Brunch House & Coffee Image 5" class="w-[24rem]">
                </div>
                <div class="ml-5">
                    <p class="text-5xl font-bold mt-3">Daruma Brunch House & Coffee</p>
                    <div class="flex">
                        <div class="mt-10 w-1/2">
                            <p class="text-xl font-bold mb-5">Location</p>
                            <p>Jl. Binamarga II No.5D,<br>Baranangsiang, Kec. Bogor Tim.,<br>Kota Bogor, Jawa Barat 16143</p>
                            <div class="text-sm font-bold mt-10">
                                <?php if (isset($_SESSION['username'])) {
                                    echo '<p>Tempat ini <span id="distance-daruma"></span> dari lokasi Anda</p>';
                                } else {
                                    echo '<p><a href="./signin.php" class="text-blue-500">Sign In</a> untuk mengetahui jarak Anda ke lokasi ini!</p>';
                                } ?>
                            </div>
                        </div>
                        <div class="mt-10 w-1/2">
                            <p class="text-xl font-bold mb-3">Open Hour</p>
                            <p class="mb-3">Sun-Thu<br>08.00 - 21.00<br>Fri-Sat<br>08.00 - 22.00</p>
                        </div>
                        <button class="absolute bottom-5 right-8 rounded-xl text-white bg-red-600 px-5 py-2" onclick="closeDynamic('daruma')">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detail Imadji Coffee -->
        <div id="imadji-coffee" class="mt-24 w-11/12 mx-auto" hidden>
            <div class="absolute inset-0 bg-black opacity-75 z-10"></div>
            <div class="absolute inset-0 rounded-xl shadow-xl bg-white text-black text-left h-[51rem] border-2 border-black w-3/5 px-7 pt-7 m-auto z-20">
                <div class="flex overflow-x-scroll gap-2">
                    <img src="./assets/img/imadji-coffee/imadji-coffee-001.jpg" alt="Imadji Coffee Image 1" class="w-[24rem]">
                    <img src="./assets/img/imadji-coffee/imadji-coffee-002.jpg" alt="Imadji Coffee Image 2" class="w-[24rem]">
                    <img src="./assets/img/imadji-coffee/imadji-coffee-003.jpg" alt="Imadji Coffee Image 3" class="w-[24rem]">
                    <img src="./assets/img/imadji-coffee/imadji-coffee-004.jpg" alt="Imadji Coffee Image 4" class="w-[24rem]">
                    <img src="./assets/img/imadji-coffee/imadji-coffee-005.jpg" alt="Imadji Coffee Image 5" class="w-[24rem]">
                </div>
                <div class="ml-5">
                    <p class="text-5xl font-bold mt-3">Imadji Coffee</p>
                    <div class="flex">
                        <div class="mt-10 w-1/2">
                            <p class="text-xl font-bold mb-5">Location</p>
                            <p>Jl. P.B. Sudirman No.18 A,<br>Dauh Puri Klod, Kec. Denpasar Bar.,<br>Kota Denpasar, Bali 80232</p>
                            <div class="text-sm font-bold mt-10">
                                <?php if (isset($_SESSION['username'])) {
                                    echo '<p>Tempat ini <span id="distance-imadji-coffee"></span> dari lokasi Anda</p>';
                                } else {
                                    echo '<p><a href="./signin.php" class="text-blue-500">Sign In</a> untuk mengetahui jarak Anda ke lokasi ini!</p>';
                                } ?>
                            </div>
                        </div>
                        <div class="mt-10 w-1/2">
                            <p class="text-xl font-bold mb-3">Open Hour</p>
                            <p class="mb-3">Mon-Sun<br>08.00 - 21.00</p>
                        </div>
                        <button class="absolute bottom-5 right-8 rounded-xl text-white bg-red-600 px-5 py-2" onclick="closeDynamic('imadji-coffee')">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detail Kalibata House 21 -->
        <div id="kalibata-house-21" class="mt-24 w-11/12 mx-auto" hidden>
            <div class="absolute inset-0 bg-black opacity-75 z-10"></div>
            <div class="absolute inset-0 rounded-xl shadow-xl bg-white text-black text-left h-[51rem] border-2 border-black w-3/5 px-7 pt-7 m-auto z-20">
                <div class="flex overflow-x-scroll gap-2">
                    <img src="./assets/img/kalibata-house-21/kalibata-house-21-001.jpg" alt="Kalibata House 21 Image 1" class="w-[24rem]">
                    <img src="./assets/img/kalibata-house-21/kalibata-house-21-002.jpg" alt="Kalibata House 21 Image 2" class="w-[24rem]">
                    <img src="./assets/img/kalibata-house-21/kalibata-house-21-003.jpg" alt="Kalibata House 21 Image 3" class="w-[24rem]">
                    <img src="./assets/img/kalibata-house-21/kalibata-house-21-004.jpg" alt="Kalibata House 21 Image 4" class="w-[24rem]">
                    <img src="./assets/img/kalibata-house-21/kalibata-house-21-005.jpg" alt="Kalibata House 21 Image 5" class="w-[24rem]">
                </div>
                <div class="ml-5">
                    <p class="text-5xl font-bold mt-3">Kalibata House 21</p>
                    <div class="flex">
                        <div class="mt-10 w-1/2">
                            <p class="text-xl font-bold mb-5">Location</p>
                            <p>Jl. Kalibata Utara II No.21,<br>Kalibata, Kec. Pancoran,<br>Kota Jakarta Selatan, DKI Jakarta 12740</p>
                            <div class="text-sm font-bold mt-10">
                                <?php if (isset($_SESSION['username'])) {
                                    echo '<p>Tempat ini <span id="distance-kalibata-house-21"></span> dari lokasi Anda</p>';
                                } else {
                                    echo '<p><a href="./signin.php" class="text-blue-500">Sign In</a> untuk mengetahui jarak Anda ke lokasi ini!</p>';
                                } ?>
                            </div>
                        </div>
                        <div class="mt-10 w-1/2">
                            <p class="text-xl font-bold mb-3">Open Hour</p>
                            <p class="mb-3">Mon-Fri<br>10.00 - 22.00<br>Sat-Sun<br>08.00 - 22.00</p>
                        </div>
                        <button class="absolute bottom-5 right-8 rounded-xl text-white bg-red-600 px-5 py-2" onclick="closeDynamic('kalibata-house-21')">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detail Kedai Kopi Handoko -->
        <div id="handoko" class="mt-24 w-11/12 mx-auto" hidden>
            <div class="absolute inset-0 bg-black opacity-75 z-10"></div>
            <div class="absolute inset-0 rounded-xl shadow-xl bg-white text-black text-left h-[51rem] border-2 border-black w-3/5 px-7 pt-7 m-auto z-20">
                <div class="flex overflow-x-scroll gap-2">
                    <img src="./assets/img/handoko/handoko-001.jpg" alt="Kedai Kopi Handoko Image 1" class="w-[24rem]">
                    <img src="./assets/img/handoko/handoko-002.jpg" alt="Kedai Kopi Handoko Image 2" class="w-[24rem]">
                    <img src="./assets/img/handoko/handoko-003.jpg" alt="Kedai Kopi Handoko Image 3" class="w-[24rem]">
                    <img src="./assets/img/handoko/handoko-004.jpg" alt="Kedai Kopi Handoko Image 4" class="w-[24rem]">
                    <img src="./assets/img/handoko/handoko-005.jpg" alt="Kedai Kopi Handoko Image 5" class="w-[24rem]">
                </div>
                <div class="ml-5">
                    <p class="text-5xl font-bold mt-3">Kedai Kopi Handoko</p>
                    <div class="flex">
                        <div class="mt-10 w-1/2">
                            <p class="text-xl font-bold mb-5">Location</p>
                            <p>Jl. Kol. Ahmad Syam,<br>Baranangsiang, Kec. Bogor Tim.,<br>Kota Bogor, Jawa Barat 16154</p>
                            <div class="text-sm font-bold mt-10">
                                <?php if (isset($_SESSION['username'])) {
                                    echo '<p>Tempat ini <span id="distance-handoko"></span> dari lokasi Anda</p>';
                                } else {
                                    echo '<p><a href="./signin.php" class="text-blue-500">Sign In</a> untuk mengetahui jarak Anda ke lokasi ini!</p>';
                                } ?>
                            </div>
                        </div>
                        <div class="mt-10 w-1/2">
                            <p class="text-xl font-bold mb-3">Open Hour</p>
                            <p class="mb-3">Mon-Sun<br>08.00 - 22.00</p>
                        </div>
                        <button class="absolute bottom-5 right-8 rounded-xl text-white bg-red-600 px-5 py-2" onclick="closeDynamic('handoko')">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detail Kopi Toko Djawa Critical 11 -->
        <div id="kopi-toko-djawa-critical-11" class="mt-24 w-11/12 mx-auto" hidden>
            <div class="absolute inset-0 bg-black opacity-75 z-10"></div>
            <div class="absolute inset-0 rounded-xl shadow-xl bg-white text-black text-left h-[51rem] border-2 border-black w-3/5 px-7 pt-7 m-auto z-20">
                <div class="flex overflow-x-scroll gap-2">
                    <img src="./assets/img/kopi-toko-djawa-critical-11/kopi-toko-djawa-critical-11-001.jpg" alt="Kopi Toko Djawa Critical 11 Image 1" class="w-[24rem]">
                    <img src="./assets/img/kopi-toko-djawa-critical-11/kopi-toko-djawa-critical-11-002.jpg" alt="Kopi Toko Djawa Critical 11 Image 2" class="w-[24rem]">
                    <img src="./assets/img/kopi-toko-djawa-critical-11/kopi-toko-djawa-critical-11-003.jpg" alt="Kopi Toko Djawa Critical 11 Image 3" class="w-[24rem]">
                    <img src="./assets/img/kopi-toko-djawa-critical-11/kopi-toko-djawa-critical-11-004.jpg" alt="Kopi Toko Djawa Critical 11 Image 4" class="w-[24rem]">
                    <img src="./assets/img/kopi-toko-djawa-critical-11/kopi-toko-djawa-critical-11-005.jpg" alt="Kopi Toko Djawa Critical 11 Image 5" class="w-[24rem]">
                </div>
                <div class="ml-5">
                    <p class="text-5xl font-bold mt-3">Kopi Toko Djawa Critical 11</p>
                    <div class="flex">
                        <div class="mt-10 w-1/2">
                            <p class="text-xl font-bold mb-5">Location</p>
                            <p>Jl. Pajajaran Dalam No.148<br>Husen Sastranegara, Kec. Cicendo,<br>Kota Bandung, Jawa Barat 40174</p>
                            <div class="text-sm font-bold mt-10">
                                <?php if (isset($_SESSION['username'])) {
                                    echo '<p>Tempat ini <span id="distance-kopi-toko-djawa-critical-11"></span> dari lokasi Anda</p>';
                                } else {
                                    echo '<p><a href="./signin.php" class="text-blue-500">Sign In</a> untuk mengetahui jarak Anda ke lokasi ini!</p>';
                                } ?>
                            </div>
                        </div>
                        <div class="mt-10 w-1/2">
                            <p class="text-xl font-bold mb-3">Open Hour</p>
                            <p class="mb-3">Mon-Fri<br>10.00 - 22.00<br>Sat-Sun<br>08.00 - 22.00</p>
                        </div>
                        <button class="absolute bottom-5 right-8 rounded-xl text-white bg-red-600 px-5 py-2" onclick="closeDynamic('kopi-toko-djawa-critical-11')">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detail Mahboen Coffee -->
        <div id="mahboen-coffee" class="mt-24 w-11/12 mx-auto" hidden>
            <div class="absolute inset-0 bg-black opacity-75 z-10"></div>
            <div class="absolute inset-0 rounded-xl shadow-xl bg-white text-black text-left h-[51rem] border-2 border-black w-3/5 px-7 pt-7 m-auto z-20">
                <div class="flex overflow-x-scroll gap-2">
                    <img src="./assets/img/mahboen-coffee/mahboen-coffee-001.jpg" alt="Mahboen Coffee Image 1" class="w-[24rem]">
                    <img src="./assets/img/mahboen-coffee/mahboen-coffee-002.jpg" alt="Mahboen Coffee Image 2" class="w-[24rem]">
                    <img src="./assets/img/mahboen-coffee/mahboen-coffee-003.jpg" alt="Mahboen Coffee Image 3" class="w-[24rem]">
                    <img src="./assets/img/mahboen-coffee/mahboen-coffee-004.jpg" alt="Mahboen Coffee Image 4" class="w-[24rem]">
                    <img src="./assets/img/mahboen-coffee/mahboen-coffee-005.jpg" alt="Mahboen Coffee Image 5" class="w-[24rem]">
                </div>
                <div class="ml-5">
                    <p class="text-5xl font-bold mt-3">Mahboen Coffee</p>
                    <div class="flex">
                        <div class="mt-10 w-1/2">
                            <p class="text-xl font-bold mb-5">Location</p>
                            <p>Jl. Simpang Panji Suroso No.137,<br>Arjosari, Kec. Blimbing,<br>Kota Malang, Jawa Timur 65126</p>
                            <div class="text-sm font-bold mt-10">
                                <?php if (isset($_SESSION['username'])) {
                                    echo '<p>Tempat ini <span id="distance-mahboen-coffee"></span> dari lokasi Anda</p>';
                                } else {
                                    echo '<p><a href="./signin.php" class="text-blue-500">Sign In</a> untuk mengetahui jarak Anda ke lokasi ini!</p>';
                                } ?>
                            </div>
                        </div>
                        <div class="mt-10 w-1/2">
                            <p class="text-xl font-bold mb-3">Open Hour</p>
                            <p class="mb-3">Mon-Thu<br>11.00 - 22.00<br>Fri<br>13.00 - 22.00<br>Sat-Sun<br>08.00 - 22.00</p>
                        </div>
                        <button class="absolute bottom-5 right-8 rounded-xl text-white bg-red-600 px-5 py-2" onclick="closeDynamic('mahboen-coffee')">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detail Nest Coffee & Donuts -->
        <div id="nest" class="mt-24 w-11/12 mx-auto" hidden>
            <div class="absolute inset-0 bg-black opacity-75 z-10"></div>
            <div class="absolute inset-0 rounded-xl shadow-xl bg-white text-black text-left h-[51rem] border-2 border-black w-3/5 px-7 pt-7 m-auto z-20">
                <div class="flex overflow-x-scroll gap-2">
                    <img src="./assets/img/nest/nest-001.jpg" alt="Nest Coffee & Donuts Image 1" class="w-[24rem]">
                    <img src="./assets/img/nest/nest-002.jpg" alt="Nest Coffee & Donuts Image 2" class="w-[24rem]">
                    <img src="./assets/img/nest/nest-003.jpg" alt="Nest Coffee & Donuts Image 3" class="w-[24rem]">
                    <img src="./assets/img/nest/nest-004.jpg" alt="Nest Coffee & Donuts Image 4" class="w-[24rem]">
                    <img src="./assets/img/nest/nest-005.jpg" alt="Nest Coffee & Donuts Image 5" class="w-[24rem]">
                </div>
                <div class="ml-5">
                    <p class="text-5xl font-bold mt-3">Nest Coffee & Donuts</p>
                    <div class="flex">
                        <div class="mt-10 w-1/2">
                            <p class="text-xl font-bold mb-5">Location</p>
                            <p>Jl. Ringroad Selatan,<br>Giwangan, Kec. Umbulharjo,<br>Kota Yogyakarta, Daerah Istimewa Yogyakarta</p>
                            <div class="text-sm font-bold mt-10">
                                <?php if (isset($_SESSION['username'])) {
                                    echo '<p>Tempat ini <span id="distance-nest"></span> dari lokasi Anda</p>';
                                } else {
                                    echo '<p><a href="./signin.php" class="text-blue-500">Sign In</a> untuk mengetahui jarak Anda ke lokasi ini!</p>';
                                } ?>
                            </div>
                        </div>
                        <div class="mt-10 w-1/2">
                            <p class="text-xl font-bold mb-3">Open Hour</p>
                            <p class="mb-3">Mon-Sun<br>09.00 - 22.00</p>
                        </div>
                        <button class="absolute bottom-5 right-8 rounded-xl text-white bg-red-600 px-5 py-2" onclick="closeDynamic('nest')">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detail Over The Moon -->
        <div id="over-the-moon" class="mt-24 w-11/12 mx-auto" hidden>
            <div class="absolute inset-0 bg-black opacity-75 z-10"></div>
            <div class="absolute inset-0 rounded-xl shadow-xl bg-white text-black text-left h-[51rem] border-2 border-black w-3/5 px-7 pt-7 m-auto z-20">
                <div class="flex overflow-x-scroll gap-2">
                    <img src="./assets/img/over-the-moon/over-the-moon-001.jpg" alt="Over The Moon Image 1" class="w-[24rem]">
                    <img src="./assets/img/over-the-moon/over-the-moon-002.jpg" alt="Over The Moon Image 2" class="w-[24rem]">
                    <img src="./assets/img/over-the-moon/over-the-moon-003.jpg" alt="Over The Moon Image 3" class="w-[24rem]">
                    <img src="./assets/img/over-the-moon/over-the-moon-004.jpg" alt="Over The Moon Image 4" class="w-[24rem]">
                    <img src="./assets/img/over-the-moon/over-the-moon-005.jpg" alt="Over The Moon Image 5" class="w-[24rem]">
                </div>
                <div class="ml-5">
                    <p class="text-5xl font-bold mt-3">Over The Moon</p>
                    <div class="flex">
                        <div class="mt-10 w-1/2">
                            <p class="text-xl font-bold mb-5">Location</p>
                            <p>Jl. Danau Tamblingan No.19,<br>Kec, Denpasar Selatan,<br>Kota Denpasar, Bali 80228</p>
                            <div class="text-sm font-bold mt-10">
                                <?php if (isset($_SESSION['username'])) {
                                    echo '<p>Tempat ini <span id="distance-over-the-moon"></span> dari lokasi Anda</p>';
                                } else {
                                    echo '<p><a href="./signin.php" class="text-blue-500">Sign In</a> untuk mengetahui jarak Anda ke lokasi ini!</p>';
                                } ?>
                            </div>
                        </div>
                        <div class="mt-10 w-1/2">
                            <p class="text-xl font-bold mb-3">Open Hour</p>
                            <p class="mb-3">Mon-Sun<br>08.30 - 21.00</p>
                        </div>
                        <button class="absolute bottom-5 right-8 rounded-xl text-white bg-red-600 px-5 py-2" onclick="closeDynamic('over-the-moon')">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detail Qual Coffee -->
        <div id="qual-coffee" class="mt-24 w-11/12 mx-auto" hidden>
            <div class="absolute inset-0 bg-black opacity-75 z-10"></div>
            <div class="absolute inset-0 rounded-xl shadow-xl bg-white text-black text-left h-[51rem] border-2 border-black w-3/5 px-7 pt-7 m-auto z-20">
                <div class="flex overflow-x-scroll gap-2">
                    <img src="./assets/img/qual-coffee/qual-coffee-001.jpg" alt="Qual Coffee Image 1" class="w-[24rem]">
                    <img src="./assets/img/qual-coffee/qual-coffee-002.jpg" alt="Qual Coffee Image 2" class="w-[24rem]">
                    <img src="./assets/img/qual-coffee/qual-coffee-003.jpg" alt="Qual Coffee Image 3" class="w-[24rem]">
                    <img src="./assets/img/qual-coffee/qual-coffee-004.jpg" alt="Qual Coffee Image 4" class="w-[24rem]">
                    <img src="./assets/img/qual-coffee/qual-coffee-005.jpg" alt="Qual Coffee Image 5" class="w-[24rem]">
                </div>
                <div class="ml-5">
                    <p class="text-5xl font-bold mt-3">Qual Coffee</p>
                    <div class="flex">
                        <div class="mt-10 w-1/2">
                            <p class="text-xl font-bold mb-5">Location</p>
                            <p>Jl. Kancra No.44,<br>Burangrang, Kec. Lengkong,<br>Kota Bandung, Jawa Barat 40262</p>
                            <div class="text-sm font-bold mt-10">
                                <?php if (isset($_SESSION['username'])) {
                                    echo '<p>Tempat ini <span id="distance-qual-coffee"></span> dari lokasi Anda</p>';
                                } else {
                                    echo '<p><a href="./signin.php" class="text-blue-500">Sign In</a> untuk mengetahui jarak Anda ke lokasi ini!</p>';
                                } ?>
                            </div>
                        </div>
                        <div class="mt-10 w-1/2">
                            <p class="text-xl font-bold mb-3">Open Hour</p>
                            <p class="mb-3">Mon-Sun<br>08.00 - 21.00</p>
                        </div>
                        <button class="absolute bottom-5 right-8 rounded-xl text-white bg-red-600 px-5 py-2" onclick="closeDynamic('qual-coffee')">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detail Sedjuk Bakmi & Kopi SCBD -->
        <div id="sedjuk-bakmi-kopi" class="mt-24 w-11/12 mx-auto" hidden>
            <div class="absolute inset-0 bg-black opacity-75 z-10"></div>
            <div class="absolute inset-0 rounded-xl shadow-xl bg-white text-black text-left h-[51rem] border-2 border-black w-3/5 px-7 pt-7 m-auto z-20">
                <div class="flex overflow-x-scroll gap-2">
                    <img src="./assets/img/sedjuk-bakmi-kopi/sedjuk-bakmi-kopi-001.jpg" alt="Sedjuk Bakmi & Kopi SCBD Image 1" class="w-[24rem]">
                    <img src="./assets/img/sedjuk-bakmi-kopi/sedjuk-bakmi-kopi-002.jpg" alt="Sedjuk Bakmi & Kopi SCBD Image 2" class="w-[24rem]">
                    <img src="./assets/img/sedjuk-bakmi-kopi/sedjuk-bakmi-kopi-003.jpg" alt="Sedjuk Bakmi & Kopi SCBD Image 3" class="w-[24rem]">
                    <img src="./assets/img/sedjuk-bakmi-kopi/sedjuk-bakmi-kopi-004.jpg" alt="Sedjuk Bakmi & Kopi SCBD Image 4" class="w-[24rem]">
                    <img src="./assets/img/sedjuk-bakmi-kopi/sedjuk-bakmi-kopi-005.jpg" alt="Sedjuk Bakmi & Kopi SCBD Image 5" class="w-[24rem]">
                </div>
                <div class="ml-5">
                    <p class="text-5xl font-bold mt-3">Sedjuk Bakmi & Kopi SCBD</p>
                    <div class="flex">
                        <div class="mt-10 w-1/2">
                            <p class="text-xl font-bold mb-5">Location</p>
                            <p>Jl. Tulodong Bawah X No.18,<br>Senayan, Kec. Kby. Baru,<br>Jakarta, DKI Jakarta 12190</p>
                            <div class="text-sm font-bold mt-10">
                                <?php if (isset($_SESSION['username'])) {
                                    echo '<p>Tempat ini <span id="distance-sedjuk-bakmi-kopi"></span> dari lokasi Anda</p>';
                                } else {
                                    echo '<p><a href="./signin.php" class="text-blue-500">Sign In</a> untuk mengetahui jarak Anda ke lokasi ini!</p>';
                                } ?>
                            </div>
                        </div>
                        <div class="mt-10 w-1/2">
                            <p class="text-xl font-bold mb-3">Open Hour</p>
                            <p class="mb-3">Mon-Sun<br>08.00 - 21.00</p>
                        </div>
                        <button class="absolute bottom-5 right-8 rounded-xl text-white bg-red-600 px-5 py-2" onclick="closeDynamic('sedjuk-bakmi-kopi')">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer class="fixed w-screen bottom-0">
        <p class="bg-zinc-900 text-white text-center text-xs">Copyright &copy; 2024</p>
    </footer>
  </body>
</html>
