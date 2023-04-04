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
            <h1>Demandes</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                <li class="breadcrumb-item active">Messages</li>
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
                            <th scope="col">#</th>
                            <th scope="col">Sujet</th>
                            <th scope="col">Message</th>
                            <th scope="col">Client</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($req as $r)
                            <tr>
                            <th scope="row">#{{$r->id}}</th>
                            <td>{{$r->subject}}</td>
                            <td>{{$r->message}}</td>
                            <td>{{$r->client}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Actions">
                                    <button type="button" class="btn btn-info"><a href="{{route('administrateur.messagedetail',[$r->id])}}"><i class="bi bi-tag"></i></button>                                            
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
    @include('layouts.admin.components.partials.footer')
</body>
</html>