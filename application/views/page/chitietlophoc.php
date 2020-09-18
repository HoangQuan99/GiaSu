<div class="pageBody clearfix">
            <div class="pageBodyInner clearfix">
                <div class="col_l">
    <div class="box">
        <h3 class="bh_b">PHỤ HUYNH</h3>
        <ul class="l_list1">
            <li><a href="https://giasudatviet.com/dang-ky-tim-gia-su.html">Đăng ký tìm gia sư</a></li>
                            <li><a href="https://giasudatviet.com/hoc-phi-gia-su-tham-khao-cho-phu-huynh-va-hoc-vien.html" title="Học phí tham khảo">Học phí tham khảo</a></li>
                            <li><a href="https://giasudatviet.com/phu-huynh-can-biet.html" title="">Phụ huynh cần biết</a></li>
                            <li><a href="https://giasudatviet.com/dich-vu-gia-su.html" title="">Dịch vụ gia sư</a></li>
                        <li><a href="https://giasudatviet.com/gia-su-tieu-bieu.html">Gia sư tiêu biểu</a></li>
        </ul>
    </div>

    <div class="box">
        <h3 class="bh_y">GIA SƯ</h3>
        <ul class="l_list2">
            <li><a href="https://giasudatviet.com/dang-ky-lam-gia-su.html">Đăng ký làm gia sư</a></li>
                            <li><a href="https://giasudatviet.com/huong-dan-nhan-lop.html" title="">Hướng dẫn nhận lớp</a></li>
                            <li><a href="https://giasudatviet.com/lop-day-can-gia-su.html" title="">Lớp dạy cần gia sư</a></li>
                            <li><a href="https://giasudatviet.com/tai-khoan-ngan-hang.html" title="">Tài khoản ngân hàng</a></li>
                            <li><a href="https://giasudatviet.com/tuyen-dung.html" title="">Tuyển dụng</a></li>
                    </ul>
    </div>

    <div class="box">
        <h3 class="bh_g">HỖ TRỢ </h3>
        <ul class="l_list3">
            <li>Phụ Huynh - Học Sinh</li>
            <li>
                0973.412.721<br><br>(028) 62.736.212
            </li>
            <li>Giáo Viên - Sinh Viên</li>
            <li>
                0373.580.580<br><br>0932.609.268
            </li>
        </ul>
    </div>
    <div class="box">
        <h3 class="bh_g2">Gia Sư Quận</h3>
        <ul class="l_list4">
                            <li><a href="https://giasudatviet.com/gia-su-quan-1.html" title="gia su quan 1">gia su quan 1</a></li>
                    </ul>                        
        <p class="more_g3"><a href="https://giasudatviet.com/tin-tuc.html" title="xem nhiều hơn">Xem nhiều hơn</a></p>
    </div>

    <div class="box clearfix">
        <h3 class="bh_b">BẢN ĐỒ</h3>
        <div class="map">
           <!-- <a target="_blank" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.612670569142!2d103.97710151443239!3d22.481185141986646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x36cd138a031701f7%3A0x3237d4d24142fe0f!2zMTgyIEzDqiDEkOG6oWkgSMOgbmgsIEtpbSBUw6JuLCB0cC4gTMOgbyBDYWksIEzDoG8gQ2FpLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1469631862336" title="xem bản đồ"><img width="140" src="https://giasudatviet.com/assets/images/bando.jpg" alt=""></a> -->
           <a href="#" title="xem bản đồ"><img width="140" src="https://giasudatviet.com/assets/images/bando.jpg" alt=""></a>
        </div>
    </div>

    <div class="fb">
        <a href="https://www.facebook.com/trungtamgiasudatviet" target="_blank" title="xem facebook trung tâm gia sư đất việt"><img src="https://giasudatviet.com/assets/images/fb.png" alt=""></a>
    </div>


