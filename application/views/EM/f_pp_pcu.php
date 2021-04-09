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
                <h4>PCU Department</h4>
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
                                                <span class="title">Pilot Apprasial</span>
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
                                    <?php echo form_open('subform/form_pcu/'.$id); ?>
                                    <div class="section-title mt-5 mb-5">
                                        <h4>Merchandising</h4>
                                    </div>
                                    <div class="alert alert-secondary" role="alert">
                                           Are completed apporoved trim cards for all colours issued to relevant depts. (FM,RM,CU,PR & QA) ?
                                    </div>                                    
                                    <div class="form-group row">                                        
                                        <div class="col-md-1"></div>                            
                                        <div class="col-md-2">                            
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio1" id="rad-1" <?php if($pp->pp_m2_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-1">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio1" id="rad-2" <?php if($pp->pp_m2_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-2">No</label>
                                            </div>                                        
                                        </div>
                                        <div class="col-md-1">If Not</div>
                                        <div class="col-md-3">
                                            <textarea name="pp_m2_2" class="form-control" placeholder="Reason"><?php echo $pp->pp_m2_2 ?></textarea>
                                        </div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pp_m2_3" placeholder="Action By" value="<?php echo $pp->pp_m2_3 ?>"></div>
                                        <div class="col-md-2"><input type="text" class="form-control" name="pp_m2_4" placeholder="Issuing Date" id="date1" value="<?php echo $pp->pp_m2_4 ?>"></div>
                                    </div><hr>
                                    <div class="alert alert-secondary" role="alert">
                                          Is there any discrepancies between Trim Card & Approved Standart ?
                                    </div>                                    
                                    <div class="form-group row">                                        
                                        <div class="col-md-1"></div>                            
                                        <div class="col-md-2">                            
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio2" id="rad-3" <?php if($pp->pp_m3_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-3">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio2" id="rad-4" <?php if($pp->pp_m3_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-4">No</label>
                                            </div>                                        
                                        </div>
                                        <div class="col-md-1">If Yes</div>
                                        <div class="col-md-8">
                                            <textarea name="pp_m3_2" class="form-control" placeholder="Reason / Action"><?php echo $pp->pp_m3_2 ?></textarea><br>
                                            <div class="alert alert-secondary" role="alert">
                                                Have you seen approved standart for such disrepancies ?
                                            </div>
                                            <div class="styled-radio">
                                                <input type="radio"value="YES"  name="radio3" id="rad-5" <?php if($pp->pp_m3_3 == "YES"){echo "checked";} ?>>
                                                <label for="rad-5">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio3" id="rad-6" <?php if($pp->pp_m3_3 == "NO"){echo "checked";} ?>>
                                                <label for="rad-6">No</label>
                                            </div>
                                        </div>
                                    </div><hr>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            </thead>
                                            <tbody>
                                                <tr>   
                                                    <th colspan="2">Are the following documents available & distributed ?</th>
                                                    <th rowspan="4" class="align-middle">If not</th>
                                                    <th>Issuing Date</th>
                                                    <th>Action By</th>
                                                </tr>
                                                <tr>
                                                    <td>MPO</td>
                                                    <td>
                                                        <div class="styled-radio">
                                                            <input type="radio" value="YES" name="radio4" id="rad-7" <?php if($pp->pp_m4_1 == "YES"){echo "checked";} ?>>
                                                            <label for="rad-7">Yes</label>
                                                        </div>                                        
                                                        <div class="styled-radio">
                                                            <input type="radio" value="NO" name="radio4" id="rad-8" <?php if($pp->pp_m4_1 == "NO"){echo "checked";} ?>>
                                                            <label for="rad-8">No</label>
                                                        </div>
                                                        <div class="styled-radio">
                                                            <input type="radio" value="NOT APPLICABLE" name="radio4" id="rad-9" <?php if($pp->pp_m4_1 == "NOT APPLICABLE"){echo "checked";} ?>>
                                                            <label for="rad-9">Not Applicable</label>
                                                        </div>
                                                    </td>
                                                    <td><input type="text" class="form-control" id="date2" name="pp_m4_4" value="<?php echo $pp->pp_m4_4 ?>"></td>
                                                    <td><input type="text" class="form-control" name="pp_m4_7" value="<?php echo $pp->pp_m4_7 ?>"></td>                                                    
                                                </tr>
                                                <tr>
                                                    <td>BOM</td>
                                                    <td>
                                                        <div class="styled-radio">
                                                            <input type="radio" value="YES" name="radio5" id="rad-10" <?php if($pp->pp_m4_2 == "YES"){echo "checked";} ?>>
                                                            <label for="rad-10">Yes</label>
                                                        </div>                                        
                                                        <div class="styled-radio">
                                                            <input type="radio" value="NO" name="radio5" id="rad-11" <?php if($pp->pp_m4_2 == "NO"){echo "checked";} ?>>
                                                            <label for="rad-11">No</label>
                                                        </div>                                            
                                                    </td>                                                    
                                                    <td><input type="text" class="form-control" id="date3" name="pp_m4_5" value="<?php echo $pp->pp_m4_5 ?>"></td>
                                                    <td><input type="text" class="form-control" name="pp_m4_8" value="<?php echo $pp->pp_m4_8 ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>LOF</td>
                                                    <td>
                                                        <div class="styled-radio">
                                                            <input type="radio" value="YES" name="radio6" id="rad-12" <?php if($pp->pp_m4_3 == "YES"){echo "checked";} ?>>
                                                            <label for="rad-12">Yes</label>
                                                        </div>                                        
                                                        <div class="styled-radio">
                                                            <input type="radio" value="NO" name="radio6" id="rad-13" <?php if($pp->pp_m4_3 == "NO"){echo "checked";} ?>>
                                                            <label for="rad-13">No</label>
                                                        </div>
                                                        <div class="styled-radio">
                                                            <input type="radio" value="NOT APPLICABLE" name="radio6" id="rad-14" <?php if($pp->pp_m4_3 == "NOT APPLICABLE"){echo "checked";} ?>>
                                                            <label for="rad-14">Not Applicable</label>
                                                        </div>
                                                    </td>
                                                    <td><input type="text" class="form-control" id="date4" name="pp_m4_6" value="<?php echo $pp->pp_m4_6 ?>"></td>
                                                    <td><input type="text" class="form-control" name="pp_m4_9" value="<?php echo $pp->pp_m4_9 ?>"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><hr>
                                    <!-- <div class="alert alert-secondary" role="alert">
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
                                    </div><hr> -->
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <div class="alert alert-secondary" role="alert">Any special comment or instruction</div>    
                                        </div>
                                        <div class="col-md-6"><textarea name="pp_m7_1" class="form-control" placeholder="Comments"><?php echo $pp->pp_m7_1 ?></textarea></div>    
                                    </div><hr>
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
                                        <h4>Presentation Check / Merchandising</h4>
                                    </div>   
                                     <div class="alert alert-secondary" role="alert">
                                           Only if, there were any of followings pending / not resolved / by the Pre-Production meeting.
                                    </div>                                 
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
                                                            <input type="checkbox" name="checkbox" id="check-1" <?php if($pl2->pl_pc1_1 == "on"){echo "checked";} ?>>
                                                            <label for="check-1"></label>
                                                        </div>
                                                   </td>
                                                   <td>Complete Trim Card Received for all colours</td>
                                                   <td><input type="text" name="pl_pc1_5" class="form-control" value="<?php echo $pl2->pl_pc1_5 ?>"></td>
                                                   <td><input type="text" name="pl_pc1_6" class="form-control" value="<?php echo $pl2->pl_pc1_6 ?>"></td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox2" id="check-2" <?php if($pl2->pl_pc1_2 == "on"){echo "checked";} ?>>
                                                            <label for="check-2"></label>
                                                        </div>
                                                   </td>
                                                   <td>Discrepancies between trim card and approved trims</td>
                                                   <td><input type="text" name="pl_pc1_7" class="form-control" value="<?php echo $pl2->pl_pc1_7 ?>"></td>
                                                   <td><input type="text" name="pl_pc1_8" class="form-control" value="<?php echo $pl2->pl_pc1_8 ?>"></td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox3" id="check-3" <?php if($pl2->pl_pc1_3 == "on"){echo "checked";} ?>>
                                                            <label for="check-3"></label>
                                                        </div>
                                                   </td>
                                                   <td>Document Availablitiy MPO, BOM, LOF</td>
                                                   <td><input type="text" name="pl_pc1_9" class="form-control" value="<?php echo $pl2->pl_pc1_9 ?>"></td>
                                                   <td><input type="text" name="pl_pc1_10" class="form-control" value="<?php echo $pl2->pl_pc1_10 ?>"></td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox4" id="check-4" <?php if($pl2->pl_pc1_4 == "on"){echo "checked";} ?>>
                                                            <label for="check-4"></label>
                                                        </div>
                                                   </td>
                                                   <td>Packing method & standart</td>
                                                   <td><input type="text" name="pl_pc1_11" class="form-control" value="<?php echo $pl2->pl_pc1_11 ?>"></td>
                                                   <td><input type="text" name="pl_pc1_12" class="form-control" value="<?php echo $pl2->pl_pc1_12 ?>"></td>
                                               </tr>
                                           </tbody>
                                       </table>                                                           
                                    </div>   <hr>                                     
                                    <div class="alert alert-secondary" role="alert">
                                        Are fabrics & trims available for all colours ?
                                    </div>                                             
                                    <div class="form-group row">
                                        <div class="col-md-1">                            
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio8" id="rad-17" <?php if($pl2->pl_pc2_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-17">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio8" id="rad-18" <?php if($pl2->pl_pc2_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-18">No</label>
                                            </div>                                        
                                        </div>    
                                        <div class="col-md-1">If Not</div>                            
                                        <div class="col-md-2">
                                            <input type="text" class="form-control" name="pl_pc2_2" placeholder="Item & Colour" value="<?php echo $pl2->pl_pc2_2 ?>">
                                            <input type="text" class="form-control" name="pl_pc2_4" placeholder="Item & Colour" value="<?php echo $pl2->pl_pc2_4 ?>">
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control" name="pl_pc2_3" placeholder="Receive Date" id="date6" value="<?php echo $pl2->pl_pc2_3 ?>">
                                            <input type="text" class="form-control" name="pl_pc2_7" placeholder="Receive Date" id="date7" value="<?php echo $pl2->pl_pc2_7 ?>">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="pl_pc2_5" placeholder="Action By" value="<?php echo $pl2->pl_pc2_5 ?>">
                                            <input type="text" class="form-control" name="pl_pc2_6" placeholder="Action By" value="<?php echo $pl2->pl_pc2_6 ?>">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="pl_pc2_8" placeholder="Comments" value="<?php echo $pl2->pl_pc2_8 ?>">
                                            <input type="text" class="form-control" name="pl_pc2_9" placeholder="Comments" value="<?php echo $pl2->pl_pc2_9 ?>">
                                        </div>                                                    
                                    </div>    <hr>
                                     <div class="alert alert-secondary" role="alert">
                                         Are the followings correct according to the spec ?
                                     </div> 
                                    <div class="form-group row">
                                        <div class="col-md-2">Bag/Box/Packlabel</div>
                                        <div class="col-md-1">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio9" id="rad-19" <?php if($pl2->pl_pc3_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-19">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio9" id="rad-20" <?php if($pl2->pl_pc3_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-20">No</label>
                                            </div>  
                                        </div>
                                        <div class="col-md-1">If Not</div>
                                        <div class="col-md-3"><input type="text" class="form-control" value="<?php echo $pl2->pl_pc3_5 ?>" name="pl_pc3_5" placeholder="Action"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" value="<?php echo $pl2->pl_pc3_6 ?>" name="pl_pc3_6" placeholder="Action By"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">UPC Number</div>
                                        <div class="col-md-1">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio10" id="rad-21" <?php if($pl2->pl_pc3_2 == "YES"){echo "checked";} ?>>
                                                <label for="rad-21">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio10" id="rad-22" <?php if($pl2->pl_pc3_2 == "NO"){echo "checked";} ?>>
                                                <label for="rad-22">No</label>
                                            </div>  
                                        </div>
                                        <div class="col-md-1">If Not</div>
                                        <div class="col-md-3"><input type="text" class="form-control" value="<?php echo $pl2->pl_pc3_7 ?>" name="pl_pc3_7" placeholder="Action"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" value="<?php echo $pl2->pl_pc3_8 ?>" name="pl_pc3_8" placeholder="Action By"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">Garment Label</div>
                                        <div class="col-md-1">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio11" id="rad-23" <?php if($pl2->pl_pc3_3 == "YES"){echo "checked";} ?>>
                                                <label for="rad-23">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio11" id="rad-24" <?php if($pl2->pl_pc3_3 == "NO"){echo "checked";} ?>>
                                                <label for="rad-24">No</label>
                                            </div>  
                                        </div>
                                        <div class="col-md-1">If Not</div>
                                        <div class="col-md-3"><input type="text" class="form-control" value="<?php echo $pl2->pl_pc3_9 ?>" name="pl_pc3_9" placeholder="Action"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" value="<?php echo $pl2->pl_pc3_10 ?>" name="pl_pc3_10" placeholder="Action By"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">Display Criterion</div>
                                        <div class="col-md-1">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio12" id="rad-25" <?php if($pl2->pl_pc3_4 == "YES"){echo "checked";} ?>>
                                                <label for="rad-25">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio12" id="rad-26" <?php if($pl2->pl_pc3_4 == "NO"){echo "checked";} ?>>
                                                <label for="rad-26">No</label>
                                            </div>  
                                        </div>
                                        <div class="col-md-1">If Not</div>
                                        <div class="col-md-3"><input type="text" class="form-control" value="<?php echo $pl2->pl_pc3_11 ?>" name="pl_pc3_11" placeholder="Action"></div>
                                        <div class="col-md-3"><input type="text" class="form-control" value="<?php echo $pl2->pl_pc3_12 ?>" name="pl_pc3_12" placeholder="Action By"></div>
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
                                    <hr>
                                    <table class="table">                                        
                                          <tr>                                            
                                            <td>VPO Number</td>
                                            <td><input type="text" class="form-control" name="mc_input4" value="<?php echo $global->mc_input4 ?>" placeholder="VPO Number"></td>
                                          </tr>                                          
                                          <tr>
                                            <td>Fabric Ex Mill Date</td>
                                            <td><input type="date" class="form-control" name="mc_date1" value="<?php echo $global->mc_date1 ?>" placeholder=""></td>
                                            <td>Fabric In House Date</td>
                                            <td><input type="date" class="form-control" name="mc_date2" value="<?php echo $global->mc_date2 ?>" placeholder=""></td>
                                          </tr>  
                                    </table>
                                    <span class="text-primary">Trims/Components/Labels in House Date</span>
                                    <table class="table">
                                        <tr>
                                            <td>Trims</td>
                                            <td><input type="text" class="form-control" name="mc_input6" value="<?php echo $global->mc_input6 ?>" placeholder="Trims"></td>
                                            <td>Components</td>
                                            <td><input type="text" class="form-control" name="mc_input7" value="<?php echo $global->mc_input7 ?>" placeholder="Components"></td>
                                            <td>Labels</td>
                                            <td><input type="text" class="form-control" name="mc_input8" value="<?php echo $global->mc_input8 ?>" placeholder="Labels"></td>
                                        </tr>
                                    </table>
                                    <span class="text-primary">Color Breakdwon - Fabric (Ref to VPO)</span>
                                    <table class="table table-bordered table-sm">
                                        <tr class="bg-secondary text-white">
                                            <td>Color</td>
                                            <td>Color Code</td>
                                            <td>Units</td>
                                            <td width="1%">#</td>
                                        </tr>
                                        <tbody id="show_cbf">
                                            
                                        </tbody>  
                                        <tr>
                                            <td><input type="text" class="form-control" name="fcolor" placeholder="Color"></td>
                                            <td><input type="text" class="form-control" name="fcode" placeholder="Color Code"></td>
                                            <td><input type="text" class="form-control" name="funits" placeholder="Units"></td>
                                            <td><button type="button" class="btn btn-primary btn-sm btn_fabric"><i class="la la-plus"></i></button></td>
                                        </tr>
                                    </table>
                                    <span class="text-primary">Trims and Components - Specify</span><br>
                                    <span class="text-primary">Color Breakdwon - Trims (Ref to BOM and Approved) - Total 4 different trims</span>
                                     <table class="table table-bordered table-sm">
                                        <tr class="bg-secondary text-white">
                                            <td>Trims</td>
                                            <td>Color</td>
                                            <td>Color Code</td>
                                            <td>Units</td>
                                            <td width="1%">#</td>
                                        </tr>
                                        <tbody id="show_cbt">
                                            
                                        </tbody>  
                                        <tr>
                                            <td><input type="text" class="form-control" name="ttrims" placeholder="Trims"></td>
                                            <td><input type="text" class="form-control" name="tcolor" placeholder="Color"></td>
                                            <td><input type="text" class="form-control" name="tcode" placeholder="Color Code"></td>
                                            <td><input type="text" class="form-control" name="tunits" placeholder="Units"></td>
                                            <td><button type="button" class="btn btn-primary btn-sm btn_trims"><i class="la la-plus"></i></button></td>
                                        </tr>
                                    </table>
                                    <span class="text-primary"><h4>Order Ratio (specify)</h4></span><br>
                                    <table class="table">
                                        <tr>
                                            <td>Freight Class</td>
                                            <td>
                                                <div class="styled-radio">
                                                    <input type="radio" value="YES" name="mc_radio1" id="rad-7" <?php if ($global->mc_radio1 == "YES")echo "checked"; ?>>
                                                    <label for="rad-7">Yes</label>
                                                </div>
                                                <div class="styled-radio">
                                                    <input type="radio" value="NO" name="mc_radio1" id="rad-8" <?php if ($global->mc_radio1 == "NO")echo "checked"; ?>>
                                                    <label for="rad-8">No</label>
                                                </div>
                                            </td>
                                            <td>Packing Requirements</td>
                                            <td width="50%">
                                                <textarea name="mc_textarea2" class="form-control" placeholder="Packing Requirements"><?php echo $global->mc_textarea2 ?></textarea>
                                            </td>
                                        </tr>
                                    </table>
                                    <span class="text-primary"><h4>Critical Path - Key Must Achieve Dates</h4></span><br>
                                    <table class="table">
                                        <tr>
                                            <td width="30%">Risk Assessment Completion Date</td>
                                            <td><input type="text" class="form-control" name="mc_input9" value="<?php echo $global->mc_input9 ?>" placeholder="Risk Assessment Completion Date"></td>
                                        </tr>
                                        <tr>
                                            <td>Test Iot Completion Date</td>
                                            <td><input type="date" class="form-control" name="mc_date3" value="<?php echo $global->mc_date3 ?>" placeholder=""></td>
                                        </tr>
                                        <tr>
                                            <td>First Bulk Cut</td>
                                            <td><input type="text" class="form-control" name="mc_input10" value="<?php echo $global->mc_input10 ?>" placeholder="First Bulk Cut"></td>
                                        </tr>
                                        <tr>
                                            <td>First Bulk Audit</td>
                                            <td><input type="text" class="form-control" name="mc_input11" value="<?php echo $global->mc_input11 ?>" placeholder="First Bulk Audit"></td>
                                        </tr>
                                        <tr>
                                            <td>GAC Date</td>
                                            <td><input type="date" class="form-control" name="mc_date4" value="<?php echo $global->mc_date4 ?>" placeholder=""></td>
                                        </tr>
                                        <tr>
                                            <td>NDC Date</td>
                                            <td><input type="date" class="form-control" name="mc_date5" value="<?php echo $global->mc_date5 ?>" placeholder=""></td>
                                        </tr>
                                         <tr>
                                            <td>Floor Date</td>
                                            <td><input type="date" class="form-control" name="mc_date6" value="<?php echo $global->mc_date6 ?>" placeholder=""></td>
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

    $(document).ready(function(){

        view_cbf();
        view_cbt();
        function view_cbf() {
            var id = '<?php echo $this->uri->segment(3) ?>';
            $.ajax({
                url : "<?php echo site_url('index.php/scheduling_em/mastglobal_getcbf')?>/"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data){
                    var html = '';
                    var i;
                    var no = 1;
                    for(i=0; i<data.length; i++){   
                        html += "<tr class='text-center'>"+
                            "<td>"+data[i].color+"</td>"+
                            "<td>"+data[i].color_code+"</td>"+
                            "<td>"+data[i].units+"</td>"+
                            "<td><button type='button' class='btn btn-danger btn-sm delete-cbf' data='"+data[i].id+"'><i class='la la-trash'></i></button></td>"+
                            "</tr>";                                       
                    }
                    $('#show_cbf').html(html);        
                },
                error: function (jqXHR, textStatus, errorThrown){
                    alert('Error get data from ajax');
                  }
            });
        }

        function view_cbt() {
            var id = '<?php echo $this->uri->segment(3) ?>';
            $.ajax({
                url : "<?php echo site_url('index.php/scheduling_em/mastglobal_getcbt')?>/"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data){
                    var html = '';
                    var i;
                    var no = 1;
                    for(i=0; i<data.length; i++){   
                        html += "<tr class='text-center'>"+
                            "<td>"+data[i].trims+"</td>"+
                            "<td>"+data[i].color+"</td>"+
                            "<td>"+data[i].color_code+"</td>"+
                            "<td>"+data[i].units+"</td>"+
                            "<td><button type='button' class='btn btn-danger btn-sm delete-cbt' data='"+data[i].id+"'><i class='la la-trash'></i></button></td>"+
                            "</tr>";                                       
                    }
                    $('#show_cbt').html(html);        
                },
                error: function (jqXHR, textStatus, errorThrown){
                    alert('Error get data from ajax');
                  }
            });
        }

        $(".btn_fabric").click(function(){
            var id = '<?php echo $this->uri->segment(3) ?>';
            var fcolor = $('[name="fcolor"]').val();
            var fcode = $('[name="fcode"]').val();
            var funits = $('[name="funits"]').val();
            url = "<?php echo site_url('index.php/scheduling_em/mastglobal_add_cfabric/')?>"+id;                              
            $.ajax({
                url : url,
                type: "POST",                        
                dataType: "JSON",
                data : {color: fcolor, color_code: fcode, units: funits},                
                success: function(data)
                {
                    var fcolor = $('[name="fcolor"]').val('');
                    var fcode = $('[name="fcode"]').val('');
                    var funits = $('[name="funits"]').val('');
                    view_cbf();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        });

        $(".btn_trims").click(function(){
            var id = '<?php echo $this->uri->segment(3) ?>';
            var ttrims = $('[name="ttrims"]').val();
            var tcolor = $('[name="tcolor"]').val();
            var tcode = $('[name="tcode"]').val();
            var tunits = $('[name="tunits"]').val();
            url = "<?php echo site_url('index.php/scheduling_em/mastglobal_add_ctrims/')?>"+id;                              
            $.ajax({
                url : url,
                type: "POST",                        
                dataType: "JSON",
                data : {trims: ttrims, color: tcolor, color_code: tcode, units: tunits},                
                success: function(data)
                {
                    var ttrims = $('[name="ttrims"]').val('');
                    var tcolor = $('[name="tcolor"]').val('');
                    var tcode = $('[name="tcode"]').val('');
                    var tunits = $('[name="tunits"]').val('');
                    view_cbt();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        });

        $('#show_cbf').on('click','.delete-cbf',function(){
            var id = $(this).attr('data');  
            var result = confirm('Are you sure ?');
            if (result) {                   
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('index.php/scheduling_em/mastglobal_delcbf')?>",
                    dataType : "JSON",
                        data : {id: id},
                        success: function(data){                        
                            view_cbf();
                        }
                });
            }                                          
        });

        $('#show_cbt').on('click','.delete-cbt',function(){
            var id = $(this).attr('data');  
            var result = confirm('Are you sure ?');
            if (result) {                   
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('index.php/scheduling_em/mastglobal_delcbt')?>",
                    dataType : "JSON",
                        data : {id: id},
                        success: function(data){                        
                            view_cbt();
                        }
                });
            }                                          
        });

    });
</script>