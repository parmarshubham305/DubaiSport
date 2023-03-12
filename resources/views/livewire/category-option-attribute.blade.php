<div>
    <div class="box-body">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Category</label>
            <div class="col-sm-8">
                {{ Form::select('category_id', ['' => 'Select Category'] + $categories, old('category_id'), ['class' => 'form-control', 'required' ]) }}
            <span class='text-danger'>{{ $errors->first('category_id') }}</span>
            </div>
        </div>
    </div>
</div>
