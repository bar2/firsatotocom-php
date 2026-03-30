@extends('layouts.app')

@section('content')
    <header>
        @include('partials.nav')
    </header>

    <main>
        @include('partials.hero')
        @include('partials.lifecycle')
        @include('partials.modes')
        @include('partials.features')
        @include('partials.how-it-works')
        @include('partials.stats')
        @include('partials.faq')
        @include('partials.lead-form')
    </main>

    @include('partials.footer')
@endsection
