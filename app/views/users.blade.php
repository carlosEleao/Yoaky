@extends('layout')

@section('content')
    Users!
    
    
    <p>{{{ isset($name) ? $name : 'Default' }}}</p>
    <p>{{{ $name or 'Default' }}}</p>

	<h4>The current UNIX timestamp is {{{ time() }}}.</h4>
    <ul>
    @for ($i = 0; $i < 10; $i++)
	   <li> The current value is {{ $i }}</li>
	@endfor
    </ul>
    <hr/>
    @lang('language.line')
	@choice('language.line', 1);
@stop