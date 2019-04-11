jQuery(function($) {
  //alert("hallo");
  var title = $(".category-title").text();
  console.log(title);
  spacePosition = title.lastIndexOf(" »");
  newTitle = title.substr(0, spacePosition);
  console.log(newTitle);
  $(".category-title").html(newTitle);
});
