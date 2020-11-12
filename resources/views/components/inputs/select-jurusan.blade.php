<div class="select">
    <select name="jurusan" id="jurusan" :value="old('jurusan')">
        <option selected disabled>-</option>
        @foreach ($jurusan as $data)
            <option value="{{ $data->id }}">{{ $data->jurusan }}</option>
        @endforeach
    </select>
</div>
@error('jurusan')
    <span>
        <strong> {{ $message }} </strong>
    </span>
@enderror
