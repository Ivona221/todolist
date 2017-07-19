@extends('app')



@section('content')

    @include('errors.list')
    @include('partials.box',array('date'=>\Carbon\Carbon::now()->format('Y-m-d')))
    @include('partials.box' ,array('date'=>\Carbon\Carbon::tomorrow()->format('Y-m-d')))
    @include('partials.box', array('date'=>\Carbon\Carbon::now()->addDays(2)->format('Y-m-d')))
    @include('partials.box', array('date'=>\Carbon\Carbon::now()->addDays(3)->format('Y-m-d')))
    @include('partials.box', array('date'=>\Carbon\Carbon::now()->addDays(4)->format('Y-m-d')))
    @include('partials.box', array('date'=>\Carbon\Carbon::now()->addDays(5)->format('Y-m-d')))
    @include('partials.box', array('date'=>\Carbon\Carbon::now()->addDays(6)->format('Y-m-d')))



    @stop

@section('footer')
    @include('footer')
    @stop