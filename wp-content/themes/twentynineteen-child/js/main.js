jQuery(document).ready(function($){
    // Show all dogs (with or without allergies) but mind the breed selection
    $("#all-dogs").on("click", function(){
      $(".doggo").each(function(){
        let breed = $("#dog-breed").val();

        if ((breed == 'all' || $(this).data("breed") == breed)) {
          $(this).fadeIn("slow").show();
        } else {
          $(this).fadeOut("slow").hide();
        }
      });
    });

    // Show only dogs with allergies
    $("#allergies-dogs").on("click", function(){
      $(".doggo").each(function(){
        let breed = $("#dog-breed").val();

        if ((breed == 'all' || $(this).data("breed") == breed)
              && $(this).data("allergies") == 'yes') {
          $(this).fadeIn("slow").show();
        } else {
          $(this).fadeOut("slow").hide();
        }
      });
    });

    // Show dogs by selected dog breed
    $("#dog-breed").on("change", function(){
      let breed = $(this).val();

      let allergy = $("input[name='allergy-options']:checked").val();
      
      $(".doggo").each(function(){
        if ((breed == 'all' || $(this).data("breed") == breed)
              && (allergy == 'no' || $(this).data("allergies") == allergy)) {
          $(this).fadeIn("slow").show();
        } else {
          $(this).fadeOut("slow").hide();
        }
      });
    });
});
