<header class="w3-container w3-blue">
                <h1>ADD PRODUCT</h1>
            </header>
            <style>
        .row{
            padding-left: 20px;
        }
    </style>
<div class="row">
           <div class="row formcontent">
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
               <div class="row mb10">
                Danh mục <br>
                <select name="iddm" id="">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="'.$id.'" name="">'.$name.'</option>';
                    }
                    ?>
                </select>
               </div>
                <div class="row mb10">
                    Tên sản phẩm <br>
                <input type="text" name="tensp" id="">
                </div>
                <div class="row mb10">
                    Giá <br>
                <input type="text" name="giasp" id="">
                </div>
                <div class="row mb10">
                    Hình <br>
                    <input type="file" name="hinh" id="">
                </div>
                <div class="row mb10">
                    Mô tả <br>
                    <textarea name="mota" id="" cols="30" rows="10"></textarea>
                </div>
            
                <div class="row mb10">
                    <input type="submit" name="themmoi" value="Them Moi">
                    <input type="reset" value="Nhap Lai">
                    <a href="index.php?act=listsp"><input type="button" value="Danh Sach"></a>
                </div>
            <?php 
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
            </form>
           </div>
        </div>
        </div>