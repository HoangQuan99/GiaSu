$(document).ready(function(){
	$('#collapse-table').trigger('click');
});
jQuery(function($){

	//override dialog's title function to allow for HTML titles
	$.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
		_title: function(title) {
			var $title = this.options.title || '&nbsp;'
			if( ("title_html" in this.options) && this.options.title_html == true )
				title.html($title);
			else title.text($title);
		}
	}));

	$( "#id-btn-dialog2" ).on('click', function(e) {
		e.preventDefault();
	
		$( "#dialog-confirm" ).removeClass('hide').dialog({
			resizable: false,
			width: '320',
			modal: true,
			title: "<div class='widget-header'><h4 class='smaller'><i class='ace-icon fa fa-exclamation-triangle red'></i> Empty the recycle bin?</h4></div>",
			title_html: true,
			buttons: [
				{
					html: "<i class='ace-icon fa fa-trash-o bigger-110'></i>&nbsp; Delete all items",
					"class" : "btn btn-danger btn-minier",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
				,
				{
					html: "<i class='ace-icon fa fa-times bigger-110'></i>&nbsp; Cancel",
					"class" : "btn btn-minier",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
			]
		});
	});
});

function callRequest(route,data){
	return $.ajax({
      	url:route,
    	processData: false, 
    	contentType: false,
    	type:'post',
    	dataType:'json',
    	async: false,
    	cache: false,
    	data:data
	});
}

function imageChange(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(input).parent().prev('img')
                .attr('src', e.target.result)
                .width(37)
                .height(37);
        };
        // reader.readAsDataURL(input.files[0]);
        var ftype = input.files[0].type;
		switch(ftype)
		{
		    case 'image/png':
		    case 'image/gif':
		    case 'image/jpeg':
		    case 'image/pjpeg':
		        reader.readAsDataURL(input.files[0]);
		        break;
		    default:
		        alert('Tập tin này không được hỗ trợ! Bạn chỉ được chọn file ảnh.');
		        $(input).parent().prev('img')
                .attr('src', $(input).parent().prev('input').val())
                .width(37)
                .height(37);
		}
    }
} 

function strtoArray(string){
	var x = string.split(';'), arr = {};
	for (var i = 0; i < x.length; i++) {
	    var split = x[i].split(':');
	    arr[split[0].trim()] = split[1].trim();
	}
	return arr;
}  

function editUserAccount(dataObject,groupArray,statusArray,gridRowId){
	var modal = 
    '<div class="modal fade">\
        <div class="modal-dialog" style="width:600px;">\
            <div class="modal-content">\
                <div class="modal-header">\
                    <button type="button" class="close" data-dismiss="modal">&times;</button>\
                    <h4 class="blue">Thay đổi thông tin đăng nhập</h4>\
                </div>\
                <form class="form-horizontal">\
		            <div class="modal-body">\
						<div class="form-group has-info">\
							<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Tên đăng nhập</label>\
							\
							<div class="col-xs-12 col-sm-6">\
								<span class="block input-icon input-icon-right">\
									<input type="text" name="user[username]" id="inputInfo" class="width-100" value="'+dataObject.username+'">\
									<i class="ace-icon fa fa-info-circle"></i>\
								</span>\
							</div>\
							<div class="help-block col-xs-12 col-sm-reset inline"> ( VD: admin123 )</div>\
						</div>\
						<div class="form-group has-info">\
							<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Mật khẩu</label>\
							\
							<div class="col-xs-12 col-sm-6">\
								<span class="block input-icon input-icon-right">\
									<input type="password" name="user[password]" id="inputInfo" class="width-100" value="">\
									<i class="ace-icon fa fa-info-circle"></i>\
								</span>\
							</div>\
							<div class="help-block col-xs-12 col-sm-reset inline"> ( VD: 123456 )</div>\
						</div>\
						<div class="form-group has-info">\
							<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right"> Nhóm đăng nhập </label>\
							\
							<div class="col-xs-12 col-sm-6">\
								<span class="block input-icon input-icon-right">\
									<select class="width-100" name="user[group_id]">';
										for (var key in groupArray) {
										    dataObject.group_id == key?
											modal+='<option selected value="'+key+'">'+groupArray[key]+'</option>':
											modal+='<option value="'+key+'">'+groupArray[key]+'</option>'; 
										}
									modal+='</select>\
									<i class="ace-icon fa fa-info-circle"></i>\
								</span>\
							</div>\
							<div class="help-block col-xs-12 col-sm-reset inline"> ( Nhấp để chọn )</div>\
						</div>\
						<div class="form-group has-info">\
							<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right"> Trạng thái </label>\
							\
							<div class="col-xs-12 col-sm-6">\
								<span class="block input-icon input-icon-right">\
									<select class="width-100" name="user[status_id]">';
										for (var key in statusArray) {
											dataObject.status_id == key?
											modal+='<option selected value="'+key+'">'+statusArray[key]+'</option>':
											modal+='<option value="'+key+'">'+statusArray[key]+'</option>'; 
										}
									modal+='</select>\
									<i class="ace-icon fa fa-info-circle"></i>\
								</span>\
							</div>\
							<div class="help-block col-xs-12 col-sm-reset inline"> ( Nhấp để chọn )</div>\
						</div>\
		            </div>\
		            \
		            <div class="modal-footer center">\
		                <button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Xác nhận </button>\
		                <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Bỏ qua </button>\
		            </div>\
		        </form>\
            </div>\
        </div>\
    </div>';

    var modal = $(modal);
    modal.modal("show").on("hidden", function(){
        modal.remove();
    });

    var working = false;

    var form = modal.find('form:eq(0)');

    form.on('submit', function(){

    	var route = 'user/request/';
	    var frm = new FormData(form[0]);
	    frm.set('oper','edit-user-acc');
	    frm.set('id_user',dataObject.user_id);

        form.find('button').attr('disabled', 'disabled');
        form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");

        var deferred = new $.Deferred;
        working = true;
        deferred.done(function(data) {
            form.find('button').removeAttr('disabled');
            form.find('input[type=file]').ace_file_input('enable');
            form.find('.modal-body > :last-child').remove();
            working = false;
            data.success(function(){
            	var $self = $('#grid-table'), p = $self.jqGrid("getGridParam");
				p.datatype = "json";
				p.expand = gridRowId;
				$self.trigger("reloadGrid", { page: p.page, current: true }); 

				modal.modal("hide");
            });
            data.fail(function(){
            	alert('up! something fail!');
            });
        });

        setTimeout(function(){
			deferred.resolve(callRequest(route,frm));
        } , parseInt(Math.random() * 800 + 800));

        return false;
    });
}  

