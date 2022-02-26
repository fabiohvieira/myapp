<?php

namespace App\Providers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\ServiceProvider;
use Illuminate\Queue\Events\JobProcessing;
use Illuminate\Queue\Events\JobQueued;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        Queue::looping(function () {
            Log::info('teste');
        });


        Queue::before(function (JobProcessing $event) {
            Log::info('Event Job '.$event->job->getJobId());
            //Log::info($event->job);
         //   Log::info('Event Job '.$event->job->payload());
        });
    }
}
