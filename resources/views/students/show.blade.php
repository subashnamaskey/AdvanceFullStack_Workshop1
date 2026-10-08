@extends('layouts.app')
@section('title', $student->name)
@section('section', 'Students / Details')
@section('content')
<a href="{{ route('students.index') }}" class="back-link">← <span>All students</span></a>
<section class="detail-hero"><span class="detail-avatar avatar-tone-{{ $student->id % 5 }}">{{ Str::upper(Str::substr($student->name, 0, 1)) }}</span><div><p class="eyebrow">STUDENT PROFILE · #{{ str_pad((string) $student->id, 4, '0', STR_PAD_LEFT) }}</p><h1>{{ $student->name }}</h1><p class="page-lede">Student record created {{ $student->created_at->format('F j, Y') }}</p></div><a class="button button-primary" href="{{ route('students.edit', $student) }}">✎ Edit profile</a></section>
<section class="detail-card"><div class="detail-card-heading"><div><p class="eyebrow">PROFILE INFORMATION</p><h2>Personal details</h2></div><span class="detail-badge">Student</span></div><dl class="detail-grid"><div><dt>Email address</dt><dd><a href="mailto:{{ $student->email }}">{{ $student->email }}</a></dd></div><div><dt>Phone number</dt><dd><a href="tel:{{ $student->phone }}">{{ $student->phone }}</a></dd></div><div><dt>Date of birth</dt><dd>{{ $student->date_of_birth?->format('F j, Y') ?? 'Not provided' }}</dd></div><div><dt>Address</dt><dd>{{ $student->address ?: 'Not provided' }}</dd></div></dl></section>
<div class="detail-footer"><span>Last updated {{ $student->updated_at->diffForHumans() }}</span><form method="POST" action="{{ route('students.destroy', $student) }}" data-confirm="Delete {{ $student->name }}’s student record?" onsubmit="return confirm(this.dataset.confirm)">@csrf @method('DELETE')<button class="button button-danger-quiet" type="submit">Delete student</button></form></div>
@endsection
