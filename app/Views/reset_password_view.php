<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<script src="/js/main.js"></script>
<div class="h-screen flex justify-center items-center self-center">
    <div class="w-2/5 px-12 px-10 bg-white shadow-lg rounded-md">
        <h1 class="font-bold text-xl text-center mt-3 mb-8">RESET PASSWORD</h1>
        <form action="/login/resetpassword" method="POST">
            <div class="flex flex-wrap w-full">
                <div class="flex items-center text-gray-700 justify-between h-6 mb-7 w-full mt-4">
                    <label for="emailAdd">E-mail Address:</label>
                    <input type="text" name="emailAdd" id="emailAdd" class="border-2 py-2 px-3 border-gray-200 rounded-md flex-none w-72 placeholder-gray-200 text-sm align-middle" placeholder="Type your e-mail address">
                </div>
                <div class="flex items-center text-gray-700 justify-between h-6 mb-7 w-full mt-4">
                    <label for="newpassword">New Password:</label>
                    <input type="password" name="newpassword" id="newpassword" class="border-2 py-2 px-3 border-gray-200 rounded-md flex-none w-72 placeholder-gray-200 text-sm align-middle" placeholder="Type your password">
                </div>
                <span class="text-red-700 ml-8 inline-block">
                    <?php if (isset($validation)) {
                        echo $validation->getError('password');
                    } ?>
                </span>
                <div class="flex items-center text-gray-700 justify-between h-6 mb-7 w-full mt-4">
                    <label for="confirmpassword">Confirm Password:</label>
                    <input type="password" name="confirmpassword" id="confirmpassword" class="border-2 py-2 px-3 border-gray-200 rounded-md flex-none w-72 placeholder-gray-200 text-sm align-middle" placeholder="Type confirmation password">
                </div>
                <span class="text-red-700 ml-8 inline-block">
                    <?php if (isset($validation)) {
                        echo $validation->getError('password');
                    } ?>
                </span>
                <div class="flex justify-end w-full mb-4">
                    <div class="flex justify-start w-72">
                        <input type="submit" value="Reset Password" class="text-xs text-white font-bold bg-gradient-to-r from-blue-500 to-indigo-500 py-2 px-7 rounded-md cursor-pointer hover:from-blue-700 hover:to-indigo-700" id="resetpassword">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>