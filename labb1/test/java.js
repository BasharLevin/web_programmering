"use strict";
//
// Wait for DOM to load
document.addEventListener("DOMContentLoaded", function () {

    document.getElementById("page2").style.display = "none"; // Hide div with name "page2"

    document.getElementById("byt1").addEventListener("click", function () {
        document.getElementById("page1").style.display = "none"; // Hide div with name "page1"
        document.getElementById("page2").style.display = "block"; // Show div with name "page2"
        // Change background color on "page2"
        setinfo();
        document.getElementById("page2").style.backgroundColor = document.getElementById("bakrundsfärg").value;
        document.getElementById("page2").style.fontFamily = document.getElementById("typsnitt").value;
        document.getElementById("page2").style.color = document.getElementById("textfärg").value;

        // Move text from input field in page 1 to presenting area in page 2   
        //document.getElementById("area").innerHTML = document.getElementById("txt").value;
    });

    document.getElementById("byt2").addEventListener("click", function () {
        document.getElementById("page1").style.display = "block";
        document.getElementById("page2").style.display = "none";
    });

    document.getElementById("reset").addEventListener("click", function () {
        document.getElementById("Företag").value = "";
        document.getElementById("Efternamn").value = "";
        document.getElementById("Förnamn").value = "";
        document.getElementById("Titel").value = "";
        document.getElementById("Epost").value = "";
        document.getElementById("telefonnummeer").value = "";
        document.getElementById("bakrundsfärg").selectedIndex = 0;
        document.getElementById("textfärg").selectedIndex = 0;
        document.getElementById("typsnitt").selectedIndex = 0;
    });
    function setinfo() {
        const företag = document.getElementById('Företag');
        const efternamn = document.getElementById('Efternamn');
        const förnamn = document.getElementById('Förnamn');
        const titel = document.getElementById('Titel');
        const Telefonnummeer = document.getElementById('telefonnummeer');
        const epost = document.getElementById('Epost');

        output1.innerHTML = företag.value;
        output2.innerHTML = efternamn.value;
        output3.innerHTML = förnamn.value;
        output4.innerHTML = titel.value;
        output5.innerHTML = "Tfn  " + Telefonnummeer.value;
        output6.innerHTML = "E-post: " + epost.value;

    }

    document.getElementById("Företag").addEventListener("click", function () {
        setinfo()
        document.getElementById("page2").style.backgroundColor = document.getElementById("bakrundsfärg").value;
        document.getElementById("page2").style.fontFamily = document.getElementById("typsnitt").value;
        document.getElementById("page2").style.color = document.getElementById("textfärg").value;
        document.getElementById("page2").style.display = "block";
    })
    document.getElementById("Efternamn").addEventListener("click", function () {
        setinfo()
        document.getElementById("page2").style.backgroundColor = document.getElementById("bakrundsfärg").value;
        document.getElementById("page2").style.fontFamily = document.getElementById("typsnitt").value;
        document.getElementById("page2").style.color = document.getElementById("textfärg").value;
        document.getElementById("page2").style.display = "block";
    })
    document.getElementById("Förnamn").addEventListener("click", function () {
        setinfo()
        document.getElementById("page2").style.backgroundColor = document.getElementById("bakrundsfärg").value;
        document.getElementById("page2").style.fontFamily = document.getElementById("typsnitt").value;
        document.getElementById("page2").style.color = document.getElementById("textfärg").value;
        document.getElementById("page2").style.display = "block";
    })
    document.getElementById("Titel").addEventListener("click", function () {
        setinfo()
        document.getElementById("page2").style.backgroundColor = document.getElementById("bakrundsfärg").value;
        document.getElementById("page2").style.fontFamily = document.getElementById("typsnitt").value;
        document.getElementById("page2").style.color = document.getElementById("textfärg").value;
        document.getElementById("page2").style.display = "block";
    })
    document.getElementById("telefonnummeer").addEventListener("click", function () {
        setinfo()
        document.getElementById("page2").style.backgroundColor = document.getElementById("bakrundsfärg").value;
        document.getElementById("page2").style.fontFamily = document.getElementById("typsnitt").value;
        document.getElementById("page2").style.color = document.getElementById("textfärg").value;
        document.getElementById("page2").style.display = "block";
    })
    document.getElementById("Epost").addEventListener("click", function () {
        setinfo()
        document.getElementById("page2").style.backgroundColor = document.getElementById("bakrundsfärg").value;
        document.getElementById("page2").style.fontFamily = document.getElementById("typsnitt").value;
        document.getElementById("page2").style.color = document.getElementById("textfärg").value;
        document.getElementById("page2").style.display = "block";
    })
    document.getElementById("Bakrundsfärg").addEventListener("click", function () {
        setinfo()
        document.getElementById("page2").style.backgroundColor = document.getElementById("bakrundsfärg").value;
        document.getElementById("page2").style.fontFamily = document.getElementById("typsnitt").value;
        document.getElementById("page2").style.color = document.getElementById("textfärg").value;
        document.getElementById("page2").style.display = "block";
    })
    document.getElementById("Textfärg").addEventListener("click", function () {
        setinfo()
        document.getElementById("page2").style.backgroundColor = document.getElementById("bakrundsfärg").value;
        document.getElementById("page2").style.fontFamily = document.getElementById("typsnitt").value;
        document.getElementById("page2").style.color = document.getElementById("textfärg").value;
        document.getElementById("page2").style.display = "block";
    })
    document.getElementById("typsnitt").addEventListener("click", function () {
        setinfo()
        document.getElementById("page2").style.backgroundColor = document.getElementById("bakrundsfärg").value;
        document.getElementById("page2").style.fontFamily = document.getElementById("typsnitt").value;
        document.getElementById("page2").style.color = document.getElementById("textfärg").value;
        document.getElementById("page2").style.display = "block";
    })
});
