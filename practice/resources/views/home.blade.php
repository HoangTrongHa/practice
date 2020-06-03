<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">FPT LIBRARY</h3>
        <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="card-header">--}}
{{--        <a href="{{url("new-category")}}" class="float-right btn btn-outline-primary">+</a>--}}
{{--        --}}{{--            new-category tao trong routers--}}
{{--    </div>--}}
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap"style="width: 1000px">
            <thead>
            <tr>
                <th>STT</th>
                <th>STT AUTHOR</th>
                <th>Title</th>
                <th>ISBN</th>
                <th>Pub_year</th>
                <th>Avaiable</th>
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
</div>
</body>
<style>
    table, th, td {
        border: 1px solid black;
    }
</style>
</html>
