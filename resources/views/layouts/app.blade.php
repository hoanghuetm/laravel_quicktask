<!DOCTYPE html>
<html lang={{ str_replace('_', '-', app()->getLocale()) }}>
<head>
    <title>Laravel</title>

    <!-- CSS And JavaScript -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <link href ="bower_components/bootstrap/dist/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href ="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="bower_components/fontawesome/css/brands.css" rel="stylesheet">
    <link href="bower_components/fontawesome/css/solid.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <nav class="navbar navbar-default">
        <!-- Navbar Contents -->
    </nav>
</div>

@yield('content')
</body>
</html>
