@section('js')
    <script src="{{ asset('assets/template/vendor/selectize/dist/js/standalone/selectize.min.js') }}"></script>
    <script>
        var categorySelectType = $('.form-selectize').selectize({
            create: false,
            sortField: {
                field: 'text',
                direction: 'asc'
            },
            dropdownParent: 'body'
        });
    </script>
    <script src="{{ asset('js/category.js') }}"></script>
@endsection
@section('css')
    <link href="{{ asset('assets/template/vendor/selectize/dist/css/selectize.default.css') }}" rel="stylesheet">
@endsection
