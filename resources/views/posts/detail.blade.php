@extends('layouts.dashboard')

@section('title')
    {{ trans('posts.title.detail') }}
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('detail_post', $post) }}
@endsection

@section('content')
  <!-- content -->
  <div class="row">
        <div class="col-md-12">
           <div class="card">
              <div class="card-body">
                  @if (file_exists(public_path($post->thumbnail)))
                      <!-- thumbnail:true -->
                        <div class="post-tumbnail" style="background-image: url('{{ $post->thumbnail }}');">
                        </div>
                  @else
                    <!-- thumbnail:false -->
                    <svg class="img-fluid" width="100%" height="400" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                    <rect width="100%" height="100%" fill="#868e96"></rect>
                    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="#dee2e6" dy=".3em"
                    font-size="24">
                        {{$post->title}}
                    </text>
                    </svg>
                  @endif


                 <!-- title -->
                 <h2 class="my-1">
                    {{$post->title}}

                 </h2>
                 <!-- description -->
                 <p class="text-justify">
                    {{$post->description}}

                 </p>
                 <!-- categories -->
                 @foreach ($categories as $category)
                 <span class="badge badge-primary">{{$category->title}}</span>
                 @endforeach

                 <!-- content -->
                 <div class="py-1">
                     {!!$post->content!!}
                 </div>
                 <!-- tags  -->
                 @foreach ($tags as $tag)
                  <span class="badge badge-info">#{{$tag->title}}</span>
                 @endforeach

                 <div class="d-flex justify-content-end">
                    <a href="{{ route('posts.index') }}" class="btn btn-primary mx-1" role="button">
                       {{ trans('posts.button.back.value') }}
                    </a>
                 </div>
              </div>
           </div>
        </div>
     </div>

@endsection

@push('css-internal')
        <!-- style -->
<style>
    .post-tumbnail {
     width: 100%;
     height: 400px;
     background-repeat: no-repeat;
     background-position: center;
     background-size: cover;
  }
  </style>
@endpush
