<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('email')}}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Enter Email"><br><br>
        <button>Send</button>
    </form>
</body>
</html>