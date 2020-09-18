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


</div>                <div class="col_c col_c2">
    <div class="newClass">
        <div class="gstt_form">
            
            
        </div>
        <h2 class="gstt_bh">Quý phụ huynh liên hệ <font color="green"><strong>0973.412.721</strong></font> để được tư vấn gia sư miễn phí</h2>
        <div class="giasu_d">
            <p class="bnr1"><img src="https://giasudatviet.com/assets/images/footer783.png" width="100%"></p>
            <div class="gs_item_l clearfix">
                    <?php foreach ($dsgiasu as $key) {
                      ?>
                                    <div class="gs_item">
                        <div>
                            
                            <img src="<?php echo base_url() ?>public/image/<?php echo $key['image'] ?>">
                            <span class="gs1">Mã số: </span><strong class="gs2"><?php echo $key['id'] ?></strong><br>
                            <span class="gs1">Gia sư: </span><strong class="gs3"><?php echo $key['fullname'] ?></strong><br>
                            <span class="gs1">Năm sinh: </span><span class="gs4"><?php echo $key['namsinh'] ?></span><br>
                           <span class="gs1">Hiện là: </span><span class="gs4"><?php echo $key['hienla'] ?></span><br>
                            <span class="gs1">Trường: </span><span class="gs4"><?php echo $key['truong'] ?></span><br>
                            <span class="gs1">Chuyên ngành: </span><span class="gs4"><?php echo $key['chuyennganh'] ?></span><br>
                            <span class="gs1">Năm tốt nghiệp: </span><span class="gs4"><?php echo $key['namtotnghiep'] ?></span><br>
                            <span class="gs5th2"><font color="#333"><strong>Nhận dạy: </strong></font><?php echo $key['nhanday'] ?></span><br>
                            <span class="gs5th"><font color="#333"><strong>Các môn: </strong></font><?php echo $key['cacmon'] ?></span><br>
                            <span class="gs5th"><font color="#333"><strong>Khu vực:</strong></font> <?php echo $key['khuvuc'] ?></span><br>
                            <!-- <span class="gs1">Yêu cầu lương tối thiểu: </span><strong class="gs6">200.000<sup>đ</sup>/ buổi</strong><br> -->
                            <span class="gs9"><font color="#333"><strong>Thông tin khác: <?php echo $key['thongtinkhac'] ?></strong></font>&nbsp; </span>
                        </div>
                        <p class="dangky_btn clearfix">  
                            <a class="btn_s3" href="<?php echo base_url() ?>handling/datgiasu/<?php echo $key['id'] ?>">Chọn</a>
                        </p>
                    </div>
                     <?php }?>
                                  
                                  
                               
                                  
                                    
            </div>
                            
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
        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 6220px; left: 0px; display: block; transition: all 1000ms ease 0s; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/1.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/2.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/3.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/4.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/5.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/1.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/2.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/3.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/4.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 311px;"><div class="item"><img src="https://giasudatviet.com/assets/images/5.jpg" alt="Owl Image"></div></div></div></div>
        
        
        
        
        
        
        
        
        
    <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></div>
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