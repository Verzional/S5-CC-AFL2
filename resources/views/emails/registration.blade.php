<!DOCTYPE html>
<html lang="id">

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
            <div class="mt-6 bg-gradient-to-br from-indigo-50 to-purple-50 rounded-lg p-6">
                <h2 class="text-lg font-semibold text-gray-700 mb-2">
                    Halo, <span class="text-indigo-600 font-bold">{{ $name }}</span>!
                </h2>
                <p class="text-gray-600 leading-relaxed">
                    Terima kasih telah mendaftar di aplikasi kami.
                    Kami sangat senang Anda bergabung dengan komunitas kami!
                </p>

                @if (isset($email))
                    <div class="mt-4 p-3 bg-white rounded border border-indigo-200">
                        <p class="text-sm text-gray-600">
                            <span class="font-semibold">Email terdaftar:</span>
                            <span class="text-indigo-600">{{ $email }}</span>
                        </p>
                    </div>
                @endif
            </div>

            <!-- Activation Section -->
            <div class="mt-6 text-center">
                <p class="text-gray-600 mb-4">
                    Silakan klik tombol di bawah ini untuk mengaktifkan akunmu dan mulai menggunakan layanan kami.
                </p>
                <a href="#"
                    class="inline-block px-6 py-3 text-white bg-indigo-600 hover:bg-indigo-700 rounded-lg font-semibold transition shadow-md hover:shadow-lg">
                    Aktifkan Akun Sekarang
                </a>
            </div>

            <!-- Info Box -->
            <div class="mt-6 p-4 bg-yellow-50 border-l-4 border-yellow-400 rounded">
                <p class="text-sm text-yellow-800">
                    <strong>Catatan:</strong> Link aktivasi ini akan kadaluarsa dalam 24 jam.
                    Pastikan untuk mengaktifkan akun Anda segera.
                </p>
            </div>

            <!-- Support -->
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Butuh bantuan?
                    <a href="#" class="text-indigo-600 hover:underline font-semibold">Hubungi Support</a>
                </p>
            </div>

            <!-- Footer -->
            <div class="mt-8 pt-6 border-t border-gray-200">
                <p class="text-xs text-gray-400 text-center">
                    Jika kamu tidak mendaftar, abaikan email ini.<br>
                    Email ini dikirim secara otomatis, mohon tidak membalas.<br><br>
                    © {{ date('Y') }} Aplikasi Kami. Semua Hak Dilindungi.
                </p>
            </div>
        </div>
    </div>
</body>

</html>
