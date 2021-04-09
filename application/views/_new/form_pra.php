<style>
    .table thead th{
        padding: 8px;
        border: 1px solid;
        text-align: center;
    }

    .table tbody td{
        padding: 8px;
        border: 1px solid;
    }

    .table tfoot td{
        padding: 8px;
    }

</style>
<!-- <script src="https://cdn.ckeditor.com/4.14.1/basic/ckeditor.js"></script> -->
<script src="https://cdn.tiny.cloud/1/lzb9xb6nk7bhcwc0o84tkk63jdjhevhzli5pwnrxwr11brsa/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h3 class="page-header-title">Pre-Production Analysis Meeting</h3>
            <div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>"><i class="ti ti-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('meeting/sign/'.$id) ?>"><i class="ti ti-arrow-left"></i></a></li>
                    <li class="breadcrumb-item active">Pre-Production Analysis Meeting</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="widget has-shadow">            
            <div class="widget-body">
                <?php echo form_open('meeting/submit_risk/'.$pra->id.'/'.$id); ?>
                <div class="form-group row">
                    <label class="form-control-label col-lg-2">Pilot / Test Lot</label>
                    <div class="col-lg-5">
                        <input type="text" placeholder="Pilot / Test Lot" name="add" required="" value="<?php echo $pra->pilot ?>" class="form-control">
                    </div>
                    <div class="col-lg-5 text-right">
                        <small class="text-primary">Style <?php echo $get->style_no ?></small>
                    </div>                            
                </div> 
                <h5></h5><br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="2">Risk elements which have been identified at Pre-production Risk Assessment Analysis Meeting</th>
                            <th>Owner</th>
                            <th>Support</th>
                            <th colspan="2" rowspan="2">Plan Resolve Date</th>
                            <th colspan="2" rowspan="2">Actual Resolve Date</th>
                        </tr>
                        <tr>
                            <th width="1%">#</th>
                            <th>Risk Elements</th>
                            <th>Factory</th>
                            <th>Mast</th>
                        </tr>
                    </thead>
                    <tbody id="show_data">
                        
                    </tbody>
                    <tfoot>
                        <tr class="text-center">
                            <td colspan="7"><button type="button" class="btn btn-success btn-sm mr-1 mb-2 add_new"><i class="la la-plus"></i>Add New</button></td>
                        </tr>
                    </tfoot>
                </table>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Operation Desc</th>
                            <th>MC. Type</th>
                            <th>Class</th>
                            <th>Attachment</th>
                            <th>Eng Details</th>
                            <th>MC Photos</th>
                            <th>Method Details</th>
                            <th>Prod. Photos</th>
                            <th width="1%">#</th>
                        </tr>
                    </thead>
                    <tbody id="show_data2">
                        
                    </tbody>
                    <tfoot>
                        <tr class="text-center">
                            <td colspan="9"><button type="button" class="btn btn-success btn-sm mr-1 mb-2 add_detail"><i class="la la-plus"></i>Add New</button></td>
                        </tr>
                    </tfoot>
                </table><hr>
                <div class="form-group row">
                    <label class="form-control-label col-lg-2">Conclusion</label>
                    <div class="col-lg-10">
                        <input type="text" placeholder="Conclusion" name="conclusion" class="form-control" value="<?php echo $pra->conclusion ?>">
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 text-right">
        <button type="submit" class="btn btn-primary btn-lg">Submit Form</button>
    </div>
    <?php echo form_close(); ?>
</div>
<?php echo $this->session->flashdata('msg'); ?>

<div id="modal-centered" class="modal fade" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Risk Elements</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">close</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form">
                <div class="mt-5 mb-5 position-relative">
                    <div class="group material-input">
                        <input type="text" required="" name="risk_element">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Risk Elements</label>
                    </div>
                </div>
                <div class="mt-5 mb-5 position-relative">
                    <div class="group material-input">
                        <input type="text" required="" name="ow_fact">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Owner Factory</label>
                    </div>
                </div>
                <div class="mt-5 mb-5 position-relative">                
                    <div class="group material-input">
                        <input type="text" required="" name="support_mast">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Support Mast</label>
                    </div>                    
                </div>
                <div class="mt-5 mb-5 position-relative">                
                    <div class="group material-input">
                        <input type="date" name="plan_date">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Plan Resolve Date</label>
                    </div>                    
                </div>
                <div class="mt-5 mb-5 position-relative">                
                    <div class="group material-input">
                        <input type="date" name="actual_date">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Actual Resolve Date</label>
                    </div>                    
                </div>
                <?php echo form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary add-risk">Add</button>
            </div>
        </div>
    </div>
</div>

