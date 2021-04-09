<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pilot Appraisal Meeting Minutes</title>
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
    <td class="head"><center>
        PILOT APPARAISAL MEETING MINUTES
    </center></td>
  </tr>
</table><br />
<table>
  <tr>
    <td width="20%">Date & Time</td>
    <td width="30%"><?php echo $get->planned_date ?></td>
    <td width="20%">Style#</td>
    <td width="30%"><?php echo $get->style_no ?></td>
  </tr>
</table>
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
<table width="200" border="1">
  <tr>
    <td colspan="8"><strong>MASTER PATTERNS</strong></td>
  </tr>
  <tr>
    <td width="5%" rowspan="6">1</td>
    <td colspan="7">Only if, there were any of followings pending / not resolved at / by the Pre Production Meeting</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
    <td colspan="2">Action completed by </td>
    <td colspan="2">Comments</td>
  </tr>
  <tr>
    <td width="8%" align="center"><?php if($pl->pl_mp1_1 == "on"){echo '<img src="/var/www/html/ppnotes/assets/img/check.png" height="20">';} ?></td>
    <td colspan="2">Contract / red seal approval / availability </td>
    <td colspan="2"><b><?php echo $pl->pl_mp1_5; ?></b></td>
    <td colspan="2"><b><?php echo $pl->pl_mp1_6; ?></b></td>
  </tr>
  <tr>
    <td align="center"><?php if($pl->pl_mp1_2 == "on"){echo '<img src="/var/www/html/ppnotes/assets/img/check.png" height="20">';} ?></td>
    <td colspan="2">Size set</td>
    <td colspan="2"><b><?php echo $pl->pl_mp1_7; ?></b></td>
    <td colspan="2"><b><?php echo $pl->pl_mp1_8; ?></b></td>
  </tr>
  <tr>
    <td align="center"><?php if($pl->pl_mp1_3 == "on"){echo '<img src="/var/www/html/ppnotes/assets/img/check.png" height="20">';} ?></td>
    <td colspan="2">Construction Sheet</td>
    <td colspan="2"><b><?php echo $pl->pl_mp1_9; ?></b></td>
    <td colspan="2"><b><?php echo $pl->pl_mp1_10; ?></b></td>
  </tr>
  <tr>
    <td align="center"><?php if($pl->pl_mp1_4 == "on"){echo '<img src="/var/www/html/ppnotes/assets/img/check.png" height="20">';} ?></td>
    <td colspan="2">&quot;How to measure&quot; Sheet</td>
    <td colspan="2"><b><?php echo $pl->pl_mp1_11; ?></b></td>
    <td colspan="2"><b><?php echo $pl->pl_mp1_12; ?></b></td>
  </tr>
  <tr>
    <td rowspan="3">2</td>
    <td colspan="6">Is there any thing to be added / amended on the answers/ comments made at the Pre-Production meeting ( including &quot;TBC&quot; )</td>
    <td width="19%"><b><?php echo $pl->pl_mp2_1; ?></b></td>
  </tr>
  <tr>
    <td rowspan="2">If Yes</td>
    <td colspan="2">Question #</td>
    <td colspan="4">Amendment </td>
  </tr>
  <tr>
    <td colspan="2"><b><?php echo $pl->pl_mp2_2; ?></b></td>
    <td colspan="4"><b><?php echo $pl->pl_mp2_3; ?></b></td>
  </tr>
  <tr>
    <td rowspan="4">3</td>
    <td colspan="3">Has the sample been fitted on a live model / dummy ?</td>
    <td colspan="4"><b><?php echo $pl->pl_mp3_1; ?></b></td>
  </tr>
  <tr>
    <td>If Yes</td>
    <td colspan="2">Comments</td>
    <td colspan="4"><b><?php echo $pl->pl_mp3_2; ?></b></td>
  </tr>
  <tr>
    <td rowspan="2">If Not</td>
    <td colspan="2">Action</td>
    <td colspan="4"><b><?php echo $pl->pl_mp3_3; ?></b></td>
  </tr>
  <tr>
    <td colspan="2">Action By</td>
    <td colspan="4"><b><?php echo $pl->pl_mp3_4; ?></b></td>
  </tr>
  <tr>
    <td>4</td>
    <td colspan="3">The first fit pattern is checked &amp; authorized to proceed :</td>
    <td width="9%">By</td>
    <td width="14%"><b><?php echo $pl->pl_mp4_1; ?></b></td>
    <td width="14%">Date</td>
    <td><b><?php echo $pl->pl_mp4_2; ?></b></td>
  </tr>
  <tr>
    <td rowspan="3">5</td>
    <td colspan="2">&nbsp;</td>
    <td width="18%">Checked By</td>
    <td colspan="2">Variations</td>
    <td>Preventive Action Taken</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td colspan="2">Nested pattern vs.Master patterns</td>
    <td><b><?php echo $pl->pl_mp5_1; ?></b></td>
    <td colspan="2"><b><?php echo $pl->pl_mp5_2; ?></b></td>
    <td colspan="2"><b><?php echo $pl->pl_mp5_3; ?></b></td>
  </tr>
  <tr>
    <td colspan="2">Master pattern as per the sealed gmt</td>
    <td><b><?php echo $pl->pl_mp5_4; ?></b></td>
    <td colspan="2"><b><?php echo $pl->pl_mp5_5; ?></b></td>
    <td colspan="2"><b><?php echo $pl->pl_mp5_6; ?></b></td>
  </tr>
  <tr>
    <td>6</td>
    <td colspan="5">Is the sealed gmt has been made as per construction details ?</td>
    <td colspan="2"><b><?php echo $pl->pl_mp6_1; ?></b></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>If Not</td>
    <td colspan="2">Specify the variations </td>
    <td colspan="4"><b><?php echo $pl->pl_mp6_2; ?></b></td>
  </tr>
  <tr>
    <td rowspan="4">7</td>
    <td colspan="5">Has a washed gmt been sent to the customer ?</td>
    <td colspan="2"><b><?php echo $pl->pl_mp7_1; ?></b></td>
  </tr>
  <tr>
    <td rowspan="3">If Not</td>
    <td colspan="2">Reason</td>
    <td colspan="4"><b><?php echo $pl->pl_mp7_2; ?></b></td>
  </tr>
  <tr>
    <td colspan="2">The date it would be sent</td>
    <td colspan="4"><b><?php echo $pl->pl_mp7_3; ?></b></td>
  </tr>
  <tr>
    <td colspan="2">Action By</td>
    <td colspan="4"><b><?php echo $pl->pl_mp7_4; ?></b></td>
  </tr>
  <tr>
    <td rowspan="4">8</td>
    <td colspan="5">Is theStyle file completed ?</td>
    <td colspan="2"><b><?php echo $pl->pl_mp8_1; ?></b></td>
  </tr>
  <tr>
    <td rowspan="3">If Not</td>
    <td colspan="2">The documents that has not been included</td>
    <td colspan="4"><b><?php echo $pl->pl_mp8_2; ?></b></td>
  </tr>
  <tr>
    <td colspan="2">The date it would be completed </td>
    <td colspan="4"><b><?php echo $pl->pl_mp8_3; ?></b></td>
  </tr>
  <tr>
    <td colspan="2">Action By</td>
    <td colspan="4"><b><?php echo $pl->pl_mp8_4; ?></b></td>
  </tr>
  <tr>
    <td rowspan="11">9</td>
    <td colspan="7">The following Items has approved for bulk &amp; Issued to Cutting ?</td>
  </tr>
  <tr>
    <td rowspan="7">&nbsp;</td>
    <td colspan="4">Pattern / Placement boards for Lace Cutting</td>
    <td colspan="2"><b><?php echo $pl->pl_mp9_1; ?></b></td>
  </tr>
  <tr>
    <td colspan="4">Pattern / Placement boards for HS</td>
    <td colspan="2"><b><?php echo $pl->pl_mp9_2; ?></b></td>
  </tr>
  <tr>
    <td colspan="4">Pattern / Placement boards for EMB</td>
    <td colspan="2"><b><?php echo $pl->pl_mp9_3; ?></b></td>
  </tr>
  <tr>
    <td colspan="4">Pattern / Placement boards for Screen Printing</td>
    <td colspan="2"><b><?php echo $pl->pl_mp9_4; ?></b></td>
  </tr>
  <tr>
    <td colspan="4">Pattern / Placement boards for Moulding</td>
    <td colspan="2"><b><?php echo $pl->pl_mp9_5; ?></b></td>
  </tr>
  <tr>
    <td colspan="4">Pattern / Placement boards for Fussing</td>
    <td colspan="2"><b><?php echo $pl->pl_mp9_6; ?></b></td>
  </tr>
  <tr>
    <td colspan="4">Pattern / Placement boards for Lamination</td>
    <td colspan="2"><b><?php echo $pl->pl_mp9_7; ?></b></td>
  </tr>
  <tr>
    <td rowspan="3">If Not</td>
    <td colspan="2">Action</td>
    <td colspan="4"><b><?php echo $pl->pl_mp9_8; ?></b></td>
  </tr>
  <tr>
    <td colspan="2">Time</td>
    <td colspan="4"><b><?php echo $pl->pl_mp9_9; ?></b></td>
  </tr>
  <tr>
    <td colspan="2">Action By</td>
    <td colspan="4"><b><?php echo $pl->pl_mp9_10; ?></b></td>
  </tr>
  <tr>
    <td rowspan="2">10</td>
    <td colspan="7">Comments on pilot garments ;</td>
  </tr>
  <tr>
    <td colspan="7"><b><?php echo $pl->pl_mp10_1; ?></b></td>
  </tr>
