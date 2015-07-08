@extends('store.store')

@section('content')
    <div class="col-sm-9 padding-right">

        <section id="cart_items">
            <div class="container">
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                        <tr class="cart_menu">
                            <th class="image">Image</th>
                            <th class="description">Produto</th>
                            <th class="price">Price</th>
                            <th class="price">Qtd</th>
                            <th class="price">Total</th>
                            <th class=""></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($cart->all() as $k => $items)
                            <tr>
                                <td class="cart_product"><a href="{{ route('store.product', ['id' => $k])  }}">Image</a></td>
                                <td class="cart_description"><h4><a href="{{ route('store.product', ['id' => $k])  }}">{{ $items['name']  }}</a></h4></td>
                                <td class="cart_price">R$ {{ $items['price']  }}</td>
                                <td class="cart_quantity">{{ $items['qtd']  }}</td>
                                <td>
                                    <p class="cart_total_price">R$ {{ $items['qtd'] * $items['price'] }} </p>
                                </td>
                                <td class="cart_quantity_delete"><a href="{{ route('remove.cart', ['id' => $k])  }}">Delete</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5"><p>Não há itens no carrinho</p></td>
                            </tr>
                        @endforelse
                        <tr>
                            <td colspan="6"> <div class="pull-right"><span>Total: R$ {{ $cart->getTotal()  }}</span>
                                <a href="#" class="btn btn-success">Finalizar pedido<a>
                                </div></td>
                        </tr>
                        </tbody>
                    </table>


                </div>

            </div>
        </section>

    </div>
@stop