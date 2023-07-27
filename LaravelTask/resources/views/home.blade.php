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
                            <th scope="col">Email</th>
                            <th scope="col">Worker</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Users as $User)
                        <tr>
                            <td>
                                <a href="/user/{{ $User->id }}">
                                    {{ $User->name }}
                                </a>
                            </td>
                            <td>
                                {{ $User->email }}
                            </td>
                            <td>
                                {{ $User->worker->name }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>