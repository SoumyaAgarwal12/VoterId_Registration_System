<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Registration Users</title>
    <style>
        .main_heading{
            display: flex;
            justify-content: center;
            margin-top: 25px;
        }
        .registerForm{
            margin: 100px;
            padding: 15px;
            margin-top: 42px;
        }
    </style>
  </head>
  <body>
    <h1 class="main_heading">All registered Users</h1>
{{-- {{ $allusers }} --}}


<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email Id</th>
        <th scope="col">Created At</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($allusers as $key => $val)
            <tr>
            <th scope="row">{{ $allusers[$key]->id }}</th>
            <td>{{ $allusers[$key]->firstName }}</td>
            <td>{{ $allusers[$key]->lastName }}</td>
            <td>{{ $allusers[$key]->email }}</td>
            <td>{{ $allusers[$key]->created_at }}</td>
          </tr>
        @endforeach
    </tbody>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>