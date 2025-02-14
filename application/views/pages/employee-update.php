<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <?php if($this->session->flashdata('update-failed')): ?>
            <div class="alert alert-danger">
                <?= $this->session->flashdata('update-failed'); ?>
            </div>
        <?php endif; ?>  
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="text-center">Update Employee</h3></div>

            <div class="panel-body">
                <?php echo form_open('updateProcess/'.$employee->id,['class' => 'form-horizontal form-label-left']); ?>

                    <div class="form-group">
                        <?php
                            $label_args = ['class' => 'control-label col-md-4 col-sm-4 col-xs-12'];
                            echo form_label('Employee ID','emp_id', $label_args);
                        ?>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <?php
                            $input_args = [
                                'class'     => 'form-control',
                                'disabled'  => 'disabled',
                                'value'     => $employee->emp_id
                            ];
                            echo form_input($input_args);
                            ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <?php
                            $label_args = ['class' => 'control-label col-md-4 col-sm-4 col-xs-12'];
                            echo form_label('Employee Name','emp_name', $label_args);
                        ?>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <?php
                            $input_args = [
                                'name'      => 'update_emp_name',
                                'id'        => 'emp_name',
                                'required'  => 'required',
                                'class'     => 'form-control',
                                'value'     => $employee->emp_name
                            ];
                            echo form_input($input_args);
                            ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <?php
                            $label_args = ['class' => 'control-label col-md-4 col-sm-4 col-xs-12'];
                            echo form_label('Employee Residence','emp_residence', $label_args);
                        ?>

                        <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="date" class="form-control" name="update_emp_bday" value="<?= $employee->emp_bday; ?>">
                        </div>
                    </div>    


                    <div class="form-group">
                        <?php
                            $label_args = ['class' => 'control-label col-md-4 col-sm-4 col-xs-12'];
                            echo form_label('Email Address','emp_address', $label_args);
                        ?>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <?php
                            $input_args = [
                                'rows'       => '3',
                                'name'      => 'update_emp_address',
                                'id'        => 'emp_address',
                                'required'  => 'required',
                                'class'     => 'form-control',
                                'value'     => $employee->emp_address
                            ];
                            echo form_input($input_args);
                            ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <?php
                            $label_args = ['class' => 'control-label col-md-4 col-sm-4 col-xs-12'];
                            echo form_label('Employee Phone','emp_phone', $label_args);
                        ?>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <?php
                            $input_args = [
                                'name'      => 'update_emp_phone',
                                'id'        => 'emp_phone',
                                'required'  => 'required',
                                'class'     => 'form-control ',
                                'type'      => 'number',
                                'value'     => $employee->emp_phone
                            ];
                            echo form_input($input_args);
                            ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-4 col-sm-offset-4">
                        <?php
                            $args = [
                            'type' => 'submit',
                            'class' => 'btn btn-success',
                            'value' => 'Update Employee'
                            ];
                            echo form_input($args);
                        ?>
                        </div>
                    </div>
              <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