</table><br>
<table width="200" border="1">
  <tr>
    <td colspan="9"><strong>METERIALS</strong></td>
  </tr>
  <tr>
    <td width="5%" rowspan="6">1</td>
    <td colspan="8">Only if, there were any of followings pending / not resolved at / by the pre-production meeting</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
    <td colspan="2">Action Completed by</td>
    <td colspan="3">Comments</td>
  </tr>
  <tr>
    <td width="5%" align="center"><?php if($pl->pl_me1_1 == "on"){echo '<img src="/var/www/html/ppnotes/assets/img/check.png" height="20">';} ?></td>
    <td colspan="2">Fabric pre-production notes availability</td>
    <td colspan="2"><b><?php echo $pl->pl_me1_5; ?></b></td>
    <td colspan="3"><b><?php echo $pl->pl_me1_6; ?></b></td>
  </tr>
  <tr>
    <td align="center"><?php if($pl->pl_me1_2 == "on"){echo '<img src="/var/www/html/ppnotes/assets/img/check.png" height="20">';} ?></td>
    <td colspan="2">Fabric defects card availability</td>
    <td colspan="2"><b><?php echo $pl->pl_me1_7; ?></b></td>
    <td colspan="3"><b><?php echo $pl->pl_me1_8; ?></b></td>
  </tr>
  <tr>
    <td align="center"><?php if($pl->pl_me1_3 == "on"){echo '<img src="/var/www/html/ppnotes/assets/img/check.png" height="20">';} ?></td>
    <td colspan="2">HS/Emb/Print/Fusing/Moulding/Lamination Standards &amp; conditions</td>
    <td colspan="2"><b><?php echo $pl->pl_me1_9; ?></b></td>
    <td colspan="3"><b><?php echo $pl->pl_me1_10; ?></b></td>
  </tr>
  <tr>
    <td align="center"><?php if($pl->pl_me1_4 == "on"){echo '<img src="/var/www/html/ppnotes/assets/img/check.png" height="20">';} ?></td>
    <td colspan="2">Colour Shades / Fabric defects</td>
    <td colspan="2"><b><?php echo $pl->pl_me1_11; ?></b></td>
    <td colspan="3"><b><?php echo $pl->pl_me1_12; ?></b></td>
  </tr>
  <tr>
    <td rowspan="3">2</td>
    <td colspan="7">Is there any thing to be added / ammended on the answers / Comments/made at the pre-production meeting </td>
    <td width="12%"><b><?php echo $pl->pl_me2_1; ?></b></td>
  </tr>
  <tr>
    <td>If Yes</td>
    <td colspan="2">Questions</td>
    <td colspan="5">Amandement</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><b><?php echo $pl->pl_me2_2; ?></b></td>
    <td colspan="5"><b><?php echo $pl->pl_me2_3; ?></b></td>
  </tr>
  <tr>
    <td rowspan="13">3</td>
    <td colspan="8">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Fabric</td>
    <td colspan="2">1</td>
    <td colspan="2">2</td>
    <td colspan="2">3</td>
  </tr>
  <tr>
    <td colspan="2">Part(s)</td>
    <td colspan="2"><b><?php echo $pl->pl_me3_1; ?></b></td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Fabric Quality ( Ref # )</td>
    <td colspan="2"><b><?php echo $pl->pl_me3_2; ?></b></td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Knitting method / woven</td>
    <td colspan="2"><b><?php echo $pl->pl_me3_3; ?></b></td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Composition</td>
    <td colspan="2"><b><?php echo $pl->pl_me3_4; ?></b></td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Weight gms/m2</td>
    <td colspan="2"><b><?php echo $pl->pl_me3_5; ?></b></td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Test method &amp; /Result</td>
    <td colspan="2"><b><?php echo $pl->pl_me3_6; ?></b></td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Stability ( Length / widthwise )</td>
    <td colspan="2"><b><?php echo $pl->pl_me3_7; ?></b></td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">Composition details of wash care lable insturctlions</td>
    <td colspan="2"><b><?php echo $pl->pl_me3_8; ?></b></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6">Do these two match together ( Fabric composition &amp; wash care lable instructions ) ?</td>
    <td colspan="2"><b><?php echo $pl->pl_me3_9; ?></b></td>
  </tr>
  <tr>
    <td>If not</td>
    <td width="18%">Action</td>
    <td colspan="6"><b><?php echo $pl->pl_me3_10; ?></b></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Action By</td>
    <td colspan="2"><b><?php echo $pl->pl_me3_11; ?></b></td>
    <td width="12%">Date</td>
    <td colspan="3"><b><?php echo $pl->pl_me3_12; ?></b></td>
  </tr>
  <tr>
    <td rowspan="5">4</td>
    <td colspan="8">Trims inspection and approval</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">Thread</td>
    <td colspan="2">Elastic</td>
    <td colspan="2">Lables</td>
  </tr>
  <tr>
    <td colspan="2">Approved By</td>
    <td colspan="2"><b><?php echo $pl->pl_me4_1; ?></b></td>
    <td colspan="2"><b><?php echo $pl->pl_me4_4; ?></b></td>
    <td colspan="2"><b><?php echo $pl->pl_me4_7; ?></b></td>
  </tr>
  <tr>
    <td colspan="2">Date</td>
    <td colspan="2"><b><?php echo $pl->pl_me4_2; ?></b></td>
    <td colspan="2"><b><?php echo $pl->pl_me4_5; ?></b></td>
    <td colspan="2"><b><?php echo $pl->pl_me4_8; ?></b></td>
  </tr>
  <tr>
    <td colspan="2">Comments</td>
    <td colspan="2"><b><?php echo $pl->pl_me4_3; ?></b></td>
    <td colspan="2"><b><?php echo $pl->pl_me4_6; ?></b></td>
    <td colspan="2"><b><?php echo $pl->pl_me4_9; ?></b></td>
  </tr>
  <tr>
    <td rowspan="2">5</td>
    <td colspan="8">Any Special comments &amp; / or care to be taken</td>
  </tr>
  <tr>
    <td colspan="8"><b><?php echo $pl->pl_me5_1; ?></b></td>
  </tr>
</table><br />
<table width="200" border="1">
  <tr>
    <td colspan="7"><strong>MACHINERY</strong></td>
  </tr>
  <tr>
    <td width="5%" rowspan="5">1</td>
    <td colspan="6">Only if, there were any of followings pending / not resolved at / by the Pre-Production meeting</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
    <td width="19%">Action Completed by</td>
    <td colspan="2">Comments</td>
  </tr>
  <tr>
    <td align="center"><?php if($pl->pl_ma1_1 == "on"){echo '<img src="/var/www/html/ppnotes/assets/img/check.png" height="20">';} ?></td>    
    <td colspan="2">Extra/Special machiunery requested </td>
    <td><b><?php echo $pl->pl_ma1_4; ?></b></td>
    <td colspan="2"><b><?php echo $pl->pl_ma1_5; ?></b></td>
  </tr>
  <tr>
    <td align="center"><?php if($pl->pl_ma1_2 == "on"){echo '<img src="/var/www/html/ppnotes/assets/img/check.png" height="20">';} ?></td>        
    <td colspan="2">Extra/Special needles requested </td>
    <td><b><?php echo $pl->pl_ma1_6; ?></b></td>
    <td colspan="2"><b><?php echo $pl->pl_ma1_7; ?></b></td>
  </tr>
  <tr>
    <td align="center"><?php if($pl->pl_ma1_3 == "on"){echo '<img src="/var/www/html/ppnotes/assets/img/check.png" height="20">';} ?></td>        
    <td colspan="2">Attachments</td>
    <td><b><?php echo $pl->pl_ma1_8; ?></b></td>
    <td colspan="2"><b><?php echo $pl->pl_ma1_9; ?></b></td>
  </tr>
  <tr>
    <td rowspan="8">2</td>
    <td colspan="6">Have the following requirements been met in the pilot sewing</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="3">If Not</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>Reason</td>
    <td width="19%">Action</td>
    <td width="19%">Action By</td>
  </tr>
  <tr>
    <td colspan="2">The machinery set to the spec</td>
    <td width="6%"><b><?php echo $pl->pl_ma2_1; ?></b></td>
    <td><b><?php echo $pl->pl_ma2_6; ?></b></td>
    <td><b><?php echo $pl->pl_ma2_7; ?></b></td>
    <td><b><?php echo $pl->pl_ma2_8; ?></b></td>
  </tr>
  <tr>
    <td colspan="2">Correct machineries are used</td>
    <td><b><?php echo $pl->pl_ma2_2; ?></b></td>
    <td><b><?php echo $pl->pl_ma2_9; ?></b></td>
    <td><b><?php echo $pl->pl_ma2_10; ?></b></td>
    <td><b><?php echo $pl->pl_ma2_11; ?></b></td>
  </tr>
  <tr>
    <td colspan="2">Correct attachments are used</td>
    <td><b><?php echo $pl->pl_ma2_3; ?></b></td>
    <td><b><?php echo $pl->pl_ma2_12; ?></b></td>
    <td><b><?php echo $pl->pl_ma2_13; ?></b></td>
    <td><b><?php echo $pl->pl_ma2_14; ?></b></td>
  </tr>
  <tr>
    <td colspan="2">All opereatilons have been included </td>
    <td><b><?php echo $pl->pl_ma2_4; ?></b></td>
    <td><b><?php echo $pl->pl_ma2_15; ?></b></td>
    <td><b><?php echo $pl->pl_ma2_16; ?></b></td>
    <td><b><?php echo $pl->pl_ma2_17; ?></b></td>
  </tr>
  <tr>
    <td colspan="2">Correct needles are used</td>
    <td><b><?php echo $pl->pl_ma2_5; ?></b></td>
    <td><b><?php echo $pl->pl_ma2_18; ?></b></td>
    <td><b><?php echo $pl->pl_ma2_19; ?></b></td>
    <td><b><?php echo $pl->pl_ma2_20; ?></b></td>
  </tr>
  <tr>
    <td rowspan="2">3</td>
    <td colspan="4">Is necessary to hire any machinery </td>
    <td colspan="2"><b><?php echo $pl->pl_ma3_1; ?></b></td>
  </tr>
  <tr>
    <td colspan="3">If Yes Specify</td>
    <td colspan="3"><b><?php echo $pl->pl_ma3_2; ?></b></td>
  </tr>
  <tr>
    <td rowspan="3">&nbsp;</td>
    <td colspan="4">What there any detection of needle damage ?</td>
    <td colspan="2"><b><?php echo $pl->pl_ma4_1; ?></b></td>
  </tr>
  <tr>
    <td rowspan="2">if Yes</td>
    <td colspan="2">Action</td>
    <td colspan="3"><b><?php echo $pl->pl_ma4_2; ?></b></td>
  </tr>
  <tr>
    <td colspan="2">Action By</td>
    <td colspan="3"><b><?php echo $pl->pl_ma4_3; ?></b></td>
  </tr>
  <tr>
    <td rowspan="2">5</td>
    <td colspan="6">Any Special Comments </td>
  </tr>
  <tr>
    <td colspan="6"><b><?php echo $pl->pl_ma5_1; ?></b></td>
  </tr>
</table><br />
<table width="200" border="1">
  <tr>
    <td colspan="9"><strong>MAKE UP PILOT</strong></td>
  </tr>
  <tr>
    <td width="5%" rowspan="7">1</td>
    <td colspan="8">Mechanists training and their performance</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
    <td colspan="4">If Not</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td> 
    <td colspan="3">Action</td>
    <td>Action By</td>
  </tr>
  <tr>
    <td colspan="3">The sealed garment is shown and explained </td>
    <td width="8%"><b><?php echo $pl->pl_mu1_1; ?></b></td>
    <td colspan="3"><b><?php echo $pl->pl_mu1_5; ?></b></td>
    <td width="10%"><b><?php echo $pl->pl_mu1_6; ?></b></td>
  </tr>
  <tr>
    <td colspan="3">All of them have been issued pink cards</td>
    <td><b><?php echo $pl->pl_mu1_2; ?></b></td>
    <td colspan="3"><b><?php echo $pl->pl_mu1_7; ?></b></td>
    <td><b><?php echo $pl->pl_mu1_8; ?></b></td>
  </tr>
  <tr>
    <td colspan="3">Have operators reached the required standard of the Sealed gmt ?</td>
    <td><b><?php echo $pl->pl_mu1_3; ?></b></td>
    <td colspan="3"><b><?php echo $pl->pl_mu1_9; ?></b></td>
    <td><b><?php echo $pl->pl_mu1_10; ?></b></td>
  </tr>
  <tr>
    <td colspan="3">Can they constantly meet up to the standards of the Sealed gmt ?</td>
    <td><b><?php echo $pl->pl_mu1_4; ?></b></td>
    <td colspan="3"><b><?php echo $pl->pl_mu1_11; ?></b></td>
    <td><b><?php echo $pl->pl_mu1_12; ?></b></td>
  </tr>
  <tr>
    <td rowspan="6">2</td>
    <td colspan="8">Setting up machinery</td>
  </tr>
  <tr>
    <td colspan="4">Who was involved in setting up the machinery ?</td>
    <td colspan="4"><b><?php echo $pl->pl_mu2_1; ?></b></td>
  </tr>
  <tr>
    <td colspan="4">Who was involved in setting up the machinery ?</td>
    <td colspan="4"><b><?php echo $pl->pl_mu2_2; ?></b></td>
  </tr>
  <tr>
    <td width="12%">If Yes</td>
    <td width="17%">What are they</td>
    <td colspan="6"><b><?php echo $pl->pl_mu2_3; ?></b></td>
  </tr>
  <tr>
    <td rowspan="2">If Not</td>
    <td>Action</td>
    <td colspan="6"><b><?php echo $pl->pl_mu2_4; ?></b></td>
  </tr>
  <tr>
    <td>Action By</td>
    <td colspan="6"><b><?php echo $pl->pl_mu2_5; ?></b></td>
  </tr>
  <tr>
    <td>3</td>
    <td colspan="4">How many operation stages are there ?</td>
    <td colspan="4"><b><?php echo $pl->pl_mu3_1; ?></b></td>
  </tr>
  <tr>
    <td rowspan="5">4</td>
    <td colspan="8">Sample requirements</td>
  </tr>
  <tr>
    <td colspan="4">A standard gmt has been displayed in line signed by FM , PM Technician, TM , QAM</td>
    <td colspan="4"><b><?php echo $pl->pl_mu4_1; ?></b></td>
  </tr>
  <tr>
    <td>If Not</td>
    <td>The date it would be completed </td>
    <td colspan="2"><b><?php echo $pl->pl_mu4_2; ?></b></td>
    <td width="16%">Action By</td>
    <td colspan="3"><b><?php echo $pl->pl_mu4_3; ?></b></td>
  </tr>
  <tr>
    <td colspan="4">Has a sample garment been sent to the warehouse ?</td>
    <td colspan="4"><b><?php echo $pl->pl_mu4_4; ?></b></td>
  </tr>
  <tr>
    <td>If Not</td>
    <td>The date it would be sent</td>
    <td colspan="2"><b><?php echo $pl->pl_mu4_5; ?></b></td>
    <td>Action By</td>
    <td colspan="3"><b><?php echo $pl->pl_mu4_6; ?></b></td>
  </tr>
  <tr>
    <td rowspan="6">5</td>
    <td colspan="4">Was there any adverse fabric reaction</td>
    <td colspan="4"><b><?php echo $pl->pl_mu5_1; ?></b></td>
  </tr>
  <tr>
    <td colspan="8">If Yes</td>
  </tr>
  <tr>
    <td>Shrinkage/Growing</td>
    <td><b><?php echo $pl->pl_mu5_2; ?></b></td>
    <td width="16%">Part Name(s)</td>
    <td><b><?php echo $pl->pl_mu5_3; ?></b></td>
    <td>Lengthwise</td>
    <td width="8%"><b><?php echo $pl->pl_mu5_4; ?></b></td>
    <td width="8%">widthwise</td>
    <td><b><?php echo $pl->pl_mu5_5; ?></b></td>
  </tr>
  <tr>
    <td colspan="4">Is it affected to the final garment measurement ? </td>
    <td colspan="4"><b><?php echo $pl->pl_mu5_6; ?></b></td>
  </tr>
  <tr>
    <td colspan="8">If Yes</td>
  </tr>
  <tr>
    <td>Measurements</td>
    <td colspan="3"><b><?php echo $pl->pl_mu5_7; ?></b></td>
    <td>Deviation</td>
    <td colspan="3"><b><?php echo $pl->pl_mu5_8; ?></b></td>
  </tr>
  <tr>
    <td rowspan="6">6</td>
    <td colspan="4">Total number of garments sewed in the pilot cut</td>
    <td colspan="4"><b><?php echo $pl->pl_mu6_1; ?></b></td>
  </tr>
  <tr>
    <td colspan="4">Number of garments brought to the meeting to be assessed </td>
    <td colspan="4"><b><?php echo $pl->pl_mu6_2; ?></b></td>
  </tr>
  <tr>
    <td colspan="4">Number of garments from the pilot that can be used as 1st bulk </td>
    <td colspan="4"><b><?php echo $pl->pl_mu6_3; ?></b></td>
  </tr>
  <tr>
    <td colspan="4">Is the number of gmts shippable less than the number of gmts sewed ?</td>
    <td colspan="4"><b><?php echo $pl->pl_mu6_4; ?></b></td>
  </tr>
  <tr>
    <td rowspan="2">If Yes</td>
    <td colspan="3">Reason</td>
    <td colspan="4"><b><?php echo $pl->pl_mu6_5; ?></b></td>
  </tr>
  <tr>
    <td colspan="3">Preventive action taken </td>
    <td colspan="4"><b><?php echo $pl->pl_mu6_6; ?></b></td>
  </tr>
</table><br />
<table width="200" border="1">
  <tr>
    <td colspan="8"><strong>GARMENT APPRAISAL</strong></td>
  </tr>
  <tr>
    <td width="5%" rowspan="10">1</td>
    <td colspan="7">Are the followings correct according to the spec ?</td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
    <td colspan="2">If Not</td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
    <td width="26%">Action</td>
    <td width="16%">Action By</td>
  </tr>
  <tr>
    <td colspan="4">Stitches per 3cm/SPI </td>
    <td><b><?php echo $pl2->pl_ga1_1; ?></b></td>
    <td><b><?php echo $pl2->pl_ga1_8; ?></b></td>
    <td><b><?php echo $pl2->pl_ga1_9; ?></b></td>
  </tr>
  <tr>
    <td colspan="4">Specified bite / gauge</td>
    <td><b><?php echo $pl2->pl_ga1_2; ?></b></td>
    <td><b><?php echo $pl2->pl_ga1_10; ?></b></td>
    <td><b><?php echo $pl2->pl_ga1_11; ?></b></td>
  </tr>
  <tr>
    <td colspan="4">Label and UPC details against Trim Card</td>
    <td><b><?php echo $pl2->pl_ga1_3; ?></b></td>
    <td><b><?php echo $pl2->pl_ga1_12; ?></b></td>
    <td><b><?php echo $pl2->pl_ga1_13; ?></b></td>
  </tr>
  <tr>
    <td colspan="4">Gmt measurements</td>
    <td><b><?php echo $pl2->pl_ga1_4; ?></b></td>
    <td><b><?php echo $pl2->pl_ga1_14; ?></b></td>
    <td><b><?php echo $pl2->pl_ga1_15; ?></b></td>
  </tr>
  <tr>
    <td colspan="4">Gmts fit against the grades</td>
    <td><b><?php echo $pl2->pl_ga1_5; ?></b></td>
    <td><b><?php echo $pl2->pl_ga1_16; ?></b></td>
    <td><b><?php echo $pl2->pl_ga1_17; ?></b></td>
  </tr>
  <tr>
    <td colspan="4">Gmts when compared to the sealed gmt</td>
    <td><b><?php echo $pl2->pl_ga1_6; ?></b></td>
    <td><b><?php echo $pl2->pl_ga1_18; ?></b></td>
    <td><b><?php echo $pl2->pl_ga1_19; ?></b></td>
  </tr>
  <tr>
    <td colspan="4">Packing &amp; labels</td>
    <td width="5%"><b><?php echo $pl2->pl_ga1_7; ?></b></td>
    <td><b><?php echo $pl2->pl_ga1_20; ?></b></td>
    <td><b><?php echo $pl2->pl_ga1_21; ?></b></td>
  </tr>
  <tr>
    <td rowspan="4">2</td>
    <td colspan="5">Was there any noticeable difference in the gmt after washing</td>
    <td colspan="2"><b><?php echo $pl2->pl_ga2_1; ?></b></td>
  </tr>
  <tr>
    <td colspan="2" rowspan="3">If Yes</td>
    <td colspan="3">Difference</td>
    <td colspan="2"><b><?php echo $pl2->pl_ga2_2; ?></b></td>
  </tr>
  <tr>
    <td colspan="3">Action</td>
    <td colspan="2"><b><?php echo $pl2->pl_ga2_3; ?></b></td>
  </tr>
  <tr>
    <td colspan="3">Action By</td>
    <td colspan="2"><b><?php echo $pl2->pl_ga2_4; ?></b></td>
  </tr>
  <tr>
    <td>3</td>
    <td colspan="5">Is there any job / trim / accessory not on the pilot gmt which should be on the customer gmt?</td>
    <td colspan="2"><b><?php echo $pl2->pl_ga3_1; ?></b></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="4">If yes specify</td>
    <td colspan="3"><b><?php echo $pl2->pl_ga3_2; ?></b></td>
  </tr>
  <tr>
    <td rowspan="6">4</td>
    <td colspan="2" rowspan="2">Cunsumptions</td>
    <td width="13%" rowspan="2">Costed Consumption</td>
    <td width="12%" rowspan="2">Actual Consumption</td>
    <td colspan="3">If, Actual consumption &gt; Costed consumption</td>
  </tr>
  <tr>
    <td colspan="2">Preventive action</td>
    <td>Action By</td>
  </tr>
  <tr>
    <td width="5%" rowspan="2">Elastic</td>
    <td width="18%"><b><?php echo $pl2->pl_ga4_1; ?></b></td>
    <td><b><?php echo $pl2->pl_ga4_2; ?></b></td>
    <td><b><?php echo $pl2->pl_ga4_3; ?></b></td>
    <td colspan="2"><b><?php echo $pl2->pl_ga4_4; ?></b></td>
    <td><b><?php echo $pl2->pl_ga4_5; ?></b></td>
  </tr>
  <tr>
    <td><b><?php echo $pl2->pl_ga4_6; ?></b></td>
    <td><b><?php echo $pl2->pl_ga4_7; ?></b></td>
    <td><b><?php echo $pl2->pl_ga4_8; ?></b></td>
    <td colspan="2"><b><?php echo $pl2->pl_ga4_9; ?></b></td>
    <td><b><?php echo $pl2->pl_ga4_10; ?></b></td>
  </tr>
  <tr>
    <td rowspan="2">Trims</td>
    <td><b><?php echo $pl2->pl_ga4_11; ?></b></td>
    <td><b><?php echo $pl2->pl_ga4_12; ?></b></td>
    <td><b><?php echo $pl2->pl_ga4_13; ?></b></td>
    <td colspan="2"><b><?php echo $pl2->pl_ga4_14; ?></b></td>
    <td><b><?php echo $pl2->pl_ga4_15; ?></b></td>
  </tr>
  <tr>
    <td><b><?php echo $pl2->pl_ga4_16; ?></b></td>
    <td><b><?php echo $pl2->pl_ga4_17; ?></b></td>
    <td><b><?php echo $pl2->pl_ga4_18; ?></b></td>
    <td colspan="2"><b><?php echo $pl2->pl_ga4_19; ?></b></td>
    <td><b><?php echo $pl2->pl_ga4_20; ?></b></td>
  </tr>
  <tr>
    <td>5</td>
    <td colspan="5">Are any confident that the production could progress without</td>
    <td colspan="2"><b><?php echo $pl2->pl_ga5_1; ?></b></td>
  </tr>
  <tr>
    <td>6</td>
    <td colspan="2">Any special comment : </td>
    <td colspan="5"><b><?php echo $pl2->pl_ga6_1; ?></b></td>
  </tr>
</table><br />
<table width="200" border="1">
  <tr>
    <td colspan="9"><strong>CUTTING</strong></td>
  </tr>
  <tr>
    <td width="5%" rowspan="5">1</td>
    <td colspan="8">Only if , there were any of followings pending / not resolved at / by the Pre Production meeting</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
    <td colspan="2">Action completed by</td>
    <td colspan="2">Comments</td>
  </tr>
  <tr>
    <td width="7%" align="center"><?php if($pl2->pl_cu1_1 == "on"){echo '<img src="/var/www/html/ppnotes/assets/img/check.png" height="20">';} ?></td>
    <td colspan="3">Max.Marker Length</td>
    <td colspan="2"><b><?php echo $pl2->pl_cu1_4 ?></b></td>
    <td colspan="2"><b><?php echo $pl2->pl_cu1_5 ?></b></td>
  </tr>
  <tr>
    <td align="center"><?php if($pl2->pl_cu1_2 == "on"){echo '<img src="/var/www/html/ppnotes/assets/img/check.png" height="20">';} ?></td>
    <td colspan="3">Max.Ply Height</td>
    <td colspan="2"><b><?php echo $pl2->pl_cu1_6 ?></b></td>
    <td colspan="2"><b><?php echo $pl2->pl_cu1_7 ?></b></td>
  </tr>
  <tr>
    <td align="center"><?php if($pl2->pl_cu1_3 == "on"){echo '<img src="/var/www/html/ppnotes/assets/img/check.png" height="20">';} ?></td>
    <td colspan="3">Cutting Method</td>
    <td colspan="2"><b><?php echo $pl2->pl_cu1_8 ?></b></td>
    <td colspan="2"><b><?php echo $pl2->pl_cu1_9 ?></b></td>
  </tr>
  <tr>
    <td rowspan="3">2</td>
    <td colspan="8">Pilot Cut</td>
  </tr>
  <tr>
    <td colspan="2">Cut date</td>
    <td width="12%"><b><?php echo $pl2->pl_cu2_1 ?></b></td>
    <td width="12%">Docket no.</td>
    <td colspan="2"><b><?php echo $pl2->pl_cu2_2 ?></b></td>
    <td width="12%">Ply depth</td>
    <td width="13%"><b><?php echo $pl2->pl_cu2_3 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">No . Of gmts cut</td>
    <td><b><?php echo $pl2->pl_cu2_4 ?></b></td>
    <td>Marker no.</td>
    <td colspan="2"><b><?php echo $pl2->pl_cu2_5 ?></b></td>
    <td>Relaxation</td>
    <td><b><?php echo $pl2->pl_cu2_6 ?></b></td>
  </tr>
  <tr>
    <td rowspan="4">3</td>
    <td colspan="4">Where there any difficult pieces when cutting ?</td>
    <td colspan="4"><b><?php echo $pl2->pl_cu3_1 ?></b></td>
  </tr>
  <tr>
    <td rowspan="3">If Yes</td>
    <td colspan="3">Specify pieces </td>
    <td colspan="4"><b><?php echo $pl2->pl_cu3_2 ?></b></td>
  </tr>
  <tr>
    <td colspan="3">Action taken to overcome them</td>
    <td colspan="4"><b><?php echo $pl2->pl_cu3_3 ?></b></td>
  </tr>
  <tr>
    <td colspan="3">Action need to solve them from Lab / Technical</td>
    <td colspan="4"><b><?php echo $pl2->pl_cu3_4 ?></b></td>
  </tr>
  <tr>
    <td rowspan="3">4</td>
    <td colspan="2">Fabric spec width</td>
    <td colspan="2"><b><?php echo $pl2->pl_cu4_1 ?></b></td>
    <td colspan="2">Fabric actual width</td>
    <td colspan="2"><b><?php echo $pl2->pl_cu4_2 ?></b></td>
  </tr>
  <tr>
    <td colspan="4">If actual width &lt; spec width, action</td>
    <td colspan="4"><b><?php echo $pl2->pl_cu4_3 ?></b></td>
  </tr>
  <tr>
    <td colspan="4">Action By</td>
    <td colspan="4"><b><?php echo $pl2->pl_cu4_4 ?></b></td>
  </tr>
  <tr>
    <td rowspan="6">5</td>
    <td colspan="4">Fabric &amp; Lace Consumption</td>
    <td colspan="4">If Actual con.&gt; Costed con.</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">Costed con.</td>
    <td>Actual con.</td>
    <td colspan="3">Preventive action</td>
    <td>Action by</td>
  </tr>
  <tr>
    <td>Fabric</td>
    <td colspan="2"><b><?php echo $pl2->pl_cu5_1 ?></b></td>
    <td><b><?php echo $pl2->pl_cu5_2 ?></b></td>
    <td colspan="3"><b><?php echo $pl2->pl_cu5_3 ?></b></td>
    <td><b><?php echo $pl2->pl_cu5_4 ?></b></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="2"></td>
    <td></td>
    <td colspan="3"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Lace</td>
    <td colspan="2"><b><?php echo $pl2->pl_cu5_5 ?></b></td>
    <td><b><?php echo $pl2->pl_cu5_6 ?></b></td>
    <td colspan="3"><b><?php echo $pl2->pl_cu5_7 ?></b></td>
    <td><b><?php echo $pl2->pl_cu5_8 ?></b></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="4">6</td>
    <td colspan="7">Was there any adverse reaction on Fabric,Lace ( including when H/S, Printing , Fussing ) ?</td>
    <td><b><?php echo $pl2->pl_cu6_1 ?></b></td>
  </tr>
  <tr>
    <td>If Yes</td>
    <td colspan="2">Shrinkage/Growing/….</td>
    <td colspan="2">Part name( s )</td>
    <td width="12%">Lengthwise</td>
    <td colspan="2">Widthwise</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><b><?php echo $pl2->pl_cu6_2 ?></b></td>
    <td colspan="2"><b><?php echo $pl2->pl_cu6_3 ?></b></td>
    <td><b><?php echo $pl2->pl_cu6_4 ?></b></td>
    <td colspan="2"><b><?php echo $pl2->pl_cu6_5 ?></b></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><b><?php echo $pl2->pl_cu6_6 ?></b></td>
    <td colspan="2"><b><?php echo $pl2->pl_cu6_7 ?></b></td>
    <td><b><?php echo $pl2->pl_cu6_8 ?></b></td>
    <td colspan="2"><b><?php echo $pl2->pl_cu6_9 ?></b></td>
  </tr>
 <tr>
    <td rowspan="4">7</td>
    <td colspan="5">Can the face &amp; reverse side of the fabric be idintified ?</td>
    <td colspan="3"><b><?php echo $pl2->pl_cu7_1 ?></b></td>
  </tr>
  <tr>
    <td>If Yes</td>
    <td colspan="2">How ?</td>
    <td colspan="5"><b><?php echo $pl2->pl_cu7_2 ?></b></td>
  </tr>
  <tr>
    <td rowspan="2">If No</td>
    <td colspan="2">Action need from Lab</td>
    <td colspan="5"><b><?php echo $pl2->pl_cu7_3 ?></b></td>
  </tr>
  <tr>
    <td colspan="2"> Numbering </td>
    <td><b><?php echo $pl2->pl_cu7_4 ?></b></td>
    <td width="12%">If Yes, Method</td>
    <td colspan="3"><b><?php echo $pl2->pl_cu7_5 ?></b></td>
  </tr>
  <tr>
    <td rowspan="2">8</td>
    <td colspan="4">Does the fabric have to be face up ?</td>
    <td colspan="4"><b><?php echo $pl2->pl_cu8_1 ?></b></td>
  </tr>
  <tr>
    <td>if Not</td>
    <td width="15%">Reason</td>
    <td colspan="6"><b><?php echo $pl2->pl_cu8_2 ?></b></td>
  </tr>
  <tr>
    <td>9</td>
    <td colspan="4">What are the priority points that have been indentified ?</td>
    <td colspan="4"><b><?php echo $pl2->pl_cu9_1 ?></b></td>
  </tr>
  <tr>
    <td>10</td>
    <td colspan="3">What are the critical points on the marker that have been discussed ?</td>
    <td colspan="5"><b><?php echo $pl2->pl_cu10_1 ?></b></td>
  </tr>
  <tr>
    <td rowspan="3">11</td>
    <td colspan="4">Any problems encountered with the pattern / placement boards ?</td>
    <td colspan="4"><b><?php echo $pl2->pl_cu11_1 ?></b></td>
  </tr>
  <tr>
    <td rowspan="2">If Yes</td>
    <td>Specifiy</td>
    <td colspan="6"><b><?php echo $pl2->pl_cu11_2 ?></b></td>
  </tr>
  <tr>
    <td>Action</td>
    <td colspan="3"><b><?php echo $pl2->pl_cu11_3 ?></b></td>
    <td>Action By</td>
    <td colspan="2"><b><?php echo $pl2->pl_cu11_4 ?></b></td>
  </tr>
  <tr>
    <td rowspan="3">12</td>
    <td colspan="4">Have you handle this fabric Quality before ?</td>
    <td colspan="4"><b><?php echo $pl2->pl_cu12_1 ?></b></td>
  </tr>
  <tr>
    <td rowspan="2">if Yes</td>
    <td colspan="3">What styles ?</td>
    <td colspan="4"><b><?php echo $pl2->pl_cu12_2 ?></b></td>
  </tr>
  <tr>
    <td colspan="3">What experience would you need to look at ?</td>
    <td colspan="4"><b><?php echo $pl2->pl_cu12_3 ?></b></td>
  </tr>
</table><br />
<table width="200" border="1">
  <tr>
    <td colspan="6"><strong>MOULDING ( IF ANY )</strong></td>
  </tr>
  <tr>
    <td width="5%" rowspan="5">1</td>
    <td colspan="5">Only if, there were any of followings pending / not resolved at / by the Pre-Production meeting</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td width="19%">Action completed by</td>
    <td colspan="2">Comments</td>
  </tr>
  <tr>
    <td width="8%" align="center"><?php if($pl2->pl_mo1_1 == "on"){echo '<img src="/var/www/html/ppnotes/assets/img/check.png" height="20">';} ?></td>
    <td width="30%">Mould type / Shape / Size / Cup Depth</td>
    <td><b><?php echo $pl2->pl_mo1_4 ?></b></td>
    <td colspan="2"><b><?php echo $pl2->pl_mo1_5 ?></b></td>
  </tr>
  <tr>
    <td align="center"><?php if($pl2->pl_mo1_2 == "on"){echo '<img src="/var/www/html/ppnotes/assets/img/check.png" height="20">';} ?></td>
    <td>Setting temp. / Time</td>
    <td><b><?php echo $pl2->pl_mo1_6 ?></b></td>
    <td colspan="2"><b><?php echo $pl2->pl_mo1_7 ?></b></td>
  </tr>
  <tr>
    <td align="center"><?php if($pl2->pl_mo1_3 == "on"){echo '<img src="/var/www/html/ppnotes/assets/img/check.png" height="20">';} ?></td>
    <td>Ply height / Single or Double moulding</td>
    <td><b><?php echo $pl2->pl_mo1_8 ?></b></td>
    <td colspan="2"><b><?php echo $pl2->pl_mo1_9 ?></b></td>
  </tr>
  <tr>
    <td rowspan="7">2</td>
    <td colspan="5">Specify any problem encountered ( If any ) in following areas</td>
  </tr>
  <tr>
    <td colspan="2">Area</td>
    <td>Problem</td>
    <td width="19%">Action</td>
    <td width="19%">Action By</td>
  </tr>
  <tr>
    <td colspan="2">Moulding to the Specs set</td>
    <td><b><?php echo $pl2->pl_mo2_1 ?></b></td>
    <td><b><?php echo $pl2->pl_mo2_2 ?></b></td>
    <td><b><?php echo $pl2->pl_mo2_3 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">Adversed reactions* on fabric</td>
    <td><b><?php echo $pl2->pl_mo2_4 ?></b></td>
    <td><b><?php echo $pl2->pl_mo2_5 ?></b></td>
    <td><b><?php echo $pl2->pl_mo2_6 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">Cutting the moulded panels</td>
    <td><b><?php echo $pl2->pl_mo2_7 ?></b></td>
    <td><b><?php echo $pl2->pl_mo2_8 ?></b></td>
    <td><b><?php echo $pl2->pl_mo2_9 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">Others</td>
    <td><b><?php echo $pl2->pl_mo2_10 ?></b></td>
    <td><b><?php echo $pl2->pl_mo2_11 ?></b></td>
    <td><b><?php echo $pl2->pl_mo2_12 ?></b></td>
  </tr>
  <tr>
    <td colspan="5">*Discoloration, bleaching, heavy shrinkage due to heat, Bubbing, Fabric tearing</td>
  </tr>
</table>
<br />
<table width="200" border="1">
  <tr>
    <td colspan="4"><strong>WORK STUDY</strong></td>
  </tr>
  <tr>
    <td width="5%" rowspan="6">1</td>
    <td colspan="2">SMV of the garment</td>
    <td><b><?php echo $pl2->pl_ws1_6 ?></b></td>    
  </tr>
  <tr>
    <td colspan="2">Has the planned efficiency been achived by machinists ?</td>
    <td><b><?php echo $pl2->pl_ws1_1 ?></b></td>
  </tr>
  <tr>
    <td width="14%" rowspan="4">If Not</td>
    <td width="30%">Preventive action taken</td>
    <td><b><?php echo $pl2->pl_ws1_2 ?></b></td>
  </tr>
  <tr>
    <td>Action by</td>
    <td><b><?php echo $pl2->pl_ws1_3 ?></b></td>
  </tr>
  <tr>
    <td>Extra std hours required to complete of the order</td>
    <td><b><?php echo $pl2->pl_ws1_4 ?></b></td>
  </tr>
  <tr>
    <td>Action Plan to catch back</td>
    <td><b><?php echo $pl2->pl_ws1_5 ?></b></td>
  </tr>
  <tr>
    <td>2</td>
    <td colspan="2">Is there any proposal or method study to reduce the SMV ?</td>
    <td><b><?php echo $pl2->pl_ws2_1 ?></b></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>If Yes</td>
    <td>specify;</td>
    <td><b><?php echo $pl2->pl_ws2_2 ?></b></td>
  </tr>
  <tr>
    <td>3</td>
    <td colspan="2">Layout finalized</td>
    <td><b><?php echo $pl2->pl_ws3_1 ?></b></td>
  </tr>
  <tr>
    <td>4</td>
    <td colspan="2">Yamazumi</td>
    <td><b><?php echo $pl2->pl_ws4_1 ?></b></td>
  </tr>
  <tr>
    <td>5</td>
    <td colspan="2">Team member allocation</td>
    <td><b><?php echo $pl2->pl_ws5_1 ?></b></td>
  </tr>
  <tr>
    <td>6</td>
    <td colspan="2">Team member skill chart</td>
    <td><b><?php echo $pl2->pl_ws6_1 ?></b></td>
  </tr>
  <tr>
    <td>7</td>
    <td>Special Comments</td>
    <td colspan="2"><b><?php echo $pl2->pl_ws7_1 ?></b></td>    
  </tr>
</table><br />
<table width="200" border="1">
  <tr>
    <td colspan="5"><strong>QUALITY ASSURANCE</strong></td>
  </tr>
  <tr>
    <td width="5%" rowspan="5">1</td>
    <td colspan="2">Are the pilot garments shippable ?</td>
    <td colspan="2"><b><?php echo $pl2->pl_qa1_1 ?></b></td>
  </tr>
  <tr>
    <td width="14%" rowspan="3">if Not</td>
    <td width="30%">Reason</td>
    <td colspan="2"><b><?php echo $pl2->pl_qa1_2 ?></b></td>
  </tr>
  <tr>
    <td>Action required</td>
    <td colspan="2"><b><?php echo $pl2->pl_qa1_3 ?></b></td>
  </tr>
  <tr>
    <td>Action by</td>
    <td colspan="2"><b><?php echo $pl2->pl_qa1_4 ?></b></td>
  </tr>
  <tr>
    <td>If Yes</td>
    <td>What are the comments on pilot garments appraised ?</td>
    <td colspan="2"><b><?php echo $pl2->pl_qa1_5 ?></b></td>
  </tr>
  <tr>
    <td rowspan="3">2</td>
    <td colspan="2">Is the Process Capability Chart available ?</td>
    <td colspan="2"><b><?php echo $pl2->pl_qa2_1 ?></b></td>
  </tr>
  <tr>
    <td>If Yes</td>
    <td>What are the comments</td>
    <td colspan="2"><b><?php echo $pl2->pl_qa2_2 ?></b></td>
  </tr>
  <tr>
    <td>If No</td>
    <td>Reissuing Date : <b><?php echo $pl2->pl_qa2_3 ?></b></td>
    <td>Action by</td>
    <td><b><?php echo $pl2->pl_qa2_4 ?></b></td>
  </tr>
</table><br />
<table width="200" border="1">
  <tr>
    <td colspan="6"><b>PRESENTATION CHECK / MERCHANDISING</b></td>
  </tr>
  <tr>
    <td width="5%" rowspan="6">1</td>
    <td colspan="5">Only if, there were any of followings pending / not resolved at / by the Pre-Production meeting.</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
    <td width="19%">Action completed by</td>
    <td width="20%">Comments</td>
  </tr>
  <tr>
    <td width="8%" align="center"><?php if($pl2->pl_pc1_1 == "on"){echo '<img src="/var/www/html/ppnotes/assets/img/check.png" height="20">';} ?></td>
    <td colspan="2">Complete Trim card received for all colours</td>
    <td><b><?php echo $pl2->pl_pc1_5 ?></b></td>
    <td><b><?php echo $pl2->pl_pc1_6 ?></b></td>
  </tr>
  <tr>
    <td align="center"><?php if($pl2->pl_pc1_2 == "on"){echo '<img src="/var/www/html/ppnotes/assets/img/check.png" height="20">';} ?></td>
    <td colspan="2">Discrepancies between trim card and approved trims</td>
    <td><b><?php echo $pl2->pl_pc1_7 ?></b></td>
    <td><b><?php echo $pl2->pl_pc1_8 ?></b></td>
  </tr>
  <tr>
    <td align="center"><?php if($pl2->pl_pc1_3 == "on"){echo '<img src="/var/www/html/ppnotes/assets/img/check.png" height="20">';} ?></td>
    <td colspan="2">Document availability MPO ,BOM, LOF</td>
    <td><b><?php echo $pl2->pl_pc1_9 ?></b></td>
    <td><b><?php echo $pl2->pl_pc1_10 ?></b></td>
  </tr>
  <tr>
    <td align="center"><?php if($pl2->pl_pc1_4 == "on"){echo '<img src="/var/www/html/ppnotes/assets/img/check.png" height="20">';} ?></td>
    <td colspan="2">Packing method &amp; standard</td>
    <td><b><?php echo $pl2->pl_pc1_11 ?></b></td>
    <td><b><?php echo $pl2->pl_pc1_12 ?></b></td>
  </tr>
  <tr>
    <td rowspan="4">2</td>
    <td colspan="3">Are fabrics &amp; trims available for all colours ?</td>
    <td colspan="2"><b><?php echo $pl2->pl_pc2_1 ?></b></td>
  </tr>
  <tr>
    <td rowspan="3">If Not</td>
    <td width="29%">Item &amp; Color</td>
    <td width="19%">Receiving Date</td>
    <td>Action by</td>
    <td>Comments</td>
  </tr>
  <tr>
    <td><b><?php echo $pl2->pl_pc2_2 ?></b></td>
    <td><b><?php echo $pl2->pl_pc2_3 ?></b></td>
    <td><b><?php echo $pl2->pl_pc2_4 ?></b></td>
    <td><b><?php echo $pl2->pl_pc2_5 ?></b></td>
  </tr>
  <tr>
    <td><b><?php echo $pl2->pl_pc2_6 ?></b></td>
    <td><b><?php echo $pl2->pl_pc2_7 ?></b></td>
    <td><b><?php echo $pl2->pl_pc2_8 ?></b></td>
    <td><b><?php echo $pl2->pl_pc2_9 ?></b></td>
  </tr>
  <tr>
    <td rowspan="6">3</td>
    <td colspan="3" rowspan="2">Are the followings correct according to the spec ?</td>
    <td colspan="2">If Not</td>
  </tr>
  <tr>
    <td>Action</td>
    <td>Action by</td>
  </tr>
  <tr>
    <td colspan="2">Bag / Box / Pack Label</td>
    <td><b><?php echo $pl2->pl_pc3_1 ?></b></td>
    <td><b><?php echo $pl2->pl_pc3_5 ?></b></td>
    <td><b><?php echo $pl2->pl_pc3_6 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">UPC number</td>
    <td><b><?php echo $pl2->pl_pc3_2 ?></b></td>
    <td><b><?php echo $pl2->pl_pc3_7 ?></b></td>
    <td><b><?php echo $pl2->pl_pc3_8 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">Garment Label</td>
    <td><b><?php echo $pl2->pl_pc3_3 ?></b></td>
    <td><b><?php echo $pl2->pl_pc3_9 ?></b></td>
    <td><b><?php echo $pl2->pl_pc3_10 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">Display criterion</td>
    <td><b><?php echo $pl2->pl_pc3_4 ?></b></td>
    <td><b><?php echo $pl2->pl_pc3_11 ?></b></td>
    <td><b><?php echo $pl2->pl_pc3_12 ?></b></td>
  </tr>
</table><br>
<table width="200" border="1">
  <tr>
    <td colspan="4"><strong>CONFIRM BULK CUT</strong></td>
  </tr>
  <tr>
    <td width="12%">&nbsp;</td>
    <td width="46%">Confirm Bulk Cut ?</td>
    <td colspan="2"><b><?php echo $pl2->pl_cb1 ?></b></td>
  </tr>
  <tr>
    <td rowspan="3">If Yes</td>
    <td>Issuing of Cutting Instructions for all colours-Date &amp; Time</td>
    <td width="21%"><b><?php echo $pl2->pl_cb2 ?></b></td>
    <td width="21%"><b><?php echo $pl2->pl_cb3 ?></b></td>
  </tr>
  <tr>
    <td>No of garments for 1<sup>st</sup> bulk</td>
    <td><b><?php echo $pl2->pl_cb4 ?></b></td>
    <td><b><?php echo $pl2->pl_cb5 ?></b></td>
  </tr>
  <tr>
    <td>Cut Date</td>
    <td colspan="2"><b><?php echo $pl2->pl_cb6 ?></b></td>
  </tr>
  <tr>
    <td rowspan="2">If No</td>
    <td>Go for second pilot on</td>
    <td colspan="2"><b><?php echo $pl2->pl_cb7 ?></b></td>
  </tr>
  <tr>
    <td>Review Date</td>
    <td colspan="2"><b><?php echo $pl2->pl_cb8 ?></b></td>
  </tr>
</table>







</body>
</html>
