<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="/css/output.css">
    <link rel="stylesheet" href="/css/all.css">
</head>

<header class="font-body shadow-md bg-white fixed top-0 w-screen z-50">
    <div class="shadow-xl bg-white fixed w-full z-50">
        <div class="px-20 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <div class="w-16 h-16 rounded-full bg-gray-100 mr-3">
                        <img src="/img/STISlogo.png" alt="logo polstat">
                    </div>
                    <div>
                        <h1 class="text-lg font-bold w-72 text-blue-500 leading-tight align-top">SISTEM INFORMASI DATABASE ALUMNI AIS/STIS/POLSTAT STIS</h1>
                    </div>
                </div>
                <div class="flex justify-end">
                    <nav>
                        <ul class="flex gap-x-10 font-bold">
                            <li><a href="/" class="hover:text-blue-500 border-b-2 border-white hover:border-blue-500">Login</a></li>
                            <li><a href="/register" class="hover:text-blue-500 border-b-2 border-white hover:border-blue-500">Register</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<img src="/img/bg.jpg" alt="bg" class="fixed top-0 right-0 bg-no-repeat w-screen h-screen" style="z-index: -1;">

<body class="font-body bg-gray-100">
    <?= $this->renderSection('content'); ?>
</body>

<footer class="text-black flex justify-center items-center underline h-16 absolute bottom-0 w-screen">Copyright &copy;2020 PKL STIS 60</footer>

</html>