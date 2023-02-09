@extends('master.front.master')
@section('title','Blog Category')
@section('body')
<section class="page-title overlay" style="background-image: url({{ asset('/') }}website/images/blog-1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-white font-weight-bold">Our Blog</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Our Blog</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- blog -->
<section class="section">
    <div class="container">
        <div class="row">
            <!-- blog-item -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-img-wrapper overlay-rounded-top">
                        <img class="card-img-top" src="{{ asset('/') }}website/images/works/work-1.jpg" alt="blog-thumbnail">
                    </div>
                    <div class="card-body p-0">
                        <div class="d-flex">
                            <div class="py-3 px-4 border-right text-center">
                                <h3 class="text-primary mb-0">25</h3>
                                <p class="mb-0">Nov</p>
                            </div>
                            <div class="p-3">
                                <a href="{{ route('blog-detail') }}" class="h4 font-primary text-dark">Cras sed elit sit amet.</a>
                                <p>by Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- blog-item -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-img-wrapper overlay-rounded-top">
                        <img class="card-img-top" src="{{ asset('/') }}website/images/works/work-2.jpg" alt="blog-thumbnail">
                    </div>
                    <div class="card-body p-0">
                        <div class="d-flex">
                            <div class="py-3 px-4 border-right text-center">
                                <h3 class="text-primary mb-0">25</h3>
                                <p class="mb-0">Nov</p>
                            </div>
                            <div class="p-3">
                                <a href="" class="h4 font-primary text-dark">Cras sed elit sit amet.</a>
                                <p>by Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- blog-item -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-img-wrapper overlay-rounded-top">
                        <img class="card-img-top" src="{{ asset('/') }}website/images/works/work-3.jpg" alt="blog-thumbnail">
                    </div>
                    <div class="card-body p-0">
                        <div class="d-flex">
                            <div class="py-3 px-4 border-right text-center">
                                <h3 class="text-primary mb-0">25</h3>
                                <p class="mb-0">Nov</p>
                            </div>
                            <div class="p-3">
                                <a href="blog-single.html" class="h4 font-primary text-dark">Cras sed elit sit amet.</a>
                                <p>by Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- blog-item -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-img-wrapper overlay-rounded-top">
                        <img class="card-img-top" src="{{ asset('/') }}website/images/works/work-4.jpg" alt="blog-thumbnail">
                    </div>
                    <div class="card-body p-0">
                        <div class="d-flex">
                            <div class="py-3 px-4 border-right text-center">
                                <h3 class="text-primary mb-0">25</h3>
                                <p class="mb-0">Nov</p>
                            </div>
                            <div class="p-3">
                                <a href="blog-single.html" class="h4 font-primary text-dark">Cras sed elit sit amet.</a>
                                <p>by Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- blog-item -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-img-wrapper overlay-rounded-top">
                        <img class="card-img-top" src="{{ asset('/') }}website/images/works/work-2.jpg" alt="blog-thumbnail">
                    </div>
                    <div class="card-body p-0">
                        <div class="d-flex">
                            <div class="py-3 px-4 border-right text-center">
                                <h3 class="text-primary mb-0">25</h3>
                                <p class="mb-0">Nov</p>
                            </div>
                            <div class="p-3">
                                <a href="blog-single.html" class="h4 font-primary text-dark">Cras sed elit sit amet.</a>
                                <p>by Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- blog-item -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-img-wrapper overlay-rounded-top">
                        <img class="card-img-top" src="{{ asset('/') }}website/images/works/work-1.jpg" alt="blog-thumbnail">
                    </div>
                    <div class="card-body p-0">
                        <div class="d-flex">
                            <div class="py-3 px-4 border-right text-center">
                                <h3 class="text-primary mb-0">25</h3>
                                <p class="mb-0">Nov</p>
                            </div>
                            <div class="p-3">
                                <a href="blog-single.html" class="h4 font-primary text-dark">Cras sed elit sit amet.</a>
                                <p>by Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- blog-item -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-img-wrapper overlay-rounded-top">
                        <img class="card-img-top" src="{{ asset('/') }}website/images/works/work-2.jpg" alt="blog-thumbnail">
                    </div>
                    <div class="card-body p-0">
                        <div class="d-flex">
                            <div class="py-3 px-4 border-right text-center">
                                <h3 class="text-primary mb-0">25</h3>
                                <p class="mb-0">Nov</p>
                            </div>
                            <div class="p-3">
                                <a href="blog-single.html" class="h4 font-primary text-dark">Cras sed elit sit amet.</a>
                                <p>by Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- blog-item -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-img-wrapper overlay-rounded-top">
                        <img class="card-img-top" src="{{ asset('/') }}website/images/works/work-3.jpg" alt="blog-thumbnail">
                    </div>
                    <div class="card-body p-0">
                        <div class="d-flex">
                            <div class="py-3 px-4 border-right text-center">
                                <h3 class="text-primary mb-0">25</h3>
                                <p class="mb-0">Nov</p>
                            </div>
                            <div class="p-3">
                                <a href="blog-single.html" class="h4 font-primary text-dark">Cras sed elit sit amet.</a>
                                <p>by Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- blog-item -->
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="card-img-wrapper overlay-rounded-top">
                        <img class="card-img-top" src="{{ asset('/') }}website/images/works/work-4.jpg" alt="blog-thumbnail">
                    </div>
                    <div class="card-body p-0">
                        <div class="d-flex">
                            <div class="py-3 px-4 border-right text-center">
                                <h3 class="text-primary mb-0">25</h3>
                                <p class="mb-0">Nov</p>
                            </div>
                            <div class="p-3">
                                <a href="blog-single.html" class="h4 font-primary text-dark">Cras sed elit sit amet.</a>
                                <p>by Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /blog -->
@endsection