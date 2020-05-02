<footer id="footer">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <label class="label-form">{{ __('m.label send file') }}</label>

                <form action="{{ route('front-upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="upload-btn-wrapper">
                                <button id="fichier" class="{{ $errors->has('original') ? 'btn-file-error' : 'btn-file-upload' }} btn-block">{{ __('m.choose file') }}</button>
                                <input id="michel" type="file" name="original" required />
                            </div>

                        </div>
                        <div class="col-sm-12">
                            <button id="btn-file-upload" type="submit" class="btn btn-block btn-file-upload">{{ __('m.register') }}</button>
                            @if($errors->has('original'))
                            <div class="form-text text-danger">{{ $errors->first('original') }}</div>
                            @else
                            <small class="form-text">{{ __('m.help public file upload') }}</small>
                            @endif

                        </div>
                    </div>


                </form>
            </div>
        </div>

    </div>
</footer>
