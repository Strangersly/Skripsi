@extends('adminpage.layout.main')
@section('breadcrumb')
    <div class="pagetitle">
        <h1>Menu Kategori</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Category</li>
                <li class="breadcrumb-item"><a href="/homepage">Home</a></li>
            </ol>
        </nav>
        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addcategory"><i class="bi bi-plus-square"></i> Tambah Kategori</button> --}}
    </div><!-- End Page Title -->
@endsection
@section('content')
    <section class="section">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addcategory"><i
                class="bi bi-plus-square"></i> Tambah Kategori</button>
        <div class="row">
            <div class="col-lg-12">
                @if (session('erroradd'))
                    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                        {{ session('erroradd') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @elseif(session('successadd'))
                    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                        {{ session('successadd') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @elseif(session('successedit'))
                    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                        {{ session('successedit') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @elseif(session('successdelete'))
                    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                        {{ session('successdelete') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Jenis Produk</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Kategori foreach start --}}
                                {{-- @dd($menu_categories) --}}
                                @foreach ($menu_categories as $ct)
                                    <tr>
                                        <th scope="row">{{ $ct->id }}</th>
                                        <td>{{ $ct->name }}</td>
                                        <td>
                                            @foreach ($product_categories as $product)
                                                @if ($product->menu_category_id == $ct->id)
                                                    <td>{{ $product->name }}</td>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="/edit_category_page/{{ $ct->id }}">
                                                <button type="button" class="btn btn-primary"><i
                                                        class="bi bi-eye-fill"></i></button>
                                            </a>
                                            <a href="/delete_menu_category/{{ $ct->id }}" onclick="event.preventDefault(); if(confirm('Apakah Anda yakin ingin menghapus kategori ini?')) { window.location.href = '{{ url('/delete_menu_category/'.$ct->id) }}'; }">
                                                <button type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                            </a>  
                                        </td>
                                    </tr>
                                @endforeach

                                {{-- Kategori foreach End --}}
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('adminpage.modal.category.addcategorymodal')
@endsection

@section('script')
    <script>
        // jqdoc
    </script>
@endsection

{{-- @section('script')
    <script>
        $(document).ready(function () {
            $(.deleteCategoryBtn).click(function (e) { 
                e.preventDefault();
                
                var category_id = $(this).val();
                $('#menu_category_id').val(menu_category_id);

                $('#deleteModal').modal('show');
            });
        });
    </script>
@endsection --}}
