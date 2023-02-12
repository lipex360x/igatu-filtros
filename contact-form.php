<h4>Contact Us</h4> 
 
 <div id="success_message" class="alert alert-success "></div>
    <form id="enquiry">
    <input type="hidden" name="subject" value="<?php  the_title();?>"  >
 
  <div class=" form-group row"   >
    <div class="col" >
      <input type="text" name="name" class="form-control" placeholder=" Your Name " required="true">
    </div>
    <div class="col" >
      <input type="email" name="email" class="form-control" placeholder="Your Email" required="true">
    </div>
  </div>
  <div class="row" >
     
    <div class="col" >
<textarea class="form-control" name=" message" id="exampleFormControlTextarea1" rows="3" required="true">  </textarea>
 
    </div>
  </div><br>
      <button type="submit" class="btn btn-primary btn-block" >Send Now</button>
</form>