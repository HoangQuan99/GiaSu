<style type="text/css">
	.active1
	{
		color: red;
	}
</style>

<aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <ul class="list-group">
                <li class="list-group-item"><a href="<?php echo base_url() ?>admin/lop" class="<?php echo ($active == 'lop')? 'active1' : ''; ?>"><span class="glyphicon glyphicon-user"></span> <span style="color: red ; font-size: 15px ">Lớp</span></a></li>
                <li class="list-group-item"><a href="<?php echo base_url() ?>admin/giasu" class="<?php echo ($active == 'giasu')? 'active1' : ''; ?>"><span class="glyphicon glyphicon-user"></span><span style="color: red ; font-size: 15px "> Gia sư</span></a></li>
                <li class="list-group-item"><a href="<?php echo base_url() ?>admin/phuhuynh" class="<?php echo ($active == 'phuhuynh')? 'active1' : ''; ?>"><span class="glyphicon glyphicon-user"></span><span style="color: red ; font-size: 15px "> Phụ huynh </span></a></li>
                <li class="list-group-item"><a href="<?php echo base_url() ?>admin/giasudangky" class="<?php echo ($active == 'dsgiasu')? 'active1' : ''; ?>"><span class="glyphicon glyphicon-user"></span><span style="color: red ; font-size: 15px "> Gia sư đăng ký</span></a></li>
                <li class="list-group-item"><a href="<?php echo base_url() ?>admin/gioithieu" class="<?php echo ($active == 'gioi_thieu')? 'active1' : ''; ?>"><span class="glyphicon glyphicon-user"></span><span style="color: red ; font-size: 15px "> Giới thiệu</span></a></li>
            </ul>
        </section>
       
    </aside>