@extends("layout")
@section("title","Category Listing")
@section("contentHeader","Category")
@section("content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Category Listing</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-header">
            <a href="{{url("new-category")}}" class="float-right btn btn-outline-primary">+</a>

        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>authorid</th>
                    <th>title</th>
                    <th>ISBN	</th>
                    <th>pub_year</th>
                    <th>avaiable</th>
                </tr>
                </thead>
                <tbody>
                @foreach($product as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->authorid}}</td>
                        <td>{{$product->title}}</td>
                        <td>{{$product->ISBN}}</td>
                        <td>{{$product->pub_year}}</td>
                        <td>{{$product->avaiable}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
