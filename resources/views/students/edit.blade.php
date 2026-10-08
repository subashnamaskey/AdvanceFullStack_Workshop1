@extends('layouts.app')
@section('title', 'Edit student')
@section('section', 'Students / Edit student')
@section('content')
<a href="{{ route('students.show', $student) }}" class="back-link">← <span>Student details</span></a>
<div class="form-page-heading"><p class="eyebrow">UPDATE RECORD</p><h1>Edit student details</h1><p class="page-lede">Changes to {{ $student->name }}’s profile are saved to the directory.</p></div>
<form class="form-card" method="POST" action="{{ route('students.update', $student) }}">@csrf @method('PUT') @include('students._form', ['student' => $student])<div class="form-actions"><p><span>*</span> Required fields</p><div><a class="button button-quiet" href="{{ route('students.show', $student) }}">Cancel</a><button class="button button-primary" type="submit">Save changes <span>→</span></button></div></div></form>
@endsection
