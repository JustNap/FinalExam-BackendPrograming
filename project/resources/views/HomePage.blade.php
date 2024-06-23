<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
</head>
<body>
    <h1>Selamat datang di Homepage</h1>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="mt-4 bg-red-500 text-white px-4 py-2 rounded">Logout</button>
    </form>
</body>
</html>