function editUserInfo(dataObject,gridRowId){
	var modal = 
    '<div class="modal fade">\
        <div class="modal-dialog" style="width:600px;">\
            <div class="modal-content">\
                <div class="modal-header">\
                    <button type="button" class="close" data-dismiss="modal">&times;</button>\
                    <h4 class="blue">Thay đổi thông tin cá nhân</h4>\
                </div>\
                \
                <form class="form-horizontal">\
		            <div class="modal-body">\
						<div class="form-group has-info">\
							<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Họ</label>\
							\
							<div class="col-xs-12 col-sm-6">\
								<span class="block input-icon input-icon-right">\
									<input type="text" name="user[first_name]" id="inputInfo" class="width-100" value="'+dataObject.first_name+'">\
									<i class="ace-icon fa fa-info-circle"></i>\
								</span>\
							</div>\
							<div class="help-block col-xs-12 col-sm-reset inline"> ( VD: Nguyễn, Trần,... )</div>\
						</div>\
						<div class="form-group has-info">\
							<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Họ đệm & Tên</label>\
							\
							<div class="col-xs-12 col-sm-6">\
								<span class="block input-icon input-icon-right">\
									<input type="text" name="user[last_name]" id="inputInfo" class="width-100" value="'+dataObject.last_name+'">\
									<i class="ace-icon fa fa-info-circle"></i>\
								</span>\
							</div>\
							<div class="help-block col-xs-12 col-sm-reset inline"> ( VD: Văn A, Thị B,... )</div>\
						</div>\
						<div class="form-group has-info">\
							<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Ngày sinh</label>\
							\
							<div class="col-xs-12 col-sm-6">\
								<span class="block input-icon input-icon-right">\
									<input type="text" name="user[birth_day]" id="inputInfo" class="width-100" value="'+dataObject.birth_day+'">\
									<i class="ace-icon fa fa-info-circle"></i>\
								</span>\
							</div>\
							<div class="help-block col-xs-12 col-sm-reset inline"> ( VD: Văn A, Thị B,... )</div>\
						</div>\
						<div class="form-group has-info">\
							<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Địa chỉ email</label>\
							\
							<div class="col-xs-12 col-sm-6">\
								<span class="block input-icon input-icon-right">\
									<input type="text" id="inputInfo" name="user[email]" class="width-100" value="'+dataObject.email+'">\
									<i class="ace-icon fa fa-info-circle"></i>\
								</span>\
							</div>\
							<div class="help-block col-xs-12 col-sm-reset inline"> ( VD: email@email.com )</div>\
						</div>\
						<div class="form-group has-info">\
							<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Số điện thoại</label>\
							\
							<div class="col-xs-12 col-sm-6">\
								<span class="block input-icon input-icon-right">\
									<input type="text" name="user[phone]" id="inputInfo" class="width-100" value="'+dataObject.phone+'">\
									<i class="ace-icon fa fa-info-circle"></i>\
								</span>\
							</div>\
							<div class="help-block col-xs-12 col-sm-reset inline"> ( VD: 0123 456 789 )</div>\
						</div>\
						<div class="form-group has-info">\
							<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Địa chỉ</label>\
							\
							<div class="col-xs-12 col-sm-6">\
								<span class="block input-icon input-icon-right">\
									<input type="text" name="user[address]" id="inputInfo" class="width-100" value="'+dataObject.address+'">\
									<i class="ace-icon fa fa-info-circle"></i>\
								</span>\
							</div>\
							<div class="help-block col-xs-12 col-sm-reset inline"> ( VD: Ho Chi Minh City )</div>\
						</div>\
		            </div>\
	            	\
		            <div class="modal-footer center">\
		                <button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Xác nhận </button>\
		                <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Bỏ qua </button>\
		            </div>\
	            </form>\
            </div>\
        </div>\
    </div>';

    var modal = $(modal);
    modal.modal("show").on("hidden", function(){
        modal.remove();
    });

    var working = false;

    var form = modal.find('form:eq(0)');

    form.on('submit', function(){

    	var route = 'user/request/';
	    var frm = new FormData(form[0]);
	    frm.set('oper','edit-user-info');
	    frm.set('id_user',dataObject.user_info);

        form.find('button').attr('disabled', 'disabled');
        form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");

        var deferred = new $.Deferred;
        working = true;
        deferred.done(function(data) {
            form.find('button').removeAttr('disabled');
            form.find('input[type=file]').ace_file_input('enable');
            form.find('.modal-body > :last-child').remove();
            working = false;
            data.success(function(){
            	var $self = $('#grid-table'), p = $self.jqGrid("getGridParam");
				p.datatype = "json";
				p.expand = gridRowId;
				$self.trigger("reloadGrid", { page: p.page, current: true }); 

				modal.modal("hide");
            });
            data.fail(function(){
            	alert('up! something fail!');
            });
        });

        setTimeout(function(){
			deferred.resolve(callRequest(route,frm));
        } , parseInt(Math.random() * 800 + 800));

        return false;
    });
}                  

