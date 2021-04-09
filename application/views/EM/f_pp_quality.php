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
                <h4>Quality Department</h4>
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
                                    <?php echo form_open_multipart('subform/form_quality/'.$id); ?>
                                <div class="section-title mt-5 mb-5">
                                    <h4>Merchandising</h4>
                                </div>                                                              
                                <div class="alert alert-secondary" role="alert">
                                    Sample reqruitments, As per the VS proceder (not received yet)
                                </div>
                                <div id="table-responsive">
                                        <table class="table table-bordered">                                       
                                           <thead>
                                               <th>Sample Type</th>
                                               <th>Size(s)</th>
                                               <th>Action Complete By</th>
                                               <th>Comments</th>
                                           </thead>
                                           <tbody>
                                               <tr>                                                   
                                                   <td><input type="text" name="pp_m6_1" class="form-control" value="<?php echo $pp->pp_m6_1 ?>" placeholder="Sample Type"></td>
                                                   <td><input type="text" name="pp_m6_2" class="form-control" value="<?php echo $pp->pp_m6_2 ?>" placeholder="Size(s)"></td>
                                                   <td><input type="text" name="pp_m6_3" class="form-control" value="<?php echo $pp->pp_m6_3 ?>" placeholder="Action Complete By"></td>
                                                   <td><input type="text" name="pp_m6_4" class="form-control" value="<?php echo $pp->pp_m6_4 ?>" placeholder="Requried Date"></td>
                                               </tr>
                                               <tr>                                                   
                                                   <td><input type="text" name="pp_m6_5" class="form-control" value="<?php echo $pp->pp_m6_5 ?>" placeholder="Sample Type"></td>
                                                   <td><input type="text" name="pp_m6_6" class="form-control" value="<?php echo $pp->pp_m6_6 ?>" placeholder="Size(s)"></td>
                                                   <td><input type="text" name="pp_m6_7" class="form-control" value="<?php echo $pp->pp_m6_7 ?>" placeholder="Action Complete By"></td>
                                                   <td><input type="text" name="pp_m6_8" class="form-control" value="<?php echo $pp->pp_m6_8 ?>" placeholder="Requried Date"></td>
                                               </tr>
                                               <tr>                                                   
                                                   <td><input type="text" name="pp_m6_9" class="form-control" value="<?php echo $pp->pp_m6_9 ?>" placeholder="Sample Type"></td>
                                                   <td><input type="text" name="pp_m6_10" class="form-control" value="<?php echo $pp->pp_m6_10 ?>" placeholder="Size(s)"></td>
                                                   <td><input type="text" name="pp_m6_11" class="form-control" value="<?php echo $pp->pp_m6_11 ?>" placeholder="Action Complete By"></td>
                                                   <td><input type="text" name="pp_m6_12" class="form-control" value="<?php echo $pp->pp_m6_12 ?>" placeholder="Requried Date"></td>
                                               </tr>
                                               <tr>                                                   
                                                   <td><input type="text" name="pp_m6_13" class="form-control" value="<?php echo $pp->pp_m6_13 ?>" placeholder="Sample Type"></td>
                                                   <td><input type="text" name="pp_m6_14" class="form-control" value="<?php echo $pp->pp_m6_14 ?>" placeholder="Size(s)"></td>
                                                   <td><input type="text" name="pp_m6_15" class="form-control" value="<?php echo $pp->pp_m6_15 ?>" placeholder="Action Complete By"></td>
                                                   <td><input type="text" name="pp_m6_16" class="form-control" value="<?php echo $pp->pp_m6_16 ?>" placeholder="Requried Date"></td>
                                               </tr>
                                           </tbody>
                                       </table>                                                           
                                    </div> <hr>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <div class="alert alert-secondary" role="alert">Any special comment or instruction</div>    
                                        </div>
                                        <div class="col-md-6"><textarea name="pp_m7_1" class="form-control" placeholder="Comments"><?php echo $pp->pp_m7_1 ?></textarea></div>    
                                    </div>
                                    <!-- <hr>
                                    <div class="section-title mt-5 mb-5">
                                        <h4>Fabric and Trims</h4>
                                    </div>                        
                                     <div class="alert alert-secondary" role="alert">
                                        Are Fabric Pre-production Notes available ?
                                     </div>                                    
                                    <div class="form-group row">                                        
                                        <div class="col-md-1"></div>                            
                                        <div class="col-md-2">                            
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio1" id="rad-1" <?php if($pp->pp_f1_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-1">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio1" id="rad-2" <?php if($pp->pp_f1_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-2">No</label>
                                            </div>                                        
                                        </div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pp_f1_2" placeholder="Approve By" value="<?php echo $pp->pp_f1_2 ?>"></div>
                                        <div class="col-md-1">If Not</div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="pp_f1_3" placeholder="Action By" value="<?php echo $pp->pp_f1_3 ?>"><br>
                                            <input type="text" class="form-control" name="pp_f1_4" placeholder="Action" value="<?php echo $pp->pp_f1_4 ?>">
                                        </div>                                        
                                    </div><hr>
                                    <div class="alert alert-secondary" role="alert">
                                         Are Fabric Test Reports available ?
                                    </div>                                    
                                    <div class="form-group row">                                        
                                        <div class="col-md-1"></div>                            
                                        <div class="col-md-2">                            
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio2" id="rad-3" <?php if($pp->pp_f2_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-3">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio2" id="rad-4" <?php if($pp->pp_f2_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-4">No</label>
                                            </div>                                        
                                        </div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pp_f2_2" placeholder="If Yes, Whats tests ?" value="<?php echo $pp->pp_f2_2 ?>"></div>
                                        <div class="col-md-1">If Not</div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="pp_f2_3" placeholder="Action By" value="<?php echo $pp->pp_f2_3 ?>"><br>
                                            <input type="text" class="form-control" name="pp_f2_4" placeholder="Action" value="<?php echo $pp->pp_f2_4 ?>">
                                        </div>                                        
                                    </div><hr>     
                                     <div class="alert alert-secondary" role="alert">
                                        Fabric Details
                                     </div>           
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <th>Fabric Details</th>
                                                <th>Supplier</th>
                                                <th>Type</th>
                                                <th>Composition</th>
                                                <th>Fault Rate</th>
                                                <th>Defects</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Fabric</td>
                                                    <td><input type="text" class="form-control" name="pp_f3_1" value="<?php echo $pp->pp_f3_1 ?>"></td>
                                                    <td><input type="text" class="form-control" name="pp_f3_2" value="<?php echo $pp->pp_f3_2 ?>"></td>
                                                    <td><input type="text" class="form-control" name="pp_f3_3" value="<?php echo $pp->pp_f3_3 ?>"></td>
                                                    <td><input type="text" class="form-control" name="pp_f3_4" value="<?php echo $pp->pp_f3_4 ?>"></td>
                                                    <td><input type="text" class="form-control" name="pp_f3_5" value="<?php echo $pp->pp_f3_5 ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Lace</td>
                                                    <td><input type="text" class="form-control" name="pp_f3_6" value="<?php echo $pp->pp_f3_6 ?>"></td>
                                                    <td><input type="text" class="form-control" name="pp_f3_7" value="<?php echo $pp->pp_f3_7 ?>"></td>
                                                    <td><input type="text" class="form-control" name="pp_f3_8" value="<?php echo $pp->pp_f3_8 ?>"></td>
                                                    <td><input type="text" class="form-control" name="pp_f3_9" value="<?php echo $pp->pp_f3_9 ?>"></td>
                                                    <td><input type="text" class="form-control" name="pp_f3_10" value="<?php echo $pp->pp_f3_10 ?>"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr>                  
                                     <div class="alert alert-secondary" role="alert">
                                        Are "Fabric Detects Card" distributed to Cutting & Production ?
                                     </div>           
                                     <div class="form-group row">
                                         <div class="col-md-1"></div>                            
                                        <div class="col-md-2">                            
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio3" id="rad-5" <?php if($pp->pp_f4_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-5">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio3" id="rad-6" <?php if($pp->pp_f4_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-6">No</label>
                                            </div>                                        
                                        </div>
                                     </div><hr>   
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="alert alert-secondary" role="alert">
                                                Stripe / Check Fabric :
                                            </div>                                                       
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="pp_f5_1" class="form-control" placeholder="Stripe / Check Fabric" value="<?php echo $pp->pp_f5_1 ?>">
                                        </div>     
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">Bowing percentage</div>
                                        <div class="col-md-3">In fabric form</div>
                                        <div class="col-md-4"><input type="text" name="pp_f5_2" class="form-control" placeholder="%" value="<?php echo $pp->pp_f5_2 ?>"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-3">What percentage is approved in panel / garment form</div>
                                        <div class="col-md-4"><input type="text" name="pp_f5_3" class="form-control" placeholder="%" value="<?php echo $pp->pp_f5_3 ?>"></div>
                                    </div><hr>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="alert alert-secondary" role="alert">
                                            Lace / Stripe / Check Fabric Repeat Variations:
                                        </div>                                                       
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="pp_f6_1" class="form-control" placeholder="Lace / Stripe / Check  Fabric Repeat Variations" value="<?php echo $pp->pp_f6_1 ?>">
                                    </div>     
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-1">As per Spec</div>
                                    <div class="col-md-3">                                        
                                    </div>
                                    <div class="col-md-1">Repeat Length</div>
                                    <div class="col-md-3"><input type="text" class="form-control" name="pp_f6_3" placeholder="Repeat Length" value="<?php echo $pp->pp_f6_3 ?>"></div>
                                    <div class="col-md-1">Tolerance</div>
                                    <div class="col-md-3"><input type="text" class="form-control" name="pp_f6_4" placeholder="Tolerance" value="<?php echo $pp->pp_f6_4 ?>"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2">Repeat variation in fabric form</div>
                                    <div class="col-md-4"><input type="text" class="form-control" name="pp_f6_5" placeholder="Repeat variation in fabric form" value="<?php echo $pp->pp_f6_5 ?>"></div>
                                    <div class="col-md-3">What percentage is approved in panel & garment form</div>
                                    <div class="col-md-3"><input type="text" class="form-control" name="pp_f6_6" placeholder="What percentage is approved in panel & garment form" value="<?php echo $pp->pp_f6_6 ?>"></div>
                                </div><hr>
                                 <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="alert alert-secondary" role="alert">What method is used to identify fabric Technical Face side ?</div>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="pp_f7_1" class="form-control" placeholder="Method which used to identify fabric Technical Face side ?" value="<?php echo $pp->pp_f7_1 ?>">
                                    </div>     
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="alert alert-secondary" role="alert">Technical Face</div>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="pp_f7_4" placeholder="Technical Face" value="<?php echo $pp->pp_f7_4 ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8">
                                        <div class="alert alert-secondary" role="alert">Did you issue an approved fabric hanger indicating "Garment Face" to Cutting & Production ? </div>
                                    </div>
                                    <div class="col-md-2">                                                                    
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="radio4" id="rad-7" <?php if($pp->pp_f7_2 == "YES"){echo "checked";} ?>>
                                            <label for="rad-7">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="radio4" id="rad-8" <?php if($pp->pp_f7_2 == "NO"){echo "checked";} ?>>
                                            <label for="rad-8">No</label>
                                        </div>                                                                                
                                    </div>     
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2">If Not</div>
                                    <div class="col-md-4"><input type="text" name="pp_f7_3" class="form-control" placeholder="Issuing Time" value="<?php echo $pp->pp_f7_3 ?>"></div>                                    
                                </div><hr>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <div class="alert alert-secondary" role="alert">Special Requirements</div>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="pp_f8_1" class="form-control" placeholder="Heat Seal/Print Embroidery/Fusing/Lamination" value="<?php echo $pp->pp_f8_1 ?>">                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <div class="alert alert-secondary" role="alert">Standart availability & Approval</div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="radio5" id="rad-9" <?php if($pp->pp_f8_2 == "YES"){echo "checked";} ?>>
                                            <label for="rad-9">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="radio5" id="rad-10" <?php if($pp->pp_f8_2 == "NO"){echo "checked";} ?>>
                                            <label for="rad-10">No</label>
                                        </div>                                                                                      
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2">If Yes</div>
                                    <div class="col-md-4"><input type="text" name="pp_f8_3" class="form-control" placeholder="Approve by (Supplier)" value="<?php echo $pp->pp_f8_3 ?>"></div>
                                    <div class="col-md-3">If not, Issuing Date</div>
                                    <div class="col-md-3"><input type="text" class="form-control" name="pp_f8_4" placeholder="Issuing Date" value="<?php echo $pp->pp_f8_4 ?>" id="date1"></div>
                                </div>
                                <div class="alert alert-secondary" role="alert">HS / Fussing / Laminating COnditions</div>
                                <div class="form-group row">
                                    <div class="col-md-3">Setting Temperature</div>
                                    <div class="col-md-3"><input type="text" name="pp_f8_5" class="form-control" placeholder="Setting Temperature" value="<?php echo $pp->pp_f8_5 ?>"></div>                                    
                                    <div class="col-md-3">Bond Strength</div>
                                    <div class="col-md-3"><input type="text" class="form-control" name="pp_f8_6" placeholder="Bond Strength" value="<?php echo $pp->pp_f8_6 ?>"></div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3">Glue Line Temperature</div>
                                    <div class="col-md-3"><input type="text" name="pp_f8_7" class="form-control" placeholder="Glue Line Temperature" value="<?php echo $pp->pp_f8_7 ?>"></div>                                    
                                    <div class="col-md-3">Feel of method</div>
                                    <div class="col-md-3"><input type="text" class="form-control" name="pp_f8_8" placeholder="Feel of method" value="<?php echo $pp->pp_f8_8 ?>"></div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3">Time</div>
                                    <div class="col-md-3"><input type="text" name="pp_f8_9" class="form-control" placeholder="TIme" value="<?php echo $pp->pp_f8_9 ?>"></div>
                                    <div class="col-md-3">Lamination Method</div>
                                    <div class="col-md-3">
                                        <select name="pp_f8_10" class="form-control">
                                            <option value="" selected="">Choose</option>
                                            <option value="1" <?php if($pp->pp_f8_10 == "1"){echo "selected=''";} ?>>Cool</option>                                            
                                            <option value="2" <?php if($pp->pp_f8_10 == "2"){echo "selected=''";} ?>>Hot</option>                                            
                                        </select>
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3">Pressure</div>
                                    <div class="col-md-3"><input type="text" name="pp_f8_11" class="form-control" placeholder="Pressure" value="<?php echo $pp->pp_f8_11 ?>"></div>                                    
                                    <div class="col-md-3">Lamination done at</div>
                                    <div class="col-md-3">
                                        <select name="pp_f8_12" class="form-control">
                                            <option value="" selected="">Choose</option>                 
                                            <option value="1" <?php if($pp->pp_f8_12 == "1"){echo "selected=''";} ?>>Sri Lanka</option>
                                            <option value="2" <?php if($pp->pp_f8_12 == "2"){echo "selected=''";} ?>>Offshow</option>                                            
                                        </select>
                                    </div>                                    
                                </div><hr>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <div class="alert alert-secondary" role="alert">Is this a washed garment ?</div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="radio6" id="rad-11" <?php if($pp->pp_f9_1 == "YES"){echo "checked";} ?>>
                                            <label for="rad-11">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="radio6" id="rad-12" <?php if($pp->pp_f9_1 == "NO"){echo "checked";} ?>>
                                            <label for="rad-12">No</label>
                                        </div>                                                                                      
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-1">If Yes</div>
                                    <div class="col-md-3"><input type="text" class="form-control" placeholder="Wash Method" name="pp_f9_2" value="<?php echo $pp->pp_f9_2 ?>"></div>
                                    <div class="col-md-3"><input type="text" class="form-control" placeholder="Recipe" name="pp_f9_3" value="<?php echo $pp->pp_f9_3 ?>"></div>
                                    <div class="col-md-3"><input type="text" class="form-control" placeholder="Comments" name="pp_f9_4" value="<?php echo $pp->pp_f9_4 ?>"></div>
                                </div><hr>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="alert alert-secondary" role="alert">Is there any colour shade variation in all colours ?</div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="radio7" id="rad-13" <?php if($pp->pp_f10_1 == "YES"){echo "checked";} ?>>
                                            <label for="rad-13">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="radio7" id="rad-14" <?php if($pp->pp_f10_1 == "NO"){echo "checked";} ?>>
                                            <label for="rad-14">No</label>
                                        </div>                                                                                      
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">If Yes (Tick the special instruction given)</div>
                                    <div class="col-md-4"><input type="text" placeholder="On Fabric / Lace / Elastic or ...." class="form-control" name="pp_f10_2"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-1">
                                         <div class="styled-checkbox">
                                            <input type="checkbox" name="checkbox" id="check-1" <?php if($pp->pp_f10_3 == "on"){echo "checked";} ?>>
                                            <label for="check-1"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-11">Batch to batch shade - B to -B separations & all shades are within the approved sahde band</div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-1">
                                         <div class="styled-checkbox">
                                            <input type="checkbox" name="checkbox2" id="check-2" <?php if($pp->pp_f10_4 == "on"){echo "checked";} ?>>
                                            <label for="check-2"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-11">Within the roll shade - use close-marker & within the garment shade is approved</div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-1">
                                         <div class="styled-checkbox">
                                            <input type="checkbox" name="checkbox3" id="check-3" <?php if($pp->pp_f10_5 == "on"){echo "checked";} ?>>
                                            <label for="check-3"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-11">Reject fabric / lace / elastic</div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-1">
                                         <div class="styled-checkbox">
                                            <input type="checkbox" name="checkbox4" id="check-4" <?php if($pp->pp_f10_6 == "on"){echo "checked";} ?>>
                                            <label for="check-4"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-11"><input type="text" class="form-control" placeholder="Any other, specify" name="pp_f10_7" value="<?php echo $pp->pp_f10_7 ?>"></div>
                                </div><hr>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="alert alert-secondary" role="alert">Any adverse reaction on fabric ?</div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="radio8" id="rad-15" <?php if($pp->pp_f11_1 == "YES"){echo "checked";} ?>>
                                            <label for="rad-15">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="radio8" id="rad-16" <?php if($pp->pp_f11_1 == "NO"){echo "checked";} ?>>
                                            <label for="rad-16">No</label>
                                        </div>                                                                  
                                    </div>                                
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-1">If Yes</div>
                                    <div class="col-md-3">
                                        <select name="pp_f11_2" class="form-control">
                                            <option value="1" <?php if($pp->pp_f11_2 == "1"){echo "selected=''";} ?>>Shrinkage</option>                              
                                            <option value="2" <?php if($pp->pp_f11_2 == "2"){echo "selected=''";} ?>>Growing</option>                                            
                                        </select>
                                    </div>
                                    <div class="col-md-3"><input type="text" class="form-control" placeholder="Lengthwise %" name="pp_f11_3" value="<?php echo $pp->pp_f11_3 ?>"></div>
                                    <div class="col-md-3"><input type="text" class="form-control" placeholder="Widthwise %" name="pp_f11_4" value="<?php echo $pp->pp_f11_4 ?>"></div>                                    
                                </div><hr>
                                <div class="alert alert-secondary" role="alert">Fabric / Marker Width</div>
                                <div class="form-group row">
                                    <div class="col-md-2">Spec</div>
                                    <div class="col-md-4"><input type="text" class="form-control" name="pp_f12_1" placeholder="Spec" value="<?php echo $pp->pp_f12_1 ?>"></div>
                                    <div class="col-md-2">Usable</div>
                                    <div class="col-md-4"><input type="text" class="form-control" name="pp_f12_2" placeholder="(cm/inch)" value="<?php echo $pp->pp_f12_2 ?>"></div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <div class="alert alert-secondary" role="alert">Special Comments</div>
                                    </div>
                                    <div class="col-md-8"><textarea name="pp_f13_1" class="form-control" placeholder="Special Comments"><?php echo $pp->pp_f13_1 ?></textarea></div>
                                </div>
                                <div class="alert alert-secondary" role="alert">
                                    Pilot Cut
                                 </div>  
                                <div class="alert alert-secondary" role="alert">Releasing of Fabric & Trims for Production - Date & Time</div>
                                <div class="form-group row">
                                    <div class="col-md-1">Date</div>
                                    <div class="col-md-3"><input type="text" name="pp_pc2_1" class="form-control" value="<?php echo $pp->pp_pc2_1 ?>" id="date2"></div>
                                    <div class="col-md-1">Time</div>
                                    <div class="col-md-2"><input type="time" name="pp_pc2_2" class="form-control" value="<?php echo $pp->pp_pc2_2 ?>"></div>
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
                            <div class="tab-pane" id="tab2">                                    
                                <div class="section-title mt-5 mb-5">
                                    <h4>Master Pattern</h4>
                                </div>  
                                   <div class="form-group row">
                                    <div class="col-md-8">
                                        <div class="alert alert-secondary" role="alert">Has the sample been fitted on a live / dummy ?</div>
                                    </div>
                                    <div class="col-md-2">                
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="radio21" id="rad-44" <?php if($pl->pl_mp3_1 == "YES"){echo "checked";} ?>>
                                            <label for="rad-44">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="radio21" id="rad-45" <?php if($pl->pl_mp3_1 == "NO"){echo "checked";} ?>>
                                            <label for="rad-45">No</label>
                                        </div>                                                              
                                    </div>     
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-1">If Yes,</div>                                    
                                    <div class="col-md-6"><textarea name="pl_mp3_2" class="form-control" placeholder="Comments"><?php echo $pl->pl_mp3_2 ?></textarea></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-1">If Not,</div>
                                    <div class="col-md-4"><input type="text" class="form-control" placeholder="Action" name="pl_mp3_3" value="<?php echo $pl->pl_mp3_3 ?>"></div>
                                    <div class="col-md-3"><input type="text" class="form-control" placeholder="Action By" name="pl_mp3_4" value="<?php echo $pl->pl_mp3_4 ?>"></div>                                    
                                </div>  
                               <!--  <div class="section-title mt-5 mb-5">
                                    <h4>Meterials</h4>
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
                                                            <input type="checkbox" name="checkbox5" id="check-5" <?php if($pl->pl_me1_1 == "on"){echo "checked";} ?>>
                                                            <label for="check-5"></label>
                                                        </div>                                                    
                                                   </td>
                                                   <td>Fabric pre-production notes availability</td>
                                                   <td><input type="text" name="pl_me1_5" class="form-control" value="<?php echo $pl->pl_me1_5 ?>"></td>
                                                   <td><input type="text" name="pl_me1_6" class="form-control" value="<?php echo $pl->pl_me1_6 ?>"></td>
                                               </tr>                                               
                                                <tr>                                                   
                                                   <td>                                                    
                                                        <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox6" id="check-6" <?php if($pl->pl_me1_2 == "on"){echo "checked";} ?>>
                                                            <label for="check-6"></label>
                                                        </div>                                                    
                                                   </td>
                                                   <td>Fabric defects card availabilty</td>
                                                   <td><input type="text" name="pl_me1_7" class="form-control" value="<?php echo $pl->pl_me1_7 ?>"></td>
                                                   <td><input type="text" name="pl_me1_8" class="form-control" value="<?php echo $pl->pl_me1_8 ?>"></td>
                                               </tr>                                               
                                               <tr>                                                   
                                                   <td>                                                    
                                                        <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox7" id="check-7" <?php if($pl->pl_me1_3 == "on"){echo "checked";} ?>>
                                                            <label for="check-7"></label>
                                                        </div>                                                    
                                                   </td>
                                                   <td>HS/Emb/Print/Fusing/Moulding/Lamination Standart & conditions</td>
                                                   <td><input type="text" name="pl_me1_9" class="form-control" value="<?php echo $pl->pl_me1_9 ?>"></td>
                                                   <td><input type="text" name="pl_me1_10" class="form-control" value="<?php echo $pl->pl_me1_10 ?>"></td>
                                               </tr>                                               
                                               <tr>                                                   
                                                   <td>                                                    
                                                        <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox8" id="check-8" <?php if($pl->pl_me1_4 == "on"){echo "checked";} ?>>
                                                            <label for="check-8"></label>
                                                        </div>                                                    
                                                   </td>
                                                   <td>Colour Shades / Fabric defects</td>
                                                   <td><input type="text" name="pl_me1_11" class="form-control" value="<?php echo $pl->pl_me1_11 ?>"></td>
                                                   <td><input type="text" name="pl_me1_12" class="form-control" value="<?php echo $pl->pl_me1_12 ?>"></td>
                                               </tr>                                    
                                           </tbody>
                                       </table>                                                           
                                    </div> <hr>
                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <div class="alert alert-secondary" role="alert">Is there any thing to be added / ammended on the answers / comments/made at the pre-production meeting</div>
                                    </div>                                  
                                    <div class="col-md-2">
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="radio9" id="rad-17" <?php if($pl->pl_me2_1 == "YES"){echo "checked";} ?>>
                                            <label for="rad-17">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="radio9" id="rad-18" <?php if($pl->pl_me2_1 == "NO"){echo "checked";} ?>>
                                            <label for="rad-18">No</label>
                                        </div>                                                                                     
                                    </div>
                                </div>    
                                <div class="form-group row">
                                    <div class="col-md-1">If Yes,</div>
                                    <div class="col-md-2">Questions</div>
                                    <div class="col-md-3"><textarea name="pl_me2_2" class="form-control" placeholder="Questions"><?php echo $pl->pl_me2_2 ?></textarea></div>
                                    <div class="col-md-2">Amandement</div>
                                    <div class="col-md-4">
                                        <textarea name="pl_me2_3" class="form-control" placeholder="Amandement"><?php echo $pl->pl_me2_3 ?></textarea>
                                    </div>                                    
                                </div><hr>                             
                                <div class="alert alert-secondary" role="alert">Fabric Technical Specifications & Compositions</div> 
                                <div class="form-group row">
                                    <div class="col-md-4">Part(s)</div>
                                    <div class="col-md-8"><input type="text" name="pl_me3_1" class="form-control" placeholder="Part(s)" value="<?php echo $pl->pl_me3_1 ?>"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Fabric Quality (Ref#)</div>
                                    <div class="col-md-8"><input type="text" name="pl_me3_2" class="form-control" placeholder="Fabric Quality (Ref#)" value="<?php echo $pl->pl_me3_2 ?>"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Knitting method / woven</div>
                                    <div class="col-md-8"><input type="text" name="pl_me3_3" class="form-control" placeholder="Knitting method / woven" value="<?php echo $pl->pl_me3_3 ?>"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Composition</div>
                                    <div class="col-md-8"><input type="text" name="pl_me3_4" class="form-control" placeholder="Composition" value="<?php echo $pl->pl_me3_4 ?>"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Weight gms/m<sub>2</sub></div>
                                    <div class="col-md-8"><input type="text" name="pl_me3_5" class="form-control" placeholder="Weight gms/m2" value="<?php echo $pl->pl_me3_5 ?>"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Test method & /Result</div>
                                    <div class="col-md-8"><input type="text" name="pl_me3_6" class="form-control" placeholder="Test method & /Result" value="<?php echo $pl->pl_me3_6 ?>"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Stability (Length / widthwise)</div>
                                    <div class="col-md-8"><input type="text" name="pl_me3_7" class="form-control" placeholder="Stability (Length / widthwise)" value="<?php echo $pl->pl_me3_7 ?>"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">Composition details of wash care table instructions</div>
                                    <div class="col-md-8"><input type="text" name="pl_me3_8" class="form-control" placeholder="Composition details of wash care table instructions" value="<?php echo $pl->pl_me3_8 ?>"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <div class="alert alert-secondary" role="alert">Do these two match together (Fabric composition & wash care lable instructions) ?</div>
                                    </div>                                  
                                    <div class="col-md-2">
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="radio10" id="rad-19" <?php if($pl->pl_me3_9 == "YES"){echo "checked";} ?>>
                                            <label for="rad-19">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="radio10" id="rad-20" <?php if($pl->pl_me3_9 == "NO"){echo "checked";} ?>>
                                            <label for="rad-20">No</label>
                                        </div>                                                                                     
                                    </div>
                                </div>                          
                                <div class="form-group row">
                                    <div class="col-md-1">If Not</div>
                                    <div class="col-md-3"><input type="text" name="pl_me3_10" class="form-control" placeholder="Action" value="<?php echo $pl->pl_me3_10 ?>"></div>
                                    <div class="col-md-3"><input type="text" name="pl_me3_11" class="form-control" placeholder="Action By" value="<?php echo $pl->pl_me3_11 ?>"></div>
                                    <div class="col-md-3"><input type="text" name="pl_me3_12" class="form-control" placeholder="Date" value="<?php echo $pl->pl_me3_12 ?>" id="date3"></div>
                                </div><hr>  
                                    <div class="alert alert-secondary" role="alert">Trims inspection and approval</div>
                                    <div class="form-group row">
                                        <div class="col-md-2">Thread</div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Approved By" name="pl_me4_1" value="<?php echo $pl->pl_me4_1 ?>"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Date" name="pl_me4_2" value="<?php echo $pl->pl_me4_2 ?>" id="date4"></div>
                                        <div class="col-md-4"><input type="text" class="form-control" placeholder="Comments" name="pl_me4_3" value="<?php echo $pl->pl_me4_3 ?>"></div>
                                    </div>
                                    <div class="form-group row">
                                      <div class="col-md-2">Elastic</div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Approved By" name="pl_me4_4" value="<?php echo $pl->pl_me4_4 ?>"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Date" name="pl_me4_5" value="<?php echo $pl->pl_me4_5 ?>" id="date5"></div>
                                        <div class="col-md-4"><input type="text" class="form-control" placeholder="Comments" name="pl_me4_6" value="<?php echo $pl->pl_me4_6 ?>"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">Lables</div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Approved By" name="pl_me4_7" value="<?php echo $pl->pl_me4_7 ?>"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Date" name="pl_me4_8" value="<?php echo $pl->pl_me4_8 ?>" id="date6"></div>
                                        <div class="col-md-4"><input type="text" class="form-control" placeholder="Comments" name="pl_me4_9" value="<?php echo $pl->pl_me4_9 ?>"></div>
                                    </div>
                                <div class="form-group row">
                                    <div class="col-md-5">
                                        <div class="alert alert-secondary" role="alert">Any Special comments & / or care to be taken</div>
                                    </div>
                                    <div class="col-md-7"><textarea name="pl_me5_1" class="form-control" placeholder="Special Comments"><?php echo $pl->pl_me5_1 ?></textarea></div>
                                </div><hr>
                                <div class="section-title mt-5 mb-5">
                                    <h4>MAKE UP PILOT</h4>
                                </div>  
                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <div class="alert alert-secondary" role="alert">A standart gmt has been displayed in line signed by FM, PM Technician, TM, QAM</div>
                                    </div>                                  
                                    <div class="col-md-2">
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="radio11" id="rad-21" <?php if($pl->pl_mu4_1 == "YES"){echo "checked";} ?>>
                                            <label for="rad-21">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="radio11" id="rad-22" <?php if($pl->pl_mu4_1 == "NO"){echo "checked";} ?>>
                                            <label for="rad-22">No</label>
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
                                <div class="section-title mt-5 mb-5">
                                    <h4>GARMENT APPRAISAL</h4>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8">
                                        <div class="alert alert-secondary" role="alert">Was there any noticeable difference in the gmt after washing ?</div>
                                    </div>                                  
                                    <div class="col-md-4">
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="radio12" id="rad-23" <?php if($pl2->pl_ga2_1 == "YES"){echo "checked";} ?>>
                                            <label for="rad-23">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="radio12" id="rad-24" <?php if($pl2->pl_ga2_1 == "NO"){echo "checked";} ?>>
                                            <label for="rad-24">No</label>
                                        </div>                                                                                     
                                        <div class="styled-radio">
                                            <input type="radio" value="NOT APPLICABLE" name="radio12" id="rad-25" <?php if($pl2->pl_ga2_1 == "NOT APPLICABLE"){echo "checked";} ?>>
                                            <label for="rad-25">Not Applicable</label>
                                        </div>                                                                                     
                                    </div>
                                </div>  
                                <div class="form-group row">
                                    <div class="col-md-1">If Yes,</div>
                                    <div class="col-md-4"><input type="text" class="form-control" placeholder="Difference" name="pl_ga2_2" value="<?php echo $pl2->pl_ga2_2 ?>"></div>
                                    <div class="col-md-3"><input type="text" class="form-control" placeholder="Action" name="pl_ga2_3" value="<?php echo $pl2->pl_ga2_3 ?>"></div>
                                    <div class="col-md-3"><input type="text" class="form-control" placeholder="Action By" name="pl_ga2_4" value="<?php echo $pl2->pl_ga2_4 ?>"></div>
                                </div><hr> -->
                                 <div class="section-title mt-5 mb-5">
                                    <h4>QUALITY ASSURANCE</h4>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8">
                                        <div class="alert alert-secondary" role="alert">Are the pilot garments shippable ?</div>
                                    </div>                                  
                                    <div class="col-md-4">
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="radio13" id="rad-26" <?php if($pl2->pl_qa1_1 == "YES"){echo "checked";} ?>>
                                            <label for="rad-26">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="radio13" id="rad-27" <?php if($pl2->pl_qa1_1 == "NO"){echo "checked";} ?>>
                                            <label for="rad-27">No</label>
                                        </div>                                                                                     
                                    </div>
                                </div>  
                                <div class="form-group row">
                                    <div class="col-md-1">If Not,</div>
                                    <div class="col-md-4"><input type="text" class="form-control" placeholder="Reason" name="pl_qa1_2" value="<?php echo $pl2->pl_qa1_2 ?>"></div>
                                    <div class="col-md-3"><input type="text" class="form-control" placeholder="Action Required" name="pl_qa1_3" value="<?php echo $pl2->pl_qa1_3 ?>"></div>
                                    <div class="col-md-3"><input type="text" class="form-control" placeholder="Action By" name="pl_qa1_4" value="<?php echo $pl2->pl_qa1_4 ?>"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-1">If Yes,</div>
                                    <div class="col-md-5">What are the comments on pilot garments appraised ?</div>
                                    <div class="col-md-6"><textarea name="pl_qa1_5" class="form-control" placeholder="Comments"><?php echo $pl2->pl_qa1_5 ?></textarea></div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-md-8">
                                        <div class="alert alert-secondary" role="alert">Is the Process Capability Chart Available ?</div>
                                    </div>                                  
                                    <div class="col-md-4">
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="radio14" id="rad-28" <?php if($pl2->pl_qa2_1 == "YES"){echo "checked";} ?>>
                                            <label for="rad-28">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="radio14" id="rad-29" <?php if($pl2->pl_qa2_1 == "NO"){echo "checked";} ?>>
                                            <label for="rad-29">No</label>
                                        </div>                                                                                     
                                    </div>
                                </div>  
                                <div class="form-group row">
                                    <div class="col-md-1">If Yes,</div>
                                    <div class="col-md-5">What are the comments  ?</div>
                                    <div class="col-md-6"><textarea name="pl_qa2_2" class="form-control" placeholder="Comments"><?php echo $pl2->pl_qa2_2 ?></textarea></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3">If Not, Reissuing Date</div>
                                    <div class="col-md-4"><input type="text" class="form-control" placeholder="Re issuing date" name="pl_qa2_3" value="<?php echo $pl2->pl_qa2_3 ?>" id="date7"></div>
                                    <div class="col-md-3"><input type="text" class="form-control" placeholder="Action By" name="pl_qa2_4" value="<?php echo $pl2->pl_qa2_4 ?>"></div>                                    
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
