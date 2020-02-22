      function myFunction() {
          alert("Hello! I am an alert box!");
      }
      //incremeant cost
      var x,z,a,b,c,d,discount;
      function plus() {
           x = document.getElementById("cost").innerHTML;
          
           z = parseInt(x);
           
          z = z+519;
          document.getElementById("cost").innerHTML= z;
          d = z;
          
              

            a = document.getElementById("number").innerHTML;
          b= parseInt(a);
          b = b+1;
          document.getElementById("number").innerHTML= b;
         
           if(b==1)
           {
            document.getElementById("cost2").innerHTML= d;
           }  
           else if(b==2 || b==3)
            {
              discount = d - d*5/100;
              document.getElementById("cost2").innerHTML= discount;

            } 
         else if(b==4 || b==5)
            {
              discount = d - d*10/100;
              document.getElementById("cost2").innerHTML= discount;

            }
        else if(b==6 || b>6)
            {
              discount = d - d*15/100;
              document.getElementById("cost2").innerHTML= discount;

            }   
           
      }

        
      //minus cost
      function minus() 
      {
           x = document.getElementById("cost").innerHTML;
           c = document.getElementById("conference_cost").innerHTML;
           z= parseInt(x);
           d = parseInt(c);
          if(z>0)
          {
             z = z-499;
            document.getElementById("cost").innerHTML= z;

           d = z;
            /*document.getElementById("cost2").innerHTML= d; */   

             a = document.getElementById("number").innerHTML;
             b= parseInt(a);
            b = b-1;
             
            document.getElementById("number").innerHTML= b;


             if(b==1 || b==0)
           {
            document.getElementById("cost2").innerHTML= d;
           }  
           else if(b==2 || b==3)
            {
              discount = d - d*5/100;
              document.getElementById("cost2").innerHTML= discount;

            } 
         else if(b==4 || b==5)
            {
              discount = d - d*10/100;
              document.getElementById("cost2").innerHTML= discount;

            }
        else if(b==6 || b>6)
            {
              discount = d - d*15/100;
              document.getElementById("cost2").innerHTML= discount;

            } 
            

          }
         
      }

      //info function

      function info(){
        document.getElementById("information").style.display = "block";
        document.getElementById("info").style.display = "none";
        document.getElementById("lessinfo").style.display = "block";
      }
      function lessinfo(){
        document.getElementById("information").style.display = "none";
        document.getElementById("info").style.display = "block";
        document.getElementById("lessinfo").style.display = "none";
      }