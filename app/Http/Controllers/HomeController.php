<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Post;
use App\Models\Category;
use App\Models\Program;
use App\Models\Gallery;
use App\Models\Document;
use App\Models\Sector;
use App\Models\SectorData;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('order')->get();
        $news = Post::with('category')->where('status', 'published')->latest()->take(3)->get();
        $programs = Program::latest()->take(2)->get();
        $sectors = Sector::with(['data' => function($q) {
            $q->orderBy('year', 'desc')->take(1);
        }])->get();
        $frontStatistics = SectorData::with('sector')
            ->where('show_on_front', true)
            ->orderBy('front_order')
            ->orderByDesc('year')
            ->take(4)
            ->get();
        
        return view('public.home', compact('banners', 'news', 'programs', 'sectors', 'frontStatistics'));
    }

    public function news(Request $request)
    {
        $query = Post::with('category')->where('status', 'published');

        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        if ($request->has('category')) {
            $query->whereHas('category', function($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        $news = $query->latest()->paginate(9);
        $categories = Category::withCount('posts')->get();

        return view('public.news.index', compact('news', 'categories'));
    }

    public function newsDetail($slug)
    {
        $post = Post::with('category')->where('slug', $slug)->firstOrFail();
        $post->increment('views');
        
        $relatedNews = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->where('status', 'published')
            ->latest()
            ->take(3)
            ->get();

        return view('public.news.show', compact('post', 'relatedNews'));
    }

    public function programs()
    {
        $programs = Program::latest()->get();
        return view('public.programs.index', compact('programs'));
    }

    public function gallery()
    {
        $galleries = Gallery::latest()->get();
        return view('public.gallery.index', compact('galleries'));
    }

    public function documents()
    {
        $documents = Document::latest()->get();
        return view('public.documents.index', compact('documents'));
    }

    public function profile()
    {
        return view('public.profile');
    }

    public function vision()
    {
        $vision = \App\Models\Setting::where('key', 'vision')->first()->value ?? '';
        $mission = \App\Models\Setting::where('key', 'mission')->first()->value ?? '';
        return view('public.vision', compact('vision', 'mission'));
    }

    public function contact()
    {
        $settings = \App\Models\Setting::all()->pluck('value', 'key');
        return view('public.contact', compact('settings'));
    }
}
