@extends('layouts.app')

@section('content')
<!-- inner page banner -->
<div class="page-banner ovbl-dark" style="background-image:url({{ $school->picture }});">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white">{{ $school->name }}</h1>
         </div>
    </div>
</div>
<!-- Breadcrumb row -->
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ route('viewschools') }}">Colegios</a></li>
            <li>Listado de grupos de {{ $school->name }}</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb row END -->
<!-- inner page banner END -->
<div class="content-block">
    <!-- About Us -->
    <div class="section-area section-sp2">
            <div class="container">
                 <div class="pricingtable-row">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 m-b40">
                            <div class="pricingtable-wrapper">
                                <div class="pricingtable-inner">
                                    <div class="pricingtable-main"> 
                                        <div class="pricingtable-title">
                                            <h2>Lista de grupos</h2>
                                            <p>{{ $school->name }}</p>
                                        </div>
                                    </div>
                                    <ul class="pricingtable-features">
                                    @foreach($groups as $group)
                                        <li><a href="{{ route('clases', $group->id) }}">{{ $group->name }}</a></li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- contact area END -->
@endsection
