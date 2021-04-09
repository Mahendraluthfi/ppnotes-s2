<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pre-Production</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/var/www/html/ppnotes/assets/css/pdf/bootstrap.min.css">

    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="/var/www/html/ppnotes/assets/css/pdf/bootstrap-theme.min.css"> -->

    <!-- Latest compiled and minified JavaScript -->
    <script src="/var/www/html/ppnotes/assets/css/pdf/bootstrap.min.js"></script>
    <!-- <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet"> -->

</head>
<style>
    @font-face {
        font-family: "Ubuntu";
        src: url("/var/www/html/ppnotes/assets/css/pdf/Ubuntu-Regular.ttf");
    }

    @page { 
        /*margin: 0px; */
    }
    body { 
        /*margin: 0px; */
        /*margin-left: 30px;*/
        font-family: 'Ubuntu';
        margin-top: -30px;
        margin-right: : 50px;
    }

    /*@media print {*/
         /* .page-break {
            page-break-before: always;
        }*/
        .font-content{
            font-size: 12px;
        }
    /*}*/
</style>
<body>

    <h3>Pre-Production Meeting Result</h3>    
    <hr style="color: black;">
    <div class="row">
        <div class="col-xs-2">Actual PP</div>
        <div class="col-xs-8 text-danger"><?php echo date('d M Y', strtotime($pp->date_pp)) ?></div>
    </div>
    <div class="row">
        <div class="col-xs-2">#Style</div>
        <div class="col-xs-8 text-danger"><?php echo $get->style_no ?></div>
    </div><br>
    <table class="table table-bordered table-hover">
        <thead>
            <tr class="active">
                <th>Name</th>
                <th>Department</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($att as $data) { ?>
            <tr>
                <td class="col-xs-6"><?php echo $data->employee_name ?></td>
                <td><?php echo $data->department_name ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="font-content">        
        <div class="page-break">        
            <div class="pull-right">2</div>
            <h4>Merchandising</h4>
        </div>
        <ul class="list-group">
            <li class="list-group-item">Present Pre-Production Note to the audience. ( Attach a copy of PP Note )</li>                
            <li class="list-group-item">Are completed approved trim cards for all colours issued to relevant depts. ( FT,RM,CU,PR & QA ) ? <span class="text-primary"><?php echo $pp->pp_m2_1 ?></span>
                <div class="row">
                    <div class="col-xs-2">If Not, Reason</div>
                    <div class="col-xs-8 text-primary"><?php echo $pp->pp_m2_2 ?></div>
                </div>
                <div class="row">
                    <div class="col-xs-2">Action By</div>
                    <div class="col-xs-4 text-primary"><?php echo $pp->pp_m2_3 ?></div>
                    <div class="col-xs-2">Issuing Date</div>
                    <div class="col-xs-4 text-primary"><?php if($pp->pp_m2_4 !== '0000-00-00'){echo $pp->pp_m2_4;} ?></div>
                </div>            
            </li>                                
            <li class="list-group-item">Is there any discrepancies between Trim Card & Approved Standard? <span class="text-primary"><?php echo $pp->pp_m3_1 ?></span>
                <div class="row">
                    <div class="col-xs-2">If Not, Action taken</div>
                    <div class="col-xs-8 text-primary"><?php echo $pp->pp_m3_2 ?></div>
                </div>
                Have you seen approved standard for such discrepancies ?<br>
                <span class="text-primary"><?php echo $pp->pp_m3_3 ?></span>
            </li>                                
            <li class="list-group-item">Are following documents available & distributed ?<br>
                MPO -- <span class="text-primary"><?php echo $pp->pp_m4_1 ?></span>
                <div class="row">
                    <div class="col-xs-2">If Not,Issuing Date</div>
                    <div class="col-xs-4 text-primary"><?php echo $pp->pp_m4_4 ?></div>
                    <div class="col-xs-2">Action By</div>
                    <div class="col-xs-4 text-primary"><?php echo $pp->pp_m4_7; ?></div>
                </div>            
                BOM -- <span class="text-primary"><?php echo $pp->pp_m4_2 ?></span>                
                <div class="row">
                    <div class="col-xs-2">If Not,Issuing Date</div>
                    <div class="col-xs-4 text-primary"><?php echo $pp->pp_m4_5 ?></div>
                    <div class="col-xs-2">Action By</div>
                    <div class="col-xs-4 text-primary"><?php echo $pp->pp_m4_8; ?></div>
                </div>            
                LOF -- <span class="text-primary"><?php echo $pp->pp_m4_3 ?></span>
                <div class="row">
                    <div class="col-xs-2">If Not,Issuing Date</div>
                    <div class="col-xs-4 text-primary"><?php echo $pp->pp_m4_6 ?></div>
                    <div class="col-xs-2">Action By</div>
                    <div class="col-xs-4 text-primary"><?php echo $pp->pp_m4_9; ?></div>
                </div>            
            </li>                        
            <li class="list-group-item">Packing instructions ( method & standards ) -- YES</li>           
            <li class="list-group-item">Can delivery dates be met as per MPO/CPO/SLC delivery schedule? <span class="text-primary"><?php echo $pp->pp_m5_1 ?></span><br>
                Delivery Date-- <span class="text-primary"><?php echo $pp->pp_m5_2 ?></span>
                <div class="row">
                    <div class="col-xs-3">If Not,Issuing Date</div>
                    <div class="col-xs-3 text-primary"><?php echo $pp->pp_m5_3 ?></div>
                    <div class="col-xs-2">Action By</div>
                    <div class="col-xs-3 text-primary"><?php echo $pp->pp_m5_4 ?></div>
                </div>            
            </li>            
            <li class="list-group-item">Sample requirements As per the VS proceder ( not received yet)</li>            
        </ul>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sample Type</th>
                        <th>Size(s)</th>
                        <th>Action By</th>
                        <th>Comments</th>
                    </tr>
                </thead>
                <tbody class="text-primary">
                    <tr>
                        <td><?php echo $pp->pp_m6_1 ?></td>
                        <td><?php echo $pp->pp_m6_2 ?></td>
                        <td><?php echo $pp->pp_m6_3 ?></td>
                        <td><?php echo $pp->pp_m6_4 ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $pp->pp_m6_5 ?></td>
                        <td><?php echo $pp->pp_m6_6 ?></td>
                        <td><?php echo $pp->pp_m6_7 ?></td>
                        <td><?php echo $pp->pp_m6_8 ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $pp->pp_m6_9 ?></td>
                        <td><?php echo $pp->pp_m6_10 ?></td>
                        <td><?php echo $pp->pp_m6_11 ?></td>
                        <td><?php echo $pp->pp_m6_12 ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $pp->pp_m6_13 ?></td>
                        <td><?php echo $pp->pp_m6_14 ?></td>
                        <td><?php echo $pp->pp_m6_15 ?></td>
                        <td><?php echo $pp->pp_m6_16 ?></td>
                    </tr>
                </tbody>
            </table>         
            <ul class="list-group">
                <li class="list-group-item">Any special comment or instruction.</li>
                <li class="list-group-item text-primary"><?php echo $pp->pp_m7_1 ?></li>            
            </ul>
        <div class="page-break">
            <div class="pull-right">3</div>               
            <h4>Fabric And Trims</h4>
        </div>   
        <ul class="list-group">
            <li class="list-group-item">Are Fabric Pre-Production Notes available ? <span class="text-primary"><?php echo $pp->pp_f1_1 ?></span><br>
                Approved By -- <span class="text-primary"><?php echo $pp->pp_f1_2 ?></span>
                <div class="row">
                    <div class="col-xs-2">If Not,Action</div>
                    <div class="col-xs-4 text-primary"><?php echo $pp->pp_f1_3 ?></div>
                    <div class="col-xs-2">Action By</div>
                    <div class="col-xs-4 text-primary"><?php echo $pp->pp_f1_4 ?></div>
                </div>                            

            </li>
            <li class="list-group-item">Are Fabric Test Reports available ? <span class="text-primary"><?php echo $pp->pp_f2_1 ?></span><br>
                If yes, What tests ?<br>
                <span class="text-primary"><?php echo $pp->pp_f2_2 ?></span>
                <div class="row">
                    <div class="col-xs-2">If Not,Action</div>
                    <div class="col-xs-4 text-primary"><?php echo $pp->pp_f2_3 ?></div>
                    <div class="col-xs-2">Action By</div>
                    <div class="col-xs-4 text-primary"><?php echo $pp->pp_f2_4 ?></div>
                </div>                            
            </li>                
            <li class="list-group-item">Fabric Details</li>
            <li class="list-group-item">
                <div class="row">
                     <div class="col-xs-2 text-success">Fabric</div>
                     <div class="col-xs-3"></div>
                     <div class="col-xs-2 text-success">Lace</div>
                 </div> 
                 <div class="row">
                     <div class="col-xs-2">Supplier</div>
                     <div class="col-xs-3 text-primary"><?php echo $pp->pp_f3_1 ?></div>
                     <div class="col-xs-2">Supplier</div>
                     <div class="col-xs-4 text-primary"><?php echo $pp->pp_f3_6 ?></div>
                 </div>
                 <div class="row">
                     <div class="col-xs-2">Type</div>
                     <div class="col-xs-3 text-primary"><?php echo $pp->pp_f3_2 ?></div>
                     <div class="col-xs-2">Type</div>
                     <div class="col-xs-4 text-primary"><?php echo $pp->pp_f3_7 ?></div>
                 </div>
                 <div class="row">
                     <div class="col-xs-2">Composition</div>
                     <div class="col-xs-3 text-primary"><?php echo $pp->pp_f3_3 ?></div>
                     <div class="col-xs-2">Composition</div>
                     <div class="col-xs-4 text-primary"><?php echo $pp->pp_f3_8 ?></div>
                 </div>
                 <div class="row">
                     <div class="col-xs-2">Fabric Rate</div>
                     <div class="col-xs-3 text-primary"><?php echo $pp->pp_f3_4 ?></div>
                     <div class="col-xs-2">Fabric Rate</div>
                     <div class="col-xs-4 text-primary"><?php echo $pp->pp_f3_9 ?></div>
                 </div>
                 <div class="row">
                     <div class="col-xs-2">Defect</div>
                     <div class="col-xs-3 text-primary"><?php echo $pp->pp_f3_5 ?></div>
                     <div class="col-xs-2">Defect</div>
                     <div class="col-xs-4 text-primary"><?php echo $pp->pp_f3_10 ?></div>
                 </div>
            </li>                    
            <li class="list-group-item">Are &quot;Fabric Defects Card&quot; distributed to Cutting & Production ? <span class="text-primary"><?php echo $pp->pp_f4_1 ?></span></li>                    
            <li class="list-group-item">Stripe / Check fabric : <span class="text-primary"><?php echo $pp->pp_f5_1 ?></span><br>
                Bowing percentage
                <div class="row">
                     <div class="col-xs-2">In fabric form</div>
                     <div class="col-xs-1 text-primary"><?php echo $pp->pp_f5_2 ?></div>
                     <div class="col-xs-3">What percentage is approved in panel / garment form</div>
                     <div class="col-xs-1 text-primary"><?php echo $pp->pp_f5_3 ?></div>
                 </div>
            </li>
            <li class="list-group-item">Lace / Stripe / Check fabric Repeat variations : <span class="text-primary"><?php echo $pp->pp_f6_1 ?></span><br>
                As Per Spec
                <div class="row">
                     <div class="col-xs-2">Repeat Length</div>
                     <div class="col-xs-3 text-primary"><?php echo $pp->pp_f6_3 ?></div>
                     <div class="col-xs-3">Tolerance</div>
                     <div class="col-xs-3 text-primary"><?php echo $pp->pp_f6_4 ?></div>
                 </div>
                 <div class="row">
                     <div class="col-xs-2">Repeat variation in fabric form</div>
                     <div class="col-xs-3 text-primary"><?php echo $pp->pp_f6_5 ?></div>
                     <div class="col-xs-3">What percentage is approved in panel & garment form</div>
                     <div class="col-xs-3 text-primary"><?php echo $pp->pp_f6_6 ?></div>
                 </div>
            </li>            
            <li class="list-group-item">
                What method is used to identify fabric Technical Face side? -- <span class="text-primary"><?php echo $pp->pp_f7_1 ?></span><br>
                Technical face -- <span class="text-primary"><?php echo $pp->pp_f7_4 ?></span><br>
                Did you issue an approved fabric hanger indicating &quot;Garment Face&quot; to Cutting & Production ? <span class="text-primary"><?php echo $pp->pp_f7_2 ?></span><br>
                If Not, Issuing Time -- <span class="text-primary"><b><?php echo $pp->pp_f7_3 ?></b></span>
            </li>
            <li class="list-group-item">
                Special requirements -- <span class="text-primary"><?php echo $pp->pp_f8_1 ?></span><br>
                Standard availability & approval ? -- <span class="text-primary"><?php echo $pp->pp_f8_2 ?></span>
                <div class="row">
                    <div class="col-xs-3">If Yes,Approved by (Supplier):</div>
                    <div class="col-xs-2 text-primary"><?php echo $pp->pp_f8_3 ?></div>
                    <div class="col-xs-2">If Not,Issuing Date</div>
                    <div class="col-xs-4 text-primary"><?php echo $pp->pp_f8_4 ?></div>
                </div>                
                <span class="text-success">HS / Fussing / Laminating Conditions</span><br>
                <div class="row">
                    <div class="col-xs-3">Setting Temperature</div>
                    <div class="col-xs-2 text-primary"><?php echo $pp->pp_f8_5 ?></div>
                    <div class="col-xs-3">Bond strength</div>
                    <div class="col-xs-3 text-primary"><?php echo $pp->pp_f8_6 ?></div>
                </div>                
                <div class="row">
                    <div class="col-xs-3">Glue line Temperature</div>
                    <div class="col-xs-2 text-primary"><?php echo $pp->pp_f8_7 ?></div>
                    <div class="col-xs-3">Feel off method</div>
                    <div class="col-xs-3 text-primary"><?php echo $pp->pp_f8_8 ?></div>
                </div>                
                <div class="row">
                    <div class="col-xs-3">Time</div>
                    <div class="col-xs-2 text-primary"><?php echo $pp->pp_f8_9 ?></div>
                    <div class="col-xs-3">Lamination method</div>
                    <div class="col-xs-3 text-primary"><?php if($pp->pp_f8_10 == "1"){echo "Cool";}elseif ($pp->pp_f8_10 == "2") {echo "Hot";} ?></div>
                </div>                
                <div class="row">
                    <div class="col-xs-3">Pressure</div>
                    <div class="col-xs-2 text-primary"><?php echo $pp->pp_f8_11 ?></div>
                    <div class="col-xs-3">Lamination done at</div>
                    <div class="col-xs-3 text-primary"><?php if($pp->pp_f8_12 == "1"){echo "Sri Lanka";}elseif ($pp->pp_f8_12 == "2") {echo "Offshow";} ?></div>
                </div>                
            </li>
            <li class="list-group-item">
                Is this a washed garment ? <span class="text-primary"><?php echo $pp->pp_f9_1 ?></span><br>
                If Yes, <br>
                Wash Method -- <span class="text-primary"><?php echo $pp->pp_f9_2 ?></span><br>
                Recipe -- <span class="text-primary"><?php echo $pp->pp_f9_3 ?></span><br>
                Comments -- <span class="text-primary"><?php echo $pp->pp_f9_4 ?></span>
            </li>
        </ul>

        <div class="page-break">
            &nbsp;
            <div class="pull-right" style="margin-right: 10px">4</div>
        </div>
            <ul class="list-group">
                <li class="list-group-item">Is there any colour shade variation in all colours -- <span class="text-primary"><?php echo $pp->pp_f10_1 ?></span><br>
                    If yes ( Tick the special instyructions given ) --<span class="text-primary"><?php echo $pp->pp_f10_2 ?></span>
                    <div class="row">
                        <div class="col-xs-1 text-center"><?php if($pp->pp_f10_3 == "on"){echo '<b>V</b>';} ?></div>
                        <div class="col-xs-10">Batch to Batch shade - B -to-B separations & all shades are within the approved shade band</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1 text-center"><?php if($pp->pp_f10_4 == "on"){echo '<b>V</b>';} ?></div>
                        <div class="col-xs-10">Within the Roll shade - Use close-marker & within the garment shade is approved</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1 text-center"><?php if($pp->pp_f10_5 == "on"){echo '<b>V</b>';} ?></div>
                        <div class="col-xs-10">Rejecth fabric / Lace / Elastics</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1 text-center"><?php if($pp->pp_f10_6 == "on"){echo '<b>V</b>';} ?></div>
                        <div class="col-xs-10">Any other, Specify -- <span class="text-primary"><?php echo $pp->pp_f10_7 ?></span></div>
                    </div>
                </li>
                <li class="list-group-item">
                    Any adverse reaction on fabric ? <span class="text-primary"><?php echo $pp->pp_f11_1 ?></span><br>
                    If Yes, -- <span class="text-primary"><?php if($pp->pp_f11_2 == "1"){echo "Shrinkage";}else{echo "Growing";} ?></span>
                    <div class="row">
                        <div class="col-xs-1">Percentage</div>
                        <div class="col-xs-1">Lengthwise</div>
                        <div class="col-xs-1 text-primary"><?php echo $pp->pp_f11_3 ?></div>
                        <div class="col-xs-1">Widthwise</div>
                        <div class="col-xs-1 text-primary"><?php echo $pp->pp_f11_4 ?></div>
                    </div>
                </li>
                <li class="list-group-item">
                    Fabric /Marker width
                    <div class="row">
                        <div class="col-xs-1">Spec</div>
                        <div class="col-xs-1 text-primary"><?php echo $pp->pp_f12_1 ?></div>
                        <div class="col-xs-1">Usable</div>
                        <div class="col-xs-1 text-primary"><?php echo $pp->pp_f12_2 ?></div>
                        <div class="col-xs-1 text-primary"><?php echo $pp->pp_f12_3 ?></div>
                    </div>
                </li>
                <li class="list-group-item">
                    Special comments <br>
                    <span class="text-primary"><?php echo $pp->pp_f13_1 ?></span>
                </li>
            </ul>
            <h4>Construction / Technical</h4>
            <ul class="list-group">
                <li class="list-group-item">Present &quot;Construction Details&quot; to the audience</li>
                <li class="list-group-item">Is approved Contract / Red / Green Seal available ? <span class="text-primary"><?php echo $pp->pp_ct2_1 ?></span><br>
                    <div class="row">
                        <div class="col-xs-2">Apporved By</div>
                        <div class="col-xs-2 text-primary"><?php echo $pp->pp_ct2_2 ?></div>
                        <div class="col-xs-2">Date</div>
                        <div class="col-xs-2 text-primary"><?php echo $pp->pp_ct2_3 ?></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2">If Not, Action</div>
                        <div class="col-xs-2 text-primary"><?php echo $pp->pp_ct2_4 ?></div>
                        <div class="col-xs-2">Action By</div>
                        <div class="col-xs-2 text-primary"><?php echo $pp->pp_ct2_5 ?></div>
                    </div>
                </li>
                <li class="list-group-item">
                    What are the comments received ? <br>
                    <span class="text-primary"><?php echo $pp->pp_ct3_1 ?></span>
                </li>                
                <li class="list-group-item">
                    What are the difficult operations identified during sample stage ( Cutting & Sewing ) ?
                </li>
            </ul>
            <table class="table table-bordered">
                   <thead>
                       <tr>
                           <th>Operation</th>
                           <th>Preventive Action</th>
                       </tr>
                   </thead>
                   <tbody class="text-primary">
                       <tr>
                           <td><?php echo $pp->pp_ct4_1 ?></td>
                           <td><?php echo $pp->pp_ct4_2 ?></td>
                       </tr>
                       <tr>
                           <td><?php echo $pp->pp_ct4_3 ?></td>
                           <td><?php echo $pp->pp_ct4_4 ?></td>
                       </tr>
                       <tr>
                           <td><?php echo $pp->pp_ct4_5 ?></td>
                           <td><?php echo $pp->pp_ct4_6 ?></td>
                       </tr>
                   </tbody>
               </table>           
            <ul class="list-group">
                <li class="list-group-item">
                    Specify, if any special / extra machines and / or needles required :<br>
                    <span class="text-primary"><?php echo $pp->pp_ct5_1 ?></span>
                </li>
                <li class="list-group-item">
                    What are the attachments used for the operations ?<br>
                    <span class="text-primary"><?php echo $pp->pp_ct6_1 ?></span>                    
                </li>
                <li class="list-group-item">
                    Has the size set being done ? <span class="text-primary"><?php echo $pp->pp_ct7_1 ?></span><br>
                    Done By -- <span class="text-primary"><?php echo $pp->pp_ct7_2 ?></span>
                    <div class="row">
                        <div class="col-xs-2">If Not, Action</div>
                        <div class="col-xs-2 text-primary"><?php echo $pp->pp_ct7_3 ?></div>
                        <div class="col-xs-2">Action By</div>
                        <div class="col-xs-2 text-primary"><?php echo $pp->pp_ct7_4 ?></div>
                    </div>
                </li>
            </ul>
            <div class="page-break">
                &nbsp;
                <div class="pull-right" style="margin-right: 10px">5</div>
            </div>
            <ul class="list-group">                
                <li class="list-group-item">
                    Specify the operations that the measurements been identified as Inline and Critical<br>
                </li>
            </ul>
                 <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Inline Measurements</th>
                            <th>Critical Measurement</th>
                        </tr>
                    </thead>
                    <tbody class="text-primary">
                        <tr>
                            <td><?php echo $pp->pp_ct8_1 ?></td>
                            <td><?php echo $pp->pp_ct8_2 ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $pp->pp_ct8_3 ?></td>
                            <td><?php echo $pp->pp_ct8_4 ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $pp->pp_ct8_5 ?></td>
                            <td><?php echo $pp->pp_ct8_6 ?></td>
                        </tr>
                    </tbody>
                </table>
            <ul class="list-group">
                <li class="list-group-item">
                    Are the following approved documents available ?
                </li>                
            </ul>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>If Yes,<br>Appr. by</th>
                            <th>If not,<br>Action</th>
                            <th>Re-issuing Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Size Chart / M'ment Sheet</td>
                            <td class="text-primary"><?php echo $pp->pp_ct9_1 ?></td>
                            <td class="text-primary"><?php echo $pp->pp_ct9_2 ?></td>
                            <td class="text-primary"><?php echo $pp->pp_ct9_3 ?></td>
                        </tr>
                        <tr>
                            <td>Construction Sheet</td>
                            <td class="text-primary"><?php echo $pp->pp_ct9_4 ?></td>
                            <td class="text-primary"><?php echo $pp->pp_ct9_5 ?></td>
                            <td class="text-primary"><?php echo $pp->pp_ct9_6 ?></td>
                        </tr>
                        <tr>
                            <td>How to measure sheet</td>
                            <td class="text-primary"><?php echo $pp->pp_ct9_7 ?></td>
                            <td class="text-primary"><?php echo $pp->pp_ct9_8 ?></td>
                            <td class="text-primary"><?php echo $pp->pp_ct9_9 ?></td>
                        </tr>
                    </tbody>
                </table>
            <ul class="list-group">
                <li class="list-group-item">
                What are the changes being done in the above-approved documents during this meeting ? <br>
                <span class="text-primary"><?php echo $pp->pp_ct10_1 ?></span>
                </li>                
                <li class="list-group-item">What are the potential risks identified at the Risk assessment ?</li>
            </ul>
            <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Risk</th>
                            <th>Preventive action taken</th>
                            <th>Chekced by</th>
                            <th>Result</th>
                        </tr>
                    </thead>
                    <tbody class="text-primary">
                        <tr>
                            <td><?php echo $pp->pp_ct11_1 ?></td>
                            <td><?php echo $pp->pp_ct11_2 ?></td>
                            <td><?php echo $pp->pp_ct11_3 ?></td>
                            <td><?php echo $pp->pp_ct11_4 ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $pp->pp_ct11_5 ?></td>
                            <td><?php echo $pp->pp_ct11_6 ?></td>
                            <td><?php echo $pp->pp_ct11_7 ?></td>
                            <td><?php echo $pp->pp_ct11_8 ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $pp->pp_ct11_9 ?></td>
                            <td><?php echo $pp->pp_ct11_10 ?></td>
                            <td><?php echo $pp->pp_ct11_11 ?></td>
                            <td><?php echo $pp->pp_ct11_12 ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $pp->pp_ct11_13 ?></td>
                            <td><?php echo $pp->pp_ct11_14 ?></td>
                            <td><?php echo $pp->pp_ct11_15 ?></td>
                            <td><?php echo $pp->pp_ct11_16 ?></td>
                          </tr>
                    </tbody>
                </table>
            <ul class="list-group">
                <li class="list-group-item">What are the matching requirements ?
                    <div class="row">
                        <div class="col-xs-5">Stripes & checks</div>
                        <div class="col-xs-6">Lace   MACHING LACE (ATT TO THE PP METING SHEET)</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1"><?php if($pp->pp_ct12_1 == "on"){echo '<b>V</b>';} ?></div>
                        <div class="col-xs-4">100 % side seam matching</div>
                        <div class="col-xs-1"><?php if($pp->pp_ct12_2 == "on"){echo '<b>V</b>';} ?></div>
                        <div class="col-xs-4">Exact matching point &amp; Colour specific Yes / No</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1"><?php if($pp->pp_ct12_3 == "on"){echo '<b>V</b>';} ?></div>
                        <div class="col-xs-4">Waist or Hem straight</div>
                        <div class="col-xs-1"><?php if($pp->pp_ct12_5 == "on"){echo '<b>V</b>';} ?></div>
                        <div class="col-xs-4">Choice of placement points ( indicate on the diagram )</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1"><?php if($pp->pp_ct12_6 == "on"){echo '<b>V</b>';} ?></div>
                        <div class="col-xs-4">Other -- <span class="text-primary"><?php echo $pp->pp_ct12_4; ?></span></div>
                        <div class="col-xs-1"><?php if($pp->pp_ct12_7 == "on"){echo '<b>V</b>';} ?></div>
                        <div class="col-xs-4">Exclusive placement points ( indicate on the diagram )</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1"></div>
                        <div class="col-xs-4"></div>
                        <div class="col-xs-1"><?php if($pp->pp_ct12_8 == "on"){echo '<b>V</b>';} ?></div>
                        <div class="col-xs-4">Free priority point</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1"></div>
                        <div class="col-xs-4"></div>
                        <div class="col-xs-1"><?php if($pp->pp_ct12_9== "on"){echo '<b>V</b>';} ?></div>
                        <div class="col-xs-4">Length only</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1"></div>
                        <div class="col-xs-4"></div>
                        <div class="col-xs-1"><?php if($pp->pp_ct12_10 == "on"){echo '<b>V</b>';} ?></div>
                        <div class="col-xs-4">Other -- <span class="text-primary"><?php echo $pp->pp_ct12_11; ?></span></div>
                    </div>                    
                </li>                          
            </ul>
            <div class="page-break">
                &nbsp;
                <div class="pull-right" style="margin-right: 10px">6</div>
            </div>    
            <ul class="list-group">
                <li class="list-group-item">
                    Secondary priority point -- <span class="text-primary"><?php echo $pp->pp_ct12_12; ?></span><br>
                    Tolerances ( according to the tolerance given to Fabric / Lace )<br>
                    <span class="text-primary"><?php echo $pp->pp_ct12_13; ?></span>
                </li>                
            </ul>
            <ul class="list-group">
                <li class="list-group-item">
                    <span class="text-success">Heat Seal Placement</span>
                    <div class="row">
                        <div class="col-xs-2">Part</div>
                        <div class="col-xs-9">Placements ( excluding seam allowance )</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2"><span class="text-primary"><?php echo $pp->pp_ct13_1; ?></span></div>
                        <div class="col-xs-9">(<span class="text-primary"><?php echo $pp->pp_ct13_2; ?></span>) cm / inch down / up from (<span class="text-primary"><?php echo $pp->pp_ct13_3; ?></span>) to the top / bottom of the (<span class="text-primary"><?php echo $pp->pp_ct13_4; ?></span>)</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2"></div>
                        <div class="col-xs-9">(<span class="text-primary"><?php echo $pp->pp_ct13_5; ?></span>)  cm / inch from left / right seam edge / center line to the left / right of the (<span class="text-primary"><?php echo $pp->pp_ct13_6; ?></span>)</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2"></div>
                        <div class="col-xs-9">Seam allowance (<span class="text-primary"><?php echo $pp->pp_ct13_7; ?></span>) cm / inches</div>
                    </div>                       
                    <div class="row">
                        <div class="col-xs-2"><span class="text-primary"><?php echo $pp->pp_ct13_8; ?></span></div>
                        <div class="col-xs-9">(<span class="text-primary"><?php echo $pp->pp_ct13_9; ?></span>) cm / inch down / up from (<span class="text-primary"><?php echo $pp->pp_ct13_10; ?></span>) to the top / bottom of the (<span class="text-primary"><?php echo $pp->pp_ct13_11; ?></span>)</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2"></div>
                        <div class="col-xs-9">(<span class="text-primary"><?php echo $pp->pp_ct13_12; ?></span>)  cm / inch from left / right seam edge / center line to the left / right of the (<span class="text-primary"><?php echo $pp->pp_ct13_13; ?></span>)</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2"></div>
                        <div class="col-xs-9">Seam allowance (<span class="text-primary"><?php echo $pp->pp_ct13_14; ?></span>) cm / inches</div>
                    </div>                 
                </li>                
                <li class="list-group-item">
                    Garment way <br>
                    <span class="text-primary"><?php echo $pp->pp_ct14_1.$pp->pp_ct14_2; ?></span>
                </li>
                <li class="list-group-item">
                    What is the grain direction ?
                    <div class="row">
                        <div class="col-xs-3 text-success">Direction</div>
                        <div class="col-xs-3 text-success">Garment part(s)</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3">Parallel to selvage</div>
                        <div class="col-xs-3"><span class="text-primary"><?php echo $pp->pp_ct15_2; ?></span></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3">Perpendicular to Selvage</div>
                        <div class="col-xs-3"><span class="text-primary"><?php echo $pp->pp_ct15_3; ?></span></div>
                    </div>                
                </li>
            </ul>        
            <h4>Moulding (If Any)</h4>
            <table class="table table-condensed">                
                <tbody>
                    <tr>
                        <td>Mould type</td>
                        <td class="text-primary"><?php echo $pp->pp_mo_1; ?></td>
                        <td>Temperature ( F/C )</td>
                        <td class="text-primary"><?php echo $pp->pp_mo_2; ?></td>
                    </tr>
                    <tr>
                        <td>Mould shape</td>
                        <td class="text-primary"><?php echo $pp->pp_mo_3; ?></td>
                        <td>Moulding Time</td>
                        <td class="text-primary"><?php echo $pp->pp_mo_4; ?></td>
                    </tr>
                    <tr>
                        <td>Mould size ( circumference )</td>
                        <td class="text-primary"><?php echo $pp->pp_mo_5; ?></td>
                        <td>Fabric laying method</td>
                        <td class="text-primary"><?php echo $pp->pp_mo_6; ?></td>
                    </tr>
                    <tr>
                        <td>Cup depth</td>
                        <td class="text-primary"><?php echo $pp->pp_mo_7; ?></td>
                        <td>Number of plies</td>
                        <td class="text-primary"><?php echo $pp->pp_mo_8; ?></td>
                    </tr>
                    <tr>
                        <td>Single / Double moulding</td>
                        <td class="text-primary"><?php echo $pp->pp_mo_9; ?></td>
                        <td>Petential Defects</td>
                        <td class="text-primary"><?php echo $pp->pp_mo_10; ?></td>
                    </tr>
                </tbody>
            </table>
            <h4>Cutting</h4>
            <ul class="list-group">
                <li class="list-group-item">
                    Specify
                    <div class="row">
                        <div class="col-xs-2">Marker Length</div>
                        <div class="col-xs-1 text-primary"><?php echo $pp->pp_c1_1; ?></div>
                        <div class="col-xs-2">Play Height</div>
                        <div class="col-xs-1 text-primary"><?php echo $pp->pp_c1_2; ?></div>
                        <div class="col-xs-2">Comments</div>
                        <div class="col-xs-3 text-primary"><?php echo $pp->pp_c1_3; ?></div>
                    </div>
                </li>
                <li class="list-group-item">
                    What are the cutting methods and equipments
                    <div class="row">
                        <div class="col-xs-2">Fabric--</div>
                        <div class="col-xs-5 text-primary"><?php echo $pp->pp_c2_1; ?></div>                        
                    </div>
                    <div class="row">
                        <div class="col-xs-2">Lace--</div>
                        <div class="col-xs-5 text-primary"><?php echo $pp->pp_c2_2; ?></div>                        
                    </div>
                    <div class="row">
                        <div class="col-xs-2">Foam--</div>
                        <div class="col-xs-5 text-primary"><?php echo $pp->pp_c2_3; ?></div>                        
                    </div>
                </li>
                <li class="list-group-item">
                    Special Comments -- 
                    <span class="text-primary"><?php echo $pp->pp_c3_1; ?></span>
                </li>
            </ul>
            <div class="page-break">
                &nbsp;
                <div class="pull-right">7</div>
            </div>
            <h4>Pilot Cut</h4>
            <ul class="list-group">
                <li class="list-group-item">
                    Issuing of Cutting Instruction - Date &amp; Time -- <span class="text-primary"><?php echo $pp->pp_pc1_1.' / '.$pp->pp_pc1_2; ?></span>
                </li>
                <li class="list-group-item">
                    Releasing of Fabric &amp; Trims for Production - Date &amp; Time -- <span class="text-primary"><?php echo $pp->pp_pc2_1.' / '.$pp->pp_pc2_2; ?></span>
                </li>
                <li class="list-group-item">
                    Sizes for Pilot -- <span class="text-primary"><?php echo $pp->pp_pc3; ?></span>
                </li>
                <li class="list-group-item">
                    Pilot cut date  -- <span class="text-primary"><?php echo $pp->pp_pc4_1; ?></span>
                </li>
                <li class="list-group-item">
                    Number of gmts to be cut -- <span class="text-primary"><?php echo $pp->pp_pc4_2; ?></span>
                </li>
                <li class="list-group-item">
                    Date &amp; Time of Pilot Cut required for Production  -- <span class="text-primary"><?php echo $pp->pp_pc5_1.' / '.$pp->pp_pc5_2; ?></span>
                </li>
                <li class="list-group-item">
                    Comments  -- <span class="text-primary"><?php echo $pp->pp_pc6; ?></span>
                </li>
            </ul>
    </div>
</body>

</html>
