<script>
  counter = function() {
      var value = $('#text').val();

      if (value.length == 0) {
          $('#totalChars').html(0);
          return;
      }

      var regex = /\s+/gi;
      var totalChars = value.length;

      $('#totalChars').html(totalChars);
  };

  $(document).ready(function() {
      $('#count').click(counter);
      $('#text').change(counter);
      $('#text').keydown(counter);
      $('#text').keypress(counter);
      $('#text').keyup(counter);
      $('#text').blur(counter);
      $('#text').focus(counter);
  });
</script>

<textarea id="text" name="{{ $name }}" rows="5"
          @if($errors->has($name)) class="neg" @endif>@if(isset($model) || old($name)){{ old($name) ? old($name) : $model->$name}}@endif</textarea>
@if($errors->has($name))
    <div class="text-neg text-small">{{ $errors->first($name) }}</div>
@endif
