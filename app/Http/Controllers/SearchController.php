<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Prestation;
class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Recherche dans les articles de blog et les services
        $posts = Prestation::where('titre', 'like', "%$query%")
                      ->orWhere('description', 'like', "%$query%")
                      ->get();

        $services = Service::where('titre', 'like', "%$query%")
                           ->orWhere('description', 'like', "%$query%")
                           ->get();

        

        return view('/pages/search_results', compact('posts', 'services', 'query'));
    }
}
