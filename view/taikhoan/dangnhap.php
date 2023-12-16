<div class="row mb">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <?php
                        if(isset($_GET['del'])&&($_GET['del']==1)){
                          setcookie("user","",time()-86400);
                                setcookie("pass","",time()-86400);
                        }
                          $isLogin=0;
                        if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                            $isLogin=1;
                        ?>
                        
                          <!-- <div class="row mmb10">
                            Xin chào <strong><?=$user?> </strong>!<br><br>
                           </div> -->
                           <div class="row mb10">
                           <!-- <li><a href="index.php?act=viewcart">Giỏ Hàng</a></li>
                           <li><a href="index.php?act=mybill">Đơn hàng của bạn</a></li> -->
                           <?php 
                           if(isset($mesagecokie)) echo $mesagecokie;
                           else echo "Đã ghi nhận cookie!<br>";
                           
                           ?>
                           <li><a href="index.php?act=quenmk">Đổi mật khẩu</a></li>
                           <li><a href="index.php?act=edit_taikhoan">Cập nhật thông tin cá nhân</a></li>
                            <?php if($role==1){  ?>
                           <li><a href="admin/index.php">Tài khoản với vai trò Quản trị => Đăng nhập admin</a></li>
                            <?php } ?>
                           <li><a href="index.php?act=thoat">Đăng xuất</a></li>
                        </div>

                        <?php
                        }else
                        {
                            $isLogin=0;
                        ?>
                        <form action="index.php?act=dangnhap" method="post">
                           <div class="row mmb10">
                            Tên đăng nhập <br>
                            <input type="text" name="user" id="">
                           </div>
                           <div class="row mb10">
                            Mật khẩu <br>
                            <input type="password" name="pass" id="">
                           </div>
                            <input type="checkbox" name="GHINHO" id=""> Ghi nhớ tài khoản ? <br>
                            <input type="submit" value="Đăng Nhập" name="dangnhap">
                            
                        </form>
                        <li><a href="">Quên mật khẩu</a></li>
                            <li><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
                            <?php } ?>
                    </div>
                </div>


                <!--  -->