<div id="modal-centered2" class="modal fade" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Details</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">close</span>
                </button>
            </div>
            <div class="modal-body">
            <?php echo form_open_multipart('meeting/add_detail_risk/'.$id); ?>
                <div class="mt-5 mb-5 position-relative">
                    <div class="group material-input">
                        <input type="text" name="field_1">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Operation Description</label>
                    </div>
                </div>
                <div class="mt-5 mb-5 position-relative">
                    <div class="group material-input">
                        <input type="text" name="field_2">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Machine Type (Brand)</label>
                    </div>
                </div>
                <div class="mt-5 mb-5 position-relative">                
                    <div class="group material-input">
                        <input type="text" name="field_3">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Class</label>
                    </div>                    
                </div>
                <div class="mt-5 mb-5 position-relative">                
                    <div class="group material-input">
                        <input type="text" name="field_4">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Attachment</label>
                    </div>                    
                </div>
                <div class="mt-5 mb-5 position-relative">                
                    <div class="group material-input">
                        <input type="text" name="field_5">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Enginering Details</label>
                    </div>                    
                </div>
                <div class="mt-5 mb-5 position-relative">                
                    <div class="group material-input">
                        <input type="file" name="photo_1">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Machine Photos</label>
                    </div>                    
                </div>
                <div class="mt-5 mb-5 position-relative">
                    <label>Method Details</label>                
                    <textarea class="form-control" name="field_6" placeholder="Method Details"></textarea>
                </div>
                <div class="mt-5 mb-5 position-relative">                
                    <div class="group material-input">
                        <input type="file" name="photo_2">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Product Photos</label>
                    </div>                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        view_risk();
        view_detail();

        $(".add_new").click(function(){
            $('#modal-centered').modal('show');
        });

        $(".add_detail").click(function(){
            $('#modal-centered2').modal('show');
        });

        function view_risk() {
            var id = '<?php echo $id ?>';
            $.ajax({
                url : "<?php echo site_url('index.php/meeting/get_risk')?>/"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data){
                    var html = '';
                    var i;
                    var no = 1;
                    for(i=0; i<data.length; i++){   
                        html += "<tr class='text-center'>"+
                            "<td><button type='button' class='btn btn-danger btn-sm delete-risk' data='"+data[i].id+"'><i class='la la-trash'></i></button></td>"+
                            "<td>"+data[i].risk_element+" <small class='text-danger'>("+data[i].who+")</small></td>"+
                            "<td>"+data[i].ow_fact+"</td>"+
                            "<td>"+data[i].support_mast+"</td>"+
                            "<td colspan='2'>"+data[i].plan_date+"</td>"+
                            "<td>"+data[i].actual_date+"</td>"+                            
                            "</tr>";                                       
                    }
                    $('#show_data').html(html);        
                },
                error: function (jqXHR, textStatus, errorThrown){
                    alert('Error get data from ajax');
                  }
            });
        }

        function view_detail() {
            var id = '<?php echo $id ?>';
            $.ajax({
                url : "<?php echo site_url('index.php/meeting/get_risk_detail')?>/"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data){
                    var html = '';
                    var i;
                    var no = 1;
                    for(i=0; i<data.length; i++){   
                        if (data[i].photo_1 !== null) {
                            var strphoto1 = "<img src='<?php echo base_url() ?>"+data[i].photo_1+"' height='60'>";
                        }else{                                
                            var strphoto1 = '';
                        }
                        if (data[i].photo_2 !== null) {
                            var strphoto2 = "<img src='<?php echo base_url() ?>"+data[i].photo_2+"' height='60'>";
                        }else{                                
                            var strphoto2 = '';
                        }
                        html += "<tr class='text-center'>"+
                            "<td>"+data[i].field_1+"</td>"+
                            "<td>"+data[i].field_2+"</td>"+
                            "<td>"+data[i].field_3+"</td>"+
                            "<td>"+data[i].field_4+"</td>"+
                            "<td>"+data[i].field_5+"</td>"+                            
                            "<td>"+strphoto1+"</td>"+
                            "<td>"+data[i].field_6+"</td>"+
                            "<td>"+strphoto2+"</td>"+
                            "<td><button type='button' class='btn btn-danger btn-sm delete-detail' data='"+data[i].id+"'><i class='la la-trash'></i></button></td>"+
                            "</tr>";                                       
                    }
                    $('#show_data2').html(html);        
                },
                error: function (jqXHR, textStatus, errorThrown){
                    alert('Error get data from ajax');
                  }
            });
        }        

        $(".add-risk").click(function(){
            var id = '<?php echo $id ?>';             
            url = "<?php echo site_url('index.php/meeting/add_risk/')?>"+id;                              
              $.ajax({
                url : url,
                type: "POST",
                data: $('#form').serialize(),            
                dataType: "JSON",
                success: function(data)
                {
                   $('#modal-centered').modal('hide');
                   $('#form')[0].reset();
                    view_risk();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        });


        $('#show_data').on('click','.delete-risk',function(){
            var id = $(this).attr('data');  
            var result = confirm('Are you sure ?');
            if (result) {                   
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('index.php/meeting/delete_risk')?>",
                    dataType : "JSON",
                        data : {id: id},
                        success: function(data){                        
                            view_risk();
                        }
                });
            }                                          
        });

        $('#show_data2').on('click','.delete-detail',function(){
            var id = $(this).attr('data');
            var result = confirm('Are you sure ?');
            if (result) {                        
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('index.php/meeting/delete_risk_detail')?>",
                    dataType : "JSON",
                        data : {id: id},
                        success: function(data){                        
                            view_detail();
                        }
                });      
            }                                    
        });

        $('#submit').submit(function(e){      
            var id = '<?php echo $id; ?>';                                
            e.preventDefault(); 
                $.ajax({
                    url:'<?php echo base_url();?>index.php/meeting/add_detail_risk/'+id,
                    type:"post",
                    data:new FormData(this),
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
                    success: function(data){
                        // alert(data);
                        $('#modal-centered2').modal('hide');
                        $('#submit')[0].reset();
                        view_detail();

                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error adding / update data');
                    }
             });            
        });

        
    });
    
     tinymce.init({
      selector: 'textarea',
      // plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      // toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });

</script>