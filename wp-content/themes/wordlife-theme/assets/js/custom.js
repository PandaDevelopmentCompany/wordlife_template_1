
  (function ($) {

  "use strict";

    // MENU
    $('.navbar-collapse a').on('click',function(){
      $(".navbar-collapse").collapse('hide');
    });

    // CUSTOM LINK
    $('.smoothscroll').click(function(){
      var el = $(this).attr('href');
      var elWrapped = $(el);
      var header_height = $('.navbar').height();

      scrollToDiv(elWrapped,header_height);
      return false;

      function scrollToDiv(element,navheight){
        var offset = element.offset();
        var offsetTop = offset.top;
        var totalScroll = offsetTop-navheight;

        $('body,html').animate({
        scrollTop: totalScroll
        }, 300);
      }
    });

    $(window).on('scroll', function(){
      function isScrollIntoView(elem, index) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();
        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(window).height()*.5;
        if(elemBottom <= docViewBottom && elemTop >= docViewTop) {
          $(elem).addClass('active');
        }
        if(!(elemBottom <= docViewBottom)) {
          $(elem).removeClass('active');
        }
        var MainTimelineContainer = $('#vertical-scrollable-timeline')[0];
        var MainTimelineContainerBottom = MainTimelineContainer.getBoundingClientRect().bottom - $(window).height()*.5;
        $(MainTimelineContainer).find('.inner').css('height',MainTimelineContainerBottom+'px');
      }
      var timeline = $('#vertical-scrollable-timeline li');
      Array.from(timeline).forEach(isScrollIntoView);
    });

  })(window.jQuery);












// Добавление классов карусели мероприяий для меню в подвале
// design
// marketing
// finance
// music
// education
//



 // для 1 пункта (расписание мероприятий) в header в левой карточке
  document.getElementById('main_link_0_0').onclick = function() {
    document.getElementById('marketing-tab-pane').classList.remove('active');
    document.getElementById('marketing-tab').classList.remove('active');
    document.getElementById('marketing-tab-pane').classList.remove('show');
    document.getElementById('finance-tab-pane').classList.remove('active');
    document.getElementById('finance-tab').classList.remove('active');
    document.getElementById('finance-tab-pane').classList.remove('show');
    document.getElementById('music-tab-pane').classList.remove('active');
    document.getElementById('music-tab').classList.remove('active');
    document.getElementById('music-tab-pane').classList.remove('show');
    document.getElementById('education-tab-pane').classList.remove('active');
    document.getElementById('education-tab').classList.remove('active');
    document.getElementById('education-tab-pane').classList.remove('show');

    document.getElementById('design-tab-pane').classList.add('show');
    document.getElementById('design-tab-pane').classList.add('active');
    document.getElementById('design-tab').classList.add('active');
  }





  // для 1 пункта меню в подвале слева, мероприятия
  document.getElementById('main_link_0').onclick = function() {
    document.getElementById('marketing-tab-pane').classList.remove('active');
    document.getElementById('marketing-tab').classList.remove('active');
    document.getElementById('marketing-tab-pane').classList.remove('show');
    document.getElementById('finance-tab-pane').classList.remove('active');
    document.getElementById('finance-tab').classList.remove('active');
    document.getElementById('finance-tab-pane').classList.remove('show');
    document.getElementById('music-tab-pane').classList.remove('active');
    document.getElementById('music-tab').classList.remove('active');
    document.getElementById('music-tab-pane').classList.remove('show');
    document.getElementById('education-tab-pane').classList.remove('active');
    document.getElementById('education-tab').classList.remove('active');
    document.getElementById('education-tab-pane').classList.remove('show');

    document.getElementById('design-tab-pane').classList.add('show');
    document.getElementById('design-tab-pane').classList.add('active');
    document.getElementById('design-tab').classList.add('active');
  }

// для 1 пункта меню
  document.getElementById('main_link_1').onclick = function() {
    document.getElementById('marketing-tab-pane').classList.remove('active');
    document.getElementById('marketing-tab').classList.remove('active');
    document.getElementById('marketing-tab-pane').classList.remove('show');
    document.getElementById('finance-tab-pane').classList.remove('active');
    document.getElementById('finance-tab').classList.remove('active');
    document.getElementById('finance-tab-pane').classList.remove('show');
    document.getElementById('music-tab-pane').classList.remove('active');
    document.getElementById('music-tab').classList.remove('active');
    document.getElementById('music-tab-pane').classList.remove('show');
    document.getElementById('education-tab-pane').classList.remove('active');
    document.getElementById('education-tab').classList.remove('active');
    document.getElementById('education-tab-pane').classList.remove('show');

    document.getElementById('design-tab-pane').classList.add('show');
    document.getElementById('design-tab-pane').classList.add('active');
    document.getElementById('design-tab').classList.add('active');
  }


