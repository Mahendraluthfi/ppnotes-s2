<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pre-Production</title>
<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

<style>
	body{
		font-family: 'Ubuntu', sans-serif;
	}
	table{
		border-collapse:collapse; 
		border-style:solid; 
		width:100%;	
		border-collapse:collapse; 	
		font-size: 11px;		
	}
	table, th, td{
		border: 1px solid black;
	}
	th, td{
		padding: 3px;
	}
	.head{
		font-size: 16px;
	}
</style>
</head>

<body>
<table style="font-weight:bold;">
  <tr bgcolor="#CCCCCC">
    <td style="font-size:12px;">MAS SUMBIRI</td>
  </tr>
  <tr>
    <td class="head"><center>PRE-PRODUCTION MEETING MINUTES</center></td>
  </tr>
</table><br />
<table>
  <tr>
    <td width="20%">Date & Time</td>
    <td width="30%"><?php echo $get->planned_date ?></td>
    <td width="20%">Style#</td>
    <td width="30%"><?php echo $get->style_no ?></td>
  </tr>
</table><br>
<table>
  <tr bgcolor="#CCCCCC">
    <td width="1%">No</td>
    <td>Name</td>
    <td>Department</td>
  </tr>
  <?php $no=1; foreach ($att as $data) { ?>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data->employee_name ?></td>
    <td><?php echo $data->department_name ?></td>
  </tr>
  <?php } ?>
</table>
<br />
<table>
  <tr>
    <td colspan="6"><b>MERCHANDISING</b></td>
  </tr>
  <tr>
    <td width="5%">1</td>
    <td colspan="5">Present Pre-Production Note to the audience. ( Attach a copy of PP Note )</td>
  </tr>
  <tr>
    <td rowspan="3">2</td>
    <td colspan="2" width="50%">Are completed approved trim cards for all colours issued to relevant depts. ( FT,RM,CU,PR &amp; QA ) ?</td>
    <td colspan="3"><b><?php echo $pp->pp_m2_1 ?></b></td>
  </tr>
  <tr>
    <td rowspan="2">If Not</td>
    <td>Reason</td>
    <td colspan="3"><b><?php echo $pp->pp_m2_2 ?></b></td>
  </tr>
  <tr>
    <td>Action by &amp; Issuing Date</td>
    <td colspan="2"><b><?php echo $pp->pp_m2_3 ?></b></td>
    <td><b><?php echo $pp->pp_m2_4 ?></b></td>
  </tr>
  <tr>
    <td rowspan="3">3</td>
    <td colspan="2">Is there any discrepancies between Trim Card &amp; Approved Standard?</td>
    <td colspan="3"><b><?php echo $pp->pp_m3_1 ?></b></td>
  </tr>
  <tr>
    <td rowspan="2">If Yes</td>
    <td>Action Taken</td>
    <td colspan="3"><b><?php echo $pp->pp_m3_2 ?></b></td>
  </tr>
  <tr>
    <td>Have you seen approved standard for such discrepancies ?</td>
    <td colspan="3"><b><?php echo $pp->pp_m3_3 ?></b></td>
  </tr>
  <tr>
    <td rowspan="5">4</td>
    <td colspan="2">Are following documents available &amp; distributed ?</td>
    <td rowspan="4">If Not</td>
    <td>Issuing Date</td>
    <td>Action By</td>
  </tr>
  <tr>
    <td>MPO</td>
    <td><b><?php echo $pp->pp_m4_1 ?></b></td>
    <td><b><?php echo $pp->pp_m4_4 ?></b></td>
    <td><b><?php echo $pp->pp_m4_7 ?></b></td>
  </tr>
  <tr>
    <td>BOM</td>
    <td><b><?php echo $pp->pp_m4_2 ?></b></td>
    <td><b><?php echo $pp->pp_m4_5 ?></b></td>
    <td><b><?php echo $pp->pp_m4_8 ?></b></td>
  </tr>
  <tr>
    <td>LOF</td>
    <td><b><?php echo $pp->pp_m4_3 ?></b></td>
    <td><b><?php echo $pp->pp_m4_6 ?></b></td>
    <td><b><?php echo $pp->pp_m4_9 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">Packing instructions ( method &amp; standards )</td>
    <td colspan="3">Yes</td>
  </tr>
  <tr>
    <td rowspan="3">5</td>
    <td colspan="2">Can delivery dates be met as per MPO/CPO/SLC delivery schedule? </td>
    <td><b><?php echo $pp->pp_m5_1 ?></b></td>
    <td>Delivery Date</td>
    <td><b><?php echo $pp->pp_m5_2 ?></b></td>
  </tr>
  <tr>
    <td rowspan="2">If Not</td>
    <td>Preventive Actions</td>
    <td colspan="3"><b><?php echo $pp->pp_m5_3 ?></b></td>
  </tr>
  <tr>
    <td>Actions By</td>
    <td colspan="3"><b><?php echo $pp->pp_m5_4 ?></b></td>
  </tr>
  <tr>
    <td rowspan="6">6</td>
    <td colspan="5">Sample requirements          As per the VS proceder ( not received yet)</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Sample Type</td>
    <td>Size(s)</td>
    <td>Quantity</td>
    <td>Required Date</td>
  </tr>
  <tr>
    <td>1</td>
    <td><b><?php echo $pp->pp_m6_1 ?></b></td>
    <td><b><?php echo $pp->pp_m6_5 ?></b></td>
    <td><b><?php echo $pp->pp_m6_9 ?></b></td>
    <td><b><?php echo $pp->pp_m6_12 ?></b></td>
  </tr>
  <tr>
    <td>2</td>
    <td><b><?php echo $pp->pp_m6_2 ?></b></td>
    <td><b><?php echo $pp->pp_m6_6 ?></b></td>
    <td><b><?php echo $pp->pp_m6_10 ?></b></td>
    <td><b><?php echo $pp->pp_m6_14 ?></b></td>
  </tr>
  <tr>
    <td>3</td>
    <td><b><?php echo $pp->pp_m6_3 ?></b></td>
    <td><b><?php echo $pp->pp_m6_7 ?></b></td>
    <td><b><?php echo $pp->pp_m6_11 ?></b></td>
    <td><b><?php echo $pp->pp_m6_15 ?></b></td>
  </tr>
  <tr>
    <td>4</td>
    <td><b><?php echo $pp->pp_m6_4 ?></b></td>
    <td><b><?php echo $pp->pp_m6_8 ?></b></td>
    <td><b><?php echo $pp->pp_m6_12 ?></b></td>
    <td><b><?php echo $pp->pp_m6_16 ?></b></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"> Any special comment or instruction.</td>
    <td colspan="3"><b><?php echo $pp->pp_m7_1 ?></b></td>
  </tr>
