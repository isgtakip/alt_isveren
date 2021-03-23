<!-- Bootstrap core JavaScript-->
<script src="{{ asset('tema2/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('tema2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('tema2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('tema2/js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('tema2/vendor/datatables/jquery.dataTables.min.js') }}"></script>

<script src="{{ asset('tema2/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('tema2/js/demo/datatables-demo.js') }}"></script>


<script type="text/javascript">
  $(function () {

    var table = $('.yajra-datatable').DataTable({

        processing: true,
        serverSide: true,


        ajax: "{{ route('firmalar.list') }}",
        columns: [
            {data: 'firma_id', name: 'firma_id'},
            {data: 'firma_tam_unvan', name: 'firma_tam_unvan'},
            {data: 'firma_kisa_adi', name: 'firma_kisa_adi'},
            {data: 'firma_sgk_no', name: 'firma_sgk_no'},
            {data: 'firma_tehlike_sinifi', name: 'firma_tehlike_sinifi'},
            {data: 'firma_tip', name: 'firma_tip'},
            {
                data: 'action',
                name: 'action',
                orderable: true,
                searchable: true
            },
        ]
    });

  });
</script>
