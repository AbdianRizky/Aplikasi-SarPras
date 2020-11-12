<div class="select">
    <select name="angkatan" id="angkatan" :value="old('angkatan')">
        <option selected disabled>-</option>
        @foreach ($angkatan as $data)
            <option value="{{ $data->id }}">{{ $data->angkatan }}</option>
        @endforeach
    </select>
</div>
@error('angkatan')
    <span>
        <strong> {{ $message }} </strong>
    </span>
@enderror
