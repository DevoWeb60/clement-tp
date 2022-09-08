<div id="paginate">
    @if ($paginator->hasPages())
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled prev"><img class="svg" src="{{ asset('storage/svg/arrow.svg') }}" alt="Précédent">
                </li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}#paginate" rel="prev" class="prev">
                        <img class="svg" src="{{ asset('storage/svg/arrow.svg') }}" alt="Précédent">
                    </a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}#paginate">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}#paginate" rel="next" class="next"><img class="svg"
                            src="{{ asset('storage/svg/arrow.svg') }}" alt="Précédent"></a></li>
            @else
                <li class="disabled next"><img class="svg" src="{{ asset('storage/svg/arrow.svg') }}"
                        alt="Précédent">
                </li>
            @endif
        </ul>
    @endif
</div>
