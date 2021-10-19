<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('titre')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
        @include('inc/navbar')

    <div class="container">

           @yield('contenu') 

    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
      <script>
      ClassicEditor
      .create(document.querySelector('#editor'))
      .catch(error=>{
          console.error(error);
      });
</script>
  </body>
</html>