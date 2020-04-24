@extends('default.baseof', [
'layout' => 'dashboard',
'navTitle' => 'Messages'
])

@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div>
                    <h4 class="card-title float-left">Messages.</h4>
                    <div class="float-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('message.create') }}"
                            role="button">
                            <span class="material-icons md-24 align-middle font-weight-bold mr-2">add</span>Add new
                            message
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">

                
                <table class="table">
                    <thead class="thead">
                        <tr>
                            <th scope="col">{{ __('m.name') }}</th>
                            <th scope="col">{{ __('m.text') }}</th>
                            <th scope="col">{{ __('m.text') }}</th>
                            <th scope="col">{{ __('m.date') }}</th>
                            <th scope="col">{{ __('m.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($messages as $message)
                        <tr>
                            <th scope="row"><a href="{{ route('message.edit', $message->id) }}">{{ $message->name }}</a></th>
                            <td>{{ $message->text01 }}</td>
                            <td>{{ $message->text02 }}</td>
                            <td>{{ $message->updated }} by {{ $message->user->name }}</td>
                            <td>
                                <form action="{{ route('message.destroy', $message->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Elimina</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <th colspan="5">
                                <p>Non ci sono messagi da listare</p>
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
