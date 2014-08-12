@extends('admin/admin')

@section('content')

<table class="ui table segment">
  <thead>
    <tr><th>Name</th>
    <th>Status</th>
    <th>Notes</th>
  </tr></thead>
  <tbody>

    <tr>
      <td>John</td>
      <td>Approved</td>
      <td>None</td>
    </tr>
    
  </tbody>
  <tfoot>
    <tr><th colspan="3">
      <div class="ui blue labeled icon button"><i class="tint icon"></i> Add Problem</div>
    </th>
  </tr></tfoot>
</table>

@stop