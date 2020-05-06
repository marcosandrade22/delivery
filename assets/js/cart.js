
function cartAction(action,product_code) {
var queryString = "";
	if(action != "") {
		switch(action) {
			case "add":
				queryString = 'action='+action+'&id_produto='+ product_code+'&quantidade='+$("#qty_"+product_code).val();
                                console.log('added');
                        break;
			case "remove":
				queryString = 'action='+action+'&code_produto='+ product_code;
                                location.reload();
                                console.log('removido');
			break;
			case "empty":
				queryString = 'action='+action;
                                console.log('limpo');
                                location.reload();
			break;
		}	 
	}
        
        
	jQuery.ajax({
	url: "produtos/ajax_action",
	data:queryString,
	type: "POST",
	success:function(data){
		$("#cart-item").html(data);
                var url="produtos/ajax_dot";
                jQuery("#dot-bag").load(url);
                jQuery("#dot-cart").load(url);
                
		if(action != "") {
                        
			switch(action) {
				case "add":
					$("#add_"+product_code).hide();
					$("#added_"+product_code).show();
                                        $("#display_cart").show("slow", function() {
                                            });
                                        
				break;
				case "remove":
					$("#add_"+product_code).show();
					$("#added_"+product_code).hide();
                                        
                                        
				break;
				case "empty":
					$(".btnAddAction").show();
					$(".btnAdded").hide();
				break;
			}	 
		}
	},
	error:function (){}
	});	
}

        