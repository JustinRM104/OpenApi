@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4 class="font-weight-bold">Dashboard</h4>
      <ul class="nav nav-pills nav-stacked">
        <li><a class="nav-link" href=""> Databases</a></li>
      </ul>
    </div>

    <div class="col-sm-9">
      <h4>DATABASES</h4>
      <hr>

      <div class="rounded border p-3">
        <h2>Database1</h2>
        <hr>
        <h4>Officially Blogging</h4>
        <h4>Last edited, 24-01-2021</h4>
        <p>Description of the database.</p>
      </div>

      <form method="POST" action="{{ route('db.add') }}" autocomplete="off" class="mt-5">
        <h4>Create new database</h4>
        @csrf
        <div class="form-group">
            <label for="dbname">Database name</label>
            <input type="text" class="form-control" id="dbname" placeholder="Enter name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Database edit password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>

  </div>
</div>
@endsection
