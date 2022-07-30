@extends('layouts.mpt')

@section('title')
    {{ trans('mpt.title.articles') }}
@endsection

@section('content')
<h2 class="display-2" style="margin-top: 200px; margin-left:100px; color:blue;">
 {{ trans('mpt.title.articles') }}
</h2>
<div class="container" style="margin-top: 50px;  width:100%; display:flex;">
    <div class="card text-left" >
        @forelse ($posts as $post)
        <div class="card-body border-bottom " >
            <div style="display:flex; "> <h5 class="card-title display-4">{{ $post->title }} </h5>

                     @foreach ($post->categories as $Category)
                     <h2><span class="badge badge-primary display-2 ml-3">{{$Category->title}}</span></h2>

                @endforeach
            </div>

            <h2 style="font-size: 12px;">{{ $post->created_at->format('d/m/Y')}} </h2>


            <p class="card-text display-6 ">{{$post->description}}</p>
            <a href="{{route('mpt.posts.detail',['slug' => $post->slug])}}" class="btn btn-primary float-right">{{ trans('mpt.button.read_more.value') }}</a>
          </div>:;

        @empty
            <h3 class="text-center">
                {{ trans('mpt.no_data.posts') }}
            </h3>
        @endforelse

    </div>
</div>
    @if ($posts->hasPages())
    <div class="row" style="margin-left:60px;">
        <div class="col display-4 m-5 text-center" >
            {{ $posts->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
    @endif

@endsection
