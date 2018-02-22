<?php include "header.php";?>
<?php include "slider.php";?>
<div class="container">
        <div class="linehead">
            <h3>Vegetables</h3>
        </div>
    </div>
<div class="container">
  <div class="row">
       <?php foreach($view_data as $key => $data) {?>
          <div class="col-md-3">
            <div class="thumbnail">
              <a href="<?= base_url() ?>FrontEnd/detail/<?php echo $data['id']; ?>">
                <img src="<?php echo base_url(); ?>/asset/img/Img_index/<?php echo $data['img_thumbnail']; ?>" alt="Lights" style="width:356px;height: 228px" class="img-responsive affected_img">
                      <div class="overlay">
                        <p class="t1" >Detail</p>
                      </div>
              </a>
            </div>
            <div class="caption">
                  <h4><?php echo $data['pname_kh']; ?></h4>
            </div>
          </div>
      <?php }?>
  </div>
</div>

<?php include"footer.php";?>
         <!--  <div class="col-md-3">
            <div class="thumbnail">
              <a href="<?= base_url() ?>index.php/FrontEnd/detail">
                <img src="<?= base_url() ?>asset/img/Vegetable/sbei.jpg" alt="Nature" style="width:356px;height: 228px">
              </a>
            </div>
            <div class="caption">
                  <h4>ត្រសក់ 4000/kg</h4>
                </div>
          </div>
          <div class="col-md-3">
            <div class="thumbnail">
              <a href="<?= base_url() ?>index.php/FrontEnd/detail">
                <img src="<?= base_url() ?>asset/img/Vegetable/Corriandor.jpg" alt="Fjords" style="width:356px;height: 228px">
              </a>
            </div>
            <div class="caption">
                  <h4>ត្រសក់ 4000/kg</h4>
            </div>
          </div>
          <div class="col-md-3">
            <div class="thumbnail">
              <a href="<?= base_url() ?>index.php/FrontEnd/detail">
                <img src="<?= base_url() ?>asset/img/Vegetable/Malabar Spinach.png" alt="Fjords" style="width:356px;height: 228px">
              </a>
            </div>
            <div class="caption">
                  <h4>ត្រសក់ 4000/kg</h4>
            </div>
          </div>
    </div>

    <div class="row">
          <div class="col-md-3">
            <div class="thumbnail">
              <a href="<?= base_url() ?>index.php/FrontEnd/detail">
                <img src="<?= base_url() ?>asset/img/Vegetable/Rice paddy herb.png" alt="Lights" style="width:356px;height: 228px">
              </a>
            </div>
            <div class="caption">
                  <h4>ត្រសក់ 4000/kg</h4>
                </div>
            </div>
          <div class="col-md-3">
            <div class="thumbnail">
              <a href="<?= base_url() ?>index.php/FrontEnd/detail">
                <img src="<?= base_url() ?>asset/img/Vegetable/Watercress.png" alt="Nature" style="width:356px;height: 228px">
              </a>
            </div>
            <div class="caption">
                  <h4>ត្រសក់ 4000/kg</h4>
                </div>
          </div>
          <div class="col-md-3">
            <div class="thumbnail">
              <a href="<?= base_url() ?>index.php/FrontEnd/detail">
                <img src="<?= base_url() ?>asset/img/Vegetable/sei2.jpg" alt="Fjords" style="width:356px;height: 228px">
              </a>
            </div>
            <div class="caption">
                  <h4>ត្រសក់ 4000/kg</h4>
            </div>
          </div>
          <div class="col-md-3">
            <div class="thumbnail">
              <a href="<?= base_url() ?>index.php/FrontEnd/detail">
                <img src="<?= base_url() ?>asset/img/Vegetable/Malabar Spinach.png" alt="Fjords" style="width:356px;height: 228px">
              </a>
            </div>
            <div class="caption">
                  <h4>ត្រសក់ 4000/kg</h4>
            </div>
            </div>
          </div> -->
  
