function setup() {
    document.getElementById('buttonid').addEventListener('click', openDialog);

    function openDialog() {
        document.getElementById('fileUpload').click();

        // showFileName();
    }

    document.getElementById('fileUpload').onchange = function () {
        var fullPath = document.getElementById('fileUpload').value;
        if (fullPath) {
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
            document.getElementById('fileName').innerHTML = filename;
        }
        //document.getElementById("fileName").style.borderBottomStyle = "thin solid #000000";
        //document.getElementById("fileName").style.borderBottomWidth = "100px";
        document.getElementById('fileName').style.border = "thin solid #000000";
        document.getElementById('fileName').style.borderRadius = "5px";
        document.getElementById('fileName').style.padding = "2px";
        document.getElementById('fileName').style.marginLeft = "0px";
    }
    // document.getElementById('firstName').style.width = "500px";
    // document.getElementById('firstName').style.width = "500px";
    // document.getElementById('lastName').style.width = "500px";
    // document.getElementById('email').style.width = "500px";
    // document.getElementById('educational').style.width = "500px";
    // document.getElementById('ethnicity').style.width = "500px";
    // document.getElementsByName('gender').style.width = "500px";
    // document.getElementsByName('shirtSize').style.width = "500px";
    // document.getElementById('errorSection').style.width = "500px";
    // document.getElementById('fileUpload').style.width = "500px";
    // document.getElementById('buttonDiv').style.width = "200px";
}

<!--School Selection JS-->
    function showfield(name) {
        if (name === 'Other') {
            document.getElementById('eduError').innerHTML = '<input type="text" id="otherSchool" name="otherSchoolText" placeholder="Enter Other Institution"' +
                'class="form-control" autofocus required />' +
                '<span class="help-block">Full Educational Institution Name, eg.: Southern Illinois University Edwardsville</span>';
        } else if (name === 'SIUE') {
            document.getElementById('eduError').innerHTML = '<span>Please note; If you are a student of SIUE, we will be providing ' +
                'a bus to get you to and from eHacks (The T-Rex building). If you are interested in taking advantage of this option please let us know below.</span>' +
                '<div class="form-group">' +
                '<label class="control-label col-sm-3">Will you make use of the bus?</label>' +
                '<div class="col-sm-6">' +
                '<div class="row">' +
                '<div class="col-sm-4">' +
                '<label class="radio-inline">' +
                '<input type="radio" name="bus" id="yesRadio" value="Yes" required />Yes' +
                '</label>' +
                '</div>' +
                '<div class="col-sm-4">' +
                '<label class="radio-inline">' +
                '<input type="radio" name="bus" id="noRadio" value="No" required />No' +
                '</label>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>';
        }
        else {
            document.getElementById('otherText').innerHTML = '';
            document.getElementById('eduError').innerHTML = '';
        }
    }

//function functSubmit(event) {
//    alert("REGISTADA");
//}
<!--/School js-->

<!--Validation JS-->
var isValid = false;
var count = 0;

