@extends('partials.HTML_tags')

@section('title', 'Categories')

@section('content')

<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>

<div class="wrapper">
    {{-- Sidebar --}}
    @include('partials._sideBare')
    {{-- End Sidebar --}}

    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <form action="/categories/{{$categorie->id}}" method="POST" class="w-50"> 
            @method("PUT")
            @csrf
            <div class="modal-body">
                <!-- Input field for the name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" value="{{$categorie->name}}" id="name" name="name" placeholder="Enter name">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary mx-2" data-bs-dismiss="modal">Ajouter</button>
            </div>
        </form>
    </div>

    @include('partials.Auth._scriptes')

</div>

@endsection
