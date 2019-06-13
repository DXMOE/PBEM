document.body.addEventListener('mousemove',function(e){
  var top = e.pageY;
  var left = e.pageX;
  var torch = document.getElementById('torch');
  torch.style.clip = "rect("+(top-70)+"px,"+left+"px,"+top+"px,"+(left-70)+"px)";
});