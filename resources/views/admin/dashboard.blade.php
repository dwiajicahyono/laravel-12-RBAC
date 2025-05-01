<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="min-h-screen">
        <nav class="bg-gray-800 text-white p-4">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-xl font-bold">Admin Dashboard</h1>
                <div class="flex items-center space-x-4">
                    <a href="/" class="hover:underline">Home</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-red-600 px-4 py-2 rounded hover:bg-red-700">Logout</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container mx-auto p-4">
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-2xl font-bold mb-4">Dashboard Admin</h2>
                <p class="text-gray-700">Selamat datang di panel admin. Disini Anda dapat mengelola semua aspek aplikasi.</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                    <div class="bg-blue-100 p-4 rounded-lg">
                        <h3 class="font-medium text-blue-800">Total Users</h3>
                        <p class="text-2xl font-bold">120</p>
                    </div>

                    <div class="bg-green-100 p-4 rounded-lg">
                        <h3 class="font-medium text-green-800">Total Transaksi</h3>
                        <p class="text-2xl font-bold">450</p>
                    </div>

                    <div class="bg-purple-100 p-4 rounded-lg">
                        <h3 class="font-medium text-purple-800">Total Pendapatan</h3>
                        <p class="text-2xl font-bold">Rp 45.500.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>