<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

.form-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0 auto;
  border: 1px solid #ccc;
  width: 80%;
  max-width: 400px;
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form action="/update_role" class="form-container" method="post">'
  @csrf
  <div class="container">
    <h1>Edit Role Management</h1>
    <hr>

    <label for="role_name"><b>Role Name</b></label>
    <input type="text" placeholder="Enter Role" name="role_name" id="role_name"  value="{{$data->name}}">
    <input type="hidden"  name="record_id" id="record_id"  value="{{$data->id}}">
    <input type="hidden"  id="status_id"  value="{{$data->status}}">

    <label for="status1"><b>Status</b></label>
    <input type="radio"  value="Active" id="status1"  name="status" required>Active
    <input type="radio"  value="Inactive" id="status2"  name="status" required>Inactive
    <script>
        
        if(document.getElementById('status_id').value === 'Active')
        {
            document.getElementById('status1').checked = true;
        }
        else{
            document.getElementById('status2').checked = true;
        }
    </script>
    <div class="clearfix ">
      <button type="reset" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Edit</button>
    </div>
  </div>
</form>

</body>
</html>
