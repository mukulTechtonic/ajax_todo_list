{{--  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  --}}
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>



<!-- Core plugin JavaScript-->



<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>


<!-- Page level plugins -->

<!-- Page level custom scripts -->
<script src="{{ asset('js/demo/sweet.js') }}"></script>


<script type="text/javascript">
    $('.show_confirm').click(function(event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
                title: `Are you sure you want to delete this record?`,
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
    });
</script>
