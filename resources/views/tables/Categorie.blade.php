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

    <div class="main-panel">
        {{-- Navigation --}}
        @include('partials._nav')
        {{-- End Navigation --}}

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary card-header-icon">
                                <div class="card-icon">
                                    <button class="" data-bs-toggle="modal" data-bs-target="#modalCategorie">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-plus-square" viewBox="0 0 16 16">
                                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                        </svg>
                                    </button>
                                    {{-- Start modal add category --}}
                                    <div class="modal fade" id="modalCategorie" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="/categories" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <!-- Input field for the name -->
                                                        <div class="mb-3">
                                                            <label for="name" class="form-label">Name</label>
                                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary mx-2" data-bs-dismiss="modal">Ajouter</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- End modal add category --}}
                                </div>
                                <h4 class="card-title">Simple Table</h4>
                                @if (session()->has('success'))
                                <p class="text-success">{{ session('success') }} </p>
                                @endif
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Name</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $categorie)
                                            <tr>
                                                <td class="text-center">{{ $categorie->id }}</td>
                                                <td>{{ $categorie->name }}</td>
                                                <td class="td-actions text-right">
                                                    <a href="/updatePage/{{ $categorie->id }}" type="button" class="btn btn-link text-success">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    <button type="button" class="btn btn-link text-danger" data-bs-toggle="modal" data-bs-target="#modalCategorie{{ $categorie->id }}">
                                                        <i class="material-icons">delete</i>
                                                    </button>
                                                  </td>
                                                  {{-- Start modal DELETE category --}}
                                                <td>
                                               <div class="modal fade" id="modalCategorie{{ $categorie->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                 <div class="modal-dialog">
                                                     <div class="modal-content">
                                                         <div class="modal-header">
                                                             <h5 class="modal-title" id="exampleModalLabel">Delete Categorie</h5>
                                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                         <form action="/categories/{{ $categorie->id }}" method="POST">
                                                           @method("DELETE") 
                                                             @csrf
                                                             <div class="modal-body">
                                                                 <!-- Input field for the name -->
                                                                 <div class="mb-3">
                                                                     <h5 class="text-danger"> Are you sure to delete this categorie: {{ $categorie->name }}</h5>
                                                                 </div>
                                                             </div>
                                                             <div class="modal-footer">
                                                                 <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Close</button>
                                                                 <button type="submit" class="btn btn-danger mx-2" data-bs-dismiss="modal">Delete</button>
                                                             </div>
                                                         </form>
                                                     </div>
                                                 </div>
                                             </div>
                                             
                                            </td>
                                            {{-- End modal DELETE category --}}
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $categories->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.Auth._scriptes')

</div>

@endsection
