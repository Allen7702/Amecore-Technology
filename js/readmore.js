function toggleText(link) {
  const container = link.parentNode;
  const text = link.previousElementSibling;
  if (text.style.display === 'none') {
    text.style.display = 'inline';
    container.style.height = '375px';
    link.textContent = 'Read Less';
  } else {
    text.style.display = 'none';
    text.style.height = '300px';
    container.style.height = '300px';
    link.textContent = 'Read More';
  }
}
/*
const readMoreBtn = document.querySelector("#read-more");
const moreText = document.querySelector("#more");

readMoreBtn.addEventListener("click", function(e) {
  e.preventDefault();

  if (moreText.style.display === "none") {
    moreText.style.display = "inline";
    readMoreBtn.textContent = "Read less";
  } else {
    moreText.style.display = "none";
    readMoreBtn.textContent = "Read more";
  }
});

function toggleText(id) {
  var x = document.getElementById(id);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
*/