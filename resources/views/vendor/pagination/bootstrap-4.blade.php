@if ($paginator->hasPages())
<div class="row mt30">
    <div class="col-md-12 col-sm-12">
    <nav class="pagination">
        <ul>
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li><i class="ti-angle-left"></i></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="ti-angle-left"></i></a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><a class="current-page">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}" >{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="ti-angle-right"></i></a></li>
        @else
            <li><i class="ti-angle-right"></i></li>
        @endif
        </ul>
    </nav>
    </div>
</div>
@endif
