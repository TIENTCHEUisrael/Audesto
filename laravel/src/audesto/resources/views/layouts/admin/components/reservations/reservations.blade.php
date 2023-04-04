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
            <h1>List of Reservation</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                    <li class="breadcrumb-item">Reservation</li>
                    <li class="breadcrumb-item active">List Reservation</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">List</h5>
                            <!-- Vertically centered scrollable modal -->

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Modèle</th>
                                        <th scope="col">Durée/Jours</th>
                                        <th scope="col">Montant</th>
                                        <th scope="col">Lieux</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($res as $reservation)
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
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Actions">
                                                <button type="button" class="btn btn-info"><a href="{{route('Administrateur.reservationdetail',[$reservation->id])}}"><i class="bi bi-tag"></i></button>
                                            </div>
                                        </td>
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
    <!-- Vendor JS Files -->
    @include('layouts.admin.components.partials.footer')
</body>

</html>