<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Http\Requests\StoreNewsletterRequest;
use App\Http\Requests\UpdateNewsletterRequest;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newsletters = DB::table('newsletters')
                    ->join('categories', 'categories.id', '=', 'newsletters.category_id')
                    ->select('categories.name as namecategory', 'newsletters.*')
                    ->get();
        $cherchInput=0;
        
        return view('tables.News_Letter', ['newsletters' => $newsletters, 'categories' => Category::all()] , compact('cherchInput'));
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
        # delete the old image 

        if ($request->hasFile("image")) {
            $oldImage = public_path('Uploads/' . $newsletter->image);
            if (file_exists($oldImage)) {
               unlink($oldImage);
            }

            # move the image into folder Uploads 

            $img = $request->file('image');
            $image_name = $img->getClientOriginalName();
            $image = uniqid() . $image_name;
            $img->move('Uploads/', $image);

            # insert the data

            $newsletter->title = $request->title;
            $newsletter->author = $request->author;
            $newsletter->category_id = $request->category;
            $newsletter->content = $request->content;
            $newsletter->image = $image;
            $newsletter->link = $request->link;
            $newsletter->update();
         } else {

            # the image if not existe in the folder will be insert the data normale 

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


    public function  searchbycategory(Request $request){
        $category = $request->input('category');
        if($category == null){
            return redirect('/newsletters');
        }

        $newsletters = DB::table('newsletters')
                    ->join('categories', 'categories.id', '=', 'newsletters.category_id')
                    ->select('categories.name as namecategory', 'newsletters.*')
                    ->where('newsletters.category_id' ,$category)
                    ->get();

       $cherchInput= 0;
        return view('tables.News_Letter', ['newsletters' => $newsletters,
                                'categories' => Category::all()] , 
                                compact('cherchInput'));
    }
}