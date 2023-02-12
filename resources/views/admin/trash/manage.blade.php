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
                    <div class="card-body">
                        <h4 class="text-center">{{ Session::get('message') }}</h4>
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Category Name</th>
                                    <th>Blog Title</th>
                                    <th>Author Id</th>
                                    <th>Feature Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($trashBlogs as $blog)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $blog->category->name }}</td>
                                    <td>{{ $blog->main_title }}</td>
                                    {{-- <td>{{ $blog->author_id }}</td> --}}
                                    <td>{{ App\Models\User::find($blog->author_id)->name }}</td>
                                    <td>
                                        <img src="{{ asset($blog->image) }}" alt="" height="50" width="50">
                                    </td>
                                    <td>
                                        <a href="{{ route('trash-restore',['id'=>$blog->id]) }}" class="btn btn-info btn-sm" title="Blog Restore">
                                            <i class="fa fa-redo"></i>
                                        </a>
                                        <a href="{{ route('trash-forceDelete',['id'=>$blog->id]) }}" class="btn btn-danger btn-sm" title="Blog Force Delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </main>
                @include('master.admin.layouts.footer')
            </div>
        </div>
       @include('master.admin.layouts.script')
    </body>
</html>