</table><br />
<table>
  <tr>
    <td colspan="7">FABRIC AND TRIMS</td>
  </tr>
  <tr>
    <td width="5%" rowspan="3">1</td>
    <td colspan="3">Are Fabric Pre-Production Notes available ?</td>
    <td width="16%"><b><?php echo $pp->pp_f1_1 ?></b></td>
    <td width="13%">Aproved By</td>
    <td width="16%"><b><?php echo $pp->pp_f1_2 ?></b></td>
  </tr>
  <tr>
    <td rowspan="2" width="12%">If Not</td>
    <td colspan="2">Action</td>
    <td colspan="3"><b><?php echo $pp->pp_f1_3 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">Action By</td>
    <td colspan="3"><b><?php echo $pp->pp_f1_4 ?></b></td>
  </tr>
  <tr>
    <td rowspan="3">2</td>
    <td colspan="3">Are Fabric Test Reports available ?</td>
    <td><b><?php echo $pp->pp_f2_1 ?></b></td>
    <td>If yes,       What tests ?</td>
    <td><b><?php echo $pp->pp_f2_2 ?></b></td>
  </tr>
  <tr>
    <td rowspan="2">If Not</td>
    <td colspan="2">Action</td>
    <td colspan="3"><b><?php echo $pp->pp_f2_3 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">Action By</td>
    <td colspan="3"><b><?php echo $pp->pp_f2_4 ?></b></td>
  </tr>
  <tr>
    <td rowspan="3">3</td>
    <td>Fabric Details</td>
    <td width="21%">Supplier</td>
    <td width="17%">Type</td>
    <td>Composition</td>
    <td>Fault Rate</td>
    <td>Defects</td>
  </tr>
  <tr>
    <td>Fabric</td>
    <td><b><?php echo $pp->pp_f3_1 ?></b></td>
    <td><b><?php echo $pp->pp_f3_2 ?></b></td>
    <td><b><?php echo $pp->pp_f3_3 ?></b></td>
    <td><b><?php echo $pp->pp_f3_4 ?></b></td>
    <td><b><?php echo $pp->pp_f3_5 ?></b></td>
  </tr>
  <tr>
    <td>Lace</td>
    <td><b><?php echo $pp->pp_f3_6 ?></b></td>
    <td><b><?php echo $pp->pp_f3_7 ?></b></td>
    <td><b><?php echo $pp->pp_f3_8 ?></b></td>
    <td><b><?php echo $pp->pp_f3_9 ?></b></td>
    <td><b><?php echo $pp->pp_f3_10 ?></b></td>
  </tr>
  <tr>
    <td>4</td>
    <td colspan="3">Are &quot;Fabric Defects Card&quot; distributed to Cutting &amp; Production ?</td>
    <td colspan="3"><b><?php echo $pp->pp_f4_1 ?></b></td>
  </tr>
  <tr>
    <td rowspan="3">5</td>
    <td colspan="6">Stripe / Check fabric : <b><?php echo $pp->pp_f5_1 ?></b></td>
  </tr>
  <tr>
    <td rowspan="2">Bowing percentage</td>
    <td colspan="3">In fabric form</td>
    <td colspan="2"><b><?php echo $pp->pp_f5_2 ?></b></td>
  </tr>
  <tr>
    <td colspan="3">What percentage is approved in panel / garment form</td>
    <td colspan="2"><b><?php echo $pp->pp_f5_3 ?></b></td>
  </tr>
