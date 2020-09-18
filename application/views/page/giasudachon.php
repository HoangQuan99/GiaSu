<div class="pageBody clearfix">
            <div class="pageBodyInner clearfix">
                <div class="col_l">
    <div class="box">
        <h3 class="bh_b">PHỤ HUYNH</h3>
        <ul class="l_list1">
            <li><a href="<?php echo base_url() ?>handling/dangkytimgiasu">Đăng ký tìm gia sư</a></li>
            <li><a href="<?php echo base_url() ?>handling/hocphithamkhao">Học phí tham khảo</a></li>
            <li><a href="<?php echo base_url() ?>handling/phuhuynhcanbiet" title="">Phụ huynh cần biết</a></li>
            <li><a href="<?php echo base_url() ?>handling/giasutieubieu" title="">Gia sư tiêu biểu</a></li>
        </ul>
    </div>

    <div class="box">
        <h3 class="bh_y">GIA SƯ</h3>
        <ul class="l_list2">
            <li><a href="<?php echo base_url() ?>handling/dangkylamgiasu">Đăng ký làm gia sư</a></li>
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



</div>                <div class="col_c">
    <h2 class="sh_b3">GIA SƯ ĐÃ CHỌN</h2>
    <div class="gsdc_out clearfix">        
            <div class="item_gsdc clearfix">
                <dl class="clearfix">
                    <?php if(isset($giasudachon)){
                        foreach ($giasudachon as $key => $value) {
                            ?>
                            <img src="<?php echo base_url() ?>public/image/<?php echo $value['image'] ?>" width="100" height="140">
                        <dl class="gsdc_info">                         
                        <dt>Mã số: </dt>
                        <dd><span><?php echo $value['id'] ?></span></dd>
                        <dt>Họ tên:</dt>
                        <dd><?php echo $value['fullname'] ?></dd>
                        <dt>Năm sinh:</dt>
                        <dd><?php echo $value['namsinh'] ?></dd>
                        </dl>
                        <?php }} ?>
                    
               </dl>
                
                <p class="gsdc_btn" style="margin-top: 5px;"><a href="<?php echo base_url() ?>handling/remove_ss" title="">Bỏ chọn</a></p>
            </div>

    </div>
    
    <h3 class="gsdc_sh">ĐIỀN THÔNG TIN ĐĂNG KÝ CHỌN GIA SƯ</h3>
    <div class="formOut clearfix">
        <form method="POST" action="<?php echo base_url() ?>handling/dangkychongiasu" >                            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Họ tên (<span>*</span>)</p>
                <div class="formOut_field">
                    <input type="text" id="fullname" name="fullname" value="" class="in_405">
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Địa chỉ</p>
                <div class="formOut_field">
                    <input type="text" id="address" name="address" value="" class="in_405">
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Điện thoại (<span>*</span>)</p>
                <div class="formOut_field">
                    <input type="text" id="phone" name="phone" value="" class="in_405">
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Email</p>
                <div class="formOut_field">
                    <input type="text" id="email" name="email" value="" class="in_405">
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Lớp</p>
                <div class="formOut_field clearfix">
                    <span class="w160">
                    <select name="id_lop" id="id_lop">
                        <option value="">Chọn lớp</option>
                                                    <option >Lớp Lá</option>
                                                    <option >Lớp 1</option>
                                                    <option >Lớp 2</option>
                                                    <option >Lớp 3</option>
                                                    <option >Lớp 4</option>
                                                    <option >Lớp 5</option>
                                                    <option >Lớp 6</option>
                                                    <option >Lớp 7</option>
                                                    <option >Lớp 8</option>
                                                    <option >Lớp 9</option>
                                                    <option >Lớp 10</option>
                                                    <option >Lớp 11</option>
                                                    <option >Lớp 12</option>
                                                    <option >Ôn Thi Đại Học</option>
                                                    <option >Dạy Song Ngữ</option>
                                                    <option >Dạy Các Môn Bằng Tiếng Anh</option>
                                                    <option >Ôn Trần Đại Nghĩa</option>
                                                    <option >Ôn Thi Trường Chuyên</option>
                                                    <option >Dạy Trẻ Tự Kỷ</option>
                                                    <option >Các Lớp Khác</option>
                                            </select>
                    </span>
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Môn học</p>
                <div class="formOut_field">
                    <input type="text" id="mon_hoc" name="mon_hoc" value="" placeholder="Ví dụ: Toán, lý, hóa,..." class="in_405">
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Số lượng học sinh</p>
                <div class="formOut_field">
                    <input type="text" id="so_hoc_sinh" name="so_hoc_sinh" value="" class="in_405" placeholder="Ví dụ: 1 học sinh">
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Học lực hiện tại</p>
                <div class="formOut_field">
                    <input type="text" id="hoc_luc" name="hoc_luc" value="" class="in_405" placeholder="Ví dụ: trung bình">
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Số buổi</p>
                <div class="formOut_field clearfix">                                    
                    <span class="w160">
                    <select name="so_buoi" id="so_buoi">
                    <option value="">-Chọn số buổi-</option>
                        <option >1 buổi</option>
                        <option >2 buổi</option>
                        <option >3 buổi</option>
                        <option >4 buổi</option>
                        <option >5 buổi</option>
                        <option >6 buổi</option>
                        <option >7 buổi</option>
                        <option >8 buổi</option>
                        <option >9 buổi</option>
                        <option >10 buổi</option>
                    </select>
                    </span>
                    <span class="money">/ <em>tuần</em></span>
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Thời gian học</p>
                <div class="formOut_field">
                    <input type="text" id="thoi_gian" name="thoi_gian" placeholder="Ví dụ: Thứ 2 - thứ 4; 17h - 19h" value="" class="in_405">
                </div>                            
            </div>
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Yêu cầu</p>
                <div class="formOut_field clearfix">
                    <span class="w160">
                    <select name="id_level" id="id_level">
                        <option value="">Chọn yêu cầu</option>
                                                    <option >Giáo viên</option>
                                                    <option >Sinh Viên</option>
                                                    <option >Sinh Viên Sư Phạm</option>
                                                    <option >Cử Nhân</option>
                                                    <option >Kỹ Sư</option>
                                                    <option >Thạc Sỹ</option>
                                                    <option >Tiến Sỹ</option>
                                                    <option >Giảng Viên</option>
                                                    <option >Bằng Cấp Khác</option>
                                            </select>
                    </span>
                </div>                            
            </div>
            
            
            <div class="formOut_line clearfix">
                <p class="formOut_lab">Yêu câu khác</p>
                <div class="formOut_field">
                    <textarea id="yeu_cau" name="yeu_cau" rows="" cols="" class="area_100"></textarea>
                </div>                            
            </div>
            <p class="dangky_btn clearfix">                            
                <input type="submit" id="" name="" value="ĐĂNG KÝ" class="btn_s3">  
            </p>   
                
        </form>
    </div>
    <div class="tgs_out">
        <h3 class="tgs_sh">BẢNG GIÁ HỌC PHÍ THUÊ GIA SƯ DẠY KÈM</h3>
        <p class="tgs_txt">Cam kết gia sư có bằng cấp đầy đủ - Đảm bảo gia sư dạy tốt chất lượng<br>
            Dạy thử 1 tuần đầu để phụ huynh và học viên kiểm tra đánh giá trình độ gia sư
        </p>
        <div class="banggia">
            <table class="table1">
                <tbody>
                    <tr>
                        <th class="col1" rowspan="2">KHỐI LỚP</th>
                        <th colspan="2">2 buổi /tuần</th>
                        <th colspan="2">3 buổi /tuần</th>
                    </tr>
                    <tr>
                        <th>Sinh viên</th>
                        <th>Giáo viên</th>
                        <th>Sinh viên</th>
                        <th>Giáo viên</th>
                    </tr>
                    <tr>
                        <td class="col1">Lớp lá 1,2,3,4</td>
                        <td>600 -&gt; 700</td>
                        <td>1000 -&gt; 1200</td>
                        <td>800 -&gt; 1000</td>
                        <td>1400 -&gt; 1800</td>
                    </tr>
                    <tr>
                        <td class="col1">Lớp 5,6,7,8</td>
                        <td>700 -&gt; 800</td>
                        <td>1200 -&gt; 1400</td>
                        <td>900 -&gt; 1000</td>
                        <td>1600 -&gt; 2000</td>
                    </tr>
                    <tr>
                        <td class="col1">Lớp 9,10,11,12</td>
                        <td>800 -&gt; 1000</td>
                        <td>1400 -&gt; 1600</td>
                        <td>1100 -&gt; 1400</td>
                        <td>1800 -&gt; 2400</td>
                    </tr>
                    <tr>
                        <td class="col1">LTĐH - Ngoại Ngữ..</td>
                        <td>900 -&gt; 1100</td>
                        <td>1500 -&gt; 1700</td>
                        <td>1300 -&gt; 1500</td>
                        <td>2200 -&gt; 2500</td>
                    </tr>
                </tbody>
            </table>
            <table class="table2">
                <tbody>
                    <tr>
                        <th class="col1" rowspan="2">KHỐI LỚP</th>
                        <th colspan="2">4 buổi /tuần</th>
                        <th colspan="2">5 buổi /tuần</th>
                    </tr>
                    <tr>
                        <th>Sinh viên</th>
                        <th>Giáo viên</th>
                        <th>Sinh viên</th>
                        <th>Giáo viên</th>
                    </tr>
                    <tr>
                        <td class="col1">Lớp lá 1,2,3,4</td>
                        <td>1100 -&gt; 1200</td>
                        <td>1800 -&gt; 2000</td>
                        <td>1400 -&gt; 1600</td>
                        <td>2200 -&gt; 2800</td>
                    </tr>
                    <tr>
                        <td class="col1">Lớp 5,6,7,8</td>
                        <td>1200 -&gt; 1300</td>
                        <td>2100 -&gt; 2700</td>
                        <td>1400 -&gt; 1600</td>
                        <td>2500 -&gt; 3000</td>
                    </tr>
                    <tr>
                        <td class="col1">Lớp 9,10,11,12</td>
                        <td>1300 -&gt; 1700</td>
                        <td>2200 -&gt; 2900</td>
                        <td>1700 -&gt; 2000</td>
                        <td>3100 -&gt; 3700</td>
                    </tr>
                    <tr>
                        <td class="col1">LTĐH - Ngoại Ngữ..</td>
                        <td>1600 -&gt; 1800</td>
                        <td>2600 -&gt; 3100</td>
                        <td>2000 -&gt; 2300</td>
                        <td>3200 -&gt; 4000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h4 class="tgs_ssh">Lưu ý :</h4>
        
        <p>
            Thời gian dạy của sinh viên một buổi là 120 phút, thời gian dạy của giáo viên một buổi là 90 phút. Học phí trên áp dụng cho 1 tháng từ thời điểm gia sư bắt đầu dạy học viên.
            <br><br>
            Học phí sẽ tăng tùy theo số môn học(trừ trường hợp báo bài), số người học, địa điểm học và yêu cầu thêm (thêm 1 môn học là +100.000đ, thêm 1 người học là +200.000đ).
            <br><br>
            Học phí trên áp dụng cho sinh viên và giáo viên có bằng cử nhân của các trường đại học khác hoặc giáo viên có bằng đại học sư phạm.
            <br><br>
            Đối với thạc sỹ, giáo viên thâm niên, giáo viên dạy tại trường có kinh nghiệm dạy kèm mức học phí được tính theo tiết (1 tiết = 45 phút) :
        </p>
        <ul class="tgs_l">
            <li>Cấp 1:  60.000 đ -  80.000 đ / 1 tiết (45 phút) = 120.000 đ - 160.000 đ / 1 buổi</li>
            <li>Cấp 2:  80.000 đ -  100.000 đ/ 1 tiết (45 phút) = 160.000 đ - 200.000 đ / 1 buổi</li>
            <li>Cấp 3: 100.000 đ- 120.000 đ / 1 tiết (45 phút) = 200.000 đ - 240.000 đ / 1 buổi</li>
        </ul>
    </div>
