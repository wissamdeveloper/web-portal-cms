@extends('layouts.mpt')

@section('title')
    {{ trans('mpt.title.home') }}
@endsection

@section('content')
<!-- home section starts  -->

<div class="home" id="home">

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>


    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('vendor/images/slider.png')}}" class="d-block w-100" alt="..."  style="max-height: 600px;" >
        <div class="carousel-caption d-none d-md-block text-left" style="buttom: 70px; color:#fff;">
            <h1>Vote pour soutenir les projects algériens nominés poue le Prix 2021 du sommet mondial sur la Société de l'information -WSIS Prizes 2021-</h1>
            <p>Lorem ipsum dummy text goes here.</p>
            <a href="#" class="btn" style="background-color: rgb(92,134,211);">{{trans('mpt.button.read_more.value')}}</a>
          </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('vendor/images/textjuridique.png')}}" class="d-block w-100" alt="..." width="300" style="max-height: 600px;">
        <div class="carousel-caption d-none d-md-block text-left">
          <h1>La vie est meilleure lorsque nous sommes connectés</h1>
          <p>Lorem ipsum dummy text goes here.</p>
          <a href="#" class="btn" style="background-color: rgb(92,134,211);">{{trans('mpt.button.read_more.value')}}</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('vendor/images/service1.png')}}" class="d-block w-100" alt="..." style="max-height: 600px;">
        <div class="carousel-caption d-none d-md-block text-left">
            <h1></h1>
            <p></p>
            {{-- <a href="#" class="btn" style="background-color: rgb(92,134,211);">{{trans('mpt.button.read_more.value')}}</a> --}}
          </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('vendor/images/service1.png')}}" class="d-block w-100" alt="..." style="max-height: 600px;">
        <div class="carousel-caption d-none d-md-block text-left">
            <h1>la poste, toujours plus proche de Vous</h1>
            <p></p>
            <a href="#" class="btn" style="background-color: rgb(92,134,211);">{{trans('mpt.button.read_more.value')}}</a>
          </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('vendor/images/service1.png')}}" class="d-block w-100" alt="..." style="max-height: 600px;">
        <div class="carousel-caption d-none d-md-block text-left">
            <h1>4G Officiellement en algérie</h1>
            <p></p>
            <a href="#" class="btn" style="background-color: rgb(92,134,211);">{{trans('mpt.button.read_more.value')}}</a>
          </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading">{{ trans('mpt.carousel.aproposdumpt') }}</h1>

    <div class="row">

        <div class="image">
            <img src="{{asset('vendor/images/poste.png')}}" alt="" >
        </div>

        <div class="content">
            <h3>{{ trans('mpt.carousel.ministeredespostesetdestelecomunicaion') }}</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus qui ea ullam, enim tempora ipsum fuga alias quae ratione a officiis id temporibus autem? Quod nemo facilis cupiditate. Ex, vel?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit amet enim quod veritatis, nihil voluptas culpa! Neque consectetur obcaecati sapiente?</p>
            <a href="#" class="btn" style="background-color: rgb(92,134,211);">{{ trans('mpt.button.read_more.value') }}</a>
        </div>

    </div>

</section>

<!-- about section ends -->
<section class="blogs" id="ACT">

    <h1 class="heading"> {{ trans('mpt.carousel.activites') }} </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="{{asset('vendor/images/service1.png')}}" alt="" style="border-top-left-radius:8px; border-top-right-radius:8px; ">
            </div>
            <div class="content">
                <a href="#" class="title"> {{ trans('mpt.carousel.coop') }} </a>
                <p> {{ trans('mpt.carousel.coopp') }}</p>
                <a href="#" class="btn" style="background-color: rgb(92,134,211);">{{ trans('mpt.button.read_more.value') }}</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="{{asset('vendor/images/service2.png')}}" alt="" style="border-top-left-radius:8px; border-top-right-radius:8px; ">
            </div>
            <div class="content">
                <a href="#" class="title"> {{ trans('mpt.carousel.coopin') }}</a>
                <p> {{ trans('mpt.carousel.coopinn') }}</p>
                <a href="#" class="btn" style="background-color: rgb(92,134,211)";>{{ trans('mpt.button.read_more.value') }}</a>
            </div>
        </div>



    </div>

</section>
<!--Actualites-->

  <!-- blogs section starts  -->
<section class="blogs "  id="blogs">

    <h1 class="heading"> {{ trans('mpt.carousel.actualites') }}  </h1>
    <a href="{{ route('mpt.articles') }}"  class="btn m-5" > {{trans('mpt.button.read_more.tt')}}</a>
    <div  style="display: flex;">
    @forelse ($posts as $post)
  <div class="box-container m-3 text-center " >
    <div class="box " >
      @if (file_exists(public_path($post->thumbnail)))
        <img src="{{asset($post->thumbnail)}}" style="width:300px; height:200px;  border-top-left-radius:8px; border-top-right-radius:8px;" >

      @else
<img class="img-fluid " src="http://placehold.it/750x300" >

      @endif
        <div class="content">
            <a href="{{route('mpt.posts.detail',['slug' => $post->slug])}}" class="title">{{ $post->title }}</a>
            <p>{{$post->description}}</p>
            <a href="{{ route('mpt.posts.detail',['slug' => $post->slug]) }}" class="btn" style="background-color: rgb(92,134,211);">
                {{trans('mpt.button.read_more.value')}}
            </a>
        </div>
    </div>
</div>

