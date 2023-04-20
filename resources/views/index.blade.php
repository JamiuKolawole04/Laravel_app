<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- style sheets linking in Laravel --}}

    {{-- the asset() function looks into the public folder and get its conytents --}}
    <link rel="stylesheet" href={{ asset("css/app.css") }}>
    <title>Document</title>
</head>
<body>

    <h1 class="text-3xl p-2 font-bold">Tailwind sample</h1>
    
</body>
</html>