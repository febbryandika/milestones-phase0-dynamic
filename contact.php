<?php 
    include "database.php";
    session_start();

    if(isset($_POST['submit'])){
        $firstName = $_POST["firstName"];
        $lastName = $_POST['lastName'];
        $email  = $_POST['email'];
        $message = $_POST['message'];
    }

    $sql = $conn->prepare("INSERT INTO messages (first_name, last_name, email, message) VALUES (?, ?, ?, ?)");
    $sql->bind_param("ssss", $firstName, $lastName, $email, $message);
    $sql->execute();
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
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-brands/css/uicons-brands.css'>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <header class="fixed w-screen top-0">
        <nav class="flex p-5 bg-zinc-900 text-white font-bold">
            <h1 class="flex-auto text-3xl text-left"><a href="./index.php">Kolase Kopi</a></h1>
            <div class="content-center text-right">
                <a href="./services.php" class="mx-3 hover:text-amber-500">Services</a>
                <a href="./portfolio.php" class="mx-3 hover:text-amber-500">Portfolio</a>
                <a href="./about.php" class="mx-3 hover:text-amber-500">About Us</a>
                <a href="./contact.php" class="mx-3 text-amber-500">Contact Us</a>
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
                <h1 class="text-5xl font-bold text-left">Contact Us</h1>
            </div>
            <div class="flex justify-center w-11/12 mx-auto mt-14">
                <div class="w-full my-auto text-center">
                    <p class="text-xl mb-8"><b>Email</b>: contact@kolasekopi.com</p>
                        <a href="https://www.instagram.com/kolasekopi/"><i class="fi fi-brands-instagram text-5xl mr-8"></i></a>
                        <a href="https://www.tiktok.com/@kolasekopi"><i class="fi fi-brands-tik-tok text-5xl mr-8"></i></a>
                        <a href="https://api.whatsapp.com/send/?phone=6281222261450&text&app_absent=0"><i class="fi fi-brands-whatsapp text-5xl"></i></a>
                </div>
                <div class="w-full flex flex-col items-center">
                    <h1 class="text-xl mb-10">Have any questions?<br> Send us a message.</h1>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" class="w-4/5">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="w-full">
                                <input type="text" name="firstName" id="firstName" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="First Name">
                            </div>
                            <div class="w-full">
                                <input type="text" name="lastName" id="lastName" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="w-full mt-5">
                            <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Email">
                        </div>
                        <div class="w-full mt-5">
                            <textarea name="message" id="message" class="shadow appearance-none border rounded w-full h-40 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline resize-none" placeholder="Write your message here..."></textarea>
                        </div>
                        <div class="text-center mt-5">
                            <button type="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-20 rounded focus:outline-none focus:shadow-outline">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer class="fixed w-screen bottom-0">
        <p class="bg-zinc-900 text-white text-center text-xs">Copyright &copy; 2024</p>
    </footer>
  </body>
</html>