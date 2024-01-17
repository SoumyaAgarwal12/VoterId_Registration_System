<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>VoterID Registration Form</title>
    <style>
        .main_heading{
            display: flex;
            justify-content: center;
            margin-top: 25px;
        }
        .loginForm{
            margin: 100px;
            padding: 15px;
            margin-top: 42px;
        }
    </style>
  </head>
  <body>
    <h1 class="main_heading">Login</h1>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    @if($errors->any())
        @foreach($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
    @endif
    <form class="loginForm" action="{{ route('login.store') }}" method="post">
        @csrf 
      <div class="form-row">
          <div class="form-group col-md-8">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" name="emailId" id="emailId" placeholder="Email">
          </div>
          <div class="form-group col-md-8">
              <label for="inputPassword4">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password">
          </div>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
  </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>