<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare Tools</title>
    <link rel="stylesheet" href="{{ asset('assets/css/calculator.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/main.js') }}">
    <script type="text/javascript" src="{{URL::asset('assets/js/main.js')}}"></script>
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
    <div class="content">
        @yield('content')

    </div>



    <div class="b-row" style="margin: 25px auto 20px auto">
        <div class="half-box">
          <h3>CURRENT LIGHT BULB</h3>
          <form>
            <div class="gray-background">
              <button><</button>
              <input id="ExistingValue" class="small-box" onchange="calc()" onKeyPress="return noenter()" type="number" name="existingWatts" min="0" pattern="[0-9.]*" placeholder="-"></input>
            <button>></button>
              <p>watts</p>
              <select id="CurrentBulbSelect" onchange="calc()">
                  <option value="incandescent" selected>Incandescent</option>
                  <option value="highpressure">High Pressure Sodium</option>
                <option value="metalhalide">Metal Halide</option>
                <option value="fluorescent">Fluorescent</option>
                <option value="halogen">Halogen</option>
                <option value="cfl">CFL</option>
                <option value="hid">HID</option>
                <option value="led">LED</option>
              </select>
            </div><br><!--/ END OF GRAY BOX /-->
            <div style="padding-bottom: 25px; border-bottom: 1px solid lightgray;">
              <i class="fa fa-bolt"></i><p>Total Wattage</p><p id="ExistingWatts" class="small-box total-watts">0</p><p id="exBall">watts</p>
            </div>
          <div id="CurrentBulb" class="incandescent" onchange="showCurrentBulb()" onKeyPress="return noenter()"></div>
        
          </form>
        </div><!--/ END OF HALF BOX / -->
        <div class="half-box">
          <h3>REPLACEMENT LIGHT BULB</h3>
          <form>
            <div class="gray-background">
              <button><</button>
            <input id="ProposedValue" class="small-box" onchange="calc()" onKeyPress="return noenter()" type="number" name="proposedWatts" min="0" placeholder="0"></input>
            <button>></button>
              <p>watts</p>
              <select id="NewBulbSelect" onchange="calc()">
                  <option value="incandescent" selected>Incandescent</option>
                  <option value="highpressure">High Pressure Sodium</option>
                <option value="metalhalide">Metal Halide</option>
                <option value="fluorescent">Fluorescent</option>
                <option value="halogen">Halogen</option>
                <option value="cfl">CFL</option>
                <option value="hid">HID</option>
                <option value="led">LED</option>
               </select>
            </div><br><!--/ END OF GRAY BOX /-->
            <div style="padding-bottom: 25px;border-bottom: 1px solid lightgray;">
              <i class="fa fa-bolt"></i><p>Total Wattage</p><p id="ProposedWatts" class="small-box total-watts">0</p><p id="propBall">watts</p>
            </div> 
          <div id="NewBulb" class="led" onchange="showNewBulb()" onKeyPress="return noenter()"><a href=""></a></div>
          </form>
        </div><!--/ END OF HALF BOX /-->
      </div><!--/ END OF ROW /-->
    <div class="b-row">
      <!--<div id="CurrentBulb" class="incandescent" onchange="showCurrentBulb()" onKeyPress="return noenter()"></div>
      <div id="NewBulb" class="led" onchange="showNewBulb()" onKeyPress="return noenter()"><a href=""></a></div>-->
    </div>
        <div class="full-box b-row">
          <h3 class="gray-background energy-title">ENERGY<br>USE</h3>
          <div>
            <div class="energy-use">
              <i class="fa fa-lightbulb-o"></i><p>Total Quantity</p><input id="TotalQuantity" class="small-box" type="number" onchange="calc()" name="totalQuantity" placeholder="0"></input><p>units</p>
            </div>
            <div class="energy-use">
              <i class="fa fa-dollar"></i><p>Electricity Cost</p><input id="ElectricityCost" class="small-box" name="electricityCost" onchange="calc()" /><p>&cent; kwh</p>
            </div>
          </div>
          <div>
            <div class="energy-use">
              <i class="fa fa-clock-o"></i><p>Hours Used</p><input id="HoursUsed" class="small-box" onchange="calc()" type="number" name="hoursUsed" placeholder="0"></input><p>hours/ day</p>
            </div>
            <div class="energy-use">
              <i class="fa fa-calendar"></i><p>Days Used</p><input id="DaysUsed" class="small-box" type="number" name="daysUsed" onchange="calc()" placeholder="0"></input><p>days/ week</p>
            </div>
          </div>
        </div><!--/ END OF FULL BOX ROW /-->
      <div class="b-row full-box" style="margin-top: 20px;">
        <h3 style="width: 100%">COMPARE SAVINGS</h3>
      </div>
      <div class="b-row" style="margin-top: 20px;">
        <div class="three-box">
          <div class="gray-background" style="padding: 10px;">
            <p>Annual Energy Costs</p><br>
            <p>(Current Bulb)</p>
          </div>
          <h1 id="CurrentCost" style="padding: 25px;">$0.00</h1>
        </div>
        <div class="three-box">
          <div class="gray-background" style="padding: 10px;">
            <p>Annual Energy Costs</p><br>
            <p>(New Bulb)</p>
          </div>
          <h1 id="NewCost" style="padding: 25px;">$0.00</h1>
        </div>
        <div class="three-box">
          <div class="gray-background" style="padding: 10px;">
            <p id="SaveLost">Amount Saved by</p><br>
            <p>Changing Bulb</p>
          </div>
          <h1 id="Savings" style="padding: 25px;">$0.00</h1>
        </div>
      </div>
      <div class="b-row" style="margin-top: 20px; background-color: #7db748;border: solid black; padding: 15px 0;">
        <div class="">
          <p style="color: white; font-weight: bold;">Cost per bulb: $</p> <input id="PropCost" class="small-box" type="number" onchange="calc()" name="propCost" placeholder="0"></input>
        </div>
        <div class="" style="margin-top: 8px;">
          <p style="color: white; font-weight: bold;">Total Cost: $ </p> <p id="TotalCost" class="small-box total-watts" style="background-color: white;">0</p>
        </div>
  
      </div>
    <div class="return-box">
          <p style="color: black; margin: auto;">Return on Investment: </p> <p id="ReturnInv" class="small-box total-watts" style="background-color: white;">0</p><p style="color: black; margin: auto;"> months</p>
       </div> 
  



<script>
    const electricalCost = document.getElementById('ElectricityCost');
    const options = {
        method: 'GET',
        headers: {
            accept: 'application/json',
            'x-api-key': 'bIX172VA3uj8ODtM107C4eODbSpA0su1D7Id46Ca'
        }
    };

    fetch('https://apis.wattbuy.com/v3/electricity/estimation?zip=10001', options)
        .then(response => response.json())
        .then(response => {
            console.log(response.avg_cost);
            electricalCost.value = response.avg_cost;
        })
        .catch(err => console.error(err));
</script>
    

       

</body>
</html>