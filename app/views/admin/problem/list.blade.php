@extends('admin/admin')

@section('content')

<table class="ui table segment">
  <thead>
    <tr><th>Name</th>
    <th>Status</th>
    <th>Replys</th>
  </tr></thead>
  <tbody>

    @foreach (Problem::all() as $problem)
    <tr>
      <td>{{$problem->dsTitle}}</td>
      <td>{{$problem->created_at}}</td>
      <td>{{$problem->updated_at}}</td>
    </tr>
    @endforeach

  </tbody>
  <tfoot>
    <tr><th colspan="3">
      <div class="ui blue labeled icon button"><i class="tint icon"></i> Add Problem</div>
    </th>
  </tr></tfoot>
</table>

@stop