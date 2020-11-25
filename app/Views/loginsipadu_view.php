<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="h-screen flex justify-center items-center">
    <div class="flex justify-center items-center">
        <form style="width: 470px;" method="POST" action="register/terdaftar" class="bg-gray-200 py-6 rounded-3xl shadow-2xl transform translate-y-32 sm:translate-y-0">
            <?= csrf_field(); ?>
            <img src="/img/logo sipadu.jpg" alt="logo sipadu" class="w-24 mx-auto">
            <h2 class="text-4xl mt-2 -mb-2 text-center">Masukkan Akun SIPADU</h2>
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
            <div class="flex justify-center my-4">
                <input type="submit" class="shadow-2xl block h-10 px-40 sm:px-24 md:px-32 lg:px-40 rounded-3xl text-lg outline-none border-none bg-blue-600 cursor-pointer text-gray-300 duration-500 uppercase hover:bg-blue-700 mx-6" value="Login">
            </div>
            <div class="flex justify-center items-center pt-2">
            </div>
        </form>
        <script src="/js/eye.js"></script>
    </div>
</div>
<script src="/js/main.js"></script>
<?= $this->endSection(); ?>