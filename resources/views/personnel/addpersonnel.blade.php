@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Add Personnel') <!-- Page Title -->
@section('content')

    <link type="text/css" rel="stylesheet" href="vendors/sweetalert/css/sweetalert2.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/pages/sweet_alert.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/animate/css/animate.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/hover/css/hover-min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/wow/css/animate.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/modal/css/component.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/animate/css/animate.min.css" />

    <link type="text/css" rel="stylesheet" href="vendors/fileinput/css/fileinput.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/jquery-tagsinput/css/jquery.tagsinput.css"/>
    <link type="text/css" rel="stylesheet" href="css/pages/form_elements.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/fileinput/css/fileinput.min.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/jasny-bootstrap/css/jasny-bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css"/>
    <!-- end of plugin styles -->
    <link type="text/css" rel="stylesheet" href="css/pages/animations.css"/>

    <link type="text/css" rel="stylesheet" href="css/pages/portlet.css"/>
    <link type="text/css" rel="stylesheet" href="css/pages/advanced_components.css"/>

    <!-- DATE PICKER -->
    <link type="text/css" rel="stylesheet" href="vendors/datepicker/css/bootstrap-datepicker.min.css" />
    <link type="text/css" rel="stylesheet" href="vendors/datetimepicker/css/DateTimePicker.min.css" />


<!-- CONTENT -->
<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-6">
                    <h4 class="m-t-5">
                    <i class="fa fa-users"></i>
                        Personnel
                    </h4>
                </div>
            </div>
        </div>
    </header>
        <div class="outer">
            <div class="inner bg-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" >
                            <div class="card-header bg-primary disabled text-white" ><i class="fa fa-plus"></i>&nbsp;&nbsp;Add Personnel</div>
                                <div class="card-block m-t-35">
                                    <!-- IMAGE STARTS -->
                                    <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-center text-lg-right">
                                            </div>
                                            <div class="col-lg-6 text-center text-lg-left">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new img-thumbnail text-center">
                                                        <img src="#" data-src="holder.js/100%x100%"  alt="not found"></div>
                                                    <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                                    <div class="m-t-20 text-center">
                                                        <span class="btn btn-primary btn-file">
                                                            <span class="fileinput-new">Select image</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="file" name="..."></span>
                                                        <a href="#" class="btn btn-warning fileinput-exists"
                                                           data-dismiss="fileinput">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- IMAGE ENDS -->
                    <!-- START OF FORM -->
                        <div class="col-lg-12 m-t-35">
                            <form class="form-horizontal">
                                <fieldset>
                            <!-- first name -->
                                <div class="form-group row m-t-35">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="name3" class="col-form-label">First Name</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                            </span>
                                                <input type="text" id="name3" class="form-control" placeholder="First Name">
                                        </div>
                                    </div>
                                </div>
                            <!-- last name-->
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="lastname3" class="col-form-label">Last Name</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="lastname3" placeholder="Last Name">
                                            <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            <!-- Birth Date -->
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="name3" class="col-form-label">Birth Date</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="input-group input-append date" id="dp3"             data-date-format="dd-mm-yyyy">
                                            <input class="form-control" type="text" placeholder="dd-mm-yyyy">
                                                <span class="input-group-addon add-on">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            <!-- Address -->
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="name3" class="col-form-label">Address</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <textarea id="autosize" class="form-control" cols="50" rows="3"></textarea>
                                    </div>
                                </div>
                            <!-- Contact No. -->
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="name3" class="col-form-label">Contact No.</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="input-group">
                                            <input id="phones" class="form-control" type="text" data-inputmask='"mask": "(639) 999999999"' data-mask>
                                            <span class="input-group-addon">(999) 999-9999</span>
                                        </div>
                                    </div>
                                </div>
                            <!-- Email -->
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="name3" class="col-form-label">Email</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="email" id="email" name="Email3" class="form-control">
                                    </div>
                                </div>
                            <!-- last name-->
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="lastname3" class="col-form-label">Workload</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="workload" placeholder="Number of Workloads">
                                        </div>
                                    </div>
                                </div>
                            <!-- Job Description -->
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="name3" class="col-form-label">Job Description</label>
                                    </div>
                                    <div class="col-lg-8" id="personnel_jobdesc">
                                        <select class="form-control chzn-select" multiple size="3">
                                            <option value="United States">United States</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                        </select>
                                    </div>
                                </div>

                            <!-- Personnel Skills -->
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="name3" class="col-form-label">Personnel Skills</label>
                                    </div>
                                    <div class="col-lg-8" id="personnel_skills">
                                        <select class="form-control chzn-select" multiple size="3">
                                            <option value="United States">United States</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                        </select>
                                    </div>
                                </div>
                        <!-- END OF FORM LAYOUT -->

                        
                    <!-- footer starts -->
                    <div>
                        <div class="examples transitions m-t-5 pull-right">
                        <button onclick="window.location='{{ url("/personnel") }}'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn"  href="/personnel">Back</button>                
                        <button class="btn btn-success  source success_clr m-l-0 hvr-float-shadow adv_cust_mod_btn" style ="width: 80px;"  ><i class="fa fa-save text-white" ></i>&nbsp; Save</button>
                        </div>
                    </div>
                    <!-- footer ends -->
                        </div>
                    <!-- END OF FORM -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!-- Inner -->
        </div>
    <!-- /.outer -->
<!--END CONTENT -->

<!-- global scripts animation-->
<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="vendors/snabbt/js/snabbt.min.js"></script>
<script type="text/javascript" src="vendors/wow/js/wow.min.js"></script>
<script type="text/javascript" src="js/pages/validation.js"></script>

<script type="text/javascript" src="js/pluginjs/jasny-bootstrap.js"></script>
<script type="text/javascript" src="vendors/holderjs/js/holder.js"></script>
<script type="text/javascript" src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<!-- end of plugin scripts -->
<script>
    new WOW().init();
</script>


<!-- global scripts -->
    <link type="text/css" rel="stylesheet" href="vendors/inputlimiter/css/jquery.inputlimiter.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/chosen/css/chosen.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/jquery-tagsinput/css/jquery.tagsinput.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-switch/css/bootstrap-switch.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/jasny-bootstrap/css/jasny-bootstrap.min.css"/>

<!--End of global scripts-->
<!--functions-->
<script> 
</script>

<!--functions-->


<!-- global scripts-->
<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!-- end of global scripts-->


<!--plugin scripts-->
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="js/pages/form_elements.js"></script>
<script type="text/javascript" src="vendors/datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="vendors/datetimepicker/js/DateTimePicker.min.js"></script>
<script type="text/javascript" src="js/pages/datetime_piker.js"></script>
<!-- end of plugin scripts -->

@stop