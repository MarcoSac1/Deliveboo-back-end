@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Order ID </th>
                        <th scope="col">Customer ID </th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Date</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">State</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->user->id }}</td>
                            <td>{{ $order->email }}</td>
                            <td>{{ $order->phone }}</td>
                            <td>{{ $order->adress }}</td>
                            <td>{{ $order->date }}</td>
                            <td>{{ $order->total_price }}</td>
                            <td>{{ $order->state }}</td>
                            <td>
                                <a href="{{ route('admin.orders.show', $order)}}" class="btn btn-primary btn-sm">Show</a>
                                    @csrf

                                    <input type="submit" class="btn btn-warning btn-sm" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
