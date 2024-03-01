<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Mail;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
      
      $cherchInput = 1 ;
        return view('dashboard' ,compact('cherchInput'));
        
    }
    public function search(Request $request)
    {
        
        $searchTerm = $request->input('search');
        // dd($request);
        $categoryFilter = $request->input('category'); 

        // $mailsQuery = Mail::query();
        
        
          $categories=Category::where('name', 'like', "%".$searchTerm."%")->simplePaginate(4);
        // $categorie_paginate = Category::latest()->simplePaginate(4);
   
       
        
        // if ($categoryFilter) {
        //     $mailsQuery->whereHas('categories', function ($query) use ($categoryFilter) {
        //         $query->where('name', $categoryFilter);
        //     });
        // }

        // $mails = $mailsQuery->paginate(10); 

        // $categories = Category::all(); 
        $cherchInput = 1;
        return view('tables.Categorie', compact('categories'), compact('cherchInput'));
    }
    
}
