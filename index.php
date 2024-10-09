<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <tilte>Credit Card Checker</tile>
    <link rel="stylesheet" href="style.css">


  
<head>
    

<h1 class="header">Welcome to BruteForce CCS Checker</h1>


<body>

     <div>
          <h2 class="body" >Bloodlogin </h2>
           
         <form method="post" action="config.php">


         <div>
             <input name="username" type="text" autocomplete="off" required>
            Username
        </div><br>

            <div>
                <input name="Email" type="email" autocomplete="off" required>
                Email                      
            </div><br>
            
            <div>
            <input name="Password" type="password" autocomplete="off" required>
            Password

            </div><br>

            <hr><br>

            <div>
            <input name="gender" type="radio"  value="male">
            male
         </div><br>

         <div>
              <input name="gender" type="radio" value="male">
              female
           </div><br>

           <div>
            <input name="gender" type="radio" value="other">
            other
           </div><br>

           <hr><br>

            <div>
           <select name="paymentmethods">
            <option value="BTC">BTC</option>
            <option value="ETH">ETH</option>
            <option value="PAYPAL">PAYPAL</option>
            <option value="Banktransfer">BANK TRANSFER</option>
            </select>
            Payment Method
            <hr><br>

            <div>

            <input name="CCN" type="tel" inputmode="numeric" maxlenght="19" placeholder="xxxx xxxx xxxx" Required> 
            Enter Your CCN

            </div><br>

            <div>

            <input name="Expiry" type="tel" inputmode="numeric" maxlenght="7" placeholder="MM / YY" Required>
            Expiry

            <div><br>
            <input name="cvc" type="tel" inputmode="numeric" maxlenght="4" placeholder="CVC" Required>
           CVC

       </div>

       <hr><br>



           <input type="submit" value="submit">

           <div>


</form>

   </div>

     </body>
                
        </html>
