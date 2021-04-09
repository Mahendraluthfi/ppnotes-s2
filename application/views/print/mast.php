<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MAST</title>
<style>
    @page {
       size: 7in 9.25in;
       margin: 5mm 5mm 5mm 5mm;
    }
	body{
		font-family: Tahoma, Geneva, sans-serif;	
	}
	table{
		border-collapse:collapse; 
		border-style:solid; 
		width:100%;	
		border-collapse:collapse; 	
		font-size: 10px;		
	}
	table, th, td{
		border: 1px solid black;
	}
	th, td{
		padding: 3px;
	}
	.column {
	  float: left;
	  width: 50%;
	  padding: 10px;
	  height: 300px; /* Should be removed. Only for demonstration */
	}	
	/* Clear floats after the columns */
	.row:after {
	  content: "";
	  display: table;
	  clear: both;
	}

</style>
</head>
<body>

<h2 align="center">MAST INDUSTRIES. Inc</h2>
<div align="center" style="font-size:12px; font-weight:bold;">A DIVISION OF THE LIMITED BRANDS <br />
  NON-SWEATER PRE-PRODUCTION TEMPLATE
</div><br />
<table width="200" border="1">
  <tr>    
        <td colspan="4"><strong>Vendor : MAS INTIMATES</strong></td>
        <td colspan="4"><strong>Factory : MAS SUMBIRI</strong></td>    
  </tr>
  <tr>
    <td width="21%" bgcolor="#CCCCCC">Styles#</td>
    <td colspan="2"><b><?php echo $get->style_no ?></b></td>
    <td colspan="2" bgcolor="#CCCCCC">Brand</td>
    <td width="14%"><b><?php echo $get->customer_name ?></b></td>
    <td width="15%" bgcolor="#CCCCCC">Meeting Date</td>
    <td width="13%"><b><?php echo $mast->meet_date ?></b></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">CPO#/VPO#</td>
    <td colspan="3"><b><?php echo $mast->cpo ?></b></td>
    <td width="3%" bgcolor="#CCCCCC">QTY</td>
    <td><b><?php echo $mast->qty ?> pcs</b></td>
    <td bgcolor="#CCCCCC">GAC Date</td>
    <td><b><?php echo $mast->gac ?></b></td>
  </tr>  
  <tr>
    <td bgcolor="#CCCCCC">Product Description </td>
    <td colspan="7"><b><?php echo $mast->pro_desc ?></b></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">Fabric Description/Content: </td>
    <td colspan="7"><b><?php echo $mast->fabric_desc ?></b></td>
  </tr>
</table><br />
<table>
  <tr>
    <td colspan="3" bgcolor="#CCCCCC"><b>Attendances</b></td>
  </tr>
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
</table><br />
<table width="200" border="1">
  <tr>
    <td colspan="3" bgcolor="#CCCCCC" align="center"><strong>***** (A) QUALITY RISK MANAGEMENT (QRM) ***** / CUSTOMERS/COMMENTS FROM SAMPLE ROOM IN CHARGE </strong></td>
  </tr>
  <tr>
    <td width="70%" bgcolor="#CCCCCC">Comments</td>
    <td width="15%" bgcolor="#CCCCCC">Follow-Up Person</td>
    <td width="15%" bgcolor="#CCCCCC">Settle Date</td>
  </tr>
  <tr>
    <td>1. How to measure? </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><b><?php echo $mast->m_a1_1 ?></b></td>
    <td><b><?php echo $mast->m_a1_2 ?></b></td>
    <td><b><?php echo $mast->m_a1_3 ?></b></td>
  </tr>
  <tr>
    <td>2. How to fit? Key fitting sizes:                   /34DD/36DD, S/M/L/XL (How the garment being fit on mannequin or live model?) </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><b><?php echo $mast->m_a2_1 ?></b></td>
    <td><b><?php echo $mast->m_a2_2 ?></b></td>
    <td><b><?php echo $mast->m_a2_3 ?></b></td>
  </tr>
  <tr>
    <td>3.  Critical areas which mentioned in the pp approval comment sheets that need corrections and improvements.  Other areas that need special attention? (AT ALL TIMES SPECIAL ATTENTION SHOULD BE GIVEN TO ANY AREAS OF A GARMENT CONTAINING WIRES, BONES OR ANY SHARP OR POINTED OBJECTS.&quot;)</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><b><?php echo $mast->m_a3_1 ?></b></td>
    <td><b><?php echo $mast->m_a3_2 ?></b></td>
    <td><b><?php echo $mast->m_a3_3 ?></b></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table><br />
