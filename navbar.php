
<style>
h3{
	color: white;
}
</style>
<nav id="sidebar" class='mx-lt-5 ' style="background-color: #003060;" >
		
		<div class="sidebar-list" style="background-color:light-gray;">
		
				<a href="index.php?page=home" class="nav-item nav-home" style="background-color: light-gray;"> <span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="index.php?page=attendance" class="nav-item nav-attendance" style="background-color:light-gray;"><span class='icon-field'><i class="fa fa-th-list"></i></span> Attendance</a>
				<a href="index.php?page=payroll" class="nav-item nav-payroll" style="background-color:  light-gray;"><span class='icon-field'><i class="fa fa-columns"></i></span> Payroll List</a>
				<a href="index.php?page=employee" class="nav-item nav-employee" style="background-color:  light-gray;"><span class='icon-field'><i class="fa fa-user-tie"></i></span> Employee List</a>
				<a href="index.php?page=department" class="nav-item nav-department" style="background-color:light-gray;"><span class='icon-field'><i class="fa fa-columns"></i></span> Department List</a>
				<a href="index.php?page=position" class="nav-item nav-position" style="background-color:light-gray;"><span class='icon-field'><i class="fa fa-user-tie"></i></span> Position List</a>

				<a href="index.php?page=allowances" class="nav-item nav-allowances" style="background-color:light-gray;"><span class='icon-field'><i class="fa fa-list"></i></span> Allowance List</a>
				<a href="index.php?page=deductions" class="nav-item nav-deductions" style="background-color:light-gray;"><span class='icon-field'><i class="fa fa-money-bill-wave"></i></span> Deduction List</a>		
					
				<?php if($_SESSION['login_type'] == 1): ?>
				<a href="index.php?page=users" class="nav-item nav-users" style="background-color: light-gray;"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
				
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
