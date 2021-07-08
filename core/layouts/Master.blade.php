<!DOCTYPE html>
<html lang="en">
    <!-- 
        =============================================================
        Argon Dashboard Modified Template With Blade Make It Simple.
        Moded By : Arikun - IndoSec 
        Github  : https://github.com/imyhacker
        Fb     : https://fb.me/uhuy.kun
        IG    : https://instagram.com/arku666  
        =============================================================
        Argon Fully Owned By Creative Tim, I'am Only Modified Only And Make A Packages.
    -->
<x-head />
<body class="">
    <x-nav-left />
    <div class="main-content">
        <x-nav-top />
        <x-header-top status="{{ $status }}" />
        <div class="container-fluid mt--7">
            @yield('content')
        </div>
    </div>
    <x-footer />
</body>
</html>