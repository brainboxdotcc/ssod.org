<div id="ez-toc-container" class="ez-toc-wrap-center counter-hierarchy ez-toc-counter ez-toc-grey ez-toc-container-direction">
    <p class="ez-toc-title">Table of Contents</p>
    <nav>
        <ul class="ez-toc-list ez-toc-list-level-1 ">
            @foreach ($entries as $entry)
                <li class="ez-toc-page-1 ez-toc-heading-level-2">
                    <a class="ez-toc-link ez-toc-heading-1" href="#{{ Str::kebab(str_replace(['.',':','?','/','[',']','<','>'], '', $entry)) }}" title="{{ $entry }}">{{ $entry }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</div>
