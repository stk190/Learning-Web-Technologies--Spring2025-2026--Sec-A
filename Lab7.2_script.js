function validateForm() {

    //name
    let name = document.getElementById("name").value;
    if (name == "") {
        alert("Name cannot be empty");
        return false;
    }

    //email
    let email = document.getElementById("email").value;
    if (email == "") {
        alert("Email cannot be empty");
        return false;
    }

    if (!email.includes("@") || !email.includes(".")) {
        alert("Invalid email format");
        return false;
    }

    //gender
    let gender = document.getElementsByName("gender");
    let genderSelected = false;

    for (let i = 0; i < gender.length; i++) {
        if (gender[i].checked) {
            genderSelected = true;
        }
    }

    if (!genderSelected) {
        alert("Please select your gender");
        return false;
    }

    //dob
    let dd = document.getElementById("dd").value;
    let mm = document.getElementById("mm").value;
    let yyyy = document.getElementById("yyyy").value;

    if (dd == "" || mm == "" || yyyy == "") {
        alert("Date of Birth cannot be empty");
        return false;
    }

    if (dd < 1 || dd > 31) {
        alert("Invalid day");
        return false;
    }

    if (mm < 1 || mm > 12) {
        alert("Invalid month");
        return false;
    }

    if (yyyy.length != 4) {
        alert("Year must be 4 digits");
        return false;
    }

    //degree
    let degree = document.getElementsByName("degree");
    let degreeSelected = false;

    for (let i = 0; i < degree.length; i++) {
        if (degree[i].checked) {
            degreeSelected = true;
        }
    }

    if (!degreeSelected) {
        alert("Please select your degree");
        return false;
    }

    //bld grp
    let blood = document.getElementById("blood").value;
    if (blood == "") {
        alert("Please select blood group");
        return false;
    }

    //pp
    let userid = document.getElementById("userid").value;
    let picture = document.getElementById("picture").value;

    if (userid == "") {
        alert("User ID cannot be empty");
        return false;
    }

    if (picture == "") {
        alert("Please upload a profile picture");
        return false;
    }

    alert("Form submitted successfully!");
    return true;
}