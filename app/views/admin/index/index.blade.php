@extends('admin/admin')

@section('content')
	<div class="ui page grid overview segment">
    <div class="ui two wide column"></div>
    <div class="twelve wide column">
      <div class="ui three column center aligned stackable divided grid">
        <div class="column">
          <div class="ui icon header">
            <i class="circular book link icon"></i>
            Problems 
          </div>
          <p>Manage the World Problems</p>
          <p><a class="ui green button" href="adminProblem">Here <i class="right long arrow icon"></i></a></p>
        </div>
        <div class="column">
          <div class="ui icon header">
            <i class="circular user link icon"></i>
            Users
          </div>
          <p>Manage the system users</p>
          <p><a class="ui green button" href="#">Here <i class="right long arrow icon"></i></a></p>
        </div>
      </div>
    </div>
  </div>
@stop