{{--@dump($menu)--}}
<section id='navbar'>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg justify-content-end">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class='collapse navbar-collapse' id="navbarNavDropdown">
                    <ul class="nav nav-pills nav-justified navbar-nav align-self-stretch list-group" id="list-tab"
                        role="tablist">
                        @foreach($menu as $elem)
                            {{--                            @dd($elem->sub_menues)--}}
                            <li class='d-flex nav-item justify-content-center align-items-center'><a
                                    class='nav-link first-nav-link' id="list-{{$elem['id']}}-list" data-toggle='list'
                                    href='#list-{{ $elem['id'] }}'
                                    role='tab' aria-controls='home'>
                                    {{ $elem['menu_name_' . app()->getLocale()]   }}
                                </a></li>
                        @endforeach

                    </ul>
                </div>
            </nav>
            <div class="tab-content tab-content-sub-menu" id="nav-tabContent">
                @foreach($menu as $el)
                    <div class="tab-pane first-tab-pane fade" id="list-{{ $el['id'] }}" role="tabpanel"
                         aria-labelledby="list-{{$el['id']}}-list">
                        <nav class="navbar navbar-expand-lg justify-content-end" id="subnav">
                            <div class="collapse navbar-collapse scroll-div" id="navbarNavDropdown">
                                <ul class="d-flex flex-nowrap nav nav-pills nav-justified navbar-nav align-self-stretch list-group"
                                    id="list-tab" role="tablist">

                                    @foreach($el->sub_menues as $sub_el)


                                        <li class='d-flex nav-item nav-second-li justify-content-center align-items-center'>
                                            <a
                                                class='nav-link' id="list-sub-{{ $sub_el['id'] }}-list" data-toggle='list'
                                                href='#list-sub-{{$sub_el['id']}}'
                                                role='tab'
                                                aria-controls='home'>{{ $sub_el['sub_menu_name_' . app()->getLocale()] }}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </nav>
                        <div class="tab-content tab-content-sub-menu overhidden-sub-menu" id="nav-tabContent">
                            @php
                                $left = 0;
                            @endphp
                            @foreach($el->sub_menues as $sub_el)
                                <div style="left: {{$left . '%'}}" class="tab-pane fade sub-categories"
                                     id="list-sub-{{$sub_el['id']}}" role="tabpanel"
                                     aria-labelledby="list-sub-{{$sub_el['id']}}-list">
                                    <div class="" id="navbarNavDropdown1">
                                        <div
                                            class="nav nav-pills nav-justified navbar-nav align-self-stretch list-group"
                                            id="list-tab1" role="tablist">

                                            <div class="d-flex">
                                                <div>
                                                    @php
                                                        $count = 0;
                                                    @endphp
                                                    @foreach($sub_el->sub_categories as $sub_cat)
                                                        @php
                                                            $count++;
                                                        @endphp
                                                        <div
                                                            class="mt-1 mb-1 text-strong">{{$sub_cat['name_category_' . app()->getLocale()]}}
                                                        </div>

                                                        @if($count == 6)
                                                </div>
                                                <div class="ml-5">
                                                    @endif


                                                    @endforeach
                                                </div>
                                                <div class="ml-5">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        $left+=10;

                                    @endphp
                                </div>

                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
