<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>
            Alumni connect @yield('title')
        </title>

        @include('public.modal')
        @include('public.layouts.assets')

    </head>

    <body id="page-top">

        <!-- Navigation-->
        @include('public.layouts.header')

        <!--Content-->
        @yield('content')
        <!-- Footer-->
        @include('public.layouts.footer')

    </body>
</html>
