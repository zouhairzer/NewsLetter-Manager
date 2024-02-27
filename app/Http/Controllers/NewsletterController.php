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
        $newsletters = Newsletter::all();
        return view('tables.News_Letter', ['newsletters' => $newsletters, 'categories' => Category::all()]);
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
        $img = $request->file('image');
        $image_name = $img->getClientOriginalName();
        $image = uniqid() . $image_name;
        $img->move('Uploads/', $image);
        Newsletter::create([
            'title' => $request->title,
            'author' =>$request->author,
            'category_id' => $request->category,
            'content' => $request->content,
            'image' => $image,
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
        if ($request->hasFile("image")) {
            $oldImage = public_path('Uploads/' . $newsletter->image);
            if (file_exists($oldImage)) {
               unlink($oldImage);
            }
            $img = $request->file('image');
            $image_name = $img->getClientOriginalName();
            $image = uniqid() . $image_name;
            $img->move('Uploads/', $image);
            $newsletter->title = $request->title;
            $newsletter->author = $request->author;
            $newsletter->category_id = $request->category;
            $newsletter->content = $request->content;
            $newsletter->image = $image;
            $newsletter->link = $request->link;
            $newsletter->update();
         } else {
            $newsletter->title = $request->title;
            $newsletter->author = $request->author;
            $newsletter->category_id = $request->category;
            $newsletter->content = $request->content;
            $newsletter->link = $request->link;
            $newsletter->update();
         }

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