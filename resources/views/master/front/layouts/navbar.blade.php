<header>
    <!-- top header -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="list-inline text-lg-right text-center">
                        <li class="list-inline-item">
                            <a href="mailto:{{ $frontendChange->email }}">{{ $frontendChange->email}}</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="callto:{{ $frontendChange->number }}">Call Us Now:
                                <span class="ml-2">{{ $frontendChange->number }}</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" id="searchOpen">
                                <i class="ti-search"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- nav bar -->
    <div class="navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{ route('home') }}">
                    {{-- <img src="{{ asset('/') }}website/images/logo.png" alt="logo"> --}}
                    <img src="{{ asset($frontendChange->image) }}" alt="logo" height="100" width="100">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item active">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Home
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="" class="dropdown-toggle nav-link" data-toggle="dropdown">All Blog Category</a>
                            <ul class="dropdown-menu">
                                @foreach($categories as $category)
                                <li><a href="{{ route('blog-category',['id'=>$category->id]) }}" class="dropdown-item">
                                    {{ $category->name }}
                                </a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact-us') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

<!-- Search Form -->
<div class="search-form">
    <a href="#" class="close" id="searchClose">
        <i class="ti-close"></i>
    </a>
    <div class="container">
        <form action="#" class="row">
            <div class="col-lg-10 mx-auto">
                <h3>Search Here</h3>
                <div class="input-wrapper">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Enter Keywords..." required>
                    <button>
                        <i class="ti-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>