</table><h6>&nbsp;</h6>
<table>
  <tr>
    <td width="5%" rowspan="3">6</td>
    <td colspan="7">Lace / Stripe / Check fabric Repeat variations : <b><?php echo $pp->pp_f6_1 ?></b></td>
  </tr>
  <tr>
    <td width="12%">As Per Spec</td>
    <td width="19%">Repeat Length</td>
    <td width="20%"><b><?php echo $pp->pp_f6_3 ?></b></td>
    <td colspan="2">Tolerance</td>
    <td colspan="2"><b><?php echo $pp->pp_f6_4 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">Repeat variation in fabric form</td>
    <td><b><?php echo $pp->pp_f6_5 ?></b></td>
    <td colspan="2">What percentage is approved in panel &amp; garment form</td>
    <td colspan="2"><b><?php echo $pp->pp_f6_6 ?></b></td>
  </tr>
  <tr>
    <td rowspan="4">7</td>
    <td colspan="2">What method is used to identify fabric Technical Face side?</td>
    <td colspan="5"><b><?php echo $pp->pp_f7_1 ?></b></td>
  </tr>
  <tr>
    <td>Garment Face is</td>
    <td colspan="2">Technical face</td>
    <td colspan="4"><b><?php echo $pp->pp_f7_4 ?></b></td>
  </tr>
  <tr>
    <td colspan="5">Did you issue an approved fabric hanger indicating &quot;Garment Face&quot; to Cutting &amp; Production ?</td>
    <td colspan="2"><b><?php echo $pp->pp_f7_2 ?></b></td>
  </tr>
  <tr>
    <td>If Not</td>
    <td>Issuing Time</td>
    <td colspan="5"><b><?php echo $pp->pp_f7_3 ?></b></td>
  </tr>
  <tr>
    <td rowspan="8">8</td>
    <td colspan="3">Special requirements</td>
    <td colspan="4"><b><?php echo $pp->pp_f8_1 ?></b></td>
  </tr>
  <tr>
    <td>If Yes</td>
    <td colspan="2">Standard availability &amp; approval</td>
    <td colspan="4"><b><?php echo $pp->pp_f8_2 ?></b></td>
  </tr>
  <tr>
    <td>If Yes</td>
    <td>Approved by (Supplier):</td>
    <td><b><?php echo $pp->pp_f8_3 ?></b></td>
    <td width="9%">If Not</td>
    <td width="13%">Issuing Date</td>
    <td colspan="2"><b><?php echo $pp->pp_f8_4 ?></b></td>
  </tr>
  <tr>
    <td colspan="7">HS / Fussing / Laminating Conditions</td>
  </tr>
  <tr>
    <td rowspan="4">&nbsp;</td>
    <td>Setting Temperature</td>
    <td><b><?php echo $pp->pp_f8_5 ?></b></td>
    <td colspan="2">Bond strength</td>
    <td colspan="2"><b><?php echo $pp->pp_f8_6 ?></b></td>
  </tr>
  <tr>
    <td>Glue line Temperature</td>
    <td><b><?php echo $pp->pp_f8_7 ?></b></td>
    <td colspan="2">Feel off method</td>
    <td colspan="2"><b><?php echo $pp->pp_f8_8 ?></b></td>
  </tr>
  <tr>
    <td>Time</td>
    <td><b><?php echo $pp->pp_f8_9 ?></b></td>
    <td colspan="2">Lamination method</td>
    <td colspan="2"><b><?php if($pp->pp_f8_10 == "1"){echo "Cool";}elseif ($pp->pp_f8_10 == "2") {echo "Hot";} ?></b></td>
  </tr>
  <tr>
    <td>Pressure</td>
    <td><b><?php echo $pp->pp_f8_11 ?></b></td>
    <td colspan="2">Lamination done at</td>
    <td colspan="2"><b><?php if($pp->pp_f8_12 == "1"){echo "Sri Lanka";}elseif ($pp->pp_f8_12 == "2") {echo "Offshow";} ?></b></td>
  </tr>
  <tr>
    <td rowspan="4">9</td>
    <td colspan="3">Is this a washed garment ?</td>
    <td colspan="4"><b><?php echo $pp->pp_f9_1 ?></b></td>
  </tr>
  <tr>
    <td rowspan="3">If Yes</td>
    <td>Wash Method</td>
    <td colspan="5"><b><?php echo $pp->pp_f9_2 ?></b></td>
  </tr>
  <tr>
    <td>Recipe</td>
    <td colspan="5"><b><?php echo $pp->pp_f9_3 ?></b></td>
  </tr>
  <tr>
    <td>Comments</td>
    <td colspan="5"><b><?php echo $pp->pp_f9_4 ?></b></td>
  </tr>
  <tr>
    <td rowspan="7">10</td>
    <td colspan="3">Is there any colour shade variation in all colours</td>
    <td colspan="4"><b><?php echo $pp->pp_f10_1 ?></b></td>
  </tr>
  <tr>
    <td colspan="3">If yes ( Tick the special instyructions given )</td>
    <td colspan="4"><b><?php echo $pp->pp_f10_2 ?></b></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">Colour(s)</td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><b><?php if($pp->pp_f10_3 == "on"){echo "&#10004;";} ?></b></td>
    <td colspan="6">Batch to Batch shade - B -to-B separations &amp; all shades are within the approved shade band</td>
  </tr>
  <tr>
    <td align="center"><b><?php if($pp->pp_f10_4 == "on"){echo "&#10004;";} ?></b></td>    
    <td colspan="6">Within the Roll shade - Use close-marker &amp; within the garment shade is approved</td>
  </tr>
  <tr>
    <td align="center"><b><?php if($pp->pp_f10_5 == "on"){echo "&#10004;";} ?></b></td>    
    <td colspan="6">Rejecth fabric / Lace / Elastics</td>
  </tr>
  <tr>
    <td align="center"><b><?php if($pp->pp_f10_6 == "on"){echo "&#10004;";} ?></b></td>    
    <td>Any other, Specify</td>
    <td colspan="5"><b><?php echo $pp->pp_f10_7 ?></b></td>
  </tr>
  <tr>
    <td>11</td>
    <td colspan="3">Any adverse reaction on fabric ?</td>
    <td colspan="4"><b><?php echo $pp->pp_f11_1 ?></b></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>if Yes</td>
    <td><b><?php if($pp->pp_f11_2 == "1"){echo "Shrinkage";}else{echo "Growing";} ?></b></td>
    <td>Percentage</td>
    <td>Lengthwise</td>
    <td><b><?php echo $pp->pp_f11_3 ?></b></td>
    <td width="11%">Widthwise</td>
    <td width="11%"><b><?php echo $pp->pp_f11_4 ?></b></td>
  </tr>
  <tr>
    <td>12</td>
    <td colspan="2">Fabric /Marker width</td>
    <td>Spec</td>
    <td><b><?php echo $pp->pp_f12_1 ?></b></td>
    <td>Usable</td>
    <td><b><?php echo $pp->pp_f12_2 ?></b></td>
    <td><b><?php echo $pp->pp_f12_3 ?></b></td>
  </tr>
  <tr>
    <td>13</td>
    <td colspan="2">Special comments</td>
    <td colspan="5"><b><?php echo $pp->pp_f13_1 ?></b></td>
  </tr>
