// start jquery
$(document).ready(function() {

	// btn_return_sn
	$('.btn_return_sn').on('click', function () {
		btn = $(this)
      $.ajax({
         url: "/orders/get.php?return_sn",
         type: "POST",
         dataType: "html",
         data: ({ id: btn.data('id'), }),
         success: function(data){ 
            if (data == 'yes') location.reload();
            console.log(data);
         },
         beforeSend: function(){ },
         error: function(data){ }
      })
	})



	// 
	$('.on_delete').on('click', function () {
		btn = $(this)
      $.ajax({
         url: "/orders/get.php?delete",
         type: "POST",
         dataType: "html",
         data: ({ id: btn.data('id'), }),
         success: function(data){ 
            if (data == 'yes') location.reload();
            console.log(data);
         },
         beforeSend: function(){ },
         error: function(data){ }
      })
	})


   // 
	$('.on_staff').on('change', function () {
      // id = $(this).children('option:selected').attr('data-id')
		btn = $(this)
      $.ajax({
         url: "/orders/get.php?change_staff",
         type: "POST",
         dataType: "html",
         data: ({ 
            id: btn.children('option:selected').attr('data-id'),
            order_id: btn.attr('data-order-id'),
         }),
         success: function(data){ 
            // if (data == 'yes') location.reload();
            console.log(data);
         },
         beforeSend: function(){ },
         error: function(data){ }
      })
	})


   // 
	$('.on_status').on('change', function () {
      // id = $(this).children('option:selected').attr('data-id')
		btn = $(this)
      $.ajax({
         url: "/orders/get.php?change_status",
         type: "POST",
         dataType: "html",
         data: ({ 
            id: btn.children('option:selected').attr('data-id'),
            order_id: btn.attr('data-order-id'),
         }),
         success: function(data){ 
            // if (data == 'yes') location.reload();
            console.log(data);
         },
         beforeSend: function(){ },
         error: function(data){ }
      })
	})


}) // end jquery