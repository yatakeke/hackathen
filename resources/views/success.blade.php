<!doctype html>
<html lang='ja'>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HackaThen</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">


    </head>
    <body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
      <div class="text-center">success!!!</div>
      <div class="text-center">your app URL is : <a href {{ $details->web_url }}>{{ $details->web_url }}</a></div>
    </div>
    @endsection

    </body>
</html>
