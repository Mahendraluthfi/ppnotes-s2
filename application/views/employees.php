<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/datatables/datatables.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate/animate.min.css">

<div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h2 class="page-header-title">Master Employees</h2>
            <div>
            <div class="page-header-tools">
                <button class="btn btn-gradient-01" onclick="add()"><i class="la la-plus"></i> Add New</button>
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
                                <th>ID</th>                                                            
                                <th>Name</th>                                                            
                                <th>Department</th>                                                            
                                <th>Designation</th>                                                            
                                <th>Responsbility</th>                                                            
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($get as $data) { ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data->employee_id ?></td>
                                    <td><?php echo $data->employee_name ?></td>
                                    <td><?php echo $data->department_name ?></td>
                                    <td><?php echo $data->employee_level ?></td>
                                    <td><?php echo $data->employee_respon ?></td>
                                    <td class="text-right">
                                        <button type="button" class="btn btn-info btn-sm" onclick="get('<?php echo $data->employee_id ?>')">&nbsp;&nbsp;<i class="la la-edit"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm" onclick="f_delete('<?php echo $data->employee_id ?>')">&nbsp;&nbsp;<i class="la la-trash"></i></button>
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

<!-- Begin Centered Modal -->
<div id="modal-centered" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Employee</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">close</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="form">                                            
                    <div class="form-group row">
                        <label class="col-lg-3 form-control-label">ID</label>
                        <div class="col-lg-9">
                            <input type="text" placeholder="ID Number" name="id" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 form-control-label">Name</label>
                        <div class="col-lg-9">
                            <input type="text" placeholder="Employee Name" name="name" class="form-control">
                        </div>
                    </div>                      
                    <div class="form-group row">
                        <label class="col-lg-3 form-control-label">Department</label>
                        <div class="col-lg-9">
                              <select name="department" class="form-control">                                
                                <?php foreach ($dept as $key) { ?>
                                    <option value="<?php echo $key->department_id ?>"><?php echo $key->department_name ?></option>
                                <?php } ?>                               
                             </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 form-control-label">Designation</label>
                        <div class="col-lg-9">
                              <select name="level" class="form-control">
                                  <option value="STAFF">STAFF</option>
                                  <option value="EXECUTIVE">EXECUTIVE</option>
                                  <option value="SENIOR EXECUTIVE">SENIOR EXECUTIVE</option>
                                  <option value="ASSISTANT MANAGER">ASSISTANT MANAGER</option>
                              </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 form-control-label">Responsbility</label>
                        <div class="col-lg-9">
                              <select name="respon" class="form-control">
                                  <option value="USER">USER</option>
                                  <option value="VIEWER">VIEWER</option>
                                  <option value="ADMIN">ADMIN</option>
                              </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 form-control-label"></label>
                        <div class="col-lg-9">
                            <i>Default Account Password is ID Number</i>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                <button type="button" id="btn-action" class="btn btn-primary" onclick="save()">Save</button>
            </div>
        </div>
    </div>
</div>
        <!-- End Centered Modal -->

<div id="modal-delete" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- <div class="modal-header">
                <h4 class="modal-title">Add Department</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">close</span>
                </button>
            </div> -->
            <div class="modal-body text-center">
                <h3>Are you sure to delete this data ?</h3><br>
                <button type="button" id="btn-yes" class="btn btn-success">Yes</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="save()">Save</button>
            </div> -->
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

<div id="delete-modal" class="modal fade">
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
                    <h2 class="text-gradient-01">Delete Complete!</h2>
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
<script src="<?php echo base_url() ?>assets/vendors/js/noty/noty.min.js"></script>        
<script>

    <?php echo $this->session->flashdata('msg'); ?>

    var save_method;
    var gid;

    function add() {
        save_method = 'add';
        $('#form')[0].reset();
        $('[name="id"]').removeAttr('disabled','disabled');
        $('#btn-action').attr('onclick','save()');        
        $('.modal-title').text('Add Employee'); // Set title to Bootstrap modal title        
        $('#modal-centered').modal('show');
    }

    function get(id){
          save_method = 'update';
          gid = id;
          $('#form')[0].reset(); // reset form on modals

          //Ajax Load data from ajax
          $.ajax({
            url : "<?php echo site_url('index.php/employees/get')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {                                    
                $('[name="id"]').val(data.employee_id);
                $('[name="id"]').attr('disabled','disabled');
                $('[name="name"]').val(data.employee_name);
                $('[name="department"]').val(data.department_id);
                $('[name="level"]').val(data.employee_level);
                $('[name="department"]').trigger('change');                
                $('[name="level"]').trigger('change');      
                $('#btn-action').attr('onclick','edit(\''+id+'\')');
                $('#modal-centered').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Employee'); // Set title to Bootstrap modal title

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function save() {            
        if($('[name="id"]').val() == ""){
            new Noty({
                type: 'error',
                layout: 'topCenter',
                text: "ID Number Can't Be Null !",
                // closeWith: ['click', 'button'],
                timeout: 2000,                
                animation: {
                    open: 'animated bounceInDown', // Animate.css class names
                    close: 'animated bounceOutUp' // Animate.css class names
                }
            }).show()
        }else{
            var url;            
            url = "<?php echo site_url('index.php/employees/save')?>";                              
              $.ajax({
                url : url,
                type: "POST",
                data: $('#form').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                   //if success close modal and reload ajax table
                   $('#modal_centered').modal('hide');
                  location.reload();// for reload a page
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            }); 
        }                  
    }

    function edit(id) {
        // body...
        var url;                        
            url = "<?php echo site_url('index.php/employees/edit/')?>" + id;                     
            // ajax adding data to database
              $.ajax({
                url : url,
                type: "POST",
                data: $('#form').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                   //if success close modal and reload ajax table
                   $('#modal_centered').modal('hide');
                  location.reload();// for reload a page
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            }); 
    }

    function f_delete(id) {
        $('#modal-delete').modal('show');
        $("#btn-yes").attr("onclick","dlt('"+id+"')");
    }

    function dlt(id) {
        $.ajax({
            url : "<?php echo site_url('index.php/employees/delete')?>/" + id,
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
</script>

