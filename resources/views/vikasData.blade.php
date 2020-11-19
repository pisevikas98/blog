<!DOCTYPE html>
<html lang="en">
<head>
  <title>dataForm</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container">
  <h2>Vikas Table</h2>
  <a href="{{url('create-vikas')}}" class="btn btn-primary">add details</a>
  <table class="table">
    <thead> 
      <tr>
        <th>Id</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($viki as $vikas)
      <tr>
        <td>{{$vikas->id}}</td>
        <td>{{$vikas->email}}</td>
        <td>{{$vikas->pwd}}</td>
        <td>
          <a href="{{ url('edit_data') }}/{{ $vikas->id }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
          <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>