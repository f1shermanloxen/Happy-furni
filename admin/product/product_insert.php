<?php
include "../layouts/header.php";
include "../layouts/slider.php";
include "../database.php";
include "../class/product_class.php";
?>

<?php
$product = new product;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // var_dump($_POST,$_FILES);
    $insert_product = $product->insert_product($_POST, $_FILES);
}
?>
<style>
    select {
        display: block;
        font-size: 20px;
        padding: 4px 10px;
        outline: none;
        border: 3px solid var(--light-btn);
        margin-bottom: 10px;
        min-width: 210px;
    }

    form>div {
        font-size: 20px;
        margin-bottom: 4px;
    }

    form>input {
        display: block;
        margin-bottom: 10px;
    }

    form>textarea {
        display: block;
        padding: 10px 20px;
        width: 500px;
        border: 2px solid #ccc;
        margin-bottom: 10px;
    }
</style>
<div class="right-contents">
    <div class="right-contents-item right-contents-product_insert">
        <h1>Thêm sản phẩm</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Nhập tên sản phẩm <span style="color: red;">*</span></label>
            <input name="product_name" required type="text">
            <label for="">Chọn danh mục <span style="color: red;">*</span></label>
            <select name="category_id" id="">
                <option value="#">----Chọn----</option>
                <?php
                $show_category = $product->show_category();
                if ($show_category) {
                    while ($result = $show_category->fetch_assoc()) {
                ?>
                        <option value="<?php echo $result['category_id'] ?>"><?php echo $result['category_name'] ?></option>
                <?php
                    }
                }
                ?>
            </select>
            <label for="">Chọn loại sản phẩm <span style="color: red;">*</span></label>
            <select name="brand_id" id="">
                <option value="#">----Chọn----</option>
                <?php
                $show_brand = $product->show_brand();
                if ($show_brand) {
                    while ($result = $show_brand->fetch_assoc()) {
                ?>
                        <option value="<?php echo $result['brand_id'] ?>"><?php echo $result['brand_name'] ?></option>
                <?php
                    }
                }
                ?>
            </select>
            <label for="">Giá sản phẩm <span style="color: red;">*</span></label>
            <input name="product_price" required type="text">
            <label for="">Giá khuyến mãi <span style="color: red;">*</span></label>
            <input name="product_price_new" required type="text">
            <label for="">Mô tả sản phẩm <span style="color: red;">*</span></label>
            <textarea required name="product_desc" id="editor1" cols="30" rows="10" placeholder="Mô tả sản phẩm"></textarea>
            <label for="">Ảnh sản phẩm <span style="color: red;">*</span></label>
            <input name="product_img" required type="file">
            <label for="">Ảnh mô tả <span style="color: red;">*</span></label>
            <input name="product_img_desc[]" required multiple type="file">
            <button class="btn" type="submit">Thêm</button>
        </form>
    </div>
</div>
</section>
</body>
</html>