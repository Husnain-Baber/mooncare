<?php

namespace App\Http\Controllers;

class BranchController extends Controller
{
    public function butterworth()
    {
        $page = collect(config('branches.butterworth'))->firstWhere('slug', 'butterworth');

        abort_unless($page, 404);

        return view('butterworth.index', [
            'page' => $page,
            'services' => config('services-pages.pages'),
        ]);
    }
}
