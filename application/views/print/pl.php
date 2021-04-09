<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pre-Production</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>

</head>
<style>
    @font-face {
        font-family: "Ubuntu";
        src: url("<?php echo base_url() ?>assets/css/pdf/Ubuntu-Regular.ttf");
    }

    @page {
       size: 7in 9.25in;
       margin: 10mm 10mm 10mm 10mm;
    }

    body { 
        /*margin: 0px; */
        /*margin-left: 30px;*/
        font-family: 'Ubuntu';
        /*margin-top: -30px;
        margin-right: : 50px;*/
    }
    /*@media print {*/
        /*.page-break {
            page-break-before: always;
        }*/
        .font-content{
            font-size: 12px;
        }
    /*}*/
</style>
<body>
    <div class="container">
            
    <h3>Pilot Appraisal Meeting Minute Result</h3>    
    <hr style="color: black;">
    <div class="row">
        <div class="col-2">Actual Pilot</div>
        <div class="col-8 text-danger"><?php echo date('d M Y', strtotime($pl->date_pl)) ?></div>
    </div>
    <div class="row">
        <div class="col-2">#Style</div>
        <div class="col-8 text-danger"><?php echo $get->style_no ?></div>
    </div><br>
    <table class="table table-bordered table-sm">
        <thead>
            <tr class="active">
                <th>Name</th>
                <th>Department</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($att as $data) { ?>
            <tr class="font-content">
                <td><?php echo $data->employee_name ?></td>
                <td><?php echo $data->department_name ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

<div class="font-content">

    <div class="page-break">                
        <h6>MASTER PATTERNS</h6>
    </div>
    <ul class="list-group">
        <li class="list-group-item">
            Only if, there were any of following pending/not resolved at/by the Pre Production Meeting <br>
            <div class="row">
                <div class="col-4">&nbsp;</div>
                <div class="col-3 text-success">Action Complete By</div>
                <div class="col-3 text-success">Comments</div>
            </div>
            <div class="row">
                <div class="col-1"><?php if($pl->pl_mp1_1 == "on"){echo '&#10003;';} ?></div>
                <div class="col-3">Contract/red seal approval/availability</div>
                <div class="col-3 text-primary"><?php echo $pl->pl_mp1_5 ?></div>
                <div class="col-3 text-primary"><?php echo $pl->pl_mp1_6 ?></div>
            </div>
            <div class="row">
                <div class="col-1"><?php if($pl->pl_mp1_2 == "on"){echo '&#10003;';} ?></div>
                <div class="col-3">Size set</div>
                <div class="col-3 text-primary"><?php echo $pl->pl_mp1_7 ?></div>
                <div class="col-3 text-primary"><?php echo $pl->pl_mp1_8 ?></div>
            </div>
            <div class="row">
                <div class="col-1"><?php if($pl->pl_mp1_3 == "on"){echo '&#10003;';} ?></div>
                <div class="col-3">Construction Sheet</div>
                <div class="col-3 text-primary"><?php echo $pl->pl_mp1_9 ?></div>
                <div class="col-3 text-primary"><?php echo $pl->pl_mp1_10 ?></div>
            </div>
            <div class="row">
                <div class="col-1"><?php if($pl->pl_mp1_4 == "on"){echo '&#10003;';} ?></div>
                <div class="col-3">"How to measure" Sheet</div>
                <div class="col-3 text-primary"><?php echo $pl->pl_mp1_11 ?></div>
                <div class="col-3 text-primary"><?php echo $pl->pl_mp1_12 ?></div>
            </div>
        </li>     
        <li class="list-group-item">
            Is there any thing to be added / amanded on the answer/ comments made at the Pre-Production meeting (including "TBC") -- <span class="text-primary"><?php echo $pl->pl_mp2_1 ?></span><br>
            <div class="row">
                <div class="col-1">If Yes,</div>
                <div class="col-2">Questions --</div>
                <div class="col-8 text-primary"><?php echo $pl->pl_mp2_2 ?></div>
            </div>
            <div class="row">
                <div class="col-1">&nbsp;</div>
                <div class="col-2">Amandement --</div>
                <div class="col-8 text-primary"><?php echo $pl->pl_mp2_3 ?></div>
            </div>
        </li>   
        <li class="list-group-item">    
            Has the sample been fitted on a live / dummy ? -- <span class="text-primary"><?php echo $pl->pl_mp3_1 ?></span><br>
            <div class="row">
                <div class="col-1">If Yes,</div>
                <div class="col-2">Comments --</div>
                <div class="col-8 text-primary"><?php echo $pl->pl_mp3_2 ?></div>
            </div>
            <div class="row">
                <div class="col-1">If Not,</div>
                <div class="col-2">Action- -</div>
                <div class="col-8 text-primary"><?php echo $pl->pl_mp3_3 ?></div>
            </div>
            <div class="row">
                <div class="col-1">&nbsp;</div>
                <div class="col-2">Action By --</div>
                <div class="col-8 text-primary"><?php echo $pl->pl_mp3_4 ?></div>
            </div>            
        </li>
        <li class="list-group-item">
            The first fit pattern is checked & authorized to procced: <br>
            By -- <span class="text-primary"><?php echo $pl->pl_mp4_1 ?></span><br>
            Date --<span class="text-primary"><?php echo $pl->pl_mp4_2 ?></span>
        </li>        
        <table class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th></th>
                    <th>Checked by</th>
                    <th>Variations</th>
                    <th>Preventive Actions Taken</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nested pattern vs Master patterns</td>
                    <td class="text-primary"><?php echo $pl->pl_mp5_1 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_mp5_2 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_mp5_3 ?></td>
                </tr>
                <tr>
                    <td>Master pattern as per the sealed gmt</td>
                    <td class="text-primary"><?php echo $pl->pl_mp5_4 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_mp5_5 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_mp5_6 ?></td>
                </tr>
            </tbody>
        </table>
        <li class="list-group-item">
            Is the sealed gmt has been made as per construction details ? -- <span class="text-primary"><?php echo $pl->pl_mp6_1 ?></span><br>
            if Not, Specify the variations -- <span class="text-primary"><?php echo $pl->pl_mp6_2 ?></span>
        </li>
        <li class="list-group-item">
            Has a washed gmt been sent to the customer ? -- <span class="text-primary"><?php echo $pl->pl_mp7_1 ?></span><br>
            <div class="row">
                <div class="col-1">If Not,</div>
                <div class="col-10">Reason --<span class="text-primary"><?php echo $pl->pl_mp7_2 ?></span></div>
            </div>
            <div class="row">
                <div class="col-1">&nbsp;</div>
                <div class="col-10">The date it would be sent --<span class="text-primary"><?php echo $pl->pl_mp7_3 ?></span></div>
            </div>
            <div class="row">
                <div class="col-1">&nbsp;</div>
                <div class="col-10">Action By --<span class="text-primary"><?php echo $pl->pl_mp7_4 ?></span></div>
            </div>
        </li>
        <li class="list-group-item">
            Is the Style file Completed ? -- <span class="text-primary"><?php echo $pl->pl_mp8_1 ?></span><br>
            <div class="row">
                <div class="col-1">If Not,</div>
                <div class="col-10">The documents that has not been included --<span class="text-primary"><?php echo $pl->pl_mp8_2 ?></span></div>
            </div>
            <div class="row">
                <div class="col-1">&nbsp;</div>
                <div class="col-10">The date it would be completed --<span class="text-primary"><?php echo $pl->pl_mp8_3 ?></span></div>
            </div>
            <div class="row">
                <div class="col-1">&nbsp;</div>
                <div class="col-10">Action By --<span class="text-primary"><?php echo $pl->pl_mp8_4 ?></span></div>
            </div>
        </li>
        <li class="list-group-item">
            The following items has approved for bulk & issued to Cutting? <br>
            <div class="row">
                <div class="col-1">&nbsp;</div>
                <div class="col-10">
                    Pattern / Placement boards for Lace Cutting -- <span class="text-primary"><?php echo $pl->pl_mp9_1 ?></span><br>
                    Pattern / Placement boards for HS -- <span class="text-primary"><?php echo $pl->pl_mp9_2 ?></span><br>
                    Pattern / Placement boards for EMB -- <span class="text-primary"><?php echo $pl->pl_mp9_3 ?></span><br>
                    Pattern / Placement boards for Screen Printing -- <span class="text-primary"><?php echo $pl->pl_mp9_4 ?></span><br>
                    Pattern / Placement boards for Moulding -- <span class="text-primary"><?php echo $pl->pl_mp9_5 ?></span><br>
                    Pattern / Placement boards for Fussing -- <span class="text-primary"><?php echo $pl->pl_mp9_6 ?></span><br>
                    Pattern / Placement boards for Lamination -- <span class="text-primary"><?php echo $pl->pl_mp9_7 ?></span><br>
                </div>
            </div>
        </li>
    </ul>    
    <ul class="list-group">
        <li class="list-group-item">
             <div class="row">
                <div class="col-1">If Not,</div>
                <div class="col-10">Action --<span class="text-primary"><?php echo $pl->pl_mp9_8 ?></span></div>
            </div>
            <div class="row">
                <div class="col-1">&nbsp;</div>
                <div class="col-10">Time --<span class="text-primary"><?php echo $pl->pl_mp9_9 ?></span></div>
            </div>
            <div class="row">
                <div class="col-1">&nbsp;</div>
                <div class="col-10">Action By --<span class="text-primary"><?php echo $pl->pl_mp9_10 ?></span></div>
            </div>
        </li>
        <li class="list-group-item">
            Comments on pilot garments -- <span class="text-primary"><?php echo $pl->pl_mp10_1 ?></span>
        </li>        
    </ul><br>
    <h6>METERIALS</h6>
    <ul class="list-group">
        <li class="list-group-item">
            Only if, there were any of followings pending / not resolved at / by the pre-production meeting <br>
            <table class="table table-condensed table-sm">
                <thead>
                    <tr>
                        <th width="1%">&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>Action Complete by</th>
                        <th>Comments</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php if($pl->pl_me1_1 == "on"){echo '&#10003;';} ?></td>
                        <td>Fabric pre-production notes availability</td>
                        <td class="text-primary"><?php echo $pl->pl_me1_5 ?></td>
                        <td class="text-primary"><?php echo $pl->pl_me1_6 ?></td>
                    </tr>
                    <tr>
                        <td><?php if($pl->pl_me1_2 == "on"){echo '&#10003;';} ?></td>
                        <td>Fabric defects card availabilty</td>
                        <td class="text-primary"><?php echo $pl->pl_me1_7 ?></td>
                        <td class="text-primary"><?php echo $pl->pl_me1_8 ?></td>
                    </tr>
                    <tr>
                        <td><?php if($pl->pl_me1_3 == "on"){echo '&#10003;';} ?></td>
                        <td>HS/Emb/Print/Fusing/Moulding/Lamination Standart & conditions</td>
                        <td class="text-primary"><?php echo $pl->pl_me1_9 ?></td>
                        <td class="text-primary"><?php echo $pl->pl_me1_10 ?></td>
                    </tr>
                    <tr>
                        <td><?php if($pl->pl_me1_4 == "on"){echo '&#10003;';} ?></td>
                        <td>Colour Shades / Fabric defects</td>
                        <td class="text-primary"><?php echo $pl->pl_me1_11 ?></td>
                        <td class="text-primary"><?php echo $pl->pl_me1_12 ?></td>
                    </tr>
                </tbody>
            </table>             
        </li>
        <li class="list-group-item">
            Is there any thing to be added / ammended on the answers / comments/made at the pre-production meeting ? -- <span class="text-primary"><?php echo $pl->pl_me2_1 ?></span><br>
            <div class="row">
                <div class="col-1">If Yes,</div>
                <div class="col-2">Questions --</div>
                <div class="col-8 text-primary"><?php echo $pl->pl_me2_2 ?></div>
            </div>
            <div class="row">
                <div class="col-1">&nbsp;</div>
                <div class="col-2">Amandement --</div>
                <div class="col-8 text-primary"><?php echo $pl->pl_me2_3 ?></div>
            </div>            
        </li>
        <li class="list-group-item">
            Fabric Technical Specifications & Compositions <br>
            <div class="row">
                <div class="col-5">Part(s)</div>
                <div class="col-7 text-primary"><?php echo $pl->pl_me3_1 ?></div>
            </div>
            <div class="row">
                <div class="col-5">Fabric Quality ( Ref # )</div>
                <div class="col-7 text-primary"><?php echo $pl->pl_me3_2 ?></div>
            </div>
            <div class="row">
                <div class="col-5">Knitting method / woven</div>
                <div class="col-7 text-primary"><?php echo $pl->pl_me3_3 ?></div>
            </div>
            <div class="row">
                <div class="col-5">Composition</div>
                <div class="col-7 text-primary"><?php echo $pl->pl_me3_5 ?></div>
            </div>
            <div class="row">
                <div class="col-5">Weight gms/m2</div>
                <div class="col-7 text-primary"><?php echo $pl->pl_me3_5 ?></div>
            </div>
            <div class="row">
                <div class="col-5">Test method & /Result</div>
                <div class="col-7 text-primary"><?php echo $pl->pl_me3_6 ?></div>
            </div>
            <div class="row">
                <div class="col-5">Stability ( Length / widthwise )</div>
                <div class="col-7 text-primary"><?php echo $pl->pl_me3_7 ?></div>
            </div>
            <div class="row">
                <div class="col-5">Composition details of wash care lable insturctlions</div>
                <div class="col-7 text-primary"><?php echo $pl->pl_me3_8 ?></div>
            </div>
            Do these two match together (Fabric composition & wash care lable instructions) ? -- <span class="text-primary"><?php echo $pl->pl_me3_9 ?></span><br>
            If Not, Action -- <span class="text-primary"><?php echo $pl->pl_me3_10 ?></span><br>
            Action By -- <span class="text-primary"><?php echo $pl->pl_me3_11 ?></span><br>
            Date -- <span class="text-primary"><?php echo $pl->pl_me3_12 ?></span>
        </li>
        <li class="list-group-item">
            Trims inspection and approval <br>
            <table class="table table-condensed table-sm">
                <thead>
                    <tr>
                        <th>&nbsp;</th>
                        <th>Approved by</th>
                        <th>Date</th>
                        <th>Comments</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Thread</td>
                        <td class="text-primary"><?php echo $pl->pl_me4_1 ?></td>
                        <td class="text-primary"><?php echo $pl->pl_me4_2 ?></td>
                        <td class="text-primary"><?php echo $pl->pl_me4_3 ?></td>
                    </tr>
                    <tr>
                        <td>Elastic</td>
                        <td class="text-primary"><?php echo $pl->pl_me4_4 ?></td>
                        <td class="text-primary"><?php echo $pl->pl_me4_5 ?></td>
                        <td class="text-primary"><?php echo $pl->pl_me4_6 ?></td>
                    </tr>
                    <tr>
                        <td>Lables</td>
                        <td class="text-primary"><?php echo $pl->pl_me4_7 ?></td>
                        <td class="text-primary"><?php echo $pl->pl_me4_8 ?></td>
                        <td class="text-primary"><?php echo $pl->pl_me4_9 ?></td>
                    </tr>
                </tbody>
            </table>
        </li>
    </ul>    
    <ul class="list-group">
        <li class="list-group-item">
            Any Special comments & / or care to be taken <br>
            <span class="text-primary"><?php echo $pl->pl_me5_1 ?></span>
        </li>
    </ul><br>
    <h6>MACHINERY</h6>
    <ul class="list-group">
        <li class="list-group-item">
            Only if, there were any of followings pending / not resolved at / by the pre-production meeting
            <table class="table table-condensed table-sm">
                <thead>
                    <tr>
                        <th width="1%">&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>Action Complete by</th>
                        <th>Comments</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php if($pl->pl_ma1_1 == "on"){echo '&#10003;';} ?></td>
                        <td>Extra/Sepcial machiunery requested</td>
                        <td class="text-primary"><?php echo $pl->pl_ma1_4 ?></td>
                        <td class="text-primary"><?php echo $pl->pl_ma1_5 ?></td>
                    </tr>
                    <tr>
                        <td><?php if($pl->pl_ma1_2 == "on"){echo '&#10003;';} ?></td>
                        <td>Extra/Sepcial needles requested</td>
                        <td class="text-primary"><?php echo $pl->pl_ma1_6 ?></td>
                        <td class="text-primary"><?php echo $pl->pl_ma1_7 ?></td>
                    </tr>
                    <tr>
                        <td><?php if($pl->pl_ma1_3 == "on"){echo '&#10003;';} ?></td>
                        <td>Attachemnts</td>
                        <td class="text-primary"><?php echo $pl->pl_ma1_8 ?></td>
                        <td class="text-primary"><?php echo $pl->pl_ma1_9 ?></td>
                    </tr>                    
                </tbody>
            </table>      
        </li>
        <li class="list-group-item">
            Have the following requirements been met in the pilot sewing
        </li>
        <table class="table table-condensed table-sm">
            <thead>
                <tr>
                    <th colspan="2">&nbsp;</th>
                    <th colspan="3" class="text-center">If Not</th>
                </tr>
                <tr>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>Reason</th>
                    <th>Action</th>
                    <th>Action by</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>The machinery set to the spec</td>
                    <td class="text-primary"><?php echo $pl->pl_ma2_1 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_ma2_6 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_ma2_7 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_ma2_8 ?></td>
                </tr>
                <tr>
                    <td>Correct machineries are used</td>
                    <td class="text-primary"><?php echo $pl->pl_ma2_2 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_ma2_9 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_ma2_10 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_ma2_11 ?></td>
                </tr>
                <tr>
                    <td>Correct attachments are used</td>
                    <td class="text-primary"><?php echo $pl->pl_ma2_3 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_ma2_12 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_ma2_13 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_ma2_14 ?></td>
                </tr>
                <tr>
                    <td>All operations have been included</td>
                    <td class="text-primary"><?php echo $pl->pl_ma2_4 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_ma2_15 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_ma2_16 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_ma2_17 ?></td>
                </tr>
                <tr>
                    <td>Correct needles are used</td>
                    <td class="text-primary"><?php echo $pl->pl_ma2_5 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_ma2_18 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_ma2_19 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_ma2_20 ?></td>
                </tr>
            </tbody>
        </table>     
        <li class="list-group-item">
            Is necessary to hire any machinery ? -- <span class="text-primary"><?php echo $pl->pl_ma3_1 ?></span><br>
            If Yes, Specify -- <span class="text-primary"><?php echo $pl->pl_ma3_2 ?></span>
        </li>
        <li class="list-group-item">
            What there any detection of needle damage ? -- <span class="text-primary"><?php echo $pl->pl_ma4_1 ?></span><br>
            If yes, Action -- <span class="text-primary"><?php echo $pl->pl_ma4_2 ?></span><br>
            Action by -- <span class="text-primary"><?php echo $pl->pl_ma4_3 ?></span>
        </li>
        <li class="list-group-item">
            Any special comment ? <br>
            <span class="text-primary"><?php echo $pl->pl_ma5_1 ?></span>
        </li><br>
        <h6>MAKE UP PILOT</h6>
        <li class="list-group-item">
            Merchants training and their perfomance        
        </li>
        <table class="table table-condensed table-sm">
            <thead>
                <tr>
                    <th colspan="2">&nbsp;</th>
                    <th colspan="2" class="text-center">If Not</th>
                </tr>
                <tr>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>                    
                    <th>Action</th>
                    <th>Action by</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>The sealed garment is shown and explained</td>
                    <td class="text-primary"><?php echo $pl->pl_mu1_1 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_mu1_5 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_mu1_6 ?></td>                    
                </tr>
                <tr>
                    <td>All of them have been issued pink cards</td>
                    <td class="text-primary"><?php echo $pl->pl_mu1_2 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_mu1_7 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_mu1_8 ?></td>                    
                </tr>
                <tr>
                    <td>Have operators reached the requried standart of the sealed gmt ?</td>
                    <td class="text-primary"><?php echo $pl->pl_mu1_3 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_mu1_9 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_mu1_10 ?></td>                    
                </tr>
                <tr>
                    <td>Can they constantly meet up to the standarts of the sealed gmt?</td>
                    <td class="text-primary"><?php echo $pl->pl_mu1_4 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_mu1_11 ?></td>
                    <td class="text-primary"><?php echo $pl->pl_mu1_12 ?></td>                    
                </tr>                
            </tbody>
        </table>  

    </ul>
    
    <ul class="list-group">
        <li class="list-group-item">
            Setting up machinery <br>
            Who was involved in setting up the machinery ? -- <span class="text-primary"><?php echo $pl->pl_mu2_1 ?></span><br>
            Have inline measurment been set on the machines ? -- <span class="text-primary"><?php echo $pl->pl_mu2_2 ?></span><br>
            If yes, What are they ? -- <span class="text-primary"><?php echo $pl->pl_mu2_3 ?></span><br>
            If Not, Action -- <span class="text-primary"><?php echo $pl->pl_mu2_4 ?></span><br>
            Action by -- <span class="text-primary"><?php echo $pl->pl_mu2_5 ?></span><br>

        </li>
        <li class="list-group-item">
            How many operation stages are there ? -- <span class="text-primary"><?php echo $pl->pl_mu3_1 ?></span>
        </li>
        <li class="list-group-item">
            <b>A standart gmt has been displayed in line signed by FM, PM Technician, TM, QAM</b> -- <span class="text-primary"><?php echo $pl->pl_mu4_1 ?></span><br>
            If Not, The Date it would be completed -- <span class="text-primary"><?php echo $pl->pl_mu4_2 ?></span><br>
            Action by -- <span class="text-primary"><?php echo $pl->pl_mu4_3 ?></span><br>
            <b>Has a sample garment been sent to the warehouse ?</b> -- <span class="text-primary"><?php echo $pl->pl_mu4_4 ?></span><br>
            If Not, The date it would be sent -- <span class="text-primary"><?php echo $pl->pl_mu4_5 ?></span><br>
            Action by -- <span class="text-primary"><?php echo $pl->pl_mu4_6 ?></span>
        </li>
        <li class="list-group-item">
            Was there any adverse fabric reaction ? -- <span class="text-primary"><?php echo $pl->pl_mu5_1 ?></span><br>
            If Yes,
            <table class="table table-condensed table-sm">
                <thead>
                    <tr>
                        <th>Shrinkage / Growing</th>
                        <th>Part name</th>
                        <th>Lengthwise</th>
                        <th>Widthwise</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-primary">
                        <td><?php echo $pl->pl_mu5_2 ?></td>
                        <td><?php echo $pl->pl_mu5_3 ?></td>
                        <td><?php echo $pl->pl_mu5_4 ?></td>
                        <td><?php echo $pl->pl_mu5_5 ?></td>
                    </tr>
                </tbody>
            </table>
        </li>
        <li class="list-group-item">
            Is it affected to the final garment measurement ? -- <span class="text-primary"><?php echo $pl->pl_mu5_6 ?></span><br>
            if Yes, Measurements -- <span class="text-primary"><?php echo $pl->pl_mu5_7 ?></span><br>
            Deviation -- <span class="text-primary"><?php echo $pl->pl_mu5_8 ?></span>
        </li>
        <li class="list-group-item">
            Total number of garments sewed in the pilot cut -- <span class="text-primary"><?php echo $pl->pl_mu6_1 ?></span><br>
            Number of garments brought to the meeting to be assesed -- <span class="text-primary"><?php echo $pl->pl_mu6_2 ?></span><br>
            Number of garments from the pilot that can be used as 1<sub>st</sub> bulk -- <span class="text-primary"><?php echo $pl->pl_mu6_3 ?></span><br>
            Is the number of gmts shippable less than the number of gmts sewed ? -- <span class="text-primary"><?php echo $pl->pl_mu6_4 ?></span><br>
            If Yes, Reason -- <span class="text-primary"><?php echo $pl->pl_mu6_5 ?></span><br>
            Preventive action taken -- <span class="text-primary"><?php echo $pl->pl_mu6_6 ?></span>
        </li>
    </ul><br>
    <h6>GARMENT APPRAISAL</h6>
    <ul class="list-group">
        <li class="list-group-item">
            Are the following correct according to the spec ?
        </li>        
        <table class="table table-condensed table-sm">
            <thead>
                <tr>
                    <th colspan="2">&nbsp;</th>
                    <th colspan="2" class="text-center">If Not</th>
                </tr>
                <tr>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>                    
                    <th>Action</th>
                    <th>Action by</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Stitches per 3cm/SPI</td>
                    <td class="text-primary"><?php echo $pl2->pl_ga1_1 ?></td>                    
                    <td class="text-primary"><?php echo $pl2->pl_ga1_8 ?></td>
                    <td class="text-primary"><?php echo $pl2->pl_ga1_9 ?></td>
                </tr>
                <tr>
                    <td>Specified bite / gauge</td>
                    <td class="text-primary"><?php echo $pl2->pl_ga1_2 ?></td>                    
                    <td class="text-primary"><?php echo $pl2->pl_ga1_10 ?></td>
                    <td class="text-primary"><?php echo $pl2->pl_ga1_11 ?></td>
                </tr>
                <tr>
                    <td>Label and UPC details against Trim Card</td>
                    <td class="text-primary"><?php echo $pl2->pl_ga1_3 ?></td>                    
                    <td class="text-primary"><?php echo $pl2->pl_ga1_12 ?></td>
                    <td class="text-primary"><?php echo $pl2->pl_ga1_13 ?></td>
                </tr>
                <tr>
                    <td>Gmt measurements</td>
                    <td class="text-primary"><?php echo $pl2->pl_ga1_4 ?></td>                    
                    <td class="text-primary"><?php echo $pl2->pl_ga1_14 ?></td>
                    <td class="text-primary"><?php echo $pl2->pl_ga1_15 ?></td>
                </tr>
                <tr>
                    <td>Gmts fit against the grades</td>
                    <td class="text-primary"><?php echo $pl2->pl_ga1_5 ?></td>                    
                    <td class="text-primary"><?php echo $pl2->pl_ga1_16 ?></td>
                    <td class="text-primary"><?php echo $pl2->pl_ga1_17 ?></td>
                </tr>
                <tr>
                    <td>Gmts when compared to the sealed gmt</td>
                    <td class="text-primary"><?php echo $pl2->pl_ga1_6 ?></td>                    
                    <td class="text-primary"><?php echo $pl2->pl_ga1_18 ?></td>
                    <td class="text-primary"><?php echo $pl2->pl_ga1_19 ?></td>
                </tr>
                <tr>
                    <td>Packing & labels</td>
                    <td class="text-primary"><?php echo $pl2->pl_ga1_7 ?></td>                    
                    <td class="text-primary"><?php echo $pl2->pl_ga1_20 ?></td>
                    <td class="text-primary"><?php echo $pl2->pl_ga1_21 ?></td>
                </tr>                
            </tbody>
        </table>                
    </ul>    
    <ul class="list-group">
        <li class="list-group-item">
            Was there any noticeable difference in the gmt after washing ? -- <span class="text-primary"><?php echo $pl2->pl_ga2_1 ?></span><br>
            If Yes, Difference -- <span class="text-primary"><?php echo $pl2->pl_ga2_2 ?></span><br>
            Action -- <span class="text-primary"><?php echo $pl2->pl_ga2_3 ?></span><br>
            Action by -- <span class="text-primary"><?php echo $pl2->pl_ga2_4 ?></span>
        </li>        
        <li class="list-group-item">
            Is there any job/trim/accesory not on the pilot gmt which should be on the customer gmt ? -- <span class="text-primary"><?php echo $pl2->pl_ga3_1 ?></span><br>
            if Yes, Specify -- <span class="text-primary"><?php echo $pl2->pl_ga3_2 ?></span>
        </li>
        
            <table class="table table-bordered table-sm">
              <tr style="font-weight: bold;">
                <td colspan="2" rowspan="2">Consumptions</td>
                <td rowspan="2">Costed<br>Consumption</td>
                <td rowspan="2">Actual<br>Consumption</td>
                <td colspan="2">If, actual consumption > Costed consumption</td>
              </tr>
              <tr style="font-weight: bold;">
                <td>Preventive action</td>
                <td>Action by</td>
              </tr>
              <tr>
                <td rowspan="2">Elastic</td>
                <td class="text-primary"><?php echo $pl2->pl_ga4_1 ?></td>
                <td class="text-primary"><?php echo $pl2->pl_ga4_2 ?></td>
                <td class="text-primary"><?php echo $pl2->pl_ga4_3 ?></td>
                <td class="text-primary"><?php echo $pl2->pl_ga4_4 ?></td>
                <td class="text-primary"><?php echo $pl2->pl_ga4_5 ?></td>
              </tr>
              <tr>
                <td class="text-primary"><?php echo $pl2->pl_ga4_6 ?></td>
                <td class="text-primary"><?php echo $pl2->pl_ga4_7 ?></td>
                <td class="text-primary"><?php echo $pl2->pl_ga4_8 ?></td>
                <td class="text-primary"><?php echo $pl2->pl_ga4_9 ?></td>
                <td class="text-primary"><?php echo $pl2->pl_ga4_10 ?></td>
              </tr>
              <tr>
                <td rowspan="2">Trims</td>
                <td class="text-primary"><?php echo $pl2->pl_ga4_11 ?></td>
                <td class="text-primary"><?php echo $pl2->pl_ga4_12 ?></td>
                <td class="text-primary"><?php echo $pl2->pl_ga4_13 ?></td>
                <td class="text-primary"><?php echo $pl2->pl_ga4_14 ?></td>
                <td class="text-primary"><?php echo $pl2->pl_ga4_15 ?></td>
              </tr>
              <tr>
                <td class="text-primary"><?php echo $pl2->pl_ga4_16 ?></td>
                <td class="text-primary"><?php echo $pl2->pl_ga4_17 ?></td>
                <td class="text-primary"><?php echo $pl2->pl_ga4_18 ?></td>
                <td class="text-primary"><?php echo $pl2->pl_ga4_19 ?></td>
                <td class="text-primary"><?php echo $pl2->pl_ga4_20 ?></td>
              </tr>
            </table>
        <li class="list-group-item">
            Are any confident that the production could progress without any Technician issues coming up in the bulk production ? -- <span class="text-primary"><?php echo $pl2->pl_ga5_1 ?></span>
        </li>
        <li class="list-group-item">
            Any special comment ? <br>
            <span class="text-primary"><?php echo $pl2->pl_ga6_1 ?></span>
        </li>
    </ul><br>
    <h6>CUTTING</h6>
    <ul class="list-group">
        <li class="list-group-item">
            Only if, there were any of following pending/not resolved at/by the Pre Production Meeting   
        </li>
        <table class="table table-condensed table-sm">
                <thead>
                    <tr>
                        <th width="1%">&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>Action Complete by</th>
                        <th>Comments</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php if($pl2->pl_cu1_1 == "on"){echo '&#10003;';} ?></td>
                        <td>Max. Marker Length</td>
                        <td class="text-primary"><?php echo $pl2->pl_cu1_4 ?></td>
                        <td class="text-primary"><?php echo $pl2->pl_cu1_5 ?></td>
                    </tr>
                    <tr>
                        <td><?php if($pl2->pl_cu1_2 == "on"){echo '&#10003;';} ?></td>
                        <td>Max. Ply height</td>
                        <td class="text-primary"><?php echo $pl2->pl_cu1_6 ?></td>
                        <td class="text-primary"><?php echo $pl2->pl_cu1_7 ?></td>
                    </tr>
                    <tr>
                        <td><?php if($pl2->pl_cu1_3 == "on"){echo '&#10003;';} ?></td>
                        <td>Cutting method</td>
                        <td class="text-primary"><?php echo $pl2->pl_cu1_8 ?></td>
                        <td class="text-primary"><?php echo $pl2->pl_cu1_9 ?></td>
                    </tr>                  
                </tbody>
            </table>  
            <li class="list-group-item">
                Pilot Cut
                <div class="row">
                    <div class="col-2">Cut Date</div>
                    <div class="col-3 text-primary"><?php echo $pl2->pl_cu2_1 ?></div>
                    <div class="col-2">No. of Gmts Cut</div>
                    <div class="col-3 text-primary"><?php echo $pl2->pl_cu2_2 ?></div>
                </div>
                <div class="row">
                    <div class="col-2">Docket No.</div>
                    <div class="col-3 text-primary"><?php echo $pl2->pl_cu2_3 ?></div>
                    <div class="col-2">Marker No.</div>
                    <div class="col-3 text-primary"><?php echo $pl2->pl_cu2_4 ?></div>
                </div>
                <div class="row">
                    <div class="col-2">Ply depth</div>
                    <div class="col-3 text-primary"><?php echo $pl2->pl_cu2_5 ?></div>
                    <div class="col-2">Relaxatioan</div>
                    <div class="col-3 text-primary"><?php echo $pl2->pl_cu2_6 ?></div>
                </div>
            </li>
            <li class="list-group-item">
                Where there any difficult pieces when cutting ? -- <span class="text-primary"><?php echo $pl2->pl_cu3_1 ?></span><br>
                If Yes, Specify -- <span class="text-primary"><?php echo $pl2->pl_cu3_2 ?></span><br>
                Action taken to overcome them -- <span class="text-primary"><?php echo $pl2->pl_cu3_3 ?></span><br>
                Action need to solve them from Lab/Technical -- <span class="text-primary"><?php echo $pl2->pl_cu3_4 ?></span><br>
            </li>
            <li class="list-group-item">
                Fabric spec width -- <span class="text-primary"><?php echo $pl2->pl_cu4_1 ?></span><br>
                Fabric actual width -- <span class="text-primary"><?php echo $pl2->pl_cu4_2 ?></span><br>
                If actual width < spec width, Action -- <span class="text-primary"><?php echo $pl2->pl_cu4_3 ?></span><br>
                Action By -- <span class="text-primary"><?php echo $pl2->pl_cu4_4 ?></span><br>                
            </li><br>
            <table class="table table-bordered table-sm">
                <tr>
                    <th colspan="3">Fabric & Lace Consumption</th>
                    <th colspan="2">If, actual con. > Costed con.</th>
                </tr>
                <tr style="font-weight: bold;">
                    <td></td>
                    <td>Costed con.</td>
                    <td>Actual con.</td>
                    <td>Preventive Action</td>
                    <td>Action By</td>
                </tr>
                <tr>
                    <td>Fabric</td>
                    <td class="text-primary"><?php echo $pl2->pl_cu5_1 ?></td>
                    <td class="text-primary"><?php echo $pl2->pl_cu5_2 ?></td>
                    <td class="text-primary"><?php echo $pl2->pl_cu5_3 ?></td>
                    <td class="text-primary"><?php echo $pl2->pl_cu5_4 ?></td>
                </tr>
                <tr>
                    <td>Lace</td>
                    <td class="text-primary"><?php echo $pl2->pl_cu5_5 ?></td>
                    <td class="text-primary"><?php echo $pl2->pl_cu5_6 ?></td>
                    <td class="text-primary"><?php echo $pl2->pl_cu5_7 ?></td>
                    <td class="text-primary"><?php echo $pl2->pl_cu5_8 ?></td>
                </tr>
            </table>
        </ul>
        <br>   
        <ul class="list-group">
            <li class="list-group-item">
                Was there any adverse reacton on Fabric, Lace(including when H/S, Printing, Fussing ) ? -- <span class="text-primary"><?php echo $pl2->pl_cu6_1 ?></span><br>
                If Yes, <br>
                <table class="table table-condensed table-sm">
                    <thead>
                        <tr>
                            <th>Shrinkage / Growing</th>
                            <th>Part name</th>
                            <th>Lengthwise</th>
                            <th>Widthwise</th>
                        </tr>   
                    </thead>
                    <tbody>
                        <tr class="text-primary">
                            <td><?php echo $pl2->pl_cu6_2 ?></td>
                            <td><?php echo $pl2->pl_cu6_3 ?></td>
                            <td><?php echo $pl2->pl_cu6_4 ?></td>
                            <td><?php echo $pl2->pl_cu6_5 ?></td>
                        </tr>
                    </tbody>
                </table>
            </li>
            <li class="list-group-item">
                Can the face & reserve side of the fabric be identified ? -- <span class="text-primary"><?php echo $pl2->pl_cu7_1 ?></span><br>
                if Yes, How ? -- <span class="text-primary"><?php echo $pl2->pl_cu7_2 ?></span><br>
                Action need from Lab -- <span class="text-primary"><?php echo $pl2->pl_cu7_3 ?></span><br>
                Numbering -- <span class="text-primary"><?php echo $pl2->pl_cu7_4 ?></span>
            </li>
            <li class="list-group-item">
                Does the fabric have to be face up ? -- <span class="text-primary"><?php echo $pl2->pl_cu8_1 ?></span><br>
                If Not, Reason -- <span class="text-primary"><?php echo $pl2->pl_cu8_2 ?></span>
            </li>
            <li class="list-group-item">
                What are the priority points that have been indentified? -- <span class="text-primary"><?php echo $pl2->pl_cu9_1 ?></span>
            </li>
            <li class="list-group-item">
                What are the critical points on the marker that have been discussed ? -- <span class="text-primary"><?php echo $pl2->pl_cu10_1 ?></span>
            </li>
            <li class="list-group-item">
                Any problems encountered with the pattern / placement boards ? -- <span class="text-primary"><?php echo $pl2->pl_cu11_1 ?></span><br>
                if Yes, Specify -- <span class="text-primary"><?php echo $pl2->pl_cu11_2 ?></span><br>
                Action -- <span class="text-primary"><?php echo $pl2->pl_cu11_3 ?></span><br>
                Action by -- <span class="text-primary"><?php echo $pl2->pl_cu11_4 ?></span>
            </li>
            <li class="list-group-item">
                Have you handle this fabric quality before ? -- <span class="text-primary"><?php echo $pl2->pl_cu12_1 ?></span><br>
                if Yes, What style ? -- <span class="text-primary"><?php echo $pl2->pl_cu12_2 ?></span><br>
                What experience would you need to look at ? -- <span class="text-primary"><?php echo $pl2->pl_cu12_3 ?></span><br>                
            </li>
    </ul><br>   
    <!-- <h6>MOULDING (IF ANY)</h6>
    <ul class="list-group">
        <li class="list-group-item">
            Only if, there were any of following pending/not resolved at/by the Pre Production Meeting            
        </li>        
        <table class="table table-condensed table-sm">
            <thead>
                <tr>
                    <th width="1%">&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>Action Complete by</th>
                    <th>Comments</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php if($pl2->pl_mo1_1 == "on"){echo '&#10003;';} ?></td>
                    <td>Mould type/Shape/Size/Cup Depth</td>
                    <td class="text-primary"><?php echo $pl2->pl_mo1_4 ?></td>
                    <td class="text-primary"><?php echo $pl2->pl_mo1_5 ?></td>
                </tr>
                <tr>
                    <td><?php if($pl2->pl_mo1_2 == "on"){echo '&#10003;';} ?></td>
                    <td>Setting temp. /Time</td>
                    <td class="text-primary"><?php echo $pl2->pl_mo1_6 ?></td>
                    <td class="text-primary"><?php echo $pl2->pl_mo1_7 ?></td>
                </tr>
                <tr>
                    <td><?php if($pl2->pl_mo1_3 == "on"){echo '&#10003;';} ?></td>
                    <td>Ply height/single or double moulding</td>
                    <td class="text-primary"><?php echo $pl2->pl_mo1_8 ?></td>
                    <td class="text-primary"><?php echo $pl2->pl_mo1_9 ?></td>
                </tr>                  
            </tbody>
        </table>  
        <li class="list-group-item">
            Specify any problem encountered (if any) in following areas
            <table class="table table-condensed table-sm">
                <thead>
                    <tr>
                        <th>Area</th>
                        <th>Problem</th>
                        <th>Action</th>
                        <th>Action by</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Moulding to the specs set</td>
                        <td class="text-primary"><?php echo $pl2->pl_mo2_1 ?></td>
                        <td class="text-primary"><?php echo $pl2->pl_mo2_2 ?></td>
                        <td class="text-primary"><?php echo $pl2->pl_mo2_3 ?></td>
                    </tr>
                    <tr>
                        <td>Adversed reactions* on fabric</td>
                        <td class="text-primary"><?php echo $pl2->pl_mo2_4 ?></td>
                        <td class="text-primary"><?php echo $pl2->pl_mo2_5 ?></td>
                        <td class="text-primary"><?php echo $pl2->pl_mo2_6 ?></td>
                    </tr>
                    <tr>
                        <td>Cutting the moulded panels</td>
                        <td class="text-primary"><?php echo $pl2->pl_mo2_7 ?></td>
                        <td class="text-primary"><?php echo $pl2->pl_mo2_8 ?></td>
                        <td class="text-primary"><?php echo $pl2->pl_mo2_9 ?></td>
                    </tr>
                    <tr>
                        <td>Others</td>
                        <td class="text-primary"><?php echo $pl2->pl_mo2_10 ?></td>
                        <td class="text-primary"><?php echo $pl2->pl_mo2_11 ?></td>
                        <td class="text-primary"><?php echo $pl2->pl_mo2_12 ?></td>
                    </tr>
                </tbody>
            </table>
            *Discoloration, bleaching, heavy shrinkage due to heat, bubbing, fabric tearing
        </li>
    </ul><br> -->
    <div>                
        <h6>WORK STUDY</h6>
    </div>        
    <ul class="list-group">
        <li class="list-group-item">
            SMV of the garment -- <span class="text-primary"><?php echo $pl2->pl_ws1_6 ?></span><br>
            Has the planned efficiency been achived by machinist ? -- <span class="text-primary"><?php echo $pl2->pl_ws1_1 ?></span>
            <div class="row">
                <div class="col-1 text-center">If Not</div>
                <div class="col-10">
                    Preventive action taken -- <span class="text-primary"><?php echo $pl2->pl_ws1_2 ?></span><br>
                    Action By -- <span class="text-primary"><?php echo $pl2->pl_ws1_3 ?></span><br>
                    Extra std hours required to complete of the order -- <span class="text-primary"><?php echo $pl2->pl_ws1_4 ?></span><br>
                    Action Plan to catch back -- <span class="text-primary"><?php echo $pl2->pl_ws1_5 ?></span>
                </div>
            </div>

        </li>        
        <li class="list-group-item">
            Is there any proposal or method study reduce the SMV ? -- <span class="text-primary"><?php echo $pl2->pl_ws2_1 ?></span><br>
            if Yes, Specify -- <span class="text-primary"><?php echo $pl2->pl_ws2_2 ?></span>      
        </li>
       <!--  <li class="list-group-item">
            Layout finalized ? -- <span class="text-primary"><?php echo $pl2->pl_ws3_1 ?></span>
        </li>
        <li class="list-group-item">
            Yamazumi ? -- <span class="text-primary"><?php echo $pl2->pl_ws4_1 ?></span>
        </li>
        <li class="list-group-item">
            Team member allocation ? -- <span class="text-primary"><?php echo $pl2->pl_ws5_1 ?></span>
        </li>
        <li class="list-group-item">
            Team member skill chart ? -- <span class="text-primary"><?php echo $pl2->pl_ws6_1 ?></span>
        </li> -->
        <li class="list-group-item">
            Any special comments <br> 
            <span class="text-primary"><?php echo $pl2->pl_ws7_1 ?></span>
        </li>
    </ul><br>
    <h6>QUALITY ASSURANCE</h6>
    <ul class="list-group">
        <li class="list-group-item">
            Are the pilot garments shippable ? -- <span class="text-primary"><?php echo $pl2->pl_qa1_1 ?></span>
            <div class="row">
                <div class="col-1 text-center">If Not</div>
                <div class="col-10">
                    Reason -- <span class="text-primary"><?php echo $pl2->pl_qa1_2 ?></span><br>
                    Action required -- <span class="text-primary"><?php echo $pl2->pl_qa1_3 ?></span><br>
                    Action by -- <span class="text-primary"><?php echo $pl2->pl_qa1_4 ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-1 text-center">If Yes</div>
                <div class="col-10">
                    What are the comments on pilot garments appraised ? -- <span class="text-primary"><?php echo $pl2->pl_qa1_5 ?></span><br>      
                </div>
            </div>
        </li>        
        <li class="list-group-item">
            Is the Process Capability Chart Available ? -- <span class="text-primary"><?php echo $pl2->pl_qa2_1 ?></span><br>     
            If Yes, What are the comments  ? -- <span class="text-primary"><?php echo $pl2->pl_qa2_2 ?></span><br>      
            <div class="row">
                <div class="col-1">If Not</div>
                <div class="col-10">
                    Reissuing Date -- <span class="text-primary"><?php echo $pl2->pl_qa2_3 ?></span><br>      
                    Action By -- <span class="text-primary"><?php echo $pl2->pl_qa2_4 ?></span><br>      
                </div>
            </div>
        </li>
    </ul><br>
    <h6>PRESENTATION CHECK / MERCHANDISING</h6>
    <ul class="list-group">
        <li class="list-group-item">
           Only if, there were any of followings pending / not resolved / by the Pre-Production meeting.
        </li>
        <table class="table table-condensed table-sm">
            <thead>
                <tr>
                    <th width="1%">&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>Action Complete by</th>
                    <th>Comments</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php if($pl2->pl_pc1_1 == "on"){echo '&#10003;';} ?></td>
                    <td>Complete Trim Card Received for all colours</td>
                    <td class="text-primary"><?php echo $pl2->pl_pc1_5 ?></td>
                    <td class="text-primary"><?php echo $pl2->pl_pc1_6 ?></td>
                </tr>
                <tr>
                    <td><?php if($pl2->pl_pc1_2 == "on"){echo '&#10003;';} ?></td>
                    <td>Discrepancies between trim card and approved trims</td>
                    <td class="text-primary"><?php echo $pl2->pl_pc1_7 ?></td>
                    <td class="text-primary"><?php echo $pl2->pl_pc1_8 ?></td>
                </tr>
                <tr>
                    <td><?php if($pl2->pl_pc1_3 == "on"){echo '&#10003;';} ?></td>
                    <td>Document Availablitiy MPO, BOM, LOF</td>
                    <td class="text-primary"><?php echo $pl2->pl_pc1_9 ?></td>
                    <td class="text-primary"><?php echo $pl2->pl_pc1_10 ?></td>
                </tr>                  
                <tr>
                    <td><?php if($pl2->pl_pc1_4 == "on"){echo '&#10003;';} ?></td>
                    <td>Packing method & standart</td>
                    <td class="text-primary"><?php echo $pl2->pl_pc1_11 ?></td>
                    <td class="text-primary"><?php echo $pl2->pl_pc1_12 ?></td>
                </tr>                              </tbody>
        </table>   
    </ul>
        
    <ul class="list-group">
        <li class="list-group-item">
            Are fabrics & trims available for all colours ? -- <span class="text-primary"><?php echo $pl2->pl_pc2_1 ?></span><br>
            If Not, <br>
            <table class="table table-condensed table-sm">
                <thead>
                    <tr>
                        <th>Item & Colour</th>
                        <th>Receive Date</th>
                        <th>Action By</th>
                        <th>Comments</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-primary"><?php echo $pl2->pl_pc2_2 ?></td>
                        <td class="text-primary"><?php echo $pl2->pl_pc2_3 ?></td>
                        <td class="text-primary"><?php echo $pl2->pl_pc2_4 ?></td>
                        <td class="text-primary"><?php echo $pl2->pl_pc2_5 ?></td>
                    </tr>
                    <tr>
                        <td class="text-primary"><?php echo $pl2->pl_pc2_6 ?></td>
                        <td class="text-primary"><?php echo $pl2->pl_pc2_7 ?></td>
                        <td class="text-primary"><?php echo $pl2->pl_pc2_8 ?></td>
                        <td class="text-primary"><?php echo $pl2->pl_pc2_9 ?></td>
                    </tr>
                </tbody>
            </table>
        </li>  <br>   
        <table class="table table-bordered table-sm">      
            <tr>
                <td colspan="2" rowspan="2" style="vertical-align: middle;"><b>Are the followings correct according to the spec ?</b></td>
                <td colspan="2">If Not,</td>
            </tr>
            <tr>
                <td>Action</td>
                <td>Action by</td>
            </tr>
            <tr>
                <td>Bag/Box/Packlabel</td>
                <td class="text-primary"><?php echo $pl2->pl_pc3_1 ?></td>
                <td class="text-primary"><?php echo $pl2->pl_pc3_5 ?></td>
                <td class="text-primary"><?php echo $pl2->pl_pc3_6 ?></td>
            </tr>
            <tr>
                <td>UPC Number</td>
                <td class="text-primary"><?php echo $pl2->pl_pc3_2 ?></td>
                <td class="text-primary"><?php echo $pl2->pl_pc3_7 ?></td>
                <td class="text-primary"><?php echo $pl2->pl_pc3_8 ?></td>
            </tr>
            <tr>
                <td>Garment Label</td>
                <td class="text-primary"><?php echo $pl2->pl_pc3_3 ?></td>
                <td class="text-primary"><?php echo $pl2->pl_pc3_9 ?></td>
                <td class="text-primary"><?php echo $pl2->pl_pc3_10 ?></td>
            </tr>
            <tr>
                <td>Display Criterion</td>
                <td class="text-primary"><?php echo $pl2->pl_pc3_4 ?></td>
                <td class="text-primary"><?php echo $pl2->pl_pc3_11 ?></td>
                <td class="text-primary"><?php echo $pl2->pl_pc3_12 ?></td>
            </tr>
        </table>        
    </ul><br>
    <h6>CONFIRM BULK CUT</h6>
    <ul class="list-group">
        <li class="list-group-item">
            Confirm Bulk Cut ? -- <span class="text-primary"><?php echo $pl2->pl_cb1 ?></span>
            <div class="row">
                <div class="col-2">If Yes,</div>
                <div class="col-9">
                    Issuing of Cutting Instructions for all colours-Date & Time -- <span class="text-primary"><?php echo $pl2->pl_cb2.' / '.$pl2->pl_cb3 ?></span><br>
                    No of garments for 1<sup>st</sup> bulk -- <span class="text-primary"><?php echo $pl2->pl_cb4.' '.$pl2->pl_cb5 ?></span><br>
                    Cute Date -- <span class="text-primary"><?php echo $pl2->pl_cb6 ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-2">If Not,</div>
                <div class="col-9">
                    Go for second pilot on -- <span class="text-primary"><?php echo $pl2->pl_cb7 ?></span><br>
                    Review Date -- <span class="text-primary"><?php echo $pl2->pl_cb8 ?></span>
                </div>
            </div>

        </li>
        
    </ul>

        
</div>



</div>
</body>

</html>
<script>
    window.print();
</script>