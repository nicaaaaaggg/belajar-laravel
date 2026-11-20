@extends('layouts.app')
@section('title','Detail Pesanan')
@section('content')
<h1>Detail Pesanan {{ $order->code }}</h1>

<div class="card">
<p>Status: <strong>{{ strtoupper($order->status) }}</strong></p>
<p>Penerima: {{ $order->recipient_name }} | {{ $order->phone }}</p>
<p>Alamat: {{ $order->address }}</p>
<p>Pengiriman: {{ $order->shipping_courier }} {{ $order->shipping_service }} - {{ $order->shipping_eta }}</p>
</div>

<div class="card">
<div class="table-scroll"><table>
<tr>
<th>Produk</th>
<th>Harga</th>
<th>Jumlah</th>
<th>Subtotal</th>
</tr>
@foreach($order->items as $item)
<tr>
<td>{{ $item->product_name }}</td>
<td>Rp{{ number_format($item->price,2,',','.') }}</td>
<td>{{ $item->quantity }}</td>
<td>Rp{{ number_format($item->subtotal,2,',','.') }}</td>
</tr>
@endforeach
</table></div>
</div>

<div class="card">
<p>Subtotal: Rp{{ number_format($order->subtotal,2,',','.') }}</p>
<p>Ongkir: Rp{{ number_format($order->shipping_cost,2,',','.') }}</p>
<p><strong>Total: Rp{{ number_format($order->grand_total,2,',','.') }}</strong></p>
</div>
@endsection