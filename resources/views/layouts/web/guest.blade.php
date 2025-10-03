{{-- @include('includes.web.guest.head')

<body>
    @yield('content')
</body>

</html> --}}

@include('includes.web.guest.head')
<body>
    @include('includes.web.header')

    @yield('content')

    @include('includes.web.footer')

</body>

</html>

