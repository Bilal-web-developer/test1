<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" href="#">{{__('hello.Home')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">{{__('hello.About')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">{{__('hello.Contact')}}</a>
      </li>
    </ul>
  </div>
</nav>

<br><br>
<form method="post" action="test_submit">
    @csrf
    <select name="select_lang" id="">
        <option value="en">English</option>
        <option value="ur">Urdu</option>
    </select>
    <br><br>

    <button>Save</button>
    
</form>


</body>
</html>
