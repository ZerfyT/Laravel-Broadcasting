@extends('layouts.main')

@section('content')

<div class="flex flex-col">
    <!-- Create new user button -->
    <a href="{{ route('user.create') }}" class="my-3 p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Create new user</h5>
    </a>

    @foreach ($users as $user)
        <div class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $user->name }}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $user->email }}</p>
        </div>
    @endforeach

</div>


@endsection
