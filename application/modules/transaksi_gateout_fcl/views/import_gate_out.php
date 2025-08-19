<div class="modal fade" id="modal_import" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel" aria-hidden="true" style="margin-top: 1% !important;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title_general" id="basicModalLabel">Import Data <br> Dari Halaman Entry Cont Out</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div class="row gutters">      
                        <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: -2%">
                            <div class="form-group row gutters">
                                <label for="inputName" class="col-sm-4 col-form-label text-left">No Kontainer</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm"  id="search_on_modal"  name="search_on_modal">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: -2%">
                            <div class="form-group row gutters">
                                <marquee width="100%" direction="right" height="40px">
                                    <div class="note" style="font-weight: bold;color: red;">Double Klik di Table Untuk Memulai Import ...!!</div>
                                </marquee>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="table_search" class="table m-0 dataTable no-footer nowrap" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>DO Number</th>
                                    <th>No Container</th>
                                    <th>Cont Date Out</th>
                                    <th>Cont Date In</th>                                    
                                    <th>Id Out</th>
                                </tr>
                            </thead>
                            <tbody>                                     
                            </tbody>
                    </table>
                    </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var table_search ;
    var id_cont_out = "" ;
    
    $('#search_on_modal').on('keyup',function () {
        table_search.ajax.reload(null, false);
        //table_search.search(this.value).draw();
    });

    $('#modal_import').on('shown.bs.modal', function () {
       table_search = $('#table_search').DataTable();
       table_search.columns.adjust();
    });

    $(document).ready(function() {
        table_search = $('#table_search').DataTable({
            "destroy": true,
            "processing": true,
            "serverSide": true,
            "order": [],
            "searching": true,
            "ordering": true,
            "scrollX": true,
            "scrollY": "200px",
            "scrollCollapse": true,
            "info": true,
            "lengthMenu": [[10, 25, 50,100, 1000], [10, 25, 50,100, 1000]],
            "pageLength": 10,
            "bLengthChange": true,
            "pagingType" : "full",

            "ajax": {
                "url": "<?php echo site_url('transaksi/gateout_fcl/table_data_out') ?>",
                "type": "POST",
                "data": function(data) {
                    data.search_on_modal = $('#search_on_modal').val();
                }

            }
        });

        $('#table_search tbody').on('click', 'tr', function() {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            } else {
                table_search.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        });


        $('#table_search tbody').on('dblclick', 'tr', function() {
            var data = table_search.row(this).data();
            id_cont_out = data[4];
            
            var NO_CONT = data[1].split(" ").join("") ;
            //alert(NO_CONT);

            var jawab = confirm(' Apakah Anda Yakin ingin Mengimport \n Kontainer ini : '+data[1]+' \n Tanggal Keluar : '+data[2]);


            if (jawab === true) { 
                url = '<?php echo site_url('transaksi/gateout_fcl/proses_import_entryout') ?>';
                data = {id_cont_out: id_cont_out,NO_CONT:data[1],NO_CONT_REPLACE:NO_CONT,cont_date_out:data[2],cont_date_in:data[3]};
                pesan = 'JavaScript import entry out Error...';
                dataok = multi_ajax_proses(url, data, pesan);

                if(dataok.msg != "Ya"){
                    alert(dataok.pesan);
                    return false;
                }


            }else{
                return false;
            }

            console.log(dataok) ;

            $('#modal_import').modal('hide'); 
            $('#NO_CONT').val(NO_CONT);
            tbl_gateout_fcl.ajax.reload(null, false);
        });

    });

</script>