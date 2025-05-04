<!-- navbar fadlann -->
@extends('layouts.app')
@section('navbar')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <img src="{{asset('data/telcom.png')}}" width="80" height="60">
      <a class="navbar-brand "  href="#">Koperasi Telkom</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item nav nav-pills">
            <style>.nav-pills .nav-link.active {
                    background-color: red !important;
                    color: white !important;
                }
            </style>
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>

  </nav>
  <br><br><br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="home" id="home">
    <hr>
    <h1><center>HOME</center></h1>
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel aliquam nibh. Vestibulum velit mi, sodales mattis dolor vitae, suscipit rutrum erat. Praesent ut maximus mi, id cursus magna. Mauris ut lobortis odio. Curabitur vitae ante imperdiet, elementum ipsum eget, pretium purus. Etiam tempor malesuada arcu, at fermentum magna gravida ac. Ut efficitur tincidunt lacus, quis vestibulum ex accumsan id. Nunc non nunc et odio pellentesque mattis eu at nulla. Sed malesuada erat a nunc venenatis, nec lacinia tellus porta. Nunc suscipit erat iaculis volutpat luctus. Proin sit amet lacinia purus. Donec malesuada diam at ipsum mollis bibendum. Maecenas porttitor sem a suscipit posuere. </p>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="services" id="services">
    <hr>
    <h1><center>SERVICES</center></h1>
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel aliquam nibh. Vestibulum velit mi, sodales mattis dolor vitae, suscipit rutrum erat. Praesent ut maximus mi, id cursus magna. Mauris ut lobortis odio. Curabitur vitae ante imperdiet, elementum ipsum eget, pretium purus. Etiam tempor malesuada arcu, at fermentum magna gravida ac. Ut efficitur tincidunt lacus, quis vestibulum ex accumsan id. Nunc non nunc et odio pellentesque mattis eu at nulla. Sed malesuada erat a nunc venenatis, nec lacinia tellus porta. Nunc suscipit erat iaculis volutpat luctus. Proin sit amet lacinia purus. Donec malesuada diam at ipsum mollis bibendum. Maecenas porttitor sem a suscipit posuere. </p>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="contact" id="contact">
    <hr>
    <h1><center>CONTACT</center></h1>
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel aliquam nibh. Vestibulum velit mi, sodales mattis dolor vitae, suscipit rutrum erat. Praesent ut maximus mi, id cursus magna. Mauris ut lobortis odio. Curabitur vitae ante imperdiet, elementum ipsum eget, pretium purus. Etiam tempor malesuada arcu, at fermentum magna gravida ac. Ut efficitur tincidunt lacus, quis vestibulum ex accumsan id. Nunc non nunc et odio pellentesque mattis eu at nulla. Sed malesuada erat a nunc venenatis, nec lacinia tellus porta. Nunc suscipit erat iaculis volutpat luctus. Proin sit amet lacinia purus. Donec malesuada diam at ipsum mollis bibendum. Maecenas porttitor sem a suscipit posuere. </p>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br>
    </nav> 
  @endsection

<!-- footer andika -->
@section('footer')
  <footer>
  <footer class="bg-dark text-white text-center py-4">
    <div class="container">
        <p>&copy; {{ date('Y') }} My Website. All rights reserved.</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="/privacy" class="text-white">tentang kami</a></li>
            <li class="list-inline-item"><a href="/terms" class="text-white">aktivitas </a></li>
            <li class="list-inline-item"><a href="/contact" class="text-white">Contact</a></li>
        </ul>
    </div>
  </footer>
  </footer>
@endsection