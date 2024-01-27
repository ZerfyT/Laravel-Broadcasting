@extends('layouts.main')

@section('content')
    <div class="flex">
        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <!-- User Creation Form -->
            <input type="text" name="name" placeholder="Name"
                class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <input type="email" name="email" placeholder="Email"
                class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <div class="flex items-center justify-end mt-4">
                <button type="submit"
                    class=" ml-4 p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    {{ __('Create') }}
                </button>
            </div>
        </form>
    </div>
@endsection
