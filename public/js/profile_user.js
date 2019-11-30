$(document).ready(function(){
	$('.collapse').collapse({
        toggle: false
      })
  });
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();

  function editprice_car() {
    document.getElementById('editpricee_car').style.display = "block";
  }
function editprice_jew() {
  document.getElementById('editpricee_jew').style.display = "block";
}
function editprice_prop() {
  document.getElementById('editpricee_prop').style.display = "block";
}
function editprice_vich() {
  document.getElementById('editpricee_vich').style.display = "block";
}
function editprice_high() {
  document.getElementById('editpricee_high').style.display = "block";
}
function editsubscribe() {
  document.getElementById('subscribe_id').style.display = "block";
}