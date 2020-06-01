@extends('layouts.master')
@section('content')


    <div class = "lg:flex lg:justify-between">
        <div class = "lg:w-32">
            @include('_sidebar-links')
        </div>
            <div class = "lg:flex-1 lg:mx-10">
                @yield('main_section')
            </div>
        <div class = "lg:w-1/6 bg-blue-100 rounded-lg p-4">
            @include('_friend-list')
        </div>
     </div>
@endsection