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
                                <h4 class="text-center my-3">Front End Value Change</h4>
                                <h4 class="text-center">{{ Session::get('message') }}</h4>
                                <form action="{{ route('change-frontend') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Home Logo Change</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Home Email Change</label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Home Number Change</label>
                                        <input type="text" class="form-control" name="number">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Footer Description Change</label>
                                        <textarea name="footerDescription" id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary" type="submit">Front End Change</button>
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
