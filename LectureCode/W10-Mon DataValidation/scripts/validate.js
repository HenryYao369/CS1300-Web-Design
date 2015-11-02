// validate form input for cylinder widget

// keep jslint happy!
/*global alert*/

// functions
function validateRadius() {
    "use strict";
    // variables
    var radius = document.forms.cylinderForm.radius.value;   // DOM模型
    
    // validation
    if (isNaN(radius)) {   // not a number -- JS是动态类型的语言
        alert("The radius value must be a number");
        return false;
    }
    
}

function validateHeight() {
    "use strict";
    // variables
    var height = document.forms.cylinderForm.height.value;
    
    // validation
    if (isNaN(height)) {
        alert("The height value must be a number");
        return false;
    }

}
