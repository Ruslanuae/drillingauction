<?php
$this->title = 'STIGL - Personal Area';
?>
<div class="row content">
    <div class="col-md-12">
        <div class="row content page_prod">
            <div class="col-md-12 col-sm-7 col-12">
                <div class="content_prod">
                    <h3>Personal Information</h3>
                    <table class="table table-striped table-bordered">
                        <tr>
                            <td><h4>First Name</h4></td>
                            <td><h5><?php echo $users_array['user_name'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h4>Last Name</h4></td>
                            <td><h5><?php echo $users_array['user_surname'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h4>Email</h4></td>
                            <td><h5><?php echo $users_array['email'];?></h5></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-12">
                <div class="h_prod">
                    <h3>Information for the administration (for the rest will be hidden)</h3>
                    <table class="table table-striped table-bordered">
                        <tr>
                            <td><h4>Phone</h4></td>
                            <td><h5><?php echo $users_array['phone'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h4>Country</h4></td>
                            <td><h5><?=$country['name'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h4>Region</h4></td>
                            <td><h5><?php echo $users_array['region'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h4>City</h4></td>
                            <td><h5><?php echo $users_array['city'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h4>You Money</h4></td>
                            <?php if($deposit==0):?>
                                <td><h5>You don`t have money</h5></td>
                            <?php else:?>
                                <td><h5><?=$deposit;?></h5></td>
                            <?php endif;?>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>