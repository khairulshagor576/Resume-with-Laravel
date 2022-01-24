<div class="border-end border-warning h-100">
    <div class="text-center">
        <img src="{{ asset('images/khairul.png') }}" alt="" class="img-fulid rounded-circle mt-3">
        <h5 class="text-white mt-3">Md. Khairul Islam</h5>
    </div>
    <nav class="nav text-center d-flex flex-column">
     <a href="{{ url('/') }}"  class="nav-link {{ Request::routeIs('home')? 'active':"" }}">Home</a>
     <a href="{{ url('/service') }} "  class="nav-link {{ Request::is('service')? 'active':"" }}">Services</a>
     <a href="{{ url('/skill') }}"  class="nav-link {{ Request::is('skill')? 'active':"" }}">Skill</a>
     <a href="{{ url('/contact') }}"  class="nav-link {{ Request::is('contact')? 'active':"" }}">Contact</a>
    </nav>
</div>