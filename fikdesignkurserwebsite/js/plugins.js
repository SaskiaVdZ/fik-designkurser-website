console.log("Nothing to see here... move along");

window.addEventListener("load", function() {
window.cookieconsent.initialise({
"palette": {
  "popup": {
    "background": "#000"
  },
  "button": {
    "background": "#ffea00"
  }
},
"content": {
  "message": "Denna sidan använder sig av cookies. Vill du acceptera cookies? ",
  "dismiss": "Ja, jag accepterar cookies",
  "link": "Läs mer"
}
})
});

$(document).ready(function() {
$("nav").headroom({
          "offset": 205,
          "tolerance": 5,
  
      });
  });
    
      $(document).ready(function() {
          // check for hash when page has loaded
          if (getHash() != null) {
              checkForScrolling();
          }
      });
      // check for hash when hash has changed
      window.onhashchange = function() {
          checkForScrolling();
      };
      // return hash if so or null if hash is empty
      function getHash() {
          var hash = window.location.hash.replace('#', '');
          if (hash != '') {
              return hash;
          } else {
              return null;
          }
      }
      // this function handles your scrolling
      function checkForScrolling() {
          // first get your element by attribute selector
          var elem = $('[data-anchor="' + getHash() + '"]');
          // cheeck if element exists
          if (elem.length > 0) {
              $('html, body').stop().animate({
                  scrollTop: elem.offset().top
              }, 1250);
          }
      }
  
      $(document).ready(function() {
          $('#mobileNumber').mask("999 9999 999");
          $('#personnummer').mask("999999-9999");
      });
  
      $(document).ready(function() {
          $('input').click(function() {
              $('input:not(:checked)').parent().removeClass("checked");
              $('input:checked').parent().addClass("checked");
          });
      });  

      $('#email-address').bind('copy paste', function(e) {
          e.preventDefault();
      });
      
      $('#email-address-confirm').bind('paste', function(e) {
          e.preventDefault();
      });
      
      $(document).ready(function() {
          $('#ansokan').on('blur', ':input', function() {
              $('#ansokan').find(':input').not(this).trigger('blur.isHappy');
          });
          $('#ansokan').isHappy({
              when: 'blur.isHappy',
              fields: {
                  '#firstName': {
                      required: true,
                      message: 'Du behöver fylla i förnamn.'
                  },
                  '#lastName': {
                      required: true,
                      message: 'Du behöver fylla i efternamn.'
                  },
                  '#email-address': {
                      required: true,
                      message: 'Du behöver fylla i en korrekt e-postadress.',
                      test: happy.email
                  },
                  '#email-address-confirm': {
                      required: true,
                      message: 'Du måste skriva in din e-postadress två gånger.',
                      arg: function() {
                          return $('#email-address').val();
                      },
                      test: [happy.equal, happy.email]
                  },
                  '#personnummer': {
                      required: true,
                      message: 'Vänligen fyll i korrekt personnummer för att gå vidare.',
                      test: [happy.personummer, happy.maxLength],
                      arg: [13]
                  },
                  '#mobileNumber': {
                      required: true,
                      message: 'Vänligen fyll i ditt mobilnummer.'                      
                  },
                  '#age': {
                    required: true,
                    message: 'Vänligen fyll i.'                      
                },
                  '#comment': {
                    required: true,
                    message: 'Vänligen fyll i.'                      
                }
              }
          });
      });