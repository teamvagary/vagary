<option value="">--- Pilih Kabupaten/Kota ---</option>
@if(!empty($regencies))
  @foreach($regencies as $key => $value)
    <option value="{{ $key }}">{{ $value }}</option>
  @endforeach
@endif
