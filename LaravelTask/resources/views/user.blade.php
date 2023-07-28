@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 py-4">
        <div class="card">
            <div class="card-body">

                @foreach($Cars as $Car)
                        <p>
                            {{ $Car->car->name }}
                            @if(($Car->using) > 0)
                            - currently using
                            @endif
                        </p>
                @endforeach

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Orders as $Order)
                            <tr>
                                <td>
                                    {{ $Order->product->name }}
                                </td>
                                <td>
                                    {{ $Order->product->price }}
                                </td>
                                <td>
                                    {{ $Order->quantity }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>