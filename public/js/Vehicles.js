
function display_search() {
  var select_search = document.getElementById("serch_for").value;
  if(select_search == "price_s"){
    document.getElementById('dis_card').style.display = "table";
    document.getElementById('dis_input').style.display = "table";
    document.getElementById('dis_input2').style.display = "none";
    document.getElementById('dis_input3').style.display = "none";
    document.getElementById('dis_input4').style.display = "none";
    document.getElementById('dis_input5').style.display = "none";
  }
  else  if(select_search == "status_s"){
    document.getElementById('dis_card').style.display = "table";
    document.getElementById('dis_input').style.display = "none";
    document.getElementById('dis_input2').style.display = "table";
    document.getElementById('dis_input3').style.display = "none";
    document.getElementById('dis_input4').style.display = "none";
    document.getElementById('dis_input5').style.display = "none";
  }
  else  if(select_search == "type_s"){
    document.getElementById('dis_card').style.display = "table";
    document.getElementById('dis_input').style.display = "none";
    document.getElementById('dis_input2').style.display = "none";
    document.getElementById('dis_input3').style.display = "table";
    document.getElementById('dis_input4').style.display = "none";
    document.getElementById('dis_input5').style.display = "none";
  }
  else  if(select_search == "model_s"){
    document.getElementById('dis_card').style.display = "table";
    document.getElementById('dis_input').style.display = "none";
    document.getElementById('dis_input2').style.display = "none";
    document.getElementById('dis_input3').style.display = "none";
    document.getElementById('dis_input4').style.display = "table";
    document.getElementById('dis_input5').style.display = "none";
  }
  else  if(select_search == "year_s"){
    document.getElementById('dis_card').style.display = "table";
    document.getElementById('dis_input').style.display = "none";
    document.getElementById('dis_input2').style.display = "none";
    document.getElementById('dis_input3').style.display = "none";
    document.getElementById('dis_input4').style.display = "none";
    document.getElementById('dis_input5').style.display = "table";
  }
  else{
    document.getElementById('dis_card').style.display = "none";
  }
}

