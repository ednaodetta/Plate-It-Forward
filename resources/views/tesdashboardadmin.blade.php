@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Home</a>
        <a class="nav-link" href="{{ route('DashboardAdmin') }}">Dashboard User</a>
    </div>
    <div class='text-2xl'>{{$donationCount}}</div>
</nav>

<div class="container">
<table class="w-full border-separate border-spacing-y-4">
    <thead>
        <tr class="text-gray-600 text-left text-2xl font-gotham">
            <th class="py-2 px-4 font-bold">OrderID</th>
            <th class="py-2 px-4 font-bold">Transaction Detail</th>
            <th class="py-2 px-4 font-bold">Total Price</th>
            <th class="py-2 px-4 font-bold">Status</th>
        </tr>
    </thead>
    <tbody class="font-brandon">
        @foreach($orders as $order)
            <tr>
                <td class="py-5 px-4 border-t border-b border-l border-[#D9D9D9] rounded-l-3xl">
                    {{ $order->id }}
                </td>
                <td class="py-5 px-4 border-t border-b border-[#D9D9D9]">
                    {{ $order->transaction_detail }}
                </td>
                <td class="py-5 px-4 border-t border-b border-[#D9D9D9] font-bold">
                    IDR {{ number_format($order->total_price, 2, ',', '.') }}
                </td>
                <td class="py-5 px-4 border-t border-b border-r border-[#D9D9D9] rounded-r-3xl">
                    <span class="
                        @if($order->status == 'Completed') text-green-500
                        @elseif($order->status == 'Canceled') text-red-500
                        @else text-orange-500
                        @endif
                        font-bold">
                        {{ $order->status }}
                    </span>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection