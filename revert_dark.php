<?php
$dir = __DIR__ . '/resources/views/admin_2';
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));

$replacements = [
    'bg-gray-900' => 'bg-gray-50',
    'bg-gray-800' => 'bg-white',
    'border-gray-700' => 'border-gray-200',
    'border-gray-600' => 'border-gray-300',
    'text-gray-100' => 'text-gray-800',
    'text-gray-200' => 'text-gray-700',
    'text-gray-300' => 'text-gray-600',
    'text-gray-400' => 'text-gray-500',
    'hover:bg-gray-900' => 'hover:bg-gray-50',
    'hover:bg-gray-800' => 'hover:bg-gray-50',
    'text-white transition-colors' => 'text-gray-900 transition-colors',
    'font-medium text-white' => 'font-medium text-gray-900',
    'text-gray-200 hover:bg-gray-900' => 'text-gray-700 hover:bg-gray-50',
    'bg-gray-800 rounded' => 'bg-gray-100 rounded', // fallback for image bg
    'border-gray-700 bg-gray-800' => 'border-gray-200 bg-gray-50', // action button backgrounds
    'hover:bg-blue-50 bg-gray-800' => 'hover:bg-blue-50 bg-white', // action buttons
    'hover:bg-red-50 bg-gray-800' => 'hover:bg-red-50 bg-white', // action buttons
];

foreach ($iterator as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $content = file_get_contents($file->getPathname());
        $newContent = strtr($content, $replacements);
        
        // Custom regex for text-white on labels/links that didn't match exactly
        // e.g., text-white on active sidebar links? Actually sidebar used text-gray-300.
        
        if ($content !== $newContent) {
            file_put_contents($file->getPathname(), $newContent);
            echo "Updated: " . $file->getPathname() . "\n";
        }
    }
}
echo "Done.\n";
