@if ($paginator->hasPages())
<nav class="pagination" aria-label="Pagination">
    @if ($paginator->onFirstPage())<span class="page-button page-disabled" aria-disabled="true">←</span>@else<a class="page-button" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="Previous page">←</a>@endif
    @foreach ($elements as $element)
        @if (is_string($element))<span class="page-dots">{{ $element }}</span>@endif
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())<span class="page-button current-page" aria-current="page">{{ $page }}</span>@else<a class="page-button" href="{{ $url }}" aria-label="Go to page {{ $page }}">{{ $page }}</a>@endif
            @endforeach
        @endif
    @endforeach
    @if ($paginator->hasMorePages())<a class="page-button" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="Next page">→</a>@else<span class="page-button page-disabled" aria-disabled="true">→</span>@endif
</nav>
@endif
