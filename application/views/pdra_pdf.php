<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PPA Document of DRA & PDRA</title>
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
        .page-break {
            page-break-before: always;
        }
        .font-content{
            font-size: 11px;
        }
    /*}*/
</style>
<body>
    <h4 class="text-center">PPA Document of DRA & PDRA</h4>
    <hr>
    <div class="row">
        <div class="col-xs-5 text-center">
            <div class="alert alert-success">                
                Customer : <span class="text-primary"><?php echo $get->customer_name ?></span>
            </div>
        </div>        
        <div class="col-xs-6 text-center">
            <div class="alert alert-success">                
                Style No. : <span class="text-primary"><?php echo $get->style_no ?></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-1">Description</div>
        <div class="col-xs-8">: <span class="text-primary"><?php echo $pdra->description ?></span></div>
    </div>
    <div class="row">
        <div class="col-xs-1">Remarks</div>
        <div class="col-xs-8">: <span class="text-primary"><?php echo $pdra->remarks ?></span> </div>
    </div>    
    <!-- <ul class="list-group">
        <li class="list-group-item list-group-item-success">General Information</li>
    </ul> -->
    <button type="button" class="btn btn-default btn-sm" style="width: 100%">General Information</button><br>
    <div class="row">
        <div class="col-xs-2">Plant/Section</div>
        <div class="col-xs-3">: <span class="text-primary"><?php echo $pdra->input1_1 ?></span></div>
        <div class="col-xs-2">Season</div>
        <div class="col-xs-4">: <span class="text-primary"><?php echo $pdra->input1_2 ?></span></div>
    </div>
    <div class="row">
        <div class="col-xs-2">1<sup>st</sup> S/O Size Range</div>
        <div class="col-xs-8">: <span class="text-primary"><?php echo $pdra->input1_3 ?></span></div>        
    </div>
    <div class="row">
        <div class="col-xs-2">1<sup>st</sup> S/O Quantity</div>
        <div class="col-xs-8">: <span class="text-primary"><?php echo $pdra->input1_4 ?></span></div>        
    </div>
    <div class="row">
        <div class="col-xs-2">1<sup>st</sup> S/O Colour Ways</div>
        <div class="col-xs-8">: <span class="text-primary"><?php echo $pdra->input1_5 ?></span></div>        
    </div><br>
    <!-- <ul class="list-group">
        <li class="list-group-item list-group-item-success">Style Critical Path</li>
    </ul> -->
    <button type="button" class="btn btn-default btn-sm" style="width: 100%">Style Critical Path</button><br>

    <table class="table table-bordered" style="font-size: 10px;">        
        <tbody>
            <tr class="text-center">
                <td colspan="2">DRA</td>
                <td colspan="2">PDRA</td>
                <td colspan="2">Provisional/TLT</td>
                <td colspan="2">FI</td>
                <td colspan="2">TP</td>
                <td colspan="2">PP</td>
            </tr>
            <tr>
                <td>Planned</td>
                <td>Actual</td>
                <td>Planned</td>
                <td>Actual</td>
                <td>Planned</td>
                <td>Actual</td>
                <td>Planned</td>
                <td>Actual</td>
                <td>Planned</td>
                <td>Actual</td>
                <td>Planned</td>
                <td>Actual</td>                
            </tr>
            <tr class="text-primary">
                <td><?php echo date('d/M', strtotime($pdra->date1)) ?></td>
                <td><?php echo date('d/M', strtotime($pdra->date2)) ?></td>
                <td><?php echo date('d/M', strtotime($pdra->date3)) ?></td>
                <td><?php echo date('d/M', strtotime($pdra->date4)) ?></td>
                <td><?php echo date('d/M', strtotime($pdra->date5)) ?></td>
                <td><?php echo date('d/M', strtotime($pdra->date6)) ?></td>
                <td><?php echo date('d/M', strtotime($pdra->date7)) ?></td>
                <td><?php echo date('d/M', strtotime($pdra->date8)) ?></td>
                <td><?php echo date('d/M', strtotime($pdra->date9)) ?></td>
                <td><?php echo date('d/M', strtotime($pdra->date10)) ?></td>
                <td><?php echo date('d/M', strtotime($pdra->date11)) ?></td>
                <td><?php echo date('d/M', strtotime($pdra->date12)) ?></td>                
            </tr>
        </tbody>
    </table>
    <!-- <ul class="list-group">
        <li class="list-group-item list-group-item-success">PPA Core Team</li>
    </ul> -->
    <button type="button" class="btn btn-default btn-sm" style="width: 100%">PPA Core Team</button><br>    
    <div class="row">
        <div class="col-xs-5 text-center">Development</div>        
        <div class="col-xs-6 text-center">Manufacturing</div>
    </div>    
    <div class="row">
        <div class="col-xs-2">Pattern Technologist</div>
        <div class="col-xs-3">: <span class="text-primary"><?php echo $pdra->input3_1 ?></span></div>
        <div class="col-xs-2">PPA Champion</div>
        <div class="col-xs-4">: <span class="text-primary"><?php echo $pdra->input3_2 ?></span></div>
    </div>
    <div class="row">
        <div class="col-xs-2">Sewing Technisian</div>
        <div class="col-xs-3">: <span class="text-primary"><?php echo $pdra->input3_3 ?></span></div>
        <div class="col-xs-2">Industrial Engineering</div>
        <div class="col-xs-4">: <span class="text-primary"><?php echo $pdra->input3_4 ?></span></div>
    </div>
    <div class="row">
        <div class="col-xs-2">Fabric Technologist</div>
        <div class="col-xs-3">: <span class="text-primary"><?php echo $pdra->input3_5 ?></span></div>
        <div class="col-xs-2">Technical</div>
        <div class="col-xs-4">: <span class="text-primary"><?php echo $pdra->input3_6 ?></span></div>
    </div>
    <div class="row">
        <div class="col-xs-2">Product Engineering</div>
        <div class="col-xs-3">: <span class="text-primary"><?php echo $pdra->input3_7 ?></span></div>
        <div class="col-xs-2">Group Leader</div>
        <div class="col-xs-4">: <span class="text-primary"><?php echo $pdra->input3_8 ?></span></div>
    </div>
    <div class="row">
        <div class="col-xs-2">Development Merchant</div>
        <div class="col-xs-3">: <span class="text-primary"><?php echo $pdra->input3_9 ?></span></div>
        <div class="col-xs-2">* Machine Engineering</div>
        <div class="col-xs-4">: <span class="text-primary"><?php echo $pdra->input3_10 ?></span></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-3"></div>
        <div class="col-xs-2">* Lab & Inspection</div>
        <div class="col-xs-4">: <span class="text-primary"><?php echo $pdra->input3_11 ?></span></div>
    </div><br>
    <!-- <ul class="list-group">
        <li class="list-group-item list-group-item-success">Prerequisites of DRA Meeting</li>
    </ul> -->
    <button type="button" class="btn btn-default btn-sm" style="width: 100%">Prerequisites of DRA Meeting</button><br>        
    <div class="row">
        <div class="col-xs-5">Sketch with details available?</div>        
        <div class="col-xs-1 text-primary"><?php echo $pdra->rad1 ?></div>
        <div class="col-xs-5 text-danger">: <?php echo $pdra->input4_1 ?></div>
    </div>
    <div class="row">
        <div class="col-xs-5">Bench/block/reference sample available?</div>        
        <div class="col-xs-1 text-primary"><?php echo $pdra->rad2 ?></div>
        <div class="col-xs-5 text-danger">: <?php echo $pdra->input4_2 ?></div>
    </div>
    <div class="row">
        <div class="col-xs-5">Provisional construction sheet available ?</div>        
        <div class="col-xs-1 text-primary"><?php echo $pdra->rad3 ?></div>
        <div class="col-xs-5 text-danger">: <?php echo $pdra->input4_3 ?></div>
    </div>
    <div class="row">
        <div class="col-xs-5">Latest BOM available ?</div>        
        <div class="col-xs-1 text-primary"><?php echo $pdra->rad4 ?></div>
        <div class="col-xs-5 text-danger">: <?php echo $pdra->input4_4 ?></div>
    </div>
    <div class="row">
        <div class="col-xs-5">Material/ trim & accessories information available?</div>        
        <div class="col-xs-1 text-primary"><?php echo $pdra->rad5 ?></div>
        <div class="col-xs-5 text-danger">: <?php echo $pdra->input4_5 ?></div>
    </div>
    <div class="row">
        <div class="col-xs-5">Machine & attachment information available?</div>        
        <div class="col-xs-1 text-primary"><?php echo $pdra->rad6 ?></div>
        <div class="col-xs-5 text-danger">: <?php echo $pdra->input4_6 ?></div>
    </div>
    <div class="row">
        <div class="col-xs-5">Embelishment/graphic sample & details available?</div>        
        <div class="col-xs-1 text-primary"><?php echo $pdra->rad7 ?></div>
        <div class="col-xs-5 text-danger">: <?php echo $pdra->input4_7 ?></div>
    </div>
    <div class="row">
        <div class="col-xs-5">Molding heads, parameters & details available?</div>        
        <div class="col-xs-1 text-primary"><?php echo $pdra->rad8 ?></div>
        <div class="col-xs-5 text-danger">: <?php echo $pdra->input4_8 ?></div>
    </div>
    <div class="row">
        <div class="col-xs-5">Provisional SMV available?</div>        
        <div class="col-xs-1 text-primary"><?php echo $pdra->rad9 ?></div>
        <div class="col-xs-5 text-danger">: <?php echo $pdra->input4_9 ?></div>
    </div><br>
    <!-- <ul class="list-group">
        <li class="list-group-item list-group-item-success">Prerequisites of PDRA Meeting</li>
    </ul> -->
    <button type="button" class="btn btn-default btn-sm" style="width: 100%">Prerequisites of PDRA Meeting</button><br>            
    <div class="row">
        <div class="col-xs-5">Latest development sample with comments available ?</div>        
        <div class="col-xs-1 text-primary"><?php echo $pdra->rad10 ?></div>
        <div class="col-xs-5 text-danger">: <?php echo $pdra->input5_1 ?></div>
    </div>
    <div class="row">
        <div class="col-xs-5">Latest construction sheet available ?</div>        
        <div class="col-xs-1 text-primary"><?php echo $pdra->rad11 ?></div>
        <div class="col-xs-5 text-danger">: <?php echo $pdra->input5_2 ?></div>
    </div>
    <div class="row">
        <div class="col-xs-5">Latest measurement spec. & how to measure available?</div>        
        <div class="col-xs-1 text-primary"><?php echo $pdra->rad12 ?></div>
        <div class="col-xs-5 text-danger">: <?php echo $pdra->input5_3 ?></div>
    </div>
    <div class="row">
        <div class="col-xs-5">Latest BOM available ?</div>        
        <div class="col-xs-1 text-primary"><?php echo $pdra->rad13 ?></div>
        <div class="col-xs-5 text-danger">: <?php echo $pdra->input5_4 ?></div>
    </div>
    <div class="row">
        <div class="col-xs-5">Material/ trim & accessories information available?</div>        
        <div class="col-xs-1 text-primary"><?php echo $pdra->rad14 ?></div>
        <div class="col-xs-5 text-danger">: <?php echo $pdra->input5_5 ?></div>
    </div>
    <div class="row">
        <div class="col-xs-5">Machine & attachment information available?</div>        
        <div class="col-xs-1 text-primary"><?php echo $pdra->rad15 ?></div>
        <div class="col-xs-5 text-danger">: <?php echo $pdra->input5_6 ?></div>
    </div>
    <div class="row">
        <div class="col-xs-5">Embelishment/graphic sample & details available?</div>        
        <div class="col-xs-1 text-primary"><?php echo $pdra->rad16 ?></div>
        <div class="col-xs-5 text-danger">: <?php echo $pdra->input5_7 ?></div>
    </div>
    <div class="row">
        <div class="col-xs-5">Molding heads, parameters & details available?</div>        
        <div class="col-xs-1 text-primary"><?php echo $pdra->rad17 ?></div>
        <div class="col-xs-5 text-danger">: <?php echo $pdra->input5_8 ?></div>
    </div>
    <div class="row">
        <div class="col-xs-5">Updated SMV available?</div>        
        <div class="col-xs-1 text-primary"><?php echo $pdra->rad18 ?></div>
        <div class="col-xs-5 text-danger">: <?php echo $pdra->input5_9 ?></div>
    </div>
    <div class="row">
        <div class="col-xs-5">Order quantities and delivery information available?</div>        
        <div class="col-xs-1 text-primary"><?php echo $pdra->rad19 ?></div>
        <div class="col-xs-5 text-danger">: <?php echo $pdra->input5_10 ?></div>
    </div>
    <div class="page-break">        
        <div class="pull-right" style="margin-right: 10px; margin-top: 5px;">Page 2</div>
        <button type="button" class="btn btn-default btn-sm" style="width: 100%">Risk Analysis Sheet</button><br>                    
    </div>
    <h5>Risk of Material</h5>
    <table class="table table-condensed">
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
                <td class="text-primary"><?php echo $pdra->input6_23 ?></td>
                <td class="text-primary"><?php echo $pdra->input6_1 ?></td>
            </tr>
            <tr>
                <td>Behaviour of RM</td>
                <td class="text-primary"><?php echo $pdra->input6_24 ?></td>
                <td class="text-primary"><?php echo $pdra->input6_2 ?></td>
            </tr>
            <tr>
                <td>Technology operations on RM</td>
                <td class="text-primary"><?php echo $pdra->input6_25 ?></td>
                <td class="text-primary"><?php echo $pdra->input6_3 ?></td>
            </tr>
            <tr>
                <td>Value addition applications on RM</td>
                <td class="text-primary"><?php echo $pdra->input6_26 ?></td>
                <td class="text-primary"><?php echo $pdra->input6_4 ?></td>
            </tr>
            <tr>
                <td>Defects on RM</td>
                <td class="text-primary"><?php echo $pdra->input6_27 ?></td>
                <td class="text-primary"><?php echo $pdra->input6_5 ?></td>
            </tr>
            <tr>
                <td>RM Spec compatabiity with size range</td>
                <td class="text-primary"><?php echo $pdra->input6_28 ?></td>
                <td class="text-primary"><?php echo $pdra->input6_6 ?></td>
            </tr>
            <tr>
                <td>RM & FG testing</td>
                <td class="text-primary"><?php echo $pdra->input6_29 ?></td>
                <td class="text-primary"><?php echo $pdra->input6_7 ?></td>
            </tr>
        </tbody>
    </table>
    <h5>Risk of Machine</h5>
    <table class="table table-condensed">
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
                <td class="text-primary"><?php echo $pdra->input6_30 ?></td>
                <td class="text-primary"><?php echo $pdra->input6_8 ?></td>
            </tr>
            <tr>
                <td>Use of folders & attachments</td>
                <td class="text-primary"><?php echo $pdra->input6_31 ?></td>
                <td class="text-primary"><?php echo $pdra->input6_9 ?></td>
            </tr>
            <tr>
                <td>Use of special needles</td>
                <td class="text-primary"><?php echo $pdra->input6_32 ?></td>
                <td class="text-primary"><?php echo $pdra->input6_10 ?></td>
            </tr>
            <tr>
                <td>Use of special machine types & settings</td>
                <td class="text-primary"><?php echo $pdra->input6_33 ?></td>
                <td class="text-primary"><?php echo $pdra->input6_11 ?></td>
            </tr>
            <tr>
                <td>Use of special moulds</td>
                <td class="text-primary"><?php echo $pdra->input6_34 ?></td>
                <td class="text-primary"><?php echo $pdra->input6_12 ?></td>
            </tr>
            <tr>
                <td>Availability & capacity of machines</td>
                <td class="text-primary"><?php echo $pdra->input6_35 ?></td>
                <td class="text-primary"><?php echo $pdra->input6_13 ?></td>
            </tr>           
        </tbody>
    </table>
    <h5>Risk of Method</h5>
    <table class="table table-condensed">
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
                <td class="text-primary"><?php echo $pdra->input6_37 ?></td>
                <td class="text-primary"><?php echo $pdra->input6_14 ?></td>
            </tr>
            <tr>
                <td>Difficult patterns</td>
                <td class="text-primary"><?php echo $pdra->input6_38 ?></td>
                <td class="text-primary"><?php echo $pdra->input6_15 ?></td>
            </tr>
            <tr>
                <td>Outsourcing processes</td>
                <td class="text-primary"><?php echo $pdra->input6_39 ?></td>
                <td class="text-primary"><?php echo $pdra->input6_16 ?></td>
            </tr>
            <tr>
                <td>Cutting method</td>
                <td class="text-primary"><?php echo $pdra->input6_40 ?></td>
                <td class="text-primary"><?php echo $pdra->input6_17 ?></td>
            </tr>
            <tr>
                <td>Moulding Method</td>
                <td class="text-primary"><?php echo $pdra->input6_41 ?></td>
                <td class="text-primary"><?php echo $pdra->input6_18 ?></td>
            </tr>
            <tr>
                <td>Technology application method</td>
                <td class="text-primary"><?php echo $pdra->input6_42 ?></td>
                <td class="text-primary"><?php echo $pdra->input6_19 ?></td>
            </tr> 
            <tr>
                <td>Packing method</td>
                <td class="text-primary"><?php echo $pdra->input6_43 ?></td>
                <td class="text-primary"><?php echo $pdra->input6_20 ?></td>
            </tr>           
        </tbody>
    </table>
    <h5>Risk of Man</h5>
    <table class="table table-condensed">
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
                <td class="text-primary"><?php echo $pdra->input6_39 ?></td>
                <td class="text-primary"><?php echo $pdra->input6_21 ?></td>
            </tr>
            <tr>
                <td>Additional carde requirement</td>
                <td class="text-primary"><?php echo $pdra->input6_40 ?></td>
                <td class="text-primary"><?php echo $pdra->input6_22 ?></td>
            </tr>            
        </tbody>
    </table>
    <div class="page-break">        
        <div class="pull-right" style="margin-right: 10px; margin-top: 5px;">Page 3</div>
        <button type="button" class="btn btn-default btn-sm" style="width: 100%">Action Plan for Risk Elimination</button><br>
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
            <?php foreach ($ext as $data) { ?>
            <tr>
                <td><?php echo $data->wht ?></td>
                <td><?php echo $data->who ?></td>
                <td><?php echo $data->whn ?></td>
                <td><?php echo $data->st ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <button type="button" class="btn btn-default btn-sm" style="width: 100%">Provisional TLT/Pilot Sewing Requirements</button><br>
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
                    <td class="text-primary"><?php echo $pdra->input8_1 ?></td>
                    <td class="text-primary"><?php echo $pdra->input8_2 ?></td>
                    <td class="text-primary"><?php echo $pdra->input8_3 ?></td>
                    <td class="text-primary"><?php echo $pdra->input8_4 ?></td>
                </tr>
                <tr>
                    <td>Planned Qty</td>
                    <td class="text-primary"><?php echo $pdra->input8_5 ?></td>
                    <td class="text-primary"><?php echo $pdra->input8_6 ?></td>
                    <td class="text-primary"><?php echo $pdra->input8_7 ?></td>
                    <td class="text-primary"><?php echo $pdra->input8_8 ?></td>
                </tr>
                <tr>
                    <td>Planned Date</td>
                    <td class="text-primary"><?php echo $pdra->input8_9 ?></td>
                    <td class="text-primary"><?php echo $pdra->input8_10 ?></td>
                    <td class="text-primary"><?php echo $pdra->input8_11 ?></td>
                    <td class="text-primary"><?php echo $pdra->input8_12 ?></td>
                </tr>
                <tr>
                    <td>Act Date</td>
                    <td class="text-primary"><?php echo $pdra->input8_13 ?></td>
                    <td class="text-primary"><?php echo $pdra->input8_14 ?></td>
                    <td class="text-primary"><?php echo $pdra->input8_15 ?></td>
                    <td class="text-primary"><?php echo $pdra->input8_16 ?></td>
                </tr>
                <tr>
                    <td>Location</td>
                    <td class="text-primary"><?php echo $pdra->input8_17 ?></td>
                    <td class="text-primary"><?php echo $pdra->input8_18 ?></td>
                    <td class="text-primary"><?php echo $pdra->input8_19 ?></td>
                    <td class="text-primary"><?php echo $pdra->input8_20 ?></td>
                </tr>
                <tr>
                    <td>Purposes of having/<br>Reason for elimination<br>(explain briefly)</td>
                    <td class="text-primary"><?php echo $pdra->input8_21 ?></td>
                    <td class="text-primary"><?php echo $pdra->input8_22 ?></td>
                    <td class="text-primary"><?php echo $pdra->input8_23 ?></td>
                    <td class="text-primary"><?php echo $pdra->input8_24 ?></td>
                </tr>
            </tbody>
        </table>
    <button type="button" class="btn btn-default btn-sm" style="width: 100%">Indentification of Chasis</button><br>
    <div class="row">
        <div class="col-xs-7">
            If the style fall into a defined chassis, mention chassis code
        </div>        
        <div class="col-xs-5 text-primary"><?php echo $pdra->input9_1 ?></div>
    </div>
    <div class="row">
        <div class="col-xs-7">
            If the style fall into a undefined chassis, mention the most similar chassis code
        </div>        
        <div class="col-xs-5 text-primary"><?php echo $pdra->input9_2 ?></div>
    </div>    
    <div class="row">
        <div class="col-xs-12">
            Workout the percentage of Machine changes in running chassis to this style chassis and put in priority order below
        </div>     
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
                <td class="text-primary"><?php echo $pdra->input9_3 ?></td>
                <td class="text-primary"><?php echo $pdra->input9_4 ?></td>
                <td class="text-primary"><?php echo $pdra->input9_5 ?></td>
                <td class="text-primary"><?php echo $pdra->input9_6 ?></td>
                <td class="text-primary"><?php echo $pdra->input9_7 ?></td>
                <td class="text-primary"><?php echo $pdra->input9_8 ?></td>
            </tr>
            <tr>
                <td>% MC Change</td>
                <td class="text-primary"><?php echo $pdra->input9_9 ?></td>
                <td class="text-primary"><?php echo $pdra->input9_10 ?></td>
                <td class="text-primary"><?php echo $pdra->input9_11 ?></td>
                <td class="text-primary"><?php echo $pdra->input9_12 ?></td>
                <td class="text-primary"><?php echo $pdra->input9_13 ?></td>
                <td class="text-primary"><?php echo $pdra->input9_14 ?></td>
            </tr>
            <tr>
                <td>C/0 type(BB, SC, CC)</td>
                <td class="text-primary"><?php echo $pdra->input9_15 ?></td>
                <td class="text-primary"><?php echo $pdra->input9_16 ?></td>
                <td class="text-primary"><?php echo $pdra->input9_17 ?></td>
                <td class="text-primary"><?php echo $pdra->input9_18 ?></td>
                <td class="text-primary"><?php echo $pdra->input9_19 ?></td>
                <td class="text-primary"><?php echo $pdra->input9_20 ?></td>
            </tr>
        </tbody>
    </table>
    <button type="button" class="btn btn-default btn-sm" style="width: 100%">Identification of Skill/ Training Requirement (To be filled by IE)</button><br>
    <span>Most difficult operations which the plant team members need to be trained</span><br>    
    <span class="text-primary"><?php echo $pdra->input10 ?></span><br>
    <button type="button" class="btn btn-default btn-sm" style="width: 100%">Identification of Improvements/ Autonomation Requirements</button><br>
    <span>Operations/method which need to be or can be improved</span><br>        
    <span class="text-primary"><?php echo $pdra->input11 ?></span>
    <div class="page-break">        
        <div class="pull-right" style="margin-right: 10px; margin-top: 5px;">Page 4</div>
        <button type="button" class="btn btn-default btn-sm" style="width: 100%">Operational capacity requirements</button><br>
    </div>
    <div class="row">
        <div class="col-xs-2">Sales order quality</div>
        <div class="col-xs-3 text-primary"><?php echo $pdra->input12_1 ?></div>
        <div class="col-xs-2">PSD</div>
        <div class="col-xs-3 text-primary"><?php echo $pdra->input12_2 ?></div>
    </div>
    <div class="row">
        <div class="col-xs-2">No. of Lines</div>
        <div class="col-xs-3 text-primary"><?php echo $pdra->input12_3 ?></div>
        <div class="col-xs-2">Daily garmnent output</div>
        <div class="col-xs-3 text-primary"><?php echo $pdra->input12_4 ?></div>
    </div>
    <div class="row">
        <div class="col-xs-2">Critical MC requirement</div>
        <div class="col-xs-3 text-primary"><?php echo $pdra->input12_5 ?></div>        
    </div>
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
                <td class="text-primary"><?php echo $pdra->input12_6 ?></td>
                <td class="text-primary"><?php echo $pdra->input12_7 ?></td>
            </tr>
            <tr>
                <td>Moulding</td>
                <td class="text-primary"><?php echo $pdra->input12_8 ?></td>
                <td class="text-primary"><?php echo $pdra->input12_9 ?></td>
            </tr>
            <tr>
                <td>Moulding</td>
                <td class="text-primary"><?php echo $pdra->input12_10 ?></td>
                <td class="text-primary"><?php echo $pdra->input12_11 ?></td>
            </tr>
        </tbody>
    </table><p></p>
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
                <td class="text-primary" width="50%"><?php echo $pdra->input12_12 ?></td>
                <td class="text-primary"><?php echo $pdra->input12_13 ?></td>
                <td class="text-primary"><?php echo $pdra->input12_14 ?></td>
                <td class="text-primary"><?php echo $pdra->input12_15 ?></td>
            </tr>
        </tbody>
    </table>
    <button type="button" class="btn btn-default btn-sm" style="width: 100%">DRA/PDFRA Sign off</button><br>
    Special Comments : <br>
    <span class="text-primary"><?php echo $pdra->input13 ?></span>

</body>

</html>
