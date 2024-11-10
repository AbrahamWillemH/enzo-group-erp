<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Hello, {{ auth()->user()->name }} </h1>
    <p>This is the user dashboard page, accessible to regular users.</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
    <h2></h2>
</body>
</html>
