<div id="ez-toc-container" class="ez-toc-wrap-center counter-hierarchy ez-toc-counter ez-toc-grey ez-toc-container-direction">
    <p class="ez-toc-title">Table of Contents</p>
    <nav>
        <ul class="ez-toc-list ez-toc-list-level-1">
            @if (isset($groups))
                @foreach ($categories as $key => $title)
                    @if (isset($groups[$key]))
                        <li class="ez-toc-page-1 ez-toc-heading-level-2">
                            <a class="ez-toc-link" style="padding-top: 0.6em; font-weight: bold" href="#{{ $key }}">{{ $title }}</a>
                            <ul>
                                @foreach ($groups[$key] as $entry)
                                    <li class="ez-toc-page-1 ez-toc-heading-level-2">
                                        <a class="ez-toc-link" href="#{{ Str::kebab(str_replace(['.',':','?','/','[',']','<','>'], '', $entry->question)) }}" title="{{ $entry->question }}">{{ $entry->question }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach
            @else
                @foreach ($entries as $entry)
                    <li class="ez-toc-page-1 ez-toc-heading-level-2">
                        <a class="ez-toc-link ez-toc-heading-1" href="#{{ Str::kebab(str_replace(['.',':','?','/','[',']','<','>'], '', $entry)) }}" title="{{ $entry }}">{{ $entry }}</a>
                    </li>
                @endforeach
            @endif
        </ul>
    </nav>
</div>