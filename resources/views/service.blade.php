@extends('layout')

@section('content')
 <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Service</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="{{route('home')}}">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Service</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- 
================================================== 
    Service Page Section  Start
================================================== -->
<section id="service-page" class="pages service-page">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">What We Love To Do</h2>
                    <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis porro recusandae non quibusdam iure adipisci.</p>
                    <div class="row service-parts">
                        <div class="col-md-6">
                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="600ms">
                                <i class="ion-ios-paper-outline"></i>
                                <h4>BRANDING</h4>
                                <p>Veritatis eligendi, dignissimos. Porta fermentum mus aute pulvinar earum minus platea massa feugiat rutrum urna facilisi ipsameum.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="800ms">
                                <i class="ion-ios-pint-outline"></i>
                                <h4>DESIGN</h4>
                                <p>Veritatis eligendi, dignissimos. Porta fermentum mus aute pulvinar earum minus platea massa feugiat rutrum urna facilisi ipsameum.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="1s">
                                <i class="ion-ios-paper-outline"></i>
                                <h4>DEVELOPMENT</h4>
                                <p>Veritatis eligendi, dignissimos. Porta fermentum mus aute pulvinar earum minus platea massa feugiat rutrum urna facilisi ipsameum.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="1.1s">
                                <i class="ion-ios-paper-outline"></i>
                                <h4>THEMEING</h4>
                                <p>Veritatis eligendi, dignissimos. Porta fermentum mus aute pulvinar earum minus platea massa feugiat rutrum urna facilisi ipsameum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="block">
                    <img class="img-responsive" src="images/team.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 
================================================== 
    Works Section Start
================================================== -->
<section class="works service-page">
    <div class="container">
        <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">Some Of Our Features Works</h2>
            <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">
                Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere <br> tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.
            </p>
        <div class="row">
            <div class="col-sm-3">
                 <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                        <img src="images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title" >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/item-1.jpg">Demo</a>        
                                <a target="_blank" href="">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Dew Drop        
                            </a>
                        </h4>
                        <p>
                            Redesigne UI Concept
                        </p>
                    </figcaption>
                </figure>
            </div>

            <div class="col-sm-3">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <img src="images/portfolio/item-2.jpg" class="img-responsive" alt="this is a title" >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/item-2.jpg">Demo</a>        
                                <a target="_blank" href="">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Bottle Mockup        
                            </a>
                        </h4>
                        <p>
                            Lorem ipsum dolor sit.
                        </p>
                    </figcaption>
                </figure>
            </div>

            <div class="col-sm-3">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <img src="images/portfolio/item-3.jpg" class="img-responsive" alt="" >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/item-3.jpg">Demo</a>        
                                <a target="_blank" href="">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Table Design        
                            </a>
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet.
                        </p>
                    </figcaption>
                </figure>
            </div>

            <div class="col-sm-3">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="img-wrapper">
                        <img src="images/portfolio/item-4.jpg" class="img-responsive" alt="" >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/item-4.jpg">Demo</a>        
                                <a target="_blank" href="">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Make Up elements        
                            </a>
                        </h4>
                        <p>
                            Lorem ipsum dolor.
                        </p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

        <!-- 
        ================================================== 
            Clients Section Start
        ================================================== -->
        <section id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="subtitle text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".3s">Our Happy Clinets</h2>
                        <p class="subtitle-des text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, error.</p>
                        <div id="clients-logo" class="owl-carousel">
                            <div>
                                <img src="images/clients/logo-1.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-2.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-3.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-4.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-5.jpg" alt="">
                            </div>
                             <div>
                                <img src="images/clients/logo-1.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-2.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-3.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-4.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



@endsection

