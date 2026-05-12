<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = \App\Models\Banner::orderBy('order')->get();
        $news = \App\Models\Post::with('category')->where('status', 'published')->latest()->take(3)->get();
        // $programs = \App\Models\Program::latest()->take(4)->get();
        
        return view('public.home', compact('banners', 'news'));
    }
}
