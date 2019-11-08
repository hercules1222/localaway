@extends('layouts.app')

@section('css')
    <link href="/css/fine-uploader-new.css" rel="stylesheet">
    <style>
        #trigger-upload {
            color: white;
            background-color: #00ABC7;
            font-size: 14px;
            padding: 7px 20px;
            background-image: none;
            
        }
        
        #fine-uploader-manual-trigger .qq-upload-button {
            margin-right: 15px;
        }
        
        #fine-uploader-manual-trigger .buttons {
            width: 36%;
        }
        
        #fine-uploader-manual-trigger .qq-uploader .qq-total-progress-bar-container {
            width: 60%;
        }
    </style>
@endsection

@section('content')
    <h1 class = "">{{$collection}} image edit page</h1>
    <form class = "col-6 text-center m-5 p-5" method="post" action="/admin/file/upload?collection={{$collection}}" enctype="multipart/form-data">
        <input type="file" name="image" />
        <label>
            Title
            <input type="text" name="title"/>
        </label>
        <input type="submit" value="Upload" />
    </form>
    <div class = "mt-5">
        <h1 class = "text-center">Already uploaded files</span>
    </div>
    @if ($collection == "logo"|| $collection == "hero")
    @foreach($images as $image)
    @if($image->extra==1)
    <form class = "bg-success" method = "post" action="/admin/file/update/{{$image->id}}?collection={{$collection}}">
    @else    
    <form method = "post" action="/admin/file/update/{{$image->id}}?collection={{$collection}}">
    @endif
        <hr>
        <li class = "mb-2 text-center">
            <img class = "mb-4" width="100px"  qq-max-size="100" qq-server-scale="" src="/storage/uploads/{{$image->filename}}">
            @csrf
            <input type="text" name="title" value="{{$image->title}}" />
            <button type="submit" class="btn btn-primary">Update title</button>
            <a class="btn btn-success" href = "/admin/file/use/{{$image->id}}?collection={{$collection}}">Use this</a>
            <a class="btn btn-danger" href  = "/admin/file/delete/{{$image->id}}?collection={{$collection}}">Delete</a>
        </li>
    </form>
    @endforeach
    <hr>
    @else
    @foreach($images as $image)
    <form class = "" method = "post" action="/admin/file/update/{{$image->id}}?collection={{$collection}}">
        <hr>
        <li class = "mb-2 text-center">
            <img class = "mb-4" width="100px"  qq-max-size="100" qq-server-scale="" src="/storage/uploads/{{$image->filename}}">
            @csrf
            <input type="text" name="title" value="{{$image->title}}" />
            <button type="submit" class="btn btn-primary">Update title</button>
            <a class="btn btn-danger" href  = "/admin/file/delete/{{$image->id}}?collection={{$collection}}">Delete</a>
            <a class="btn btn-outline-primary" href = "/admin/file/move-up/{{$image->id}}?collection={{$collection}}">Move Up</a>
            <a class="btn btn-outline-secondary" href = "/admin/file/move-down/{{$image->id}}?collection={{$collection}}">Move Down</a>
        </li>
    </form>
    @endforeach
    <hr>
    @endif
    </div>
@endsection

@section('page_vendor_scripts')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
@endsection

@section('page_scripts')
    <script>
        $(document).ready(function(){

        })
    </script>
@endsection