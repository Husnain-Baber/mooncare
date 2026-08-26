<?php

namespace App\Http\Controllers;

class GalleryController extends Controller
{
    /**
     * Show every photograph in public/assets/images/gallery/.
     * Adding or removing files there needs no template edit.
     */
    public function index()
    {
        $dir = public_path('assets/images/gallery');

        $files = glob($dir . '/*') ?: [];
        $files = array_values(array_filter($files, function ($file) {
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

            return in_array($ext, ['jpg', 'jpeg', 'png', 'webp'], true);
        }));

        usort($files, function ($a, $b) {
            $num = fn ($f) => (int) preg_replace('/\D/', '', pathinfo($f, PATHINFO_FILENAME));

            return $num($a) <=> $num($b);
        });

        $items = array_map(function ($file) {
            return ['url' => asset('assets/images/gallery/' . basename($file))];
        }, $files);

        return view('gallery', ['items' => $items]);
    }
}
