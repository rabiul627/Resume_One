<div class="border-end border-warning h-100">
  <div class="text-center">
    <img src="{{asset('/imgs/IMG_20230128_173927.jpg')}}" alt="" class="img-fluid rounded-circle mt-4">
    <h2 class="text-white mt-2 name">Rabiul islam</h2>
  </div>
  <nav class="nav flex-column text-center mt-3">
      <a href="{{route('home')}}"  class="nav-link {{ Request::routeIs('home') ? 'active' : "" }} home_nav text-black">Home</a>
      <a href="{{route('service-show')}}" class="nav-link {{ Request::routeIs('service-show') ? 'active' : "" }}">Services</a>
      <a href="{{route('contact-show')}}" class="nav-link {{ Request::routeIs('contact-show') ? 'active' : "" }}">Contact</a>
      <a href="{{route('skill-show')}}" class="nav-link {{ Request::routeIs('skill-show') ? 'active' : "" }}">Skill</a>
  </nav>
</div>