<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendaftaran Beasiswa</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0d1117; /* Dark background */
            background-image: linear-gradient(135deg, #1f2838 0%, #0d1117 100%);
            min-height: 100vh;
        }
        .card {
            background-color: #161b22;
            border: 1px solid #30363d;
        }
    </style>
</head>
<body>
    <header class="bg-gray-800 shadow-md">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-semibold text-yellow-400 hover:text-yellow-300 transition duration-150">
                Sistem Beasiswa
            </a>
            <nav>
                <a href="{{ route('beasiswa.pilihan') }}" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                    Kembali ke Pilihan
                </a>
            </nav>
        </div>
    </header>

    <main class="py-12 px-4">
        @yield('content')
    </main>
</body>
</html>