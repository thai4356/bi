function validator(option) {

    //function validate
    function validate (inputElement,rules){
        var errorElement = inputElement.parentElement.querySelector(option.errorSelector);
        var errorMessage = rules.test(inputElement.value);
        if(errorMessage){
            errorElement.innerText = errorMessage;
        } else {
            errorElement.innerText =""
        }
    }
//get form element
    var formElement = document.querySelector(option.form);
    if (formElement) {
        formElement.onsubmit = function (e){
            e.preventDefault();
            option.rules.forEach(function (rules) {
                var inputElement = formElement.querySelector(rules.selector);
                validate(inputElement,rules);
            });
        }


        option.rules.forEach(function (rules) {

            var inputElement = formElement.querySelector(rules.selector);
            if (inputElement) {
                //khi blur
                inputElement.onblur =function(){
                    validate(inputElement,rules);
                }
                //khi nhap
                inputElement.onclick =function(){
                    var errorElement = inputElement.parentElement.querySelector(option.errorSelector);
                    errorElement.innerText =""
                }

            }
        });
    }
}


validator.isRequired=function(selector){
    return {
        selector : selector,
        test: function(value){
            return value.trim() ? undefined :'Please fill in this blank'
        }
    };
}


validator.isEmail=function(selector){
    return {
        selector : selector,
        test: function(value){
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ ;
            return regex.test(value) ? undefined : 'Please enter your email / Please enter right type of email'
        }
    };
}


validator.isPhone=function(selector){
    return {
        selector : selector,
        test: function(value){
            var regex_phone = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/ ;
            return regex_phone.test(value) ? undefined : 'Please enter your phone number (10 numbers) / Only number'
        }
    };
}

// var formElement = document.querySelector(option.form);
//    if (formElement) {
//        formElement.onsubmit = function(e){
//            e.preventDefault();
//        }
//    }











