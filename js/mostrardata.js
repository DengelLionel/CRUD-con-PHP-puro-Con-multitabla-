document.addEventListener("DOMContentLoaded",()=>{ 
let mostrarestudiant;
let mostrarprofe;
let mostrarcursoestud;

document.getElementById("mostrarEstudiantee").addEventListener("click",()=>{
    mostrarestudiant=document.querySelector(".mostrarestudiante")
    mostrarestudiant.classList.toggle("mostrarestudiante2")
    
    document.getElementById("mostrarProfesores").addEventListener("click",()=>{
        mostrarestudiant.style.display="none"
        mostrarprofe.style.display="block"
    })
    document.getElementById("mostrarCursoEstudiantee").addEventListener("click",()=>{
        mostrarestudiant.style.display="none"
        mostrarcursoestud.style.display="block"
    })
})
//

document.getElementById("mostrarProfesores").addEventListener("click",()=>{
    mostrarprofe=document.querySelector(".mostrarprofesor")
    mostrarprofe.classList.toggle("mostrarprofesor2")
    
    document.getElementById("mostrarCursoEstudiantee").addEventListener("click",()=>{
        mostrarprofe.style.display="none"
        mostrarcursoestud.style.display="block"
    })
    document.getElementById("mostrarEstudiantee").addEventListener("click",()=>{
        mostrarprofe.style.display="none"
        mostrarestudiant.style.display="block"
    })
    
})

//
document.getElementById("mostrarCursoEstudiantee").addEventListener("click",()=>{
    mostrarcursoestud=document.querySelector(".mostrarcursoestudiante")
    mostrarcursoestud.classList.toggle("mostrarcursoestudiante2")
    document.getElementById("mostrarEstudiantee").addEventListener("click",()=>{
        mostrarcursoestud.style.display="none"
        mostrarestudiant.style.display="block"
    })
    document.getElementById("mostrarProfesores").addEventListener("click",()=>{
        mostrarcursoestud.style.display="none"
        mostrarprofe.style.display="block"
    })
})
})