</table><br />
<table width="200" border="1">
  <tr>
    <td colspan="10"><strong>CONSTRUCTION / TECHNICAL</strong></td>
  </tr>
  <tr>
    <td width="5%">1</td>
    <td colspan="9">Present &quot;Construction Details&quot; to the audience</td>
  </tr>
  <tr>
    <td rowspan="3">2</td>
    <td colspan="4">Is approved Contract / Red / Green Seal available ?</td>
    <td width="6%"><b><?php echo $pp->pp_ct2_1 ?></b></td>
    <td width="14%">Aproved By</td>
    <td width="8%"><b><?php echo $pp->pp_ct2_2 ?></b></td>
    <td width="8%">Date</td>
    <td width="12%"><b><?php echo $pp->pp_ct2_3 ?></b></td>
  </tr>
  <tr>
    <td colspan="2" rowspan="2">If Not</td>
    <td width="7%">Action</td>
    <td colspan="6"><b><?php echo $pp->pp_ct2_4 ?></b></td>
  </tr>
  <tr>
    <td>Action By</td>
    <td colspan="6"><b><?php echo $pp->pp_ct2_5 ?></b></td>
  </tr>
  <tr>
    <td>3</td>
    <td colspan="4">What are the comments received ?</td>
    <td colspan="5"><b><?php echo $pp->pp_ct3_1 ?></b></td>
  </tr>
  <tr>
    <td rowspan="5">4</td>
    <td colspan="9">What are the difficult operations identified during sample stage ( Cutting &amp; Sewing ) ?</td>
  </tr>
  <tr>
    <td colspan="4">Operation</td>
    <td colspan="5">Preventive Action</td>
  </tr>
  <tr>
    <td colspan="4"><b><?php echo $pp->pp_ct4_1 ?></b></td>
    <td colspan="5"><b><?php echo $pp->pp_ct4_2 ?></b></td>
  </tr>
  <tr>
    <td colspan="4"><b><?php echo $pp->pp_ct4_3 ?></b></td>
    <td colspan="5"><b><?php echo $pp->pp_ct4_4 ?></b></td>
  </tr>
  <tr>
    <td colspan="4"><b><?php echo $pp->pp_ct4_5 ?></b></td>
    <td colspan="5"><b><?php echo $pp->pp_ct4_6 ?></b></td>
  </tr>
  <tr>
    <td rowspan="2">5</td>
    <td colspan="9">Specify, if any special / extra machines and / or needles required :</td>
  </tr>
  <tr>
    <td colspan="9"><b><?php echo $pp->pp_ct5_1 ?></b></td>
  </tr>
  <tr>
    <td>6</td>
    <td colspan="4">What are the attachments used for the operations ?</td>
    <td colspan="5"><b><?php echo $pp->pp_ct6_1 ?></b></td>
  </tr>
  <tr>
    <td rowspan="3">7</td>
    <td colspan="4">Has the size set being done ?</td>
    <td><b><?php echo $pp->pp_ct7_1 ?></b></td>
    <td>Done By</td>
    <td colspan="3"><b><?php echo $pp->pp_ct7_2 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">If Not</td>
    <td>Action</td>
    <td colspan="6"><b><?php echo $pp->pp_ct7_3 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td>Action By</td>
    <td colspan="6"><b><?php echo $pp->pp_ct7_4 ?></b></td>
  </tr>
  <tr>
    <td rowspan="5">8</td>
    <td colspan="9">Specify the operations that the measurements been identified as Inline and Critical</td>
  </tr>
  <tr>
    <td colspan="4"><strong>Inline Measurements</strong></td>
    <td colspan="5"><strong>Critical Measurement</strong></td>
  </tr>
  <tr>
    <td colspan="4"><b><?php echo $pp->pp_ct8_1 ?></b></td>
    <td colspan="5"><b><?php echo $pp->pp_ct8_2 ?></b></td>
  </tr>
  <tr>
    <td colspan="4"><b><?php echo $pp->pp_ct8_3 ?></b></td>
    <td colspan="5"><b><?php echo $pp->pp_ct8_4 ?></b></td>
  </tr>
  <tr>
    <td colspan="4"><b><?php echo $pp->pp_ct8_5 ?></b></td>
    <td colspan="5"><b><?php echo $pp->pp_ct8_6 ?></b></td>
  </tr>
  <tr>
    <td rowspan="6">9</td>
    <td colspan="9">Are the following approved documents available ?</td>
  </tr>
  <tr>
    <td colspan="2" rowspan="2">&nbsp;</td>
    <td>If Yes</td>
    <td width="25%">&nbsp;</td>
    <td colspan="5">If Not,</td>
  </tr>
  <tr>
    <td>Appr. By</td>
    <td>&nbsp;</td>
    <td colspan="3">Action</td>
    <td colspan="2">Re-issuing Date</td>
  </tr>
    <tr>
    <td colspan="2">Size Chart / M'ment Sheet</td>
    <td colspan="2"><b><?php echo $pp->pp_ct9_1 ?></b></td>
    <td colspan="3"><b><?php echo $pp->pp_ct9_2 ?></b></td>
    <td colspan="2"><b><?php echo $pp->pp_ct9_3 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">Construction Sheet</td>
    <td colspan="2"><b><?php echo $pp->pp_ct9_4 ?></b></td>
    <td colspan="3"><b><?php echo $pp->pp_ct9_5 ?></b></td>
    <td colspan="2"><b><?php echo $pp->pp_ct9_6 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">How to measure sheet</td>
    <td colspan="2"><b><?php echo $pp->pp_ct9_7 ?></b></td>
    <td colspan="3"><b><?php echo $pp->pp_ct9_8 ?></b></td>
    <td colspan="2"><b><?php echo $pp->pp_ct9_9 ?></b></td>
  </tr>
  <tr>
    <td rowspan="2">10</td>
    <td colspan="9">What are the changes being done in the above-approved documents during this meeting ?</td>
  </tr>
  <tr>
    <td colspan="9"><b><?php echo $pp->pp_ct10_1 ?></b></td>
  </tr>
  <tr>
    <td rowspan="6">11</td>
    <td colspan="9">What are the potential risks identified at the Risk assessment ?</td>
  </tr>
  <tr>
    <td colspan="3">Risk</td>
    <td colspan="4">Preventive action taken</td>
    <td>Chekced by</td>
    <td>Result</td>
  </tr>
  <tr>
    <td colspan="3"><b><?php echo $pp->pp_ct11_1 ?></b></td>
    <td colspan="4"><b><?php echo $pp->pp_ct11_2 ?></b></td>
    <td><b><?php echo $pp->pp_ct11_3 ?></b></td>
    <td><b><?php echo $pp->pp_ct11_4 ?></b></td>
  </tr>
  <tr>
    <td colspan="3"><b><?php echo $pp->pp_ct11_5 ?></b></td>
    <td colspan="4"><b><?php echo $pp->pp_ct11_6 ?></b></td>
    <td><b><?php echo $pp->pp_ct11_7 ?></b></td>
    <td><b><?php echo $pp->pp_ct11_8 ?></b></td>
  </tr>
  <tr>
    <td colspan="3"><b><?php echo $pp->pp_ct11_9 ?></b></td>
    <td colspan="4"><b><?php echo $pp->pp_ct11_10 ?></b></td>
    <td><b><?php echo $pp->pp_ct11_11 ?></b></td>
    <td><b><?php echo $pp->pp_ct11_12 ?></b></td>
  </tr>
  <tr>
    <td colspan="3"><b><?php echo $pp->pp_ct11_13 ?></b></td>
    <td colspan="4"><b><?php echo $pp->pp_ct11_14 ?></b></td>
    <td><b><?php echo $pp->pp_ct11_15 ?></b></td>
    <td><b><?php echo $pp->pp_ct11_16 ?></b></td>
  </tr>
  <tr>
    <td rowspan="11">12</td>
    <td colspan="9">What are the matching requirements ?</td>
  </tr>
  <tr>
    <td colspan="4">Stripes &amp; checks</td>
    <td colspan="5">Lace   MACHING LACE (ATT TO THE PP METING SHEET)</td>
  </tr>
  <tr>
    <td><b><?php if($pp->pp_ct12_1 == "on"){echo "&#10004;";} ?></b></td>
    <td colspan="3">100 % side seam matching</td>
    <td><b><?php if($pp->pp_ct12_2 == "on"){echo "&#10004;";} ?></b></td>
    <td colspan="4">Exact matching point &amp; Colour specific Yes / No</td>
  </tr>
  <tr>
    <td><b><?php if($pp->pp_ct12_3 == "on"){echo "&#10004;";} ?></b></td>
    <td colspan="3">Waist or Hem straight</td>
    <td><b><?php if($pp->pp_ct12_5 == "on"){echo "&#10004;";} ?></b></td>
    <td colspan="4">Choice of placement points ( indicate on the diagram )</td>
  </tr>
  <tr>
    <td><b><?php if($pp->pp_ct12_6 == "on"){echo "&#10004;";} ?></b></td>
    <td colspan="3"><b><?php echo $pp->pp_ct12_4; ?></b></td>
    <td><b><?php if($pp->pp_ct12_7 == "on"){echo "&#10004;";} ?></b></td>
    <td colspan="4">Exclusive placement points ( indicate on the diagram )</td>
  </tr>
  <tr>
    <td width="6%" rowspan="4">&nbsp;</td>
    <td colspan="3" rowspan="4">&nbsp;</td>
    <td><b><?php if($pp->pp_ct12_8 == "on"){echo "&#10004;";} ?></b></td>
    <td colspan="4">Free priority point</td>
  </tr>
  <tr>
    <td><b><?php if($pp->pp_ct12_9 == "on"){echo "&#10004;";} ?></b></td>
    <td colspan="4">Length only</td>
  </tr>
  <tr>
    <td rowspan="2"><b><?php if($pp->pp_ct12_10 == "on"){echo "&#10004;";} ?></b></td>
    <td colspan="4"><b><?php echo $pp->pp_ct12_11; ?></b></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">Secondary priority point</td>
    <td colspan="5"><b><?php echo $pp->pp_ct12_12; ?></b></td>
  </tr>
  <tr>
    <td colspan="4">Tolerances ( according to the tolerance given to               Fabric / Lace )</td>
    <td colspan="5"><b><?php echo $pp->pp_ct12_13; ?></b></td>
  </tr>
  <tr>
    <td rowspan="7">13</td>
    <td colspan="2" rowspan="7">Heat Seal Placement</td>
    <td>Part</td>
    <td colspan="6">Placements ( excluding seam allowance )</td>
  </tr>
  <tr>
    <td rowspan="3"><b><?php echo $pp->pp_ct13_1; ?></b></td>
    <td colspan="6"><b><?php echo $pp->pp_ct13_2; ?></b> cm / inch down / up from <b><?php echo $pp->pp_ct13_3; ?></b> to the top / bottom of the <b><?php echo $pp->pp_ct13_4; ?></b></td>
  </tr>
  <tr>
    <td colspan="6"><b><?php echo $pp->pp_ct13_5; ?></b>  cm / inch from left / right seam edge / center line to the left / right of the <b><?php echo $pp->pp_ct13_6; ?></b></td>
  </tr>
  <tr>
    <td colspan="6">Seam allowance <b><?php echo $pp->pp_ct13_7; ?></b> cm / inches</td>
  </tr>
  <tr>
    <td rowspan="3"><b><?php echo $pp->pp_ct13_8; ?></b></td>
    <td colspan="6"><b><?php echo $pp->pp_ct13_9; ?></b> cm / inch down / up from <b><?php echo $pp->pp_ct13_10; ?></b> to the top / bottom of the <b><?php echo $pp->pp_ct13_11; ?></b></td>
  </tr>
  <tr>
    <td colspan="6"><b><?php echo $pp->pp_ct13_12; ?></b>  cm / inch from left / right seam edge / center line to the left / right of the <b><?php echo $pp->pp_ct13_13; ?></b></td>
  </tr>
  <tr>
    <td colspan="6">Seam allowance <b><?php echo $pp->pp_ct13_14; ?></b> cm / inches</td>
  </tr>
  <tr>
    <td>14</td>
    <td colspan="3">Garment way</td>
    <td colspan="6">All gmt one way/one gmt one way/only <b><?php echo $pp->pp_ct14_1; ?></b> part one way/All Garments piles up/down</td>
  </tr>
  <tr>
    <td rowspan="4">15</td>
    <td colspan="9">What is the grain direction ?</td>
  </tr>
  <tr>
    <td colspan="2" rowspan="3"><b><?php echo $pp->pp_ct15_1; ?></b></td>
    <td colspan="2">Direction</td>
    <td colspan="5">Garment part(s)</td>
  </tr>
  <tr>
    <td colspan="2">Parallel to selvage</td>
    <td colspan="5"><b><?php echo $pp->pp_ct15_2; ?></b></td>
  </tr>
  <tr>
    <td colspan="2">Perpendicular to Selvage</td>
    <td colspan="5"><b><?php echo $pp->pp_ct15_3; ?></b></td>
  </tr>
