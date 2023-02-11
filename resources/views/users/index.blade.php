@extends('layouts.app')
@section('content')
<div class="container">


    <h1>users</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">email</th>
                <th scope="col">post's count</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            $i = 1;
            @endphp
            @forelse ($users as $user)
            <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->posts_count }}</td>
                <td>
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">Show</a>
                    <a href="{{ route('users.update', $user->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="user" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">No users</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{ $users->links() }}
</div>
@endsection
