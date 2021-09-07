@if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item first-page-link disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">
                        <i class="fa fa-long-arrow-left"></i> Previous
                    </span>
                </li>
            @else
                <li class="page-item first-page-link">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                        <span aria-hidden="true">
                            <i class="fa fa-long-arrow-left"></i> Previous
                        </span>
                        <span class="sr-only"></span>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item last-page-link">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                        <span aria-hidden="true">Next <i
                                class="fa fa-long-arrow-right"></i></span>
                        <span class="sr-only"></span></a>
                </li>
            @else
                <li class="page-item last-page-link disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">
                       Next <i class="fa fa-long-arrow-right"></i>
                    </span>
                </li>
            @endif
        </ul>
    </nav>
@endif
