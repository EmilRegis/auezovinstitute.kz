@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Редактирование научных проектов @endslot
            @slot('parent') Главная @endslot
            @slot('active') &nbsp;/ Научные проекты @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.sciences.update', $science)}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.sciences.partials.form')

            <input type="hidden" name="modified_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection