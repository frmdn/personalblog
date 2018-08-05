@extends('template.master')

@section('content')

<div class="main">
<div class="container">
<div class="col-sm-8">
<h1>Sign In</h1>

<form method="POST" action="/login">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control"/>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control"/>
    </div>

    <div class="form-group">
        <input type="submit" name="submit" class="btn btn-primary" value="Sign In" />
    </div>
</form>
</div>
</div>
</div>
@endsection