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
            <h1>Liste des Modèles de voitures</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('administrateur.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item">Cars</li>
                    <li class="breadcrumb-item active">List Model</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">List</h5>

                            <!-- Table with stripped rows -->
                            <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Appercu</th>
                                                <th scope="col">Modele</th>
                                                <th scope="col">Caractéristiques</th>
                                                <th scope="col">Tariff</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($modeles as $model)
                                            <tr>
                                                <th scope="row">
                                                    <img src="{{$model -> image}}" alt="Profile" class="rounded-circle" width="180" height="100">
                                                </th>
                                                <td>
                                                    <bold>{{$model -> nom}}</bold>
                                                </td>
                                                <td><i class="ri-door-fill"></i>{{$model -> portes}} | <i class="ri-luggage-deposit-fill"></i>{{$model -> valises}} | <i class="ri-user-3-fill"></i>{{$model -> places}}
                                                    | <i class="bx bx-sitemap"></i>{{$model -> trans}}
                                                    <br>
                                                    <bold>Longeur :</bold> {{$model -> longeur}} <br>
                                                    <bold>Largeur : </bold> {{$model -> largeur}} <br>
                                                    <bold>Hauteur :</bold> {{$model -> hauteur}}

                                                </td>
                                                <td>{{$model -> prix}}</td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <!-- ======= Footer ======= -->
    @include('layouts.admin.components.partials.footer')
</body>

</html>