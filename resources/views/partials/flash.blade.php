<!--this is notiv err and seccess handler-->

@if ($message = Session::get('success'))
	  <div class="alert alert-success alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>	
		  <strong>{{ $message }}</strong>
	  </div>
	@endif

@if($errors->any())
        <div class="alert alert-danger">
            <strong>Woops!</strong>
            @foreach($errors->all() as $er)
                <ul>{{$er}}</ul>
                @endforeach
            </div>
    @endif  

