<style>        
    .validate {background-color: white !important;}
    .notvalidate {background-color: #e5e7eb !important;}
    .margin-input{margin-bottom: -2% !important;}
    .boldp{
        font-weight: 700;
    }
    .dataTables_filter{display: block; !important;}
</style>

<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Transaction</li>
        <li class="breadcrumb-item active">..::: Gate Out FCL :::..</li>
    </ol>
</div>

<div class="content-wrapper">
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="card">
                <div class="card-body boxshadow">

                    <div class="row gutters border" style="padding-top:0.6%;margin-bottom: -0%;">

                        <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-12 col-12">

                            <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12 margin-input">
                                <div class="form-group row gutters">
                                    <label for="inputName" class="col-sm-5 col-form-label text-left">Date Out Container</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control datepicker-dropdowns" id="startdate"  name="startdate" value=<?=$startdate;?> >
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12 margin-input">
                                <div class="form-group row gutters">
                                    <label for="inputName" class="col-sm-5 col-form-label text-left">s/d</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control datepicker-dropdowns" id="enddate"  name="enddate" value=<?=$enddate;?> >
                                    </div>
                                </div>
                            </div>


                        </div>
                        
                        <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-12 col-12">

                            <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12 margin-input">
                                <div class="form-group row gutters">
                                    <label for="inputName" class="col-sm-4 col-form-label text-left">NO POS BC11</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="NO_POS_BC11"  name="NO_POS_BC11" >
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12 margin-input">
                                <div class="form-group row gutters">
                                    <label for="inputName" class="col-sm-4 col-form-label text-left">NO CONT</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="NO_CONT"  name="NO_CONT" >
                                    </div>
                                </div>
                            </div>

                            
                        </div>

                        <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-12 col-12">
                            <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12 margin-input">
                                <div class="form-group row gutters">
                                    <label for="inputName" class="col-sm-5 col-form-label text-left">NO DOKUMENT IN</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="NO_DOK_INOUT"  name="NO_DOK_INOUT" >
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12 margin-input">
                                <div class="form-group row gutters">
                                    <label for="inputName" class="col-sm-5 col-form-label text-left">STATUS KIRIM</label>
                                    <div class="col-sm-7">
                                        <?=$SENDING;?>
                                    </div>
                                </div>
                            </div>

                            
                        </div>

                    </div>



                    

                    
                    <div class="row gutters" style="margin-top:1%">                        
                        <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12">
                            <div class="table-container" style="width:100%"> 

                                <div class="form-group row gutters">
                                    <label for="inputName" class="col-sm-12 col-form-label boldp"></label>
                                </div>

                                <div class="table-responsive" style="margin-top:-2%">

                                    <div class="btn-group" style="margin-bottom:0.2%;">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" id="showaksi">
                                            <a class="dropdown-item btnedit"><span class="icon-edit"></span>&nbsp;Edit</a>
                                            <a class="dropdown-item btnsend"><span class="icon-share1"></span>&nbsp;Send Data</a>
                                            <a class="dropdown-item btnsendtest"><span class="icon-share1"></span>&nbsp;Send Data TEST</a>
                                            <a class="dropdown-item btnrebuild"><span class="icon-edit1"></span>&nbsp;Create New Refnumber</a>
                                        </div>
                                    </div>

                                    <table id="tbl_gateout_fcl" class="table m-0 dataTable no-footer nowrap" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th><div style="text-align: center;"><input type='checkbox' id='chkAll' name='chkAll' /></div></th>
                                                <th>REF_NUMBER</th>                                                
                                                <th>KD_DOK</th>
                                                <th>EXPORT/IMPORT</th>
                                                <th>KD_TPS</th>
                                                <th>NM_ANGKUT</th>
                                                <th>NO_VOY_FLIGHT</th>
                                                <th>CALL_SIGN</th>
                                                <th>TGL_TIBA</th>
                                                <th>KD_GUDANG</th>                                                
                                                <th>NO_CONT</th>
                                                <th>UK_CONT</th>
                                                <th>NO_SEGEL</th>
                                                <th>JNS_CONT</th>
                                                <th>NO_BL_AWB</th>
                                                <th>TGL_BL_AWB</th>
                                                <th>NO_MASTER_BL_AWB</th>
                                                <th>TGL_MASTER_BL_AWB</th>
                                                <th>ID_CONSIGNEE</th>
                                                <th>CONSIGNEE</th>
                                                <th>BRUTO</th>
                                                <th>NO_BC11</th>
                                                <th>TGL_BC11</th>
                                                <th>NO_POS_BC11</th>
                                                <th>KD_TIMBUN</th>
                                                <th>KD_DOK_INOUT</th>
                                                <th>JENIS DOCUMENT</th>
                                                <th>NO_DOK_INOUT</th>
                                                <th>TGL_DOK_INOUT</th>
                                                <th>WK_INOUT</th>
                                                <th>KD_SAR_ANGKUT_INOUT</th>
                                                <th>JENIS ANGKUTAN</th>
                                                <th>NO_POL</th>
                                                <th>FL_CONT_KOSONG</th>
                                                <th>STATUS CONTAINER</th>
                                                <th>ISO_CODE</th>
                                                <th>PEL_MUAT</th>
                                                <th>PEL_TRANSIT</th>
                                                <th>PEL_BONGKAR</th>
                                                <th>GUDANG_TUJUAN</th>
                                                <th>KODE_KANTOR</th>
                                                <th>NO_DAFTAR_PABEAN</th>
                                                <th>TGL_DAFTAR_PABEAN</th>
                                                <th>NO_SEGEL_BC</th>
                                                <th>TGL_SEGEL_BC</th>
                                                <th>NO_IJIN_TPS</th>
                                                <th>TGL_IJIN_TPS</th>
                                                <th>REF_NUMBER_OLD</th>
                                                <th>VALIDATE</th>      
                                                <th>SENDING</th>       
                                                <th>REF_NUMBER_IN</th>                                      
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
            </div>

        </div>          

    </div>

</div>


<div id='div_popup_form'></div>

<script src="<?= site_url(); ?>assets/js/jquery.min.js"></script>




<script type="text/javascript">



    var tbl_gateout_fcl ;
    var tbl_petikemas_detail ;
    var ID = "" ;
    var url ; 
    var data ; 
    var divform ; 
    var idmodal ;
    var REF_NUMBER = '';
    var arrREF_NUMBER = [] ;
    var html1;
    var sending = "";

    $('#NO_CONT').on('keyup',function () {
        tbl_gateout_fcl.ajax.reload(null, false);
    });

    $('#NO_POS_BC11').on('keyup',function () {
        tbl_gateout_fcl.ajax.reload(null, false);
    });

    $('#NO_DOK_INOUT').on('keyup',function () {
        tbl_gateout_fcl.ajax.reload(null, false);
    });

    $('#SENDING').on('change',function () {
        tbl_gateout_fcl.ajax.reload(null, false);
    });

    $(document).ready(function(){
        $("#startdate").change(function() {
            tbl_gateout_fcl.ajax.reload(null, false);
        });

        tbl_gateout_fcl = $('#tbl_gateout_fcl').DataTable({
            // "destroy": true,
            // "processing": true,
            // "serverSide": true,
            // "order": [],
            // "searching": true,
            // "ordering": true,
            // "scrollX": true,
            // "scrollY": "200px",
            // "scrollCollapse": true,
            // "info": true,
            // "lengthMenu": [[10, 25, 50,100, 1000], [10, 25, 50,100, 1000]],
            // "pageLength": 25,
            // "bLengthChange": true,
            // "paging"        : false,

            "destroy"       : true,
            "processing"    : true, 
            "serverSide"    : true, 
            "order"         : [], 
            "searching"     : true,
            "ordering"      : true,
            "scrollX"       : true,
            "scrollY"       : '40vh',
            "scrollCollapse": true,
            "info"          : true,
            "bLengthChange" : false,
            "select"        : {"style": "os"},
            "select"        : true ,
            // "dom"           : 'l<"toolbar2">frtip',
            "paging"        : false,
            //"lengthMenu": [[10, 25, 50,100, 1000], [10, 25, 50,100, 1000]],
            "ajax": {
                "url": "<?php echo site_url('transaksi/gateout_fcl/tbl_gateout_fcl') ?>",
                "type": "POST",
                "beforeSend": function() {
                        $("#loading-wrapper").show();
                    },
                "data": function(data) {
                    data.startdate = $('#startdate').val();
                    data.enddate = $('#enddate').val();
                    data.NO_POS_BC11 = $('#NO_POS_BC11').val();
                    data.NO_CONT = $('#NO_CONT').val();
                    data.NO_DOK_INOUT = $('#NO_DOK_INOUT').val();
                    data.SENDING = $('#SENDING').val();
                },
                "complete": function() {
                        $("#loading-wrapper").hide();
                        //tbl_gateout_fcl.$('tr.selected').removeClass('selected');
                        //tbl_gateout_fcl.row(selectbaris).nodes().to$().toggleClass( 'selected' );
                        
                        //var data = tbl_gateout_fcl.row(selectbaris).data();
                        //id_beacukai = data[1];
                        REF_NUMBER = '' ;
                        sending = '' ;
                    }

            },
            "createdRow": function( row, data, dataIndex){
                if(data[49] == 'Y'){
                    $(row).addClass('validate');
                }
                if(data[49] == 'N'){
                    $(row).addClass('notvalidate');
                }

                console.log(row);
            },
            "columnDefs": [
                {
                    "targets": [0,1,3,26,31,34],
                    "orderable": false
                }
                ,
                {
                    "targets": [3,26,31,34,49],
                    "visible": false
                }
               //  ,
               //  {
               //     'targets'   : 51,
               //     'className' : 'dt-body-center',
               //     'render'    :   function (data, type, row) {
               //         return '<input type="checkbox"  class="REF_NUMBERxx" name="REF_NUMBERss[]" value="'+ $('<div/>').text(data).html() + '">'; 
               //         console.log(data);                                    
               //     }
               // }
            ],
        });
        

        $('#tbl_gateout_fcl tbody').on('click', 'tr', function() {
            var data = tbl_gateout_fcl.row(this).data();

            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
                REF_NUMBER = '' ;
                sending = '' ;
            } else {
                tbl_gateout_fcl.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
                REF_NUMBER = data[2];     
                sending = data[50] ;           
            }
        });

        

        
    });


    $('#chkAll').click(function () {
        arrREF_NUMBER = [] ; 

        if(this.checked == true){   
            $('.chkreffnumber').prop('checked', true);
        }else{
            $('.chkreffnumber').prop('checked', false);
        }
        GetCheckRefNumber();
    });
    
    function GetCheckRefNumber(){
        $("#tbl_gateout_fcl input[type=checkbox]:checked").each(function () {
            var row = $(this).closest("tr")[0];
            arrREF_NUMBER.push(row.cells[2].innerHTML);
        });
        //console.log(arrREF_NUMBER);
    }
    
    function HandleClick(Chk,param) {  
        var Chek = document.getElementById(Chk);   
        if(Chek.checked == true){
            arrREF_NUMBER.push(param);
        }else{
            hapus_isi_array(arrREF_NUMBER,param);
            $('#chkAll').prop('checked', false);  
        }
        //console.log(arrREF_NUMBER);
   }

    
    

    $(document).on('click', '.btnsend', function(e) {
        if(arrREF_NUMBER.length == 0){
            alert('Belum Ada Data Yang Dipilih..');
            return false;
        }

        url = '<?php echo site_url('transaksi/gateout_fcl/formkirimdata') ?>';
        data = {arrREF_NUMBER:arrREF_NUMBER,proses:'live'} ;
        divform = "#div_popup_form" ;
        idmodal = "#modal_kirim" ;        
        createmodal(url,data,divform,idmodal); 

    });

    $(document).on('click', '.btnsendtest', function(e) {
        if(arrREF_NUMBER.length == 0){
            alert('Belum Ada Data Yang Dipilih..');
            return false;
        }

        url = '<?php echo site_url('transaksi/gateout_fcl/formkirimdata') ?>';
        data = {arrREF_NUMBER:arrREF_NUMBER,proses:'test'} ;
        divform = "#div_popup_form" ;
        idmodal = "#modal_kirim" ;        
        createmodal(url,data,divform,idmodal); 

    });


    $(document).on('click', '.btnedit', function(e) {
        if(REF_NUMBER == ''){
            alert('belum ada data yang dipilih..!!');
            return false;
        }

        url = '<?php echo site_url('transaksi/gateout_fcl/formedit') ?>';
        data = {REF_NUMBER:REF_NUMBER} ;
        divform = "#div_popup_form" ;
        idmodal = "#modal_edit" ;        
        createmodal(url,data,divform,idmodal); 

    });

    $(document).on('click', '.btnrebuild', function(e) {
        if(REF_NUMBER == ''){
            alert('belum ada data yang dipilih..!!');
            return false;
        }

        if(sending != 'Y'){
            alert('No REF_NUMBER ini '+REF_NUMBER+'  Belum dikirim..!!');
            return false;
        }


        var jawab = confirm('Anda yakin ingin mengganti REF_NUMBER  ini '+REF_NUMBER+' dengan yang no REF_NUMBER yang baru ?');

        if (jawab === true) { 
            url = '<?php echo site_url('transaksi/gateout_fcl/change_reff_number') ?>';
            data = {REF_NUMBER: REF_NUMBER};
            pesan = 'JavaScript change_reff_number Error...';
            dataok = multi_ajax_proses(url, data, pesan);
        }else{
            return false;
        }

        if(dataok.msg != 'Ya'){
            alert(dataok.pesan);
            return false;
        }

        alert(dataok.pesan);
        tbl_gateout_fcl.ajax.reload(null, false);

    });

    

    $(document).on('click', '.btndelete', function(e) {
        // if(id == ''){
        //     alert('belum ada data yang dipilih..!!');
        //     return false;
        // }

        // var jawab = confirm('Anda yakin ingin menghapus data ini ?');

        // if (jawab === true) { 
            // url = '<?php echo site_url('master/jenis_angkutan/delete') ?>';
            // data = {id: id};
            // pesan = 'JavaScript Delete Error...';
            // dataok = multi_ajax_proses(url, data, pesan);
        // }else{
        //     return false;
        // }

        // if(dataok.msg != 'Ya'){
        //     alert(dataok.pesan);
        //     return false;
        // }

        // alert(dataok.pesan);
        // id = '';
        // selectbaris = 0 ;
        // tbl_jenis_angkutan.ajax.reload(null, false);
    });
    


</script>