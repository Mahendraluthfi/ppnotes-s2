<script src="https://cdn.tiny.cloud/1/lzb9xb6nk7bhcwc0o84tkk63jdjhevhzli5pwnrxwr11brsa/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

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
                <h4>Technical Department</h4>
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
                                <div class="tab-pane" id="tab0">
                                    <?php echo form_open('subform/form_technical/'.$id); ?>
                                    
                                </div>
                                <div class="tab-pane" id="tab1">
                                    <div class="section-title mt-5 mb-5">
                                        <h4>CONSTRUCTION / TECHNICAL</h4>
                                    </div>
                                    <div class="alert alert-secondary" role="alert">
                                        Present "Construction Details" to the audience
                                    </div><hr>
                                    <div class="form-group row">
                                        <div class="col-md-5">
                                            <div class="alert alert-secondary" role="alert">Is approved Contract / Red / Green Seal Available ?</div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio1" id="rad-1" <?php if($pp->pp_ct2_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-1">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio1" id="rad-2" <?php if($pp->pp_ct2_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-2">No</label>
                                            </div>                                        
                                        </div>
                                        <div class="col-md-3"><input type="text" placeholder="Approved By" name="pp_ct2_2" class="form-control" value="<?php echo $pp->pp_ct2_2 ?>"></div>
                                        <div class="col-md-3"><input type="text" placeholder="Date" name="pp_ct2_3" class="form-control" value="<?php echo $pp->pp_ct2_3 ?>" id="date4"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-1">If Not,</div>
                                        <div class="col-md-1">Action</div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Action" name="pp_ct2_4" value="<?php echo $pp->pp_ct2_4 ?>"></div>
                                        <div class="col-md-2">Action By</div>                                        
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Action By" name="pp_ct2_5" value="<?php echo $pp->pp_ct2_5 ?>"></div>
                                    </div><hr>
                                    <div class="alert alert-secondary" role="alert">What are the comments received ?</div>
                                    <div class="col-md-12">
                                        <textarea name="pp_ct3_1" class="form-control" placeholder="Comments"><?php echo $pp->pp_ct3_1 ?></textarea>
                                    </div><hr>
                                    <div class="alert alert-secondary" role="alert">What are the difficult operations identified during sample stage (cutting & sewing) ?</div>
                                    <div id="table-responsive">
                                        <table class="table table-bordered">                                       
                                           <thead>                                          
                                               <th>Operation</th>
                                               <th>Preventive Action</th>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td><input type="text" name="pp_ct4_1" class="form-control" placeholder="Operation" value="<?php echo $pp->pp_ct4_1 ?>"></td>
                                                   <td><input type="text" name="pp_ct4_2" class="form-control" placeholder="Preventive Action" value="<?php echo $pp->pp_ct4_2 ?>"></td>
                                               </tr>
                                               <tr>
                                                   <td><input type="text" name="pp_ct4_3" class="form-control" placeholder="Operation" value="<?php echo $pp->pp_ct4_3 ?>"></td>
                                                   <td><input type="text" name="pp_ct4_4" class="form-control" placeholder="Preventive Action" value="<?php echo $pp->pp_ct4_4 ?>"></td>
                                               </tr>
                                               <tr>
                                                   <td><input type="text" name="pp_ct4_5" class="form-control" placeholder="Operation" value="<?php echo $pp->pp_ct4_5 ?>"></td>
                                                   <td><input type="text" name="pp_ct4_6" class="form-control" placeholder="Preventive Action" value="<?php echo $pp->pp_ct4_6 ?>"></td>
                                               </tr>
                                           </tbody>
                                       </table>                                                           
                                    </div><hr>
                                    <div class="alert alert-secondary" role="alert">Specify, if any special / extra machines and /or needles required</div>
                                    <div class="col-md-12">
                                        <textarea name="pp_ct5_1" class="form-control" placeholder="Comments"><?php echo $pp->pp_ct5_1 ?></textarea>
                                    </div><hr>
                                    <div class="alert alert-secondary" role="alert">What are the attachments used for the operations ?</div>
                                    <div class="col-md-12">
                                        <textarea name="pp_ct6_1" class="form-control" placeholder="Comments"><?php echo $pp->pp_ct6_1 ?></textarea>
                                    </div><hr>
                                    <div class="form-group row">
                                        <div class="col-md-5">
                                            <div class="alert alert-secondary" role="alert">Has the size set being done ?</div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio2" id="rad-3" <?php if($pp->pp_ct7_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-3">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio2" id="rad-4" <?php if($pp->pp_ct7_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-4">No</label>
                                            </div>                                        
                                        </div>
                                        <div class="col-md-3"><input type="text" placeholder="Done By" name="pp_ct7_2" class="form-control" value="<?php echo $pp->pp_ct7_2 ?>"></div>                                        
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-1">If Not,</div>
                                        <div class="col-md-1">Action</div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Action" name="pp_ct7_3" value="<?php echo $pp->pp_ct7_3 ?>"></div>
                                        <div class="col-md-2">Action By</div>                                        
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Action By" name="pp_ct7_4" value="<?php echo $pp->pp_ct7_4 ?>"></div>
                                    </div><hr>
                                    <div class="alert alert-secondary" role="alert">Specify th eoperations that the measurments been identified as inline and critical</div>
                                    <div id="table-responsive">
                                        <table class="table table-bordered">                                       
                                           <thead>                                          
                                               <th>Inline Measurments</th>
                                               <th>Critical Measurments</th>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td><input type="text" name="pp_ct8_1" class="form-control" placeholder="Inline Measurments" value="<?php echo $pp->pp_ct8_1 ?>"></td>
                                                   <td><input type="text" name="pp_ct8_2" class="form-control" placeholder="Critical Measurments" value="<?php echo $pp->pp_ct8_2 ?>"></td>
                                               </tr>
                                               <tr>
                                                   <td><input type="text" name="pp_ct8_3" class="form-control" placeholder="Inline Measurments" value="<?php echo $pp->pp_ct8_3 ?>"></td>
                                                   <td><input type="text" name="pp_ct8_4" class="form-control" placeholder="Critical Measurments" value="<?php echo $pp->pp_ct8_4 ?>"></td>
                                               </tr>
                                               <tr>
                                                   <td><input type="text" name="pp_ct8_5" class="form-control" placeholder="Inline Measurments" value="<?php echo $pp->pp_ct8_5 ?>"></td>
                                                   <td><input type="text" name="pp_ct8_6" class="form-control" placeholder="Critical Measurments" value="<?php echo $pp->pp_ct8_6 ?>"></td>
                                               </tr>
                                           </tbody>
                                       </table>                                                           
                                    </div><hr>
                                    <div class="alert alert-secondary" role="alert">Are the following approved documents available ?</div>
                                    <div id="table-responsive">
                                        <table class="table table-bordered">                                       
                                           <thead>                                                                           
                                               <th>&nbsp;</th>
                                               <th>If Yes</th>                      
                                               <th>If Not</th>                      
                                               <th>&nbsp;</th>                                                           
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td>&nbsp;</td>
                                                   <td>Appr. By</td>                      
                                                   <td>Action</td>                      
                                                   <td>Re-issuing Date</td>
                                               </tr>
                                               <tr>
                                                   <td>Size Chart/ M'ment Sheet</td>
                                                   <td><input type="text" class="form-control" name="pp_ct9_1" placeholder="Approved By" value="<?php echo $pp->pp_ct9_1 ?>"></td>
                                                   <td><input type="text" class="form-control" name="pp_ct9_2" placeholder="Action" value="<?php echo $pp->pp_ct9_2 ?>"></td>
                                                   <td><input type="text" class="form-control" name="pp_ct9_3" placeholder="Re-issuing Date" value="<?php echo $pp->pp_ct9_3 ?>" id="date1"></td>
                                               </tr>
                                               <tr>
                                                   <td>Construction Sheet</td>
                                                   <td><input type="text" class="form-control" name="pp_ct9_4" placeholder="Approved By" value="<?php echo $pp->pp_ct9_4 ?>"></td>
                                                   <td><input type="text" class="form-control" name="pp_ct9_5" placeholder="Action" value="<?php echo $pp->pp_ct9_5 ?>"></td>
                                                   <td><input type="text" class="form-control" name="pp_ct9_6" placeholder="Re-issuing Date" value="<?php echo $pp->pp_ct9_6 ?>" id="date2"></td>
                                               </tr>
                                               <tr>
                                                   <td>How to measure sheet</td>
                                                   <td><input type="text" class="form-control" name="pp_ct9_7" placeholder="Approved By" value="<?php echo $pp->pp_ct9_7 ?>"></td>
                                                   <td><input type="text" class="form-control" name="pp_ct9_8" placeholder="Action" value="<?php echo $pp->pp_ct9_8 ?>"></td>
                                                   <td><input type="text" class="form-control" name="pp_ct9_9" placeholder="Re-issuing Date" value="<?php echo $pp->pp_ct9_9 ?>" id="date3"></td>
                                               </tr>
                                           </tbody>
                                       </table>                                                           
                                    </div><hr>
                                    <div class="alert alert-secondary" role="alert">What are the changes being done in the above-approved documents during the meeting ?</div>
                                    <div class="col-md-12">
                                        <textarea name="pp_ct10_1" class="form-control" placeholder="Comments"><?php echo $pp->pp_ct10_1 ?></textarea>
                                    </div><hr>
                                    <div class="alert alert-secondary" role="alert">What are the potensial risks identified at the Risk assessment ?</div>
                                    <div id="table-responsive">
                                        <table class="table table-bordered">                                       
                                           <thead>                                                                           
                                               <th>Risk</th>
                                               <th>Preventive Action taken</th>                      
                                               <th width="15%">Checked By</th>                      
                                               <th width="15%">Result</th>                                                           
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td><input type="text" class="form-control" name="pp_ct11_1" value="<?php echo $pp->pp_ct11_1 ?>" placeholder="Risk"></td>
                                                   <td><input type="text" class="form-control" name="pp_ct11_2" value="<?php echo $pp->pp_ct11_2 ?>" placeholder="Preventive Action"></td>
                                                   <td><input type="text" class="form-control" name="pp_ct11_3" value="<?php echo $pp->pp_ct11_3 ?>" placeholder="Checked By"></td>
                                                   <td><input type="text" class="form-control" name="pp_ct11_4" value="<?php echo $pp->pp_ct11_4 ?>" placeholder="Result"></td>
                                               </tr>
                                               <tr>
                                                   <td><input type="text" class="form-control" name="pp_ct11_5" value="<?php echo $pp->pp_ct11_5 ?>" placeholder="Risk"></td>
                                                   <td><input type="text" class="form-control" name="pp_ct11_6" value="<?php echo $pp->pp_ct11_6 ?>" placeholder="Preventive Action"></td>
                                                   <td><input type="text" class="form-control" name="pp_ct11_7" value="<?php echo $pp->pp_ct11_7 ?>" placeholder="Checked By"></td>
                                                   <td><input type="text" class="form-control" name="pp_ct11_8" value="<?php echo $pp->pp_ct11_8 ?>" placeholder="Result"></td>
                                               </tr>
                                               <tr>
                                                   <td><input type="text" class="form-control" name="pp_ct11_9" value="<?php echo $pp->pp_ct11_9 ?>" placeholder="Risk"></td>
                                                   <td><input type="text" class="form-control" name="pp_ct11_10" value="<?php echo $pp->pp_ct11_10 ?>" placeholder="Preventive Action"></td>
                                                   <td><input type="text" class="form-control" name="pp_ct11_11" value="<?php echo $pp->pp_ct11_11 ?>" placeholder="Checked By"></td>
                                                   <td><input type="text" class="form-control" name="pp_ct11_12" value="<?php echo $pp->pp_ct11_12 ?>" placeholder="Result"></td>
                                               </tr>
                                               <tr>
                                                   <td><input type="text" class="form-control" name="pp_ct11_13" value="<?php echo $pp->pp_ct11_13 ?>" placeholder="Risk"></td>
                                                   <td><input type="text" class="form-control" name="pp_ct11_14" value="<?php echo $pp->pp_ct11_14 ?>" placeholder="Preventive Action"></td>
                                                   <td><input type="text" class="form-control" name="pp_ct11_15" value="<?php echo $pp->pp_ct11_15 ?>" placeholder="Checked By"></td>
                                                   <td><input type="text" class="form-control" name="pp_ct11_16" value="<?php echo $pp->pp_ct11_16 ?>" placeholder="Result"></td>
                                               </tr>
                                           </tbody>
                                       </table>                                                           
                                    </div><hr>
                                    <div class="alert alert-secondary" role="alert">What are the matching requirements ?</div>
                                    <div id="table-responsive">
                                        <table class="table table-bordered">                                       
                                           <thead>
                                               <th colspan="2">Stripes & checks</th>
                                               <th colspan="2">Lace MACHING LACE (ATT TO THE PP MEETING SHEET)</th>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td>
                                                       <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox" id="check-1" <?php if($pp->pp_ct12_1 == "on"){echo "checked";} ?>>
                                                            <label for="check-1"></label>
                                                        </div> 
                                                   </td>
                                                   <td>100% side seam matching</td>
                                                   <td>
                                                       <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox2" id="check-2" <?php if($pp->pp_ct12_2 == "on"){echo "checked";} ?>>
                                                            <label for="check-2"></label>
                                                        </div> 
                                                   </td>
                                                   <td>Exact matching point & colour specifiy Yes/No</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox3" id="check-3" <?php if($pp->pp_ct12_3 == "on"){echo "checked";} ?>>
                                                            <label for="check-3"></label>
                                                        </div> 
                                                   </td>
                                                   <td>Waist or Hem straight</td>
                                                   <td>
                                                       <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox4" id="check-4" <?php if($pp->pp_ct12_5 == "on"){echo "checked";} ?>>
                                                            <label for="check-4"></label>
                                                        </div> 
                                                   </td>
                                                   <td>Choice of placement points (indicate on the diagram)</td>
                                               </tr>
                                               <tr>
                                                   <td rowspan="4" class="align-top">
                                                       <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox5" id="check-5" <?php if($pp->pp_ct12_6 == "on"){echo "checked";} ?>>
                                                            <label for="check-5"></label>
                                                        </div> 
                                                   </td>
                                                   <td rowspan="4" class="align-top"><input type="text" class="form-control" placeholder="Other, Specifiy" name="pp_ct12_4" value="<?php echo $pp->pp_ct12_4 ?>"></td>
                                                   <td>
                                                       <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox6" id="check-6" <?php if($pp->pp_ct12_7 == "on"){echo "checked";} ?>>
                                                            <label for="check-6"></label>
                                                        </div> 
                                                   </td>
                                                   <td>Exclusive placement points (indicate on the diagram)</td>
                                               </tr>
                                               <tr>                                                
                                                   <td>
                                                       <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox7" id="check-7" <?php if($pp->pp_ct12_8 == "on"){echo "checked";} ?>>
                                                            <label for="check-7"></label>
                                                        </div> 
                                                   </td>
                                                   <td>Free priority point</td>
                                               </tr>
                                               <tr>                                                
                                                   <td>
                                                       <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox8" id="check-8" <?php if($pp->pp_ct12_9 == "on"){echo "checked";} ?>>
                                                            <label for="check-8"></label>
                                                        </div> 
                                                   </td>
                                                   <td>Length only</td>
                                               </tr>
                                               <tr>                                                
                                                   <td>
                                                       <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox9" id="check-9" <?php if($pp->pp_ct12_10 == "on"){echo "checked";} ?>>
                                                            <label for="check-9"></label>
                                                        </div> 
                                                   </td>d
                                                   <td><input type="text" class="form-control" placeholder="Other, Specifiy" name="pp_ct12_11" value="<?php echo $pp->pp_ct12_11 ?>"></td>
                                               </tr>
                                           </tbody>
                                       </table>                                                           
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="alert alert-secondary" role="alert">Secondary priority point</div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio3" id="rad-5" <?php if($pp->pp_ct12_12 == "YES"){echo "checked";} ?>>
                                                <label for="rad-5">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio3" id="rad-6" <?php if($pp->pp_ct12_12 == "NO"){echo "checked";} ?>>
                                                <label for="rad-6">No</label>
                                            </div>     
                                        </div>
                                    </div>
                                    <div class="form-group row">                                    
                                        <div class="col-md-6">
                                            <div class="alert alert-secondary" role="alert">Tolerance (according to the tolerance given to Fabric / Lace)</div>
                                        </div>
                                        <div class="col-md-6">
                                            <textarea name="pp_ct12_13" class="form-control" placeholder="Comments"><?php echo $pp->pp_ct12_13 ?></textarea>
                                        </div>
                                    </div><hr>
                                    <div id="table-responsive">
                                        <table class="table table-bordered">                                           
                                           <tbody>
                                               <tr style="background-color: #e4e8f0;">
                                                   <th width="15%" rowspan="7" class="align-middle">Heat Seal Placement</th>
                                                   <th>Part</th>
                                                   <th>Placement (excluding seam allowance)</th>
                                               </tr>
                                               <tr>
                                                   <td rowspan="3"><input type="text" name="pp_ct13_1" class="form-control" placeholder="Part" value="<?php echo $pp->pp_ct13_1 ?>"></td>
                                                   <td>
                                                       <div class="form-group row" style="font-size: 12px;">
                                                           <div class="col-md-2"><input type="text" class="form-control" name="pp_ct13_2" value="<?php echo $pp->pp_ct13_2 ?>"></div>
                                                           <div class="col-md-3">cm/inch down/up from</div>
                                                           <div class="col-md-2"><input type="text" class="form-control" name="pp_ct13_3" value="<?php echo $pp->pp_ct13_3 ?>"></div>
                                                           <div class="col-md-3">to the top/bottom of the</div>
                                                           <div class="col-md-2"><input type="text" class="form-control" name="pp_ct13_4" value="<?php echo $pp->pp_ct13_4 ?>"></div>
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div class="form-group row" style="font-size: 12px;">
                                                           <div class="col-md-2"><input type="text" class="form-control" name="pp_ct13_5" value="<?php echo $pp->pp_ct13_5 ?>"></div>
                                                           <div class="col-md-8">cm/inch from left/right seam edge/center line to the left/right of the</div>           
                                                           <div class="col-md-2"><input type="text" class="form-control" name="pp_ct13_6" value="<?php echo $pp->pp_ct13_6 ?>"></div>
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div class="form-group row" style="font-size: 12px;">
                                                           <div class="col-md-3">Seam allowance</div>
                                                           <div class="col-md-3"><input type="text" class="form-control" name="pp_ct13_7" value="<?php echo $pp->pp_ct13_7 ?>"></div>
                                                           <div class="col-md-2">cm/inches</div>                      
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td rowspan="3"><input type="text" name="pp_ct13_8" class="form-control" placeholder="Part" value="<?php echo $pp->pp_ct13_8 ?>"></td>
                                                   <td>
                                                       <div class="form-group row" style="font-size: 12px;">
                                                           <div class="col-md-2"><input type="text" class="form-control" name="pp_ct13_9" value="<?php echo $pp->pp_ct13_9 ?>"></div>
                                                           <div class="col-md-3">cm/inch down/up from</div>
                                                           <div class="col-md-2"><input type="text" class="form-control" name="pp_ct13_10" value="<?php echo $pp->pp_ct13_10 ?>"></div>
                                                           <div class="col-md-3">to the top/bottom of the</div>
                                                           <div class="col-md-2"><input type="text" class="form-control" name="pp_ct13_11" value="<?php echo $pp->pp_ct13_11 ?>"></div>
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div class="form-group row" style="font-size: 12px;">
                                                           <div class="col-md-2"><input type="text" class="form-control" name="pp_ct13_12" value="<?php echo $pp->pp_ct13_12 ?>"></div>
                                                           <div class="col-md-8">cm/inch from left/right seam edge/center line to the left/right of the</div>           
                                                           <div class="col-md-2"><input type="text" class="form-control" name="pp_ct13_13" value="<?php echo $pp->pp_ct13_13 ?>"></div>
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div class="form-group row" style="font-size: 12px;">
                                                           <div class="col-md-3">Seam allowance</div>
                                                           <div class="col-md-3"><input type="text" class="form-control" name="pp_ct13_14" value="<?php echo $pp->pp_ct13_14 ?>"></div>
                                                           <div class="col-md-2">cm/inches</div>                      
                                                       </div>
                                                   </td>
                                               </tr>
                                           </tbody>
                                       </table>                                                           
                                    </div>
                                    <div class="section-title mt-5 mb-5">
                                        <h4>MOULDING (IF ANY)</h4>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">Mould Type</div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Mould Type" name="pp_mo_1" value="<?php echo $pp->pp_mo_1 ?>"></div>
                                        <div class="col-md-3">Temperature (F/C)</div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Temperature (F/C)" name="pp_mo_2" value="<?php echo $pp->pp_mo_2 ?>"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">Mould Shape</div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Mould Shape" name="pp_mo_3" value="<?php echo $pp->pp_mo_3 ?>"></div>
                                        <div class="col-md-3">Moulding Time</div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Moulding Time" name="pp_mo_4" value="<?php echo $pp->pp_mo_4 ?>"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">Mould Size(circumference)</div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Mould Size(circumference)" name="pp_mo_5" value="<?php echo $pp->pp_mo_5 ?>"></div>
                                        <div class="col-md-3">Fabric laying method</div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Fabric laying method" name="pp_mo_6" value="<?php echo $pp->pp_mo_6 ?>"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">Cup depth</div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Cup depth" name="pp_mo_7" value="<?php echo $pp->pp_mo_7 ?>"></div>
                                        <div class="col-md-3">Number of plies</div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Number of plies" name="pp_mo_8" value="<?php echo $pp->pp_mo_8 ?>"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">Single/double moulding</div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Single/double moulding" name="pp_mo_9" value="<?php echo $pp->pp_mo_9 ?>"></div>
                                        <div class="col-md-3">Petential Defects</div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Petential Defects" name="pp_mo_10" value="<?php echo $pp->pp_mo_10 ?>"></div>
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
                                        <h4>Master Pattern</h4>
                                    </div>  
                                    <div class="alert alert-secondary" role="alert">Only if, there were any of following pending/not resolved at/by the Pre Production Meeting</div>
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
                                                            <input type="checkbox" name="checkbox10" id="check-10" <?php if($pl->pl_mp1_1 == "on"){echo "checked";} ?>>
                                                            <label for="check-10"></label>
                                                        </div>
                                                   </td>
                                                   <td>Contract/red seal approval/availability</td>
                                                   <td><input type="text" name="pl_mp1_5" class="form-control" placeholder="Action" value="<?php echo $pl->pl_mp1_5 ?>"></td>
                                                   <td><input type="text" name="pl_mp1_6" class="form-control" placeholder="Comments" value="<?php echo $pl->pl_mp1_6 ?>"></td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox11" id="check-11" <?php if($pl->pl_mp1_2 == "on"){echo "checked";} ?>>
                                                            <label for="check-11"></label>
                                                        </div>
                                                   </td>
                                                   <td>Size set</td>
                                                   <td><input type="text" name="pl_mp1_7" class="form-control" placeholder="Action" value="<?php echo $pl->pl_mp1_7 ?>"></td>
                                                   <td><input type="text" name="pl_mp1_8" class="form-control" placeholder="Comments" value="<?php echo $pl->pl_mp1_8 ?>"></td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox12" id="check-12" <?php if($pl->pl_mp1_3 == "on"){echo "checked";} ?>>
                                                            <label for="check-12"></label>
                                                        </div>
                                                   </td>
                                                   <td>Construction Sheet</td>
                                                   <td><input type="text" name="pl_mp1_9" class="form-control" placeholder="Action" value="<?php echo $pl->pl_mp1_9 ?>"></td>
                                                   <td><input type="text" name="pl_mp1_10" class="form-control" placeholder="Comments" value="<?php echo $pl->pl_mp1_10 ?>"></td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox13" id="check-13" <?php if($pl->pl_mp1_4 == "on"){echo "checked";} ?>>
                                                            <label for="check-13"></label>
                                                        </div>
                                                   </td>
                                                   <td>"How to measure" Sheet</td>
                                                   <td><input type="text" name="pl_mp1_11" class="form-control" placeholder="Action" value="<?php echo $pl->pl_mp1_11 ?>"></td>
                                                   <td><input type="text" name="pl_mp1_12" class="form-control" placeholder="Comments" value="<?php echo $pl->pl_mp1_12 ?>"></td>
                                               </tr>
                                           </tbody>
                                       </table>                                                           
                                    </div><hr>
                                    <div class="form-group row">
                                        <div class="col-md-10">
                                            <div class="alert alert-secondary" role="alert">Is there any thing to be added / amanded on the answer/ comments made at the Pre-Production meeting (including "TBC")</div>
                                        </div>                                  
                                        <div class="col-md-2">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio4" id="rad-7" <?php if($pl->pl_mp2_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-7">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio4" id="rad-8" <?php if($pl->pl_mp2_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-8">No</label>
                                            </div>                                                                           
                                        </div>
                                    </div>    
                                    <div class="form-group row">
                                        <div class="col-md-1">If Yes,</div>
                                        <div class="col-md-1">Questions</div>
                                        <div class="col-md-4"><textarea name="pl_mp2_2" class="form-control" placeholder="Questions"><?php echo $pl->pl_mp2_2 ?></textarea></div>
                                        <div class="col-md-2">Amandement</div>
                                        <div class="col-md-4">
                                            <textarea name="pl_mp2_3" class="form-control" placeholder="Amandement"><?php echo $pl->pl_mp2_3 ?></textarea>
                                        </div>                                    
                                    </div><hr>
                                    <div class="form-group row">
                                        <div class="col-md-5"><div class="alert alert-secondary" role="alert">The first fit pattern is checked & authorized to procced</div></div>
                                        <div class="col-md-1"><h5>By</h5></div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="By" name="pl_mp4_1" value="<?php echo $pl->pl_mp4_1 ?>"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Date" name="pl_mp4_2" id="date18" value="<?php echo $pl->pl_mp4_2 ?>"></div>
                                    </div><hr>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>&nbsp;</th>
                                                    <th>Checked By</th>
                                                    <th>Variations</th>
                                                    <th>Preventive Actions Taken</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Nested pattern vs Master patterns</td>
                                                    <td><input type="text" class="form-control" name="pl_mp5_1" value="<?php echo $pl->pl_mp5_1 ?>"></td>
                                                    <td><input type="text" class="form-control" name="pl_mp5_2" value="<?php echo $pl->pl_mp5_2 ?>"></td>
                                                    <td><input type="text" class="form-control" name="pl_mp5_3" value="<?php echo $pl->pl_mp5_3 ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Master pattern as per the sealed gmt</td>
                                                    <td><input type="text" class="form-control" name="pl_mp5_4" value="<?php echo $pl->pl_mp5_4 ?>"></td>
                                                    <td><input type="text" class="form-control" name="pl_mp5_5" value="<?php echo $pl->pl_mp5_5 ?>"></td>
                                                    <td><input type="text" class="form-control" name="pl_mp5_6" value="<?php echo $pl->pl_mp5_6 ?>"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><hr>
                                    <div class="form-group row">
                                        <div class="col-md-10">
                                            <div class="alert alert-secondary" role="alert">Is the sealed gmt has been made as per construction details ?</div>
                                        </div>                                  
                                        <div class="col-md-2">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio5" id="rad-9" <?php if($pl->pl_mp6_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-9">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio5" id="rad-10" <?php if($pl->pl_mp6_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-10">No</label>
                                            </div>                                                                           
                                        </div>
                                    </div>    
                                    <div class="form-group row">
                                        <div class="col-md-1">If not,</div>
                                        <div class="col-md-3">Specify the variations</div>
                                        <div class="col-md-8"><input type="text" class="form-control" placeholder="Specify the variations" name="pl_mp6_2" value="<?php echo $pl->pl_mp6_2 ?>"></div>
                                    </div><hr>
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            <div class="alert alert-secondary" role="alert">Has a washed gmt been sent to the customer ?</div>
                                        </div>                                  
                                        <div class="col-md-3">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio6" id="rad-11" <?php if($pl->pl_mp7_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-11">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio6" id="rad-12" <?php if($pl->pl_mp7_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-12">No</label>
                                            </div>                                                                           
                                            <div class="styled-radio">
                                                <input type="radio" value="NOT APPLICABLE" name="radio6" id="rad-13" <?php if($pl->pl_mp7_1 == "NOT APPLICABLE"){echo "checked";} ?>>
                                                <label for="rad-13">Not Applicable</label>
                                            </div>                                                                           
                                        </div>
                                    </div>   
                                    <div class="form-group row">
                                        <div class="col-md-1">If Not</div>
                                        <div class="col-md-4"><input type="text" class="form-control" placeholder="Reason" name="pl_mp7_2" value="<?php echo $pl->pl_mp7_2 ?>"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="The date it would be sent" name="pl_mp7_3" value="<?php echo $pl->pl_mp7_3 ?>"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Action By" name="pl_mp7_4" value="<?php echo $pl->pl_mp7_4 ?>"></div>
                                    </div><hr>
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            <div class="alert alert-secondary" role="alert">Is the Style file Completed ?</div>
                                        </div>                                  
                                        <div class="col-md-3">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio7" id="rad-14" <?php if($pl->pl_mp8_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-14">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio7" id="rad-15" <?php if($pl->pl_mp8_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-15">No</label>
                                            </div>                                                                           
                                        </div>
                                    </div>   
                                    <div class="form-group row">
                                        <div class="col-md-1">If Not</div>
                                        <div class="col-md-5"><input type="text" class="form-control" placeholder="The documents that has not been included" name="pl_mp8_2" value="<?php echo $pl->pl_mp8_2 ?>"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="The date it would be completed" name="pl_mp8_3" value="<?php echo $pl->pl_mp8_3 ?>"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Action By" name="pl_mp8_4" value="<?php echo $pl->pl_mp8_4 ?>"></div>
                                    </div><hr>
                                    <div class="alert alert-secondary" role="alert">The following items has approved for bulk & issued to Cutting?</div>
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            <div class="alert alert-secondary" role="alert">Pattern / Placement boards for Lace Cutting</div>
                                        </div>                                  
                                        <div class="col-md-3">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio8" id="rad-16" <?php if($pl->pl_mp9_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-16">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio8" id="rad-17" <?php if($pl->pl_mp9_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-17">No</label>
                                            </div>                                                                           
                                            <div class="styled-radio">
                                                <input type="radio" value="NOT APPLICABLE" name="radio8" id="rad-18" <?php if($pl->pl_mp9_1 == "NOT APPLICABLE"){echo "checked";} ?>>
                                                <label for="rad-18">Not Applicable</label>
                                            </div>                                                                           
                                        </div>
                                    </div>   
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            <div class="alert alert-secondary" role="alert">Pattern / Placement boards for HS</div>
                                        </div>                                  
                                        <div class="col-md-3">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio9" id="rad-19" <?php if($pl->pl_mp9_2 == "YES"){echo "checked";} ?>>
                                                <label for="rad-19">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio9" id="rad-20" <?php if($pl->pl_mp9_2 == "NO"){echo "checked";} ?>>
                                                <label for="rad-20">No</label>
                                            </div>                                                                           
                                            <div class="styled-radio">
                                                <input type="radio" value="NOT APPLICABLE" name="radio9" id="rad-21" <?php if($pl->pl_mp9_2 == "NOT APPLICABLE"){echo "checked";} ?>>
                                                <label for="rad-21">Not Applicable</label>
                                            </div>                                                                           
                                        </div>
                                    </div>   
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            <div class="alert alert-secondary" role="alert">Pattern / Placement boards for EMB</div>
                                        </div>                                  
                                        <div class="col-md-3">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio10" id="rad-22" <?php if($pl->pl_mp9_3 == "YES"){echo "checked";} ?>>
                                                <label for="rad-22">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio10" id="rad-23" <?php if($pl->pl_mp9_3 == "NO"){echo "checked";} ?>>
                                                <label for="rad-23">No</label>
                                            </div>                                                                           
                                            <div class="styled-radio">
                                                <input type="radio" value="NOT APPLICABLE" name="radio10" id="rad-24" <?php if($pl->pl_mp9_3 == "NOT APPLICABLE"){echo "checked";} ?>>
                                                <label for="rad-24">Not Applicable</label>
                                            </div>                                                                           
                                        </div>
                                    </div>   
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            <div class="alert alert-secondary" role="alert">Pattern / Placement boards for Screen Printing</div>
                                        </div>                                  
                                        <div class="col-md-3">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio11" id="rad-25" <?php if($pl->pl_mp9_4 == "YES"){echo "checked";} ?>>
                                                <label for="rad-25">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio11" id="rad-26" <?php if($pl->pl_mp9_4 == "NO"){echo "checked";} ?>>
                                                <label for="rad-26">No</label>
                                            </div>                                                                           
                                            <div class="styled-radio">
                                                <input type="radio" value="NOT APPLICABLE" name="radio11" id="rad-27" <?php if($pl->pl_mp9_4 == "NOT APPLICABLE"){echo "checked";} ?>>
                                                <label for="rad-27">Not Applicable</label>
                                            </div>                                                                           
                                        </div>
                                    </div>   
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            <div class="alert alert-secondary" role="alert">Pattern / Placement boards for Moulding</div>
                                        </div>                                  
                                        <div class="col-md-3">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio12" id="rad-28" <?php if($pl->pl_mp9_5 == "YES"){echo "checked";} ?>>
                                                <label for="rad-28">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio12" id="rad-29" <?php if($pl->pl_mp9_5 == "NO"){echo "checked";} ?>>
                                                <label for="rad-29">No</label>
                                            </div>                                                                           
                                            <div class="styled-radio">
                                                <input type="radio" value="NOT APPLICABLE" name="radio12" id="rad-30" <?php if($pl->pl_mp9_5 == "NOT APPLICABLE"){echo "checked";} ?>>
                                                <label for="rad-30">Not Applicable</label>
                                            </div>                                                                           
                                        </div>
                                    </div>   
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            <div class="alert alert-secondary" role="alert">Pattern / Placement boards for Fussing</div>
                                        </div>                                  
                                        <div class="col-md-3">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio13" id="rad-31" <?php if($pl->pl_mp9_6 == "YES"){echo "checked";} ?>>
                                                <label for="rad-31">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio13" id="rad-32" <?php if($pl->pl_mp9_6 == "NO"){echo "checked";} ?>>
                                                <label for="rad-32">No</label>
                                            </div>                                                                           
                                            <div class="styled-radio">
                                                <input type="radio" value="NOT APPLICABLE" name="radio13" id="rad-33" <?php if($pl->pl_mp9_6 == "NOT APPLICABLE"){echo "checked";} ?>>
                                                <label for="rad-33">Not Applicable</label>
                                            </div>                                                                           
                                        </div>
                                    </div>   
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            <div class="alert alert-secondary" role="alert">Pattern / Placement boards for Lamination</div>
                                        </div>                                  
                                        <div class="col-md-3">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio14" id="rad-34" <?php if($pl->pl_mp9_7 == "YES"){echo "checked";} ?>>
                                                <label for="rad-34">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio14" id="rad-35" <?php if($pl->pl_mp9_7 == "NO"){echo "checked";} ?>>
                                                <label for="rad-35">No</label>
                                            </div>                                                                           
                                            <div class="styled-radio">
                                                <input type="radio" value="NOT APPLICABLE" name="radio14" id="rad-36" <?php if($pl->pl_mp9_7 == "NOT APPLICABLE"){echo "checked";} ?>>
                                                <label for="rad-36">Not Applicable</label>
                                            </div>                                                                           
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-md-1">If Not</div>
                                        <div class="col-md-5"><input type="text" class="form-control" placeholder="action" name="pl_mp9_8" value="<?php echo $pl->pl_mp9_8 ?>"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Time" name="pl_mp9_9" value="<?php echo $pl->pl_mp9_9 ?>"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Action By" name="pl_mp9_10" value="<?php echo $pl->pl_mp9_10 ?>"></div>
                                    </div><hr> 
                                    <div class="alert alert-secondary" role="alert">Comments on pilot garments</div>
                                    <div class="form-group row">
                                        <div class="col-md-12"><textarea name="pl_mp10_1" class="form-control" placeholder="Comments"><?php echo $pl->pl_mp10_1 ?></textarea></div>
                                    </div>
                                    <div class="section-title mt-5 mb-5">
                                        <h4>MAKE UP PILOT</h4>
                                    </div>
                                    <div class="alert alert-secondary" role="alert">Merchants training and their perfomance</div>
                                    <div class="form-group row">
                                        <div class="col-md-4">The sealed garment is shown and explained</div>
                                        <div class="col-md-1">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio15" id="rad-37" <?php if($pl->pl_mu1_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-37">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio15" id="rad-38" <?php if($pl->pl_mu1_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-38">No</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4"><input type="text" class="form-control" name="pl_mu1_5" placeholder="If Not, Action" value="<?php echo $pl->pl_mu1_5 ?>"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pl_mu1_6" placeholder="Action By" value="<?php echo $pl->pl_mu1_6 ?>"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">All of them have been issued pink cards</div>
                                        <div class="col-md-1">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio16" id="rad-39" <?php if($pl->pl_mu1_2 == "YES"){echo "checked";} ?>>
                                                <label for="rad-39">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio16" id="rad-40" <?php if($pl->pl_mu1_2 == "NO"){echo "checked";} ?>>
                                                <label for="rad-40">No</label>
                                            </div>                                                                           
                                        </div>
                                        <div class="col-md-4"><input type="text" class="form-control" name="pl_mu1_7" placeholder="If Not, Action" value="<?php echo $pl->pl_mu1_7 ?>"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pl_mu1_8" placeholder="Action By" value="<?php echo $pl->pl_mu1_8 ?>"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">Have operators reached the requried standart of the sealed gmt ?</div>
                                        <div class="col-md-1">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio17" id="rad-41" <?php if($pl->pl_mu1_3 == "YES"){echo "checked";} ?>>
                                                <label for="rad-41">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio17" id="rad-42" <?php if($pl->pl_mu1_3 == "NO"){echo "checked";} ?>>
                                                <label for="rad-42">No</label>
                                            </div>                                                                           
                                        </div>
                                        <div class="col-md-4"><input type="text" class="form-control" name="pl_mu1_9" placeholder="If Not, Action" value="<?php echo $pl->pl_mu1_9 ?>"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pl_mu1_10" placeholder="Action By" value="<?php echo $pl->pl_mu1_10 ?>"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">Can they constantly meet up to the standarts of the sealed gmt?</div>
                                        <div class="col-md-1">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio18" id="rad-43" <?php if($pl->pl_mu1_4 == "YES"){echo "checked";} ?>>
                                                <label for="rad-43">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio18" id="rad-44" <?php if($pl->pl_mu1_4 == "NO"){echo "checked";} ?>>
                                                <label for="rad-44">No</label>
                                            </div>                                                                           
                                        </div>
                                        <div class="col-md-4"><input type="text" class="form-control" name="pl_mu1_11" placeholder="If Not, Action" value="<?php echo $pl->pl_mu1_11 ?>"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pl_mu1_12" placeholder="Action By" value="<?php echo $pl->pl_mu1_12 ?>"></div>
                                    </div><hr>
                                    <div class="form-group row">
                                        <div class="col-md-9"><div class="alert alert-secondary" role="alert">Have inline measurment been set on the machines ?</div></div>
                                        <div class="col-md-2">                                    
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio46" id="plmu2" <?php if($pl->pl_mu2_2 == "YES"){echo "checked";} ?>>
                                                <label for="plmu2">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio46" id="plmu2_1" <?php if($pl->pl_mu2_2 == "NO"){echo "checked";} ?>>
                                                <label for="plmu2_1">No</label>
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
                                    </div>
                                     <div class="form-group row">
                                    <div class="col-md-10">
                                        <div class="alert alert-secondary" role="alert">A standart gmt has been displayed in line signed by FM, PM Technician, TM, QAM</div>
                                    </div>                                  
                                    <div class="col-md-2">
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="radio45" id="rad-plmu4" <?php if($pl->pl_mu4_1 == "YES"){echo "checked";} ?>>
                                            <label for="rad-plmu4">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="radio45" id="rad-plmu4_1" <?php if($pl->pl_mu4_1 == "NO"){echo "checked";} ?>>
                                            <label for="rad-plmu4_1">No</label>
                                        </div>                                                                                     
                                    </div>
                                </div>  
                                <div class="form-group row">
                                    <div class="col-md-1">If Not,</div>
                                    <div class="col-md-2">The Date it would be completed</div>
                                    <div class="col-md-3"><input type="text" name="pl_mu4_2" class="form-control" value="<?php echo $pl->pl_mu4_2 ?>"></div>
                                    <div class="col-md-2">Action By</div>
                                    <div class="col-md-3"><input type="text" name="pl_mu4_3" class="form-control" value="<?php echo $pl->pl_mu4_3 ?>"></div>
                                </div><hr>  
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            <div class="alert alert-secondary" role="alert">Has a sample garment been sent to the warehouse ?</div>
                                        </div>                                  
                                        <div class="col-md-3">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio19" id="rad-45" <?php if($pl->pl_mu4_4 == "YES"){echo "checked";} ?>>
                                                <label for="rad-45">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio19" id="rad-46" <?php if($pl->pl_mu4_4 == "NO"){echo "checked";} ?>>
                                                <label for="rad-46">No</label>
                                            </div>                                                                           
                                        </div>
                                    </div>   
                                    <div class="form-group row">
                                        <div class="col-md-1">If Not</div>                                        
                                        <div class="col-md-3">The date it would be sent</div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="The date it would be sent" name="pl_mp4_5" value="<?php echo $pl->pl_mu4_5 ?>"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Action By" name="pl_mp4_6" value="<?php echo $pl->pl_mu4_6 ?>"></div>
                                    </div><hr>
                                    <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="alert alert-secondary" role="alert">Was there any adverse fabric reaction ?</div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="radio20" id="rad-47" <?php if($pl->pl_mu5_1 == "YES"){echo "checked";} ?>>
                                            <label for="rad-47">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="radio20" id="rad-48" <?php if($pl->pl_mu5_1 == "NO"){echo "checked";} ?>>
                                            <label for="rad-48">No</label>
                                        </div>                                                                  
                                    </div>                                
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-1">If Yes</div>
                                    <div class="col-md-3"><input type="text" class="form-control" placeholder="Shrinkage / Growing / " name="pl_mu5_2" value="<?php echo $pl->pl_mu5_2 ?>"></div>
                                    <div class="col-md-3"><input type="text" class="form-control" placeholder="Part name(s)" name="pl_mu5_3" value="<?php echo $pl->pl_mu5_3 ?>"></div>
                                    <div class="col-md-2"><input type="text" class="form-control" placeholder="Lengthwise %" name="pl_mu5_4" value="<?php echo $pl->pl_mu5_4 ?>"></div>
                                    <div class="col-md-2"><input type="text" class="form-control" placeholder="Widthwise %" name="pl_mu5_5" value="<?php echo $pl->pl_mu5_5 ?>"></div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="alert alert-secondary" role="alert">Is it affected to the final garment measurement ?</div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="radio21" id="rad-49" <?php if($pl->pl_mu5_6 == "YES"){echo "checked";} ?>>
                                            <label for="rad-49">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="radio21" id="rad-50" <?php if($pl->pl_mu5_6 == "NO"){echo "checked";} ?>>
                                            <label for="rad-50">No</label>
                                        </div>                                                                  
                                    </div>                                
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-1">If Yes</div>
                                    <div class="col-md-4"><input type="text" class="form-control" placeholder="Measurment" name="pl_mu5_7" value="<?php echo $pl->pl_mu5_7 ?>"></div>
                                    <div class="col-md-4"><input type="text" class="form-control" placeholder="Deviation" name="pl_mu5_8" value="<?php echo $pl->pl_mu5_8 ?>"></div>                                                
                                </div><hr>
                                <div class="form-group row">
                                    <div class="col-md-6">Total number of garments sewed in the pilot cut</div>
                                    <div class="col-md-6"><input type="text" class="form-control" name="pl_mu6_1" value="<?php echo $pl->pl_mu6_1 ?>"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">Number of garments brought to the meeting to be assesed</div>
                                    <div class="col-md-6"><input type="text" class="form-control" name="pl_mu6_2" value="<?php echo $pl->pl_mu6_2 ?>"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">Number of garments from the pilot that can be used as 1<sub>st</sub> bulk</div>
                                    <div class="col-md-6"><input type="text" class="form-control" name="pl_mu6_3" value="<?php echo $pl->pl_mu6_3 ?>"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">Is the number of gmts shippable less than the number of gmts sewed</div>
                                    <div class="col-md-6">                                    
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="radio22" id="rad-51" <?php if($pl->pl_mu6_4 == "YES"){echo "checked";} ?>>
                                            <label for="rad-51">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="radio22" id="rad-52" <?php if($pl->pl_mu6_4 == "NO"){echo "checked";} ?>>
                                            <label for="rad-52">No</label>
                                        </div>                                                                  
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-1">If Yes</div>
                                    <div class="col-md-4"><input type="text" class="form-control" placeholder="Reason" name="pl_mu6_5" value="<?php echo $pl->pl_mu6_5 ?>"></div>
                                    <div class="col-md-4"><input type="text" class="form-control" placeholder="Preventive action taken" name="pl_mu6_6" value="<?php echo $pl->pl_mu6_6 ?>"></div>                                                
                                </div>
                                <div class="section-title mt-5 mb-5">
                                    <h4>GARMENT APPRAISAL</h4>
                                </div>
                                <div class="alert alert-secondary" role="alert">Are the following correct according to the spec ?</div>
                                <div class="form-group row">
                                    <div class="col-md-4">Stitches per 3cm/SPI</div>
                                    <div class="col-md-1">
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="radio23" id="rad-53" <?php if($pl2->pl_ga1_1 == "YES"){echo "checked";} ?>>
                                            <label for="rad-53">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="radio23" id="rad-54" <?php if($pl2->pl_ga1_1 == "NO"){echo "checked";} ?>>
                                            <label for="rad-54">No</label>
                                        </div>                                                                           
                                    </div>
                                    <div class="col-md-4"><input type="text" class="form-control" name="pl_ga1_8" placeholder="If Not, Action" value="<?php echo $pl2->pl_ga1_8 ?>"></div>
                                    <div class="col-md-3"><input type="text" class="form-control" name="pl_ga1_9" placeholder="Action By" value="<?php echo $pl2->pl_ga1_9 ?>"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Specified bite / gauge</div>
                                    <div class="col-md-1">
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="radio24" id="rad-55" <?php if($pl2->pl_ga1_2 == "YES"){echo "checked";} ?>>
                                            <label for="rad-55">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="radio24" id="rad-56" <?php if($pl2->pl_ga1_2 == "NO"){echo "checked";} ?>>
                                            <label for="rad-56">No</label>
                                        </div>                                                                           
                                    </div>
                                    <div class="col-md-4"><input type="text" class="form-control" name="pl_ga1_10" placeholder="If Not, Action" value="<?php echo $pl2->pl_ga1_10 ?>"></div>
                                    <div class="col-md-3"><input type="text" class="form-control" name="pl_ga1_11" placeholder="Action By" value="<?php echo $pl2->pl_ga1_11 ?>"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Label and UPC details against Trim Card</div>
                                    <div class="col-md-1">
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="radio25" id="rad-57" <?php if($pl2->pl_ga1_3 == "YES"){echo "checked";} ?>>
                                            <label for="rad-57">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="radio25" id="rad-58" <?php if($pl2->pl_ga1_3 == "NO"){echo "checked";} ?>>
                                            <label for="rad-58">No</label>
                                        </div>                                                                           
                                    </div>
                                    <div class="col-md-4"><input type="text" class="form-control" name="pl_ga1_12" placeholder="If Not, Action" value="<?php echo $pl2->pl_ga1_12 ?>"></div>
                                    <div class="col-md-3"><input type="text" class="form-control" name="pl_ga1_13" placeholder="Action By" value="<?php echo $pl2->pl_ga1_13 ?>"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Gmt measurements</div>
                                    <div class="col-md-1">
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="radio26" id="rad-59" <?php if($pl2->pl_ga1_4 == "YES"){echo "checked";} ?>>
                                            <label for="rad-59">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="radio26" id="rad-60" <?php if($pl2->pl_ga1_4 == "NO"){echo "checked";} ?>>
                                            <label for="rad-60">No</label>
                                        </div>                                                                           
                                    </div>
                                    <div class="col-md-4"><input type="text" class="form-control" name="pl_ga1_14" placeholder="If Not, Action" value="<?php echo $pl2->pl_ga1_14 ?>"></div>
                                    <div class="col-md-3"><input type="text" class="form-control" name="pl_ga1_15" placeholder="Action By" value="<?php echo $pl2->pl_ga1_15 ?>"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Gmts fit against the grades</div>
                                    <div class="col-md-1">
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="radio27" id="rad-61" <?php if($pl2->pl_ga1_5 == "YES"){echo "checked";} ?>>
                                            <label for="rad-61">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="radio27" id="rad-62" <?php if($pl2->pl_ga1_5 == "NO"){echo "checked";} ?>>
                                            <label for="rad-62">No</label>
                                        </div>                                                                           
                                    </div>
                                    <div class="col-md-4"><input type="text" class="form-control" name="pl_ga1_16" placeholder="If Not, Action" value="<?php echo $pl2->pl_ga1_16 ?>"></div>
                                    <div class="col-md-3"><input type="text" class="form-control" name="pl_ga1_17" placeholder="Action By" value="<?php echo $pl2->pl_ga1_17 ?>"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Gmts when compared to the sealed gmt</div>
                                    <div class="col-md-1">
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="radio28" id="rad-63" <?php if($pl2->pl_ga1_6 == "YES"){echo "checked";} ?>>
                                            <label for="rad-63">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="radio28" id="rad-64" <?php if($pl2->pl_ga1_6 == "NO"){echo "checked";} ?>>
                                            <label for="rad-64">No</label>
                                        </div>                                                                           
                                    </div>
                                    <div class="col-md-4"><input type="text" class="form-control" name="pl_ga1_18" placeholder="If Not, Action" value="<?php echo $pl2->pl_ga1_18 ?>"></div>
                                    <div class="col-md-3"><input type="text" class="form-control" name="pl_ga1_19" placeholder="Action By" value="<?php echo $pl2->pl_ga1_19 ?>"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Packing & labels</div>
                                    <div class="col-md-1">
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="radio29" id="rad-65" <?php if($pl2->pl_ga1_7 == "YES"){echo "checked";} ?>>
                                            <label for="rad-65">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="radio29" id="rad-66" <?php if($pl2->pl_ga1_7 == "NO"){echo "checked";} ?>>
                                            <label for="rad-66">No</label>
                                        </div>                                                                           
                                    </div>
                                    <div class="col-md-4"><input type="text" class="form-control" name="pl_ga1_20" placeholder="If Not, Action" value="<?php echo $pl2->pl_ga1_20 ?>"></div>
                                    <div class="col-md-3"><input type="text" class="form-control" name="pl_ga1_21" placeholder="Action By" value="<?php echo $pl2->pl_ga1_21 ?>"></div>
                                </div><hr>
                                <div class="form-group row">
                                    <div class="col-md-9">Is there any job/trim/accesory not on the pilot gmt which should be on the customer gmt ?</div>
                                    <div class="col-md-2">                                    
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="radio30" id="rad-67" <?php if($pl2->pl_ga3_1 == "YES"){echo "checked";} ?>>
                                            <label for="rad-67">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="radio30" id="rad-68" <?php if($pl2->pl_ga3_1 == "NO"){echo "checked";} ?>>
                                            <label for="rad-68">No</label>
                                        </div>                                                                  
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2">If Yes Specify</div>
                                    <div class="col-md-6"><input type="text" class="form-control" placeholder="Specify" name="pl_ga3_2" value="<?php echo $pl2->pl_ga3_2 ?>"></div>
                                </div><hr>
                                <div id="table-responsive">
                                        <table class="table table-bordered">                                       
                                           <thead>
                                               <th colspan="2">Consumptions</th>
                                               <th>Costed<br>Consumption</th>
                                               <th>Actual<br>Consumption</th>
                                               <th>If, actual consumption > Costed consumption <br>Preventive action</th>
                                               <th>Action by</th>                                               
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td rowspan="2">Elastic</td>
                                                   <td><input type="text" class="form-control" name="pl_ga4_1" value="<?php echo $pl2->pl_ga4_1 ?>"></td>
                                                   <td><input type="text" class="form-control" name="pl_ga4_2" value="<?php echo $pl2->pl_ga4_2 ?>"></td>
                                                   <td><input type="text" class="form-control" name="pl_ga4_3" value="<?php echo $pl2->pl_ga4_3 ?>"></td>
                                                   <td><input type="text" class="form-control" name="pl_ga4_4" value="<?php echo $pl2->pl_ga4_4 ?>"></td>
                                                   <td><input type="text" class="form-control" name="pl_ga4_5" value="<?php echo $pl2->pl_ga4_5 ?>"></td>
                                               </tr>
                                               <tr>                                                   
                                                   <td><input type="text" class="form-control" name="pl_ga4_6" value="<?php echo $pl2->pl_ga4_6 ?>"></td>
                                                   <td><input type="text" class="form-control" name="pl_ga4_7" value="<?php echo $pl2->pl_ga4_7 ?>"></td>
                                                   <td><input type="text" class="form-control" name="pl_ga4_8" value="<?php echo $pl2->pl_ga4_8 ?>"></td>
                                                   <td><input type="text" class="form-control" name="pl_ga4_9" value="<?php echo $pl2->pl_ga4_9 ?>"></td>
                                                   <td><input type="text" class="form-control" name="pl_ga4_10" value="<?php echo $pl2->pl_ga4_10 ?>"></td>
                                               </tr>
                                               <tr>
                                                   <td rowspan="2">Trims</td>
                                                   <td><input type="text" class="form-control" name="pl_ga4_11" value="<?php echo $pl2->pl_ga4_11 ?>"></td>
                                                   <td><input type="text" class="form-control" name="pl_ga4_12" value="<?php echo $pl2->pl_ga4_12 ?>"></td>
                                                   <td><input type="text" class="form-control" name="pl_ga4_13" value="<?php echo $pl2->pl_ga4_13 ?>"></td>
                                                   <td><input type="text" class="form-control" name="pl_ga4_14" value="<?php echo $pl2->pl_ga4_14 ?>"></td>
                                                   <td><input type="text" class="form-control" name="pl_ga4_15" value="<?php echo $pl2->pl_ga4_15 ?>"></td>
                                               </tr>
                                               <tr>                                                   
                                                   <td><input type="text" class="form-control" name="pl_ga4_16" value="<?php echo $pl2->pl_ga4_16 ?>"></td>
                                                   <td><input type="text" class="form-control" name="pl_ga4_17" value="<?php echo $pl2->pl_ga4_17 ?>"></td>
                                                   <td><input type="text" class="form-control" name="pl_ga4_18" value="<?php echo $pl2->pl_ga4_18 ?>"></td>
                                                   <td><input type="text" class="form-control" name="pl_ga4_19" value="<?php echo $pl2->pl_ga4_19 ?>"></td>
                                                   <td><input type="text" class="form-control" name="pl_ga4_20" value="<?php echo $pl2->pl_ga4_20 ?>"></td>
                                               </tr>
                                           </tbody>
                                       </table>                                                           
                                    </div><hr>
                                    <div class="form-group row">
                                        <div class="col-md-9">Are any confident that the production could progress without any Technician issues coming up in the bulk production ?</div>
                                        <div class="col-md-2">                                    
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio31" id="rad-69" <?php if($pl2->pl_ga5_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-69">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio31" id="rad-70" <?php if($pl2->pl_ga5_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-70">No</label>
                                            </div>                                                                  
                                        </div>
                                    </div><hr>
                                    <div class="form-group row">
                                        <div class="col-md-4">Any special comment ?</div>
                                        <div class="col-md-8"><textarea name="pl_ga6_1" class="form-control" placeholder="Comments"><?php echo $pl2->pl_ga6_1 ?></textarea></div>
                                    </div>
                                    <div class="section-title mt-5 mb-5">
                                        <h4>MOULDING (IF ANY)</h4>
                                    </div>  
                                    <div class="alert alert-secondary" role="alert">Only if, there were any of following pending/not resolved at/by the Pre Production Meeting</div>
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
                                                            <input type="checkbox" name="checkbox14" id="check-14" <?php if($pl2->pl_mo1_1 == "on"){echo "checked";} ?>>
                                                            <label for="check-14"></label>
                                                        </div>
                                                   </td>
                                                   <td>Mould type/Shape/Size/Cup Depth</td>
                                                   <td><input type="text" name="pl_mo1_4" class="form-control" placeholder="Action" value="<?php echo $pl2->pl_mo1_4 ?>"></td>
                                                   <td><input type="text" name="pl_mo1_5" class="form-control" placeholder="Comments" value="<?php echo $pl2->pl_mo1_5 ?>"></td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox15" id="check-15" <?php if($pl2->pl_mo1_2 == "on"){echo "checked";} ?>>
                                                            <label for="check-15"></label>
                                                        </div>
                                                   </td>
                                                   <td>Setting temp. /Time</td>
                                                   <td><input type="text" name="pl_mo1_6" class="form-control" placeholder="Action" value="<?php echo $pl2->pl_mo1_6 ?>"></td>
                                                   <td><input type="text" name="pl_mo1_7" class="form-control" placeholder="Comments" value="<?php echo $pl2->pl_mo1_7 ?>"></td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox16" id="check-16" <?php if($pl2->pl_mo1_3 == "on"){echo "checked";} ?>>
                                                            <label for="check-16"></label>
                                                        </div>
                                                   </td>
                                                   <td>Ply height/single or double moulding</td>
                                                   <td><input type="text" name="pl_mo1_8" class="form-control" placeholder="Action" value="<?php echo $pl2->pl_mo1_8 ?>"></td>
                                                   <td><input type="text" name="pl_mo1_9" class="form-control" placeholder="Comments" value="<?php echo $pl2->pl_mo1_9 ?>"></td>
                                               </tr>                                               
                                           </tbody>
                                       </table>                                                           
                                    </div><hr>
                                    <div class="alert alert-secondary" role="alert">Specify any problem encountered (if any) in following areas</div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                              <thead>
                                                  <tr>
                                                      <th>Area</th>
                                                      <th>Problem</th>
                                                      <th>Action</th>
                                                      <th>Action By</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>Moulding to the specs set</td>
                                                      <td><input type="text" class="form-control" name="pl_mo2_1" value="<?php echo $pl2->pl_mo2_1 ?>"></td>
                                                      <td><input type="text" class="form-control" name="pl_mo2_2" value="<?php echo $pl2->pl_mo2_2 ?>"></td>
                                                      <td><input type="text" class="form-control" name="pl_mo2_3" value="<?php echo $pl2->pl_mo2_3 ?>"></td>
                                                  </tr>
                                                  <tr>
                                                      <td>Adversed reactions* on fabric</td>
                                                      <td><input type="text" class="form-control" name="pl_mo2_4" value="<?php echo $pl2->pl_mo2_4 ?>"></td>
                                                      <td><input type="text" class="form-control" name="pl_mo2_5" value="<?php echo $pl2->pl_mo2_5 ?>"></td>
                                                      <td><input type="text" class="form-control" name="pl_mo2_6" value="<?php echo $pl2->pl_mo2_6 ?>"></td>
                                                  </tr>
                                                  <tr>
                                                      <td>Cutting the moulded panels</td>
                                                      <td><input type="text" class="form-control" name="pl_mo2_7" value="<?php echo $pl2->pl_mo2_7 ?>"></td>
                                                      <td><input type="text" class="form-control" name="pl_mo2_8" value="<?php echo $pl2->pl_mo2_8 ?>"></td>
                                                      <td><input type="text" class="form-control" name="pl_mo2_9" value="<?php echo $pl2->pl_mo2_9 ?>"></td>
                                                  </tr>
                                                  <tr>
                                                      <td>Others</td>
                                                      <td><input type="text" class="form-control" name="pl_mo2_10" value="<?php echo $pl2->pl_mo2_10 ?>"></td>
                                                      <td><input type="text" class="form-control" name="pl_mo2_11" value="<?php echo $pl2->pl_mo2_11 ?>"></td>
                                                      <td><input type="text" class="form-control" name="pl_mo2_12" value="<?php echo $pl2->pl_mo2_12 ?>"></td>
                                                  </tr>
                                              </tbody>
                                          </table>  
                                          *Discoloration, bleaching, heavy shrinkage due to heat, bubbing, fabric tearing
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
                                <table class="table table-bordered">
                                  <tr class="text-center">
                                      <td>Collection</td>
                                      <td>Style</td>
                                      <td width="40%">Risk Element</td>
                                      <td>PP Analysis (Y/N)</td>
                                      <td>FBA (Y/N)</td>
                                  </tr>
                                  <tr>
                                      <td><input type="text" class="form-control" name="hg_input1" value="<?php echo $global->hg_input1 ?>" placeholder="Collection"></td>
                                      <td><label class="text-primary"><?php echo $get->style_no ?></label></td>
                                      <td><textarea name="hg_textarea1" class="form-control" placeholder="Risk Element"><?php echo $global->hg_textarea1 ?></textarea></td>
                                      <td>
                                          <div class="styled-radio">
                                              <input type="radio" value="YES" name="hg_radio1" id="rad-9" <?php if($global->hg_radio1 == "YES")echo "checked"; ?>>
                                              <label for="rad-9">Yes</label>
                                          </div>
                                          <div class="styled-radio">
                                              <input type="radio" value="NO" name="hg_radio1" id="rad-10" <?php if($global->hg_radio1 == "NO")echo "checked"; ?>>
                                              <label for="rad-10">No</label>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="styled-radio">
                                              <input type="radio" value="YES" name="hg_radio2" id="rad-11" <?php if($global->hg_radio2 == "YES")echo "checked"; ?>>
                                              <label for="rad-11">Yes</label>
                                          </div>
                                          <div class="styled-radio">
                                              <input type="radio" value="NO" name="hg_radio2" id="rad-12" <?php if($global->hg_radio2 == "NO")echo "checked"; ?>>
                                              <label for="rad-12">No</label>
                                          </div>
                                      </td>
                                  </tr>
                                </table>
                                <table class="table">
                                    <tr class="bg-secondary text-white">
                                       <td colspan="2">Operation Bulletin</td>
                                       <td>Yes/No</td>
                                       <td>Action</td>
                                       <td>Owner</td>
                                      </tr>                                                                            
                                      <tr>
                                        <td colspan="2" class="text-primary">Confirm/Agree Operation Sequence</td>
                                        <td rowspan="2" style="vertical-align:top;">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="qa_radio2" id="rad-25" <?php if($global->qa_radio2 == "YES")echo "checked"; ?>>
                                                <label for="rad-25">Yes</label>
                                            </div>
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="qa_radio2" id="rad-26" <?php if($global->qa_radio2 == "NO")echo "checked"; ?>>
                                                <label for="rad-26">No</label>
                                            </div>
                                        </td>
                                        <td><input type="text" class="form-control" name="qa_input4" value="<?php echo $global->qa_input4 ?>" placeholder="Action"></td>
                                        <td><input type="text" class="form-control" name="qa_input5" value="<?php echo $global->qa_input5 ?>" placeholder="Owner"></td>
                                      </tr>
                                      <tr>
                                        <td>If No, please advise the reason</td>
                                        <td><input type="text" class="form-control" name="qa_input6" value="<?php echo $global->qa_input6 ?>" placeholder="Reason"></td>    
                                      </tr>
                                      <tr>
                                        <td colspan="2" class="text-primary">Confirm Operation Bulletin is aligned to approved sample</td>
                                        <td rowspan="2" style="vertical-align:top;">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="qa_radio3" id="rad-27" <?php if($global->qa_radio3 == "YES")echo "checked"; ?>>
                                                <label for="rad-27">Yes</label>
                                            </div>
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="qa_radio3" id="rad-28" <?php if($global->qa_radio3 == "NO")echo "checked"; ?>>
                                                <label for="rad-28">No</label>
                                            </div>
                                        </td>
                                        <td><input type="text" class="form-control" name="qa_input7" value="<?php echo $global->qa_input7 ?>" placeholder="Action"></td>
                                        <td><input type="text" class="form-control" name="qa_input8" value="<?php echo $global->qa_input8 ?>" placeholder="Owner"></td>
                                      </tr>
                                      <tr>
                                        <td>If No, please advise the reason</td>
                                        <td><input type="text" class="form-control" name="qa_input9" value="<?php echo $global->qa_input9 ?>" placeholder="Reason"></td>    
                                      </tr>                                                                                                                        
                                </table> 
                                    <h4 class="text-primary">Critical Quality Points - Technical Quality Specification - GSD Method Specification - Machine Specification</h4>
                                    <textarea name="qa_textarea1" class="tinytext"><?php echo $global->qa_textarea1 ?></textarea><hr>
                                    <h4 class="text-primary">Key Points of Measure / How to Measure</h4>
                                    <textarea name="qa_textarea2" class="tinytext"><?php echo $global->qa_textarea2 ?></textarea><br>
                                    <h4 class="text-primary"><i>Molding</i></h4>
                                    <table class="table">
                                      <tr>
                                          <td width="35%">Machine Type - Single Head/Twin head</td>
                                          <td><input type="text" class="form-control" name="qa_input38" value="<?php echo $global->qa_input38 ?>" placeholder="Machine Type - Single Head/Twin head"></td>
                                      </tr>
                                      <tr>
                                          <td>Bullet Mold</td>
                                          <td><input type="text" class="form-control" name="qa_input39" value="<?php echo $global->qa_input39 ?>" placeholder="Bullet Mold"></td>
                                      </tr>
                                      <tr>
                                          <td>Customize Mold</td>
                                          <td><input type="text" class="form-control" name="qa_input40" value="<?php echo $global->qa_input40 ?>" placeholder="Customize Mold"></td>
                                      </tr>
                                      <tr>
                                          <td>Teardrop Mold</td>
                                          <td><input type="text" class="form-control" name="qa_input41" value="<?php echo $global->qa_input41 ?>" placeholder="Teardrop Mold"></td>
                                      </tr>                
                                      <tr>
                                          <td>Offset Mold</td>
                                          <td><input type="text" class="form-control" name="qa_input42" value="<?php echo $global->qa_input42 ?>" placeholder="Offset Mold"></td>
                                      </tr>              
                                      <tr>
                                          <td>Number of Plies</td>
                                          <td><input type="text" class="form-control" name="qa_input43" value="<?php echo $global->qa_input43 ?>" placeholder="Number of Plies"></td>
                                      </tr>                  
                                      <tr>
                                          <td>Temperature</td>
                                          <td><input type="text" class="form-control" name="qa_input44" value="<?php echo $global->qa_input44 ?>" placeholder="Temperature"></td>
                                      </tr>              
                                      <tr>
                                          <td>Male</td>
                                          <td><input type="text" class="form-control" name="qa_input45" value="<?php echo $global->qa_input45 ?>" placeholder="Male"></td>
                                      </tr>       
                                      <tr>
                                          <td>Female</td>
                                          <td><input type="text" class="form-control" name="qa_input46" value="<?php echo $global->qa_input46 ?>" placeholder="Female"></td>
                                      </tr>         
                                      <tr>
                                          <td>Component Molding</td>
                                          <td><input type="text" class="form-control" name="qa_input47" value="<?php echo $global->qa_input47 ?>" placeholder="Component Molding"></td>
                                      </tr>                    
                                      <tr>
                                          <td>After Make Molding</td>
                                          <td><input type="text" class="form-control" name="qa_input48" value="<?php echo $global->qa_input48 ?>" placeholder="After Make Molding"></td>
                                      </tr>                     
                                      <tr>
                                          <td>Trimming Excess fabric using plastics Shots</td>
                                          <td><input type="text" class="form-control" name="qa_input49" value="<?php echo $global->qa_input49 ?>" placeholder="Trimming Excess fabric using plastics Shots"></td>
                                      </tr>                                  
                                      <tr>
                                          <td>Trimming Excess fabric using Edge Cutting Machines</td>
                                          <td><input type="text" class="form-control" name="qa_input50" value="<?php echo $global->qa_input50 ?>" placeholder="Trimming Excess fabric using Edge Cutting Machines"></td>
                                      </tr>                
                                    </table> 
                                    <h4 class="text-primary"><i>Heat Seal</i></h4>
                                    <table class="table">
                                      <tr>
                                          <td width="30%">Temperature</td>
                                          <td><input type="text" class="form-control" name="qa_input51" value="<?php echo $global->qa_input51 ?>" placeholder="Temperature"></td>
                                      </tr>
                                      <tr>
                                          <td>Machine Cycle</td>
                                          <td><input type="text" class="form-control" name="qa_input52" value="<?php echo $global->qa_input52 ?>" placeholder="Machine Cycle"></td>
                                      </tr>
                                      <tr>
                                          <td>Machine Type-Single Head/Twin Head</td>
                                          <td><input type="text" class="form-control" name="qa_input53" value="<?php echo $global->qa_input53 ?>" placeholder="Machine Type-Single Head/Twin Head"></td>
                                      </tr>
                                      <tr>
                                          <td>Quantity on bed</td>
                                          <td><input type="text" class="form-control" name="qa_input54" value="<?php echo $global->qa_input54 ?>" placeholder="Quantity on bed"></td>
                                      </tr>
                                      <tr>
                                          <td>Placement</td>
                                          <td><input type="text" class="form-control" name="qa_input55" value="<?php echo $global->qa_input55 ?>" placeholder="Placement"></td>
                                      </tr>
                                    </table>
                                    <h4 class="text-primary"><i>Sewing</i></h4>
                                    <table class="table">
                                      <tr>
                                          <td width="30%">Agree Machine Type/Spec per operation</td>
                                          <td><input type="text" class="form-control" name="qa_input56" value="<?php echo $global->qa_input56 ?>" placeholder="Agree Machine Type/Spec per operation"></td>
                                      </tr>
                                      <tr>
                                          <td>Stich density as per quality Spec</td>
                                          <td><input type="text" class="form-control" name="qa_input57" value="<?php echo $global->qa_input57 ?>" placeholder="Stich density as per quality Spec"></td>
                                      </tr>
                                      <tr>
                                          <td>Machine Spec - RPM/No of Stitches in BT Machine etc</td>
                                          <td><input type="text" class="form-control" name="qa_input58" value="<?php echo $global->qa_input58 ?>" placeholder="Machine Spec - RPM/No of Stitches in BT Machine etc"></td>
                                      </tr>
                                      <tr>
                                          <td>Specify Needle Thread/Bobbin/Looper thread</td>
                                          <td><input type="text" class="form-control" name="qa_input59" value="<?php echo $global->qa_input59 ?>" placeholder="Specify Needle Thread/Bobbin/Looper thread"></td>
                                      </tr>
                                      <tr>
                                          <td>Indicate Folder type/Attachment per operation</td>
                                          <td><input type="text" class="form-control" name="qa_input60" value="<?php echo $global->qa_input60 ?>" placeholder="Indicate Folder type/Attachment per operation"></td>
                                      </tr>
                                      <tr>
                                          <td>Indicate Folder type/Attachment Per Operation</td>
                                          <td><input type="text" class="form-control" name="qa_input61" value="<?php echo $global->qa_input61 ?>" placeholder="Indicate Folder type/Attachment Per Operation"></td>
                                      </tr>
                                      <tr>
                                          <td>Based on Volume indicate quantity</td>
                                          <td><input type="text" class="form-control" name="qa_input62" value="<?php echo $global->qa_input62 ?>" placeholder="Based on Volume indicate quantity"></td>
                                      </tr>
                                      <tr>
                                          <td>Highlight special technical requirement in Shape/Fabric/Machinery Customization</td>
                                          <td><input type="text" class="form-control" name="qa_input63" value="<?php echo $global->qa_input63 ?>" placeholder="Highlight special technical requirement in Shape/Fabric/Machinery Customization"></td>
                                      </tr>
                                    </table>
                                    <h4 class="text-primary"><i>Embelishment Process</i></h4>
                                    <table class="table">
                                      <tr>
                                          <td width="30%">Graphic Combo #</td>
                                          <td><input type="text" class="form-control" name="qa_input64" value="<?php echo $global->qa_input64 ?>" placeholder="Graphic Combo #"></td>
                                      </tr>
                                      <tr>
                                          <td>Embelishment Technique</td>
                                          <td><input type="text" class="form-control" name="qa_input65" value="<?php echo $global->qa_input65 ?>" placeholder="Embelishment Technique"></td>
                                      </tr>
                                      <tr>
                                          <td>Embelishment Plant</td>
                                          <td><input type="text" class="form-control" name="qa_input66" value="<?php echo $global->qa_input66 ?>" placeholder="Embelishment Plant"></td>
                                      </tr>
                                      <tr>
                                          <td>Placement Board available</td>
                                          <td>
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="qa_radio8" id="rad-37" <?php if($global->qa_radio8 == "YES")echo "checked"; ?>>
                                                <label for="rad-37">Yes</label>
                                            </div>
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="qa_radio8" id="rad-38" <?php if($global->qa_radio8 == "NO")echo "checked"; ?>>
                                                <label for="rad-38">No</label>
                                            </div>
                                        </td>
                                      </tr>                                      
                                      <tr>
                                          <td>Conditions by individual Process <br>Cycle Time <br>Temperatur</td>
                                          <td><textarea name="qa_textarea3" class="tinytext"><?php echo $global->qa_textarea3 ?></textarea></td>
                                      </tr>
                                      <tr>
                                          <td>Conditions by individual Process <br>Cycle Time <br>Temperatur</td>
                                          <td><textarea name="qa_textarea4" class="tinytext"><?php echo $global->qa_textarea4 ?></textarea></td>
                                      </tr>
                                    </table>
                                     <h4 class="text-primary"><i>Identify/Agree Risk Operations</i></h4>
                                    <table class="table">
                                      <tr>
                                          <td width="25%">Complexity</td>
                                          <td><input type="text" class="form-control" name="qa_input75" value="<?php echo $global->qa_input75 ?>" placeholder="Complexity"></td>
                                      </tr>
                                      <tr>
                                          <td>Lessons Learned</td>
                                          <td><input type="text" class="form-control" name="qa_input76" value="<?php echo $global->qa_input76 ?>" placeholder="Lessons Learned"></td>
                                      </tr>                                      
                                      <tr>
                                          <td>Newness/Style Features</td>
                                          <td><input type="text" class="form-control" name="qa_input78" value="<?php echo $global->qa_input78 ?>" placeholder="Newness/Style Features"></td>
                                      </tr>
                                      <tr>
                                          <td>Level of accuracy required</td>
                                          <td><input type="text" class="form-control" name="qa_input79" value="<?php echo $global->qa_input79 ?>" placeholder="Level of accuracy required"></td>
                                      </tr>                                      
                                    </table>
                                    <h4 class="text-primary"><i>Skill Matrix</i></h4>
                                    <table class="table">
                                      <tr>
                                          <td>Factory QCO Practices</td>
                                          <td><input type="text" class="form-control" name="qa_input85" value="<?php echo $global->qa_input85 ?>" placeholder="Factory QCO Practices"></td>
                                      </tr>
                                    </table> 
                                    <h4 class="text-primary"><i>Bra Molding Specification Quality/Method/Conditions</i></h4>                                    
                                    <table  class="table table-bordered">
                                        <tr>
                                        <td colspan="2"></td>                                        
                                        <td colspan="2" class="text-primary">Operation Name: Fabric Molding Methodology / Specification</td>    
                                      </tr>
                                      <tr>
                                        <td colspan="2"></td>
                                        <td>Mold Type</td>
                                        <td><input type="text" class="form-control" name="md_input4" value="<?php echo $global->md_input4 ?>" placeholder="Mold Type"></td>
                                      </tr>
                                      <tr>
                                        <td colspan="2" rowspan="3"></td>
                                        <td>Mold Identification:</td>
                                        <td><input type="text" class="form-control" name="md_input5" value="<?php echo $global->md_input5 ?>" placeholder="Mold Identification:"></td>
                                      </tr>
                                      <tr>
                                        <td>Fabric Details:</td>
                                        <td>Fabric Handling Points:</td>
                                      </tr>  
                                      <tr>
                                        <td rowspan="2">Contents:<br><textarea name="md_textarea1" class="form-control" placeholder="Contents"><?php echo $global->md_textarea1 ?></textarea></td>
                                        <td rowspan="2"><textarea name="md_textarea2" class="form-control" placeholder="Fabric Handling Points"><?php echo $global->md_textarea2 ?></textarea></td>
                                      </tr>
                                      <tr>
                                        <td colspan="2">Method Analysis/Comments</td>
                                      </tr>
                                      <tr class=" bg-secondary text-white">
                                        <td colspan="2">QUALITY - Critical Focus Area <br>Machine Setting (Development Condition)</td>
                                        <td>OPERATION PARAMETERS:</td>
                                        <td>OPERATION - Work Place Layout</td>
                                      </tr>
                                      <tr>
                                        <td>Mold Machine Pressure</td>
                                        <td><input type="text" class="form-control" name="md_input6" value="<?php echo $global->md_input6 ?>" placeholder="Mold Machine Pressure"></td>
                                        <td rowspan="4" style="vertical-align: top;">Indicate number of ply per mold head <br><textarea name="md_textarea3" class="form-control" placeholder="Indicate number of ply per mold head"><?php echo $global->md_textarea3 ?></textarea></td>
                                        <td rowspan="9" style="vertical-align: top;"><textarea name="md_textarea4" class="tinytext2"><?php echo $global->md_textarea4 ?></textarea></td>
                                      </tr>
                                      <tr>
                                        <td>Mold Dwell / Cycle time</td>
                                        <td><input type="text" class="form-control" name="md_input7" value="<?php echo $global->md_input7 ?>" placeholder="Mold Dwell / Cycle time"></td>
                                      </tr>
                                      <tr>
                                        <td>Mold Temperature</td>
                                        <td><input type="text" class="form-control" name="md_input8" value="<?php echo $global->md_input8 ?>" placeholder="Mold Temperature"></td>
                                      </tr>
                                      <tr>
                                        <td colspan="2">Actual Bulk Production Condition</td>    
                                      </tr>
                                      <tr>
                                        <td>Frequency of Testing</td>
                                        <td><input type="text" class="form-control" name="md_input9" value="<?php echo $global->md_input9 ?>" placeholder="Frequency of Testing"></td>
                                        <td rowspan="3" style="vertical-align: top;">Operation#<br><textarea name="md_textarea5" class="form-control" placeholder="Operation#"><?php echo $global->md_textarea5 ?></textarea></td>
                                      </tr>
                                      <tr>
                                        <td>Pressure</td>
                                        <td><input type="text" class="form-control" name="md_input10" value="<?php echo $global->md_input10 ?>" placeholder="Pressure"></td>
                                      </tr>
                                      <tr>
                                        <td>Dwell/Cycle time</td>
                                        <td><input type="text" class="form-control" name="md_input11" value="<?php echo $global->md_input11 ?>" placeholder="Dwell/Cycle time"></td>
                                      </tr>
                                      <tr>
                                        <td>Temperature</td>
                                        <td>
                                            <label>-Male</label><input type="text" class="form-control" name="md_input12" value="<?php echo $global->md_input12 ?>" placeholder="Male">
                                            <label>-Female</label><input type="text" class="form-control" name="md_input13" value="<?php echo $global->md_input13 ?>" placeholder="Female">
                                        </td>
                                        <td rowspan="2" style="vertical-align: top;">Operation Comments<br><textarea name="md_textarea6" class="form-control" placeholder="Operation Comments"><?php echo $global->md_textarea6 ?></textarea></td>
                                      </tr>
                                      <tr>
                                        <td>Tools-Temperature</td>
                                        <td><input type="text" class="form-control" name="md_input14" value="<?php echo $global->md_input14 ?>" placeholder="Tools-Temperature"></td>
                                      </tr>
                                      <tr>
                                        <td colspan="2">Type of Mold Head</td>
                                        <td></td>
                                        <td>Operation Method Analysis Berak Down (GSD Analysis)</td>
                                      </tr>
                                      <tr>
                                        <td colspan="2"><textarea name="md_textarea7" class="form-control"><?php echo $global->md_textarea7 ?></textarea></td>
                                        <td><textarea name="md_textarea8" class="form-control"><?php echo $global->md_textarea8 ?></textarea></td>
                                        <td rowspan="4"><textarea name="md_textarea9" class="tinytext2"><?php echo $global->md_textarea9 ?></textarea></td>
                                      </tr>
                                      <tr>
                                        <td colspan="2">Number of Mold</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td colspan="2">Mold Head Numbers</td>
                                        <td rowspan="2"><textarea name="md_textarea10" class="form-control" rows="20"><?php echo $global->md_textarea10 ?></textarea></td>
                                      </tr>
                                      <tr>
                                        <td colspan="2" style="vertical-align: top;"><img src="<?php echo base_url('assets/img/mastinfo.png') ?>" height="250" alt=""></td>
                                      </tr>
                                </table>  
                                <ul class="pager wizard text-right">
                                      <li class="previous d-inline-block">
                                          <a href="javascript:void(0)" class="btn btn-secondary ripple">Previous</a>
                                      </li>
                                      <li class="next d-inline-block">
                                          <button type="submit" class="finish btn btn-gradient-01" onclick="return confirm('Are you sure to submit Form ?')"> Finish</button>
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
<script>
    tinymce.init({
      selector: '.tinytext',
      menubar: false,
      statusbar: false,
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
    tinymce.init({
      selector: '.tinytext2',
      menubar: false,
      statusbar: false,
      height: "480",
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });

</script>