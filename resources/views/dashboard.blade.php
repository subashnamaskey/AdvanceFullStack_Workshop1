@extends('layouts.app')

@section('title', 'Overview')
@section('section', 'Overview')

@section('content')
<section class="welcome-row">
    <div><p class="eyebrow">MONDAY, {{ strtoupper(now()->format('F j, Y')) }}</p><h1>A clearer view of your campus.</h1><p class="page-lede">Keep student records and course details organised in one calm, easy-to-use workspace.</p></div>
    <div class="welcome-art" aria-hidden="true"><span class="art-sun"></span><span class="art-hill art-hill-one"></span><span class="art-hill art-hill-two"></span><span class="art-flower">✳</span></div>
</section>
<section class="overview-grid" aria-label="Workspace sections">
    <a class="overview-card student-card" href="{{ route('students.index') }}">
        <div class="overview-card-top"><span class="tile-icon peach">♙</span><span class="card-arrow">↗</span></div>
        <p class="card-kicker">PEOPLE</p><h2>Students</h2><p class="card-description">Create and maintain student profiles, contact details and important dates.</p>
        <span class="card-link">Open student records <span>→</span></span>
    </a>
    <a class="overview-card course-card" href="{{ route('courses.index') }}">
        <div class="overview-card-top"><span class="tile-icon lavender">▤</span><span class="card-arrow">↗</span></div>
        <p class="card-kicker">LEARNING</p><h2>Courses</h2><p class="card-description">Keep your course catalogue current with fees, duration and difficulty.</p>
        <span class="card-link">Open course catalogue <span>→</span></span>
    </a>
</section>
<section class="note-panel"><span class="note-icon">✦</span><div><strong>Your institute, at a glance</strong><p>Start with the essentials. Add a student or set up a course to begin building your records.</p></div><a href="{{ route('students.create') }}" class="text-link">Add a student <span>→</span></a></section>
<section class="home-bottom"><div class="section-heading"><div><p class="eyebrow">GET STARTED</p><h2>Everything in its place.</h2></div></div><div class="quick-grid"><a href="{{ route('students.create') }}" class="quick-item"><span class="quick-number">01</span><span><strong>Add a student</strong><small>Save a new student profile</small></span><span class="quick-arrow">↗</span></a><a href="{{ route('courses.create') }}" class="quick-item"><span class="quick-number">02</span><span><strong>Create a course</strong><small>Set up a new course offering</small></span><span class="quick-arrow">↗</span></a><a href="{{ route('courses.index') }}" class="quick-item"><span class="quick-number">03</span><span><strong>Review your catalogue</strong><small>Browse and update course details</small></span><span class="quick-arrow">↗</span></a></div></section>
@endsection
