<!DOCTYPE html>
<html lang="fr">
@include('layouts.admin.components.partials.topbar')

<body>

    <!-- ======= Header ======= -->
    @include('layouts.admin.components.partials.header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('layouts.admin.components.partials.sidenav')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Liste des Voitures</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('administrateur.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Voitures</li>
              </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
        
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Liste</h5>      
                      <!-- Vertically centered scrollable modal -->             
        
                      <!-- Table with stripped rows -->
                      <table class="table datatable">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Matricule</th>
                            <th scope="col">Model</th>
                            <th scope="col">Disponibilité</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($voitures as $voiture)
                          <tr>
                            <th scope="row">{{$voiture->id}}</th>
                            <td>{{$voiture->matricule}}</td>
                            <td>{{$voiture->model}}</td>
                            <td>
                                @if($voiture->disponibilite ==1){
                                    <span class="badge bg-success">Disponible</span>
                                }
                                @endif
                                @if($voiture->disponibilite !=1){
                                    <span class="badge bg-danger">Indisponible</span>
                                }
                                @endif
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Actions">
                                    <button type="button" class="btn btn-info"><i class="bi bi-eye"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="bi bi-trash2-fill"></i></button>
                                    <button type="button" class="btn btn-light"><a href="./caredit.html"><i class="bi bi-pen"></i></button>                                            
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
    <!-- ======= Footer ======= -->
    @include('layouts.admin.components.partials.footer')
</body>
</html>