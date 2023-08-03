function redirectTo(url) {
    window.location.href = url;
}


let app = document.getElementById('typewriter');
 
let typewriter = new Typewriter(app, {
  loop: true,
  delay: 75,
});
 
typewriter
  .pauseFor(2500)
  .typeString('Descubre la disciplina que te haga vibrar, donde cada desafío te permitirá crecer y alcanzar tu máximo potencial...')
  .pauseFor(1500)
  .deleteChars(10)
  .start();