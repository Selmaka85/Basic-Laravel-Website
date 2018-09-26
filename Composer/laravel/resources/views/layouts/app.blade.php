<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acme</title>
    <link rel="stylesheet" href="/css/app.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    @include('inc.navbar')
    @include('inc.showcase')
    <div class="container">
    @if(Request::is('/'))
    
    @endif
    <div class="row">
        <div class="col-md-8 col-lg-8">
           @include('inc.messages')
        </div>
        <div class="col-md-4 col-lg-4">
         @include('inc.sidebar')
        </div>
    </div>
   </div>
   <footer id="footer" class="text-center bg bg-dark">
      <p style="color:white;">Copyright &copy; Teodor Catalin Bitica 2018</p>
    </footer>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>