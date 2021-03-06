@extends('layout.master') <!-- Include Master Page -->
@section('Title','Service Category') <!-- Page Title -->
@section('content')

    <link type="text/css" rel="stylesheet" href="vendors/sweetalert/css/sweetalert2.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/pages/sweet_alert.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/animate/css/animate.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/hover/css/hover-min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/wow/css/animate.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/modal/css/component.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/animate/css/animate.min.css" />
    <!-- end of plugin styles -->
    <link type="text/css" rel="stylesheet" href="css/pages/animations.css"/>
    <link type="text/css" rel="stylesheet" href="css/pages/portlet.css"/>
    <!-- <link type="text/css" rel="stylesheet" href="css/pages/advanced_components.css"/> -->

        <!-- CONTENT -->
        <div id="content" class="bg-container">

            <header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-6">
                        <h4 class="m-t-5">
                            <i class="fa fa-wrench"></i>
                            Service Category
                        </h4>
                    </div>
                    </div>
                </div>
            </header>
                <div class="outer">
                    <div class="inner bg-container">
                        <div class="card">
                            <div class="card-header bg-dark">
                                <div class="btn-group">

                                        <!--ADD BUTTON MODAL-->
                                        <a  id="editable_table_new" class=" btn btn-raised btn-default hvr-pulse-grow adv_cust_mod_btn" data-toggle="modal" data-href="#responsive" href="#addModal">
                                        <i class="fa fa-plus"></i>
                                            &nbsp;  Add Service Category                                   
                                        </a>
                                </div>
                             </div>


                            <div class="card-block m-t-35" id="user_body">
                                <div class="table-toolbar">
                                    <div class="btn-group">
                                    <div class="btn-group float-right users_grid_tools">
                                        <div class="tools"></div>
                                    </div>
                                    </div>
                                </div>

                                <div>
                                        <table class="table table-striped table-bordered table-hover table-advance dataTable no-footer" id="editable_table" role="grid">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 30%;"><b>Service Category Name</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 45%;"><b>Description</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 25%;"><b>Actions</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($categories as $category) <!-- -->
                                                <tr>
                                                    <td>{!!$category->ServiceCategoryName!!}</td>
                                                    <td>{!!$category->Description!!}</td>
                                                    <td>
                                                        <!--EDIT BUTTON-->
                                                        <button class="btn btn-success hvr-float-shadow adv_cust_mod_btn" onclick="editModal({!!$category->ServiceCategoryID!!})" data-toggle="modal" data-href="#responsive" type="button"><i class="fa fa-pencil text-white"></i>&nbsp; Edit
                                                        </button>
                                                        <!--DELETE BUTTON-->
                                                        <!-- {{ Form::open(array('url' => 'servicecategory/' . $category->ServiceCategoryID, 'action' => 'ServiceCategoryController@destroy', 'method' => 'DELETE')) }}
                                                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                                                        {{ Form::close() }} -->
                                                        <button class="btn btn-danger source warning confirm hvr-float-shadow" onclick="deleteModal({!!$category->ServiceCategoryID!!})" type="button" style="width:70px"><i class="fa fa-trash text-white"></i> &nbsp; Delete
                                                        </button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END TABLE -->
            <!-- START EDIT MODAL -->
                {!! Form::open(array('id' => 'editForm', 'method' => 'PUT', 'url' => 'servicecategory', 'action' => 'ServiceCategoryController@update')) !!}
                <!-- {!! csrf_field() !!} -->
                <div class="modal fade in" id="editModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;&nbsp;Edit Service Category</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col">
                                    <div class="col-xl-12" style="padding-right:25px;">
                                        <br>
                                        <h4>Service Category Name</h4>
                                        <p>
                                            {!! 
                                                Form::input ('servicecategoryname','text', Input::old('servicecategoryname'), [
                                                'id'=>'servicecategoryname',
                                                'name'=>'servicecategoryname',
                                                'type'=>'text',
                                                'placeholder'=>'Category Name',
                                                'class'=>'form-control',
                                                'maxlength'=>'100',
                                                'required'
                                                ])
                                            !!}
                                        </p>
                                    </div>
                                    <div class="col-xl-12">
                                        <table id="myTable" class="table order-list" >
                                            <tbody>
                                                <tr>
                                                    <td><h5>Description</h5></td>
                                                    <td>
                                                        {!! 
                                                            Form::input ('description','text', Input::old('description'), [
                                                            'id'=>'description',
                                                            'name'=>'description',
                                                            'type'=>'text',
                                                            'placeholder'=>'Description',
                                                            'class'=>'form-control',
                                                            'maxlength'=>'255'
                                                            ])
                                                        !!}
                                                    </td>
                                                    <td><input id="servicecategoryid" name="servicecategoryid" type="hidden" value=null></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <div id="show-errors">
                                        @if ($errors->update->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->update->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <br>
                                        @endif
                                    </div>
                                </div>
                            </div>



                            <div class="modal-footer">
                                <div class="examples transitions m-t-5">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                                </div>
                                <div class="examples transitions m-t-5">
                                    {!!  Form::button('<i class="fa fa-save text-white"></i>&nbsp; Save Changes', [
                                        'type'=>'submit',
                                        'class'=>'btn btn-success warning source cancel_edit m-l-10 hvr-float-shadow adv_cust_mod_btn',
                                        'data-dismiss'=>'modal'
                                    ])
                                    !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
                <!-- END EDIT MODAL -->

                <!-- START ADD MODAL -->
                {!! Form::open(array('id' => 'addForm', 'url' => 'servicecategory', 'action' => 'ServiceCategoryController@store', 'method' => 'POST')) !!}
                <!-- {!! csrf_field() !!} -->
                <div class="modal fade in " id="addModal" tabindex="-2" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;&nbsp;Add Service Category</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col">
                                    <div class="col-xl-12" style="padding-right:25px;">
                                        <br>
                                        <h4>Service Category Name</h4>
                                        <p>
                                            {!!
                                                Form::input ('name','text', Input::old('servicecategoryname'), [
                                                'id'=>'servicecategoryname',
                                                'name'=>'servicecategoryname',
                                                'type'=>'text',
                                                'placeholder'=>'Category Name',
                                                'class'=>'form-control',
                                                'maxlength'=>'100',
                                                'required'
                                                ])
                                            !!}
                                        </p>
                                    </div>
                                    <div class="col-xl-12">
                                        <table id="myTable" class="table order-list" >
                                            <tbody>
                                                <tr>
                                                    <td><h5>Description</h5></td>
                                                    <td>
                                                        {!! 
                                                            Form::input ('description','text', Input::old('description'), [
                                                            'id'=>'description',
                                                            'name'=>'description',
                                                            'type'=>'text',
                                                            'placeholder'=>'Description',
                                                            'class'=>'form-control',
                                                            'maxlength'=>'255'
                                                            ])
                                                        !!}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <div id="show-errors">
                                        @if ($errors->add->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->add->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <br>
                                        @endif
                                    </div>
                                </div>
                            </div>



                            <div class="modal-footer">
                                <div class="examples transitions m-t-5">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                                </div>
                                <div class="examples transitions m-t-5">
                                    {!! Form::button('<i class="fa fa-save text-white"></i>&nbsp;Save', [
                                        'type'=>'submit',
                                        'class'=>'btn btn-success warning source cancel_add m-l-10 adv_cust_mod_btn',
                                        'data-dismiss'=>'modal',
                                    ]) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
                <!-- END ADD MODAL -->

                <!-- START DELETE MODAL -->
                {!! Form::open(array('id' => 'deleteForm', 'method' => 'PATCH', 'url' => 'servicecategory', 'action' => 'ServiceCategoryController@delete')) !!}
                <!-- {!! csrf_field() !!} -->
                <div class="modal fade in " id="deleteModal" tabindex="-3" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;&nbsp;Delete this record?</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col">
                                    <div class="col-xl-12" style="padding-right:25px;">
                                        <br>
                                        <p>
                                            Are you sure you want to delete this record?
                                        </p>
                                    </div>
                                    <div class="col-xl-12">
                                        <table id="myTable" class="table order-list" >
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input id="deleteId" name="deleteId" type="hidden" value=null>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>



                            <div class="modal-footer">
                                <div class="examples transitions m-t-5">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Cancel</button>
                                </div>
                                <div class="examples transitions m-t-5">
                                    {!! Form::button('<i class="fa fa-save text-white"></i>&nbsp;OK', [
                                        'type'=>'submit',
                                        'class'=>'btn btn-success warning source confirm m-l-10 adv_cust_mod_btn',
                                        'data-dismiss'=>'modal',
                                    ]) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
                <!-- END DELETE MODAL -->
                <!-- END MODAL-->

                            </div>
                        </div>
                    </div>
                    <!-- /.inner -->
                </div>
                <!-- /.outer -->
        <!--END CONTENT -->


<!-- scripts-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="vendors/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="vendors/sweetalert/js/sweetalert2.min.js"></script>
<script type="text/javascript" src="js/pages/sweet_alerts.js"></script>
<script type="text/javascript" src="vendors/snabbt/js/snabbt.min.js"></script>
<script type="text/javascript" src="vendors/wow/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script>
    $(window).on('load',function(){
        @if($errors->add->any())
            $('#addModal').modal('show');
        @endif
        @if($errors->update->any())
            $('#editModal').modal('show');
         @endif
    });
</script>
<script>
     function editModal(id){
            $.ajax({
                type: "GET",
                url: "/servicecategory/"+id+"/edit",
                dataType: "JSON",
                success:function(data){
                    $("#servicecategoryname").val(data.category.ServiceCategoryName);
                    $("#description").val(data.category.Description);
                    $("#servicecategoryid").val(data.category.ServiceCategoryID);
                }
            });
            $('#editModal').modal('show');
        }
        function deleteModal(id){
            document.getElementById("deleteId").value = id;
            $('#deleteModal').modal('show');
        }
</script>

<!-- global scripts modals-->
<script type="text/javascript" src="js/pages/modals.js"></script>
<!--End of global scripts-->
@stop