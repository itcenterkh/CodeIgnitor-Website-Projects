<?php include "header.php";?>
<div class="container">
  <div class="row">
  <div class="col-md-12">
    <div class="divider">
      <div class="line"></div>
      <h2 style="font-size: 20px;">Contact Us</h2>
  </div>
  </div>
  </div>
  <br/>
    <!-- =========map======= -->

  <div class="row">
    <div class="col-md-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d250151.45210874153!2d104.75009695844476!3d11.579330573127228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109513dc76a6be3%3A0x9c010ee85ab525bb!2sPhnom+Penh!5e0!3m2!1sen!2skh!4v1504169397384" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe> 
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
          <div class="contain">
            <div class="col-md-6">
              <h3>Contact Information</h3>
              <blockquote>
              <h4>Address:Phnom Penh Tmey Phnom Penh</h4><br/>
              <h4>Tel:012 345 678</h4><br/>
              <h4>Email:khmerfresh@gmail.com</h4>
              </blockquote>
                <h3>Get Social</h3>
                <blockquote>
                <a href="#"><img src="<?= base_url() ?>asset/img/logo/facebook.png" style="width: 32px;height: 32px;"></a>
                <a href="#"><img src="<?= base_url() ?>asset/img/logo/google.png" style="width: 32px;height: 32px;"></a>
              </blockquote>               
            </div>
            <div class="col-md-6">
              <h3>Get In Touch with Us</h3>
              <form class="form-horizontal" action="" method="post">
          <fieldset>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
             <div class="col-md-12 text-right">
              <div class="form-group">
               <button type="submit" class="btn btn-info">Send <span class="glyphicon glyphicon-send" style="color: #FFFFFF;"></span></button>
              </div>
            </div>
          </fieldset>
          </form>
            </div>
          </div>

        </div>
    </div>    
</div>
<?php include "footer.php";?>
