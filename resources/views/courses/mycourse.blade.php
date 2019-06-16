@extends('layouts.app')

@section('content')
<!-- inner page banner -->
<div class="page-banner ovbl-dark" style="background-image:url({{ $course->picture }});">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white">{{ $course->name }}</h1>
         </div>
    </div>
</div>
<!-- Breadcrumb row -->
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="#">Home</a></li>
            <li>Detalels del curso</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb row END -->
<!-- inner page banner END -->
<div class="content-block">
    <!-- About Us -->
    <div class="section-area section-sp1">
        <div class="container">
             <div class="row d-flex flex-row-reverse">
                <!-- <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                    <div class="course-detail-bx">
                        <div class="course-price">
                            <del>$190</del>
                            <h4 class="price">$120</h4>
                        </div>
                        <div class="course-buy-now text-center">
                            <a href="#" class="btn radius-xl text-uppercase">Comprar este curso</a>
                        </div>
                        <div class="teacher-bx">
                            <div class="teacher-info">
                                <div class="teacher-thumb">
                                    <img src="assets/images/testimonials/pic1.jpg" alt=""/>
                                </div>
                                <div class="teacher-name">
                                    <h5>Zoraida Álvarez</h5>
                                    <span>Lic. Intervención Educativa</span>
                                </div>
                            </div>
                        </div>
                        <div class="cours-more-info">
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
                            <div class="price categories">
                                <span>Categorías</span>
                                <h5 class="text-primary">Robótica</h5>
                            </div>
                        </div>
                        <div class="course-info-list scroll-page">
                            <ul class="navbar">
                                <li><a class="nav-link" href="#overview"><i class="ti-zip"></i>Overview</a></li>
                                <li><a class="nav-link" href="#curriculum"><i class="ti-bookmark-alt"></i>Curriculum</a></li>
                                <li><a class="nav-link" href="#instructor"><i class="ti-user"></i>Instructor</a></li>
                                <li><a class="nav-link" href="#reviews"><i class="ti-comments"></i>Reviews</a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="col-lg-9 col-md-8 col-sm-12"> -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="courses-post">
                        {{-- <div class="ttr-post-media media-effect">
                            <a href="#"><img src="{{ $course->picture }}" alt="Photo by Jean-Philippe Delberghe on Unsplash"></a>
                        </div> --}}
                        <div class="ttr-post-info">
                            <div class="ttr-post-title ">
                                <h2 class="post-title">{{ $course->name }}</h2>
                            </div>
                            <div class="ttr-post-text">
                                <p>{{ $course->description }}</p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="courese-overview" id="overview">
                        <h4>Overview</h4>
                        <div class="row">
                            <div class="col-md-12 col-lg-4">
                                <ul class="course-features">
                                    <li><i class="ti-book"></i> <span class="label">Lecturas</span> <span class="value">4</span></li>
                                    <li><i class="ti-help-alt"></i> <span class="label">Quizzes</span> <span class="value">1</span></li>
                                    <li><i class="ti-time"></i> <span class="label">Duración</span> <span class="value">6 houras</span></li>
                                    <li><i class="ti-stats-up"></i> <span class="label">Enfocado a</span> <span class="value">Primaria alta</span></li>
                                    <li><i class="ti-smallcap"></i> <span class="label">Idioma</span> <span class="value">Español</span></li>
                                    <li><i class="ti-user"></i> <span class="label">Alumnos</span> <span class="value">32</span></li>
                                    <li><i class="ti-check-box"></i> <span class="label">Valoraciones</span> <span class="value">Si</span></li>
                                </ul>
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <h5 class="m-b5">Descripción del Curso</h5>
                                <p>DISEÑAR Y CONSTRUIR: 1</p></br>
                                <p>Diseñaremos un modelo base, al que daremos instrucciones básicas para calcular que distancia recorre por cada rotación, y haremos algunos cálculos matemáticos que nos ayuden a establecer el inicio de un vehículo autónomo.</p>
                                <h5 class="m-b5">Recursos</h5>
                                <p>Descarga los recursos de apoyo en el siguiente link: <a href="#">Guia para el alumno</a></p>
                                <h5 class="m-b5">En este curso aprenderás:</h5>
                                <ul class="list-checked primary">
                                    <li>MI AUTO DEL FUTURO</li>
                                    <li>GIROS Y VUELTAS</li>
                                    <li>ESQUIVANDO OBSTÁCULOS </li>
                                    <li>RECORRIDO AUTÓNOMO</li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    <div class="m-b30" id="curriculum">
                        <h4>Contenido del curso</h4>
                        <ul class="curriculum-list">
                                <li>
                                    <h5>Contenido del Curso</h5>
                                    <p>{!! $course->editor !!}</p>
                                    {{-- <ul>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>Lección 1.</span> Introducción
                                            </div>
                                            <span>12 minutos</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>Lección 2.</span> Uber da el primer vistazo de su carro autónomo en Pittsburgh
                                            </div>
                                            <span>1:30 minutos</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>Lección 3.</span> Diseñar y construir
                                            </div>
                                            <span>60 minutes</span>
                                        </li>
                                    </ul> --}}
                                </li>
                            </ul>

                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    {{-- <h4>Curso</h4>
                        <iframe src ="{{asset('/assets/pdf/CLASES-EXTRAS-1-4.pdf')}}" width="100%" height="600px"></iframe> --}}
                        <h5>Test de Evaluación</h5>

                        <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                            <div class="panel">
                                <div class="acod-head">
                                    <h6 class="acod-title">
                                        <a data-toggle="collapse" href="#faq1" class="collapsed" data-parent="#faq1" aria-expanded="false">
                                        Pregunta de opción múltiple </a> </h6>
                                </div>
                                <div id="faq1" class="acod-body collapse" style="">
                                    <div class="acod-content">
                                        <div class="respuestas">
                                        <input type="radio" name="preg1" value="1" /> Respuesta 1<br />
                                        <input type="radio" name="preg1" value="2" /> Respuesta 2<br />
                                        <input type="radio" name="preg1" value="3" /> Respuesta 3<br />
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="acod-head">
                                    <h6 class="acod-title">
                                        <a data-toggle="collapse" href="#faq2" class="collapsed" data-parent="#faq2" aria-expanded="false">
                                        Pregunta tipo select</a> </h6>
                                </div>
                                <div id="faq2" class="acod-body collapse" style="">
                                    <div class="acod-content">
                                        <select name="pregunta2">
                                            <option>Respuesta 1</option>
                                            <option>Respuesta 2</option>
                                            <option>Respuesta 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="acod-head">
                                    <h6 class="acod-title">
                                        <a data-toggle="collapse" href="#faq3" class="collapsed" data-parent="#faq3" aria-expanded="false">
                                        Pregunta con múltiples respuestas </a> </h6>
                                </div>
                                <div id="faq3" class="acod-body collapse" style="">
                                    <div class="acod-content">
                                        <input type="checkbox" name="transporte" value="1"> Opción 1<br>
                                        <input type="checkbox" name="transporte" value="2" checked> Opción 2<br>
                                        <input type="checkbox" name="transporte" value="3"> Opción 3<br>
                                        <input type="checkbox" name="transporte" value="4"> Opción 4<br>
                                        <input type="checkbox" name="transporte" value="5"> Opción 5<br>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="acod-head">
                                    <h6 class="acod-title">
                                        <a data-toggle="collapse" href="#faq4" class="collapsed" data-parent="#faq4" aria-expanded="false">
                                        Respuesta abierta corta </a> </h6>
                                </div>
                                <div id="faq4" class="acod-body collapse" style="">
                                    <div class="acod-content">
                                        <input type="text" placeholder="Tu respuesta aquí...">
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="acod-head">
                                    <h6 class="acod-title">
                                        <a data-toggle="collapse" href="#faq5" class="collapsed" data-parent="#faq5">
                                        Respuesta abierta larga </a> </h6>
                                </div>
                                <div id="faq5" class="acod-body collapse">
                                    <div class="acod-content">
                                        <textarea name="textarea" rows="12" cols="50" placeholder="Tu respuesta aquí..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="" id="instructor">
                        <h4>Instructor</h4>
                        {{-- <div class="instructor-bx">
                            <div class="instructor-author">
                                <img src="assets/images/testimonials/pic1.jpg" alt="">
                            </div>
                            <div class="instructor-info">
                                <h6>Zoraida Álvarez </h6>
                                <span>Profesor</span>
                                <ul class="list-inline m-tb10">
                                    <li><a href="#" class="btn sharp-sm facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="btn sharp-sm twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="btn sharp-sm linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" class="btn sharp-sm google-plus"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                                <p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                            </div>
                        </div> --}}
                        <div class="instructor-bx">
                            <div class="instructor-author">
                                <img src="assets/images/testimonials/pic2.jpg" alt="">
                            </div>
                            <div class="instructor-info">
                                <h6>Abelardo Moreno </h6>
                                <span>Profesor</span>
                                <ul class="list-inline m-tb10">
                                    <li><a href="#" class="btn sharp-sm facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="btn sharp-sm twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="btn sharp-sm linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" class="btn sharp-sm google-plus"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                                <p class="m-b0"></p>
                            </div>
                        </div>
                    </div>
                    <div class="" id="reviews">
                        <h4>Reviews</h4>

                        <div class="review-bx">
                            <div class="all-review">
                                <h2 class="rating-type">3</h2>
                                <ul class="cours-star">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>3 Rating</span>
                            </div>
                            <div class="review-bar">
                                <div class="bar-bx">
                                    <div class="side">
                                        <div>5 star</div>
                                    </div>
                                    <div class="middle">
                                        <div class="bar-container">
                                            <div class="bar-5" style="width:90%;"></div>
                                        </div>
                                    </div>
                                    <div class="side right">
                                        <div>150</div>
                                    </div>
                                </div>
                                <div class="bar-bx">
                                    <div class="side">
                                        <div>4 star</div>
                                    </div>
                                    <div class="middle">
                                        <div class="bar-container">
                                            <div class="bar-5" style="width:70%;"></div>
                                        </div>
                                    </div>
                                    <div class="side right">
                                        <div>140</div>
                                    </div>
                                </div>
                                <div class="bar-bx">
                                    <div class="side">
                                        <div>3 star</div>
                                    </div>
                                    <div class="middle">
                                        <div class="bar-container">
                                            <div class="bar-5" style="width:50%;"></div>
                                        </div>
                                    </div>
                                    <div class="side right">
                                        <div>120</div>
                                    </div>
                                </div>
                                <div class="bar-bx">
                                    <div class="side">
                                        <div>2 star</div>
                                    </div>
                                    <div class="middle">
                                        <div class="bar-container">
                                            <div class="bar-5" style="width:40%;"></div>
                                        </div>
                                    </div>
                                    <div class="side right">
                                        <div>110</div>
                                    </div>
                                </div>
                                <div class="bar-bx">
                                    <div class="side">
                                        <div>1 star</div>
                                    </div>
                                    <div class="middle">
                                        <div class="bar-container">
                                            <div class="bar-5" style="width:20%;"></div>
                                        </div>
                                    </div>
                                    <div class="side right">
                                        <div>80</div>
                                    </div>
                                </div>
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
