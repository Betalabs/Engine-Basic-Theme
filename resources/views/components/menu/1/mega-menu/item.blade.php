<li class="simple-dropdown">
    <a @if($zero->urls->isNotEmpty())
       href="{{$zero->urls->first()->url}}"
       @endif
       title="{{$zero->name}}">
        {{$zero->name}}
    </a>
    @if($zero->children->isNotEmpty())
        <div class="sub-menu">
            <ul class="category-links">
                @foreach($zero->children as $one)
                    <li>
                        <a @if($one->urls->isNotEmpty())
                           href="{{$one->urls->first()->url}}"
                           @endif
                           title="{{$one->name}}">
                            {{$one->name}}
                        </a>

                        @if($one->children->isNotEmpty())
                            <span class="arrow"></span>
                            <ul>
                                @foreach($one->children as $two)
                                    <li>
                                        <a @if($two->urls->isNotEmpty())
                                           href="{{$two->urls->first()->url}}"
                                           @endif
                                           title="{{$two->name}}">
                                            {{$two->name}}
                                        </a>

                                        @if($two->children->isNotEmpty())
                                            <span class="arrow"></span>
                                            <ul>
                                                @foreach($two->children as $three)
                                                    <li>
                                                        <a @if($three->urls->isNotEmpty())
                                                           href="{{$three->urls->first()->url}}"
                                                           @endif
                                                           title="{{$three->name}}">
                                                            {{$three->name}}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</li>
