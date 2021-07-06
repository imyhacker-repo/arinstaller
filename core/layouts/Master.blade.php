<!DOCTYPE html>
<html lang="en">
<x-head />
<body class="">
    <x-nav-left />
    <div class="main-content">
        <x-nav-top />
        <x-header-top />
        <div class="container-fluid mt--7">
            @yield('content')
        </div>
    </div>
    <x-footer />
</body>
</html>