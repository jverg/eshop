
<!-- MAIN CONTENT -->

<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Include header -->
        @include('partials._header')
    </head>

    <!-- Include main menu -->
    @include('partials._nav')

    <body>
        <div class="container">

            @include('partials._messages')

            <!-- main content -->
            @yield('content')
            <!-- Include footer -->
            @include('partials._footer')

        </div>

        <!-- Include javascript libraries -->
        @include('partials._javascript')

        @yield('scripts')
    </body>
</html>