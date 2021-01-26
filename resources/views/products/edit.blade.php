@extends('layouts.app')

@section('heading')
<div class="container">
</div>
@endsection

@section('content')
<div class="container">
   <h2> Edit Product </h2>
   <hr>
<form>
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input class="form-control"/>
        <label class="form-label">Description</label>
        <input class="form-control"/>
        <label class="form-label">Purchases Price</label>
        <input class="form-control"/>
        <label class="form-label">Sale Price</label>
        <input class="form-control"/>
        <label class="form-label">Stok Price</label>
        <input class="form-control"/>
    </div>
    <div class="mb-3">
        <button class="btn btn-primary">update</button>
        <a href="/suppliers" class="btn btn-danger text-white">Cancel</a>
    </div>
</form>
</div>


@endsection
