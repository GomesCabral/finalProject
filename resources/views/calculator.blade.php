<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="{{ asset('assets/css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/main.js') }}">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <script type="text/javascript" src="{{ URL::asset('assets/js/Chart.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/script.js') }}"></script>
    <!-- <script src="showChart.js"></script> -->

    <link rel="stylesheet" href="{{ asset('assets/css/abc.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tablec.css') }}">
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

    <section id="scroll">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid rounded-circle"
                            src="{{ asset('assets/images/worried.png') }}" alt="..." /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">No more worries about your energy bill </h2>
                        <p> Electricity bill calculator is developed by Enlite To make your life easier it helps you to
                            estimate your monthly electricity bill also analyze about what usage you should decrease and
                            helps you to become more Eco-friendly towards mother nature</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div style="display: flex; justify-content: center; ">
        <label for="elcCost">
            <h4>Rate of electricity in your area (per kilowatt)</h4>
        </label>
        <input type="number" name="" id="elRate">
    </div>
    <br>
    <br>


    <table class="dcf-table dcf-table-responsive dcf-table-striped dcf-w-100% rwd-table">
        <caption>Electricity bill calculator</caption>
        <thead>
            <tr>
                <th class="dcf-txt-center" scope="col">Name of appliance</th>
                <th class="dcf-txt-center" scope="col">No. of appliance BEING USED</th>
                <th class="dcf-txt-center" scope="col">No. of hours/Day</th>
                <th class="dcf-txt-center" scope="col">Total Power / day (Kw)</th>
                <th class="dcf-txt-center" scope="col">Total power consumed / Month (Kw)</th>
                <th class="dcf-txt-center" scope="col">Money spent</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th class="dcf-txt-center" scope="row">A/c</th>
                <td class="dcf-txt-center" data-label="No. of appliance BEING USED"><span><input type="number"
                            name="" id="ac"></span></td>
                <td class="dcf-txt-center" data-label="No. of hours/Day"><span><input type="number" name=""
                            id="acHour"></span></td>
                <td class="dcf-txt-center" data-label="Total Power / day (Kw)"id="acday"></td>
                <td class="dcf-txt-center" data-label="Total power consumed / Month (Kw)"id="acMonth"></td>
                <td class="dcf-txt-center" data-label="Money spent" id="acmnSpnt"></td>
            </tr>
            <tr>
                <th class="dcf-txt-center" scope="row">Tv</th>
                <td class="dcf-txt-center" data-label="No. of appliance BEING USED"><span><input type="number"
                            name="" id="tv"></span></td>
                <td class="dcf-txt-center" data-label="No. of hours/Day"><span><input type="number" name=""
                            id="tvHour"></span></td>
                <td class="dcf-txt-center" data-label="Total Power / day (Kw)"id="tvday"></td>
                <td class="dcf-txt-center" data-label="Total power consumed / Month (Kw)"id="tvMonth"></td>
                <td class="dcf-txt-center" data-label="Money spent"id="tvmnSpnt"></td>
            </tr>
            <tr>
                <th class="dcf-txt-center" scope="row">Fridge</th>
                <td class="dcf-txt-center" data-label="No. of appliance BEING USED"><span> <input type="number"
                            name="" id="fridge"></span></td>
                <td class="dcf-txt-center" data-label="No. of hours/Day"><span><input type="number" name=""
                            id="fridgeHour"></span></td>
                <td class="dcf-txt-center" data-label="Total Power / day (Kw)"id="fridgeday"></td>
                <td class="dcf-txt-center" data-label="Total power consumed / Month (Kw)"id="fridgeMonth"></td>
                <td class="dcf-txt-center" data-label="Money spent" id="fridgemnSpnt"></td>
            </tr>
            <tr>
                <th class="dcf-txt-center" scope="row">Washing Machine</th>
                <td class="dcf-txt-center" data-label="No. of appliance BEING USED"><span><input type="number"
                            name="" id="wm"></span></td>
                <td class="dcf-txt-center" data-label="No. of hours/Day"><span><input type="number" name=""
                            id="wmHour"></span></td>
                <td class="dcf-txt-center" data-label="Total Power / day (Kw)"id="wmday"></td>
                <td class="dcf-txt-center" data-label="Total power consumed / Month (Kw)"id="wmMonth"></td>
                <td class="dcf-txt-center" data-label="Money spent"id="wmmnSpnt"></td>
            </tr>
            <tr>
                <th class="dcf-txt-center" scope="row">Geyser</th>
                <td class="dcf-txt-center" data-label="No. of appliance BEING USED"><span><input type="number"
                            name="" id="geyser"></span></td>
                <td class="dcf-txt-center" data-label="No. of hours/Day"><span><input type="number" name=""
                            id="geyserHour"></span></td>
                <td class="dcf-txt-center" data-label="Total Power / day (Kw)"id="geyserday"></td>
                <td class="dcf-txt-center" data-label="Total power consumed / Month (Kw)"id="geyserMonth"></td>
                <td class="dcf-txt-center" data-label="Money spent"id="geysermnSpnt"></td>
            </tr>
            <tr>
                <th class="dcf-txt-center" scope="row">Microwave</th>
                <td class="dcf-txt-center" data-label="No. of appliance BEING USED"><span><input type="number"
                            name="" id="micro"></span></td>
                <td class="dcf-txt-center" data-label="No. of hours/Day"><span><input type="number" name=""
                            id="microHour"></span></td>
                <td class="dcf-txt-center" data-label="Total Power / day (Kw)"id="microday"></td>
                <td class="dcf-txt-center" data-label="Total power consumed / Month (Kw)"id="microMonth"> </td>
                <td class="dcf-txt-center" data-label="Money spent"id="micromnSpnt"></td>
            </tr>
            <tr>
                <th class="dcf-txt-center" scope="row">Computer</th>
                <td class="dcf-txt-center" data-label="No. of appliance BEING USED"><span><input type="number"
                            name="" id="comp"></span></td>
                <td class="dcf-txt-center" data-label="No. of hours/Day"><span><input type="number" name=""
                            id="compHour"></span></td>
                <td class="dcf-txt-center" data-label="Total Power / day (Kw)"id="compday"></td>
                <td class="dcf-txt-center" data-label="Total power consumed / Month (Kw)"id="compMonth"></td>
                <td class="dcf-txt-center" data-label="Money spent"id="compmnSpnt"></td>
            </tr>
            <tr>
                <th class="dcf-txt-center" scope="row">LED Bulb</th>
                <td class="dcf-txt-center" data-label="No. of appliance BEING USED"><span><input type="number"
                            name="" id="blb"></span></td>
                <td class="dcf-txt-center" data-label="No. of hours/Day"><span><input type="number" name=""
                            id="blbHour"></span></td>
                <td class="dcf-txt-center" data-label="Total Power / day (Kw)"id="blbday"></td>
                <td class="dcf-txt-center" data-label="Total power consumed / Month (Kw)"id="blbMonth"></td>
                <td class="dcf-txt-center" data-label="Money spent"id="blbmnSpnt"></td>
            </tr>
            <tr>
                <th class="dcf-txt-center" scope="row">Fans </th>
                <td class="dcf-txt-center" data-label="No. of appliance BEING USED"><span><input type="number"
                            name="" id="fans"></span></td>
                <td class="dcf-txt-center" data-label="No. of hours/Day"><span><input type="number" name=""
                            id="fansHour"></span></td>
                <td class="dcf-txt-center" data-label="Total Power / day (Kw)"id="fanday"></td>
                <td class="dcf-txt-center" data-label="Total power consumed / Month (Kw)"id="fanMonth"></td>
                <td class="dcf-txt-center" data-label="Money spent"id="fanmnSpnt"></td>
            </tr>
            <tr>
                <th class="dcf-txt-center" scope="row">Induction cooker</th>
                <td class="dcf-txt-center" data-label="No. of appliance BEING USED"><span><input type="number"
                            name="" id="ic"></span></td>
                <td class="dcf-txt-center" data-label="No. of hours/Day"><span> <input type="number" name=""
                            id="icHour"></span></td>
                <td class="dcf-txt-center" data-label="Total Power / day (Kw)"id="icday"></td>
                <td class="dcf-txt-center" data-label="Total power consumed / Month (Kw)"id="icMonth"></td>
                <td class="dcf-txt-center" data-label="Money spent"id="icmnSpnt"></td>
            </tr>
            <tr>
                <th class="dcf-txt-center" scope="row">LED TubeLight</th>
                <td class="dcf-txt-center" data-label="No. of appliance BEING USED"><span><input type="number"
                            name="" id="tube"></span></td>
                <td class="dcf-txt-center" data-label="No. of hours/Day"><span><input type="number" name=""
                            id="tubeHour"></span></td>
                <td class="dcf-txt-center" data-label="Total Power / day (Kw)"id="tubeday"></td>
                <td class="dcf-txt-center" data-label="Total power consumed / Month (Kw)"id="tubeMonth"></td>
                <td class="dcf-txt-center" data-label="Money spent"id="tubemnSpnt"></td>
            </tr>
        </tbody>
    </table>




    <datalist id="yesorno">
        <option value="Yes"></option>
        <option value="No"></option>
    </datalist>
    <br>
    <div class="but"><button onclick="Calculate()" id="btn">Calculate</button></div>
    <div id="scr"> Scroll down for more results</div>
    <br>
    <br>
    <div class="suggstandrslt">
        <p id="ttlpwr"></p>
        <p id="emCost"></p>
        <p id="sgst"></p>
    </div>


    <div class="chart">
        <canvas id="chart" style="width: 50; height: 50px;"></canvas>
    </div>

    <script>
    const electricalCost = document.getElementById('elRate');
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
