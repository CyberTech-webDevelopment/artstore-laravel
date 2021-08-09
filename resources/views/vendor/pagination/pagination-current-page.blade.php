@if ($paginator->hasPages())
    <div class="row mt-5 mb-5 page-row">

        <nav aria-label="Page navigation example ml-auto mr-auto" id="current-pages">
            <ul class="pagination d-flex justify-content-center">
                @if ($paginator->onFirstPage())

                    <li class="page-item disabled">
                        <a class="page-link_current">

                            <span>«</span>
                        </a>
                    </li>

                @else
                    <li class="page-item ">
                        <a class="page-link_current" href="{{ $paginator->previousPageUrl() }}">
                            <span>«</span>
                        </a>
                    </li>
                @endif

                @foreach ($elements as $element)

                    @if (is_string($element))


                        <li class="page-item disabled"><span>{{ $element }}</span></li>

                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item my-active"><span class="page-link_current">{{ $page }}</span></li>

                            @else
                                <li class="page-item"><a class="page-link_current" href="{{ $url }}">{{ $page }}</a></li>

                            @endif
                        @endforeach
                    @endif

                @endforeach


                @if ($paginator->hasMorePages())

                    <li class="page-item">
                        <a class="page-link_current" href="{{ $paginator->nextPageUrl() }}">
                            <span>»</span>
                        </a>
                    </li>

                @else
                    <li class="page-item disabled">

                        <a class="page-link_current">

                            <span>»</span>

                        </a>

                    </li>

                @endif

                {{-- <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">52</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">»</span>
                    </a>
                </li> --}}
            </ul>
        </nav>
    </div>
@endif
