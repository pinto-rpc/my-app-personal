@extends('layout')

@section('content')
<!--=================================
=            404 Section            =
==================================-->
<section class="moduler wrapper_404">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >404</h1>
                    <h2 class="wow fadeInUp animated" data-wow-delay=".6s">Opps! You have some problems</h2>
                    <p class="wow fadeInUp animated" data-wow-delay=".9s">The page you are looking for was moved, removed, renamed or might never existed.</p>
                    <a href="{{route('home')}}" class="btn btn-dafault btn-home wow fadeInUp animated" data-wow-delay="1.1s">Go Home</a>
                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection