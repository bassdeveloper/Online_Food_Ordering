  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION["username"];?></p>
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
          <p><?php echo $_SESSION["mail"];?></p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Main Navigation</li>
        <li class="treeview">
          <a href="<?php echo base_url(); ?>index.php/AdminControl/dashboardPage">
            <i class="fa fa-dashboard"></i> <span>Current Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url(); ?>index.php/AdminControl/deliveredPage">
            <i class="fa fa-check"></i>
            <span>Delivered Orders</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
              <!-- <span class="label label-primary pull-right">4</span> -->
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url(); ?>index.php/AdminControl/editItem">
            <i class="fa  fa-circle-o-notch"></i> <span>Edit Items</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url(); ?>index.php/AdminControl/addItem">
            <i class="fa  fa-cloud-upload"></i> <span>Add Items</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Current Orders
        <small>(Displayed till order's status = Delivered!)</small>
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Orders Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Purchase Id</th>
                  <th>Name</th>
                  <th>Mail Id</th>
                  <th>Contact</th>
                  <th>Item</th>
                  <th>Quantity</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Purchase Remarks</th>
                  <th>Status</th>
                  <th>Change</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                   foreach ($rows as $row) {
                   ?>

                  <tr>
                    <td>
                        <?php echo $row->purchase_id;?>
                    </td>
                    <td>
                      <?php echo $row->name;?>
                    </td>
                    <td>
                      <?php echo $row->mail;?>
                    </td>
                    <td>
                      <?php echo $row->contact;?>
                    </td>
                    <td>
                      <?php echo $row->item_id;?>
                    </td>
                    <td>
                      <?php echo $row->quantity;?>
                    </td>
                    <td>
                      <?php echo $row->date_of_purchase;?>
                    </td>
                    <td>
                      <?php echo $row->time_of_purchase;?>
                    </td>
                    <td>
                      <?php echo $row->purchase_Remarks;?>
                    </td>
                    <td>
                      <?php echo $row->status;?>
                    </td>
                    <td>
                      <a class = "btn btn-block btn-primary" href =
                "<?php echo base_url(); ?>index.php/AdminControl/startPrepare/<?php echo $row->purchase_id; ?>">Start Preparing</a> &nbsp;&nbsp;
                      <a class = "btn btn-block btn-danger" href =
                "<?php echo base_url(); ?>index.php/AdminControl/cancelOrder/<?php echo $row->purchase_id; ?>">Cancel Order</a>
                    </td>

                  </tr>
                <?php }?>
                 </tbody>
                <tfoot>
                <tr>
                  <th>Purchase Id</th>
                  <th>Name</th>
                  <th>Mail Id</th>
                  <th>Contact</th>
                  <th>Item</th>
                  <th>Quantity</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Purchase Remarks</th>
                  <th>Status</th>
                  <th>Change</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

