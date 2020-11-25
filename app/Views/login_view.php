<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?php if (session()->getFlashdata('state')) {
    $state = true;
} else {
    $state = false;
} ?>

<div class="w-screen h-screen sm:grid sm:grid-cols-2 sm:gap-0 md:gap-12 py-0 px-8 xl:gap-32 lg:gap-24">
    <div class="sm:flex justify-end items-center hidden">
        <img src="/img/login.svg" alt="login" style="width: 500px;">
    </div>
    <div class="flex justify-center items-center">
        <form style="width: 450px;" method="POST" action="/login/masuk" class="bg-gray-200 py-8 rounded-3xl shadow-2xl transform translate-y-48 sm:translate-y-0">
            <?= csrf_field(); ?>
            <img src="/img/avatar.svg" alt="avatar" class="w-24 mx-auto">
            <h2 class="text-4xl mt-2 text-center">LOGIN USER</h2>
            <div class="my-4 mx-8 py-2 px-0 border-b-2 <?= ($state) ? 'border-blue-600' : ' border-gray-600'; ?> mt-0" style="display: grid;grid-template-columns: 7% 93%;">
                <div class="flex justify-center items-center relative h-10">
                    <i class="i fas fa-user <?= ($state) ? 'text-blue-700' : 'opacity-50'; ?> duration-500"></i>
                </div>
                <div class="relative h-10">
                    <h5 class="h5 -translate-y-1/2 transform <?= ($state) ? 'text-base' : 'text-xl'; ?> duration-500 absolute text-gray-700" style="position: absolute;left: 10px; <?= ($state) ? 'top:-5px' : 'top:50%'; ?> ;">Username</h5>
                    <input type="text" name="username" class="input absolute w-full h-full top-0 left-0 py-2 px-3 text-lg border-none outline-none" style="background: none;" value="<?= old('username'); ?>">
                </div>
            </div>
            <span class="text-red-700 ml-8 inline-block transform -translate-y-4">
                <?php if (isset($validation)) {
                    echo $validation->getError('username');
                } ?>
            </span>
            <div class="-mt-3 mx-8 py-2 px-0 border-b-2 <?= ($state) ? 'border-blue-600' : ' border-gray-600'; ?> mb-1" style="display: grid;grid-template-columns: 7% 93%;">
                <div class="flex justify-center items-center relative h-10">
                    <i class="i fas fa-lock <?= ($state) ? 'text-blue-700' : 'opacity-50'; ?> duration-500"></i>
                </div>
                <div class="relative h-10">
                    <h5 class="h5 -translate-y-1/2 transform <?= ($state) ? 'text-base' : 'text-xl'; ?> duration-500 absolute text-gray-700" style="position: absolute;left: 10px;<?= ($state) ? 'top:-5px' : 'top:50%'; ?>;">Password</h5>
                    <input type="password" name="password" class="input absolute w-full h-full top-0 left-0 py-2 px-3 text-lg border-none outline-none" style="background: none;" value="<?= old('password'); ?>">
                    <span class="eyes fa fa-eye-slash absolute right-0 transform translate-y-3 cursor-pointer text-gray-700"></span>
                </div>
            </div>

            <span class="text-red-700 ml-8 inline-block">
                <?php if (isset($validation)) {
                    echo $validation->getError('password');
                } ?>
            </span>
            <div class="flex justify-between mb-4 mt-0">
                <div class="ml-8">
                    <input type="checkbox" class="cursor-pointer">
                    <label for="check" id="remember" class="sm:text-sm lg:text-base text-base cursor-pointer duration-500 text-gray-700">Remember Me</label>
                </div>
                <a href="/login/reset" class="sm:text-sm lg:text-base text-base no-underline text-gray-700 duration-500 hover:text-blue-700 mr-6">Lupa Password?</a>
            </div>
            <div class="flex justify-center my-4">
                <input type="submit" class="shadow-2xl block h-10 px-40 sm:px-24 md:px-32 lg:px-40 rounded-3xl text-lg outline-none border-none bg-blue-600 cursor-pointer text-gray-300 duration-500 uppercase hover:bg-blue-700 mx-6" value="Login">
            </div>
            <span class="flex justify-center">Atau</span>
            <div class="flex justify-center mt-4 mb-4">
                <div class="bg-gray-400 flex justify-center py-1 rounded-full w-64 transform hover:scale-105 shadow-2xl duration-300 hover:bg-gray-200">
                    <img src="/img/logo sipadu.jpg" alt="google" width="40" height="40" class="mr-4">
                    <a href="/login/loginsipadu" class="flex items-center cursor-pointer hover:text-blue-600">Login with SIPADU</a>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="bg-gray-400 flex justify-center py-1 rounded-full w-64 transform hover:scale-105 shadow-2xl duration-300 hover:bg-gray-200">
                    <img src="/img/google.png" alt="google" width="40" height="40" class="mr-4">
                    <h3 class="flex items-center cursor-pointer hover:text-blue-600">Login with Google</h3>
                </div>
            </div>
        </form>
        <script src="js/eye.js"></script>
        <script src="js/main.js"></script>
    </div>
</div>
<?= $this->endSection(); ?>