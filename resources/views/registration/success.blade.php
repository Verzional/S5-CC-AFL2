<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Berhasil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-green-50 via-white to-emerald-50 font-sans">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md p-8 border-t-4 border-green-600">

            <!-- Success Icon -->
            <div class="text-center">
                <div
                    class="mx-auto mb-6 w-20 h-20 flex items-center justify-center rounded-full bg-green-100 text-green-600 animate-bounce">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2l4-4m6 2a9 9 0 11-18 0a9 9 0 0118 0z" />
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-gray-800">Pendaftaran Berhasil!</h1>
                <p class="text-gray-500 mt-3 text-lg">Akun Anda telah berhasil dibuat</p>
            </div>

            <!-- Success Message -->
            @if (session('success'))
                <div class="mt-6 p-4 bg-green-50 border border-green-200 rounded-lg">
                    <p class="text-green-800 text-center font-medium">{{ session('success') }}</p>
                </div>
            @endif

            <!-- Information Box -->
            <div class="mt-8 p-6 bg-blue-50 border-l-4 border-blue-500 rounded-lg">
                <h3 class="font-semibold text-blue-900 mb-2 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Langkah Selanjutnya
                </h3>
                <ul class="text-blue-800 text-sm space-y-2 mt-3">
                    <li class="flex items-start">
                        <span class="mr-2">✓</span>
                        <span>Email konfirmasi telah dikirim ke alamat email Anda</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">✓</span>
                        <span>Silakan periksa inbox atau folder spam</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">✓</span>
                        <span>Klik tautan aktivasi untuk mengaktifkan akun</span>
                    </li>
                </ul>
            </div>

            <!-- Action Buttons -->
            <div class="mt-8 space-y-3">
                <a href="/"
                    class="block w-full py-3 px-6 text-center text-white bg-indigo-600 hover:bg-indigo-700 rounded-lg font-semibold shadow-md hover:shadow-lg transition">
                    Kembali ke Beranda
                </a>
                <a href="#"
                    class="block w-full py-3 px-6 text-center text-indigo-600 border-2 border-indigo-600 hover:bg-indigo-50 rounded-lg font-semibold transition">
                    Masuk ke Akun
                </a>
            </div>

            <!-- Footer -->
            <p class="mt-8 text-xs text-gray-400 text-center">
                Tidak menerima email? <a href="#" class="text-indigo-600 hover:underline">Kirim ulang</a><br>
                © {{ date('Y') }} Aplikasi Kami. Semua Hak Dilindungi.
            </p>
        </div>
    </div>
</body>

</html>
