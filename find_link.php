<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$tables = DB::select('SHOW TABLES');
$found = false;
foreach($tables as $table) {
    $tableName = array_values((array)$table)[0];
    $columns = DB::select('SHOW COLUMNS FROM ' . $tableName);
    foreach($columns as $col) {
        if (strpos(strtolower($col->Type), 'text') !== false || strpos(strtolower($col->Type), 'char') !== false) {
            $rows = DB::table($tableName)->where($col->Field, 'LIKE', '%public/clients%')->get();
            foreach($rows as $row) {
                // assume 'id' is standard primary key for simplicity
                if (isset($row->id)) {
                    echo "Found in table $tableName, column {$col->Field}, ID {$row->id} \n";
                    $newText = str_replace('public/clients', 'clients', $row->{$col->Field});
                    DB::table($tableName)->where('id', $row->id)->update([$col->Field => $newText]);
                    echo "Replaced and updated.\n";
                    $found = true;
                }
            }
        }
    }
}
if (!$found) echo "Not found in any database table.\n";
