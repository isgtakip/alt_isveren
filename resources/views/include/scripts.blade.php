<!-- jQuery -->
<script src="{{ asset('tema/plugins/jquery/jquery.min.js') }}"></script>


<!-- Bootstrap 4 -->
<script src="{{ asset('tema/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->




<script src="{{ asset('tema/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('tema/dist/js/demo.js') }}"></script>

<script src="{{ asset('js/app.js') }}"></script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>


<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.foundation.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.jqueryui.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.dataTables.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.foundation.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.jqueryui.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.semanticui.js"></script>




<script type="text/javascript">
  $(function () {

    var table = $('.yajra-datatable').DataTable({

        processing: true,
        serverSide: true,
        responsive: {
        details: {
            display: $.fn.dataTable.Responsive.display.childRowImmediate,
            type: ''
        }
    },

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
