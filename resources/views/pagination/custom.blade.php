
<div class="pagination">
    <!-- Página anterior -->
    @if ($paginator->onFirstPage())
        <span class="page-link disabled">
            <i class="fas fa-chevron-left"></i>
        </span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="page-link">
            <i class="fas fa-chevron-left"></i>
        </a>
    @endif

    <!-- Páginas -->
    @foreach ($paginator->links()->elements as $element)
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <span class="page-link active">{{ $page }}</span>
                @else
                    <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                @endif
            @endforeach
        @endif
    @endforeach

    <!-- Página siguiente -->
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="page-link">
            <i class="fas fa-chevron-right"></i>
        </a>
    @else
        <span class="page-link disabled">
            <i class="fas fa-chevron-right"></i>
        </span>
    @endif
</div>

