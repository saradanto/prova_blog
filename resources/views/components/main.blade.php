<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BLOG</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
       @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body id="page-top">

        <x-navbar />
        <!-- Header-->
        <header class="bg-primary bg-dark text-white">
            <div class="container px-4 text-center">
            <h1 class="fw-bolder">Welcome to BLOG</h1>
            <p class="lead">A functional Blog for random purposes</p>

            </div>
        </header>

            <div class="container my-5">
                <div class="row">
                    <div class="col-12">
                        {{$slot}}
                    </div>
                </div>
            </div>


         <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>

    </body>
</html>
