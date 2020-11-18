<div {{ $attributes->merge(['class'=>'formel']) }} >
    <div class="select">
        <label for="{{ $field }}">{{ $label ?? '' }}</label>
        <select name="{{ $field }}" id="{{ $field }}" value="{{ old($field) }}">
            <option selected disabled>-</option>
            @if($field == 'angkatan')
                @foreach ($angkatan as $data)
                    <option value="{{ $data->id }}">{{ $data->angkatan }}</option>
                @endforeach
            @elseif($field == 'jurusan')
                @foreach ($jurusan as $data)
                    <option value="{{ $data->id }}">{{ $data->jurusan }}</option>
                @endforeach
            @elseif($field == 'kelas')
                @foreach ($kelas as $data)
                    <option value="{{ $data->id }}">{{ $data->kelas }}</option>
                @endforeach
            @endif
        </select>
    </div>
    @error($field)
        <span>
            <strong> {{ $message }} </strong>
        </span>
    @enderror
</div>
<script src="{{ asset('js/app.js') }}"></script>
