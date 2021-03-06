<div class="modal fade modal-bulkmsg"  role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Person Form</h3>
            </div>
            <div class="modal-body form">


                <div class="row">
                    <div class="col-md-12">

                        <div class="box box-danger">
                            <div class="box-header">
                                <h3 class="box-title">Input masks</h3>
                            </div>
                            <div class="box-body">
                                <!-- Date dd/mm/yyyy -->
                                <div class="form-group">
                                    <label>To</label>
                                    <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a userlist" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        <option>Loyalty Customers</option>
                                        <option>Loan Deals</option>
                                        <option>Customers</option>
                                        <option>Promotions</option>
                                        <option>Directors</option>
                                        <option>Shareholders</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SELECT2 EXAMPLE -->
                <div class="box box-default collapsed-box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Scheduled Message</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">







                                <div class="form-group">
                                    <label>From (Date)</label>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker">
                                    </div>
                                    <!-- /.input group -->
                                </div>



                                <div class="form-group">
                                    <label>From (Date)</label>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right2" id="datepicker2">
                                    </div>
                                    <!-- /.input group -->
                                </div>


                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <!-- /.form-group -->


                                <div class="form-group">
                                    <label>Time picker:</label>

                                    <div class="input-group">
                                        <input type="text" class="form-control timepicker" id="timepicker">

                                        <div class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>



                                <div class="form-group">
                                    <label>To (Time)</label>

                                    <div class="input-group">
                                        <input type="text" class="form-control timepicker" id="timepicker2">

                                        <div class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->


                <div class="row">
                    <div class="col-md-12">

                        <div class="box box-danger">
                            <div class="box-header">
                                <h3 class="box-title">Messege</h3>
                            </div>
                            <div class="box-body">
                                <!-- Messsege -->
                                <div class="form-group">
                                    <label>Messege</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>

            </div>


        </div>
    </div>
</div>



