

//This Function Calculates Current and Future Energy Savings
function calc() {
	
    var cBulb = document.getElementById("CurrentBulbSelect").value;
    document.getElementById('CurrentBulb').className = cBulb;
    var nBulb = document.getElementById("NewBulbSelect").value;
    document.getElementById('NewBulb').className = nBulb;
    
      var propCost = document.getElementById('PropCost').value;
      var exVal = document.getElementById('ExistingValue').value;
      var propVal = document.getElementById('ProposedValue').value;
      var hours = document.getElementById('HoursUsed').value;
      var days = document.getElementById('DaysUsed').value;
      var elecCost = document.getElementById('ElectricityCost').value;
      var totalQty = document.getElementById('TotalQuantity').value;
      
    
        document.getElementById('ExistingWatts').innerHTML = exVal;
        document.getElementById('ProposedWatts').innerHTML = propVal;
    
      if (hours > 24){document.getElementById('HoursUsed').value = 24;}
      if (hours < 0){document.getElementById('HoursUsed').value = 0;}
      if (days > 7){document.getElementById('DaysUsed').value = 7;}
      if (days < 0){document.getElementById('DaysUsed').value = 0;}
      if (propVal < 0){
        document.getElementById('ProposedValue').value = 0;
        document.getElementById('ProposedWatts').innerHTML = 0;
      }
      if (exVal < 0){
        document.getElementById('ExistingValue').value = 0;
        document.getElementById('ExistingWatts').innerHTML = 0;
      }
      if (elecCost < 0){document.getElementById('ElectricityCost').value = 0;}
      if (totalQty < 0){document.getElementById('TotalQuantity').value = 0;}
      if (propCost < 0){document.getElementById('PropCost').value = 0;}
      
        var x = ((hours * days) * 0.052) * (elecCost / 100);
      
      if (cBulb == 'metalhalide') {
          var r = exVal * 1.137;
          var s = r.toFixed(0);
          document.getElementById('ExistingWatts').innerHTML = s;
          document.getElementById('exBall').innerHTML = 'including ballast';
          var a = (x * r) * totalQty;
            var currentCost = a.toFixed(2);
            
          document.getElementById('CurrentCost').innerHTML = '$' + currentCost.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
      }
    
      if (cBulb == 'highpressure') {
          var r = exVal * 1.2;
          document.getElementById('ExistingWatts').innerHTML = r;
          document.getElementById('exBall').innerHTML = 'including ballast';
          var a = (x * r) * totalQty;
            var currentCost = a.toFixed(2);
            document.getElementById('CurrentCost').innerHTML = '$' + currentCost.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
      }
    
      if (cBulb == 'fluorescent') {
          var r = exVal * 1.2;
          document.getElementById('ExistingWatts').innerHTML = r;
          document.getElementById('exBall').innerHTML = 'including ballast';
          var a = (x * r) * totalQty;
            var currentCost = a.toFixed(2);
            document.getElementById('CurrentCost').innerHTML = '$' + currentCost.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
      }
    
      if (cBulb == 'led') {
          var a = (x * exVal) * totalQty;
          document.getElementById('exBall').innerHTML = 'watts';
            var currentCost = a.toFixed(2);
            document.getElementById('CurrentCost').innerHTML = '$' + currentCost.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
      }
    
      if (cBulb == 'incandescent') {
          var a = (x * exVal) * totalQty;
          document.getElementById('exBall').innerHTML = 'watts';
            var currentCost = a.toFixed(2);
            document.getElementById('CurrentCost').innerHTML = '$' + currentCost.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
      }
    
      if (nBulb == 'metalhalide') {
          var r = propVal * 1.2;
          document.getElementById('ProposedWatts').innerHTML = r;
          document.getElementById('propBall').innerHTML = 'including ballast';
          var b = (x * r) * totalQty;
            var newCost = b.toFixed(2);
            document.getElementById('NewCost').innerHTML = '$' + newCost.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
      }
    
      if (nBulb == 'highpressure') {
          var r = propVal * 1.2;
          document.getElementById('ProposedWatts').innerHTML = r;
          document.getElementById('propBall').innerHTML = 'including ballast';
          var b = (x * r) * totalQty;
            var newCost = b.toFixed(2);
            document.getElementById('NewCost').innerHTML = '$' + newCost.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
      }
    
      if (nBulb == 'fluorescent') {
          var r = propVal * 1.2;
          document.getElementById('ProposedWatts').innerHTML = r;
          document.getElementById('propBall').innerHTML = 'including ballast';
          var b = (x * r) * totalQty;
            var newCost = b.toFixed(2);
            document.getElementById('NewCost').innerHTML = '$' + newCost.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
      }
    
      if (nBulb == 'led') {
          var b = (x * propVal) * totalQty;
          document.getElementById('propBall').innerHTML = 'watts';
            var newCost = b.toFixed(2);
            document.getElementById('NewCost').innerHTML = '$' + newCost.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
      }
    
      if (nBulb == 'incandescent') {
          var b = (x * propVal) * totalQty;
          document.getElementById('propBall').innerHTML = 'watts';
            var newCost = b.toFixed(2);
            document.getElementById('NewCost').innerHTML = '$' + newCost.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
      }
        
        
        
        var c = currentCost - newCost;
        var savings = c.toFixed(2);
        document.getElementById('Savings').innerHTML = '$' + savings.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
        
        var y = savings / 12;
      var z = y / totalQty;
        var d = propCost / z;
        var rtn = d.toFixed(1);
        document.getElementById('ReturnInv').innerHTML = rtn;
    
      e = propCost * totalQty;
      totalCost = e.toFixed(2);
      document.getElementById('TotalCost').innerHTML = totalCost.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
    
      /*if (currentCost >= newCost) {
        document.getElementById('SaveLost').innerHTML = 'Amount <strong>Saved</strong> by';
        document.getElementById('NewCost').classList.remove('red');
        document.getElementById('Savings').classList.remove('red');
        document.getElementById('NewCost').classList.add('green');
        document.getElementById('Savings').classList.add('green');
      } else if (currentCost <= newCost) {
        document.getElementById('SaveLost').innerHTML = 'Amount <strong>Lost</strong> by';
        document.getElementById('NewCost').classList.add('red');
        document.getElementById('Savings').classList.add('red');
      } else {
        document.getElementById('SaveLost').innerHTML = 'Amount <strong>Saved</strong> by';
        document.getElementById('NewCost').classList.remove('red');
        document.getElementById('Savings').classList.remove('red');
        document.getElementById('NewCost').classList.remove('green');
        document.getElementById('Savings').classList.remove('green');
      }*/
      
      
    
      
  };
  
  //This Function Disables the ENTER key when using the form
  function noenter() {
    return !(window.event && window.event.keyCode == 13);
  };
  
  
  