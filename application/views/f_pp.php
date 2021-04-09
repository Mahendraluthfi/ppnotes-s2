<div class="row">
    <div class="col-xl-12">
        <div class="widget has-shadow">     
 	     	<div class="widget-body">
 	     		<div class="float-left">
 	     			<a href="<?php echo base_url('meeting/sign/'.$id) ?>" class="btn btn-default btn-sm">< Back</a>
 	     		</div>
 	     		<h3 class="text-center">PRE-PRODUCTION MEETING MINUTES</h3>
 	     		<hr>
                <?php echo form_open('meeting/subform_pp/'.$id); ?>
 	     		<div class="row">
 	     			<div class="col-md-6">
 	     				<div class="row">
 	     					<div class="col-md-4">Style No.</div>
 	     					<div class="col-md-8 text-success"><?php echo $get->style_no ?></div>
 	     				</div>
 	     				<div class="row">
 	     					<div class="col-md-4">Description</div>
 	     					<div class="col-md-8 text-success"><?php echo $get->remarks ?></div>
 	     				</div>
<!--  	     				<div class="row">
 	     					<div class="col-md-4">Planned Date</div>
 	     					<div class="col-md-8 text-success"><?php echo date('d M Y', strtotime($get->planned_date)) ?></div>
 	     				</div> -->
                        <br><br>
                        <div class="row">
                            <div class="col-md-4">Actual Date</div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="date_pp" id="date19" placeholder="Actual Date" value="<?php echo $pp->date_pp ?>">
                            </div>
                        </div>
 	     			</div> 	     			     				
 	     			<div class="col-md-6">	     				
 	     				<legend>Participants Meeting</legend>
 	     				<?php foreach ($att as $key) { ?>
 	     					<h5><?php echo $key->employee_name ?> <span class="text-danger">(<?php echo $key->department_name ?>)</span></h5>
 	     				<?php } ?> 	     				
 	     			</div>
 	     		</div> 	     		
        	</div>
    	</div>
    </div>
</div>