function customSubGrid(dataObject,groupArray,gridRowId){
	var route = 'user/getPermission/';
	var response = [];
	
	$.ajax({
      	url:route,
      	type:'post',
      	data:{
        	id_group:dataObject.group_id,
      	},
      	success:function(data){  
          	response = data;
        }
    });

    console.log(response);

	var dom = '<div class="tabbable">\
		<ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">\
			<li class="active">\
				<a data-toggle="tab" href="#home4" aria-expanded="true">Thông tin</a>\
			</li>\
			<li class="">\
				<a data-toggle="tab" href="#profile4" aria-expanded="false">Phân quyền</a>\
			</li>\
			<li class="">\
				<a data-toggle="tab" href="#dropdown14" aria-expanded="false">Lịch sử</a>\
			</li>\
		</ul>\
		<div class="tab-content">\
			<div id="home4" class="tab-pane  active">\
				<div class="table-detail">\
					<div class="row">\
						<div class="col-xs-12 col-sm-2">\
							<div class="text-center">\
								<div>\
									<span class="profile-picture">\
										<img id="avatar" class="editable img-responsive editable-click editable-empty" alt="Alexs Avatar" src="http://hungminhits.com/debear-coffe/assets/images/avatars/profile-pic.jpg" style="display: block;">\
									</span>\
									<div class="space-4"></div>\
									<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">\
										<div class="inline position-relative">\
											<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">\
												<i class="ace-icon fa fa-circle light-green"></i>\
												&nbsp;\
												<span class="white">Alex M. Doe</span>\
											</a>\
											<ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">\
												<li class="dropdown-header"> Change Status </li>\
												<li>\
													<a href="#">\
														<i class="ace-icon fa fa-circle green"></i>\
														&nbsp;\
														<span class="green">Available</span>\
													</a>\
												</li>\
												<li>\
													<a href="#">\
														<i class="ace-icon fa fa-circle red"></i>\
														&nbsp;\
														<span class="red">Busy</span>\
													</a>\
												</li>\
												<li>\
													<a href="#">\
														<i class="ace-icon fa fa-circle grey"></i>\
														&nbsp;\
														<span class="grey">Invisible</span>\
													</a>\
												</li>\
											</ul>\
										</div>\
									</div>\
								</div>\
							</div>\
						</div>\
						<div class="col-xs-12 col-sm-5">\
							<div class="space visible-xs"></div>\
							<div class="widget-box transparent">\
								<div class="widget-header widget-header-small">\
									<h4 class="widget-title blue smaller">\
										<i class="ace-icon fa fa-rss orange"></i>\
										Thông tin đăng nhập\
									</h4>\
									<div class="widget-toolbar action-buttons">\
										<a href="#" id="edit-user-acc'+gridRowId+'" data-action="reload">\
											<i class="ace-icon fa fa-edit pink"></i>\
										</a>\
									</div>\
								</div>\
								<div class="widget-body">\
									<div class="profile-user-info profile-user-info-striped">\
										<div class="profile-info-row">\
											<div class="profile-info-name"> Tên đăng nhập </div>\
											<div class="profile-info-value">\
												<span>'+dataObject.username+'</span>\
											</div>\
										</div>\
										<div class="profile-info-row">\
											<div class="profile-info-name"> Mật khẩu </div>\
											<div class="profile-info-value">\
												<span>********</span>\
											</div>\
										</div>\
										<div class="profile-info-row">\
											<div class="profile-info-name"> Nhóm </div>\
											<div class="profile-info-value">\
												<span>'+dataObject.group+'</span>\
											</div>\
										</div>\
										<div class="profile-info-row">\
											<div class="profile-info-name"> Trạng thái </div>\
											<div class="profile-info-value">\
												<span>'+dataObject.status+'</span>\
											</div>\
										</div>\
										<div class="profile-info-row">\
											<div class="profile-info-name"> Ngày tạo </div>\
											<div class="profile-info-value">\
												<span>'+dataObject.created_at+'</span>\
											</div>\
										</div>\
									</div>\
								</div>\
							</div>	\
						</div>\
						<div class="col-xs-12 col-sm-5">\
							<div class="space visible-xs"></div>\
							<div class="widget-box transparent">\
								<div class="widget-header widget-header-small">\
									<h4 class="widget-title blue smaller">\
										<i class="ace-icon fa fa-rss orange"></i>\
										Thông tin cá nhân\
									</h4>\
									<div class="widget-toolbar action-buttons">\
										<a href="#" id="edit-user-info'+gridRowId+'" data-action="reload">\
											<i class="ace-icon fa fa-edit pink"></i>\
										</a>\
									</div>\
								</div>\
								<div class="widget-body">\
									<div class="profile-user-info profile-user-info-striped">\
										<div class="profile-info-row">\
											<div class="profile-info-name"> Họ & Tên </div>\
											<div class="profile-info-value">\
												<span>'+dataObject.first_name+' '+dataObject.last_name+'</span>\
											</div>\
										</div>\
										<div class="profile-info-row">\
											<div class="profile-info-name"> Ngày sinh </div>\
											<div class="profile-info-value">\
												<span>'+dataObject.birth_day+'</span>\
											</div>\
										</div>\
										<div class="profile-info-row">\
											<div class="profile-info-name"> Email </div>\
											<div class="profile-info-value">\
												<span>'+dataObject.email+'</span>\
											</div>\
										</div>\
										<div class="profile-info-row">\
											<div class="profile-info-name"> Số điện thoại </div>\
											<div class="profile-info-value">\
												<span>'+dataObject.phone+'</span>\
											</div>\
										</div>\
										<div class="profile-info-row">\
											<div class="profile-info-name"> Địa chỉ </div>\
											<div class="profile-info-value">\
												<span>'+dataObject.address+'</span>\
											</div>\
										</div>\
									</div>\
								</div>\
							</div>	\
						</div>\
					</div>\
				</div>\
			</div>\
			<div id="profile4" class="tab-pane">\
				<div class="widget-main">\
					<form class="form-inline">\
						<label class="inline">\
							<span class="lbl"> Vai trò </span>\
						</label>\
						<select id="group-switch" class="form-control input-small FormElement" style="width: 150px;">';
							for (var key in groupArray) {
							    dataObject.group_id == key?
								dom+='<option selected value="'+key+'">'+groupArray[key]+'</option>':
								dom+='<option value="'+key+'">'+groupArray[key]+'</option>'; 
							}
						dom+='</select>\
						<button type="button" class="btn btn-info btn-sm" title="Sửa vai trò">\
							<i class="ace-icon fa fa-edit bigger-110"></i>Sửa\
						</button>\
						<button type="button" class="btn btn-warning btn-sm" title="Copy vai trò">\
							<i class="ace-icon fa fa-copy bigger-110"></i>Copy\
						</button>\
						<button type="button" class="btn btn-success btn-sm" title="Thêm vai trò">\
							<i class="ace-icon fa fa-plus bigger-110"></i>Thêm\
						</button>\
					</form>\
				</div>\
				<div class="row">\
					<div class="col-xs-12 col-sm-3">\
						<div class="control-group">\
							<label class="control-label bolder blue">Banner</label>\
							<div class="checkbox">\
								<label>\
									<input name="form-field-checkbox" type="checkbox" class="ace ace-checkbox-2">\
									<span class="lbl"> Xem DS</span>\
								</label>\
							</div>\
							<div class="checkbox">\
								<label>\
									<input name="form-field-checkbox" type="checkbox" class="ace ace-checkbox-2">\
									<span class="lbl"> Thêm</span>\
								</label>\
							</div>\
							<div class="checkbox">\
								<label>\
									<input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox">\
									<span class="lbl"> Sửa </span>\
								</label>\
							</div>\
							<div class="checkbox">\
								<label>\
									<input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox">\
									<span class="lbl"> Xóa </span>\
								</label>\
							</div>\
						</div>\
					</div>\
					<div class="col-xs-12 col-sm-3">\
						<div class="control-group">\
							<label class="control-label bolder blue">Danh mục</label>\
							<div class="checkbox">\
								<label>\
									<input name="form-field-checkbox" type="checkbox" class="ace ace-checkbox-2">\
									<span class="lbl"> Xem DS</span>\
								</label>\
							</div>\
							<div class="checkbox">\
								<label>\
									<input name="form-field-checkbox" type="checkbox" class="ace ace-checkbox-2">\
									<span class="lbl"> Thêm</span>\
								</label>\
							</div>\
							<div class="checkbox">\
								<label>\
									<input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox">\
									<span class="lbl"> Sửa </span>\
								</label>\
							</div>\
							<div class="checkbox">\
								<label>\
									<input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox">\
									<span class="lbl"> Xóa </span>\
								</label>\
							</div>\
						</div>\
					</div>\
					<div class="col-xs-12 col-sm-3">\
						<div class="control-group">\
							<label class="control-label bolder blue">Sản phẩm</label>\
							<div class="checkbox">\
								<label>\
									<input name="form-field-checkbox" type="checkbox" class="ace ace-checkbox-2">\
									<span class="lbl"> Xem DS</span>\
								</label>\
							</div>\
							<div class="checkbox">\
								<label>\
									<input name="form-field-checkbox" type="checkbox" class="ace ace-checkbox-2">\
									<span class="lbl"> Thêm</span>\
								</label>\
							</div>\
							<div class="checkbox">\
								<label>\
									<input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox">\
									<span class="lbl"> Sửa </span>\
								</label>\
							</div>\
							<div class="checkbox">\
								<label>\
									<input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox">\
									<span class="lbl"> Xóa </span>\
								</label>\
							</div>\
						</div>\
					</div>\
					<div class="col-xs-12 col-sm-3">\
						<div class="control-group">\
							<label class="control-label bolder blue">Đặt hàng</label>\
							<div class="checkbox">\
								<label>\
									<input name="form-field-checkbox" type="checkbox" class="ace ace-checkbox-2">\
									<span class="lbl"> Xem DS</span>\
								</label>\
							</div>\
							<div class="checkbox">\
								<label>\
									<input name="form-field-checkbox" type="checkbox" class="ace ace-checkbox-2">\
									<span class="lbl"> Thêm</span>\
								</label>\
							</div>\
							<div class="checkbox">\
								<label>\
									<input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox">\
									<span class="lbl"> Sửa </span>\
								</label>\
							</div>\
							<div class="checkbox">\
								<label>\
									<input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox">\
									<span class="lbl"> Xóa </span>\
								</label>\
							</div>\
						</div>\
					</div>\
				</div>\
				<div class="form-actions center">\
					<button type="button" class="btn btn-sm btn-success">\
						Cập nhật\
						<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>\
					</button>\
					<button type="button" class="btn btn-sm btn-danger">\
						Bỏ qua\
						<i class="ace-icon fa fa-ban icon-on-right bigger-110"></i>\
					</button>\
				</div>\
			</div>\
			<div id="dropdown14" class="tab-pane">\
				<div class="timeline-container timeline-style2">\
					<span class="timeline-label">\
						<b>Today</b>\
					</span>\
					\
					<div class="timeline-items">\
						<div class="timeline-item clearfix">\
							<div class="timeline-info">\
								<span class="timeline-date">11:15 pm</span>\
								\
								<i class="timeline-indicator btn btn-info no-hover"></i>\
							</div>\
							\
							<div class="widget-box transparent">\
								<div class="widget-body">\
									<div class="widget-main no-padding">\
										<span class="bigger-110">\
											<a href="#" class="purple bolder">Susan</a>\
											reviewed a product\
										</span>\
										\
										<br>\
										<i class="ace-icon fa fa-hand-o-right grey bigger-125"></i>\
										<a href="#">Click to read …</a>\
									</div>\
								</div>\
							</div>\
						</div>\
						\
						<div class="timeline-item clearfix">\
							<div class="timeline-info">\
								<span class="timeline-date">12:30 pm</span>\
								\
								<i class="timeline-indicator btn btn-info no-hover"></i>\
							</div>\
							\
							<div class="widget-box transparent">\
								<div class="widget-body">\
									<div class="widget-main no-padding">\
										Going to\
										<span class="green bolder">veg cafe</span>\
										for lunch\
									</div>\
								</div>\
							</div>\
						</div>\
						<div class="timeline-item clearfix">\
							<div class="timeline-info">\
								<span class="timeline-date">11:15 pm</span>\
								<i class="timeline-indicator btn btn-info no-hover"></i>\
							</div>\
							<div class="widget-box transparent">\
								<div class="widget-body">\
									<div class="widget-main no-padding">\
										Designed a new logo for our website. Would appreciate feedback.\
										<a href="#">\
											Click to see\
											<i class="ace-icon fa fa-search-plus blue bigger-110"></i>\
										</a>\
										<div class="space-2"></div>\
										<div class="action-buttons">\
											<a href="#">\
												<i class="ace-icon fa fa-heart red bigger-125"></i>\
											</a>\
											<a href="#">\
												<i class="ace-icon fa fa-facebook blue bigger-125"></i>\
											</a>\
											<a href="#">\
												<i class="ace-icon fa fa-reply light-green bigger-130"></i>\
											</a>\
										</div>\
									</div>\
								</div>\
							</div>\
						</div>\
						<div class="timeline-item clearfix">\
							<div class="timeline-info">\
								<span class="timeline-date">9:00 am</span>\
								<i class="timeline-indicator btn btn-info no-hover"></i>\
							</div>\
							<div class="widget-box transparent">\
								<div class="widget-body">\
									<div class="widget-main no-padding"> Took the final exam. Phew! </div>\
								</div>\
							</div>\
						</div>\
					</div><!-- /.timeline-items -->\
				</div>\
			</div>\
		</div>\
	</div>\	';
	return dom;
}

