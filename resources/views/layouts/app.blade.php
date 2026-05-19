<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Darah</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gradient-to-br from-gray-100 to-gray-200">

<div class="flex">

    <div class="w-64 h-screen bg-gradient-to-b from-red-800 to-rose-500 text-white p-6 fixed">

        <h1 class="text-4xl font-bold mb-10">
            🩸 Donor Darah
        </h1>

        <ul class="space-y-4">

            <li>
                <a href="/"
                   class="block hover:bg-red-800 p-3 rounded-xl">
                    Dashboard
                </a>
            </li>

            <li>
                <a href="/pendonor"
                   class="block hover:bg-red-800 p-3 rounded-xl">
                    Pendonor
                </a>
            </li>

            <li>
                <a href="/donor"
                   class="block hover:bg-red-800 p-3 rounded-xl">
                    Donor Darah
                </a>
            </li>

            <li>
                <a href="/stok"
                   class="block hover:bg-red-800 p-3 rounded-xl">
                    Stok Darah
                </a>
            </li>

            <li>
                <a href="/laporan"
                   class="block hover:bg-red-800 p-3 rounded-xl">
                    Laporan
                </a>
            </li>

        </ul>

    </div>

    <div class="ml-64 w-full p-10">

        @yield('content')

    </div>

</div>

</body>
</html>