@empty
<h3 class="text-center">
    {{ trans('mpt.no_data.posts') }}
</h3>
@endforelse
    </div>
</section>

<!-- blogs section ends -->


<!--Actualites end-->
<!--text-juridique----->
<section class="blogs" id="TJ">

    <h1 class="heading">{{ trans('mpt.carousel.textesjuridiques') }}</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="{{ asset('vendor/images/im2.jpg') }}" alt="" style="border-top-left-raduis:8px; border-top-right-radius:8px; ">
            </div>
            <div class="content">
                <a href="#" class="title">{{ trans('mpt.carousel.px') }}</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>

                <a href="#" class="btn" style="background-color: rgb(92,134,211);">{{ trans('mpt.button.read_more.value') }}</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="{{asset('vendor/images/tj.png')}}" alt="" style="border-top-left-radius:8px; border-top-right-radius:8px; ">
            </div>
            <div class="content">
                <a href="#" class="title">{{ trans('mpt.carousel.pe') }}</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                <a href="#" class="btn" style="background-color: rgb(92,134,211);">{{ trans('mpt.button.read_more.value') }}</a>
            </div>
        </div>


    </div>

</section>


<section class="chifre" id="chifre">

    <h1 class="heading"> {{ trans('mpt.carousel.chiffre') }} </h1>
    <div class="card-deck">
        <div class="card">
            <div class="card-body text-center ">
                <h5 class="card-title display-4" style="color: #4845d4;">4 709 374</h5>
                <p class="card-text display-5">{{ trans('mpt.carousel.ab') }}</p>
                <p class="card-text"><small class="text-muted">au 31/06/2020</small></p>

              </div>
        </div>
        <div class="card">
            <div class="card-body text-center ">
                <h5 class="card-title display-4" style="color: #4845d4;">4 709 374</h5>
                <p class="card-text display-5">{{ trans('mpt.carousel.ab') }}</p>
                <p class="card-text"><small class="text-muted">au 31/06/2020</small></p>
              </div>
        </div>
        <div class="card">
            <div class="card-body text-center ">
                <h5 class="card-title display-4" style="color: #4845d4;">4 709 374</h5>
                <p class="card-text display-5">{{ trans('mpt.carousel.ab') }}</p>
                <p class="card-text"><small class="text-muted">au 31/06/2020</small></p>
              </div>
        </div>
        <div class="card">
            <div class="card-body text-center ">
              <h5 class="card-title display-4" style="color: #4845d4;">4 709 374</h5>
              <p class="card-text display-5">{{ trans('mpt.carousel.ab') }}</p>
              <p class="card-text"><small class="text-muted">au 31/06/2020</small></p>
            </div>
          </div>
      </div>

</section>

<section id="contact"> <h1 class="heading"> {{ trans('mpt.carousel.contact') }}</h1>
    <div class="contact">


      <div class="container">
          <div class="contactInfo">
              <div class="box">
                  <div class="icon">  <i class="fa fa-home" style="color:rgb(92, 134, 211);"></i> </div>
                  <div class="text">
                      <h3>Adress</h3>
                      <p>4 Bd Colonel Krim BelkacemS<br>Alger Ctre 16027, Algerie</p>
                  </div>
              </div>
              <div class="box">
                  <div class="icon"> <i class="fa fa-phone" style="color:rgb(92, 134, 211);"></i></div>
                  <div class="text">
                      <h3>Téléohone</h3>
                      <p>+213 (0)21711220</p>
                  </div>
              </div>
              <div class="box">
                  <div class="icon"><i class="fa fa-home" style="color:rgb(92, 134, 211);"></i></i>
                  </div>
                  <div class="text">
                      <h3>Fax</h3>
                      <p>+213 (0)21037740 </p>
                  </div>
              </div>
              <div class="box">
                  <div class="icon">            <i class="fa fa-envelope" style="color:rgb(92, 134, 211);"></i>
                  </div>
                  <div class="text">
                      <h3>Mail</h3>
                      <p>contact@mpt.gov.dz</p>
                  </div>
              </div>
              <div class="box">
                <div class="icon">            <i class="fa fa-home" style="color:rgb(92, 134, 211);"></i>
                </div>
                <div class="text">
                    <h3>Jours de réception</h3>
                    <p>Dimanche à jeudi <br> 08h00 à 16h30</p>
                </div>
            </div>

          </div>
          <div class="contactForm">
              <form>
                  <h2>Envoyer message</h2>
                  <div class="inputBox">
                      <input type="text" name="" required="required">
                      <span>Nom</span>
                  </div>
                  <div class="inputBox">
                      <input type="text" name="" required="required">
                      <span>Prénom</span>
                  </div>
                  <div class="inputBox">
                      <textarea required="required"></textarea>
                      <span>votre message....</span>
                  </div>
                  <div class="inputBox">
                      <input type="submit" name="" value="envoyer">
                  </div>
              </form>

          </div>
      </div>

    </section>
     <!---maps----->
     <section class="location">

         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1597.9281203187097!2d3.051963287988899!3d36.77401605620936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fb25a1bde0819%3A0x486b7bd231b9f048!2sMinist%C3%A8re%20de%20la%20Poste%2C%20des%20T%C3%A9l%C3%A9communications%2C%20des%20Technologies%20et%20du%20Num%C3%A9rique!5e0!3m2!1sfr!2sdz!4v1629541505607!5m2!1sfr!2sdz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     </section>

     </section>

  <!-- contact section ends -->
@endsection
