<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/datatables/datatables.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-select/bootstrap-select.min.css">

<div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h2 class="page-header-title">Attendance Meeting</h2>
            <div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('scheduling_ex') ?>">Scheduling</a></li>
                    <li class="breadcrumb-item active">Add Scheduling</li>
                </ul>
            </div>
            <div>            
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <!-- Sorting -->
        <div class="widget has-shadow">            
            <div class="widget-body">
                <?php echo form_open('', array('class' => 'form-horizontal')); ?>                                
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Styles No</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success"><?php echo $sch->style_no ?></label>                            
                        </div>
                        <label class="col-md-3 form-control-label">Item</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success"><?php echo $sch->style_item ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Customers</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success customer-style"><?php echo $sch->customer_name ?></label>
                        </div>
                        <label class="col-md-3 form-control-label">Description</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success desc-style"><?php echo $sch->remarks ?></label>
                        </div>
                    </div>                                              
                    <div class="form-group row">                        
                        <label class="col-md-3 form-control-label">PP Planned Date</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success planneddate"><?php echo $sch->planned_date ?></label>                            
                        </div>
                    </div>                                       
                    <?php echo form_close(); ?>  
                    <hr>
                    <h5 class="text-info"><i class="la la-info-circle"></i> <i>Attendance will be join in meeting and have access rights to fill PP Form</i></h5><br>
                    <?php echo form_open('scheduling_ex/submit', array('class' => 'form-horizontal')); ?>
                    <div class="form-group row">
                        <label class="col-md-2 form-control-label text-right">Name</label>
                        <div class="col-md-8">
                            <select class="selectpicker show-menu-arrow" data-live-search="true" name="emp" style="width:100%;" required="">
                                <option value="" selected="">Choose...</option>
                            <?php foreach ($emp as $key) { ?>
                                <option value="<?php echo $key->employee_id ?>"><?php echo $key->employee_name ?></option>
                            <?php } ?>                                                        
                            </select>
                        </div>                          
                    </div>      
                    <div class="form-group row">
                        <label class="col-md-2 form-control-label text-right"></label>                        
                        <div class="col-md-2">
                            <input type="hidden" name="dept" value="<?php echo $dept ?>">
                            <input type="hidden" name="sch_id" value="<?php echo $sch->scheduling_id ?>">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>                          
                    </div>                      
                    <?php echo form_close(); ?>
                    <br>
                    <div class="table-responsive">
                    <table class="table">                        
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
                                    <td><a href="<?php echo base_url('scheduling_ex/delete/'.$data->id.'/'.$sch->scheduling_id) ?>" class="btn btn-danger btn-sm"><i class="la la-trash"></i></a></td>                                   
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

<script src="<?php echo base_url() ?>assets/vendors/js/datatables/datatables.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/js/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/js/datatables/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/components/tables/tables.js"></script>

<script>
    
</script>