class Calculator {
    add(a, b) {
        return a + b;
    }

    subtract(a, b) {
        return a - b;
    }

    multiply(a, b) {
        return a * b;
    }

    divide(a, b) {
        if (b === 0) {
            return "Error";
        }
        return a / b;
    }
}

const calc = new Calculator();
let display = document.getElementById("display");
let expression = "";

function appendValue(value) {
    if (display.textContent === "0") {
        display.textContent = value;
    } else {
        display.textContent += value;
    }
}

function clearDisplay() {
    display.textContent = "0";
}

function deleteLast() {
    display.textContent = display.textContent.slice(0, -1) || "0";
}

function calculate() {
    try {
        let result = eval(display.textContent);
        display.textContent = result;
    } catch {
        display.textContent = "Error";
    }
}