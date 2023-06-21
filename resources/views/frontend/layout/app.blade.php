<!DOCTYPE html>
<html lang="en">

@include('frontend.components.head')

<body>

    @include('frontend.components.nav')

    @include('frontend.components.banner')

    <main class="py-5">
        @yield('content')
    </main>

    @include('frontend.components.footer')
</body>

</html>
