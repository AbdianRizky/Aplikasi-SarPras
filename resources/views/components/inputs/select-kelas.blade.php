<div class="select">
    <select name="kelas" id="kelas" :value="old('kelas')">
        <option selected disabled>-</option>
        @foreach ($kelas as $data)
            <option value="{{ $data->id }}">{{ $data->kelas }}</option>
        @endforeach
    </select>
</div>
@error('kelas')
    <span>
        <strong> {{ $message }} </strong>
    </span>
@enderror
