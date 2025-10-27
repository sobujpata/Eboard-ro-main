@extends('layout.sidenav-layout')
@section('content')
    @include('components.dashboard.vac-on-retd.index')
    @include('components.dashboard.vac-on-retd.create')
    @include('components.dashboard.vac-on-retd.update')
    @include('components.dashboard.vac-on-retd.delete')
@endsection

