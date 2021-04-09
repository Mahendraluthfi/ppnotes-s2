<div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h2 class="page-header-title">PP Notes Form</h2>
            <div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>"><i class="ti ti-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Scheduling</a></li>
                    <li class="breadcrumb-item active">PP Notes Form</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header -->
<div class="row flex-row">
    <div class="col-xl-12">
        <!-- Form -->
        <div class="widget has-shadow">
            <div class="widget-header bordered no-actions d-flex align-items-center">
                <h4>Planning Department</h4>
            </div>
            <div class="widget-body">
                <div class="row flex-row justify-content-center">
                    <div class="col-xl-12">
                        <div id="rootwizard">
                            <div class="step-container">
                                <div class="step-wizard">
                                    <div class="progress">
                                        <div class="progressbar"></div>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="#tab1" data-toggle="tab">
                                                <span class="step">1</span>
                                                <span class="title">Pre-Production</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab2" data-toggle="tab">
                                                <span class="step">2</span>
                                                <span class="title">Pilot Appraisal</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab3" data-toggle="tab">
                                                <span class="step">3</span>
                                                <span class="title">MAST</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane" id="tab1">
                                    <?php echo form_open('subform/form_planning/'.$id); ?>
                                    <div class="section-title mt-5 mb-5">
                                        <h4>MERCHANDISING</h4>
                                    </div>
                                     <div class="alert alert-secondary" role="alert">
                                           Can delivery dates be met as per MPO/CPO/SLC delivery schedule ?
                                    </div>
                                    <div class="form-group row">
                                         <div class="col-md-1"></div>                            
                                        <div class="col-md-1">                            
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio7" id="rad-15" <?php if($pp->pp_m5_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-15">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio7" id="rad-16" <?php if($pp->pp_m5_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-16">No</label>
                                            </div>                                        
                                        </div>
                                        <div class="col-md-2 text-right">Delivery Date</div>
                                        <div class="col-md-2">
                                            <input type="text" name="pp_m5_2" class="form-control" id="date5" placeholder="Delivery Date" value="<?php echo $pp->pp_m5_2 ?>">
                                        </div>
                                        <div class="col-md-1 text-right">If Not</div>
                                        <div class="col-md-5">
                                            <input type="text" name="pp_m5_3" class="form-control" placeholder="Preventive Action" value="<?php echo $pp->pp_m5_3 ?>"><br>
                                            <input type="text" name="pp_m5_4" class="form-control" placeholder="Actions By" value="<?php echo $pp->pp_m5_4 ?>">
                                        </div>
                                    </div><hr>
                                    <div class="section-title mt-5 mb-5">
                                        <h4>PILOT CUT</h4>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-5">
                                            <div class="alert alert-secondary" role="alert">Issuing of Cutting Instruction -   Date & Time</div>
                                        </div>
                                        <div class="col-md-1">Date</div>
                                        <div class="col-md-3"><input type="text" id="date1" name="pp_pc1_1" class="form-control" value="<?php echo $pp->pp_pc1_1 ?>"></div>
                                        <div class="col-md-1">Time</div>
                                        <div class="col-md-2"><input type="time" name="pp_pc1_2" class="form-control" value="<?php echo $pp->pp_pc1_2 ?>"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">Sizes for pilot</div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pp_pc3" value="<?php echo $pp->pp_pc3 ?>"></div>                                        
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">Number of gmts to be cut</div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pp_pc4_2" value="<?php echo $pp->pp_pc4_2 ?>"></div>
                                    </div>
                                    <ul class="pager wizard text-right">
                                        <li class="previous d-inline-block">
                                            <a href="javascript:;" class="btn btn-secondary ripple">Previous</a>
                                        </li>
                                        <li class="next d-inline-block">
                                            <a href="javascript:;" class="btn btn-gradient-01">Next</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <div class="section-title mt-5 mb-5">
                                        <h4>CONFIRM BULK CUT</h4>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-md-6"><div class="alert alert-secondary" role="alert">Confirm Bulk Cut ?</div></div>
                                        <div class="col-md-1">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="pl_cb1" id="pl_cb1" <?php if($pl2->pl_cb1 == "YES"){echo "checked";} ?>>
                                                <label for="pl_cb1">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="pl_cb1" id="pl_cb1x" <?php if($pl2->pl_cb1 == "NO"){echo "checked";} ?>>
                                                <label for="pl_cb1x">No</label>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-1 text-danger">If Yes</div>
                                        <div class="col-md-6">Issuing of Cutting Instructions for all colours-Date & Time</div>
                                        <div class="col-md-3"><input type="text" id="date12" class="form-control" name="pl_cb2" value="<?php echo $pl2->pl_cb2 ?>"></div>
                                        <div class="col-md-2"><input type="time" class="form-control" name="pl_cb3" value="<?php echo $pl2->pl_cb3 ?>"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-1 text-danger"></div>
                                        <div class="col-md-6">No of garments for 1<sup>st</sup> bulk</div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pl_cb4" value="<?php echo $pl2->pl_cb4 ?>"></div>
                                        <div class="col-md-1">
                                            <div class="styled-radio">
                                                <input type="radio" value="doz" name="pl_cb5" id="pl_cb5" <?php if($pl2->pl_cb5 == "doz"){echo "checked";} ?>>
                                                <label for="pl_cb5">doz</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="pcs" name="pl_cb5" id="pl_cb5x" <?php if($pl2->pl_cb5 == "pcs"){echo "checked";} ?>>
                                                <label for="pl_cb5x">pcs</label>
                                            </div>  
                                        </div>
                                    </div>
                                    <ul class="pager wizard text-right">
                                        <li class="previous d-inline-block">
                                            <a href="javascript:;" class="btn btn-secondary ripple">Previous</a>
                                        </li>
                                        <li class="next d-inline-block">
                                            <a href="javascript:;" class="btn btn-gradient-01">Next</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="tab3">
                                     <ul class="pager wizard text-right">
                                        <li class="previous d-inline-block">
                                            <a href="javascript:void(0)" class="btn btn-secondary ripple">Previous</a>
                                        </li>
                                        <li class="next d-inline-block">
                                            <button type="submit" class="finish btn btn-gradient-01" onclick="return confirm('Are you sure to submit Form ?')">Finish</button>
                                        </li>
                                    </ul>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form -->
    </div>
</div>

<script src="<?php echo base_url() ?>assets/vendors/js/bootstrap-wizard/bootstrap.wizard.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/components/wizard/form-wizard.min.js"></script>
