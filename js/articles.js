    // Left News Article
    $.ajax({
		url: 'https://newsapi.org/v2/top-headlines?sources=ign&apiKey=16df408d15514a2890b209e8921b3dfd',
		type: 'GET',
		dataType: 'json',
		success: function (data) {
			console.log(data);
			for (var i = 0; i < 1; i++) {
                $('#game-news').append('<div class="item active"><img src="' + data.articles[i].urlToImage + '" class="img-responsive" style="width:100%;"></div>')
                $('#links-title').append('<h3>' + data.articles[i].title + '</h3>')
				$('#links').append(data.articles[i].description  + '<br></br><h6>' + "<a href='"+ data.articles[i].url +"' target='_blank'>Click here to read more of this article</a><br></br>")
				
			}

		}
    });
    
        // Right News Article
        $.ajax({
            url: 'https://newsapi.org/v2/top-headlines?sources=ign&apiKey=16df408d15514a2890b209e8921b3dfd',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                console.log(data);
                for (var i = 1; i < 2; i++) {
                    $('#game-news2').append('<div class="item active"><img src="' + data.articles[i].urlToImage + '" class="img-responsive" style="width:100%;"></div>')
                    $('#links-title2').append('<h3>' + data.articles[i].title + '</h3>')
                    $('#links2').append(data.articles[i].description  + '<br></br><h6>' + "<a href='"+ data.articles[i].url +"' target='_blank'>Click here to read more of this article</a><br></br>")
                    
                }
    
            }
        });

        // Bottom Left News Article
        $.ajax({
            url: 'https://newsapi.org/v2/top-headlines?sources=ign&apiKey=16df408d15514a2890b209e8921b3dfd',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                console.log(data);
                for (var i = 2; i < 3; i++) {
                    $('#game-news3').append('<div class="item active"><img src="' + data.articles[i].urlToImage + '" class="img-responsive" style="width:100%;"></div>')
                    $('#links-title3').append('<h3>' + data.articles[i].title + '</h3>')
                    $('#links3').append(data.articles[i].description  + '<br></br><h6>' + "<a href='"+ data.articles[i].url +"' target='_blank'>Click here to read more of this article</a><br></br>")
                    
                }
    
            }
        });

        // Bottom Right News Article
        $.ajax({
            url: 'https://newsapi.org/v2/top-headlines?sources=ign&apiKey=16df408d15514a2890b209e8921b3dfd',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                console.log(data);
                for (var i = 3; i < 4; i++) {
                    $('#game-news4').append('<div class="item active"><img src="' + data.articles[i].urlToImage + '" class="img-responsive" style="width:100%;"></div>')
                    $('#links-title4').append('<h3>' + data.articles[i].title + '</h3>')
                    $('#links4').append(data.articles[i].description  + '<br></br><h6>' + "<a href='"+ data.articles[i].url +"' target='_blank'>Click here to read more of this article</a><br></br>")
                    
                }
    
            }
        });