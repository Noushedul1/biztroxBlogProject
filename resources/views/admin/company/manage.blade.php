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
                            <div class="col-md-6 offset-3">
                                <h3 class="text-center my-3">Company Setting</h3>
                                <h3 class="text-center">{{ Session::get('message') }}</h3>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Email</th>
                                        <th>Number</th>
                                        <th>Image</th>
                                        <th>Delete</th>
                                    </tr>
                                    <tr>
                                        <td>{{ $company->email }}</td>
                                        <td>{{ $company->number }}</td>
                                        <td>
                                            <img src="{{ asset($company->image) }}" alt="" height="60" width="60">
                                        </td>
                                        <td>
                                            <a href="{{ route('frontend-delete',['id'=>$company->id]) }}" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a>
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
