



        function lettersOnly(input) {
            var regex = /[^a-z]/gi;
            input.value = input.value.replace(regex, "");
        }
        
        function numbersOnly(input){
            var num =  /[^0-9-()]/g;
            input.value = input.value.replace(num, "");
        }
  

function nextOne(){
     document.getElementsByClassName('hide')[0].className = "show";
     document.getElementsByClassName('show')[0].className = "hide";
   
    
}
function nextTwo(){
     document.getElementsByClassName('hide')[1].className = "show";
     document.getElementsByClassName('show')[0].className = "hide";
   
   
}
function nextThree(){
    document.getElementsByClassName('hide')[2].className = "show";
    document.getElementsByClassName('show')[0].className = "hide";
    
     
}

        

function finish(){
    document.getElementsByClassName('hide')[3].className = "show";
    document.getElementsByClassName('show')[0].className = "hide";
    
        
           
                rs = document.getElementById('restaurante_name').value;
              fn = document.getElementById('first_name').value; 
              ln = document.getElementById('last_name').value;
              email = document.getElementById('email').value;   
              u = document.getElementById('username').value;
              pw = document.getElementById('password').value;
              st = document.getElementById('street').value;
              ct = document.getElementById('city').value;
              stt = document.getElementById('state').value;
              zp = document.getElementById('zip').value;
              cnt = document.getElementById('country').value;    
              ph = document.getElementById('phone').value;
              py = document.getElementById('payment_method').value;
              cu = document.getElementById('currency').value;
              cn = document.getElementById('card_number').value;
              cm = document.getElementById('card_month').value;
              cy = document.getElementById('card_year').value;
              cv = document.getElementById('card_verification').value;
               
                
              document.getElementById('para').innerHTML ="<p>"+"Name: "+fn+" "+ln+"</p><p>"+"Password: "+ pw+"</p><p>"+"Email Address: "+ email+"</p><p>"+"Restaurante name: "+rs+"</p><p>"+" Address:"+"</p><p>"+st+"<p>"+ct+" "+stt+" "+zp+"</p>"+cnt+"<p>"+"Phone number: "+ph+"</p><p>"+"payment method: "+ py+"</p><p>"+"Currency: "+ cu+"</p><p>"+"card_number: "+ cn+"</p><p>"+"card_month: "+ cm+"</p><p>"+"card_year: "+ cy+"</p><p>"+"card_verification: "+ cv+"</p>";
    
     
}

function backTwo(){
      
    document.getElementsByClassName('show')[0].className = "hide";
    document.getElementsByClassName('hide')[0].className = "show";
   
   
}
function backThree(){
    document.getElementsByClassName('show')[0].className = "hide";
     document.getElementsByClassName('hide')[1].className = "show";
     
}
function backFour(){
   document.getElementsByClassName('show')[0].className = "hide";
    document.getElementsByClassName('hide')[2].className = "show";
    
}

function backFive(){
   document.getElementsByClassName('show')[0].className = "hide";
    document.getElementsByClassName('hide')[3].className = "show";
    
    
}
        
