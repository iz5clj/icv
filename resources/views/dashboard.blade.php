@extends('default.baseof', [
'layout' => 'dashboard',
'navTitle' => 'Dashboard (new)'
])

@section('content')

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="inner" style="border-bottom: 1px solid #2c2c2c;">
                    <h4 class="card-title">Users</h4>
                    <p class="card-category">Number of registrered users.</p>
                </div>
            </div>
            <div class="card-body ">
                <p>We have {{ $users ?? 'undefined' }} users.</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="inner" style="border-bottom: 1px solid #2c2c2c;">
                    <h4 class="card-title">Messages</h4>
                    <p class="card-category">Number of messages.</p>
                </div>
            </div>
            <div class="card-body ">
                <p>We have {{ $messages ?? 'undefined' }} messages.</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="inner" style="border-bottom: 1px solid #2c2c2c;">
                    <h4 class="card-title">Posts</h4>
                    <p class="card-category">Number of posts.</p>
                </div>
            </div>
            <div class="card-body ">
                <p>We have {{ $posts ?? 'undefined' }} posts (total).</p>
                <p>We have {{ $published_posts ?? 'undefined' }} published posts.</p>
            </div>
        </div>
    </div>
</div>

@endsection
