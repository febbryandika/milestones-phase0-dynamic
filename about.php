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
                <a href="./services.php" class="mx-3 hover:text-amber-500">Services</a>
                <a href="./portfolio.php" class="mx-3 hover:text-amber-500">Portfolio</a>
                <a href="./about.php" class="mx-3 text-amber-500">About Us</a>
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
                <h1 class="text-5xl font-bold text-left">About Us</h1>
            </div>
            <div class="flex flex-col w-11/12 mx-auto mt-14">
                <div class="flex">
                    <div class="w-2/3 text-lg">
                        <p class="font-bold mb-5">Berawal di 2019,</p>
                        <p class="mb-5">Kami waktu itu cuma sekumpulan anak yang suka nongkrong di coffee shop. Gaada yang ngerti tentang atau paham tentang kopi sama sekali. Kalau order juga ngga selalu kopi, kadang non-kopi atau bahkan cuma es teh manis. Seiring berjalannya waktu, makin sering tuh kita keliling coffee shop. Sedikit demi sedikit mulai penasaran sama kopi. Makin sering juga ngobrol-ngobrol sama barista atau owner coffee shop.</p>
                        <p class="font-bold mb-5">Sampai di satu titik, kami jadi menyadari satu hal.</p>
                        <p class="font-bold mb-5">Setiap kopi itu punya ceritanya masing-masing.</p>
                        <p class="mb-5">Entah itu perjalan biji kopi dari kebun sampai cangkir, atau cerita unik dan menginspirasi dari orang-orang dibelakangnya. Dan kami tidak mau menyimpan cerita-cerita itu sendiri.</p>
                        <p class="font-bold mb-5">Kami ingin menyebarluaskannya kepada banyak orang.</p>
                        <p class="mb-5">Kami ingin menjadi tempat untuk kita bisa saling berbagi inspirasi dan belajar dari satu sama lain. Hal itulah yang menjadi semangat kami setiap harinya.</p>
                        <p class="font-bold mb-5">Kami percaya banyak hal baik yang bisa dimulai dari secangkir kopi.</p>
                        <p class="font-bold mb-5">Because every coffee tells a story, We are here to spread it.</p>
                    </div>
                    <div class="flex justify-center items-center w-1/3">
                        <img src="./assets/img/logo.png" alt="Logo Kolase Kopi" class="w-48">
                    </div>
                </div>
                <div class="w-full mt-20">
                    <div class="w-full text-center">
                        <p class="text-2xl"><b>Kolase Kopi</b> adalah media kopi digital penyedia sarana periklanan untuk <i>coffee-brand</i> yang<br>membutuhkan iklan secara terukur, berdampak, dan tepat sasaran.</p>
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