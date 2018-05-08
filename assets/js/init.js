
var elems = document.querySelectorAll('.datepicker');
var options = {
  format: 'yyyy-mm-dd'
};
var instances = M.Datepicker.init(elems, options);

(function($){
  $(function(){

    $('.sidenav').sidenav();
    $(".dropdown-trigger").dropdown();
    $('.collapsible').collapsible();
    $('.modal').modal();
  }); // end of document ready

})(jQuery); // end of jQuery name space
