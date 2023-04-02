<!DOCTYPE html>
<html lang="en">
@include('layouts.client.partials.topbar')

<body>

  <!-- ======= Header ======= -->
  @include('layouts.client.partials.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('layouts.client.partials.sidenav')
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Contact</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('client.dashboard') }}">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Contact</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section contact">

      <div class="row gy-4">

        <div class="col-xl-6">

          <div class="row">
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>Rue Krystal Palace,<br>Akwa, Douala</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-telephone"></i>
                <h3>Appeler Nous</h3>
                <p>+237 673-95-59-09<br>+237 620-73-63-98</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-envelope"></i>
                <h3>Laisser nous un Courrier</h3>
                <p>andersontchamba@gmail.com<br>audesto@service.fr</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-clock"></i>
                <h3>Horaires</h3>
                <p>Lundi - Friday<br>8:00 - 20:00</p>
                <p>Samedi - Dimanche<br>9:00 - 18:00</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-6">
          <div class="card p-4">
            <form action="{{ route('client.savecontact') }}" method="post" class="php-email-form">
            @csrf  
            <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Nom" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Sujet" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Message envoyé avec succès. Merci!</div>

                  <button type="submit" class="btn btn-primary" >Send Message</button>
                  <!-- Vertically centered Modal -->
                  <!-- End Vertically centered Modal-->

                </div>

              </div>
            </form>
          </div>

        </div>

      </div>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.client.partials.footer')
</body>

</html>