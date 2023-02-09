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
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($blogs as $blog)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $blog->category->name }}</td>
                                    <td>{{ $blog->main_title }}</td>
                                    {{-- <td>{{ $blog->author_id }}</td> --}}
                                    <td>{{ App\Models\User::find($blog->author_id)->name }}</td>
                                    <td>
                                        <img src="{{ asset($blog->image) }}" alt="" height="50" width="50">
                                    </td>
                                    <td>{{ $blog->status ? "Published" : "Unpublished" }}</td>
                                    <td>
                                        <a href="{{ route('detail-blog',['id'=>$blog->id]) }}" class="btn btn-info btn-sm" title="View Blog Details">
                                            <i class="fa fa-book-open"></i>
                                        </a>
                                        <a href="{{ route('update-status',['id'=>$blog->id]) }}" class="btn btn-primary btn-sm" title="Published Blog">
                                            <i class="fa fa-arrow-up"></i>
                                        </a>
                                        <a href="{{ route('edit-blog',['id'=>$blog->id]) }}" class="btn btn-success btn-sm" title="Blog Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ route('delete-blog',['id'=>$blog->id]) }}" class="btn btn-danger btn-sm" title="Blog Delete">
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
