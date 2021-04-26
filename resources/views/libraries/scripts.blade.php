<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.6/metisMenu.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplebar/5.3.0/simplebar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/node-waves/0.7.6/waves.min.js"></script>
<!-- Required datatable js -->
<script src="{{asset('libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

<!-- Responsive examples -->
<script src="{{asset('libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}">
</script>
<script src="{{ asset('js/app-t.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
<script src="{{ asset('js/appa.js') }}" defer></script>
<script src="{{ asset('js/welcome.js') }}"></script>
@stack('js')

<script>
    function getItem() {
        var filter_type = $("input:radio[name='filter_type']:checked").val();
        setLSt('filter_type', filter_type);
        var data = {
            filter_type: parseInt(getLSt('filter_type')),
        };
        $.ajax({
            url: "{{ route('get.item') }}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'get',
            dataType: "html",
            data: data,
            success: function (response) {
                $("#item").html(response);
            }
        });
    }

    function getItemDetails() {
        var filter_item = $("input:radio[name='filter_item']:checked").val();
        setLSt('filter_item', filter_item);
        var data = {
            filter_item: parseInt(getLSt('filter_item')),
        };
        $.ajax({
            url: "{{ route('get.item.details') }}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'get',
            dataType: "html",
            data: data,
            success: function (response) {
                $("#item_details").html(response);
            }
        });
    }

    function getClimate() {
        var climate = $("input:radio[name='climate']:checked").val();
        setLSt('climate', climate);
        var data = {
            climate: parseInt(getLSt('climate')),
        };
        $.ajax({
            url: "{{ route('get.climate') }}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'get',
            dataType: "html",
            data: data,
            success: function (response) {
                $("#climate").html(response);
            }
        });
    }

    /**
     * Set Local Storage Item
     * @param string $name
     * @param string $value
     */
    function setLSt(name, value) {
        localStorage.setItem(name, value);
    }
    /**
     * Get Local Storage Item
     * @param string $name
     */
    function getLSt(name) {
        return localStorage.getItem(name);
    }
    /**
     * remove Local Storage Item
     *@param string $name
     *
     */
    function removeLSt(name) {
        localStorage.removeItem(name);
    }

    $("#insert").validate({
        rules: {
            file1: {
                required: true,
            },
            file2: {
                required: true,
            },
        },
        messages: {
            file1: "Please insert forcasting sheet.",
            file2: "Please insert Actual area sheet.",
        }
    });

</script>
