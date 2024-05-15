@extends('components.layouts.layout')
@section('title','Skill')
@section('main-content')
<div class="text-white">
    <div class="container my-5 mx-5">
         <div class="cnt_heading">
             <h2 class="text-warning border-bottom border-warning">Skill</h2>
         </div>
         <div class="progress_bar my-4 row">
             <div class="col-sm-5">
                 <div class="text-center mb-2">
                     <a href="#"><i class="fa-brands skill_icn fa-html5"></i></a>
                 </div>
                     <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                         <div class="progress-bar progress-bar-striped" style="width: 75%">75%</div>
                    </div>
                      <div class="text-center mt-4 mb-2">
                          <a href="#"><i class="fa-brands fa-css3-alt skill_icn"></i></a>
                      </div>
                   <div class="progress" role="progressbar" aria-label="Success striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                     <div class="progress-bar progress-bar-striped bg-success" style="width: 70%">70%</div>
                   </div>
                     <div class="text-center mt-4 mb-2">
                         <a href="#"><i class="fa-brands fa-sass skill_icn"></i></a>
                     </div>
                   <div class="progress" role="progressbar" aria-label="Info striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                     <div class="progress-bar progress-bar-striped bg-info" style="width: 50%">50%</div>
                   </div>
                     <div class="text-center mt-4 mb-2">
                         <a href="#"><i class="fa-brands fa-bootstrap skill_icn"></i></a>
                     </div>
                   <div class="progress" role="progressbar" aria-label="Info striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                     <div class="progress-bar progress-bar-striped bg-warning" style="width: 80%">80%</div>
                   </div>
             </div>
            <div class="col-sm-5 pr-3">
               <div class="text-center mb-2">
                   <a href="#"><i class="fa-brands fa-php skill_icn"></i></a>
               </div>
                <div class="progress" role="progressbar" aria-label="Warning striped example" aria-valuenow="60%" aria-valuemin="0" aria-valuemax="100">
                 <div class="progress-bar progress-bar-striped bg-warning" style="width: 60%">60%</div>
               </div>
                <div class="text-center mt-4 mb-2">
                 <a href="#">
                     <i class="fa-brands fa-laravel skill_icn"></i>
                 </a>
                </div>
               <div class="progress" role="progressbar" aria-label="Danger striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                 <div class="progress-bar progress-bar-striped bg-success" style="width: 90%">90%</div>
               </div>
               <div class="text-center mt-4 mb-2">
                 <a href="#">
                     <i class="fa-solid fa-database skill_icn "></i>
                   </a>
               </div>
               <div class="progress" role="progressbar" aria-label="Danger striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                 <div class="progress-bar progress-bar-striped bg-info" style="width: 90%">90%</div>
               </div>
               <div class="text-center mt-4 mb-2">
                 <a href="#" class="">
                     <img src="/imgs/skil icn/icons8-canva.svg" width="35px" class="skill_icn" alt="">
                   </a>
               </div>
               <div class="progress" role="progressbar" aria-label="Danger striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                 <div class="progress-bar progress-bar-striped bg-success" style="width: 39%">39%</div>
               </div>
            </div>
         </div>
    </div>
  </div>
  </nav>
@endsection