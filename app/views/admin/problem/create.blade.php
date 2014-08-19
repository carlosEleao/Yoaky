@extends('admin/admin')

@section('content')

<div class="twelve wide column">
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

      <div class="field">
        <label>Language</label>
        <select>
          @foreach (Language::all() as $language)
          <option value="{{$language->dsLangue}}">{{$language->dsLangue}}</option>
          @endforeach;
        </select>
      </div>

      <input type="submit" class="ui blue submit button" text="Submit">


  </div>

  {{ Form::close() }}
</div>

@stop