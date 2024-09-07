<div class="col-xl-6 col-md-12" style="padding-left: 3em; padding-right: 3em; padding-top: 0.5em">
    <div class="form-group text-left m-1" style="padding-top: 1em">
        <label class="control-label" for="{{ $name }}">{{ $label }}</label>
        <input tabindex="{{ $tabIndex ?? 0 }}" id="{{ $name }}" name="{{ $name }}" type="{{ $type ?? 'text' }}" class="form-control" value="{{ $value ?? '' }}">
    </div>
</div>
