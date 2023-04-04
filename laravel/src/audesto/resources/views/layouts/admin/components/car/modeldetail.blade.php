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
            <h1>List Model of Cars</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                    <li class="breadcrumb-item">Cars</li>
                    <li class="breadcrumb-item">List Model</li>
                    <li class="breadcrumb-item active">Detail Model</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Model 1</h5>

                    <!-- Multi Columns Form -->
                    <form method="post" action="{{ route('Administrateur.updatemodel') }}">
                        @csrf
                        <div class="col-md-12">
                            <label for="inputName5" class="form-label">Nom</label>
                            <input type="text" value="{{$model[0]->nom}}" class="form-control" id="inputName5" placeholder="Nom du Model" name="nom">
                        </div>

                        <div class="col-md-12">
                            <label for="inputEmail5" class="form-label">Description</label>
                            <textarea class="form-control" id="inputEmail5" style="height: 100px;" placeholder="Place your description" name="description">{{$model[0]->description}}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="formFileDisabled" class="form-label">Image Upload</label>
                            <input class="form-control" type="file" id="formFileDisabled" />
                        </div>
                        <div class="col-md-6">
                            <label for="inputAddress5" class="form-label">Title</label>
                            <input type="text" name="titre" value="{{$model[0]->titre}}" class="form-control" id="inputAddres5s" placeholder="Title of model">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Recommandation</label>
                            <select id="inputState" class="form-select" name="recommandation">
                                @foreach($recom as $rec)
                                <option value="{{$rec->id}}">Age minimal : {{$rec->age_minimum}} , Permis vieux de : {{$rec ->ancienete_permis}} ans </option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Categorie</label>
                            <select id="inputState" class="form-select" name="categorie">
                                @foreach($cat as $ca)
                                @if($ca->id ==$model[0]->categorie )
                                <option value="{{$ca->id}}" selected> {{$ca->nom}}</option>
                                @endif
                                @if($ca->id !=$model[0]->categorie )
                                <option value="{{$ca->id}}"> {{$ca->nom}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Transmission</label>
                            <select id="inputState" class="form-select" name="transmission">
                                @foreach($trans as $transmission)
                                <option value="{{$transmission->id}}"> {{$transmission->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col md-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">L</label>
                            <input type="number" value="{{$model[0]->longeur}}" class="form-control" placeholder="Longeur" name="longeur">
                        </div>
                        <div class="col md-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">W</label>
                            <input type="number" value="{{$model[0]->largeur}}" class="form-control" placeholder="largeur" name="largeur">
                        </div>
                        <div class="col md-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">H</label>
                            <input type="number" value="{{$model[0]->hauteur}}" class="form-control" placeholder="hauteur" name="hauteur">
                        </div>
                        <div class="col md-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">D</label>
                            <input type="number" value="{{$model[0]->portes}}" class="form-control" placeholder="Nombre de Portes">
                        </div>
                        <div class="col md-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">P</label>
                            <input type="number" class="form-control" value="{{$model[0]->places}}" placeholder="Nombre de places" name="places">
                        </div>
                        <div class="col md-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">P</label>
                            <input type="number" class="form-control" value="{{$model[0]->prix}}" placeholder="Prix" name="prix">
                            <input type="number" value="{{$model[0]->id}}" name="id" hidden>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Mettre a jour</button>
                            <button type="reset" class="btn btn-secondary"><a href="{{route('administrateur.listmodel')}}">Reset</a></button>
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