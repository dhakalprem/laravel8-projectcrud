
    <form action="{{ route('contacts.store')}}" method="POST">

    <div class="col-md-6">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
			 <div class="form-group required">
				{!! F::label("NAME") !!}
				{!! F::text("name", null ,["class"=>"form-control","required"=>"required"]) !!}
			</div>

			 <div class="form-group required">
				{!! F::label("EMAIL") !!}
				{!! F::text("email", null ,["class"=>"form-control","required"=>"required"]) !!}
			</div>

			 <div class="form-group required">
				{!! F::label("PHONE") !!}
				{!! F::text("phone", null ,["class"=>"form-control","required"=>"required"]) !!}
			</div>

   
        <div class="well well-sm clearfix">
            <button class="btn btn-success pull-right" title="Save" type="submit">Create</button>
        </div>
    </div>
</form>