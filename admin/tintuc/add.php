<header class="row">
    <h4 class="alert alert-info">Thêm mới tin tức</h4>
    <form id="addNewsForm" action="index.php?act=addtintuc" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="iddm" class="form-label">Danh mục tin tức</label>
            <select class="form-control" name="iddm" id="iddm">
                <?php foreach ($listdanhmuc as $danhmuc) : ?>
                    <?php extract($danhmuc); ?>
                    <option value="<?= $id_danhmuc ?>"><?= $ten_danhmuc ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="tieude" class="form-label">Tiêu đề</label>
            <input type="text" class="form-control" id="tieude" name="tieude">
        </div>
        <div class="mb-3">
            <label for="noidung" class="form-label">Nội dung</label>
            <textarea class="form-control" id="noidung" name="noidung"></textarea>
        </div>
        <div class="mb-3">
            <label for="hinh" class="form-label">Hình ảnh</label>
            <input type="file" class="form-control" id="hinh" name="hinh">
        </div>
        <br>
        <input type="submit" class="btn btn-primary" name="themmoi" value="Thêm mới">
        <a href="index.php?act=listtintuc"> <button type="button" class="btn btn-primary">Danh sách</button></a>
        <div id="error-message" class="thong-bao" style="display: none;"></div>
    </form>
</header>

<script>
    document.getElementById("addNewsForm").addEventListener("submit", function(event) {
        var tieude = document.getElementById("tieude").value.trim();
        var noidung = document.getElementById("noidung").value.trim();

        if (tieude === "" || noidung === "") {
            event.preventDefault();
            document.getElementById("error-message").innerText = "Vui lòng điền đầy đủ thông tin";
            document.getElementById("error-message").style.display = "block";
        }
    });
</script>