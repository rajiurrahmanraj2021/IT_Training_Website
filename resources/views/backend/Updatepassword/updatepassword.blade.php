@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">Home Page</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="{{ url('home') }}">Dashboard</a></li>
                       <li><a href="#">Password Update</a></li>
                       <li class="active">changed password</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title">Changed your password</h4>
                           </div>
                           <div class="panel-body">
                             @if(session('success_msg'))
                               <div class="alert alert-success alert-dismissible" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <strong>Good! </strong> {{ session('success_msg') }}
                                </div>
                            @endif

                             @if(session('err_msg'))
                               <div class="alert alert-success alert-dismissible" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <strong></strong> {{ session('err_msg') }}
                                </div>
                            @endif
                             @if(session('no_match'))
                               <div class="alert alert-success alert-dismissible" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <strong></strong> {{ session('no_match') }}
                                </div>
                            @endif
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Update Password</button>
                               <!-- Modal -->

                               <form  action="{{ url('updatepassword/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">Update Password</h4>
                                           </div>
                                           <div class="modal-body">

                                               <div class="form-group">
                                                  <label for="old_password">Old Password<span style="color:red">*</span></label>
                                                   <input type="text" id="old_password" class="password form-control @error('old_password') is-invalid @enderror" name="old_password" placeholder="Enter Your Old Password">
                                                   @error('old_password')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong class="error-msg">{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>
                                               <div class="form-group">
                                                  <label for="new_password">New Password<span style="color:red">*</span></label>
                                                   <input type="text" id="new_password" class="password form-control @error('new_password') is-invalid @enderror" name="new_password" placeholder="Enter Your New Password">
                                                   @error('new_password')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong class="error-msg">{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>
                                               <div class="form-group">
                                                  <label for="confirm_password">Confirm Password<span style="color:red">*</span></label>
                                                   <input type="text" id="confirm_password" class="password form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" placeholder="Enter Your Confirm Password">
                                                   @error('confirm_password')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong class="error-msg">{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>

                                           </div>
                                           <div class="modal-footer">
                                               <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                               <button type="submit" id="add-row" class="btn btn-success"> Update Password </button>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               </form>
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
