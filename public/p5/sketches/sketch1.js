function setup() {
  createCanvas(windowWidth, 768);
}

function draw() {
  if (mouseIsPressed) {
  	noStroke();
    fill(0);
    ellipse(mouseX, mouseY, 30, 30);
  }
}