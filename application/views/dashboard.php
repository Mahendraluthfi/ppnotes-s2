<div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h2 class="page-header-title">Pre-Production Notes Dashboard</h2>
            <div>
            <!-- <div class="page-header-tools">
                <a class="btn btn-gradient-01" href="#">Add Widget</a>
            </div> -->
            </div>
        </div>
    </div>
</div>

<div class="row flex-row">
    <div class="col-xl-3">
        <div class="widget-32 widget-image bg-image">
            <div class="overlay"></div>
            <div class="content">
                <div id="events-day"><?php echo date('D') ?></div>
                <div id="events-date"><?php echo date('d') ?></div>
                <div id="events-year"><?php echo date('M Y') ?></div>
            </div>      
            <div id="real-time">
                <div id="jamreal" style="color: white; font-weight: bold; font-size: 16px;"></div>          
            </div>      
        </div>
    </div>
    <div class="col-xl-5">
        <div class="widget widget-20 has-shadow">
            <!-- Begin Widget Header -->
            <div class="widget-header bordered d-flex align-items-center">
                <h2>Master Data</h2>
                <!-- <div class="widget-options"></div> -->
            </div>
            <!-- End Widget Header -->
            <div class="widget-body">                
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-3">
                        <div class="media w-100">
                            <div class="align-self-center mr-2">
                                <i class="la la-bank"></i>
                            </div>
                            <div class="media-body align-self-center">
                                <div class="files-title"><?php echo $linkdepartment ?></div>
                                <div class="files-number"><?php echo $dept ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-3">
                        <div class="media w-100">
                            <div class="align-self-center mr-2">
                                <i class="la la-money"></i>
                            </div>
                            <div class="media-body align-self-center">
                                <div class="files-title"><?php echo $linkcustomers ?></div>
                                <div class="files-number"><?php echo $customers ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-3">
                        <div class="media w-100">
                            <div class="align-self-center mr-2">
                                <i class="la la-magic"></i>
                            </div>
                            <div class="media-body align-self-center">
                                <div class="files-title"><?php echo $linkstyle ?></div>
                                <div class="files-number"><?php echo $styles ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-3">
                        <div class="media w-100">
                            <div class="align-self-center mr-2">
                                <i class="la la-users"></i>
                            </div>
                            <div class="media-body align-self-center">
                                <div class="files-title"><?php echo $linkemployees ?></div>
                                <div class="files-number"><?php echo $employee ?></div>
                            </div>
                        </div>
                    </div>    
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-3">
                        <div class="media w-100">
                            <div class="align-self-center mr-2">
                                <i class="la la-calendar-check-o"></i>
                            </div>
                            <div class="media-body align-self-center">
                                <div class="files-title"><?php echo $linkcompleted ?></div>
                                <div class="files-number"><?php echo $final ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-3">
                        <div class="media w-100">
                            <div class="align-self-center mr-2">
                                <i class="la la-refresh"></i>
                            </div>
                            <div class="media-body align-self-center">
                                <div class="files-title"><?php echo $linkprocess ?></div>
                                <div class="files-number"><?php echo $proses ?></div>
                            </div>
                        </div>
                    </div>                         
                </div>
            </div>
        </div>
    </div>    
    <div class="col-xl-4">        
        <div class="widget widget-14 has-shadow">
            <div class="widget-body">
                <div class="section-title mb-5">
                    <h2>Upcoming Meetings</h2>
                </div>
                
                <ul class="list-group w-100 mt-3">
                    <?php foreach ($upcoming as $data) { ?>
                    <li class="list-group-item">
                        <div class="media">
                            <div class="event-date align-self-center mr-3">
                                <?php echo $data->selisih ?> <small>days left</small>
                            </div>
                            <div class="media-body align-self-center">
                                <div class="event-title text-secondary">Style / <?php echo $data->style_no ?></div>
                                <div class="event-desc mr-3">
                                    <i class="la la-calendar"></i>
                                    <span><?php echo date('d M Y', strtotime($data->planned_date)) ?></span>
                                </div>
                                <div class="event-desc">
                                    <i class="la la-user"></i>
                                    <span><?php echo $data->total ?></span>
                                </div>
                            </div>
                        </div>
                    </li>   
                    <?php } ?>    
                    <?php echo $cek; ?>                    
                </ul>
            </div>
        </div>        
    </div>
</div>

<script>
    window.setTimeout("waktu()", 1000);
 
    function waktu() {
        var waktu = new Date();
        var m = waktu.getMinutes();    
        m = checkTime(m);
        setTimeout("waktu()", 1000);
        document.getElementById("jamreal").innerHTML = waktu.getHours()+' : '+ m;            
    }
    function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
    }
</script>