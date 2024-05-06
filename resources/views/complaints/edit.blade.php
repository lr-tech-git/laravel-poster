@extends('layouts.app-auth')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<script src="https://cdn.tiny.cloud/1/y26a029ydyylmsnf30o7fgdvjj6kudbynz7ukktszbvev5r6/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<link rel="stylesheet" href="/css/dropzone.css">
<link rel="stylesheet" href="/css/tagify.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>

@section('content')

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">{{ __("Home") }} /</span><span> {{ __("Profile") }} / {{ __("Edit complaint") }}</span>
        </h4>

        <div class="app-ecommerce">

            @include('complaints._form')

        </div>
    </div>
    <!-- / Content -->

@endsection
