@extends('app')

@section('content')
    <div class="container">

        <h1>Images of {{ $product->name  }}</h1>
        <br>
        <a href="" >New Image</a>
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Extension</th>
                <th>Action</th>
            </tr>

            @foreach($product->images as $image)
                <tr>
                    <td>{{ $image->id }}</td>
                    <td></td>
                    <td>{{ $image->extension }}</td>
                    <td>

                    </td>
                </tr>
            @endforeach

        </table>

    </div>
@endsection