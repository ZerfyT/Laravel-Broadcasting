<div class="navbar bg-base-100">
    <div class="flex-1">
        <a href="{{ route('home') }}" class="btn btn-ghost text-xl">Laravel Broadcasting</a>
    </div>

    <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
            <li><a href="{{ route('users') }}">Users</a></li>
            <li><a href="{{ url('/laravel-websockets') }}">WebSocket Log</a></li>
            <li><a href="{{ url('/logs') }}">Server Log</a></li>
            <li>
                @component('components.theme-changer')
                @endcomponent
            </li>
        </ul>
    </div>
</div>