function editCustomAccount(dataObject,groupArray,statusArray,gridRowId){
	var modal = 
    '<div class="modal fade">\
        <div class="modal-dialog" style="width:600px;">\
            <div class="modal-content">\
                <div class="modal-header">\
                    <button type="button" class="close" data-dismiss="modal">&times;</button>\
                    <h4 class="blue">Thay đổi thông tin đăng nhập</h4>\
                </div>\
                <form class="form-horizontal">\
		            <div class="modal-body">\
						<div class="form-group has-info">\
							<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Tên đăng nhập</label>\
							\
							<div class="col-xs-12 col-sm-6">\
								<span class="block input-icon input-icon-right">\
									<input type="text" name="user[username]" id="inputInfo" class="width-100" value="'+dataObject.username+'">\
									<i class="ace-icon fa fa-info-circle"></i>\
								</span>\
							</div>\
							<div class="help-block col-xs-12 col-sm-reset inline"> ( VD: admin123 )</div>\
						</div>\
						<div class="form-group has-info">\
							<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Mật khẩu</label>\
							\
							<div class="col-xs-12 col-sm-6">\
								<span class="block input-icon input-icon-right">\
									<input type="password" name="user[password]" id="inputInfo" class="width-100" value="">\
									<i class="ace-icon fa fa-info-circle"></i>\
								</span>\
							</div>\
							<div class="help-block col-xs-12 col-sm-reset inline"> ( VD: 123456 )</div>\
						</div>\
						<div class="form-group has-info">\
							<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right"> Nhóm đăng nhập </label>\
							\
							<div class="col-xs-12 col-sm-6">\
								<span class="block input-icon input-icon-right">\
									<select class="width-100" name="user[group_id]">';
										for (var key in groupArray) {
										    dataObject.group_id == key?
											modal+='<option selected value="'+key+'">'+groupArray[key]+'</option>':
											modal+='<option value="'+key+'">'+groupArray[key]+'</option>'; 
										}
									modal+='</select>\
									<i class="ace-icon fa fa-info-circle"></i>\
								</span>\
							</div>\
							<div class="help-block col-xs-12 col-sm-reset inline"> ( Nhấp để chọn )</div>\
						</div>\
						<div class="form-group has-info">\
							<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right"> Trạng thái </label>\
							\
							<div class="col-xs-12 col-sm-6">\
								<span class="block input-icon input-icon-right">\
									<select class="width-100" name="user[status_id]">';
										for (var key in statusArray) {
											dataObject.status_id == key?
											modal+='<option selected value="'+key+'">'+statusArray[key]+'</option>':
											modal+='<option value="'+key+'">'+statusArray[key]+'</option>'; 
										}
									modal+='</select>\
									<i class="ace-icon fa fa-info-circle"></i>\
								</span>\
							</div>\
							<div class="help-block col-xs-12 col-sm-reset inline"> ( Nhấp để chọn )</div>\
						</div>\
		            </div>\
		            \
		            <div class="modal-footer center">\
		                <button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Xác nhận </button>\
		                <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Bỏ qua </button>\
		            </div>\
		        </form>\
            </div>\
        </div>\
    </div>';

    var modal = $(modal);
    modal.modal("show").on("hidden", function(){
        modal.remove();
    });

    var working = false;

    var form = modal.find('form:eq(0)');

    form.on('submit', function(){

    	var route = 'customer/request/';
	    var frm = new FormData(form[0]);
	    frm.set('oper','edit-user-acc');
	    frm.set('id_user',dataObject.user_id);

        form.find('button').attr('disabled', 'disabled');
        form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");

        var deferred = new $.Deferred;
        working = true;
        deferred.done(function(data) {
            form.find('button').removeAttr('disabled');
            form.find('input[type=file]').ace_file_input('enable');
            form.find('.modal-body > :last-child').remove();
            working = false;
            data.success(function(){
            	var $self = $('#grid-table'), p = $self.jqGrid("getGridParam");
				p.datatype = "json";
				p.expand = gridRowId;
				$self.trigger("reloadGrid", { page: p.page, current: true }); 

				modal.modal("hide");
            });
            data.fail(function(){
            	alert('up! something fail!');
            });
        });

        setTimeout(function(){
			deferred.resolve(callRequest(route,frm));
        } , parseInt(Math.random() * 800 + 800));

        return false;
    });
}  

