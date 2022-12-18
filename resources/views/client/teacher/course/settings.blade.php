@extends('client.teacher.course.layout')

@section('title', 'การตั้งค่า')

@section('teacher.content')
    @livewire('client.teacher.course.setting.index', ['id' => $id])

    <!-- Add Teacher Modal -->
    @livewire('client.teacher.course.setting.create', ['id' => $id])
@endsection
