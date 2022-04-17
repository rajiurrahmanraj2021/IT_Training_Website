@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">Home Page</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="{{ url('home') }}">Dashboard</a></li>
                       <li><a href="#">Home Page</a></li>
                       <li class="active">Amader Somporke</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title">About Us</h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add Amader Somporke</button>
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
                               <form  action="{{ url('amadersomporke/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">Add Amader Somporke</h4>
                                           </div>
                                           <div class="modal-body">

                                               <div class="form-group">
                                                  <label for="">About Image<span style="color:red">*</span></label>
                                                   <input type="file" id="name-input" class="form-control @error('about_img') is-invalid @enderror" name="about_img" required>
                                                   @error('about_img')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>

                                               <div class="form-group">
                                                 <label for="">About Description one</label>
                                                   <textarea name="description1" class="form-control" cols="10" required> </textarea>
                                               </div>
                                               <div class="form-group">
                                                 <label for="">About Description two</label>
                                                   <textarea name="description2" class="form-control" cols="10" required> </textarea>
                                               </div>

                                               <div class="form-group">
                                                 <label for="">About Description three</label>
                                                   <textarea name="description3" class="form-control" cols="10"> </textarea>
                                               </div>
                                               <div class="form-group">
                                                 <label for="">About Description four</label>
                                                   <textarea name="description4" class="form-control" cols="10"> </textarea>
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
                                 <h2 style="color:red; margin-bottom:30px; text-align:center">View About Us Data </h2>
                                   <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                           <tr>
                                               <th>Serial No.</th>
                                               <th>About img</th>
                                               <th>Description1</th>
                                               <th>Description2</th>
                                               <th>Description3</th>
                                               <th>Description4</th>
                                               <th>Created At</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       {{-- <tfoot> --}}

                                       @foreach ($amader_infos as  $amader_info)
                                         <tr>
                                             <td> {{ $amader_info->id }}</td>
                                             <td>
                                               <img src="{{ asset('uploads/amader_img') }}/{{ $amader_info->about_img }}" alt="not fount" style="width:100px; height:70px;">
                                             </td>
                                             <td><p style="height: 150px;overflow: scroll;">{{ $amader_info->description1 }}</p></td>
                                             <td><p style="height: 150px;overflow: scroll;">{{ $amader_info->description2 }}</p></td>
                                             <td><p style="height: 150px;overflow: scroll;">{{ $amader_info->description3 }}</p></td>
                                             <td><p style="height: 150px;overflow: scroll;">{{ $amader_info->description4 }}</p></td>
                                             <td>{{ $amader_info->created_at->format('d-F-Y  h:i:s A') }} </td>
                                             <td>
                                               <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{{ $amader_info->id }}">Edit</a>

                                            <div class="modal fade" id="{{ $amader_info->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                         <h3 class="modal-title" id="myModalLabel">Edit</h3>
                                                     </div>
                                                     <div class="modal-body">
                                                       <form action="{{ url('amadersomporke/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                         @csrf
                                                         <input type="hidden" name="about_id" value="{{ $amader_info->id }}">
                                                         <div class="form-group">
                                                            <label for="">update image</label>
                                                             <input type="file" id="name-input" class="form-control" name="about_img">
                                                         </div>
                                                         <div class="form-group">
                                                           <label for=""> update Description1 </label>
                                                             <textarea name="description1" class="form-control" cols="10" required>
                                                               {{ $amader_info->description1 }}
                                                             </textarea>
                                                         </div>
                                                         <div class="form-group">
                                                           <label for="">update Description2</label>
                                                             <textarea name="description2" class="form-control" cols="10" required>
                                                               {{ $amader_info->description2 }}
                                                             </textarea>
                                                         </div>
                                                         <div class="form-group">
                                                           <label for="">update Description3</label>
                                                             <textarea name="description3" class="form-control" cols="10">
                                                               {{ $amader_info->description3 }}
                                                             </textarea>
                                                         </div>
                                                         <div class="form-group">
                                                           <label for="">update Description4</label>
                                                             <textarea name="description4" class="form-control" cols="10">
                                                               {{ $amader_info->description4 }}
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
                                               <a class="btn btn-danger btn-sm" href="{{ url('amadersomporke/delete') }}/{{ $amader_info->id }}"  onclick="return confirm('are you sure delete this data!')">Delete</a>
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
