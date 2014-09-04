@extends('admin/admin')

@section('content')

    <h2 class="ui dividing header">Administrators</h2>

    <table class="ui small table segment">
      <col style="width:10%">
      <col style="width:30%">
      <col style="width:40%">
      <col style="width:40%">
      <col style="width:20%">
      <thead>
        <tr>
          <th>Id</th>
          <th>Login</th>
          <th>Type</th>
          <th>Active</th>
          <th>Options</th>
        </tr>
      </thead>
      <tbody>

        @foreach (AdmUser::all() as $user)
        <tr id="{{$user->id}}">
          <td>{{$user->id}}</td>
          <td>{{$user->dsLogin}}</td>
          <td>{{$user->getLoginType($user->id)}}</td>
          <td style="padding-left: 20px">
            @if ($user->blActive == 1)
              <i class="green icon checkmark"></i>
            @else
              <i class="red icon close"></i>
            @endif
          </td>
          <td>
            <a href="#" class="bt-del-user">
              <div class="ui mini red button">Delete</div>
            </a>
          </td>
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

  @include('admin.user.create')

  @section('script')
  {{ HTML::script('js/admin/user.js')}}
  @stop

@stop