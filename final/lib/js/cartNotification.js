$(".Purchase").hide();

$("#Item").submit(function(e){
  e.preventDefault();
  $(".idProduct").hide(2000, function(){
    $(".Purchase").show(2000, function(){
    })
  })
});