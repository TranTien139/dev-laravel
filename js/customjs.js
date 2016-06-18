function previewFile() {
  var preview = document.querySelector('.image_profile');
  var image_profile = document.querySelector('.txtimage_profile');
  var file    = document.querySelector('input[type=file]').files[0];
  var reader  = new FileReader();
  reader.addEventListener("load", function () {
  preview.src = reader.result;
  image_profile.value = reader.result;
  }, false);
  if (file) {
  reader.readAsDataURL(file);
  }
}

$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

$(document).ready(function(){
   $('#homeslider').flexslider({
       animation: "fade",
       slideshowSpeed:10000,
       animationSpeed:600,
       controlNav:true,
       directionNav:true
   
   });
});

/*****login***/
$(document).ready(function(){
  $('.top_menu li.log a').click(function (){
     $('.login').toggle();
  });
});

/** smooth scrolling sections **/
$(window).load(function(){
    $('#sidebar').affix({
  offset: {
    top: 200,
    bottom: 255
  }
});

/****afix***/

$('#sidebar li a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 50
        }, 1000);
        return false;
      }
    }
});
});

    /****ellipsis****/
    $(window).load(function(){
  $('.two-line').ellipsis({
    lines:2,
    char:'...'
  });
});

    $(window).load(function(){
  $('.three-line').ellipsis({
    lines:3,
    char:'...'
  });
});

  $(window).load(function(){
  $('.fourth-line').ellipsis({
    lines:4,
    char:'...'
  });
});

  $(document).ready(function(){
   $('.updatecart').click(function (e){
       e.preventDefault();
       var rowid = $(this).attr('id');
       var qty = $(this).parent().parent().find(".qty").val();
       var token = $("input[name='_token']").val();
       $.ajax({
        url: 'cap-nhat-gio-hang/'+rowid+'/'+qty,
        type:'GET',
        cache:false,
        data:{"_token":token,"id":rowid,"qty":qty},
        success:function(data){
            if (data == "oke") {
            alert("yes");
            }
        }
       });
   });
});

$(document).ready(function() {
 
  var owl = $("#owl-home1");
 
  owl.owlCarousel({
     
      itemsCustom : [
       [0, 1],
        [450, 2],
        [600, 3],
        [700, 4],
        [1000, 4],
        [1200, 6],
        [1400, 6],
        [1600, 8]
      ],
      navigation : true,
    navigationText:['<img src="../nsport/public/img/direction.png" alt="next" >','<img src="../nsport/public/img/direction.png" alt="next" >']
  });
 
});

$(document).ready(function() {
 
  var owl = $("#owl-home2");
 
  owl.owlCarousel({
     
      itemsCustom : [
        [0, 1],
        [450, 2],
        [600, 3],
        [700, 4],
        [1000, 4],
        [1200, 6],
        [1400, 6],
        [1600, 8]
      ],
      navigation : true,
    navigationText:['<img src="../nsport/public/img/direction.png" alt="next" >','<img src="../nsport/public/img/direction.png" alt="next" >']
  });
 
});

$(document).ready(function() {
 
  var owl = $("#owl-home3");
 
  owl.owlCarousel({
     
      itemsCustom : [
        [0, 1],
        [450, 2],
        [600, 3],
        [700, 4],
        [1000, 4],
        [1200, 6],
        [1400, 6],
        [1600, 8]
      ],
      navigation : true,
    navigationText:['<img src="../nsport/public/img/direction.png" alt="next" >','<img src="../nsport/public/img/direction.png" alt="next" >']
  });
 
});

$(document).ready(function() {
 
  var owl = $("#owl-home4");
 
  owl.owlCarousel({
     
      itemsCustom : [
        [0, 1],
        [450, 2],
        [600, 3],
        [700, 4],
        [1000, 4],
        [1200, 6],
        [1400, 6],
        [1600, 8]
      ],
      navigation : true,
    navigationText:['<img src="../nsport/public/img/direction.png" alt="next" >','<img src="../nsport/public/img/direction.png" alt="next" >']
  });
 
});

$(document).ready(function() {
 
  var owl = $("#owl-home5");
 
  owl.owlCarousel({
     
      itemsCustom : [
        [0, 1],
        [450, 2],
        [600, 3],
        [700, 4],
        [1000, 4],
        [1200, 6],
        [1400, 6],
        [1600, 8]
      ],
      navigation : true,
    navigationText:['<img src="../nsport/public/img/direction.png" alt="next" >','<img src="../nsport/public/img/direction.png" alt="next" >']
  });
 
});

$(document).ready(function() {
 
  var owl = $("#owl-home6");
 
  owl.owlCarousel({
     
      itemsCustom : [
        [0, 1],
        [450, 2],
        [600, 3],
        [700, 4],
        [1000, 4],
        [1200, 6],
        [1400, 6],
        [1600, 8]
      ],
      navigation : true,
    navigationText:['<img src="../nsport/public/img/direction.png" alt="next" >','<img src="../nsport/public/img/direction.png" alt="next" >']
  });
 
});

$(document).ready(function() {
 
  var owl = $("#owl-home7");
 
  owl.owlCarousel({
     
      itemsCustom : [
        [0, 1],
        [450, 2],
        [600, 3],
        [700, 4],
        [1000, 4],
        [1200, 6],
        [1400, 6],
        [1600, 8]
      ],
      navigation : true,
    navigationText:['<img src="../nsport/public/img/direction.png" alt="next" >','<img src="../nsport/public/img/direction.png" alt="next" >']
  });
 
});

