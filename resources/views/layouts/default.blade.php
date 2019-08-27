<!doctype html>
<html>

<head>
    @include('includes.head')
</head>

<body class="sidebar-pinned">
    <aside class="admin-sidebar">
        @include('includes.sidebar-brand')
        @include('includes.sidebar')
    </aside>
    <main class="admin-main">

        <header class="admin-header">
            @include('includes.header')
        </header>
        <section class="admin-content">
            <div class="bg-dark">
                <div class="container  m-b-30">
                    @yield('content')
                </div>
            </div>

            @include('includes.footer')

        </section>

    </main>

<script src='{{ URL::asset('assets/js/app.js') }}'></script>

</body>
</html>
