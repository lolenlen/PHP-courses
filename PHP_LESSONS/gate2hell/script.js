let reg_b = document.querySelector('.reg_b');
let burning_hover = document.getElementsByClassName('.reg_box_h');
console.log(burning_hover);
reg_b.addEventListener('mouseenter', () => {
  burning_hover.play();
});