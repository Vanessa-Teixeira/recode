function exibir_categoria(categoria){
    
    let elementos = document.getElementsByClassName('box_produto');
    console.log(elementos)
     for (let i=0 ; i< elementos.length;i++){
    console.log(elementos[i].id);
         if(categoria==elementos[i].id)
    elementos[i].style="display:block";
        else
    elementos[i].style="display:none";

      }
}

let exibir_todos = () => {
    let elementos = document.getElementsByClassName('box_produto') 

     for (let i=0 ; i< elementos.length;i++){
        elementos[i].style="display:block";
}
     
};

let aumentar = (imagem) => {
console.log(imagem);
imagem.width=240;
imagem.style="cursor:pointer";


};

let diminuir=(imagem) => {
    console.log(imagem);
    imagem.width=120;

}







