function calculateLoan() {
    var loanAmount = parseFloat(document.getElementById('loan-amount').value);
    var loanDuration = parseInt(document.getElementById('loan-duration').value);
  
    var interestRate = 0.05; // Tasa de interés del préstamo (5%)
    var monthlyInterestRate = interestRate / 12;
  
    var monthlyPayment = (loanAmount * monthlyInterestRate) / (1 - Math.pow(1 + monthlyInterestRate, -loanDuration));
    var totalPayment = monthlyPayment * loanDuration;
    var totalInterest = totalPayment - loanAmount;
  
    document.getElementById('monthly-payment').textContent = monthlyPayment.toFixed(2);
    document.getElementById('total-interest').textContent = totalInterest.toFixed(2);
  }
  