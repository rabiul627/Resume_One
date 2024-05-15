@extends('components.layouts.layout')
@section('title','Home')
@section('main-content')
    <div class="mb-5">
      <div class="img text-center">
        <img src="{{asset('/imgs/home img/IMG-20240508-WA0044.jpg')}}" alt="" class="img-thumbnail mt-4 home_img ">
      </div>
      <div class="mt-3 text-white mx-5 text-justify text-center">
          <h2 class="fw-bold heading">Hello,</h2>
          <div class=" text-center" style="line-height: 2rem;">
            <p class="text-indent:100px; my_info">My Name is Rabiul Islam,i am student of honours second year and my   <span class="text-primary">depertment of geography.</span>  my hometown is barisal sawrupkathi,there are five family members in my family, I am a Web developer and  <span class="text-warning">Coding in my blood</span>, blanditiis molestias facilis, harum quia a iusto debitis sint accusamus aspernatur rerum modi cum ullam <span class="text-danger">earum magnam eaque</span> voluptatem fuga quisquam in corrupti. Commodi!</p>    
          </div>
      </div>
      <div class="text-center">
        <a href="{{route('contact-show')}}" class="btn btn-outline-warning mx-3 my-4">Hire Me</a>
        <a href="{{route('contact-show')}}" class="btn btn-outline-info ">Contact</a>
      </div>
    </div>
@endsection