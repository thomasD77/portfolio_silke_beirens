    var userFeed = new Instafeed({
        get: 'user',
        sortBy: 'most-recent',
        target: "instafeed-container",
        resolution: 'standard_resolution',
        limit: 8,
        accessToken: 'IGQVJXRXFkTy1XOGJJMHFxZAWg2dThlMFNMMzhRcnJVSFh2MDJzM2lkTlZA4MDdZAYkhiWHpkcGZASU0xmV0ZAyNENJWkQwQ1F0QldxRGlkZA3pTVHZAheVQ2X2FsdDFvcHI4QjU4NV9zOGR3N2JRaV8zNkxkdwZDZD',
        template: '<div class="col-lg-3 instaimg d-flex justify-content-center"><a href="{{link}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
    });

    userFeed.run();