function display_search_veh() {
  var select_search_veh = document.getElementById("serch_for_veh").value;
  if(select_search_veh == "price_s"){
    document.getElementById('dis_card_veh').style.display = "table";
    document.getElementById('dis_input_veh').style.display = "table";
    document.getElementById('dis_input2_veh').style.display = "none";
    document.getElementById('dis_input3_veh').style.display = "none";
    document.getElementById('dis_input4_veh').style.display = "none";
    document.getElementById('dis_input5_veh').style.display = "none";
    document.getElementById('dis_input6_veh').style.display = "none";
  }
  else  if(select_search_veh == "status_s"){
    document.getElementById('dis_card_veh').style.display = "table";
    document.getElementById('dis_input_veh').style.display = "none";
    document.getElementById('dis_input2_veh').style.display = "table";
    document.getElementById('dis_input3_veh').style.display = "none";
    document.getElementById('dis_input4_veh').style.display = "none";
    document.getElementById('dis_input5_veh').style.display = "none";
    document.getElementById('dis_input6_veh').style.display = "none";
  }
  else  if(select_search_veh == "type_s"){
    document.getElementById('dis_card_veh').style.display = "table";
    document.getElementById('dis_input_veh').style.display = "none";
    document.getElementById('dis_input2_veh').style.display = "none";
    document.getElementById('dis_input3_veh').style.display = "table";
    document.getElementById('dis_input4_veh').style.display = "none";
    document.getElementById('dis_input5_veh').style.display = "none";
    document.getElementById('dis_input6_veh').style.display = "none";
  }
  else  if(select_search_veh == "model_s"){
    document.getElementById('dis_card_veh').style.display = "table";
    document.getElementById('dis_input_veh').style.display = "none";
    document.getElementById('dis_input2_veh').style.display = "none";
    document.getElementById('dis_input3_veh').style.display = "none";
    document.getElementById('dis_input4_veh').style.display = "table";
    document.getElementById('dis_input5_veh').style.display = "none";
    document.getElementById('dis_input6_veh').style.display = "none";
  }
  else  if(select_search_veh == "year_s"){
    document.getElementById('dis_card_veh').style.display = "table";
    document.getElementById('dis_input_veh').style.display = "none";
    document.getElementById('dis_input2_veh').style.display = "none";
    document.getElementById('dis_input3_veh').style.display = "none";
    document.getElementById('dis_input4_veh').style.display = "none";
    document.getElementById('dis_input5_veh').style.display = "table";
    document.getElementById('dis_input6_veh').style.display = "none";
  }
  else  if(select_search_veh == "color_s"){
    document.getElementById('dis_card_veh').style.display = "table";
    document.getElementById('dis_input_veh').style.display = "none";
    document.getElementById('dis_input2_veh').style.display = "none";
    document.getElementById('dis_input3_veh').style.display = "none";
    document.getElementById('dis_input4_veh').style.display = "none";
    document.getElementById('dis_input5_veh').style.display = "none";
    document.getElementById('dis_input6_veh').style.display = "table";
  }
  else{
    document.getElementById('dis_card_veh').style.display = "none";
  }
}
function display_search_build() {
  var select_search_build = document.getElementById("serch_for_build").value;
  if(select_search_build == "price_s"){
    document.getElementById('dis_card_build').style.display = "table";
    document.getElementById('dis_input_build').style.display = "table";
    document.getElementById('dis_input2_build').style.display = "none";
    document.getElementById('dis_input3_build').style.display = "none";
    document.getElementById('dis_input4_build').style.display = "none";
    document.getElementById('dis_input5_build').style.display = "none";
    document.getElementById('dis_input6_build').style.display = "none";
    document.getElementById('dis_input7_build').style.display = "none";
  }
  else  if(select_search_build == "status_s"){
    document.getElementById('dis_card_build').style.display = "table";
    document.getElementById('dis_input_build').style.display = "none";
    document.getElementById('dis_input2_build').style.display = "table";
    document.getElementById('dis_input3_build').style.display = "none";
    document.getElementById('dis_input4_build').style.display = "none";
    document.getElementById('dis_input5_build').style.display = "none";
    document.getElementById('dis_input6_build').style.display = "none";
    document.getElementById('dis_input7_build').style.display = "none";
  }
  else  if(select_search_build == "type_s"){
    document.getElementById('dis_card').style.display = "table";
    document.getElementById('dis_input').style.display = "none";
    document.getElementById('dis_input2').style.display = "none";
    document.getElementById('dis_input3').style.display = "table";
    document.getElementById('dis_input4').style.display = "none";
    document.getElementById('dis_input5').style.display = "none";
  }
  else  if(select_search_build == "floor_s"){
    document.getElementById('dis_card_build').style.display = "table";
    document.getElementById('dis_input_build').style.display = "none";
    document.getElementById('dis_input2_build').style.display = "none";
    document.getElementById('dis_input3_build').style.display = "none";
    document.getElementById('dis_input4_build').style.display = "table";
    document.getElementById('dis_input5_build').style.display = "none";
    document.getElementById('dis_input6_build').style.display = "none";
    document.getElementById('dis_input7_build').style.display = "none";
  }
  else  if(select_search_build == "rooms_s"){
    document.getElementById('dis_card_build').style.display = "table";
    document.getElementById('dis_input_build').style.display = "none";
    document.getElementById('dis_input2_build').style.display = "none";
    document.getElementById('dis_input3_build').style.display = "none";
    document.getElementById('dis_input4_build').style.display = "none";
    document.getElementById('dis_input5_build').style.display = "table";
    document.getElementById('dis_input6_build').style.display = "none";
    document.getElementById('dis_input7_build').style.display = "none";
  }
  else  if(select_search_build == "area_s"){
    document.getElementById('dis_card_build').style.display = "table";
    document.getElementById('dis_input_build').style.display = "none";
    document.getElementById('dis_input2_build').style.display = "none";
    document.getElementById('dis_input3_build').style.display = "none";
    document.getElementById('dis_input4_build').style.display = "none";
    document.getElementById('dis_input6_build').style.display = "table";
    document.getElementById('dis_input5_build').style.display = "none";
    document.getElementById('dis_input7_build').style.display = "none";
  }
  else  if(select_search_build == "city_s"){
    document.getElementById('dis_card_build').style.display = "table";
    document.getElementById('dis_input_build').style.display = "none";
    document.getElementById('dis_input2_build').style.display = "none";
    document.getElementById('dis_input3_build').style.display = "none";
    document.getElementById('dis_input4_build').style.display = "none";
    document.getElementById('dis_input7_build').style.display = "table";
    document.getElementById('dis_input6_build').style.display = "none";
    document.getElementById('dis_input5_build').style.display = "none";
  }
  else{
    document.getElementById('dis_card_build').style.display = "none";
  }
}
function display_search_jewl() {
  var select_search_jewl = document.getElementById("serch_for_jewl").value;
  if(select_search_jewl == "price_s"){
    document.getElementById('dis_card_jewl').style.display = "table";
    document.getElementById('dis_input_jewl').style.display = "table";
    document.getElementById('dis_input2_jewl').style.display = "none";
    document.getElementById('dis_input3_jewl').style.display = "none";
    document.getElementById('dis_input4_jewl').style.display = "none";
    document.getElementById('dis_input5_jewl').style.display = "none";
  }
  else  if(select_search_jewl == "status_s"){
    document.getElementById('dis_card_jewl').style.display = "table";
    document.getElementById('dis_input_jewl').style.display = "none";
    document.getElementById('dis_input2_jewl').style.display = "table";
    document.getElementById('dis_input3_jewl').style.display = "none";
    document.getElementById('dis_input4_jewl').style.display = "none";
    document.getElementById('dis_input5_jewl').style.display = "none";
  }
  else  if(select_search_jewl == "type_s"){
    document.getElementById('dis_card_jewl').style.display = "table";
    document.getElementById('dis_input_jewl').style.display = "none";
    document.getElementById('dis_input2_jewl').style.display = "none";
    document.getElementById('dis_input3_jewl').style.display = "table";
    document.getElementById('dis_input4_jewl').style.display = "none";
    document.getElementById('dis_input5_jewl').style.display = "none";
  }
  else  if(select_search_jewl == "design_s"){
    document.getElementById('dis_card_jewl').style.display = "table";
    document.getElementById('dis_input_jewl').style.display = "none";
    document.getElementById('dis_input2_jewl').style.display = "none";
    document.getElementById('dis_input3_jewl').style.display = "none";
    document.getElementById('dis_input4_jewl').style.display = "table";
    document.getElementById('dis_input5_jewl').style.display = "none";
  }
  else  if(select_search_jewl == "weight_s"){
    document.getElementById('dis_card_jewl').style.display = "table";
    document.getElementById('dis_input_jewl').style.display = "none";
    document.getElementById('dis_input2_jewl').style.display = "none";
    document.getElementById('dis_input3_jewl').style.display = "none";
    document.getElementById('dis_input4_jewl').style.display = "none";
    document.getElementById('dis_input5_jewl').style.display = "table";
  }
  else{
    document.getElementById('dis_card_jewl').style.display = "none";
  }
}
function display_search_high() {
  var select_search_high = document.getElementById("serch_for_high").value;
  if(select_search_high == "price_s"){
    document.getElementById('dis_card_high').style.display = "table";
    document.getElementById('dis_input_high').style.display = "table";
    document.getElementById('dis_input2_high').style.display = "none";
    document.getElementById('dis_input3_high').style.display = "none";
    document.getElementById('dis_input4_high').style.display = "none";
    
  }
  else  if(select_search_high == "status_s"){
    document.getElementById('dis_card_high').style.display = "table";
    document.getElementById('dis_input_high').style.display = "none";
    document.getElementById('dis_input2_high').style.display = "table";
    document.getElementById('dis_input3_high').style.display = "none";
    document.getElementById('dis_input4_high').style.display = "none";
    
  }
  else  if(select_search_high == "type_s"){
    document.getElementById('dis_card_high').style.display = "table";
    document.getElementById('dis_input_high').style.display = "none";
    document.getElementById('dis_input2_high').style.display = "none";
    document.getElementById('dis_input3_high').style.display = "table";
    document.getElementById('dis_input4_high').style.display = "none";
   
  }
  else  if(select_search_high == "name_s"){
    document.getElementById('dis_card_high').style.display = "table";
    document.getElementById('dis_input_high').style.display = "none";
    document.getElementById('dis_input2_high').style.display = "none";
    document.getElementById('dis_input3_high').style.display = "none";
    document.getElementById('dis_input4_high').style.display = "table";
   
  }
  else{
    document.getElementById('dis_card').style.display = "none";
  }
}
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


