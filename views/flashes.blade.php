@php
    $flashr_type = Session::has('_flashr.type') ? Session::get('_flashr.type') : null;
    $flashr_message = Session::has('_flashr.message') ? Session::get('_flashr.message') : null;
@endphp

@if($flashr_type && $flashr_message)

    <div style="position: relative" class="alert alert-{{ $flashr_type }}" role="alert">
        {{ $flashr_message }}
        <span id="close-flash" onclick="var el = this.parentElement; el.remove()"
              style="position: absolute; top: 10px; right: 10px; font-size: 24px; line-height: 10px; cursor: pointer">&times;</span>
    </div>

@endif

