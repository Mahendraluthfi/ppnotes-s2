<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-select/bootstrap-select.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/datatables/datatables.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate/animate.min.css">

<div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h2 class="page-header-title">Add Participants</h2>
            <div>
            <div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>"><i class="ti ti-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('meeting') ?>">Meeting</a></li>
                    <li class="breadcrumb-item active">Add Participants</li>
                </ul>
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
                <div class="form-group row">
                    <div class="col-md-6">
                        <h3>Style no. <?php echo $get->style_no ?></h3>
                        <h5 class="text-secondary"><?php echo $get->remarks ?></h5>                        
                        <a href="#" onclick="detail('<?php echo $id ?>')"><i class="la la-info-circle"></i> Detail</a>
                    </div>
                    <div class="col-md-6 text-right">
                        <button type="button" class="btn btn-default" id="tes">Add <i class="la la-plus"></i></button>
                    </div>                    
                </div><hr>
                <div class="table-responsive">
                    <table id="sorting-table" class="table mb-0">
                        <thead>
                            <tr>     
                                <th width="1%">#</th>                           
                                <th>ID</th>
                                <th>Name</th>
                                <th>Designation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list as $data) { ?>
                                <tr> 
                                    <td><a href="<?php echo base_url('meeting/del_att/'.$data->id.'/'.$id) ?>" class="btn btn-danger btn-sm"><i class="la la-trash"></i></a></td>                                   
                                    <td><?php echo $data->employee_id ?></td>
                                    <td><?php echo $data->employee_name ?></td>
                                    <td><?php echo $data->employee_level ?></td>
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

<div id="modal-large" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail PP Schedule</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">??</span>
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

<div id="modal-add" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Participants</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">??</span>
                    <span class="sr-only">close</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="form">                                                            
                    <div class="form-group row">
                        <label class="col-md-4 form-control-label">Participants Name</label>
                        <div class="col-md-3">                        
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <select class="selectpicker show-menu-arrow" data-live-search="true" name="emp_id">
                                <?php foreach ($part as $key) { ?>
                                    <option value="<?php echo $key->employee_id ?>"><?php echo $key->employee_name ?></option>
                                <?php } ?>
                            </select>                                                                       
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-shadow" onclick="save()">Save</button>
                <!-- <button type="button" class="btn btn-primary">Save</button> -->
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url() ?>assets/vendors/js/datatables/datatables.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/js/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/js/datatables/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/components/tables/tables.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/js/noty/noty.min.js"></script>    
<script src="<?php echo base_url() ?>assets/js/components/tabs/animated-tabs.min.js"></script>        
<script>
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

     function save() {
        // body...
        var url;        
        url = "<?php echo site_url('index.php/meeting/sbm_att')?>";          
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               if (data.status == false) {
                    new Noty({
                        type: 'error',
                        layout: 'topRight',
                        text: 'Participants has been added !',
                        progressBar: true,
                        timeout: 2500,
                        animation: {
                            open: 'animated bounceInRight', // Animate.css class names
                            close: 'animated bounceOutRight' // Animate.css class names
                        }
                    }).show()
               }else{
                    $('#modal-add').modal('hide');
                    location.reload();                
               }
               //if success close modal and reload ajax table
              
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }

    $('#tes').on('click', function(){
        $('#modal-add').modal('show');
    });
    
</script>