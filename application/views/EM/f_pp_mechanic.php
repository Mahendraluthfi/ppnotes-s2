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
                <h4>Engineering Department</h4>
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
                                    <?php echo form_open('subform/form_mechanic/'.$id); ?>
                                    
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
                                        <h4>MACHINERY</h4>
                                    </div>
                                    <div class="alert alert-secondary" role="alert">Only if, there were any of followings pending / not resolved at / by the pre-production meeting</div>
                                    <div id="table-responsive">
                                        <table class="table table-bordered">                                       
                                           <thead>
                                               <th>&nbsp;</th>
                                               <th>&nbsp;</th>
                                               <th>Action Complete By</th>
                                               <th>Comments</th>
                                           </thead>
                                           <tbody>
                                               <tr>                                                   
                                                   <td>                                                    
                                                        <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox" id="check-1" <?php if($pl->pl_ma1_1 == "on"){echo "checked";} ?>>
                                                            <label for="check-1"></label>
                                                        </div>                                                    
                                                   </td>
                                                   <td>Extra/Sepcial machiunery requested</td>
                                                   <td><input type="text" name="pl_ma1_4" class="form-control" value="<?php echo $pl->pl_ma1_4 ?>"></td>
                                                   <td><input type="text" name="pl_ma1_5" class="form-control" value="<?php echo $pl->pl_ma1_5 ?>"></td>
                                               </tr>                                               
                                                <tr>                                                   
                                                   <td>                                                    
                                                        <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox2" id="check-2" <?php if($pl->pl_ma1_2 == "on"){echo "checked";} ?>>
                                                            <label for="check-2"></label>
                                                        </div>                                                    
                                                   </td>
                                                   <td>Extra/Sepcial needles requested</td>
                                                   <td><input type="text" name="pl_ma1_6" class="form-control" value="<?php echo $pl->pl_ma1_6 ?>"></td>
                                                   <td><input type="text" name="pl_ma1_7" class="form-control" value="<?php echo $pl->pl_ma1_7 ?>"></td>
                                               </tr>                                               
                                               <tr>                                                   
                                                   <td>                                                    
                                                        <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox3" id="check-3" <?php if($pl->pl_ma1_3 == "on"){echo "checked";} ?>>
                                                            <label for="check-3"></label>
                                                        </div>                                                    
                                                   </td>
                                                   <td>Attachemnts</td>
                                                   <td><input type="text" name="pl_ma1_8" class="form-control" value="<?php echo $pl->pl_ma1_8 ?>"></td>
                                                   <td><input type="text" name="pl_ma1_9" class="form-control" value="<?php echo $pl->pl_ma1_9 ?>"></td>
                                               </tr>                                                                         
                                           </tbody>
                                       </table>                                                           
                                    </div> <hr>  
                                     <div class="alert alert-secondary" role="alert">Have the following requirements been met in the pilot sewing</div>
                                    <div class="form-group row">
                                        <div class="col-md-3">The machinery set to the spec</div>
                                        <div class="col-md-1">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio1" id="rad-1" <?php if($pl->pl_ma2_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-1">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio1" id="rad-2" <?php if($pl->pl_ma2_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-2">No</label>
                                            </div>                                                                           
                                        </div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pl_ma2_6" placeholder="Reason" value="<?php echo $pl->pl_ma2_6 ?>"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pl_ma2_7" placeholder="Action" value="<?php echo $pl->pl_ma2_7 ?>"></div>
                                        <div class="col-md-2"><input type="text" class="form-control" name="pl_ma2_8" placeholder="Action By" value="<?php echo $pl->pl_ma2_8 ?>"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">Correct machineries are used</div>
                                        <div class="col-md-1">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio2" id="rad-3" <?php if($pl->pl_ma2_2 == "YES"){echo "checked";} ?>>
                                                <label for="rad-3">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio2" id="rad-4" <?php if($pl->pl_ma2_2 == "NO"){echo "checked";} ?>>
                                                <label for="rad-4">No</label>
                                            </div>                                                                           
                                        </div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pl_ma2_9" placeholder="Reason" value="<?php echo $pl->pl_ma2_9 ?>"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pl_ma2_10" placeholder="Action" value="<?php echo $pl->pl_ma2_10 ?>"></div>
                                        <div class="col-md-2"><input type="text" class="form-control" name="pl_ma2_11" placeholder="Action By" value="<?php echo $pl->pl_ma2_11 ?>"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">Correct attachments are used</div>
                                        <div class="col-md-1">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio3" id="rad-5" <?php if($pl->pl_ma2_3 == "YES"){echo "checked";} ?>>
                                                <label for="rad-5">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio3" id="rad-6" <?php if($pl->pl_ma2_3 == "NO"){echo "checked";} ?>>
                                                <label for="rad-6">No</label>
                                            </div>                                                                           
                                        </div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pl_ma2_12" placeholder="Reason" value="<?php echo $pl->pl_ma2_12 ?>"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pl_ma2_13" placeholder="Action" value="<?php echo $pl->pl_ma2_13 ?>"></div>
                                        <div class="col-md-2"><input type="text" class="form-control" name="pl_ma2_14" placeholder="Action By" value="<?php echo $pl->pl_ma2_14 ?>"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">All operations have been included</div>
                                        <div class="col-md-1">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio4" id="rad-7" <?php if($pl->pl_ma2_4 == "YES"){echo "checked";} ?>>
                                                <label for="rad-7">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio4" id="rad-8" <?php if($pl->pl_ma2_4 == "NO"){echo "checked";} ?>>
                                                <label for="rad-8">No</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pl_ma2_15" placeholder="Reason" value="<?php echo $pl->pl_ma2_15 ?>"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pl_ma2_16" placeholder="Action" value="<?php echo $pl->pl_ma2_16 ?>"></div>
                                        <div class="col-md-2"><input type="text" class="form-control" name="pl_ma2_17" placeholder="Action By" value="<?php echo $pl->pl_ma2_17 ?>"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">Correct needles are used</div>
                                        <div class="col-md-1">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio5" id="rad-9" <?php if($pl->pl_ma2_5 == "YES"){echo "checked";} ?>>
                                                <label for="rad-9">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio5" id="rad-10" <?php if($pl->pl_ma2_5 == "NO"){echo "checked";} ?>>
                                                <label for="rad-10">No</label>
                                            </div>                                   
                                        </div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pl_ma2_18" placeholder="Reason" value="<?php echo $pl->pl_ma2_18 ?>"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pl_ma2_19" placeholder="Action" value="<?php echo $pl->pl_ma2_19 ?>"></div>
                                        <div class="col-md-2"><input type="text" class="form-control" name="pl_ma2_20" placeholder="Action By" value="<?php echo $pl->pl_ma2_20 ?>"></div>
                                    </div><hr>
                                    <div class="form-group row">
                                        <div class="col-md-9"><div class="alert alert-secondary" role="alert">Is necessary to hire any machinery</div></div>
                                        <div class="col-md-2">                                    
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio6" id="rad-11" <?php if($pl->pl_ma3_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-11">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio6" id="rad-12" <?php if($pl->pl_ma3_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-12">No</label>
                                            </div>                                                                  
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">If Yes Specify</div>
                                        <div class="col-md-6"><input type="text" class="form-control" placeholder="Specify" name="pl_ma3_2" value="<?php echo $pl->pl_ma3_2 ?>"></div>
                                    </div><hr>  
                                    <div class="form-group row">
                                        <div class="col-md-9"><div class="alert alert-secondary" role="alert">What there any detection of needle damage ?</div></div>
                                        <div class="col-md-2">                                    
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio7" id="rad-13" <?php if($pl->pl_ma4_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-13">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio7" id="rad-14" <?php if($pl->pl_ma4_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-14">No</label>
                                            </div>                                                                  
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">If Yes</div>
                                        <div class="col-md-4"><input type="text" class="form-control" placeholder="Action" name="pl_ma4_2" value="<?php echo $pl->pl_ma4_2 ?>"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Action By" name="pl_ma4_3" value="<?php echo $pl->pl_ma4_3 ?>"></div>
                                    </div><hr>
                                    <div class="form-group row">
                                        <div class="col-md-4"><div class="alert alert-secondary" role="alert">Any special comment ?</div></div>
                                        <div class="col-md-8"><textarea name="pl_ma5_1" class="form-control" placeholder="Comments"><?php echo $pl->pl_ma5_1 ?></textarea></div>
                                    </div>
                                    <div class="section-title mt-5 mb-5">
                                        <h4>MAKE UP PILOT</h4>
                                    </div>
                                    <h4>Setting up machinery</h4>
                                    <div class="form-group row">
                                        <div class="col-md-6"><div class="alert alert-secondary" role="alert">Who was involved in setting up the machinery ?</div></div>
                                        <div class="col-md-6"><input type="text" class="form-control" name="pl_mu2_1" value="<?php echo $pl->pl_mu2_1 ?>"></div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <div class="col-md-9"><div class="alert alert-secondary" role="alert">Have inline measurment been set on the machines ?</div></div>
                                        <div class="col-md-2">                                    
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio8" id="rad-15" <?php if($pl->pl_mu2_2 == "YES"){echo "checked";} ?>>
                                                <label for="rad-15">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio8" id="rad-16" <?php if($pl->pl_mu2_2 == "NO"){echo "checked";} ?>>
                                                <label for="rad-16">No</label>
                                            </div>                                                                  
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">If Yes</div>
                                        <div class="col-md-5"><textarea name="pl_mu2_3" class="form-control" placeholder="What are they ?"><?php echo $pl->pl_mu2_3 ?></textarea></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">If Not</div>
                                        <div class="col-md-4"><input type="text" class="form-control" placeholder="Action" name="pl_mu2_4" value="<?php echo $pl->pl_mu2_4 ?>"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Action By" name="pl_mu2_5" value="<?php echo $pl->pl_mu2_5 ?>"></div>
                                    </div> -->
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
