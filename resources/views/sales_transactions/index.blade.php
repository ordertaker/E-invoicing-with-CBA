@extends('layouts.app')

@section('content')

	<h1>Sales Transactions</h1>

	<div class="btn-group">
		<a class="btn btn-default" href="{{ route('sales.create') }}">New</a>
	</div>

	<table class="table">
		<thead>
			<tr>
				<th>Date</th>
				<th>Invoice Number</th>
				<th>Sold To</th>
				<th>Description</th>
				<th>VATable Sales</th>
				<th>Non-VAT Sales</th>
				<th>Zero Rated Sales</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($sales_transactions as $sales_transaction)
				<tr>
					<td>{{ $sales_transaction->date }}</td>
					<td>{{ $sales_transaction->invoice_number }}</td>
					<td>{{ $sales_transaction->sold_to }}</td>
					<td>{{ $sales_transaction->description }}</td>
					<td>{{ $sales_transaction->vatable }}</td>
					<td>{{ $sales_transaction->non_vat }}</td>
					<td>{{ $sales_transaction->zero_rated }}</td>
					<td><a href="#!">Print</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

@stop