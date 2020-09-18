
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
             <li><a href="<?php echo base_url() ?>handling/hocphithamkhao" title="">Lớp dạy cần gia sư</a></li>
             <li><a href="<?php echo base_url() ?>handling/hocphithamkhao" title="">Tài khoản ngân hàng</a></li>
             <li><a href="<?php echo base_url() ?>handling/hocphithamkhao" title="">Tuyển dụng</a></li>
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
    <!-- <div class="box">
        <h3 class="bh_g2">Gia Sư Quận</h3>
        <ul class="l_list4">
                            <li><a href="https://giasudatviet.com/gia-su-quan-1.html" title="gia su quan 1">gia su quan 1</a></li>
                    </ul>                        
        <p class="more_g3"><a href="https://giasudatviet.com/tin-tuc.html" title="xem nhiều hơn">Xem nhiều hơn</a></p>
    </div> -->

    <div class="box clearfix">
        <h3 class="bh_b">BẢN ĐỒ</h3>
        <div id="map" style="width:500px;height:500px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0576993222544!2d106.62641391474915!3d10.806892892300812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752be287a42a77%3A0xe2a986cb8920141c!2zMTQwIEzDqiBUcuG7jW5nIFThuqVuLCBQaMaw4budbmcgMTUsIFTDom4gUGjDuiwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1565322147644!5m2!1svi!2s" width="150" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

    <div class="fb">
        <a href="https://www.facebook.com" target="_blank" title="xem facebook trung tâm gia sư đất việt"><img src="https://giasudatviet.com/assets/images/fb.png" alt=""></a>
    </div>

    

</div>                <div class="col_c">
    <div class="gioithieu clearfix">
        <h2 class="sh_b">GIỚI THIỆU</h2>
        <div class="gt_m">
            <div class="owl-carousel2">
                <div class="item"><img src="https://giasudatviet.com/assets/images/img3.png" style="width: 300px"  alt=""></div>
            </div>
        </div> 
        <div class="gt_m">
            <p><img src="https://giasudatviet.com/assets/images/logo2.png" alt=""></p>
            <p>Hãy đến với chúng tôi, trung tâm gia sư Đất Việt để có được những sự lựa chọn đúng đắn và quyết định sáng suốt. Chúng tôi cam kết làm việc chuyên nghiệp và uy tín với chất lượng đảm bảo hàng đầu. Được thành lập với sứ mệnh mang lại niềm hạnh phúc cho quý gia đình trước sự tiến bộ của con em mình trong học tập </p>
            
        </div>
    </div>

    <div class="banggia">
         <?php foreach ($bangiags as $key) {
                      ?>

        <?php echo $key['name'] ?> 
        <table class="table1" style="width: 100%; border-color:green; " border="0" >
            <tbody>
                <?php echo $key['mota'] ?> 
            </tbody>
        </table>
        <?php }?>  
    </div>

    <div class="newClass">
       
       
        <div class="search clearfix">
            
            <form action="<?php echo base_url() ?>handling/filter" method="post">
                <select name="check_mon[]" class="clsip slinput" style="margin-right:4px;">
                    <option >Môn</option>
                    <?php if(isset($monhoc)) {
                        foreach ($monhoc as $value) {  ?>
                        <option value="<?php echo $value['id_mon'] ?>"
                            <?php if ( isset($check) && in_array($value['id_mon'], $check)) 
                            { 
                                echo "selected"; 
                            } else { 
                                echo ""; 
                            }?>
                            ><?php echo $value['name'] ?></option>
                    <?php } } ?>
                </select>
                <button type="submit" name="">Lọc</button> 
            </form>
            <br>
            <form action="<?php echo base_url() ?>handling/filter2" method="post">
                
                <!-- <input type="text" id="" name="keyword" value="" placeholder="Nhập mã lớp hoặc từ khóa" class="in_search"> -->
             
            <select name="check_lop[]"  class="clsip slinput" style="margin-right:4px;">
                <option >Lớp</option>
                <?php  if(isset($lop)) {
                    foreach ($lop as $value) { ?>
                        <option value="<?php echo $value['id_lophoc'] ?>" 
                        <?php if ( isset($check) && in_array($value['id_lophoc'], $check)) 
                        { 
                            echo "selected"; 
                        } else { 
                            echo ""; 
                        }?>
                        >
                            <?php echo $value['tenlop'] ?>
                        </option>
                <?php } } ?>
            </select>
            <button type="submit" name="">Lọc</button> 
            </form>
        </div>

         <div class="class_list clearfix">
            <?php foreach ($lophoc as $key) {
                      ?>
                    <div class="item_c" style="width: 49%">
                
                 
                 <div class="c_ttl">
                    
                </div>
                <div class="c_content chuagiao">
                 
                    Môn dạy: <span class="c1"><?php echo $key['monday'] ?></span><br>
                    Lớp dạy: <span class="c1"><?php echo $key['lopday'] ?></span><br>
                    Địa chỉ: <span class="c1"><?php echo $key['diachi'] ?></span><br>
                    Mức lương: <span class="c3"><?php echo $key['luong'] ?><sup>đ</sup>/tháng</span><br>
                    Số buổi: <span class="c2"><?php echo $key['sobuoi'] ?></span><br>
                    Thời gian: <span class="c2"><?php echo $key['thoigian'] ?></span><br>
                    Thông tin: <span class="c2"><?php echo $key['thongtin'] ?></span><br>
                    Yêu cầu: <span class="c2"><?php echo $key['yeucau'] ?></span><br>
                    Liên hệ: <span class="c2"><?php echo $key['lienhe'] ?></span>
                    
                </div>
                <div class="social clearfix">
                    
                <p class="more_y3"><a href="<?php echo base_url() ?>handling/datthem/<?php echo $key['id'] ?>">ĐĂNG KÝ</a></p>
                    </div>
                </div>
                    <?php }?>   
            </div> 

       <p class="more_g2"><a href="<?php echo base_url() ?>handling/index" title="xem thêm lớp">XEM THÊM LỚP</a></p>
    </div>

