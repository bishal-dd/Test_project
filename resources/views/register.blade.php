<!DOCTYPE html>
<html>
@include('common.css')
<body>
<!-- contact section start -->
<div class="contact_section layout_padding">
  <div class="container">
     <h1 class="contact_text">Registration</h1>
  </div>
</div>
<div class="contact_section_2 layout_padding">
  <div class="container-fluid">
     <div class="row">
        <div class="col-md-6 padding_0">
           <div class="mail_section">
              <div class="email_text">
                <form action="/register_new_user" class="form-container" method="post">
                  @csrf
                 <div class="form-group">
                    <input type="text" class="email-bt" placeholder="Name" name="full_name">
                 </div>
                 <div class="form-group">
                    <input type="text" class="email-bt" placeholder="Email" name="email">
                 </div>
                 <div class="form-group">
                  <input type="number" class="email-bt" placeholder="Number" name="contact_no">
               </div>
                 <div class="form-group">
                 
                  <select class="email-bt" name="role">
                    @foreach ($response as $i => $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                  </select>
                 </div>
                 <div class="form-group">
                    <input type="text" class="email-bt" placeholder="Password" name="password">
                 </div>
                
                 <div class="send_btn">
                    <div type="text" class="main_bt"><button type="submit">Submit</button></div>
                 </div>
                </form>
              </div>
           </div>
        </div>
      
     </div>
  </div>
</div>
<!-- contact section end -->



  

</body>
</html>
