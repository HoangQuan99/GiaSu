
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

      <script src="/js/item-ajax.js"></script>
   
    <div class="container-fluid  dashboard-content">

<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="page-header">
    <h2 class="pageheader-title">Gia sư đăng ký</h2>
<div class="page-breadcrumb">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
</ol>
</nav>
</div>
</div>
</div>
</div>

<div class="row">

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="card">
<h5 class="card-header">Gia sư đăng ký</h5>
<button class="btn btn-success" data-toggle="modal" data-target="#myModal1">Thêm</button>
<div class="card-body">
<div class="table-responsive">
<table class="table table-striped table-bordered first">

    <thead>
            <th>Id</th>
            <th>Họ tên</th>
            <th>Hình ảnh</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>CMND</th>
            <th>Email</th>
            <th>Lớp dạy</th>
            <th>Môn dạy</th>
            <th>Giới tính</th>
            <th>Số buổi</th>
            <th>Thời gian</th>
            <th>Chức vụ</th>
            <th>Nơi công tác</th>
            <th>Ưu điểm</th>
            <th></th>
        
    </thead>  
        
<tbody>
        <?php foreach ($dsgiasu as $key=>$value ) {?>
        <tr id="id<?php echo $value['id'] ?>">
            
                <th><?php echo $value['id'] ?></th>
                <th><?php echo $value['fullname'] ?></th>
                <td ><img src="<?php echo base_url()?>public/image/<?php echo $value['image'] ?>" width="100px" max-height="100px" ></td>
                <th><?php echo $value['address'] ?></th>
                <th><?php echo $value['phone'] ?></th>
                <th><?php echo $value['cmnd'] ?></th>
                <th><?php echo $value['email'] ?></th>
                <th><?php echo $value['id_lop'] ?></th>
                <th><?php echo $value['mon_hoc'] ?></th>
                <th><?php echo $value['gioi_tinh'] ?></th>
                <th><?php echo $value['so_buoi'] ?></th>
                <th><?php echo $value['thoi_gian'] ?></th>
                <th><?php echo $value['id_level'] ?></th>
                <th><?php echo $value['noi_lv'] ?></th>
                <th><?php echo $value['uu_diem'] ?></th>

                 <td>
                  <a href="#" 
                  data-id="<?php echo $value['id'] ?>" 
                  data-fullname="<?php echo $value['fullname'] ?>" 
                  data-image="<?php echo $value['image'] ?>" 
                  data-address="<?php echo $value['address'] ?>" 
                  data-phone="<?php echo $value['phone'] ?>" 
                  data-cmnd="<?php echo $value['cmnd'] ?>" 
                  data-email="<?php echo $value['email'] ?>" 
                  data-id_lop="<?php echo $value['id_lop'] ?>" 
                  data-mon_hoc="<?php echo $value['mon_hoc'] ?>"
                  data-gioi_tinh="<?php echo $value['gioi_tinh'] ?>" 
                  data-so_buoi="<?php echo $value['so_buoi'] ?>" 
                  data-thoi_gian="<?php echo $value['thoi_gian'] ?>" 
                  data-id_level="<?php echo $value['id_level'] ?>" 
                  data-noi_lv="<?php echo $value['noi_lv'] ?>" 
                  data-uu_diem="<?php echo $value['uu_diem'] ?>"  
                  onclick="sua111(this)">Sửa</a> </td>
                 <td><a href="#" onclick="remove('<?php echo $value['id'] ?>')">Xóa</a> </td>
        </tr>
        <?php } ?>  
       </tbody>

</table>
</div>
</div>
</div>
</div>

<script type="text/javascript" >
  
       
      function remove($id)
      {
        console.log($id);
        $.ajax({
          url: '<?php echo base_url() ?>admin/giasudangky/delete_index',
          type: 'POST',
          dataType: 'html',
          data: {id : $id},
        })
        .done(function(data) {
        
         $('#id'+$id).remove();
          
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });
}

</script>



