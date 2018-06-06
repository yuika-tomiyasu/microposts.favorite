<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
     public function store(Request $request, $id)
    {
        \Auth::user()->favorite($id);
        return redirect('/');
    }
    
      public function destroy($id)
    {
        \Auth::user()->unfavorite($id);
        return redirect()->back();
    }
}
