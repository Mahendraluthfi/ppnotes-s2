<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/datatables/datatables.min.css">

<div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h2 class="page-header-title">Master Styles</h2>
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
                                <th>Styles No.</th>                                                            
                                <th>Item</th>                                                            
                                <th>Customer</th>                                                            
                                <th>Desc</th>                                                            
                                <th width="15%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($get as $data) { ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data->style_no ?></td>
                                    <td><?php echo $data->style_item ?></td>
                                    <td><?php echo $data->customer_name ?></td>
                                    <td><?php echo $data->remarks ?></td>
                                    <td>
                                        <button type="button" class="btn btn-info mr-1 mb-2 btn-sm" onclick="edit('<?php echo $data->id ?>')">&nbsp;&nbsp;<i class="la la-edit"></i></button>
                                        <button type="button" class="btn btn-danger mr-1 mb-2 btn-sm" onclick="f_delete('<?php echo $data->id ?>')">&nbsp;&nbsp;<i class="la la-trash"></i></button>
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
                <h4 class="modal-title">Add Styles</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">close</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="form">                                            
                   <div class="form-group row">
                        <label class="col-lg-3 form-control-label">Styles No</label>
                        <div class="col-lg-9">
                            <input type="text" placeholder="Styles No" name="nomorstyle" class="form-control">
                        </div>
                    </div>                      
                    <div class="form-group row">
                        <label class="col-lg-3 form-control-label">Customers</label>
                        <div class="col-lg-9">
                             <select name="customer" class="form-control">                                
                                <?php foreach ($customer as $key) { ?>
                                    <option value="<?php echo $key->customer_id ?>"><?php echo $key->customer_name ?></option>
                                <?php } ?>                               
                             </select>
                        </div>
                    </div>                      
                    <div class="form-group row">
                        <label class="col-lg-3 form-control-label">Item</label>
                        <div class="col-lg-9">
                            <input type="text" placeholder="Item Name" name="item" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 form-control-label">Description</label>
                        <div class="col-lg-9">
                            <textarea class="form-control" name="remarks" placeholder="Description"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="save()">Save</button>
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

<script src="<?php echo base_url() ?>assets/vendors/js/datatables/datatables.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/js/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/js/datatables/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/components/tables/tables.js"></script>

<script>

    <?php echo $this->session->flashdata('msg'); ?>

    var save_method;
    var gid;

    function add() {
        save_method = 'add';
        $('#form')[0].reset();
        $('.modal-title').text('Add Styles'); // Set title to Bootstrap modal title        
        $('#modal-centered').modal('show');
    }

    function edit(id){
          save_method = 'update';
          gid = id;
          $('#form')[0].reset(); // reset form on modals

          //Ajax Load data from ajax
          $.ajax({
            url : "<?php echo site_url('index.php/style/get')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {                                    
                $('[name="nomorstyle"]').val(data.style_no);            
                $('[name="item"]').val(data.style_item);            
                $('[name="remarks"]').val(data.remarks);            
                $('[name="customer"]').val(data.customer_id);
                $('[name="customer"]').trigger('change')                
                $('#modal-centered').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Styles'); // Set title to Bootstrap modal title

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
        if(save_method == 'add'){
            url = "<?php echo site_url('index.php/style/save')?>";          
        }else{          
            url = "<?php echo site_url('index.php/style/edit/')?>" + gid;         
        }

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
              // console.log(data.name);
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
            url : "<?php echo site_url('index.php/style/delete')?>/" + id,
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