</div>                <link rel="stylesheet" href="https://giasudatviet.com/assets/lib/jquery-ui.css">
<div class="col_c">
    <div class="newClass">
        <h2 class="sh_b3">THÔNG TIN CHI TIẾT</h2>
        <h3 class="ldcgs_sh"></h3>
        <div class="ldcgs_info clearfix">
            <div class="ldcgs_info_l">
                <dl class="clearfix">
                   <?php if(isset($chitietlophoc)){
                    foreach ($chitietlophoc as $key => $value) {
                    ?>
                    <dt>Mã lớp:</dt>
                    <dd><span><?php echo $value['id'] ?></span> - <span style="color: #fff" class="label label-round label-success">Lớp chưa giao</span></dd>
                    <dt>Môn dạy:</dt>
                    <dd><?php echo $value['monday'] ?></dd>
                    <dt>Lớp dạy:</dt>
                    <dd><?php echo $value['lopday'] ?></dd>
                    <dt>Địa chỉ:</dt>
                    <dd><?php echo $value['diachi'] ?></dd>
                    <dt>Lương:</dt>
                    <dd><?php echo $value['luong'] ?></dd>
                    <dt>Số buổi:</dt>
                    <dd><?php echo $value['sobuoi'] ?></dd>
                    <dt>Thời gian:</dt>
                    <dd><?php echo $value['thoigian'] ?></dd>
                    <dt>Thông tin:</dt>
                    <dd><?php echo $value['thongtin'] ?></dd>
                    <dt>Yêu cầu:</dt>
                    <dd><?php echo $value['yeucau'] ?></dd>
                    <dt>Liên hệ:</dt>
                    <dd><span><?php echo $value['lienhe'] ?></span></dd>
                    <?php }} ?>
                </dl>
                
                <ul class="ldcgs_info_l2">
                    <div class="addthis_inline_share_toolbox_ogy4"></div>
                </ul>
            </div>

            <div class="ldcgs_info_r">
                <div class="ldcgs_inner">
                    <h3>ĐĂNG KÝ NHANH</h3>
                    <div class="ldcgs_f clearfix">
                        <form action="<?php echo base_url() ?>handling/dangkynhanh" method="post">
                            
                            <span class="fmInput" id="fmInp-fm-0-1" style="width: 99%;"><span><input id="phone" name="phone" value="" placeholder="Nhập số điện thoại di động của bạn" class="lgs_in_text fmZero" tabindex="1" style="width: 100%;" type="text"></span></span>
                            <span class="fmInput" id="fmInp-fm-0-1" style="width: 99%;"><span><input id="id_lop" name="id_lop" value="" placeholder="Nhập mã lớp muốn đăng ký" class="lgs_in_text fmZero" tabindex="1" style="width: 100%;" type="text"></span></span>
                            <span class="w49">
                                <select id="chuyenkhoan" name="chuyenkhoan" class="clsip slinput fmZero" style="width:100%; margin:0px;">
                                    <option >--Hình thức nhận lớp--</option>
                                    <option >Chuyển Khoản (Đóng 30%: 810.000đ)</option>
                                    <option >Tới Trung Tâm (Đóng 30%: 810.000đ)</option>
                                </select> 
                            </span>
                            <span class="ldcgs_f_txt">Thời gian nhận lớp:</span>
                            <span class="fmInput" id="fmInp-fm-0-2" style="width: 49%;">
                                <span><input id="thoigian_ngay" name="thoigian_ngay" value="" placeholder="Nhập ngày nhận" class="lgs_in_text2 fmZero" tabindex="3" style="width: 100%;" type="text"></span></span>
                            <span class="w49_2">                                    
                                <select class="clsip slinput" name="thoigian_gio" id="thoigian_gio" style="width:120px; float:right;">
                                    <option>Thời gian nhận</option>
                                                                            <option >8h</option>
                                                                            <option >8h30</option>
                                                                            <option >9h</option>
                                                                            <option >9h30</option>
                                                                            <option >10h</option>
                                                                            <option >10h30</option>
                                                                            <option >11h</option>
                                                                            <option >11h30</option>
                                                                            <option >13h30</option>
                                                                            <option >14h</option>
                                                                            <option >14h30</option>
                                                                            <option >15h</option>
                                                                            <option >15h30</option>
                                                                            <option >16h</option>
                                                                            <option >16h30</option>
                                                                            <option >17h</option>
                                                                            <option >17h30</option>
                                                                            <option >18h</option>
                                                                            <option >18h30</option>
                                                                            <option >19h</option>
                                                                            <option >19h30</option>
                                                                            <option >20h</option>
                                                                            <option >Lúc Khác</option>
                                                                    </select>
                            </span>
                            <span class="fmInput" id="fmInp-fm-0-3" style="width: 99%;">
                                <span><input id="noi_dung" name="noi_dung" value="" placeholder="Nội dung thêm (nếu có)" class="lgs_in_text fmZero" tabindex="5" style="width: 100%;" type="text"></span>
                            </span>
                            <!-- <input id="" name="" value="Nhận Lớp" class="btn_s3" tabindex="6" type="submit"> -->
                            <button  class="btn_s3" tabindex="6" type="submit" class="btn btn-primary">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
                            <div class="clearfix"></div>
                <div class=""><p style="font-weight: bold;"><span style="color: blue">Chi tiết về lớp dạy: </span>GV cứng cáp, kinh nghiệm, khoảng 35 tuổi trở lại</p></div>
                    </div>
        <div class="ldcgs_dk clearfix">
            <p class="ldcgs_dk1">Trung tâm đã cập nhật video hướng dẫn nhận lớp, hướng dẫn báo sự cố khi nhận lớp, quý gia sư vui lòng bấm vào "xem chi tiết " để xem video hướng dẫn trước khi đăng ký nhận lớp dạy.</p>
            <p class="more_y3">
                <a target="_blank" href="https://giasudatviet.com/huong-dan-nhan-lop.html">XEM CHI TIẾT</a>
            </p>
        </div>

                <div class="dsgsdk">
            <h4>DANH SÁCH GIA SƯ ĐÃ ĐĂNG KÝ</h4>
            <div class="dsgsdk_c">
                <span class="color1">&nbsp;</span>
                <span>Đã nhận lớp</span>
                <span class="color2">&nbsp;</span>
                <span>Đủ điều kiện</span>
                <span class="color3">&nbsp;</span>
                <span>Xem xét</span>
                <span class="color4">&nbsp;</span>
                <span>Không đạt</span>
                <span class="color5">&nbsp;</span>
                <span>Chờ duyệt</span>
            </div>
        </div>
        <table class="dsgsdk_table">
            <tbody><tr>
                <!-- <th class="col_1">STT</th> -->
                <th class="col_2">Họ và tên</th>
                <th class="col_3">Ảnh</th>
                <th class="col_4">Thông tin</th>
                <th class="col_5">Trạng thái</th>
            </tr>
                    </tbody></table>
        

        <p class="dsgsdk_btn">
            <a href="<?php echo base_url() ?>handling/index">Tổng hợp lớp đang cần Gia sư</a>
        </p>
        
        <div class="gsgsdk_infos">

        </div>
    </div>
