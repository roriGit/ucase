<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCommerce</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <nav class="bg-white shadow p-4 flex justify-between">
        <div>
            <a href="{{ route('products') }}" class="font-bold text-lg">My Store</a>
        </div>
        <div>
            @auth
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-blue-600">Logout</button>
                </form>
            @else
                <a href="{{ route('login.form') }}" class="text-blue-600 mr-4">Login</a>
                <a href="{{ route('register.form') }}" class="text-blue-600">Register</a>
            @endauth
        </div>
    </nav>
    <main class="container mx-auto mt-6">
        @yield('content')
    </main>
</body>

</html>