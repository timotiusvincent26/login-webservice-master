<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="h-screen flex justify-center items-center">
    <div class="w-3/4 bg-white shadow-md">
        <h1 class="font-bold text-xl text-center m-3">RESET PASSWORD</h1>
        <div class="flex justify-center mt-8 mb-8">
            <table class="w-3/4">
                <form action="">
                    <tr>
                        <td class="font-bold w-1/3">E-mail Address:</td>
                        <td><input type="email" name="emailadd" id="emailadd" class="border-gray-300 bg-gray-100 border-2 w-full"></td>
                    </tr>
                </form>
            </table>
        </div>
        <div class="flex justify-center my-12">
            <a href="" class="bg-blue-500 border-blue-700 border-2 text-white font-bold py-1 px-6 rounded-lg hover:bg-blue-700">Send Password Reset Link</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>