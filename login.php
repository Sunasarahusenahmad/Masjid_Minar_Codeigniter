<div class="container mt-5 bg-light rounded-3 pb-5 w-75 mx-auto">
    <h1 class="text-center text-info pt-5 pb-5" style="font-family: 'Josefin Sans', sans-serif;">Login Form</h1>

    <form action="<?= base_url('login') ?>">

        <div class="col-lg-6 mx-auto">
            <div class="mt-3">
                <label class="form-label">🖋 Username</label>
                <input type="text" name="item_name" class="form-control rounded-0" required>
            </div>

            <div class="mt-3">
                <label class="form-label">🔑 Password</label>
                <input type="text" name="item_id" class="form-control rounded-0" required>
            </div>

            <div class="mx-auto w-50 mt-3 mb-3">
                <button class="btn btn-info rounded-0 w-100" type="submit" name="submit">Submit</button>
            </div>
        </div>

    </form>

</div>