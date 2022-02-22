@extends('admin::layouts.master')

@section('content-wrapper')
    <div class="inner-section">
    
        @include ('admin::layouts.nav-left')

        <div class="content-wrapper">

            @yield('content')

        </div>
        
    </div>
@stop