@extends('layouts.app')
@section('title', 'Add student')
@section('section', 'Students / Add student')
@section('content')
<a href="{{ route('students.index') }}" class="back-link">← <span>All students</span></a>
<div class="form-page-heading"><p class="eyebrow">NEW RECORD</p><h1>Add a student</h1><p class="page-lede">Capture the details you need to support this student.</p></div>
<form class="form-card" method="POST" action="{{ route('students.store') }}">@csrf @include('students._form')<div class="form-actions"><p><span>*</span> Required fields</p><div><a class="button button-quiet" href="{{ route('students.index') }}">Cancel</a><button class="button button-primary" type="submit">Save student <span>→</span></button></div></div></form>
@endsection
