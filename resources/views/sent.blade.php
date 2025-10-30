<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Berhasil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-xl w-full max-w-md p-8 border-t-4 border-indigo-600">

            <!-- Header -->
            <div class="text-center">
                <div
                    class="mx-auto mb-4 w-16 h-16 flex items-center justify-center rounded-full bg-indigo-100 text-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2l4-4m5 2a9 9 0 11-18 0a9 9 0 0118 0z" />
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-gray-800">Pendaftaran Berhasil!</h1>
                <p class="text-gray-500 mt-1">Akun kamu sudah terdaftar di sistem kami.</p>
            </div>

            <!-- Content -->
            <div class="mt-6 text-center">
                <h2 class="text-lg font-semibold text-gray-700">
                    Nama Kamu:
                    <span class="text-indigo-600 font-bold">(( $name ))</span>
                </h2>
                <p class="mt-3 text-gray-600">
                    Terima kasih telah mendaftar di aplikasi kami.
                    Silakan klik tombol di bawah ini untuk mengaktifkan akunmu.
                </p>
            </div>

            <!-- Button -->
            <div class="mt-8 text-center">
                <a href="#"
                    class="inline-block px-6 py-3 text-white bg-indigo-600 hover:bg-indigo-700 rounded-lg font-semibold transition">
                    Aktifkan Akun
                </a>
            </div>

            <!-- Footer -->
            <p class="mt-8 text-sm text-gray-400 text-center">
                Jika kamu tidak mendaftar, abaikan email ini.<br>
                © {{ date('Y') }} Aplikasi Kami. Semua Hak Dilindungi.
            </p>
        </div>
    </div>
</body>

</html>
