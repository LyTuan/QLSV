@if(Session ::has('flash_message'))
	<div class="{!!Session::get('result_msg')!!}">
		{!!Session::get('flash_message')!!}
	</div>
@endif