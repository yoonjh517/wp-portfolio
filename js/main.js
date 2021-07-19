// * jQuery load check code

// $(function () {
//   alert("제데로 로드됨");
// });

$(function () {
  var portfolioLink = $(".portfolio_links li");
  var currentUrl = location.href;

  portfolioLink.each(function () {
    var activeMenu = $(this).find("a").text();
    var active = currentUrl.indexOf(activeMenu);
    // console.log(active);
    if (active > -1) {
      portfolioLink.find("a").removeClass("active");
      $(this).find("a").addClass("active");
    }
  });
});
