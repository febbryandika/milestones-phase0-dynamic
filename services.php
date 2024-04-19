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
  </head>
  <body>
    <header class="fixed w-screen top-0">
        <nav class="flex p-5 bg-zinc-900 text-white font-bold">
            <h1 class="flex-auto text-3xl text-left"><a href="./index.php">Kolase Kopi</a></h1>
            <div class="content-center text-right">
                <a href="./services.php" class="mx-3 text-amber-500">Services</a>
                <a href="./portfolio.php" class="mx-3 hover:text-amber-500">Portfolio</a>
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
        <div class="flex flex-col mt-24">
            <div class="w-11/12 mx-auto">
                <h1 class="text-5xl font-bold text-left">Services</h1>
            </div>
            <div class="flex flex-col w-11/12 mx-auto mt-10">
                <div class="w-full">
                    <p class="font-bold text-3xl text-center">Content Production</p>
                </div>
                <div class="w-full mt-5">
                    <div class="flex gap-10 mt-5 text-lg">
                        <div class="grid grid-cols-3 gap-4 w-1/2">
                            <img src="./assets/img/foto-produk/foto-produk-001.jpg" alt="Foto Produk 1" class="h-80 w-80 object-cover object-center">
                            <img src="./assets/img/foto-produk/foto-produk-002.jpg" alt="Foto Produk 2" class="h-80 w-80 object-cover object-center">
                            <img src="./assets/img/foto-produk/foto-produk-003.jpg" alt="Foto Produk 3" class="h-80 w-80 object-cover object-center">
                            <img src="./assets/img/foto-produk/foto-produk-004.jpg" alt="Foto Produk 4" class="h-80 w-80 object-cover object-center">
                            <img src="./assets/img/foto-produk/foto-produk-005.jpg" alt="Foto Produk 5" class="h-80 w-80 object-cover object-center">
                            <img src="./assets/img/foto-produk/foto-produk-006.jpg" alt="Foto Produk 6" class="h-80 w-80 object-cover object-center">
                        </div>
                        <div class="flex flex-col justify-center w-1/2">
                            <div class="my-auto">
                                <p class="text-2xl mb-5"><b>Photography</b></p>
                                <p>Our team captures stunning images of your coffee shop's products. We utilize professional equipment and lighting techniques to showcase your offerings in the most appealing way possible.</p>
                            </div>
                            <div class="my-auto">
                            <p class="text-2xl mb-5"><b>Videography</b></p>
                            <p>From short promotional videos to longer-form content, we produce engaging videos that highlight the unique atmosphere and offerings of your coffee shop. Whether it's showcasing your baristas crafting specialty drinks or providing a virtual tour of your space, we bring your brand to life through dynamic visual storytelling.</p>
                            </div>
                        </div>
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