@extends('layouts.main')

@section('content')
    <div class="flex">
        <div id="notification-count" class="stats shadow">
            <div class="stat">
                <div class="stat-figure text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="inline-block w-8 h-8 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <div class="stat-title">Notifications</div>
                <div class="stat-value text-secondary">2.6M</div>
                <div class="stat-desc">21% more than last month</div>
            </div>

        </div>
    </div>
    <div class="notification-list">

        {{-- @foreach ($notifications as $notification) --}}
        @component('components.notification', ['notification' => 'Sample Notification'])
        @endcomponent
        {{-- @endforeach --}}
    </div>
@endsection
