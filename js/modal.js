var modal = document.getElementById("my_modal");
 var btn = document.getElementById("btn_modal_window");
 var span = document.getElementsByClassName("close_modal_window")[0];

 btn.onclick = function () {
    modal.style.display = "block";
 }

 span.onclick = function () {
    modal.style.display = "none";
 }

 window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

$(function() {
   function maskPhone() {
     var country = $('#country option:selected').val();
     switch (country) {
       case "ru":
         $("#phone").mask("+7(999) 999-99-99");
         break;
       case "ua":
         $("#phone").mask("+380(999) 999-99-99");
         break;
       case "by":
         $("#phone").mask("+375(999) 999-99-99");
         break;          
     }    
   }
   maskPhone();
   $('#country').change(function() {
     maskPhone();
   });
 });