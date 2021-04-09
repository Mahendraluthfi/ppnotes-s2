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
                <h4>Cutting Department</h4>
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
                                    <?php echo form_open('subform/form_cutting/'.$id); ?>
                                    <div class="section-title mt-5 mb-5">
                                        <h4>CONSTRUCTION / TECHNICAL</h4>
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
                                        <div class="col-md-4"><div class="alert alert-secondary" role="alert">What is the grain direction ?</div></div>
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
                                    <div class="section-title mt-5 mb-5">
                                        <h4>CUTTING</h4>
                                    </div>
                                    <div class="alert alert-secondary" role="alert">Specify</div>
                                    <div class="form-group row">
                                        <div class="col-md-3">Marker Length</div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pp_c1_1" placeholder="Marker Length" value="<?php echo $pp->pp_c1_1 ?>"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">Ply Height</div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pp_c1_2" placeholder="Ply Height" value="<?php echo $pp->pp_c1_2 ?>"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">Comments</div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pp_c1_3" placeholder="Comments" value="<?php echo $pp->pp_c1_3 ?>"></div>
                                    </div><hr>
                                    <div class="alert alert-secondary" role="alert">What are the cutting methods and equipments</div>
                                    <div class="form-group row">
                                        <div class="col-md-3">Fabric</div>
                                        <div class="col-md-4"><input type="text" class="form-control" name="pp_c2_1" placeholder="computer cutting/hand cut/block cut & relay/block cut & relay by pining /" value="<?php echo $pp->pp_c2_1 ?>"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">Lace</div>
                                        <div class="col-md-4"><input type="text" class="form-control" name="pp_c2_2" placeholder="band-knife/hand-cut" value="<?php echo $pp->pp_c2_2 ?>"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">Foam</div>
                                        <div class="col-md-4"><input type="text" class="form-control" name="pp_c2_3" placeholder="" value="<?php echo $pp->pp_c2_3 ?>"></div>
                                    </div><hr>
                                    <div class="form-group row">
                                        <div class="col-md-3"><div class="alert alert-secondary" role="alert">Special Comments</div></div>
                                        <div class="col-md-4"><input type="text" class="form-control" name="pp_c3_1" placeholder="computer cutting/hand cut/block cut & relay/block cut & relay by pining /" value="<?php echo $pp->pp_c3_1 ?>"></div>
                                    </div>
                                    <div class="section-title mt-5 mb-5">
                                        <h4>PILOT CUT</h4>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6"><div class="alert alert-secondary" role="alert">Date & time of pilot cut required for production</div></div>
                                        <div class="col-md-3"><input type="text" class="form-control" name="pp_pc5_1" id="date1" value="<?php echo $pp->pp_pc5_1 ?>"></div>
                                        <div class="col-md-3"><input type="time" class="form-control" name="pp_pc5_2" value="<?php echo $pp->pp_pc5_2 ?>"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6"><div class="alert alert-secondary" role="alert">Pilot Cut Date</div></div>
                                        <div class="col-md-3"><input type="text" id="date2" class="form-control" name="pp_pc4_1" value="<?php echo $pp->pp_pc4_1 ?>"></div>
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
                                    <!-- <div class="section-title mt-5 mb-5">
                                        <h4>Master Pattern</h4>
                                    </div> -->
                                    <!-- <div class="form-group row">
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
                                    </div><hr> -->
                                    <div class="section-title mt-5 mb-5">
                                        <h4>CUTTING</h4>
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
                                                            <input type="checkbox" name="checkbox" id="check-1" <?php if($pl2->pl_cu1_1 == "on"){echo "checked";} ?>>
                                                            <label for="check-1"></label>
                                                        </div>
                                                   </td>
                                                   <td>Max. Marker Length</td>
                                                   <td><input type="text" name="pl_cu1_4" class="form-control" placeholder="Action" value="<?php echo $pl2->pl_cu1_4 ?>"></td>
                                                   <td><input type="text" name="pl_cu1_5" class="form-control" placeholder="Comments" value="<?php echo $pl2->pl_cu1_5 ?>"></td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox2" id="check-2" <?php if($pl2->pl_cu1_2 == "on"){echo "checked";} ?>>
                                                            <label for="check-2"></label>
                                                        </div>
                                                   </td>
                                                   <td>Max. Ply height</td>
                                                   <td><input type="text" name="pl_cu1_6" class="form-control" placeholder="Action" value="<?php echo $pl2->pl_cu1_6 ?>"></td>
                                                   <td><input type="text" name="pl_cu1_7" class="form-control" placeholder="Comments" value="<?php echo $pl2->pl_cu1_7 ?>"></td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox3" id="check-3" <?php if($pl2->pl_cu1_3 == "on"){echo "checked";} ?>>
                                                            <label for="check-3"></label>
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
                                        <div class="col-md-3"><input type="text" class="form-control" name="pl_cu2_1" placeholder="Cut Date" id="date3" value="<?php echo $pl2->pl_cu2_1 ?>"></div>
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
                                            <div class="alert alert-secondary" role="alert">Where there any difficult pieces when cutting ?</div>                                            
                                        </div>
                                        <div class="col-md-1">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio1" id="rad-1" <?php if($pl2->pl_cu3_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-1">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio1" id="rad-2" <?php if($pl2->pl_cu3_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-2">No</label>
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
                                            <div class="alert alert-secondary" role="alert">Was there aby adverse reacton on Fabric, Lace(including when H/S, Printing, Fussing ) ?</div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio2" id="rad-3" <?php if($pl2->pl_cu6_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-3">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio2" id="rad-4" <?php if($pl2->pl_cu6_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-4">No</label>
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
                                            <div class="alert alert-secondary" role="alert">Can the face & reserve side of the fabric be identified ?</div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio3" id="rad-5" <?php if($pl2->pl_cu7_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-5">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio3" id="rad-6" <?php if($pl2->pl_cu7_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-6">No</label>
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
                                                <input type="radio" value="YES" name="radio4" id="rad-7" <?php if($pl2->pl_cu7_4 == "YES"){echo "checked";} ?>>
                                                <label for="rad-7">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio4" id="rad-8" <?php if($pl2->pl_cu7_4 == "NO"){echo "checked";} ?>>
                                                <label for="rad-8">No</label>
                                            </div>      
                                        </div>
                                        <div class="col-md-1">If Yes</div>
                                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Method" name="pl_cu7_5" value="<?php echo $pl2->pl_cu7_5 ?>"></div>
                                    </div><hr>
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            <div class="alert alert-secondary" role="alert">Does the fabric have to be face up ?</div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio5" id="rad-9" <?php if($pl2->pl_cu8_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-9">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio5" id="rad-10" <?php if($pl2->pl_cu8_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-10">No</label>
                                            </div>      
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">If not, Reason</div>
                                        <div class="col-md-4"><input type="text" class="form-control" name="pl_cu8_2" value="<?php echo $pl2->pl_cu8_2 ?>"></div>
                                    </div><hr>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="alert alert-secondary" role="alert">What are the priority points that have been indentified?</div>
                                        </div>
                                        <div class="col-md-6"><input type="text" class="form-control" name="pl_cu9_1" value="<?php echo $pl2->pl_cu9_1 ?>"></div>
                                    </div><hr>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="alert alert-secondary" role="alert">What are the critical points on the marker that have been discussed ?</div>
                                        </div>
                                        <div class="col-md-6"><input type="text" class="form-control" name="pl_cu10_1" value="<?php echo $pl2->pl_cu10_1 ?>"></div>
                                    </div><hr>
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            <div class="alert alert-secondary" role="alert">Any problems encountered with the pattern / placement boards ?</div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio6" id="rad-11" <?php if($pl2->pl_cu11_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-11">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio6" id="rad-12" <?php if($pl2->pl_cu11_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-12">No</label>
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
                                            <div class="alert alert-secondary" role="alert">Have you handle this fabric quality before ?</div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="styled-radio">
                                                <input type="radio" value="YES" name="radio7" id="rad-13" <?php if($pl2->pl_cu12_1 == "YES"){echo "checked";} ?>>
                                                <label for="rad-13">Yes</label>
                                            </div>                                        
                                            <div class="styled-radio">
                                                <input type="radio" value="NO" name="radio7" id="rad-14" <?php if($pl2->pl_cu12_1 == "NO"){echo "checked";} ?>>
                                                <label for="rad-14">No</label>
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
                                    </table>
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
</script>