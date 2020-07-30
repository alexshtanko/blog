<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <link rel="stylesheet" href="/style/bootstrap.min.css">

        <link rel="stylesheet" href="/style/style.css">

        
    </head>

    <body>
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <a href="/">Home</a> |
                        <a href="/articles">Article</a> |
                        <a href="/contact">Contact</a> |
                        @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/home') }}">Home</a>
                                @else
                                    <a href="{{ route('login') }}">Login</a> |

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                            
                        @endif
                    </div>    
                </div>    
            </div>
        </header>

        <main class="content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @yield('content')
                    </div>    
                </div>    
            </div>
        </main>

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