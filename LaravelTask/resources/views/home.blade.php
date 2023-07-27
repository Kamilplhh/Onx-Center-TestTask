@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 py-4">
        <div class="card">
            <div class="card-header">{{ __('Admin panel') }}</div>
            <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">User</th>
                            <th scope="col">Worker</th>
                            <th scope="col">Car</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>