</div>
<link href="https://giasudatviet.com/assets/lib/datepicker/datepicker.min.css" rel="stylesheet">
<script src="https://giasudatviet.com/assets/lib/datepicker/datepicker.min.js"></script>

<!-- <script src="https://giasudatviet.com/assets/lib/jquery-ui.js"></script> -->                                  <div class="col_r">
    <div class="box">
        <h3 class="bh_b">GIA SƯ ĐĂNG NHẬP</h3>
        <ul class="l_list1">
            <li class="login clearfix">
                <form action="" id="form__login" method="post" onsubmit="return false">
                    <input type="text" id="login__phone" name="login__phone" value="" placeholder="Nhập SĐT gia sư">
                    <input type="submit" id="" name="" value="ĐĂNG NHẬP" class="btn_s3" style="width: 100px !important; color: #fff; margin: 15px 20px; cursor: pointer;">
                </form>
            </li>
            <!-- <li><a href="#">Thống kê nhận lớp</a></li> -->
            <li><a href="https://giasudatviet.com/lop-day-can-gia-su.html" title="Lớp mới chưa giao">Lớp mới chưa giao</a></li>
        </ul>
    </div>
            <div class="box">
            <h3 class="bh_y">THỜI GIAN LÀM VIỆC</h3>
            <ul class="l_list6">
                <li>Sáng <img alt="" src="https://giasudatviet.com/assets/images/ico_clock.png"> <span>8h - 12h</span></li>
                <li>Chiều <img alt="" src="https://giasudatviet.com/assets/images/ico_clock.png"> <span style="font-size:11px">13h30-17h30</span></li>
                <!--<li>Tối <img alt="" src="images/ico_clock.png"><span> 19h - 21h30</span></li>-->
                <p style="padding:5px;">Trung tâm làm việc từ Thứ 2 -&gt; Thứ 7. Lưu ý : ngoài giờ làm việc, quý gia sư vui lòng không liên hệ bằng điện thoại.</p>
            </ul>
        </div>

        <div class="box">
            <h3 class="bh_g">TK NGÂN HÀNG</h3>
            <ul class="blank_l"> 
                <li><a href="https://giasudatviet.com/tai-khoan-ngan-hang.html" target="_blank"><img alt="" src="https://giasudatviet.com/assets/images/bank1.jpg"></a></li>
                <!--<li><a href="https://giasudatviet.com/tai-khoan-ngan-hang.html" target="_blank"><img alt="" src="https://giasudatviet.com/assets/images/bank2.jpg"></a></li>-->
                <li><a href="https://giasudatviet.com/tai-khoan-ngan-hang.html" target="_blank"><img alt="" src="https://giasudatviet.com/assets/images/bank3.jpg"></a></li>
                <!--<li><a href="https://giasudatviet.com/tai-khoan-ngan-hang.html" target="_blank"><img alt="" src="https://giasudatviet.com/assets/images/bank4.jpg"></a></li>-->
                <li><a href="https://giasudatviet.com/tai-khoan-ngan-hang.html" target="_blank"><img alt="" src="https://giasudatviet.com/assets/images/bank6.jpg"></a></li>
                <li><a href="https://giasudatviet.com/tai-khoan-ngan-hang.html" target="_blank"><img alt="" src="https://giasudatviet.com/assets/images/bank7.jpg"></a></li>
                <!--<li><a href="https://giasudatviet.com/tai-khoan-ngan-hang.html" target="_blank"><img alt="" src="https://giasudatviet.com/assets/images/bank8.png"></a></li>-->
                <li><a href="https://giasudatviet.com/tai-khoan-ngan-hang.html" target="_blank"><img alt="" src="https://giasudatviet.com/assets/images/bank10.jpg"></a></li>
                
            </ul>
        </div>
    
    <div class="box">
        <h3 class="bh_g">GIA SƯ TIÊU BIỂU</h3>
        <div class="giasutieubieu">
            <div class="jcarousel-gia-su" style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; height: 370px;">
                <ul style="margin: 0px; padding: 0px; position: relative; list-style-type: none; z-index: 1; height: 1850px; top: -370px;"><li style="overflow: hidden; float: none; width: 142px; height: 180px;"><a href="javascript:;" title="Phạm Lê Quốc Trạng - 10556"><img src="https://giasudatviet.com/uploads/tim/timthumb.php?src=https://giasudatviet.com/uploads/anh-the/gia-su-pham-le-quoc-trang-10556-5bb234392dce2.jpg&amp;w=120&amp;h=163&amp;zc=1&amp;q=100" alt="Phạm Lê Quốc Trạng"></a></li>
                                            <li style="overflow: hidden; float: none; width: 142px; height: 180px;"><a href="javascript:;" title="Đậu Thị Thanh - 8096"><img src="https://giasudatviet.com/uploads/tim/timthumb.php?src=https://giasudatviet.com/uploads/anh-the/gia-su-dau-thi-thanh-8096-5bb233f287ac4.jpg&amp;w=120&amp;h=163&amp;zc=1&amp;q=100" alt="Đậu Thị Thanh"></a></li>
                                            <li style="overflow: hidden; float: none; width: 142px; height: 180px;"><a href="javascript:;" title="Trịnh Xuân Đông - 6645"><img src="https://giasudatviet.com/uploads/tim/timthumb.php?src=https://giasudatviet.com/uploads/anh-the/gia-su-trinh-xuan-dong-6645-5bb233b80f85d.jpg&amp;w=120&amp;h=163&amp;zc=1&amp;q=100" alt="Trịnh Xuân Đông"></a></li>
                                            <li style="overflow: hidden; float: none; width: 142px; height: 180px;"><a href="javascript:;" title="Vũ Ngọc Long  - 6428"><img src="https://giasudatviet.com/uploads/tim/timthumb.php?src=https://giasudatviet.com/uploads/anh-the/gia-su-vu-ngoc-long-6428-5bb233b01a87b.jpg&amp;w=120&amp;h=163&amp;zc=1&amp;q=100" alt="Vũ Ngọc Long "></a></li>
                                            <li style="overflow: hidden; float: none; width: 142px; height: 180px;"><a href="javascript:;" title="Phạm Văn Quyệt  - 6391"><img src="https://giasudatviet.com/uploads/tim/timthumb.php?src=https://giasudatviet.com/uploads/anh-the/gia-su-pham-van-quyet-6391-5bb233b00988a.jpg&amp;w=120&amp;h=163&amp;zc=1&amp;q=100" alt="Phạm Văn Quyệt "></a></li>
                                            <li style="overflow: hidden; float: none; width: 142px; height: 180px;"><a href="javascript:;" title="Hoàng Thị Nhung - 7125"><img src="https://giasudatviet.com/uploads/tim/timthumb.php?src=https://giasudatviet.com/uploads/anh-the/gia-su-hoang-thi-nhung-7125-5bb233d017b62.jpg&amp;w=120&amp;h=163&amp;zc=1&amp;q=100" alt="Hoàng Thị Nhung"></a></li>
                                            <li style="overflow: hidden; float: none; width: 142px; height: 180px;"><a href="javascript:;" title="Lê Viết Thuận - 7210"><img src="https://giasudatviet.com/uploads/tim/timthumb.php?src=https://giasudatviet.com/uploads/anh-the/gia-su-le-viet-thuan-7210-5bb233d41355c.jpg&amp;w=120&amp;h=163&amp;zc=1&amp;q=100" alt="Lê Viết Thuận"></a></li>
                                            <li style="overflow: hidden; float: none; width: 142px; height: 180px;"><a href="javascript:;" title="Lý Hồng Nhân  - 10620"><img src="https://giasudatviet.com/uploads/tim/timthumb.php?src=https://giasudatviet.com/uploads/anh-the/gia-su-ly-hong-nhan-10620-5bb2343b2849c.jpg&amp;w=120&amp;h=163&amp;zc=1&amp;q=100" alt="Lý Hồng Nhân "></a></li>
                                            <li style="overflow: hidden; float: none; width: 142px; height: 180px;"><a href="javascript:;" title="Phạm Lê Quốc Trạng - 10556"><img src="https://giasudatviet.com/uploads/tim/timthumb.php?src=https://giasudatviet.com/uploads/anh-the/gia-su-pham-le-quoc-trang-10556-5bb234392dce2.jpg&amp;w=120&amp;h=163&amp;zc=1&amp;q=100" alt="Phạm Lê Quốc Trạng"></a></li>
                                    <li style="overflow: hidden; float: none; width: 142px; height: 180px;"><a href="javascript:;" title="Đậu Thị Thanh - 8096"><img src="https://giasudatviet.com/uploads/tim/timthumb.php?src=https://giasudatviet.com/uploads/anh-the/gia-su-dau-thi-thanh-8096-5bb233f287ac4.jpg&amp;w=120&amp;h=163&amp;zc=1&amp;q=100" alt="Đậu Thị Thanh"></a></li></ul>
            </div>
            <p class="more_g"><a href="https://giasudatviet.com/gia-su-tieu-bieu.html" title="Gia sư tiêu biểu">Xem nhiều hơn</a></p>
        </div>
    </div>

    <div class="box">
        <h3 class="bh_g">TIN TỨC NỔI BẬT</h3>
        <div class="tintuc ">
            <div class="jcarousel-tin-tuc--">
                <ul class="l_list5">
                 
                    <li><a href="https://giasudatviet.com/trung-tam-gia-su-quan-2-tphcm.html"><img src="https://giasudatviet.com/uploads/tim/timthumb.php?src=https://giasudatviet.com/uploads/news/c58d544852f683cf4e0dba1075299ae6_1512309311.jpg&amp;w=132&amp;h=87&amp;zc=1&amp;q=100" alt="Trung tâm gia sư quận 2 TPHCM"><br>Trung tâm gia sư quận 2 TPHCM</a></li>
                 
                    <li><a href="https://giasudatviet.com/trung-tam-gia-su-quan-1-tphcm.html"><img src="https://giasudatviet.com/uploads/tim/timthumb.php?src=https://giasudatviet.com/uploads/news/b2ac534da47e4edc11edaceb11fb4bd5_1511244386.jpg&amp;w=132&amp;h=87&amp;zc=1&amp;q=100" alt="Trung tâm gia sư quận 1 TPHCM"><br>Trung tâm gia sư quận 1 TPHCM</a></li>
                 
                    <li><a href="https://giasudatviet.com/trung-tam-gia-su-gia-re-tphcm.html"><img src="https://giasudatviet.com/uploads/tim/timthumb.php?src=https://giasudatviet.com/uploads/news/66c3a66ccf17a7dd4d2ebd6c44e9f52f_1510579876.jpg&amp;w=132&amp;h=87&amp;zc=1&amp;q=100" alt="Trung tâm gia sư giá rẻ TPHCM"><br>Trung tâm gia sư giá rẻ TPHCM</a></li>
                 
                    <li><a href="https://giasudatviet.com/trung-tam-gia-su-tphcm.html"><img src="https://giasudatviet.com/uploads/tim/timthumb.php?src=https://giasudatviet.com/uploads/news/ca4843f9fffb488843cf7243b1e38142_1510410318.jpg&amp;w=132&amp;h=87&amp;zc=1&amp;q=100" alt="Trung tâm gia sư TPHCM"><br>Trung tâm gia sư TPHCM</a></li>
                                </ul>
            </div>
            <p class="more_g"><a href="https://giasudatviet.com/tin-tuc.html" title="xem nhiều hơn">Xem nhiều hơn</a></p>
        </div>
    </div>

