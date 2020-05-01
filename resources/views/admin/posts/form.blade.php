@csrf

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

{{-- begin::description --}}
<div class="form-group">
    <label class="label-form" for="description">{{ __('m.description') }}</label>
    <input type="text" class="form-control name="description" value="{{ old('description') ? old('description') : $post->description }}" autofocus />
    @if($errors->has('description'))
    <small class="form-text invalid-feedback">{{ $errors->first('description') }}</small>
    @else
    <small class="form-text text-muted">{{ __('m.help description') }}</small>
    @endif
</div>
{{-- end::description --}}

{{-- begin::button to choose between link and file --}}
<div class="form-group">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-secondary active" id="file_option">
            <input type="radio" name="options" checked>Uplad a file
        </label>
        <label class="btn btn-secondary" id="link_option">
            <input type="radio" name="options">Insert a link to Vimeo or Youtube
        </label>
    </div>
</div>
{{-- end::button to choose between link and file --}}

{{-- begin::form-row file or link and thumb --}}
<div class="form-row">
    <div id="link_id" class="col">
        {{-- begin::link to vimeo or youtube --}}
        <div class="form-group">
            <label class="label-form" for="link">{{ __('m.link') }}</label>
            <input type="text" class="form-control" name="link" value="{{ old('link') ? old('link') : $post->link }}"/>
            <small class="form-text text-muted">{{ __('m.help link') }}</small>
        </div>
        {{-- end::link to vimeo or youtube --}}
    </div>
    {{-- begin::col --}}
    <div id="file_id" class="col">
        {{-- begin::file --}}
        <div class="form-group">
            <label class="label-form">{{ __('m.original') }}</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="original" name="original"/>
                <label class="custom-file-label" for="original" id="label_original">{{ __('m.choose file') }}</label>
            </div>
            <small class="form-text text-muted">{{ __('m.help original') }}</small>
        </div>
        {{-- end::file --}}
    </div>
    {{-- end::col --}}

    <div class="col">
        {{-- begin::thumb --}}
        <div class="form-group">
            <label class="label-form">{{ __('m.thumb') }}</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="thumb_img" name="thumb_img">
                <label class="custom-file-label" for="thumb_img" id="thumb">{{ __('m.choose file') }}</label>
            </div>
            <small class="form-text text-muted">{{ __('m.help thumb') }}</small>
        </div>
        {{-- end::thumb --}}
    </div>
</div>
{{-- end::form-row file and thumb --}}

{{-- begin::is published --}}
<div class="form-group">
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="is_published" name="is_published">
        <label class="custom-control-label" for="is_published">{{ __('m.post published') }}</label>
    </div>
    <small class="form-text text-muted">{{ __('m.help file type') }}</small>
</div>
{{-- end::is published --}}

{{-- begin::submit --}}
<div class="form-row py-2">
    <div class="col-sm-12 col-md-3">
        <button type="submit" class="btn btn-primary btn-block">
            {{ $submitButtonText ?? __('m.register') }}
        </button>
    </div>
    @if ($action === 'create')
    <div class="col-sm-12 col-md-3">
        <button type="submit" class="btn btn-secondary btn-block" name="submitAndAdd">
            {{ __('m.conferm +new') }}
        </button>
    </div>
    @endif
    <div class="col-sm-12 col-md-3">
        <a class="btn btn-outline-secondary" href="{{ URL::previous() }}">
            {{ __('m.back') }}
        </a>
    </div>
</div>
{{-- end::submit button --}}

{{-- begin::extra --}}
<p class="text-muted mt-3">
    (<span class="text-danger">*</span>) {{ __('m.requested fields') }}
</p>
{{-- end::extra --}}

@section('extra-javascript')
<script>
    /*
    $('#original').change(function(e) {
        var fileName = e.target.files[0].name;
        $('#original-label').html(fileName);
    });

    $('#thumb_img').change(function(e) {
        var fileName = e.target.files[0].name;
        $('#thumb_img-label').html(fileName);
    });
    */

    $(document).on('change', '.custom-file-input', function(event) {
        $(this).next('.custom-file-label').html(event.target.files[0].name);
    })

    $('#create_post').ready(function() {
        $('#file_option').button('toggle');
        $('#link_id').hide();
    });

    $('#link_option').click(function() {
        $('#file_id').hide();
        $('#link_id').fadeIn();
        $('input[name="link"]').val('');
    });

    $('#file_option').click(function() {
        $('#link_id').hide();
        $('#file_id').fadeIn();
        $('input[name="original"]').val('');
        $('#label_original').html('');
    });

</script>
@endsection
