@foreach($recommended as $recommend)
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">


                    @if(count($recommend->images))
                        <img src="{{ url('uploads/'.$recommend->images->first()->id.'.'.$recommend->images->first()->extension)  }}" alt="" width="200" />
                    @else
                        <img src="{{ url('images/no-img.jpg')  }}" alt="" width="200" />
                    @endif

                    <h2>R$ {{ $recommend->price  }}</h2>
                    <p>{{ $recommend->name  }}</p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-crosshairs"></i>Mais detalhes</a>

                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar no carrinho</a>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                        <h2>R$ {{ $recommend->price  }}</h2>
                        <p>{{ $recommend->name  }}</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-crosshairs"></i>Mais detalhes</a>

                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar no carrinho</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach