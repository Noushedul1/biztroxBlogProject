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
                                <h4 class="text-center">Blog Detail</h4>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Blog Id</th>
                                        <td>{{ $blog->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Blog Main Title</th>
                                        <td>{{ $blog->main_title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Blog Sub Title</th>
                                        <td>{{ $blog->sub_title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Blog Author</th>
                                        <td>{{ $blog->author_id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Blog Short Description</th>
                                        <td>{{ $blog->short_description }}</td>
                                    </tr>
                                    <tr>
                                        <th>Blog Long Description</th>
                                        <td>{{ $blog->long_description }}</td>
                                    </tr>
                                    <tr>
                                        <th>Blog Image</th>
                                        <td>
                                            <img src="{{ asset($blog->image) }}" alt="" height="200" width="200">
                                        </td>
                                    </tr>
                                </table>
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
