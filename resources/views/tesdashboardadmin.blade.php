@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Home</a>
        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard User</a>
    </div>
    <div class='text-2xl'>{{$donationCount}}</div>
</nav>

<div class="container">
<table>
    <thead>
        <tr>
            <th>Date</th>
            <th>Restaurant</th>
            <th>Transaction Detail</th>
            <th>Donate to</th>
            <th>Total Price</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($donations as $donation)
            <tr>
                <td>{{ $donation->formatted_date }}</td>
                <td><strong>{{ $donation->restaurant_name }}</strong></td>
                <td>{{ $donation->transaction_detail }}</td>
                <td><strong>{{ $donation->orphanage_name }}</strong></td>
                <td>{{ $donation->formatted_price }}</td>
                <td>
                    @if($donation->status == 'Completed')
                        <span style="color:green;">Completed</span>
                    @elseif($donation->status == 'Canceled')
                        <span style="color:red;">Canceled</span>
                    @else
                        <span style="color:orange;">On Process</span>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection