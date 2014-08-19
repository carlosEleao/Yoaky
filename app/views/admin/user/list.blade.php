@extends('admin/admin')

@section('content')
  <div class="twelve wide column">
    <table class="ui table segment">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Options</th>
        </tr>
      </thead>
      <tbody>

        @foreach (AdmUser::all() as $user)
        <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->dsName}}</td>
          <td>{{$user->dsEmail}}</td>
          <td></td>
        </tr>
        @endforeach

      </tbody>
      <tfoot>
        <tr>
          <td>
            <a href="<?php echo URL::to('adminUser/create'); ?>">
              <div class="ui blue labeled icon button"><i class="tint icon"></i> Add User</div>
            </a>
          </td>
        </tr>
      </tfoot>
    </table>
  </div>
@stop