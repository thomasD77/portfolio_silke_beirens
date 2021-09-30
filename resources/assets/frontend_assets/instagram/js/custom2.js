    var userFeed = new Instafeed({
        get: 'user',
        sortBy: 'most-recent',
        target: "instafeed-container",
        resolution: 'standard_resolution',
        limit: 8,
        accessToken: 'IGQVJXeUVpdk5hckNQTWl4LUtPNnBEVXpqdHZAxYlY4a2Y1UVQ0S2VtXzFGMFBlaW5YX1ZAQSkdqeVljd3FQRjhzcVBJZADkxdTJUN1hUaHRWVGZAEU01TWVlUNFBocGNHdlpKellMMUZArTEJxaGxId3FUQgZDZD',
        template: '<div class="col-lg-3 instaimg d-flex justify-content-center"><a href="{{link}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
    });

    userFeed.run();





