$('#firstbtn').click(function()
      {
 		   $('body').append('<div id="wrapper"></div>');
       $('#wrapper').fadeIn(function(){
          $('body').append('<div id="lightbox"><iframe width="800" height="500" src="https://www.youtube.com/embed/KRt88eSIHIk?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><button id="close">Close</button></div>');
          $('#lightbox').fadeIn();

          $('#close').click(function(){
          $('#lightbox').fadeOut(function(){
            $('#wrapper').fadeOut();
          });
        });
       });	
	});

$('#indolink').click(function()
      {
       $('body').append('<div id="wrapperindo"></div>');
       $('#wrapperindo').fadeIn(function(){
          $('body').append('<div id="lightboxindo"><iframe width="800" height="500" src="https://www.youtube.com/embed/hcB0Hi80HhA?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><button id="closeindo">Close</button></div>');
          $('#lightboxindo').fadeIn();

          $('#closeindo').click(function(){
          $('#lightboxindo').fadeOut(function(){
            $('#wrapperindo').fadeOut();
          });
        });
       });  
});

$('#malaysia_link').click(function()
      {
       $('body').append('<div id="wrapper_malaysia"></div>');
       $('#wrapper_malaysia').fadeIn(function(){
          $('body').append('<div id="lightbox_malaysia"><iframe width="800" height="500" src="https://www.youtube.com/embed/2s16Whl_cjA?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><button id="close_malaysia">Close</button></div>');
          $('#lightbox_malaysia').fadeIn();

          $('#close_malaysia').click(function(){
          $('#lightbox_malaysia').fadeOut(function(){
            $('#wrapper_malaysia').fadeOut();
          });
        });
       });  
  });

$('#singapore_link').click(function()
      {
       $('body').append('<div id="wrapper_singa"></div>');
       $('#wrapper_singa').fadeIn(function(){
          $('body').append('<div id="lightbox_singa"><iframe width="800" height="500" src="https://www.youtube.com/embed/UMaw7_DGUaU?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><button id="close_singa">Close</button></div>');
          $('#lightbox_singa').fadeIn();

          $('#close_singa').click(function(){
          $('#lightbox_singa').fadeOut(function(){
            $('#wrapper_singa').fadeOut();
          });
        });
       });  
  });

$('#indo_2016').click(function()
      {
       $('body').append('<div id="wrapper_in2016"></div>');
       $('#wrapper_in2016').fadeIn(function(){
          $('body').append('<div id="lightbox_in2016"><iframe width="800" height="500" src="https://www.youtube.com/embed/h6md_Zml86o?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><button id="close_in2016">Close</button></div>');
          $('#lightbox_in2016').fadeIn();

          $('#close_in2016').click(function(){
          $('#lightbox_in2016').fadeOut(function(){
            $('#wrapper_in2016').fadeOut();
          });
        });
       });  
  });


$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});


$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#home a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});

