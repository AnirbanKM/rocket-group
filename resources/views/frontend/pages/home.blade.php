@extends('frontend.layout.app')

@section('content')
    <section class="container">
        <div class="row">

            @for ($i = 0; $i <= 12; $i++)
                <div class="col-lg-3 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ url('asset/images/product.jpg') }}" alt="Card image">
                        <div class="card-body">
                            <h6 class="card-title">
                                Product-{{ $i + 1 }}
                            </h6>
                            <p class="card-text">Price: {{ $i * 100 }}/-</p>
                            <button type="button" class="btn btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
            @endfor

        </div>
    </section>
@endsection
