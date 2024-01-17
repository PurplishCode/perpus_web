<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDR | Admin Dashboard</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    @if (session("succesful"))
        <div class="text-black">Hi! {{ session("succesful") }}<div>

    @endif
</body>
</html>