<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Jobs\TestJob;

class ProjectController extends Controller
{
    public function index(){
        TestJob::dispatch();
        
        return 'Updating now';
    }
}
