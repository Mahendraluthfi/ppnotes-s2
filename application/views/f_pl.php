<div class="row">
    <div class="col-xl-12">
        <div class="widget has-shadow">     
 	     	<div class="widget-body">
 	     		<div class="float-left">
 	     			<a href="<?php echo base_url('meeting/sign/'.$id) ?>" class="btn btn-default btn-sm">< Back</a>
 	     		</div>
 	     		<h3 class="text-center">PILOT APPRAISAL MEETING MINUTES &check;</h3>
 	     		<hr>
                <?php echo form_open('meeting/subform_pl/'.$id); ?>        
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
 	     				<!-- <div class="row">
 	     					<div class="col-md-4">Planned Date</div>
 	     					<div class="col-md-8 text-success"><?php echo date('d M Y', strtotime($get->planned_date)) ?></div>
 	     				</div> -->
                        <p></p>
                        <div class="row">
                            <div class="col-md-4">Actual Date</div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="date_pl" id="date15" placeholder="Actual Date" value="<?php echo $pl->date_pl ?>">
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
                    <div class="card-title">MASTER PATTERNS</div>
                </a>
                <div id="collapseOne" class="card-body collapse show pt-0" data-parent="#accordion">
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
                                            <input type="checkbox" name="pl_mp1_1" id="pl_mp1_1" <?php if($pl->pl_mp1_1 == "on"){echo "checked";} ?>>
                                            <label for="pl_mp1_1"></label>
                                        </div>
                                   </td>
                                   <td>Contract/red seal approval/availability</td>
                                   <td><input type="text" name="pl_mp1_5" class="form-control" placeholder="Action" value="<?php echo $pl->pl_mp1_5 ?>"></td>
                                   <td><input type="text" name="pl_mp1_6" class="form-control" placeholder="Comments" value="<?php echo $pl->pl_mp1_6 ?>"></td>
                               </tr>
                               <tr>
                                   <td>
                                       <div class="styled-checkbox">
                                            <input type="checkbox" name="pl_mp1_2" id="pl_mp1_2" <?php if($pl->pl_mp1_2 == "on"){echo "checked";} ?>>
                                            <label for="pl_mp1_2"></label>
                                        </div>
                                   </td>
                                   <td>Size set</td>
                                   <td><input type="text" name="pl_mp1_7" class="form-control" placeholder="Action" value="<?php echo $pl->pl_mp1_7 ?>"></td>
                                   <td><input type="text" name="pl_mp1_8" class="form-control" placeholder="Comments" value="<?php echo $pl->pl_mp1_8 ?>"></td>
                               </tr>
                               <tr>
                                   <td>
                                       <div class="styled-checkbox">
                                            <input type="checkbox" name="pl_mp1_3" id="pl_mp1_3" <?php if($pl->pl_mp1_3 == "on"){echo "checked";} ?>>
                                            <label for="pl_mp1_3"></label>
                                        </div>
                                   </td>
                                   <td>Construction Sheet</td>
                                   <td><input type="text" name="pl_mp1_9" class="form-control" placeholder="Action" value="<?php echo $pl->pl_mp1_9 ?>"></td>
                                   <td><input type="text" name="pl_mp1_10" class="form-control" placeholder="Comments" value="<?php echo $pl->pl_mp1_10 ?>"></td>
                               </tr>
                               <tr>
                                   <td>
                                       <div class="styled-checkbox">
                                            <input type="checkbox" name="pl_mp1_4" id="pl_mp1_4" <?php if($pl->pl_mp1_4 == "on"){echo "checked";} ?>>
                                            <label for="pl_mp1_4"></label>
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
                            <?php if(empty($pl->pl_mp2_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>   
                            Is there any thing to be added / amanded on the answer/ comments made at the Pre-Production meeting (including "TBC")</div>
                        </div>                                  
                        <div class="col-md-2">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_mp2_1" id="pl_mp2_1" <?php if($pl->pl_mp2_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_mp2_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_mp2_1" id="pl_mp2_1x" <?php if($pl->pl_mp2_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_mp2_1x">No</label>
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
                        <div class="col-md-8">
                            <?php if(empty($pl->pl_mp3_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>   
                            Has the sample been fitted on a live / dummy ?</div>
                        </div>
                        <div class="col-md-2">                
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_mp3_1" id="pl_mp3_1" <?php if($pl->pl_mp3_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_mp3_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_mp3_1" id="pl_mp3_1x" <?php if($pl->pl_mp3_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_mp3_1x">No</label>
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
                    <div class="form-group row">
                        <div class="col-md-5"><div class="alert alert-secondary" role="alert">The first fit pattern is checked & authorized to procced</div></div>
                        <div class="col-md-1"><h5>By</h5></div>
                        <div class="col-md-3"><input type="text" class="form-control" placeholder="By" name="pl_mp4_1" value="<?php echo $pl->pl_mp4_1 ?>"></div>
                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Date" name="pl_mp4_2" id="date2" value="<?php echo $pl->pl_mp4_2 ?>"></div>
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
                            <?php if(empty($pl->pl_mp6_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>   
                            Is the sealed gmt has been made as per construction details ?</div>
                        </div>                                  
                        <div class="col-md-2">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_mp6_1" id="pl_mp6_1" <?php if($pl->pl_mp6_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_mp6_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_mp6_1" id="pl_mp6_1x" <?php if($pl->pl_mp6_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_mp6_1x">No</label>
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
                            <?php if(empty($pl->pl_mp7_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>   
                            Has a washed gmt been sent to the customer ?</div>
                        </div>                                  
                        <div class="col-md-3">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_mp7_1" id="pl_mp7_1" <?php if($pl->pl_mp7_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_mp7_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_mp7_1" id="pl_mp7_1x" <?php if($pl->pl_mp7_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_mp7_1x">No</label>
                            </div>                                                                           
                            <div class="styled-radio">
                                <input type="radio" value="NOT APPLICABLE" name="pl_mp7_1" id="pl_mp7_1y" <?php if($pl->pl_mp7_1 == "NOT APPLICABLE"){echo "checked";} ?>>
                                <label for="pl_mp7_1y">Not Applicable</label>
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
                            <?php if(empty($pl->pl_mp8_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>   
                            Is the Style file Completed ?</div>
                        </div>                                  
                        <div class="col-md-3">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_mp8_1" id="pl_mp8_1" <?php if($pl->pl_mp8_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_mp8_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_mp8_1" id="pl_mp8_1x" <?php if($pl->pl_mp8_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_mp8_1x">No</label>
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
                            <?php if(empty($pl->pl_mp9_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>   
                            Pattern / Placement boards for Lace Cutting</div>
                        </div>                                  
                        <div class="col-md-3">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_mp9_1" id="pl_mp9_1" <?php if($pl->pl_mp9_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_mp9_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_mp9_1" id="pl_mp9_1x" <?php if($pl->pl_mp9_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_mp9_1x">No</label>
                            </div>                                                                           
                            <div class="styled-radio">
                                <input type="radio" value="NOT APPLICABLE" name="pl_mp9_1" id="pl_mp9_1y" <?php if($pl->pl_mp9_1 == "NOT APPLICABLE"){echo "checked";} ?>>
                                <label for="pl_mp9_1y">Not Applicable</label>
                            </div>                                                                           
                        </div>
                    </div>   
                    <div class="form-group row">
                        <div class="col-md-9">
                            <?php if(empty($pl->pl_mp9_2 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>   
                            Pattern / Placement boards for HS</div>
                        </div>                                  
                        <div class="col-md-3">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_mp9_2" id="pl_mp9_2" <?php if($pl->pl_mp9_2 == "YES"){echo "checked";} ?>>
                                <label for="pl_mp9_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_mp9_2" id="pl_mp9_2x" <?php if($pl->pl_mp9_2 == "NO"){echo "checked";} ?>>
                                <label for="pl_mp9_2x">No</label>
                            </div>                                                                           
                            <div class="styled-radio">
                                <input type="radio" value="NOT APPLICABLE" name="pl_mp9_2" id="pl_mp9_2y" <?php if($pl->pl_mp9_2 == "NOT APPLICABLE"){echo "checked";} ?>>
                                <label for="pl_mp9_2y">Not Applicable</label>
                            </div>                                                                           
                        </div>
                    </div>   
                    <div class="form-group row">
                        <div class="col-md-9">
                            <?php if(empty($pl->pl_mp9_3 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Pattern / Placement boards for EMB</div>
                        </div>                                  
                        <div class="col-md-3">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_mp9_3" id="pl_mp9_3" <?php if($pl->pl_mp9_3 == "YES"){echo "checked";} ?>>
                                <label for="pl_mp9_3">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_mp9_3" id="pl_mp9_3x" <?php if($pl->pl_mp9_3 == "NO"){echo "checked";} ?>>
                                <label for="pl_mp9_3x">No</label>
                            </div>                                                                           
                            <div class="styled-radio">
                                <input type="radio" value="NOT APPLICABLE" name="pl_mp9_3" id="pl_mp9_3y" <?php if($pl->pl_mp9_3 == "NOT APPLICABLE"){echo "checked";} ?>>
                                <label for="pl_mp9_3y">Not Applicable</label>
                            </div>                                                                           
                        </div>
                    </div>   
                    <div class="form-group row">
                        <div class="col-md-9">
                            <?php if(empty($pl->pl_mp9_4 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>   Pattern / Placement boards for Screen Printing</div>
                        </div>                                  
                        <div class="col-md-3">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_mp9_4" id="pl_mp9_4" <?php if($pl->pl_mp9_4 == "YES"){echo "checked";} ?>>
                                <label for="pl_mp9_4">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_mp9_4" id="pl_mp9_4x" <?php if($pl->pl_mp9_4 == "NO"){echo "checked";} ?>>
                                <label for="pl_mp9_4x">No</label>
                            </div>                                                                           
                            <div class="styled-radio">
                                <input type="radio" value="NOT APPLICABLE" name="pl_mp9_4" id="pl_mp9_4y" <?php if($pl->pl_mp9_4 == "NOT APPLICABLE"){echo "checked";} ?>>
                                <label for="pl_mp9_4y">Not Applicable</label>
                            </div>                                                                           
                        </div>
                    </div>   
                    <div class="form-group row">
                        <div class="col-md-9">
                            <?php if(empty($pl->pl_mp9_5 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>   Pattern / Placement boards for Moulding</div>
                        </div>                                  
                        <div class="col-md-3">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_mp9_5" id="pl_mp9_5" <?php if($pl->pl_mp9_5 == "YES"){echo "checked";} ?>>
                                <label for="pl_mp9_5">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_mp9_5" id="pl_mp9_5x" <?php if($pl->pl_mp9_5 == "NO"){echo "checked";} ?>>
                                <label for="pl_mp9_5x">No</label>
                            </div>                                                                           
                            <div class="styled-radio">
                                <input type="radio" value="NOT APPLICABLE" name="pl_mp9_5" id="pl_mp9_5y" <?php if($pl->pl_mp9_5 == "NOT APPLICABLE"){echo "checked";} ?>>
                                <label for="pl_mp9_5y">Not Applicable</label>
                            </div>                                                                           
                        </div>
                    </div>   
                    <div class="form-group row">
                        <div class="col-md-9">
                            <?php if(empty($pl->pl_mp9_6 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>   Pattern / Placement boards for Fussing</div>
                        </div>                                  
                        <div class="col-md-3">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_mp9_6" id="pl_mp9_6" <?php if($pl->pl_mp9_6 == "YES"){echo "checked";} ?>>
                                <label for="pl_mp9_6">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_mp9_6" id="pl_mp9_6x" <?php if($pl->pl_mp9_6 == "NO"){echo "checked";} ?>>
                                <label for="pl_mp9_6x">No</label>
                            </div>                                                                           
                            <div class="styled-radio">
                                <input type="radio" value="NOT APPLICABLE" name="pl_mp9_6" id="pl_mp9_6y" <?php if($pl->pl_mp9_6 == "NOT APPLICABLE"){echo "checked";} ?>>
                                <label for="pl_mp9_6y">Not Applicable</label>
                            </div>                                                                           
                        </div>
                    </div>   
                    <div class="form-group row">
                        <div class="col-md-9">
                            <?php if(empty($pl->pl_mp9_7 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>   Pattern / Placement boards for Lamination</div>
                        </div>                                  
                        <div class="col-md-3">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_mp9_7" id="pl_mp9_7" <?php if($pl->pl_mp9_7 == "YES"){echo "checked";} ?>>
                                <label for="pl_mp9_7">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_mp9_7" id="pl_mp9_7x" <?php if($pl->pl_mp9_7 == "NO"){echo "checked";} ?>>
                                <label for="pl_mp9_7x">No</label>
                            </div>                                                                           
                            <div class="styled-radio">
                                <input type="radio" value="NOT APPLICABLE" name="pl_mp9_7" id="pl_mp9_7y" <?php if($pl->pl_mp9_7 == "NOT APPLICABLE"){echo "checked";} ?>>
                                <label for="pl_mp9_7y">Not Applicable</label>
                            </div>                                                                           
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="col-md-1">If Not</div>
                        <div class="col-md-5"><input type="text" class="form-control" placeholder="action" name="pl_mp9_8" value="<?php echo $pl->pl_mp9_8 ?>"></div>
                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Time" name="pl_mp9_9" value="<?php echo $pl->pl_mp9_9 ?>"></div>
                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Action By" name="pl_mp9_10" value="<?php echo $pl->pl_mp9_10 ?>"></div>
                    </div><hr> 
                    <?php if(empty($pl->pl_mp10_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>   Comments on pilot garments</div>
                    <div class="form-group row">
                        <div class="col-md-12"><textarea name="pl_mp10_1" class="form-control" placeholder="Comments"><?php echo $pl->pl_mp10_1 ?></textarea></div>
                    </div>                            
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseTwo">
                    <div class="card-title">METERIALS</div>
                </a>
                <div id="collapseTwo" class="card-body collapse pt-0" data-parent="#accordion">
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
                                            <input type="checkbox" name="pl_me1_1" id="pl_me1_1" <?php if($pl->pl_me1_1 == "on"){echo "checked";} ?>>
                                            <label for="pl_me1_1"></label>
                                        </div>                                                    
                                   </td>
                                   <td>Fabric pre-production notes availability</td>
                                   <td><input type="text" name="pl_me1_5" class="form-control" value="<?php echo $pl->pl_me1_5 ?>"></td>
                                   <td><input type="text" name="pl_me1_6" class="form-control" value="<?php echo $pl->pl_me1_6 ?>"></td>
                               </tr>                                               
                                <tr>                                                   
                                   <td>                                                    
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="pl_me1_2" id="pl_me1_2" <?php if($pl->pl_me1_2 == "on"){echo "checked";} ?>>
                                            <label for="pl_me1_2"></label>
                                        </div>                                                    
                                   </td>
                                   <td>Fabric defects card availabilty</td>
                                   <td><input type="text" name="pl_me1_7" class="form-control" value="<?php echo $pl->pl_me1_7 ?>"></td>
                                   <td><input type="text" name="pl_me1_8" class="form-control" value="<?php echo $pl->pl_me1_8 ?>"></td>
                               </tr>                                               
                               <tr>                                                   
                                   <td>                                                    
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="pl_me1_3" id="pl_me1_3" <?php if($pl->pl_me1_3 == "on"){echo "checked";} ?>>
                                            <label for="pl_me1_3"></label>
                                        </div>                                                    
                                   </td>
                                   <td>HS/Emb/Print/Fusing/Moulding/Lamination Standart & conditions</td>
                                   <td><input type="text" name="pl_me1_9" class="form-control" value="<?php echo $pl->pl_me1_9 ?>"></td>
                                   <td><input type="text" name="pl_me1_10" class="form-control" value="<?php echo $pl->pl_me1_10 ?>"></td>
                               </tr>                                               
                               <tr>                                                   
                                   <td>                                                    
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="pl_me1_4" id="pl_me1_4" <?php if($pl->pl_me1_4 == "on"){echo "checked";} ?>>
                                            <label for="pl_me1_4"></label>
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
                            <?php if(empty($pl->pl_me2_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Is there any thing to be added / ammended on the answers / comments/made at the pre-production meeting</div>
                        </div>                                  
                        <div class="col-md-2">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_me2_1" id="pl_me2_1" <?php if($pl->pl_me2_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_me2_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_me2_1" id="pl_me2_1x" <?php if($pl->pl_me2_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_me2_1x">No</label>
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
                    <?php if(empty($pl->pl_me3_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Fabric Technical Specifications & Compositions</div> 
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
                            <?php if(empty($pl->pl_me3_9 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Do these two match together (Fabric composition & wash care lable instructions) ?</div>
                        </div>                                  
                        <div class="col-md-2">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_me3_9" id="pl_me3_9" <?php if($pl->pl_me3_9 == "YES"){echo "checked";} ?>>
                                <label for="pl_me3_9">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_me3_9" id="pl_me3_9x" <?php if($pl->pl_me3_9 == "NO"){echo "checked";} ?>>
                                <label for="pl_me3_9x">No</label>
                            </div>                                                                                     
                        </div>
                    </div>                          
                    <div class="form-group row">
                        <div class="col-md-1">If Not</div>
                        <div class="col-md-3"><input type="text" name="pl_me3_10" class="form-control" placeholder="Action" value="<?php echo $pl->pl_me3_10 ?>"></div>
                        <div class="col-md-3"><input type="text" name="pl_me3_11" class="form-control" placeholder="Action By" value="<?php echo $pl->pl_me3_11 ?>"></div>
                        <div class="col-md-3"><input type="text" name="pl_me3_12" class="form-control" placeholder="Date" value="<?php echo $pl->pl_me3_12 ?>" id="date3"></div>
                    </div><hr>  
                        <?php if(empty($pl->pl_me4_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Trims inspection and approval</div>
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
                            <?php if(empty($pl->pl_me5_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Any Special comments & / or care to be taken</div>
                        </div>
                        <div class="col-md-7"><textarea name="pl_me5_1" class="form-control" placeholder="Special Comments"><?php echo $pl->pl_me5_1 ?></textarea></div>
                    </div>
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseThree">
                    <div class="card-title">MACHINERY</div>
                </a>
                <div id="collapseThree" class="card-body collapse pt-0" data-parent="#accordion">
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
                                            <input type="checkbox" name="pl_ma1_1" id="pl_ma1_1" <?php if($pl->pl_ma1_1 == "on"){echo "checked";} ?>>
                                            <label for="pl_ma1_1"></label>
                                        </div>                                                    
                                   </td>
                                   <td>Extra/Sepcial machiunery requested</td>
                                   <td><input type="text" name="pl_ma1_4" class="form-control" value="<?php echo $pl->pl_ma1_4 ?>"></td>
                                   <td><input type="text" name="pl_ma1_5" class="form-control" value="<?php echo $pl->pl_ma1_5 ?>"></td>
                               </tr>                                               
                                <tr>                                                   
                                   <td>                                                    
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="pl_ma1_2" id="pl_ma1_2" <?php if($pl->pl_ma1_2 == "on"){echo "checked";} ?>>
                                            <label for="pl_ma1_2"></label>
                                        </div>                                                    
                                   </td>
                                   <td>Extra/Sepcial needles requested</td>
                                   <td><input type="text" name="pl_ma1_6" class="form-control" value="<?php echo $pl->pl_ma1_6 ?>"></td>
                                   <td><input type="text" name="pl_ma1_7" class="form-control" value="<?php echo $pl->pl_ma1_7 ?>"></td>
                               </tr>                                               
                               <tr>                                                   
                                   <td>                                                    
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="pl_ma1_3" id="pl_ma1_3" <?php if($pl->pl_ma1_3 == "on"){echo "checked";} ?>>
                                            <label for="pl_ma1_3"></label>
                                        </div>                                                    
                                   </td>
                                   <td>Attachemnts</td>
                                   <td><input type="text" name="pl_ma1_8" class="form-control" value="<?php echo $pl->pl_ma1_8 ?>"></td>
                                   <td><input type="text" name="pl_ma1_9" class="form-control" value="<?php echo $pl->pl_ma1_9 ?>"></td>
                               </tr>                                                                         
                           </tbody>
                       </table>                                                           
                    </div> <hr>  
                     <?php if(empty($pl->pl_ma2_1) || empty($pl->pl_ma2_2) || empty($pl->pl_ma2_3) || empty($pl->pl_ma2_4) ||
                     empty($pl->pl_ma2_5)) { ?>
                          <div class="alert alert-danger" role="alert">
                      <?php }else{ ?>
                          <div class="alert alert-secondary" role="alert">                                
                      <?php } ?>Have the following requirements been met in the pilot sewing</div>
                    <div class="form-group row">
                        <div class="col-md-3">The machinery set to the spec</div>
                        <div class="col-md-1">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_ma2_1" id="pl_ma2_1" <?php if($pl->pl_ma2_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_ma2_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_ma2_1" id="pl_ma2_1x" <?php if($pl->pl_ma2_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_ma2_1x">No</label>
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
                                <input type="radio" value="YES" name="pl_ma2_2" id="pl_ma2_2" <?php if($pl->pl_ma2_2 == "YES"){echo "checked";} ?>>
                                <label for="pl_ma2_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_ma2_2" id="pl_ma2_2x" <?php if($pl->pl_ma2_2 == "NO"){echo "checked";} ?>>
                                <label for="pl_ma2_2x">No</label>
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
                                <input type="radio" value="YES" name="pl_ma2_3" id="pl_ma2_3" <?php if($pl->pl_ma2_3 == "YES"){echo "checked";} ?>>
                                <label for="pl_ma2_3">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_ma2_3" id="pl_ma2_3x" <?php if($pl->pl_ma2_3 == "NO"){echo "checked";} ?>>
                                <label for="pl_ma2_3x">No</label>
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
                                <input type="radio" value="YES" name="pl_ma2_4" id="pl_ma2_4" <?php if($pl->pl_ma2_4 == "YES"){echo "checked";} ?>>
                                <label for="pl_ma2_4">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_ma2_4" id="pl_ma2_4x" <?php if($pl->pl_ma2_4 == "NO"){echo "checked";} ?>>
                                <label for="pl_ma2_4x">No</label>
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
                                <input type="radio" value="YES" name="pl_ma2_5" id="pl_ma2_5" <?php if($pl->pl_ma2_5 == "YES"){echo "checked";} ?>>
                                <label for="pl_ma2_5">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_ma2_5" id="pl_ma2_5x" <?php if($pl->pl_ma2_5 == "NO"){echo "checked";} ?>>
                                <label for="pl_ma2_5x">No</label>
                            </div>                                   
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="pl_ma2_18" placeholder="Reason" value="<?php echo $pl->pl_ma2_18 ?>"></div>
                        <div class="col-md-3"><input type="text" class="form-control" name="pl_ma2_19" placeholder="Action" value="<?php echo $pl->pl_ma2_19 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="pl_ma2_20" placeholder="Action By" value="<?php echo $pl->pl_ma2_20 ?>"></div>
                    </div><hr>
                    <div class="form-group row">
                        <div class="col-md-9">
                            <?php if(empty($pl->pl_ma3_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Is necessary to hire any machinery</div></div>
                        <div class="col-md-2">                                    
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_ma3_1" id="pl_ma3_1" <?php if($pl->pl_ma3_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_ma3_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_ma3_1" id="pl_ma3_1x" <?php if($pl->pl_ma3_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_ma3_1x">No</label>
                            </div>                                                                  
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">If Yes Specify</div>
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="Specify" name="pl_ma3_2" value="<?php echo $pl->pl_ma3_2 ?>"></div>
                    </div><hr>  
                    <div class="form-group row">
                        <div class="col-md-9"> <?php if(empty($pl->pl_ma4_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>What there any detection of needle damage ?</div></div>
                        <div class="col-md-2">                                    
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_ma4_1" id="pl_ma4_1" <?php if($pl->pl_ma4_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_ma4_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_ma4_1" id="pl_ma4_1x" <?php if($pl->pl_ma4_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_ma4_1x">No</label>
                            </div>                                                                  
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">If Yes</div>
                        <div class="col-md-4"><input type="text" class="form-control" placeholder="Action" name="pl_ma4_2" value="<?php echo $pl->pl_ma4_2 ?>"></div>
                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Action By" name="pl_ma4_3" value="<?php echo $pl->pl_ma4_3 ?>"></div>
                    </div><hr>
                    <div class="form-group row">
                        <div class="col-md-4"> <?php if(empty($pl->pl_ma5_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Any special comment ?</div></div>
                        <div class="col-md-8"><textarea name="pl_ma5_1" class="form-control" placeholder="Comments"><?php echo $pl->pl_ma5_1 ?></textarea></div>
                    </div>
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseFour">
                    <div class="card-title">MAKE UP PILOT</div>
                </a>
                <div id="collapseFour" class="card-body collapse pt-0" data-parent="#accordion">
                	 <?php if(empty($pl->pl_mu1_1) || empty($pl->pl_mu1_2) || empty($pl->pl_mu1_3) || empty($pl->pl_mu1_4)) { ?>
                          <div class="alert alert-danger" role="alert">
                      <?php }else{ ?>
                          <div class="alert alert-secondary" role="alert">                                
                      <?php } ?>Merchants training and their perfomance</div>
                        <div class="form-group row">
                            <div class="col-md-4">The sealed garment is shown and explained</div>
                            <div class="col-md-1">
                                <div class="styled-radio">
                                    <input type="radio" value="YES" name="pl_mu1_1" id="pl_mu1_1" <?php if($pl->pl_mu1_1 == "YES"){echo "checked";} ?>>
                                    <label for="pl_mu1_1">Yes</label>
                                </div>                                        
                                <div class="styled-radio">
                                    <input type="radio" value="NO" name="pl_mu1_1" id="pl_mu1_1x" <?php if($pl->pl_mu1_1 == "NO"){echo "checked";} ?>>
                                    <label for="pl_mu1_1x">No</label>
                                </div>
                            </div>
                            <div class="col-md-4"><input type="text" class="form-control" name="pl_mu1_5" placeholder="If Not, Action" value="<?php echo $pl->pl_mu1_5 ?>"></div>
                            <div class="col-md-3"><input type="text" class="form-control" name="pl_mu1_6" placeholder="Action By" value="<?php echo $pl->pl_mu1_6 ?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">All of them have been issued pink cards</div>
                            <div class="col-md-1">
                                <div class="styled-radio">
                                    <input type="radio" value="YES" name="pl_mu1_2" id="pl_mu1_2" <?php if($pl->pl_mu1_2 == "YES"){echo "checked";} ?>>
                                    <label for="pl_mu1_2">Yes</label>
                                </div>                                        
                                <div class="styled-radio">
                                    <input type="radio" value="NO" name="pl_mu1_2" id="pl_mu1_2x" <?php if($pl->pl_mu1_2 == "NO"){echo "checked";} ?>>
                                    <label for="pl_mu1_2x">No</label>
                                </div>                                                                           
                            </div>
                            <div class="col-md-4"><input type="text" class="form-control" name="pl_mu1_7" placeholder="If Not, Action" value="<?php echo $pl->pl_mu1_7 ?>"></div>
                            <div class="col-md-3"><input type="text" class="form-control" name="pl_mu1_8" placeholder="Action By" value="<?php echo $pl->pl_mu1_8 ?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">Have operators reached the requried standart of the sealed gmt ?</div>
                            <div class="col-md-1">
                                <div class="styled-radio">
                                    <input type="radio" value="YES" name="pl_mu1_3" id="pl_mu1_3" <?php if($pl->pl_mu1_3 == "YES"){echo "checked";} ?>>
                                    <label for="pl_mu1_3">Yes</label>
                                </div>                                        
                                <div class="styled-radio">
                                    <input type="radio" value="NO" name="pl_mu1_3" id="pl_mu1_3x" <?php if($pl->pl_mu1_3 == "NO"){echo "checked";} ?>>
                                    <label for="pl_mu1_3x">No</label>
                                </div>                                                                           
                            </div>
                            <div class="col-md-4"><input type="text" class="form-control" name="pl_mu1_9" placeholder="If Not, Action" value="<?php echo $pl->pl_mu1_9 ?>"></div>
                            <div class="col-md-3"><input type="text" class="form-control" name="pl_mu1_10" placeholder="Action By" value="<?php echo $pl->pl_mu1_10 ?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">Can they constantly meet up to the standarts of the sealed gmt?</div>
                            <div class="col-md-1">
                                <div class="styled-radio">
                                    <input type="radio" value="YES" name="pl_mu1_4" id="pl_mu1_4" <?php if($pl->pl_mu1_4 == "YES"){echo "checked";} ?>>
                                    <label for="pl_mu1_4">Yes</label>
                                </div>                                        
                                <div class="styled-radio">
                                    <input type="radio" value="NO" name="pl_mu1_4" id="pl_mu1_4x" <?php if($pl->pl_mu1_4 == "NO"){echo "checked";} ?>>
                                    <label for="pl_mu1_4x">No</label>
                                </div>                                                                           
                            </div>
                            <div class="col-md-4"><input type="text" class="form-control" name="pl_mu1_11" placeholder="If Not, Action" value="<?php echo $pl->pl_mu1_11 ?>"></div>
                            <div class="col-md-3"><input type="text" class="form-control" name="pl_mu1_12" placeholder="Action By" value="<?php echo $pl->pl_mu1_12 ?>"></div>
                        </div><hr>
                        <h4>Setting up machinery</h4>
                        <div class="form-group row">
                            <div class="col-md-6"><?php if(empty($pl->pl_mu2_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Who was involved in setting up the machinery ?</div></div>
                            <div class="col-md-6"><input type="text" class="form-control" name="pl_mu2_1" value="<?php echo $pl->pl_mu2_1 ?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9"><?php if(empty($pl->pl_mu2_2 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Have inline measurment been set on the machines ?</div></div>
                            <div class="col-md-2">                                    
                                <div class="styled-radio">
                                    <input type="radio" value="YES" name="pl_mu2_2" id="pl_mu2_2" <?php if($pl->pl_mu2_2 == "YES"){echo "checked";} ?>>
                                    <label for="pl_mu2_2">Yes</label>
                                </div>                                        
                                <div class="styled-radio">
                                    <input type="radio" value="NO" name="pl_mu2_2" id="pl_mu2_2x" <?php if($pl->pl_mu2_2 == "NO"){echo "checked";} ?>>
                                    <label for="pl_mu2_2x">No</label>
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
                        </div><hr>
                        <div class="form-group row">
                            <div class="col-md-6"><?php if(empty($pl->pl_mu3_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>How many operation stages are there ?</div></div>
                            <div class="col-md-6"><input type="text" class="form-control" name="pl_mu3_1" value="<?php echo $pl->pl_mu3_1 ?>"></div>
                        </div><hr>
                        <div class="form-group row">
                            <div class="col-md-10">
                                <?php if(empty($pl->pl_mu4_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>A standart gmt has been displayed in line signed by FM, PM Technician, TM, QAM</div>
                            </div>                                  
                            <div class="col-md-2">
                                <div class="styled-radio">
                                    <input type="radio" value="YES" name="pl_mu4_1" id="pl_mu4_1" <?php if($pl->pl_mu4_1 == "YES"){echo "checked";} ?>>
                                    <label for="pl_mu4_1">Yes</label>
                                </div>                                        
                                <div class="styled-radio">
                                    <input type="radio" value="NO" name="pl_mu4_1" id="pl_mu4_1x" <?php if($pl->pl_mu4_1 == "NO"){echo "checked";} ?>>
                                    <label for="pl_mu4_1x">No</label>
                                </div>                                                                            
                            </div>
                        </div>  
                        <div class="form-group row">
                            <div class="col-md-1">If Not,</div>
                            <div class="col-md-2">The Date it would be completed</div>
                            <div class="col-md-3"><input type="text" name="pl_mu4_2" id="date10" class="form-control" value="<?php echo $pl->pl_mu4_2 ?>"></div>
                            <div class="col-md-2">Action By</div>
                            <div class="col-md-3"><input type="text" name="pl_mu4_3" class="form-control" value="<?php echo $pl->pl_mu4_3 ?>"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <?php if(empty($pl->pl_mu4_4 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Has a sample garment been sent to the warehouse ?</div>
                            </div>                                  
                            <div class="col-md-3">
                                <div class="styled-radio">
                                    <input type="radio" value="YES" name="pl_mu4_4" id="pl_mu4_4" <?php if($pl->pl_mu4_4 == "YES"){echo "checked";} ?>>
                                    <label for="pl_mu4_4">Yes</label>
                                </div>                                        
                                <div class="styled-radio">
                                    <input type="radio" value="NO" name="pl_mu4_4" id="pl_mu4_4x" <?php if($pl->pl_mu4_4 == "NO"){echo "checked";} ?>>
                                    <label for="pl_mu4_4x">No</label>
                                </div>                                                                           
                            </div>
                        </div>   
                        <div class="form-group row">
                            <div class="col-md-1">If Not</div>                                        
                            <div class="col-md-3">The date it would be sent</div>
                            <div class="col-md-3"><input type="text" class="form-control" id="date11" placeholder="The date it would be sent" name="pl_mu4_5" value="<?php echo $pl->pl_mu4_5 ?>"></div>
                            <div class="col-md-3"><input type="text" class="form-control" placeholder="Action By" name="pl_mu4_6" value="<?php echo $pl->pl_mu4_6 ?>"></div>
                        </div><hr>
                        <div class="form-group row">
                        <div class="col-md-6">
                            <?php if(empty($pl->pl_mu5_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Was there any adverse fabric reaction ?</div>
                        </div>
                        <div class="col-md-2">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_mu5_1" id="pl_mu5_1" <?php if($pl->pl_mu5_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_mu5_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_mu5_1" id="pl_mu5_1x" <?php if($pl->pl_mu5_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_mu5_1x">No</label>
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
                            <?php if(empty($pl->pl_mu5_6 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Is it affected to the final garment measurement ?</div>
                        </div>
                        <div class="col-md-2">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_mu5_6" id="pl_mu5_6" <?php if($pl->pl_mu5_6 == "YES"){echo "checked";} ?>>
                                <label for="pl_mu5_6">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_mu5_6" id="pl_mu5_6x" <?php if($pl->pl_mu5_6 == "NO"){echo "checked";} ?>>
                                <label for="pl_mu5_6x">No</label>
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
                                <input type="radio" value="YES" name="pl_mu6_4" id="pl_mu6_4" <?php if($pl->pl_mu6_4 == "YES"){echo "checked";} ?>>
                                <label for="pl_mu6_4">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_mu6_4" id="pl_mu6_4x" <?php if($pl->pl_mu6_4 == "NO"){echo "checked";} ?>>
                                <label for="pl_mu6_4x">No</label>
                            </div>                                                                  
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-1">If Yes</div>
                        <div class="col-md-4"><input type="text" class="form-control" placeholder="Reason" name="pl_mu6_5" value="<?php echo $pl->pl_mu6_5 ?>"></div>
                        <div class="col-md-4"><input type="text" class="form-control" placeholder="Preventive action taken" name="pl_mu6_6" value="<?php echo $pl->pl_mu6_6 ?>"></div>
                    </div>
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseFive">
                    <div class="card-title">GARMENT APPRAISAL</div>
                </a>
                <div id="collapseFive" class="card-body collapse pt-0" data-parent="#accordion">                	
                    <?php if(empty($pl2->pl_ga1_1) || empty($pl2->pl_ga1_2) || empty($pl2->pl_ga1_3) || empty($pl2->pl_ga1_4) || empty($pl2->pl_ga1_5) || empty($pl2->pl_ga1_6) || empty($pl2->pl_ga1_7)) { ?>
                          <div class="alert alert-danger" role="alert">
                      <?php }else{ ?>
                          <div class="alert alert-secondary" role="alert">                                
                      <?php } ?>Are the following correct according to the spec ?</div>
                    <div class="form-group row">
                        <div class="col-md-4">Stitches per 3cm/SPI</div>
                        <div class="col-md-1">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_ga1_1" id="pl_ga1_1" <?php if($pl2->pl_ga1_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_ga1_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_ga1_1" id="pl_ga1_1x" <?php if($pl2->pl_ga1_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_ga1_1x">No</label>
                            </div>                                                                           
                        </div>
                        <div class="col-md-4"><input type="text" class="form-control" name="pl_ga1_8" placeholder="If Not, Action" value="<?php echo $pl2->pl_ga1_8 ?>"></div>
                        <div class="col-md-3"><input type="text" class="form-control" name="pl_ga1_9" placeholder="Action By" value="<?php echo $pl2->pl_ga1_9 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">Specified bite / gauge</div>
                        <div class="col-md-1">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_ga1_2" id="pl_ga1_2" <?php if($pl2->pl_ga1_2 == "YES"){echo "checked";} ?>>
                                <label for="pl_ga1_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_ga1_2" id="pl_ga1_2x" <?php if($pl2->pl_ga1_2 == "NO"){echo "checked";} ?>>
                                <label for="pl_ga1_2x">No</label>
                            </div>                                                                           
                        </div>
                        <div class="col-md-4"><input type="text" class="form-control" name="pl_ga1_10" placeholder="If Not, Action" value="<?php echo $pl2->pl_ga1_10 ?>"></div>
                        <div class="col-md-3"><input type="text" class="form-control" name="pl_ga1_11" placeholder="Action By" value="<?php echo $pl2->pl_ga1_11 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">Label and UPC details against Trim Card</div>
                        <div class="col-md-1">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_ga1_3" id="pl_ga1_3" <?php if($pl2->pl_ga1_3 == "YES"){echo "checked";} ?>>
                                <label for="pl_ga1_3">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_ga1_3" id="pl_ga1_3x" <?php if($pl2->pl_ga1_3 == "NO"){echo "checked";} ?>>
                                <label for="pl_ga1_3x">No</label>
                            </div>                                                                           
                        </div>
                        <div class="col-md-4"><input type="text" class="form-control" name="pl_ga1_12" placeholder="If Not, Action" value="<?php echo $pl2->pl_ga1_12 ?>"></div>
                        <div class="col-md-3"><input type="text" class="form-control" name="pl_ga1_13" placeholder="Action By" value="<?php echo $pl2->pl_ga1_13 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">Gmt measurements</div>
                        <div class="col-md-1">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_ga1_4" id="pl_ga1_4" <?php if($pl2->pl_ga1_4 == "YES"){echo "checked";} ?>>
                                <label for="pl_ga1_4">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_ga1_4" id="pl_ga1_4x" <?php if($pl2->pl_ga1_4 == "NO"){echo "checked";} ?>>
                                <label for="pl_ga1_4x">No</label>
                            </div>                                                                           
                        </div>
                        <div class="col-md-4"><input type="text" class="form-control" name="pl_ga1_14" placeholder="If Not, Action" value="<?php echo $pl2->pl_ga1_14 ?>"></div>
                        <div class="col-md-3"><input type="text" class="form-control" name="pl_ga1_15" placeholder="Action By" value="<?php echo $pl2->pl_ga1_15 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">Gmts fit against the grades</div>
                        <div class="col-md-1">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_ga1_5" id="pl_ga1_5" <?php if($pl2->pl_ga1_5 == "YES"){echo "checked";} ?>>
                                <label for="pl_ga1_5">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_ga1_5" id="pl_ga1_5x" <?php if($pl2->pl_ga1_5 == "NO"){echo "checked";} ?>>
                                <label for="pl_ga1_5x">No</label>
                            </div>                                                                           
                        </div>
                        <div class="col-md-4"><input type="text" class="form-control" name="pl_ga1_16" placeholder="If Not, Action" value="<?php echo $pl2->pl_ga1_16 ?>"></div>
                        <div class="col-md-3"><input type="text" class="form-control" name="pl_ga1_17" placeholder="Action By" value="<?php echo $pl2->pl_ga1_17 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">Gmts when compared to the sealed gmt</div>
                        <div class="col-md-1">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_ga1_6" id="pl_ga1_6" <?php if($pl2->pl_ga1_6 == "YES"){echo "checked";} ?>>
                                <label for="pl_ga1_6">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_ga1_6" id="pl_ga1_6x" <?php if($pl2->pl_ga1_6 == "NO"){echo "checked";} ?>>
                                <label for="pl_ga1_6x">No</label>
                            </div>                                                                           
                        </div>
                        <div class="col-md-4"><input type="text" class="form-control" name="pl_ga1_18" placeholder="If Not, Action" value="<?php echo $pl2->pl_ga1_18 ?>"></div>
                        <div class="col-md-3"><input type="text" class="form-control" name="pl_ga1_19" placeholder="Action By" value="<?php echo $pl2->pl_ga1_19 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">Packing & labels</div>
                        <div class="col-md-1">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_ga1_7" id="pl_ga1_7" <?php if($pl2->pl_ga1_7 == "YES"){echo "checked";} ?>>
                                <label for="pl_ga1_7">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_ga1_7" id="pl_ga1_7x" <?php if($pl2->pl_ga1_7 == "NO"){echo "checked";} ?>>
                                <label for="pl_ga1_7x">No</label>
                            </div>                                                                           
                        </div>
                        <div class="col-md-4"><input type="text" class="form-control" name="pl_ga1_20" placeholder="If Not, Action" value="<?php echo $pl2->pl_ga1_20 ?>"></div>
                        <div class="col-md-3"><input type="text" class="form-control" name="pl_ga1_21" placeholder="Action By" value="<?php echo $pl2->pl_ga1_21 ?>"></div>
                    </div><hr>
                    <div class="form-group row">
                        <div class="col-md-8">
                             <?php if(empty($pl2->pl_ga2_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Was there any noticeable difference in the gmt after washing ?</div>
                        </div>                                  
                        <div class="col-md-4">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_ga2_1" id="pl_ga2_1" <?php if($pl2->pl_ga2_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_ga2_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_ga2_1" id="pl_ga2_1x" <?php if($pl2->pl_ga2_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_ga2_1x">No</label>
                            </div>
                            <div class="styled-radio">
                                <input type="radio" value="NOT APPLICABLE" name="pl_ga2_1" id="pl_ga2_1y" <?php if($pl2->pl_ga2_1 == "NOT APPLICABLE"){echo "checked";} ?>>
                                <label for="pl_ga2_1y">Not Applicable</label>
                            </div>
                        </div>
                    </div>  
                    <div class="form-group row">
                        <div class="col-md-1">If Yes,</div>
                        <div class="col-md-4"><input type="text" class="form-control" placeholder="Difference" name="pl_ga2_2" value="<?php echo $pl2->pl_ga2_2 ?>"></div>
                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Action" name="pl_ga2_3" value="<?php echo $pl2->pl_ga2_3 ?>"></div>
                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Action By" name="pl_ga2_4" value="<?php echo $pl2->pl_ga2_4 ?>"></div>
                    </div><hr>
                    <div class="form-group row">
                        <div class="col-md-9"><?php if(empty($pl2->pl_ga3_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Is there any job/trim/accesory not on the pilot gmt which should be on the customer gmt ?</div></div>
                        <div class="col-md-2">                                    
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_ga3_1" id="pl_ga3_1" <?php if($pl2->pl_ga3_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_ga3_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_ga3_1" id="pl_ga3_1x" <?php if($pl2->pl_ga3_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_ga3_1x">No</label>
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
                        <div class="col-md-9"><?php if(empty($pl2->pl_ga5_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Are any confident that the production could progress without any Technician issues coming up in the bulk production ?</div></div>
                        <div class="col-md-2">                                    
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_ga5_1" id="pl_ga5_1" <?php if($pl2->pl_ga5_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_ga5_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_ga5_1" id="pl_ga5_1x" <?php if($pl2->pl_ga5_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_ga5_1x">No</label>
                            </div>                                                                  
                        </div>
                    </div><hr>
                    <div class="form-group row">
                        <div class="col-md-4"><?php if(empty($pl2->pl_ga6_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Any special comment ?</div></div>
                        <div class="col-md-8"><textarea name="pl_ga6_1" class="form-control" placeholder="Comments"><?php echo $pl2->pl_ga6_1 ?></textarea></div>
                    </div>
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseSix">
                    <div class="card-title">CUTTING</div>
                </a>
                <div id="collapseSix" class="card-body collapse pt-0" data-parent="#accordion">
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
                                            <input type="checkbox" name="pl_cu1_1" id="pl_cu1_1" <?php if($pl2->pl_cu1_1 == "on"){echo "checked";} ?>>
                                            <label for="pl_cu1_1"></label>
                                        </div>
                                   </td>
                                   <td>Max. Marker Length</td>
                                   <td><input type="text" name="pl_cu1_4" class="form-control" placeholder="Action" value="<?php echo $pl2->pl_cu1_4 ?>"></td>
                                   <td><input type="text" name="pl_cu1_5" class="form-control" placeholder="Comments" value="<?php echo $pl2->pl_cu1_5 ?>"></td>
                               </tr>
                               <tr>
                                   <td>
                                       <div class="styled-checkbox">
                                            <input type="checkbox" name="pl_cu1_2" id="pl_cu1_2" <?php if($pl2->pl_cu1_2 == "on"){echo "checked";} ?>>
                                            <label for="pl_cu1_2"></label>
                                        </div>
                                   </td>
                                   <td>Max. Ply height</td>
                                   <td><input type="text" name="pl_cu1_6" class="form-control" placeholder="Action" value="<?php echo $pl2->pl_cu1_6 ?>"></td>
                                   <td><input type="text" name="pl_cu1_7" class="form-control" placeholder="Comments" value="<?php echo $pl2->pl_cu1_7 ?>"></td>
                               </tr>
                               <tr>
                                   <td>
                                       <div class="styled-checkbox">
                                            <input type="checkbox" name="pl_cu1_3" id="pl_cu1_3" <?php if($pl2->pl_cu1_3 == "on"){echo "checked";} ?>>
                                            <label for="pl_cu1_3"></label>
                                        </div>
                                   </td>
                                   <td>Cutting method</td>
                                   <td><input type="text" name="pl_cu1_8" class="form-control" placeholder="Action" value="<?php echo $pl2->pl_cu1_8 ?>"></td>
                                   <td><input type="text" name="pl_cu1_9" class="form-control" placeholder="Comments" value="<?php echo $pl2->pl_cu1_9 ?>"></td>
                               </tr>                                               
                           </tbody>
                       </table>                                                           
                    </div><hr>  
                    <div class="alert alert-secondary" role="alert">Pilot Cut</div>
                    <div class="form-group row">
                        <div class="col-md-3">Cut Date</div>
                        <div class="col-md-3"><input type="text" class="form-control" name="pl_cu2_1" placeholder="Cut Date" id="date1" value="<?php echo $pl2->pl_cu2_1 ?>"></div>
                        <div class="col-md-3">No. of Gmts Cut</div>
                        <div class="col-md-3"><input type="text" class="form-control" name="pl_cu2_2" placeholder="No. of Gmts Cut" value="<?php echo $pl2->pl_cu2_2 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">Docket no.</div>
                        <div class="col-md-3"><input type="text" class="form-control" name="pl_cu2_3" placeholder="Docket no." value="<?php echo $pl2->pl_cu2_3 ?>"></div>
                        <div class="col-md-3">Marker no.</div>
                        <div class="col-md-3"><input type="text" class="form-control" name="pl_cu2_4" placeholder="Marker no." value="<?php echo $pl2->pl_cu2_4 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">Ply depth</div>
                        <div class="col-md-3"><input type="text" class="form-control" name="pl_cu2_5" placeholder="Ply depth" value="<?php echo $pl2->pl_cu2_5 ?>"></div>
                        <div class="col-md-3">Relaxatioan</div>
                        <div class="col-md-3"><input type="text" class="form-control" name="pl_cu2_6" placeholder="Relaxatioan" value="<?php echo $pl2->pl_cu2_6 ?>"></div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <?php if(empty($pl2->pl_cu3_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Where there any difficult pieces when cutting ?</div>                                            
                        </div>
                        <div class="col-md-1">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_cu3_1" id="pl_cu3_1" <?php if($pl2->pl_cu3_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_cu3_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_cu3_1" id="pl_cu3_1x" <?php if($pl2->pl_cu3_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_cu3_1x">No</label>
                            </div>      
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-1">If yes</div>
                        <div class="col-md-4">Specify</div>
                        <div class="col-md-4"><input type="text" name="pl_cu3_2" class="form-control" value="<?php echo $pl2->pl_cu3_2 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-1"></div>
                        <div class="col-md-4">Action taken to overcome them</div>
                        <div class="col-md-4"><input type="text" name="pl_cu3_3" class="form-control" value="<?php echo $pl2->pl_cu3_3 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-1"></div>
                        <div class="col-md-4">Action need to solve them from Lab/Technical</div>
                        <div class="col-md-4"><input type="text" name="pl_cu3_4" class="form-control" value="<?php echo $pl2->pl_cu3_4 ?>"></div>
                    </div>
                    <hr>
                     <div class="form-group row">
                        <div class="col-md-3">Fabric spec width</div>
                        <div class="col-md-3"><input type="text" class="form-control" name="pl_cu4_1" placeholder="" value="<?php echo $pl2->pl_cu4_1 ?>"></div>
                        <div class="col-md-3">Fabric actual width</div>
                        <div class="col-md-3"><input type="text" class="form-control" name="pl_cu4_2" placeholder="" value="<?php echo $pl2->pl_cu4_2 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">If actual width < spec width, action</div>
                        <div class="col-md-4"><input type="text" class="form-control" name="pl_cu4_3" placeholder="Action" value="<?php echo $pl2->pl_cu4_3 ?>"></div>                                    
                        <div class="col-md-4"><input type="text" class="form-control" name="pl_cu4_4" placeholder="Action By" value="<?php echo $pl2->pl_cu4_4 ?>"></div>                                    
                    </div><hr>
                    <div id="table-responsive">
                        <table class="table table-bordered">                                       
                           <thead>
                               <th>Fabric & Lace Consumption</th>
                               <th>Costed<br>Con.</th>
                               <th>Actual<br>Con.</th>
                               <th>If, actual con. > Costed con. <br>Preventive action</th>
                               <th>Action by</th>                                               
                           </thead>
                           <tbody>
                               <tr>
                                   <td>Fabric</td>
                                   <td><input type="text" class="form-control" name="pl_cu5_1" value="<?php echo $pl2->pl_cu5_1 ?>"></td>
                                   <td><input type="text" class="form-control" name="pl_cu5_2" value="<?php echo $pl2->pl_cu5_2 ?>"></td>
                                   <td><input type="text" class="form-control" name="pl_cu5_3" value="<?php echo $pl2->pl_cu5_3 ?>"></td>
                                   <td><input type="text" class="form-control" name="pl_cu5_4" value="<?php echo $pl2->pl_cu5_4 ?>"></td>
                               </tr>                                              
                               <tr>
                                   <td>Lace</td>
                                   <td><input type="text" class="form-control" name="pl_cu5_5" value="<?php echo $pl2->pl_cu5_5 ?>"></td>
                                   <td><input type="text" class="form-control" name="pl_cu5_6" value="<?php echo $pl2->pl_cu5_6 ?>"></td>
                                   <td><input type="text" class="form-control" name="pl_cu5_7" value="<?php echo $pl2->pl_cu5_7 ?>"></td>
                                   <td><input type="text" class="form-control" name="pl_cu5_8" value="<?php echo $pl2->pl_cu5_8 ?>"></td>
                               </tr>                                             
                           </tbody>
                       </table>                                                           
                    </div><hr>
                    <div class="form-group row">
                        <div class="col-md-9">
                            <?php if(empty($pl2->pl_cu6_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Was there any adverse reacton on Fabric, Lace(including when H/S, Printing, Fussing ) ?</div>
                        </div>
                        <div class="col-md-1">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_cu6_1" id="pl_cu6_1" <?php if($pl2->pl_cu6_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_cu6_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_cu6_1" id="pl_cu6_1x" <?php if($pl2->pl_cu6_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_cu6_1x">No</label>
                            </div>      
                        </div>
                    </div><h4>If Yes,</h4> <br>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Shrinkage/Growing/...</th>
                                    <th>Part name(s)</th>
                                    <th>Lengthwise</th>
                                    <th>Witdhwise</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" class="form-control" name="pl_cu6_2" value="<?php echo $pl2->pl_cu6_2 ?>"></td>
                                    <td><input type="text" class="form-control" name="pl_cu6_3" value="<?php echo $pl2->pl_cu6_3 ?>"></td>
                                    <td><input type="text" class="form-control" name="pl_cu6_4" value="<?php echo $pl2->pl_cu6_4 ?>"></td>
                                    <td><input type="text" class="form-control" name="pl_cu6_5" value="<?php echo $pl2->pl_cu6_5 ?>"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control" name="pl_cu6_6" value="<?php echo $pl2->pl_cu6_6 ?>"></td>
                                    <td><input type="text" class="form-control" name="pl_cu6_7" value="<?php echo $pl2->pl_cu6_7 ?>"></td>
                                    <td><input type="text" class="form-control" name="pl_cu6_8" value="<?php echo $pl2->pl_cu6_8 ?>"></td>
                                    <td><input type="text" class="form-control" name="pl_cu6_9" value="<?php echo $pl2->pl_cu6_9 ?>"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div><hr>
                    <div class="form-group row">
                        <div class="col-md-9">
                            <?php if(empty($pl2->pl_cu7_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Can the face & reserve side of the fabric be identified ?</div>
                        </div>
                        <div class="col-md-1">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_cu7_1" id="pl_cu7_1" <?php if($pl2->pl_cu7_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_cu7_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_cu7_1" id="pl_cu7_1x" <?php if($pl2->pl_cu7_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_cu7_1x">No</label>
                            </div>      
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">If Yes, How ?</div>    
                        <div class="col-md-6"><input type="text" class="form-control" name="pl_cu7_2" value="<?php echo $pl2->pl_cu7_2 ?>"></div>    
                    </div><h4>If No</h4>
                    <div class="form-group row">
                        <div class="col-md-2">Action need from Lab</div>
                        <div class="col-md-3"><input type="text" class="form-control" name="pl_cu7_3" value="<?php echo $pl2->pl_cu7_3 ?>"></div>
                        <div class="col-md-2">Numbering</div>
                        <div class="col-md-1">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_cu7_4" id="pl_cu7_4" <?php if($pl2->pl_cu7_4 == "YES"){echo "checked";} ?>>
                                <label for="pl_cu7_4">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_cu7_4" id="pl_cu7_4x" <?php if($pl2->pl_cu7_4 == "NO"){echo "checked";} ?>>
                                <label for="pl_cu7_4x">No</label>
                            </div>      
                        </div>
                        <div class="col-md-1">If Yes</div>
                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Method" name="pl_cu7_5" value="<?php echo $pl2->pl_cu7_5 ?>"></div>
                    </div><hr>
                    <div class="form-group row">
                        <div class="col-md-9">
                            <?php if(empty($pl2->pl_cu8_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Does the fabric have to be face up ?</div>
                        </div>
                        <div class="col-md-1">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_cu8_1" id="pl_cu8_1" <?php if($pl2->pl_cu8_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_cu8_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_cu8_1" id="pl_cu8_1x" <?php if($pl2->pl_cu8_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_cu8_1x">No</label>
                            </div>      
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">If not, Reason</div>
                        <div class="col-md-4"><input type="text" class="form-control" name="pl_cu8_2" value="<?php echo $pl2->pl_cu8_2 ?>"></div>
                    </div><hr>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <?php if(empty($pl2->pl_cu9_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>What are the priority points that have been indentified?</div>
                        </div>
                        <div class="col-md-6"><input type="text" class="form-control" name="pl_cu9_1" value="<?php echo $pl2->pl_cu9_1 ?>"></div>
                    </div><hr>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <?php if(empty($pl2->pl_cu10_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>What are the critical points on the marker that have been discussed ?</div>
                        </div>
                        <div class="col-md-6"><input type="text" class="form-control" name="pl_cu10_1" value="<?php echo $pl2->pl_cu10_1 ?>"></div>
                    </div><hr>
                    <div class="form-group row">
                        <div class="col-md-9">
                            <?php if(empty($pl2->pl_cu11_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Any problems encountered with the pattern / placement boards ?</div>
                        </div>
                        <div class="col-md-1">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_cu11_1" id="pl_cu11_1" <?php if($pl2->pl_cu11_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_cu11_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_cu11_1" id="pl_cu11_1x" <?php if($pl2->pl_cu11_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_cu11_1x">No</label>
                            </div>      
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-1">If yes</div>
                        <div class="col-md-3"><input type="text" class="form-control" name="pl_cu11_2" placeholder="Specifiy" value="<?php echo $pl2->pl_cu11_2 ?>"></div>
                        <div class="col-md-3"><input type="text" class="form-control" name="pl_cu11_3" placeholder="Action" value="<?php echo $pl2->pl_cu11_3 ?>"></div>
                        <div class="col-md-3"><input type="text" class="form-control" name="pl_cu11_4" placeholder="Action By" value="<?php echo $pl2->pl_cu11_4 ?>"></div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="col-md-9">
                            <?php if(empty($pl2->pl_cu12_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Have you handle this fabric quality before ?</div>
                        </div>
                        <div class="col-md-1">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_cu12_1" id="pl_cu12_1" <?php if($pl2->pl_cu12_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_cu12_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_cu12_1" id="pl_cu12_1x" <?php if($pl2->pl_cu12_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_cu12_1x">No</label>
                            </div>      
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-1">If yes</div>
                        <div class="col-md-2">What style ?</div>
                        <div class="col-md-3"><input type="text" class="form-control" name="pl_cu12_2" placeholder="" value="<?php echo $pl2->pl_cu12_2 ?>"></div>
                        <div class="col-md-3">What experience would you need to look at ?</div>
                        <div class="col-md-3"><input type="text" class="form-control" name="pl_cu12_3" placeholder="" value="<?php echo $pl2->pl_cu12_3 ?>"></div>
                    </div>
                </div>
                <!-- <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseSeven">
                    <div class="card-title">MOULDING (IF ANY)</div>
                </a>
                <div id="collapseSeven" class="card-body collapse pt-0" data-parent="#accordion">
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
                                            <input type="checkbox" name="pl_mo1_1" id="pl_mo1_1" <?php if($pl2->pl_mo1_1 == "on"){echo "checked";} ?>>
                                            <label for="pl_mo1_1"></label>
                                        </div>
                                   </td>
                                   <td>Mould type/Shape/Size/Cup Depth</td>
                                   <td><input type="text" name="pl_mo1_4" class="form-control" placeholder="Action" value="<?php echo $pl2->pl_mo1_4 ?>"></td>
                                   <td><input type="text" name="pl_mo1_5" class="form-control" placeholder="Comments" value="<?php echo $pl2->pl_mo1_5 ?>"></td>
                               </tr>
                               <tr>
                                   <td>
                                       <div class="styled-checkbox">
                                            <input type="checkbox" name="pl_mo1_2" id="pl_mo1_2" <?php if($pl2->pl_mo1_2 == "on"){echo "checked";} ?>>
                                            <label for="pl_mo1_2"></label>
                                        </div>
                                   </td>
                                   <td>Setting temp. /Time</td>
                                   <td><input type="text" name="pl_mo1_6" class="form-control" placeholder="Action" value="<?php echo $pl2->pl_mo1_6 ?>"></td>
                                   <td><input type="text" name="pl_mo1_7" class="form-control" placeholder="Comments" value="<?php echo $pl2->pl_mo1_7 ?>"></td>
                               </tr>
                               <tr>
                                   <td>
                                       <div class="styled-checkbox">
                                            <input type="checkbox" name="pl_mo1_3" id="pl_mo1_3" <?php if($pl2->pl_mo1_3 == "on"){echo "checked";} ?>>
                                            <label for="pl_mo1_3"></label>
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
                </div> -->
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseEight">
                    <div class="card-title">WORK STUDY</div>
                </a>
                <div id="collapseEight" class="card-body collapse pt-0" data-parent="#accordion">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <?php if(empty($pl2->pl_ws1_6 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>SMV of the garment</div>
                        </div>                                  
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="pl_ws1_6" placeholder="SMV of the garment" value="<?php echo $pl2->pl_ws1_6?>">
                        </div>
                    </div>  
                    <div class="form-group row">
                        <div class="col-md-8">
                            <?php if(empty($pl2->pl_ws1_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Has the planned efficiency been achived by machinist ?</div>
                        </div>                                  
                        <div class="col-md-4">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_ws1_1" id="pl_ws1_1" <?php if($pl2->pl_ws1_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_ws1_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_ws1_1" id="pl_ws1_1x" <?php if($pl2->pl_ws1_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_ws1_1x">No</label>
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
                            <?php if(empty($pl2->pl_ws2_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Is there any proposal or method study reduce the SMV</div>
                        </div>                                  
                        <div class="col-md-4">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_ws2_1" id="pl_ws2_1" <?php if($pl2->pl_ws2_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_ws2_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_ws2_1" id="pl_ws2_1x" <?php if($pl2->pl_ws2_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_ws2_1x">No</label>
                            </div>
                        </div>
                    </div>  
                    <div class="form-group row">
                        <div class="col-md-1">If Yes</div>
                        <div class="col-md-2">Specify</div>
                        <div class="col-md-9"><input type="text" class="form-control" name="pl_ws2_2" value="<?php echo $pl2->pl_ws2_2 ?>"></div>
                    </div><hr>                    
                    <div class="form-group row">
                        <div class="col-md-4"><?php if(empty($pl2->pl_ws7_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Any special comments</div></div>
                        <div class="col-md-8">
                            <textarea name="pl_ws7_1" class="form-control" placeholder="Comments"><?php echo $pl2->pl_ws7_1 ?></textarea>
                        </div>                                  
                    </div>
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseNine">
                    <div class="card-title">QUALITY ASSURANCE</div>
                </a>
                <div id="collapseNine" class="card-body collapse pt-0" data-parent="#accordion">
                    <div class="form-group row">
                        <div class="col-md-8">
                            <?php if(empty($pl2->pl_qa1_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Are the pilot garments shippable ?</div>
                        </div>                                  
                        <div class="col-md-4">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_qa1_1" id="pl_qa1_1" <?php if($pl2->pl_qa1_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_qa1_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_qa1_1" id="pl_qa1_1x" <?php if($pl2->pl_qa1_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_qa1_1x">No</label>
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
                            <?php if(empty($pl2->pl_qa2_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>Is the Process Capability Chart Available ?</div>
                        </div>                                  
                        <div class="col-md-4">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_qa2_1" id="pl_qa2_1" <?php if($pl2->pl_qa2_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_qa2_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_qa2_1" id="pl_qa2_1x" <?php if($pl2->pl_qa2_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_qa2_1x">No</label>
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
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseTen">
                    <div class="card-title">PRESENTATION CHECK / MERCHANDISING</div>
                </a>
                <div id="collapseTen" class="card-body collapse pt-0" data-parent="#accordion">
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
                                            <input type="checkbox" name="pl_pc1_1" id="pl_pc1_1" <?php if($pl2->pl_pc1_1 == "on"){echo "checked";} ?>>
                                            <label for="pl_pc1_1"></label>
                                        </div>
                                   </td>
                                   <td>Complete Trim Card Received for all colours</td>
                                   <td><input type="text" name="pl_pc1_5" class="form-control" value="<?php echo $pl2->pl_pc1_5 ?>"></td>
                                   <td><input type="text" name="pl_pc1_6" class="form-control" value="<?php echo $pl2->pl_pc1_6 ?>"></td>
                               </tr>
                               <tr>
                                   <td>
                                       <div class="styled-checkbox">
                                            <input type="checkbox" name="pl_pc1_2" id="pl_pc1_2" <?php if($pl2->pl_pc1_2 == "on"){echo "checked";} ?>>
                                            <label for="pl_pc1_2"></label>
                                        </div>
                                   </td>
                                   <td>Discrepancies between trim card and approved trims</td>
                                   <td><input type="text" name="pl_pc1_7" class="form-control" value="<?php echo $pl2->pl_pc1_7 ?>"></td>
                                   <td><input type="text" name="pl_pc1_8" class="form-control" value="<?php echo $pl2->pl_pc1_8 ?>"></td>
                               </tr>
                               <tr>
                                   <td>
                                       <div class="styled-checkbox">
                                            <input type="checkbox" name="pl_pc1_3" id="pl_pc1_3" <?php if($pl2->pl_pc1_3 == "on"){echo "checked";} ?>>
                                            <label for="pl_pc1_3"></label>
                                        </div>
                                   </td>
                                   <td>Document Availablitiy MPO, BOM, LOF</td>
                                   <td><input type="text" name="pl_pc1_9" class="form-control" value="<?php echo $pl2->pl_pc1_9 ?>"></td>
                                   <td><input type="text" name="pl_pc1_10" class="form-control" value="<?php echo $pl2->pl_pc1_10 ?>"></td>
                               </tr>
                               <tr>
                                   <td>
                                       <div class="styled-checkbox">
                                            <input type="checkbox" name="pl_pc1_4" id="pl_pc1_4" <?php if($pl2->pl_pc1_4 == "on"){echo "checked";} ?>>
                                            <label for="pl_pc1_4"></label>
                                        </div>
                                   </td>
                                   <td>Packing method & standart</td>
                                   <td><input type="text" name="pl_pc1_11" class="form-control" value="<?php echo $pl2->pl_pc1_11 ?>"></td>
                                   <td><input type="text" name="pl_pc1_12" class="form-control" value="<?php echo $pl2->pl_pc1_12 ?>"></td>
                               </tr>
                           </tbody>
                       </table>                                                           
                    </div>   <hr>                                     
                    <?php if(empty($pl2->pl_pc2_1 )) { ?>
                                  <div class="alert alert-danger" role="alert">
                              <?php }else{ ?>
                                  <div class="alert alert-secondary" role="alert">                                
                              <?php } ?>
                        Are fabrics & trims available for all colours ?
                    </div>                                             
                    <div class="form-group row">
                        <div class="col-md-1">                            
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_pc2_1" id="pl_pc2_1" <?php if($pl2->pl_pc2_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_pc2_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_pc2_1" id="pl_pc2_1x" <?php if($pl2->pl_pc2_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_pc2_1x">No</label>
                            </div>                                        
                        </div>    
                        <div class="col-md-1">If Not</div>                            
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="pl_pc2_2" placeholder="Item & Colour" value="<?php echo $pl2->pl_pc2_2 ?>">
                            <input type="text" class="form-control" name="pl_pc2_4" placeholder="Item & Colour" value="<?php echo $pl2->pl_pc2_4 ?>">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="pl_pc2_3" placeholder="Receive Date" id="date8" value="<?php echo $pl2->pl_pc2_3 ?>">
                            <input type="text" class="form-control" name="pl_pc2_7" placeholder="Receive Date" id="date9" value="<?php echo $pl2->pl_pc2_7 ?>">
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
                     <?php if(empty($pl2->pl_pc3_1) || empty($pl2->pl_pc3_2) || empty($pl2->pl_pc3_3) || empty($pl2->pl_pc3_4)) { ?>
                          <div class="alert alert-danger" role="alert">
                      <?php }else{ ?>
                          <div class="alert alert-secondary" role="alert">                                
                      <?php } ?>
                         Are the followings correct according to the spec ?
                     </div> 
                    <div class="form-group row">
                        <div class="col-md-2">Bag/Box/Packlabel</div>
                        <div class="col-md-1">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="pl_pc3_1" id="pl_pc3_1" <?php if($pl2->pl_pc3_1 == "YES"){echo "checked";} ?>>
                                <label for="pl_pc3_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_pc3_1" id="pl_pc3_1x" <?php if($pl2->pl_pc3_1 == "NO"){echo "checked";} ?>>
                                <label for="pl_pc3_1x">No</label>
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
                                <input type="radio" value="YES" name="pl_pc3_2" id="pl_pc3_2" <?php if($pl2->pl_pc3_2 == "YES"){echo "checked";} ?>>
                                <label for="pl_pc3_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_pc3_2" id="pl_pc3_2x" <?php if($pl2->pl_pc3_2 == "NO"){echo "checked";} ?>>
                                <label for="pl_pc3_2x">No</label>
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
                                <input type="radio" value="YES" name="pl_pc3_3" id="pl_pc3_3" <?php if($pl2->pl_pc3_3 == "YES"){echo "checked";} ?>>
                                <label for="pl_pc3_3">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_pc3_3" id="pl_pc3_3x" <?php if($pl2->pl_pc3_3 == "NO"){echo "checked";} ?>>
                                <label for="pl_pc3_3x">No</label>
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
                                <input type="radio" value="YES" name="pl_pc3_4" id="pl_pc3_4" <?php if($pl2->pl_pc3_4 == "YES"){echo "checked";} ?>>
                                <label for="pl_pc3_4">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="pl_pc3_4" id="pl_pc3_4x" <?php if($pl2->pl_pc3_4 == "NO"){echo "checked";} ?>>
                                <label for="pl_pc3_4x">No</label>
                            </div>  
                        </div>
                        <div class="col-md-1">If Not</div>
                        <div class="col-md-3"><input type="text" class="form-control" value="<?php echo $pl2->pl_pc3_11 ?>" name="pl_pc3_11" placeholder="Action"></div>
                        <div class="col-md-3"><input type="text" class="form-control" value="<?php echo $pl2->pl_pc3_12 ?>" name="pl_pc3_12" placeholder="Action By"></div>
                    </div>                                    
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseEleven">
                    <div class="card-title">CONFIRM BULK CUT</div>
                </a>
                <div id="collapseEleven" class="card-body collapse pt-0" data-parent="#accordion">
                  <div class="form-group row">
                        <div class="col-md-6"><?php if(empty($pl2->pl_cb1)) { ?>
                          <div class="alert alert-danger" role="alert">
                      <?php }else{ ?>
                          <div class="alert alert-secondary" role="alert">                                
                      <?php } ?>Confirm Bulk Cut ?</div></div>
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
                    <div class="form-group row">
                        <div class="col-md-1 text-danger"></div>
                        <div class="col-md-6">Cute Date</div>
                        <div class="col-md-3"><input type="text" id="date13" class="form-control" name="pl_cb6" value="<?php echo $pl2->pl_cb6 ?>"></div>                        
                    </div>
                    <div class="form-group row">
                        <div class="col-md-1 text-danger">If Not</div>
                        <div class="col-md-6">Go for second pilot on</div>
                        <div class="col-md-3"><input type="text" class="form-control" name="pl_cb7" value="<?php echo $pl2->pl_cb7 ?>"></div>                        
                    </div>
                    <div class="form-group row">
                        <div class="col-md-1 text-danger"></div>
                        <div class="col-md-6">Review Date</div>
                        <div class="col-md-3"><input type="text" id="date14" class="form-control" name="pl_cb8" value="<?php echo $pl2->pl_cb8 ?>"></div>                        
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
