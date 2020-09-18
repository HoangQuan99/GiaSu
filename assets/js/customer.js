$("#nav-search-input").keypress(function (e) {
    var key = e.charCode || e.keyCode || 0;
    if (key === $.ui.keyCode.ENTER) { // 13
        callGridSearch();
        return false;
    }
});
function callGridSearch()
{
    var input = $("#nav-search-input").val();
    //  Prepare to pass a new search filter to our jqGrid
    var f = { groupOp: "AND", rules: [] };

    //  Remember to change the following line to reflect the jqGrid column you want to search for your string in
    //  In this example, I'm searching through the UserName column.

    f.rules.push({ field: "UserName", op: "cn", data: input });

    var grid = $('#grid-table');
    grid[0].p.search = f.rules.length > 0;
    $.extend(grid[0].p.postData, { filters: JSON.stringify(f) });
    grid.trigger("reloadGrid", [{ page: 1 }]);
    
    return false;
}
$(document).ready(function(){
    if ($("#nav-search-input").val()!='') {
        var input = $("#nav-search-input").val();
        //  Prepare to pass a new search filter to our jqGrid
        var f = { groupOp: "AND", rules: [] };

        //  Remember to change the following line to reflect the jqGrid column you want to search for your string in
        //  In this example, I'm searching through the UserName column.

        f.rules.push({ field: "UserName", op: "cn", data: input });

        var grid = $('#grid-table');
        grid[0].p.search = f.rules.length > 0;
        $.extend(grid[0].p.postData, { filters: JSON.stringify(f) });
    }
});
$(document).on("click","#avatar",function(e){
    var modal = 
    '<div class="modal fade">\
        <div class="modal-dialog" style="width:600px;">\
            <div class="modal-content">\
                <div class="modal-header">\
                    <button type="button" class="close" data-dismiss="modal">&times;</button>\
                    <h4 class="blue">Thay đổi hình đại diện</h4>\
                </div>\
                \
                <form class="no-margin">\
                    <div class="modal-body">\
                        <div class="space-4"></div>\
                        <div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
                    </div>\
                    \
                    <div class="modal-footer center">\
                        <button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Submit</button>\
                        <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
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
    var file = form.find('input[type=file]').eq(0);
    file.ace_file_input({
        style:'well',
        btn_choose:'Nhấn vào để chọn hình ảnh',
        btn_change:null,
        no_icon:'ace-icon fa fa-picture-o',
        thumbnail:'small',
        before_remove: function() {
                            //don't remove/reset files while being uploaded
                            return !working;
                        },
                        allowExt: ['jpg', 'jpeg', 'png', 'gif'],
                        allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
                    });

    form.on('submit', function(){
        if(!file.data('ace_input_files')) return false;

        file.ace_file_input('disable');
        form.find('button').attr('disabled', 'disabled');
        form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");

        var deferred = new $.Deferred;
        working = true;
        deferred.done(function() {
            form.find('button').removeAttr('disabled');
            form.find('input[type=file]').ace_file_input('enable');
            form.find('.modal-body > :last-child').remove();

            modal.modal("hide");
            
            var thumb = file.next().find('img').data('thumb');
            if(thumb) $('#avatar2').get(0).src = thumb;
            
            working = false;
        });


        setTimeout(function(){
            deferred.resolve();
        } , parseInt(Math.random() * 800 + 800));

        return false;
    });
});