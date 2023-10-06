// Variable to keep track of whether the checkboxes are expanded or not
var expanded = false;

// Function to show/hide the checkboxes
function showCheckboxes() {
  // Get the element with the id "checkboxes"
  var checkboxes = document.getElementById("checkboxes");
  // If the checkboxes are not expanded
  if (!expanded) {
    // Make checkboxes visible
    checkboxes.style.display = "block";
    expanded = true;
  }
  // If the checkboxes are already expanded 
  else {
    // Make checkboxes invisible
    checkboxes.style.display = "none";
    expanded = false;
  }
}
