@extends('layouts.app')

@section('content')
  	<div>
		<div class="structur">
			<div class="structur__way">
				<a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/&nbsp;
				<a>{{ trans('content.admins') }}</a>
			</div>
			<div class="structur__state">
				<a href="#"><p><i class="fas fa-users"></i>&nbsp;&nbsp;{{ trans('content.structure') }}</p></a>
			</div>
			

				@foreach ($directors as $director)	
				<div class="structur__admins">	
					<a class="" href="{{ route('structure.show', [ 'id' => $director->id ]) }}">
						<div class="structur__admins__men">
							<div class="structur__admins__men__photo">
								<img src="{{ $director ? asset('uploads/' . $director->image_show) : ""}}">
							</div>
							<div class="structur__admins__men__name">
								<div class="structur__admins__men__name__text">
									<p>{{ $director->title }}</p>
									<p class="aphtor">{!! $director->description_short !!}</p>
								</div>
								<div class="structur__admins__men__name__button">
										<a href="{{ route('structure.show', [ 'id' => $director->id ]) }}" class="button__men"><i class="fas fa-book-reader"></i>&nbsp;&nbsp;{{ trans('content.to_learn_more') }}</a>
								</div>
							</div>
						</div>
					</a>
				</div>
				@endforeach	
    	</div>
    </div>
@endsection