<table width="200">
  <tr>
    <td align="center">
        **FRONT**<p></p>
        <img src="" alt="" height="100">
    </td>
    <td align="center">
	   **BACK**<p></p>
        <img src="" alt="" height="100">     
    </td>
  </tr>
</table><br />
<table width="200" border="1">
  <tr>
    <td colspan="10" bgcolor="#CCCCCC" align="center"> (B) FABRIC &amp; TRIMS QUALITY MANAGEMENT </td>
  </tr>
  <tr>
    <td colspan="7" bgcolor="#CCCCCC">Comments</td>
    <td width="4%" bgcolor="#CCCCCC">Yes/No</td>
    <td width="13%" bgcolor="#CCCCCC">Follow-Up Person</td>
    <td width="14%" bgcolor="#CCCCCC">Settle Date</td>
  </tr>
  <tr>
    <td colspan="7">1. Fabric Inspection - in-house test </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7"><b><?php echo $mast->m_b1_1_1 ?></b></td>
    <td><b><?php echo $mast->m_b1_1_2 ?></b></td>
    <td><b><?php echo $mast->m_b1_1_3 ?></b></td>
    <td><b><?php echo $mast->m_b1_1_4 ?></b></td>
  </tr>
  <tr>
    <td colspan="7">'- Fabric Quality Hanger with Specification </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7"><b><?php echo $mast->m_b1_2_1 ?></b></td>
    <td><b><?php echo $mast->m_b1_2_2 ?></b></td>
    <td><b><?php echo $mast->m_b1_2_3 ?></b></td>
    <td><b><?php echo $mast->m_b1_2_4 ?></b></td>
  </tr>
  <tr>
    <td colspan="7">'- Fabric Inspection Findings &amp; Actions Taken </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7"><b><?php echo $mast->m_b1_3_1 ?></b></td>
    <td><b><?php echo $mast->m_b1_3_2 ?></b></td>
    <td><b><?php echo $mast->m_b1_3_3 ?></b></td>
    <td><b><?php echo $mast->m_b1_3_4 ?></b></td>
  </tr>
  <tr>
    <td colspan="3">2. Shrinkage Test</td>
    <td colspan="2">Warp %</td>
    <td colspan="2">Weft %</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="right">Dry Steam</div></td>
    <td colspan="2"><b><?php echo $mast->m_b2_1_1 ?></b></td>
    <td colspan="2"><b><?php echo $mast->m_b2_1_2 ?></b></td>
    <td><b><?php echo $mast->m_b2_1_3 ?></b></td>
    <td><b><?php echo $mast->m_b2_1_4 ?></b></td>
    <td><b><?php echo $mast->m_b2_1_5 ?></b></td>
  </tr>
  <tr>
    <td colspan="3"><div align="right">Wash</div></td>
    <td colspan="2"><b><?php echo $mast->m_b2_2_1 ?></b></td>
    <td colspan="2"><b><?php echo $mast->m_b2_2_2 ?></b></td>
    <td><b><?php echo $mast->m_b2_2_3 ?></b></td>
    <td><b><?php echo $mast->m_b2_2_4 ?></b></td>
    <td><b><?php echo $mast->m_b2_2_5 ?></b></td>
  </tr>
  <tr>
    <td colspan="3"><div align="right">Fusing</div></td>
    <td colspan="2"><b><?php echo $mast->m_b2_3_1 ?></b></td>
    <td colspan="2"><b><?php echo $mast->m_b2_3_2 ?></b></td>
    <td><b><?php echo $mast->m_b2_3_3 ?></b></td>
    <td><b><?php echo $mast->m_b2_3_4 ?></b></td>
    <td><b><?php echo $mast->m_b2_3_5 ?></b></td>
  </tr>
  <tr>
    <td colspan="3">3. Color Shade</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="right">Side to side</div></td>
    <td colspan="2"><b><?php echo $mast->m_b3_1_1 ?></b></td>
    <td colspan="2"><b><?php echo $mast->m_b3_1_2 ?></b></td>
    <td><b><?php echo $mast->m_b3_1_3 ?></b></td>
    <td><b><?php echo $mast->m_b3_1_4 ?></b></td>
    <td><b><?php echo $mast->m_b3_1_5 ?></b></td>
  </tr>
  <tr>
    <td colspan="3"><div align="right">End to end</div></td>
    <td colspan="2"><b><?php echo $mast->m_b3_2_1 ?></b></td>
    <td colspan="2"><b><?php echo $mast->m_b3_2_2 ?></b></td>
    <td><b><?php echo $mast->m_b3_2_3 ?></b></td>
    <td><b><?php echo $mast->m_b3_2_4 ?></b></td>
    <td><b><?php echo $mast->m_b3_2_5 ?></b></td>
  </tr>
  <tr>
    <td colspan="7">4. Trims Matching </td>
    <td><b><?php echo $mast->m_b4_1 ?></b></td>
    <td><b><?php echo $mast->m_b4_2 ?></b></td>
    <td><b><?php echo $mast->m_b4_3 ?></b></td>
  </tr>
  <tr>
    <td width="13%">5. Heat Seal Label     (if applicable) </td>
    <td width="10%">Temperature</td>
    <td width="12%"><b><?php echo $mast->m_b5_1_1 ?></b></td>
    <td width="8%">Pressure</td>
    <td width="8%"><b><?php echo $mast->m_b5_1_2 ?></b></td>
    <td width="9%">Time</td>
    <td width="9%"><b><?php echo $mast->m_b5_1_3 ?></b></td>
    <td><b><?php echo $mast->m_b5_1_4 ?></b></td>
    <td><b><?php echo $mast->m_b5_1_5 ?></b></td>
    <td><b><?php echo $mast->m_b5_1_6 ?></b></td>
  </tr>
  </table><br />
  <table>
  <tr>
    <td colspan="10" bgcolor="#CCCCCC" align="center">(C) MOLDING </td>
  </tr>
  <tr>
    <td colspan="7" bgcolor="#CCCCCC">Comments</td>
    <td bgcolor="#CCCCCC">Yes/No</td>
    <td bgcolor="#CCCCCC">Follow-Up Person</td>
    <td bgcolor="#CCCCCC">Settle Date</td>
  </tr>
  <tr>
    <td colspan="7">1. Molding Condition </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Temperature</td>
    <td><b><?php echo $mast->m_c1_1 ?></b></td>
    <td>Pressure</td>
    <td><b><?php echo $mast->m_c1_2 ?></b></td>
    <td>Time</td>
    <td><b><?php echo $mast->m_c1_3 ?></b></td>
    <td><b><?php echo $mast->m_c1_4 ?></b></td>
    <td><b><?php echo $mast->m_c1_5 ?></b></td>
    <td><b><?php echo $mast->m_c1_6 ?></b></td>
  </tr>
  <tr>
    <td colspan="7">Cup sizes: A B C D DD DDD</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7">32,34,36,38</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7">38,42,42,44,46</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7">2. Color Change after molding</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7"><b><?php echo $mast->m_c2_1 ?></b></td>
    <td><b><?php echo $mast->m_c2_2 ?></b></td>
    <td><b><?php echo $mast->m_c2_3 ?></b></td>
    <td><b><?php echo $mast->m_c2_4 ?></b></td>
  </tr>
  <tr>
    <td colspan="7">3. Hand Feel</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7"><b><?php echo $mast->m_c3_1 ?></b></td>
    <td><b><?php echo $mast->m_c3_2 ?></b></td>
    <td><b><?php echo $mast->m_c3_3 ?></b></td>
    <td><b><?php echo $mast->m_c3_4 ?></b></td>
  </tr>
  <tr>
    <td colspan="6" rowspan="3">4. Physical Appearance (after molding) </td>
    <td>Ring Marks</td>
    <td><b><?php echo $mast->m_c4_1_1 ?></b></td>
    <td><b><?php echo $mast->m_c4_1_2 ?></b></td>
    <td><b><?php echo $mast->m_c4_1_3 ?></b></td>
  </tr>
  <tr>
    <td>Contamination </td>
    <td><b><?php echo $mast->m_c4_2_1 ?></b></td>
    <td><b><?php echo $mast->m_c4_2_2 ?></b></td>
    <td><b><?php echo $mast->m_c4_2_3 ?></b></td>
  </tr>
  <tr>
    <td>Burn Mark </td>
    <td><b><?php echo $mast->m_c4_3_1 ?></b></td>
    <td><b><?php echo $mast->m_c4_3_2 ?></b></td>
    <td><b><?php echo $mast->m_c4_3_3 ?></b></td>
  </tr>
  <tr>
    <td colspan="7">5. Mold Trail - across sizes</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7"><b><?php echo $mast->m_c5_1 ?></b></td>
    <td><b><?php echo $mast->m_c5_2 ?></b></td>
    <td><b><?php echo $mast->m_c5_3 ?></b></td>
    <td><b><?php echo $mast->m_c5_4 ?></b></td>
  </tr>
  </table><br />
  <table>
  <tr>
    <td colspan="10" bgcolor="#CCCCCC" align="center">(D) CUTTING </td>
  </tr>
  <tr>
    <td colspan="7" bgcolor="#CCCCCC">Comments</td>
    <td width="6%" bgcolor="#CCCCCC">Yes/No</td>
    <td width="18%" bgcolor="#CCCCCC">Follow-Up Person</td>
    <td width="13%" bgcolor="#CCCCCC">Settle Date</td>
  </tr>
  <tr>
    <td colspan="2">1. Marker Method </td>
    <td colspan="5"><b><?php echo $mast->m_d1_1 ?></b></td>
    <td><b><?php echo $mast->m_d1_2 ?></b></td>
    <td><b><?php echo $mast->m_d1_3 ?></b></td>
    <td><b><?php echo $mast->m_d1_4 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">2. Fabric Relaxation</td>
    <td colspan="5">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Does it require fabric relaxation? </td>
    <td colspan="5"><b><?php echo $mast->m_d2_1_1 ?></b></td>
    <td><b><?php echo $mast->m_d2_1_2 ?></b></td>
    <td><b><?php echo $mast->m_d2_1_3 ?></b></td>
    <td><b><?php echo $mast->m_d2_1_4 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">Relax for 24 or 48 hour ?</td>
    <td colspan="5"><b><?php echo $mast->m_d2_2_1 ?></b></td>
    <td><b><?php echo $mast->m_d2_2_2 ?></b></td>
    <td><b><?php echo $mast->m_d2_2_3 ?></b></td>
    <td><b><?php echo $mast->m_d2_2_4 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">3. Spreading Method</td>
    <td colspan="5"><b><?php echo $mast->m_d3_1 ?></b></td>
    <td><b><?php echo $mast->m_d3_2 ?></b></td>
    <td><b><?php echo $mast->m_d3_3 ?></b></td>
    <td><b><?php echo $mast->m_d3_4 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">4. Cutting Method </td>
    <td colspan="5"><b><?php echo $mast->m_d4_1 ?></b></td>
    <td><b><?php echo $mast->m_d4_2 ?></b></td>
    <td><b><?php echo $mast->m_d4_3 ?></b></td>
    <td><b><?php echo $mast->m_d4_4 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">5. Bundling</td>
    <td colspan="5"><b><?php echo $mast->m_d5_1 ?></b></td>
    <td><b><?php echo $mast->m_d5_2 ?></b></td>
    <td><b><?php echo $mast->m_d5_3 ?></b></td>
    <td><b><?php echo $mast->m_d5_4 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">6. Fusing Condition </td>
    <td colspan="5">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="9%">&nbsp;</td>
    <td width="8%">Temperature</td>
    <td width="10%"><b><?php echo $mast->m_d6_1 ?></b></td>
    <td width="6%">Pressure</td>
    <td width="10%"><b><?php echo $mast->m_d6_2 ?></b></td>
    <td width="4%">Time</td>
    <td width="16%"><b><?php echo $mast->m_d6_3 ?></b></td>
    <td><b><?php echo $mast->m_d6_4 ?></b></td>
    <td><b><?php echo $mast->m_d6_5 ?></b></td>
    <td><b><?php echo $mast->m_d6_6 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">7. Bond Strength</td>
    <td colspan="5"><b><?php echo $mast->m_d7_1 ?></b></td>
    <td><b><?php echo $mast->m_d7_2 ?></b></td>
    <td><b><?php echo $mast->m_d7_3 ?></b></td>
    <td><b><?php echo $mast->m_d7_4 ?></b></td>
  </tr>
  </table>
  <br />
 <table>
  <tr>
    <td colspan="10" bgcolor="#CCCCCC" align="center">(E) SEWING </td>
  </tr>
  <tr>
    <td colspan="7" bgcolor="#CCCCCC">Comments</td>
    <td width="6%" bgcolor="#CCCCCC">Yes/No</td>
    <td width="18%" bgcolor="#CCCCCC">Follow-Up Person</td>
    <td width="13%" bgcolor="#CCCCCC">Settle Date</td>
  </tr>
  <tr>
    <td colspan="2">1. Job Specification Required Sewing standards, Approval sample</td>
    <td colspan="5">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7"><b><?php echo $mast->m_e1_1 ?></b></td>
    <td><b><?php echo $mast->m_e1_2 ?></b></td>
    <td><b><?php echo $mast->m_e1_3 ?></b></td>
    <td><b><?php echo $mast->m_e1_4 ?></b></td>
  </tr>
  <tr>
    <td width="29%">2. Line Set Up</td>
    <td width="11%">Plan line out put</td>
    <td colspan="5"><b><?php echo $mast->m_e2_1_1 ?></b></td>
    <td><b><?php echo $mast->m_e2_1_2 ?></b></td>
    <td><b><?php echo $mast->m_e2_1_3 ?></b></td>
    <td><b><?php echo $mast->m_e2_1_4 ?></b></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Machine</td>
    <td colspan="5"><b><?php echo $mast->m_e2_2_1 ?></b></td>
    <td><b><?php echo $mast->m_e2_2_2 ?></b></td>
    <td><b><?php echo $mast->m_e2_2_3 ?></b></td>
    <td><b><?php echo $mast->m_e2_2_4 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">3. Machines/Attachments</td>
    <td colspan="5"><b><?php echo $mast->m_e3_1 ?></b></td>
    <td><b><?php echo $mast->m_e3_2 ?></b></td>
    <td><b><?php echo $mast->m_e3_3 ?></b></td>
    <td><b><?php echo $mast->m_e3_4 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">4. Any areas that need special attention?</td>
    <td colspan="5"><b><?php echo $mast->m_e4_1 ?></b></td>
    <td><b><?php echo $mast->m_e4_2 ?></b></td>
    <td><b><?php echo $mast->m_e4_3 ?></b></td>
    <td><b><?php echo $mast->m_e4_4 ?></b></td>
  </tr>
  </table>
 <br />
  <table>
  <tr>
    <td colspan="10" bgcolor="#CCCCCC" align="center">(G) FINISHING (WASHING/IRONING/PACKING)</td>
  </tr>
  <tr>
    <td colspan="7" bgcolor="#CCCCCC">Comments</td>
    <td bgcolor="#CCCCCC">Yes/No</td>
    <td bgcolor="#CCCCCC">Follow-Up Person</td>
    <td bgcolor="#CCCCCC">Settle Date</td>
  </tr>
  <tr>
    <td colspan="2">1. Special Ironing method?</td>
    <td colspan="5"><b><?php echo $mast->m_g1_1 ?></b></td>
    <td><b><?php echo $mast->m_g1_2 ?></b></td>
    <td><b><?php echo $mast->m_g1_3 ?></b></td>
    <td><b><?php echo $mast->m_g1_4 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">2. Packing Guidelines - </td>
    <td colspan="5">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">'- How to pack? </td>
    <td colspan="5"><b><?php echo $mast->m_g2_1_1 ?></b></td>
    <td><b><?php echo $mast->m_g2_1_2 ?></b></td>
    <td><b><?php echo $mast->m_g2_1_3 ?></b></td>
    <td><b><?php echo $mast->m_g2_1_4 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">'- Polybag sizes? </td>
    <td colspan="5"><b><?php echo $mast->m_g2_2_1 ?></b></td>
    <td><b><?php echo $mast->m_g2_2_2 ?></b></td>
    <td><b><?php echo $mast->m_g2_2_3 ?></b></td>
    <td><b><?php echo $mast->m_g2_2_4 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">'- packing sample available? </td>
    <td colspan="5"><b><?php echo $mast->m_g2_3_1 ?></b></td>
    <td><b><?php echo $mast->m_g2_3_2 ?></b></td>
    <td><b><?php echo $mast->m_g2_3_3 ?></b></td>
    <td><b><?php echo $mast->m_g2_3_4 ?></b></td>
  </tr>
  <tr>
    <td colspan="2">'- Hang Tag &amp; price tag positions ?</td>
    <td colspan="5"><b><?php echo $mast->m_g2_4_1 ?></b></td>
    <td><b><?php echo $mast->m_g2_4_2 ?></b></td>
    <td><b><?php echo $mast->m_g2_4_3 ?></b></td>
    <td><b><?php echo $mast->m_g2_4_4 ?></b></td>
  </tr>  
  </table><br />
  <table>
  <tr>
    <td colspan="10" bgcolor="#CCCCCC" align="center">(H) QA CHECKLIST </td>
  </tr>
  <tr>
    <td colspan="7" bgcolor="#CCCCCC">Required Documents/Standards</td>
    <td bgcolor="#CCCCCC">Yes/No</td>
    <td bgcolor="#CCCCCC">Follow-Up Person</td>
    <td bgcolor="#CCCCCC">Settle Date</td>
  </tr>
  <tr>
    <td colspan="7">Approved Pre-production Sample with full sizes measurement sheet </td>
    <td><b><?php echo $mast->m_h1_1 ?></b></td>
    <td><b><?php echo $mast->m_h1_2 ?></b></td>
    <td><b><?php echo $mast->m_h1_3 ?></b></td>
  </tr>
  <tr>
    <td colspan="7">Full Tech Pack with label placement, ticketing page, color component page, latest size spec, sample approval comments </td>
    <td><b><?php echo $mast->m_h2_1 ?></b></td>
    <td><b><?php echo $mast->m_h2_2 ?></b></td>
    <td><b><?php echo $mast->m_h2_3 ?></b></td>
  </tr>
  <tr>
    <td colspan="7">Approved shade band for all colors </td>
    <td><b><?php echo $mast->m_h3_1 ?></b></td>
    <td><b><?php echo $mast->m_h3_2 ?></b></td>
    <td><b><?php echo $mast->m_h3_3 ?></b></td>
  </tr>
  <tr>
    <td colspan="7">Trims Test Reports </td>
    <td><b><?php echo $mast->m_h4_1 ?></b></td>
    <td><b><?php echo $mast->m_h4_2 ?></b></td>
    <td><b><?php echo $mast->m_h4_3 ?></b></td>
  </tr>
  <tr>
    <td colspan="7">Approved Fabric Test Reports Available</td>
    <td><b><?php echo $mast->m_h5_1 ?></b></td>
    <td><b><?php echo $mast->m_h5_2 ?></b></td>
    <td><b><?php echo $mast->m_h5_3 ?></b></td>
  </tr>
  <tr>
    <td colspan="7">Approved Garment Test Report Available </td>
    <td><b><?php echo $mast->m_h6_1 ?></b></td>
    <td><b><?php echo $mast->m_h6_2 ?></b></td>
    <td><b><?php echo $mast->m_h6_3 ?></b></td>
  </tr>
  <tr>
    <td colspan="7">Hand Feel Standards Available </td>
    <td><b><?php echo $mast->m_h7_1 ?></b></td>
    <td><b><?php echo $mast->m_h7_2 ?></b></td>
    <td><b><?php echo $mast->m_h7_3 ?></b></td>
  </tr>
  <tr>
    <td colspan="7">Approved wash formula </td>
    <td><b><?php echo $mast->m_h8_1 ?></b></td>
    <td><b><?php echo $mast->m_h8_2 ?></b></td>
    <td><b><?php echo $mast->m_h8_3 ?></b></td>
  </tr>
  <tr>
    <td colspan="7">How many pieces of pilot lot samples should be cut and tested before bulk cutting? </td>
    <td colspan="3"><b><?php echo $mast->m_h9 ?></b></td>
  </tr>
  <tr>
    <td colspan="7">When will the pilot lot samples be finished?</td>
    <td colspan="3"><b><?php echo $mast->m_h10 ?></b></td>
  </tr>
</table>
<p>&nbsp;</p>



</body>
</html>
<script>
  window.print();
</script>