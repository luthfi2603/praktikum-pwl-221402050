@extends('admin.layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="h3 mb-0 text-gray-800">Edit Postingan</h1>
                    </div>
                </div>
                <div class="row">
                  <div class="col">
                    <a href="/admin/user" class="btn btn-primary mt-2 mb-3">Kembali</a>
                    <div class="col-10">
                        <form action="/admin/user/{{ $user->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $user->name }}" required>
                                @error('name')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $user->email }}" required>
                                @error('email')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="user_role">User Role</label>
                                <select class="form-control" id="user_role" name="user_role">
                                    @if($user->user_role === "admin")
                                        <option value="admin">Admin</option>
                                        <option value="customer">Customer</option>
                                        @elseif($user->user_role === "customer")
                                        <option value="customer">Customer</option>
                                        <option value="admin">Admin</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                                @error('password')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection('content')