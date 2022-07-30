@extends('layouts.dashboard')

@section('title')
    {{ trans('posts.title.index') }}
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('posts') }}
@endsection

@section('content')

    <div class="row">
  <div class="col-md-12">
     <div class="card">
        <div class="card-header">
           <div class="row">
              <div class="col-md-6">
                 <form action="" method="GET" class="form-inline form-row">
                    <div class="col">
                       <div class="input-group mx-1">
                          <label class="font-weight-bold mr-2">
                          {{ trans('posts.form_control.select.status.label') }}
                          </label>
                          <select name="status" class="custom-select">
                              @foreach ($statuses as $value => $label)
                                  <option value="{{ $value }}" {{ $statusSelected == $value ? 'selected' : null }} >
                                    {{ $label }}
                                </option>
                              @endforeach
                          </select>
                          <div class="input-group-append">
                             <button class="btn btn-primary" type="submit">
                             {{ trans('posts.button.apply.value') }}
                             </button>
                          </div>
                       </div>
                    </div>
                    <div class="col">
                       <div class="input-group mx-1">
                          <input name="keyword" value="{{ request()->get('keyword') }}" type="search" class="form-control"
                          placeholder="{{ trans('posts.form_control.input.search.placeholder') }}">
                          <div class="input-group-append">
                             <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search"></i>
                             </button>
                          </div>
                       </div>
                    </div>
                 </form>
              </div>
              <div class="col-md-6">
              {{-- add post --}}
              @can('post_create')
               <a href="{{ route('posts.create') }}" class="btn btn-primary float-right" role="button">
                    {{trans('posts.button.create.value')}}
                    <i class="fas fa-plus-square"></i>
                 </a>
              @endcan
                 
              </div>
           </div>
        </div>
        <div class="card-body">
           <ul class="list-group list-group-flush">
              <!-- list post -->
              @forelse ($posts as $post)
                  <div class="card my-2">
                     <div class="card-body">
                           <h5>
                           {{ $post->title }}
                           </h5>
                           <p>
                           {{ $post->description }}

                           </p>
                           <div class="float-right">
                              <!-- detail -->
                              @can('post_detail')
                                 <a href="{{ route('posts.show', ['post' => $post]) }}" class="btn btn-sm btn-primary" role="button">
                                 <i class="fas fa-eye"></i>
                              </a>
                              @endcan
                              
                              <!-- edit -->
                              @can('post_update')
                                 <a href="{{ route('posts.edit',['post' => $post]) }}" class="btn btn-sm btn-info" role="button">
                                 <i class="fas fa-edit"></i>
                              </a>
                              @endcan
                              
                              <!-- delete -->
                              @can('post_delete')
                                  <form class="d-inline" role="alert"
                                alert-text= "{{trans('posts.alert.delete.message.confirm',['post'=> $post->title])}}"
                                action="{{ route('posts.destroy',['post' => $post]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                                </form>
                              @endcan
                               
                           </div>
                        </div>
                     </div>

              @empty
              <p>
                  <strong>
                      @if (request()->get('keyword'))
                      {{ trans('posts.label.no_data.search',['keyword' => request()->get('keyword') ]) }}
                      @else
                      {{ trans('posts.label.no_data.fetch') }}
                      @endif
                  </strong>
              </p>

              @endforelse
           </ul>
        </div>
        @if ($posts->hasPages())
     <div class="card-footer">
         {{ $posts->links('vendor.pagination.bootstrap-4') }}
     </div>
        @endif
     </div>
  </div>
</div>

@endsection


@push('javascript-internal')
<script>
$(document).ready(function(){
   //Event : delete posts
   $("form[role='alert']").submit(function(event){

      event.preventDefault();
      Swal.fire({
         title: "{{ trans('posts.alert.delete.title') }}",
         text: $(this).attr('alert-text'),
         icon: 'warning',
         allowOutsideClick: false,
         showCancelButton: true,
         cancelButtonText: "{{ trans('posts.button.cancel.value') }}",
         reverseButtons: true,
         confirmButtonText: "{{ trans('posts.button.delete.value') }}",
      }).then((result) => {
         if (result.isConfirmed) {
            event.target.submit();
         }
      });
      });
});
</script>

@endpush
