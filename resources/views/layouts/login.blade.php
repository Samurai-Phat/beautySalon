<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>

<body class="jumbo-page">

<main class="admin-main  ">
    <div class="container-fluid">
        @yield('content')
    </div>
</main>

<script src='{{ URL::asset('assets/js/app.js') }}'></script>
</body>
</html>