function editCustomInfo(dataObject,gridRowId){
	var modal = 
    '<div class="modal fade">\
        <div class="modal-dialog" style="width:600px;">\
            <div class="modal-content">\
                <div class="modal-header">\
                    <button type="button" class="close" data-dismiss="modal">&times;</button>\
                    <h4 class="blue">Thay đổi thông tin cá nhân</h4>\
                </div>\
                \
                <form class="form-horizontal">\
		            <div class="modal-body">\
						<div class="form-group has-info">\
							<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Họ</label>\
							\
							<div class="col-xs-12 col-sm-6">\
								<span class="block input-icon input-icon-right">\
									<input type="text" name="user[first_name]" id="inputInfo" class="width-100" value="'+dataObject.first_name+'">\
									<i class="ace-icon fa fa-info-circle"></i>\
								</span>\
							</div>\
							<div class="help-block col-xs-12 col-sm-reset inline"> ( VD: Nguyễn, Trần,... )</div>\
						</div>\
						<div class="form-group has-info">\
							<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Họ đệm & Tên</label>\
							\
							<div class="col-xs-12 col-sm-6">\
								<span class="block input-icon input-icon-right">\
									<input type="text" name="user[last_name]" id="inputInfo" class="width-100" value="'+dataObject.last_name+'">\
									<i class="ace-icon fa fa-info-circle"></i>\
								</span>\
							</div>\
							<div class="help-block col-xs-12 col-sm-reset inline"> ( VD: Văn A, Thị B,... )</div>\
						</div>\
						<div class="form-group has-info">\
							<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Ngày sinh</label>\
							\
							<div class="col-xs-12 col-sm-6">\
								<span class="block input-icon input-icon-right">\
									<input type="text" name="user[birth_day]" id="inputInfo" class="width-100" value="'+dataObject.birth_day+'">\
									<i class="ace-icon fa fa-info-circle"></i>\
								</span>\
							</div>\
							<div class="help-block col-xs-12 col-sm-reset inline"> ( VD: Văn A, Thị B,... )</div>\
						</div>\
						<div class="form-group has-info">\
							<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Địa chỉ email</label>\
							\
							<div class="col-xs-12 col-sm-6">\
								<span class="block input-icon input-icon-right">\
									<input type="text" id="inputInfo" name="user[email]" class="width-100" value="'+dataObject.email+'">\
									<i class="ace-icon fa fa-info-circle"></i>\
								</span>\
							</div>\
							<div class="help-block col-xs-12 col-sm-reset inline"> ( VD: email@email.com )</div>\
						</div>\
						<div class="form-group has-info">\
							<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Số điện thoại</label>\
							\
							<div class="col-xs-12 col-sm-6">\
								<span class="block input-icon input-icon-right">\
									<input type="text" name="user[phone]" id="inputInfo" class="width-100" value="'+dataObject.phone+'">\
									<i class="ace-icon fa fa-info-circle"></i>\
								</span>\
							</div>\
							<div class="help-block col-xs-12 col-sm-reset inline"> ( VD: 0123 456 789 )</div>\
						</div>\
						<div class="form-group has-info">\
							<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Địa chỉ</label>\
							\
							<div class="col-xs-12 col-sm-6">\
								<span class="block input-icon input-icon-right">\
									<input type="text" name="user[address]" id="inputInfo" class="width-100" value="'+dataObject.address+'">\
									<i class="ace-icon fa fa-info-circle"></i>\
								</span>\
							</div>\
							<div class="help-block col-xs-12 col-sm-reset inline"> ( VD: Ho Chi Minh City )</div>\
						</div>\
		            </div>\
	            	\
		            <div class="modal-footer center">\
		                <button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Xác nhận </button>\
		                <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Bỏ qua </button>\
		            </div>\
	            </form>\
            </div>\
        </div>\
    </div>';

    var modal = $(modal);
    modal.modal("show").on("hidden", function(){
        modal.remove();
    });

    var working = false;

    var form = modal.find('form:eq(0)');

    form.on('submit', function(){

    	var route = 'customer/request/';
	    var frm = new FormData(form[0]);
	    frm.set('oper','edit-user-info');
	    frm.set('id_user',dataObject.user_info);

        form.find('button').attr('disabled', 'disabled');
        form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");

        var deferred = new $.Deferred;
        working = true;
        deferred.done(function(data) {
            form.find('button').removeAttr('disabled');
            form.find('input[type=file]').ace_file_input('enable');
            form.find('.modal-body > :last-child').remove();
            working = false;
            data.success(function(){
            	var $self = $('#grid-table'), p = $self.jqGrid("getGridParam");
				p.datatype = "json";
				p.expand = gridRowId;
				$self.trigger("reloadGrid", { page: p.page, current: true }); 

				modal.modal("hide");
            });
            data.fail(function(){
            	alert('up! something fail!');
            });
        });

        setTimeout(function(){
			deferred.resolve(callRequest(route,frm));
        } , parseInt(Math.random() * 800 + 800));

        return false;
    });
}  

