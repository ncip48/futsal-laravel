<?php

namespace App\Providers;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Blade::directive('currency', function ($expression) {
            return "Rp. <?php echo number_format($expression,0,',','.'); ?>";
        });

        Blade::directive('get_status', function ($expression) {
            //status = 0:waiting, 1:sukses, 2:processing, 3:cancel, 4:expired
            switch ($expression) {
                case 0:
                    return 'Menunggu Pembayaran';
                    break;
                case 1:
                    return 'Sukses';
                    break;
                case 2:
                    return 'Sedang Di Proses';
                    break;
                case 3:
                    return 'Dibatalkan';
                    break;
                case 4:
                    return 'Pembayaran Kadaluarsa';
                    break;
                default:
                    break;
            }
        });

        Blade::directive('datetime', function ($expression) {
            $a = "<?php echo ($expression)->format('l, d F Y'); ?>";
            return $a;
            // return Carbon::parse($expression)->translatedFormat('l, d F Y');
        });

        Blade::directive('time', function ($expression) {
            return "<?php echo ($expression)->format('H:i'); ?>";
        });
    }
}
