@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header"> Home Page </h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="{{ url('home') }}"> Dashboard </a></li>
                       <li><a href="#"> Our services</a></li>
                       <li class="active"> Add all services </li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title"> Add All Services </h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal"> Add Service Category </button>
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal2"> Add Service Details </button>
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
                               <form  action="{{ url('wts/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel"> Add Service Category </h4>
                                           </div>
                                           <div class="modal-body">

                                               <div class="form-group">
                                                  <label for=""> Category_name <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control" name="category_name" required>
                                               </div>
                                           </div>
                                           <div class="modal-footer">
                                               <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                               <button type="submit" id="add-row" class="btn btn-success">Add </button>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               </form>


                               {{-- 2nd modal --}}





                               <form  action="{{ url('wts/details/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel"> Add wts details </h4>
                                           </div>
                                           <div class="modal-body">
                                             <label for=""> Select service Category <span style="color:red">*</span></label>
                                             <select  name="wts_category_id" style="width:100%;height: 40px; margin-bottom:10px" required>
                                               <option value="">--Select One--</option>
                                               @foreach ($wts_infos as $key => $wts_info)
                                                 <option value="{{ $wts_info->id }}">{{ $wts_info->category_name }}</option>
                                               @endforeach
                                             </select>
                                               <div class="form-group">
                                                  <label for=""> wts image <span style="color:red">*</span></label>
                                                   <input type="file" id="name-input" class="form-control" name="wts_img" required>
                                               </div>
                                               <div class="form-group">
                                                  <label for=""> offer one <span style="color:red">*</span></label>
                                                  <input type="text" id="name-input" class="form-control" name="offer_one">
                                               </div>
                                               <div class="form-group">
                                                  <label for=""> offer two <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control" name="offer_two">
                                               </div>
                                               <div class="form-group">
                                                  <label for=""> offer three <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control" name="offer_three" >
                                               </div>
                                               <div class="form-group">
                                                  <label for=""> offer four <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control" name="offer_four" >
                                               </div>
                                               <div class="form-group">
                                                  <label for=""> offer five <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control" name="offer_five" >
                                               </div>
                                               <div class="form-group">
                                                  <label for=""> offer six <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control" name="offer_six" >
                                               </div>
                                               <div class="form-group">
                                                  <label for=""> offer seven <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control" name="offer_seven" >
                                               </div>
                                               <div class="form-group">
                                                  <label for=""> offer eight <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control" name="offer_eight" >
                                               </div>

                                           </div>
                                           <div class="modal-footer">
                                               <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                               <button type="submit" id="add-row" class="btn btn-success">Add </button>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               </form>
                               <div class="table-responsive" style=" margin-top: 50px; padding: 0px 50px;">
                                 <h2 style="color:red; margin-bottom:30px; text-align:center"> View Service Details </h2>
                                   <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                           <tr>
                                               <th>Serial No.</th>
                                               <th>Category Name</th>
                                               <th>Image</th>
                                               <th>of-one</th>
                                               <th>of-two</th>
                                               <th>of-three</th>
                                               <th>of-four</th>
                                               <th>of-five</th>
                                               <th>of-six</th>
                                               <th>of-seven</th>
                                               <th>of-eight</th>
                                               <th>Created At</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       <tfoot>

                                        @foreach ($wts_details_infos as  $wts_details_info)
                                         <tr>
                                             <td> {{ $wts_details_info->id }}</td>
                                             <td> {{ App\Wts::find($wts_details_info->wts_category_id)->category_name }}</td>
                                             <td>
                                               <img src="{{ asset('uploads/wts_service') }}/{{ $wts_details_info->wts_img }}" alt="not fount" style="width:100px; height:70px;">
                                              </td>
                                             <td>{{ $wts_details_info->offer_one }}</td>
                                             <td>{{ $wts_details_info->offer_two }}</td>
                                             <td>{{ $wts_details_info->offer_three }}</td>
                                             <td>{{ $wts_details_info->offer_four }}</td>
                                             <td>{{ $wts_details_info->offer_five }}</td>
                                             <td>{{ $wts_details_info->offer_six }}</td>
                                             <td>{{ $wts_details_info->offer_seven }}</td>
                                             <td>{{ $wts_details_info->offer_eight }}</td>
                                             <td>{{ $wts_details_info->created_at->format('d-F-Y  h:i:s A') }} </td>
                                             <td>
                                               <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#offer{{ $wts_details_info->id }}">Edit</a>

                                            <div class="modal fade" id="offer{{ $wts_details_info->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                         <h3 class="modal-title" id="myModalLabel">Edit</h3>
                                                     </div>
                                                     <div class="modal-body">
                                                       <form action="{{ url('wts/details/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                         @csrf
                                                         <input type="hidden" name="wts_id" value="{{ $wts_details_info->id }}">
                                                         <label for="">Update Service Category <span style="color:red">*</span> </label>
                                                          <select  name="wts_category_id" style="width:100%;height: 40px; margin-bottom:10px" required>
                                                            @foreach ($wts_infos as $wts_info)
                                                              <option value="{{ $wts_info->id }}" {{ ($wts_info->id == $wts_details_info->wts_category_id)?'selected':'' }}>{{ $wts_info->category_name }}</option>
                                                            @endforeach
                                                          </select>
                                                         <div class="form-group">
                                                            <label for=""> update image </label>
                                                             <input type="file" id="name-input" class="form-control" name="wts_img">
                                                         </div>

                                                         <div class="form-group">
                                                            <label for=""> offer one <span style="color:red">*</span></label>
                                                            <input type="text" id="name-input" class="form-control" name="offer_one" value="{{ $wts_details_info->offer_one }}">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for=""> offer two <span style="color:red">*</span></label>
                                                             <input type="text" id="name-input" class="form-control" name="offer_two" value="{{ $wts_details_info->offer_two }}">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for=""> offer three <span style="color:red">*</span></label>
                                                             <input type="text" id="name-input" class="form-control" name="offer_three" value="{{ $wts_details_info->offer_three }}">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for=""> offer four <span style="color:red">*</span></label>
                                                             <input type="text" id="name-input" class="form-control" name="offer_four" value="{{ $wts_details_info->offer_four }}">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for=""> offer five <span style="color:red">*</span></label>
                                                             <input type="text" id="name-input" class="form-control" name="offer_five" value="{{ $wts_details_info->offer_five }}">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for=""> offer six <span style="color:red">*</span></label>
                                                             <input type="text" id="name-input" class="form-control" name="offer_six" value="{{ $wts_details_info->offer_six }}">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for=""> offer seven <span style="color:red">*</span></label>
                                                             <input type="text" id="name-input" class="form-control" name="offer_seven" value="{{ $wts_details_info->offer_seven }}">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for=""> offer eight <span style="color:red">*</span></label>
                                                             <input type="text" id="name-input" class="form-control" name="offer_eight" value="{{ $wts_details_info->offer_eight }}">
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
                                               <a class="btn btn-danger btn-sm" href="{{ url('wts/details/delete') }}/{{ $wts_details_info->id }}"  onclick="return confirm('are you sure delete this data!')">Delete</a>
                                             </td>
                                         </tr>
                                         @endforeach
                                       {{-- </tfoot> --}}
                                  </table>
                               </div>
                               <div class="table-responsive" style=" margin-top: 50px; padding: 0px 50px;">
                                 <h2 style="color:red; margin-bottom:30px; text-align:center"> View Service Category </h2>
                                   <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                           <tr>
                                               <th>Serial No.</th>
                                               <th>Category name</th>
                                               <th>Created At</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       {{-- <tfoot> --}}

                                       @foreach ($wts_infos as  $wts_info)
                                         <tr>
                                             <td> {{ $wts_info->id }}</td>
                                             <td>{{ $wts_info->category_name }}</td>
                                             <td>{{ $wts_info->created_at->format('d-F-Y  h:i:s A') }} </td>
                                             <td>
                                               <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{{ $wts_info->id }}">Edit</a>

                                            <div class="modal fade" id="{{ $wts_info->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                         <h3 class="modal-title" id="myModalLabel"> Edit </h3>
                                                     </div>
                                                     <div class="modal-body">
                                                       <form action="{{ url('wts/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                         @csrf
                                                         <input type="hidden" name="wts_id" value="{{ $wts_info->id }}">
                                                         <div class="form-group">
                                                           <label for="">update Category name</label>
                                                             <input type="text" name="category_name" class="form-control" value="{{  $wts_info->category_name }}">
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
                                               <a class="btn btn-danger btn-sm" href="{{ url('wts/delete') }}/{{ $wts_info->id }}"  onclick="return confirm('are you sure delete this data!')">Delete</a>
                                             </td>
                                         </tr>
                                         @endforeach
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

   @section('custom_js')
     <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

     <script>
        var editor_config = {
          path_absolute : "/",
          selector: "textarea.my-editor",
          plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
          ],
          toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
          relative_urls: false,
          file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
              cmsURL = cmsURL + "&type=Images";
            } else {
              cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.open({
              file : cmsURL,
              title : 'Filemanager',
              width : x * 0.8,
              height : y * 0.8,
              resizable : "yes",
              close_previous : "no"
            });
          }
        };

        tinymce.init(editor_config);
      </script>

    <script>
      CKEDITOR.replace('my_ck_editor', options);
    </script>
   @endsection
@endsection
