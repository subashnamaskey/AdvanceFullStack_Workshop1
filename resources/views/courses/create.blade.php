@extends('layouts.app')
@section('title', 'Add course')
@section('section', 'Courses / Add course')
@section('content')
<a href="{{ route('courses.index') }}" class="back-link">← <span>Course catalogue</span></a>
<div class="form-page-heading"><p class="eyebrow">NEW OFFERING</p><h1>Create a course</h1><p class="page-lede">Add a new learning opportunity to your institute’s catalogue.</p></div>
<form class="form-card" method="POST" action="{{ route('courses.store') }}">@csrf @include('courses._form')<div class="form-actions"><p><span>*</span> Required fields</p><div><a class="button button-quiet" href="{{ route('courses.index') }}">Cancel</a><button class="button button-primary" type="submit">Save course <span>→</span></button></div></div></form>
@endsection
