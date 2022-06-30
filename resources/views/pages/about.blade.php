@extends('layout/default')

@section('content')
            @include('partials/header-p', ['pagename' => 'A Propos'] )

            @include('partials/aboutfact-p')
            
            @include('partials/faq-p')
            
@stop
            
            