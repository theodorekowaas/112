@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create Post</h1>
</div>

<div class="col-lg-8">
<form action="#" method="post">
    @csrf
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="text" class="form-control" id="description" name="description">
  </div>
  <div class="mb-3">
    <label for="Location" class="form-label">Location</label>
    <input type="text" class="form-control" id="location" name="location">
  </div>

  <button type="submit" class="btn btn-primary">Add report</button>
</form> 
</div>


@endsection

