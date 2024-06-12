
    // Function to draw a circle on a canvas
    function drawCircle(canvas) {
        const ctx = canvas.getContext('2d');
        const centerX = canvas.width / 2;
        const centerY = canvas.height / 2;
        const radius = 30;
        const fillColor = 'RGB(255, 105, 180)';

        ctx.beginPath();
        ctx.arc(centerX, centerY, radius, 0, 2 * Math.PI);
       
        ctx.fillStyle = fillColor;
        ctx.fill();
        ctx.closePath();
    }
    function drawRectangle(canvas) {
    const ctx = canvas.getContext('2d');
    const width = 55;
    const height = 55;
    const fillColor = 'RGB(255, 105, 180)';
    const x = (canvas.width - width) / 2;
    const y = (canvas.height - height) / 2;
   
    ctx.fillStyle = fillColor;
    ctx.fillRect(x, y, width, height);
    }
    function drawTriangle(canvas) {
    const ctx = canvas.getContext('2d');
    const sideLength = 50;
    const fillColor = 'RGB(255, 105, 180)';
    const x = canvas.width / 2;
    const y = canvas.height / 2 - (Math.sqrt(3) * sideLength) / 6;
   
    ctx.fillStyle = fillColor;
    ctx.beginPath();
    ctx.moveTo(x, y);
    ctx.lineTo(x - sideLength / 2, y + (Math.sqrt(3) * sideLength) / 2);
    ctx.lineTo(x + sideLength / 2, y + (Math.sqrt(3) * sideLength) / 2);
    ctx.closePath();
    ctx.fill();
    }
   
   
let canvasNumber=0;
    // Get the container element and create canvas elements
    function initializeShape() {
    canvasNumber=0;
        const container = document.getElementById('canvasContainer');
        container.innerHTML = "";

//container.style.width = '70%';

        const totalCanvases = document.getElementById("numberShapeInput").value; // Total number of canvases to create
        const canvasesPerRow = 10; // Number of canvases in each row
        const canvasWidth = 60;
        const canvasHeight = 70;

        for (let i = 0; i < totalCanvases; i++) {
            const canvas = document.createElement('canvas');
            canvas.width = canvasWidth;
            canvas.height = canvasHeight;
            canvas.classList.add('canvas-item');
           
drawCircle(canvas);
//drawRectangle(canvas);
//drawTriangle(canvas);
            let isClicked = false; // Flag to indicate if the canvas has been clicked

            // Add click event listener to display the number on the canvas
            canvas.addEventListener("click", () => {
                if (!isClicked) {
                    const ctx = canvas.getContext('2d');
                    const centerX = canvas.width / 2;
                    const centerY = canvas.height / 2;
                    const fontSize = 20;
                    const fontColor = 'RGB(255, 255, 255)';

                    ctx.font = `${fontSize}px Arial`;
                    ctx.fillStyle = fontColor;
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';
                    ctx.fillText(++canvasNumber, centerX, centerY);
                    isClicked = true; // Set the flag to true after the first click
              
                }
            });

            container.appendChild(canvas);

            // Add a line break after every 'canvasesPerRow' canvases
            if ((i + 1) % canvasesPerRow === 0) {
                container.appendChild(document.createElement('br'));

            }
           
           if ((i + 1) % 50 === 0) {
  const label = document.createElement('label');
  
    label.textContent = (i + 1); // Replace 'Your Text Here' with your desired label text
    label.style.fontSize = '2em';
    label.style.width = '50px';
      label.style.paddingLeft = '30%';
  label.style.paddingRight = '30%';
  label.style.borderRadius='20px'

  container.appendChild(document.createElement('hr'));
  container.appendChild(label);
  if((i+1)!=totalCanvases){
    container.appendChild(document.createElement('hr'));
}else{
    container.appendChild(document.createElement('br'));
    container.appendChild(document.createElement('br'));
}


}
        }
    }

    initializeShape();//default

const numberShapeInput = document.getElementById("numberShapeInput");

    numberShapeInput.addEventListener("input", checkAndInitializeShape);
   
    function checkAndInitializeShape() {
    const inputValue = parseInt(numberShapeInput.value, 10);
   
    if (inputValue > 1000) {
    numberShapeInput.blur();// Do nothing if the input value is larger than 1000
    alert("more than 1000 shape isnt allowed");
    document.getElementById("numberShapeInput").value=null;
   // return;
    }
   
    // If the input value is 1000 or smaller, then execute the initializeShape function
    initializeShape();
    }
   
     const inputElement = document.getElementById('numberShapeInput');

  function performCalculation(event) {
    const inputValue = inputElement.value.trim();

    // Check if the input value contains an arithmetic operation
    if (/^\d+[+\-*\/]\d+$/.test(inputValue)) {
      try {
        // Perform the arithmetic operation and update the input value with the result
        const result = Math.floor(eval(inputValue));
        if (typeof result === 'number') {
          if (result > 1000 && (isInputBlurred() || event.key === 'Enter')) {
            inputElement.value = 1000;
            throw new Error("Value larger than 1000 max limit");
          }
          else if(result<0&& (isInputBlurred() || event.key === 'Enter')){
inputElement.value = 0;
 throw new Error("Value smaller than 0 minimum limit");
          }
else{
          inputElement.value = result;
           initializeShape();}
        }

      } catch (error) {
        alert(error.message);
        // If there is an error in the arithmetic operation, retain the original value
        
        initializeShape();
      }
    }
  }

  function isInputBlurred() {
    return document.activeElement !== inputElement;
  }

  inputElement.addEventListener('blur', performCalculation);

  inputElement.addEventListener('keyup', function(event) {
    // Check if the Enter key (key code 13) is pressed
    if (event.key === 'Enter') {
      performCalculation(event); // Pass the event object to performCalculation
    }
  });