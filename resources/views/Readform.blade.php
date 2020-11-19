<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container">  
         
  <table class="table table-striped table-hover table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Email</th>
        <th>Passsword</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($bapu as $pise)
      <tr>
        <td>{{$pise->id}}</td>
        <td>{{$pise->email}}</td>
        <td>{{$pise->pwd}}</td>
        <td>
          <a href="{{url('editform')}}/{{ $pise->id }}" class="btn btn-pirmary"><i class="fa fa-edit"></i></a>
          <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div>
  <a href="{{url('createform')}}" class="btn btn-info btn-sm">AddData</a>
</div> 
</div>

</body>
</html>
