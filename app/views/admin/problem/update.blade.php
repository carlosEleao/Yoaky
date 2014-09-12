@extends('admin/admin')

@section('script')
  <script src="{{{URL::to('lib/ckeditor/ckeditor.js')}}}"></script> 
@stop

@section('content')

<h2 class="ui dividing header">Problems</h2>

<div class="twelve wide column">
  {{ Form::open(array('url' => 'adminProblem/edit/'.$id)) }}

  <div class="ui form segment">
      <div class="two fields">
        <div class="field">
          <label>Problem Name (Internal)</label>
          <input name="name" placeholder="Problem Name" type="text"  value="{{Problem::find($id)->dsTitle}}" >
        </div>
      </div>

      @foreach (Problem::find($id)->descriptions as $description)

      <hr/>

      <h4>{{$description->language->dsLanguage}}</h4>

      <div class="field">
        <label>Language {{$description->language->dsLangue}}</label>
        <input name="idDescription[]" type="hidden" value="{{$description->id}}">
      </div>
      <div class="field">
        <div class="field">
          <label>Problem Name</label>
          <input name="title[]" placeholder="Problem Title in {{$description->language->dsLangue}}" type="text" value="{{$description->dsTitle}}">
        </div>
      </div>
      <div class="field">
        <label>Description</label>
         <textarea name="description[]" id="description{{$description->language->id}}">{{$description->dsProblem}}</textarea>
         <script>
           CKEDITOR.replace( 'description{{$description->language->id}}' );
         </script>
      </div>

      @endforeach

      <input type="submit" class="ui blue submit button" text="Submit">


  </div>

  {{ Form::close() }}
</div>

@stop