// для 2 пункта меню
  document.getElementById('main_link_2').onclick = function() {
    document.getElementById('design-tab-pane').classList.remove('active');
    document.getElementById('design-tab').classList.remove('active');
    document.getElementById('design-tab-pane').classList.remove('show');
    document.getElementById('finance-tab-pane').classList.remove('active');
    document.getElementById('finance-tab').classList.remove('active');
    document.getElementById('finance-tab-pane').classList.remove('show');
    document.getElementById('music-tab-pane').classList.remove('active');
    document.getElementById('music-tab').classList.remove('active');
    document.getElementById('music-tab-pane').classList.remove('show');
    document.getElementById('education-tab-pane').classList.remove('active');
    document.getElementById('education-tab').classList.remove('active');
    document.getElementById('education-tab-pane').classList.remove('show');

    document.getElementById('marketing-tab-pane').classList.add('show');
    document.getElementById('marketing-tab-pane').classList.add('active');
    document.getElementById('marketing-tab').classList.add('active');
  }

  // для 3 пункта меню
    document.getElementById('main_link_3').onclick = function() {
      document.getElementById('design-tab-pane').classList.remove('active');
      document.getElementById('design-tab').classList.remove('active');
      document.getElementById('design-tab-pane').classList.remove('show');
      document.getElementById('marketing-tab-pane').classList.remove('active');
      document.getElementById('marketing-tab').classList.remove('active');
      document.getElementById('marketing-tab-pane').classList.remove('show');
      document.getElementById('music-tab-pane').classList.remove('active');
      document.getElementById('music-tab').classList.remove('active');
      document.getElementById('music-tab-pane').classList.remove('show');
      document.getElementById('education-tab-pane').classList.remove('active');
      document.getElementById('education-tab').classList.remove('active');
      document.getElementById('education-tab-pane').classList.remove('show');

      document.getElementById('finance-tab-pane').classList.add('show');
      document.getElementById('finance-tab-pane').classList.add('active');
      document.getElementById('finance-tab').classList.add('active');
    }

    // для 4 пункта меню
      document.getElementById('main_link_4').onclick = function() {
        document.getElementById('design-tab-pane').classList.remove('active');
        document.getElementById('design-tab').classList.remove('active');
        document.getElementById('design-tab-pane').classList.remove('show');
        document.getElementById('finance-tab-pane').classList.remove('active');
        document.getElementById('finance-tab').classList.remove('active');
        document.getElementById('finance-tab-pane').classList.remove('show');
        document.getElementById('marketing-tab-pane').classList.remove('active');
        document.getElementById('marketing-tab').classList.remove('active');
        document.getElementById('marketing-tab-pane').classList.remove('show');
        document.getElementById('education-tab-pane').classList.remove('active');
        document.getElementById('education-tab').classList.remove('active');
        document.getElementById('education-tab-pane').classList.remove('show');

        document.getElementById('music-tab-pane').classList.add('show');
        document.getElementById('music-tab-pane').classList.add('active');
        document.getElementById('music-tab').classList.add('active');
      }

      // для 5 пункта меню
        document.getElementById('main_link_5').onclick = function() {
          document.getElementById('design-tab-pane').classList.remove('active');
          document.getElementById('design-tab').classList.remove('active');
          document.getElementById('design-tab-pane').classList.remove('show');
          document.getElementById('finance-tab-pane').classList.remove('active');
          document.getElementById('finance-tab').classList.remove('active');
          document.getElementById('finance-tab-pane').classList.remove('show');
          document.getElementById('music-tab-pane').classList.remove('active');
          document.getElementById('music-tab').classList.remove('active');
          document.getElementById('music-tab-pane').classList.remove('show');
          document.getElementById('marketing-tab-pane').classList.remove('active');
          document.getElementById('marketing-tab').classList.remove('active');
          document.getElementById('marketing-tab-pane').classList.remove('show');

          document.getElementById('education-tab-pane').classList.add('show');
          document.getElementById('education-tab-pane').classList.add('active');
          document.getElementById('education-tab').classList.add('active');
        }










// для 1 пункта меню мероприятий в top navbar
//   document.getElementById('top_main_link_1').onclick = function() {
//     document.getElementById('marketing-tab-pane').classList.remove('active');
//     document.getElementById('marketing-tab').classList.remove('active');
//     document.getElementById('marketing-tab-pane').classList.remove('show');
//     document.getElementById('finance-tab-pane').classList.remove('active');
//     document.getElementById('finance-tab').classList.remove('active');
//     document.getElementById('finance-tab-pane').classList.remove('show');
//     document.getElementById('music-tab-pane').classList.remove('active');
//     document.getElementById('music-tab').classList.remove('active');
//     document.getElementById('music-tab-pane').classList.remove('show');
//     document.getElementById('education-tab-pane').classList.remove('active');
//     document.getElementById('education-tab').classList.remove('active');
//     document.getElementById('education-tab-pane').classList.remove('show');

//     document.getElementById('design-tab-pane').classList.add('show');
//     document.getElementById('design-tab-pane').classList.add('active');
//     document.getElementById('design-tab').classList.add('active');
//   }


