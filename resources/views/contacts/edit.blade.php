
    <!-- <form action="{{ '/contacts/'.$data->id.'/update'}}" method="POST"> -->
    <form action="{{ route('contact.update',$data->id) }}" method="POST">
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
    
        <div class="col-md-6">
            
			 <div class="form-group required">
				{!! F::label("NAME") !!}
				{!! F::text("name", $data->name ,["class"=>"form-control","required"=>"required"]) !!}
			</div>

			 <div class="form-group required">
				{!! F::label("EMAIL") !!}
				{!! F::text("email", $data->email ,["class"=>"form-control","required"=>"required"]) !!}
			</div>

			 <div class="form-group required">
				{!! F::label("PHONE") !!}
				{!! F::text("phone", $data->phone ,["class"=>"form-control","required"=>"required"]) !!}
			</div>



            <div class="well well-sm clearfix">
                <button class="btn btn-success pull-right" title="Save" type="submit">Update</button>
            </div>
        </div>
        
    </form>