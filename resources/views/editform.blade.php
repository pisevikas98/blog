<!DOCTYPE html>
<html lang="en">
<head>
  <title>VikasForm</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <form action="{{ url('formupdate') }}/{{$data->id}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" value="{{ $data->email }}" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" value="{{ $data->pwd }}" id="pwd" placeholder="Enter password" name="pwd">
    </div> 
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>