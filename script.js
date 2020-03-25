
$(function() {
  ["url"].forEach(function(field) {
    $("#" + field).attr("required", true);
  });

  $("#ver").click();
  $(".shorturl").submit(function(e) {
    $(".mdl-spinner").fadeIn("slow").css("display", "inline-block");
    e.preventDefault();
    var baseUrl = "https://abro.ga/";
    var url = $("#url").val();
    var text = $("#text").val();
    if($("#text").val() == ""){
	var min = 3000;
	var max = 10000000000;
	$gerado =  Math.floor(Math.random() * (max - min + 1)) + min;
	var dados = {
		number: $gerado
	}
	var status = $.post('gerate_post.php', dados, function(retorna){
		text = retorna;
        });
    }else{
	
	var status = $.post('gerate_post.php', dados, function(retorna){ var b = 1;   });
    }
    status.done(function () {
	document.getElementById('ver').click();
    	$.ajax({
      		url: "short_post.php",
      		data: {
        		url: url,
        		short_url: text
      		},
      		error: function(jqXHR, textStatus, errorThrown) {
        		$(".mdl-spinner").fadeOut("fast");
        		if (jqXHR.status == 409) {
          			$(".success-help")
            			.val(
              				"" + text + " is already taken, please use another text!"
            			);
        		} else {
          		$(".success-help").val("An error has occurred");
        	}
      	},
      	success: function(data) {
        	$(".mdl-spinner").fadeOut("fast");
        	["url", "text"].forEach(function(field) {
          		$("#" + field).val("");
        	});

		if(data == "jatem"){
			$(".success-help")
            		.val(
              			"(" + text + ") Já está sendo usando em uma url, tente outra!"
            		);
		}
		else if (data == "certo"){
			$(".success-help").val(baseUrl+text);
		}else{
			$(".sucess-help").val(data);
		}
	},
      type: "POST"
    });});
  });
});

