<div class="form-group row">
    <label class="col-sm-2 col-form-label control-label">Name </label>
    <div class="col-sm-10">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2 col-form-label control-label">Type </label>
    <div class="col-md-3">
        <select class="form-selectize" id="sl-type-category" name="type" style="float: left;">
            <option value="" disabled selected>Select category type</option>
            @foreach($categoryType as $key=>$value)
                <option value="{{ $key }}" {{ isset($model) && $model->type == $key ? 'selected' : ''}}>{{ $value }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-1">
        <div class="checkbox">
            <input id="cb-type-category" type="checkbox">
            <label for="cb-type-category">Other</label>
        </div>
    </div>
    <div class="col-md-3" id="input-type-category">
        {!! Form::text('', null, ['class' => 'form-control', 'id' => 'text-type']) !!}
    </div>
</div>
@include('admin.category.elements.footer')
