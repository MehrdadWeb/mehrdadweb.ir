<!DOCTYPE html>
<html lang="en">
<!-- StarAdmin (back end) -->

<head>
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title><!-- index@section -->
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ url('/back/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('/back/assets/vendors/iconfonts/ionicons/css/ionicons.css') }}">
    <link rel="stylesheet" href="{{ url('/back/assets/vendors/iconfonts/typicons/src/font/typicons.css') }}">
    <link rel="stylesheet" href="{{ url('/back/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ url('/back/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ url('/back/assets/vendors/css/vendor.bundle.addons.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ url('/back/assets/css/shared/style.css') }}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ url('/back/assets/css/demo_1/style.css') }}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{ url('/back/assets/images/favicon.png') }}" />
    <!-- chosen-select -->
    <link rel="stylesheet" href="https://harvesthq.github.io/chosen/chosen.css">
    <link rel="stylesheet" href="{{ url('https://harvesthq.github.io/chosen/chosen.css') }}">
    <link rel="stylesheet" href="{{ url('/back/assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ url('/back/assets/css/chosen.css') }}">
    <link rel="stylesheet" href="{{ url('/back/assets/css/chosen.min.css') }}">
    <script>
        $(document).ready(function(){
            $("#button-image").click(function(){
               // $("#holder").val() = $("#image_label").val();
                $("#holder").css("background-color", "red");
            });
            
        });
    </script>
    <!-- tiny mce 
    <script src="https://cdn.tiny.cloud/1/y8z6758h2p4wctkdhwf7hl94zzxexmambc51oxlvjfn5bqvp/tinymce/5/tinymce.min.js"
        referrerpolicy="origin">
    </>
    <script>
        var editor_config = {
            path_absolute: "/",
            selector: 'textarea#editor',
            direcrtionality: "rtl",
            relative_urls: false,
            plugins: [
                "direcrtionality advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table directionality",
                "emoticons template paste textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | ltr rtl",
            file_picker_callback: function(callback, value, meta) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName(
                    'body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document
                    .getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
                if (meta.filetype == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.openUrl({
                    url: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no",
                    onMessage: (api, message) => {
                        callback(message.content);
                    }
                });
            }
        };

        tinymce.init(editor_config);
    </script>-->
    
    <!-- alexusmai/laravel-file-manager -->
    <script src="https://cdn.tiny.cloud/1/y8z6758h2p4wctkdhwf7hl94zzxexmambc51oxlvjfn5bqvp/tinymce/5/tinymce.min.js"
        referrerpolicy="origin">
    </script>
    <script>
        tinymce.init({
            selector: 'textarea#editor',
            direcrtionality: "rtl",
            relative_urls: false,
            plugins: [
                "direcrtionality advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table directionality",
                "emoticons template paste textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | ltr rtl",
            file_picker_callback(callback, value, meta) {
                let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName(
                    'body')[0].clientWidth
                let y = window.innerHeight || document.documentElement.clientHeight || document
                    .getElementsByTagName('body')[0].clientHeight

                tinymce.activeEditor.windowManager.openUrl({
                    url: '/file-manager/tinymce5',
                    title: 'Laravel File manager',
                    width: x * 0.8,
                    height: y * 0.8,
                    onMessage: (api, message) => {
                        callback(message.content, {
                            text: message.text
                        })
                    }
                })
            }
        });
    </script>



    <!-- ckeditor
    <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>-->



</head>

<body>
    <div class="container-scroller">

        @include('back.navbar')

        <div class="container-fluid page-body-wrapper">

            @include('back.sidebar')

            @yield('content')
            <!-- index@section -->

        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ url('/back/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ url('/back/assets/vendors/js/vendor.bundle.addons.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ url('/back/assets/js/shared/off-canvas.js') }}"></script>
    <script src="{{ url('/back/assets/js/shared/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ url('/back/assets/js/demo_1/dashboard.js') }}"></script>

    <!-- End custom js for this page-->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src='http://harvesthq.github.io/chosen/chosen.jquery.js'></script>
    <script src="{{ url('/back/assets/js/multiselect.js') }}"></script>

    <!-- chosen-select -->
    <script src="{{ url('/back/assets/js/app.js') }}"></script>
    <!-- chosen-select - 1th way -->
    {{-- $(document).ready(function(){
            $('.chosen-select').chosen();
        }); --}}
    <!-- chosen-select - 2th way -->
    @yield('js')
    <!-- image -->

    <!-- 1.UniSharp -->
    <!--<script>
        var lfm = function(id, type, options) {
            let button = document.getElementById(id);

            button.addEventListener('click', function() {
                var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
                var target_input = document.getElementById(button.getAttribute('data-input'));
                var target_preview = document.getElementById(button.getAttribute('data-preview'));

                window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager',
                    'width=900,height=600');
                window.SetUrl = function(items) {
                    var file_path = items.map(function(item) {
                        return item.url;
                    }).join(',');

                    // set the value of the desired input to image url
                    target_input.value = file_path;
                    target_input.dispatchEvent(new Event('change'));

                    // clear previous preview
                    target_preview.innerHtml = '';

                    // set or change the preview image src
                    items.forEach(function(item) {
                        let img = document.createElement('img')
                        img.setAttribute('style', 'height: 5rem')
                        img.setAttribute('src', item.thumb_url)
                        target_preview.appendChild(img);
                    });

                    // trigger change event
                    target_preview.dispatchEvent(new Event('change'));
                };
            });
        };

        {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!};
        var route_prefix = "url-to-filemanager";
        $('#lfm').filemanager('image', {
            prefix: route_prefix
        });
        $('#lfm').filemanager('image');
    </script>-->


    <!--<script>
        CKEDITOR.replace('editor1', {
            language: 'fa',
            content: 'fa',
            filebrowserUploadUrl: "{{-- route('ckeditor.upload',['_token'=>csrf_token()]) --}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('textarea.editor').ckeditor(options);
    </script>-->
    
    <!-- 2.alexusmai/laravel-file-manager -->
    <script>
        //Standalone button
        document.addEventListener("DOMContentLoaded", function() {

            document.getElementById('button-image').addEventListener('click', (event) => {
                event.preventDefault();

                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });
        });

        // set file link
        function fmSetLink($url) {
            document.getElementById('image_label').value = $url;
        }
    </script>

</body>

</html>
