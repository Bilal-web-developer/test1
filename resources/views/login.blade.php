<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="login_check" method="POST">
        @csrf
        <input type="text" required name="email" placeholder="Enter Email"><br><br>
        @error('email')
        <div>{{$message}}</div>
        @enderror
        <input type="text" required name="password" placeholder="Enter password"><br><br>
            @error('password')
                <div>{{$message}}</div>
            @enderror
        <button type="submit">login</button>
        <a href='forget'>forget password</a>
    </form>
</body>
</html>