@extends('admin/admin')

@section('content')

  {{ Form::open(array('url' => 'adminProblem/add')) }}

  <div class="ui form segment">
      <div class="two fields">
        <div class="field">
          <label>Problem Name (Internal)</label>
          <input name="name" placeholder="Problem Name" type="text">
        </div>
        <div class="field">
          <label>Category</label>
          <input name="category" placeholder="Category" type="text">
        </div>
      </div>
      <input type="submit" class="ui blue submit button" text="Submit">
  </div>

  {{ Form::close() }}

@stop