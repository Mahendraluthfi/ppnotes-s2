<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/datatables/datatables.min.css">

<div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h2 class="page-header-title">PP Schedule</h2>
            <div>
            <div class="page-header-tools">
                <a href="<?php echo base_url('scheduling/add') ?>" class="btn btn-gradient-01"><i class="la la-plus"></i> Add New</a>
            </div>
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
                                        <button type="button" onclick="detail('<?php echo $data->scheduling_id ?>')" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Detail">&nbsp;<i class="la la-info-circle"></i></button>
                                        <!-- <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" onclick="att('<?php echo $data->scheduling_id ?>')" data-placement="top" title="Attendance Meeting">&nbsp;<i class="la la-users"></i></button> -->
                                        <a href="<?php echo base_url('scheduling/edit/'.$data->scheduling_id) ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">&nbsp;<i class="la la-edit"></i></a>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="f_delete('<?php echo $data->scheduling_id ?>')">&nbsp;<i class="la la-trash"></i></button>
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
                        <label class="col-md-3 form-control-label">Style No</label>
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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Attendance Meet</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">close</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table id="sorting-table" class="table mb-0">
                        <thead>
                            <tr>                                
                                <th>ID</th>
                                <th>Name</th>
                                <th>Department</th>                                
                            </tr>
                        </thead>
                        <tbody id="show_data">
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning btn-shadow" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save</button> -->
            </div>
        </div>
    </div>
</div>

<div id="modal-delete" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h3>Are you sure to delete this data ?</h3><br>
                <button type="button" id="btn-yes" class="btn btn-success">Yes</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
            </div>            
        </div>
    </div>
</div>

<div id="delay-modal" class="modal fade">
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
</div>


<script src="<?php echo base_url() ?>assets/vendors/js/datatables/datatables.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/js/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/js/datatables/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/components/tables/tables.js"></script>
<script>
    $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })

    <?php echo $this->session->flashdata('msg'); ?>

    function f_delete(id) {
        $('#modal-delete').modal('show');
        $("#btn-yes").attr("onclick","dlt('"+id+"')");
    }

    function dlt(id) {
        $.ajax({
            url : "<?php echo site_url('index.php/scheduling/delete')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {           
               $('#modal_delete').modal('hide');                                        
                location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function detail(id) {
        $.ajax({
            url : "<?php echo site_url('index.php/scheduling/detail')?>/" + id,
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

    function att(id) {
        $.ajax({
            type  : 'ajax',
            url   : '<?php echo base_url()?>scheduling/get_att/' + id,
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += "<tr>"+                            
                            "<td>"+data[i].employee_id+"</td>"+
                            "<td>"+data[i].employee_name+"</td>"+
                            "<td>"+data[i].department_name+"</td>"+
                            "</tr>";
                }
                $('#show_data').html(html);     
                $('#modal-att').modal('show');                                                               
            }
        });                                             
    }
</script>

