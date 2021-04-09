<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Production Risk Analysis</title>
  <link rel="stylesheet" href="/var/www/html/ppnotes/assets/css/pdf/bootstrap.min.css">
    <script src="/var/www/html/ppnotes/assets/css/pdf/bootstrap.min.js"></script>

    <!-- --- -->

    <!-- <link rel="stylesheet" href="C:/xampp/htdocs/ppnotes/assets/css/pdf/bootstrap.min.css">
    <script src="C:/xampp/htdocs/ppnotes/assets/css/pdf/bootstrap.min.js"></script> -->
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
            font-size: 12px;
        }
    /*}*/
</style>
<body>
    <h3>Production Risk Analysis / Style <?php echo $get->style_no ?></h3>
    <hr>
    <div class="row">
        <div class="col-xs-2">Customer</div>
        <div class="col-xs-3 text-primary"><?php echo $get->customer_name ?></div>
        <div class="col-xs-2">Produk Viable</div>
        <div class="col-xs-3 text-primary"><?php echo $pra->radio1 ?></div>
    </div>
    <div class="row">
        <div class="col-xs-2">Date</div>
        <div class="col-xs-3 text-primary"><?php echo $pra->date ?></div>
        <div class="col-xs-2">Overal Risk</div>
        <div class="col-xs-3 text-primary">
            <button type="button" class="btn btn-xs <?php if($pra->radio2 == "RED"){echo "btn-danger";} ?>">Red</button>
            <button type="button" class="btn btn-xs <?php if($pra->radio2 == "YELLOW"){echo "btn-warning";} ?>">Yellow</button>
            <button type="button" class="btn btn-xs <?php if($pra->radio2 == "GREEN"){echo "btn-success";} ?>">Green</button>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-2">Atteendees</div>
        <div class="col-xs-3 text-danger">
            <?php foreach ($att as $data) {
                echo $data->name.'<br>';
            } ?>
        </div>
        <div class="col-xs-2">Prepared By</div>
        <div class="col-xs-3 text-primary"><?php echo $pra->prepared ?></div>
    </div>
    <hr>
    <table class="table table-bordered" style="font-size: 12px;">
        <thead>
            <tr class="active">
                <th>POINTS TO BE NOTED</th>
                <th width="1%">YES/NO</th>
                <th>RISK LEVEL</th>
                <th>COMMENTS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>All the issues highlighted at PDRA is resolved</td>
                <td><?php echo $pra->que1 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk1 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk1 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk1 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext1 ?></td>
            </tr>
            <tr>
                <td>Is Construction finalized (needle/machinery/thread/attachment)</td>
                <td><?php echo $pra->que2 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk2 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk2 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk2 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext2 ?></td>
            </tr>
            <tr>
                <td class="text-success">Machine Spec required for which operation</td>
                <td><?php echo $pra->que3 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk3 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk3 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk3 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext3 ?></td>
            </tr>
            <tr>
                <td class="text-success">Any video clip required for the operations</td>
                <td><?php echo $pra->que4 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk4 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk4 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk4 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext4 ?></td>
            </tr>
            <tr>
                <td>Is Measurements finalised</td>
                <td><?php echo $pra->que5 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk5 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk5 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk5 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext5 ?></td>
            </tr>
            <tr>
                <td>Learning curve - Any special training required/preparation</td>
                <td><?php echo $pra->que6 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk6 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk6 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk6 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext6 ?></td>
            </tr>
            <tr>
                <td>Any changes form the last sample seen</td>
                <td><?php echo $pra->que7 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk7 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk7 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk7 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext7 ?></td>
            </tr>
            <tr>
                <td class="text-success">Construction</td>
                <td><?php echo $pra->que8 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk8 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk8 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk8 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext8 ?></td>
            </tr>
            <tr>
                <td class="text-success">Pattern</td>
                <td><?php echo $pra->que9 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk9 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk9 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk9 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext9 ?></td>
            </tr>
            <tr>
                <td class="text-success">RM</td>
                <td><?php echo $pra->que10 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk10 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk10 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk10 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext10 ?></td>
            </tr>
            <tr>
                <td class="text-success">Any Special fit comments</td>
                <td><?php echo $pra->que11 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk11 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk11 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk11 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext11 ?></td>
            </tr>
            <tr>
                <td>Special handling required</td>
                <td><?php echo $pra->que12 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk12 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk12 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk12 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext12 ?></td>
            </tr>
            <tr>
                <td class="text-success">Special strecth needed while sewing</td>
                <td><?php echo $pra->que13 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk13 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk13 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk13 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext13 ?></td>
            </tr>
            <tr>
                <td class="text-success">Easeness needed while sewing</td>
                <td><?php echo $pra->que14 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk14 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk14 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk14 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext14 ?></td>
            </tr>
            <tr>
                <td class="text-success">Special attachment needed (foot&folders)/or any modifications for the original one</td>
                <td><?php echo $pra->que15 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk15 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk15 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk15 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext15 ?></td>
            </tr>
            <tr>
                <td class="text-success">Special handling required for the fabric/elastic/trims/lace</td>
                <td><?php echo $pra->que16 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk16 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk16 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk16 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext16 ?></td>
            </tr>
            <tr>
                <td>Is there any additional support needed (specially in areas such as machinery/attachment)</td>
                <td><?php echo $pra->que17 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk17 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk17 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk17 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext17 ?></td>
            </tr>
            <tr>
                <td>Pattern</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="text-success">Lace mebroidery priority points & repeat variation manageable</td>
                <td><?php echo $pra->que18 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk18 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk18 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk18 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext18 ?></td>
            </tr>
            <tr>
                <td class="text-success">Special placement templates</td>
                <td><?php echo $pra->que19 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk19 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk19 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk19 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext19 ?></td>
            </tr>
            <tr>
                <td>Cutting</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="text-success">Is numbering required on cut panels</td>
                <td><?php echo $pra->que20 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk20 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk20 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk20 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext20 ?></td>
            </tr>
            <tr>
                <td class="text-success">Is it easy to follow the costed cutting method for lace</td>
                <td><?php echo $pra->que21 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk21 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk21 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk21 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext21 ?></td>
            </tr>
            <tr>
                <td class="text-success">Cutting methods/machine availability</td>
                <td><?php echo $pra->que22 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk22 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk22 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk22 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext22 ?></td>
            </tr>
            <tr>
                <td>Bulk colours (Any special process needed for the colours)</td>
                <td><?php echo $pra->que23 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk23 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk23 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk23 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext23 ?></td>
            </tr>
            <tr>
                <td>Special quality points/critical measurements</td>
                <td><?php echo $pra->que24 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk24 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk24 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk24 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext24 ?></td>
            </tr>
            <tr>
                <td>Packaging Methods</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="text-success">Is there any risks related to labeling ?</td>
                <td><?php echo $pra->que25 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk25 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk25 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk25 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext25 ?></td>
            </tr>
            <tr>
                <td class="text-success">Is there any risks related to packaging ?</td>
                <td><?php echo $pra->que26 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk26 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk26 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk26 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext26 ?></td>
            </tr>
            <tr>
                <td>Technology</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="text-success">Is all bonding parameters/methods/testings/tolerances finalised</td>
                <td><?php echo $pra->que27 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk27 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk27 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk27 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext27 ?></td>
            </tr>
            <tr>
                <td class="text-success">Is all Silicone parameters/methods/testings/tolerances finalised</td>
                <td><?php echo $pra->que28 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk28 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk28 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk28 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext28 ?></td>
            </tr>
            <tr>
                <td>Embelishmnet (Heat Seal/Embroidery/Rhinestones/Sequines/Printing)</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="text-success">Is all embelishment conditions/placement/tolerance/testings/construction method finalised</td>
                <td><?php echo $pra->que29 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk29 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk29 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk29 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext29 ?></td>
            </tr>
            <tr>
                <td class="text-success">Is embelishment alinged to the value addition (garment/panel/semi garment) process</td>
                <td><?php echo $pra->que30 ?></td>
                <td>
                    <button type="button" class="btn btn-xs <?php if($pra->risk30 == "H"){echo "btn-danger";} ?>">H</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk30 == "M"){echo "btn-warning";} ?>">M</button>
                    <button type="button" class="btn btn-xs <?php if($pra->risk30 == "L"){echo "btn-primary";} ?>">L</button>
                </td>
                <td><?php echo $pra->quetext30 ?></td>
            </tr>
            <tr>
                <td>Moulding integration required or not ?</td>
                <td><?php echo $pra->que31 ?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Integration Required or not ?</td>
                <td><?php echo $pra->que32 ?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    Cut kit date --<span class="text-primary"><?php echo $pra->date2 ?></span><br>
                    Sizes --<span class="text-primary"><?php echo $pra->sizes ?></span><br>
                    Where --<span class="text-primary"><?php echo $pra->quetext31 ?></span>
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>            
        </tbody>
    </table>

</body>

</html>
