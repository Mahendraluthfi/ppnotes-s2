<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/datatables/datatables.min.css">

<div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h2 class="page-header-title">PP Meeting</h2>
            <div>
            <!-- <div class="page-header-tools">
                <a href="<?php echo base_url('scheduling/add') ?>" class="btn btn-gradient-01"><i class="la la-plus"></i> Add New</a>
            </div> -->
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <!-- Sorting -->
        <div class="widget has-shadow">
            <!-- <div class="widget-header bordered no-actions d-flex align-items-center">
                <h4>Sorting</h4>
            </div> -->
            <div class="widget-body">
                <div class="table-responsive">
                    <table id="sorting-table" class="table mb-0">
                        <thead>
                            <tr>
                                <th width="1%">No</th>                                
                                <th>Style Number</th>
                                <th>Desc</th>
                                <th>Planned Date</th>
                                <th>Status</th>                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($get as $data) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>                                      
                                    <td><?php echo $data->style_no ?></td>
                                    <td><?php echo $data->remarks ?></td>
                                    <td><?php echo date('d M y', strtotime($data->planned_date)) ?></td>
                                     <td>
                                        <?php if ($data->final == "0") {
                                            echo "Proccess";
                                            // echo $respons->employee_respon;
                                        }else{
                                            echo "Finalized";
                                        } ?>
                                    </td>
                                    <td>
                                        <button type="button" onclick="detail('<?php echo $data->scheduling_id ?>')" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Detail">&nbsp;<i class="la la-info-circle"></i></button> 
                                        <button type="button" onclick="view('<?php echo $data->scheduling_id ?>','<?php echo $data->style_no ?>')" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="View">&nbsp;<i class="la la-sign-in"></i> View</button>                                        
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Sorting -->
        <!-- Export -->        
        <!-- End Export -->
    </div>
</div>

<!-- Begin Large Modal -->
<div id="modal-large" class="modal fade">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Detail PP Schedule</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <?php echo form_open('', array('class' => 'form-horizontal')); ?>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Plant/Section/Line</label>
                        <div class="col-md-9">
                            <label class="form-control-label text-success plant"></label>                            
                        </div>  
                    </div>                            
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Styles No</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success style-no"></label>                            
                        </div>
                        <label class="col-md-3 form-control-label">Item</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success item-style"></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Customers</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success customer-style"></label>
                        </div>
                        <label class="col-md-3 form-control-label">Description</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success desc-style"></label>
                        </div>
                    </div>         
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Season</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success season"></label>
                        </div>
                        <label class="col-md-3 form-control-label">SMV (prov)</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success smv"></label>                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Range/Buy</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success range"></label>                            
                        </div>
                        <label class="col-md-3 form-control-label">Merchant</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success merchant"></label>                            
                        </div>
                    </div>           
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Business Head</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success head"></label>                            
                        </div>
                        <label class="col-md-3 form-control-label">Revised PP</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success revised"></label>                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">RM Date</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success rmdate"></label>                            
                        </div>
                        <label class="col-md-3 form-control-label">PP Planned Date</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success planneddate"></label>                            
                        </div>
                    </div>       
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Actual PP Date</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success actualdate"></label>                            
                        </div>
                        <label class="col-md-3 form-control-label">PSD</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success psd"></label>                            
                        </div>
                    </div>       
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">No. Of Lines</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success nolines"></label>                            
                        </div>
                        <label class="col-md-3 form-control-label">PILOT LINES</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success pilotline"></label>                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">SO</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success so"></label>                            
                        </div>
                        <label class="col-md-3 form-control-label">LI</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success li"></label>                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Reason for Delay</label>
                        <div class="col-md-9">
                            <label class="form-control-label text-success reason"></label>                            
                        </div>                        
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Comments</label>
                        <div class="col-md-9">
                            <label class="form-control-label text-success comments"></label>                            
                        </div>                        
                    </div>                    
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Spesial Information</label>
                        <div class="col-md-9">
                            <label class="form-control-label text-success information"></label>                            
                        </div>                        
                    </div>                    
                    <?php echo form_close(); ?>  
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning btn-shadow" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save</button> -->
                    </div>
                </div>
            </div>
</div>
<!-- End Large Modal -->

