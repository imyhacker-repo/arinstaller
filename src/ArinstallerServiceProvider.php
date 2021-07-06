<?php
namespace Arikun\Arinstaller;

use Illuminate\Support\ServiceProvider;

class ArinstallerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            // CONTROLLER
            __DIR__.'/../core/Controllers/HomeController.php' => app_path('Http/Controllers/HomeController.php'),

            // LAYOUTS
            __DIR__.'/../core/layouts/app.blade.php' => resource_path('views/layouts/app.blade.php'),
            __DIR__.'/../core/layouts/Master.blade.php' => resource_path('views/layouts/Master.blade.php'),

            // DASHBOARD
            __DIR__.'/../core/Dashboard/index.blade.php' => resource_path('views/Dashboard/index.blade.php'), 

            // COMPONENT
            __DIR__.'/../core/components/card.blade.php' => resource_path('views/components/card.blade.php'),
            __DIR__.'/../core/components/footer-page.blade.php' => resource_path('views/components/footer-page.blade.php'),
            __DIR__.'/../core/components/footer.blade.php' => resource_path('views/components/footer.blade.php'),
            __DIR__.'/../core/components/head.blade.php' => resource_path('views/components/head.blade.php'),
            __DIR__.'/../core/components/header-top.blade.php' => resource_path('views/components/header-top.blade.php'),
            __DIR__.'/../core/components/nav-left.blade.php' => resource_path('views/components/nav-left.blade.php'),
            __DIR__.'/../core/components/nav-top.blade.php' => resource_path('views/components/nav-top.blade.php'),
        ]);
    }
    public function register()
    {
        # code...
    }
}



?>