@extends('layouts.app')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD user</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('user.create') }}">Input User</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">User id</th>
            <th width="150px" class="text-center">Level id</th>
            <th width="200px" class="text-center">Username</th>
            <th width="200px" class="text-center">Nama</th>
            <th width="150px" class="text-center">Password</th>
        </tr>
        @foreach ($user as $u)
            <tr>
                <td>{{ $u->user_id }}</td>
                <td>{{ $u->level_id }}</td>
                <td>{{ $u->username }}</td>
                <td>{{ $u->nama }}</td>
                <td>{{ substr($u->password, 0, 10) . "..." }}</td>
                <td class="text-center">
                    <form action="{{ route('user.destroy', $u->user_id) }}" method="POST">
                        <a class="btn btn-info btn-sm" href="{{ route('user.show', $u->user_id) }}">Show</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('user.edit', $u->user_id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
