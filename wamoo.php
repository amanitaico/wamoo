<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <title>W/M</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="wamoo.css">
    
</head>

<body>
  <main>
    <div class="shield">
    <h1>W/M</h1>

    <div class="header">
      <div >
        <ul class="nav_list">
            <li><a href="#" class="nav_list_item" id="js-history">HISTORY</a></li>
            <li><a href="#" class="nav_list_item" id="js-product">PRODUCT</a></li>
            <li><a href="#" class="nav_list_item" id="js-lookbook">LOOKBOOK</a></li>
            <li><a href="#" class="nav_list_item" id="js-contact">CONTACT</a></li>
        </ul>
      </div>
    </div>  
  

   <div class="his-text">In 1946 he founded the company and in the postwar years supplied furniture, mainly chairs, to hospitals, schools, and universities in France, where his innovative designs were accepted and invaded the domestic market.
       In 1965, the company Rosé was founded. Full-scale production of contemporary furniture began. <br>
       At the same time, collaboration with designers began.<br>
       In 1968, the company developed a sofa with an all-urethane construction, a revolution in the furniture market at that time. (The prototype of the ROSETTOGO began at this time.)

       In 1973, Michel Ducarrois's "ROSETTOGO" was presented at the Paris International Furniture Fair, where it was so well received that it quickly became a design influence around the world.
       In the same year, the first ligne roset shop (directly managed) was opened in Paris.
    </div>

    <div class="product-text"><span style=font-weight:bold;>FURNITURE</span><br>With a passion for creating homes that are just as compelling as the clients t
        hat live in them, Tollgard’s work feels contemporary, inspirational and consistently exciting. Perhaps it is Staffan Tollgard’s previous career in film-makin
        <br><br><span style=font-weight:bold;>LIGHTNG</span><br>With a passion for creating homes that are just as 
        compelling as the clients that live in them, Tollgard’s work feels contemporary, inspirational and consistently exciting. Perhaps it is Staffan Tollgard’s 
        previous career in film-makin<br><br><span style=font-weight:bold;>OUTDOOR</span><br>Anishka Clarke and Niya Bascom 
        describe their firm's style as minimal and unrefined. Their combination of artisanal crafts and mindful minimalism are visible throughout their extensive portfolio of projects. Often inspired by t
        heir Caribbean upbringing, Clarke and Bascom are focussed on sustainability, 
    </div>

    <div class="lookbook-contents">
       <div class="lookbook-contents-item">
          <a href="lookdetail.html#look1" ><img src="img/images.jpeg" alt=""></a>
          <a href="lookdetail.html#look3" ><img src="img/images-3.jpeg" alt=""></a>
          <a href="lookdetail.html#look4" ><img src="img/images-4.jpeg" alt=""></a>
          <a href="lookdetail.html#look5" ><img src="img/images-5.jpeg" alt=""></a>
          <a href="lookdetail.html#look6" ><img src="img/images-6.jpeg" alt=""></a>
          <a href="lookdetail.html#look7" ><img src="img/images-7.jpeg" alt=""></a>
          <a href="lookdetail.html#look8" ><img src="img/images-8.jpeg" alt=""></a>
          <a href="lookdetail.html#look2" ><img src="img/images-2.jpeg" alt=""></a>
       </div>
       <div class="btn_more">
           <a href="lookbook.html">more >></a>
       </div>
    </div>
    

    <form class="contact-form" action="confirm.php" method="post">
        <div class="contact-box">

            <div class="contact-left">
                 <p>Name</p>
                 <input name="name" size="25" class="box" required>
                 <p>E-mail</p>
                 <input name="email" size="25" class="box" required>
                 <p>Membership number</p>
                 <input name="number" size="25" class="box" required>
                 <div class="country">
                   <p>Country</p>
                   <select name="country" required>
                     <option value="-select-">select</option>
                     <option value="Japan">Japan</option>
                     <option value="Mexico">Mexico</option>
                     <option value="Nethrlandas">Netherlands</option>
                     <option value="India">India</option>
                     <option value="Ethiopia">Ethiopia</option>
                     <option value="Germany">Germany</option>
                     <option value="Denmark">Denmark</option>
                   </select>

                 </div>
           </div>
           
           <div class="contact-right">
                 <p>Inquiries</p>
                 <textarea name="inquiries" rows="10" cols="40" class="box"></textarea><br>
                 <input type="submit" value=">>" class="btn">
           </div>
           
       </div>

    </form>
    </div>
  </main>

 <footer><p>&copy;2022 All Rightd Reserved </p></footer>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src="wamoo.js"></script>
</body>
</html>