</div>
<script>
    $(document).ready(function(){
        // $("#phone").keydown(function (e) {
        //     // Allow: backspace, delete, tab, escape, enter and .
        //     if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
        //         // Allow: Ctrl+A, Command+A
        //         (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
        //         // Allow: home, end, left, right, down, up
        //         (e.keyCode >= 35 && e.keyCode <= 40)) {
        //         // let it happen, don't do anything
        //         return;
        //     }
        //     // Ensure that it is a number and stop the keypress
        //     if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        //         e.preventDefault();
        //     }
        // });
        $('#select__giasu').on('click', function(e){
            e.preventDefault();

            $('#select__giasu__input').val(1);

            $('#form__dk_tim_giasu').submit();          
        });
    });
</script>                                    <div class="col_r">
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
            <h3 class="bh_y">Gia sư các môn</h3>
            <ul class="l_list2">
                                    <li><a href="https://giasudatviet.com/gia-su-mon-toan-1.html" title="Gia sư môn toán'">Gia sư môn toán</a></li>
                                    <li><a href="https://giasudatviet.com/gia-su-mon-ly.html" title="Gia sư môn lý'">Gia sư môn lý</a></li>
                                    <li><a href="https://giasudatviet.com/gia-su-mon-hoa.html" title="Gia sư môn hóa'">Gia sư môn hóa</a></li>
                                    <li><a href="https://giasudatviet.com/gia-su-tieng-anh.html" title="Gia sư tiếng anh'">Gia sư tiếng anh</a></li>
                                    <li><a href="https://giasudatviet.com/gia-su-mon-van.html" title="Gia sư môn văn'">Gia sư môn văn</a></li>
                                    <li><a href="https://giasudatviet.com/gia-su-mon-su.html" title="Gia sư môn sử'">Gia sư môn sử</a></li>
                                    <li><a href="https://giasudatviet.com/gia-su-mon-dia.html" title="Gia sư môn địa'">Gia sư địa lý</a></li>
                            </ul>
        </div>
    
    <div class="box">
        <h3 class="bh_g">GIA SƯ TIÊU BIỂU</h3>
        <div class="giasutieubieu">
            <div class="jcarousel-gia-su" style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; height: 370px;">
                <ul style="margin: 0px; padding: 0px; position: relative; list-style-type: none; z-index: 1; height: 1850px; top: -1116.71px;"><li style="overflow: hidden; float: none; width: 142px; height: 180px;"><a href="javascript:;" title="Phạm Lê Quốc Trạng - 10556"><img src="https://giasudatviet.com/uploads/tim/timthumb.php?src=https://giasudatviet.com/uploads/anh-the/gia-su-pham-le-quoc-trang-10556-5bb234392dce2.jpg&amp;w=120&amp;h=163&amp;zc=1&amp;q=100" alt="Phạm Lê Quốc Trạng"></a></li>
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
        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 6220px; left: 0px; display: block; transition: all 800ms ease 0s; transform: translate3d(-1555px, 0px, 0px);"><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/1.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/2.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/3.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/4.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/5.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/1.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/2.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/3.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/4.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/5.jpg" alt="Owl Image"></div></div></div></div>
        
        
        
        
        
        
        
        
        
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