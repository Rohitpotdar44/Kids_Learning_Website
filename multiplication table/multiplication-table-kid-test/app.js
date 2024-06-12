var table = document.getElementById("multiplicationTable");
var userInput = document.getElementById("user-input");
var correctAnswer = document.getElementById("correct-input");
var isUserCorrect = document.getElementById("is-user-correct");
var output = document.getElementById("result");
var btn = document.getElementById("btn");
var one = document.getElementById("one");
var two = document.getElementById("two");
var three = document.getElementById("three");
var four = document.getElementById("four");
var five = document.getElementById("five");
var six = document.getElementById("six");
var seven = document.getElementById("seven");
var eight = document.getElementById("eight");
var nine = document.getElementById("nine");
var ten = document.getElementById("ten");


// correctAnswer.addEventListener("input", function () {
// correctAnswer.addEventListener("change", function () {
btn.addEventListener("click", function () {

    // multiplicationOutput output
    var result = userInput.value * table.value;



    if (userInput.value == "") {
        isUserCorrect.innerHTML = "<div class='alert'>ادخل رقم في الاعلى</div>";
    } else if (correctAnswer.value == result) {
        isUserCorrect.innerHTML = "<div class='green'>YOU ARE CORRECT</div>";
    }
    else {
        isUserCorrect.innerHTML = "<div class='red'>YOU ARE WRONG</div>";
    }

    output.textContent = "" + table.value + " * " + userInput.value + " = " + result;


    // Reset output in case of  empty value
    if (userInput.value == "") {
        output.textContent = "النتيجة: ";
    }
});