<div class="modal fade" id="myModal1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

        <form action="<?php echo base_url() ?>admin/giasudangky/insert" method="POST" enctype="multipart/form-data">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Thêm Lớp</h4>
          </div>
          <div class="modal-body">
           <br>
           <!-- <label> ID </label>
           <input type="text" name="id" class="form-control"  > -->
           <label> Họ tên </label>
           <input type="text" name="fullname" class="form-control" >
           <label> Hình ảnh </label>
           <input type="file" name="image"class="form-control"  >
           <label> Địa chỉ </label>
           <input type="text" name="address" class="form-control" >
           <label> Số điện thoại </label>
           <input type="text" name="phone" class="form-control" >
           <label> CMND</label>
           <input type="text" name="cmnd" class="form-control" >
           <label> Email</label>
           <input type="text" name="email" class="form-control" >
           <label> Lớp dạy</label>
           <input type="text" name="id_lop" class="form-control" >
           <label> Môn dạy</label>
           <input type="text" name="mon_hoc" class="form-control" >
           <label> Giới tính</label>
           <input type="text" name="gioi_tinh" class="form-control" >
           <label> Số buổi</label>
           <input type="text" name="so_buoi" class="form-control" >
           <label> Thời gian</label>
           <input type="text" name="thoi_gian" class="form-control" >
           <label> Thông tin khác</label>
           <input type="text" name="id_level" class="form-control" >
           <label> Nơi làm việc</label>
           <input type="text" name="noi_lv" class="form-control" >
           <label> Ưu điểm</label>
           <input type="text" name="uu_diem" class="form-control" >
           <br>
           
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
      </form>
    </div>
  </div>
</div>

<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->

    <div class="modal-content">
       <form action="<?php echo base_url() ?>admin/giasudangky/sua_giasudk" method="POST" enctype="multipart/form-data">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sửa Gia Sư</h4>
      </div>
      <div class="modal-body">
        <label> ID </label>
           <input type="text" name="id" class="form-control" id="id333" >
           <label> Họ tên </label>
           <input type="text" name="fullname" class="form-control" id="fullname33">
           <label> Hình ảnh </label>
           <input type="file" name="image" class="form-control"  > <br>
           <img src="" id="image33" width="100px" height="100px"> <br>
           <label> Địa chỉ </label>
           <input type="text" name="address" class="form-control" id="address33">
           <label> Số điện thoại </label>
           <input type="text" name="phone" class="form-control" id="phone33">
           <label> CMND</label>
           <input type="text" name="cmnd" class="form-control" id="cmnd33">
           <label> Email</label>
           <input type="text" name="email" class="form-control" id="email33">
           <label> Lớp dạy</label>
           <input type="text" name="id_lop" class="form-control" id="id_lop33">
           <label> Môn dạy</label>
           <input type="text" name="mon_hoc" class="form-control" id="mon_hoc33">
           <label> Giới tính</label>
           <input type="text" name="gioi_tinh" class="form-control" id="gioi_tinh33">
           <label> Số buổi</label>
           <input type="text" name="so_buoi" class="form-control" id="so_buoi33">
           <label> Thời gian</label>
           <input type="text" name="thoi_gian" class="form-control" id="thoi_gian33">
           <label> Thông tin khác</label>
           <input type="text" name="id_level" class="form-control" id="id_level33">
           <label> Nơi làm việc</label>
           <input type="text" name="noi_lv" class="form-control" id="noi_lv33">
           <label> Ưu điểm</label>
           <input type="text" name="uu_diem" class="form-control" id="uu_diem33">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
       </form>
    </div>

  </div>
</div>

<script type="text/javascript">
  function sua111(obj)
  {
  
    var id = $(obj).data("id");
    var fullname = $(obj).data("fullname");
    var image=$(obj).data("image");
    var address = $(obj).data("address");
    var phone = $(obj).data("phone");
    var cmnd = $(obj).data("cmnd");
    var email = $(obj).data("email");
    var id_lop = $(obj).data("id_lop");
    var mon_hoc = $(obj).data("mon_hoc");
    var gioi_tinh = $(obj).data("gioi_tinh");
    var so_buoi = $(obj).data("so_buoi");
    var thoi_gian = $(obj).data("thoi_gian");
    var id_level = $(obj).data("id_level");
    var noi_lv = $(obj).data("noi_lv");
    var uu_diem = $(obj).data("uu_diem");
   
    $("#fullname33").val(fullname);
    $("#image33").attr("src","<?php echo base_url()?>public/image/"+image);
    $("#id333").val(id);
    $("#address33").val(address);
    $("#phone33").val(phone);
    $("#cmnd33").val(cmnd);
    $("#email33").val(email);
    $("#id_lop33").val(id_lop);
    $("#mon_hoc33").val(mon_hoc);
    $("#gioi_tinh33").val(gioi_tinh);
    $("#so_buoi33").val(so_buoi);
    $("#thoi_gian33").val(thoi_gian);
    $("#id_level33").val(id_level);
    $("#noi_lv33").val(noi_lv);
    $("#uu_diem33").val(uu_diem);
    $('#myModal2').modal('show');
  }
</script>



