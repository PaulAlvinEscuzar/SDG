<?= $this->extend("layout/adminMaster"); ?>
<?= $this->section("body-contents"); ?>

<div class="container mt-5">
    <div class="row-mt-5">
        <div class="col-lg-4 bg-white m-auto border border-danger-subtle mt-5 p-4">
            <h2 class="text-center pt-3">Add Research</h2>
            <h2 class="text-center pb-5">Research on health and wellbeing</h2>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                    <input type="text" class="form-control" placeholder="Title of the Research" name="title">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                    <input type="text" class="form-control" placeholder="Author" name="author">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                    <input type="text" class="form-control" placeholder="Year of Publication" name="year_pub">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Total Number of clinical citations"
                        name="no_clinical">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-building"></i></span>
                    <input type="text" class="form-control" placeholder="Total Number of Citations" name="no_citations">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success" name="submit">Add Research</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>