function customSubGrid_customer(dataObject,groupArray,gridRowId){
	var route = 'user/getPermission/';
	var response = [];
	
	$.ajax({
      	url:route,
      	type:'post',
      	data:{
        	id_group:dataObject.group_id,
      	},
      	success:function(data){  
          	response = data;
        }
    });

    console.log(response);

	var dom = 
	'<div class="table-detail">\
					<div class="row">\
						<div class="col-xs-12 col-sm-2">\
							<div class="text-center">\
								<div>\
									<span class="profile-picture">\
										<img id="avatar" class="editable img-responsive editable-click editable-empty" alt="Alexs Avatar" src="http://hungminhits.com/debear-coffe/assets/images/avatars/profile-pic.jpg" style="display: block;">\
									</span>\
									<div class="space-4"></div>\
									<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">\
										<div class="inline position-relative">\
											<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">\
												<i class="ace-icon fa fa-circle light-green"></i>\
												&nbsp;\
												<span class="white">Alex M. Doe</span>\
											</a>\
											<ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">\
												<li class="dropdown-header"> Change Status </li>\
												<li>\
													<a href="#">\
														<i class="ace-icon fa fa-circle green"></i>\
														&nbsp;\
														<span class="green">Available</span>\
													</a>\
												</li>\
												<li>\
													<a href="#">\
														<i class="ace-icon fa fa-circle red"></i>\
														&nbsp;\
														<span class="red">Busy</span>\
													</a>\
												</li>\
												<li>\
													<a href="#">\
														<i class="ace-icon fa fa-circle grey"></i>\
														&nbsp;\
														<span class="grey">Invisible</span>\
													</a>\
												</li>\
											</ul>\
										</div>\
									</div>\
								</div>\
							</div>\
						</div>\
						<div class="col-xs-12 col-sm-5">\
							<div class="space visible-xs"></div>\
							<div class="widget-box transparent">\
								<div class="widget-header widget-header-small">\
									<h4 class="widget-title blue smaller">\
										<i class="ace-icon fa fa-rss orange"></i>\
										Thông tin đăng nhập\
									</h4>\
									<div class="widget-toolbar action-buttons">\
										<a href="#" id="edit-user-acc'+gridRowId+'" data-action="reload">\
											<i class="ace-icon fa fa-edit pink"></i>\
										</a>\
									</div>\
								</div>\
								<div class="widget-body">\
									<div class="profile-user-info profile-user-info-striped">\
										<div class="profile-info-row">\
											<div class="profile-info-name"> Tên đăng nhập </div>\
											<div class="profile-info-value">\
												<span>'+dataObject.username+'</span>\
											</div>\
										</div>\
										<div class="profile-info-row">\
											<div class="profile-info-name"> Mật khẩu </div>\
											<div class="profile-info-value">\
												<span>********</span>\
											</div>\
										</div>\
										<div class="profile-info-row">\
											<div class="profile-info-name"> Nhóm </div>\
											<div class="profile-info-value">\
												<span>'+dataObject.group+'</span>\
											</div>\
										</div>\
										<div class="profile-info-row">\
											<div class="profile-info-name"> Trạng thái </div>\
											<div class="profile-info-value">\
												<span>'+dataObject.status+'</span>\
											</div>\
										</div>\
										<div class="profile-info-row">\
											<div class="profile-info-name"> Ngày tạo </div>\
											<div class="profile-info-value">\
												<span>'+dataObject.created_at+'</span>\
											</div>\
										</div>\
									</div>\
								</div>\
							</div>	\
						</div>\
						<div class="col-xs-12 col-sm-5">\
							<div class="space visible-xs"></div>\
							<div class="widget-box transparent">\
								<div class="widget-header widget-header-small">\
									<h4 class="widget-title blue smaller">\
										<i class="ace-icon fa fa-rss orange"></i>\
										Thông tin cá nhân\
									</h4>\
									<div class="widget-toolbar action-buttons">\
										<a href="#" id="edit-user-info'+gridRowId+'" data-action="reload">\
											<i class="ace-icon fa fa-edit pink"></i>\
										</a>\
									</div>\
								</div>\
								<div class="widget-body">\
									<div class="profile-user-info profile-user-info-striped">\
										<div class="profile-info-row">\
											<div class="profile-info-name"> Họ & Tên </div>\
											<div class="profile-info-value">\
												<span>'+dataObject.first_name+' '+dataObject.last_name+'</span>\
											</div>\
										</div>\
										<div class="profile-info-row">\
											<div class="profile-info-name"> Ngày sinh </div>\
											<div class="profile-info-value">\
												<span>'+dataObject.birth_day+'</span>\
											</div>\
										</div>\
										<div class="profile-info-row">\
											<div class="profile-info-name"> Email </div>\
											<div class="profile-info-value">\
												<span>'+dataObject.email+'</span>\
											</div>\
										</div>\
										<div class="profile-info-row">\
											<div class="profile-info-name"> Số điện thoại </div>\
											<div class="profile-info-value">\
												<span>'+dataObject.phone+'</span>\
											</div>\
										</div>\
										<div class="profile-info-row">\
											<div class="profile-info-name"> Địa chỉ </div>\
											<div class="profile-info-value">\
												<span>'+dataObject.address+'</span>\
											</div>\
										</div>\
									</div>\
								</div>\
							</div>	\
						</div>\
					</div>\
				</div>';
	return dom;
}





