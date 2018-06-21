// Soulignage d'un lien quand la souris passe dessus.
$('a').hover(function(){
    $(this).css('text-decoration','underline','text-color', 'red');
  },function(){
    $(this).css('text-decoration','none');
  });
  


