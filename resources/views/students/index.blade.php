@extends('layouts.app')
@section('title', 'Students')
@section('section', 'Students')
@section('content')
<div class="page-heading"><div><p class="eyebrow">PEOPLE DIRECTORY</p><h1>Students <span class="heading-count">{{ $students->total() }}</span></h1><p class="page-lede">A thoughtful home for every student record.</p></div><a class="button button-primary" href="{{ route('students.create') }}"><span>＋</span> Add student</a></div>
<section class="data-panel">
    <div class="panel-toolbar"><div><h2>All students</h2><p>{{ $students->total() }} {{ Str::plural('record', $students->total()) }} in your directory</p></div><form class="search-form" method="GET" action="{{ route('students.index') }}"><label class="sr-only" for="student-search">Search students</label><span class="search-icon">⌕</span><input id="student-search" type="search" name="search" value="{{ request('search') }}" placeholder="Search name, email or phone"><button type="submit">Search</button>@if(request('search'))<a class="clear-search" href="{{ route('students.index') }}">Clear</a>@endif</form></div>
    @if($students->count())
    <div class="table-wrap"><table class="data-table"><thead><tr><th>STUDENT</th><th>PHONE</th><th>DATE OF BIRTH</th><th>ADDED</th><th><span class="sr-only">Actions</span></th></tr></thead><tbody>
        @foreach($students as $student)
        <tr><td><a class="person-cell" href="{{ route('students.show', $student) }}"><span class="person-avatar avatar-tone-{{ $student->id % 5 }}">{{ Str::upper(Str::substr($student->name, 0, 1)) }}</span><span><strong>{{ $student->name }}</strong><small>{{ $student->email }}</small></span></a></td><td>{{ $student->phone }}</td><td>{{ $student->date_of_birth?->format('M j, Y') ?? '—' }}</td><td>{{ $student->created_at->format('M j, Y') }}</td><td><div class="row-actions"><a href="{{ route('students.show', $student) }}" class="icon-action" aria-label="View {{ $student->name }}">↗</a><a href="{{ route('students.edit', $student) }}" class="icon-action" aria-label="Edit {{ $student->name }}">✎</a><form method="POST" action="{{ route('students.destroy', $student) }}" data-confirm="Delete {{ $student->name }}’s student record?" onsubmit="return confirm(this.dataset.confirm)">@csrf @method('DELETE')<button class="icon-action danger-action" aria-label="Delete {{ $student->name }}">⌫</button></form></div></td></tr>
        @endforeach
    </tbody></table></div>
    <div class="pagination-bar"><p>Showing <strong>{{ $students->firstItem() }}–{{ $students->lastItem() }}</strong> of <strong>{{ $students->total() }}</strong> students</p>{{ $students->onEachSide(1)->links('vendor.pagination.campus') }}</div>
    @else
    <div class="empty-state"><span class="empty-icon">♙</span><h3>{{ request('search') ? 'No students match that search' : 'Your student directory is ready' }}</h3><p>{{ request('search') ? 'Try another name, email or phone number.' : 'Add your first student to start keeping their details in one place.' }}</p>@if(request('search'))<a class="button button-secondary" href="{{ route('students.index') }}">Clear search</a>@else<a class="button button-primary" href="{{ route('students.create') }}">＋ Add your first student</a>@endif</div>
    @endif
</section>
@endsection
