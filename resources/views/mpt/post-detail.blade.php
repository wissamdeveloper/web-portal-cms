@extends('layouts.mpt')


@section('content')
<div class="display-4"style="color:blue; margin-top:200px; margin-left:100px;">articles - {{$post->title}}</div>
<div class="card" id="element" style="margin-top:60px; margin-left:100px; margin-right:100px;">
        <!-- Title:start -->

    <!-- Title:end -->

    <!-- Breadcrumb:Start -->
    <h2 class="mt-4 mb-3">
        <div style="margin:20px 50px;">  {{$post->title}} </div>
      </h2>
    <!-- Breadcrumb:end -->
   <div class="row mb-3">
        <!-- Post Content Column:start -->
        <div class="col-lg-8">
        <!-- thumbnail:start -->
        @if (file_exists(public_path($post->thumbnail)))
        <img src="{{ asset($post->thumbnail) }}" alt="{{ $post->title }}">
        </div>
      @else
           <img class="img-fluid rounded" src="http://placehold.it/750x300" alt="{{ $post->title }}">
      @endif
        <!-- thumbnail:end -->

        <!-- Post Content:start -->

        <div style="margin-top: 50px; padding:50px;">
           {!! $post->content !!}
        </div>
        <!-- Post Content:end -->

    <div style="display: flex;">
        <button class="rounded-button m-3 display-6" id="print" type="button">
            <ion-icon name="print-outline" size="large"></ion-icon>
        </button>
        <div id="share" class="display-6"></div>
        <button onclick="htmltopdf()" class="btn btn-success ml-4 rounded pt-2 mb-4 mt-4 "><i class="fas fa-file-pdf display-3 mt-2 mb-2"></i> </button>
    </div>

   </div>
</div>
@endsection
