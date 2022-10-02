<div class="container mt-5 bg-light rounded-3 pb-5">
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
    <h1 class="text-center text-info pt-5">Category Master</h1>
    <!-- <p class="text-info" style="border: 10px solid;"> </p> -->
    <div class="row pt-5">
        <div class="col-lg-6">
            <h3 class="text-center" style="font-family: 'Josefin Sans', sans-serif;">All Category</h3>

            <table class="table mt-5 border border-info">
                <thead>
                    <tr class="text-info">
                        <th scope="col" class="text-center">Category ID</th>
                        <th scope="col" class="text-center">Category Name</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php foreach ($category_master as $row) : ?>
                        <tr>
                            <td class="text-center"><?= $row['id'] ?></td>
                            <td class="text-center"><?= $row['category_name'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="col-lg-6">
            <h3 class="text-center" style="font-family: 'Josefin Sans', sans-serif;">Add Category</h3>

            <form action="<?= base_url('store') ?>" method="POST">
                <div class="mt-5">
                    <label class="form-label">➕ Add Category</label>
                    <input type="text" name="category_name" class="form-control rounded-0" required>
                </div>

                <div class="mx-auto w-50 mt-3 mb-3">
                    <button class="btn btn-info rounded-0 w-100" type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>