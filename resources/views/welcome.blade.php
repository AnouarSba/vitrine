<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Laravel</title>
</head>
<body>
    <!-- resources/views/layouts/app.blade.php -->

<nav class="bg-blue-600 p-4">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <a href="/" class="text-white font-bold">My App</a>

            <!-- Logout Button -->
            @auth
                <form method="POST" action="{{ route('logout') }}" class="inline-block">
                    @csrf
                    <button type="submit" class="text-white">Logout</button>
                </form>
            @endauth
        </div>
    </div>
</nav>

    <div class="text-center">
@foreach ($products as $product)
    <div>
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->price }} USD</p>
        <p>{{ $product->category->name }}</p>
    </div>
@endforeach
    </div>
</body>
</html>
