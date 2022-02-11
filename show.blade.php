@extends('layouts.app')

@section('content')
	<div id="pin_show" class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading pin_image">
					<img src="http://127.0.0.1:8000/media/uploads/{{ $pin->image }}" />
				</div>
				<div class="panel-body">
					<h1>{{ $pin->title }}</h1>
					<p>{{ $pin->description }}</p>
				</div>
				<div class="panel-footer">
					<div class="row">
						<div class="col-md-6">
							<p class="user">
								dd($pin->owner->name)
								Submitted by {{ $pin->owner->name }}
							</p>
						</div>
						<div class="col-md-6">
							<div class="btn-group pull-right">
								@if(Auth::check())
									@include('shared/_favorite_link')

									@if(Auth::id() == $pin->owner->id)
										{{route('pins.edit', 'Edit', $pin->id, ['class' => 'btn btn-default']) }}
										{{route('pins.destroy', 'Delete', $pin->id, ['class' => 'btn btn-default', 'data-method' => 'DELETE', 'data-confirm' => 'Are you sure that you want to delete this?']) }}
									@endif
								@endif
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop