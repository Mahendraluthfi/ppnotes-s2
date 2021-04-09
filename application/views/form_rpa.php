<div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h2 class="page-header-title">Production Risk Analysis Form</h2>
            <div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>"><i class="ti ti-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#" onclick="window.history.go(-1); return false;"><i class="ti ti-arrow-left"></i></a></li>
                    <li class="breadcrumb-item active">Production Risk Analysis Form</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <!-- Sorting -->
        <div class="widget has-shadow">            
            <div class="widget-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group row">
                            <label class="form-control-label col-lg-6 text-right">Customer</label>
                            <div class="col-lg-6">
                                <span class="text-danger"><?php echo $get->customer_name ?></span>
                            </div>                            
                        </div>
                        <div class="form-group row">
                            <label class="form-control-label col-lg-6 text-right">Attendees</label>
                            <div class="col-lg-5">
                                <input type="text" placeholder="Atteendees" name="add" class="form-control">
                            </div>
                            <div class="col-lg-1">
                                <button type="button" id="btn_simpan" class="btn btn-default btn-sm"><span class="la la-plus"></span> Add</button>
                            </div>                            
                        </div>     
                        <div class="form-group row">
                            <label class="form-control-label col-lg-6 text-right"></label>
                            <div class="col-lg-6">
                                <table cellpadding="5" cellspacing="5" style="width: 100%">                            
                                    <tbody id="show_data">
                                                                     
                                    </tbody>
                                </table>
                            </div>                            
                        </div>     
                        <?php echo form_open('subform/pra/'.$this->uri->segment(3)); ?>
                        <div class="form-group row">
                            <label class="form-control-label col-lg-6 text-right">Date</label>
                            <div class="col-lg-6">
                                <input type="text" name="date" class="form-control" placeholder="Date" id="datedown" value="<?php echo $get_pra->date ?>">
                            </div>                            
                        </div>
                        <div class="form-group row">
                            <label class="form-control-label col-lg-6 text-right">Prepared By</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="prepared" placeholder="Prepared By" value="<?php echo $get_pra->prepared ?>">
                            </div>                            
                        </div>                   
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group row">
                            <label class="form-control-label col-lg-6 text-right">Style</label>
                            <div class="col-lg-6">
                                <span class="text-danger"><?php echo $get->style_no ?></span>
                            </div>                            
                        </div>                        
                        <div class="form-group row">
                            <label class="form-control-label col-lg-6 text-right">Produk Viable</label>
                            <div class="col-lg-6">
                                <div class="styled-radio">
                                    <input type="radio" value="YES" name="radio1" id="rad-1" <?php if($get_pra->radio1 == "YES"){echo "checked";} ?>>
                                    <label for="rad-1">Yes</label>
                                </div>                                        
                                <div class="styled-radio">
                                    <input type="radio" value="NO" name="radio1" id="rad-2" <?php if($get_pra->radio1 == "NO"){echo "checked";} ?>>
                                    <label for="rad-2">No</label>
                                </div> 
                            </div>                            
                        </div>
                        <div class="form-group row">
                            <label class="form-control-label col-lg-6 text-right">Overal Risk</label>
                            <div class="col-lg-6">
                                <div class="styled-radio">
                                    <input type="radio" value="RED" name="radio2" id="rad-3" <?php if($get_pra->radio2 == "RED"){echo "checked";} ?>>
                                    <label for="rad-3">Red</label>
                                </div>                                        
                                <div class="styled-radio">
                                    <input type="radio" value="YELLOW" name="radio2" id="rad-4" <?php if($get_pra->radio2 == "YELLOW"){echo "checked";} ?>>
                                    <label for="rad-4">Yellow</label>
                                </div> 
                                <div class="styled-radio">
                                    <input type="radio" value="GREEN" name="radio2" id="rad-5" <?php if($get_pra->radio2 == "GREEN"){echo "checked";} ?>>
                                    <label for="rad-5">Green</label>
                                </div> 
                            </div>                            
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="alert alert-secondary" role="alert">All the issues highlighted at PDRA is resolved</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que1 == "YES"){echo "checked";} ?> name="que1" id="que-1">
                            <label for="que-1">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que1 == "NO"){echo "checked";} ?> name="que1" id="que-1x">
                            <label for="que-1x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk1" id="risk-1" <?php if($get_pra->risk1 == "H"){echo "checked";} ?>>
                            <label for="risk-1">H</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="M" name="risk1" id="risk-1x" <?php if($get_pra->risk1 == "M"){echo "checked";} ?>>
                            <label for="risk-1x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk1" id="risk-1y" <?php if($get_pra->risk1 == "L"){echo "checked";} ?>>
                            <label for="risk-1y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext1" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext1 ?></textarea>
                    </div>      
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="alert alert-secondary" role="alert">Is Construction finalized (needle/machinery/thread/attachment)</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que2 == "YES"){echo "checked";} ?> name="que2" id="que-2">
                            <label for="que-2">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que2 == "NO"){echo "checked";} ?> name="que2" id="que-2x">
                            <label for="que-2x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk2" id="risk-2" <?php if($get_pra->risk2 == "H"){echo "checked";} ?>>
                            <label for="risk-2">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk2" id="risk-2x" <?php if($get_pra->risk2 == "M"){echo "checked";} ?>>
                            <label for="risk-2x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk2" id="risk-2y" <?php if($get_pra->risk2 == "L"){echo "checked";} ?>>
                            <label for="risk-2y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext2" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext2 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary" role="alert">Machine Spec required for which operation</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que3 == "YES"){echo "checked";} ?> name="que3" id="que-3">
                            <label for="que-3">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que3 == "NO"){echo "checked";} ?> name="que3" id="que-3x">
                            <label for="que-3x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk3" id="risk-3" <?php if($get_pra->risk3 == "H"){echo "checked";} ?>>
                            <label for="risk-3">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk3" id="risk-3x" <?php if($get_pra->risk3 == "M"){echo "checked";} ?>>
                            <label for="risk-3x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk3" id="risk-3y" <?php if($get_pra->risk3 == "L"){echo "checked";} ?>>
                            <label for="risk-3y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext3" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext3 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary" role="alert">Any video clip required for the operations</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que4 == "YES"){echo "checked";} ?> name="que4" id="que-4">
                            <label for="que-4">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que4 == "NO"){echo "checked";} ?> name="que4" id="que-4x">
                            <label for="que-4x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk4" id="risk-4" <?php if($get_pra->risk4 == "H"){echo "checked";} ?>>
                            <label for="risk-4">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk4" id="risk-4x" <?php if($get_pra->risk4 == "M"){echo "checked";} ?>>
                            <label for="risk-4x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk4" id="risk-4y" <?php if($get_pra->risk4 == "L"){echo "checked";} ?>>
                            <label for="risk-4y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext4" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext4 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="alert alert-secondary" role="alert">Is Measurements finalised</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que5 == "YES"){echo "checked";} ?> name="que5" id="que-5">
                            <label for="que-5">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que5 == "NO"){echo "checked";} ?> name="que5" id="que-5x">
                            <label for="que-5x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk5" id="risk-5" <?php if($get_pra->risk5 == "H"){echo "checked";} ?>>
                            <label for="risk-5">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk5" id="risk-5x" <?php if($get_pra->risk5 == "M"){echo "checked";} ?>>
                            <label for="risk-5x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk5" id="risk-5y" <?php if($get_pra->risk5 == "L"){echo "checked";} ?>>
                            <label for="risk-5y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext5" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext5 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="alert alert-secondary" role="alert">Learning curve - Any special training required/preparation</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que6 == "YES"){echo "checked";} ?> name="que6" id="que-6">
                            <label for="que-6">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que6 == "NO"){echo "checked";} ?> name="que6" id="que-6x">
                            <label for="que-6x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk6" id="risk-6" <?php if($get_pra->risk6 == "H"){echo "checked";} ?>>
                            <label for="risk-6">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk6" id="risk-6x" <?php if($get_pra->risk6 == "M"){echo "checked";} ?>>
                            <label for="risk-6x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk6" id="risk-6y" <?php if($get_pra->risk6 == "L"){echo "checked";} ?>>
                            <label for="risk-6y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext6" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext6 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="alert alert-secondary" role="alert">Any changes form the last sample seen</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que7 == "YES"){echo "checked";} ?> name="que7" id="que-7">
                            <label for="que-7">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que7 == "NO"){echo "checked";} ?> name="que7" id="que-7x">
                            <label for="que-7x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk7" id="risk-7" <?php if($get_pra->risk7 == "H"){echo "checked";} ?>>
                            <label for="risk-7">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk7" id="risk-7x" <?php if($get_pra->risk7 == "M"){echo "checked";} ?>>
                            <label for="risk-7x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk7" id="risk-7y" <?php if($get_pra->risk7 == "L"){echo "checked";} ?>>
                            <label for="risk-7y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext7" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext7 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary" role="alert">Construction</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que8 == "YES"){echo "checked";} ?> name="que8" id="que-8">
                            <label for="que-8">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que8 == "NO"){echo "checked";} ?> name="que8" id="que-8x">
                            <label for="que-8x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk8" id="risk-8" <?php if($get_pra->risk8 == "H"){echo "checked";} ?>>
                            <label for="risk-8">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk8" id="risk-8x" <?php if($get_pra->risk8 == "M"){echo "checked";} ?>>
                            <label for="risk-8x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk8" id="risk-8y" <?php if($get_pra->risk8 == "L"){echo "checked";} ?>>
                            <label for="risk-8y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext8" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext8 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary" role="alert">Pattern</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que9 == "YES"){echo "checked";} ?> name="que9" id="que-9">
                            <label for="que-9">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que9 == "NO"){echo "checked";} ?> name="que9" id="que-9x">
                            <label for="que-9x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk9" id="risk-9" <?php if($get_pra->risk9 == "H"){echo "checked";} ?>>
                            <label for="risk-9">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk9" id="risk-9x" <?php if($get_pra->risk9 == "M"){echo "checked";} ?>>
                            <label for="risk-9x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk9" id="risk-9y" <?php if($get_pra->risk9 == "L"){echo "checked";} ?>>
                            <label for="risk-9y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext9" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext9 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary" role="alert">RM</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que10 == "YES"){echo "checked";} ?> name="que10" id="que-10">
                            <label for="que-10">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que10 == "NO"){echo "checked";} ?> name="que10" id="que-10x">
                            <label for="que-10x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk10" id="risk-10" <?php if($get_pra->risk10 == "H"){echo "checked";} ?>>
                            <label for="risk-10">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk10" id="risk-10x" <?php if($get_pra->risk10 == "M"){echo "checked";} ?>>
                            <label for="risk-10x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk10" id="risk-10y" <?php if($get_pra->risk10 == "L"){echo "checked";} ?>>
                            <label for="risk-10y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext10" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext10 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary" role="alert">Any sepcial fit comments</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que11 == "YES"){echo "checked";} ?> name="que11" id="que-11">
                            <label for="que-11">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que11 == "NO"){echo "checked";} ?> name="que11" id="que-11x">
                            <label for="que-11x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk11" id="risk-11" <?php if($get_pra->risk11 == "H"){echo "checked";} ?>>
                            <label for="risk-11">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk11" id="risk-11x" <?php if($get_pra->risk11 == "M"){echo "checked";} ?>>
                            <label for="risk-11x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk11" id="risk-11y" <?php if($get_pra->risk11 == "L"){echo "checked";} ?>>
                            <label for="risk-11y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext11" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext11 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="alert alert-secondary" role="alert">Special handling required</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que12 == "YES"){echo "checked";} ?> name="que12" id="que-12">
                            <label for="que-12">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que12 == "NO"){echo "checked";} ?> name="que12" id="que-12x">
                            <label for="que-12x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk12" id="risk-12" <?php if($get_pra->risk12 == "H"){echo "checked";} ?>>
                            <label for="risk-12">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk12" id="risk-12x" <?php if($get_pra->risk12 == "M"){echo "checked";} ?>>
                            <label for="risk-12x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk12" id="risk-12y" <?php if($get_pra->risk12 == "L"){echo "checked";} ?>>
                            <label for="risk-12y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext12" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext12 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary" role="alert">Special strecth needed while sewing</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que13 == "YES"){echo "checked";} ?> name="que13" id="que-13">
                            <label for="que-13">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que13 == "NO"){echo "checked";} ?> name="que13" id="que-13x">
                            <label for="que-13x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk13" id="risk-13" <?php if($get_pra->risk13 == "H"){echo "checked";} ?>>
                            <label for="risk-13">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk13" id="risk-13x" <?php if($get_pra->risk13 == "M"){echo "checked";} ?>>
                            <label for="risk-13x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk13" id="risk-13y" <?php if($get_pra->risk13 == "L"){echo "checked";} ?>>
                            <label for="risk-13y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext13" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext13 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary" role="alert">Easeness needed while sewing</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que14 == "YES"){echo "checked";} ?> name="que14" id="que-14">
                            <label for="que-14">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que14 == "NO"){echo "checked";} ?> name="que14" id="que-14x">
                            <label for="que-14x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk14" id="risk-14" <?php if($get_pra->risk14 == "H"){echo "checked";} ?>>
                            <label for="risk-14">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk14" id="risk-14x" <?php if($get_pra->risk14 == "M"){echo "checked";} ?>>
                            <label for="risk-14x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk14" id="risk-14y" <?php if($get_pra->risk14 == "L"){echo "checked";} ?>>
                            <label for="risk-14y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext14" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext14 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary" role="alert">Special attachment needed (foot&folders)/or any modifications for the original one</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que15 == "YES"){echo "checked";} ?> name="que15" id="que-15">
                            <label for="que-15">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que15 == "NO"){echo "checked";} ?> name="que15" id="que-15x">
                            <label for="que-15x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk15" id="risk-15" <?php if($get_pra->risk15 == "H"){echo "checked";} ?>>
                            <label for="risk-15">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk15" id="risk-15x" <?php if($get_pra->risk15 == "M"){echo "checked";} ?>>
                            <label for="risk-15x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk15" id="risk-15y" <?php if($get_pra->risk15 == "L"){echo "checked";} ?>>
                            <label for="risk-15y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext15" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext15 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary" role="alert">Special handling required for the fabric/elastic/trims/lace</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que16 == "YES"){echo "checked";} ?> name="que16" id="que-16">
                            <label for="que-16">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que16 == "NO"){echo "checked";} ?> name="que16" id="que-16x">
                            <label for="que-16x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk16" id="risk-16" <?php if($get_pra->risk16 == "H"){echo "checked";} ?>>
                            <label for="risk-16">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk16" id="risk-16x" <?php if($get_pra->risk16 == "M"){echo "checked";} ?>>
                            <label for="risk-16x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk16" id="risk-16y" <?php if($get_pra->risk16 == "L"){echo "checked";} ?>>
                            <label for="risk-16y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext16" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext16 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="alert alert-secondary" role="alert">Is there any additional support needed (specially in areas such as machinery/attachment)</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que17 == "YES"){echo "checked";} ?> name="que17" id="que-17">
                            <label for="que-17">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que17 == "NO"){echo "checked";} ?> name="que17" id="que-17x">
                            <label for="que-17x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk17" id="risk-17" <?php if($get_pra->risk17 == "H"){echo "checked";} ?>>
                            <label for="risk-17">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk17" id="risk-17x" <?php if($get_pra->risk17 == "M"){echo "checked";} ?>>
                            <label for="risk-17x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk17" id="risk-17y" <?php if($get_pra->risk17 == "L"){echo "checked";} ?>>
                            <label for="risk-17y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext17" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext17 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="alert alert-secondary" role="alert">Pattern</div>
                    </div>                          
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary" role="alert">Lace mebroidery priority points & repeat variation manageable</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que18 == "YES"){echo "checked";} ?> name="que18" id="que-18">
                            <label for="que-18">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que18 == "NO"){echo "checked";} ?> name="que18" id="que-18x">
                            <label for="que-18x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk18" id="risk-18" <?php if($get_pra->risk18 == "H"){echo "checked";} ?>>
                            <label for="risk-18">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk18" id="risk-18x" <?php if($get_pra->risk18 == "M"){echo "checked";} ?>>
                            <label for="risk-18x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk18" id="risk-18y" <?php if($get_pra->risk18 == "L"){echo "checked";} ?>>
                            <label for="risk-18y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext18" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext18 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary" role="alert">Special placement templates</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que19 == "YES"){echo "checked";} ?> name="que19" id="que-19">
                            <label for="que-19">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que19 == "NO"){echo "checked";} ?> name="que19" id="que-19x">
                            <label for="que-19x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk19" id="risk-19" <?php if($get_pra->risk19 == "H"){echo "checked";} ?>>
                            <label for="risk-19">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk19" id="risk-19x" <?php if($get_pra->risk19 == "M"){echo "checked";} ?>>
                            <label for="risk-19x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk19" id="risk-19y" <?php if($get_pra->risk19 == "L"){echo "checked";} ?>>
                            <label for="risk-19y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext19" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext19 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="alert alert-secondary" role="alert">Cutting</div>
                    </div>                          
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary" role="alert">Is numbering required on cut panels</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que20 == "YES"){echo "checked";} ?> name="que20" id="que-20">
                            <label for="que-20">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que20 == "NO"){echo "checked";} ?> name="que20" id="que-20x">
                            <label for="que-20x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk20" id="risk-20" <?php if($get_pra->risk20 == "H"){echo "checked";} ?>>
                            <label for="risk-20">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk20" id="risk-20x" <?php if($get_pra->risk20 == "M"){echo "checked";} ?>>
                            <label for="risk-20x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk20" id="risk-20y" <?php if($get_pra->risk20 == "L"){echo "checked";} ?>>
                            <label for="risk-20y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext20" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext20 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary" role="alert">Is it easy to follow the costed cutting method for lace</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que21 == "YES"){echo "checked";} ?> name="que21" id="que-21">
                            <label for="que-21">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que21 == "NO"){echo "checked";} ?> name="que21" id="que-21x">
                            <label for="que-21x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk21" id="risk-21" <?php if($get_pra->risk21 == "H"){echo "checked";} ?>>
                            <label for="risk-21">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk21" id="risk-21x" <?php if($get_pra->risk21 == "M"){echo "checked";} ?>>
                            <label for="risk-21x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk21" id="risk-21y" <?php if($get_pra->risk21 == "L"){echo "checked";} ?>>
                            <label for="risk-21y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext21" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext21 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary" role="alert">Cutting methods/machine availability</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que22 == "YES"){echo "checked";} ?> name="que22" id="que-22">
                            <label for="que-22">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que22 == "NO"){echo "checked";} ?> name="que22" id="que-22x">
                            <label for="que-22x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk22" id="risk-22" <?php if($get_pra->risk22 == "H"){echo "checked";} ?>>
                            <label for="risk-22">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk22" id="risk-22x" <?php if($get_pra->risk22 == "M"){echo "checked";} ?>>
                            <label for="risk-22x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk22" id="risk-22y" <?php if($get_pra->risk22 == "L"){echo "checked";} ?>>
                            <label for="risk-22y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext22" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext22 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="alert alert-secondary" role="alert">Bulk colours (Any special process needed for the colours)</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que23 == "YES"){echo "checked";} ?> name="que23" id="que-23">
                            <label for="que-23">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que23 == "NO"){echo "checked";} ?> name="que23" id="que-23x">
                            <label for="que-23x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk23" id="risk-23" <?php if($get_pra->risk23 == "H"){echo "checked";} ?>>
                            <label for="risk-23">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk23" id="risk-23x" <?php if($get_pra->risk23 == "M"){echo "checked";} ?>>
                            <label for="risk-23x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk23" id="risk-23y" <?php if($get_pra->risk23 == "L"){echo "checked";} ?>>
                            <label for="risk-23y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext23" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext23 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="alert alert-secondary" role="alert">Special quality points/critical measurements</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que24 == "YES"){echo "checked";} ?> name="que24" id="que-24">
                            <label for="que-24">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que24 == "NO"){echo "checked";} ?> name="que24" id="que-24x">
                            <label for="que-24x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk24" id="risk-24" <?php if($get_pra->risk24 == "H"){echo "checked";} ?>>
                            <label for="risk-24">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk24" id="risk-24x" <?php if($get_pra->risk24 == "M"){echo "checked";} ?>>
                            <label for="risk-24x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk24" id="risk-24y" <?php if($get_pra->risk24 == "L"){echo "checked";} ?>>
                            <label for="risk-24y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext24" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext24 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="alert alert-secondary" role="alert">Packaging Methods</div>
                    </div>                          
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary" role="alert">Is there any risks related to labeling ?</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que25 == "YES"){echo "checked";} ?> name="que25" id="que-25">
                            <label for="que-25">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que25 == "NO"){echo "checked";} ?> name="que25" id="que-25x">
                            <label for="que-25x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk25" id="risk-25" <?php if($get_pra->risk25 == "H"){echo "checked";} ?>>
                            <label for="risk-25">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk25" id="risk-25x" <?php if($get_pra->risk25 == "M"){echo "checked";} ?>>
                            <label for="risk-25x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk25" id="risk-25y" <?php if($get_pra->risk25 == "L"){echo "checked";} ?>>
                            <label for="risk-25y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext25" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext25 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary" role="alert">Is there any risks related to packaging ?</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que26 == "YES"){echo "checked";} ?> name="que26" id="que-26">
                            <label for="que-26">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que26 == "NO"){echo "checked";} ?> name="que26" id="que-26x">
                            <label for="que-26x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk26" id="risk-26" <?php if($get_pra->risk26 == "H"){echo "checked";} ?>>
                            <label for="risk-26">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk26" id="risk-26x" <?php if($get_pra->risk26 == "M"){echo "checked";} ?>>
                            <label for="risk-26x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk26" id="risk-26y" <?php if($get_pra->risk26 == "L"){echo "checked";} ?>>
                            <label for="risk-26y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext26" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext26 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="alert alert-secondary" role="alert">Technology</div>
                    </div>                          
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary" role="alert">Is all bonding parameters/methods/testings/tolerances finalised</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que27 == "YES"){echo "checked";} ?> name="que27" id="que-27">
                            <label for="que-27">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que27 == "NO"){echo "checked";} ?> name="que27" id="que-27x">
                            <label for="que-27x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk27" id="risk-27" <?php if($get_pra->risk27 == "H"){echo "checked";} ?>>
                            <label for="risk-27">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk27" id="risk-27x" <?php if($get_pra->risk27 == "M"){echo "checked";} ?>>
                            <label for="risk-27x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk27" id="risk-27y" <?php if($get_pra->risk27 == "L"){echo "checked";} ?>>
                            <label for="risk-27y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext27" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext27 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary" role="alert">Is all Silicone parameters/methods/testings/tolerances finalised</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que28 == "YES"){echo "checked";} ?> name="que28" id="que-28">
                            <label for="que-28">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que28 == "NO"){echo "checked";} ?> name="que28" id="que-28x">
                            <label for="que-28x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk28" id="risk-28" <?php if($get_pra->risk28 == "H"){echo "checked";} ?>>
                            <label for="risk-28">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk28" id="risk-28x" <?php if($get_pra->risk28 == "M"){echo "checked";} ?>>
                            <label for="risk-28x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk28" id="risk-28y" <?php if($get_pra->risk28 == "L"){echo "checked";} ?>>
                            <label for="risk-28y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext28" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext28 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="alert alert-secondary" role="alert">Embelishmnet (Heat Seal/Embroidery/Rhinestones/Sequines/Printing)</div>
                    </div>                          
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary" role="alert">Is all embelishment conditions/placement/tolerance/testings/construction method finalised</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que29 == "YES"){echo "checked";} ?> name="que29" id="que-29">
                            <label for="que-29">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que29 == "NO"){echo "checked";} ?> name="que29" id="que-29x">
                            <label for="que-29x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk29" id="risk-29" <?php if($get_pra->risk29 == "H"){echo "checked";} ?>>
                            <label for="risk-29">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk29" id="risk-29x" <?php if($get_pra->risk29 == "M"){echo "checked";} ?>>
                            <label for="risk-29x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk29" id="risk-29y" <?php if($get_pra->risk29 == "L"){echo "checked";} ?>>
                            <label for="risk-29y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext29" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext29 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary" role="alert">Is embelishment alinged to the value addition (garment/panel/semi garment) process</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que30 == "YES"){echo "checked";} ?> name="que30" id="que-30">
                            <label for="que-30">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que30 == "NO"){echo "checked";} ?> name="que30" id="que-30x">
                            <label for="que-30x">No</label>
                        </div> 
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="H" name="risk30" id="risk-30" <?php if($get_pra->risk30 == "H"){echo "checked";} ?>>
                            <label for="risk-30">H</label>
                        </div>                                        
                        <div class="styled-radio">  
                            <input type="radio" value="M" name="risk30" id="risk-30x" <?php if($get_pra->risk30 == "M"){echo "checked";} ?>>
                            <label for="risk-30x">M</label>
                        </div> 
                        <div class="styled-radio">
                            <input type="radio" value="L" name="risk30" id="risk-30y" <?php if($get_pra->risk30 == "L"){echo "checked";} ?>>
                            <label for="risk-30y">L</label>
                        </div> 
                    </div>      
                    <div class="col-lg-3">
                        <textarea name="quetext30" class="form-control" placeholder="Comments"><?php echo $get_pra->quetext30 ?></textarea>
                    </div>       
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="alert alert-secondary" role="alert">Moulding integration required or not ?</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que31 == "YES"){echo "checked";} ?> name="que31" id="que-31">
                            <label for="que-31">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que31 == "NO"){echo "checked";} ?> name="que31" id="que-31x">
                            <label for="que-31x">No</label>
                        </div> 
                    </div>                          
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="alert alert-secondary" role="alert">Integration Required or not ?</div>
                    </div>      
                    <div class="col-lg-1">
                        <div class="styled-radio">
                            <input type="radio" value="YES" <?php if($get_pra->que32 == "YES"){echo "checked";} ?> name="que32" id="que-32">
                            <label for="que-32">Yes</label>
                        </div>                                        
                        <div class="styled-radio">
                            <input type="radio" value="NO" <?php if($get_pra->que32 == "NO"){echo "checked";} ?> name="que32" id="que-32x">
                            <label for="que-32x">No</label>
                        </div> 
                    </div>                          
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="alert alert-secondary" role="alert">Integration/ cut kit date/ sizes/ where</div>
                    </div>
                    <div class="col-lg-3"><input type="text" id="date1" class="form-control" name="date2" placeholder="Date" value="<?php echo $get_pra->date2 ?>"></div>
                    <div class="col-lg-3"><input type="text" class="form-control" name="sizes" placeholder="Sizes" value="<?php echo $get_pra->sizes ?>"></div>
                    <div class="col-lg-3"><textarea name="quetext31" class="form-control" placeholder="Where ?"><?php echo $get_pra->quetext31 ?></textarea></div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-right">
                        <button type="submit" class="btn btn-primary btn-lg">Submit Form</button>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <!-- End Sorting -->
        <!-- Export -->        
        <!-- End Export -->
    </div>
</div>
<script>
    $(document).ready(function(){
    tampil(); 
    function tampil() {
        var id = '<?php echo $this->uri->segment(3) ?>';
        $.ajax({
            url : "<?php echo site_url('index.php/rest/get_att')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data){
                var html = '';
                var i;
                var no = 1;
                for(i=0; i<data.length; i++){                    
                    html += '<tr>'+                                
                            '<td>'+data[i].name+'</td>'+                            
                            '<td style="text-align:right;">'+                                    
                                    '<a href="javascript:;" class="btn btn-danger btn-sm item_hapus" data="'+data[i].id+'"><span class="la la-trash"></span></a>'+
                                '</td>'+
                            '</tr>';
                }
                $('#show_data').html(html);              
            },
            error: function (jqXHR, textStatus, errorThrown){
                alert('Error get data from ajax');
              }
        });
    }

    $('#btn_simpan').on('click',function(){            
        var add = $('[name="add"]').val();     
        var id = '<?php echo $this->uri->segment(3) ?>';        
          // console.log(allowance);                
        $.ajax({
        type : "POST",
        url  : "<?php echo base_url('index.php/rest/add_att')?>",
        dataType : "JSON",
        data : {scheduling_id:id , name:add},
        success: function(data)
            {                                     
                $('[name="add"]').val("");                    
                tampil();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });    
    });

    $('#show_data').on('click','.item_hapus',function(){
        var id = $(this).attr('data');            
        $.ajax({
        type : "POST",
        url  : "<?php echo base_url('index.php/rest/del_att')?>",
        dataType : "JSON",
                data : {id: id},
                success: function(data){                        
                    tampil();
                }
            });
            return false;        
    });
});
</script>