@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 py-4">
        <div class="card">
            <a href="/"><div class="card-header">{{ __('Home') }}</div></a>
            <div class="card-body">

                <h3>Shopping List</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($Orders as $Order)
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
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">
                                    Shopping list is empty
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>


                <h3>Car list</h3>
                <ul class="list-group">
                    @forelse($Cars as $Car)
                        <li class="list-group-item" >
                                {{ $Car->car->name }}
                                @if(($Car->using) > 0)
                                    - currently using
                                @endif
                        </li>
                    @empty
                        <li class="list-group-item">
                            No cars assigned
                        </li>
                    @endforelse
                </ul>

            </div>
        </div>
    </div>
</div>