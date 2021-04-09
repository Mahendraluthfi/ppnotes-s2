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
                <?php echo form_open('scheduling/submit_edit/'.$get->scheduling_id, array('class' => 'form-horizontal')); ?>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Plant/Section/Line</label>
                        <div class="col-md-9">
                            <input type="text" name="plant" class="form-control" placeholder="Plant/Section/Line" value="<?php echo $get->plant ?>">
                        </div>  
                    </div>                            
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Style No</label>
                        <div class="col-md-3">
                            <select class="selectpicker show-menu-arrow" data-live-search="true" name="stylepick" style="width:100%;" required="">
                                <option value="" selected="">Choose...</option>
                            <?php foreach ($style as $key) { ?>
                                <option value="<?php echo $key->id ?>" <?php if($key->id == $get->styles_id){ echo 'selected=""';} ?>><?php echo $key->style_no ?></option>
                            <?php } ?>                                                        
                            </select>
                        </div>
                        <label class="col-md-3 form-control-label">Item</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success item-style"><?php echo $get->style_item ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Customers</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success customer-style"><?php echo $get->customer_name ?></label>                            
                        </div>
                        <label class="col-md-3 form-control-label">Description</label>
                        <div class="col-md-3">
                            <label class="form-control-label text-success desc-style"><?php echo $get->remarks ?></label>
                        </div>
                    </div>         
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Season</label>
                        <div class="col-md-3">
                            <input type="text" name="season" class="form-control" placeholder="Season" value="<?php echo $get->season ?>">
                        </div>
                        <label class="col-md-3 form-control-label">SMV (prov)</label>
                        <div class="col-md-3">
                            <input type="text" name="smv" class="form-control" placeholder="SMV (prov)" value="<?php echo $get->smv ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Range/Buy</label>
                        <div class="col-md-3">
                            <input type="text" name="range" class="form-control" placeholder="Range/Buy" value="<?php echo $get->range_buy ?>">
                        </div>
                        <label class="col-md-3 form-control-label">Merchant</label>
                        <div class="col-md-3">
                            <input type="text" name="merchant" class="form-control" placeholder="Merchant" value="<?php echo $get->merchant ?>">
                        </div>
                    </div>           
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Business Head</label>
                        <div class="col-md-3">
                            <input type="text" name="head" class="form-control" placeholder="Business Head" value="<?php echo $get->business_head ?>">
                        </div>
                        <label class="col-md-3 form-control-label">Revised PP</label>
                        <div class="col-md-3">
                            <input type="text" name="revised" class="form-control" placeholder="Revised PP" value="<?php echo $get->revised_pp ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">RM Date</label>
                        <div class="col-md-3">
                            <input type="text" name="rmdate" class="form-control" id="date1" placeholder="RM Date" value="<?php if($get->rm_date == "1970-01-01" ){}else{ echo date('d-m-Y', strtotime($get->rm_date));} ?>">
                        </div>
                        <label class="col-md-3 form-control-label">PP Planned Date</label>
                        <div class="col-md-3">
                            <input type="text" name="ppdate" class="form-control" id="date2" placeholder="Planned Date" value="<?php if($get->planned_date == "1970-01-01" ){}else{echo date('d-m-Y', strtotime($get->planned_date));} ?>">
                        </div>
                    </div>       
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Actual PP Date</label>
                        <div class="col-md-3">
                            <input type="text" name="actualdate" class="form-control" id="date3" placeholder="Actual Date" value="<?php if($get->actual_date == "1970-01-01" ){}else{echo date('d-m-Y', strtotime($get->actual_date));} ?>">
                        </div>
                        <label class="col-md-3 form-control-label">PSD</label>
                        <div class="col-md-3">
                            <input type="text" name="psd" class="form-control" id="date4" placeholder="PSD" value="<?php if($get->psd == "1970-01-01" ){}else{echo date('d-m-Y', strtotime($get->psd));} ?>">
                        </div>
                    </div>       
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">No. Of Lines</label>
                        <div class="col-md-3">
                            <input type="number" name="nolines" min="0" class="form-control" placeholder="No. Of Lines" value="<?php echo $get->no_lines ?>">                            
                        </div>
                        <label class="col-md-3 form-control-label">PILOT LINES</label>
                        <div class="col-md-3">
                            <input type="text" name="pilotline" class="form-control" placeholder="PILOT LINES" value="<?php echo $get->pilot_line ?>">                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">SO</label>
                        <div class="col-md-3">
                            <input type="text" name="so" class="form-control" placeholder="SO" value="<?php echo $get->so ?>">                        
                        </div>
                        <label class="col-md-3 form-control-label">LI</label>
                        <div class="col-md-3">
                            <input type="text" name="li" class="form-control" placeholder="LI" value="<?php echo $get->li ?>">                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Reason for Delay</label>
                        <div class="col-md-9">
                            <textarea name="reason" class="form-control" placeholder="Reason for Delay"><?php echo $get->reason ?></textarea>  
                        </div>                        
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Comments</label>
                        <div class="col-md-9">
                            <textarea name="comments" class="form-control" placeholder="Comments"><?php echo $get->comments ?></textarea>
                        </div>                        
                    </div>                    
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">Special Information</label>
                        <div class="col-md-9">
                            <textarea name="information" class="form-control" placeholder="Special Information"><?php echo $get->information ?></textarea>
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
