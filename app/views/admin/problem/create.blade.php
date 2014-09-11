@extends('admin/admin')

@section('script')
  <script src="{{{URL::to('lib/ckeditor/ckeditor.js')}}}"></script> 
@stop

@section('content')

<div class="twelve wide column">
  {{ Form::open(array('url' => 'adminProblem/add', 'method' => 'post' , 'enctype' => 'multipart/form-data')) }}

  <div class="ui form segment">
      
      <div class="field">
        <label>Problem Name (Internal)</label>
        <input name="name" placeholder="Problem Name" type="text">
      </div>


      <div class="field">
        <label>Problem Image</label>
        <input name="image" placeholder="Problem Image" type="file">
      </div>
     
      @foreach (Language::all() as $language)

      <hr/>

      <h4>{{$language->dsLangue}}</h4>

      <div class="field">
        <label>Language {{$language->dsLangue}}</label>
        <input name="language[]" type="hidden" value="{{$language->id}}">
        </select>
      </div>
      <div class="field">
        <div class="field">
          <label>Problem Name</label>
          <input name="title[]" placeholder="Problem Title in {{$language->dsLangue}}" type="text">
        </div>
      </div>
      <div class="field">
        <label>Description</label>
         <textarea name="description[]" id="description{{$language->id}}"></textarea>
         <script>
           CKEDITOR.replace( 'description{{$language->id}}' );
         </script>
      </div>

      @endforeach

      <input type="submit" class="ui blue submit button" text="Submit">


  </div>

  {{ Form::close() }}
</div>

@stop