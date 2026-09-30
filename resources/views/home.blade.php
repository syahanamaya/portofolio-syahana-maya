@extends('layouts.app')

@section('content')
    @include('components.hero')

    <script>
        const legacySectionRoutes = {
            '#home': "{{ route('home') }}",
            '#about': "{{ route('about') }}",
            '#skills': "{{ route('skills') }}",
            '#projects': "{{ route('projects') }}",
            '#experience': "{{ route('experience') }}",
            '#certifications': "{{ route('certifications') }}",
            '#contact': "{{ route('contact') }}",
        };
        const legacySectionRoute = legacySectionRoutes[window.location.hash];

        if (legacySectionRoute) {
            window.location.replace(legacySectionRoute);
        }
    </script>
@endsection
