<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/bootstrap/app.php';

while (true) {
    $exitCode = Artisan::call('queue:work', [
        '--sleep' => 3,
        '--tries' => 3,
    ]);

    if ($exitCode !== 0) {
        // Log or handle the error as needed
    }
}
