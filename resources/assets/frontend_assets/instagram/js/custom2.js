    var userFeed = new Instafeed({
        get: 'user',
        sortBy: 'most-recent',
        target: "instafeed-container",
        resolution: 'standard_resolution',
        limit: 8,
        accessToken: 'IGQVJXUWljNHI0aUtpN0ctOVdqdzlRU1MzTzRrelp0ZAmlTZAHRCZA3RDNThKcjdpaFdCR0RaSDlMQXVaMVdhbFdVdFJVdWE4MG9CU0xSZAm9oMlNaV0lIZAUw1TFZARYkc4Tkkyc0c1cGluYjRvNnRZAbDBOQwZDZD',
        template: '<div class="col-lg-3 instaimg d-flex justify-content-center"><a href="{{link}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
    });

    userFeed.run();





