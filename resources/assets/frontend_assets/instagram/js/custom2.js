    var userFeed = new Instafeed({
        get: 'user',
        sortBy: 'most-recent',
        target: "instafeed-container",
        resolution: 'standard_resolution',
        limit: 8,
        accessToken: 'IGQVJVazI2VExvRU80OVBjZAXhzb282U3RzLUZAvdnpGR2dWWDFudy1hU1VsSmU3bFVrSlFPdGVwa0pBWG0zaXd3MmdrZAHQ1SzRpY3lIOGdTdXVPX1BTcDRJaElqWmJSYzNhSm1aQ285VnNfODFrSW5JTQZDZD',
        template: '<div class="col-lg-3 instaimg d-flex justify-content-center"><a href="{{link}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
    });

    userFeed.run();