</div>                            </div>
            <div class="jobs">
    <div class="job_ttl">
        GIA SƯ ĐẤT VIỆT TUYỂN DỤNG NHÂN VIÊN TRỰC ĐIỆN THOẠI
        <p class="jobs_d"><a href="https://giasudatviet.com/tuyen-dung.html">Xem chi tiết</a></p>
    </div>
    <ul class="job_list clearfix">
            </ul>
</div>

<div class="partners">
    <div id="owl-demo" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 6220px; left: 0px; display: block; transition: all 800ms ease 0s; transform: translate3d(-1244px, 0px, 0px);"><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/1.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/2.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/3.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/4.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/5.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/1.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/2.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/3.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/4.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/5.jpg" alt="Owl Image"></div></div></div></div>
        
        
        
        
        
        
        
        
        
    <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page"><span class=""></span></div><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></div>
</div>

<div class="footer">
    <div class="f_inner clearfix">
        <div class="f_inner_l">
            <p class="f_img"><img src="https://giasudatviet.com/assets/images/img_footer.png" alt=""></p>
            <ul class="f_list">
               <!--<li>
                    <span class="vp1">Văn phòng Gia sư Đất Việt Quận Gò Vấp</span><br />Lầu 3, Tòa Nhà Số 672A27, Đường Phan Văn Trị, Phường 10, Quận Gò Vấp (Khu CityLand Park Hill)<br />
                    <span class="vp2">Liên Hệ :</span> <span class="vp3">0973.412.721</span> <span class="vp2">(Cô Dung)</span>
                </li>-->
                <!--<li>
                    <span class="vp1">Văn phòng Gia sư Đất Việt Quận Gò Vấp</span><br />Lầu 3, Tòa Nhà Số 672A27, Đường Phan Văn Trị, Phường 10, Quận Gò Vấp (Khu CityLand Park Hill)<br />
                    <span class="vp2">Liên Hệ :</span> <span class="vp3">0973.412.721</span> <span class="vp2">(Cô Dung)</span>
                </li>-->
            </ul>
        </div>

        <div class="f_inner_r">
            <ul class="f_list">
                <!--<li>
                    <span class="vp1">Văn phòng Gia sư Đất Việt Quận Gò Vấp</span><br />Lầu 3, Tòa Nhà Số 672A27, Đường Phan Văn Trị, Phường 10, Quận Gò Vấp (Khu CityLand Park Hill)<br />
                    <span class="vp2">Liên Hệ :</span> <span class="vp3">0973.412.721</span> <span class="vp2">(Cô Dung)</span>
                </li>-->
                <!--<li>
                    <span class="vp1">Văn phòng Gia sư Đất Việt Quận Gò Vấp</span><br />Lầu 3, Tòa Nhà Số 672A27, Đường Phan Văn Trị, Phường 10, Quận Gò Vấp (Khu CityLand Park Hill)<br />
                    <span class="vp2">Liên Hệ :</span> <span class="vp3">0973.412.721</span> <span class="vp2">(Cô Dung)</span>
                </li>-->
                <li>
                    <span class="vp1">Văn phòng Gia sư Đất Việt Quận Gò Vấp</span><br>Lầu 3, Tòa Nhà Số 672A27, Đường Phan Văn Trị, Phường 10, Quận Gò Vấp (Khu CityLand Park Hill)<br>
                    <!--<span class="vp2">Liên Hệ :</span> <span class="vp3">0973.412.721</span> <span class="vp2">(Cô Dung)</span>-->
                </li>
                <li>
                    <span class="vp1">Văn phòng Gia sư Đất Việt Quận Gò Vấp</span><br>Lầu 3, Tòa Nhà Số 672A27, Đường Phan Văn Trị, Phường 10, Quận Gò Vấp (Khu CityLand Park Hill)<br>
                    <!--<span class="vp2">Liên Hệ :</span> <span class="vp3">0973.412.721</span> <span class="vp2">(Cô Dung)</span>-->
                </li>
            </ul>
        </div>
    </div>
    <!--<p class="copyright">TRUNG TÂM GIA SƯ ĐẤT VIỆT</p>-->
</div>                    </div>