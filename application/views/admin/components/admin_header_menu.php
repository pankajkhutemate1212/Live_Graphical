<div class="navbar navbar-static-top navbar-inverse">

	    <div class="navbar-inner">

		   

		    <ul class="nav">

			   <!--  <li><a href="<?php echo site_url('admin/dashboard'); ?>">New Report</a></li> -->

                <li><a href="<?php echo site_url('admin/newreport'); ?>">New Report</a></li>

                

                <li><?php echo anchor('admin/newreport/upcoming', 'New Upcoming Report'); ?></li>

			    <li><?php echo anchor('admin/newpress', 'New Press Release'); ?></li>

			   <li><?php echo anchor('admin/newblog', 'New Blog'); ?></li>

                <li><?php echo anchor('admin/allreports', 'All Reports'); ?></li>

                <li><?php echo anchor('admin/allblogs', 'All BLogs'); ?></li>

                <li><?php echo anchor('admin/allpress', 'All Press Release'); ?></li>

                <li><?php echo anchor('admin/allreports/upcoming_index', 'All Ongoing Reports'); ?></li>

                <li><?php echo anchor('admin/setting', 'Setting'); ?></li>
                <li style="background-color: maroon; margin-top: 2px;"><?php echo anchor('admin/upload', 'Upload Image'); ?></li>

		    </ul>

	    </div>

    </div>



