<style>
    .table td{
        padding: 8px;        
    }
</style>
<script src="https://cdn.tiny.cloud/1/lzb9xb6nk7bhcwc0o84tkk63jdjhevhzli5pwnrxwr11brsa/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<div class="row">
    <div class="col-xl-12">
        <div class="widget has-shadow">     
 	     	<div class="widget-body">
                <div class="row">
                    <div class="col-md-1 col-lg-1">
                        <a href="<?php echo base_url('meeting/sign/'.$this->uri->segment(3)) ?>" class="btn btn-default btn-sm">< Back</a>                        
                    </div>
                    <div class="col-md-9 col-lg-9">
                        <h3 class="text-center">MAST GLOBAL</h3>
                        <h5 class="text-center">Pre-Production Analysis Meeting</h5>                        
                    </div>
                    <div class="col-md-2 col-lg-2 text-right">
                        <img src="<?php echo base_url('assets/img/mast_global.png') ?>" alt="" height="70" style="margin-top: -10px;">
                    </div>
                </div>                                              
            </div>
    	</div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div id="accordion-icon-left" class="accordion-icon icon-01">
            <!-- Begin Widget -->
            <?php echo form_open('meeting/mastglobal_saveall/'.$this->uri->segment(3)); ?>
            <div class="widget has-shadow">                
                <a class="card-header d-flex align-items-center collapsed" data-toggle="collapse" href="#IconLeftCollapseOne" aria-expanded="false">
                    <div class="card-title">PROCESS INFORMATION</div>
                </a>
                <!-- batas atas 1 -->
                <div id="IconLeftCollapseOne" class="card-body pt-0 collapse" data-parent="#accordion-icon-left" style="">
                    <table class="table">
                         <tr>
                            <td>Meeting Date</td>
                            <td colspan="3"><input type="date" class="form-control" name="pi_date1" value="<?php echo $global->pi_date1 ?>"></td>    
                          </tr>
                          <tr>
                            <td>Factory Location</td>
                            <td colspan="3"><input type="text" class="form-control" name="pi_input1" value="<?php echo $global->pi_input1 ?>" placeholder="Factory Location"></td>    
                          </tr>
                          <tr>
                            <td>Meeting Title/Purpose</td>
                            <td>RA</td>
                            <td>Test Lot</td>
                            <td>New Style Introduction</td>
                            <td rowspan="2">
                                <textarea name="pi_textarea1" class="form-control" placeholder="Others (please spesify)"><?php echo $global->pi_textarea1 ?></textarea>
                            </td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>
                                <div class="styled-radio">
                                    <input type="radio" value="YES" name="pi_radio1" id="rad-1" <?php if ($global->pi_radio1 == "YES")echo "checked"; ?>>
                                    <label for="rad-1">Yes</label>
                                </div>
                                <div class="styled-radio">
                                    <input type="radio" value="NO" name="pi_radio1" id="rad-2" <?php if($global->pi_radio1 =="NO")echo "checked"; ?>>
                                    <label for="rad-2">No</label>
                                </div>
                            </td>
                            <td>
                                <div class="styled-radio">
                                    <input type="radio" value="YES" name="pi_radio2" id="rad-3" <?php if ($global->pi_radio2 == "YES")echo "checked"; ?>>
                                    <label for="rad-3">Yes</label>
                                </div>
                                <div class="styled-radio">
                                    <input type="radio" value="NO" name="pi_radio2" id="rad-4" <?php if($global->pi_radio2 =="NO")echo "checked"; ?>>
                                    <label for="rad-4">No</label>
                                </div>
                            </td>
                            <td>
                                <div class="styled-radio">
                                    <input type="radio" value="YES" name="pi_radio3" id="rad-5" <?php if ($global->pi_radio3 == "YES")echo "checked"; ?>>
                                    <label for="rad-5">Yes</label>
                                </div>
                                <div class="styled-radio">
                                    <input type="radio" value="NO" name="pi_radio3" id="rad-6" <?php if($global->pi_radio3 =="NO")echo "checked"; ?>>
                                    <label for="rad-6">No</label>
                                </div>
                            </td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Date</td>
                            <td colspan="3"><input type="date" name="pi_date2" value="<?php echo $global->pi_date2 ?>" class="form-control"></td>
                          </tr>
                          <tr>
                            <td>Attendees</td>
                            <td>MAST QA</td>
                            <td colspan="2"><input type="text" class="form-control" name="pi_input2" value="<?php echo $global->pi_input2 ?>" placeholder="MAST QA"></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>MAST ME</td>
                            <td colspan="2"><input type="text" class="form-control" name="pi_input3" value="<?php echo $global->pi_input3 ?>" placeholder="MAST ME"></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>MAST CE</td>
                            <td colspan="2"><input type="text" class="form-control" name="pi_input4" value="<?php echo $global->pi_input4 ?>" placeholder="MAST CE"></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>Factory</td>
                            <td colspan="2">
                                <?php foreach ($att as $data) { ?>
                                    <?php echo $data->employee_name ?> <span class="text-danger">(<?php echo $data->department_name ?>)</span><br>
                                <?php } ?>
                            </td>
                          </tr>
                    </table>
                </div>
                <!-- batas bawah 1 -->
                <a class="card-header d-flex align-items-center collapsed" data-toggle="collapse" href="#IconLeftCollapseTwo" aria-expanded="false">
                    <div class="card-title">MERCHANDISING</div>
                </a>
                <div id="IconLeftCollapseTwo" class="card-body pt-0 collapse" data-parent="#accordion-icon-left" style="">
                    <table class="table">
                        <tr>
                            <td>Brand</td>
                            <td><input type="text" class="form-control" name="mc_input1" value="<?php echo $global->mc_input1 ?>" placeholder="Brand"></td>
                            <td>Season</td>
                            <td><input type="text" class="form-control" name="mc_input2" value="<?php echo $global->mc_input2 ?>" placeholder="Season"></td>
                          </tr>
                          <tr>
                            <td>Product Type</td>
                            <td>
                                <select name="mc_select1" class="form-control">
                                    <option value="Bra" <?php if($global->mc_select1 == "Bra")echo"selected"; ?>>Bra</option>
                                    <option value="Panty" <?php if($global->mc_select1 == "Panty")echo"selected"; ?>>Panty</option>
                                    <option value="Apparel" <?php if($global->mc_select1 == "Apparel")echo"selected"; ?>>Apparel</option>
                                    <option value="Sleep" <?php if($global->mc_select1 == "Sleep")echo"selected"; ?>>Sleep</option>
                                    <option value="New Style" <?php if($global->mc_select1 == "New Style")echo"selected"; ?>>New Style</option>
                                    <option value="Running Style" <?php if($global->mc_select1 == "Running Style")echo"selected"; ?>>Running Style</option>
                                    
                                </select>
                            </td>
                            <td>Style Description</td>
                            <td><textarea name="mc_textarea1" class="form-control" placeholder="Style Description"><?php echo $global->mc_textarea1 ?></textarea></td>
                          </tr>
                          <tr>
                            <td>Style Number</td>
                            <td><input type="text" class="form-control" name="mc_input3" value="<?php echo $global->mc_input3 ?>" placeholder="Style Number"></td>
                            <td>VPO Number</td>
                            <td><input type="text" class="form-control" name="mc_input4" value="<?php echo $global->mc_input4 ?>" placeholder="VPO Number"></td>
                          </tr>
                          <tr>
                            <td>Product Quantity</td>
                            <td><input type="text" class="form-control" name="mc_input5" value="<?php echo $global->mc_input5 ?>" placeholder="Product Quantity"></td>
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

                </div>
                <a class="card-header d-flex align-items-center collapsed" data-toggle="collapse" href="#IconLeftCollapseThree" aria-expanded="false">
                    <div class="card-title">HIGHLIGHT FROM RISK ASSESSMENT MEETING</div>
                </a>
                <div id="IconLeftCollapseThree" class="card-body pt-0 collapse" data-parent="#accordion-icon-left" style="">
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
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#IconLeftCollapseFour">
                    <div class="card-title">TECHNICAL</div>
                </a>
                <div id="IconLeftCollapseFour" class="card-body collapse pt-0" data-parent="#accordion-icon-left">
                    <h4 class="text-primary">Raw Material</h4>
                    <table class="table">
                         <tr>
                            <td>Fabric Type (Main)</td>
                            <td colspan="2"><input type="text" class="form-control" name="tc_input1" value="<?php echo $global->tc_input1 ?>" placeholder="Fabric Type (Main)"></td>
                          </tr>      
                          <tr>
                            <td>Fabric Type (Sub)</td>
                            <td colspan="2"><input type="text" class="form-control" name="tc_input2" value="<?php echo $global->tc_input2 ?>" placeholder="Fabric Type (Sub)"></td>
                          </tr>      
                          <tr>
                            <td>Fabric Description/Content (Main)</td>
                            <td colspan="2"><input type="text" class="form-control" name="tc_input3" value="<?php echo $global->tc_input3 ?>" placeholder="Fabric Description/Content (Main)"></td>
                          </tr>
                          <tr>
                            <td>Fabric Description/Content (Sub)</td>
                            <td colspan="2"><input type="text" class="form-control" name="tc_input4" value="<?php echo $global->tc_input4 ?>" placeholder="Fabric Description/Content (Sub)"></td>
                          </tr>
                          <tr>
                            <td>Mill Reports Available</td>
                            <td>
                                <div class="styled-radio">
                                    <input type="radio" value="YES" name="tc_radio1" id="rad-13" <?php if($global->tc_radio1=="YES")echo "checked"; ?>>
                                    <label for="rad-13">Yes</label>
                                </div>
                                <div class="styled-radio">
                                    <input type="radio" value="NO" name="tc_radio1" id="rad-14" <?php if($global->tc_radio1=="NO")echo "checked"; ?>>
                                    <label for="rad-14">No</label>
                                </div>
                            </td>
                            <td>Test Reports Available</td>
                            <td>
                                <div class="styled-radio">
                                    <input type="radio" value="YES" name="tc_radio2" id="rad-15" <?php if($global->tc_radio2=="YES")echo "checked"; ?>>
                                    <label for="rad-15">Yes</label>
                                </div>
                                <div class="styled-radio">
                                    <input type="radio" value="NO" name="tc_radio2" id="rad-16" <?php if($global->tc_radio2=="NO")echo "checked"; ?>>
                                    <label for="rad-16">No</label>
                                </div>
                            </td>
                          </tr>
                          <tr>
                            <td>Approved Hanger</td>
                            <td>
                                <div class="styled-radio">
                                    <input type="radio" value="YES" name="tc_radio3" id="rad-17" <?php if($global->tc_radio3=="YES")echo "checked"; ?>>
                                    <label for="rad-17">Yes</label>
                                </div>
                                <div class="styled-radio">
                                    <input type="radio" value="NO" name="tc_radio3" id="rad-18" <?php if($global->tc_radio3=="NO")echo "checked"; ?>>
                                    <label for="rad-18">No</label>
                                </div>
                            </td>
                            <td>Any Comments</td>
                            <td><textarea name="tc_textarea1" class="form-control" placeholder="Any Comments"><?php echo $global->tc_textarea1 ?></textarea></td>
                          </tr>
                          <tr>
                            <td>Mill Fabric Inspection Reports</td>
                            <td><input type="text" class="form-control" name="tc_input5" value="<?php echo $global->tc_input5 ?>" placeholder="Mill Fabric Inspection Reports"></td>
                            <td>If No, please advise reason</td>
                            <td><textarea name="tc_textarea2" class="form-control" placeholder="Reason"><?php echo $global->tc_textarea2 ?></textarea></td>
                          </tr>
                    </table>
                    <table class="table">
                         <tr>
                            <td>QA inhouse fabric inspection system</td>
                            <td colspan="3"><textarea name="tc_textarea3" class="form-control" placeholder="QA inhouse fabric inspection system"><?php echo $global->tc_textarea3 ?></textarea></td>
                          </tr>
                          <tr>
                            <td rowspan="7">Fabric Inspection Key Points</td>    
                          </tr>
                          <tr>
                            <td>Distortion</td>
                            <td><input type="text" class="form-control" name="tc_input6" value="<?php echo $global->tc_input6 ?>" placeholder="Distortion"></td>
                          </tr>
                          <tr>
                            <td>Skewing/Bowing</td>
                            <td><input type="text" class="form-control" name="tc_input7" value="<?php echo $global->tc_input7 ?>" placeholder="Skewing/Bowing"></td>
                          </tr>
                          <tr>
                            <td>Shade Variation Within Rolls</td>
                            <td><input type="text" class="form-control" name="tc_input8" value="<?php echo $global->tc_input8 ?>" placeholder="Shade Variation Within Rolls"></td>
                          </tr>
                          <tr>
                            <td>Excessive Curling</td>
                            <td><input type="text" class="form-control" name="tc_input9" value="<?php echo $global->tc_input9 ?>" placeholder="Excessive Curling"></td>
                          </tr>
                          <tr>
                            <td>Holes</td>
                            <td><input type="text" class="form-control" name="tc_input10" value="<?php echo $global->tc_input10 ?>" placeholder="Holes"></td>
                          </tr>
                          <tr>
                            <td>Length/Width</td>
                            <td>Purchase</td>
                            <td><input type="text" class="form-control" name="tc_input11" value="<?php echo $global->tc_input11 ?>" placeholder="Purchase"></td>
                            <td>Actual</td>
                            <td><input type="text" class="form-control" name="tc_input12" value="<?php echo $global->tc_input12 ?>" placeholder="Actual"></td>
                          </tr>
                    </table>
                    <h4 class="text-primary">Components/Trims</h4>
                    <table class="table">
                        <tr>
                            <td>Test Reports</td>
                            <td>
                                <div class="styled-radio">
                                    <input type="radio" value="YES" name="tc_radio4" id="rad-19" <?php if($global->tc_radio4=="YES")echo "checked"; ?>>
                                    <label for="rad-19">Yes</label>
                                </div>
                                <div class="styled-radio">
                                    <input type="radio" value="NO" name="tc_radio4" id="rad-20" <?php if($global->tc_radio4=="NO")echo "checked"; ?>>
                                    <label for="rad-20">No</label>
                                </div>
                            </td>
                            <td rowspan="2">If No, please advise reason</td>
                            <td rowspan="2"><textarea name="tc_textarea4" class="form-control" placeholder="Reason"><?php echo $global->tc_textarea4 ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Approved Standart</td>
                            <td>
                                <div class="styled-radio">
                                    <input type="radio" value="YES" name="tc_radio5" id="rad-21" <?php if($global->tc_radio5=="YES")echo "checked"; ?>>
                                    <label for="rad-21">Yes</label>
                                </div>
                                <div class="styled-radio">
                                    <input type="radio" value="NO" name="tc_radio5" id="rad-22" <?php if($global->tc_radio5=="NO")echo "checked"; ?>>
                                    <label for="rad-22">No</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Special Handling Requirements</td>
                            <td colspan="2"><input type="text" class="form-control" name="tc_input13" value="<?php echo $global->tc_input13 ?>" placeholder="Special Handling Requirements"></td>
                        </tr>
                        <tr>
                            <td>Packing Method</td>
                            <td colspan="2"><input type="text" class="form-control" name="tc_input14" value="<?php echo $global->tc_input14 ?>" placeholder="Packing Method"></td>
                        </tr>
                        <tr>
                            <td>Special Requirements</td>
                            <td colspan="2"><input type="text" class="form-control" name="tc_input15" value="<?php echo $global->tc_input15 ?>" placeholder="Special Requirements"></td>
                        </tr>
                    </table>
                    <h4 class="text-primary">Label Details</h4>
                    <table class="table">
                        <tr>
                            <td width="30%">Reference Code</td>
                            <td><input type="text" class="form-control" name="tc_input16" value="<?php echo $global->tc_input16 ?>" placeholder="Reference Code"></td>
                        </tr>
                        <tr>
                            <td>Woven Labels</td>
                            <td><input type="text" class="form-control" name="tc_input17" value="<?php echo $global->tc_input17 ?>" placeholder="Woven Labels"></td>
                        </tr>
                        <tr>
                            <td>Heat Seal Labels</td>
                            <td><input type="text" class="form-control" name="tc_input18" value="<?php echo $global->tc_input18 ?>" placeholder="Heat Seal Labels"></td>
                        </tr>
                        <tr>
                            <td>Swift Tickets</td>
                            <td><input type="text" class="form-control" name="tc_input19" value="<?php echo $global->tc_input19 ?>" placeholder="Swift Tickets"></td>
                        </tr>
                        <tr>
                            <td>Bag Labels</td>
                            <td><input type="text" class="form-control" name="tc_input20" value="<?php echo $global->tc_input20 ?>" placeholder="Bag Labels"></td>
                        </tr>
                        <tr>
                            <td>Carton Labels</td>
                            <td><input type="text" class="form-control" name="tc_input21" value="<?php echo $global->tc_input21 ?>" placeholder="Carton Labels"></td>
                        </tr>
                        <tr>
                            <td>Specify Additional</td>
                            <td><input type="text" class="form-control" name="tc_input22" value="<?php echo $global->tc_input22 ?>" placeholder="Specify Additional"></td>
                        </tr>
                    </table>
                    <h4 class="text-primary">Patterns</h4>
                    <table class="table">
                        <tr>
                            <td width="30%">Reference ID</td>
                            <td><input type="text" class="form-control" name="tc_input23" value="<?php echo $global->tc_input23 ?>" placeholder="Reference ID"></td>
                        </tr>
                        <tr>
                            <td>Tracking Number</td>
                            <td><input type="text" class="form-control" name="tc_input24" value="<?php echo $global->tc_input24 ?>" placeholder="Tracking Number"></td>
                        </tr>
                        <tr>
                            <td>Electronic Full Set</td>
                            <td><input type="text" class="form-control" name="tc_input25" value="<?php echo $global->tc_input25 ?>" placeholder="Electronic Full Set"></td>
                        </tr>
                        <tr>
                            <td>Hard Pattern Full Size Set</td>
                            <td><input type="text" class="form-control" name="tc_input26" value="<?php echo $global->tc_input26 ?>" placeholder="Hard Pattern Full Size Set"></td>
                        </tr>
                        <tr>
                            <td>Pattern Approved</td>
                            <td><input type="text" class="form-control" name="tc_input27" value="<?php echo $global->tc_input27 ?>" placeholder="Pattern Approved"></td>
                        </tr>
                        <tr>
                            <td>Allowance/Shrinkage/Fabric Driven</td>
                            <td><input type="text" class="form-control" name="tc_input28" value="<?php echo $global->tc_input28 ?>" placeholder="Allowance/Shrinkage/Fabric Driven"></td>
                        </tr>                        
                    </table>
                </div>
                <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#IconLeftCollapseFive">
                    <div class="card-title">QA/TECHNICAL/INDUSTRIAL ENGINEERING/PRODUCTION</div>
                </a>
                <div id="IconLeftCollapseFive" class="card-body collapse pt-0" data-parent="#accordion-icon-left">
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
                      <h4 class="text-primary">Critical Quality Points - Technical Quality Specification - GSD Method Specification - Machine Specification</h4>
                      <textarea name="qa_textarea1" class="tinytext"><?php echo $global->qa_textarea1 ?></textarea><hr>
                      <h4 class="text-primary">Key Points of Measure / How to Measure</h4>
                      <textarea name="qa_textarea2" class="tinytext"><?php echo $global->qa_textarea2 ?></textarea><br>
                      <h4 class="text-primary">Cutting</h4>                          
                      <h4 class="text-primary"><i>Fabric Handling</i></h4>
                      <table class="table">
                          <tr>
                              <td width="20%">Special Requirements</td>
                              <td><input type="text" class="form-control" name="qa_input16" value="<?php echo $global->qa_input16 ?>" placeholder="Special Requirements"></td>
                          </tr>
                          <tr>
                              <td>Fabric Relaxation</td>
                              <td><input type="text" class="form-control" name="qa_input17" value="<?php echo $global->qa_input17 ?>" placeholder="Fabric Relaxation"></td>
                          </tr>
                          <tr>
                              <td>Manual Relaxation</td>
                              <td><input type="text" class="form-control" name="qa_input18" value="<?php echo $global->qa_input18 ?>" placeholder="Manual Relaxation"></td>
                          </tr>
                          <tr>
                              <td>Semi Auto relaxation</td>
                              <td><input type="text" class="form-control" name="qa_input19" value="<?php echo $global->qa_input19 ?>" placeholder="Semi Auto relaxation"></td>
                          </tr>
                          <tr>
                              <td>Length of Lay</td>
                              <td><input type="text" class="form-control" name="qa_input20" value="<?php echo $global->qa_input20 ?>" placeholder="Length of Lay"></td>
                          </tr>
                          <tr>
                              <td>Height / No of Ply's</td>
                              <td><input type="text" class="form-control" name="qa_input21" value="<?php echo $global->qa_input21 ?>" placeholder="Height / No of Ply's"></td>
                          </tr>
                      </table>
                      <h4 class="text-primary"><i>Spreading Method</i></h4>
                      <table class="table">
                          <tr>
                              <td width="25%">Semi Auto Spreading Machine</td>
                              <td><input type="text" class="form-control" name="qa_input22" value="<?php echo $global->qa_input22 ?>" placeholder="Semi Auto Spreading Machine"></td>
                          </tr>
                          <tr>
                              <td>Manual Spreading Machine</td>
                              <td><input type="text" class="form-control" name="qa_input23" value="<?php echo $global->qa_input23 ?>" placeholder="Manual Spreading Machine"></td>
                          </tr>
                          <tr>
                              <td>Hand / Manual Spreading</td>
                              <td><input type="text" class="form-control" name="qa_input24" value="<?php echo $global->qa_input24 ?>" placeholder="Hand / Manual Spreading"></td>
                          </tr>
                          <tr>
                              <td>One way face up spreading</td>
                              <td><input type="text" class="form-control" name="qa_input25" value="<?php echo $global->qa_input25 ?>" placeholder="One way face up spreading"></td>
                          </tr>
                          <tr>
                              <td>Iaps/Face to Face Spreading</td>
                              <td><input type="text" class="form-control" name="qa_input26" value="<?php echo $global->qa_input26 ?>" placeholder="Iaps/Face to Face Spreading"></td>
                          </tr>
                          <tr>
                              <td>Special Requirements</td>
                              <td><input type="text" class="form-control" name="qa_input27" value="<?php echo $global->qa_input27 ?>" placeholder="Special Requirements"></td>
                          </tr>
                      </table>       
                      <h4 class="text-primary"><i>Pinning Method</i></h4>
                      <table class="table">
                          <tr>
                              <td width="40%">Pinning during lay with blocking Allowance</td>
                              <td><input type="text" class="form-control" name="qa_input28" value="<?php echo $global->qa_input28 ?>" placeholder="Pinning during lay with blocking Allowance"></td>
                          </tr>
                          <tr>
                              <td>Re Lay After Block Cut - Pin - Final Cut</td>
                              <td><input type="text" class="form-control" name="qa_input29" value="<?php echo $global->qa_input29 ?>" placeholder="Re Lay After Block Cut - Pin - Final Cut"></td>
                          </tr>
                          <tr>
                              <td>Clip After Block Cut - Final Cut</td>
                              <td><input type="text" class="form-control" name="qa_input30" value="<?php echo $global->qa_input30 ?>" placeholder="Clip After Block Cut - Final Cut"></td>
                          </tr>                         
                      </table>     
                      <h4 class="text-primary"><i>Cutting Method</i></h4>
                      <table class="table">
                          <tr>
                              <td width="25%">Semi auto cutting</td>
                              <td><input type="text" class="form-control" name="qa_input31" value="<?php echo $global->qa_input31 ?>" placeholder="Semi auto cutting"></td>
                          </tr>
                          <tr>
                              <td>Straight knife cutting</td>
                              <td><input type="text" class="form-control" name="qa_input32" value="<?php echo $global->qa_input32 ?>" placeholder="Straight knife cutting"></td>
                          </tr>
                          <tr>
                              <td>Band knife cutting</td>
                              <td><input type="text" class="form-control" name="qa_input33" value="<?php echo $global->qa_input33 ?>" placeholder="Band knife cutting"></td>
                          </tr>
                          <tr>
                              <td>Click press cutting</td>
                              <td><input type="text" class="form-control" name="qa_input34" value="<?php echo $global->qa_input34 ?>" placeholder="Click press cutting"></td>
                          </tr>                         
                      </table>
                      <h4 class="text-primary"><i>Bundling/Numbering Method</i></h4>
                      <table class="table">
                          <tr>
                              <td width="25%">Bundle size</td>
                              <td><input type="text" class="form-control" name="qa_input35" value="<?php echo $global->qa_input35 ?>" placeholder="Bundle size"></td>
                          </tr>
                          <tr>
                              <td>Soabaring (right/wrong side)</td>
                              <td><input type="text" class="form-control" name="qa_input36" value="<?php echo $global->qa_input36 ?>" placeholder="Soabaring (right/wrong side)"></td>
                          </tr>
                          <tr>
                              <td>Bundling Method (Rubber band/string/fabric strap/no bundling)</td>
                              <td><input type="text" class="form-control" name="qa_input37" value="<?php echo $global->qa_input37 ?>" placeholder="Bundling Method (Rubber band/string/fabric strap/no bundling)"></td>
                          </tr>                          
                      </table> 
                      <!-- <h4 class="text-primary"><i>Molding</i></h4>
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
                      </table>  -->
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
                              <td>Approved strike off available</td>
                              <td>
                                <div class="styled-radio">
                                    <input type="radio" value="YES" name="qa_radio6" id="rad-33" <?php if($global->qa_radio6 == "YES")echo "checked"; ?>>
                                    <label for="rad-33">Yes</label>
                                </div>
                                <div class="styled-radio">
                                    <input type="radio" value="NO" name="qa_radio6" id="rad-34" <?php if($global->qa_radio6 == "NO")echo "checked"; ?>>
                                    <label for="rad-34">No</label>
                                </div>
                            </td>
                          </tr>
                          <tr>
                              <td>Test report available</td>
                              <td>
                                <div class="styled-radio">
                                    <input type="radio" value="YES" name="qa_radio7" id="rad-35" <?php if($global->qa_radio7 == "YES")echo "checked"; ?>>
                                    <label for="rad-35">Yes</label>
                                </div>
                                <div class="styled-radio">
                                    <input type="radio" value="NO" name="qa_radio7" id="rad-36" <?php if($global->qa_radio7 == "NO")echo "checked"; ?>>
                                    <label for="rad-36">No</label>
                                </div>
                            </td>
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
                              <td>Finalized Graphic Risk</td>
                              <td>
                                <div class="styled-radio">
                                    <input type="radio" value="HIGH" name="qa_radio9" id="rad-39" <?php if($global->qa_radio9 == "HIGH")echo "checked"; ?>>
                                    <label for="rad-39">High</label>
                                </div>
                                <div class="styled-radio">
                                    <input type="radio" value="LOW" name="qa_radio9" id="rad-40" <?php if($global->qa_radio9 == "LOW")echo "checked"; ?>>
                                    <label for="rad-40">Low</label>
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
                      <h4 class="text-primary">Specialization Details</h4>
                      <h4 class="text-primary"><i>Wet Process</i></h4>
                      <table class="table">
                          <tr>
                              <td width="25%">Name and Type</td>
                              <td><input type="text" class="form-control" name="qa_input67" value="<?php echo $global->qa_input67 ?>" placeholder="Name and Type"></td>
                          </tr>
                          <tr>
                              <td>Formula Details</td>
                              <td><input type="text" class="form-control" name="qa_input68" value="<?php echo $global->qa_input68 ?>" placeholder="Formula Details"></td>
                          </tr>                          
                          <tr>
                              <td>Conditions by individual Process <br>Cycle Time <br>Temperatur</td>
                              <td><textarea name="qa_textarea5" class="tinytext"><?php echo $global->qa_textarea5 ?></textarea></td>
                          </tr>
                          <tr>
                              <td>Conditions by individual Process <br>Cycle Time <br>Temperatur</td>
                              <td><textarea name="qa_textarea6" class="tinytext"><?php echo $global->qa_textarea6 ?></textarea></td>
                          </tr>
                          <tr>
                              <td>Conditions by individual Process <br>Cycle Time <br>Temperatur</td>
                              <td><textarea name="qa_textarea7" class="tinytext"><?php echo $global->qa_textarea7 ?></textarea></td>
                          </tr>
                      </table>
                      <h4 class="text-primary">Specialization Details</h4>
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
                              <td>Output requirement</td>
                              <td><input type="text" class="form-control" name="qa_input71" value="<?php echo $global->qa_input71 ?>" placeholder="Output requirement"></td>
                          </tr>
                          <tr>
                              <td>Line mnapower - SMV Driven</td>
                              <td><input type="text" class="form-control" name="qa_input72" value="<?php echo $global->qa_input72 ?>" placeholder="Line mnapower - SMV Driven"></td>
                          </tr>
                          <tr>
                              <td>Efficiency projections</td>
                              <td><input type="text" class="form-control" name="qa_input73" value="<?php echo $global->qa_input73 ?>" placeholder="Efficiency projections"></td>
                          </tr>
                          <tr>
                              <td>Learning Curve</td>
                              <td><input type="text" class="form-control" name="qa_input74" value="<?php echo $global->qa_input74 ?>" placeholder="Learning Curve"></td>
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
                              <td>Historical data - High Defect Levels/Low efficiency Levels</td>
                              <td><input type="text" class="form-control" name="qa_input77" value="<?php echo $global->qa_input77 ?>" placeholder="Historical data - High Defect Levels/Low efficiency Levels"></td>
                          </tr>
                          <tr>
                              <td>Newness/Style Features</td>
                              <td><input type="text" class="form-control" name="qa_input78" value="<?php echo $global->qa_input78 ?>" placeholder="Newness/Style Features"></td>
                          </tr>
                          <tr>
                              <td>Level of accuracy required</td>
                              <td><input type="text" class="form-control" name="qa_input79" value="<?php echo $global->qa_input79 ?>" placeholder="Level of accuracy required"></td>
                          </tr>
                          <tr>
                              <td>Fabric Sensitivity Related special requirements</td>
                              <td><input type="text" class="form-control" name="qa_input80" value="<?php echo $global->qa_input80 ?>" placeholder="Fabric Sensitivity Related special requirements"></td>
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
                              <td>Factory QCO Practices</td>
                              <td><input type="text" class="form-control" name="qa_input85" value="<?php echo $global->qa_input85 ?>" placeholder="Factory QCO Practices"></td>
                          </tr>
                          <tr>
                              <td>Adopt Learning Curves to support training progression</td>
                              <td><input type="text" class="form-control" name="qa_input86" value="<?php echo $global->qa_input86 ?>" placeholder="Adopt Learning Curves to support training progression"></td>
                          </tr>
                      </table>                      
                </div>
                <!-- <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#IconLeftCollapseSix">
                    <div class="card-title">BRA MOLDING SPECIFICATION QUALITY / METHOD / CONDITIONS</div>
                </a>
                <div id="IconLeftCollapseSix" class="card-body collapse pt-0" data-parent="#accordion-icon-left">
                    <table class="table table-bordered">
                        <tr>
                            <td>Meeting Date</td>
                            <td><input type="date" class="form-control" name="md_date1" value="<?php echo $global->md_date1 ?>" placeholder=""></td>
                          </tr>
                          <tr>
                            <td>Factory</td>
                            <td><input type="text" class="form-control" name="md_input1" value="<?php echo $global->md_input1 ?>" placeholder="Factory"></td>
                          </tr>
                          <tr>
                            <td>Collection Name</td>
                            <td><input type="text" class="form-control" name="md_input2" value="<?php echo $global->md_input2 ?>" placeholder="Collection Name"></td>
                            <td colspan="2" class="text-primary">Operation Name: Fabric Molding Methodology / Specification</td>    
                          </tr>
                          <tr>
                            <td>Flex#</td>
                            <td><input type="text" class="form-control" name="md_input3" value="<?php echo $global->md_input3 ?>" placeholder="Flex#"></td>
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
                </div> -->
            </div>
            <!-- End Widget -->
        </div>
        <div class="float-right">
            <button type="submit" class="btn btn-primary btn-lg" onclick="return confirm('Are you sure ?')">SUBMIT FORM</button>            
        </div>
        <?php echo form_close(); ?>
    </div>
