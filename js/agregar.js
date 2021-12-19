let agregar;
let agregarprofe;
let mostrardato;
let agregaralumno=document.getElementById("agregar");
document.getElementById("agregar").addEventListener("click",()=>{
     agregar=document.querySelector(".agregando")
    agregar.classList.toggle("agregarnuevo")
    
    document.getElementById("agregarprofe").addEventListener("click",()=>{
        agregar.style.display="none"
        agregarprofe.style.display="block"
    })
    document.getElementById("mostrardata").addEventListener("click",()=>{
        agregar.style.display="none"
        mostrardato.style.display="block"
    })
})
document.getElementById("agregarprofe").addEventListener("click",()=>{
   agregarprofe = document.querySelector(".agregandoProfe")
    agregarprofe.classList.toggle("agregandoProfeVisto")
    document.getElementById("agregar").addEventListener("click",()=>{
       agregarprofe.style.display="none"
       agregar.style.display="block"
   })
   document.getElementById("mostrardata").addEventListener("click",()=>{
    agregarprofe.style.display="none"
    mostrardato.style.display="block"
})
})
document.getElementById("mostrardata").addEventListener("click",()=>{
    mostrardato=document.querySelector(".mostrardatos")
    mostrardato.classList.toggle("mostrardatosVisto")

    
    document.getElementById("agregarprofe").addEventListener("click",()=>{
        mostrardato.style.display="none"
        agregarprofe.style.display="block"
    })
    document.getElementById("agregar").addEventListener("click",()=>{
        mostrardato.style.display="none"
        agregar.style.display="block"
    })

})

//

