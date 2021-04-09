<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate/animate.min.css">
<div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h2 class="page-header-title">Setting</h2>
            <div>
                <div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>"><i class="ti ti-home"></i></a></li>
                        <li class="breadcrumb-item active">Setting</li>
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
                <legend>Change Password</legend>
                <hr>
                <?php echo form_open('setting/submit'); ?>
                <div class="form-group row">
                    <label class="form-control-label col-md-3 text-right">Current Password</label>                    
                    <div class="col-md-4"><input type="password" class="form-control" name="cp" placeholder="Current Password"></div>
                </div>
                <div class="form-group row">
                    <label class="form-control-label col-md-3 text-right">New Password</label>                    
                    <div class="col-md-4"><input type="password" class="form-control" name="np" placeholder="New Password"></div>
                </div>
                <div class="form-group row">
                    <label class="form-control-label col-md-3 text-right">Confirm New Password</label>                    
                    <div class="col-md-4"><input type="password" class="form-control" name="cnp" placeholder="Confirm New Password"></div>
                </div>
                <div class="form-group row">
                    <label class="form-control-label col-md-3 text-right"></label>                    
                    <div class="col-md-4"><button type="submit" class="btn btn-primary" onclick="return confirm('Are You Sure ?')">Save</button></div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <!-- End Sorting -->
        <!-- Export -->        
        <!-- End Export -->
    </div>
</div>

<script src="<?php echo base_url() ?>assets/vendors/js/noty/noty.min.js"></script>    
<script src="<?php echo base_url() ?>assets/js/components/tabs/animated-tabs.min.js"></script>        
<script>
    <?php echo $this->session->flashdata('msg'); ?>
</script>