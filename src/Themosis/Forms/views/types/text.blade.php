<label for="{{ $__field->getAttribute('id') }}">{{ $__field->getOptions('label') }}</label>
<input type="text" name="{{ $__field->getName() }}" {!! $__field->attributes($__field->getAttributes()) !!}>