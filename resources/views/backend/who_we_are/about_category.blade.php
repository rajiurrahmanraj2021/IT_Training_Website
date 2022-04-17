@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">aboutcategory</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="{{ url('home') }}">Dashboard</a></li>
                       <li><a href="#">Who are you</a></li>
                       <li class="active">add about Category</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title"> Add aboutcategory </h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add aboutcategory</button>
                               <!-- Modal -->
                               @if(session('success_message'))
                                 <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Good! </strong> {{ session('success_message') }}
                                  </div>
                              @endif

                               @if(session('message'))
                                 <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Good! </strong> {{ session('message') }}
                                  </div>
                              @endif
                               <form  action="{{ url('category/about/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">add aboutcategory</h4>
                                           </div>
                                           <div class="modal-body">
                                             <div class="form-group">
                                               <label for=""> Category Name </label>
                                                 <input type="text" id="name-input" class="form-control @error('category_name') is-invalid @enderror" name="category_name" placeholder="enter your programme category" value="{{ old('category_name') }}">
                                                   @error('category_name')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                             </div>
                                           </div>
                                           <div class="modal-footer">
                                               <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                               <button type="submit" id="add-row" class="btn btn-success">Add</button>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               </form>
                               <div class="table-responsive" style=" margin-top: 50px; padding: 0px 50px;">
                                 <h2 style="color:red; margin-bottom:30px; text-align:center">View Category List</h2>
                                   <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                           <tr>
                                               <th>Serial No.</th>
                                               <th>Category Name</th>
                                               <th>created_at</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>


                                       @forelse($about_categories as  $about_category)
                                         <tr>
                                             <td> {{ $about_category->id }}</td>
                                             <td>{{ $about_category->category_name }}</td>
                                             <th>{{ $about_category->created_at->format('d-F-Y  h:i:s A') }}</th>
                                             <th>
                                               <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{{ $about_category->id }}">Edit</a>

                                            <div class="modal fade" id="{{ $about_category->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                         <h3 class="modal-title" id="myModalLabel">Edit about Category</h3>
                                                     </div>
                                                     <div class="modal-body">
                                                       <form action="{{ url('category/about/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                         @csrf
                                                         <input type="hidden" name="category_id" value="{{ $about_category->id }}">
                                                         <div class="form-group">
                                                           <label for=""> Category Name </label>
                                                             <input type="text" id="name-input" class="form-control @error('category_name') is-invalid @enderror" name="category_name" placeholder="enter your news category" value="{{ $about_category->category_name }}">
                                                               @error('category_name')
                                                                  <span class="invalid-feedback" role="alert">
                                                                      <strong>{{ $message }}</strong>
                                                                  </span>
                                                              @enderror
                                                         </div>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                         <button type="submit" class="btn btn-success">Save changes</button>
                                                     </div>
                                                  </form>
                                                 </div>
                                             </div>
                                         </div>
                                               <a class="btn btn-danger btn-sm" href="{{ url('category/about/delete') }}/{{ $about_category->id }}"  onclick="return confirm('are you sure delete product [{{ $about_category->category_name }}]')">Delete</a>
                                             </th>
                                         </tr>
                                       @empty
                                         <tr class="text-center text-danger">
                                           <td colspan="4"> No Data Available</td>
                                         </tr>
                                       @endforelse


@endsection
