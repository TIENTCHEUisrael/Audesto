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
                    <li class="breadcrumb-item ">Messages</li>$
                    <li class="breadcrumb-item active">Messages Détails</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section contact ">
            <div class="row gy-4 text-center">

                <div class="col-xl-6">
                    <div class="card p-4">
                        <form action="{{ route('client.savresponse') }}" method="post" class="php-email-form">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" value="{{ $req[0]->client}}" class="form-control" placeholder="Client Name" readonly>
                                    <input type="text" name="id" value="{{ $req[0]->id}}"  hidden>
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" value="{{ $req[0]->email}}" name="email" placeholder="Client Email" readonly>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" value="{{ $req[0]->subject}}" placeholder="Subject" readonly>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" readonly>{{ $req[0]->message}}</textarea>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="response" rows="6" placeholder="response" required>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Votre message a ete envoyer.!</div>

                                    <button type="submit">Send Response</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
    </main>
    @include('layouts.admin.components.partials.footer')
</body>

</html>