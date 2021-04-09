<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $get->style_no ?></title>
	<link rel="stylesheet" href="">
</head>
<style>
	@font-face {
        font-family: "calibri";
        src: url("/var/www/html/ppnotes/assets/css/pdf/calibri.ttf");
    }

    @page { 
        /*margin: 0px; */
    }
    body { 
    	font-size: 12px;
        /*margin: 0px; */
        /*margin-left: 30px;*/
        font-family: 'calibri';
        margin-top: -40px;        
        margin-bottom: -30px;        
        margin-left: -30px;
        margin-right: -30px;
    }
    
        .page-break {
            page-break-before: always;
        }
        .font-content{
            font-size: 12px;
        }    
     .tdfill{
     	background-color: #eee;
     }
</style>
<body>
	<table width="100%">
		<tr>
			<td width="15%" valign="top"><img src="C:/xampp/htdocs/ppnotes/assets/img/mast_global.png" alt="" height="70"></td>
			<td>
            	<span style="font-size: 14px;">MAST GLOBAL</span><br>
            	Pre-Production Analysis Meeting <br>
            	Risk Assessment <br>
            	Risk Test Iot Resolution <br>
            	New Style Introduction
        	</td>
        	<td width="20%" valign="top">Template: QAPE - QA003C1</td>
		</tr>
	</table><hr>
	<table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">
		<tr>
			<td colspan="5" bgcolor="#3ba7ff" align="center">PROCESS INFORMATION</td>
		</tr>
     <tr>
        <td class="tdfill">Meeting Date</td>
        <td colspan="4"><?php echo date('d-m-Y', strtotime($global->pi_date1)) ?></td>    
      </tr>
      <tr>
        <td class="tdfill">Factory Location</td>
        <td colspan="4"><?php echo $global->pi_input1 ?></td>    
      </tr>
      <tr>
        <td class="tdfill" rowspan="2" valign="top">Meeting Title/Purpose</td>
        <td class="tdfill">RA</td>
        <td class="tdfill">Test Lot</td>
        <td class="tdfill">New Style Introduction</td>
        <td class="tdfill">Others (Please Specify)
        </td>
      </tr>
      <tr>
        
        <td><?php echo $global->pi_radio1 ?></td>
        <td><?php echo $global->pi_radio2 ?></td>
        <td><?php echo $global->pi_radio3 ?></td>
        <td>
            <?php echo $global->pi_textarea1 ?>
        </td>
      </tr>
      <tr>
        <td class="tdfill">Date</td>
        <td colspan="4"><?php echo date('d-m-Y', strtotime($global->pi_date2)) ?></td>
      </tr>
      <tr>
        <td class="tdfill" rowspan="4" valign="top">Attendees</td>
        <td class="tdfill">MAST QA</td>
        <td colspan="3"><?php echo $global->pi_input2 ?></td>
      </tr>
      <tr>
        <td class="tdfill">MAST ME</td>
        <td colspan="3"><?php echo $global->pi_input3 ?></td>
      </tr>
      <tr>
        <td class="tdfill">MAST CE</td>
        <td colspan="3"><?php echo $global->pi_input4 ?></td>
      </tr>
      <tr>
        <td class="tdfill">Factory</td>
        <td colspan="3">
            <?php foreach ($att as $data) { ?>
                <?php echo $data->employee_name ?> <span class="text-danger">(<?php echo $data->department_name ?>)</span><br>
            <?php } ?>
        </td>
      </tr>
