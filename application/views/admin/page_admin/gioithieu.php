
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
            <th>Name</th>
            <th>Content</th>
            <th></th>
        
    </thead>  
        
<tbody>
        <?php foreach ($gioi_thieu as  $key=>$value) {?>
        <tr id="id<?php echo $value['id'] ?>">
            
                <td ><?php echo $value['id'] ?></td>
                <td ><?php echo $value['name'] ?></td>
                <td><?php echo $value['mota'] ?></td>
                

                   <td><a href="#" 
                  data-id="<?php echo $value['id'] ?>" 
                  data-name='<?php echo $value['name'] ?>' 
                 data-mota='<?php echo $value['mota'] ?>' onclick='sua(this)'>Sửa</a> </td>
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
          url: '<?php echo base_url() ?>admin/gioithieu/delete_index',
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

<!-- <script type="text/javascript" src="//code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="<?=base_url()?>assets/js/jquery.dataTables.min.js"></script>
  <script src="<?=base_url()?>assets/js/jquery.dataTables.bootstrap.min.js"></script> -->


<!-- <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <form action="<?php echo base_url()?>admin/gioithieu/insert" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Thêm Giới Thiệu</h4>
        </div>
        <div class="modal-body">
          
         
           <label> Name </label>
           <input type="text" name="name" class="form-control">
          <label> Mô tả </label>
          <textarea name="ckeditor" id="ckeditor"></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>

    </div>
  </div>
</div> -->

 <div id="myModal222" class="modal fade" role="dialog">
  <div class="modal-dialog">

    
    <div class="modal-content">
       <form action="<?php echo base_url() ?>admin/gioithieu/sua_gioithieu" method="POST" enctype="multipart/form-data">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sửa</h4>
      </div>
      <div class="modal-body">
        <label> ID </label>
           <input type="text" name="id" class="form-control" id="idd" >
        <label> Name </label>
           <input type="text" name="name" class="form-control" id="name1">
          <label> Mô tả </label>
          <textarea name="ckeditor" id="ckeditor1"></textarea>
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
    var name = $(obj).data("name");
    var data = $(obj).data("mota");
    // console.log(data);
    $("#idd").val(id);
    $("#name1").val(name);
    CKEDITOR.instances['ckeditor1'].setData(data);
    $('#myModal222').modal('show');
  }
</script>
 <script src="//cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
<script type="text/javascript">
  // CKEDITOR.replace('ckeditor');
  CKEDITOR.replace('ckeditor',{
            filebrowserBrowseUrl : '<?=base_url()?>ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl : '<?=base_url()?>ckfinder/ckfinder.html?type=Images',
            filebrowserFlashBrowseUrl : '<?=base_url()?>ckfinder/ckfinder.html?type=Flash',
            filebrowserUploadUrl : '<?=base_url()?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl : '<?=base_url()?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl : '<?=base_url()?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
            });
  $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script> 



