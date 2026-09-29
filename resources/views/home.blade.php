@extends('layouts.app')

@section('content')
    <!-- 1. Hero / Home -->
    @include('components.hero')

    <!-- 2. About Me -->
    @include('components.about')

    <!-- 3. Skills -->
    @include('components.skills')

    <!-- 4. Projects (Dark Blue visual break) -->
    @include('components.projects')

    <!-- 5. Education -->
    @include('components.experience')

    <!-- 6. Goals / Personal Statement -->
    @include('components.goals')

    <!-- 7. Contact -->
    @include('components.contact')
@endsection
