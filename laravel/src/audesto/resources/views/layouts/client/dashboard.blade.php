<!DOCTYPE html>
<html lang="fr">

@include('layouts.client.partials.topbar')

<body>

    <!-- ======= Header ======= -->
    @include('layouts.client.partials.header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('layouts.client.partials.sidenav')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('client.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Cette Année</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Réservation Complètes Effectuées <span>| Cette Annee</span>
                                    </h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri-car-fill"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$complet[0]->num}}</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Cette Année</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Réservation Incomplètes <span>| Cette Année</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri-car-line"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$incomplet[0]->num}}</h6>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Cette Année</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Dernières Réservations <span>| Cette année</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">id</th>
                                                <th scope="col">Modèle</th>
                                                <th scope="col">Durée/Jours</th>
                                                <th scope="col">Montant</th>
                                                <th scope="col">Lieux</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($reservations as $reservation)
                                            <tr>
                                                <th scope="row"><a href="#">#{{$reservation -> id}}</a></th>
                                                <td>
                                                    <bold>{{$reservation -> mod}}</bold>
                                                </td>
                                                <td>
                                                    <bold>{{$reservation -> dur}}</bold>
                                                </td>
                                                <td>XAF {{$reservation -> montant}}</td>
                                                <td>{{$reservation -> agrrue}},{{$reservation -> agrquar}}<br>|<br>{{$reservation -> agdrue}},{{$reservation -> agdquar}} </td>
                                                <td><span class="badge bg-success">{{$reservation -> statut}}</span></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                        <!-- Top Selling -->
                        <div class="col-12">
                            <div class="card top-selling overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Cette Année</a></li>
                                    </ul>
                                </div>

                                <div class="card-body pb-0">
                                    <h5 class="card-title">Modèles de Véhicules les plus solliciter <span>| Cette
                                            Année</span></h5>

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
                                                    <img src="{{$model -> image}}" alt="Profile" class="rounded-circle" width="60" height="36">
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
                        </div><!-- End Top Selling -->

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <!-- News & Updates Traffic -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>
                                <li><a class="dropdown-item" href="#">Cette Année</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Echanges <span>| Cette Année</span></h5>
                            @foreach($contact as $echa)
                            <div class="news">
                                <div class="post-item clearfix">
                                    <img src="{!! url('assets/clientassets/img/news-1.jpg') !!}" alt="">
                                    <h4><a href="#">{{$echa->question}}</a></h4>
                                    <p>{{$echa->reponse}}</p>
                                </div>
                                @endforeach
                            </div><!-- End sidebar recent posts-->

                        </div>
                    </div><!-- End News & Updates -->

                </div><!-- End Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layouts.client.partials.footer')

</body>

</html>