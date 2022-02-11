@extends('layouts.app')

@section('content')
	<div id="pins" class="masonry">
		@forelse($pins as $pin)
			<div class="box panel panel-default">
				<a href="{{ route('piic.show', $pin->id) }}" class="darken">
					<img src="http://127.0.0.1:8000/media/uploads/{{ $pin->image }}" />
				</a>
				<h2>
					
						<a href="{{ route('piic.show', $pin->id) }}" >
							{{ $pin->title}}
						</a>
				</h2>
				<p class="user">
					Submitted by {{ $pin->owner->name }}
				</p>
			</div>
		@empty
			<p>No pins available at this moment.</p>
		@endforelse
	</div>

	<div class="row">
		<div class="col-md-12 text-center">
			{!! $pins->render() !!}
		</div>
	</div>
@stop