<?php

namespace App\Http\Routes;

use Dentro\Yalr\BaseRoute;

class DefaultRoute extends BaseRoute
{
    /**
     * Register routes handled by this class.
     *
     * @return void
     */
    public function register(): void
    {
        $this->router->get('/', function () {
            return view('welcome');
        });

        $this->router->get('/login', function () {
            return redirect()->route('auth.login');
        })->name('login');
    }

    public function afterRegister(): void
    {

        menus()
            ->setGroup(
                name: 'profiles_tab',
                group: 'profiles_tab',
                menus: function ($menu) {
                    return $this->menuProfile($menu);
                }
            );
    }

    protected function menuProfile($menu)
    {
        return $menu
            ->addMenu(
                title: __('Overview'),
                routeName: 'app.profile.overview',
                activeRouteName: 'app.profile.overview',
            )/*->addMenu(
                title: __('Setting'),
                routeName: 'app.profile.setting',
                activeRouteName: 'app.profile.setting*',
            )*/;
    }
}
