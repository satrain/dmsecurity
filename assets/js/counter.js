 // animation counter
 function animateValue(obj, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min((timestamp - startTimestamp) / duration, 1);
      obj.innerHTML = Math.floor(progress * (end - start) + start);
      if (progress < 1) {
        window.requestAnimationFrame(step);
      }
    };
    window.requestAnimationFrame(step);
  }

  var myElement = document.querySelector('.counter-section-wrapper');
var bounding = myElement.getBoundingClientRect();


    if (bounding.top >= 0 && bounding.left >= 0 && bounding.right <= (window.innerWidth || document.documentElement.clientWidth) && bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight)) {

      const counter1 = document.getElementById("counter-one");
      animateValue(counter1, 0, 54, 1500);
    
      const counter2 = document.getElementById("counter-two");
      animateValue(counter2, 0, 119, 1500);
    
      const counter3 = document.getElementById("counter-three");
      animateValue(counter3, 0, 178, 1500);
    
      const counter4 = document.getElementById("counter-four");
      animateValue(counter4, 0, 240, 1500);
    } 
