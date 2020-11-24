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
        <form style="width: 470px;" method="POST" action="register/terdaftar" class="bg-gray-200 py-6 rounded-3xl shadow-2xl transform translate-y-32 sm:translate-y-0">
            <?= csrf_field(); ?>
            <img src="/img/avatar.svg" alt="avatar" class="w-24 mx-auto">
            <h2 class="text-4xl mt-2 -mb-2 text-center">REGISTER</h2>
            <div class="my-4 mx-8 py-2 px-0 border-b-2 <?= ($state) ? 'border-blue-600' : ' border-gray-600'; ?> mt-0" style="display: grid;grid-template-columns: 7% 93%;">
                <div class="flex justify-center items-center relative h-10">
                    <i class="i fas fa-user <?= ($state) ? 'text-blue-700' : 'opacity-50'; ?> duration-500"></i>
                </div>
                <div class="relative h-10">
                    <h5 class="h5 -translate-y-1/2 transform <?= ($state) ? 'text-base' : 'text-xl'; ?> duration-500 absolute text-gray-700" style="position: absolute;left: 10px; <?= ($state) ? 'top:-5px' : 'top:50%'; ?>;">Nama</h5>
                    <input type="text" name="nama" class="input absolute w-full h-full top-0 left-0 py-2 px-3 text-lg border-none outline-none" style="background: none;" value="<?= old('nama'); ?>">
                </div>
            </div>
            <span class="text-red-700 ml-8 inline-block transform -translate-y-4">
                <?php if (isset($validation)) {
                    echo $validation->getError('nama');
                } ?>
            </span>
            <div class="-mt-4 mx-8 py-2 px-0 border-b-2 <?= ($state) ? 'border-blue-600' : ' border-gray-600'; ?>" style="display: grid;grid-template-columns: 7% 93%;">
                <div class="flex justify-center items-center relative h-10">
                    <i class="i fas fa-user <?= ($state) ? 'text-blue-700' : 'opacity-50'; ?> duration-500"></i>
                </div>
                <div class="relative h-10">
                    <h5 class="h5 -translate-y-1/2 transform <?= ($state) ? 'text-base' : 'text-xl'; ?> duration-500 absolute text-gray-700" style="position: absolute;left: 10px; <?= ($state) ? 'top:-5px' : 'top:50%'; ?>;">Username</h5>
                    <input type="text" name="username" class="input absolute w-full h-full top-0 left-0 py-2 px-3 text-lg border-none outline-none" style="background: none;" value="<?= old('username'); ?>">
                </div>
            </div>
            <span class="text-red-700 ml-8 inline-block">
                <?php if (isset($validation)) {
                    echo $validation->getError('username');
                } ?>
            </span>
            <div class="my-4 mx-8 py-2 px-0 border-b-2 <?= ($state) ? 'border-blue-600' : ' border-gray-600'; ?> mt-0" style="display: grid;grid-template-columns: 7% 93%;">
                <div class="flex justify-center items-center relative h-10">
                    <i class="i fas fa-envelope <?= ($state) ? 'text-blue-700' : 'opacity-50'; ?> duration-500"></i>
                </div>
                <div class="relative h-10">
                    <h5 class="h5 -translate-y-1/2 transform <?= ($state) ? 'text-base' : 'text-xl'; ?> duration-500 absolute text-gray-700" style="position: absolute;left: 10px; <?= ($state) ? 'top:-5px' : 'top:50%'; ?>;">Email</h5>
                    <input type="text" name="email" class="input absolute w-full h-full top-0 left-0 py-2 px-3 text-lg border-none outline-none" style="background: none;" value="<?= old('email'); ?>">
                </div>
            </div>
            <span class="text-red-700 ml-8 inline-block transform -translate-y-4">
                <?php if (isset($validation)) {
                    echo $validation->getError('email');
                } ?>
            </span>
            <div class="-mt-4 mx-8 py-2 px-0 border-b-2 <?= ($state) ? 'border-blue-600' : ' border-gray-600'; ?> mb-1" style="display: grid;grid-template-columns: 7% 93%;">
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
            <div class="mt-0 mx-8 py-2 px-0 border-b-2 <?= ($state) ? 'border-blue-600' : ' border-gray-600'; ?> mb-1" style="display: grid;grid-template-columns: 7% 93%;">
                <div class="flex justify-center items-center relative h-10">
                    <i class="i fas fa-lock <?= ($state) ? 'text-blue-700' : 'opacity-50'; ?> duration-500"></i>
                </div>
                <div class="relative h-10">
                    <h5 class="h5 -translate-y-1/2 transform <?= ($state) ? 'text-base' : 'text-xl'; ?> duration-500 absolute text-gray-700" style="position: absolute;left: 10px;<?= ($state) ? 'top:-5px' : 'top:50%'; ?>;">Konfir Password</h5>
                    <input type="password" name="konfir-pass" class="input absolute w-full h-full top-0 left-0 py-2 px-3 text-lg border-none outline-none" style="background: none;" value="<?= old('konfir-pass'); ?>">
                    <span class="eyes fa fa-eye-slash absolute right-0 transform translate-y-3 cursor-pointer text-gray-700"></span>
                </div>
            </div>
            <span class="text-red-700 ml-8 inline-block">
                <?php if (isset($validation)) {
                    echo $validation->getError('konfir-pass');
                } ?>
            </span>
            <div class="flex justify-center my-4">
                <input type="submit" class="shadow-2xl block h-10 px-40 sm:px-24 md:px-32 lg:px-40 rounded-3xl text-lg outline-none border-none bg-blue-600 cursor-pointer text-gray-300 duration-500 uppercase hover:bg-blue-700 mx-6" value="Register">
            </div>
            <div class="flex justify-center items-center pt-2">
                <span class="mr-6">Atau</span>
                <div class="flex justify-center transform hover:scale-105 duration-300">
                    <div class="bg-gray-400 duration-300 hover:bg-gray-200 flex justify-center py-1 rounded-full sm:w-48 w-64 md:w-64 shadow-2xl">
                        <img src="/img/google.png" alt="google" width="40" height="40" class="mr-4">
                        <h3 class="flex items-center cursor-pointer hover:text-blue-600">Register with Google</h3>
                    </div>
                </div>
            </div>
        </form>
        <script src="/js/eye.js"></script>
    </div>
</div>

<script src="/js/main.js"></script>
<?= $this->endSection(); ?>