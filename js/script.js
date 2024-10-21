
  //like
  function countBtn() {
    let count = document.getElementById('count');
    let value = count.innerHTML;
    ++value;

    document.getElementById('count').innerHTML = value;
} ;

function countBtn2() {
  let count = document.getElementById('count2');
  let value = count.innerHTML;
  ++value;

  document.getElementById('count2').innerHTML = value;
} ;

function countBtn3() {
  let count = document.getElementById('count3');
  let value = count.innerHTML;
  ++value;

  document.getElementById('count3').innerHTML = value;
} ;

function countBtn4() {
  let count = document.getElementById('count4');
  let value = count.innerHTML;
  ++value;

  document.getElementById('count4').innerHTML = value;
} ;
//email
function checkEmail() {
  let email = document.querySelector('#emailField').value;
  if (!email.includes('@')) alert('Нет символа @');
  else if (!email.includes('.')) alert('Нет символа .');
  else alert('Вы успешно оформили подписку!');
}