$(document).ready(function() {
 
  var owl = $("#owl-home8");
 
  owl.owlCarousel({
     
      itemsCustom : [
        [0, 1],
        [450, 2],
        [600, 3],
        [700, 4],
        [1000, 4],
        [1200, 6],
        [1400, 6],
        [1600, 8]
      ],
      navigation : true,
    navigationText:['<img src="../nsport/public/img/direction.png" alt="next" >','<img src="../nsport/public/img/direction.png" alt="next" >']
  });
 
});

$(document).ready(function() {
 
  var owl = $("#owl-home9");
 
  owl.owlCarousel({
     
      itemsCustom : [
        [0, 1],
        [450, 2],
        [600, 3],
        [700, 4],
        [1000, 4],
        [1200, 6],
        [1400, 6],
        [1600, 8]
      ],
      navigation : true,
    navigationText:['<img src="../nsport/public/img/direction.png" alt="next" >','<img src="../nsport/public/img/direction.png" alt="next" >']
  });
 
});

$(document).ready(function() {
 
  var owl = $("#owl-home10");
 
  owl.owlCarousel({
     
      itemsCustom : [
        [0, 1],
        [450, 2],
        [600, 3],
        [700, 4],
        [1000, 4],
        [1200, 6],
        [1400, 6],
        [1600, 8]
      ],
      navigation : true,
    navigationText:['<img src="../nsport/public/img/direction.png" alt="next" >','<img src="../nsport/public/img/direction.png" alt="next" >']
  });
 
});

$(document).ready(function() {
 
  var owl = $("#owl-home11");
 
  owl.owlCarousel({
     
      itemsCustom : [
        [0, 1],
        [450, 2],
        [600, 3],
        [700, 4],
        [1000, 4],
        [1200, 6],
        [1400, 6],
        [1600, 8]
      ],
      navigation : true,
    navigationText:['<img src="../nsport/public/img/direction.png" alt="next" >','<img src="../nsport/public/img/direction.png" alt="next" >']
  });
 
});

$(document).ready(function() {
 
  var owl = $("#owl-home12");
 
  owl.owlCarousel({
     
      itemsCustom : [
        [0, 1],
        [450, 2],
        [600, 3],
        [700, 4],
        [1000, 4],
        [1200, 6],
        [1400, 6],
        [1600, 8]
      ],
      navigation : true,
    navigationText:['<img src="../nsport/public/img/direction.png" alt="next" >','<img src="../nsport/public/img/direction.png" alt="next" >']
  });
 
});

$(document).ready(function() {
 
  var owl = $("#owl-home13");
 
  owl.owlCarousel({
     
      itemsCustom : [
        [0, 1],
        [450, 2],
        [600, 3],
        [700, 4],
        [1000, 4],
        [1200, 6],
        [1400, 6],
        [1600, 8]
      ],
      navigation : true,
    navigationText:['<img src="../nsport/public/img/direction.png" alt="next" >','<img src="../nsport/public/img/direction.png" alt="next" >']
  });
 
});

$(document).ready(function() {
 
  var owl = $("#owl-home14");
 
  owl.owlCarousel({
     
      itemsCustom : [
        [0, 1],
        [450, 2],
        [600, 3],
        [700, 4],
        [1000, 4],
        [1200, 6],
        [1400, 6],
        [1600, 8]
      ],
      navigation : true,
    navigationText:['<img src="../nsport/public/img/direction.png" alt="next" >','<img src="../nsport/public/img/direction.png" alt="next" >']
  });
 
});

$(document).ready(function() {
 
  var owl = $("#owl-home15");
 
  owl.owlCarousel({
     
      itemsCustom : [
        [0, 1],
        [450, 2],
        [600, 3],
        [700, 4],
        [1000, 4],
        [1200, 6],
        [1400, 6],
        [1600, 8]
      ],
      navigation : true,
    navigationText:['<img src="../nsport/public/img/direction.png" alt="next" >','<img src="../nsport/public/img/direction.png" alt="next" >']
  });
 
});

/** slide anh chi tiet ***/
$(document).ready(function() {

      var sync1 = $("#sync1");
      var sync2 = $("#sync2");

      sync1.owlCarousel({
        singleItem : true,
        slideSpeed : 1000,
        navigation: false,
        pagination:false,
        afterAction : syncPosition,
        responsiveRefreshRate : 200,
      });

      sync2.owlCarousel({
        items : 4,
        itemsDesktop      : [1199,4],
        itemsDesktopSmall     : [979,4],
        itemsTablet       : [768,2],
        itemsMobile       : [479,2],
        pagination:false,
        responsiveRefreshRate : 100,
        afterInit : function(el){
          el.find(".owl-item").eq(0).addClass("synced");
        }
      });

      function syncPosition(el){
        var current = this.currentItem;
        $("#sync2")
          .find(".owl-item")
          .removeClass("synced")
          .eq(current)
          .addClass("synced")
        if($("#sync2").data("owlCarousel") !== undefined){
          center(current)
        }

      }

      $("#sync2").on("click", ".owl-item", function(e){
        e.preventDefault();
        var number = $(this).data("owlItem");
        sync1.trigger("owl.goTo",number);
      });

      function center(number){
        var sync2visible = sync2.data("owlCarousel").owl.visibleItems;

        var num = number;
        var found = false;
        for(var i in sync2visible){
          if(num === sync2visible[i]){
            var found = true;
          }
        }

        if(found===false){
          if(num>sync2visible[sync2visible.length-1]){
            sync2.trigger("owl.goTo", num - sync2visible.length+2)
          }else{
            if(num - 1 === -1){
              num = 0;
            }
            sync2.trigger("owl.goTo", num);
          }
        } else if(num === sync2visible[sync2visible.length-1]){
          sync2.trigger("owl.goTo", sync2visible[1])
        } else if(num === sync2visible[0]){
          sync2.trigger("owl.goTo", num-1)
        }
      }

    });

$(window).load(function(){
      $(function() {
        $('nav#menu').mmenu();
      });
      });