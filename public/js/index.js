var content = document.querySelector("#mainContent").offsetTop;
window.onscroll = function() {
    if (window.pageYOffset > 0) {
        var opac = (window.pageYOffset / content);
        console.log(opac);
        // document."#jumbotron-index".style.background = "linear-gradient(rgba(255, 255, 255, " + opac + "), rgba(255, 255, 255, " + opac + ")), url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/times-square-perspective.jpg) no-repeat";
    }
}