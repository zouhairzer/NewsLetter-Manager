@extends('partials.HTML_tags')

@section('title', 'News Letters')

@section('content')
</head>
<body class="dark-edition ">

<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>

<div class="wrapper ">
    {{-- ------- sidbare ------------- --}}
    @include('partials._sideBare');
    {{-- ------- end sidbare ------------- --}}
    <div class="main-panel">

        {{-- -------> nav <---------------------- --}}
        @include('partials._nav');
        {{-- -------> end nav <------------------ --}}
        
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary card-header-icon">
                                <button data-bs-toggle="modal" data-bs-target="#modalEmail">
                                    <div class="card-icon text-white">
                                        <i class="material-icons">add</i>
                                    </div>
                                </button>
                                <h4 class="card-title">Emails Table</h4>
                                @if (session()->has('success'))
                                    {{ session('success') }}
                                @endif
                            </div>
                            
                            {{-- Start modal add news letter --}}
                            <div class="modal fade" id="modalEmail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add News Email</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="/emails" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <!-- Input field for the email -->
                                                <div class="mb-3">
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary mx-2" data-bs-dismiss="modal">Ajouter</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- End modal add  news letter --}}

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
                                            @foreach ($emails as $email)
                                            <tr>
                                                <td class="text-center">{{ $email->id }}</td>
                                                <td>{{ $email->email }}</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" class="btn btn-link text-success" data-bs-toggle="modal" data-bs-target="#modalUpdate{{$email->id}}" title="Edit">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button type="button" class="btn btn-link text-danger" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $email->id }}">
                                                        <i class="material-icons">delete</i>
                                                    </button>
                                                </td>

                                                {{-- Start modal update letter --}}
                                                <td>
                                                    <div class="modal fade" id="modalUpdate{{$email->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Update Email</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <form action="/emails/{{$email->id}}" method="POST">
                                                                    @method("PUT")
                                                                    @csrf
                                                                    <div class="modal-body">
                                                                        <!-- Input field for the email -->
                                                                        <div class="mb-3">
                                                                            <input type="email" value="{{$email->email}}" class="form-control" id="email" name="email" placeholder="Enter email">
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-primary mx-2" data-bs-dismiss="modal">Update</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                {{-- End modal update  letter --}}

                                                {{-- Start modal DELETE category --}}
                                                <td>
                                                    <div class="modal fade" id="modalDelete{{ $email->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Delete Categorie</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <form action="/emails/{{ $email->id }}" method="POST">
                                                                    @method("DELETE") 
                                                                    @csrf
                                                                    <div class="modal-body">
                                                                        <!-- Input field for the name -->
                                                                        <div class="mb-3">
                                                                            <h5 class="text-danger"> Are you sure to delete this categorie: {{ $email->email }}</h5>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @include('partials.Auth._scriptes')
@endsection
