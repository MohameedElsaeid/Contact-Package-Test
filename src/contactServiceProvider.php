<?php

namespace Clueapp\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider {

    public function boot() {
    
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views/','contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/contact.php','contact');
        
        
        
        
        
        $this->publishes([
            __DIR__ . '/config/contact.php' => config_path('contact.php')
        ]);
    
        $this->publishes([
            __DIR__ . '/database/migrations/' => database_path('migrations')
        ]);
        
        $this->publishes([
            __DIR__ . '/views/' => base_path('/resources/views/')
        ]);
    
        $this->publishes([
            __DIR__ . '/Models/Contact.php' => base_path('app/')
        ]);
    
    
    
    
    }
    
    public function register() {
    
    }
}