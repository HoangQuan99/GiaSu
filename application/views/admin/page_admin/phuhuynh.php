
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

      <script src="/js/item-ajax.js"></script>
      <script src="/js/item-ajax.js"></script>
<div class="container-fluid  dashboard-content">

<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="page-header">
    <h2 class="pageheader-title">Phụ Huynh</h2>
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
<h5 class="card-header">Phụ Huynh</h5>
<button class="btn btn-success" data-toggle="modal" data-target="#myModal1">Thêm</button>
<div class="card-body">
<div class="table-responsive">
<table class="table table-striped table-bordered first">

    <thead>
            <th>Id</th>
            <th>Họ tên</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Lớp</th>
            <th>Môn học</th>
            <th>Số học sinh</th>
            <th>Học lực</th>
            <th>Số buổi</th>
            <th>Thời gian</th>
            <th>Yêu cầu</th>
        
    </thead>  
        
<tbody>
        <?php foreach ($phuhuynh as  $key=>$value) {?>
        <tr id="id<?php echo $value['id'] ?>">
            
                <td ><?php echo $value['id'] ?></td>
                <td ><?php echo $value['fullname'] ?></td>
                <td><?php echo $value['address'] ?></td>
                <td><?php echo $value['phone'] ?></td>
                <td><?php echo $value['email'] ?></td>
                <td><?php echo $value['id_lop'] ?></td>
                <td><?php echo $value['mon_hoc'] ?></td>
                <td><?php echo $value['so_hoc_sinh'] ?></td>
                <td><?php echo $value['hoc_luc'] ?></td>
                <td><?php echo $value['so_buoi'] ?></td>
                <td><?php echo $value['thoi_gian'] ?></td>
                <td><?php echo $value['yeu_cau'] ?></td>

                 <td><a href="#" data-id="<?php echo $value['id'] ?>" data-fullname="<?php echo $value['fullname'] ?>" data-address="<?php echo $value['address'] ?>" data-phone="<?php echo $value['phone'] ?>" data-email="<?php echo$value['email'] ?>" data-id_lop="<?php echo $value['id_lop'] ?>" data-mon_hoc="<?php echo $value['mon_hoc'] ?>" data-so_hoc_sinh="<?php echo $value['so_hoc_sinh'] ?>" data-hoc_luc="<?php echo $value['hoc_luc'] ?>"
                 data-so_buoi="<?php echo $value['so_buoi'] ?>" data-thoi_gian="<?php echo $value['thoi_gian'] ?>" data-yeu_cau="<?php echo $value['yeu_cau'] ?>"   onclick="sua(this)">Sửa</a> </td>
                 <td><a href="#" onclick="remove('<?php echo $value['id'] ?>')">Xóa</a> </td>
          </tr></td>
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
          url: '<?php echo base_url() ?>admin/phuhuynh/delete_index',
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

        <form action="<?php echo base_url() ?>admin/phuhuynh/insert" method="POST" enctype="multipart/form-data">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Thêm Phụ Huynh</h4>
          </div>
          <div class="modal-body">
           <br>
           <label> ID </label>
           <input type="text" name="id" class="form-control" >
           <label> Họ tên </label>
           <input type="text" name="fullname" class="form-control">
           <label> Địa chỉ </label>
           <input type="text" name="address" class="form-control">
           <label> Email </label>
           <input type="text" name="email" class="form-control">
           <label> Số điện thoại </label>
           <input type="text" name="phone" class="form-control">
           <label> Lớp</label>
           <input type="text" name="id_lop" class="form-control">
           <label> Môn học</label>
           <input type="text" name="mon_hoc" class="form-control">
           <label> Số học sinh</label>
           <input type="text" name="so_hoc_sinh" class="form-control">
           <label> Học lực</label>
           <input type="text" name="hoc_luc" class="form-control">
           <label> Số buổi</label>
           <input type="text" name="so_buoi" class="form-control">
           <label> Thời gian</label>
           <input type="text" name="thoi_gian" class="form-control">
           <label> Yêu cầu</label>
           <input type="text" name="yeu_cau" class="form-control">
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

<div id="myModal222" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
       <form action="<?php echo base_url() ?>admin/phuhuynh/sua_phuhuynh" method="POST" enctype="multipart/form-data">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sửa</h4>
      </div>
      <div class="modal-body">
        <label> ID </label>
           <input type="text" name="id" class="form-control" id="id222" >
           <label> Họ tên </label>
           <input type="text" name="fullname" class="form-control" id="fullname1">
           <label> Địa chỉ </label>
           <input type="text" name="address" class="form-control" id="address1">
           <label> Email </label>
           <input type="text" name="email" class="form-control" id="email1">
           <label> Số điện thoại </label>
           <input type="text" name="phone" class="form-control" id="phone1">
           <label> Lớp</label>
           <input type="text" name="id_lop" class="form-control" id="id_lop1">
           <label> Môn học</label>
           <input type="text" name="mon_hoc" class="form-control" id="mon_hoc1">
           <label> Số học sinh</label>
           <input type="text" name="so_hoc_sinh" class="form-control" id="so_hoc_sinh1">
           <label> Học lực</label>
           <input type="text" name="hoc_luc" class="form-control" id="hoc_luc1">
           <label> Số buổi</label>
           <input type="text" name="so_buoi" class="form-control" id="so_buoi1">
           <label> Thời gian</label>
           <input type="text" name="thoi_gian" class="form-control" id="thoi_gian1">
           <label> Yêu cầu</label>
           <input type="text" name="yeu_cau" class="form-control" id="yeu_cau1"> 
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
  function sua(obj)
  {
    var id = $(obj).data("id");
    var fullname = $(obj).data("fullname");
    var address = $(obj).data("address");
    var email = $(obj).data("email");
    var phone = $(obj).data("phone");
    var id_lop = $(obj).data("id_lop");
    var mon_hoc = $(obj).data("mon_hoc");
    var so_hoc_sinh = $(obj).data("so_hoc_sinh");
    var hoc_luc = $(obj).data("hoc_luc");
    var so_buoi = $(obj).data("so_buoi");
    var thoi_gian = $(obj).data("thoi_gian");
    var yeu_cau = $(obj).data("yeu_cau");
    
    $("#id222").val(id);
    $("#fullname1").val(fullname);
    $("#address1").val(address);
    $("#phone1").val(phone);
    $("#email1").val(email);
    $("#id_lop1").val(id_lop);
    $("#mon_hoc1").val(mon_hoc);
    $("#so_hoc_sinh1").val(so_hoc_sinh);
    $("#hoc_luc1").val(hoc_luc);
    $("#so_buoi1").val(so_buoi);
    $("#thoi_gian1").val(thoi_gian);
    $("#yeu_cau1").val(yeu_cau);
    $('#myModal222').modal('show');
  }
</script>



