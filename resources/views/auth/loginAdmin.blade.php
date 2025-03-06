<!DOCTYPE html>
<html lang="en">
<head>
    @if (session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
    @endif
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center items-center min-h-screen bg-blue-500">

<div class="bg-white p-10 rounded-lg shadow-lg text-center w-full max-w-md">
    <h3 class="text-2xl font-semibold mb-4">ADMIN LOGIN</h3>
    
    <!-- Logo -->
    <img src="/img/logo.png" alt="Logo" class="w-44 mx-auto mb-5">
    
    <!-- Form -->
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-4">
            <input type="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg text-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Email" required>
        </div>
        <div class="mb-4">
            <input type="password" name="password" class="w-full p-3 border border-gray-300 rounded-lg text-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Password" required>
        </div>
        <button type="submit" 
            class="w-full bg-blue-500 text-white font-semibold py-3 rounded-lg transition 
                   hover:bg-blue-600 active:bg-white active:text-blue-500">
            LOGIN
        </button>
    </form>

    <p class="mt-4 text-sm"><a href="{{ route('forgotPasswordAdminForm') }}"class="text-blue-500 hover:underline">Forgot password?</a></p>
</div>

</body>
</html>
