@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    <div class="row">
        <div class="col-12">
            @include($lists_card ?? 'components.temp.lists')
        </div>
    </div>
@endsection
