@extends('admin/admin')

@section('script')
  <script src="{{{URL::to('lib/ckeditor/ckeditor.js')}}}"></script> 
@stop

@section('content')

<div class="twelve wide column">
  {{ Form::open(array('url' => 'adminProblem/edit')) }}

  <div class="ui form segment">
      <div class="two fields">
        <div class="field">
          <label>Problem Name (Internal)</label>
          <input name="name" placeholder="Problem Name" type="text"  value="{{Problem::find($id)->dsTitle}}" >
        </div>
      </div>

      <?php var_dump (Problem::find($id)->hasMany('ProblemDescription')); ?>
      @foreach (Problem::find($id)->hasMany('ProblemDescription') as $description)

      <hr/>

      <h4>{{$description->Language->dsLanguage}}</h4>

      <div class="field">
        <label>Language {{$language->dsLangue}}</label>
        </select>
      </div>
      <div class="field">
        <div class="field">
          <label>Problem Name</label>
          <input name="title[]" placeholder="Problem Title in {{$description->Language->dsLangue}}" type="text" value=" {{$description->dsTitle}}">
        </div>
      </div>
      <div class="field">
        <label>Description</label>
         <textarea name="description[]" id="description{{$description->Language->id}}">{{$description->dsProblem}}</textarea>
         <script>
           CKEDITOR.replace( 'description{{$description->Language->id}}' );
         </script>
      </div>

      @endforeach

      <input type="submit" class="ui blue submit button" text="Submit">


  </div>

  {{ Form::close() }}
</div>

@stop