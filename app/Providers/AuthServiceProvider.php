<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\UserAddress;
use App\Policies\UserAddressPolicy;
use App\Models\Order;
use App\Policies\OrderPolicy;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        UserAddress::class => UserAddressPolicy::class,
        Order::class       => OrderPolicy::class,
    ];
   
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