// ----------------------------------

function form_submit(f,action,route){
	form = $(f);
	var frm = new FormData(form[0]);
    frm.set('action',action);

    form.find('button').attr('disabled', 'disabled');
    form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");

    var deferred = new $.Deferred;
    working = true;
    deferred.done(function(data) {
        form.find('button').removeAttr('disabled');
        form.find('input[type=file]').ace_file_input('enable');
        form.find('.modal-body > :last-child').remove();
        working = false;
        data.success(function(){
			// modal.modal("hide");
			var r = confirm("Thêm mới thành công! Reload lại trang?");
            if (r == true) {
                window.location.reload();
            }
        });
        data.fail(function(){
        	alert('up! something fail!');
        });
    });

    setTimeout(function(){
		deferred.resolve(callRequest(route,frm));
    } , parseInt(Math.random() * 800 + 800));

    return false;
}



function create_model(data){
	var modal = 
    '<div class="modal fade">\
        <div class="modal-dialog" style="width:600px;">\
            <div class="modal-content">\
                <div class="modal-header">\
                    <button type="button" class="close" data-dismiss="modal">&times;</button>\
                    <h4 class="blue">Cập nhật thông tin</h4>\
                </div>\
                <form class="form-horizontal">\
		            <div class="modal-body">';	
	if (data.length>0) {
		for (var i = 0; i < data.length; i++) {
			switch(data[i]['type']){
				case'text':{
					modal+=
						'<div class="form-group has-info">\
							<label for="'+data[i]['attr']+'" class="col-xs-12 col-sm-3 control-label no-padding-right">'+data[i]['name']+'</label>\
							\
							<div class="col-xs-12 col-sm-6">\
								<div class="block input-icon input-icon-right">\
									<input type="text" name="'+data[i]['attr']+'" id="'+data[i]['attr']+'" class="width-100" value="'+data[i]['value']+'">\
									<i class="ace-icon fa fa-info-circle"></i>\
								</div>\
							</div>\
							<div class="help-block col-xs-12 col-sm-reset inline"> ( Bắt buộc )</div>\
						</div>';
					break;
				}
				case'image':{
					modal+=
						'<div class="form-group has-info">\
							<label for="'+data[i]['attr']+'" class="col-xs-12 col-sm-3 control-label no-padding-right">'+data[i]['name']+'</label>\
							\
							<div class="col-xs-12 col-sm-6">\
								<div class="block input-icon input-icon-right">\
									<input type="file" id="'+data[i]['attr']+'" name="'+data[i]['attr']+'" class="width-100" src="'+data[i]['value']+'">\
								</div>\
							</div>\
							<div class="help-block col-xs-12 col-sm-reset inline"> ( Không bắt buộc )</div>\
						</div>';
					break;
				}
				case'select':{
					modal+=
						'<div class="form-group has-info">\
							<label for="'+data[i]['attr']+'" class="col-xs-12 col-sm-3 control-label no-padding-right">'+data[i]['name']+'</label>\
							\
							<div class="col-xs-12 col-sm-6">\
								<div class="block input-icon input-icon-right">\
									<select class="width-100" name="user[status]">\
										<option selected="" value="user001">Đang hoạt động</option>\
										<option value="user002">Ngừng hoạt động</option>\
									</select>\
									<i class="ace-icon fa fa-info-circle"></i>\
								</div>\
							</div>\
							<div class="help-block col-xs-12 col-sm-reset inline"> ( Nhấp để chọn )</div>\
						</div>';
					break;
				}
				default: break;
			}
		}
	}

	modal+='</div>\
		            \
		            <div class="modal-footer center">\
		                <button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Xác nhận </button>\
		                <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Bỏ qua </button>\
		            </div>\
		        </form>\
            </div>\
        </div>\
    </div>';
    return modal;
}
