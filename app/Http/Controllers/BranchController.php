<?php

namespace App\Http\Controllers;

class BranchController extends Controller
{
    // public function butterworth()
    // {
    //     return view('butterworth.index');
    // }
    
        public function butterworth()
    {
        $branch = config('branches.butterworth');
        $page = collect($branch)->firstWhere('slug', 'butterworth');

        abort_unless($page, 404);

        return view('butterworth.index', [
            'page' => $page,
            'features' => config('services-pages.features'),
            'why' => config('services-pages.why'),
        ]);
    }
}
