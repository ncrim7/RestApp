@extends('admin.adminBase')

@section('content')
<div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h2 class="display-3">Ürün Düzenle ({{count($products)}})</h2>


                    <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>İd</th>
                            <th>Ürün Adı</th>
                            <th>Fiyat</th>
                            <th>Açıklama</th>
                            <th>Durum</th>
                            <th>Resim</th>
                            <th>Kategori</th>
                            <th>Eylem</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($products as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->price}}₺</td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->status}}</td>
                                <td><img src="{{asset("storage/".$item->image)}}" alt="" width="100px" ></td>
                                <td>{{$item->category->cat_title}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="" class="btn btn-danger">Sil</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>

            </div>
        </div>
    </div>
@endsection