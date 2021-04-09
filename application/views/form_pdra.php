<div class="row">
    <div class="col-xl-12">
        <div class="widget has-shadow">     
 	     	<div class="widget-body">
 	     		<div class="float-left">
 	     			<a href="#" onclick="goBack()" class="btn btn-default btn-sm">< Back</a>
 	     		</div>
                <div class="float-right">
                    <a href="<?php echo base_url('download/get_pdra/'.base64_decode($this->uri->segment(3))) ?>" class="btn btn-primary btn-sm" target="_blank"><i class="la la-print"></i> Print PDF</a>
                </div>
 	     		<h3 class="text-center">PPA Document of DRA & PDRA</h3>
 	     		<hr>
                <?php echo form_open('subform/pdra/'.$this->uri->segment(3)); ?>
 				<div class="form-group row">
 					<div class="col-md-2">Customer</div>
 					<div class="col-md-4 text-success"><?php echo $get->customer_name ?></div>
                    <div class="col-md-2">PPA Champion</div>
                    <div class="col-md-4 text-success">
                        <input type="text" class="form-control" placeholder="PPA Champion" name="pc" value="<?php echo $get_pdra->pc ?>">
                    </div>
 				</div>
 				<div class="form-group row">
 					<div class="col-md-2">Style No.</div>
 					<div class="col-md-4 text-success"><?php echo $get->style_no ?></div>
                    <div class="col-md-2">Industrial Engineer</div>
                    <div class="col-md-4 text-success">
                        <input type="text" class="form-control" placeholder="Industrial Engineer" name="ie" value="<?php echo $get_pdra->ie ?>">
                    </div>
 				</div>
 				<div class="form-group row">
 					<div class="col-md-2">Description</div>
 					<div class="col-md-4 text-success">
 						<textarea name="description" class="form-control" placeholder="Description"><?php echo $get_pdra->description ?></textarea>
 					</div>
                    <div class="col-md-2">Technical Executive</div>
                    <div class="col-md-4 text-success">
                        <input type="text" class="form-control" placeholder="Technical Executive" name="te" value="<?php echo $get_pdra->te ?>">
                    </div>
 				</div>
 				<div class="form-group row">
 					<div class="col-md-2">Remarks</div>
 					<div class="col-md-4 text-success">
 						<textarea name="remarks" class="form-control" placeholder="Remarks"><?php echo $get_pdra->remarks ?></textarea>
 					</div>
                    <div class="col-md-2">Group Leader</div>
                    <div class="col-md-4 text-success">
                        <input type="text" class="form-control" placeholder="Group Leader" name="gl" value="<?php echo $get_pdra->gl ?>">
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
                <!-- <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h2>Basic Accordion</h2>
                </div> -->
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseOne">
                    <div class="card-title">General Information</div>
                </a>
                <div id="collapseOne" class="card-body collapse show pt-0" data-parent="#accordion">
                	<div class="form-group row">
                		<div class="col-lg-2">Plant/Section</div>
                		<div class="col-lg-4"><input type="text" class="form-control" name="input1_1" value="<?php echo $get_pdra->input1_1 ?>" placeholder="Plant/ Section"></div>
                		<div class="col-lg-2">Season</div>
                		<div class="col-lg-4"><input type="text" class="form-control" name="input1_2" value="<?php echo $get_pdra->input1_2 ?>" placeholder="Season"></div>
                	</div>
                	<div class="form-group row">
                		<div class="col-lg-2">1<sup>st</sup> S/O Size Range</div>
                		<div class="col-lg-10"><input type="text" class="form-control" name="input1_3" value="<?php echo $get_pdra->input1_3 ?>" placeholder="1st S/O Size Range"></div>                		
                	</div>
                	<div class="form-group row">
                		<div class="col-lg-2">1<sup>st</sup> S/O Quantity</div>
                		<div class="col-lg-10"><input type="text" class="form-control" name="input1_4" value="<?php echo $get_pdra->input1_4 ?>" placeholder="1st S/O Quantity"></div>                		
                	</div>
                	<div class="form-group row">
                		<div class="col-lg-2">1<sup>st</sup> S/O Colour Ways</div>
                		<div class="col-lg-10"><input type="text" class="form-control" name="input1_5" value="<?php echo $get_pdra->input1_5 ?>" placeholder="1st S/O Colour Ways"></div>                		
                	</div>
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseTwo">
                    <div class="card-title">Style Critical Path</div>
                </a>
                <div id="collapseTwo" class="card-body collapse pt-0" data-parent="#accordion">
                	<div class="row">
                		<div class="col-lg-2">
                			<div class="alert alert-secondary text-center">                				
                				<strong>DRA</strong><hr>
                				Planned <br>
                				<input type="text" class="form-control" name="date1" id="date1" value="<?php echo $get_pdra->date1 ?>">
                				Actual <br>
                				<input type="text" class="form-control" name="date2" id="date2" value="<?php echo $get_pdra->date2 ?>">
                			</div>
                		</div>
                		<div class="col-lg-2">
                			<div class="alert alert-secondary text-center">                				
                				<strong>PDRA</strong><hr>
                				Planned <br>
                				<input type="text" class="form-control" name="date3" id="date3" value="<?php echo $get_pdra->date3 ?>">
                				Actual <br>
                				<input type="text" class="form-control" name="date4" id="date4" value="<?php echo $get_pdra->date4 ?>">
                			</div>
                		</div>
                		<div class="col-lg-2">
                			<div class="alert alert-secondary text-center">                				
                				<strong>Provisional/TLT</strong><hr>
                				Planned <br>
                				<input type="text" class="form-control" name="date5" id="date5" value="<?php echo $get_pdra->date5 ?>">
                				Actual <br>
                				<input type="text" class="form-control" name="date6" id="date6" value="<?php echo $get_pdra->date6 ?>">
                			</div>
                		</div>
                		<div class="col-lg-2">
                			<div class="alert alert-secondary text-center">                				
                				<strong>FI</strong><hr>
                				Planned <br>
                				<input type="text" class="form-control" name="date7" id="date7" value="<?php echo $get_pdra->date7 ?>">
                				Actual <br>
                				<input type="text" class="form-control" name="date8" id="date8" value="<?php echo $get_pdra->date8 ?>">
                			</div>
                		</div>
                		<div class="col-lg-2">
                			<div class="alert alert-secondary text-center">                				
                				<strong>TP</strong><hr>
                				Planned <br>
                				<input type="text" class="form-control" name="date9" id="date9" value="<?php echo $get_pdra->date9 ?>">
                				Actual <br>
                				<input type="text" class="form-control" name="date10" id="date10" value="<?php echo $get_pdra->date10 ?>">
                			</div>
                		</div>
                		<div class="col-lg-2">
                			<div class="alert alert-secondary text-center">                				
                				<strong>PP</strong><hr>
                				Planned <br>
                				<input type="text" class="form-control" name="date11" id="date11" value="<?php echo $get_pdra->date11 ?>">
                				Actual <br>
                				<input type="text" class="form-control" name="date12" id="date12" value="<?php echo $get_pdra->date12 ?>">
                			</div>
                		</div>
                	</div>
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseThree">
                    <div class="card-title">PPA Core Team</div>
                </a>
                <div id="collapseThree" class="card-body collapse pt-0" data-parent="#accordion">
                	<div class="row text-center">
                		<div class="col-lg-6">Development</div>
                		<div class="col-lg-6">Manufacturing</div>
                	</div><br>
                	<div class="form-group row">
                		<label class="form-control-label col-3">Pattern Technologist</label>
                		<div class="col-lg-3"><input type="text" class="form-control" name="input3_1" value="<?php echo $get_pdra->input3_1 ?>" placeholder="Pattern Technologist"></div>
                		<label class="form-control-label col-3">PPA Champion</label>
                		<div class="col-lg-3"><input type="text" class="form-control" name="input3_2" value="<?php echo $get_pdra->input3_2 ?>" placeholder="PPA Champion"></div>
                	</div>
                	<div class="form-group row">
                		<label class="form-control-label col-3">Sewing Technisian</label>
                		<div class="col-lg-3"><input type="text" class="form-control" name="input3_3" value="<?php echo $get_pdra->input3_3 ?>" placeholder="Sewing Technisian"></div>
                		<label class="form-control-label col-3">Industrial Engineering</label>
                		<div class="col-lg-3"><input type="text" class="form-control" name="input3_4" value="<?php echo $get_pdra->input3_4 ?>" placeholder="Industrial Engineering"></div>
                	</div>
                	<div class="form-group row">
                		<label class="form-control-label col-3">Fabric Technologist</label>
                		<div class="col-lg-3"><input type="text" class="form-control" name="input3_5" value="<?php echo $get_pdra->input3_5 ?>" placeholder="Fabric Technologist"></div>
                		<label class="form-control-label col-3">Technical</label>
                		<div class="col-lg-3"><input type="text" class="form-control" name="input3_6" value="<?php echo $get_pdra->input3_6 ?>" placeholder="Technical"></div>
                	</div>
                	<div class="form-group row">
                		<label class="form-control-label col-3">Product Engineering</label>
                		<div class="col-lg-3"><input type="text" class="form-control" name="input3_7" value="<?php echo $get_pdra->input3_7 ?>" placeholder="Product Engineering"></div>
                		<label class="form-control-label col-3">Group Leader</label>
                		<div class="col-lg-3"><input type="text" class="form-control" name="input3_8" value="<?php echo $get_pdra->input3_8 ?>" placeholder="Group Leader"></div>
                	</div>
                	<div class="form-group row">
                		<label class="form-control-label col-3">Development Merchant</label>
                		<div class="col-lg-3"><input type="text" class="form-control" name="input3_9" value="<?php echo $get_pdra->input3_9 ?>" placeholder="Development Merchant"></div>
                		<label class="form-control-label col-3">* Machine Engineering</label>
                		<div class="col-lg-3"><input type="text" class="form-control" name="input3_10" value="<?php echo $get_pdra->input3_10 ?>" placeholder="Machine Engineering"></div>
                	</div>
                	<div class="form-group row">
                		<label class="form-control-label col-3"></label>
                		<div class="col-lg-3"></div>
                		<label class="form-control-label col-3">* Lab & Inspection</label>
                		<div class="col-lg-3"><input type="text" class="form-control" name="input3_11" value="<?php echo $get_pdra->input3_11 ?>" placeholder="Lab & Inspection"></div>
                	</div>
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseFour">
                    <div class="card-title">Prerequisites of DRA Meeting</div>
                </a>
                <div id="collapseFour" class="card-body collapse pt-0" data-parent="#accordion">
                	<table class="table table-condensed">                		
                		<tbody>
                			<tr>
                				<td>Sketch with details available?</td>
                				<td>
			                        <div class="styled-radio">
			                            <input type="radio" value="YES" name="rad1" id="rad-1" <?php if($get_pdra->rad1 == "YES"){echo "checked";} ?>>
			                            <label for="rad-1">Yes</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="NO" name="rad1" id="rad-1x" <?php if($get_pdra->rad1 == "NO"){echo "checked";} ?>>
			                            <label for="rad-1x">No</label>
			                        </div> 
                				</td>
                				<td><textarea name="input4_1" class="form-control" placeholder="Comments"><?php echo $get_pdra->input4_1 ?></textarea></td>
                			</tr>
                			<tr>
                				<td>Bench/block/reference sample available?</td>
                				<td>
			                        <div class="styled-radio">
			                            <input type="radio" value="YES" name="rad2" id="rad-2" <?php if($get_pdra->rad2 == "YES"){echo "checked";} ?>>
			                            <label for="rad-2">Yes</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="NO" name="rad2" id="rad-2x" <?php if($get_pdra->rad2 == "NO"){echo "checked";} ?>>
			                            <label for="rad-2x">No</label>
			                        </div> 
                				</td>
                				<td><textarea name="input4_2" class="form-control" placeholder="Comments"><?php echo $get_pdra->input4_2 ?></textarea></td>
                			</tr>
                			<tr>
                				<td>Provisional construction sheet available ?</td>
                				<td>
			                        <div class="styled-radio">
			                            <input type="radio" value="YES" name="rad3" id="rad-3" <?php if($get_pdra->rad3 == "YES"){echo "checked";} ?>>
			                            <label for="rad-3">Yes</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="NO" name="rad3" id="rad-3x" <?php if($get_pdra->rad3 == "NO"){echo "checked";} ?>>
			                            <label for="rad-3x">No</label>
			                        </div> 
                				</td>
                				<td><textarea name="input4_3" class="form-control" placeholder="Comments"><?php echo $get_pdra->input4_3 ?></textarea></td>
                			</tr>
                			<tr>
                				<td>Latest BOM available ?</td>
                				<td>
			                        <div class="styled-radio">
			                            <input type="radio" value="YES" name="rad4" id="rad-4" <?php if($get_pdra->rad4 == "YES"){echo "checked";} ?>>
			                            <label for="rad-4">Yes</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="NO" name="rad4" id="rad-4x" <?php if($get_pdra->rad4 == "NO"){echo "checked";} ?>>
			                            <label for="rad-4x">No</label>
			                        </div> 
                				</td>
                				<td><textarea name="input4_4" class="form-control" placeholder="Comments"><?php echo $get_pdra->input4_4 ?></textarea></td>
                			</tr>
                			<tr>
                				<td>Material/ trim & accessories information availbale?</td>
                				<td>
			                        <div class="styled-radio">
			                            <input type="radio" value="YES" name="rad5" id="rad-5" <?php if($get_pdra->rad5 == "YES"){echo "checked";} ?>>
			                            <label for="rad-5">Yes</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="NO" name="rad5" id="rad-5x" <?php if($get_pdra->rad5 == "NO"){echo "checked";} ?>>
			                            <label for="rad-5x">No</label>
			                        </div> 
                				</td>
                				<td><textarea name="input4_5" class="form-control" placeholder="Comments"><?php echo $get_pdra->input4_5 ?></textarea></td>
                			</tr>
                			<tr>
                				<td>Machine & attachment information available?</td>
                				<td>
			                        <div class="styled-radio">
			                            <input type="radio" value="YES" name="rad6" id="rad-6" <?php if($get_pdra->rad6 == "YES"){echo "checked";} ?>>
			                            <label for="rad-6">Yes</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="NO" name="rad6" id="rad-6x" <?php if($get_pdra->rad6 == "NO"){echo "checked";} ?>>
			                            <label for="rad-6x">No</label>
			                        </div> 
                				</td>
                				<td><textarea name="input4_6" class="form-control" placeholder="Comments"><?php echo $get_pdra->input4_6 ?></textarea></td>
                			</tr>
                			<tr>
                				<td>Embelishment/graphic sample & details available?</td>
                				<td>
			                        <div class="styled-radio">
			                            <input type="radio" value="YES" name="rad7" id="rad-7" <?php if($get_pdra->rad7 == "YES"){echo "checked";} ?>>
			                            <label for="rad-7">Yes</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="NO" name="rad7" id="rad-7x" <?php if($get_pdra->rad7 == "NO"){echo "checked";} ?>>
			                            <label for="rad-7x">No</label>
			                        </div> 
                				</td>
                				<td><textarea name="input4_7" class="form-control" placeholder="Comments"><?php echo $get_pdra->input4_7 ?></textarea></td>
                			</tr>
                			<tr>
                				<td>Molding heads, parameters & details available?</td>
                				<td>
			                        <div class="styled-radio">
			                            <input type="radio" value="YES" name="rad8" id="rad-8" <?php if($get_pdra->rad8 == "YES"){echo "checked";} ?>>
			                            <label for="rad-8">Yes</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="NO" name="rad8" id="rad-8x" <?php if($get_pdra->rad8 == "NO"){echo "checked";} ?>>
			                            <label for="rad-8x">No</label>
			                        </div> 
                				</td>
                				<td><textarea name="input4_8" class="form-control" placeholder="Comments"><?php echo $get_pdra->input4_8 ?></textarea></td>
                			</tr>
                			<tr>
                				<td>Provisional SMV available?</td>
                				<td>
			                        <div class="styled-radio">
			                            <input type="radio" value="YES" name="rad9" id="rad-9" <?php if($get_pdra->rad9 == "YES"){echo "checked";} ?>>
			                            <label for="rad-9">Yes</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="NO" name="rad9" id="rad-9x" <?php if($get_pdra->rad9 == "NO"){echo "checked";} ?>>
			                            <label for="rad-9x">No</label>
			                        </div> 
                				</td>
                				<td><textarea name="input4_9" class="form-control" placeholder="Comments"><?php echo $get_pdra->input4_9 ?></textarea></td>
                			</tr>
                		</tbody>
                	</table>
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseFive">
                    <div class="card-title">Prerequisites of PDRA Meeting</div>
                </a>
                <div id="collapseFive" class="card-body collapse pt-0" data-parent="#accordion">
                	<table class="table table-condensed">                		
                		<tbody>
                			<tr>
                				<td>Latest development sample with comments available ?</td>
                				<td>
			                        <div class="styled-radio">
			                            <input type="radio" value="YES" name="rad10" id="rad-10" <?php if($get_pdra->rad10 == "YES"){echo "checked";} ?>>
			                            <label for="rad-10">Yes</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="NO" name="rad10" id="rad-10x">
			                            <label for="rad-10x">No</label>
			                        </div> 
                				</td>
                				<td><textarea name="input5_1" class="form-control" placeholder="Comments"><?php echo $get_pdra->input5_1 ?></textarea></td>
                			</tr>
                			<tr>
                				<td>Latest construction sheet available ?</td>
                				<td>
			                        <div class="styled-radio">
			                            <input type="radio" value="YES" name="rad11" id="rad-11" <?php if($get_pdra->rad11 == "YES"){echo "checked";} ?>>
			                            <label for="rad-11">Yes</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="NO" name="rad11" id="rad-11x">
			                            <label for="rad-11x">No</label>
			                        </div> 
                				</td>
                				<td><textarea name="input5_2" class="form-control" placeholder="Comments"><?php echo $get_pdra->input5_2 ?></textarea></td>
                			</tr>
                			<tr>
                				<td>Latest measurement spec. & how to measure available?</td>
                				<td>
			                        <div class="styled-radio">
			                            <input type="radio" value="YES" name="rad12" id="rad-12" <?php if($get_pdra->rad12 == "YES"){echo "checked";} ?>>
			                            <label for="rad-12">Yes</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="NO" name="rad12" id="rad-12x">
			                            <label for="rad-12x">No</label>
			                        </div> 
                				</td>
                				<td><textarea name="input5_3" class="form-control" placeholder="Comments"><?php echo $get_pdra->input5_3 ?></textarea></td>
                			</tr>
                			<tr>
                				<td>Latest BOM available ?</td>
                				<td>
			                        <div class="styled-radio">
			                            <input type="radio" value="YES" name="rad13" id="rad-13" <?php if($get_pdra->rad13 == "YES"){echo "checked";} ?>>
			                            <label for="rad-13">Yes</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="NO" name="rad13" id="rad-13x">
			                            <label for="rad-13x">No</label>
			                        </div> 
                				</td>
                				<td><textarea name="input5_4" class="form-control" placeholder="Comments"><?php echo $get_pdra->input5_4 ?></textarea></td>
                			</tr>
                			<tr>
                				<td>Material/ trim & accessories information available?</td>
                				<td>
			                        <div class="styled-radio">
			                            <input type="radio" value="YES" name="rad14" id="rad-14" <?php if($get_pdra->rad14 == "YES"){echo "checked";} ?>>
			                            <label for="rad-14">Yes</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="NO" name="rad14" id="rad-14x">
			                            <label for="rad-14x">No</label>
			                        </div> 
                				</td>
                				<td><textarea name="input5_5" class="form-control" placeholder="Comments"><?php echo $get_pdra->input5_5 ?></textarea></td>
                			</tr>
                			<tr>
                				<td>Machine & attachment information available?</td>
                				<td>
			                        <div class="styled-radio">
			                            <input type="radio" value="YES" name="rad15" id="rad-15" <?php if($get_pdra->rad15 == "YES"){echo "checked";} ?>>
			                            <label for="rad-15">Yes</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="NO" name="rad15" id="rad-15x">
			                            <label for="rad-15x">No</label>
			                        </div> 
                				</td>
                				<td><textarea name="input5_6" class="form-control" placeholder="Comments"><?php echo $get_pdra->input5_6 ?></textarea></td>
                			</tr>
                			<tr>
                				<td>Embelishment/graphic sample & details available?</td>
                				<td>
			                        <div class="styled-radio">
			                            <input type="radio" value="YES" name="rad16" id="rad-16" <?php if($get_pdra->rad16 == "YES"){echo "checked";} ?>>
			                            <label for="rad-16">Yes</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="NO" name="rad16" id="rad-16x">
			                            <label for="rad-16x">No</label>
			                        </div> 
                				</td>
                				<td><textarea name="input5_7" class="form-control" placeholder="Comments"><?php echo $get_pdra->input5_7 ?></textarea></td>
                			</tr>
                			<tr>
                				<td>Molding heads, parameters & details available?</td>
                				<td>
			                        <div class="styled-radio">
			                            <input type="radio" value="YES" name="rad17" id="rad-17" <?php if($get_pdra->rad17 == "YES"){echo "checked";} ?>>
			                            <label for="rad-17">Yes</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="NO" name="rad17" id="rad-17x">
			                            <label for="rad-17x">No</label>
			                        </div> 
                				</td>
                				<td><textarea name="input5_8" class="form-control" placeholder="Comments"><?php echo $get_pdra->input5_8 ?></textarea></td>
                			</tr>
                			<tr>
                				<td>Updated SMV available?</td>
                				<td>
			                        <div class="styled-radio">
			                            <input type="radio" value="YES" name="rad18" id="rad-18" <?php if($get_pdra->rad18 == "YES"){echo "checked";} ?>>
			                            <label for="rad-18">Yes</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="NO" name="rad18" id="rad-18x">
			                            <label for="rad-18x">No</label>
			                        </div> 
                				</td>
                				<td><textarea name="input5_9" class="form-control" placeholder="Comments"><?php echo $get_pdra->input5_9 ?></textarea></td>
                			</tr>
                			<tr>
                				<td>Order quantities and delivery information available?</td>
                				<td>
			                        <div class="styled-radio">
			                            <input type="radio" value="YES" name="rad19" id="rad-19" <?php if($get_pdra->rad19 == "YES"){echo "checked";} ?>>
			                            <label for="rad-19">Yes</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="NO" name="rad19" id="rad-19x">
			                            <label for="rad-19x">No</label>
			                        </div> 
                				</td>
                				<td><textarea name="input5_10" class="form-control" placeholder="Comments"><?php echo $get_pdra->input5_10 ?></textarea></td>
                			</tr>
                		</tbody>
                	</table>
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseSix">
                    <div class="card-title">Risk Analysis Sheet</div>
                </a>
                <div id="collapseSix" class="card-body collapse pt-0" data-parent="#accordion">
                	<h4>Risk of Material</h4>
                	<table class="table table-bordered" style="font-size: 12px;">        				
        				<thead>
        					<tr>
        						<th>Risk Area</th>
        						<th>Key points to be considered</th>
        						<th width="1%">Risk</th>
        					</tr>
        				</thead>
        				<tbody>
        					<tr>
        						<td>Newness of RM/Supplier</td>
        						<td><textarea name="input6_23" class="form-control" placeholder="Key points to be considered"><?php echo $get_pdra->input6_23 ?></textarea></td>
        						<td>
        							<div class="styled-radio">
			                            <input type="radio" value="L" name="input6_1" id="input6_1" <?php if($get_pdra->input6_1 == "L"){echo "checked";} ?>>
			                            <label for="input6_1">L</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="H" name="input6_1" id="input6_1x" <?php if($get_pdra->input6_1 == "H"){echo "checked";} ?>>
			                            <label for="input6_1x">H</label>
			                        </div>
        						</td>
        					</tr>
        					<tr>
        						<td>Behaviour of RM</td>
        						<td><textarea name="input6_24" class="form-control" placeholder="Key points to be considered"><?php echo $get_pdra->input6_24 ?></textarea></td>
        						<td>
        							<div class="styled-radio">
			                            <input type="radio" value="L" name="input6_2" id="input6_2" <?php if($get_pdra->input6_2 == "L"){echo "checked";} ?>>
			                            <label for="input6_2">L</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="H" name="input6_2" id="input6_2x" <?php if($get_pdra->input6_2 == "H"){echo "checked";} ?>>
			                            <label for="input6_2x">H</label>
			                        </div>
        						</td>
        					</tr>
        					<tr>
        						<td>Technology operations on RM</td>
        						<td><textarea name="input6_25" class="form-control" placeholder="Key points to be considered"><?php echo $get_pdra->input6_25 ?></textarea></td>
        						<td>
        							<div class="styled-radio">
			                            <input type="radio" value="L" name="input6_3" id="input6_3" <?php if($get_pdra->input6_3 == "L"){echo "checked";} ?>>
			                            <label for="input6_3">L</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="H" name="input6_3" id="input6_3x" <?php if($get_pdra->input6_3 == "H"){echo "checked";} ?>>
			                            <label for="input6_3x">H</label>
			                        </div>
        						</td>
        					</tr>
        					<tr>
        						<td>Value addition applications on RM</td>
        						<td><textarea name="input6_26" class="form-control" placeholder="Key points to be considered"><?php echo $get_pdra->input6_26 ?></textarea></td>
        						<td>
        							<div class="styled-radio">
			                            <input type="radio" value="L" name="input6_4" id="input6_4" <?php if($get_pdra->input6_4 == "L"){echo "checked";} ?>>
			                            <label for="input6_4">L</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="H" name="input6_4" id="input6_4x" <?php if($get_pdra->input6_4 == "H"){echo "checked";} ?>>
			                            <label for="input6_4x">H</label>
			                        </div>
        						</td>
        					</tr>
        					<tr>
        						<td>Defects on RM</td>
        						<td><textarea name="input6_27" class="form-control" placeholder="Key points to be considered"><?php echo $get_pdra->input6_27 ?></textarea></td>
        						<td>
        							<div class="styled-radio">
			                            <input type="radio" value="L" name="input6_5" id="input6_5" <?php if($get_pdra->input6_5 == "L"){echo "checked";} ?>>
			                            <label for="input6_5">L</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="H" name="input6_5" id="input6_5x" <?php if($get_pdra->input6_5 == "H"){echo "checked";} ?>>
			                            <label for="input6_5x">H</label>
			                        </div>
        						</td>
        					</tr>
        					<tr>
        						<td>RM Spec compatabiity with size range</td>
        						<td><textarea name="input6_28" class="form-control" placeholder="Key points to be considered"><?php echo $get_pdra->input6_28 ?></textarea></td>
        						<td>
        							<div class="styled-radio">
			                            <input type="radio" value="L" name="input6_6" id="input6_6" <?php if($get_pdra->input6_6 == "L"){echo "checked";} ?>>
			                            <label for="input6_6">L</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="H" name="input6_6" id="input6_6x" <?php if($get_pdra->input6_6 == "H"){echo "checked";} ?>>
			                            <label for="input6_6x">H</label>
			                        </div>
        						</td>
        					</tr>
        					<tr>
        						<td>RM & FG testing</td>
        						<td><textarea name="input6_29" class="form-control" placeholder="Key points to be considered"><?php echo $get_pdra->input6_29 ?></textarea></td>
        						<td>
        							<div class="styled-radio">
			                            <input type="radio" value="L" name="input6_7" id="input6_7" <?php if($get_pdra->input6_7 == "L"){echo "checked";} ?>>
			                            <label for="input6_7">L</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="H" name="input6_7" id="input6_7x" <?php if($get_pdra->input6_7 == "H"){echo "checked";} ?>>
			                            <label for="input6_7x">H</label>
			                        </div>
        						</td>
        					</tr>
        				</tbody>
        			</table>		
        			<h4>Risk of Machine</h4>
                	<table class="table table-bordered" style="font-size: 12px;">        				
        				<thead>
        					<tr>
        						<th>Risk Area</th>
        						<th>Key points to be considered</th>
        						<th width="1%">Risk</th>
        					</tr>
        				</thead>
        				<tbody>
        					<tr>
        						<td>Use of technology machines</td>
        						<td><textarea name="input6_30" class="form-control" placeholder="Key points to be considered"><?php echo $get_pdra->input6_30 ?></textarea></td>
        						<td>
        							<div class="styled-radio">
			                            <input type="radio" value="L" name="input6_8" id="input6_8" <?php if($get_pdra->input6_8 == "L"){echo "checked";} ?>>
			                            <label for="input6_8">L</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="H" name="input6_8" id="input6_8x" <?php if($get_pdra->input6_8 == "H"){echo "checked";} ?>>
			                            <label for="input6_8x">H</label>
			                        </div>
        						</td>
        					</tr>
        					<tr>
        						<td>Use of folders & attachments</td>
        						<td><textarea name="input6_31" class="form-control" placeholder="Key points to be considered"><?php echo $get_pdra->input6_31 ?></textarea></td>
        						<td>
        							<div class="styled-radio">
			                            <input type="radio" value="L" name="input6_9" id="input6_9" <?php if($get_pdra->input6_9 == "L"){echo "checked";} ?>>
			                            <label for="input6_9">L</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="H" name="input6_9" id="input6_9x" <?php if($get_pdra->input6_9 == "H"){echo "checked";} ?>>
			                            <label for="input6_9x">H</label>
			                        </div>
        						</td>
        					</tr>
        					<tr>
        						<td>Use of special needles</td>
        						<td><textarea name="input6_32" class="form-control" placeholder="Key points to be considered"><?php echo $get_pdra->input6_32 ?></textarea></td>
        						<td>
        							<div class="styled-radio">
			                            <input type="radio" value="L" name="input6_10" id="input6_10" <?php if($get_pdra->input6_10 == "L"){echo "checked";} ?>>
			                            <label for="input6_10">L</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="H" name="input6_10" id="input6_10x" <?php if($get_pdra->input6_10 == "H"){echo "checked";} ?>>
			                            <label for="input6_10x">H</label>
			                        </div>
        						</td>
        					</tr>
        					<tr>
        						<td>Use of special machine types & settings</td>
        						<td><textarea name="input6_33" class="form-control" placeholder="Key points to be considered"><?php echo $get_pdra->input6_33 ?></textarea></td>
        						<td>
        							<div class="styled-radio">
			                            <input type="radio" value="L" name="input6_11" id="input6_11" <?php if($get_pdra->input6_11 == "L"){echo "checked";} ?>>
			                            <label for="input6_11">L</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="H" name="input6_11" id="input6_11x" <?php if($get_pdra->input6_11 == "H"){echo "checked";} ?>>
			                            <label for="input6_11x">H</label>
			                        </div>
        						</td>
        					</tr>
        					<tr>
        						<td>Use of special moulds</td>
        						<td><textarea name="input6_34" class="form-control" placeholder="Key points to be considered"><?php echo $get_pdra->input6_34 ?></textarea></td>
        						<td>
        							<div class="styled-radio">
			                            <input type="radio" value="L" name="input6_12" id="input6_12" <?php if($get_pdra->input6_12 == "L"){echo "checked";} ?>>
			                            <label for="input6_12">L</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="H" name="input6_12" id="input6_12x" <?php if($get_pdra->input6_12 == "H"){echo "checked";} ?>>
			                            <label for="input6_12x">H</label>
			                        </div>
        						</td>
        					</tr>
        					<tr>
        						<td>Availability & capacity of machines</td>
        						<td><textarea name="input6_35" class="form-control" placeholder="Key points to be considered"><?php echo $get_pdra->input6_35 ?></textarea></td>
        						<td>
        							<div class="styled-radio">
			                            <input type="radio" value="L" name="input6_13" id="input6_13" <?php if($get_pdra->input6_13 == "L"){echo "checked";} ?>>
			                            <label for="input6_13">L</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="H" name="input6_13" id="input6_13x" <?php if($get_pdra->input6_13 == "H"){echo "checked";} ?>>
			                            <label for="input6_13x">H</label>
			                        </div>
        						</td>
        					</tr>        				
        				</tbody>
        			</table>
        			<h4>Risk of Method</h4>		
        			<table class="table table-bordered" style="font-size: 12px;">        				
        				<thead>
        					<tr>
        						<th>Risk Area</th>
        						<th>Key points to be considered</th>
        						<th width="1%">Risk</th>
        					</tr>
        				</thead>
        				<tbody>
        					<tr>
        						<td>Difficult operations</td>
        						<td><textarea name="input6_36" class="form-control" placeholder="Key points to be considered"><?php echo $get_pdra->input6_36 ?></textarea></td>
        						<td>
        							<div class="styled-radio">
			                            <input type="radio" value="L" name="input6_14" id="input6_14" <?php if($get_pdra->input6_14 == "L"){echo "checked";} ?>>
			                            <label for="input6_14">L</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="H" name="input6_14" id="input6_14x" <?php if($get_pdra->input6_14 == "H"){echo "checked";} ?>>
			                            <label for="input6_14x">H</label>
			                        </div>
        						</td>
        					</tr>
        					<tr>
        						<td>Difficult patterns</td>
        						<td><textarea name="input6_37" class="form-control" placeholder="Key points to be considered"><?php echo $get_pdra->input6_37 ?></textarea></td>
        						<td>
        							<div class="styled-radio">
			                            <input type="radio" value="L" name="input6_15" id="input6_15" <?php if($get_pdra->input6_15 == "L"){echo "checked";} ?>>
			                            <label for="input6_15">L</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="H" name="input6_15" id="input6_15x" <?php if($get_pdra->input6_15 == "H"){echo "checked";} ?>>
			                            <label for="input6_15x">H</label>
			                        </div>
        						</td>
        					</tr>
        					<tr>
        						<td>Outsourcing processes</td>
        						<td><textarea name="input6_38" class="form-control" placeholder="Key points to be considered"><?php echo $get_pdra->input6_38 ?></textarea></td>
        						<td>
        							<div class="styled-radio">
			                            <input type="radio" value="L" name="input6_16" id="input6_16" <?php if($get_pdra->input6_16 == "L"){echo "checked";} ?>>
			                            <label for="input6_16">L</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="H" name="input6_16" id="input6_16x" <?php if($get_pdra->input6_16 == "H"){echo "checked";} ?>>
			                            <label for="input6_16x">H</label>
			                        </div>
        						</td>
        					</tr>
        					<tr>
        						<td>Cutting method</td>
        						<td><textarea name="input6_39" class="form-control" placeholder="Key points to be considered"><?php echo $get_pdra->input6_39 ?></textarea></td>
        						<td>
        							<div class="styled-radio">
			                            <input type="radio" value="L" name="input6_17" id="input6_17" <?php if($get_pdra->input6_17 == "L"){echo "checked";} ?>>
			                            <label for="input6_17">L</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="H" name="input6_17" id="input6_17x" <?php if($get_pdra->input6_17 == "H"){echo "checked";} ?>>
			                            <label for="input6_17x">H</label>
			                        </div>
        						</td>
        					</tr>
        					<tr>
        						<td>Moulding Method</td>
        						<td><textarea name="input6_40" class="form-control" placeholder="Key points to be considered"><?php echo $get_pdra->input6_40 ?></textarea></td>
        						<td>
        							<div class="styled-radio">
			                            <input type="radio" value="L" name="input6_18" id="input6_18" <?php if($get_pdra->input6_18 == "L"){echo "checked";} ?>>
			                            <label for="input6_18">L</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="H" name="input6_18" id="input6_18x" <?php if($get_pdra->input6_18 == "H"){echo "checked";} ?>>
			                            <label for="input6_18x">H</label>
			                        </div>
        						</td>
        					</tr>
        					<tr>
        						<td>Technology application method</td>
        						<td><textarea name="input6_41" class="form-control" placeholder="Key points to be considered"><?php echo $get_pdra->input6_41 ?></textarea></td>
        						<td>
        							<div class="styled-radio">
			                            <input type="radio" value="L" name="input6_19" id="input6_19" <?php if($get_pdra->input6_19 == "L"){echo "checked";} ?>>
			                            <label for="input6_19">L</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="H" name="input6_19" id="input6_19x" <?php if($get_pdra->input6_19 == "H"){echo "checked";} ?>>
			                            <label for="input6_19x">H</label>
			                        </div>
        						</td>
        					</tr>
        					<tr>
        						<td>Packing method</td>
        						<td><textarea name="input6_42" class="form-control" placeholder="Key points to be considered"><?php echo $get_pdra->input6_42 ?></textarea></td>
        						<td>
        							<div class="styled-radio">
			                            <input type="radio" value="L" name="input6_20" id="input6_20" <?php if($get_pdra->input6_20 == "L"){echo "checked";} ?>>
			                            <label for="input6_20">L</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="H" name="input6_20" id="input6_20x" <?php if($get_pdra->input6_20 == "H"){echo "checked";} ?>>
			                            <label for="input6_20x">H</label>
			                        </div>
        						</td>
        					</tr>        				
        				</tbody>
        			</table>
        			<h4>Risk of Man</h4>		
        			<table class="table table-bordered" style="font-size: 12px;">        				
        				<thead>
        					<tr>
        						<th>Risk Area</th>
        						<th>Key points to be considered</th>
        						<th width="1%">Risk</th>
        					</tr>
        				</thead>
        				<tbody>
        					<tr>
        						<td>Training requirement of TM</td>
        						<td><textarea name="input6_43" class="form-control" placeholder="Key points to be considered"><?php echo $get_pdra->input6_43 ?></textarea></td>
        						<td>
        							<div class="styled-radio">
			                            <input type="radio" value="L" name="input6_21" id="input6_21" <?php if($get_pdra->input6_21 == "L"){echo "checked";} ?>>
			                            <label for="input6_21">L</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="H" name="input6_21" id="input6_21x" <?php if($get_pdra->input6_21 == "H"){echo "checked";} ?>>
			                            <label for="input6_21x">H</label>
			                        </div>
        						</td>
        					</tr>
        					<tr>
        						<td>Additional carde requirement</td>
        						<td><textarea name="input6_44" class="form-control" placeholder="Key points to be considered"><?php echo $get_pdra->input6_44 ?></textarea></td>
        						<td>
        							<div class="styled-radio">
			                            <input type="radio" value="L" name="input6_22" id="input6_22" <?php if($get_pdra->input6_22 == "L"){echo "checked";} ?>>
			                            <label for="input6_22">L</label>
			                        </div>                                        
			                        <div class="styled-radio">
			                            <input type="radio" value="H" name="input6_22" id="input6_22x" <?php if($get_pdra->input6_22 == "H"){echo "checked";} ?>>
			                            <label for="input6_22x">H</label>
			                        </div>
        						</td>
        					</tr>        					
        				</tbody>
        			</table>
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseSeven">
                    <div class="card-title">Action Plan for Risk Elimination</div>
                </a>
                <div id="collapseSeven" class="card-body collapse pt-0" data-parent="#accordion">
                	<div class="form-group row text-center">
                		<div class="col-lg-1">
                            <!-- <button type="button" id="btn_add" class="btn btn-sm btn-primary"><i class="la la-plus"></i></button> -->
                        </div>
                		<div class="col-lg-5">What</div>
                		<div class="col-lg-2">Who</div>
                		<div class="col-lg-2">When</div>
                		<div class="col-lg-2">ST</div>
                	</div>                	
                    <div id="tambah">
                    <?php if (empty($cek)) { ?>
                    	<div class="form-group row">                		
                    		<div class="col-lg-6">
                                <textarea class="form-control" placeholder="What" name="what[]"></textarea>                            
                            </div>
                    		<div class="col-lg-2"><input type="text" class="form-control" name="who[]" placeholder="Who"></div>
                    		<div class="col-lg-2"><input type="text" class="form-control" name="when[]" placeholder="When"></div>
                    		<div class="col-lg-2"><input type="text" class="form-control" name="st[]" placeholder="ST"></div>
                    	</div>         
                        <div class="form-group row">                        
                            <div class="col-lg-6">
                                <textarea class="form-control" placeholder="What" name="what[]"></textarea>                            
                            </div>
                            <div class="col-lg-2"><input type="text" class="form-control" name="who[]" placeholder="Who"></div>
                            <div class="col-lg-2"><input type="text" class="form-control" name="when[]" placeholder="When"></div>
                            <div class="col-lg-2"><input type="text" class="form-control" name="st[]" placeholder="ST"></div>
                        </div>         
                        <div class="form-group row">                        
                            <div class="col-lg-6">
                                <textarea class="form-control" placeholder="What" name="what[]"></textarea>                            
                            </div>
                            <div class="col-lg-2"><input type="text" class="form-control" name="who[]" placeholder="Who"></div>
                            <div class="col-lg-2"><input type="text" class="form-control" name="when[]" placeholder="When"></div>
                            <div class="col-lg-2"><input type="text" class="form-control" name="st[]" placeholder="ST"></div>
                        </div>   
                        <div class="form-group row">                        
                            <div class="col-lg-6">
                                <textarea class="form-control" placeholder="What" name="what[]"></textarea>                            
                            </div>
                            <div class="col-lg-2"><input type="text" class="form-control" name="who[]" placeholder="Who"></div>
                            <div class="col-lg-2"><input type="text" class="form-control" name="when[]" placeholder="When"></div>
                            <div class="col-lg-2"><input type="text" class="form-control" name="st[]" placeholder="ST"></div>
                        </div>   
                        <div class="form-group row">                        
                            <div class="col-lg-6">
                                <textarea class="form-control" placeholder="What" name="what[]"></textarea>                            
                            </div>
                            <div class="col-lg-2"><input type="text" class="form-control" name="who[]" placeholder="Who"></div>
                            <div class="col-lg-2"><input type="text" class="form-control" name="when[]" placeholder="When"></div>
                            <div class="col-lg-2"><input type="text" class="form-control" name="st[]" placeholder="ST"></div>
                        </div>                                    	                                               
                    <?php }else{ 
                        foreach ($pdra_ext as $data) { ?>
                        <div class="form-group row">                        
                            <div class="col-lg-6">
                                <textarea class="form-control" placeholder="What" name="what[]"><?php echo $data->wht ?></textarea>
                            </div>
                            <div class="col-lg-2"><input type="text" class="form-control" name="who[]" placeholder="Who" value="<?php echo $data->who ?>"></div>
                            <div class="col-lg-2"><input type="text" class="form-control" name="when[]" placeholder="When" value="<?php echo $data->whn ?>"></div>
                            <div class="col-lg-2"><input type="text" class="form-control" name="st[]" placeholder="ST" value="<?php echo $data->st ?>"></div>
                        </div>
                    <?php }} ?>
                    </div>
                    
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseEight">
                    <div class="card-title">Provisional TLT/Pilot Sewing Requirements</div>
                </a>
                <div id="collapseEight" class="card-body collapse pt-0" data-parent="#accordion">
                	<table class="table table-condensed">
                		<thead>
                			<tr>
                				<th></th>
                				<th>Provisional</th>
                				<th>Factory Integration</th>
                				<th>TLT</th>
                				<th>Pilot/Test Cut</th>
                			</tr>
                		</thead>
                		<tbody>
                			<tr>
                				<td>Planned Sizes</td>
                				<td><input type="text" class="form-control" name="input8_1" value="<?php echo $get_pdra->input8_1 ?>" placeholder="Planned Sizes"></td>
                				<td><input type="text" class="form-control" name="input8_2" value="<?php echo $get_pdra->input8_2 ?>" placeholder="Planned Sizes"></td>
                				<td><input type="text" class="form-control" name="input8_3" value="<?php echo $get_pdra->input8_3 ?>" placeholder="Planned Sizes"></td>
                				<td><input type="text" class="form-control" name="input8_4" value="<?php echo $get_pdra->input8_4 ?>" placeholder="Planned Sizes"></td>
                			</tr>
                			<tr>
                				<td>Planned Qty</td>
                				<td><input type="text" class="form-control" name="input8_5" value="<?php echo $get_pdra->input8_5 ?>" placeholder="Planned Qty"></td>
                				<td><input type="text" class="form-control" name="input8_6" value="<?php echo $get_pdra->input8_6 ?>" placeholder="Planned Qty"></td>
                				<td><input type="text" class="form-control" name="input8_7" value="<?php echo $get_pdra->input8_7 ?>" placeholder="Planned Qty"></td>
                				<td><input type="text" class="form-control" name="input8_8" value="<?php echo $get_pdra->input8_8 ?>" placeholder="Planned Qty"></td>
                			</tr>
                			<tr>
                				<td>Planned Date</td>
                				<td><input type="text" class="form-control" name="input8_9" value="<?php echo $get_pdra->input8_9 ?>" placeholder="Planned Date" id="date13"></td>
                				<td><input type="text" class="form-control" name="input8_10" value="<?php echo $get_pdra->input8_10 ?>" placeholder="Planned Date" id="date14"></td>
                				<td><input type="text" class="form-control" name="input8_11" value="<?php echo $get_pdra->input8_11 ?>" placeholder="Planned Date" id="date15"></td>
                				<td><input type="text" class="form-control" name="input8_12" value="<?php echo $get_pdra->input8_12 ?>" placeholder="Planned Date" id="date16"></td>
                			</tr>
                			<tr>
                				<td>Act Date</td>
                				<td><input type="text" class="form-control" name="input8_13" value="<?php echo $get_pdra->input8_13 ?>" placeholder="Act Date" id="date17"></td>
                				<td><input type="text" class="form-control" name="input8_14" value="<?php echo $get_pdra->input8_14 ?>" placeholder="Act Date" id="date18"></td>
                				<td><input type="text" class="form-control" name="input8_15" value="<?php echo $get_pdra->input8_15 ?>" placeholder="Act Date" id="date19"></td>
                				<td><input type="text" class="form-control" name="input8_16" value="<?php echo $get_pdra->input8_16 ?>" placeholder="Act Date" id="date20"></td>
                			</tr>
                			<tr>
                				<td>Location</td>
                				<td><input type="text" class="form-control" name="input8_17" value="<?php echo $get_pdra->input8_17 ?>" placeholder="Location"></td>
                				<td><input type="text" class="form-control" name="input8_18" value="<?php echo $get_pdra->input8_18 ?>" placeholder="Location"></td>
                				<td><input type="text" class="form-control" name="input8_19" value="<?php echo $get_pdra->input8_19 ?>" placeholder="Location"></td>
                				<td><input type="text" class="form-control" name="input8_20" value="<?php echo $get_pdra->input8_20 ?>" placeholder="Location"></td>
                			</tr>
                			<tr>
                				<td>Purposes of having/<br>Reason for elimination<br>(explain briefly)</td>
                				<td><input type="text" class="form-control" name="input8_21" value="<?php echo $get_pdra->input8_21 ?>" placeholder="Purpose of Having"></td>
                				<td><input type="text" class="form-control" name="input8_22" value="<?php echo $get_pdra->input8_22 ?>" placeholder="Purpose of Having"></td>
                				<td><input type="text" class="form-control" name="input8_23" value="<?php echo $get_pdra->input8_23 ?>" placeholder="Purpose of Having"></td>
                				<td><input type="text" class="form-control" name="input8_24" value="<?php echo $get_pdra->input8_24 ?>" placeholder="Purpose of Having"></td>
                			</tr>
                		</tbody>
                	</table>
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseNine">
                    <div class="card-title">Indentification of Chasis</div>
                </a>
                <div id="collapseNine" class="card-body collapse pt-0" data-parent="#accordion">
                	<div class="form-group row">
                		<label class="form-control-label col-lg-8">If the style fall into a defined chassis, mention chassis code</label>
                		<div class="col-lg-4"><input type="text" class="form-control" name="input9_1" value="<?php echo $get_pdra->input9_1 ?>" placeholder="Type here..."></div>
                	</div>
                	<div class="form-group row">
                		<label class="form-control-label col-lg-8">If the style fall into a undefined chassis, mention the most similar chassis code</label>
                		<div class="col-lg-4"><input type="text" class="form-control" name="input9_2" value="<?php echo $get_pdra->input9_2 ?>" placeholder="Type here..."></div>
                	</div>
                	<div class="form-group row">
                		<label class="form-control-label col-lg-12">Workout the percentage of Machine changes in running chassis to this style chassis and put in priority order below</label>                		
                	</div>
                	<table class="table table-bordered">
                		<thead>
                			<tr>
                				<th>Plan Priority</th>
                				<th>1</th>
                				<th>2</th>
                				<th>3</th>
                				<th>4</th>
                				<th>5</th>
                				<th>6</th>
                			</tr>
                		</thead>
                		<tbody>
                			<tr>
                				<td>Running Chasis</td>
                				<td><input type="text" class="form-control" name="input9_3" value="<?php echo $get_pdra->input9_3 ?>"></td>
                				<td><input type="text" class="form-control" name="input9_4" value="<?php echo $get_pdra->input9_4 ?>"></td>
                				<td><input type="text" class="form-control" name="input9_5" value="<?php echo $get_pdra->input9_5 ?>"></td>
                				<td><input type="text" class="form-control" name="input9_6" value="<?php echo $get_pdra->input9_6 ?>"></td>
                				<td><input type="text" class="form-control" name="input9_7" value="<?php echo $get_pdra->input9_7 ?>"></td>
                				<td><input type="text" class="form-control" name="input9_8" value="<?php echo $get_pdra->input9_8 ?>"></td>
                			</tr>
                			<tr>
                				<td>% MC Change</td>
                				<td><input type="text" class="form-control" name="input9_9" value="<?php echo $get_pdra->input9_9 ?>"></td>
                				<td><input type="text" class="form-control" name="input9_10" value="<?php echo $get_pdra->input9_10 ?>"></td>
                				<td><input type="text" class="form-control" name="input9_11" value="<?php echo $get_pdra->input9_11 ?>"></td>
                				<td><input type="text" class="form-control" name="input9_12" value="<?php echo $get_pdra->input9_12 ?>"></td>
                				<td><input type="text" class="form-control" name="input9_13" value="<?php echo $get_pdra->input9_13 ?>"></td>
                				<td><input type="text" class="form-control" name="input9_14" value="<?php echo $get_pdra->input9_14 ?>"></td>
                			</tr>
                			<tr>
                				<td>C/0 type(BB, SC, CC)</td>
                				<td><input type="text" class="form-control" name="input9_15" value="<?php echo $get_pdra->input9_15 ?>"></td>
                				<td><input type="text" class="form-control" name="input9_16" value="<?php echo $get_pdra->input9_16 ?>"></td>
                				<td><input type="text" class="form-control" name="input9_17" value="<?php echo $get_pdra->input9_17 ?>"></td>
                				<td><input type="text" class="form-control" name="input9_18" value="<?php echo $get_pdra->input9_18 ?>"></td>
                				<td><input type="text" class="form-control" name="input9_19" value="<?php echo $get_pdra->input9_19 ?>"></td>
                				<td><input type="text" class="form-control" name="input9_20" value="<?php echo $get_pdra->input9_20 ?>"></td>
                			</tr>
                		</tbody>
                	</table>
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseTen">
                    <div class="card-title">Identification of Skill/ Training Requirement (To be filled by IE)</div>
                </a>
                <div id="collapseTen" class="card-body collapse pt-0" data-parent="#accordion">
                	Most difficult operations which the plant team members need to be trained <p></p>
                	<textarea name="input10" class="form-control" placeholder="Type here ..."><?php echo $get_pdra->input10 ?></textarea>
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseEleven">
                    <div class="card-title">Identification of Improvements/ Autonomation Requirements</div>
                </a>
                <div id="collapseEleven" class="card-body collapse pt-0" data-parent="#accordion">
                	Operations/method which need to be or can be improved <p></p>
                	<textarea name="input11" class="form-control" placeholder="Type here ..."><?php echo $get_pdra->input11 ?></textarea>
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseTwelve">
                    <div class="card-title">Operational capacity requirements</div>
                </a>
                <div id="collapseTwelve" class="card-body collapse pt-0" data-parent="#accordion">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label class="form-control-label col-5">Sales order quality</label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" name="input12_1" value="<?php echo $get_pdra->input12_1 ?>" placeholder="Sales order quality">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="form-control-label col-5">PSD</label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" name="input12_2" value="<?php echo $get_pdra->input12_2 ?>" placeholder="PSD">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="form-control-label col-5">No. of Lines</label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" name="input12_3" value="<?php echo $get_pdra->input12_3 ?>" placeholder="No. of Lines">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="form-control-label col-5">Daily garmnent output</label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" name="input12_4" value="<?php echo $get_pdra->input12_4 ?>" placeholder="Daily garmnent output">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="form-control-label col-5">Critical MC requirement</label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" name="input12_5" value="<?php echo $get_pdra->input12_5 ?>" placeholder="Critical MC requirement">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Process</th>
                                        <th>Possible output</th>
                                        <th>Required output</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Cutting</td>
                                        <td><input type="text" class="form-control" name="input12_6" value="<?php echo $get_pdra->input12_6 ?>"></td>
                                        <td><input type="text" class="form-control" name="input12_7" value="<?php echo $get_pdra->input12_7 ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Moulding</td>
                                        <td><input type="text" class="form-control" name="input12_8" value="<?php echo $get_pdra->input12_8 ?>"></td>
                                        <td><input type="text" class="form-control" name="input12_9" value="<?php echo $get_pdra->input12_9 ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Moulding</td>
                                        <td><input type="text" class="form-control" name="input12_10" value="<?php echo $get_pdra->input12_10 ?>"></td>
                                        <td><input type="text" class="form-control" name="input12_11" value="<?php echo $get_pdra->input12_11 ?>"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>What</th>
                                <th>Who</th>
                                <th>When</th>
                                <th>ST</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="50%"><textarea name="input12_12" class="form-control" placeholder="What ?"><?php echo $get_pdra->input12_12 ?></textarea></td>
                                <td><input type="text" class="form-control" name="input12_13" value="<?php echo $get_pdra->input12_13 ?>" placeholder="Who ?"></td>
                                <td><input type="text" class="form-control" name="input12_14" value="<?php echo $get_pdra->input12_14 ?>" placeholder="When ?"></td>
                                <td><input type="text" class="form-control" name="input12_15" value="<?php echo $get_pdra->input12_15 ?>" placeholder="ST"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#collapseThirteen">
                    <div class="card-title">DRA/PDFRA Sign off</div>
                </a>
                <div id="collapseThirteen" class="card-body collapse pt-0" data-parent="#accordion">
                    <textarea name="input13" class="form-control" placeholder="Special Comments"><?php echo $get_pdra->input13 ?></textarea>
                </div>
            </div>
            <!-- End Widget -->
        </div>
         <div class="row">
            <div class="col-lg-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit Form</button>
            </div>
        </div>
        <?php echo form_close(); ?>
	</div>
</div>

<script>
$(document).ready(function () {
	$(function() { 
		$("#btn_add").click(function() {    		
            // var values = parseInt(document.getElementById("count").value) + 1;
    		$("#tambah").append('<div class="form-group row">' +
        		'<div class="col-lg-6"><textarea class="form-control" placeholder="What" name="what[]"></textarea></div>' +
        		'<div class="col-lg-2"><input type="text" class="form-control" name="who[]" placeholder="Who"></div>' +
        		'<div class="col-lg-2"><input type="text" class="form-control" name="when[]" placeholder="When"></div>' +
        		'<div class="col-lg-2"><input type="text" class="form-control" name="st[]" placeholder="ST"></div>' +
	        '</div>');             
            // document.getElementById("count").value = values;
  		});
	});
});

    function goBack() {
        window.history.back();
    }
</script>