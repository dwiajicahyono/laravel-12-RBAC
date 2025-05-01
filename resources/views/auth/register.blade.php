<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen py-12">
    <div class="max-w-md mx-auto px-4">
        <div class="bg-white p-8 rounded-lg shadow-md">
            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold text-gray-800">Registrasi Akun</h1>
                <p class="text-gray-500">Silakan isi form berikut untuk mendaftar</p>
            </div>

            @if(session('error'))
                <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf
                
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-medium mb-1">Nama Lengkap</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-medium mb-1">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-medium mb-1">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700 text-sm font-medium mb-1">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>

                <div class="mb-6">
                    <label for="role" class="block text-gray-700 text-sm font-medium mb-1">Daftar Sebagai</label>
                    <select id="role" name="role" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        <option value="">Pilih Tipe Akun</option>
                        <option value="enduser" {{ old('role') == 'enduser' ? 'selected' : '' }}>Pengguna</option>
                        <option value="pengepul" {{ old('role') == 'pengepul' ? 'selected' : '' }}>Pengepul</option>
                        <option value="pabrik" {{ old('role') == 'pabrik' ? 'selected' : '' }}>Pabrik</option>
                    </select>
                    @error('role')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 mt-6">
                    Daftar Sekarang
                </button>
            </form>

            <div class="mt-6 text-center text-sm">
                <p class="text-gray-600">
                    Sudah memiliki akun? <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login disini</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>