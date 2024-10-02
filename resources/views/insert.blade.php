<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <form action="insert_data" method="POST">
   @csrf
   <input type="text" value="{{old('name')}}" placeholder="Enter Name" name="name"> <br><br> 
   @error('name')
       <div> {{$message}} </div>
   @enderror
   <input type="email" value="{{old('email')}}" placeholder="Enter Email" name="email"> <br><br> 
   @error('email')
   <div> {{$message}} </div>
   @enderror
   <input type="password" placeholder="Enter Pass" name="password"> <br><br> 
   @error('password')
   <div> {{$message}} </div>   
   @enderror
    <button type="submit">Submit</button>
</form> 
</body>
</html>