</table>
<br />
<table width="200" border="1">
  <tr>
    <td colspan="4"><strong>MOULDING ( IF ANY ) </strong></td>
  </tr>
  <tr>
    <td width="25%">Mould type</td>
    <td width="25%"><b><?php echo $pp->pp_mo_1; ?></b></td>
    <td width="25%">Temperature ( F/C )</td>
    <td><b><?php echo $pp->pp_mo_2; ?></b></td>
  </tr>
  <tr>
    <td>Mould shape</td>
    <td><b><?php echo $pp->pp_mo_3; ?></b></td>
    <td>Moulding Time</td>
    <td><b><?php echo $pp->pp_mo_4; ?></b></td>
  </tr>
  <tr>
    <td>Mould size ( circumference )</td>
    <td><b><?php echo $pp->pp_mo_5; ?></b></td>
    <td>Fabric laying method</td>
    <td><b><?php echo $pp->pp_mo_6; ?></b></td>
  </tr>
  <tr>
    <td>Cup depth</td>
    <td><b><?php echo $pp->pp_mo_7; ?></b></td>
    <td>Number of plies</td>
    <td><b><?php echo $pp->pp_mo_8; ?></b></td>
  </tr>
  <tr>
    <td>Single / Double moulding</td>
    <td><b><?php echo $pp->pp_mo_9; ?></b></td>
    <td>Petential Defects</td>
    <td><b><?php echo $pp->pp_mo_10; ?></b></td>
  </tr>
