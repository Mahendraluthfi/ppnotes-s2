<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-select/bootstrap-select.min.css">

<div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h2 class="page-header-title">Add PP Schedule</h2>
            <div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('scheduling') ?>">Scheduling</a></li>
                    <li class="breadcrumb-item active">Add Scheduling</li>
                </ul>
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
                <?php echo form_open('scheduling/submit', array('class' => 'form-horizontal')); ?>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Plant/Section/Line</label>
                        <div class="col-md-9">
                            <input type="text" name="plant" class="form-control" placeholder="Plant/Section/Line">
                        </div>  
                    </div>                            
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Style No</label>
                        <div class="col-md-3">
                            <select class="selectpicker show-menu-arrow bst-select" data-live-search="true" name="stylepick" style="width:100%;" required="">
                                <option value="" selected="">Choose...</option>
                            <?php foreach ($style as $key) { ?>
                                <option value="<?php echo $key->id ?>"><?php echo $key->style_no ?></option>
                            <?php } ?>                                                        
                            </select>
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
                            <input type="text" name="season" class="form-control" placeholder="Season">
                        </div>
                        <label class="col-md-3 form-control-label">SMV (prov)</label>
                        <div class="col-md-3">
                            <input type="text" name="smv" class="form-control" placeholder="SMV (prov)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Range/Buy</label>
                        <div class="col-md-3">
                            <input type="text" name="range" class="form-control" placeholder="Range/Buy">
                        </div>
                        <label class="col-md-3 form-control-label">Merchant</label>
                        <div class="col-md-3">
                            <input type="text" name="merchant" class="form-control" placeholder="Merchant">
                        </div>
                    </div>           
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Business Head</label>
                        <div class="col-md-3">
                            <input type="text" name="head" class="form-control" placeholder="Business Head">
                        </div>
                        <label class="col-md-3 form-control-label">Revised PP</label>
                        <div class="col-md-3">
                            <input type="text" name="revised" class="form-control" placeholder="Revised PP">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">RM Date</label>
                        <div class="col-md-3">
                            <input type="text" name="rmdate" class="form-control" id="date1" placeholder="RM Date">
                        </div>
                        <label class="col-md-3 form-control-label">PP Planned Date</label>
                        <div class="col-md-3">
                            <input type="text" name="ppdate" class="form-control" id="date2" placeholder="Planned Date">
                        </div>
                    </div>       
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Actual PP Date</label>
                        <div class="col-md-3">
                            <input type="text" name="actualdate" class="form-control" id="date3" placeholder="Actual Date">
                        </div>
                        <label class="col-md-3 form-control-label">PSD</label>
                        <div class="col-md-3">
                            <input type="text" name="psd" class="form-control" id="date4" placeholder="PSD">
                        </div>
                    </div>       
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">No. Of Lines</label>
                        <div class="col-md-3">
                            <input type="number" name="nolines" min="0" class="form-control" placeholder="No. Of Lines">                            
                        </div>
                        <label class="col-md-3 form-control-label">PILOT LINES</label>
                        <div class="col-md-3">
                            <input type="text" name="pilotline" class="form-control" placeholder="PILOT LINES">                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">SO</label>
                        <div class="col-md-3">
                            <input type="text" name="so" class="form-control" placeholder="SO">                        
                        </div>
                        <label class="col-md-3 form-control-label">LI</label>
                        <div class="col-md-3">
                            <input type="text" name="li" class="form-control" placeholder="LI">                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Reason for Delay</label>
                        <div class="col-md-9">
                            <textarea name="reason" class="form-control" placeholder="Reason for Delay"></textarea>  
                        </div>                        
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Comments</label>
                        <div class="col-md-9">
                            <textarea name="comments" class="form-control" placeholder="Comments"></textarea>
                        </div>                        
                    </div>                    
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Special Information</label>
                        <div class="col-md-9">
                            <textarea name="information" class="form-control" placeholder="Special Information"></textarea>
                        </div>                        
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label"></label>
                        <div class="col-md-9">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>                        
                    </div>
                <?php echo form_close(); ?>      
            </div>
        </div>
        <!-- End Sorting -->
        <!-- Export -->        
        <!-- End Export -->
    </div>
</div>

<script>
       
</script>
