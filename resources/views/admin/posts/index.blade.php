@extends('default.baseof', [
'layout' => 'dashboard',
'navTitle' => 'Posts'
])

@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div>
                    <h4 class="card-title float-left">Posts.</h4>
                    <div class="float-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('post.create') }}" role="button">
                            <span class="material-icons md-24 align-middle font-weight-bold mr-2">add</span>
                            Add new post
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body ">
                <table class="table">
                    <thead class="thead">
                        <tr>
                            <th scope="col">{{ __('m.post thumb') }}</th>
                            <th scope="col">{{ __('m.post original') }}</th>
                            <th scope="col">{{ __('m.post link') }}</th>
                            <th scope="col">{{ __('m.type') }}</th>
                            <th scope="col">{{ __('m.is published') }}</th>
                            <th scope="col">{{ __('m.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($posts as $post)
                        <tr>
                            <th scope="row">
                                @if($post->thumb_img)
                                <img src="{{  '/uploads/original/thumb/' . $post->thumb_img }}" class="img-fluid img-thumbnail mh-60"</th>
                                @elseif($post->type == 1)
                                <img src="{{  '/uploads/original/' . $post->original }}" class="img-fluid img-thumbnail mh-60"</th>
                                @else
                                <img src="/video.png" class="img-fluid img-thumbnail mh-60"</th>
                                @endif
                            <td>{{ $post->original }}</td>
                            <td>{{ $post->link }}</td>
                            <td><span class="material-icons md-24">
                                @switch($post->type)
                                @case(1)
                                    photo
                                    @break
                                @case(2)
                                    volume_down
                                    @break
                                @case(3)
                                    local_movies    
                                    @break
                                @case(4)
                                    link 
                                    @break
                                @default
                                    error
                                @endswitch
                                </span>
                            </td>
                            @if($post->is_published)
                            <td><span class="material-icons text-success md-24">done</span></td>
                            @else
                            <td><span class="material-icons text-danger md-24">not_interested</span></td>
                            @endif
                            <td>
                                <form action="{{ route('post.destroy', $post->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">{{ __('m.destroy') }}</button>
                                </form>
                                <a href="{{ route('post.edit', $post->id) }}">
                                    <button type="submit" class="btn btn-primary btn-sm">{{ __('m.modify') }}</button>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <th colspan="6">
                                <p>Non ci sono posts nel database</p>
                            </th>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
