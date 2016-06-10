<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        @include('shared.navbar')

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('shared.sidebar')
                </div>

                <div class="col-md-6">
                    @yield('content')
                </div>

                <div class="col-md-3">
                    @yield('right')
                </div>
            </div>
        </div>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>