</table>
<br />
<table width="200" border="1">
  <tr>
    <td colspan="8"><strong>CUTTING</strong></td>
  </tr>
  <tr>
    <td width="4%">1</td>
    <td width="12%">Specifiy</td>
    <td width="16%">Marker Length</td>
    <td width="18%"><b><?php echo $pp->pp_c1_1; ?></b></td>
    <td width="7%">Play Height</td>
    <td width="17%"><b><?php echo $pp->pp_c1_2; ?></b></td>
    <td width="9%">Comments</td>
    <td width="17%"><b><?php echo $pp->pp_c1_3; ?></b></td>
  </tr>
  <tr>
    <td rowspan="4">2</td>
    <td colspan="7">What are the cutting methods and equipments</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Fabric</td>
    <td colspan="5"><b><?php echo $pp->pp_c2_1; ?></b></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Lace</td>
    <td colspan="5"><b><?php echo $pp->pp_c2_2; ?></b></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Foam</td>
    <td colspan="5"><b><?php echo $pp->pp_c2_3; ?></b></td>
  </tr>
  <tr>
    <td>3</td>
    <td>Special Comments</td>
    <td colspan="6"><b><?php echo $pp->pp_c3_1; ?></b></td>
  </tr>
</table><br />
<table width="200" border="1">
  <tr>
    <td colspan="4"><strong>PILOT CUT</strong></td>
  </tr>
  <tr>
    <td width="6%" rowspan="6">&nbsp;</td>
    <td width="32%">Issuing of Cutting Instruction - Date &amp; Time</td>
    <td colspan="2"><b><?php echo $pp->pp_pc1_1.' / '.$pp->pp_pc1_2; ?></b></td>
  </tr>
  <tr>
    <td>Releasing of Fabric &amp; Trims for Production - Date &amp; Time</td>
    <td colspan="2"><b><?php echo $pp->pp_pc2_1.' / '.$pp->pp_pc2_2; ?></b></td>    
  </tr>
  <tr>
    <td>Sizes for Pilot </td>
    <td colspan="2"><b><?php echo $pp->pp_pc3; ?></b></td>
  </tr>
  <tr>
    <td>Pilot cut date </td>
    <td width="23%"><b><?php echo $pp->pp_pc4_1; ?></b></td>
    <td width="39%">Number of gmts to be cut : <b><?php echo $pp->pp_pc4_2; ?></b></td>
  </tr>
  <tr>
    <td>Date &amp; Time of Pilot Cut required for Production </td>
    <td colspan="2"><b><?php echo $pp->pp_pc5_1.' / '.$pp->pp_pc5_2; ?></b></td>
  </tr>
  <tr>
    <td>Comments</td>
    <td colspan="2"><b><?php echo $pp->pp_pc6; ?></b></td>
  </tr>
</table>








</body>
</html>
