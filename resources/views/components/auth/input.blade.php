<div {{ $attributes->merge(['class'=>'formel']) }}>
    <label for="{{ $field }}">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $field }}"  id="{{ $field }}" class="input form-input @error($field) is-invalid @enderror" value="{{ old($field) }}" placeholder="Masukan Email">
    @error($field)
        <span class="is-invalid">
            {{ $message }}
        </span>
    @enderror
</div>
