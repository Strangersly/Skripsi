@extends('adminpage.layout.main')
@section('breadcrumb')
    <div class="pagetitle">
        <h1>Menu Kategori</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Edit Kategori {{ $menu_category->name }}</li>
                <li class="breadcrumb-item"><a href="/homepage">Home</a></li>
            </ol>
        </nav>
        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addcategory"><i class="bi bi-plus-square"></i> Tambah Kategori</button> --}}
    </div><!-- End Page Title -->
@endsection
@section('content')
    <section class="section">
        <div class="row">
            <div class="card">
                @if (session('erroredit'))
                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                    {{ session('erroredit') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="card-body">
                    <h5 class="card-title">Kategori {{ $menu_category->name }}</h5>
                    <form action="{{ url('/edit_menu_category', $menu_category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Kategori</label>
                            <div class="col-sm-10 form-label">
                                <input class="form-control" type="text" name="name" id="name"
                                    value="{{ $menu_category->name }}" />
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" value="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script></script>
@endsection
