@extends('template')

@section('title', 'Questions Form')

@section('content')

@if (session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-error">
    {{ session('error') }}
</div>
@endif

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="questions.css">
</head>

<body>

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
                    <div class="question"><label for="number" id="number-label">Your total monthly energy bill is
                            approximately</label></div>
                    <input type="number" name="energy_bill" class="keyboard-input" placeholder=" €" id="number"
                        min="0" max="4000">
                    </p>

                    <p>
                    <div class="question"> How do you heat your home?</div>
                    <input type="checkbox" name="gas" id="gas">
                    <label for="gas">Gas</label>

                    <input type="checkbox" name="electric" id="electric">
                    <label for="electric">Electricity</label>

                    <input type="checkbox" name="central_heating" id="open-fire">
                    <label for="open-fire">Central Heating</label>

                    </p>

                    <div class="question"><label for="household-members">Members in your household</label></div>
                    <select name="members" id="dropdown" id="household-members">
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
                    <select name="windows" id="dropdown" id="window-number">
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
                    <textarea name="additional" id="additional"></textarea>

                    </p>


                    <p>
                        <input type="submit" name="submit" id="submit" value="Submit">
                    </p>

                </form>
            </div> <!-- END FORM CONTAINER -->
        </div> <!-- END POSITION FORM CONTAINER -->
    </main>





</body>

</html>