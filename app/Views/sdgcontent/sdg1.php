<?= $this->extend("layout/master") ?>
<?= $this->section("body-contents")?>
<div class="container-xxl bg-sdg1 " style="height:400px;">
    <div class="row justify-content-center">
        <div class="co-md-5 text-center text-md-start text-light ps-5">
            <h1>
                <div class="display-5 mt-5 f2-bold text-gray" style="font-family:'Oswald', sans-serif;">Goal</div>
                <div class="display-5 f2-bold">1</div>
                <div class="display-3 line-break fw-bold" style="margin-top:80px">End Poverty in all its 
                forms everywhere</div>
            </h1>
        </div>
    </div>
</div>
<div class="container-lg bg-secondary justify-content-center  fs-5 pt-3 pb-2">
<ul class="nav nav-pills " id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active text-light fw-light" style="letter-spacing :2px;" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Overview</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link text-light fw-light" style="letter-spacing :2px;" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Target</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link text-light fw-light" style="letter-spacing :2px;" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Progress and Info</button>
  </li>
</ul>
</div>
<div class="tab-content container-lg justify-content-center" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit
. Excepturi magnam alias ipsam quod repellat, numquam minima totam corporis deleniti iusto nostrum tempore placeat velit ratione ea doloribus, facere id sint.</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur modi similique nobis, eaque doloribus, dolorem odit, voluptas perferendis id provident saepe 
    dicta minus fuga. Aperiam quo ipsum error vitae exercitationem?
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam, dignissimos vel sapiente at cumque repellat numquam consectetur laboriosam. Atque autem provident, d
    ucimus numquam dolore dolorem! Repellendus earum dolor officil
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam, dignissimos vel sapiente at cumque repellat numquam consectetur laboriosam. Atque autem provident, d
    ucimus numquam dolore dolorem! Repellendus earum dolor officil
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam, dignissimos vel sapiente at cumque repellat numquam consectetur laboriosam. Atque autem provident, d
    ucimus numquam dolore dolorem! Repellendus earum dolor officil.
  </div>
</div>
<?= $this->endSection()?>