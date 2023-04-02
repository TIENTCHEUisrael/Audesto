
<!DOCTYPE html>
<html lang="fr">
@include('layouts.client.partials.topbar')
<link rel="stylesheet" href="{!! url('assets/clientassets/css/garage/styles.css') !!}" />
<body>

  <!-- ======= Header ======= -->
  @include('layouts.client.partials.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('layouts.client.partials.sidenav')
  <!-- End Sidebar-->
    <div class="container">
        <div class="slide"
            style="background-image: url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');">
            <h3>Porshe</h3>
        </div>
        <div class="slide" style="
          background-image: url('https://images.unsplash.com/photo-1494905998402-395d579af36f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');
        ">
            <h3>Ford</h3>
        </div>
        <div class="slide" style="
          background-image: url('https://images.unsplash.com/photo-1555215695-3004980ad54e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');
        ">
            <h3>Bmw</h3>
        </div>
        <div class="slide" style="
          background-image: url('https://images.unsplash.com/photo-1542282088-72c9c27ed0cd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80');
        ">
            <h3>Audi</h3>
        </div>
        <div class="slide" style="
          background-image: url('https://images.unsplash.com/photo-1563720360172-67b8f3dce741?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80');
        ">
            <h3>Land Rover</h3>
        </div>
    </div>


  <!-- ======= Footer ======= -->

  <script src="{!! url('assets/clientassets/js/app.js') !!}"></script>
</body>

</html>
