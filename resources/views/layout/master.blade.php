<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Project Learn</title>

    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
    <link href="/css/app.css"
          rel="stylesheet">
    <link href="/css/admin.css"
          rel="stylesheet">
</head>

<body>
@include('layout.header')

<main role="main" class="container">
    <div class="row">
        @yield('content')

        @include('layout.aside')

    </div><!-- /.row -->

</main><!-- /.container -->

@include('layout.footer')
</body>
</html>
