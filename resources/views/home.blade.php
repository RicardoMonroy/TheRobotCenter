@extends('admin.layout')

@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('home') }}">Dashboard</a>
    </li>
    {{-- <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item active">Dashboard</li> --}}
    <!-- Breadcrumb Menu-->
    {{-- <li class="breadcrumb-menu d-md-down-none">
    <div class="btn-group" role="group" aria-label="Button group">
        <a class="btn" href="#">
            <i class="icon-speech"></i>
        </a>
        <a class="btn" href="./">
            <i class="icon-graph"></i>  Dashboard</a>
        <a class="btn" href="#">
            <i class="icon-settings"></i>  Settings</a>
    </div>
    </li> --}}
</ol>
<div class="container-fluid">
        <div class="animated fadeIn">
             <div class="row">
                {{-- <iframe src="/laravel-filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe> --}}

            </div>
        </div>
    </div>
</div>
@endsection
