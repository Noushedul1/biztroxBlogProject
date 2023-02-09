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
                            <div class="col-md-8 offset-2">
                                <h4 class="text-center m-4">Add Blog</h4>
                                <form action="{{ route('create-blog') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <select name="category_id" id="" class="form-control" required>
                                            <option value="" disabled selected>Select Category Name</option>
                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Blog Main Title</label>
                                        <input type="text" class="form-control" name="main_title">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Blog Sub Title</label>
                                        <input type="text" class="form-control" name="sub_title">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Blog Short Description</label>
                                        <textarea name="short_description" id="summernote" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Blog Long Description</label>
                                        <textarea name="long_description" id="summernote" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Blog Image</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary" type="submit">Add Blog</button>
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
       <script>
        $('#summernote').summernote({
            placeholder: 'Hello Bootstrap 5',
            tabsize: 2,
            height: 100
          });
        </script>
    </body>
</html>
