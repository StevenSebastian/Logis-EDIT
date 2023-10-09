@include('template.backend.sidebar')
@include('template.backend.navbar')
<div class="container-fluid py-4">
    @yield('content')
</div>
@include('template.backend.footer')