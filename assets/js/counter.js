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

  function isElementInViewport (el) {

    // Special bonus for those using jQuery
    if (typeof jQuery === "function" && el instanceof jQuery) {
        el = el[0];
    }

    var rect = el.getBoundingClientRect();

    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /* or $(window).height() */
        rect.right <= (window.innerWidth || document.documentElement.clientWidth) /* or $(window).width() */
    );
  }

  function onVisibilityChange(el, callback) {
    var old_visible;
    return function () {
        var visible = isElementInViewport(el);
        if (visible != old_visible) {
            old_visible = visible;
            if (typeof callback == 'function') {
                callback();
            }
        }
    }
}

var counterWrapper = document.querySelector('.counter-section')

var handler = onVisibilityChange(counterWrapper, function() {
  console.log('in viewport')
  const counter1 = document.getElementById("counter-one");
  animateValue(counter1, 0, 54, 1500);
  
  const counter2 = document.getElementById("counter-two");
  animateValue(counter2, 0, 119, 1500);

  const counter3 = document.getElementById("counter-three");
  animateValue(counter3, 0, 178, 1500);

  const counter4 = document.getElementById("counter-four");
  animateValue(counter4, 0, 351, 1500);
});

if (window.addEventListener) {
  addEventListener('DOMContentLoaded', handler, false);
  addEventListener('load', handler, false);
  addEventListener('scroll', handler, false);
  addEventListener('resize', handler, false);
} else if (window.attachEvent)  {
  attachEvent('onDOMContentLoaded', handler); // Internet Explorer 9+ :(
  attachEvent('onload', handler);
  attachEvent('onscroll', handler);
  attachEvent('onresize', handler);
}