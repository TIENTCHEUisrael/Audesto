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
            <h1>Détails</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                <li class="breadcrumb-item">Reservation</li>
                <li class="breadcrumb-item">List Reservation</li>
                <li class="breadcrumb-item active">Reservation Détails</li>
              </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <section class="section">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Réservation</h5>
        
                      <!-- Multi Columns Form -->
                      <form class="row g-3">
                        <div class="col-md-12">
                          <label for="inputName5" class="form-label">Client</label>
                          <input type="text" class="form-control" value="{{$res[0]->name}}" id="inputName5"placeholder="Client fo reservation" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="inputAddress5" class="form-label">Agence de recuperation</label>
                            <input type="text" value="{{$res[0] -> agrrue}},{{$res[0] -> agrquar}}" class="form-control" id="inputAddres5s" placeholder="Agence of Car"readonly>
                          </div>    
                        <div class="col-md-6">
                          <label for="inputAddress5" class="form-label">Agence de dépot</label>
                          <input type="text" value="{{$res[0]-> agdrue}},{{$res[0] -> agdquar}}" class="form-control" id="inputAddres5s" placeholder="Agence of Car"readonly>
                        </div>                                 
                        <div class="col-md-6">
                            <label for="formFileDisabled" class="form-label">Date récupération</label>
                            <input class="form-control" value="{{$res[0]->daterecup}}" type="datetime-local" readonly/>
                        </div>                             
                        <div class="col-md-6">
                            <label for="formFileDisabled" class="form-label">Date de remise</label>
                            <input class="form-control" value="{{$res[0]->date_depot}}"type="datetime-local" readonly/>
                        </div> 
                        <div class="col-md-6">
                            <label for="formFileDisabled" class="form-label">Montant</label>
                            <input class="form-control" value="{{$res[0]->prix}}" type="text" placeholder="Montant de la reservation" readonly/>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Voiture</label>
                            <select id="inputState" class="form-select">
                                @foreach($voi as $v)
                              <option value="{{$v->id}}" selected>{{$v->matricule}}</option>
                              @endforeach
                            </select>
                        </div>

                        <div class="text-center">
                          <button type="submit" class="btn btn-primary">Soumettre</button>
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