<div id="modal-att" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View Meeting</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">close</span>
                </button>
            </div>
            <div class="modal-body">
                <h4 class="title-download"></h4><br>
                <div class="form-group row">
                    
                    <div class="col"></div>
                    <div class="col text-center">
                        <div class="alert bg-gradient-03 no-border text-center" role="alert">
                            <a href="" class="text-white" id="praold" target="_blank"><strong>Pre-Production</strong><br>
                            <strong>Analysis Meeting</strong></a>
                        </div>    
                        <div class="alert bg-gradient-03 no-border text-center" role="alert">
                            <a href="" class="text-white" id="pra" target="_blank"><strong>Pre-Production</strong><br>
                            <strong>Analysis Meeting (new)</strong></a>
                        </div>                    
                    </div>
                    <div class="col text-center">
                        <div class="alert bg-gradient-03 no-border text-center" role="alert">
                            <a href="" class="text-white" id="pdra" target="_blank"><strong>PPA Document</strong><br>
                            <strong>& PDRA</strong></a>
                        </div>                    
                    </div>
                    <div class="col text-center">
                        <div class="alert bg-gradient-03 no-border text-center" role="alert">
                            <a href="" class="text-white" id="pp" target="_blank"><strong>Pre-Production</strong><br>
                            <strong>Meeting Minutes</strong></a>
                        </div>                    
                    </div>         
                    <div class="col text-center">
                        <div class="alert bg-gradient-03 no-border text-center" role="alert">
                            <a href="" class="text-white" id="pl"  target="_blank"><strong>Pilot Appraisal</strong><br>
                            <strong>Meeting Minutes</strong></a>
                        </div>                        
                    </div>         
                    <div class="col text-center">
                        <div class="alert bg-gradient-03 no-border text-center" role="alert">
                            <a href="" class="text-white" id="mast" target="_blank"><strong>MAST</strong><br>
                            <strong>Industries Inc.</strong></a>
                        </div>                        
                    </div>         
                    <div class="col"></div>                
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning btn-shadow" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save</button> -->
            </div>
        </div>
    </div>
</div>

<!-- <div id="delay-modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="sa-icon sa-success animate" style="display: block;">
                    <span class="sa-line sa-tip animateSuccessTip"></span>
                    <span class="sa-line sa-long animateSuccessLong"></span>
                    <div class="sa-placeholder"></div>
                    <div class="sa-fix"></div>
                </div>
                <div class="section-title mt-5 mb-2">
                    <h2 class="text-gradient-01">Save Complete!</h2>
                </div>
                <p class="mb-5">Thank You :)</p>
            </div>
        </div>
    </div>
</div> -->


<script src="<?php echo base_url() ?>assets/vendors/js/datatables/datatables.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/js/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/js/datatables/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/components/tables/tables.js"></script>
<script>
    $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })

    <?php echo $this->session->flashdata('msg'); ?>  

    function detail(id) {
        $.ajax({
            url : "<?php echo site_url('index.php/scheduling_stf/detail')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {           
                if(data.rm_date == "1970-01-01"){ var rmdate = ""; }else{ var rmdate = data.rm_date }
                if(data.planned_date == "1970-01-01"){ var ppdate = ""; }else{ var ppdate = data.planned_date }
                if(data.psd == "1970-01-01"){ var psd = ""; }else{ var psd = data.psd }
                if(data.actual_date == "1970-01-01"){ var actual = ""; }else{ var actual = data.actual_date }
                $('.plant').text(data.plant)
                $('.style-no').text(data.style_no)
                $('.item-style').text(data.style_item)
                $('.customer-style').text(data.customer_name)
                $('.desc-style').text(data.remarks)
                $('.season').text(data.season)
                $('.smv').text(data.smv)
                $('.range').text(data.range_buy)
                $('.merchant').text(data.merchant)
                $('.head').text(data.business_head)
                $('.revised').text(data.revised)
                $('.rmdate').text(rmdate)
                $('.planneddate').text(ppdate)
                $('.psd').text(psd)
                $('.actualdate').text(actual)
                $('.nolines').text(data.no_lines)
                $('.pilotline').text(data.pilot_line)
                $('.so').text(data.so)
                $('.li').text(data.li)
                $('.reason').text(data.reason)
                $('.comments').text(data.comments)
                $('.information').text(data.information)
                $('#modal-large').modal('show');                                       
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }
   
    function view(id,style) {
        $('.title-download').text('Style No. '+ style);
        $('#praold').attr('href','<?php echo base_url('download/get_pra/') ?>'+id);        
        $('#pra').attr('href','<?php echo base_url('download/pra2/') ?>'+id);
        $('#pdra').attr('href','<?php echo base_url('download/get_pdra/') ?>'+id);
        $('#pp').attr('href','<?php echo base_url('download/get_ppb/') ?>'+id);
        $('#pl').attr('href','<?php echo base_url('download/get_plb/') ?>'+id);
        $('#mast').attr('href','<?php echo base_url('download/get_mast/') ?>'+id);
        $('#modal-att').modal('show');        
    }
</script>

