<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>

    <body>
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <a href="/">Home</a> |
                        <a href="/articles">Article</a> |
                        <a href="/contact">Contact</a>
                    </div>    
                </div>    
            </div>
        </header>

        <main class="content">@yield('content')</main>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        Footer
                    </div>    
                </div>    
            </div>
        </footer>
    </body>

</html>