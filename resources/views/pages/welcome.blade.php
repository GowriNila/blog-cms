<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/custom_app.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/remixicon.eot') }}">
    <link href="{{ asset('fonts/remixicon.glyph.json') }}">
    <link href="{{ asset('fonts/remixicon.less') }}">
    <link href="{{ asset('fonts/remixicon.ttf') }}">
    <link href="{{ asset('fonts/remixicon.woff') }}">
    <link href="{{ asset('fonts/remixicon.woff2') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <title>Laravel</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Larravel Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        My Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="jumbotron mt-5">
            <h1 class="display-4">Welcome to My Blog!</h1>
            <p class="lead">Thankyou so much for visiting.</p>
            <hr class="my-4">
            <p> This is my test website built with Laravel. Please, read my popular post!</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
            </p>
        </div>
        <div class="row">
            <div class="col-md-8">
              <div class="post">
                <h2>Post Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi vel repellendus enim aspernatur molestiae nisi culpa animi itaque delectus, perferendis omnis distinctio adipisci dignissimos, saepe sapiente eligendi autem error laudantium...</p>
                <a href="#">Read More</a>
              </div>
              <hr>
              <div class="post">
                <h2>Post Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi vel repellendus enim aspernatur molestiae nisi culpa animi itaque delectus, perferendis omnis distinctio adipisci dignissimos, saepe sapiente eligendi autem error laudantium...</p>
                <a href="#">Read More</a>
              </div>
              <hr>
              <div class="post">
                <h2>Post Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi vel repellendus enim aspernatur molestiae nisi culpa animi itaque delectus, perferendis omnis distinctio adipisci dignissimos, saepe sapiente eligendi autem error laudantium...</p>
                <a href="#">Read More</a>
              </div>
              <hr>
              <div class="post">
                <h2>Post Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi vel repellendus enim aspernatur molestiae nisi culpa animi itaque delectus, perferendis omnis distinctio adipisci dignissimos, saepe sapiente eligendi autem error laudantium...</p>
                <a href="#">Read More</a>
              </div>
              <hr>
              <div class="post">
                <h2>Post Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi vel repellendus enim aspernatur molestiae nisi culpa animi itaque delectus, perferendis omnis distinctio adipisci dignissimos, saepe sapiente eligendi autem error laudantium...</p>
                <a href="#">Read More</a>
              </div>
              <hr>
              <div class="post">
                <h2>Post Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi vel repellendus enim aspernatur molestiae nisi culpa animi itaque delectus, perferendis omnis distinctio adipisci dignissimos, saepe sapiente eligendi autem error laudantium...</p>
                <a href="#">Read More</a>
              </div>
              <hr>
              <div class="post">
                <h2>Post Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi vel repellendus enim aspernatur molestiae nisi culpa animi itaque delectus, perferendis omnis distinctio adipisci dignissimos, saepe sapiente eligendi autem error laudantium...</p>
                <a href="#">Read More</a>
              </div>
            </div>
            <aside class="aside col-md-4">
                <h2>Sidebar</h2>
            </aside>

        </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
