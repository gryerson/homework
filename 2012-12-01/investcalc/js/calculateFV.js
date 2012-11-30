// create helper function
var $ = function (id) {
	return document.getElementById(id);
}

function calculateFV ()
{
	
    // get the data from the form
    var investmentAmt = $('investment').valueAsNumber;
    var interestRate = $('interest_rate').valueAsNumber;
    var years = $('years').valueAsNumber;
    
    // validate investment entry
    if(investmentAmt == "")
    {
    	alert('Investment amount is a required field.');
    	return false;
    }
    else if(isNaN(investmentAmt))
    {
    	alert('Investment amount must be a valid number.');
    	return false;
    }
    else if(investmentAmt <= 0)
    {
    	alert('Investment amount must be greater than zero.');
    	return false;
    }
    
    // validate interest_rate entry
    if(interestRate == "")
    {
    	alert('Interest rate is a required field.');
    	return false;
    }
    else if(isNaN(interestRate))
    {
    	alert('Interest rate must be a valid number.');
    	return false;
    }
    else if(interestRate <= 0 || interestRate > 15 )
    {
    	alert('Interest rate must be greater than zero and less than or equal to 15.');
    	return false;
    }
    
    // validate years entry
    if(years == "")
    {
    	alert('Years is a required field.');
    	return false;
    }
    else if(isNaN(years))
    {
    	alert('Years must be a valid number.');
    	return false;
    }
    else if(years <= 0 || years > 50 )
    {
    	alert('Years be greater than zero and less than or equal to 50.');
    	return false;
    }

    // calculate the future value
    var futureValue = investmentAmt;
    for (i = 1; i <= years; i++) {
        futureValue = (futureValue + (futureValue * interestRate *.01));
    }

    // populate Future Value field
    $('future_value').value = '$' + futureValue.toFixed(2);
    
}