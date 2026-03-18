<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$services = App\Models\Service::all();
$res = [];
foreach($services as $s) {
    array_push($res, ['id' => $s->id, 'title' => $s->title, 'desc' => substr($s->description, 0, 500)]);
}
echo json_encode($res, JSON_PRETTY_PRINT);
