@extends('layouts.app')
@section('title','Pesanan Saya')
@section('content')
<h1>Pesanan Saya</h1>
<div class="card">
<div class="table-scroll"><table>
<tr>
<th>Kode</th>
<th>Tanggal</th>
<th>Total</th>
<th>Status</th>
<th></th>
</tr>
@foreach($orders as $order)
<tr>
<td>{{ $order->code }}</td>
<td>{{ $order->ordered_at->format('d-m-Y H:i') }}</td>
<td>Rp{{ number_format($order->grand_total,2,',','.') }}</td>
<td>{{ strtoupper($order->status) }}</td>
<td><a href="{{ route('orders.show',$order) }}">Detail</a></td>
</tr>
@endforeach
</table></div>
{{ $orders->links() }}
</div>
@endsection