function validate() {

    var alphaNum = /^[0-9a-zA-Z]+$/;

    var firstValid = false;
    var lastValid = false;
    var emailValid = false;
    var eduValid = false;
    var ethValid = false;
    var genValid = false;
    var shirtValid = false;
    var resumeValid = false;

    var inpObj = document.getElementById('firstName');
    var lastObj = document.getElementById('lastName');
    var emailObj = document.getElementById('email');
    var eduObj = document.getElementById('educational');
    var ethObj = document.getElementById('ethnicity');
    var genderObj = document.getElementsByName('gender');
    var shirtObj = document.getElementsByName('shirtSize');
    var errorSec = document.getElementById('errorSection');
    var fileObj = document.getElementById('fileUpload');
    var errorMessage = '';

    if (!inpObj.checkValidity()) {
        inpObj.setAttribute("placeholder", "Required Field - Please enter first name");
        errorMessage += '<span style="color:red">Required Field - Please enter first name.</span><br>';
        document.getElementById('firstNameError').innerHTML = '<span style="color:red">Enter first name.</span><br>';
        firstValid = false;
    } else if (!inpObj.value.match(alphaNum)) {
        inpObj.setAttribute("placeholder", "Please only use alpha numeric characters");
        errorMessage += '<span style="color:red">Required Field - Please enter a valid first name.</span><br>';
        document.getElementById('firstNameError').innerHTML = '<span style="color:red">Enter valid first name.</span><br>';
        firstValid = false;
    } else {
        firstValid = true;
        document.getElementById('firstNameError').innerHTML = '';
    }

    if (!lastObj.checkValidity()) {
        lastObj.setAttribute("placeholder", "Required Field - Please enter last name");
        errorMessage += '<span style="color:red">Required Field - Please enter last name.</span><br>';
        document.getElementById('lastNameError').innerHTML = '<span style="color:red">Enter last name.</span><br>';
        lastValid = false;
    } else if (!lastObj.value.match(alphaNum)) {
        inpObj.setAttribute("placeholder", "Please only use alpha numeric characters");
        errorMessage += '<span style="color:red">Required Field - Please enter a valid last name.</span><br>';
        document.getElementById('lastNameError').innerHTML = '<span style="color:red">Enter valid last name.</span><br>';
        lastValid = false;
    } else {
        lastValid = true;
        document.getElementById('lastNameError').innerHTML = '';
    }


    if (!emailObj.checkValidity()) {
        emailObj.setAttribute("placeholder", "Required Field - Please enter email");
        errorMessage += '<span style="color:red">Required Field - Please enter valid email.</span><br>';
        document.getElementById('emailError').innerHTML = '<span style="color:red">Enter email.</span><br>';
        emailValid = false;
    } else {
        emailValid = true;
        document.getElementById('emailError').innerHTML = '';
    }

    if (eduObj.selectedIndex === 0) {
        errorMessage += '<span style="color:red">Required Field - Please select educational institution.</span><br>';
        document.getElementById('eduError').innerHTML = '<span style="color:red">Select valid educational institution.</span><br>';
        eduValid = false;
    } else if (eduObj.selectedIndex === 9) {
        var otherSchoolInput = document.getElementById('otherSchool');

        if (!otherSchoolInput.checkValidity()) {
            otherSchoolInput.setAttribute("placeholder", "Required Field - Please enter other school");
            errorMessage += '<span style="color:red">Required Field - Please enter other school.</span><br>';
            document.getElementById('eduError').innerHTML += '<span style="color:red">' +
                'Required Field - Please enter other educational institution.</span><br>';
            eduValid = false;
        } else {
            eduValid = true;
            var otherSet = document.getElementById('otherSchool').value;
            eduObj[9].value = otherSet;
        }
    } else if (eduObj.selectedIndex === 1) {
        var selectedBusOp = document.getElementsByName('bus');
        if (!(selectedBusOp[0].checked || selectedBusOp[1].checked)) {
            if (count === 0) {
                document.getElementById('eduError').innerHTML += '<span style="color:red">Please select yes or no</span><br>';
                count++;
            }
            errorMessage += '<span style="color:red">Required Field - Please select a bus option.</span><br>';
            eduValid = false;
        } else {
            eduValid = true;
            if (count > 0) {
                var checked;
                checked = document.getElementById('yesRadio').checked;

                document.getElementById('eduError').innerHTML = '';
                document.getElementById('eduError').innerHTML = '<span>Please note; If you are a student of SIUE, we will be providing ' +
                    'a bus to get you to and from eHacks (The T-Rex building). If you are interested in taking advantage of this option please let us know below.</span>' +
                    '<div class="form-group">' +
                    '<label class="control-label col-sm-3">Will you make use of the bus?</label>' +
                    '<div class="col-sm-6">' +
                    '<div class="row">' +
                    '<div class="col-sm-4">' +
                    '<label class="radio-inline">' +
                    '<input type="radio" name="bus" id="yesRadio" value="Yes" required />Yes' +
                    '</label>' +
                    '</div>' +
                    '<div class="col-sm-4">' +
                    '<label class="radio-inline">' +
                    '<input type="radio" name="bus" id="noRadio" value="No" required />No' +
                    '</label>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>';

                if (checked === true) {
                    var yesCheck = document.getElementById("yesRadio");
                    yesCheck.value = "Yes";
                    yesCheck.checked = true;
                } else if (checked === false) {
                    var noCheck = document.getElementById('noRadio');
                    noCheck.value = "No";
                    noCheck.checked = true;
                }
            }
        }
    } else {
        document.getElementById('eduError').innerHTML = '';
        eduValid = true;
    }

    if (ethObj.selectedIndex === 0) {
        errorMessage += '<span style="color:red">Required Field - Please select ethnicity - If you wish not to answer select "Prefer Not to Say".</span><br>';
        document.getElementById('ethError').innerHTML = '<span style="color:red">Please select ethnicity</span><br>';
        ethValid = true
    } else {
        document.getElementById('ethError').innerHTML = '';
        ethValid = true;
    }

    if (!(genderObj[0].checked || genderObj[1].checked || genderObj[2].checked || genderObj[3].checked)) {
        errorMessage += '<span style="color:red">Required Field - Please select gender - If you wish not to answer select "Prefer Not to Say".</span><br>';
        document.getElementById('genderError').innerHTML = '<span style="color:red">Please select gender field.</span><br>';
        genValid = false;
    } else {
        document.getElementById('genderError').innerHTML = '';
        genValid = true;
    }

    if (!(shirtObj[0].checked || shirtObj[1].checked || shirtObj[2].checked || shirtObj[3].checked || shirtObj[4].checked)) {
        errorMessage += '<span style="color:red">Required Field - Please select shirt size</span><br>';
        document.getElementById('shirtError').innerHTML = '<span style="color:red">Please select shirt size.</span><br>';
        shirtValid = false;
    } else {
        document.getElementById('shirtError').innerHTML = '';
        shirtValid = true;
    }

    if (fileObj.value === '') {
        errorMessage += '<span style="color:red">Required Field - Please upload a resume.</span><br>';
        document.getElementById('fileError').innerHTML = '<span style="color:red">Please upload a resume (.pdf)</span><br>';
    } else {
        document.getElementById('fileError').innerHTML = '';
        resumeValid = true;
    }

    errorSec.innerHTML = errorMessage;

    if ((firstValid && lastValid && emailValid && eduValid && ethValid && genValid && shirtValid && resumeValid)) {
        isValid = true;
    }
    return isValid;
}