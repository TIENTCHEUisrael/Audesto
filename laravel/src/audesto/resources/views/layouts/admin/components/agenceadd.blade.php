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
            <h1>Ajouter une Agence</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('administrateur.dashboard')}}"></a></li>
                    <li class="breadcrumb-item">Réservation</li>
                    <li class="breadcrumb-item active">Ajouter Agences</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nouvelle Agence</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" action="{{route('Administrateur.saveagence') }} " method="post">
                            @csrf
                            <div class="col-md-12">
                                <label for="inputName5" class="form-label">Quartier</label>
                                <input type="text" name="quartier" class="form-control" placeholder="Quartier">
                            </div>
                            <div class="col-md-6">
                                <label for="inputAddress5" class="form-label">Rue</label>
                                <input type="text" name="rue" class="form-control" id="inputAddres5s" placeholder="Rue">
                            </div>
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">City</label>
                                <select id="inputState" class="form-select" name="city">
                                    @foreach($cities as $c)
                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Ajouter Agences</button>
                            </div>
                        </form><!-- End Multi Columns Form -->

                    </div>
                </div>
            </section>
        </section>
    </main>
    @include('layouts.admin.components.partials.footer')
</body>

</html>