//This uses javascript, not jquery directly. It might help get you started.

function updateTextInput1(val) {
          document.getElementById('textInput1').value=val; 
          
    }
function updateTextInput2(val) {
          document.getElementById('textInput2').value=val; 
          
    }
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("mySidenav2").style.width = "250px";
  document.getElementById("mySidenav3").style.width = "250px";
  document.getElementById("mySidenav4").style.width = "250px";
  document.getElementById("mySidenav5").style.width = "250px";
  document.getElementById("model").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("mySidenav2").style.width = "0";
  document.getElementById("mySidenav3").style.width = "0";
  document.getElementById("mySidenav4").style.width = "0";
  document.getElementById("mySidenav5").style.width = "0";
  document.getElementById("model").style.marginLeft= "0";
}
function openNav_veh() {
  document.getElementById("mySidenav2").style.width = "250px";
  document.getElementById("model").style.marginLeft = "250px";
}

function closeNav_veh() {
  document.getElementById("mySidenav2").style.width = "0";
  document.getElementById("model").style.marginLeft= "0";
}
function openNav_build() {
  document.getElementById("mySidenav3").style.width = "250px";
  document.getElementById("model").style.marginLeft = "250px";
}

function closeNav_build() {
  document.getElementById("mySidenav3").style.width = "0";
  document.getElementById("model").style.marginLeft= "0";
}

function openNav_jewl() {
  document.getElementById("mySidenav4").style.width = "250px";
  document.getElementById("model").style.marginLeft = "250px";
}

function closeNav_jewl() {
  document.getElementById("mySidenav4").style.width = "0";
  document.getElementById("model").style.marginLeft= "0";
}
function openNav_high() {
  document.getElementById("mySidenav5").style.width = "250px";
  document.getElementById("model").style.marginLeft = "250px";
}

function closeNav_high() {
  document.getElementById("mySidenav5").style.width = "0";
  document.getElementById("model").style.marginLeft= "0";
}
// $(function () {
//   'use strict';
//   $('#search_1').niceScroll({
//       cursorcolor:'#eee',
//       cursorwidth:4,
//       cursorborder:'1px solid #000'
//   });
// });