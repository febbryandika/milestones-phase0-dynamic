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
    <header class="fixed w-screen top-0 z-40">
        <nav class="flex p-5 bg-zinc-900 text-white font-bold">
            <h1 class="flex-auto text-3xl text-left"><a href="./index.php">Kolase Kopi</a></h1>
            <div class="content-center text-right">
                <a href="./services.php" class="mx-3 hover:text-amber-500">Services</a>
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
        <img id="hero" src="./assets/img/hero/awal-mula-hero.jpg" class="absolute inset-0 w-full h-full z-10">
        <div class="absolute inset-0 bg-black opacity-65 z-20"></div>
        <div class="absolute inset-0 flex flex-col justify-center items-center h-full z-30">
            <h1 class="text-5xl text-white font-bold text-center">Every coffee tells a story, <br>we're here to spread it.</h1>
            <button onclick="changeHero()" class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-150 duration-300">
                <img src="./assets/img/logo.png" alt="Kolase Kopi" class="w-14 mt-14 opacity-85">
            </button>
        </div>
    </main>
    <footer class="fixed w-screen bottom-0 z-20">
        <p class="bg-zinc-900 text-white text-center text-xs">Copyright &copy; 2024</p>
    </footer>
  </body>
</html>