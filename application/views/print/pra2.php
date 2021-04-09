<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pre-Production Analysis Meeting</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/pdf/bootstrap.min.css">
    <script src="<?php echo base_url() ?>assets/css/pdf/bootstrap.min.js"></script>

    <!-- --- -->

    <!-- <link rel="stylesheet" href="C:/xampp/htdocs/ppnotes/assets/css/pdf/bootstrap.min.css">
    <script src="C:/xampp/htdocs/ppnotes/assets/css/pdf/bootstrap.min.js"></script> -->
</head>
<style>
      @font-face {
        font-family: "Ubuntu";
        src: url("<?php echo base_url() ?>assets/css/pdf/Ubuntu-Regular.ttf");
    }

    @page {
       size: 9.25in 7in;
       margin: 5mm 5mm 5mm 5mm;
    }
    /*@media print {*/
        .page-break {
            page-break-before: always;
        }
        .font-content{
            font-size: 12px;
        }

        td{
            padding: 5px;
            font-size: 11px;
        }
    /*}*/
</style>
<body>
    <div class="container">
        
    <div class="row">
        <div class="col-xs-2">
            <img src="<?php echo base_url() ?>assets/img/mast_global.png" alt="" height="70">
        </div>
        <div class="col-xs-8" style="font-size: 10px;">
            MAST GLOBAL <br>
            Pre-Production Analysis Meeting <br>
            Risk Assessment <br>
            Risk Test Iot Resolution <br>
            New Style Introduction
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            
            <table class="table table-bordered table-sm">
              <tr>
                <td width="1%" rowspan="2"></td>
                <td><b>Pilot/test</b></td>    
                <td><?php echo $get->pilot ?></td>    
              </tr>
              <tr style="font-weight: bold;">
                <td colspan="3">Risk elements which have been identified at Pre-production Risk Assessment Analysis Meeting </td>        
                <td class="text-center">Owner</td>
                <td class="text-center">Support</td>
                <td rowspan="2" class="text-center">Plan Resolve Date</td>
                <td rowspan="2" class="text-center">Actual Resolve Date</td>
              </tr>
              <tr style="font-weight: bold;">
                <td>#</td>
                <td colspan="3" class="text-center">Risk Elements</td>
                <td class="text-center">Factory</td>
                <td class="text-center">Mast</td>
              </tr>
              <?php $no=1; foreach ($risk as $data) { ?>
              <tr class="info">
                <td><?php echo $no++ ?></td>
                <td colspan="3"><?php echo $data->risk_element ?></td>                
                <td><?php echo $data->ow_fact ?></td>
                <td><?php echo $data->support_mast ?></td>
                <td><?php echo date('d M Y', strtotime($data->plan_date)) ?></td>
                <td><?php echo date('d M Y', strtotime($data->actual_date)) ?></td>
              </tr>
              <?php } ?>
              
            </table>
        
        </div>
    </div>
    <div class="row">
        
        <div class="col-sm-12">
            <table class="table table-bordered table-sm">
                <tr class="text-center" style="font-weight: bold;">
                    <td>Operation Description</td>
                    <td>Machine Type</td>
                    <td>Class</td>
                    <td>Attachment</td>
                    <td>Engineering Details</td>
                    <td>MC. Photos</td>
                    <td>Metdod Details</td>
                    <td>Prod. Photos</td>
                </tr>
                <?php foreach ($detail as $data) { ?>
                <tr class="text-center bg-info">
                    <td><?php echo $data->field_1 ?></td>    
                    <td><?php echo $data->field_2 ?></td>    
                    <td><?php echo $data->field_3 ?></td>    
                    <td><?php echo $data->field_4 ?></td>    
                    <td><?php echo $data->field_5 ?></td>    
                    <td>
                        <?php if(!empty($data->photo_1)){ ?>
                        <img src="<?php echo base_url().$data->photo_1 ?>" height="55" alt="">
                        <?php } ?>
                    </td>    
                    <td><?php echo $data->field_6 ?></td>    
                    <td>
                        <?php if(!empty($data->photo_2)){ ?>
                        <img src="<?php echo base_url().$data->photo_2 ?>" height="55" alt="">
                        <?php } ?>
                    </td>    
                </tr>
                <?php } ?>
            </table><hr>
            <span style="font-size: 18px;">Conclusion :</span><br>
            <span class="text-primary"><?php echo $get->conclusion ?></span>
        </div>
    </div>
    </div>

</body>
</html>
<script>
    window.print();
</script>
