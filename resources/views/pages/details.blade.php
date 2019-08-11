@extends('layouts.app')

@section('content')
<!-- inner page banner -->
<div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner3.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            {{-- <h1 class="text-white">{{ $school->name }}</h1> --}}
         </div>
    </div>
</div>
<!-- Breadcrumb row -->
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ route('viewschools') }}">Colegios</a></li>
            {{-- <li>Listado de grupos de {{ $school->name }}</li> --}}
        </ul>
    </div>
</div>
<!-- Breadcrumb row END -->
<!-- inner page banner END -->
<div class="content-block">
    <!-- About Us -->
    <div class="section-area section-sp1">
            <div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                        @if($user->student)
                            <div class="widget courses-search-bx placeani">
                                <div class="form-group">
                                    <h5>Hola {{ $user->name }}</h5>
                                    <h5>Grupo: {{ $user->student->group->name }}</h5>
                                    {{-- <div class="input-group">
                                        <label>Buscar Cursos</label>
                                        <input name="dzName" type="text" required class="form-control">
                                    </div> --}}
                                </div>
                            </div>
                            {{-- <div class="widget widget_archive">
                                <h5 class="widget-title style-1">Tu escuela es:</h5>
                                <ul>
                                    <li class="active"><a href="{{ route('details', $user->student->school->id) }}">{{ $user->student->school->name }}</a></li>
                                </ul>
                            </div> --}}
                            {{-- <div class="widget">
                                <a href="#"><img src="assets/images/adv/adv.jpg" alt=""/></a>
                            </div> --}}
                            <div class="widget recent-posts-entry widget-courses">
                                <h5 class="widget-title style-1">Mi escuela es:</h5>
                                <div class="widget-post-bx">                                
                                    <div class="widget-post clearfix">
                                        <div class="ttr-post-media"> <img src="{{ $user->student->school->picture }}" width="200" height="143" alt=""> </div>
                                        <div class="ttr-post-info">
                                            <div class="ttr-post-header">
                                                <h6 class="post-title"><a href="#">{{ $user->student->school->name }}</a></h6>
                                            </div>
                                            {{-- <div class="ttr-post-meta">
                                                <ul>
                                                    <li class="price">
                                                        <del>$190</del>
                                                        <h5>$120</h5>
                                                    </li>
                                                    <li class="review">03 Reseñas</li>
                                                </ul>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget_archive">
                                <h5 class="widget-title style-1">En mi grupo está:</h5>
                                <ul>
                                @foreach ($students as $student)
                                    <li class="active">{{ $student->user->name }}</li>    
                                @endforeach                                    
                                </ul>
                            </div>
                        @elseif($user->teacher)
                            <div class="widget courses-search-bx placeani">
                                <div class="form-group">
                                    <h5>Bienvenido profesor {{ $user->name }}</h5>
                                    {{-- <div class="input-group">
                                        <label>Buscar Cursos</label>
                                        <input name="dzName" type="text" required class="form-control">
                                    </div> --}}
                                </div>
                            </div>
                            {{-- <div class="widget widget_archive">
                                <h5 class="widget-title style-1">Tu escuela es:</h5>
                                <ul>
                                    <li class="active"><a href="{{ route('details', $user->student->school->id) }}">{{ $user->student->school->name }}</a></li>
                                </ul>
                            </div> --}}
                            {{-- <div class="widget">
                                <a href="#"><img src="assets/images/adv/adv.jpg" alt=""/></a>
                            </div> --}}
                            {{-- <div class="widget recent-posts-entry widget-courses">
                                <h5 class="widget-title style-1">Mi escuela es:</h5>
                                <div class="widget-post-bx">                                
                                    <div class="widget-post clearfix">
                                        <div class="ttr-post-media"> <img src="{{ $user->student->school->picture }}" width="200" height="143" alt=""> </div>
                                        <div class="ttr-post-info">
                                            <div class="ttr-post-header">
                                                <h6 class="post-title"><a href="#">{{ $user->student->school->name }}</a></h6>
                                            </div>
                                            <div class="ttr-post-meta">
                                                <ul>
                                                    <li class="price">
                                                        <del>$190</del>
                                                        <h5>$120</h5>
                                                    </li>
                                                    <li class="review">03 Reseñas</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="widget widget_archive">
                                <h5 class="widget-title style-1">En mi grupo está:</h5>
                                <ul>
                                @foreach ($students as $student)
                                    <li class="active">{{ $student->user->name }}</li>    
                                @endforeach                                    
                                </ul>
                            </div> --}}
                        @else
                        <div class="widget courses-search-bx placeani">
                                <div class="form-group">
                                    <h5>Hola {{ $user->name }}</h5>
                                    
                                    {{-- <div class="input-group">
                                        <label>Buscar Cursos</label>
                                        <input name="dzName" type="text" required class="form-control">
                                    </div> --}}
                                </div>
                            </div>
                            {{-- <div class="widget widget_archive">
                                <h5 class="widget-title style-1">Tu escuela es:</h5>
                                <ul>
                                    <li class="active"><a href="{{ route('details', $user->student->school->id) }}">{{ $user->student->school->name }}</a></li>
                                </ul>
                            </div> --}}
                            {{-- <div class="widget">
                                <a href="#"><img src="assets/images/adv/adv.jpg" alt=""/></a>
                            </div> --}}
                            {{-- <div class="widget recent-posts-entry widget-courses">
                                <h5 class="widget-title style-1">Mi escuela es:</h5>
                                <div class="widget-post-bx">                                
                                    <div class="widget-post clearfix">
                                        <div class="ttr-post-media"> <img src="{{ $user->student->school->picture }}" width="200" height="143" alt=""> </div>
                                        <div class="ttr-post-info">
                                            <div class="ttr-post-header">
                                                <h6 class="post-title"><a href="#">{{ $user->student->school->name }}</a></h6>
                                            </div> --}}
                                            {{-- <div class="ttr-post-meta">
                                                <ul>
                                                    <li class="price">
                                                        <del>$190</del>
                                                        <h5>$120</h5>
                                                    </li>
                                                    <li class="review">03 Reseñas</li>
                                                </ul>
                                            </div> --}}
                                        {{-- </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="widget widget_archive">
                                <h5 class="widget-title style-1">En mi grupo está:</h5>
                                <ul>
                                @foreach ($students as $student)
                                    <li class="active">{{ $student->user->name }}</li>    
                                @endforeach                                    
                                </ul>
                            </div> --}}
                        @endif
                    </div>

                    {{-- Conenido --}}
                    
                    <div class="col-lg-9 col-md-8 col-sm-12">
                    @if($user->student)
                        <h3>Mis Clases</h3>
						<div class="row">
                            @foreach($courses as $course)
                                <div class="col-md-6 col-lg-4 col-sm-6 m-b30">
                                    <div class="cours-bx">
                                        <div class="action-box">
                                            <img src="{{ $course->picture }}" alt="{{ $course->name }}">
                                            <a href="{{ route('class', $course->id) }}" class="btn">Ir a la clase</a>
                                        </div>
                                        <div class="info-bx text-center">
                                            <h5><a href="{{ route('class', $course->id) }}">{{ $course->name }}</a></h5>
                                            <span></span>
                                        </div>
                                        {{-- <div class="cours-more-info">
                                            <div class="review">
                                                <span>3 Review</span>
                                                <ul class="cours-star">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <del></del>
                                                <h5></h5>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @elseif($user->teacher)
                        <h3>Clases/Grupos</h3>
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 m-b30">
                                <table id="clases" class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th width="20px">Código</th>
                                            <th>Nombre</th>
                                            <th>Grupo</th>
                                            <th>Escuela</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($courses as $course)
                                            @foreach($course->groups as $group)
                                                <tr>
                                                    <td><a href="{{ route('class', $course->id) }}">{{ $course->code }}</a></td>
                                                    <td><a href="{{ route('class', $course->id) }}">{{ $course->name }}</a></td>
                                                    <td><a href="{{ route('class', $course->id) }}">{{ $group->name }}</a></td>
                                                    <td><a href="{{ route('class', $course->id) }}">{{ $group->school->name }}</a></td>                                                    
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @else
                        <h3>Clases</h3>
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 m-b30">
                                <h5>Por favor inscribete como alumno, profesor o accede al Dashboard para ver información.</h5>
                                {{-- <table id="clases" class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th width="20px">Código</th>
                                            <th width="150px">Portada</th>
                                            <th>Nombre</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($courses as $course)
                                        <tr>
                                            <td>{{ $course->code }}</td>
                                            <th><img src="{{ $course->picture }}" alt="{{ $course->name }}" class="img-responsive" width="150"></th>
                                            <td>{{ $course->name }}</td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table> --}}
                            </div>
                        </div>
                    @endif
				</div>
			</div>
		</div>
    </div>



    {{-- <div class="section-area section-sp2">
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
        </div> --}}
</div>
<!-- contact area END -->
@endsection
