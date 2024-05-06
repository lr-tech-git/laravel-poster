<form method="POST" action="{{ $complaint->id ? route('complaints.update', ['complaint' => $complaint->id]) : route('complaints.store') }}"  role="form" enctype="multipart/form-data">
    @if($complaint->id)
        {{ method_field('PATCH') }}
    @endif
    @csrf

    <!-- Add Product -->
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">

        <div class="d-flex flex-column justify-content-center">
            <h4 class="mb-1 mt-3">{{ __("Add a new complaint") }}</h4>
        </div>
        <div class="d-flex align-content-center flex-wrap gap-3">
            <a href="{{ $complaint->id ? $complaint->getUrl() : route('complaints.index') }}" class="btn btn-label-secondary">{{ __("Cancel") }}</a>
            <button name="save" class="btn btn-label-primary">Save</button>
            <button name="publish" type="submit" class="btn btn-primary">{{ __("Publish") }}</button>
        </div>

    </div>

    <div class="row">

        <!-- First column-->
        <div class="col-12 col-lg-8">
            <!-- Product Information -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="mb-3">
                        {{ Form::label(__('Title')) }}
                        {{ Form::text('title', $complaint->title ?? '', ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
                        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
                    </div>

                    <div class="mb-3">
                        <label class="form-label mb-1 d-flex justify-content-between align-items-center">
                            <span>Address</span><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#searchMapModal" class="fw-medium">Find on the map</a>
                        </label>
                        {{ Form::text('address', $complaint->address ?? '', ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
                        {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="form-label">{{ __('Description') }}</label>
                        <div class="mb-3">
                            {{ Form::textarea('about', $complaint->about ?? '', ['class' => 'about form-control' . ($errors->has('about') ? ' is-invalid' : '') ]) }}
                            {!! $errors->first('about', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Product Information -->
            <!-- Media -->
            <div class="card mb-4">
                <input type="hidden" name="files" value="{{ $complaint->files_array }}" />
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 card-title">Media</h5>
                    <a href="javascript:void(0);" class="fw-medium">{{ __("Add media via URL") }}</a>
                </div>
                <div class="card-body">
                    <div class="dropzone needsclick {{ !$complaint->files->isEmpty() ? 'dz-clickable dz-started' : '' }}" id="dropzone-media">
                        <div class="dz-message needsclick my-5">
                            <p class="fs-4 note needsclick my-2">{{ __("Drag your media file here") }}</p>
                            <small class="text-muted d-block fs-6 my-2">or</small>
                            <span class="note needsclick btn bg-label-primary d-inline" id="btnBrowse">{{ __("Check out the image") }}</span>
                        </div>

                        @foreach($complaint->files as $file)
                            <div class="dz-preview dz-processing dz-image-preview dz-success dz-complete">
                                <div class="dz-details">
                                    <div class="dz-thumbnail">
                                        <img data-dz-thumbnail="" alt="{{ $file->getFileName() }}" src="{{ $file->getFileAssets() }}">
                                        <span class="dz-nopreview">{{ __("No preview") }}</span>
                                        <div class="dz-success-mark"></div>
                                        <div class="dz-error-mark"></div>
                                        <div class="dz-error-message"><span data-dz-errormessage=""></span></div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress="" style="width: 100%;"></div>
                                        </div>
                                    </div>
                                    <div class="dz-filename" data-dz-name="">{{ $file->getFileName() }}</div>
                                    <div class="dz-size" data-dz-size=""><strong>74.4</strong> KB</div>
                                </div>
                                <a class="dz-remove" href="javascript:undefined;" data-dz-remove="">{{ __("Remove file") }}</a>
                            </div>
                        @endforeach

                        <div class="fallback">
                            <input name="file" type="file" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Media -->
        </div>
        <!-- /Second column -->

        <!-- Second column -->
        <div class="col-12 col-lg-4">
            <!-- Organize Card -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">{{ __("Additional Information") }}</h5>
                </div>
                <div class="card-body">
                    <!-- Category -->
                    <div class="mb-3 col ecommerce-select2-dropdown">
                        {{ Form::label(__('Category')) }}
                        {{ Form::select('category_id', $categories,  $complaint->category_id ?? '', ['class' => 'form-select' . ($errors->has('category_id') ? ' is-invalid' : '')]) }}
                        {!! $errors->first('parent_id', '<div class="invalid-feedback">:message</div>') !!}

                    </div>
                    <!-- Category -->

                    <!-- Tags -->
                    <div class="mb-3">
                        {{ Form::label(__('Tags')) }}
                        {{ Form::text('tags', $complaint->tags ?? '', ['id' => 'complaint-tags', 'class' => 'form-control' . ($errors->has('tags') ? ' is-invalid' : ''), 'placeholder' => 'Input tags']) }}
                        {!! $errors->first('tags', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>
            </div>
            <!-- /Organize Card -->
        </div>
        <!-- /Second column -->
    </div>
</form>


<div class="modal fade" id="searchMapModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-simple modal-pricing">
        <div class="modal-content p-0 p-md-2 p-xl-5" style="padding: 5px !important;">
            <div class="modal-body px-2 px-md-4" style="padding: 0px !important;">

                <iframe
                    width="100%"
                    height="450"
                    style="border:0"
                    loading="lazy"
                    allowfullscreen
                    referrerpolicy="no-referrer-when-downgrade"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBtveTF1L2L7qyanfBR71a0bEFBwoHek_Q&q=NewYork">
                </iframe>

            </div>
            <!--/ Pricing Plans -->
        </div>
    </div>
</div>
<!--/ Pricing Modal -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="/js/select2/select2.js"></script>
<script src="/js/tagify.js"></script>
<script src="/js/app-ecommerce-product-add.js"></script>

<script>

    Dropzone.options.dropzoneMedia = {
        maxFilesize: 12,
        url: '/image/upload/store',
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        renameFile: function(file) {
            var dt = new Date();
            var time = dt.getTime();
            return time+file.name;
        },
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        // addRemoveLinks: true,
        timeout: 50000,
        previewTemplate: `<div class="dz-preview dz-file-preview">
                            <div class="dz-details">
                              <div class="dz-thumbnail">
                                <img data-dz-thumbnail>
                                <span class="dz-nopreview">No preview</span>
                                <div class="dz-success-mark"></div>
                                <div class="dz-error-mark"></div>
                                <div class="dz-error-message"><span data-dz-errormessage></span></div>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress></div>
                                </div>
                              </div>
                              <div class="dz-filename" data-dz-name></div>
                              <div class="dz-size" data-dz-size></div>
                            </div>
                            <a class="dz-remove" href="javascript:undefined;" data-dz-remove="">Remove file</a>
                            </div>`,
        removedfile: function(file) {
            var name = file.upload.filename;
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                type: 'POST',
                url: '{{ url("/image/delete") }}',
                data: {filename: name},
                success: function (data) {
                    console.log("File has been successfully removed!!");
                    $('.dropzone').addClass('dz-started')
                },
                error: function(e) {
                    console.log(e);
                }
            });

            let files =  $('[name=files]').val() ? jQuery.parseJSON($('[name=files]').val()) : [];
            files = $.grep(files, function(value) {
                return value != name;
            });
            $('[name=files]').val(JSON.stringify(files))

            var fileRef;
            return (fileRef = file.previewElement) != null ?
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
        },

        success: function(file, response) {

            let files =  $('[name=files]').val() ? jQuery.parseJSON($('[name=files]').val()) : [];
            files.push(response.success)
            $('[name=files]').val(JSON.stringify(files))

            if (response.success) {
                file.previewElement.classList.add("dz-success")
            } else {
                file.previewElement.classList.add("dz-error")
            }
        },
        error: function(file, response) {
            return false;
        }
    };

    tinymce.init({
        selector: 'textarea.about',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount code preview ',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat code preview',        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
            { value: 'First.Name', title: 'First Name' },
            { value: 'Email', title: 'Email' },
        ],

        /* enable automatic uploads of images represented by blob or data URIs*/
        automatic_uploads: true,
        /*
          URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
          images_upload_url: 'postAcceptor.php',
          here we add custom filepicker only to Image dialog
        */
        file_picker_types: 'image',
        /* and here's our custom image picker*/
        file_picker_callback: function (cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');

            /*
              Note: In modern browsers input[type="file"] is functional without
              even adding it to the DOM, but that might not be the case in some older
              or quirky browsers like IE, so you might want to add it to the DOM
              just in case, and visually hide it. And do not forget do remove it
              once you do not need it anymore.
            */

            input.onchange = function () {
                var file = this.files[0];

                var reader = new FileReader();
                reader.onload = function () {
                    /*
                      Note: Now we need to register the blob in TinyMCEs image blob
                      registry. In the next release this part hopefully won't be
                      necessary, as we are looking to handle it internally.
                    */
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);

                    /* call the callback and populate the Title field with the file name */
                    cb(blobInfo.blobUri(), { title: file.name });
                };
                reader.readAsDataURL(file);
            };

            input.click();
        },
        extended_valid_elements : "script[charset|defer|language|src|type]"
    });
</script>