<div class="row">
	<div class="col-xl-12">
		<div id="accordion" class="accordion">
                    <!-- Begin Widget -->
                    <div class="widget has-shadow">
                      <!--   <div class="widget-header bordered no-actions d-flex align-items-center">
                            <h2>Basic Accordion</h2>
                        </div> -->
                        <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseOne">
                            <div class="card-title">MERCHANDISING</div>
                        </a>
                        <div id="collapseOne" class="card-body collapse show pt-0" data-parent="#accordion">
							<?php if(empty($pp->pp_m2_1 )) { ?>
                                <div class="alert alert-danger" role="alert">
                            <?php }else{ ?>
                                <div class="alert alert-secondary" role="alert">                                
                            <?php } ?>
							Are completed apporoved trim cards for all colours issued to relevant depts. (FM,RM,CU,PR & QA) ?
							</div>                                    
                            <div class="form-group row">                                        
                                <div class="col-md-1"></div>                            
                                <div class="col-md-2">                            
                                    <div class="styled-radio">
                                        <input type="radio" value="YES" name="pp_m2_1" id="pp_m2_1" <?php if($pp->pp_m2_1 == "YES"){echo "checked";} ?>>
                                        <label for="pp_m2_1">Yes</label>
                                    </div>                                        
                                    <div class="styled-radio">
                                        <input type="radio" value="NO" name="pp_m2_1" id="pp_m2_1x" <?php if($pp->pp_m2_1 == "NO"){echo "checked";} ?>>
                                        <label for="pp_m2_1x">No</label>
                                    </div>                                        
                                </div>
                                <div class="col-md-1">If Not</div>
                                <div class="col-md-3">
                                    <textarea name="pp_m2_2" class="form-control" placeholder="Reason"><?php echo $pp->pp_m2_2 ?></textarea>
                                </div>
                                <div class="col-md-3"><input type="text" class="form-control" name="pp_m2_3" placeholder="Action By" value="<?php echo $pp->pp_m2_3 ?>"></div>
                                <div class="col-md-2"><input type="text" class="form-control" name="pp_m2_4" placeholder="Issuing Date" id="date1" value="<?php echo $pp->pp_m2_4 ?>"></div>
                            </div><hr>
                            <?php if(empty($pp->pp_m3_1 )) { ?>
                                <div class="alert alert-danger" role="alert">
                            <?php }else{ ?>
                                <div class="alert alert-secondary" role="alert">                                
                            <?php } ?>                            
                                  Is there any discrepancies between Trim Card & Approved Standart ?
                            </div>                                    
                            <div class="form-group row">                                        
                                <div class="col-md-1"></div>                            
                                <div class="col-md-2">                            
                                    <div class="styled-radio">
                                        <input type="radio" value="YES" name="pp_m3_1" id="pp_m3_1" <?php if($pp->pp_m3_1 == "YES"){echo "checked";} ?>>
                                        <label for="pp_m3_1">Yes</label>
                                    </div>                                        
                                    <div class="styled-radio">
                                        <input type="radio" value="NO" name="pp_m3_1" id="pp_m3_1x" <?php if($pp->pp_m3_1 == "NO"){echo "checked";} ?>>
                                        <label for="pp_m3_1x">No</label>
                                    </div>                                        
                                </div>
                                <div class="col-md-1">If Yes</div>
                                <div class="col-md-8">
                                    <textarea name="pp_m3_2" class="form-control" placeholder="Reason / Action"><?php echo $pp->pp_m3_2 ?></textarea><br>
                                    <div class="alert alert-secondary" role="alert">
                                        Have you seen approved standart for such disrepancies ?
                                    </div>
                                    <div class="styled-radio">
                                        <input type="radio"value="YES"  name="pp_m3_3" id="pp_m3_3" <?php if($pp->pp_m3_3 == "YES"){echo "checked";} ?>>
                                        <label for="pp_m3_3">Yes</label>
                                    </div>                                        
                                    <div class="styled-radio">
                                        <input type="radio" value="NO" name="pp_m3_3" id="pp_m3_3x" <?php if($pp->pp_m3_3 == "NO"){echo "checked";} ?>>
                                        <label for="pp_m3_3x">No</label>
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
                                                    <input type="radio" value="YES" name="pp_m4_1" id="pp_m4_1" <?php if($pp->pp_m4_1 == "YES"){echo "checked";} ?>>
                                                    <label for="pp_m4_1">Yes</label>
                                                </div>                                        
                                                <div class="styled-radio">
                                                    <input type="radio" value="NO" name="pp_m4_1" id="pp_m4_1x" <?php if($pp->pp_m4_1 == "NO"){echo "checked";} ?>>
                                                    <label for="pp_m4_1x">No</label>
                                                </div>
                                                <div class="styled-radio">
                                                    <input type="radio" value="NOT APPLICABLE" name="pp_m4_1" id="pp_m4_1y" <?php if($pp->pp_m4_1 == "NOT APPLICABLE"){echo "checked";} ?>>
                                                    <label for="pp_m4_1y">Not Applicable</label>
                                                </div>
                                            </td>
                                            <td><input type="text" class="form-control" id="date2" name="pp_m4_4" value="<?php echo $pp->pp_m4_4 ?>"></td>
                                            <td><input type="text" class="form-control" name="pp_m4_7" value="<?php echo $pp->pp_m4_7 ?>"></td>                                                    
                                        </tr>
                                        <tr>
                                            <td>BOM</td>
                                            <td>
                                                <div class="styled-radio">
                                                    <input type="radio" value="YES" name="pp_m4_2" id="pp_m4_2" <?php if($pp->pp_m4_2 == "YES"){echo "checked";} ?>>
                                                    <label for="pp_m4_2">Yes</label>
                                                </div>                                        
                                                <div class="styled-radio">
                                                    <input type="radio" value="NO" name="pp_m4_2" id="pp_m4_2x" <?php if($pp->pp_m4_2 == "NO"){echo "checked";} ?>>
                                                    <label for="pp_m4_2x">No</label>
                                                </div>                                            
                                            </td>                                                    
                                            <td><input type="text" class="form-control" id="date3" name="pp_m4_5" value="<?php echo $pp->pp_m4_5 ?>"></td>
                                            <td><input type="text" class="form-control" name="pp_m4_8" value="<?php echo $pp->pp_m4_8 ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>LOF</td>
                                            <td>
                                                <div class="styled-radio">
                                                    <input type="radio" value="YES" name="pp_m4_3" id="pp_m4_3" <?php if($pp->pp_m4_3 == "YES"){echo "checked";} ?>>
                                                    <label for="pp_m4_3">Yes</label>
                                                </div>                                        
                                                <div class="styled-radio">
                                                    <input type="radio" value="NO" name="pp_m4_3" id="pp_m4_3x" <?php if($pp->pp_m4_3 == "NO"){echo "checked";} ?>>
                                                    <label for="pp_m4_3x">No</label>
                                                </div>
                                                <div class="styled-radio">
                                                    <input type="radio" value="NOT APPLICABLE" name="pp_m4_3" id="pp_m4_3y" <?php if($pp->pp_m4_3 == "NOT APPLICABLE"){echo "checked";} ?>>
                                                    <label for="pp_m4_3y">Not Applicable</label>
                                                </div>
                                            </td>
                                            <td><input type="text" class="form-control" id="date4" name="pp_m4_6" value="<?php echo $pp->pp_m4_6 ?>"></td>
                                            <td><input type="text" class="form-control" name="pp_m4_9" value="<?php echo $pp->pp_m4_9 ?>"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><hr>
                            <?php if(empty($pp->pp_m5_1 )) { ?>
                                <div class="alert alert-danger" role="alert">
                            <?php }else{ ?>
                                <div class="alert alert-secondary" role="alert">                                
                            <?php } ?>                            
                                   Can delivery dates be met as per MPO/CPO/SLC delivery schedule ?
                            </div>
                            <div class="form-group row">
                                 <div class="col-md-1"></div>                            
                                <div class="col-md-1">                            
                                    <div class="styled-radio">
                                        <input type="radio" value="YES" name="pp_m5_1" id="pp_m5_1" <?php if($pp->pp_m5_1 == "YES"){echo "checked";} ?>>
                                        <label for="pp_m5_1">Yes</label>
                                    </div>                                        
                                    <div class="styled-radio">
                                        <input type="radio" value="NO" name="pp_m5_1" id="pp_m5_1x" <?php if($pp->pp_m5_1 == "NO"){echo "checked";} ?>>
                                        <label for="pp_m5_1x">No</label>
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
                            <?php if(empty($pp->pp_m6_1 )) { ?>
                                <div class="alert alert-danger" role="alert">
                            <?php }else{ ?>
                                <div class="alert alert-secondary" role="alert">                                
                            <?php } ?>                                                    
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
                                                   <td><input type="text" name="pp_m6_4" class="form-control" value="<?php echo $pp->pp_m6_4 ?>" placeholder="Required Date" id="date6"></td>
                                               </tr>
                                               <tr>                                                   
                                                   <td><input type="text" name="pp_m6_5" class="form-control" value="<?php echo $pp->pp_m6_5 ?>" placeholder="Sample Type"></td>
                                                   <td><input type="text" name="pp_m6_6" class="form-control" value="<?php echo $pp->pp_m6_6 ?>" placeholder="Size(s)"></td>
                                                   <td><input type="text" name="pp_m6_7" class="form-control" value="<?php echo $pp->pp_m6_7 ?>" placeholder="Action Complete By"></td>
                                                   <td><input type="text" name="pp_m6_8" class="form-control" value="<?php echo $pp->pp_m6_8 ?>" placeholder="Required Date" id="date7"></td>
                                               </tr>
                                               <tr>                                                   
                                                   <td><input type="text" name="pp_m6_9" class="form-control" value="<?php echo $pp->pp_m6_9 ?>" placeholder="Sample Type"></td>
                                                   <td><input type="text" name="pp_m6_10" class="form-control" value="<?php echo $pp->pp_m6_10 ?>" placeholder="Size(s)"></td>
                                                   <td><input type="text" name="pp_m6_11" class="form-control" value="<?php echo $pp->pp_m6_11 ?>" placeholder="Action Complete By"></td>
                                                   <td><input type="text" name="pp_m6_12" class="form-control" value="<?php echo $pp->pp_m6_12 ?>" placeholder="Required Date" id="date8"></td>
                                               </tr>
                                               <tr>                                                   
                                                   <td><input type="text" name="pp_m6_13" class="form-control" value="<?php echo $pp->pp_m6_13 ?>" placeholder="Sample Type"></td>
                                                   <td><input type="text" name="pp_m6_14" class="form-control" value="<?php echo $pp->pp_m6_14 ?>" placeholder="Size(s)"></td>
                                                   <td><input type="text" name="pp_m6_15" class="form-control" value="<?php echo $pp->pp_m6_15 ?>" placeholder="Action Complete By"></td>
                                                   <td><input type="text" name="pp_m6_16" class="form-control" value="<?php echo $pp->pp_m6_16 ?>" placeholder="Required Date" id="date9"></td>
                                               </tr>
                                           </tbody>
                                       </table>                                                           
                                    </div> <hr>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <?php if(empty($pp->pp_m7_1 )) { ?>
                                                <div class="alert alert-danger" role="alert">
                                            <?php }else{ ?>
                                                <div class="alert alert-secondary" role="alert">                                
                                            <?php } ?>
                                            Any special comment or instruction</div>    
                                        </div>
                                        <div class="col-md-6"><textarea name="pp_m7_1" class="form-control" placeholder="Comments"><?php echo $pp->pp_m7_1 ?></textarea></div>    
                                    </div>
                        </div>
                        <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseTwo">
                            <div class="card-title">FABRIC AND TRIMS</div>
                        </a>
                        <div id="collapseTwo" class="card-body collapse pt-0" data-parent="#accordion">
                            <?php if(empty($pp->pp_f1_1 )) { ?>
                                <div class="alert alert-danger" role="alert">
                            <?php }else{ ?>
                                <div class="alert alert-secondary" role="alert">                                
                            <?php } ?>                        	
                                Are Fabric Pre-production Notes available ?
                             </div>                                    
                            <div class="form-group row">                                        
                                <div class="col-md-1"></div>                            
                                <div class="col-md-2">                            
                                    <div class="styled-radio">
                                        <input type="radio" value="YES" name="pp_f1_1" id="pp_f1_1" <?php if($pp->pp_f1_1 == "YES"){echo "checked";} ?>>
                                        <label for="pp_f1_1">Yes</label>
                                    </div>                                        
                                    <div class="styled-radio">
                                        <input type="radio" value="NO" name="pp_f1_1" id="pp_f1_1x" <?php if($pp->pp_f1_1 == "NO"){echo "checked";} ?>>
                                        <label for="pp_f1_1x">No</label>
                                    </div>                                        
                                </div>
                                <div class="col-md-3"><input type="text" class="form-control" name="pp_f1_2" placeholder="Approve By" value="<?php echo $pp->pp_f1_2 ?>"></div>
                                <div class="col-md-1">If Not</div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="pp_f1_3" placeholder="Action By" value="<?php echo $pp->pp_f1_3 ?>"><br>
                                    <input type="text" class="form-control" name="pp_f1_4" placeholder="Action" value="<?php echo $pp->pp_f1_4 ?>">
                                </div>                                        
                            </div><hr>
                            <?php if(empty($pp->pp_f2_1 )) { ?>
                                <div class="alert alert-danger" role="alert">
                            <?php }else{ ?>
                                <div class="alert alert-secondary" role="alert">                                
                            <?php } ?>                               
                                 Are Fabric Test Reports available ?
                            </div>                                    
                            <div class="form-group row">                                        
                                <div class="col-md-1"></div>                            
                                <div class="col-md-2">                            
                                    <div class="styled-radio">
                                        <input type="radio" value="YES" name="pp_f2_1" id="pp_f2_1" <?php if($pp->pp_f2_1 == "YES"){echo "checked";} ?>>
                                        <label for="pp_f2_1">Yes</label>
                                    </div>                                        
                                    <div class="styled-radio">
                                        <input type="radio" value="NO" name="pp_f2_1" id="pp_f2_1x" <?php if($pp->pp_f2_1 == "NO"){echo "checked";} ?>>
                                        <label for="pp_f2_1x">No</label>
                                    </div>                                        
                                </div>
                                <div class="col-md-3"><input type="text" class="form-control" name="pp_f2_2" placeholder="If Yes, Whats tests ?" value="<?php echo $pp->pp_f2_2 ?>"></div>
                                <div class="col-md-1">If Not</div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="pp_f2_3" placeholder="Action By" value="<?php echo $pp->pp_f2_3 ?>"><br>
                                    <input type="text" class="form-control" name="pp_f2_4" placeholder="Action" value="<?php echo $pp->pp_f2_4 ?>">
                                </div>                                        
                            </div><hr>     
                                <?php if(empty($pp->pp_f3_1 )) { ?>
                                    <div class="alert alert-danger" role="alert">
                                <?php }else{ ?>
                                    <div class="alert alert-secondary" role="alert">                                
                                <?php } ?>                                    
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
                                <?php if(empty($pp->pp_f4_1 )) { ?>
                                <div class="alert alert-danger" role="alert">
                                <?php }else{ ?>
                                    <div class="alert alert-secondary" role="alert">                                
                                <?php } ?>                                        
                                    Are "Fabric Detects Card" distributed to Cutting & Production ?
                                 </div>           
                                 <div class="form-group row">
                                     <div class="col-md-1"></div>                            
                                    <div class="col-md-2">                            
                                        <div class="styled-radio">
                                            <input type="radio" value="YES" name="pp_f4_1" id="pp_f4_1" <?php if($pp->pp_f4_1 == "YES"){echo "checked";} ?>>
                                            <label for="pp_f4_1">Yes</label>
                                        </div>                                        
                                        <div class="styled-radio">
                                            <input type="radio" value="NO" name="pp_f4_1" id="pp_f4_1x" <?php if($pp->pp_f4_1 == "NO"){echo "checked";} ?>>
                                            <label for="pp_f4_1x">No</label>
                                        </div>                                        
                                    </div>
                                 </div><hr>   
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <?php if(empty($pp->pp_f5_2 )) { ?>
                                            <div class="alert alert-danger" role="alert">
                                        <?php }else{ ?>
                                            <div class="alert alert-secondary" role="alert">                                
                                        <?php } ?>                                           
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
                                <!--     <input type="text" class="form-control" name="pp_f6_2" placeholder="As per Spec" value="<?php echo $pp->pp_f6_2 ?>"> -->
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
                                    <?php if(empty($pp->pp_f7_1 )) { ?>
                                        <div class="alert alert-danger" role="alert">
                                    <?php }else{ ?>
                                        <div class="alert alert-secondary" role="alert">                                
                                    <?php } ?>   
                                    What method is used to identify fabric Technical Face side ?</div>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="pp_f7_1" class="form-control" placeholder="Method which used to identify fabric Technical Face side ?" value="<?php echo $pp->pp_f7_1 ?>">
                                </div>     
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <?php if(empty($pp->pp_f7_4 )) { ?>
                                        <div class="alert alert-danger" role="alert">
                                    <?php }else{ ?>
                                        <div class="alert alert-secondary" role="alert">                                
                                    <?php } ?>   
                                    Technical Face</div>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="pp_f7_4" placeholder="Technical Face" value="<?php echo $pp->pp_f7_4 ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8">
                                    <?php if(empty($pp->pp_f7_2 )) { ?>
                                        <div class="alert alert-danger" role="alert">
                                    <?php }else{ ?>
                                        <div class="alert alert-secondary" role="alert">                                
                                    <?php } ?>   
                                    Did you issue an approved fabric hanger indicating "Garment Face" to Cutting & Production ? </div>
                                </div>
                                <div class="col-md-2">                                                                    
                                    <div class="styled-radio">
                                        <input type="radio" value="YES" name="pp_f7_2" id="pp_f7_2" <?php if($pp->pp_f7_2 == "YES"){echo "checked";} ?>>
                                        <label for="pp_f7_2">Yes</label>
                                    </div>                                        
                                    <div class="styled-radio">
                                        <input type="radio" value="NO" name="pp_f7_2" id="pp_f7_2x" <?php if($pp->pp_f7_2 == "NO"){echo "checked";} ?>>
                                        <label for="pp_f7_2x">No</label>
                                    </div>                                                                                
                                </div>     
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">If Not</div>
                                <div class="col-md-4"><input type="text" name="pp_f7_3" class="form-control" placeholder="Issuing Time" value="<?php echo $pp->pp_f7_3 ?>"></div>                                    
                            </div><hr>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <?php if(empty($pp->pp_f8_1 )) { ?>
                                        <div class="alert alert-danger" role="alert">
                                    <?php }else{ ?>
                                        <div class="alert alert-secondary" role="alert">                                
                                    <?php } ?>   
                                    Special Requirements</div>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="pp_f8_1" class="form-control" placeholder="Heat Seal/Print Embroidery/Fusing/Lamination" value="<?php echo $pp->pp_f8_1 ?>">                                        
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <?php if(empty($pp->pp_f8_2 )) { ?>
                                        <div class="alert alert-danger" role="alert">
                                    <?php }else{ ?>
                                        <div class="alert alert-secondary" role="alert">                                
                                    <?php } ?>   
                                    Standart availability & Approval</div>
                                </div>
                                <div class="col-md-2">
                                    <div class="styled-radio">
                                        <input type="radio" value="YES" name="pp_f8_2" id="pp_f8_2" <?php if($pp->pp_f8_2 == "YES"){echo "checked";} ?>>
                                        <label for="pp_f8_2">Yes</label>
                                    </div>                                        
                                    <div class="styled-radio">
                                        <input type="radio" value="NO" name="pp_f8_2" id="pp_f8_2x" <?php if($pp->pp_f8_2 == "NO"){echo "checked";} ?>>
                                        <label for="pp_f8_2x">No</label>
                                    </div>                                                                                      
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">If Yes</div>
                                <div class="col-md-4"><input type="text" name="pp_f8_3" class="form-control" placeholder="Approve by (Supplier)" value="<?php echo $pp->pp_f8_3 ?>"></div>
                                <div class="col-md-3">If not, Issuing Date</div>
                                <div class="col-md-3"><input type="text" class="form-control" name="pp_f8_4" placeholder="Issuing Date" value="<?php echo $pp->pp_f8_4 ?>" id="date10"></div>
                            </div>
                            <?php if(empty($pp->pp_f8_5 )) { ?>
                                <div class="alert alert-danger" role="alert">
                            <?php }else{ ?>
                                <div class="alert alert-secondary" role="alert">                                
                            <?php } ?>   
                            HS / Fussing / Laminating COnditions</div>
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
                                    <?php if(empty($pp->pp_f9_1 )) { ?>
                                        <div class="alert alert-danger" role="alert">
                                    <?php }else{ ?>
                                        <div class="alert alert-secondary" role="alert">                                
                                    <?php } ?>   
                                    Is this a washed garment ?</div>
                                </div>
                                <div class="col-md-2">
                                    <div class="styled-radio">
                                        <input type="radio" value="YES" name="pp_f9_1" id="pp_f9_1" <?php if($pp->pp_f9_1 == "YES"){echo "checked";} ?>>
                                        <label for="pp_f9_1">Yes</label>
                                    </div>                                        
                                    <div class="styled-radio">
                                        <input type="radio" value="NO" name="pp_f9_1" id="pp_f9_1x" <?php if($pp->pp_f9_1 == "NO"){echo "checked";} ?>>
                                        <label for="pp_f9_1x">No</label>
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
                                    <?php if(empty($pp->pp_f10_1 )) { ?>
                                        <div class="alert alert-danger" role="alert">
                                    <?php }else{ ?>
                                        <div class="alert alert-secondary" role="alert">                                
                                    <?php } ?>   
                                    Is there any colour shade variation in all colours ?</div>
                                </div>
                                <div class="col-md-2">
                                    <div class="styled-radio">
                                        <input type="radio" value="YES" name="pp_f10_1" id="pp_f10_1" <?php if($pp->pp_f10_1 == "YES"){echo "checked";} ?>>
                                        <label for="pp_f10_1">Yes</label>
                                    </div>                                        
                                    <div class="styled-radio">
                                        <input type="radio" value="NO" name="pp_f10_1" id="pp_f10_1x" <?php if($pp->pp_f10_1 == "NO"){echo "checked";} ?>>
                                        <label for="pp_f10_1x">No</label>
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
                                        <input type="checkbox" name="pp_f10_3" id="pp_f10_3" <?php if($pp->pp_f10_3 == "on"){echo "checked";} ?>>
                                        <label for="pp_f10_3"></label>
                                    </div>
                                </div>
                                <div class="col-md-11">Batch to batch shade - B to -B separations & all shades are within the approved sahde band</div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-1">
                                     <div class="styled-checkbox">
                                        <input type="checkbox" name="pp_f10_4" id="pp_f10_4" <?php if($pp->pp_f10_4 == "on"){echo "checked";} ?>>
                                        <label for="pp_f10_4"></label>
                                    </div>
                                </div>
                                <div class="col-md-11">Within the roll shade - use close-marker & within the garment shade is approved</div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-1">
                                     <div class="styled-checkbox">
                                        <input type="checkbox" name="pp_f10_5" id="pp_f10_5" <?php if($pp->pp_f10_5 == "on"){echo "checked";} ?>>
                                        <label for="pp_f10_5"></label>
                                    </div>
                                </div>
                                <div class="col-md-11">Reject fabric / lace / elastic</div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-1">
                                     <div class="styled-checkbox">
                                        <input type="checkbox" name="pp_f10_6" id="pp_f10_6" <?php if($pp->pp_f10_6 == "on"){echo "checked";} ?>>
                                        <label for="pp_f10_6"></label>
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
                                        <input type="radio" value="YES" name="pp_f11_1" id="pp_f11_1" <?php if($pp->pp_f11_1 == "YES"){echo "checked";} ?>>
                                        <label for="pp_f11_1">Yes</label>
                                    </div>                                        
                                    <div class="styled-radio">
                                        <input type="radio" value="NO" name="pp_f11_1" id="pp_f11_1x" <?php if($pp->pp_f11_1 == "NO"){echo "checked";} ?>>
                                        <label for="pp_f11_1x">No</label>
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
                            <?php if(empty($pp->pp_f12_1 )) { ?>
                                <div class="alert alert-danger" role="alert">
                            <?php }else{ ?>
                                <div class="alert alert-secondary" role="alert">                                
                            <?php } ?>   
                            Fabric / Marker Width</div>
                            <div class="form-group row">
                                <div class="col-md-2">Spec</div>
                                <div class="col-md-3"><input type="text" class="form-control" name="pp_f12_1" placeholder="Spec" value="<?php echo $pp->pp_f12_1 ?>"></div>
                                <div class="col-md-2">Usable</div>
                                <div class="col-md-3"><input type="text" class="form-control" name="pp_f12_2" placeholder="(cm/inch)" value="<?php echo $pp->pp_f12_2 ?>"></div>
                                <div class="col-md-2">
                                     <div class="styled-radio">
                                        <input type="radio" value="Cm" name="pp_f12_3" id="pp_f12_3" <?php if($pp->pp_f12_3 == "Cm"){echo "checked";} ?>>
                                        <label for="pp_f12_3">Cm</label>
                                    </div>                                        
                                    <div class="styled-radio">
                                        <input type="radio" value="Inch" name="pp_f12_3" id="pp_f12_3x" <?php if($pp->pp_f12_3 == "Inch"){echo "checked";} ?>>
                                        <label for="pp_f12_3x">Inch</label>
                                    </div>  
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <?php if(empty($pp->pp_f13_1 )) { ?>
                                        <div class="alert alert-danger" role="alert">
                                    <?php }else{ ?>
                                        <div class="alert alert-secondary" role="alert">                                
                                    <?php } ?>   
                                    Special Comments</div>
                                </div>
                                <div class="col-md-8"><textarea name="pp_f13_1" class="form-control" placeholder="Special Comments"><?php echo $pp->pp_f13_1 ?></textarea></div>
                            </div>
                        </div>
                        <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseThree">
                            <div class="card-title">CONTRUCTION / TECHNICAL</div>
                        </a>
                        <div id="collapseThree" class="card-body collapse pt-0" data-parent="#accordion">
                            <div class="section-title mt-5 mb-5">
                                <h4>CONSTRUCTION / TECHNICAL</h4>
                            </div>
                            <div class="alert alert-secondary" role="alert">
                                Present "Construction Details" to the audience
                            </div><hr>
                            <div class="form-group row">
                                <div class="col-md-5">
                                    <?php if(empty($pp->pp_ct2_1 )) { ?>
                                        <div class="alert alert-danger" role="alert">
                                    <?php }else{ ?>
                                        <div class="alert alert-secondary" role="alert">                                
                                    <?php } ?>   
                                    Is approved Contract / Red / Green Seal Available ?</div>
                                </div>
                                <div class="col-md-1">
                                    <div class="styled-radio">
                                        <input type="radio" value="YES" name="pp_ct2_1" id="pp_ct2_1" <?php if($pp->pp_ct2_1 == "YES"){echo "checked";} ?>>
                                        <label for="pp_ct2_1">Yes</label>
                                    </div>                                        
                                    <div class="styled-radio">
                                        <input type="radio" value="NO" name="pp_ct2_1" id="pp_ct2_1x" <?php if($pp->pp_ct2_1 == "NO"){echo "checked";} ?>>
                                        <label for="pp_ct2_1x">No</label>
                                    </div>                                        
                                </div>
                                <div class="col-md-3"><input type="text" placeholder="Approved By" name="pp_ct2_2" class="form-control" value="<?php echo $pp->pp_ct2_2 ?>"></div>
                                <div class="col-md-3"><input type="text" placeholder="Date" name="pp_ct2_3" class="form-control" value="<?php echo $pp->pp_ct2_3 ?>" id="date11"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-1">If Not,</div>
                                <div class="col-md-1">Action</div>
                                <div class="col-md-3"><input type="text" class="form-control" placeholder="Action" name="pp_ct2_4" value="<?php echo $pp->pp_ct2_4 ?>"></div>
                                <div class="col-md-2">Action By</div>                                        
                                <div class="col-md-3"><input type="text" class="form-control" placeholder="Action By" name="pp_ct2_5" value="<?php echo $pp->pp_ct2_5 ?>"></div>
                            </div><hr>
                                  <?php if(empty($pp->pp_ct3_1 )) { ?>
                                        <div class="alert alert-danger" role="alert">
                                    <?php }else{ ?>
                                        <div class="alert alert-secondary" role="alert">                                
                                    <?php } ?>   
                                What are the comments received ?</div>
                            <div class="col-md-12">
                                <textarea name="pp_ct3_1" class="form-control" placeholder="Comments"><?php echo $pp->pp_ct3_1 ?></textarea>
                            </div><hr>
                              <?php if(empty($pp->pp_ct4_1 )) { ?>
                                        <div class="alert alert-danger" role="alert">
                                    <?php }else{ ?>
                                        <div class="alert alert-secondary" role="alert">                                
                                    <?php } ?>   
                            What are the difficult operations identified during sample stage (cutting & sewing) ?</div>
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
                              <?php if(empty($pp->pp_ct5_1 )) { ?>
                                        <div class="alert alert-danger" role="alert">
                                    <?php }else{ ?>
                                        <div class="alert alert-secondary" role="alert">                                
                                    <?php } ?>   
                            Specify, if any special / extra machines and /or needles required</div>
                            <div class="col-md-12">
                                <textarea name="pp_ct5_1" class="form-control" placeholder="Comments"><?php echo $pp->pp_ct5_1 ?></textarea>
                            </div><hr>
                              <?php if(empty($pp->pp_ct6_1 )) { ?>
                                        <div class="alert alert-danger" role="alert">
                                    <?php }else{ ?>
                                        <div class="alert alert-secondary" role="alert">                                
                                    <?php } ?>   
                            What are the attachments used for the operations ?</div>
                            <div class="col-md-12">
                                <textarea name="pp_ct6_1" class="form-control" placeholder="Comments"><?php echo $pp->pp_ct6_1 ?></textarea>
                            </div><hr>
                            <div class="form-group row">
                                <div class="col-md-5">
                                      <?php if(empty($pp->pp_ct7_1 )) { ?>
                                        <div class="alert alert-danger" role="alert">
                                    <?php }else{ ?>
                                        <div class="alert alert-secondary" role="alert">                                
                                    <?php } ?>   
                                    Has the size set being done ?</div>
                                </div>
                                <div class="col-md-1">
                                    <div class="styled-radio">
                                        <input type="radio" value="YES" name="pp_ct7_1" id="pp_ct7_1" <?php if($pp->pp_ct7_1 == "YES"){echo "checked";} ?>>
                                        <label for="pp_ct7_1">Yes</label>
                                    </div>                                        
                                    <div class="styled-radio">
                                        <input type="radio" value="NO" name="pp_ct7_1" id="pp_ct7_1x" <?php if($pp->pp_ct7_1 == "NO"){echo "checked";} ?>>
                                        <label for="pp_ct7_1x">No</label>
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
                              <?php if(empty($pp->pp_ct8_1 )) { ?>
                                        <div class="alert alert-danger" role="alert">
                                    <?php }else{ ?>
                                        <div class="alert alert-secondary" role="alert">                                
                                    <?php } ?>   
                            Specify the eoperations that the measurments been identified as inline and critical</div>
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
                                           <td><input type="text" class="form-control" name="pp_ct9_3" placeholder="Re-issuing Date" value="<?php echo $pp->pp_ct9_3 ?>" id="date12"></td>
                                       </tr>
                                       <tr>
                                           <td>Construction Sheet</td>
                                           <td><input type="text" class="form-control" name="pp_ct9_4" placeholder="Approved By" value="<?php echo $pp->pp_ct9_4 ?>"></td>
                                           <td><input type="text" class="form-control" name="pp_ct9_5" placeholder="Action" value="<?php echo $pp->pp_ct9_5 ?>"></td>
                                           <td><input type="text" class="form-control" name="pp_ct9_6" placeholder="Re-issuing Date" value="<?php echo $pp->pp_ct9_6 ?>" id="date13"></td>
                                       </tr>
                                       <tr>
                                           <td>How to measure sheet</td>
                                           <td><input type="text" class="form-control" name="pp_ct9_7" placeholder="Approved By" value="<?php echo $pp->pp_ct9_7 ?>"></td>
                                           <td><input type="text" class="form-control" name="pp_ct9_8" placeholder="Action" value="<?php echo $pp->pp_ct9_8 ?>"></td>
                                           <td><input type="text" class="form-control" name="pp_ct9_9" placeholder="Re-issuing Date" value="<?php echo $pp->pp_ct9_9 ?>" id="date14"></td>
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
                                                    <input type="checkbox" name="pp_ct12_1" id="pp_ct12_1" <?php if($pp->pp_ct12_1 == "on"){echo "checked";} ?>>
                                                    <label for="pp_ct12_1"></label>
                                                </div> 
                                           </td>
                                           <td>100% side seam matching</td>
                                           <td>
                                               <div class="styled-checkbox">
                                                    <input type="checkbox" name="pp_ct12_2" id="pp_ct12_2" <?php if($pp->pp_ct12_2 == "on"){echo "checked";} ?>>
                                                    <label for="pp_ct12_2"></label>
                                                </div> 
                                           </td>
                                           <td>Exact matching point & colour specifiy Yes/No</td>
                                       </tr>
                                       <tr>
                                           <td>
                                               <div class="styled-checkbox">
                                                    <input type="checkbox" name="pp_ct12_3" id="pp_ct12_3" <?php if($pp->pp_ct12_3 == "on"){echo "checked";} ?>>
                                                    <label for="pp_ct12_3"></label>
                                                </div> 
                                           </td>
                                           <td>Waist or Hem straight</td>
                                           <td>
                                               <div class="styled-checkbox">
                                                    <input type="checkbox" name="pp_ct12_5" id="pp_ct12_5" <?php if($pp->pp_ct12_5 == "on"){echo "checked";} ?>>
                                                    <label for="pp_ct12_5"></label>
                                                </div> 
                                           </td>
                                           <td>Choice of placement points (indicate on the diagram)</td>
                                       </tr>
                                       <tr>
                                           <td rowspan="4" class="align-top">
                                               <div class="styled-checkbox">
                                                    <input type="checkbox" name="pp_ct12_6" id="pp_ct12_6" <?php if($pp->pp_ct12_6 == "on"){echo "checked";} ?>>
                                                    <label for="pp_ct12_6"></label>
                                                </div> 
                                           </td>
                                           <td rowspan="4" class="align-top"><input type="text" class="form-control" placeholder="Other, Specifiy" name="pp_ct12_4" value="<?php echo $pp->pp_ct12_4 ?>"></td>
                                           <td>
                                               <div class="styled-checkbox">
                                                    <input type="checkbox" name="pp_ct12_7" id="pp_ct12_7" <?php if($pp->pp_ct12_7 == "on"){echo "checked";} ?>>
                                                    <label for="pp_ct12_7"></label>
                                                </div> 
                                           </td>
                                           <td>Exclusive placement points (indicate on the diagram)</td>
                                       </tr>
                                       <tr>                                                
                                           <td>
                                               <div class="styled-checkbox">
                                                    <input type="checkbox" name="pp_ct12_8" id="pp_ct12_8" <?php if($pp->pp_ct12_8 == "on"){echo "checked";} ?>>
                                                    <label for="pp_ct12_8"></label>
                                                </div> 
                                           </td>
                                           <td>Free priority point</td>
                                       </tr>
                                       <tr>                                                
                                           <td>
                                               <div class="styled-checkbox">
                                                    <input type="checkbox" name="pp_ct12_9" id="pp_ct12_9" <?php if($pp->pp_ct12_9 == "on"){echo "checked";} ?>>
                                                    <label for="pp_ct12_9"></label>
                                                </div> 
                                           </td>
                                           <td>Length only</td>
                                       </tr>
                                       <tr>                                                
                                           <td>
                                               <div class="styled-checkbox">
                                                    <input type="checkbox" name="pp_ct12_10" id="pp_ct12_10" <?php if($pp->pp_ct12_10 == "on"){echo "checked";} ?>>
                                                    <label for="pp_ct12_10"></label>
                                                </div> 
                                           </td>
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
                                        <input type="radio" value="YES" name="pp_ct12_12" id="pp_ct12_12" <?php if($pp->pp_ct12_12 == "YES"){echo "checked";} ?>>
                                        <label for="pp_ct12_12">Yes</label>
                                    </div>                                        
                                    <div class="styled-radio">
                                        <input type="radio" value="NO" name="pp_ct12_12" id="pp_ct12_12" <?php if($pp->pp_ct12_12 == "NO"){echo "checked";} ?>>
                                        <label for="pp_ct12_12">No</label>
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
                            <div class="form-group row">
                                <div class="col-md-2"><div class="alert alert-secondary" role="alert">Garment Way</div></div>
                                <div class="col-md-4">
                                    <select name="pp_ct14_1" class="form-control">
                                        <option value="" selected="">Choose..</option>
                                        <option value="All gmt one way" <?php if($pp->pp_ct14_1 == "All gmt one way"){echo "selected";} ?>>All gmt one way</option>
                                        <option value="one gmt one way" <?php if($pp->pp_ct14_1 == "one gmt one way"){echo "selected";} ?>>One gmt one way</option>
                                        <option value="only part one way" <?php if($pp->pp_ct14_1 == "only part one way"){echo "selected";} ?>>Only part one way</option>
                                        <option value="All garments piles up" <?php if($pp->pp_ct14_1 == "All garments piles up"){echo "selected";} ?>>All garments piles up</option>
                                        <option value="All garments piles down" <?php if($pp->pp_ct14_1 == "All garments piles down"){echo "selected";} ?>>All garments piles down</option>
                                        <option value="Other" <?php if($pp->pp_ct14_1 == "Other"){echo "selected";} ?>>Other</option>
                                    </select>                                    
                                </div>
                                <div class="col-md-3"><input type="text" class="form-control" name="pp_ct14_2" placeholder="Other" value="<?php echo $pp->pp_ct14_2 ?>"></div>
                                
                            </div><hr>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <?php if(empty($pp->pp_ct15_1 )) { ?>
                                        <div class="alert alert-danger" role="alert">
                                    <?php }else{ ?>
                                        <div class="alert alert-secondary" role="alert">                                
                                    <?php } ?>   
                                What is the grain direction ?</div></div>
                                <div class="col-md-4"><input type="text" class="form-control" name="pp_ct15_1" value="<?php echo $pp->pp_ct15_1 ?>"></div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Direction</th>
                                            <th>Garment part(s)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Parallel to selvage</td>
                                            <td><input type="text" class="form-control" name="pp_ct15_2" value="<?php echo $pp->pp_ct15_2 ?>"></td>
                                        </tr><tr>
                                            <td>Perpendicular to selvage</td>
                                            <td><input type="text" class="form-control" name="pp_ct15_3" value="<?php echo $pp->pp_ct15_3 ?>"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                       <!--  <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseFour">
                            <div class="card-title">MOULDING (IF ANY)</div>
                        </a>
                        <div id="collapseFour" class="card-body collapse pt-0" data-parent="#accordion">
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
                        </div> -->
                        <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseFive">
                            <div class="card-title">CUTTING</div>
                        </a>
                        <div id="collapseFive" class="card-body collapse pt-0" data-parent="#accordion">
                            <?php if(empty($pp->pp_c1_1 )) { ?>
                                        <div class="alert alert-danger" role="alert">
                                    <?php }else{ ?>
                                        <div class="alert alert-secondary" role="alert">                                
                                    <?php } ?>   
                            Specify</div>
                            <div class="form-group row">
                                <div class="col-md-3">Marker Length</div>
                                <div class="col-md-9"><input type="text" class="form-control" name="pp_c1_1" placeholder="Marker Length" value="<?php echo $pp->pp_c1_1 ?>"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">Ply Height</div>
                                <div class="col-md-9"><input type="text" class="form-control" name="pp_c1_2" placeholder="Ply Height" value="<?php echo $pp->pp_c1_2 ?>"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">Comments</div>
                                <div class="col-md-9"><input type="text" class="form-control" name="pp_c1_3" placeholder="Comments" value="<?php echo $pp->pp_c1_3 ?>"></div>
                            </div><hr>
                                    <?php if(empty($pp->pp_c2_1 )) { ?>
                                        <div class="alert alert-danger" role="alert">
                                    <?php }else{ ?>
                                        <div class="alert alert-secondary" role="alert">                                
                                    <?php } ?>   
                            What are the cutting methods and equipments</div>
                            <div class="form-group row">
                                <div class="col-md-3">Fabric</div>
                                <div class="col-md-9"><input type="text" class="form-control" name="pp_c2_1" placeholder="computer cutting/hand cut/block cut & relay/block cut & relay by pining /" value="<?php echo $pp->pp_c2_1 ?>"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">Lace</div>
                                <div class="col-md-9"><input type="text" class="form-control" name="pp_c2_2" placeholder="band-knife/hand-cut" value="<?php echo $pp->pp_c2_2 ?>"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">Foam</div>
                                <div class="col-md-9"><input type="text" class="form-control" name="pp_c2_3" placeholder="" value="<?php echo $pp->pp_c2_3 ?>"></div>
                            </div><hr>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <?php if(empty($pp->pp_c3_1 )) { ?>
                                        <div class="alert alert-danger" role="alert">
                                    <?php }else{ ?>
                                        <div class="alert alert-secondary" role="alert">                                
                                    <?php } ?>   
                                    Special Comments</div></div>
                                <div class="col-md-9"><input type="text" class="form-control" name="pp_c3_1" placeholder="computer cutting/hand cut/block cut & relay/block cut & relay by pining /" value="<?php echo $pp->pp_c3_1 ?>"></div>
                            </div>
                        </div>
                        <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseSix">
                            <div class="card-title">PILOT CUT</div>
                        </a>
                        <div id="collapseSix" class="card-body collapse pt-0" data-parent="#accordion">
                            <div class="form-group row">
                                <div class="col-md-5">
                                    <?php if($pp->pp_pc1_1 == "0000-00-00") { ?>
                                        <div class="alert alert-danger" role="alert">
                                    <?php }else{ ?>
                                        <div class="alert alert-secondary" role="alert">                                
                                    <?php } ?>   
                                    Issuing of Cutting Instruction -   Date & Time</div>
                                </div>
                                <div class="col-md-1">Date</div>
                                <div class="col-md-3"><input type="text" id="date15" name="pp_pc1_1" class="form-control" value="<?php echo $pp->pp_pc1_1 ?>"></div>
                                <div class="col-md-1">Time</div>
                                <div class="col-md-2"><input type="time" name="pp_pc1_2" class="form-control" value="<?php echo $pp->pp_pc1_2 ?>"></div>
                            </div>
                                <div class="form-group row">
                                    <div class="col-md-5">                                    
                                        <?php if($pp->pp_pc2_1 == "0000-00-00") { ?>
                                            <div class="alert alert-danger" role="alert">
                                        <?php }else{ ?>
                                            <div class="alert alert-secondary" role="alert">                                
                                        <?php } ?>   
                                Releasing of Fabric & Trims for Production - Date & Time</div>
                                    </div>
                                    <div class="col-md-1">Date</div>
                                    <div class="col-md-3"><input type="text" name="pp_pc2_1" class="form-control" value="<?php echo $pp->pp_pc2_1 ?>" id="date16"></div>
                                    <div class="col-md-1">Time</div>
                                    <div class="col-md-2"><input type="time" name="pp_pc2_2" class="form-control" value="<?php echo $pp->pp_pc2_2 ?>"></div>
                                </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <?php if($pp->pp_pc3 == "") { ?>
                                            <div class="alert alert-danger" role="alert">
                                        <?php }else{ ?>
                                            <div class="alert alert-secondary" role="alert">                                
                                        <?php } ?> 
                                    Sizes for pilot</div></div>
                                <div class="col-md-3"><input type="text" class="form-control" name="pp_pc3" value="<?php echo $pp->pp_pc3 ?>"></div>
                                <div class="col-md-3">
                                    <?php if($pp->pp_pc4_1 == "0000-00-00") { ?>
                                            <div class="alert alert-danger" role="alert">
                                        <?php }else{ ?>
                                            <div class="alert alert-secondary" role="alert">                                
                                        <?php } ?>
                                    Pilot cut date</div></div>
                                <div class="col-md-3"><input type="text" id="date17" class="form-control" name="pp_pc4_1" value="<?php echo $pp->pp_pc4_1 ?>"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                <?php if($pp->pp_pc4_2 == "") { ?>
                                        <div class="alert alert-danger" role="alert">
                                    <?php }else{ ?>
                                        <div class="alert alert-secondary" role="alert">                                
                                    <?php } ?>
                                Number of gmts to be cut</div></div>
                                <div class="col-md-3"><input type="text" class="form-control" name="pp_pc4_2" value="<?php echo $pp->pp_pc4_2 ?>"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <?php if($pp->pp_pc5_1 == "0000-00-00") { ?>
                                        <div class="alert alert-danger" role="alert">
                                    <?php }else{ ?>
                                        <div class="alert alert-secondary" role="alert">                                
                                    <?php } ?>   
                                    Date & time of pilot cut required for production</div></div>
                                <div class="col-md-3"><input type="text" class="form-control" name="pp_pc5_1" id="date18" value="<?php echo $pp->pp_pc5_1 ?>"></div>
                                <div class="col-md-3"><input type="time" class="form-control" name="pp_pc5_2" value="<?php echo $pp->pp_pc5_2 ?>"></div>
                            </div> 
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <?php if(empty($pp->pp_pc6 )) { ?>
                                        <div class="alert alert-danger" role="alert">
                                    <?php }else{ ?>
                                        <div class="alert alert-secondary" role="alert">                                
                                    <?php } ?>   
                                Comments</div></div>
                                <div class="col-md-9"><input type="text" class="form-control" name="pp_pc6" placeholder="Comments" value="<?php echo $pp->pp_pc6 ?>"></div>
                            </div>                       	
                        </div>
                    </div>
                    <!-- End Widget -->
        </div>
        <div class="float-right">
            <button type="submit" class="btn btn-primary btn-lg" onclick="return confirm('Are you sure ?')">SUBMIT FORM</button>            
        </div>
        <?php echo form_close(); ?>
	</div>
</div>
