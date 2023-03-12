<html lang="en">
@include('frontend.layouts.head')
@yield('css')
<body>
    @if(Request::route()->getName() != 'login' && Request::route()->getName() != 'register')
        @include('frontend.layouts.header')
    @endif
        @yield('content')
    @if(Request::route()->getName() != 'login' && Request::route()->getName() != 'register')
        @include('frontend.layouts.footer')
    @endif
    @yield('js')
    @livewireScripts
</body>
</html>