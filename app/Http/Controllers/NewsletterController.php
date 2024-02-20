<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Http\Requests\StoreNewsletterRequest;
use App\Http\Requests\UpdateNewsletterRequest;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newsletters = DB::table('newsletters')
            ->join('categories', 'newsletters.category', '=', 'categories.id')
            ->select('newsletters.*', 'contacts.phone')
            ->get();
        return view('newsletters.index', ['newsletters' => $newsletters, 'categories' => Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsletterRequest $request)
    {
        Newsletter::create([
            'title' => $request->title,
            'author' =>$request->author,
            'category' => $request->category,
            'content' => $request->content,
            'image' => $request->image,
            'link' => $request->link
        ]);
        return back()->with('success', 'Newsletter created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Newsletter $newsletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsletterRequest $request, Newsletter $newsletter)
    {
        $newsletter->title = $request->title;
        $newsletter->author = $request->author;
        $newsletter->category = $request->category;
        $newsletter->content = $request->content;
        $newsletter->image = $request->image;
        $newsletter->link = $request->link;
        $newsletter->update();
        return back()->with('success', 'Newsletter updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Newsletter $newsletter)
    {
        $newsletter->findOrFail($newsletter->id)->delete();
        return back()->with('success', 'Newsletter deleted successfully');
    }
}
