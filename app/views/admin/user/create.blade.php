@extends('admin/admin')

@section('content')

<div class="twelve wide column">

  {{ Form::open(array('url' => 'adminUser/add')) }}

    <div class="ui form segment">
      <div class="field">
        <label>Name</label>
        <input type="text" name="name" placeholder="Name">
      </div>
      <div class="field">
        <label>Email</label>
        <input type="text" name="email" placeholder="Email">
      </div>
      <div class="field">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password">
      </div>
      <input type="submit" class="ui blue submit button" text="Create User">
    </div>

  {{ Form::close() }}

</div>

@stop