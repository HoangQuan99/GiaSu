
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
    <h2 class="pageheader-title">Lớp</h2>
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
<h5 class="card-header">Lớp</h5>
<button class="btn btn-success" data-toggle="modal" data-target="#myModal1">Thêm</button>
<div class="card-body">
<div class="table-responsive">
<table class="table table-striped table-bordered first">

    <thead>
            <th>Id</th>
            <th>Môn dạy</th>
            <th>Lớp dạy</th>
            <th>Địa chỉ</th>
            <th>Lương</th>
            <th>Số buổi</th>
            <th>Thời gian</th>
            <th>Thông tin</th>
            <th>Yêu cầu</th>
            <th>Liên hệ</th>
            <th></th>
        
    </thead>  
        
<tbody>
        <?php foreach ($lop as  $key=>$value) {?>
          <tr id="id<?php echo $value['id'] ?>">
            
                <td ><?php echo $value['id'] ?></td>
                <td ><?php echo $value['monday'] ?></td>
                <td><?php echo $value['lopday'] ?></td>
                <td><?php echo $value['diachi'] ?></td>
                <td><?php echo $value['luong'] ?></td>
                <td><?php echo $value['sobuoi'] ?></td>
                <td><?php echo $value['thoigian'] ?></td>
                <td><?php echo $value['thongtin'] ?></td>
                <td><?php echo $value['yeucau'] ?></td>
                <td><?php echo $value['lienhe'] ?></td>
                <td><a href="#" 
                  data-id="<?php echo $value['id'] ?>" 
                  data-monday="<?php echo $value['monday'] ?>" 
                  data-lopday="<?php echo $value['lopday'] ?>" 
                  data-diachi="<?php echo $value['diachi'] ?>" 
                  data-luong="<?php echo $value['luong'] ?>" 
                  data-sobuoi="<?php echo $value['sobuoi'] ?>" 
                  data-thoigian="<?php echo $value['thoigian'] ?>" 
                  data-thongtin="<?php echo $value['thongtin'] ?>" 
                  data-lienhe="<?php echo $value['lienhe'] ?>"
                 data-yeucau="<?php echo $value['yeucau'] ?>" onclick="sua(this)">Sửa</a> </td>
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
          url: '<?php echo base_url() ?>admin/Lop/delete_index',
          type: 'POST',
          dataType: 'html',
          data: {id : $id},
        })
        .done(function(data) {
        
         $('#id'+$id).remove();
         alert("Done!");
          
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

        <form action="<?php echo base_url() ?>admin/lop/insert" method="POST" enctype="multipart/form-data">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Thêm Lớp</h4>
          </div>
          <div class="modal-body">
           <br>
           <label> ID </label>
           <input type="text" name="id" class="form-control" >
           <label> Môn Dạy </label>
           <input type="text" name="monday" class="form-control">
           <label> Lớp Dạy </label>
           <input type="text" name="lopday" class="form-control">
           <label> Địa Chỉ </label>
           <input type="text" name="diachi" class="form-control">
           <label> Lương</label>
           <input type="text" name="luong" class="form-control">
           <label> Số buổi</label>
           <input type="text" name="sobuoi" class="form-control">
           <label> Thời gian</label>
           <input type="text" name="thoigian" class="form-control">
           <label> Thông tin</label>
           <input type="text" name="thongtin" class="form-control">
           <label> Yêu cầu</label>
           <input type="text" name="yeucau" class="form-control">
           <label> Liên hệ</label>
           <input type="text" name="lienhe" class="form-control">
           
           
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
       <form action="<?php echo base_url() ?>admin/lop/sua_lop" method="POST" enctype="multipart/form-data">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sửa lớp</h4>
      </div>
      <div class="modal-body">
        <label> ID </label>
           <input type="text" name="id" class="form-control" id="id_1" >
        <label> Môn Dạy </label>
           <input type="text" name="monday" class="form-control" id="monday1">
        <label> Lớp Dạy </label>
           <input type="text" name="lopday" class="form-control" id="lopday1">
        <label> Địa Chỉ </label>
           <input type="text" name="diachi" class="form-control" id="diachi1">
        <label> Lương</label>
           <input type="text" name="luong" class="form-control" id="luong1">
        <label> Số buổi</label>
           <input type="text" name="sobuoi" class="form-control" id="sobuoi1">
        <label> Thời gian</label>
           <input type="text" name="thoigian" class="form-control" id="thoigian1">
        <label> Thông tin</label>
           <input type="text" name="thongtin" class="form-control" id="thongtin1">
        <label> Yêu cầu</label>
           <input type="text" name="yeucau" class="form-control" id="yeucau1">
        <label> Liên hệ</label>
           <input type="text" name="lienhe" class="form-control" id="lienhe1">
           
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
    var monday = $(obj).data("monday");
    var lopday = $(obj).data("lopday");
    var diachi = $(obj).data("diachi");
    var luong = $(obj).data("luong");
    var sobuoi = $(obj).data("sobuoi");
    var thoigian = $(obj).data("thoigian");
    var thongtin = $(obj).data("thongtin");
    var yeucau = $(obj).data("yeucau");
    var lienhe = $(obj).data("lienhe");
    
    $("#id_1").val(id);
    $("#monday1").val(monday);
    $("#lopday1").val(lopday);
    $("#diachi1").val(diachi);
    $("#luong1").val(luong);
    $("#sobuoi1").val(sobuoi);
    $("#thoigian1").val(thoigian);
    $("#thongtin1").val(thongtin);
    $("#yeucau1").val(yeucau);
    $("#lienhe1").val(lienhe);
    $('#myModal2').modal('show');
  }
</script>



