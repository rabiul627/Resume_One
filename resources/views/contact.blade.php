@extends('components.layouts.layout')
@section('title','Contact')
@section('main-content')
     <div class="container">
        <div class="my-5 mx-3">
            <div class="cnt_heading">
                <h2 class="text-warning border-bottom border-warning">Contact Us</h2>
            </div>
            <div class="text-white my-4">
                <p class="pragraph">Do you have any question? Please do not hesitate to contact. i will come back to you within a hour to help you!</p>
            </div>
           <div class="row text-justify align-items-center">
                <div class="col-sm-8 my-5">
                    <div class="card frm_card">
                        <div class="card-body">
                            <form action="{{route('store-data')}}" method="POST">
                                @csrf
                                       @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{$error}}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                         @endif

                                        @if (session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session()->get('message') }}
                                            </div>
                                        @endif
                                <div class="row g-3 mb-3">
                                    <div class="text-dark col-md-6">
                                        <label class="form-label fw-bold">Name</label>
                                        <input type="text" name="name" value="{{old('name') }}" class="form-control" placeholder="Enter Your Name">
                                    </div>
                                    <div class="text-dark col-md-6">
                                        <label class="form-label fw-bold">Email*</label>
                                        <input type="email" value="{{old('email')}}"  name="email" class="form-control" placeholder="Enter Your Email Address">   
                                    </div>
                                </div>
                                <div class="text-dark mb-3">
                                    <label class="form-label fw-bold">Phone</label>
                                    <input type="number" value="{{old('phone') }}" name="phone" class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="mb-3 text-dark">
                                    <label class="form-label fw-bold">Message</label>
                                    <textarea class="form-control" value="{{old('message') }}" name="message" placeholder="Message" rows="3"></textarea>
                                </div>
                                <button class="btn btn-primary">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa-solid fa-location-dot i_color"></i>
                            <p class="text-white">Dhaka Bangladesh,Barisal</p>
                        </li>
                        <li>
                            <i class="fa-solid fa-phone-flip i_color"></i>
                            <p class="text-white">01862540930</p>
                        </li>
                        <li>
                            <i class="fa-solid fa-envelope i_color"></i>
                            <p class="text-white">mdrabiulislam6262@gmail.com</p>
                        </li>
                    </ul>
                </div>
           </div>
        </div>
        <div class="my-5 text-center">
            <a href="#" target="_blank" class="social_icon"><i class="fa-brands fa-square-facebook i_color"></i></a>
            <a href="#" target="_blank" class="social_icon"> <i class="fa-brands fa-square-instagram i_color"></i></a>
            <a href="#" target="_blank" class="social_icon"><i class="fa-brands fa-twitter i_color"></i></a>
            <a href="#" target="_blank" class="social_icon"> <i class="fa-brands fa-dribbble i_color"></i></a>
        </div>
     </div>
@endsection