

    var feed = new Instafeed({
        get: 'user',
        tagName: 'doggies',
        clientId: 'd780b8cd6adc4a64ba8b3c3689bf14f4',
        userId:'175020448',
        accessToken: '4412847056.1677ed0.3c3a3acf59b34db88db08c2c8a4507cf',
        template: '<div class="block4 wrap-pic-w"><img src="{{image}}" alt"IMG-INSTAGRAM> <a href="{{link}}" class="block4-overlay sizefull ab-t-l trans-0-4"><span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25"></a></div> ' 
    });
    feed.run();
   

