const imgUrl = document.querySelector("img")

function updateImage() {
  imgUrl.setAttribute("src", "images/img2.jpg")
}

function returnImage() {
  imgUrl.setAttribute("src", "images/img1.jpg")
}