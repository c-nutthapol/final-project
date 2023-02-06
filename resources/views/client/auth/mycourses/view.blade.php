@extends('layouts.client.app')

@section('title', 'หลักสูตรของฉัน')
@section('subtitle', '| Learn 3D Modelling and Design')

@section('content')

    <!--------- Content  ---------->
    @livewire('client.auth.courses.view', ['id' => $id])

@endsection
