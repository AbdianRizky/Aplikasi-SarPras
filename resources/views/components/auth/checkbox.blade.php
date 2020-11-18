@props(['type', 'for', 'label'])

<input type="{{ $type }}" name="{{ $for }}" id="{{ $for }}" class="checkbox" checked>
<label for="{{ $for }}">{{ $label }}</label>
