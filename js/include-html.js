// include-html.js
(function() {
  
    var elements = document.querySelectorAll('[include-html]');
    Array.prototype.forEach.call(elements, function(el) {
      var file = el.getAttribute('include-html');
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          el.innerHTML = this.responseText;
          el.removeAttribute('include-html');
        }
      };
      xhttp.open('GET', file, true);
      xhttp.send();
    });
  })();