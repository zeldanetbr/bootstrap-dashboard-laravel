<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>


        <!-- Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

        <!-- Custom styles for this template -->
        <style>
            @include('laravel-usp-theme::partials.css')
        </style>
    </head>

    <body>
        @include('laravel-usp-theme::partials.nav')

        <div class="container-fluid">
            <div class="row">
                @include('laravel-usp-theme::partials.sidebar')
                
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                    @yield('content')
                </main>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.pt-BR.min.js"></script>

    </body>
</html>

