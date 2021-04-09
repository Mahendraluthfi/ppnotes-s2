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
                <h4>Industrial Engineering Department</h4>
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
                                    <?php echo form_open('subform/form_ie/'.$id); ?>                                    
                                    <div class="section-title mt-5 mb-5">
                                        <h4>MAKE UP PILOT</h4>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6"><div class="alert alert-secondary" role="alert">How many operation stages are there ?</div></div>
                                        <div class="col-md-6"><input type="text" class="form-control" name="pl_mu3_1" value="<?php echo $pl->pl_mu3_1 ?>"></div>
                                    </div>
                                    <div class="section-title mt-5 mb-5">
                                        <h4>WORK STUDY</h4>
                                    </div>
                                     <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="alert alert-secondary" role="alert">SMV of the garment</div>
                                        </div>                                  
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="pl_ws1_6" placeholder="SMV of the garment" value="<?php echo $pl2->pl_ws1_6 ?>">
                                        </div>
                                    </div>  
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <div class="alert alert-secondary" role="alert">Has the planned efficiency been achived by machinist ?</div>
                                        </div>                                  
                                        <div class="col-md-4">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio" id="rad-1" <?php if($pl2->pl_ws1_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-1">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio" id="rad-2" <?php if($pl2->pl_ws1_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-2">No</label>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="form-group row">
                                        <div class="col-md-1">If Not</div>
                                        <div class="col-md-4">Preventive action taken</div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pl_ws1_2" value="<?php echo $pl2->pl_ws1_2 ?>"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4">Action By</div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pl_ws1_3" value="<?php echo $pl2->pl_ws1_3 ?>"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4">Extra std hours required to complete of the order</div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pl_ws1_4" value="<?php echo $pl2->pl_ws1_4 ?>"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4">Action Plan to catch back</div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pl_ws1_5" value="<?php echo $pl2->pl_ws1_5 ?>"></div>
                                    </div><hr>
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <div class="alert alert-secondary" role="alert">Is there any proposal or method study reduce the SMV</div>
                                        </div>                                  
                                        <div class="col-md-4">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio2" id="rad-3" <?php if($pl2->pl_ws2_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-3">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio2" id="rad-4" <?php if($pl2->pl_ws2_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-4">No</label>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="form-group row">
                                        <div class="col-md-1">If Yes</div>
                                        <div class="col-md-2">Specify</div>
                                        <div class="col-md-9"><input type="text" class="form-control" name="pl_ws2_2" value="<?php echo $pl2->pl_ws2_2 ?>"></div>
                                    </div><hr>
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <div class="alert alert-secondary" role="alert">Layout finalized</div>
                                        </div>                                  
                                        <div class="col-md-4">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio3" id="rad-5" <?php if($pl2->pl_ws3_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-5">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio3" id="rad-6" <?php if($pl2->pl_ws3_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-6">No</label>
                                            </div>
                                        </div>
                                    </div>  
                                    <hr>
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <div class="alert alert-secondary" role="alert">Yamazumi</div>
                                        </div>                                  
                                        <div class="col-md-4">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio4" id="rad-7" <?php if($pl2->pl_ws4_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-7">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio4" id="rad-8" <?php if($pl2->pl_ws4_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-8">No</label>
                                            </div>
                                        </div>
                                    </div>  
                                    <hr>
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <div class="alert alert-secondary" role="alert">Team member allocation</div>
                                        </div>                                  
                                        <div class="col-md-4">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio5" id="rad-9" <?php if($pl2->pl_ws5_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-9">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio5" id="rad-10" <?php if($pl2->pl_ws5_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-10">No</label>
                                            </div>
                                        </div>
                                    </div>  
                                    <hr>
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <div class="alert alert-secondary" role="alert">Team member skill chart</div>
                                        </div>                                  
                                        <div class="col-md-4">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio6" id="rad-11" <?php if($pl2->pl_ws6_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-11">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio6" id="rad-12" <?php if($pl2->pl_ws6_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-12">No</label>
                                            </div>
                                        </div>
                                    </div>  <hr>
                                    <div class="form-group row">
                                        <div class="col-md-4">Any special comments</div>
                                        <div class="col-md-8">
                                            <textarea name="pl_ws7_1" class="form-control" placeholder="Comments"><?php echo $pl2->pl_ws7_1 ?></textarea>
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
                                    <table class="table">
                                        <tr class="bg-secondary text-white">
                                           <td colspan="2">Operation Bulletin</td>
                                           <td>Yes/No</td>
                                           <td>Action</td>
                                           <td>Owner</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-primary">Confirm/Agree Operation Breakdown/Work Content from Cutting to Finished Goods</td>
                                            <td rowspan="2" style="vertical-align:top;">
                                                <div class="styled-radio">
                                                    <input type="radio" value="YES" name="qa_radio1" id="rad-23" <?php if($global->qa_radio1 == "YES")echo "checked"; ?>>
                                                    <label for="rad-23">Yes</label>
                                                </div>
                                                <div class="styled-radio">
                                                    <input type="radio" value="NO" name="qa_radio1" id="rad-24" <?php if($global->qa_radio1 == "NO")echo "checked"; ?>>
                                                    <label for="rad-24">No</label>
                                                </div>
                                            </td>
                                            <td><input type="text" class="form-control" name="qa_input1" value="<?php echo $global->qa_input1 ?>" placeholder="Action"></td>
                                            <td><input type="text" class="form-control" name="qa_input2" value="<?php echo $global->qa_input2 ?>" placeholder="Owner"></td>
                                        </tr>
                                        <tr>
                                            <td>If No, please advise the reason</td>
                                            <td><input type="text" class="form-control" name="qa_input3" value="<?php echo $global->qa_input3 ?>" placeholder="Reason"></td>    
                                        </tr>
                                          <tr>
                                            <td colspan="2" class="text-primary">SMV based on GSD</td>
                                            <td rowspan="2" style="vertical-align:top;">
                                                <div class="styled-radio">
                                                    <input type="radio" value="YES" name="qa_radio4" id="rad-29" <?php if($global->qa_radio4 == "YES")echo "checked"; ?>>
                                                    <label for="rad-29">Yes</label>
                                                </div>
                                                <div class="styled-radio">
                                                    <input type="radio" value="NO" name="qa_radio4" id="rad-30" <?php if($global->qa_radio4 == "YES")echo "checked"; ?>>
                                                    <label for="rad-30">No</label>
                                                </div>
                                            </td>
                                            <td><input type="text" class="form-control" name="qa_input10" value="<?php echo $global->qa_input10 ?>" placeholder="Action"></td>
                                            <td><input type="text" class="form-control" name="qa_input11" value="<?php echo $global->qa_input11 ?>" placeholder="Owner"></td>
                                          </tr>
                                          <tr>
                                            <td>If No, please advise the reason</td>
                                            <td><input type="text" class="form-control" name="qa_input12" value="<?php echo $global->qa_input12 ?>" placeholder="Reason"></td>    
                                          </tr>
                                          <tr>
                                            <td colspan="2" class="text-primary">Confirm/Agree Standart Minute Values</td>    
                                            <td rowspan="2" style="vertical-align:top;">
                                                <div class="styled-radio">
                                                    <input type="radio" value="YES" name="qa_radio5" id="rad-31" <?php if($global->qa_radio5 == "YES")echo "checked"; ?>>
                                                    <label for="rad-31">Yes</label>
                                                </div>
                                                <div class="styled-radio">
                                                    <input type="radio" value="NO" name="qa_radio5" id="rad-32" <?php if($global->qa_radio5 == "NO")echo "checked"; ?>>
                                                    <label for="rad-32">No</label>
                                                </div>
                                            </td>
                                            <td><input type="text" class="form-control" name="qa_input13" value="<?php echo $global->qa_input13 ?>" placeholder="Action"></td>
                                            <td><input type="text" class="form-control" name="qa_input14" value="<?php echo $global->qa_input14 ?>" placeholder="Owner"></td>
                                          </tr>
                                          <tr>
                                            <td>SMV Details</td>
                                            <td><input type="text" class="form-control" name="qa_input15" value="<?php echo $global->qa_input15 ?>" placeholder="SMV Details"></td>                            
                                          </tr>
                                          <tr>
                                            <td>If No, please advise the reason</td>
                                            <td><textarea class="form-control" name="qa_input87" placeholder="Reason"><?php echo $global->qa_input87 ?></textarea></td>    
                                          </tr>
                                    </table> 
                                    <h4 class="text-primary"><i>Projected Line Balance Layout</i></h4>
                                    <table class="table">
                                        <tr>
                                            <td width="25%">Volume</td>
                                            <td><input type="text" class="form-control" name="qa_input69" value="<?php echo $global->qa_input69 ?>" placeholder="Volume"></td>
                                        </tr>
                                        <tr>
                                            <td>SMV</td>
                                            <td><input type="text" class="form-control" name="qa_input70" value="<?php echo $global->qa_input70 ?>" placeholder="SMV"></td>
                                        </tr>
                                        <tr>
                                            <td>Line mnapower - SMV Driven</td>
                                            <td><input type="text" class="form-control" name="qa_input72" value="<?php echo $global->qa_input72 ?>" placeholder="Line mnapower - SMV Driven"></td>
                                        </tr>
                                        <tr>
                                            <td>Learning Curve</td>
                                            <td><input type="text" class="form-control" name="qa_input74" value="<?php echo $global->qa_input74 ?>" placeholder="Learning Curve"></td>
                                        </tr>
                                    </table>
                                    <h4 class="text-primary"><i>Skill Matrix</i></h4>
                                    <table class="table">
                                        <tr>
                                            <td width="25%">Aligned to Style Complexity</td>
                                            <td><input type="text" class="form-control" name="qa_input81" value="<?php echo $global->qa_input81 ?>" placeholder="Aligned to Style Complexity"></td>
                                        </tr>
                                        <tr>
                                            <td>Indicate Method Training requirements</td>
                                            <td><input type="text" class="form-control" name="qa_input82" value="<?php echo $global->qa_input82 ?>" placeholder="Indicate Method Training requirements"></td>
                                        </tr>
                                        <tr>
                                            <td>Highlight Volume of training required</td>
                                            <td><input type="text" class="form-control" name="qa_input83" value="<?php echo $global->qa_input83 ?>" placeholder="Highlight Volume of training required"></td>
                                        </tr>
                                        <tr>
                                            <td>Ratio of trainer : Trainee</td>
                                            <td><input type="text" class="form-control" name="qa_input84" value="<?php echo $global->qa_input84 ?>" placeholder="Ratio of trainer : Trainee"></td>
                                        </tr>
                                        <tr>
                                            <td>Adopt Learning Curves to support training progression</td>
                                            <td><input type="text" class="form-control" name="qa_input86" value="<?php echo $global->qa_input86 ?>" placeholder="Adopt Learning Curves to support training progression"></td>
                                        </tr>
                                    </table>    
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
