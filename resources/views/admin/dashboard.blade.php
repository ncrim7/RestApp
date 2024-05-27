@extends('admin.adminBase')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-8">
                <!-- Diğer içerikler buraya gelebilir -->
            </div>
            <div class="col-4">
                <div class="row g-3">
                    <div class="col-12 mb-3">
                        <div class="card bg-success text-white shadow">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="display-3">{{$categories}}</h3>
                                        <h5>Menü</h5>
                                    </div>
                                    <div>
                                        <i class="fas fa-th-large fa-3x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="card bg-primary text-white shadow">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="display-3">{{$products}}</h3>
                                        <h5>Yemek</h5>
                                    </div>
                                    <div>
                                        <i class="fas fa-utensils fa-3x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 mt-3">
                    <div class="col-12 mb-3">
                        <div class="card bg-warning text-white shadow">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="display-3">500+</h3>
                                        <h5>Müşteri</h5>
                                    </div>
                                    <div>
                                        <i class="fas fa-smile-beam fa-3x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="card bg-danger text-white shadow">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="display-3">1700+</h3>
                                        <h5>Sipariş</h5>
                                    </div>
                                    <div>
                                        <i class="fas fa-shopping-cart fa-3x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .card-body {
            padding: 2rem;
        }
        .card {
            border-radius: 0.5rem;
        }
        .shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .fa-3x {
            font-size: 3em;
        }
    </style>
@endpush
