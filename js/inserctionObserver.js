const articulo1 = document.getElementById('articulo-edu-uno');
const articulo2 = document.getElementById('articulo-edu-dos');
const articulo3 = document.getElementById('articulo-edu-tres');
const articulo4 = document.getElementById('articulo-edu-cuatro');
const box1 = document.getElementById('box-info-uno');
const box2 = document.getElementById('box-info-dos');
const box3 = document.getElementById('box-info-tres');

const cargarArticulo = (entradas, observador) =>{
    entradas.forEach((entrada) =>{
        if (entrada.isIntersecting) {
            entrada.target.classList.add("visible")
        } else{
            entrada.target.classList.remove("visible")
        }
    });
}

const observador = new IntersectionObserver(cargarArticulo, {
    root: null,
    rootMargin: '0px 0px 0px 0px',
    threshold: 0.3
});

observador.observe(articulo1);
observador.observe(articulo2);
observador.observe(articulo3);
observador.observe(articulo4);
observador.observe(box1);
observador.observe(box2);
observador.observe(box3);