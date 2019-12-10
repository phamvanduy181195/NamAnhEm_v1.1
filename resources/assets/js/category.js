$(function() {
    //select type category in page index
    $('#category-select-type').on('change', function() {
        var categoryType = $(this).val();

        $.ajax({
            url: CMS_URL + '/admin/category/get-item',
            type: "GET",
            data: {type: categoryType},
            success: function(data) {
                if (data.status.code == 200) {
                    $('#content-category-table').html(data.response);
                }
            },
            errors: function (response) {
                console.log(response);
            }
        });
    });

    //submit form index category
    $('#submit-category-index').on('click', function () {

        $.ajax({
            url: CMS_URL + '/admin/category/update-category',
            type: 'POST',
            data: $('#form-category-index').serialize(),
            success: function(data) {
                swal('', data.status.message, data.status.message_type);
            },
            errors: function (response) {
                console.log(response);
            }
        });
    });

    $('#btn-add-category').on('click', function () {
         window.location.href = $(this).data('url');
    });

    //hidden input
    $('#input-type-category').css('display', 'none');

    //category select type
    $('#cb-type-category').on('change', function() {
        select = $('#sl-type-category').selectize();
        select = select[0].selectize;
        if ($('#cb-type-category').is(":checked"))
        {
            $('#input-type-category').css('display', 'block');
            $('#text-type').attr('name', 'type');
            $('#sl-type-category').removeAttr('name');
            select.disable();

        } else {
            select.enable();
            $('#input-type-category').css('display', 'none');
            $('#sl-type-category').attr('name', 'type');
            $('#text-type').removeAttr('name');
        }
    });

    //delete category
    $(document).on('click', '.btnDeleteCategory', function () {
        $trId = $(this).data('trId');

        swal({
                title: "Are you sure?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn btn-danger",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            },
            function(){
                swal("Deleted!", "Delete successfully!", "success");
                $('#' + $trId).remove();
            });
    });
});
