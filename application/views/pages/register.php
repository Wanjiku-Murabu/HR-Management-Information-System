<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <?php if($this->session->flashdata('add-failed')): ?>
            <div class="alert alert-danger">
                <?= $this->session->flashdata('add-failed'); ?>
            </div>
        <?php endif; ?>  
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="text-center">Registration Page HRMIS</h3></div>

            <div class="panel-body">
                <?php echo form_open('regProcess',['class' => 'form-horizontal form-label-left']); ?>

                 

                    <div class="form-group">
                        <?php
                            $label_args = ['class' => 'control-label col-md-4 col-sm-4 col-xs-12'];
                            echo form_label('Employee Name','emp_name', $label_args);
                        ?>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <?php
                            $input_args = [
                                'name'      => 'emp_name',
                                'id'        => 'emp_name',
                                'required'  => 'required',
                                'class'     => 'form-control'
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
                            <div class="ainput-group date">
                                <input type="date" class="form-control" name="emp_bday">
                            </div>
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
                                'name'      => 'emp_address',
                                'id'        => 'emp_address',
                                'required'  => 'required',
                                'class'     => 'form-control'
				
                            ];
                            echo form_input($input_args);
                            ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <?php
                            $label_args = ['class' => 'control-label col-md-4 col-sm-4 col-xs-12'];
                            echo form_label('Employee Password','emp_pass', $label_args);
                        ?>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <?php
                            $input_args = [
                                'name'      => 'emp_pass',
                                'id'        => 'emp_pass',
                                'required'  => 'required',
                                'class'     => 'form-control ',
                                'type'      => 'password'
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
                            'value' => 'Sign Up'
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
