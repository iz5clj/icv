
@extends('default.baseof', [
    'layout' => 'dashboard',
    'navTitle' => __('m.post create')
])
    
@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="inner">
                    <h4 class="card-title">{{ __('m.update post') }}</h4>
                    <p class="card-category">{{ __('m.post info') }}</p>
                </div>
            </div>
            <div class="card-body ">
                <form id="create_post" action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    @php( $action = 'modify')
                    @include('admin.posts.form')
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
    
    