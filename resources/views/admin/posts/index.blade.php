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
                            <th scope="col">{{ __('m.post description') }}</th>
                            <th scope="col">{{ __('m.post thumb') }}</th>
                            <th scope="col">{{ __('m.type') }}</th>
                            <th scope="col">{{ __('m.updated') }}</th>
                            <th scope="col">{{ __('m.is published') }}</th>
                            <th scope="col">{{ __('m.publisher') }}</th>
                            <th scope="col">{{ __('m.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($posts as $post)
                        <tr>
                            <th scope="row"><a href="{{ route('post.edit', $post->id) }}">{{ $post->link }}</a></th>
                            <td>{{ $post->link }}</td>
                            <td>{{ $post->type }}</td>
                            <td>{{ $post->updated_at }} by {{ $post->user->name }}</td>
                            <td>
                                <form action="{{ route('post.destroy', $post->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Elimina</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <th colspan="7">
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
