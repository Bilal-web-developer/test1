<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Email</th>
        <th>password</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($user as $data)
          
      <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->password}}</td>
        <td>
        <form action="delete/{{$data->id}}" method="post">
          @csrf
          <button>Delete</button><br><br>
        </form>
        <a href="update/{{$data->id}}">Update</a><br>
        </td>
        @endforeach    
          
      
    </tbody>
  </table>
</div>

</body>
</html>
