
<div class="mb-3">
    <label for="{{$name}}" class="form-label">{{$label}}:</label>
    <select name="{{$name}}" id="{{$name}}" class="form-select" {{$required??''}}>
        <option value="">Choississez</option>
        @foreach ($data_array as $data_item)
            <option value="{{  $data_item->id}}"  {{ isset($selected_id) && $selected_id == $data_item->id ? 'selected' : '' }}>
                @if(isset($data_item->cp))
                    {{ $data_item->cp }} - {{ $data_item->label }}
                @else
                    {{ $data_item->label }}
                @endif
            </option>
        @endforeach
    </select>
    <div id="{{$name}}-error-msg" class="invalid-feedback"></div>
</div>
