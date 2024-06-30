<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Simple Web Page</title>
<link rel="stylesheet" href="style.css">
<style>
  .div {
    background-color: lightgrey;
    width: 1150px;
    border: 5px solid rgb(11, 255, 3);
    padding:20px;
    margin: 20px;
    margin-left:40px;
  }
  /* CSS code */
.join-button {
  display: flex;
  justify-content: center; /* center the element horizontally */
  margin-top: 30px; /* add spacing from the top */
}
.join-button a {
  padding: 12px 24px; /* add padding around the text */
  background-color: #007bff; /* set background color */
  color: #fff; /* set text color */
  text-decoration: none; /* remove underline for the link */
  border-radius: 6px; /* add rounded corners for the button */
}
.join-button a:hover {
  background-color: #0062cc; /* change background color on hover */
}
.div1 {
    background-color: lightgrey;
    width:550px;
    border: 5px solid rgb(207, 247, 3);
    margin: 5px;
    height:150px;
    padding:10px;
    margin-left:350px;
    
  }
     
  
  </style>
</head>
<body style="background-color: hotpink;">
<!-- Content -->
<div class="content">
<div class="header">
  <nav class="navbar">
    <div class="tit">
      <h1 class="title">THE BREED HEAVEN HUB</h1>
      <h3 class="title">ALL IN ONE PET SOLUTION</h3>
    </div>
    <div class="col1">
      <nav>
        <ul>
          <li><a href="home.php">HOME</a></li>
          <li><a href="shop.php">SHOP</a></li>
          <li><a href="adopt.php">ADOPT</a></li>
        </ul>
      </nav>
    </div>
  </nav>
</div>
<div class="div">
  <h1 >Importance of Adoption</h1>
    <pre style="font-size: larger;line-height:25px;">
     When we think of getting a pet, stray dogs and cats never come to mind because of the long-held  perception that they are
    ‘dirty’ or ‘less than’ compared to expensive purebred pets that people generally prefer.Most people don’t realise that 
    strays are equally capable of being lovable pets in our homes as any fancy breed that can be purchased.
    Here are some reasons why you should adopt strays:
    <mark>*They are low maintenance</mark>
    <mark>*Strong immunity</mark>
    <mark>*Highly intelligent</mark>
    <mark>*Loyalty</mark>
   Sharing a home with someone who needs it Similar to helping out a friend in need, providing strays a safe refuge with food 
   and shelter is the biggest boon they could ask for. It is all they want and desire along with your love and affection.
   By sharing your home with them, you not only take care of their needs, but also save their lives.Unlike pure breeds,
   stray animals don’t come with an exorbitant price tag. Pure breeds often come with many hereditary diseases and breeders
   are unable to guarantee how long they will live.This is not an issue with strays thanks to their strong immunity and 
   healthy bodies. Strays do not require expensive medical procedures unlike pure breeds, and hardly ever need to go to the vet.
  </pre></div>
<hr>
<div class="div1">
 <p style="font-size: larger;line-height:25px;">
  let us join with us to adopt stray animals and give them new life!!</p>
  <div class="join-button">
    <a href="dog.php">join with us</a>
  </div>
</div>

<section id="footer">
  <div class="card text-center">
   
    <div class="card-body" style="background-color: aqua;">
      <h2 class="card-title" style="text-align: center;color: crimson;">THE BREED HEAVEN HUB</h2>
      <p class="end" style="text-align: center;">Thank You , Come Again !!!</p>
    </div>
    <div class="card-footer text-muted">  <!--to keep space btw edge of page-->
       <p></p>
       <p></p>
    </div>
  </div>
</section>



</body>
</html>