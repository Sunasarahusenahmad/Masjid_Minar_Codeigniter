<div class="container mt-5 bg-light rounded-3 pb-5 w-75 mx-auto">
    <h1 class="text-center text-info pt-5 pb-5" style="font-family: 'Josefin Sans', sans-serif;">List All Item</h1>
    <div class="col-lg-12">
        <h3 class="text-center" style="font-family: 'Josefin Sans', sans-serif;">All Category</h3>

        <table class="table mt-5 border border-info">
            <thead>
                <tr class="text-info">
                    <th scope="col" class="text-center">Item ID</th>
                    <th scope="col" class="text-center">Category ID</th>
                    <th scope="col" class="text-center">Item Name</th>
                    <th scope="col" class="text-center">Item Image</th>
                    <th scope="col" class="text-center">Remarks</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php foreach ($item_master as $row) : ?>
                    <tr>
                        <td class="text-center"><?= $row['item_id'] ?></td>
                        <td class="text-center"><?= $row['category_id'] ?></td>
                        <td class="text-center"><?= $row['item_name'] ?></td>
                        <td class="text-center"><img src="upload/<?= $row['item_image'] ?>" height="100" width="100" style="border-radius: 50%;"></td>
                        <td class="text-center"><?= $row['editor1'] ?></td>
                    <?php endforeach; ?>
                    </tr>
            </tbody>
        </table>
    </div>
</div>