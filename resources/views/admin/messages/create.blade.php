@php
$navTitle = __('m.message create modify');
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
                <form action="{{ route('message.store') }}" method="POST">
                    @include('admin.messages.form')
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('extra-javascript')
@endsection
