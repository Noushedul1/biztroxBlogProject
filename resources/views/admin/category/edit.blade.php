<!DOCTYPE html>
<html lang="en">
    <head>
        @include('master.admin.layouts.header')
    </head>
    <body class="sb-nav-fixed">
        @include('master.admin.layouts.navbar')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('master.admin.layouts.sidebar')
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 offset-3 my-2">
                                <h4 class="text-center">Add Category</h4>
                                <form action="{{ route('update-category',['id'=>$category->id]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Category Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Category Description</label>
                                        <textarea name="description" id="" cols="30" rows="5" class="form-control">
                                            {{ $category->description }}
                                        </textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Category Image</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                    <div class="mb-3">
                                        <img src="{{ asset($category->image) }}" alt="" height="100" width="100">
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary" type="submit">Update Category</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                @include('master.admin.layouts.footer')
            </div>
        </div>
       @include('master.admin.layouts.script')
    </body>
</html>