</div>                                    <div class="col_r">
    <div class="box">
        <h3 class="bh_b">GIA SƯ ĐĂNG NHẬP</h3>
        <ul class="l_list1">
            <li class="login clearfix">
                <form action="" id="form__login" method="post" onsubmit="return false">
                    <input type="text" id="login__phone" name="login__phone" value="" placeholder="Nhập SĐT gia sư">
                    <input type="submit" id="" name="" value="ĐĂNG NHẬP" class="btn_s3" style="width: 100px !important; color: #fff; margin: 15px 20px; cursor: pointer;">
                </form>
            </li>
            
        </ul>
    </div>
            <div class="box">
            <h3 class="bh_y">Gia sư các môn</h3>
            <ul class="l_list2">
                                    <li><a href="#" title="Gia sư môn toán'">Gia sư môn toán</a></li>
                                    <li><a href="#" title="Gia sư môn lý'">Gia sư môn lý</a></li>
                                    <li><a href="#" title="Gia sư môn hóa'">Gia sư môn hóa</a></li>
                                    <li><a href="#" title="Gia sư tiếng anh'">Gia sư tiếng anh</a></li>
                                    <li><a href="#" title="Gia sư môn văn'">Gia sư môn văn</a></li>
                                    <li><a href="#" title="Gia sư môn sử'">Gia sư môn sử</a></li>
                                    <li><a href="#" title="Gia sư môn địa'">Gia sư địa lý</a></li>
                            </ul>
        </div>
    
    <div class="box">
        <h3 class="bh_g">GIA SƯ </h3>
        <div class="giasutieubieu">
            <div class="jcarousel-gia-su">
                <ul>
                    <?php foreach ($dsgiasu as $key) {
                      ?>
                                            <li style="overflow: hidden; float: none; width: 152px; height: 150px;"><a href="javascript:;"><img src="<?php echo base_url() ?>public/image/<?php echo $key['image'] ?>" alt="Đậu Thị Thanh"></a></li>
                    <?php }?>
                                            </ul>
            </div>
            <p class="more_g"><a href="<?php echo base_url() ?>handling/giasutieubieu" title="Gia sư tiêu biểu">Xem nhiều hơn</a></p>
        </div>
    </div>

    <!-- <div class="box">
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
    </div> -->

</div>                            </div>
            <div class="jobs">
    <div class="job_ttl">
        GIA SƯ ĐẤT VIỆT TUYỂN DỤNG NHÂN VIÊN TRỰC ĐIỆN THOẠI
        <p class="jobs_d"><a href="#">Xem chi tiết</a></p>
    </div>
    <ul class="job_list clearfix">
            </ul>
</div>

<div class="partners">
    <!-- <div id="owl-demo" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 3720px; left: 0px; display: block; transition: all 1000ms ease 0s; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 186px;"><div class="item"><img src="https://giasudatviet.com/assets/images/1.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 186px;"><div class="item"><img src="https://giasudatviet.com/assets/images/2.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 186px;"><div class="item"><img src="https://giasudatviet.com/assets/images/3.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 186px;"><div class="item"><img src="https://giasudatviet.com/assets/images/4.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 186px;"><div class="item"><img src="https://giasudatviet.com/assets/images/5.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 186px;"><div class="item"><img src="https://giasudatviet.com/assets/images/1.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 186px;"><div class="item"><img src="https://giasudatviet.com/assets/images/2.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 186px;"><div class="item"><img src="https://giasudatviet.com/assets/images/3.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 186px;"><div class="item"><img src="https://giasudatviet.com/assets/images/4.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 186px;"><div class="item"><img src="https://giasudatviet.com/assets/images/5.jpg" alt="Owl Image"></div></div></div></div>
        
        
        
        
        
        
        
        
        
    <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></div> -->
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
</div>        </div>
<script type="text/javascript">
    
    $(".banggia table").attr("border","1");
    $(".banggia table").addClass("table table-borderd table-responsive text-center");
    

</script>
