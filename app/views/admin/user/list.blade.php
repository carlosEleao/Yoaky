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
        <!-- To be filled by JS -->
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