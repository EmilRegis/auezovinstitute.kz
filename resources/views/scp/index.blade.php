@extends('layouts.app')

@section('content')
    <div>
        <div class="pnwes">
            <div class="dep__way">
                <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>;
                <a></a>
            </div>
            <div class="pnwes__page">
                    <a href="{{ route('sciences.index') }}">
                        <div class="pnwes__page__block">
                            <div class="pnwes__page__block__wrap">
                                {{ trans('header.science') }}
                            </div>
                        </div>
                    </a>
            </div>
        </div>
    </div>
    {{--<script src="js/script.js"></script>--}}
@endsection
