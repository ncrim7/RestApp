@extends('admin.adminBase')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto mt-5">
                <div class="card">
                    <div class="card-header">
                        <h3>Ürün Ekle</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.products.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Ürün Adı</label>
                                <input type="text" class="form-control" name="title" value="{{old('title')}}">
                            </div>
                            <div class="form-group">
                                <label for="">Ürün Fiyatı</label>
                                <input type="text" class="form-control" name="price" value="{{old('price')}}">
                            </div>
                            <div class="form-group">
                                <label for="">Ürün Açıklaması</label>
                                <input type="text" class="form-control" name="description" value="{{old('description')}}">
                            </div>
                            <div class="form-group">
                                <label for="">Kategori</label>
                                <select class="form-control" name="category_id">
                                    <option value="">Kategori Seç</option>
                                    @foreach ($categories as $item)
                                        <option value="{{$item->id}}">{{$item->cat_title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Ürün Resmi</label>
                                <input type="file" class="form-control" name="image" value="{{old('image')}}">
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" value="Ürün Oluştur" class="btn-btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection