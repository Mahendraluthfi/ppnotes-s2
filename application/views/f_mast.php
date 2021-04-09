<div class="row">
    <div class="col-xl-12">
        <div class="widget has-shadow">     
 	     	<div class="widget-body">
 	     		<div class="float-left">
 	     			<a href="<?php echo base_url('meeting/sign/'.$id) ?>" class="btn btn-default btn-sm">< Back</a>
 	     		</div>
 	     		<h3 class="text-center">MAST INDUSTRIES INC</h3>
 	     		<hr>
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
        <div class="widget has-shadow">     
            <div class="widget-body">
                <div class="form-group row">
                    <div class="col-md-6"><h5>Vendor : MAS INTIMATES</h5></div>
                    <div class="col-md-6"><h5>Factory : MAST SUMBIRI</h5></div>
                </div>
                <?php echo form_open_multipart('meeting/subform_mast/'.$id); ?>                
                <div class="form-group row">
                    <div class="col-md-3 text-right">CPO#/VPO#</div>
                    <div class="col-md-3"><input type="text" class="form-control" name="cpo" placeholder="CPO#/VPO#" value="<?php echo $mast->cpo ?>"></div>
                    <div class="col-md-3 text-right">QTY</div>
                    <div class="col-md-3"><input type="text" class="form-control" name="qty" placeholder="Quantity" value="<?php echo $mast->qty ?>"></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3 text-right">Meeting Date</div>
                    <div class="col-md-3"><input type="text" class="form-control" name="meet_date" placeholder="Meeting Date" value="<?php echo $mast->meet_date ?>" id="date47"></div>
                    <div class="col-md-3 text-right">GAC Date</div>
                    <div class="col-md-3"><input type="text" class="form-control" name="gac" placeholder="GAC Date" value="<?php echo $mast->gac ?>" id="date48"></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3 text-right">Product Description</div>
                    <div class="col-md-9"><textarea class="form-control" name="pro_desc" placeholder="Product Description"><?php echo $get->remarks ?></textarea></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3 text-right">Fabric Description/Content:</div>
                    <div class="col-md-9"><textarea class="form-control" name="fabric_desc" placeholder="Fabric Description/Content:"><?php echo $mast->fabric_desc ?></textarea></div>
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
                    <div class="card-title">(A) QUALITY RISK MANAGEMENT</div>
                </a>
                <div id="collapseOne" class="card-body collapse show pt-0" data-parent="#accordion">
                    <?php if(empty($mast->m_a1_1 )) { ?>
                          <div class="alert alert-danger" role="alert">
                      <?php }else{ ?>
                          <div class="alert alert-secondary" role="alert">                                
                      <?php } ?>How to Measure ?</div>
                    <div class="form-group row">
                        <div class="col-md-7"><textarea name="m_a1_1" class="form-control" placeholder="Comments"><?php echo $mast->m_a1_1 ?></textarea></div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_a1_2" placeholder="Follow Up Person" value="<?php echo $mast->m_a1_2 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" id="date1" name="m_a1_3" value="<?php echo $mast->m_a1_3 ?>"></div>
                    </div>
                    <?php if(empty($mast->m_a2_1 )) { ?>
                          <div class="alert alert-danger text-justify" role="alert">
                      <?php }else{ ?>
                          <div class="alert alert-secondary text-justify" role="alert">                                
                      <?php } ?>How to fit? Key fitting sizes : 34B/34DD/36DD, S/M/L/XL (How the garment being git on mannequin or live model ?)</div>
                    <div class="form-group row">
                        <div class="col-md-7"><textarea name="m_a2_1" class="form-control" placeholder="Comments"><?php echo $mast->m_a2_1 ?></textarea></div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_a2_2" placeholder="Follow Up Person" value="<?php echo $mast->m_a2_2 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" id="date2" name="m_a2_3" value="<?php echo $mast->m_a2_3 ?>"></div>
                    </div>
                    <?php if(empty($mast->m_a3_1 )) { ?>
                          <div class="alert alert-danger text-justify" role="alert">
                      <?php }else{ ?>
                          <div class="alert alert-secondary text-justify" role="alert">                                
                      <?php } ?>Critical areas which mntioned in the pp approval comment sheets that need corrections and improvements. Other areas that need special attention ? (AT ALL TIMES SPECIAL ATTENTION SHOULD BE GIVEN TO ANY AREAS OF A GARMENT CONTAINING WIRES, BONES OR ANY SHARP OR POINTED OBJECTS)</div>
                    <div class="form-group row">
                        <div class="col-md-7"><textarea name="m_a3_1" class="form-control" placeholder="Comments"><?php echo $mast->m_a3_1 ?></textarea></div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_a3_2" placeholder="Follow Up Person" value="<?php echo $mast->m_a3_2 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_a3_3" placeholder="Settle Date" id="date3" value="<?php echo $mast->m_a3_3 ?>"></div>
                    </div>
                    <div class="alert alert-secondary text-justify" role="alert">Upload Photos</div>
                    <div class="form-group row">
                        <div class="col-md-1">FRONT</div>
                        <div class="col-md-5"><input type="file" name="m_file_1"></div>
                        <div class="col-md-1">BACK</div>
                        <div class="col-md-5"><input type="file" name="m_file_2"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-5 text-center">
                            <?php if (!empty($mast->m_file_1)) { ?>
                                <img src="<?php echo base_url('assets/photos/'.$mast->m_file_1) ?>" alt="" height="100">
                            <?php } ?>
                        </div>
                        <div class="col-md-1">
                            <?php if (!empty($mast->m_file_1)) { ?>     
                                <a href="<?php echo base_url('subform/delete_img/m_file_1/'.$id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you Sure ?')">&nbsp;<i class="la la-trash"></i></a>
                            <?php } ?>                                            
                        </div>
                        <div class="col-md-5 text-center">
                            <?php if (!empty($mast->m_file_2)) { ?>
                                <img src="<?php echo base_url('assets/photos/'.$mast->m_file_2) ?>" alt="" height="100">
                            <?php } ?>
                        </div>
                        <div class="col-md-1">
                            <?php if (!empty($mast->m_file_2)) { ?>
                                <a href="<?php echo base_url('subform/delete_img/m_file_2/'.$id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you Sure ?')">&nbsp;<i class="la la-trash"></i></a>
                            <?php } ?>                                                
                        </div>
                    </div>

                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseTwo">
                    <div class="card-title">(B) FABRIC & TRIMS QUALITY MANAGEMENT</div>
                </a>
                <div id="collapseTwo" class="card-body collapse pt-0" data-parent="#accordion">
                    <div class="form-group row">                                    
                        <div class="col-md-5">
                            <?php if(empty($mast->m_b1_1_2 )) { ?>
                          <div class="alert alert-danger" role="alert">
                      <?php }else{ ?>
                          <div class="alert alert-secondary" role="alert">                                
                      <?php } ?>Fabric Inspection - In-house test</div>
                        </div>
                        <div class="col-md-7">
                            <textarea name="m_b1_1_1" class="form-control" placeholder="Comments"><?php echo $mast->m_b1_1_1 ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="m_b1_1_2" id="m_b1_1_2" <?php if($mast->m_b1_1_2 == "YES"){echo "checked";} ?>>
                                <label for="m_b1_1_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_b1_1_2" id="m_b1_1_2x" <?php if($mast->m_b1_1_2 == "NO"){echo "checked";} ?>>
                                <label for="m_b1_1_2x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-2">Follow-Up Person</div>
                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Follow-Up Person" name="m_b1_1_3" value="<?php echo $mast->m_b1_1_3 ?>"></div>
                        <div class="col-md-2">Settle Date</div>
                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Settle Date" id="date4" name="m_b1_1_4" value="<?php echo $mast->m_b1_1_4 ?>"></div>
                    </div><hr>
                    <div class="form-group row">                                    
                        <div class="col-md-5">
                            <?php if(empty($mast->m_b1_2_2 )) { ?>
                              <div class="alert alert-danger" role="alert">
                          <?php }else{ ?>
                              <div class="alert alert-secondary" role="alert">                                
                          <?php } ?>Fabric Quality Hanger with Specification</div>
                        </div>
                        <div class="col-md-7">
                            <textarea name="m_b1_2_1" class="form-control" placeholder="Comments"><?php echo $mast->m_b1_2_1 ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="m_b1_2_2" id="m_b1_2_2" <?php if($mast->m_b1_2_2 == "YES"){echo "checked";} ?>>
                                <label for="m_b1_2_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_b1_2_2" id="m_b1_2_2x" <?php if($mast->m_b1_2_2 == "NO"){echo "checked";} ?>>
                                <label for="m_b1_2_2x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-2">Follow-Up Person</div>
                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Follow-Up Person" name="m_b1_2_3" value="<?php echo $mast->m_b1_2_3 ?>"></div>
                        <div class="col-md-2">Settle Date</div>
                        <div class="col-md-3"><input type="text" class="form-control" placeholder="" id="date5" name="m_b1_2_4" value="<?php echo $mast->m_b1_2_4 ?>"></div>
                    </div>
                    <div class="form-group row">                                    
                        <div class="col-md-5">
                            <?php if(empty($mast->m_b1_3_2 )) { ?>
                              <div class="alert alert-danger" role="alert">
                          <?php }else{ ?>
                              <div class="alert alert-secondary" role="alert">                                
                          <?php } ?>Fabric Inspection FIndings & Actions Taken</div>
                        </div>
                        <div class="col-md-7">
                            <textarea name="m_b1_3_1" class="form-control" placeholder="Comments"><?php echo $mast->m_b1_3_1 ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="m_b1_3_2" id="m_b1_3_2" <?php if($mast->m_b1_3_2 == "YES"){echo "checked";} ?>>
                                <label for="m_b1_3_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_b1_3_2" id="m_b1_3_2x" <?php if($mast->m_b1_3_2 == "NO"){echo "checked";} ?>>
                                <label for="m_b1_3_2x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-2">Follow-Up Person</div>
                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Follow-Up Person" name="m_b1_3_3" value="<?php echo $mast->m_b1_3_3 ?>"></div>
                        <div class="col-md-2">Settle Date</div>
                        <div class="col-md-3"><input type="text" class="form-control" placeholder="" id="date6" name="m_b1_3_4" value="<?php echo $mast->m_b1_3_4 ?>"></div>
                    </div>
                    <?php if(empty($mast->m_b2_1_3 ) || empty($mast->m_b2_2_3 ) || empty($mast->m_b2_3_3 )) { ?>
                              <div class="alert alert-danger" role="alert">
                          <?php }else{ ?>
                              <div class="alert alert-secondary" role="alert">                                
                          <?php } ?>Shrinkage Test</div>
                    <div class="form-group row">
                        <div class="col-md-2">Dry Steam</div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_b2_1_1" placeholder="Warp%" value="<?php echo $mast->m_b2_1_1 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_b2_1_2" placeholder="Weft%" value="<?php echo $mast->m_b2_1_2 ?>"></div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_b2_1_3" id="m_b2_1_3" <?php if($mast->m_b2_1_3 == "YES"){echo "checked";} ?>>
                                <label for="m_b2_1_3">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_b2_1_3" id="m_b2_1_3x" <?php if($mast->m_b2_1_3 == "NO"){echo "checked";} ?>>
                                <label for="m_b2_1_3x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_b2_1_4" placeholder="Follow Up Person" <?php echo $mast->m_b2_1_4 ?>></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_b2_1_5" placeholder="Settle Date" id="date7" value="<?php echo $mast->m_b2_1_5 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">Wash</div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_b2_2_1" placeholder="Warp%" value="<?php echo $mast->m_b2_2_1 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_b2_2_2" placeholder="Weft%" value="<?php echo $mast->m_b2_2_2 ?>"></div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_b2_2_3" id="m_b2_2_3" <?php if($mast->m_b2_2_3 == "YES"){echo "checked";} ?>>
                                <label for="m_b2_2_3">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_b2_2_3" id="m_b2_2_3x" <?php if($mast->m_b2_2_3 == "NO"){echo "checked";} ?>>
                                <label for="m_b2_2_3x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_b2_2_4" placeholder="Follow Up Person" value="<?php echo $mast->m_b2_2_4 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_b2_2_5" placeholder="Settle Date" id="date8" value="<?php echo $mast->m_b2_2_5 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">Fusing</div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_b2_3_1" placeholder="Warp%" value="<?php echo $mast->m_b2_3_1 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_b2_3_2" placeholder="Weft%" value="<?php echo $mast->m_b2_3_2 ?>"></div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_b2_3_3" id="m_b2_3_3" <?php if($mast->m_b2_3_3 == "YES"){echo "checked";} ?>>
                                <label for="m_b2_3_3">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_b2_3_3" id="m_b2_3_3x" <?php if($mast->m_b2_3_3 == "NO"){echo "checked";} ?>>
                                <label for="m_b2_3_3x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_b2_3_4" placeholder="Follow Up Person" value="<?php echo $mast->m_b2_3_4 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_b2_3_5" placeholder="Settle Date" id="date9" value="<?php echo $mast->m_b2_3_5 ?>"></div>
                    </div>
                    <?php if(empty($mast->m_b3_1_3 ) || empty($mast->m_b3_2_3 )) { ?>
                              <div class="alert alert-danger" role="alert">
                          <?php }else{ ?>
                              <div class="alert alert-secondary" role="alert">                                
                          <?php } ?>Color Shade</div>
                    <div class="form-group row">
                        <div class="col-md-2">Side to side</div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_b3_1_1" placeholder="Warp%" value="<?php echo $mast->m_b3_1_1 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_b3_1_2" placeholder="Weft%" value="<?php echo $mast->m_b3_1_2 ?>"></div>
                        <div class="col-md-1">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="m_b3_1_3" id="m_b3_1_3" <?php if($mast->m_b3_1_3 == "YES"){echo "checked";} ?>>
                                <label for="m_b3_1_3">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_b3_1_3" id="m_b3_1_3x" <?php if($mast->m_b3_1_3 == "NO"){echo "checked";} ?>>
                                <label for="m_b3_1_3x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_b3_1_4" placeholder="Follow Up Person" value="<?php echo $mast->m_b3_1_4 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_b3_1_5" placeholder="Settle Date" id="date10" value="<?php echo $mast->m_b3_1_5 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">End to End</div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_b3_2_1" placeholder="Warp%" value="<?php echo $mast->m_b3_2_1 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_b3_2_2" placeholder="Weft%" value="<?php echo $mast->m_b3_2_2 ?>"></div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_b3_2_3" id="m_b3_2_3" <?php if($mast->m_b3_2_3 == "YES"){echo "checked";} ?>>
                                <label for="m_b3_2_3">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_b3_2_3" id="m_b3_2_3x" <?php if($mast->m_b3_2_3 == "NO"){echo "checked";} ?>>
                                <label for="m_b3_2_3x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_b3_2_4" placeholder="Follow Up Person" value="<?php echo $mast->m_b3_2_4 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_b3_2_5" placeholder="Settle Date" id="date11" value="<?php echo $mast->m_b3_2_5 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <?php if(empty($mast->m_b4_1)) { ?>
                              <div class="alert alert-danger" role="alert">
                          <?php }else{ ?>
                              <div class="alert alert-secondary" role="alert">                                
                          <?php } ?>Trims Matching</div>
                        </div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_b4_1" id="m_b4_1" <?php if($mast->m_b4_1 == "YES"){echo "checked";} ?>>
                                <label for="m_b4_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_b4_1" id="m_b4_1x" <?php if($mast->m_b4_1 == "NO"){echo "checked";} ?>>
                                <label for="m_b4_1x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_b4_2" placeholder="Follow Up Person" value="<?php echo $mast->m_b4_2 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_b4_3" placeholder="Settle Date" id="date12" value="<?php echo $mast->m_b4_3 ?>"></div>
                    </div>
                    <?php if(empty($mast->m_b5_1_4 )) { ?>
                              <div class="alert alert-danger" role="alert">
                          <?php }else{ ?>
                              <div class="alert alert-secondary" role="alert">                                
                          <?php } ?>Heat Seal Label (if Applicable)</div>
                    <div class="form-group row">
                        <div class="col-md-2"><input type="text" class="form-control" name="m_b5_1_1" placeholder="Temperature" value="<?php echo $mast->m_b5_1_1 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_b5_1_2" placeholder="Pressure" value="<?php echo $mast->m_b5_1_2 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_b5_1_3" placeholder="Time" value="<?php echo $mast->m_b5_1_3 ?>"></div>
                        <div class="col-md-1">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="m_b5_1_4" id="m_b5_1_4" <?php if($mast->m_b5_1_4 == "YES"){echo "checked";} ?>>
                                <label for="m_b5_1_4">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_b5_1_4" id="m_b5_1_4x" <?php if($mast->m_b5_1_4 == "NO"){echo "checked";} ?>>
                                <label for="m_b5_1_4x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_b5_1_5" placeholder="Follow Up Person" value="<?php echo $mast->m_b5_1_5 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_b5_1_6" placeholder="Settle Date" value="<?php echo $mast->m_b5_1_6 ?>" id="date13"></div>
                    </div>
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseThree">
                    <div class="card-title">(C) MOLDING</div>
                </a>
                <div id="collapseThree" class="card-body collapse pt-0" data-parent="#accordion">
                	<?php if(empty($mast->m_c1_4 )) { ?>
                              <div class="alert alert-danger" role="alert">
                          <?php }else{ ?>
                              <div class="alert alert-secondary" role="alert">                                
                          <?php } ?>Molding Condition</div>
                    <div class="form-group row">
                        <div class="col-md-2"><input type="text" class="form-control" name="m_c1_1" placeholder="Temperature" value="<?php echo $mast->m_c1_1 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_c1_2" placeholder="Pressure" value="<?php echo $mast->m_c1_2 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_c1_3" placeholder="Time" value="<?php echo $mast->m_c1_3 ?>"></div>
                        <div class="col-md-1">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="m_c1_4" id="m_c1_4" <?php if($mast->m_c1_4 == "YES"){echo "checked";} ?>>
                                <label for="m_c1_4">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_c1_4" id="m_c1_4x" <?php if($mast->m_c1_4 == "NO"){echo "checked";} ?>>
                                <label for="m_c1_4x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_c1_5" placeholder="Follow Up Person" value="<?php echo $mast->m_c1_5 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_c1_6" placeholder="Settle Date" value="<?php echo $mast->m_c1_6 ?>" id="date14"></div>
                    </div>
                    <?php if(empty($mast->m_c2_2 )) { ?>
                              <div class="alert alert-danger" role="alert">
                          <?php }else{ ?>
                              <div class="alert alert-secondary" role="alert">                                
                          <?php } ?>Color change after molding</div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Comments" name="m_c2_1" value="<?php echo $mast->m_c2_1 ?>">
                        </div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_c2_2" id="m_c2_2" <?php if($mast->m_c2_2 == "YES"){echo "checked";} ?>>
                                <label for="m_c2_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_c2_2" id="m_c2_2x" <?php if($mast->m_c2_2 == "NO"){echo "checked";} ?>>
                                <label for="m_c2_2x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_c2_3" placeholder="Follow Up Person" value="<?php echo $mast->m_c2_3 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_c2_4" placeholder="Settle Date" value="<?php echo $mast->m_c2_4 ?>" id="date15"></div>
                    </div>
                    <?php if(empty($mast->m_c3_2 )) { ?>
                              <div class="alert alert-danger" role="alert">
                          <?php }else{ ?>
                              <div class="alert alert-secondary" role="alert">                                
                          <?php } ?>Hand Feel</div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Comments" name="m_c3_1" value="<?php echo $mast->m_c3_1 ?>">
                        </div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_c3_2" id="m_c3_2" <?php if($mast->m_c3_2 == "YES"){echo "checked";} ?>>
                                <label for="m_c3_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_c3_2" id="m_c3_2x" <?php if($mast->m_c3_2 == "NO"){echo "checked";} ?>>
                                <label for="m_c3_2x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_c3_3" placeholder="Follow Up Person" value="<?php echo $mast->m_c3_3 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_c3_4" placeholder="Settle Date" id="date16" value="<?php echo $mast->m_c3_4 ?>"></div>
                    </div>
                     <?php if(empty($mast->m_c4_1_1) || empty($mast->m_c4_2_1) || empty($mast->m_c4_3_1)) { ?>
                              <div class="alert alert-danger" role="alert">
                          <?php }else{ ?>
                              <div class="alert alert-secondary" role="alert">                                
                          <?php } ?>Physical Apperance (after molding)</div>
                    <div class="form-group row">
                        <div class="col-md-6 text-right">Ring Marks</div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_c4_1_1" id="m_c4_1_1" <?php if($mast->m_c4_1_1 == "YES"){echo "checked";} ?>>
                                <label for="m_c4_1_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_c4_1_1" id="m_c4_1_1x" <?php if($mast->m_c4_1_1 == "NO"){echo "checked";} ?>>
                                <label for="m_c4_1_1x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_c4_1_2" placeholder="Follow Up Person" value="<?php echo $mast->m_c4_1_2 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_c4_1_3" placeholder="Settle Date" value="<?php echo $mast->m_c4_1_3 ?>" id="date17"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 text-right">Contamination</div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_c4_2_1" id="m_c4_2_1" <?php if($mast->m_c4_2_1 == "YES"){echo "checked";} ?>>
                                <label for="m_c4_2_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_c4_2_1" id="m_c4_2_1x" <?php if($mast->m_c4_2_1 == "NO"){echo "checked";} ?>>
                                <label for="m_c4_2_1x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_c4_2_2" placeholder="Follow Up Person" value="<?php echo $mast->m_c4_2_2 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_c4_2_3" placeholder="Settle Date" value="<?php echo $mast->m_c4_2_3 ?>" id="date18"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 text-right">Burn Mark</div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_c4_3_1" id="m_c4_3_1" <?php if($mast->m_c4_3_1 == "YES"){echo "checked";} ?>>
                                <label for="m_c4_3_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_c4_3_1" id="m_c4_3_1x" <?php if($mast->m_c4_3_1 == "NO"){echo "checked";} ?>>
                                <label for="m_c4_3_1x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_c4_3_2" placeholder="Follow Up Person" value="<?php echo $mast->m_c4_3_2 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_c4_3_3" placeholder="Settle Date" value="<?php echo $mast->m_c4_3_3 ?>" id="date19"></div>
                    </div>
                    <?php if(empty($mast->m_c5_2 )) { ?>
                              <div class="alert alert-danger" role="alert">
                          <?php }else{ ?>
                              <div class="alert alert-secondary" role="alert">                                
                          <?php } ?>Mold Trail - across sizes</div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Comments" name="m_c5_1" value="<?php echo $mast->m_c5_1 ?>">
                        </div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_c5_2" id="m_c5_2" <?php if($mast->m_c5_2 == "YES"){echo "checked";} ?>>
                                <label for="m_c5_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_c5_2" id="m_c5_2x" <?php if($mast->m_c5_2 == "NO"){echo "checked";} ?>>
                                <label for="m_c5_2x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_c5_3" placeholder="Follow Up Person" value="<?php echo $mast->m_c5_3 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_c5_4" placeholder="Settle Date" value="<?php echo $mast->m_c5_4 ?>" id="date20"></div>
                    </div>
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseFour">
                    <div class="card-title">(D) CUTTING</div>
                </a>
                <div id="collapseFour" class="card-body collapse pt-0" data-parent="#accordion">
                	<?php if(empty($mast->m_d1_2 )) { ?>
                              <div class="alert alert-danger" role="alert">
                          <?php }else{ ?>
                              <div class="alert alert-secondary" role="alert">                                
                          <?php } ?>Marker Method</div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Comments" name="m_d1_1" value="<?php echo $mast->m_d1_1 ?>">
                        </div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_d1_2" id="m_d1_2" <?php if($mast->m_d1_2 == "YES"){echo "checked";} ?>>
                                <label for="m_d1_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_d1_2" id="m_d1_2x" <?php if($mast->m_d1_2 == "NO"){echo "checked";} ?>>
                                <label for="m_d1_2x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_d1_3" placeholder="Follow Up Person" value="<?php echo $mast->m_d1_3 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_d1_4" placeholder="Settle Date" id="date21" value="<?php echo $mast->m_d1_4 ?>"></div>
                    </div><hr>
                    <?php if(empty($mast->m_d2_1_2 ) || empty($mast->m_d2_2_2 )) { ?>
                              <div class="alert alert-danger" role="alert">
                          <?php }else{ ?>
                              <div class="alert alert-secondary" role="alert">                                
                          <?php } ?>Fabric Relaxation</div>
                    <div class="form-group row">
                        <div class="col-md-2">Does it require fabric relaxation?</div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Comments" name="m_d2_1_1" value="<?php echo $mast->m_d2_1_1 ?>">
                        </div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_d2_1_2" id="m_d2_1_2" <?php if($mast->m_d2_1_2 == "YES"){echo "checked";} ?>>
                                <label for="m_d2_1_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_d2_1_2" id="m_d2_1_2x" <?php if($mast->m_d2_1_2 == "NO"){echo "checked";} ?>>
                                <label for="m_d2_1_2x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_d2_1_3" placeholder="Follow Up Person" value="<?php echo $mast->m_d2_1_3 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_d2_1_4" placeholder="Settle Date" id="date22" value="<?php echo $mast->m_d2_1_4 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">Relax for 24 or 48 Hour ?</div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Comments" name="m_d2_2_1" value="<?php echo $mast->m_d2_2_1 ?>">
                        </div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_d2_2_2" id="m_d2_2_2" <?php if($mast->m_d2_2_2 == "YES"){echo "checked";} ?>>
                                <label for="m_d2_2_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_d2_2_2" id="m_d2_2_2x" <?php if($mast->m_d2_2_2 == "NO"){echo "checked";} ?>>
                                <label for="m_d2_2_2x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_d2_2_3" placeholder="Follow Up Person" value="<?php echo $mast->m_d2_2_3 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_d2_2_4" placeholder="Settle Date" value="<?php echo $mast->m_d2_2_4 ?>" id="date23"></div>
                    </div><hr>
                      <?php if(empty($mast->m_d3_2 )) { ?>
                              <div class="alert alert-danger" role="alert">
                          <?php }else{ ?>
                              <div class="alert alert-secondary" role="alert">                                
                          <?php } ?>Spreading Method</div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Comments" name="m_d3_1" value="<?php echo $mast->m_d3_1 ?>">
                        </div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_d3_2" id="m_d3_2" <?php if($mast->m_d3_2 == "YES"){echo "checked";} ?>>
                                <label for="m_d3_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_d3_2" id="m_d3_2x" <?php if($mast->m_d3_2 == "NO"){echo "checked";} ?>>
                                <label for="m_d3_2x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_d3_3" placeholder="Follow Up Person" value="<?php echo $mast->m_d3_3 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_d3_4" placeholder="Settle Date" value="<?php echo $mast->m_d3_4 ?>" id="date24"></div>
                    </div><hr>
                     <?php if(empty($mast->m_d4_2 )) { ?>
                              <div class="alert alert-danger" role="alert">
                          <?php }else{ ?>
                              <div class="alert alert-secondary" role="alert">                                
                          <?php } ?>Cutting Method</div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Comments" name="m_d4_1" value="<?php echo $mast->m_d4_1 ?>">
                        </div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_d4_2" id="m_d4_2" <?php if($mast->m_d4_2 == "YES"){echo "checked";} ?>>
                                <label for="m_d4_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_d4_2" id="m_d4_2x" <?php if($mast->m_d4_2 == "NO"){echo "checked";} ?>>
                                <label for="m_d4_2x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_d4_3" placeholder="Follow Up Person" value="<?php echo $mast->m_d4_3 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_d4_4" placeholder="Settle Date" value="<?php echo $mast->m_d4_4 ?>" id="date25"></div>
                    </div><hr>
                    <?php if(empty($mast->m_d5_2 )) { ?>
                              <div class="alert alert-danger" role="alert">
                          <?php }else{ ?>
                              <div class="alert alert-secondary" role="alert">                                
                          <?php } ?>Bundling</div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Comments" name="m_d5_1" value="<?php echo $mast->m_d5_1 ?>">
                        </div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_d5_2" id="m_d5_2" <?php if($mast->m_d5_2 == "YES"){echo "checked";} ?>>
                                <label for="m_d5_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_d5_2" id="m_d5_2x" <?php if($mast->m_d5_2 == "NO"){echo "checked";} ?>>
                                <label for="m_d5_2x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_d5_3" placeholder="Follow Up Person" value="<?php echo $mast->m_d5_3 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_d5_4" placeholder="Settle Date" value="<?php echo $mast->m_d5_4 ?>" id="date26"></div>
                    </div><hr>
                    <?php if(empty($mast->m_d6_4 )) { ?>
                              <div class="alert alert-danger" role="alert">
                          <?php }else{ ?>
                              <div class="alert alert-secondary" role="alert">                                
                          <?php } ?>Fusing Condition</div>
                    <div class="form-group row">
                        <div class="col-md-2"><input type="text" class="form-control" name="m_d6_1" placeholder="Temperature" value="<?php echo $mast->m_d6_1 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_d6_2" placeholder="Pressure" value="<?php echo $mast->m_d6_2 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_d6_3" placeholder="Time" value="<?php echo $mast->m_d6_3 ?>"></div>
                        <div class="col-md-1">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="m_d6_4" id="m_d6_4" <?php if($mast->m_d6_4 == "YES"){echo "checked";} ?>>
                                <label for="m_d6_4">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_d6_4" id="m_d6_4x" <?php if($mast->m_d6_4 == "NO"){echo "checked";} ?>>
                                <label for="m_d6_4x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_d6_5" placeholder="Follow Up Person" value="<?php echo $mast->m_d6_5 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_d6_6" placeholder="Settle Date" value="<?php echo $mast->m_d6_6 ?>" id="date27"></div>
                    </div><hr>
                    <?php if(empty($mast->m_d7_2 )) { ?>
                              <div class="alert alert-danger" role="alert">
                          <?php }else{ ?>
                              <div class="alert alert-secondary" role="alert">                                
                          <?php } ?>Bond Strength</div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Comments" name="m_d7_1" value="<?php echo $mast->m_d7_1 ?>">
                        </div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_d7_2" id="m_d7_2" <?php if($mast->m_d7_2 == "YES"){echo "checked";} ?>>
                                <label for="m_d7_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_d7_2" id="m_d7_2x" <?php if($mast->m_d7_2 == "NO"){echo "checked";} ?>>
                                <label for="m_d7_2x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_d7_3" placeholder="Follow Up Person" value="<?php echo $mast->m_d7_3 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_d7_4" placeholder="Settle Date" value="<?php echo $mast->m_d7_4 ?>" id="date28"></div>
                    </div>
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseFive">
                    <div class="card-title">(E) SEWING</div>
                </a>
                <div id="collapseFive" class="card-body collapse pt-0" data-parent="#accordion">
                	<?php if(empty($mast->m_e1_2 )) { ?>
                              <div class="alert alert-danger" role="alert">
                          <?php }else{ ?>
                              <div class="alert alert-secondary" role="alert">                                
                          <?php } ?>Job Specification Required, Sewing standarts, Approval sample</div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Comments" name="m_e1_1" value="<?php echo $mast->m_e1_1 ?>">
                        </div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_e1_2" id="m_e1_2" <?php if($mast->m_e1_2 == "YES"){echo "checked";} ?>>
                                <label for="m_e1_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_e1_2" id="m_e1_2x" <?php if($mast->m_e1_2 == "NO"){echo "checked";} ?>>
                                <label for="m_e1_2x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_e1_3" placeholder="Follow Up Person" value="<?php echo $mast->m_e1_3 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_e1_4" placeholder="Settle Date" value="<?php echo $mast->m_e1_4 ?>" id="date29"></div>
                    </div>
                    <?php if(empty($mast->m_e2_1_2 ) || empty($mast->m_e2_2_2)) { ?>
                              <div class="alert alert-danger" role="alert">
                          <?php }else{ ?>
                              <div class="alert alert-secondary" role="alert">                                
                          <?php } ?>Line Set Up</div>
                    <div class="form-group row">
                        <div class="col-md-3">Plan Line output</div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="" name="m_e2_1_1" value="<?php echo $mast->m_e2_1_1 ?>">
                        </div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_e2_1_2" id="m_e2_1_2" <?php if($mast->m_e2_1_2 == "YES"){echo "checked";} ?>>
                                <label for="m_e2_1_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_e2_1_2" id="m_e2_1_2x" <?php if($mast->m_e2_1_2 == "NO"){echo "checked";} ?>>
                                <label for="m_e2_1_2x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_e2_1_3" placeholder="Follow Up Person" value="<?php echo $mast->m_e2_1_3 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" id="date30" name="m_e2_1_4" placeholder="Settle Date" value="<?php echo $mast->m_e2_1_4 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">Machine</div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="" name="m_e2_2_1" value="<?php echo $mast->m_e2_2_1 ?>">
                        </div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_e2_2_2" id="m_e2_2_2" <?php if($mast->m_e2_2_2 == "YES"){echo "checked";} ?>>
                                <label for="m_e2_2_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_e2_2_2" id="m_e2_2_2x" <?php if($mast->m_e2_2_2 == "NO"){echo "checked";} ?>>
                                <label for="m_e2_2_2x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_e2_2_3" placeholder="Follow Up Person" value="<?php echo $mast->m_e2_2_3 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_e2_2_4" placeholder="Settle Date" id="date31" value="<?php echo $mast->m_e2_2_4 ?>"></div>
                    </div>
                    <?php if(empty($mast->m_e3_2 )) { ?>
                              <div class="alert alert-danger" role="alert">
                          <?php }else{ ?>
                              <div class="alert alert-secondary" role="alert">                                
                          <?php } ?>Machines/attachments</div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Comments" name="m_e3_1" value="<?php echo $mast->m_e3_1 ?>">
                        </div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_e3_2" id="m_e3_2" <?php if($mast->m_e3_2 == "YES"){echo "checked";} ?>>
                                <label for="m_e3_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_e3_2" id="m_e3_2x" <?php if($mast->m_e3_2 == "NO"){echo "checked";} ?>>
                                <label for="m_e3_2x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_e3_3" placeholder="Follow Up Person" value="<?php echo $mast->m_e3_3 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_e3_4" placeholder="Settle Date" id="date32" value="<?php echo $mast->m_e3_4 ?>"></div>
                    </div>
                    <?php if(empty($mast->m_e4_2 )) { ?>
                              <div class="alert alert-danger" role="alert">
                          <?php }else{ ?>
                              <div class="alert alert-secondary" role="alert">                                
                          <?php } ?>Any areas that need special attention ?</div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Comments" name="m_e4_1" value="<?php echo $mast->m_e4_1 ?>">
                        </div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_e4_2" id="m_e4_2" <?php if($mast->m_e4_2 == "YES"){echo "checked";} ?>>
                                <label for="m_e4_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_e4_2" id="m_e4_2x" <?php if($mast->m_e4_2 == "NO"){echo "checked";} ?>>
                                <label for="m_e4_2x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_e4_3" placeholder="Follow Up Person" value="<?php echo $mast->m_e4_3 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_e4_4" placeholder="Settle Date" value="<?php echo $mast->m_e4_4 ?>" id="date33"></div>
                    </div>
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseSix">
                    <div class="card-title">(G) FINISHING (WASHING/IRONING/PACKING)</div>
                </a>
                <div id="collapseSix" class="card-body collapse pt-0" data-parent="#accordion">
                    <?php if(empty($mast->m_g1_2 )) { ?>
                              <div class="alert alert-danger" role="alert">
                          <?php }else{ ?>
                              <div class="alert alert-secondary" role="alert">                                
                          <?php } ?>Special ironing method ?</div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Comments" name="m_g1_1" value="<?php echo $mast->m_g1_1 ?>">
                        </div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_g1_2" id="m_g1_2" <?php if($mast->m_g1_2 == "YES"){echo "checked";} ?>>
                                <label for="m_g1_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_g1_2" id="m_g1_2x" <?php if($mast->m_g1_2 == "NO"){echo "checked";} ?>>
                                <label for="m_g1_2x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_g1_3" placeholder="Follow Up Person" value="<?php echo $mast->m_g1_3 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_g1_4" placeholder="Settle Date" value="<?php echo $mast->m_g1_4 ?>" id="date34"></div>
                    </div>
                    <hr>
                     <?php if(empty($mast->m_g2_1_2 ) || empty($mast->m_g2_2_1 ) || empty($mast->m_g2_3_2 ) || empty($mast->m_g2_4_2 )) { ?>
                              <div class="alert alert-danger" role="alert">
                          <?php }else{ ?>
                              <div class="alert alert-secondary" role="alert">                                
                          <?php } ?>Packing Guidelines</div>
                    <div class="form-group row">
                        <div class="col-md-2">How to pack ?</div>
                        <div class="col-md-4"><input type="text" class="form-control" name="m_g2_1_1" placeholder="How to pack ?" value="<?php echo $mast->m_g2_1_1 ?>"></div>                                        
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_g2_1_2" id="m_g2_1_2" <?php if($mast->m_g2_1_2 == "YES"){echo "checked";} ?>>
                                <label for="m_g2_1_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_g2_1_2" id="m_g2_1_2x" <?php if($mast->m_g2_1_2 == "NO"){echo "checked";} ?>>
                                <label for="m_g2_1_2x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_g2_1_3" placeholder="Follow Up Person" value="<?php echo $mast->m_g2_1_3 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_g2_1_4" placeholder="Settle Date" id="date35" value="<?php echo $mast->m_g2_1_4 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">Polybag sizes ?</div>
                        <div class="col-md-4"><input type="text" name="m_g2_2_2" class="form-control" placeholder="Comments" value="<?php echo $mast->m_g2_2_2 ?>"></div>
                        <div class="col-md-1">
                            <div class="styled-radio">
                                <input type="radio" value="YES" name="m_g2_2_1" id="m_g2_2_1" <?php if($mast->m_g2_2_1 == "YES"){echo "checked";} ?>>
                                <label for="m_g2_2_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_g2_2_1" id="m_g2_2_1x" <?php if($mast->m_g2_2_1 == "NO"){echo "checked";} ?>>
                                <label for="m_g2_2_1x">No</label>
                            </div>  
                        </div>
                        <div class="col-md-3"><input type="text" name="m_g2_2_3" class="form-control" placeholder="Follow-up Person" value="<?php echo $mast->m_g2_2_3 ?>"></div>
                        <div class="col-md-2"><input type="text" name="m_g2_2_4" class="form-control" placeholder="Settle Date" id="date36" value="<?php echo $mast->m_g2_2_4 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">Packing sample available ?</div>
                        <div class="col-md-4"><input type="text" class="form-control" name="m_g2_3_1" placeholder="Packing sample available" value="<?php echo $mast->m_g2_3_1 ?>"></div>                                        
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_g2_3_2" id="m_g2_3_2" <?php if($mast->m_g2_3_2 == "YES"){echo "checked";} ?>>
                                <label for="m_g2_3_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_g2_3_2" id="m_g2_3_2x" <?php if($mast->m_g2_3_2 == "NO"){echo "checked";} ?>>
                                <label for="m_g2_3_2x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_g2_3_3" placeholder="Follow Up Person" value="<?php echo $mast->m_g2_3_3 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_g2_3_4" placeholder="Settle Date" id="date37" value="<?php echo $mast->m_g2_3_4 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">Hang Tag & price tag positions ?</div>
                        <div class="col-md-4"><input type="text" class="form-control" name="m_g2_4_1" placeholder="Hang Tag & price tag positions" value="<?php echo $mast->m_g2_4_1 ?>"></div>                                        
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_g2_4_2" id="m_g2_4_2" <?php if($mast->m_g2_4_2 == "YES"){echo "checked";} ?>>
                                <label for="m_g2_4_2">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_g2_4_2" id="m_g2_4_2x" <?php if($mast->m_g2_4_2 == "NO"){echo "checked";} ?>>
                                <label for="m_g2_4_2x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_g2_4_3" placeholder="Follow Up Person" value="<?php echo $mast->m_g2_4_3 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_g2_4_4" placeholder="Settle Date" id="date38" value="<?php echo $mast->m_g2_4_4 ?>"></div>
                    </div>
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseSeven">
                    <div class="card-title">(H) QA CHECKLIST</div>
                </a>
                <div id="collapseSeven" class="card-body collapse pt-0" data-parent="#accordion">
                    <div class="form-group row">
                        <div class="col-md-6">Approved Pre-production sample with full sizes measurement sheet</div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_h1_1" id="m_h1_1" <?php if($mast->m_h1_1 == "YES"){echo "checked";} ?>>
                                <label for="m_h1_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_h1_1" id="m_h1_1x" <?php if($mast->m_h1_1 == "NO"){echo "checked";} ?>>
                                <label for="m_h1_1x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_h1_2" placeholder="Follow Up Person" value="<?php echo $mast->m_h1_2 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_h1_3" placeholder="Settle Date" value="<?php echo $mast->m_h1_3 ?>" id="date39"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">Full Tech Pack with label placement, ticketing page, color component page, latest size spec, sample approval comments</div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_h2_1" id="m_h2_1" <?php if($mast->m_h2_1 == "YES"){echo "checked";} ?>>
                                <label for="m_h2_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_h2_1" id="m_h2_1x" <?php if($mast->m_h2_1 == "NO"){echo "checked";} ?>>
                                <label for="m_h2_1x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_h2_2" placeholder="Follow Up Person" value="<?php echo $mast->m_h2_2 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_h2_3" placeholder="Settle Date" value="<?php echo $mast->m_h2_3 ?>" id="date40"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">Approved shade band for all colours</div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_h3_1" id="m_h3_1" <?php if($mast->m_h3_1 == "YES"){echo "checked";} ?>>
                                <label for="m_h3_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_h3_1" id="m_h3_1x" <?php if($mast->m_h3_1 == "NO"){echo "checked";} ?>>
                                <label for="m_h3_1x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_h3_2" placeholder="Follow Up Person" value="<?php echo $mast->m_h3_2 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_h3_3" placeholder="Settle Date" id="date41" value="<?php echo $mast->m_h3_3 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">Trims Test Reports</div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio"  value="YES" name="m_h4_1" id="m_h4_1" <?php if($mast->m_h4_1 == "YES"){echo "checked";} ?>>
                                <label for="m_h4_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio"  value="NO" name="m_h4_1" id="m_h4_1x" <?php if($mast->m_h4_1 == "NO"){echo "checked";} ?>>
                                <label for="m_h4_1x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_h4_2" placeholder="Follow Up Person" value="<?php echo $mast->m_h4_2 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_h4_3" placeholder="Settle Date" id="date42" value="<?php echo $mast->m_h4_3 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">Approved Fabric Test Reports Available</div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio"  value="YES" name="m_h5_1" id="m_h5_1" <?php if($mast->m_h5_1 == "YES"){echo "checked";} ?>>
                                <label for="m_h5_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio"  value="NO" name="m_h5_1" id="m_h5_1x" <?php if($mast->m_h5_1 == "NO"){echo "checked";} ?>>
                                <label for="m_h5_1x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_h5_2" placeholder="Follow Up Person" value="<?php echo $mast->m_h5_2 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_h5_3" placeholder="Settle Date" id="date43" value="<?php echo $mast->m_h5_3 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">Approved Garment Test Report Available</div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_h6_1" id="m_h6_1" <?php if($mast->m_h6_1 == "YES"){echo "checked";} ?>>
                                <label for="m_h6_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_h6_1" id="m_h6_1x" <?php if($mast->m_h6_1 == "NO"){echo "checked";} ?>>
                                <label for="m_h6_1x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_h6_2" placeholder="Follow Up Person" value="<?php echo $mast->m_h6_2 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_h6_3" placeholder="Settle Date" id="date44" value="<?php echo $mast->m_h6_3 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">Hand Feel Standards Available</div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_h7_1" id="m_h7_1" <?php if($mast->m_h7_1 == "YES"){echo "checked";} ?>>
                                <label for="m_h7_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_h7_1" id="m_h7_1x" <?php if($mast->m_h7_1 == "NO"){echo "checked";} ?>>
                                <label for="m_h7_1x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_h7_2" placeholder="Follow Up Person" value="<?php echo $mast->m_h7_2 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_h7_3" placeholder="Settle Date" id="date45" value="<?php echo $mast->m_h7_3 ?>"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">Approved wash formula</div>
                        <div class="col-md-1">
                             <div class="styled-radio">
                                <input type="radio" value="YES" name="m_h8_1" id="m_h8_1" <?php if($mast->m_h8_1 == "YES"){echo "checked";} ?>>
                                <label for="m_h8_1">Yes</label>
                            </div>                                        
                            <div class="styled-radio">
                                <input type="radio" value="NO" name="m_h8_1" id="m_h8_1x" <?php if($mast->m_h8_1 == "NO"){echo "checked";} ?>>
                                <label for="m_h8_1x">No</label>
                            </div>    
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" name="m_h8_2" placeholder="Follow Up Person" value="<?php echo $mast->m_h8_2 ?>"></div>
                        <div class="col-md-2"><input type="text" class="form-control" name="m_h8_3" placeholder="Settle Date" id="date46" value="<?php echo $mast->m_h8_3 ?>"></div>
                    </div>                   
                    <div class="form-group row">
                        <div class="col-md-6">How many pieces of pilot lot samples should be cut and tested before bulk cutting</div>
                        <div class="col-md-5"><textarea name="m_h9" placeholder="Comments" class="form-control"><?php echo $mast->m_h9 ?></textarea></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">When will the pilot lot samples be finished ?</div>
                        <div class="col-md-5"><textarea name="m_h10" placeholder="Comments" class="form-control"><?php echo $mast->m_h10 ?></textarea></div>
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
