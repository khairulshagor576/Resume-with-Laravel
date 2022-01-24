<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Satisfy&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>{{ $title }}</title>
    </head>
    <body>
        <div class="container-fluid bg-dark">
            <div class="row">
                <div class="col-sm-2">
                   @include('include.sidebar') 
                </div>
                <div class="col-sm-10">{{ $content }}</div>
            </div>
        </div>
       <script src="{{ asset('js/all.js') }}"></script>
       <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
       <script src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>