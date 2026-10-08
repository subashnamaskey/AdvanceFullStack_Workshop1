@extends('layouts.app')
@section('title', 'Edit course')
@section('section', 'Courses / Edit course')
@section('content')
<a href="{{ route('courses.show', $course) }}" class="back-link">← <span>Course details</span></a>
<div class="form-page-heading"><p class="eyebrow">UPDATE OFFERING</p><h1>Edit course</h1><p class="page-lede">Update the catalogue details for {{ $course->name }}.</p></div>
<form class="form-card" method="POST" action="{{ route('courses.update', $course) }}">@csrf @method('PUT') @include('courses._form', ['course' => $course])<div class="form-actions"><p><span>*</span> Required fields</p><div><a class="button button-quiet" href="{{ route('courses.show', $course) }}">Cancel</a><button class="button button-primary" type="submit">Save changes <span>→</span></button></div></div></form>
@endsection
