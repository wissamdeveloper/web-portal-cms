@extends('layouts.mpt')

@section('title')
    {{ request()->get('keyword') }}
@endsection

@section('content')
<h2 class="display-2" style="margin-top: 200px; margin-left:100px; color:blue;">
 {{ trans('mpt.title.articles') }}
</h2>
<div class="container" style="margin-top: 50px; margin-buttom: -150px;">
    <div class="card text-left" >
        @forelse ($posts as $post)
        <div class="card-body border-bottom" >
            <h5 class="card-title display-4">{{ $post->title }} </h5>


            <p class="card-text display-6 ">{{$post->description}}</p>
            <a href="{{route('mpt.posts.detail',['slug' => $post->slug])}}" class="btn btn-primary float-right">{{ trans('mpt.button.read_more.value') }}</a>
          </div>

        @empty
            <h3 class="text-center">
                {{ trans('mpt.no_data.search_posts') }}
            </h3>
        @endforelse

    </div>
    @if ($posts->hasPages())
    <div class="row">
        <div class="col display-4 m-5 text-center">
            {{ $posts->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
    @endif
@endsection
