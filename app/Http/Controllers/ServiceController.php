<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    /**
     * Render one of the 10 service pages from config/services-pages.php.
     * Unknown slugs get a 404.
     */
    public function show(string $service)
    {
        $pages = config('services-pages.pages');
        $page = collect($pages)->firstWhere('slug', $service);

        abort_unless($page, 404);

        return view('services.show', [
            'page' => $page,
            'features' => config('services-pages.features'),
            'why' => config('services-pages.why'),
        ]);
    }
}
