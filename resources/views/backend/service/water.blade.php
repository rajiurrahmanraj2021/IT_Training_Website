@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">Data Tables</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="index.html">Home</a></li>
                       <li><a href="#">get_Involved</a></li>
                       <li class="active">Contact</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title">Contact List</h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">add contact</button>
                               <!-- Modal -->
                               <form id="add-row-form" action="javascript:void(0);">
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">add contact</h4>
                                           </div>
                                           <div class="modal-body">
                                               <div class="form-group">
                                                   <input type="text" id="name-input" class="form-control" placeholder="Name" required>
                                               </div>
                                               <div class="form-group">
                                                   <input type="text" id="position-input" class="form-control" placeholder="bg_cover" required>
                                               </div>
                                               <div class="form-group">
                                                   <input type="number" id="age-input" class="form-control" placeholder="image" required>
                                               </div>
                                               <div class="form-group">
                                                   <input type="text" id="date-input" class="form-control date-picker" placeholder="central_office" required>
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
                               <div class="table-responsive">
                                   <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                           <tr>
                                               <th>Name</th>
                                               <th>bg_cover</th>
                                               <th>image</th>
                                               <th>central_office</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       {{-- <tfoot> --}}
                                           <tr>
                                               <th>Name</th>
                                               <th>Position</th>
                                               <th>Age</th>
                                               <th>Start date</th>
                                               <th>
                                                 <a type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#myEdit">Edit</a>

                                              <div class="modal fade" id="myEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                               <div class="modal-dialog">
                                                   <div class="modal-content">
                                                       <div class="modal-header">
                                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                           <h3 class="modal-title" id="myModalLabel">Modal title</h3>
                                                       </div>
                                                       <div class="modal-body">
                                                           <h4>Lorem Ipsum</h4>
                                                           Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.<br><br><hr>
                                                           <h4>Dolor sit amet</h4>
                                                           Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.<br><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                                       </div>
                                                       <div class="modal-footer">
                                                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                           <button type="button" class="btn btn-success">Save changes</button>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                                 <a href="#" type="button" class="btn btn-danger btn-rounded">Delete</a>
                                               </th>
                                           </tr>

                                       {{-- </tfoot> --}}
                                   </table>
                               </div>
                           </div>
                       </div>
                   </div>
               </div><!-- Row -->
           </div><!-- Main Wrapper -->
           <div class="page-footer">
               <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
           </div>
       </div><!-- Page Inner -->
   </main><!-- Page Content -->
@endsection
