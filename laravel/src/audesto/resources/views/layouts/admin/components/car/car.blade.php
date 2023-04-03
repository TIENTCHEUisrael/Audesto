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
            <h1>Ajouter une Voiture</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('administrateur.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Car</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Nouvelle Voiture</h5>

                    <!-- Multi Columns Form -->
                    <form class="row g-3" method="post" action="{{ route('Administrateur.savecar') }}">
                        @csrf
                        <div class="col-md-12">
                            <label for="inputName5" class="form-label">Matricule</label>
                            <input type="text" name="matricule" class="form-control" id="inputName5" placeholder="Matricule" required>
                        </div>

                        <div class="col-md-6">
                            <label for="formFileDisabled" class="form-label">Image Upload</label>
                            <input class="form-control" type="file" id="formFileDisabled" />
                        </div>
                        <div class="col-md-6">
                            <label for="inputAddress5" class="form-label">Chassis</label>
                            <input type="text" name="chassis" class="form-control" id="inputAddres5s" placeholder="Chaissis" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Model</label>
                            <select id="inputState" class="form-select" name="modele">
                                @foreach($model as $mod)
                                <option value="{{$mod->id}}">{{$mod->nom}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Utilisable
                                </label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </form><!-- End Multi Columns Form -->

                </div>
            </div>
        </section>
    </main>
    <!-- ======= Footer ======= -->
    @include('layouts.admin.components.partials.footer')
</body>

</html>