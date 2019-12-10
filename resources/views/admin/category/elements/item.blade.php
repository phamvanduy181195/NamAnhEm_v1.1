@foreach($categories as $category)
<input type="hidden" name="list_id_old[]" value="{{ $category->id }}">
<tr class="arrow-item" id="tr_{{ $category->id }}">
    <td style="text-align: center;">
        <span>
            <a class="upDownRow up" value="up" href="javascript:">
                <i class="fa fa-long-arrow-up" style="font-size: 18px"></i>
            </a>
        </span>
        <span class="margin-left-3">
            <a class="upDownRow down" value="down" href="javascript:">
                <i class="fa fa-long-arrow-down" style="font-size: 18px"></i>
            </a>
        </span>
        <input type="hidden" name="category[{{ $category->id }}][id]" value="{{ $category->id }}">
        <input type="hidden" name="list_id_news[]" value="{{ $category->id }}">
    </td>
    <td>
        <div class="checkbox">
            <input id="selectable2_{{ $category->id }}" name="category[{{ $category->id }}][status]" type="checkbox" {{ $category->status ? 'checked' : '' }}>
            <label for="selectable2_{{ $category->id }}"></label>
        </div>
    </td>
    <td>{{ $category->name }}</td>
    <td class="text-center font-size-18">
        <a href="{{ route('admin::category.edit', ['category' => $category->id]) }}" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
        <a href="javascript:" class="text-gray btnDeleteCategory" data-tr-id="tr_{{ $category->id }}"><i class="ti-trash"></i></a>
    </td>
</tr>
@endforeach
