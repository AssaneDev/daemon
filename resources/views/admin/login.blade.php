<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="container" >
    <h1> Admin Login Daemon</h1>

    @if ($errors->any())

        @foreach ($errors->all() as $error)
            <li> {{$error}} </li>
        @endforeach
        
    @endif

    @if (Session::has('error'))
        <li> {{ Session::get('error') }} </li>        
    @endif

    @if (Session::has('success'))
        <li> {{ Session::get('success') }} </li>        
    @endif

    <form action="{{route('admin.login_submit')}}" method="post">
        @csrf 
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Mot de pass</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Mot de pass oublier</label>
        </div>
        <button type="submit" class="btn btn-primary">Connexion</button>
      </form>
</body>
</html>