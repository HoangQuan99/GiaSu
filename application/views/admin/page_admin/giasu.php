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
    <h2 class="pageheader-title">Gia Sư</h2>
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
<button class="btn btn-success" data-toggle="modal" data-target="#myModal1">Thêm</button>
<div class="card-body">
<div class="table-responsive">
<table class="table table-striped table-bordered first">
<thead>

            <th>Id</th>
            <th>Họ tên</th>
            <th>Hình ảnh</th>
            <th>Năm sinh</th>
            <th>Hiện là</th>
            <th>Trường</th>
            <th>Chuyên ngành</th>
            <th>Năm tốt nghiệp</th>
            <th>Nhận dạy</th>
            <th>Các môn</th>
            <th>Khu vực</th>
            <th>Thông tin khác</th>
            <th></th>
     
        <?php foreach ($giasu as $key=>$value ) {?>
        <tr id="id<?php echo $value['id'] ?>">
            
                <th><?php echo $value['id'] ?></th>
                <th><?php echo $value['fullname'] ?></th>
                <td ><img src="<?php echo base_url()?>public/image/<?php echo $value['image'] ?>" width="100px" max-height="100px" ></td>
                <th><?php echo $value['namsinh'] ?></th>
                <th><?php echo $value['hienla'] ?></th>
                <th><?php echo $value['truong'] ?></th>
                <th><?php echo $value['chuyennganh'] ?></th>
                <th><?php echo $value['namtotnghiep'] ?></th>
                <th><?php echo $value['nhanday'] ?></th>
                <th><?php echo $value['cacmon'] ?></th>
                <th><?php echo $value['khuvuc'] ?></th>
                <th><?php echo $value['thongtinkhac'] ?></th>
                <td><a href="#" data-id="<?php echo $value['id'] ?>" 
                  data-fullname="<?php echo $value['fullname'] ?>" 
                  data-image="<?php echo $value['image'] ?>"
                  data-namsinh="<?php echo $value['namsinh'] ?>" 
                  data-hienla="<?php echo $value['hienla'] ?>" 
                  data-truong="<?php echo $value['truong'] ?>" 
                  data-chuyennganh="<?php echo $value['chuyennganh'] ?>" 
                  data-namtotnghiep="<?php echo $value['namtotnghiep'] ?>" 
                  data-nhanday="<?php echo $value['nhanday'] ?>" 
                  data-cacmon="<?php echo $value['cacmon'] ?>"
                 data-khuvuc="<?php echo $value['khuvuc'] ?>" 
                 data-thongtinkhac="<?php echo $value['thongtinkhac'] ?>" onclick="sua(this)">Sửa</a> </td>
                 <td><a href="#" onclick="remove('<?php echo $value['id'] ?>')">Xóa</a> </td>
        </tr>
        <?php } ?>  
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
          url: '<?php echo base_url() ?>admin/giasu/delete_index',
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

        <form action="<?php echo base_url() ?>admin/giasu/insert" method="POST" enctype="multipart/form-data">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Thêm Lớp</h4>
          </div>
          <div class="modal-body">
           <br>
           <label> ID </label>
           <input type="text" name="id" class="form-control" >
           <label> Họ tên </label>
           <input type="text" name="fullname" class="form-control">
           <label> Hình ảnh </label>
           <input type="file" name="image" class="form-control"  > <br>
           
           <label> Năm sinh </label>
           <input type="text" name="namsinh" class="form-control">
           <label> Hiện là </label>
           <input type="text" name="hienla" class="form-control">
           <label> Trường</label>
           <input type="text" name="truong" class="form-control">
           <label> Chuyên ngành</label>
           <input type="text" name="chuyennganh" class="form-control">
           <label> Năm tốt nghiệp</label>
           <input type="text" name="namtotnghiep" class="form-control">
           <label> Nhận dạy</label>
           <input type="text" name="nhanday" class="form-control">
           <label> Môn dạy</label>
           <input type="text" name="cacmon" class="form-control">
           <label> Khu vực</label>
           <input type="text" name="khuvuc" class="form-control">
           <label> Thông tin khác</label>
           <input type="text" name="thongtinkhac" class="form-control">
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


<div id="myModal22" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
       <form action="<?php echo base_url() ?>admin/giasu/sua_giasu" method="POST" enctype="multipart/form-data">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
          <label> ID </label>
           <input type="text" name="id" class="form-control" id="id111" >
           <label> Họ tên </label>
           <input type="text" name="fullname" class="form-control" id="fullname1">
            <label> Hình ảnh </label>
           <input type="file" name="image" class="form-control"  > <br>
           <img src="" id="image33" width="100px" height="100px"> <br>
           <label> Năm sinh </label>
           <input type="text" name="namsinh" class="form-control" id="namsinh1">
           <label> Hiện là </label>
           <input type="text" name="hienla" class="form-control" id="hienla1">
           <label> Trường</label>
           <input type="text" name="truong" class="form-control" id="truong1">
           <label> Chuyên ngành</label>
           <input type="text" name="chuyennganh" class="form-control" id="chuyennganh1">
           <label> Năm tốt nghiệp</label>
           <input type="text" name="namtotnghiep" class="form-control" id="namtotnghiep1">
           <label> Nhận dạy</label>
           <input type="text" name="nhanday" class="form-control" id="nhanday1">
           <label> Môn dạy</label>
           <input type="text" name="cacmon" class="form-control" id="cacmon1">
           <label> Khu vực</label>
           <input type="text" name="khuvuc" class="form-control" id="khuvuc1">
           <label> Thông tin khác</label>
           <input type="text" name="thongtinkhac" class="form-control" id="thongtinkhac1"> 
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
    var image=$(obj).data("image");
    var namsinh = $(obj).data("namsinh");
    var hienla = $(obj).data("hienla");
    var truong = $(obj).data("truong");
    var chuyennganh = $(obj).data("chuyennganh");
    var namtotnghiep = $(obj).data("namtotnghiep");
    var nhanday = $(obj).data("nhanday");
    var cacmon = $(obj).data("cacmon");
    var khuvuc = $(obj).data("khuvuc");
    var thongtinkhac = $(obj).data("thongtinkhac");
   
    $("#id111").val(id);
    $("#fullname1").val(fullname);
    $("#image33").attr("src","<?php echo base_url()?>public/image/"+image);
    $("#namsinh1").val(namsinh);
    $("#hienla1").val(hienla);
    $("#truong1").val(truong);
    $("#chuyennganh1").val(chuyennganh);
    $("#namtotnghiep1").val(namtotnghiep);
    $("#nhanday1").val(nhanday);
    $("#cacmon1").val(cacmon);
    $("#khuvuc1").val(khuvuc);
    $("#thongtinkhac1").val(thongtinkhac);
    $('#myModal22').modal('show');
  }
</script>

