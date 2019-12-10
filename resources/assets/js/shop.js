$(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on('click', '.upDownRow', function () {
        var type = $(this).attr('value');
        var $current = $(this).closest('tr.arrow-item');
        if (type === 'up') {
            var $previous = $current.prev('tr.arrow-item');
            if($previous.length !== 0) {
                $current.insertBefore($previous);
            }
        } else { // down
            var $next = $current.next('tr.arrow-item');
            if($next.length !== 0) {
                $current.insertAfter($next);
            }
        }

        return false;
    });

    //muti language
    $('#category-select-language').change(function () {
        var selectedlanguage = $(this).children("option:selected").val();
        window.location.href = CMS_URL + '/language/' + selectedlanguage;
    });

});
