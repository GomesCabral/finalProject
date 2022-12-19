<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/questions.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nav.css') }}">
    
   

</head>
<body>

    <div class="nav" style="justify-content: space-between">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
            <div class="nav-title">
                <a class="logo" href="/">EnliTe</a>
            </div>
        </div>
        <div class="nav-btn">
            <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>

        <div class="nav-links">
            <a href="/store">Store</a>
            @if (session('isAdmin'))
            <a href="/users">Users list</a>
            <a href="/createTool">Create Tool</a>
            <a href="/admin-profile">Admin Profile</a>
            @endif
            @if (session('user_id'))
            <a href="/profile">Profile</a>
            <a href="/calculator">Energy Calculator</a>
            <!--<a href="/edit-profile">Edit Profile</a>-->
            <!--<a href="/addPersonalTool">add new personal Tool</a>-->
            <a href="/forum">Forum</a>
            <a href="/createPost">Create Post</a>
            <!--<a href="/personalTools">Personal Tools list</a>-->
            <a href="/logout">Logout</a>
            @else
            <a href="/register">Register</a>
            <a href="/admin-login">Admin Login</a>
            <a href="/login">Login</a>
            @endif
        </div>
    </div>
    
        <main>
          
          <div class="position-form-container">     
         <div class="form-container"> 
           
               <h1 id="title">Energy Usage Survey</h1>
          <p id="description">
             This survey is for research on consumer energy consumption behaviours
          </p>
           <hr>
           
           
        <form action="" method="POST" id="survey-form">
            @csrf
            <p>
                <div class="question"><label for="number" id="number-label">Your total monthly energy bill is approximately</label></div>
                  <input type="number" name="electricity-bill" class="keyboard-input" placeholder=" €" id="number" min="0" max="4000" required>
                </p>

                <p>
                    <div class="question"> How do you heat your home?</div>
                    <input type="checkbox" name="heating" id="gas" value="Gas"> 
                    <label for="gas">Gas</label>
                    
                    <input type="checkbox" name="heating" id="electric" value="Electric">
                    <label for="electric">Electricity</label>
                    
                    <input type="checkbox" name="heating" id="open-fire" value="Open fire"> 
                    <label for="open-fire">Open fire</label>
                    
                  </p>
       
          <div class="question"><label for="household-members">Members in your household</label></div>
            <select id="dropdown" id="household-members"> 
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7+">7+</option>
            </select>
            
          <p>
            <div class="question"><label for="window-number">Number of Windows</label></div>
            <select id="dropdown" id="window-number"> 
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7+">7+</option>
            </select>
            
          <p>
          <div class="question">Do you leave electronics on standby or switch them off?</div>
            <input type="radio" name="electronics" value="Standby" id="standby">
            <label for="standby">Standby</label>
            <input type="radio" name="electronics" value="Switch Off" id="switch-off">
            <label for="switch-off">Switch off</label>
            </p>  
       
          
            <p>
            <div class="question">Do you have solar panels at home?</div>
            <input type="radio" name="solar" value="Yes" id="yes">
            <label for="off">Yes</label>
            <input type="radio" name="solar" value="No" id="no">
            <label for="on">No</label>    
            </p>
              
    
         
        
        <p>
        <div class="question">
          <label for="additional">Additional comments</label>
        </div>
         <textarea id="additional"></textarea>
        
        </p>  
          
          
        <p>
          <input type="submit" name="submit" id="submit" value="Submit">
        </p>  
        <p>
          <a style="font-size:20px; border-radius:7px;;" href="/profile">Skip</a>
        </p>  
        
        </form>
        </div> <!-- END FORM CONTAINER -->  
        </div> <!-- END POSITION FORM CONTAINER -->  
        </main>   
        
       
        
        
        
</body>
</html>