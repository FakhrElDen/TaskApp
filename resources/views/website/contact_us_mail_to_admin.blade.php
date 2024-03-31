<!DOCTYPE html>
<html lang="en">
<head>
  <title>sleeker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
    <h2>Contact Us Mail</h2>
    <ul class="list-group">
      <li class="list-group-item">Name:     &nbsp;<span class="badge">{{ $data['name'] }}</span></li>
      <li class="list-group-item">Email:    &nbsp;<span class="badge">{{ $data['email'] }}</span></li>
      <li class="list-group-item">Message:  &nbsp;<span class="badge">{{ $data['message'] }}</span></li>
    </ul>
  </div>

</body>
</html>
