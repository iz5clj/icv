{{-- Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red" --}}
{{-- Tip 2: you can also add an image as background using data-image tag --}}
<div class="sidebar" data-color="orange">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="https://auxe.net" class="simple-text">
                Auxe
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item {{ Route::is('dashboard') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <span class="material-icons mr-1" style="vertical-align: middle;">dashboard</span>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ Route::is('message.index') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('message.index') }}">
                    <span class="material-icons mr-1" style="vertical-align: middle;">note</span>
                    <p>Messages</p>
                </a>
            </li>
            <li class="nav-item {{ Route::is('post.index') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('post.index') }}">
                    <span class="material-icons mr-1" style="vertical-align: middle;">note</span>
                    <p>Posts</p>
                </a>
            </li>
            <li class="nav-item {{ Route::is('info') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('info') }}">
                    <span class="material-icons mr-1" style="vertical-align: middle;">settings</span>
                    <p>System</p>
                </a>
            </li>
            <li class="nav-item active active-pro">
                <a class="nav-link active" href="#">
                    <p>Always at bottom</p>
                </a>
            </li>
        </ul>
    </div>
</div>