// // для 2 пункта меню мероприятий в top navbar
//   document.getElementById('top_main_link_2').onclick = function() {
//     document.getElementById('design-tab-pane').classList.remove('active');
//     document.getElementById('design-tab').classList.remove('active');
//     document.getElementById('design-tab-pane').classList.remove('show');
//     document.getElementById('finance-tab-pane').classList.remove('active');
//     document.getElementById('finance-tab').classList.remove('active');
//     document.getElementById('finance-tab-pane').classList.remove('show');
//     document.getElementById('music-tab-pane').classList.remove('active');
//     document.getElementById('music-tab').classList.remove('active');
//     document.getElementById('music-tab-pane').classList.remove('show');
//     document.getElementById('education-tab-pane').classList.remove('active');
//     document.getElementById('education-tab').classList.remove('active');
//     document.getElementById('education-tab-pane').classList.remove('show');

//     document.getElementById('marketing-tab-pane').classList.add('show');
//     document.getElementById('marketing-tab-pane').classList.add('active');
//     document.getElementById('marketing-tab').classList.add('active');
//   }

//   // для 3 пункта меню мероприятий в top navbar
//     document.getElementById('top_main_link_3').onclick = function() {
//       document.getElementById('design-tab-pane').classList.remove('active');
//       document.getElementById('design-tab').classList.remove('active');
//       document.getElementById('design-tab-pane').classList.remove('show');
//       document.getElementById('marketing-tab-pane').classList.remove('active');
//       document.getElementById('marketing-tab').classList.remove('active');
//       document.getElementById('marketing-tab-pane').classList.remove('show');
//       document.getElementById('music-tab-pane').classList.remove('active');
//       document.getElementById('music-tab').classList.remove('active');
//       document.getElementById('music-tab-pane').classList.remove('show');
//       document.getElementById('education-tab-pane').classList.remove('active');
//       document.getElementById('education-tab').classList.remove('active');
//       document.getElementById('education-tab-pane').classList.remove('show');

//       document.getElementById('finance-tab-pane').classList.add('show');
//       document.getElementById('finance-tab-pane').classList.add('active');
//       document.getElementById('finance-tab').classList.add('active');
//     }

//     // для 4 пункта меню мероприятий в top navbar
//       document.getElementById('top_main_link_4').onclick = function() {
//         document.getElementById('design-tab-pane').classList.remove('active');
//         document.getElementById('design-tab').classList.remove('active');
//         document.getElementById('design-tab-pane').classList.remove('show');
//         document.getElementById('finance-tab-pane').classList.remove('active');
//         document.getElementById('finance-tab').classList.remove('active');
//         document.getElementById('finance-tab-pane').classList.remove('show');
//         document.getElementById('marketing-tab-pane').classList.remove('active');
//         document.getElementById('marketing-tab').classList.remove('active');
//         document.getElementById('marketing-tab-pane').classList.remove('show');
//         document.getElementById('education-tab-pane').classList.remove('active');
//         document.getElementById('education-tab').classList.remove('active');
//         document.getElementById('education-tab-pane').classList.remove('show');

//         document.getElementById('music-tab-pane').classList.add('show');
//         document.getElementById('music-tab-pane').classList.add('active');
//         document.getElementById('music-tab').classList.add('active');
//       }

//       // для 5 пункта меню мероприятий в top navbar
//         document.getElementById('top_main_link_5').onclick = function() {
//           document.getElementById('design-tab-pane').classList.remove('active');
//           document.getElementById('design-tab').classList.remove('active');
//           document.getElementById('design-tab-pane').classList.remove('show');
//           document.getElementById('finance-tab-pane').classList.remove('active');
//           document.getElementById('finance-tab').classList.remove('active');
//           document.getElementById('finance-tab-pane').classList.remove('show');
//           document.getElementById('music-tab-pane').classList.remove('active');
//           document.getElementById('music-tab').classList.remove('active');
//           document.getElementById('music-tab-pane').classList.remove('show');
//           document.getElementById('marketing-tab-pane').classList.remove('active');
//           document.getElementById('marketing-tab').classList.remove('active');
//           document.getElementById('marketing-tab-pane').classList.remove('show');

//           document.getElementById('education-tab-pane').classList.add('show');
//           document.getElementById('education-tab-pane').classList.add('active');
//           document.getElementById('education-tab').classList.add('active');
//         }





// Добавление классов к a в li
          // const allLIItems = document.querySelectorAll(".menu-item");

          // for (let i = 0; i < allLIItems.length; i++) {
          //     allLIItems[i].classList.add("nav-item");
          //     var aHref = allLIItems[i].innerHTML.split(" ");
          //     const newAHref = `${aHref[0]} class="nav-link click-scroll" ${aHref[1]}`;
          //     allLIItems[i].innerHTML = newAHref;
          //   }









// свернуть меню на мобилках по клику на свободное пространство
 //         $(function(){ 
 //     var navMain = $("#navbarNav");
 //     navMain.on("click", "button", null, function () {
 //         navMain.collapse('hide');
 //     });
 // });








// aaaaa
