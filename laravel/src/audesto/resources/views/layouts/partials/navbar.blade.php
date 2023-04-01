<header class="p-3 bg-success text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "",
      "url": "/",
      "logo": "{!! url('images/default-logo.png') !!}"
    }
  </script>
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 text-end">
        <li><a href="#" class="nav-link px-2 text-secondary">Se Connecter</a></li>
        <li><a href="#" class="nav-link px-2 text-secondary">S'inscrire</a></li>
        <li><a href="#" class="nav-link px-2 text-secondary">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 text-secondary">About</a></li>
      </ul>

      @auth
        {{auth()->user()->name}}
        <div class="text-end">
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
        </div>
      @endauth

      @guest
        <div class="text-end">
          <a href="{{ route('register.perform') }}" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
        </div>
      @endguest
    </div>
  </div>
</header>