</div>

<script>
    tinymce.init({
      selector: '.tinytext',
      menubar: false,
      statusbar: false,
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      force_br_newlines : true,
      force_p_newlines : false,
      forced_root_block : '' // Needed for 3.x
    });
    tinymce.init({
      selector: '.tinytext2',
      menubar: false,
      statusbar: false,
      height: "480",
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      force_br_newlines : true,
      force_p_newlines : false,
      forced_root_block : '' // Needed for 3.x
    });

    $(document).ready(function(){

        view_cbf();
        view_cbt();
        function view_cbf() {
            var id = '<?php echo $this->uri->segment(3) ?>';
            $.ajax({
                url : "<?php echo site_url('index.php/meeting/mastglobal_getcbf')?>/"+id,
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
                url : "<?php echo site_url('index.php/meeting/mastglobal_getcbt')?>/"+id,
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
            url = "<?php echo site_url('index.php/meeting/mastglobal_add_cfabric/')?>"+id;                              
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
            url = "<?php echo site_url('index.php/meeting/mastglobal_add_ctrims/')?>"+id;                              
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
                    url  : "<?php echo base_url('index.php/meeting/mastglobal_delcbf')?>",
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
                    url  : "<?php echo base_url('index.php/meeting/mastglobal_delcbt')?>",
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

