<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<!-- Sweet-Alert  -->
<script src="{{ asset('plugins/sweetalert/sweetalert.min.js') }}"></script>

<script src="{{ asset('js/helper.js') }}"></script>

<script type="text/javascript">
jq(document).ready(function(){
    load_datepicker();
    
    jq('table.datatable').DataTable();
});
</script>