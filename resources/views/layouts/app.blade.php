<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PhotoShow</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.1/css/foundation.css" rel="stylesheet">
    </head>
    <body>
        @include('inc.topbar')
        <br>
        <div class="conatiner">
            <div class="col align-self-center">
                @include('inc.messages')
            </div>
            @yield('content')
        </div>
        
        
       <script src="{{ asset('js/app.js') }}"></script> 
    </body>
</html>

