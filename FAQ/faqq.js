
var faqq = document.getElementsByClassName("faq-page");
var i;

for (i = 0; i < faqq.length; i++) {
    faqq[i].addEventListener("click", function () {
        
        this.classList.toggle("active");

        
        var body = this.nextElementSibling;
        if (body.style.display === "block") {
            body.style.display = "none";
        } else {
            body.style.display = "block";
        }
    });
}
