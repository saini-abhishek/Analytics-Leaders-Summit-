//form
$(document).ready(function(){
        $('#btn1').click(function(){
          
          var name = $('#name').val();
          var email = $('#email').val();
          var phone = $('#phone').val();
          var company = $('#company').val();
          var designation = $('#designation').val();

          //error message
          if (name == '' || email == '' || phone == '' || company == '' || designation == '') {
            $('#error_message').html("All fields are required.");
          }
          else
          {
            $('#error_message').html('');
            $.ajax({
              url:"default-new.php",
              method: "POST",
              data:{name:name, email:email, phone:phone, company:company, designation:designation, message:message},
              success:function(data){
                $("form").trigger("reset");
              }
            });
          }
        });
      });
