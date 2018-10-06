<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>El blog de Maria</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="/css/blog.css" rel="stylesheet">
  </head>

  <body>

@include('layouts.header')

<div class="container">
  
  <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        
        <div class="col-md-6 px-0">
          
          <h1 class="display-4 font-italic">El blog de Maria</h1>
       
        </div>

  </div>

</div>
 
<main role="main" class="container">
  <div class="row"> 

    @yield('content')
    @include('layouts.about')  

  </div>
</main>   
    

@include('layouts.footer')
  </body>
</html>
