<h2 class="wp-block-heading">
    <span class="ez-toc-section" id="{{ Str::kebab(str_replace(['.',':','?','/','[',']','<','>'], '', $title)) }}"></span>
    <strong>{{ $title }}</strong>
    <span class="ez-toc-section-end"></span>
</h2>
@if (!empty($blade))
    @include($blade)
@else
    {!! $content !!}
@endif
<br />