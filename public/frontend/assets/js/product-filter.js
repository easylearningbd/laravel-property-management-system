howMany = 12;
listButton = $('button.list-view');
gridButton = $('button.grid-view');
wrapper = $('div.wrapper');

listButton.on('click',function(){
    
  gridButton.removeClass('on');
  listButton.addClass('on');
  wrapper.removeClass('grid').addClass('list');
  
});

gridButton.on('click',function(){
    
  listButton.removeClass('on');
  gridButton.addClass('on');
  wrapper.removeClass('list').addClass('grid');
  
});
