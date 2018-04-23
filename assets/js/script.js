// remove alert after some time
(function() {
  var elem = document.querySelector('.alert');
  if(elem !== null) {
    function intv() {
      console.log();
      elem.parentNode.removeChild(elem);
    }
  }
  setTimeout(intv, 6000);
})();

// confirm before deleting user
(function() {
  document.querySelector('.deleteUser').addEventListener('click', function(e) {
    var deleteUser = confirm("Do you really want to delete your account");
    if (deleteUser == true) {
      document.querySelector('#deleteuserform').submit();
    } else {
      e.preventDefault();
    }
  });
})();

// animate username
(function() {
  var elem = document.querySelector('.elem');
  var eleAttr = elem.getAttribute("data-attr").trim();

  (function() {
    var inc = 0;
    function dec(name) {
      var data = name.split("");

      if(inc < data.length) {
        elem.innerHTML += data[inc];
      }
      elem.removeAttribute("data-attr", "");
      inc++;
    }
    setInterval(function(){
      dec(eleAttr);
    }, 100);
  })();

  // go back button
  (function() {
    $('.gobackbtn').click(function () {
      window.history.back();
    });
  })();
})();
