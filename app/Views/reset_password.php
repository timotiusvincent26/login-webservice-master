<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<script src="/js/main.js"></script>
<div class="h-screen flex justify-center items-center self-center">
    <div class="w-2/5 px-12 px-10 bg-white shadow-lg rounded-md">
        <h1 class="font-bold text-xl text-center mt-3 mb-8">RESET PASSWORD</h1>
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="w-full bg-green-100 text-green-500 text-sm text-center mb-4 rounded py-1 hidden" id="alertReset">
                <span><?= session()->getFlashdata('pesan'); ?></span>
            </div>
        <?php endif; ?>
        <form action="/login/validateReset" method="POST">
            <div class="flex flex-wrap w-full">
                <div class="flex items-center text-gray-700 justify-between h-6 mb-7 w-full mt-4">
                    <label for="emailAdd">E-mail Address:</label>
                    <input type="text" name="emailAdd" id="emailAdd" class="border-2 py-2 px-3 border-gray-200 rounded-md flex-none w-72 placeholder-gray-200 text-sm align-middle" placeholder="Type your e-mail address">
                </div>
                <div class="flex justify-end w-full mb-4">
                    <div class="flex justify-start w-72">
                        <input type="submit" value="Send Password Reset Link" class="text-xs text-white font-bold bg-gradient-to-r from-blue-500 to-indigo-500 py-2 px-7 rounded-md cursor-pointer hover:from-blue-700 hover:to-indigo-700" id="reset">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>