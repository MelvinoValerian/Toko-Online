<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {
                colors: {
                    primary: {
                        "50": "#f9fafb",
                        "100": "#f3f4f6",
                        "200": "#e5e7eb",
                        "300": "#d1d5db",
                        "400": "#9ca3af",
                        "500": "#6b7280",
                        "600": "#4b5563",
                        "700": "#374151",
                        "800": "#1f2937",
                        "900": "#111827"
                    }
                },
                fontFamily: {
                    'sans': ['Inter', 'system-ui', 'sans-serif']
                }
            }
        }
    }
    </script>
</head>

<body class="bg-gray-100 dark:bg-gray-900 min-h-screen flex items-center justify-center">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div
            class="w-full bg-white rounded-lg shadow-lg dark:border dark:border-gray-700 sm:max-w-md xl:p-0 dark:bg-gray-800">
            <div class="p-6 space-y-6 sm:p-8">
                <h1 class="text-2xl font-bold leading-tight tracking-tight text-gray-800 md:text-3xl dark:text-white">
                    Masuk ke Akun Anda
                </h1>
                <form class="space-y-6" action="proses_login.php" method="post">
                    <div>
                        <label for="username"
                            class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Username</label>
                        <input type="text" name="username" id="username"
                            class="w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Masukkan username Anda" required>
                    </div>
                    <div>
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                        <input type="password" name="password" id="password"
                            class="w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            placeholder="••••••••" required>
                    </div>
                    <button type="submit" name="login"
                        class="w-full text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-900 transition duration-300 ease-in-out transform hover:scale-105">
                        Masuk
                    </button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Belum punya akun? <a href="tambah_pelanggan.php"
                            class="font-medium text-gray-600 hover:underline dark:text-gray-300">Daftar
                            sekarang</a>
                    </p>
                    <!-- Tombol untuk Login sebagai Petugas -->
                    <a href="login_petugas.php"
                        class="w-full text-center block text-gray-600 bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-gray-400 dark:focus:ring-gray-900 transition duration-300 ease-in-out transform hover:scale-105">
                        Login sebagai Petugas
                    </a>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional Bootstrap JS (Jika dibutuhkan) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>