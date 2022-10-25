window.addEventListener("load",() => {

    let tableau = document.getElementsByTagName("button")

    for (i = 0 ; i < tableau.length ; i++) {
        tableau[i].style.display = "block" ;
    }

    console.log("coucou") ;

    document.getElementById("0to1").addEventListener("click",(e) => {
        e.preventDefault() ;
        document.getElementById("etape0").style.display = "none" ;
        document.getElementById("etape1").style.display = "block" ;
    })

    document.getElementById("1to0").addEventListener("click",(e) => {
        e.preventDefault() ;
        document.getElementById("etape1").style.display = "none" ;
        document.getElementById("etape0").style.display = "block" ;
    })

    document.getElementById("1to2").addEventListener("click",(e) => {
        e.preventDefault() ;
        document.getElementById("etape1").style.display = "none" ;
        document.getElementById("etape2").style.display = "block" ;
    })

    document.getElementById("2to1").addEventListener("click",(e) => {
        e.preventDefault() ;
        document.getElementById("etape2").style.display = "none" ;
        document.getElementById("etape1").style.display = "block" ;
    })

    document.getElementById("2to3").addEventListener("click",(e) => {
        e.preventDefault() ;
        document.getElementById("etape2").style.display = "none" ;
        document.getElementById("etape3").style.display = "block" ;
    })

    document.getElementById("3to2").addEventListener("click",(e) => {
        e.preventDefault() ;
        document.getElementById("etape3").style.display = "none" ;
        document.getElementById("etape2").style.display = "block" ;
    })
})