<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto" href="{{ Request::is('/') ? '#hero' : '/' }}">Home</a></li>
        <li><a class="nav-link scrollto" href="{{ Request::is('/') ? '#about' : '/' }}">About</a></li>
        <li><a class="nav-link scrollto" href="{{ Request::is('/') ? '#portfolio' : '/' }}">Products</a></li>
        <li><a class="nav-link scrollto" href="{{ Request::is('/') ? '#clients' : '/' }}">Clients</a></li>
      <li class="dropdown"><a href="#"><span>Product Details</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
            @foreach ($kategoris as $kategori)
            <li><a href="/home/product-details/{{ $kategori->nama }}">{{ $kategori->nama }}</a></li>
            @endforeach
        </ul>
      </li>
      <li><a class="nav-link scrollto" href="{{ Request::is('/') ? '#contact' : '/' }}">Contact</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav><!-- .navbar -->
