<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <br />
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th><a href="{{action('ProductController@show', "id")}}">Id</a></th>
            <th><a href="{{action('ProductController@show', "name")}}">Name</a></th>
            <th><a href="{{action('ProductController@show', "price")}}">Price</a></th>
            <th><a href="{{action('ProductController@show', "color")}}">Color</a></th>
            <th><a href="{{action('ProductController@show', "weight")}}">Weight</a></th>
            <th><a href="{{action('ProductController@show', "company")}}">Company</a></th>
            <th><a href="{{action('ProductController@show', "country")}}">Country</a></th>
            <th><a href="{{action('ProductController@show', "features")}}">Features</a></th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>
                    <a href="{{action('ProductController@edit', $product->id)}}">{{$product->name}}</a>
                </td>
                <td>${{$product->price}}</td>
                <td style="
                        background: {{$product->color}};
                        display:inline-block;
                        margin-top: 50%;
                        margin-left: 50%;

                        border-radius:4px;
                "></td>

                <td>{{$product->weight}}kg</td>
                <td>{{$product->company}}</td>
                <td>{{$product->country}}</td>
                <td>{{$product->features}}</td>
                <td><a href="{{action('ProductController@edit', $product->id)}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{action('ProductController@destroy', $product->id)}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        <tr>
            <td>{{$totalValue}}</td>
        </tr>

        </tbody>
    </table>
    <hr>

    <a href="{{action('ProductController@create')}}" class="btn btn-success">New Product</a>
</div>
</body>
</html>