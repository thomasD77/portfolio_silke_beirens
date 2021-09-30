    var userFeed = new Instafeed({
        get: 'user',
        sortBy: 'most-recent',
        target: "instafeed-container",
        resolution: 'standard_resolution',
        limit: 8,
        accessToken: 'IGQVJVMDdlWmV6OXdwZAjJPSkJXZAU1mMFFEU2VNLXpaamY2MkVHcTRBQldzZADJ3dEctcUdKN2d4YnEwN1BJbHAxUTBkQTdxWVFBTkRCbjJhYjBnNGxSMVFRMTd6clpWZAjhmb0c1LUg5ZAzN2RWRydlM3QwZDZD',
        template: '<div class="col-lg-3 instaimg d-flex justify-content-center"><a href="{{link}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
    });

    userFeed.run();





