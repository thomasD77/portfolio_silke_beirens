    var userFeed = new Instafeed({
        get: 'user',
        sortBy: 'most-recent',
        target: "instafeed-container",
        resolution: 'standard_resolution',
        limit: 8,
        accessToken: 'IGQVJVWHkyWUxTVWZAPekhVWEI2Y0FCVG55WUVzbkhDMkpXWmR6MjJQQkZAOdnN1TjFUNDBtSmxBNXVXdUl2bFBrY0pSTkZAqSWZAwUjdqT25leVRLX0xMclVadEVwZAjY5VnNyOEtkc0p4ZAzBMcjhINlhheQZDZD',
        template: '<div class="col-lg-3 instaimg d-flex justify-content-center"><a href="{{link}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
    });

    userFeed.run();





