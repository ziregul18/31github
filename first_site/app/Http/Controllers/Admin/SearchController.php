<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        $subcategories = Subcategory::where('title_ky', 'like', '%' . $query . '%')
            ->orWhere('title_tr', 'like', '%' . $query . '%')
            ->paginate(10);

        return view('admin.index', compact('subcategories'));
    }
}

