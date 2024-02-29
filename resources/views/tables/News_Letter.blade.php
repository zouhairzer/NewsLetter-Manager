@extends('partials.HTML_tags')

@section('title', 'News Letters')

@section('content')
</head>
<body class="dark-edition ">


<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

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
                <button data-bs-toggle="modal" data-bs-target="#modalCategorie">
                  <div class="card-icon text-white">
                    <i class="material-icons">add</i>
                  </div>
                </button>
                  <h4 class="card-title">News Letter Table</h4>
                  @if (session()->has('success'))
                     <p class="text-success">{{session('success')}}</p> 
                  @endif
              </div>
                {{-- Start modal add news letter --}}
                <div class="modal fade" id="modalCategorie" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Add News Letter</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form action="/newsletters" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <!-- Input field for the image file -->
                                <div class="mb-3">
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                                <!-- Input field for the title -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                                </div>
                                <!-- Input field for the author -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="author" name="author" placeholder="Enter author">
                                </div>
                                <!-- Select field for category options -->
                                <div class="mb-3">
                                    <select class="form-select w-100 h5 bg-primary border-0 rounded p-2" id="category" name="category">
                                        <!-- Add options here dynamically based on your categories -->
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <!-- Textarea field for content -->
                                <div class="mb-3">
                                    <textarea class="form-control border rounded border-primary" id="content" name="content" rows="3" placeholder="Enter content"></textarea>
                                </div>
                                <!-- Input field for link -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="link" name="link" placeholder="Enter link">
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
              {{-- End modal add  news letter --}}
          <div class="card-body">
            <div class="">
              <div class="row">
             
                @foreach ($newsletters as $newsletter)
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-body">
                      <img class="w-100" src="/Uploads/{{$newsletter->image}}" alt="">
                      <h5 class="card-title">Title: {{$newsletter->title}}</h5>
                      <p class="card-text">Author: {{$newsletter->author}}</p>
                      <p class="card-text">Categorie: {{$newsletter->category->name}}</p>
                      <a class="card-text text-center text-decoration">link: {{$newsletter->link}}</a>
                      <div class="text-right">
                        <button type="button" class="btn btn-link text-success" data-bs-toggle="modal" data-bs-target="#modalnews{{$newsletter->id}}" title="Edit">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" class="btn btn-link text-danger" data-bs-toggle="modal" data-bs-target="#modalDelete{{$newsletter->id}}" title="Delete">
                        <i class="material-icons">delete</i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- Start modal add news letter --}}
                <div>
                <div class="modal fade" id="modalnews{{$newsletter->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Add News Letter</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form action="/newsletters/{{$newsletter->id}}" method="POST" enctype="multipart/form-data">
                            @method("PUT")
                            @csrf
                            <div class="modal-body">
                                <!-- Input field for the image file -->
                                <div class="mb-3">
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                                <!-- Input field for the title -->
                                <div class="mb-3">
                                    <input type="text" value="{{$newsletter->title}}" class="form-control" id="title" name="title" placeholder="Enter title">
                                </div>
                                <!-- Input field for the author -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" value="{{$newsletter->author}}" id="author" name="author" placeholder="Enter author">
                                </div>
                                <!-- Select field for category options -->
                                <div class="mb-3">
                                    <select class="form-select w-100 h5 bg-primary border-0 rounded p-2" id="category" name="category">
                                        <!-- Add options here dynamically based on your categories -->
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <!-- Textarea field for content -->
                                <div class="mb-3">
                                    <textarea class="form-control border rounded border-primary" id="content" value="{{$newsletter->content}}" name="content" rows="3" placeholder="Enter content"></textarea>
                                </div>
                                <!-- Input field for link -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="link" name="link" placeholder="Enter link">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary mx-2" data-bs-dismiss="modal">Update</button>
                            </div>
                        </form>
                        
                        
                      </div>
                  </div>
              </div>
            </div>
            {{-- End modal add  news letter --}}
                  {{-- Start modal DELETE news letters --}}
                  <td>
                    <div class="modal fade" id="modalDelete{{$newsletter->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Delete News Letter</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form action="/newsletters/{{ $newsletter->id }}" method="POST">
                                @method("DELETE") 
                                  @csrf
                                  <div class="modal-body">
                                      <!-- Input field for the name -->
                                      <div class="mb-3">
                                          <h5 class="text-danger"> Are you sure to delete this News Letter: {{ $newsletter->title }}</h5>
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
                 {{-- End modal DELETE news letters --}}
                @endforeach
              </div>
              
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      </div>
@include('partials.Auth._scriptes')

@endsection
