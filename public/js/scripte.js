var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");


// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) { 
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) { 
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) { 
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
};
$('#username').blur(function(){
  document.getElementById("status").style.display = "none";
});
$('#username').keyup(function(){
  document.getElementById("status").style.display = "block";
    var username = $('#username').val();
    $('#status').html('<img src="giphy.gif" width="50px" height="60px"  alt="">');
    if(username !=''){
      $.post('register.php' , {username:username},
      function(data){
        $('#status').html(data);
      });
    }
    else {
      $('#status').html(''); 
    }
});
function checkpassword(){
  var psw = document.getElementById("psw").value;
  var r_psw = document.getElementById("r_psw").value;
  if(psw == r_psw){
    document.getElementById("reg").disabled = false;
	document.getElementById("r_psw").style.borderBottomColor = "#2d3561";
	document.getElementById("r_psw").style.borderBottomWidth = "1px"
    return;
  }else{
    alert('كلمة السر غير متطابقة');
    document.getElementById("reg").disabled = true;
	document.getElementById("r_psw").style.borderBottomColor = "#f00";
	document.getElementById("r_psw").style.borderBottomStyle = "solid";
	document.getElementById("r_psw").style.borderBottomWidth = "2px"
  }
};
$(function () {
    'use strict';
    $('#register').niceScroll({
        cursorcolor:'#eee',
        cursorwidth:4,
        cursorborder:'1px solid #000'
    });
});
function openForm() {
	document.getElementById("chat").style.display = "block";
  }
  
  function closeForm() {
	document.getElementById("chat").style.display = "none";
  }