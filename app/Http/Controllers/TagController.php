<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class TagController extends Controller
{
    #[NoReturn] public function __invoke(Tag $tag)
    {
        return view('components/job-board/results', ['jobs' => $tag->jobs]);
    }
}
