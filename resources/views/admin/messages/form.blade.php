@csrf

{{-- begin::name --}}
<div class="form-group">
    <label class="label-form field-required " for="name">{{ __('m.name') }}</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ? old('name') : $message->name }}" autofocus />
    @if($errors->has('name'))
    <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
    @else
    <small class="form-text text-muted">{{ __('m.help name') }}</small>
    @endif
</div>
{{-- end::name --}}

{{-- begin::text --}}
<div class="form-group">
    <label class="label-form field-required" for="text">{{ __('m.text label') }}</label>
    <input type="text" class="form-control @error('text') is-invalid @enderror" name="text" value="{{ old('text') ? old('text') : $message->text }}" />
    @if($errors->has('text'))
    <small class="form-text invalid-feedback">{{ $errors->first('text') }}</small>
    @else
    <small class="form-text text-muted">{{ __('m.help text message') }}</small>
    @endif
</div>
{{-- end::text --}}

{{-- begin::updated date --}}
{{-- end::updated date --}}

{{-- begin::submit --}}
<div class="form-group row">
    <div class="col-sm-12 col-md-4 pt-1">
        <button type="submit" class="btn btn-primary btn-block">
            {{ $submitButtonText ?? __('m.register') }}
        </button>
    </div>
    <div class="col-sm-12 col-md-4 pt-1">
        <a class="btn btn-outline-danger btn-block" href="{{ URL::previous() }}">
            Cancella
        </a>
    </div>
</div>
{{-- end::submit button --}}

{{-- begin::extra --}}
<p class="text-muted mt-3">
    (<span class="text-danger">*</span>) {{ __('m.requested fields') }}
</p>
{{-- end::extra --}}