<!-- <div class="container">
    <div class="row">
          <div class="col-md-3">
            <div class="thumbnail">
              <a href="<?= base_url() ?>index.php/FrontEnd/detail">
                <img src="<?= base_url() ?>asset/img/Vegetable/Rice paddy herb.png" alt="Lights" style="width:356px;height: 228px">
              </a>
            </div>
            <div class="caption">
                  <h4>ត្រសក់ 4000/kg</h4>
                </div>
            </div>
          <div class="col-md-3">
            <div class="thumbnail">
              <a href="<?= base_url() ?>index.php/FrontEnd/detail">
                <img src="<?= base_url() ?>asset/img/Vegetable/image1.jpg" alt="Nature" style="width:356px;height: 228px">
              </a>
            </div>
            <div class="caption">
                  <h4>ត្រសក់ 4000/kg</h4>
                </div>
          </div>
          <div class="col-md-3">
            <div class="thumbnail">
              <a href="<?= base_url() ?>index.php/FrontEnd/detail">
                <img src="<?= base_url() ?>asset/img/Vegetable/Lemongrass1.jpg" alt="Fjords" style="width:356px;height: 228px">
              </a>
            </div>
            <div class="caption">
                  <h4>ត្រសក់ 4000/kg</h4>
            </div>
          </div>
          <div class="col-md-3">
            <div class="thumbnail">
              <a href="<?= base_url() ?>index.php/FrontEnd/detail">
                <img src="<?= base_url() ?>asset/img/Vegetable/Malabar Spinach.png" alt="Fjords" style="width:356px;height: 228px">
              </a>
            </div>
            <div class="caption">
                  <h4>ត្រសក់ 4000/kg</h4>
            </div>
            </div>
          </div>
    </div>
</div>

<div class="container">
    <div class="row">
          <div class="col-md-3">
            <div class="thumbnail">
              <a href="/w3images/lights.jpg">
                <img src="<?= base_url() ?>asset/img/Vegetable/bektleay.jpg" alt="Lights" style="width:356px;height: 228px">
              </a>
            </div>
            <div class="caption">
                  <h4>ត្រសក់ 4000/kg</h4>
                </div>
            </div>
          <div class="col-md-3">
            <div class="thumbnail">
              <a href="/w3images/nature.jpg">
                <img src="<?= base_url() ?>asset/img/Vegetable/sbei.jpg" alt="Nature" style="width:356px;height: 228px">
              </a>
            </div>
            <div class="caption">
                  <h4>ត្រសក់ 4000/kg</h4>
                </div>
          </div>
          <div class="col-md-3">
            <div class="thumbnail">
              <a href="/w3images/fjords.jpg">
                <img src="<?= base_url() ?>asset/img/Vegetable/Corriandor.jpg" alt="Fjords" style="width:356px;height: 228px">
              </a>
            </div>
            <div class="caption">
                  <h4>ត្រសក់ 4000/kg</h4>
            </div>
          </div>
          <div class="col-md-3">
            <div class="thumbnail">
              <a href="/w3images/fjords.jpg">
                <img src="<?= base_url() ?>asset/img/Vegetable/Malabar Spinach.png" alt="Fjords" style="width:356px;height: 228px">
              </a>
            </div>
            <div class="caption">
                  <h4>ត្រសក់ 4000/kg</h4>
            </div>
          </div>
    </div>

    <div class="row">
          <div class="col-md-3">
            <div class="thumbnail">
              <a href="/w3images/lights.jpg">
                <img src="<?= base_url() ?>asset/img/Vegetable/Rice paddy herb.png" alt="Lights" style="width:356px;height: 228px">
              </a>
            </div>
            <div class="caption">
                  <h4>ត្រសក់ 4000/kg</h4>
                </div>
            </div>
          <div class="col-md-3">
            <div class="thumbnail">
              <a href="/w3images/nature.jpg">
                <img src="<?= base_url() ?>asset/img/Vegetable/Watercress.png" alt="Nature" style="width:356px;height: 228px">
              </a>
            </div>
            <div class="caption">
                  <h4>ត្រសក់ 4000/kg</h4>
                </div>
          </div>
          <div class="col-md-3">
            <div class="thumbnail">
              <a href="/w3images/fjords.jpg">
                <img src="<?= base_url() ?>asset/img/Vegetable/sei2.jpg" alt="Fjords" style="width:356px;height: 228px">
              </a>
            </div>
            <div class="caption">
                  <h4>ត្រសក់ 4000/kg</h4>
            </div>
          </div>
          <div class="col-md-3">
            <div class="thumbnail">
              <a href="/w3images/fjords.jpg">
                <img src="<?= base_url() ?>asset/img/Vegetable/Malabar Spinach.png" alt="Fjords" style="width:356px;height: 228px">
              </a>
            </div>
            <div class="caption">
                  <h4>ត្រសក់ 4000/kg</h4>
            </div>
            </div>
          </div>
    </div> -->



