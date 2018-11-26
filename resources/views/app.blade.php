<!DOCTYPE html>
 <html lang="{{ app()->getLocale() }}">
 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>Admin Dashboard</title>
     <!-- Styles -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 </head>
 <body>
     <div id="app"></div>


     <script src="//widget.cloudinary.com/global/all.js" type="text/javascript"></script>
     <script src="{{ asset('js/app.js') }}"></script>
 </body>
 </html>
