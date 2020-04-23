@php
$navTitle = __('m.message modify');
@endphp

@extends('default.baseof', [
'layout' => 'dashboard',
'navTitle' => $navTitle
])

@section('content')


<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="inner">
                    <h4 class="card-title">{{ __('m.add new message') }}</h4>
                    <p class="card-category">{{ __('m.message info') }}</p>
                </div>
            </div>
            <div class="card-body ">
                <form action="{{ route('message.update', $message->id) }}" method="POST">
                    
                    {{ method_field('PATCH') }}

                    @include('admin.messages.form', [
                        'submitButtonText' => 'Update Message'
                    ])

                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('extra-javascript')
@endsection
