
$(document).ready(function () {
    var feed = new Instafeed({
        get: 'user',
        tagName: 'doggies',
        clientId: '2117c2522df24eada7f6149953739100',
        userId:'7290986099',
        
        template: '<div class="block4 wrap-pic-w"><img src="{{image}}" alt"IMG-INSTAGRAM> <a href="{{https://www.instagram.com/adaptspace/}}" class="block4-overlay sizefull ab-t-l trans-0-4"><span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25"></a></div> ' 
        
        
        
    });
    feed.run();
   
})
