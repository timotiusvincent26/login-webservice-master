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
    <div class="flex justify-between">
        <div class="flex items-center">
            <div>
                <img src="/img/logo polstat.jpg" class="w-20 p-3 ml-0 sm:ml-12" alt="logo polstat">
            </div>
            <div>
                <h1 class="font-bold sm:text-lg text-sm text-blue-700">SISTEM INFORMASI DATABASE</h1>
                <h1 class="font-bold sm:text-lg text-sm text-blue-700">ALUMNI AIS/STIS/POLSTAT STIS</h1>
            </div>
        </div>
        <div class="sm:mr-16 lg:mr-20 xl:mr-32 mr-8 flex items-center">
            <nav>
                <ul class="flex gap-x-10 font-bold">
                    <li><a href="/" class="hover:text-blue-600 hover:underline">Login</a></li>
                    <li><a href="/register" class="hover:text-blue-600 hover:underline">Register</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<img src="/img/bg.jpg" alt="bg" class="fixed top-0 right-0 bg-no-repeat w-screen h-screen" style="z-index: -1;">

<body class="font-body bg-gray-100">
    <?= $this->renderSection('content'); ?>
</body>

<footer class="text-black flex justify-center items-center underline h-16 fixed bottom-0 w-screen">Copyright &copy;2020 PKL STIS 60</footer>

</html>