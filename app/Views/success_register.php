<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="h-screen flex justify-center items-center">
    <div class="bg-white w-96 shadow-md">
        <div>
            <div class="flex justify-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-36 text-green-500">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
            </div>
            <h2 class="font-bold text-center mx-3 text-lg">AKUN ANDA BERHASIL TERDAFTAR,</h2>
            <h2 class="font-bold text-center mx-3 text-lg">KLIK LOGIN UNTUK MELANJUTKAN</h2>
            <div class="flex justify-center m-8">
                <a href="/login" class="bg-green-500 rounded-md px-6 text-white font-bold py-1 border-gray-100 hover:bg-green-700">Login</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>