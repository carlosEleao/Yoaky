@extends('admin/admin')

@section('script')
{{ HTML::script('js/admin/user.js')}}
@stop

@section('content')
  <div class="twelve wide column">

    <h2 class="ui dividing header">Administrators</h2>

    <table class="ui small table segment">
      <col style="width:10%">
      <col style="width:30%">
      <col style="width:30%">
      <col style="width:30%">
      <thead>
        <tr>
          <th colspan="1">Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Options</th>
        </tr>
      </thead>
      <tbody>

        @foreach (AdmUser::all() as $user)
        <tr>
          <td colspan="1">{{$user->id}}</td>
          <td>{{$user->dsName}}</td>
          <td>{{$user->dsEmail}}</td>
          <td><a href="{{URL::to('adminUser/delete/'.$user->id)}}"><i class="remove link icon"></td>
        </tr>
        @endforeach

      </tbody>
      <tfoot>
        <tr>
          <td>
            <a href="#">
              <div id="bt-add-user" class="ui small blue labeled icon button"><i class="add icon"></i>Add</div>
            </a>
          </td>
        </tr>
      </tfoot>
    </table>
  </div>

  @include('admin.user.create')

@stop