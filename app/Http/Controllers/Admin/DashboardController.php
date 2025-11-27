<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comments;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
    $totalUser = User::count();
    $totalArticles = Article::count();
    $published = Article::where('status','publish')->count();
    $totalCategories = Category::count();
    $pendingComments = Comments::where('status','pending')->count();


    $beritaTerbaru = Article::orderBy('created_at', 'desc')->take(5)->paginate(5);

    $comments = Comments::orderBy('created_at', 'desc')->take(5)->get();

    return view('admin.dashboard', compact('totalUser','totalArticles','published','totalCategories','pendingComments','beritaTerbaru','comments'));
    }
    
}