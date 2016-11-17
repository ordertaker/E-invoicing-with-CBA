@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-md-12">
			<h1>New Sales Transaction</h1>	
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<form method="POST" action="{{ route('sales.store') }}">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="date">Date</label>
					<input class="form-control" type="date" name="date" id="date" value="{{ date('Y-m-j') }}">
				</div>
				<div class="form-group">
					<label for="sold_to">Sold To</label>
					<input class="form-control" type="text" name="sold_to" id="sold_to">
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<input class="form-control" type="text" name="description" id="description">
				</div>
				<div class="form-group">
					<label for="vatable">VATable Sales</label>
					<input class="form-control" type="text" name="vatable" id="vatable">
				</div>
				<div class="form-group">
					<label for="non_vat">Non-VAT Sales</label>
					<input class="form-control" type="text" name="non_vat" id="non_vat">
				</div>
				<div class="form-group">
					<label for="zero_rated">Zero Rated Sales</label>
					<input class="form-control" type="text" name="zero_rated" id="zero_rated">
				</div>
				<div class="form-group">
					<button class="btn btn-primary btn-lg" type="submit">Save</button>
				</div>
			</form>	
		</div>
	</div>

@stop