<?php 
    include "database.php" ;
    session_start();

    if (isset($_SESSION['username'])) {
        header("location: signout.php");
        exit();
    }

    if(isset($_POST['submit'])){
        $username  = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $result = $conn -> query($sql);
    
        if ($result->num_rows) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("location: index.php");
            exit();
        } else {
            echo "<script>alert('Email atau password Anda salah. Silakan coba lagi!')</script>";
        }
    }

    $conn -> close();
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
                <a href="./about.php" class="mx-3 hover:text-amber-500">About Us</a>
                <a href="./contact.php" class="mx-3 hover:text-amber-500">Contact Us</a>
                <a href="./signin.php" class="mx-3 text-amber-500">Sign In</a>
            </div>
        </nav>
    </header>
    <main class="h-screen">
        <div class="flex justify-center items-center h-full">
            <div class="shadow-xl rounded-xl bg-slate-100 w-2/5 p-3">
                <p class="text-3xl font-bold text-center mt-5 mb-10">Sign In</h2>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <div class="w-4/5 mx-auto mt-5">
                        <input type="username" name="username" id="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Username">
                    </div>
                    <div class="w-4/5 mx-auto mt-5">
                        <input type="password" name="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="Password">
                    </div>
                    <div class="text-center mt-5">
                        <button type="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-20 rounded focus:outline-none focus:shadow-outline">Sign In</button>
                    </div>
                </form>
                <div class="text-center mt-14 mb-5">
                    <p class="text-sm">Don't have an account?<a href="./signup.php" class="ml-2 font-bold text-blue-500 hover:text-blue-700">Sign Up</a></p>
                </div>
            </div>
        </div>
    </main>
    <footer class="fixed w-screen bottom-0">
        <p class="bg-zinc-900 text-white text-center text-xs">Copyright &copy; 2024</p>
    </footer>
  </body>
</html>