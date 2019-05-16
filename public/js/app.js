$( document ).ready(function() {


    // add new day to the plan
    var i = 0;
    $(".add-day").click(function(){
        $(".container .row").after($('#hidden-card #card').html()); 
        //hack to seperate exercises per days
        i++
        $('#count-days').val(i);
    });   

    // add new exercise box
    $("body").on('click','.add-exercise',function(){    
        $(this).parent().find('.exercises').append($('#hidden-exercise .hidden-exercise').html());
        $(this).parent().find('.exercises').addClass('day'+i);
    });

    // save each new day separately 
    $("body").on('click','.save-day',function(){ 

        var plan_id = $('.plan_id').val();
        var count_days = $('#count-days').val();

        var day_title =  $(this).parent().find('.day_title').val();

        //create an array of all exercise titles in each day
            var exercise_title = [];
        for (var i = 1; i <= count_days; i++) {
            $(this).parent().find('.exercise_title').each(function(index) {
                exercise_title[index] = $(this).val();
            }); 
        }

            var exercise_description = [];
        for (var i = 1; i <= count_days; i++) {
            $(this).parent().find('.exercise_description').each(function(index) {    
                exercise_description[index] = $(this).val();
            }); 
        }

        
        if (day_title ) {
            var params = {'plan_id': plan_id, 'title': day_title, 'exercise_title': exercise_title, 'exercise_description':exercise_description };
            ajax_handler('/api/days', params, 'POST', this); 

            location.reload(); 
        }


    });

    // on saving a new plan 
    $(".add-plan").on('click',function(){

        var plan_title = $('.plan_title').val();
        var user_id = $('#users_select').val();

        var count_days = $('#count-days').val(); // number of days created

        var day_title = {};
        $(".day_title").each(function(index) {
            day_title[index] = $(this).val();
        });

        // assign multi dimensional array contains ['day id']['exercise id']
            var exercise_title = [];
        for (var i = 1; i <= count_days; i++) {
            exercise_title[i-1] = [];
            $(".day"+i +" .exercise_title").each(function(index) {
                exercise_title[i-1][index] = $(this).val();
            }); 
        }

            var exercise_description = [];
        for (var i = 1; i <= count_days; i++) {
            exercise_description[i-1] = [];
            $(".day"+i +" .exercise_description").each(function(index) {
                exercise_description[i-1][index] = $(this).val();
            }); 
        }
              var params = {"title": plan_title,"user_id": user_id,"day_title": day_title,"exercise_title": exercise_title,"exercise_description": exercise_description};

        if (plan_title) {
            
            ajax_handler('/api/plans', params, 'POST', this); 
            setTimeout(function(){ window.location.href = "/"; }, 2500);

        }else{
            $('#notification').html('<div class="alert alert-danger" role="alert">Plan title is empty!</div>');
        }

    });

    $(".btn_add_user").on('click',function(){
        $("#users_list").append($('#hidden-new-user').html());
    });

    //on adding new user
    $("body").on('click','.save-user',function(){

         var firstname =  $(this).parent().find('.firstname').val();
         var lastname =  $(this).parent().find('.lastname').val();
         var email =  $(this).parent().find('.email').val();
         
         var params = { 'firstname': firstname, 'lastname': lastname, 'email': email, 'status' :1};
        
        if (params.firstname !='' && params.lastname !='' && params.email !='') {
            ajax_handler('/api/users', params, 'POST', this);
            location.reload(); // refresh the page
        }else{
            $(this).parent().find('#notification').html('<div class="alert alert-danger" role="alert">Insert all parameters</div>');
         }
    });

    // on updating an existing user
    $(".update-user").on('click',function(){

        var user_id = $('.user_id').val();
        var firstname = $('.firstname').val();
        var lastname = $('.lastname').val();
        var email = $('.email').val();

        var params = {'id':user_id, 'firstname': firstname, 'lastname': lastname, 'email': email, 'status' :1};

        if (params.firstname !='' && params.lastname !='' && params.email !='') {
            ajax_handler('/api/users', params, 'PUT', this);
        }else{
            $(this).parent().find('#notification').html('<div class="alert alert-danger" role="alert">Insert all parameters</div>');
         }
    }); 

    //on deleting a user
    $(".delete-user").on('click',function(){  
        var user_id = $('.user_id').val();
        var params = {};

        var r = confirm("the user will be Deleted, are you sure? ");
          if (r == true) {
            ajax_handler('/api/users/'+user_id, '', 'delete', this);
            setTimeout(function(){ window.location.href = "/users"; }, 3000); //redirect to the users page after  3 seconds
          }else{
            console.log('good choice!');
          }

    });

    //on deleting a plan
    $(".delete-plan").click(function(){
        var  plan_id = $('.plan_id').val();
        
        var r = confirm("the Plan will be Deleted, are you sure? ");
          if (r == true) {
            ajax_handler('/api/plans/'+plan_id, '', 'delete', this);
            setTimeout(function(){ window.location.href = "/"; }, 3000); //redirect to home page after  3 seconds
          }else{
            console.log('good choice!');
          }

    }); 

    //on deleting a day from a plan
    $(".delete-day").on('click',function(){  
        var user_id = $('.day_id').val();
        var params = {};

        var r = confirm("the day will be Deleted, are you sure? ");
          if (r == true) {
            ajax_handler('/api/days/'+user_id, '', 'delete', this);
            setTimeout(function(){ window.location.href = "/"; }, 3000); //redirect to home page after  3 seconds
          }else{
            console.log('good choice!');
          }
    });

    // on updating an existing day including its exercises  
    $(".update-day").on('click',function(){  
        var day_id = $('.day_id').val();
        var day_title = $('.day_title').val();

        var params = {'id': day_id, 'title': day_title };
        ajax_handler('/api/days', params, 'PUT', this);

        var exercise_id = {};
        $(".exercise_id").each(function(index) {
            exercise_id[index] = $(this).val();
        });

        var exercise_title = {};
        $(".exercise_title").each(function(index) {
            exercise_title[index] = $(this).val();
        });

        var exercise_description = {};
        $(".exercise_description").each(function(index) {
            exercise_description[index] = $(this).val();
        });

        $.each(exercise_id, function (index, exeid) { 
            var id = exeid;
            var title = exercise_title[index];
            var description = exercise_description[index];

            if (title && description) {
                var params = {'id': id, 'title': title, 'description': description };
                ajax_handler('/api/exercises', params, 'PUT', this);
            }
        });
            
    });

});

//general method to reuse the same Ajax function
function ajax_handler(url ,params, request, thiss){
         
         $.ajax({
                url: url,
                type: request,
                context: thiss,
                data: params,
                async: false, //IMPORTANT
                success: function (data)
                {
                    $(thiss).parent().find('#notification').html('<div class="alert alert-success" role="alert">Success</div>');
                },error: function(xhr, textStatus, errorThrown){
                    $(thiss).parent().find('#notification').html('<div class="alert alert-danger" role="alert"> failed</div>');
                }

            });

}


