@extends('master.front.master')
@section('title','Blog-Details')
@section('body')
<section class="page-title overlay" style="background-image: url({{ asset('/') }}website/images/1.jpg1'
<div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-white font-weight-bold">Blog Single</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Blog Single</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- blog single -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="border rounded bg-white">
          <img class="img-fluid w-100 rounded-top" src="{{ asset($blog->image) }}" alt="blog-image">
          <div class="p-4">
            <h3>{{ $blog->main_title }}</h3>
            <p>
              {{ $blog->short_description }}
            </p>
            <div class="bg-gray p-5 rounded mb-60">
              <p class="text-dark font-primary mb-30">.</p>
              <div>
                {{ $blog->long_description }}
              </div>
            </div>
        </div>
        <div class="py-5 border-bottom mb-100">
          <div class="row">
            <div class="col-lg-5 mb-4 mb-lg-0">
              <!-- share-icon -->
              <div class="d-flex">
                <span class="font-weight-light mt-2 mr-3">Share:</span>
                <ul class="list-inline d-inline-block">
                  <li class="list-inline-item">
                    <a class="share-icon bg-facebook" href="#">
                      <i class="ti-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="share-icon bg-twitter" href="#">
                      <i class="ti-twitter-alt"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="share-icon bg-linkedin" href="#">
                      <i class="ti-linkedin"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="share-icon bg-google" href="#">
                      <i class="ti-google"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-7">
              <!-- tags -->
              <div class="d-flex">
                <span class="font-weight-light mt-2 mr-3">Tags:</span>
                <ul class="list-inline tag-list">
                    @foreach($categories as $category)
                        <li class="list-inline-item"><a href="{{ route('blog-category',['id'=>$category->id]) }}">
                            {{ $category->name }}
                        </a></li>
                    @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- comments -->
        <div>
          <h4 class="mb-20">Comments (6)</h4>
          <!-- comment item -->
          @foreach($comments as $data)
          <div class="d-flex mb-4">
            <div class="mr-3">
              {{-- <img class="img-fluid rounded w-100" src="{{ asset('/') }}website/images/comme1pg" alt="user-image"> --}}
            </div>
            <div class="border rounded py-3 px-4">
              <div class="border-bottom mb-10">
                <h5>{{ App\Models\FrontUser::find($data->id)->name }}</h5> {{-- Ibelievethisisnotrightway --}} 
                <h6 class="font-weight-light">Few Hours Ago</h6>
                <p>{{ $data->comment }}</p>
              </div>
              {{-- <div class="d-flex justify-content-between">
                <div>
                  <a class="d-inline-block text-dark mr-2" href="#">
                    <i class="mr-1 ti-thumb-up"></i>62</a>
                  <a class="d-inline-block text-dark mr-2" href="#">Reply</a>
                </div>
                <!-- ratings -->
                <div>
                  <span class="text-color mr-2">Rated</span>
                  <ul class="list-inline d-inline-block">
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="ti-star golden"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="ti-star golden"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="ti-star golden"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="ti-star golden"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="ti-star text-color"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div> --}}
            </div>
          </div>
          @endforeach
          <!-- comment item -->
          {{-- <div class="mb-50 ml-65">
            <a class="text-color text-underline" href="#">View All Comments</a>
          </div> --}}
          <!-- comment form -->
          <div>
            @if(Session::get('user_id'))                                                                  
            <h4>Add your comment:</h4>
            <form action="{{ route('new-comment',['id'=>$blog->id]) }}" class="row" method="POST">
              @csrf
              <div class="col-12">
                <textarea name="comment" class="form-control mb-30 p-2" placeholder="Your comment here"
                  style="height: 180px;"></textarea>
              </div>
              <div class="col-12">
                <button class="btn btn-sm btn-primary" type="submit" value="send">Submit</button>
              </div>
            </form>
            @else 
            <h1>For Comment Please  <a href="{{ route('user-login',['id'=>$blog->id]) }}">Login</a></h1>
            @endif
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <!-- Sidebar -->
        <div class="bg-white px-4 py-100 sidebar-box-shadow">
          <!-- Search Widget -->
          <div class="mb-50">
            <h4 class="mb-3">Search Here</h4>
            <div class="search-wrapper">
              <input type="text" class="form-control" name="search" placeholder="Type Here...">
            </div>
          </div>
          <!-- categories -->
          <div class="mb-50">
            <h4 class="mb-3">Categories</h4>
            <ul class="pl-0 mb-0">
              <li class="border-bottom">
                <a href="#" class="d-block text-color py-10">Business Analysis</a>
              </li>
              <li class="border-bottom">
                <a href="#" class="d-block text-color py-10">Consultancy</a>
              </li>
              <li class="border-bottom">
                <a href="#" class="d-block text-color py-10">Investment</a>
              </li>
              <li class="border-bottom">
                <a href="#" class="d-block text-color py-10">Profit & Growth</a>
              </li>
              <li>
                <a href="#" class="d-block text-color py-10">Marketing Guidance</a>
              </li>
            </ul>
          </div>
          <!-- Widget Recent Post -->
          <div class="mb-50">
            <h4 class="mb-3">Recent News</h4>
            <div class="d-flex py-3 border-bottom">
              <div class="mr-4">
                <a href="blog-single.html">
                  <img class="rounded" src="{{ asset('/') }}website/images/post-1sm-01.jpg" alt="post-thumb">
                </a>
              </div>
              <div>
                <h6 class="mb-3">
                  <a class="text-dark" href="blog-single.html">Marketing Strategy 2017-2018.</a>
                </h6>
                <p class="meta">16 Dec, 2018</p>
              </div>
            </div>
            <div class="d-flex py-3 border-bottom">
              <div class="mr-4">
                <a href="blog-single.html">
                  <img class="rounded" src="{{ asset('/') }}website/images/post-1sm-02.jpg" alt="post-thumb">
                </a>
              </div>
              <div class="content">
                <h6 class="mb-3">
                  <a class="text-dark" href="blog-single.html">Jack Ma & future of E-commerce</a>
                </h6>
                <p class="meta">16 Dec, 2018</p>
              </div>
            </div>
            <div class="d-flex py-3">
              <div class="mr-4">
                <a href="blog-single.html">
                  <img class="rounded" src="{{ asset('/') }}website/images/post-1sm-03.jpg" alt="post-thumb">
                </a>
              </div>
              <div class="content">
                <h6 class="mb-3">
                  <a class="text-dark" href="blog-single.html">Jack Ma & future of E-commerce</a>
                </h6>
                <p class="meta">16 Dec, 2018</p>
              </div>
            </div>
          </div>
          <!-- Widget Tags -->
          <div class="mb-50">
            <h4 class="mb-3">Tags</h4>
            <ul class="list-inline tag-list">
              <li class="list-inline-item">
                <a href="#">Business</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Marketing</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Finance</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Consultancy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Market Analysis</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Rvenenue</a>
              </li>
            </ul>
          </div>
          <!-- Widget Newsletter -->
          <div class="newsletter">
            <h4 class="mb-3">Stay Updated</h4>
            <form action="#">
              <input type="text" name="name" id="name" class="form-control" placeholder="Name">
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
              <button type="submit" class="btn btn-primary btn-sm">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /blog-single -->
@endsection