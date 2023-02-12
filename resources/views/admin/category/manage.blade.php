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
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Category Name</th>
                                    <th>Category Description</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td>{{ $category->status ? "Published" : "Unpublished" }}</td>
                                    <td>
                                        <img src="{{ asset($category->image) }}" alt="" height="50" width="50">
                                    </td>
                                    <td>
                                        <a href="{{ route('edit-category',['id'=>$category->id]) }}" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ route('delete-category',['id'=>$category->id]) }}" class="btn btn-danger btn-sm" onclick="confirm('Are you sure?');">
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
