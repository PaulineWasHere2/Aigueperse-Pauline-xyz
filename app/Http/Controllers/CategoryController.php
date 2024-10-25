<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;

class CategoryController extends Controller
{
    /**
     * Show the list of categories.
     */
    public function index(): View
    {
        $categories = Category::all();
        return view('app.categories.index', compact('categories'));
    }

    /**
     * Show the form to create a new category.
     */
    public function show(): View
    {
        return view('app.categories.show');
    }
}
