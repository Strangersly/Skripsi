@extends('userpage.layout.main')

@section('banner')
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('userpage/img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Starsbug Coffee</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Home</a>
                            <span>Status</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            @if (session('successcheckout'))
                <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                    {{ session('successcheckout') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Customer Name</th>
                                    <th>Status</th>
                                    <th>Bill</th>
                                    <th>Order Detail</th>
                                </tr>
                            </thead>
                            @if ($order->count() > 0)
                                @foreach ($order as $order)
                                    @if ($order->status == 0)
                                        <tbody>
                                            <tr>
                                                <td class="shoping__cart__item">
                                                    <h5>{{ $order->name }}</h5>
                                                </td>
                                                <td class="shoping__cart__price">
                                                    On Process
                                                </td>
                                                <td>
                                                    Rp.{{ $order->total_price }}
                                                </td>
                                                <td>
                                                    <h6 class="mb-2"><strong style="color: red">Segera Unduh Struk
                                                            Anda</strong></h6>
                                                    <a href="/download_bill/{{ $order->id }}">
                                                        <button type="button" class="btn btn-warning">Unduh Struk</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @else
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h3 class="col-lg-6">No Data</h3>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endif
                                @endforeach
                            @else
                                <tbody>
                                    <tr>
                                        <td>
                                            <h3 class="col-lg-6">No Data</h3>
                                        </td>
                                    </tr>
                                </tbody>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
@endsection
