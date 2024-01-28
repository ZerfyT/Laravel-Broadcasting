@extends('layouts.main')

@section('content')
    <div class="">
        <!-- Create new user button -->
        <button class="btn btn-outline btn-primary" onclick="create_user_modal.showModal()">Create New User</button>

        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="hover">
                            <th>{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @include('components.create-user-modal')

    </div>
@endsection
