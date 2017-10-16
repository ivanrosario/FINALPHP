$(".Purchase").hide();

$("#Item").submit(function(e){
  e.preventDefault();
  $(".Purchase").toggle(1000);
})