@extends('admin.layout')

@section('content')
{{-- @dd($users->all()) --}}
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="h3 mb-0 text-gray-800">Semua User</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="/admin/user/create" class="btn btn-primary mb-4 mt-2">Tambah User Baru</a>
                        @if(session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>
                                    Berhasil!
                                </strong>
                                {{session('status')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            {{-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div> --}}
                        @elseif(session('update_status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>
                                    Berhasil!
                                </strong>
                                {{session('update_status')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @elseif(session('delete_status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>
                                    Berhasil!
                                </strong>
                                {{session('delete_status')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">User Role</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach($users as $user)
                                        <tr>
                                            <th scope="row" class="text-center">{{$i}}</th>
                                            <td>{{$user->name}}</td>
                                            <td class="col-lg-3">{{$user->email}}</td>
                                            <td class="col-lg-3">{{$user->user_role}}</td>
                                            <td class="text-center">
                                                <a href="/admin/user/{{ $user->id }}/edit" class="btn btn-warning mb-2">Edit</a>
                                                <form action="/admin/user/{{ $user->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Yakin ingin menghapus')" class="btn btn-danger" type="submit">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection('content')