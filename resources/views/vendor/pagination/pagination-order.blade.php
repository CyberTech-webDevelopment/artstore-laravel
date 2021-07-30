@if ($paginator->hasPages())
    <div class="row mt-5 mb-5 page-row">

        <nav aria-label="Page navigation example ml-auto mr-auto" id="order-pages">
            <ul class="pagination d-flex justify-content-center">
                @if ($paginator->onFirstPage())

                    <li class="page-item disabled">
                        <a class="page-link-order">

                            <span>«</span>
                        </a>
                    </li>

                @else
                    <li class="page-item ">
                        <a class="page-link-order" href="{{ $paginator->previousPageUrl() }}">
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
                                <li class="page-item my-active"><span class="page-link-order">{{ $page }}</span></li>

                            @else
                                <li class="page-item"><a class="page-link-order" href="{{ $url }}">{{ $page }}</a></li>

                            @endif
                        @endforeach
                    @endif

                @endforeach


                @if ($paginator->hasMorePages())

                    <li class="page-item">
                        <a class="page-link-order" href="{{ $paginator->nextPageUrl() }}">
                            <span>»</span>
                        </a>
                    </li>

                @else
                    <li class="page-item disabled">

                        <a class="page-link-order">

                            <span>»</span>

                        </a>

                    </li>

                @endif

            </ul>
        </nav>
    </div>
@endif

