<!DOCTYPE html>
<html lang="en">
@include('layouts.admin.components.partials.topbar')

<body>

    <!-- ======= Header ======= -->
    @include('layouts.admin.components.partials.header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('layouts.admin.components.partials.sidenav')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Add Model of Cars</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('administrateur.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item">Cars</li>
                    <li class="breadcrumb-item">List User</li>
                    <li class="breadcrumb-item active">User Details</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Details</h5>

                    <!-- Multi Columns Form -->
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputName5" class="form-label">Name</label>
                            <input type="text" class="form-control" id="inputName5" value="{{$users[0]->name}} " readonly>
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail5" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail5" value="{{$users[0]->email}}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="formFileDisabled" class="form-label">Username</label>
                            <input class="form-control" type="text" id="formFileDisabled" value="{{$users[0]->username}}" readonly />
                        </div>
                        <div class="col-md-6">
                            <label for="inputAddress5" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="inputAddres5s" value="{{$users[0]->phone}} " readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="inputAddress5" class="form-label">Job</label>
                            <input type="text" class="form-control" id="inputAddres5s" value="{{$users[0]->job}}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="inputAddress5" class="form-label">Company</label>
                            <input type="text" class="form-control" id="inputAddres5s" value="{{$users[0]->company}}" readonly>
                        </div>
                    </form><!-- End Multi Columns Form -->

                </div>
            </div>
        </section>
    </main>
    @include('layouts.admin.components.partials.footer')
</body>

</html>