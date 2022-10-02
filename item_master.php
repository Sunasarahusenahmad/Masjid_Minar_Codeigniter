<div class="container mt-5 bg-light rounded-3 pb-5 w-50 mx-auto">

    <?php
    if (session()->getFlashdata('status')) {
    ?>
        <div class="alert alert-success" role="alert">
            <?php
            echo "<center>" . session()->getFlashdata('status') . "</center>";
            ?>
        </div>
    <?php
    }
    ?>

    <h1 class="text-center text-info pt-5 pb-5" style="font-family: 'Josefin Sans', sans-serif;">Add The Items</h1>

    <form action="<?= base_url('item_store') ?>" method="POST" enctype="multipart/form-data">

        <div class="mt-3">

            <label class="form-label">🖊 Category Name</label>
            <select class="form-control rounded-0" name="category_id">

                <?php foreach ($category_master as $row) : ?>
                    <option value="<?= $row['id'] ?>"><?= $row['category_name'] ?></option>
                <?php endforeach; ?>

            </select>
        </div>

        <div class="mt-3">
            <label class="form-label">➕ Add Item</label>
            <input type="text" name="item_name" class="form-control rounded-0" required>
        </div>

        <div class="mt-3">
            <label class="form-label">🖼 Item Image</label>
            <input type="file" name="item_image" class="form-control rounded-0">
        </div>

        <div class="form-floating mt-3">
            <label for="floatingTextarea">✏ Remarks</label>
            <textarea class="form-control rounded-0" name="editor1"></textarea>
        </div>

        <div class="mx-auto w-50 mt-3 mb-3">
            <button class="btn btn-info rounded-0 w-100" type="submit" name="submit">Submit</button>
        </div>

    </form>

</div>

<script src="https://cdn.ckeditor.com/4.19.1/full/ckeditor.js"></script>

<script>
    CKEDITOR.replace('editor1');
</script>