@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header"> Home Page </h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="{{ url('home') }}"> Dashboard </a></li>
                       <li><a href="#"> Free Course Page </a></li>
                       <li class="active"> Add Free Courses </li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title"> Add Free Courses </h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal"> Add Free Courses </button>
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal2"> Add Free Courses </button>
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
                               <form  action="{{ url('freecourse/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel"> Add Free Courses </h4>
                                           </div>
                                           <div class="modal-body">

                                               <div class="form-group">
                                                  <label for="">Add Image<span style="color:red">*</span></label>
                                                   <input type="file" id="name-input" class="form-control" name="freecourse_img" required>
                                               </div>
                                               <div class="form-group">
                                                  <label for=""> Title <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control" name="title" required>
                                               </div>

                                               <div class="form-group">
                                                 <label for="">Description one</label>
                                                   <textarea name="description_one" class="form-control" cols="10" required> </textarea>
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Description two</label>
                                                   <textarea name="description_two" class="form-control" cols="10"> </textarea>
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Description three</label>
                                                   <textarea name="description_three" class="form-control" cols="10"> </textarea>
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





                               <form  action="{{ url('freecourse/video/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel"> Add Free Course Videos </h4>
                                           </div>
                                           <div class="modal-body">
                                             <label for=""> Select Video Category <span style="color:red">*</span></label>
                                             <select  name="freevideo_category_id" style="width:100%;height: 40px; margin-bottom:10px" required>
                                               <option value="">--Select One--</option>
                                               @foreach ($freecourse_infos as $key => $freecourse_info)
                                                 <option value="{{ $freecourse_info->id }}">{{ $freecourse_info->title }}</option>
                                               @endforeach
                                             </select>
                                               <div class="form-group">
                                                  <label for=""> Video Title <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control" name="video_title" required>
                                               </div>
                                               <div class="form-group">
                                                  <label for=""> Video Link <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control" name="video_link" required>
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
                                 <h2 style="color:red; margin-bottom:30px; text-align:center"> View Free Courses Videos </h2>
                                   <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                           <tr>
                                               <th>Serial No.</th>
                                               <th>Video Category</th>
                                               <th>Video Title</th>
                                               <th>Video Link</th>
                                               <th>Created At</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       {{-- <tfoot> --}}

                                       @foreach ($freecourse_video_infos as  $freecourse_video_info)
                                         <tr>
                                             <td> {{ $freecourse_video_info->id }}</td>
                                             <td> {{ App\Freecourse::find($freecourse_video_info->freevideo_category_id)->title }}</td>
                                             <td>{{ $freecourse_video_info->video_title }}</td>
                                             <td>{{ $freecourse_video_info->video_link }}</td>
                                             <td>{{ $freecourse_video_info->created_at->format('d-F-Y  h:i:s A') }} </td>
                                             <td>
                                               <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#freev{{ $freecourse_video_info->id }}">Edit</a>

                                            <div class="modal fade" id="freev{{ $freecourse_video_info->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                         <h3 class="modal-title" id="myModalLabel">Edit</h3>
                                                     </div>
                                                     <div class="modal-body">
                                                       <form action="{{ url('freecourse/video/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                         @csrf
                                                         <input type="hidden" name="free_id" value="{{ $freecourse_video_info->id }}">
                                                         <label for="">update Video Category <span style="color:red">*</span> </label>
                                                          <select  name="freevideo_category_id" style="width:100%;height: 40px; margin-bottom:10px" required>
                                                            @foreach ($freecourse_infos as $freecourse_info)
                                                              <option value="{{ $freecourse_info->id }}" {{ ($freecourse_info->id == $freecourse_video_info->freevideo_category_id)?'selected':'' }}>{{ $freecourse_info->title }}</option>
                                                            @endforeach
                                                          </select>
                                                         <div class="form-group">
                                                            <label for="">update Title</label>
                                                             <input type="text" id="name-input" class="form-control" name="video_title" value="{{ $freecourse_video_info->video_title }}">
                                                         </div>

                                                         <div class="form-group">
                                                           <label for="">update link</label>
                                                             <input type="text" name="video_link" class="form-control" value="{{  $freecourse_video_info->video_link }}">
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
                                               <a class="btn btn-danger btn-sm" href="{{ url('freecourse/video/delete') }}/{{ $freecourse_video_info->id }}"  onclick="return confirm('are you sure delete this data!')">Delete</a>
                                             </td>
                                         </tr>
                                         @endforeach
                                       {{-- </tfoot> --}}
                                   </table>
                               </div>
                               <div class="table-responsive" style=" margin-top: 50px; padding: 0px 50px;">
                                 <h2 style="color:red; margin-bottom:30px; text-align:center"> View Free Courses </h2>
                                 <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                   <thead>
                                     <tr>
                                       <th>Serial No.</th>
                                       <th>Free Course Image</th>
                                       <th>Title</th>
                                       <th>Description one</th>
                                       <th>Description two</th>
                                       <th>Description three</th>
                                       <th>Created At</th>
                                       <th>Action</th>
                                     </tr>
                                   </thead>
                                   {{-- <tfoot> --}}

                                   @foreach ($freecourse_infos as  $freecourse_info)
                                     <tr>
                                       <td> {{ $freecourse_info->id }}</td>
                                       <td>
                                         <img src="{{ asset('uploads/freecourse_img') }}/{{ $freecourse_info->freecourse_img }}" alt="not fount" style="width:100px; height:70px;">
                                       </td>
                                       <td><p style="height: 150px;overflow: scroll;">{{ $freecourse_info->title }}</p></td>
                                       <td><p style="height: 150px;overflow: scroll;">{{ $freecourse_info->description_one }}</p></td>
                                       <td><p style="height: 150px;overflow: scroll;">{{ $freecourse_info->description_two }}</p></td>
                                       <td><p style="height: 150px;overflow: scroll;">{{ $freecourse_info->description_three }}</p></td>
                                       <td>{{ $freecourse_info->created_at->format('d-F-Y  h:i:s A') }} </td>
                                       <td>
                                         <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{{ $freecourse_info->id }}">Edit</a>

                                         <div class="modal fade" id="{{ $freecourse_info->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                           <div class="modal-dialog">
                                             <div class="modal-content">
                                               <div class="modal-header">
                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                 <h3 class="modal-title" id="myModalLabel">Edit</h3>
                                               </div>
                                               <div class="modal-body">
                                                 <form action="{{ url('freecourse/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                   @csrf
                                                   <input type="hidden" name="free_id" value="{{ $freecourse_info->id }}">
                                                   <div class="form-group">
                                                     <label for="">update image</label>
                                                     <input type="file" id="name-input" class="form-control" name="freecourse_img" required>
                                                   </div>

                                                   <div class="form-group">
                                                     <label for="">update Title</label>
                                                     <input type="text" name="title" class="form-control" value="{{  $freecourse_info->title }}">
                                                   </div>
                                                   <div class="form-group">
                                                     <label for="">update Description</label>
                                                     <textarea name="description_one" class="form-control" cols="10" type="text">
                                                       {{ $freecourse_info->description_one }}
                                                     </textarea>
                                                   </div>
                                                   <div class="form-group">
                                                     <label for="">update Description</label>
                                                     <textarea name="description_two" class="form-control" cols="10">
                                                       {{ $freecourse_info->description_two }}
                                                     </textarea>
                                                   </div>
                                                   <div class="form-group">
                                                     <label for="">update Description</label>
                                                     <textarea name="description_three" class="form-control" cols="10">
                                                       {{ $freecourse_info->description_three }}
                                                     </textarea>
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
                                         <a class="btn btn-danger btn-sm" href="{{ url('freecourse/delete') }}/{{ $freecourse_info->id }}"  onclick="return confirm('are you sure delete this data!')">Delete</a>
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
