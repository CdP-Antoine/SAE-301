window.addEventListener("load",() => {


    // ----- Initialisation des éléments à ne pas afficher direct
    document.getElementById("etape1").style.display = "none" ;
    document.getElementById("etape2").style.display = "none" ;
    document.getElementById("etape3").style.display = "none" ;
    document.getElementById("enfantdiv").style.display = "none" ;
    document.getElementById("profdiv").style.display = "none" ;
    // ----- FIN Initialisation

    // ----- Afficher les boutons d'étape suivante
    // Pour info, si le JS n'est pas activé alors toutes
    // les étapes sont directement accessibles 
    let tableau = document.getElementsByTagName("button")

    for (i = 0 ; i < tableau.length ; i++) {
        tableau[i].style.display = "block" ;
    }
    // ----- FIN Bouton


    // ----- Boutons de passage à l'étape suivante 
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
    // ----- FIN Bouton étape suivante

    // ----- Radio déroulement
    document.getElementById("enfant").addEventListener("click",(e) => {
        document.getElementById("enfantdiv").style.display = "block" ;
    })

    document.getElementById("adulte").addEventListener("click",(e) => {
        document.getElementById("enfantdiv").style.display = "none" ;
    })

    document.getElementById("prof").addEventListener("click",(e) => {
        document.getElementById("profdiv").style.display = "block" ;
    })

    document.getElementById("amateur").addEventListener("click",(e) => {
        document.getElementById("profdiv").style.display = "none" ;
    })
    // ----- FIN Radio Déroulement
})