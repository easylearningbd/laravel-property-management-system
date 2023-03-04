$(document).ready(function() {
  // Initiate popovers for '?' buttons next to input labels
  $("[data-toggle='popover']").popover({
    container: "body",
    placement: "auto"
  });

  // Lay out number inputs as Jquery selector to iterate upon for validation
  var inputs = $("input[name=house-price], input[name=interest-rate], input[name=down-payment], input[name=insurance], input[name=taxes]");

  // Declare input variables for ease of use
  var housePrice = $("input[name=house-price]");
  var interestRate = $("input[name=interest-rate]");
  var years;
  var downPayment = $("input[name=down-payment]");
  var insurance = $("input[name=insurance]");
  var taxes = $("input[name=taxes]");

  // Booleans for input validation
  var housePriceValid = false;
  var interestRateValid = false;
  var yearsValid = false;
  var downPaymentValid = false;
  var insuranceValid = false;
  var taxesValid = false;

  // Iterate upon inputs, making white when empty.
  $.each(inputs, function() {
    var input = $(this);
    input.keyup(function() {
      if (!input.val()) {
        input.closest($("div .requisite")).removeClass("has-error").removeClass("has-success");
      }
    });
  });

  // Check if House Price input is greater than 0 on each keyup.
  housePrice.keyup(function() {
    if ($(this).val()) {
      if (parseFloat($(this).val()) > 0) {
        $(this).closest($("div .requisite")).removeClass("has-error").addClass("has-success");
        housePriceValid = true;
      } else {
        $(this).closest($("div .requisite")).removeClass("has-success").addClass("has-error");
        housePriceValid = false;
      }
    }
  });

  // Check if Interest Rate input is greater than 0 and less than 100 on each keyup.
  interestRate.keyup(function() {
    if ($(this).val()) {
      if (parseFloat($(this).val()) > 0 && parseFloat($(this).val()) < 100) {
        $(this).closest($("div .requisite")).removeClass("has-error").addClass("has-success");
        interestRateValid = true;
      } else {
        $(this).closest($("div .requisite")).removeClass("has-success").addClass("has-error");
        interestRateValid = false;
      }
    }
  });

  // Handle switching of radio buttons
  $("input:radio[name=years-radio]").change(function() {
    years = $("input:radio[name=years-radio]:checked");
    if ($("input:radio[name=years-radio]:checked").val() === "15") {
      $("div#years-group").removeClass("has-error").addClass("has-success");
      $("label[name=years-button-30]").removeClass("btn-success btn-danger");
      $("label[name=years-button-15]").removeClass("btn-danger").addClass("btn-success");
      yearsValid = true;
    } else if ($("input:radio[name=years-radio]:checked").val() === "30") {
      $("div#years-group").removeClass("has-error").addClass("has-success");
      $("label[name=years-button-15]").removeClass("btn-success btn-danger");
      $("label[name=years-button-30]").removeClass("btn-danger").addClass("btn-success");
      yearsValid = true;
    }
    $("div#years-group").addClass("has-success");
  });

  // Check if Down Payment input is >= 0 and < 100 for validation
  downPayment.keyup(function() {
    if ($(this).val()) {
      if (parseFloat($(this).val()) >= 0 && parseFloat($(this).val()) < 100) {
        $(this).closest($("div .requisite")).removeClass("has-error").addClass("has-success");
        downPaymentValid = true;
      } else {
        $(this).closest($("div .requisite")).removeClass("has-success").addClass("has-error");
      }
    }
  });

  // Make sure no negative number is inputted for insurance dollar amount
  insurance.keyup(function() {
    if ($(this).val()) {
      if (parseFloat($(this).val()) > 0) {
        $(this).closest($("div .requisite")).removeClass("has-error").addClass("has-success");
        insuranceValid = true;
      } else {
        $(this).closest($("div .requisite")).removeClass("has-success").addClass("has-error");
      }
    }
  });

  // Make sure no negative number is inputted for taxes dollar amount
  taxes.keyup(function() {
    if ($(this).val()) {
      if (parseFloat($(this).val()) > 0) {
        $(this).closest($("div .requisite")).removeClass("has-error").addClass("has-success");
        taxesValid = true;
      } else {
        $(this).closest($("div .requisite")).removeClass("has-success").addClass("has-error");
      }
    }
  });

  var emailHousePrice;
  var emailInterestRate;
  var emailYears;
  var emailDownPayment;
  var emailInsurance;
  var emailTaxes;
  var emailInsuranceMonthly;
  var emailTaxesMonthly;
  var emailFHA;
  var emailVA;
  var emailUSDA;
  var emailCONV;

  // Validate inputs and calculate if all is valid.
  $("button[name=calculate]").click(function() {
    if (!$("input:radio[name=years-radio]:checked").val()) {
      $("div#years-group").addClass("has-error");
      $("label[name=years-button-15]").addClass("btn-danger");
      $("label[name=years-button-30]").addClass("btn-danger");
    }
    $.each(inputs, function() {
      var input = $(this);
      if (!input.val()) {
        input.closest($("div .requisite")).addClass("has-error");
      }
    });
    if (housePriceValid && interestRateValid && yearsValid && downPaymentValid && insuranceValid && taxesValid) {
      calculate();
      emailHousePrice = $("input[name=house-price]").val();
      emailInterestRate = $("input[name=interest-rate]").val();
      emailYears = $("input:radio[name=years-radio]:checked").val();
      emailDownPayment = $("input[name=down-payment]").val();
      emailInsurance = $("input[name=insurance]").val();
      emailTaxes = $("input[name=taxes]").val();
      emailInsuranceMonthly = $("input[name=insurance-monthly]").val();
      emailTaxesMonthly = $("input[name=taxes-monthly]").val();
      emailFHA = $("input[name=fha]").val();
      emailVA = $("input[name=va]").val();
      emailUSDA = $("input[name=usda]").val();
      emailCONV = $("input[name=conv]").val();
    }
  });

  // Handle all calculations given the values inputted.
  function calculate() {
    function getTotal(principle, payment) {
      return ((((principle * interestRateM) / (1 - Math.pow(1 + interestRateM, (-1 * months))) * 100) / 100) + insuranceMonthly + taxesMonthly + payment);
    }
    var numYears = parseInt(years.val());
    var principle = housePrice.val() - (housePrice.val() * (downPayment.val() / 100));
    var interestRateM = interestRate.val() / (100 * 12);
    var months = numYears * 12;
    var monthlyPayment = ((principle * interestRateM) / (1 - Math.pow(1 + interestRateM, -1 * months)) * 100) / 100;
    var insuranceMonthly = insurance.val() / 12;
    $("input[name=insurance-monthly]").val(insuranceMonthly.toFixed(2));
    var taxesMonthly = taxes.val() / 12;
    $("input[name=taxes-monthly]").val(taxesMonthly.toFixed(2));

    var fhaPrinciple = principle + (principle * 0.0175);
    var fhaPayment;
    if (numYears === 15) {
      if (downPayment.val() >= 10) {
        fhaPayment = ((fhaPrinciple * 0.0025) / 12);
      } else if (downPayment.val() < 10) {
        fhaPayment = ((fhaPrinciple * 0.0050) / 12);
      }
    } else if(numYears === 30) {
      if (downPayment.val() >= 5) {
        fhaPayment = ((fhaPrinciple * 0.0055) / 12);
      } else if (downPayment.val() < 5) {
        fhaPayment = ((fhaPrinciple * 0.0060) / 12);
      }
    }

    var fhaTotal;
    if (downPayment.val() >= 3.5) {
      fhaTotal = getTotal(fhaPrinciple, fhaPayment);
      $("input[name=fha]").val(fhaTotal.toFixed(2));
    } else {
      $("input[name=fha]").val("3.5% down required");
    }

    var vaPrinciple;
    if (downPayment.val() >= 10) {
      vaPrinciple = (principle * 1.0125);
    } else if (downPayment.val() >= 5 && downPayment.val() < 10) {
      vaPrinciple = (principle * 1.015);
    } else {
      vaPrinciple = (principle * 1.0215);
    }
    var vaTotal = getTotal(vaPrinciple, 0);
    $("input[name=va]").val(vaTotal.toFixed(2));

    var usdaPrinciple = principle + (principle * 0.01);
    var usdaPayment = (usdaPrinciple * 0.0035) / 12;
    var usdaTotal = getTotal(usdaPrinciple, usdaPayment);
    $("input[name=usda]").val(usdaTotal.toFixed(2));

    var convPayment;
    if (numYears == 15) {
      if (downPayment.val() >= 3 && downPayment.val() < 5) {
        convPayment = (principle * 0.0033) / 12;
      } else if (downPayment.val() >= 5 && downPayment.val() < 10) {
        convPayment = (principle * 0.0028) / 12;
      } else if (downPayment.val() >= 10 && downPayment.val() < 15) {
        convPayment = (principle * 0.0021) / 12;
      } else if (downPayment.val() >= 15 && downPayment.val() < 20) {
        convPayment = (principle * 0.0018) / 12;
      } else if (downPayment.val() >= 20 && downPayment.val() <= 100) {
        convPayment = 0;
      }
    } else if (numYears == 30) {
      if (downPayment.val() >= 3 && downPayment.val() < 5) {
        convPayment = (principle * 0.0062) / 12;
      } else if (downPayment.val() >= 5 && downPayment.val() < 10) {
        convPayment = (principle * 0.0052) / 12;
      } else if (downPayment.val() >= 10 && downPayment.val() < 15) {
        convPayment = (principle * 0.0030) / 12;
      } else if (downPayment.val() >= 15 && downPayment.val() < 20) {
        convPayment = (principle * 0.0019) / 12;
      } else if (downPayment.val() >= 20 && downPayment.val() <= 100) {
        convPayment = 0;
      }
    }

    var convTotal;
    if (downPayment.val() >= 3) {
      convTotal = monthlyPayment + insuranceMonthly + taxesMonthly + convPayment;
      $("input[name=conv]").val(convTotal.toFixed(2));
    } else {
      $("input[name=conv]").val("3% down required");
    }
  }

  $("form").submit(function(event) {
    event.preventDefault();
    event.stopImmediatePropagation()
    $("#email-group").removeClass("has-error");
    $(".help-block").remove();
    $(".alert-success").remove();
    var email = $("input[name=email]").val();

    var formData = {
      "housePrice": emailHousePrice,
      "interestRate": emailInterestRate,
      "years": emailYears,
      "downPayment": emailDownPayment,
      "insurance": emailInsurance,
      "taxes": emailTaxes,
      "insuranceMonthly": emailInsuranceMonthly,
      "taxesMonthly": emailTaxesMonthly,
      "fha" : emailFHA,
      "va": emailVA,
      "usda": emailUSDA,
      "conv": emailCONV,
      "email": email
    };

    $.ajax({
        type: "post",
        url: "emailMortgage.php",
        data: formData,
        dataType: "json",
        encode: true
      })
      .done(function(response) {
        if (!response.success) {
          if (!response.wp_mail) {
            if (response.errors.email) {
              $("#email-group").addClass("has-error");
              $("#email-group").append("<div class='help-block'>" + response.errors.email + "</div>");
            }

            $("button[name=submit-email]").prop("disabled", false);
          } else if (response.wp_mail) {
            $("div[name=response]").append("<div class='alert alert-danger text-center'>" + response.wp_mail + "</div>");
          }
        } else {
          $("div[name=response]").append("<div class='alert alert-success text-center'>" + response.action + "</div>");
          $("button[name=submit-email]").prop("disabled", true);
        }
      });
  });
});
