@extends('admin.layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="h3 mb-0 text-gray-800">Semua Postingan</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="create_post" class="btn btn-primary mb-4 mt-2">Tambah Postingan Baru</a>
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
                                        <th scope="col">Title</th>
                                        <th scope="col">Excerpt</th>
                                        <th scope="col">Content</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($posts as $post)
                                        <tr>
                                            <th scope="row" class="text-center">{{$i}}</th>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->excerpt}}</td>
                                            <td>{{$post->content}}</td>
                                            <td>
                                                <img src="
                                                @php
                                                    // cek apakah poto nya berasal dari link ataupun dari lokal
                                                    $var = ['jpg', 'jpeg', 'png'];
                                                    $var2 = $post->image;
                                                    $var3 = explode('.', $var2);
                                                    $var3 = strtolower(end($var3));

                                                    if(!in_array($var3, $var)){
                                                        // echo link gambar
                                                        echo"$var2";
                                                    }else{
                                                        // echo path gambar
                                                        echo"http://localhost:8000/assets2/img/$var2";
                                                    }
                                                @endphp
                                                " width="200px">
                                                {{-- @if(filter_var($post->image, FILTER_VALIDATE_URL))
                                                    <img width="200px" src="{{ $post->image }}">
                                                @else 
                                                    <img width="200px" src="{{ asset ('assets2/img/'. $post->image) }}">
                                                @endif --}}
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('posts.id', ['id' => $post->id]) }}" class="btn btn-warning mb-2">Edit</a>
                                                <form action="{{ route('posts.delete', ['id' => $post->id]) }}" method="POST">
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