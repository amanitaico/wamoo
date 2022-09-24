const his =$('#js-history');
const pro =$('#js-product');
const look =$('#js-lookbook');
const con =$('#js-contact');

const his_t =$('.his-text');
const pro_t =$('.product-text');
const look_c=$('.lookbook-contents');
const con_f=$('.contact-form');


//切り替え方、他の方法ありそう。考える

$(function(){
  his.on('click',function(){
    if (his_t.hasClass("active")){
       his_t.removeClass("active");
       pro_t.removeClass("active");
       look_c.removeClass("active");
       con_f.removeClass("active");
     }
   else {
      his_t.addClass("active");
      pro_t.removeClass("active");
      look_c.removeClass("active");
      con_f.removeClass("active");
    }
  });
});

$(function(){
  pro.on('click',function(){
    if (pro_t.hasClass("active")){
       his_t.removeClass("active");
       pro_t.removeClass("active");
       look_c.removeClass("active");
       con_f.removeClass("active");
     }
   else {
      his_t.removeClass("active");
      pro_t.addClass("active");
      look_c.removeClass("active");
      con_f.removeClass("active");
    }
  });
});

$(function(){
  look.on('click',function(){
    if (look_c.hasClass("active")){
       his_t.removeClass("active");
       pro_t.removeClass("active");
       look_c.removeClass("active");
       con_f.removeClass("active");
     }
   else {
      his_t.removeClass("active");
      pro_t.removeClass("active");
      look_c.addClass("active");
      con_f.removeClass("active");
    }
  });
});

$(function(){
  con.on('click',function(){
    if (con_f.hasClass("active")){
       his_t.removeClass("active");
       pro_t.removeClass("active");
       look_c.removeClass("active");
       con_f.removeClass("active");
     }
   else {
      his_t.removeClass("active");
      pro_t.removeClass("active");
      look_c.removeClass("active");
      con_f.addClass("active");
    }
  });
});