</table>
<table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">
		<tr>
			<td colspan="4" bgcolor="#3ba7ff" align="center">MERCHANDISING</td>
		</tr>
        <tr>
            <td class="tdfill">Brand</td>
            <td><?php echo $global->mc_input1 ?></td>
            <td class="tdfill">Season</td>
            <td><?php echo $global->mc_input2 ?></td>
          </tr>
          <tr>
            <td class="tdfill">Product Type</td>
            <td><?php echo $global->mc_select1 ?></td>
            <td class="tdfill">Style Description</td>
            <td><?php echo $global->mc_textarea1 ?></td>
          </tr>
          <tr>
            <td class="tdfill">Style Number</td>
            <td><?php echo $global->mc_input3 ?></td>
            <td class="tdfill">VPO Number</td>
            <td><?php echo $global->mc_input4 ?></td>
          </tr>
          <tr>
            <td class="tdfill">Product Quantity</td>
            <td colspan="3"><?php echo $global->mc_input5 ?></td>
          </tr>
          <tr>
            <td class="tdfill">Fabric Ex Mill Date</td>
            <td><?php echo date('d-m-Y', strtotime($global->mc_date1)) ?></td>
            <td class="tdfill">Fabric In House Date</td>
            <td><?php echo date('d-m-Y', strtotime($global->mc_date2)) ?></td>
          </tr>      
	</table>
	<span class="text-primary">Trims/Components/Labels in House Date</span>
	<table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">
        <tr>
            <td class="tdfill">Trims</td>
            <td><?php echo $global->mc_input6 ?></td>
            <td class="tdfill">Components</td>
            <td><?php echo $global->mc_input7 ?></td>
            <td class="tdfill">Labels</td>
            <td><?php echo $global->mc_input8 ?></td>
        </tr>
    </table>
     <span class="text-primary">Color Breakdwon - Fabric (Ref to VPO)</span>
	<table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">
        <tr class="tdfill">
            <td>Color</td>
            <td>Color Code</td>
            <td>Units</td>
        </tr>
        <?php foreach ($cbf as $data) { ?>
        <tr>
        	<td><?php echo $data->color ?></td>
        	<td><?php echo $data->color_code ?></td>
        	<td><?php echo $data->units ?></td>
        </tr>
        <?php } ?>
    </table>
    <span class="text-primary">Trims and Components - Specify</span><br>    
    <table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">
        <tr class="tdfill">
            <td>Trims</td>
            <td>Color</td>
            <td>Color Code</td>
            <td>Units</td>
        </tr>
        <?php foreach ($cbt as $data) { ?>
        <tr>
        	<td><?php echo $data->trims ?></td>
        	<td><?php echo $data->color ?></td>
        	<td><?php echo $data->color_code ?></td>
        	<td><?php echo $data->units ?></td>
        </tr>
        <?php } ?>
    </table>
    <div class="page-break"></div>
    <span>Order Ratio (specify)</span>
    <table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">
        <tr>
            <td class="tdfill">Freight Class</td>
            <td><?php echo $global->mc_radio1 ?></td>
            <td class="tdfill">Packing Requirements</td>
            <td width="50%">
                <?php echo $global->mc_textarea2 ?>
            </td>
        </tr>
    </table>
    <span>Critical Path - Key Must Achieve Dates</span>
    <table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">
        <tr>
            <td class="tdfill" width="30%">Risk Assessment Completion Date</td>
            <td><?php echo $global->mc_input9 ?></td>
        </tr>
        <tr>
            <td class="tdfill">Test Iot Completion Date</td>
            <td><?php echo $global->mc_date3 ?></td>
        </tr>
        <tr>
            <td class="tdfill">First Bulk Cut</td>
            <td><?php echo $global->mc_input10 ?></td>
        </tr>
        <tr>
            <td class="tdfill">First Bulk Audit</td>
            <td><?php echo $global->mc_input11 ?></td>
        </tr>
        <tr>
            <td class="tdfill">GAC Date</td>
            <td><?php echo date('d-m-Y', strtotime($global->mc_date4)) ?></td>
        </tr>
        <tr>
            <td class="tdfill">NDC Date</td>
            <td><?php echo date('d-m-Y', strtotime($global->mc_date5)) ?></td>
        </tr>
         <tr>
            <td class="tdfill">Floor Set Date</td>
            <td><?php echo date('d-m-Y', strtotime($global->mc_date6)) ?></td>
        </tr>
    </table>
    <table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">
        <tr>
			<td colspan="5" bgcolor="#3ba7ff" align="center">HIGHLIGHT FROM RISK ASSESSMENT MEETING</td>
		</tr>
        <tr align="center" class="tdfill">
            <td>Collection</td>
            <td>Style</td>
            <td width="40%">Risk Element</td>
            <td>PP Analysis (Y/N)</td>
            <td>FBA (Y/N)</td>
        </tr>
        <tr>
            <td><?php echo $global->hg_input1 ?></td>
            <td><?php echo $get->style_no ?></td>
            <td><?php echo $global->hg_textarea1 ?></td>
            <td><?php echo $global->hg_radio1 ?></td>
            <td><?php echo $global->hg_radio2 ?></td>
        </tr>
    </table>
    <table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">
        <tr>
			<td colspan="5" bgcolor="#3ba7ff" align="center">TECHNICAL</td>
		</tr>
	</table>
    <span>Raw Material</span>
    <table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">
         <tr>
            <td width="25%" class="tdfill">Fabric Type (Main)</td>
            <td colspan="3"><?php echo $global->tc_input1 ?></td>
          </tr>      
          <tr>
            <td class="tdfill">Fabric Type (Sub)</td>
            <td colspan="3"><?php echo $global->tc_input2 ?></td>
          </tr>      
          <tr>
            <td class="tdfill">Fabric Description/Content (Main)</td>
            <td colspan="3"><?php echo $global->tc_input3 ?></td>
          </tr>
          <tr>
            <td class="tdfill">Fabric Description/Content (Sub)</td>
            <td colspan="3"><?php echo $global->tc_input4 ?></td>
          </tr>
          <tr>
            <td class="tdfill">Mill Reports Available</td>
            <td><?php echo $global->tc_radio1 ?></td>
            <td class="tdfill">Test Reports Available</td>
            <td><?php echo $global->tc_radio2 ?></td>
          </tr>
          <tr>
            <td class="tdfill">Approved Hanger</td>
            <td><?php echo $global->tc_radio3 ?></td>
            <td class="tdfill">Any Comments</td>
            <td><?php echo $global->tc_textarea1 ?></td>
          </tr>
          <tr>
            <td class="tdfill">Mill Fabric Inspection Reports</td>
            <td><?php echo $global->tc_input5 ?></td>
            <td class="tdfill">If No, please advise reason</td>
            <td><?php echo $global->tc_textarea2 ?></td>
          </tr>
    </table>
    <table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">
         <tr>
            <td class="tdfill">QA inhouse fabric inspection system</td>
            <td colspan="5"><?php echo $global->tc_textarea3 ?></td>
          </tr>
          <tr>
            <td rowspan="7" class="tdfill">Fabric Inspection Key Points</td>    
          </tr>
          <tr>
            <td class="tdfill">Distortion</td>
            <td colspan="4"><?php echo $global->tc_input6 ?></td>
          </tr>
          <tr>
            <td class="tdfill">Skewing/Bowing</td>
            <td colspan="4"><?php echo $global->tc_input7 ?></td>
          </tr>
          <tr>
            <td class="tdfill">Shade Variation Within Rolls</td>
            <td colspan="4"><?php echo $global->tc_input8 ?></td>
          </tr>
          <tr>
            <td class="tdfill">Excessive Curling</td>
            <td colspan="4"><?php echo $global->tc_input9 ?></td>
          </tr>
          <tr>
            <td class="tdfill">Holes</td>
            <td colspan="4"><?php echo $global->tc_input10 ?></td>
          </tr>
          <tr>
            <td class="tdfill">Length/Width</td>
            <td class="tdfill">Purchase</td>
            <td><?php echo $global->tc_input11 ?></td>
            <td class="tdfill">Actual</td>
            <td><?php echo $global->tc_input12 ?></td>
          </tr>
    </table>
    <span>Components/Trims</span>
    <table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">
        <tr>
            <td width="25%" class="tdfill">Test Reports</td>
            <td><?php echo $global->tc_radio4 ?></td>
            <td rowspan="2" class="tdfill">If No, please advise reason</td>
            <td rowspan="2"><?php echo $global->tc_textarea4 ?></td>
        </tr>
        <tr>
            <td class="tdfill">Approved Standart</td>
            <td><?php echo $global->tc_radio5 ?></td>
        </tr>
        <tr>
            <td class="tdfill">Special Handling Requirements</td>
            <td colspan="3"><?php echo $global->tc_input13 ?></td>
        </tr>
        <tr>
            <td class="tdfill">Packing Method</td>
            <td colspan="3"><?php echo $global->tc_input14 ?></td>
        </tr>
        <tr>
            <td class="tdfill">Special Requirements</td>
            <td colspan="3"><?php echo $global->tc_input15 ?></td>
        </tr>
    </table>
	<span>Label Details</span>
    <table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">    
        <tr>
            <td class="tdfill" width="25%">Reference Code</td>
            <td><?php echo $global->tc_input16 ?></td>
        </tr>
        <tr>
            <td class="tdfill">Woven Labels</td>
            <td><?php echo $global->tc_input17 ?></td>
        </tr>
        <tr>
            <td class="tdfill">Heat Seal Labels</td>
            <td><?php echo $global->tc_input18 ?></td>
        </tr>
        <tr>
            <td class="tdfill">Swift Tickets</td>
            <td><?php echo $global->tc_input19 ?></td>
        </tr>
        <tr>
            <td class="tdfill">Bag Labels</td>
            <td><?php echo $global->tc_input20 ?></td>
        </tr>
        <tr>
            <td class="tdfill">Carton Labels</td>
            <td><?php echo $global->tc_input21 ?></td>
        </tr>
        <tr>
            <td class="tdfill">Specify Additional</td>
            <td><?php echo $global->tc_input22 ?></td>
        </tr>
    </table>
	<span>Patterns</span>    
    <table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">
        <tr>
            <td class="tdfill" width="25%">Reference ID</td>
            <td><?php echo $global->tc_input23 ?></td>
        </tr>
        <tr>
            <td class="tdfill">Tracking Number</td>
            <td><?php echo $global->tc_input24 ?></td>
        </tr>
        <tr>
            <td class="tdfill">Electronic Full Set</td>
            <td><?php echo $global->tc_input25 ?></td>
        </tr>
        <tr>
            <td class="tdfill">Hard Pattern Full Size Set</td>
            <td><?php echo $global->tc_input26 ?></td>
        </tr>
        <tr>
            <td class="tdfill">Pattern Approved</td>
            <td><?php echo $global->tc_input27 ?></td>
        </tr>
        <tr>
            <td class="tdfill">Allowance/Shrinkage/Fabric Driven</td>
            <td><?php echo $global->tc_input28 ?></td>
        </tr>                        
    </table>
    <div class="page-break"></div>
    <table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">
    	 <tr>
			<td colspan="5" bgcolor="#3ba7ff" align="center">QA/TECHNICAL/INDUSTRIAL ENGINEERING/PRODUCTION</td>
		</tr>
        <tr bgcolor="#ccc" align="center">
           <td colspan="2">Operation Bulletin</td>
           <td>Yes/No</td>
           <td>Action</td>
           <td>Owner</td>
        </tr>
        <tr>
            <td colspan="2" class="tdfill">Confirm/Agree Operation Breakdown/Work Content from Cutting to Finished Goods</td>
            <td><?php echo $global->qa_radio1 ?></td>
            <td><?php echo $global->qa_input1 ?></td>
            <td><?php echo $global->qa_input2 ?></td>
        </tr>
        <tr>
            <td>If No, please advise the reason</td>
            <td colspan="4"><?php echo $global->qa_input3 ?></td>    
        </tr>
        <tr>
            <td colspan="2" class="tdfill">Confirm/Agree Operation Sequence</td>
            <td><?php echo $global->qa_radio2 ?></td>
            <td><?php echo $global->qa_input4 ?></td>
            <td><?php echo $global->qa_input5 ?></td>
          </tr>
          <tr>
            <td>If No, please advise the reason</td>
            <td colspan="4"><?php echo $global->qa_input6 ?></td>    
          </tr>
          <tr>
            <td colspan="2" class="tdfill">Confirm Operation Bulletin is aligned to approved sample</td>
            <td><?php echo $global->qa_radio3 ?></td>
            <td><?php echo $global->qa_input7 ?></td>
            <td><?php echo $global->qa_input8 ?></td>
          </tr>
          <tr>
            <td>If No, please advise the reason</td>
            <td colspan="4"><?php echo $global->qa_input9 ?></td>    
          </tr>
          <tr>
            <td colspan="2" class="tdfill">SMV based on GSD</td>
            <td><?php echo $global->qa_radio4 ?></td>
            <td><?php echo $global->qa_input10 ?></td>
            <td><?php echo $global->qa_input11 ?></td>
          </tr>
          <tr>
            <td>If No, please advise the reason</td>
            <td colspan="4"><?php echo $global->qa_input12 ?></td>    
          </tr>
          <tr>
            <td colspan="2" class="tdfill">Confirm/Agree Standart Minute Values</td>    
            <td><?php echo $global->qa_radio5 ?></td>
            <td><?php echo $global->qa_input13 ?></td>
            <td><?php echo $global->qa_input14 ?></td>
          </tr>
          <tr>
            <td>SMV Details</td>
            <td colspan="4"><?php echo $global->qa_input15 ?></td>                            
          </tr>
          <tr>
            <td>If No, please advise the reason</td>
            <td colspan="4"><?php echo $global->qa_input87 ?></td>    
          </tr>
    </table> 
    <table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">
	<tr>
		<td align="center" class="tdfill">Critical Quality Points - Technical Quality Specification - GSD Method Specification - Machine Specification</td>
	</tr>    	
	<tr>
		<td><?php echo $global->qa_textarea1 ?></td>
	</tr>
	<tr>
		<td align="center" class="tdfill">Key Points of Measure / How to Measure</td>
	</tr>    	
	<tr>
		<td><?php echo $global->qa_textarea2 ?></td>
	</tr>
    </table>
     <b>Cutting</b><br>                          
	  <span>Fabric Handling</span>
    <table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">
	      <tr>
	          <td class="tdfill" width="25%">Special Requirements</td>
	          <td><?php echo $global->qa_input16 ?></td>
	      </tr>
	      <tr>
	          <td class="tdfill">Fabric Relaxation</td>
	          <td><?php echo $global->qa_input17 ?></td>
	      </tr>
	      <tr>
	          <td class="tdfill">Manual Relaxation</td>
	          <td><?php echo $global->qa_input18 ?></td>
	      </tr>
	      <tr>
	          <td class="tdfill">Semi Auto relaxation</td>
	          <td><?php echo $global->qa_input19 ?></td>
	      </tr>
	      <tr>
	          <td class="tdfill">Length of Lay</td>
	          <td><?php echo $global->qa_input20 ?></td>
	      </tr>
	      <tr>
	          <td class="tdfill">Height / No of Ply's</td>
	          <td><?php echo $global->qa_input21 ?></td>
	      </tr>
	  </table>
	  <span>Spreading Method</span>
    <table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">
	      <tr>
	          <td class="tdfill" width="25%">Semi Auto Spreading Machine</td>
	          <td><?php echo $global->qa_input22 ?></td>
	      </tr>
	      <tr>
	          <td class="tdfill">Manual Spreading Machine</td>
	          <td><?php echo $global->qa_input23 ?></td>
	      </tr>
	      <tr>
	          <td class="tdfill">Hand / Manual Spreading</td>
	          <td><?php echo $global->qa_input24 ?></td>
	      </tr>
	      <tr>
	          <td class="tdfill">One way face up spreading</td>
	          <td><?php echo $global->qa_input25 ?></td>
	      </tr>
	      <tr>
	          <td class="tdfill">Iaps/Face to Face Spreading</td>
	          <td><?php echo $global->qa_input26 ?></td>
	      </tr>
	      <tr>
	          <td class="tdfill">Special Requirements</td>
	          <td><?php echo $global->qa_input27 ?></td>
	      </tr>
	  </table>
	   <span>Pinning Method</span>
	    <table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">
          <tr>
              <td class="tdfill" width="30%">Pinning during lay with blocking Allowance</td>
              <td><?php echo $global->qa_input28 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Re Lay After Block Cut - Pin - Final Cut</td>
              <td><?php echo $global->qa_input29 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Clip After Block Cut - Final Cut</td>
              <td><?php echo $global->qa_input30 ?></td>
          </tr>                         
      </table>    
      <span>Cutting Method</span>
	    <table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">
          <tr>
              <td class="tdfill" width="20%">Semi auto cutting</td>
              <td><?php echo $global->qa_input31 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Straight knife cutting</td>
              <td><?php echo $global->qa_input32 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Band knife cutting</td>
              <td><?php echo $global->qa_input33 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Click press cutting</td>
              <td><?php echo $global->qa_input34 ?></td>
          </tr>                         
      </table> 
      <div class="page-break"></div>
      <span>Bundling/Numbering Method</span>
	    <table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">      
          <tr>
              <td class="tdfill" width="35%">Bundle size</td>
              <td><?php echo $global->qa_input35 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Soabaring (right/wrong side)</td>
              <td><?php echo $global->qa_input36 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Bundling Method (Rubber band/string/fabric strap/no bundling)</td>
              <td><?php echo $global->qa_input37 ?></td>
          </tr>                          
      </table> 
      <span>Molding</span>
	    <table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">      
          <tr>
              <td class="tdfill" width="35%">Machine Type - Single Head/Twin head</td>
              <td><?php echo $global->qa_input38 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Bullet Mold</td>
              <td><?php echo $global->qa_input39 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Customize Mold</td>
              <td><?php echo $global->qa_input40 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Teardrop Mold</td>
              <td><?php echo $global->qa_input41 ?></td>
          </tr>                
          <tr>
              <td class="tdfill">Offset Mold</td>
              <td><?php echo $global->qa_input42 ?></td>
          </tr>              
          <tr>
              <td class="tdfill">Number of Plies</td>
              <td><?php echo $global->qa_input43 ?></td>
          </tr>                  
          <tr>
              <td class="tdfill">Temperature</td>
              <td><?php echo $global->qa_input44 ?></td>
          </tr>              
          <tr>
              <td class="tdfill">Male</td>
              <td><?php echo $global->qa_input45 ?></td>
          </tr>       
          <tr>
              <td class="tdfill">Female</td>
              <td><?php echo $global->qa_input46 ?></td>
          </tr>         
          <tr>
              <td class="tdfill">Component Molding</td>
              <td><?php echo $global->qa_input47 ?></td>
          </tr>                    
          <tr>
              <td class="tdfill">After Make Molding</td>
              <td><?php echo $global->qa_input48 ?></td>
          </tr>                     
          <tr>
              <td class="tdfill">Trimming Excess fabric using plastics Shots</td>
              <td><?php echo $global->qa_input49 ?></td>
          </tr>                                  
          <tr>
              <td class="tdfill">Trimming Excess fabric using Edge Cutting Machines</td>
              <td><?php echo $global->qa_input50 ?></td>
          </tr>                
      </table> 
      <span>Heat Seal</span>
	    <table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">      
          <tr>
              <td class="tdfill" width="35%">Temperature</td>
              <td><?php echo $global->qa_input51 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Machine Cycle</td>
              <td><?php echo $global->qa_input52 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Machine Type-Single Head/Twin Head</td>
              <td><?php echo $global->qa_input53 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Quantity on bed</td>
              <td><?php echo $global->qa_input54 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Placement</td>
              <td><?php echo $global->qa_input55 ?></td>
          </tr>
      </table>
      <span>Sewing</span>
	    <table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">      
          <tr>
              <td class="tdfill" width="35%">Agree Machine Type/Spec per operation</td>
              <td><?php echo $global->qa_input56 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Stich density as per quality Spec</td>
              <td><?php echo $global->qa_input57 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Machine Spec - RPM/No of Stitches in BT Machine etc</td>
              <td><?php echo $global->qa_input58 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Specify Needle Thread/Bobbin/Looper thread</td>
              <td><?php echo $global->qa_input59 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Indicate Folder type/Attachment per operation</td>
              <td><?php echo $global->qa_input60 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Indicate Folder type/Attachment Per Operation</td>
              <td><?php echo $global->qa_input61 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Based on Volume indicate quantity</td>
              <td><?php echo $global->qa_input62 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Highlight special technical requirement in Shape/Fabric/Machinery Customization</td>
              <td><?php echo $global->qa_input63 ?></td>
          </tr>
      </table>
      <span>Embelishment Process</span>
	  <table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">      
          <tr>
              <td class="tdfill" width="35%">Graphic Combo #</td>
              <td><?php echo $global->qa_input64 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Embelishment Technique</td>
              <td><?php echo $global->qa_input65 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Embelishment Plant</td>
              <td><?php echo $global->qa_input66 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Approved strike off available</td>
              <td><?php echo $global->qa_radio6 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Test report available</td>
              <td><?php echo $global->qa_radio7 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Placement Board available</td>
              <td><?php echo $global->qa_radio8 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Finalized Graphic Risk</td>
              <td><?php echo $global->qa_radio9 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Conditions by individual Process <br>Cycle Time <br>Temperatur</td>
              <td><?php echo $global->qa_textarea3 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Conditions by individual Process <br>Cycle Time <br>Temperatur</td>
              <td><?php echo $global->qa_textarea4 ?></td>
          </tr>
      </table>   
      <div class="page-break"></div>
   	  <b>Specialization Details</b><br>
      <span>Wet Process</span>
    	<table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">      
          <tr>
              <td class="tdfill" width="25%">Name and Type</td>
              <td><?php echo $global->qa_input67 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Formula Details</td>
              <td><?php echo $global->qa_input68 ?></td>
          </tr>                          
          <tr>
              <td class="tdfill">Conditions by individual Process <br>Cycle Time <br>Temperatur</td>
              <td><?php echo $global->qa_textarea5 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Conditions by individual Process <br>Cycle Time <br>Temperatur</td>
              <td><?php echo $global->qa_textarea6 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Conditions by individual Process <br>Cycle Time <br>Temperatur</td>
              <td><?php echo $global->qa_textarea7 ?></td>
          </tr>
      </table>
      <b>Specialization Details</b><br>
      <span>Projected Line Balance Layout</span>
    	<table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">      
          <tr>
              <td class="tdfill" width="25%">Volume</td>
              <td><?php echo $global->qa_input69 ?></td>
          </tr>
          <tr>
              <td class="tdfill">SMV</td>
              <td><?php echo $global->qa_input70 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Output requirement</td>
              <td><?php echo $global->qa_input71 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Line mnapower - SMV Driven</td>
              <td><?php echo $global->qa_input72 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Efficiency projections</td>
              <td><?php echo $global->qa_input73 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Learning Curve</td>
              <td><?php echo $global->qa_input74 ?></td>
          </tr>
      </table>
      <span>Identify/Agree Risk Operations</span>
    	<table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">      
          <tr>
              <td class="tdfill" width="25%">Complexity</td>
              <td><?php echo $global->qa_input75 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Lessons Learned</td>
              <td><?php echo $global->qa_input76 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Historical data - High Defect Levels/Low efficiency Levels</td>
              <td><?php echo $global->qa_input77 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Newness/Style Features</td>
              <td><?php echo $global->qa_input78 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Level of accuracy required</td>
              <td><?php echo $global->qa_input79 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Fabric Sensitivity Related special requirements</td>
              <td><?php echo $global->qa_input80 ?></td>
          </tr>
      </table>
      <span>Skill Matrix</span>
    	<table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">      
          <tr>
              <td class="tdfill" width="25%">Aligned to Style Complexity</td>
              <td><?php echo $global->qa_input81 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Indicate Method Training requirements</td>
              <td><?php echo $global->qa_input82 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Highlight Volume of training required</td>
              <td><?php echo $global->qa_input83 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Ratio of trainer : Trainee</td>
              <td><?php echo $global->qa_input84 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Factory QCO Practices</td>
              <td><?php echo $global->qa_input85 ?></td>
          </tr>
          <tr>
              <td class="tdfill">Adopt Learning Curves to support training progression</td>
              <td><?php echo $global->qa_input86 ?></td>
          </tr>
      </table> 
      <div class="page-break"></div>
      <span style="font-size: 14px">BRA MOLDING SPECIFICATION QUALITY / METHOD / CONDITIONS</span>
    	<table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2" cellspacing="0">      
            <tr>
                <td width="20%" bgcolor="#7dafff">Meeting Date</td>
                <td colspan="3"><?php echo $global->md_date1 ?></td>
              </tr>
              <tr>
                <td bgcolor="#7dafff">Factory</td>
                <td colspan="3"><?php echo $global->md_input1 ?></td>
              </tr>
              <tr>
                <td class="tdfill">Collection Name</td>
                <td><?php echo $global->md_input2 ?></td>
                <td colspan="2" class="text-primary">Operation Name: Fabric Molding Methodology / Specification</td>    
              </tr>
              <tr>
                <td class="tdfill">Flex#</td>
                <td><?php echo $global->md_input3 ?></td>
                <td bgcolor="#7dafff" width="20%">Mold Type</td>
                <td width="40%"><?php echo $global->md_input4 ?></td>
              </tr>
              <tr>
                <td colspan="2" rowspan="3"></td>
                <td bgcolor="#7dafff">Mold Identification:</td>
                <td><?php echo $global->md_input5 ?></td>
              </tr>
              <tr>
                <td class="tdfill">Fabric Details</td>
                <td class="tdfill">Fabric Handling Points</td>
              </tr>  
              <tr>
                <td rowspan="2"><u>Contents</u><br><?php echo $global->md_textarea1 ?></td>
                <td rowspan="2"><?php echo $global->md_textarea2 ?></textarea></td>
              </tr>
              <tr>
                <td class="tdfill" colspan="2">Method Analysis/Comments</td>
              </tr>
              <tr bgcolor="#7dafff">
                <td colspan="2">QUALITY - Critical Focus Area <br>Machine Setting (Development Condition)</td>
                <td>OPERATION PARAMETERS:</td>
                <td>OPERATION - Work Place Layout</td>
              </tr>
              <tr>
                <td class="tdfill">Mold Machine Pressure</td>
                <td><?php echo $global->md_input6 ?></td>
                <td rowspan="4" style="vertical-align: top;"><u>Indicate number of ply per mold head</u> <br><?php echo $global->md_textarea3 ?></td>
                <td rowspan="9" style="vertical-align: top;"><?php echo $global->md_textarea4 ?></td>
              </tr>
              <tr>
                <td class="tdfill">Mold Dwell / Cycle time</td>
                <td><?php echo $global->md_input7 ?></td>
              </tr>
              <tr>
                <td class="tdfill">Mold Temperature</td>
                <td><?php echo $global->md_input8 ?></td>
              </tr>
              <tr>
                <td colspan="2" bgcolor="#7dafff">Actual Bulk Production Condition</td>    
              </tr>
              <tr>
                <td class="tdfill">Frequency of Testing</td>
                <td><?php echo $global->md_input9 ?></td>
                <td rowspan="3" style="vertical-align: top;"><u>Operation#</u><br><?php echo $global->md_textarea5 ?></td>
              </tr>
              <tr>
                <td class="tdfill">Pressure</td>
                <td><?php echo $global->md_input10 ?></td>
              </tr>
              <tr>
                <td class="tdfill">Dwell/Cycle time</td>
                <td><?php echo $global->md_input11 ?></td>
              </tr>
              <tr>
                <td class="tdfill">Temperature</td>
                <td>
                    <u>Male</u><br><?php echo $global->md_input12 ?><br>
                    <u>Female</u><br><?php echo $global->md_input13 ?>
                </td>
                <td rowspan="2" style="vertical-align: top;"><u>Operation Comments</u><br><?php echo $global->md_textarea6 ?></td>
              </tr>
              <tr>
                <td class="tdfill">Tools-Temperature</td>
                <td><?php echo $global->md_input14 ?></td>
              </tr>
              <tr>
                <td class="tdfill" colspan="2">Type of Mold Head</td>
                <td></td>
                <td class="tdfill">Operation Method Analysis Berak Down (GSD Analysis)</td>
              </tr>
              <tr>
                <td colspan="2" valign="top"><?php echo $global->md_textarea7 ?></td>
                <td valign="top"><?php echo $global->md_textarea8 ?></td>
                <td rowspan="4" valign="top"><?php echo $global->md_textarea9 ?></td>
              </tr>
              <tr>
                <td class="tdfill" colspan="2">Number of Mold</td>
                <td></td>
              </tr>
              <tr>
                <td class="tdfill" colspan="2">Mold Head Numbers</td>
                <td rowspan="2" valign="top"><?php echo $global->md_textarea10 ?></td>
              </tr>
              <tr>
                <td colspan="2" style="vertical-align: top;"><img src="C:/xampp/htdocs/ppnotes/assets/img/mastinfo.png" height="150" alt=""></td>
              </tr>
        </table>                                
</body>
</html>